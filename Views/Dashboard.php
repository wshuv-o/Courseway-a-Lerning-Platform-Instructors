<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard | Course Way</title>
        <link  rel="icon" href="icon.png">
        <link rel="stylesheet" href="Styles.css">
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
                            <h2 style="text-align: center;"><b> Profile DashBoard </b></h2>
                            <fieldset style="display: inline;background-color: white; color: black; width:auto" >
                                <table>
                                    <tr>
                                        <td > 
                                            <img src="../Assets/ProfilePic.jpg">
                                        </td>
                                        <td>
                                            <center>
                                             <table>
                                                <tr>
                                                    <td><label>Username :</label></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Name :</label></td>
                                                </tr>
                                                
                                                <tr>
                                                    
                                                    <td><a href="../Views/Profile.php">
                                                        <button type="button" style="width: 150px; height: 30px;">Edit</button>
                                                         </a>
                                                    </td>
                                                </tr>

                                            </table>
                                        </center>
                                        </td>
                                    </tr>
                                </table>
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