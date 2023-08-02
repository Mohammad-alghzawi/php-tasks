<?php
session_start();

$valid_email="mohd.a.ghzawi@gmail.com";
$valid_username="mohammad";
$valid_password="mohammad12345";

if(isset($_POST["email"]) && isset($_POST["username"]) && isset($_POST["password"])){
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];

if($email==$valid_email && $username==$valid_username && $password==$valid_password){
    $_SESSION["logged_in"]= true;
    $_SESSION["username"]=$username;
    header("Location: calculator.php");
}

else {
    echo "Invalid username or password . <a href='./login.php'>please try again.</a>";
}

}

