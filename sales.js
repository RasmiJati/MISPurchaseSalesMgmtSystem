import "./styles.css";

import cubejs from "@cubejs-client/core";
import Chart from "chart.js/auto";
import moment from "moment";
import flatpickr from "flatpickr";

const cubejsApi = cubejs(
  "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOjE1OTQ2NjY4OTR9.0fdi5cuDZ2t3OSrPOMoc3B1_pwhnWj4ZmM3FHEX7Aus",
  { apiUrl: "https://ecom.cubecloudapp.dev/cubejs-api/v1" }
);

let chart;

var drawChart = function (startDate, endDate) {
  cubejsApi
    .load({
      measures: ["Orders.count"],
      timeDimensions: [
        {
          dimension: "Orders.createdAt",
          granularity: `day`,
          dateRange: [startDate, endDate]
        }
      ]
    })
    .then((resultSet) => {
      if (chart) {
        chart.data = chartJsData(resultSet);
        chart.update();
      } else {
        chart = new Chart(document.getElementById("chart"), {
          type: "line",
          options: {},
          data: chartJsData(resultSet)
        });
      }
    });
};

const MIN_DATE = "2020-08-01";
const MAX_DATE = "2020-09-01";

flatpickr("#dates", {
  mode: "range",
  dateFormat: "Y-m-d",
  defaultDate: [MIN_DATE, MAX_DATE],

  onChange: function (selectedDates) {
    if (selectedDates.length === 2) {
      drawChart(selectedDates[0], selectedDates[1]);
    }
  }
});

drawChart(MIN_DATE, MAX_DATE);

var chartJsData = function (resultSet) {
  return {
    datasets: [
      {
        label: "Orders Count",
        data: resultSet.chartPivot().map(function (r) {
          return r["Orders.count"];
        }),
        backgroundColor: "rgb(255, 99, 132)"
      }
    ],
    labels: resultSet.categories().map(function (c) {
      return moment(c.x).format("DD MMM");
    })
  };
};





// <!DOCTYPE html>
// <html>
//   <head>
//     <title>Chart.js Example with Dynamic Dataset</title>
//     <meta charset="UTF-8" />
//     <link
//       rel="stylesheet"
//       href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
//     />
//   </head>

//   <body>
//     <div id="app"></div>

//     <input id="dates" style="font-size: 20pt;" />
//     <canvas id="chart"></canvas>

//     <script src="src/index.js"></script>
//   </body>
// </html>
