<?php
$wrongemail="";
$wrongpassword="";

if(isset($_POST["submit"])){
    $emailValue= $_POST["emailName"];
    $passwordValue= $_POST["passName"];

    if($emailValue == ""){
        $wrongemail="enter your email";
    }else if(!preg_match("/\w+(@emsi.ma){1}$/",$emailValue)){
        $wrongemail="your email not valid, Retry a valid email";
    }else if($passwordValue == ""){
        $wrongpassword= "Enter your password";
    }else{
        session_start();
        $_SESSION["emailS"]=$emailValue;
        $_SESSION["passS"]=$passwordValue;
        header("Location:home2.php");
    }
}












?>