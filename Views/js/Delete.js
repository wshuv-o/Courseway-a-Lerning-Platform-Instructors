document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        var username = form.querySelector("input[name='username']").value.trim();
        var password = form.querySelector("input[name='password']").value.trim();

        var isValid = true;

        if (username === "") {
            isValid = false;
            alert("Please enter your username.");
        }

        if (password === "") {
            isValid = false;
            alert("Please enter your password.");
        }

        if (isValid) {
            form.submit();
        }
    });
});
