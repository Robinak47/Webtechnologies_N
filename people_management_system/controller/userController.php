<?php
    require_once("../model/userModel.php");

    function searchUser($id, $pass)
    {
        return authUser($id, $pass);
    }

    function addUser($user)
    {
        return insertUser($user);
    }



?>
