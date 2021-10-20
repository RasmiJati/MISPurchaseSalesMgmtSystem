const express = require('express');
const mysql = require('mysql')
var con = mysql.createConnection({
        user: 'root',
        host: 'localhost',
        database: 'psmgmt',
        password: '',
        port: 5432,
    }
)

const bodyParser = require('body-parser');
const app = express();
app.use(bodyParser.urlencoded({extended: true}));
app.use(bodyParser.json())


app.listen(3000, function () {
    console.log('listening on 3000')
});





app.post("/project/:id", function (req, res) {
    var obj = req.body;

    res.send(obj)
})


app.get('/', function (req, res) {
    res.sendFile(__dirname + '/Product.html')
})

app.get('/chart_data', function (req, res) {
    con.connect()
    con.query('SELECT Name, Count(*)  from product group by Name', (err, result) => {

        if(err){
            res.status(500).send(err)
            return
        }
        console.log(result.rows)
        var labels =  result.rows.map((item)=>{
            return item.Name
        })
        console.log(labels)
        var data =  result.rows.map((item)=>{
            return Number(item.count)
        })
       var dataTable = result.rows.map((item)=>{
            return [item.country, item.count]
        })
        console.log(err ? err.stack : result.rows[0].message) 
        res.status(200).send({labels: labels, data: data, result :  dataTable})
    })

})






// const express = require('express');
// const bodyParser =require('body-parser');
// const app = express();
// app.use(bodyParser.urlencoded({
//     extended: true
// }));
// app.use(bodyParser.json())

// app.listen(3000, function () {
//     console.log('listening on 3000')
// });


// app.post("/project/:id", function (req, res) {
//     var obj = req.body;

//     res.send(obj)
// })
// app.get('/', function (req, res) {
//     res.sendFile(__dirname + '/index.html')
// })

// // app.get("/", function(req,res){
// //   res.render("customer"); 
// // });


// var mysql = require('mysql');
// var con = mysql.createConnection({
//   host: "localhost",
//   user: "root",
//   password: "",
//   database: "psmgmt"
// });

// con.connect(function(err) {
//   if (err) throw err;
//   con.query("SELECT * FROM product", function (err, result, fields) {
//     if (err) throw err;
//     console.log(result);
//   });
// });