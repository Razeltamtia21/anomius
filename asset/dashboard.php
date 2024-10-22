<?php 

$name = $_POST["name"];
$password = $_POST["password"];

if($name == "lelouch" && $password == "lelouch"){

if(!isset($_SESSION["message"])){
    header("Location: database.php");
    exit();
}

$message = $_SESSION["message"];

echo "$message";

}else {
    header("Location: http://localhost/latihan/latihan4/login.php");
    exit();
}

?>