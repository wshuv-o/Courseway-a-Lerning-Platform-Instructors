function validate() {
    const p = document.getElementById("category");
    const q = document.getElementById("course_title");
    const r = document.getElementById("price");    
    const s = document.getElementById("description");
    const t = document.getElementById("sub_category");

    const a = document.getElementById("error1");
    const b = document.getElementById("error2");
    const c = document.getElementById("error3");
    const d = document.getElementById("error4");   
    const e = document.getElementById("error5");
    let flag = true;

    if (p.value === "") {
        a.innerHTML = "Please fill up the category";
        flag = false;
    }

    if (q.value === "") {
        b.innerHTML = "Please fill up the course  title";
        flag = false;
    }
    if (r.value === "") {
        c.innerHTML = "Please fill up the price";
        flag = false;
    }
    if (s.value === "") {
        d.innerHTML = "Please fill up the description";
        flag = false;
    }
    if (t.value === "") {
        e.innerHTML = "Please fill up the subcategory";
        flag = false;
    }

    if (!flag) {
        console.log("Category error:", a.innerHTML);
        console.log("Course title error:", b.innerHTML);
        console.log("Price error:", c.innerHTML);
        console.log("Description error:", d.innerHTML);
        console.log("Subcategory error:", e.innerHTML);

        alert("Please fill up all the required fields.");
        return false;
    }
    return flag;
}
