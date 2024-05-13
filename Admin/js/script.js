function validateForm() {
    var email = document.getElementById("email").value;
    var fullname = document.getElementById("fullname").value;
    var phone = document.getElementById("phone").value;
    var bloodgroup = document.getElementById("bloodgroup").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    var emailRegex = /\S+@\S+\.\S+/;
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }

    if (fullname.trim() === "" || phone.trim() === "" || bloodgroup.trim() === "" || username.trim() === "" || password.trim() === "") {
        alert("Please fill out all fields");
        return false;
    }

    return true;
}
function validateLogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username.trim() === "") {
        alert("Please enter your username");
        return false;
    }

    if (password.trim() === "") {
        alert("Please enter your password");
        return false;
    }

    return true;
}
function validateSignup() {
    var email = document.getElementById("email").value;
    var fullname = document.getElementById("fullname").value;
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;

    var emailRegex = /\S+@\S+\.\S+/;

    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }

    if (fullname.trim() === "") {
        alert("Please enter your full name");
        return false;
    }

    if (phone.trim() === "" || !/^[0-9]+$/.test(phone)) {
        alert("Please enter a valid phone number");
        return false;
    }

    if (address.trim() === "") {
        alert("Please enter your address");
        return false;
    }

    if (username.trim() === "") {
        alert("Please enter a username");
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
function updateprofileValidate() {
    var email = document.getElementById("upemail").value;
    var fullname = document.getElementById("upfullname").value;
    var phone = document.getElementById("upphone").value;
    var address = document.getElementById("upaddress").value;

    var emailRegex = /\S+@\S+\.\S+/;

    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }

    if (fullname.trim() === "") {
        alert("Please enter your full name");
        return false;
    }

    if (phone.trim() === "" || !/^[0-9]+$/.test(phone)) {
        alert("Please enter a valid phone number");
        return false;
    }

    if (address.trim() === "") {
        alert("Please enter your address");
        return false;
    }

    return true;
}
function validateForm1fp() {
    var email = document.getElementById("email1").value;
    
    if (email.trim() === "") {
        alert("Please enter your email address");
        return false;
    }
    
    return true;
}

function validateForm2fp() {
    var newpass = document.getElementById("newpass").value;
    var conpass = document.getElementById("conpass").value;

    if (newpass.trim() === "" || conpass.trim() === "") {
        alert("Please fill up all fields");
        return false;
    }

    if (newpass !== conpass) {
        alert("Passwords don't match");
        return false;
    }

    return true;
}