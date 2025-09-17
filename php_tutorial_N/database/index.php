<?php
    $host="127.0.0.1";
    $user="root";
    $pass="";
    $db="webtech_n";
    $port=3308;

    $conn=mysqli_connect($host,$user,$pass,$db,$port);

    if(!$conn)
    {
        echo "Failed to connect".mysqli_connect_error();
    }

    else
    {
        echo "Connection Successful";
    }

    //db creation
    /*$sql = "CREATE DATABASE webtech_n";
    $outcome=mysqli_query($conn,$sql);
    if($outcome)
    {
        echo "<br>db created successfully";
    }

    else
    {
        echo "<br>Failed to create the db.";
        echo mysqli_error($conn);
        echo "<br>".var_dump($conn);
    }*/

    //table creation

    /*$sql = "CREATE TABLE student (
id VARCHAR(10) PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

   $outcome=mysqli_query($conn,$sql);
   if($outcome)
   {
        echo "<br> table creation successful";
   }

   else
   {
        echo mysqli_error($conn); 
   }*/

    //insert
    /*$sql = "INSERT INTO student (id, firstname, lastname, email)
VALUES ('102','John', 'Doe', 'john@example.com');";

$sql .= "INSERT INTO student (id, firstname, lastname, email)
VALUES ('103','John', 'Doe', 'john@example.com');";
 
 $outcome=mysqli_multi_query($conn,$sql);
 if($outcome)
   {
        echo "<br> data inserted successful";
   }

   else
   {
        echo mysqli_error($conn); 
   }*/

    //Delete
    /*
    $sql = "DELETE FROM student WHERE id='102'";
    $outcome=mysqli_query($conn,$sql);
    if($outcome)
   {
        echo "<br> data deleted successful";
        echo "<br>".mysqli_affected_rows($conn);
   }

   else
   {
        echo mysqli_error($conn); 
   }
    */

   //update
    /*
   $sql = "UPDATE student SET lastname='Meow' WHERE id='103'";
    $outcome=mysqli_query($conn,$sql);
    if($outcome)
   {
        echo "<br> data updated successful";
        echo "<br>".mysqli_affected_rows($conn);
   }

   else
   {
        echo mysqli_error($conn); 
   }

   */

   $sql = "SELECT * FROM student";
   $result=mysqli_query($conn,$sql);
   $students=[];
    if(mysqli_num_rows($result)>0)
   {
        while($row=mysqli_fetch_assoc($result))
        {
            $students[]=$row;
        }

        foreach($students as $student)
        {
            echo "<br>".$student["id"];
            echo "<br>".$student["firstname"];
            echo "<br>".$student["lastname"];
            echo "<br>".$student["email"];
        }
   }

   else
   {
        echo "nothing found";
   }


?>