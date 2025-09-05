<?php

    $nameErr="";
    $emailErr="";
    $genderErr="";
    $fabLangErr="";
    $majorErr="";

    $name="";
    $email="";
    $gender="";
    $fabLang=[];
    $major="";

    $hasErr=false;
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["userName"]))
        {
            $nameErr="name cannot be empty";
            $hasErr=true;

        }

        else
        {
            if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["userName"]))
            {
                 $nameErr="name can only be letters";
                 $hasErr=true;
            }

            else
            {
                $name=$_POST["userName"];
            }
        }

        if(empty($_POST["email"]))
        {
            $emailErr="email cannot be empty";
            $hasErr=true;
        }

        else
        {
            if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
            {
                $emailErr="invalid Format";
                $hasErr=true;
            }

            else
            {
                $email=$_POST["email"];
            }
        }

        if(empty($_POST["gender"]))
        {
            $genderErr="Please select a Gender";
            $hasErr=true;
        }

        else
        {
            $gender=$_POST["gender"];
            
        }

        if(empty($_POST["fabLang"]))
        {
            $fabLangErr="Please Select at least one language";
            $hasErr=true;
        }

        else
        {
            $fabLang=$_POST["fabLang"];
        }

        if(empty($_POST["major"]))
        {
            $majorErr="Please select a Major";
            $hasErr=true;
        }
        else
        {
            $major=$_POST["major"];
        }

        if($hasErr)
        {
            header("Location:index.php?nameErr=$nameErr&emailErr=$emailErr&genderErr=$genderErr&fabLangErr=$fabLangErr&majorErr=$majorErr");

        }

        else
        {

            echo $name."<br>";
            echo $email."<br>";
            echo $gender."<br>";
            foreach($fabLang as $fb)
            {
                echo $fb."<br>";
            }
            echo $major;

        }
        

        

    }

?>
