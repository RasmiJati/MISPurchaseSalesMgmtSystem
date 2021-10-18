// const express = require('express');
// const app = express();
// const bodyParser = require('body-parser');
// app.use(bodyParser.urlencoded({extended: true}));


// app.listen(300,  function(){
//     console.log(`listening at 3000`)
// });

// app.get("/", function(req,res){
//     res.sendFile(__dirname + '/login.html') //current directory (__dirname)
// });

const express = require('express');
const bodyParser = require('body-parser');
const mongoose = require("mongoose");
const ejs = require('ejs');

mangoose.connect('mongodb://localhoat:27017/psmgmt',{
    useNewUrlParser : true,
    useUnifiedTopology: true
});

const customerSchema = mongoose.Schema({
    _id: Number,
    FirstName: String,
    LastName: String,
    Gender: String,
    Email: String,
    Phone: String
});

const user = mongoose.model("customer",customerSchema);

const app = express();
app.set("view engine","ejs");

app.use(bodyParser.urlencoded({extended: true}));
app.use(bodyParser.json());

app.use(express.static("public"));


app.get("/", function(req,res){
   res.render("customer"); 
});

app.listen(300,  function(){
    console.log(`listening at 3000`)
});

