<?php
$db = mysqli_connect("localhost", "root", "", "final");
if(isset($_POST['submit_button'])){
    session_start();
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql="SELECT * FROM ups3 WHERE email='$email' AND password='$password'";
    $verify = mysqli_query($db, $sql);

    if(mysqli_num_rows($verify)== 1){
        $_SESSION['email']=$email;
        header("location: main.html");
    }else {
        echo "Incorrect email ot password...please check and try again";
    }
}
?>






<!DOCTYPE html>
<html lang="en" and dir="ltr">
<head>
    <meta charset="utf-8">
   
 


        <title>Login new form</title>
        <link rel="stylesheet"  href="style2.css">
        

        
    </head>
    <body background="https://images.unsplash.com/photo-1556139943-4bdca53adf1e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
        <form class="box" action="login2.php" method="POST">
            <h1> Login

            </h1>

            <input type="email" name="email" placeholder="Enter name" id="email">
            <input type="password" name="password" placeholder="Enter password" id="password">
            <input type="submit" name="submit_button" value= "Login">



            <p>Don't have account? Then click Sign UP.....</p>
            <a href ="signup.php">
            Sign Up
            </a>
           






        </form>
    </body>
</html>
