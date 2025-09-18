<?php
    session_start();
    if((isset($_SESSION["userId"])) && isset($_SESSION["role"]))
    {
        if($_SESSION["role"]==2)
        {
            echo "<h1> Welcome Employee. Your User Id is: ".$_SESSION["userId"];
            echo "<br><a href='../logout.php'>logout</a>";
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