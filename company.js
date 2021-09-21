var mysql = require('mysql')
var con = mysql.createConnection({
    host: "localhost",
    user: "user",
    password: "ped"
  });
  
  con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
  });