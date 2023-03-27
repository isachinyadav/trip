<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            
        }
        .container{
            max-width: 80%;
            background-color:grey;
            margin:auto;
            padding: 23px;
        }
    </style>
</head>
<body>
    <div class="container">

    <h1>Hello my name is sachin yadav</h1>
    <?php
    $age = 6;
    if($age>18){
        echo "You can go to the party";
    }
    else if($age==7){
        echo "You are 7 years old";
    }
    else if($age==6){
        echo "You are 6 years old";
    }
    else{
        echo "You can not go to the party";
    }
    echo "<br>";
    $languages = array("python", "c++","php","Nodejs");
    echo $languages[0];
    echo "<br>"; 
     $a = 0;
     while($a<=10){
        echo "<br>The value of a is :";
        echo $a;
        $a++;
     }
     $a=0;
     while($a < count($languages)){
        echo "<br>The value of language is :";
        echo $languages[$a];
        $a++;
     }
     for($a=0;$a<10;$a++){
        echo "<br>The value of a from the for loop is : ";
        echo $a+1;
     }
     foreach ($languages as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }

    function print5(){
        echo "<br>5";
        echo "<br>";
    }
    print5();
    print5();
    print5();
    print5();
   
     function print_number($number){
        echo "<br>Your number is ";
        echo $number;
     }
     print_number(67);
     print_number(54);
      
     $str = "This <br>";
     echo "<br>$str";
     $len = strlen($str);
    //  here strlen is Inbuilt function to see the length of a string 
     echo "$len";
     $str = " This";
     echo $str. "<br>";
     $lenn = strlen($str);
     echo "The length of this string is ". $lenn . ".Thank you <br>";
     echo "The number of words in this string is ". str_word_count($str). ".Thank you <br>";
     echo " The reversed of the string is ". strrev($str) . ".Thank you <br>";
     echo " The search for is in this string is ". strpos($str,"is") . ".Thank you <br>";
     echo "The replaced string is ". str_replace("is", "at" , $str) . ".Thank you <br>";




    ?>
    </div>
</body>
</html>