<?php 
    //$name=$_REQUEST['userName'] ?? "";
    // echo $name;

    if(isset($_GET['userName']))
    {
        echo $_GET['userName'];
    }

    else
    {

    }

    if(isset($_GET['age']))
    {
         echo $_GET['age'];
    }
?>