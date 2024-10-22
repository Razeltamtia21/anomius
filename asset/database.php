<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
$message = $_POST["message"];

if($message){
    $_SESSION["message"] = $message;
    header("Location: dashboard.php");
    exit();
    }
}

?>