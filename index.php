 <?php
$insert = false;
if(isset($_POST['name'])){

$SERVER = "localhost";
$username ="root";
$password = "";
 $con = mysqli_connect($SERVER ,$username,$password);
 
 if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());

 }

 $name =  $_POST['name'];
 $gender = $_POST['gender'];
 $age = $_POST['age'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $desc = $_POST['desc'];



 $sql = "INSERT INTO `trip`.`trip1` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
 //echo $sql;

 if($con->query($sql)==true){
    //echo"successfully inserted";
 $insert = true;
}
 else{
    echo "ERROR: $sql <br> $con->error";
 }
 $con->close();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <img src="bg.jpeg"  class="bg" alt="">
    <div class="container">
        <p>
         <h1>Welcome to Cu US trip form</h1>
         <p>Enter your details and submit this fomr to confirm your participation in the trip </p>
        </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text"  name="name" id="name" placeholder="Enter your name">
             <input type="text" name=" age" id="age" placeholder="Enter your age">
             <input type="text" name="gender" id="gender" placeholder="Enter our gender" >
             <input type="email" name="email" id="email" placeholder="Enter your Email"  >
             <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
             <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
             <button class="btn">submit</button>
            </form>
    </div>
    <script src="script.js"></script>
    <!-- INSERT INTO `trip1` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('12', 'lakjflajsk', '20', 'male', 'sachinyadav68763@gmail.com', '9311362099', 'afafafadfas', current_timestamp()); -->
</body>
</html>

