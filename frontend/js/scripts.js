
function showLoginForm(){
    var currentStyle = document.getElementById("loginForm").style.display;
    if(currentStyle === "none"){
        document.getElementById("loginForm").style.display = "inline";
    }else{
        document.getElementById("loginForm").style.display = "none";

    }
}
