<!DOCTYPE html>
<html>
    <head>
        <title>Courses | Course Way</title>
        <link  rel="icon" href="icon.png">
        <link rel="stylesheet" href="Styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>              * {
                    box-sizing: border-box;
                }
                
                .column {
                    float: left;
                    width: 50%;
                    padding: 10px;
                }

                .row:after {
                    content: "";
                    display: table;
                    clear: both;
                }
                
                .btn {
                    border: none;
                    outline: none;
                    padding: 12px 16px;
                    background-color: #f1f1f2;
                    cursor: pointer;
                }
                
                .btn:hover {
                    background-color: #ddd;
                }
                
                .btn.active {
                    background-color: #666;
                    color: white;
                }
            </style>
    </head>
    <body>
        <fieldset>
            <table>
                <tr>
                <fieldset>
                        <center>
                            <img id="i1" src="../Views/logo.png"
                        </center>
                    </fieldset>
                </tr>
                <tr>
                    <table>
                        <tr>
                           <td>
                           <?php include "Template\sidebar.php";?>
                           </td>
                           <td style="width: 100%;">
                            <div style="text-align: center !important">
                            <h2 style="text-align: center;"><b> Enrolled Course </b></h2>
                            <fieldset style="display: block;background-color: white; color: black;" >
                                                                
                                <div id="btnContainer">
                                <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
                                <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
                                </div>
                                <br>

                                <div class="row">
                                <div class="column" style="background-color:#aaa;">
                                    <h2>WebTech</h2>
                                    <p>Some text..</p>
                                    <a href="../Views/RegisteredCourses.php">
                                        <button type="button"style="width: 50%; height: 30px;">View</button>
                                    </a>
                                </div>
                                <div class="column" style="background-color:#bbb;">
                                    <h2>Chemistry</h2>
                                    <p>Some text..</p>
                                    <a href="../Views/RegisteredCourses.php">
                                        <button type="button"style="width: 50%; height: 30px;">View</button>
                                    </a>
                                </div>
                                </div>

                                <div class="row">
                                <div class="column" style="background-color:#ccc;">
                                    <h2>Data Communications</h2>
                                    <p>Some text..</p>
                                    <a href="../Views/RegisteredCourses.php">
                                        <button type="button"style="width: 50%; height: 30px;">View</button>
                                    </a>
                                </div>
                                <div class="column" style="background-color:#ddd;">
                                    <h2>Microprocessor and Embedded System</h2>
                                    <p>Some text..</p>
                                    <a href="../Views/RegisteredCourses.php">
                                        <button type="button"style="width: 50%; height: 30px;">View</button>
                                    </a>
                                </div>
                                </div>

                                <script>
                                // Get the elements with class="column"
                                var elements = document.getElementsByClassName("column");

                                // Declare a loop variable
                                var i;

                                // List View
                                function listView() {
                                for (i = 0; i < elements.length; i++) {
                                    elements[i].style.width = "100%";
                                }
                                }

                                // Grid View
                                function gridView() {
                                for (i = 0; i < elements.length; i++) {
                                    elements[i].style.width = "50%";
                                }
                                }
                                    var container = document.getElementById("btnContainer");
                                    var btns = container.getElementsByClassName("btn");
                                    for (var i = 0; i < btns.length; i++) {
                                    btns[i].addEventListener("click", function() {
                                        var current = document.getElementsByClassName("active");
                                        current[0].className = current[0].className.replace(" active", "");
                                        this.className += " active";
                                    });
                                    }
                                    </script>

                            </fieldset>
                        </div>
                           </td></tr>
                    </table>
                </tr>
                <tr>
                    <fieldset >
                        <br>
                        <br>
                        <br>
                    </fieldset>
                </tr>
            </table>
           </fieldset>
    </body>
</html>