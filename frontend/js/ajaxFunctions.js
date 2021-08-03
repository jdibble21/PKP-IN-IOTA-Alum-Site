//All client-server / server-client functions here

function loginUser(username,password){
    $.ajax({
        type: "POST",
        async: false,
        data: {
            username: username,
            password: password
        },
        url: "/backend/php/handlers/attemptLogin.php",
        success: async function () {
            $.ajax({
                url:"/backend/php/handlers/echoResponse/loginResponse.php",
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
        url: "/backend/php/handlers/logoutAdmin.php",
    });
    window.location.href = "/Pages/AlumniHome.php";
}

function getAdminDashHome(){
    $.ajax({
        url:"/backend/php/handlers/echoResponse/getDashHome.php",
        cache:false,
        success:function(data){
            document.getElementById("rendContainer").innerHTML = "<h3 class='mt-3' style='text-align: center; color: #FFFFFF;'>Dashboard Home</h3>" + data;
        }
    });
}
function getAdminDashUpload(){
    $.ajax({
        url:"/backend/php/handlers/echoResponse/getDashUpload.php",
        cache:false,
        success:function(data){
            document.getElementById("rendContainer").innerHTML = "<h3 class='mt-3' style='text-align: center; color: #FFFFFF'>Newsletter Upload</h3>" + data;
        }
    });
}
function getExportDataModule(){
    $.ajax({
        url:"/backend/php/handlers/echoResponse/getDashExport.php",
        cache:false,
        success:function(data){
            document.getElementById("rendContainer").innerHTML = "<h3 class='mt-3' style='text-align: center; color: #FFFFFF'>Export Records (WIP)</h3>" + data;
        }
    });
}
function getUserAccountModule(){
    $.ajax({
        url:"/backend/php/handlers/echoResponse/getUserAccountResponse.php",
        cache:false,
        success:function(data){
            document.getElementById("rendContainer").innerHTML = "<h3 class='mt-3' style='text-align: center; color: #FFFFFF'>User Accounts</h3>" + data;
        }
    });
}
function deleteNewsletter(newsID, title){
    alertify.confirm("Delete Newsletter", "Are you sure you want to delete the "+title+" newsletter?",
        function(){
            successMessage('NewsLetter Deleted');
            $.ajax({
                type: "POST",
                async: false,
                data: {
                    newsID: newsID,
                },
                url: "/backend/php/handlers/deleteNewsletter.php",
            });
            window.location.href = "/Pages/Admin/adminDashboard.php";
        },
        function(){
            noticeMessage('Cancelled Delete');
        });
}

function goToAdminDash(){
    window.location.href = "/Pages/Admin/adminDashboard.php";
}