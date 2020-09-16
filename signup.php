<?php
$db = mysqli_connect("localhost", "root", "", "final");
if(isset($_POST['submit_button'])){
    session_start();
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $country=$_POST['country'];
    $password = md5($_POST['password']);
    
    $sql = "INSERT INTO ups3(name, email, password, country) VALUE('$name', '$email', '$password','$country')";
    mysqli_query($db, $sql);
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;

    header("location: login2.php");
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Cart system</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body  background= "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSWJ1pUL-xrgtnEiTdM9nF4y3eZd12BewkRaA&usqp=CAU" >
    <header id= "top-header">
                <div class= "large-box">
        <h1> Cart System Sign Up</h1>
        <form class="box" action="signup.php" method="POST">
           
        <input type="text" name="fullname" placeholder="Enter name" id="username">
            <input type="email" name="email" placeholder="Enter email" id="email">
            <input type="password" name="password" placeholder ="enter password" id="password" >
            <input type="country" name="country" placeholder ="enter country" id="country" >
        
            <input type="submit" name="submit_button" value= "Sign up">
        
        
       
                
               
                
                

            <h6><a href ="img.html">
        Help
        </a>
        </h6>
        </form>
    </body>
</html>