    var elements = document.getElementsByClassName("column");

    function listView() {
        for (var i = 0; i < elements.length; i++) 
        {
            elements[i].style.width = "100%";
        }
    }

    function gridView() {
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.width = "50%";
        }
    }

    var btnContainer = document.getElementById("btnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = btnContainer.getElementsByClassName("active");
            if (current.length > 0) {
                current[0].classList.remove("active");
            }
            this.classList.add("active");
        })
    }
