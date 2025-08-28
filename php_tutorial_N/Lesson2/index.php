<!doctype html>
<html>
    <head></head>
    <body>
        <?php
            $num=10;
            echo $num."<br>";
            echo var_dump($num)."<br>";
            $val=10.1;
            echo var_dump($val)."<br>";
            $hasError=false;
            echo $hasError."<br>";
            echo var_dump($hasError)."<br>";
            $num2=0;
            echo $num2."<br>";
            $str="bangladesh";
            echo var_dump($str)."<br>";

            function sayMyName($name)
            {
                global $str;
                echo $name."<br>";
                echo $str."<br>";
            }

            sayMyName("ww heisenburg");
            
            function counter()
            {
                static $count=0;
                echo $count."<br>";
                $count++;
            }

            counter();
            counter();
            counter();

            $val1=10;
            $val2=10.0;
            echo "<br>".($val1+$val2);
            echo "<br>".($val1%$val2);

            if($val1>$val2)
            {
                echo "<br>val1 is grater";
            }

            elseif($val1===$val2)
            {
                echo "<br>Both are equal";
            }

            else
            {
                echo "<br>val2 is grater";
            }
        ?>
    </body>
</html>