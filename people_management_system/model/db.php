<?php

    $host="127.0.0.1";
    $user="root";
    $pass="";
    $db="people_management_system";
    $port=3308;

    function getConnection()
    {
        global $host;
        global $user;
        global $pass;
        global $db;
        global $port;

        $conn=mysqli_connect("127.0.0.1","root","","people_management_system",3308);
        return $conn;

    }




?>