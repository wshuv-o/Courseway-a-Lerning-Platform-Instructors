document.addEventListener("DOMContentLoaded", function() {
    // Get the form element
    var form = document.querySelector("form");

    // Add event listener for form submission
    form.addEventListener("submit", function(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Validate the form fields
        var fullname = form.querySelector("input[name='fullname']").value.trim();
        var phone = form.querySelector("input[name='phone']").value.trim();
        var bloodgroup = form.querySelector("select[name='bloodgroup']").value;

        var isValid = true;

        if (fullname === "") {
            isValid = false;
            alert("Please enter your full name.");
        }

        if (phone === "") {
            isValid = false;
            alert("Please enter your phone number.");
        } else if (!/^\d{10}$/.test(phone)) {
            isValid = false;
            alert("Please enter a valid 10-digit phone number.");
        }

        if (bloodgroup === "") {
            isValid = false;
            alert("Please select your blood group.");
        }

        if (isValid) {
            form.submit();
        }
    });
});