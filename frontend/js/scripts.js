/*!
* Start Bootstrap - Modern Business v4.3.0 (https://startbootstrap.com/template-overviews/modern-business)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-modern-business/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

function showLoginForm(){
    var currentStyle = document.getElementById("loginForm").style.display;
    if(currentStyle === "none"){
        document.getElementById("loginForm").style.display = "inline";
    }else{
        document.getElementById("loginForm").style.display = "none";

    }
}