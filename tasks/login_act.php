<?php
session_start();
    include("./inc/db.php");

    session_start();
    $email=trim($_POST['email']);
    $password=trim($_POST['password']);
    $sql="select * from users where email=:email";
    $stm=$con->prepare($sql);
    $stm->bindParam(":email", $email);    
    $stm->execute();

    $users =$stm->fetch(PDO::FETCH_ASSOC);
    // print_r($users);
    if($users && password_verify($password,$users['password'])){
        $_SESSION['user_id']=$users['id'];
        $_SESSION['user_name']=$users['name'];
        $_SESSION["success"]="You are Succesfully Logedin,  " .  $users['name'];
        header("location:./sign_dashboard.php");
    }else{
        $_SESSION["error"]="something went wrong";
        
        header("location:./sign_in.php");
    }
?>
