const express = require('express');
const app = express();
const bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({extended: true}));


app.listen(300,  function(){
    console.log(`listening at 3000`)
});

app.get("/", function(req,res){
    res.sendFile(__dirname + '/index.html') //current directory (__dirname)
});

