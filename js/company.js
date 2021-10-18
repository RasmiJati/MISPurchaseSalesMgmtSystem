var http = require('http');  
var MongoClient = require('mongodb').MongoClient;  
var url = "mongodb://localhost:27017/psmgmt";  
MongoClient.connect(url, function(err, db) {  
  if (err) throw err;  
  db.collection("company").find({}, function(err, result) {  
    if (err) throw err;  
    console.log(result.name);  
    db.close();  
  });  
});  


// var mysql = require('mysql');
// var express = require('express');
// var app = express();
// const bodyParser = require('body-parser');
// app.use(bodyParser.urlencoded({extended: true}));
// //to get to localhost:8090

// app.get("/", function(request, response){
//     fetchData(response);
//     console.log('Data displayed!!');
// });

// //to connect to database
// var db = mysql.createConnection({
//     host: 'localhost',
//     user: 'user',
//     password: 'password',
//     database: 'psmgmt'
// });

// //create connection with database

// db.connect(function(error){
//     if(error){
//         throw error;
//     }
//     console.log("Connected to database.");
// })

// //functions.........
// function executeQuery(sql, cb){ //cb is any function
//     db.query(sql, function(error, result, fields){
//         if(error){
//             throw error;
//         }
//         cb(result);
//     })
// } 


// function fetchData(response){
//     executeQuery("Select *from comapany", function(result){
//         console.log(result);
//         response.write('<table><tr>');
//         for(var column in result[0]){
//             response.write('<td><label>' + column + '</label></td>');
//             response.write('</tr>');
//         }
//         for(var row in result){
//             response.write('<tr>');

//             for(var column in result[row]){
//             response.write('<td><label>' + result[row][column] + '</label></td>');
//             }
//             response.write('</tr>');
//         }
//         response.end('</table>');
//     });
// }
// //..........
// app.listen(8090, function(){
//     console.log('Listening to port 8090'); // to listen at port
// });
