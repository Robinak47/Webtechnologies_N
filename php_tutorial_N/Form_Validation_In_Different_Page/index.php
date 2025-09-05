


<!doctype html>
<html>
    <head>
    </head>
    <body>
        <form action="validation.php" method="POST">
            <label for="userName"> User Name: </label>
            <input type="text" id="userName" name="userName"><br>
            <span style="color:Red;"><?php if(isset($_GET['nameErr'])){ echo $_GET['nameErr'];}?></span><br>
            

            <label for="email">Email: </label>
            <input type="text" id="email" name="email"><br>
            <span style="color:Red;"><?php if(isset($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span><br>    

            <label for="gender">Gender: </label>
            <input type="radio" id="maleRB" name="gender" value="male">Male
            <input type="radio" id="femaleRB" name="gender" value="female">Female<br>
            <span style="color:Red;"><?php if(isset($_GET['genderErr'])){echo $_GET['genderErr'];} ?></span><br>

            <label for="fabLang">Fab Lang. :</label>
            <input type="checkbox" id="c#CMB" name="fabLang[]" value="C#">C#
            <input type="checkbox" id="PythonCMB" name="fabLang[]" value="Python">Python
            <input type="checkbox" id="JavaCMB" name="fabLang[]" value="Java">Java<br>
            <span style="color:Red;"><?php if(isset($_GET['fabLangErr'])){echo $_GET['fabLangErr'];} ?></span><br>


            <label for="major">Major</label>
            <select name="major">
                <option id="noMajor" value="">Select a Major </option>
                <option id="major1" value="Data Science">Data Science </option>
                <option id="major2" value="Software Engineering">Software Engineering </option>
            </select><br>
            <span style="color:Red;"><?php if(isset($_GET['majorErr'])){echo $_GET['majorErr'];} ?></span><br>

            <input type="submit" name="submit" value="submit">





        </form>

    </body>
</html>



