document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        var password = form.querySelector("input[name='password']").value.trim();
        var confirm_password = form.querySelector("input[name='Cpassword']").value.trim();

        var isValid = true;

        if (password === "") {
            isValid = false;
            alert("Please enter your new password.");
        }

        if (confirm_password === "") {
            isValid = false;
            alert("Please confirm your new password.");
        } else if (password !== confirm_password) {
            isValid = false;
            alert("Passwords do not match. Please enter the same password in both fields.");
        }

        if (isValid) {
            form.submit();
        }
    });
});
