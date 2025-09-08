<?php

    $imageErr="";

    if(isset($_POST["submit"]))
    {
        if(isset($_FILES["imageInput"]) && ($_FILES["imageInput"]["error"]==0))
        {
            $hasErr=false;

            $allowedType=["image/jpeg", "application/pdf"];
            $maxSize=1*1024*1024;

            $fileType=$_FILES["imageInput"]["type"];
            $fileSize=$_FILES["imageInput"]["size"];
            $tmpName=$_FILES["imageInput"]["tmp_name"];

            if(!in_array($fileType, $allowedType))
            {
                $hasErr=true;
                $imageErr="Unsupported Type";
            }

            elseif($fileSize>$maxSize)
            {
                $hasErr=true;
                $imageErr="File is Too Large";
            }

            else
            {
                $uploadDir="Upload/";

                if(!is_dir( $uploadDir))
                {
                    mkdir($uploadDir);
                }

                $fileName=basename($_FILES["imageInput"]["name"]);
                $targetFile= $uploadDir.$fileName;
                move_uploaded_file($tmpName,$targetFile);
            }

            if(!$hasErr)
            {
                echo "file Moved successfully";
            }
            
        }

        else
        {
            $imageErr="Please Upload a file";
        }
    }


?>


<!doctype html>
<html>
    <head></head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">

        <label for="imageInput">Input image: </label>
        <input type="file" name="imageInput"><br>
        <span style="color:red;" name="errSpan"><?php echo $imageErr; ?></span><br>

        <input type="submit" name="submit" value="submit">


        </form>
    </body>
</html>
