<?php
    session_start();
    if((isset($_SESSION["userId"])) && isset($_SESSION["role"]))
    {
        if($_SESSION["role"]==1)
        {
        
        }

        else
        {
            header("Location: ../login.php");
        }
        
    }

    else
    {
        header("Location: ../login.php");
    }


?>


<!doctype html>
<html>
    <head></head>
    <body>
    <form action="../../controller/addClientValidation.php" method="POST">
        <label for="id">Client id: </label>
        <input type="text" name="id"><br>
        <span style="color:red"><?php if(isset($_GET["idErr"])){echo $_GET["idErr"];}?></span><br>
        <label for="pass">Client pass: </label>
        <input type="text" name="pass"><br>
        <span style="color:red"><?php if(isset($_GET["passErr"])){echo $_GET["passErr"];}?></span><br>
        <label for="role">Client role: </label>
        <input type="number" name="role"><br>
        <span style="color:red"><?php if(isset($_GET["roleErr"])){echo $_GET["roleErr"];}?></span><br>
        <label for="status">Client status: </label>
        <input type="text" name="status"><br>
        <span style="color:red"><?php if(isset($_GET["statusErr"])){echo $_GET["statusErr"];}?></span><br>
        <input type="submit" name="submit" value="submit">
        <span style="color:red"><?php if(isset($_GET["message"])){echo $_GET["message"];}?></span><br>

    </form>
    </body>
</html>