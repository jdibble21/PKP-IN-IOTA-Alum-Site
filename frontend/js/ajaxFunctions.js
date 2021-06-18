//All client-server/ server-client functions here

function loginUser(username,password){
    $.ajax({
        type: "POST",
        async: false,
        data: {
            username: username,
            password: password
        },
        url: "../backend/php/handlers/attemptLogin.php",
        success: async function () {
            $.ajax({
                url:"../backend/php/handlers/echoResponse/loginResponse.php",
                cache:false,
                success:function(data){
                    if(data === "G"){
                        successMessage("Welcome Back!")
                        goToAdminDash();
                    }else if(data === "F"){
                        errorMessage("Invalid Login");
                    }
                }
            });
        }
    });
}

function logoutUser(){
    $.ajax({
        type: "POST",
        async: false,
        data: {

        },
        url: "../backend/php/handlers/logoutAdmin.php",

    });
    window.location.href = "/Pages/AlumniHome.php";
}

function goToAdminDash(){
    window.location.href = "/Pages/Admin/adminDashboard.php";
}