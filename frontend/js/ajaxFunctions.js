//All client-server/ server-client functions here

function loginUser(username,password){
    $.ajax({
        type: "POST",
        async: false,
        data: {
            username: username,
            password: password
        },
        url: "../backend/php/handlers/attemptLogin.php"
    });
}