<?php 
$host = "localhost";
$user = "root";
$password = "131419";
$db = "learning";

try {
    $con = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connection Succesful";
} catch (PDOException $e) {
    echo "Connection Error" . $e->getMessage();
    
}
?>