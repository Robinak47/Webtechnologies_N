<?php
    require_once("db.php");

    function authUser($id, $pass)
    {
        $conn=getConnection();
        $sql="SELECT * FROM user WHERE id='$id' AND pass='$pass'";
        $result=mysqli_query($conn,$sql);

        return mysqli_fetch_assoc($result);


    }

    function insertUser($user)
    {
        $conn=getConnection();
        echo var_dump($user);
        $sql= "INSERT INTO user
VALUES ('{$user["id"]}', '{$user["pass"]}', {$user["role"]},'{$user["status"]}')";
        $result=mysqli_query($conn,$sql);

        return $result;
    }
?>