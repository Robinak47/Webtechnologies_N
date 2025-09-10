<!doctype html>
<html>
    <head>
        <script>
            const student = { "name" : "Mr. Meow", "cgpa": 4.00 , "completedCredit": 140};
            /*console.log(student.name);
            console.log(student.cgpa);
            console.log(student.completedCredit);*/

            var jsonObj= JSON.stringify(student);

            var jsOBJ = JSON.parse(jsonObj);
            console.log(jsOBJ.name);
            console.log(jsOBJ.cgpa);
            console.log(jsOBJ.completedCredit);


            var value1=10;
            var jsonObj2=JSON.stringify(value1);
            console.log(jsonObj2);


            var jsObj2=JSON.parse(jsonObj2);
            console.log(jsObj2);
        </script>
    </head>
    <body></body>
</html>