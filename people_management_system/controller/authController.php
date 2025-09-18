<?php
    require_once("userController.php");

    $idErr="";
    $passErr="";
    $hasErr=false;
    if(($_SERVER["REQUEST_METHOD"]=="POST") && (isset($_POST["submit"])))
    {
        if(empty($_POST["userId"]))
        {
            $hasErr=true;
            $idErr="Id cannot be empty";
        }

        else
        {

        }

        if(empty($_POST["pass"]))
        {
            $hasErr=true;
            $passErr="pass cannot be empty";
        }

        else
        {

        }

        if($hasErr)
        {
            header("Location:../view/login.php?idErr=$idErr&passErr=$passErr");
        }

        else
        {
            $user=searchUser($_POST["userId"], $_POST["pass"]);

            if(!$user)
            {
                header("Location:../view/login.php?invalidUser='Invalid user.'");
            }

            else
            {
                session_start();
                $_SESSION["userId"]=$user["id"];
                $_SESSION["role"]=$user["role"];

                if($user["role"]==1)
                {
                    header("Location:../view/admin/home.php");   
                }

                elseif($user["role"]==2)
                {
                    header("Location:../view/employee/home.php");   
                }
                else
                {
                    header("Location:../view/client/home.php");   
                }
            }
        }
    }


?>