// var mysql = require('mysql')
// var con = mysql.createConnection({
//     host: "localhost",
//     user: "user",
//     password: "ped"
//   });
  
//   con.connect(function(err) {
//     if (err) throw err;
//     console.log("Connected!");
//   });

// const bodyParser = require('body-parser');
// app.use(bodyParser.urlencoded({extended: true}));


/*

app.get("/", function(req,res){
    fetchData(res);
    res.sendFile(__dirname + '/login.html') //current directory (__dirname)
});

fetchData(res){
    exexuteQuery("select *from psmgmt", function(result){
        console.log(result);
        response.write("<table><tr>");
        for(var column in result[0]){
            res.write('<td><label>'+column+'</label></td>')
        }
    })
}

app.listen(3000,  function(){
    console.log(`listening at 3000`)
});
*/