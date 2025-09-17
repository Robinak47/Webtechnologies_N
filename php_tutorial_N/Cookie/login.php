<?php 
    
    if(isset($_COOKIE["userId"]))
    {
        header("Location: home.php");
    }

?>

<!doctype html>
<html>
    <head></head>
    <body>
        <form action="validator.php" method="POST">
            <label for="userId">User Id: </label>
            <input type="text" name="userId"><br>

            <label for="pass">Pass: </label>
            <input type="text" name="pass"><br>

            <input type="submit" name="submit" value="login"><br>
            <span name="err" style="color:red;"><?php if(isset($_GET["err"])){echo $_GET["err"];} ?></span>

        </form>
    </body>
</html>