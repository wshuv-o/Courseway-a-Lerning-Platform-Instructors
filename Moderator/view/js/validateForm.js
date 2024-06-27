function validateForm1() {

        const x = document.getElementById("newsletter");
        const y = document.getElementById("subscriberType");
     
        console.log(x.value)
        console.log(y.value)
        let flag = true;
        if(x.value==="") {
            flag = false;

        }
        if (y.value==="") {
            flag = false;
        }
        if(flag){
            alert("Submitted");
        }else{
            alert("not submitted");
        }
        return flag;

}
function feedback() {

    const x = document.getElementById("fdback");
    const a=document.getElementById("errorfdback")
    console.log(x.value)
    let flag = true;
    if(x.value==="") {
        flag = false; alert("fill up the feedback form");
        a.innerHTML="Empty feedback field";
    }
    return flag;
}