<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
    crossorigin="anonymous"></script>
  <title>Purchase and Sales Mgmt System</title>
  <style>
    th{
      border: 2px solid #e6e6e6;
      text-align: center;
    }
    tr{
      border: 2px solid #e6e6e6;
    }
    td{
      border: 2px solid #e6e6e6;
    }
  </style>
</head>

<body class="sb-nav-fixed">

  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.php">PurchaseSalesMgmt</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
        class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
          aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
      </div>
    </form>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="login.html">Log out</a>
      </div>
    </div>


    <!-- Navbar-->
    <!-- <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#!">Settings</a></li>
          <li><a class="dropdown-item" href="#!">Activity Log</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="#!">Logout</a></li>
        </ul>
      </li>
    </ul> -->
  </nav>



  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="index.php">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>

            <a class="nav-link collapsed" href="Product.php" data-bs-toggle="collapse"
              data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fab fa-product-hunt"></i></div>
              Product
              <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
            </a>
            <!-- <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="layout-static.html">Static Navigation</a>
                <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
              </nav>
            </div> -->
            <a class="nav-link collapsed" href="Purchase.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
              aria-expanded="false" aria-controls="collapsePages">
              <div class="sb-nav-link-icon"><i class="fas fa-truck-loading"></i></div>
              Purchase
            </a>

            <a class="nav-link collapsed" href="Sales.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
              aria-expanded="false" aria-controls="collapsePages">
              <div class="sb-nav-link-icon"><i class="fas fa-shopping-bag"></i></div>
              Sales
            </a>
            <a class="nav-link collapsed" href="Company.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
              aria-expanded="false" aria-controls="collapsePages">
              <div class="sb-nav-link-icon"><i class="fas fa-warehouse"></i></div>
              Company
            </a>
            <a class="nav-link collapsed" href="Customer.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
              aria-expanded="false" aria-controls="collapsePages">
              <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
              Customer
            </a>
            <a class="nav-link collapsed" href="Profit.php" data-bs-toggle="collapse" data-bs-target="#collapsePages"
              aria-expanded="false" aria-controls="collapsePages">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-line"></i></div>
              Profit
            </a>
            <div class="sb-sidenav-menu-heading">Report</div>
              <a class="nav-link" href="charts.html">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Daily
              </a>
              <a class="nav-link" href="tables.html">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Weekly
              </a>
              <a class="nav-link" href="charts.html">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Monthly
              </a>
              <a class="nav-link" href="tables.html">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Yearly
              </a>
          </div>
        </div>
        <div class="sb-sidenav-footer">
          <div class="small">Logged in as:</div>
         Admin
        </div>
      </nav>
    </div>


    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h1 class="mt-4">Product Detail</h1>
          <ol class="breadcrumb mb-4">

          </ol>




          <div class="row">
             
             <!-- Col 1 Area Chart -->
             <div class="col-xl-6">
 
               <div class="card mb-4">
 
                 <!-- card header -->
                 <div class="card-header">
                   <i class="fas fa-chart-area me-1"></i>
                       Area Chart 
                 </div>
                 
                 <!-- card body -->
                 <div class="card-body">
                   <div id="chart_div" style="width: 500px; height: 400px;"></div>  
                   <!-- <canvas id="myAreaChart" width="100%" height="40"></canvas> -->
                 </div>
 
               </div>
             </div>
 
             <!-- col 2 Bar chart -->
             <div class="col-xl-6">
               <div class="card mb-4">
 
                 <!-- card header -->
                 <div class="card-header">
                   <i class="fas fa-chart-bar me-1"></i>
                        Bar Chart 
                 </div>
               
                 <!-- card body -->
                 <div class="card-body">
                   <div id="columnchart_material" style="width: 500px; height: 400px;"></div>  
                   <!-- <canvas id="myBarChart" width="100%" height="40"></canvas>-->
                 </div>
 
               </div>
 
             </div>
 
           </div> 
 
          <div class="card mb-4">
            <div class="card-header">
              <i class="fas fa-table me-1"></i>
              Product Data
            </div>
            <div class="card-body">
              <table id="datatablesSimple">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Product_Name</th>
                    <th scope="col">Purchase_Unit</th>
                    <th scope="col">Sales_Unit</th>
                    <th scope="col">Available</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  include "inc/db_connects.php";
                  $run = mysqli_query($con,"select *from purchase");
                  while($row = mysqli_fetch_array($run))
                  {
                      $showid = $row[0];
                      $showname = $row[1];
                      $showpurchase = $row[2];
                      $showsales = $row[3];
                      $showstock = $row[4];
                      $showstatus = $row[5];
                      echo "<tr align = 'center'>
                              <td>$showid</td>
                              <td>$showname</td>
                              <td>$showpurchase</td>
                              <td>$showsales</td>
                              <td>$showstock</td>
                              <td>$showstatus</td>
                          </tr>";
                  }
              ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </main>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Rasmi Jati</div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  </main>
  </div>
  </div>


  <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
    crossorigin="anonymous"></script>

  <script src="dashboard.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script>
    var purchase = document.getElementById("purchase").value;
    var sales = document.getElementById("sales").value;
   
    window.onload = function()
    {
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };
        var config = {
            type: 'bar',
            data: {
                borderColor : "#fffff",
                datasets: [{
                    data: [
                        Purchase,
                        Sales
                    ],
                    borderColor : "#fff",
                    borderWidth : "3",
                    hoverBorderColor : "#000",

                    label: 'Purchase and Sales Report',

                    backgroundColor: [
                        "#0190ff",
                        "#56d798",
                        "#ff8397",
                        "#6970d5",
                        "#f312cb",
                        "#ff0060",
                        "#ffe400"

                    ],
                    hoverBackgroundColor: [
                        "#f38b4a",
                        "#56d798",
                        "#ff8397",
                        "#6970d5",
                        "#ffe400"
                    ]
                }],

                labels: [
                    'Purchase',
                    'Sales'
                ]
            },

            options: {
                responsive: true

            }
        };
        var ctx = document.getElementById('myChart').getContext('2d');
        window.myPie = new Chart(ctx, config);


    };
</script> -->




<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


 <!-- Bar chart -->
 <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['2019', 1170, 460, 250],
          ['2020', 660, 1120, 300],
          ['2021', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Performance',
            subtitle: 'Sales, Expenses, and Profit: 2019-2021',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>






 <!-- Area chart-->
 <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2019',  1170,      460],
          ['2020',  660,       1120],
          ['2021',  1030,      540]
        ]);

        var options = {
          title: 'Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>