<?php

    $hasErr=false;
    $err="";
    if(($_SERVER["REQUEST_METHOD"]=="POST") && isset($_POST["submit"]))
    {
        if(empty($_POST["userId"]))
        {
            $hasErr=true;
            $err="UserId cannot be empty";
        }

        else
        {

        }

        if(empty($_POST["pass"]))
        {
            $hasErr=true;
            $err="pass cannot be empty";
        }

        else
        {

        }

        if($hasErr)
        {
            header("Location: login.php?err=.$err");
        }

        else
        {
            session_start();
            $_SESSION["userId"]=$_POST["userId"];
            header("Location: home.php");
        }

    }

?>