<?php
    for($i=1;$i<11;$i++)
    {
        echo $i."<br>";
    }

    $k=11;
    while($k<21)
    {
        echo $k."<br>";
        $k++;
    }

    do{
        echo $k."<br>";
        $k++;
    }while($k<31);

    $arr=[1,2,3];
    echo "<br>".$arr[0]."<br>";

    for($i=0;$i<count($arr);$i++)
    {
       echo $arr[$i]."<br>"; 
    }

    foreach($arr as $a)
    {
        echo $a."<br>";
    }

    $arr2=[[1,2],[2],[3,4]];

    foreach($arr2 as $a)
    {
        foreach($a as $aa)
        {
            echo $aa." ";
        }

        echo "<br>";
    }

    $student=[
        "id"=>"23-868-3",
        "name" => "mr. Meow",
        "cgpa" => 3.90
    ];

    foreach($student as $key=>$value)
    {
        echo $key."=>".$value."<br>";
    }

    $students=[
        "student1"=>["id"=>"234444","name"=>"mr.cat","completedCredit"=>100],
        "student2"=>["id"=>"234445","name"=>"mr.Tiger","completedCredit"=>200]
    ];

    foreach($students as $key=>$value)
    {
        foreach($value as $key1=>$value1)
        {
            echo $key1."=>".$value1."<br>";
        }
    }

    echo var_dump($arr)."<br>";
    $arr5=["Bangladesh", 10, 2.09, true];
    foreach($arr5 as $a)
    {
        echo $a."<br>";
    }
    echo var_dump($arr5)."<br>";

    $arr6=array("Meow", true, 10.10);
    foreach($arr6 as $a)
    {
        echo $a."<br>";
    }

    $val1=10;
    $val2=20;
    echo "<br>";
    echo $val1,$val2;
    echo "<br>";
    print $val1;
    print_r($arr6);

    $s1="1012";
    $s2=strrev($s1);
    if(strcmp($s1,$s2)==0)
    {
        echo "palindrom";
    }

    else
    {
        echo "not palindrom";
    }

?>