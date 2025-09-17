<?php
    

    if(isset($_COOKIE["userId"]))
    {
        echo "Welcome user. Id: ".$_COOKIE["userId"];
        echo "<a href='logout.php'>logout</a>";
    }

    else
    {
        header("Location: login.php");
    }



?>