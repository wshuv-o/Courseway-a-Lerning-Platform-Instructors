function validate() {
    const x = document.getElementById("usnameLogin");
    const y = document.getElementById("PASSLogin");

    const a = document.getElementById("error1");
    const b = document.getElementById("error2");

    let flag = true;

    if (x.value === "") {
        a.innerHTML = "Please fill up the username";
        flag = false;
    }

    if (y.value === "") {
        b.innerHTML = "Please fill up the password";
        flag = false;
    }

    if (!flag) {
        console.log("Username error:", a.innerHTML);
        console.log("Password error:", b.innerHTML);
        alert("Please fill up all the required fields.");
        return false;
    }
    return true;
}
