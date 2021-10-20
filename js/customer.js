const express = require('express');
var mysql = require('mysql')
var con = mysql.createConnection({
        user: 'root',
        host: 'localhost',
        database: 'psmgmt',
        password: '',
        port: 5432,
    }
);

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

// app.get("/abc", function (req, res) {
//     res.send("Hello abc")
// })
//
app.get('/', function (req, res) {
    res.sendFile(__dirname + '/customer.html')
})
//
// app.post("/login", (req, res)=>{
//    var e=  res.body.username;
//    var p = req.body.password;
//
//    res.status(200).send()
// })

app.get('/chart_data', function (req, res) {
    // var labels = ["2012", "2013", "2014", "2014", "2015"];
    // var data = [100, 5267, 734, 784, 433]
    // res.status(200).send({labels: labels, data: data})
    con.connect()
    con.query('SELECT Name, Count(*)  from customer group by Name', (err, result) => {

        if(err){
            res.status(500).send(err)
            return
        }
        console.log(result.rows)
        // ["nepal","india", "usa" ]
        var labels =  result.rows.map((item)=>{
            return item.country
        })
        console.log(labels)
        var data =  result.rows.map((item)=>{
            return Number(item.count)
        })
       var dataTable = result.rows.map((item)=>{
         // { country: 'Nepal', count: '3' },
           //[Nepal, 3]
           return [item.country, item.count]
        })
       // dataTbale = [["nepal", 2] , ["indiia", 4]]
        console.log(err ? err.stack : result.rows[0].message) // Hello World!
        res.status(200).send({labels: labels, data: data, result :  dataTable})
    })

})

