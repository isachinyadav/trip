<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    
        <?php
        define('pi', 3.14);
        echo "Hello again";
        echo "<br>";
        // secret algorithm
       $var1 = 34;
       $var2 = 67;
       echo $var1;
       echo "<br>";
       echo $var2;
       echo "<br>";
       // Arthimetic 
       echo "The value of varible1 and varibale2 by adding them is :";
       echo " <br>";
       echo $var1 + $var2;
       echo "<br>";
       // Assigment operator
       $newvar = $var1;
       $newvar += 1;
       $newvar *= 2;

       echo "The value of new variable is :";
       echo $newvar;
       echo "<br>"; 
       
       // comparison operator 
       echo "The value of 1==4 is";
       echo var_dump(1==4);
       echo "<br>";

       echo "The value of 1!=4 is";
       echo var_dump(1!=4);
       echo "<br>"; 

       echo "The value of 1>=4 is";
       echo var_dump(1>=4);
       echo "<br>"; 

       echo "The value of 1<=4 is";
       echo var_dump(1<=4);
       echo "<br>"; 
       //Logical operator
      // echo $var1++; 
      // echo $var1--;
      // echo ++$var1; 
       echo --$var1;
       echo "<br>";
       echo $var1;
       // Logical operator
       // and (&&)
       // or  (||)
       // xor 
       // !
     // Data Type in php
    //  1.String
    //  2.Integer
    //  3.Float
    //  4.Booleab
    //  5. Array
    //  6. String
    echo "<br>";
    echo "<br>Data types <br>";
    $var = "This is a string";
    echo var_dump($var);
    echo "<br>";
    echo pi;
        ?>
    </div>
</body>
</html>