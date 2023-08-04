var doc_sub = document.getElementById("doc_subimt")
var doc_user = document.getElementById("userName")
var doc_pass = document.getElementById("Password")

var database = [
    {
        user:"million",
        password:"0123"
    }
]

doc_sub.addEventListener("click", function(){
    if(doc_user === database[0].user && doc_pass === database[0].password){
        console.log("you are logged in.")
    }else{
        console.log("who the hell are you?")
    }
})