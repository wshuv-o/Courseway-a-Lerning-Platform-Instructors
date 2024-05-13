function updateprofileJS() {
    var fullname = document.getElementsByName("fullname")[0].value;
    var username = document.getElementsByName("username")[0].value;
    var phone = document.getElementsByName("phone")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var password = document.getElementsByName("password")[0].value;
    var confirmPassword = document.getElementsByName("confirm_password")[0].value;

    if (fullname.trim() === "") {
        alert("Please enter your full name");
        return false;
    }

    if (username.trim() === "") {
        alert("Please enter a username");
        return false;
    }

    if (phone.trim() === "") {
        alert("Please enter a phone number");
        return false;
    }

    if (email.trim() === "") {
        alert("Please enter an email address");
        return false;
    }

    if (password.trim() === "") {
        alert("Please enter a password");
        return false;
    }

    if (confirmPassword.trim() === "") {
        alert("Please confirm your password");
        return false;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match");
        return false;
    }

    return true;
}
function forgetpassValidateJS() {
    var otpCode = document.getElementsByName("OTPCODE")[0].value;

    if (otpCode.trim() === "") {
        alert("Please enter the OTP Code for verification");
        return false;
    }

    return true;
}
function forgetpassRetrievedValidateJS() {
    var newPassword = document.getElementsByName("newpass")[0].value;
    var confirmPassword = document.getElementsByName("conpass")[0].value;

    if (newPassword.trim() === "") {
        alert("Please fill up the new password field");
        return false;
    }

    if (confirmPassword.trim() === "") {
        alert("Please fill up the confirm password field");
        return false;
    }

    if (newPassword !== confirmPassword) {
        alert("Both passwords don't match");
        return false;
    }

    return true;
}