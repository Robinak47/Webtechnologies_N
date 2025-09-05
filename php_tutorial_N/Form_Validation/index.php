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
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["userName"]))
        {
            $nameErr="name cannot be empty";

        }

        else
        {
            if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["userName"]))
            {
                 $nameErr="name can only be letters";
            }

            else
            {
                $name=$_POST["userName"];
            }
        }

        if(empty($_POST["email"]))
        {
            $emailErr="email cannot be empty";
        }

        else
        {
            if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
            {
                $emailErr="invalid Format";
            }

            else
            {
                $email=$_POST["email"];
            }
        }

        if(empty($_POST["gender"]))
        {
            $genderErr="Please select a Gender";
        }

        else
        {
            $gender=$_POST["gender"];
        }

        if(empty($_POST["fabLang"]))
        {
            $fabLangErr="Please Select at least one language";
        }

        else
        {
            $fabLang=$_POST["fabLang"];
        }

        if(empty($_POST["major"]))
        {
            $majorErr="Please select a Major";
        }
        else
        {
            $major=$_POST["major"];
        }


        

    }

?>


<!doctype html>
<html>
    <head>
    </head>
    <body>
        <form action="" method="POST">
            <label for="userName"> User Name: </label>
            <input type="text" id="userName" name="userName"><br>
            <span style="color:Red;"><?php echo $nameErr; ?></span><br>
            

            <label for="email">Email: </label>
            <input type="text" id="email" name="email"><br>
            <span style="color:Red;"><?php echo $emailErr; ?></span><br>    

            <label for="gender">Gender: </label>
            <input type="radio" id="maleRB" name="gender" value="male">Male
            <input type="radio" id="femaleRB" name="gender" value="female">Female<br>
            <span style="color:Red;"><?php echo $genderErr; ?></span><br>

            <label for="fabLang">Fab Lang. :</label>
            <input type="checkbox" id="c#CMB" name="fabLang[]" value="C#">C#
            <input type="checkbox" id="PythonCMB" name="fabLang[]" value="Python">Python
            <input type="checkbox" id="JavaCMB" name="fabLang[]" value="Java">Java<br>
            <span style="color:Red;"><?php echo $fabLangErr; ?></span><br>


            <label for="major">Major</label>
            <select name="major">
                <option id="noMajor" value="">Select a Major </option>
                <option id="major1" value="Data Science">Data Science </option>
                <option id="major2" value="Software Engineering">Software Engineering </option>
            </select><br>
            <span style="color:Red;"><?php echo $majorErr; ?></span><br>

            <input type="submit" name="submit" value="submit">





        </form>

    </body>
</html>


<?php

    echo $name."<br>";
    echo $email."<br>";
    echo $gender."<br>";
    foreach($fabLang as $fb)
    {
        echo $fb."<br>";
    }
    echo $major;

?>
