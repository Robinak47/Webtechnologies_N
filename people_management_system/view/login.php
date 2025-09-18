<?php
    session_start();

    if(isset($_SESSION["userId"]) && isset($_SESSION["role"]))
    {
        if($_SESSION["role"]==1)
        {
            header("Location:admin/home.php");   
        }

        elseif($_SESSION["role"]==2)
        {
            header("Location:employee/home.php");   
        }
        else
        {
            header("Location:client/home.php");   
        }
    }


?>


<!doctype html>
<html>
    <head></head>
    <body>
        <form action="../controller/authController.php" method="POST">
            <label for ="userId">User id:</label>
            <input type="text" name="userId"></br>
            <span name="userIdErr" style="color:red;"><?php if(isset($_GET["idErr"])) { echo $_GET["idErr"]; } ?></span><br>
            <label for ="pass">Pass:</label>
            <input type="text" name="pass"></br>
            <span name="passErr" style="color:red;"><?php if(isset($_GET["passErr"])) { echo $_GET["passErr"]; } ?></span>
            <input type="submit" name="submit" value="login"><br>
            <span name="invalidErr" style="color:red;"><?php if(isset($_GET["invalidUser"])) { echo $_GET["invalidUser"]; } ?></span>
        </form>
    </body>
</html>