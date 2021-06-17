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
                    alert(data);
                    if(data === "G"){
                        goToAdminDash();
                    }
                }
            });
        }
    });
}

function goToAdminDash(){
    window.location.href = "/Pages/Admin/adminDashboard.php";
}