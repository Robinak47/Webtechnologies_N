<?php
    require_once("userController.php");

    $idErr="";
    $passErr="";
    $roleErr="";
    $statusErr="";
    $hasErr=false;
    if(($_SERVER["REQUEST_METHOD"]=="POST") && (isset($_POST["submit"])))
    {
        if(empty($_POST["id"]))
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

        if(empty($_POST["role"]))
        {
            $hasErr=true;
            $roleErr="role cannot be empty";
        }

        else
        {

        }

        if(empty($_POST["status"]))
        {
            $hasErr=true;
            $statusErr="status cannot be empty";
        }

        else
        {

        }

        if($hasErr)
        {
            header("Location:../view/admin/addClient.php?idErr=$idErr&passErr=$passErr&roleErr=$roleErr&statusErr=$statusErr");
        }

        else
        {

            $user=["id" =>$_POST["id"], "pass" => $_POST["pass"], "role" => $_POST["role"], "status" => $_POST["status"] ];
            $u=addUser($user);

            if(!$u)
            {
                header("Location:../view/admin/addClient.php?message='failed to add Client.'");
            }

            else
            {
                header("Location:../view/admin/addClient.php?message='successfully added the client.'");
            }
        }
    }


?>