<?php
    session_start();
    if((isset($_SESSION["userId"])) && isset($_SESSION["role"]))
    {
        if($_SESSION["role"]==1)
        {
            echo "<h1> Welcome Admin. Your User Id is: ".$_SESSION["userId"];
            echo "<br><a href='../logout.php'>logout</a>";
            echo "<br><a href='../admin/addClient.php'>add Client</a>";
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

<doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/style1.css">
    </head>

</html>