<!DOCTYPE html>
<html>
    <head>
        <title>Delete Profile | Course Way</title>
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
                            <h2 style="text-align: top;"><b> Delete User Profile </b></h2>
                            <fieldset style="display: inline;background-color: white; color: black;" >
                                <br>
                                    <label for="username">Enter Username :</label>
                                    <input style="height: 20px; width: fit-content ;" type="text" name="username" id="username">
                                    <br><br>
                                    <label for="password">Enter Password :</label>
                                    <input style="height: 20px; width: fit-content" type="text" name="password" id="password">
                                    <br><br>
                                   <input style="height: 25px; width: 75%;" type="submit">
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