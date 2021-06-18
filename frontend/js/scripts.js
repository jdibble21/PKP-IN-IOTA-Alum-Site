
function showLoginForm(){
    var currentStyle = document.getElementById("loginForm").style.display;
    if(currentStyle === "none"){
        document.getElementById("loginForm").style.display = "inline";
    }else{
        document.getElementById("loginForm").style.display = "none";

    }
}

function errorMessage(message){
    alertify.error(message);
}

function successMessage(message){
    alertify.success(message);
}