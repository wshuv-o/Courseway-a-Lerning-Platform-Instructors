<!DOCTYPE html>
<html>
    <head>
        <title>Browse | Course Way</title>
        <link  rel="icon" href="icon.png">
        <link rel="stylesheet" href="Styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            * {
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
            background-color: #f1f1f1;
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
                           <?php include "Template\Sidebar.php";?>
                           </td>
                           <td style="width: 100%;">
                            <div style="text-align: center !important">
                            <h2 style="text-align: center;"><b> Browse Course </b></h2>
                            <fieldset style="/* display: inline; */background-color: white;color: black;">
                                <br>
                                <form action="" method="GET">
                                    <input type="text" name="search" placeholder="Search...">
                                    <input type="submit" value="Search">
                                </form>
                                <br>
                                <div class="row">
                                    <div class="column" style="background-color:#aaa;">
                                        <h2>Advanced Webtech</h2>
                                        <p>Some text..</p>
                                            <a href="../Views/CourseDetails.php">
                                            <button type="button"style="width: 50%; height: 30px;">View</button>
                                            </a>
                                        
                                    </div>
                                    <div class="column" style="background-color:#bbb;">
                                        <h2>Operating Sytem</h2>
                                        <p>Some text..</p>
                                            <a href="../Views/CourseDetails.php">
                                            <button type="button"style="width: 50%; height: 30px;">View</button>
                                            </a>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="column" style="background-color:#ccc;">
                                        <h2>Computer Network</h2>
                                        <p>Some text..</p>
                                            <a href="../Views/CourseDetails.php">
                                            <button type="button"style="width: 50%; height: 30px;">View</button>
                                            </a>
                                    </div>
                                    <div class="column" style="background-color:#ddd;">
                                        <h2>Research Methodology</h2>
                                        <p>Some text..</p>
                                            <a href="../Views/CourseDetails.php">
                                            <button type="button"style="width: 50%; height: 30px;">View</button>
                                            </a>
                                    </div>
                                </div>
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