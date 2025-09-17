<?php
    session_start();

    if(isset($_SESSION["userId"]))
    {
        echo "Welcome user. Id: ".$_SESSION["userId"];
        echo "<a href='logout.php'>logout</a>";
    }

    else
    {
        header("Location: login.php");
    }



?>