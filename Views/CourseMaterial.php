<!DOCTYPE html>
<html>
    <head>
        <title>Course Material | Course Way</title>
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
                           <?php include "Template\sidebar.php";?>
                           </td>
                           <td style="width: 100%;">
                            <div style="text-align: center !important">
                            <h2 style="text-align: center;"><b> Course Material </b></h2>
                            <fieldset style="background-color: white; color: black;/* overflow: auto; display: inline-block">
                                        <br>
                                        <center>
                                        <div class="row">
                                        <div class="column" style="background-color:#aaa;">
                                            <h2>Astro Physic</h2>
                                            <p>Text book | Solved</p>
                                            <a href="../Views/ResourceDetails.php">
                                            <button type="button"style="width: 50%; height: 30px;">View</button>
                                            </a>
                                            
                                        </div>
                                        <div class="column" style="background-color:#bbb;">
                                            <h2>Advanced Webtech</h2>
                                            <p>The world of js</p>
                                            <a href="../Views/ResourceDetails.php">
                                            <button type="button"style="width: 50%; height: 30px;">View</button>
                                            </a>
                                        </div>
                                        </div>

                                        <div class="row">
                                        <div class="column" style="background-color:#ccc;">
                                            <h2>Python 3.0</h2>
                                            <p>Volume 5</p>
                                            <a href="../Views/ResourceDetails.php">
                                            <button type="button"style="width: 50%; height: 30px;">View</button>
                                            </a>
                                        </div>
                                        <div class="column" style="background-color:#ddd;">
                                            <h2>.net</h2>
                                            <p>Framework and testing</p>
                                            <a href="../Views/ResourceDetails.php">
                                            <button type="button"style="width: 50%; height: 30px;">View</button>
                                            </a>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="column" style="background-color:#ccc;">
                                            <h2>Python 3.0</h2>
                                            <p>Volume 5</p>
                                            <a href="../Views/ResourceDetails.php">
                                            <button type="button"style="width: 50%; height: 30px;">View</button>
                                            </a>
                                        </div>
                                        <div class="column" style="background-color:#ddd;">
                                            <h2>.net</h2>
                                            <p>Framework and testing</p>
                                            <a href="../Views/ResourceDetails.php">
                                            <button type="button"style="width: 50%; height: 30px;">View</button>
                                            </a>
                                        </div>
                                        </div>
                                        </center>

                                  
                                   
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