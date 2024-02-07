function login_validate() {
    $(".error_msg").html('');
    var username = $("#username").val();
    var password = $("#password").val();
    if (username == "" && password == "") {
        $("#username_error").html('Enter your username');
        $("#password_error").html('Enter your password');
        return false;
    } else if (username == "") {
        $("#username_error").html('Enter your username');
        return false;
    } else if (password == "") {
        $("#password_error").html('Enter your password');
        return false;
    } else {
        $(".error_msg").html('');
        return true;
    }
}
