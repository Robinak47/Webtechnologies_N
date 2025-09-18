<?php
    session_start();
    if((isset($_SESSION["userId"])) && isset($_SESSION["role"]))
    {
        if($_SESSION["role"]==3)
        {
            echo "<h1> Welcome Client. Your User Id is: ".$_SESSION["userId"];
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