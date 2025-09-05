<?php 
    //$name=$_REQUEST['userName'] ?? "";
    // echo $name;

    if(isset($_POST['userName']))
    {
        echo $_POST['userName'];
    }

    else
    {

    }

    if(isset($_POST['age']))
    {
         echo $_POST['age'];
    }
?>