<?php

    $student = ["name" => "mr. meow", "cgpa" => 3.16, "completedCredit"=>104];
    $jsonOBJ2=json_encode($student);

    $val=10;
    $josnObj=json_encode($val);
    echo $josnObj;

    $phpObj=json_decode($jsonOBJ2);
    echo "<br>".$phpObj->name;
    echo "<br>".$phpObj->cgpa;
    echo "<br>".$phpObj->completedCredit;


    $phpObj2=json_decode($josnObj);
    echo "<br>".$phpObj2; 


    $studentList=["student1"=>["name" => "mr. meow", "cgpa" => 3.16, "completedCredit"=>104],"student2"=>["name" => "mr. cat", "cgpa" => 4.00, "completedCredit"=>120] ];
    $jsonOBJ3=json_encode($studentList);
    $phpObj2=json_decode($jsonOBJ3);
    echo "<br>".$phpObj2->student1->name;
    echo "<br>".$phpObj2->student1->cgpa;
    echo "<br>".$phpObj2->student1->completedCredit;
    echo "<br>".$phpObj2->student2->name;
    echo "<br>".$phpObj2->student2->cgpa;
    echo "<br>".$phpObj2->student2->completedCredit;

?>