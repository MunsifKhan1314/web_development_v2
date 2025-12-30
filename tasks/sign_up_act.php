<?php
    include("./inc/auth.php");

    $name =trim($_POST['name']);
    $email =trim($_POST['email']);
    $password =trim($_POST['password']);
    // check-email//
    $sql= "select * from users where email =:email";
    $stm=$con->prepare($sql);
    $stm->bindParam(":email", $email);    
    $stm->execute();
    $count=$stm->rowCount();
    if($count > 0){
         $_SESSION["error"] = "email already exist";
        header("location:./sign_up.php");
    }else{
        $passwordHash= password_hash($password, PASSWORD_DEFAULT);
        //echo "$passwordHash ";
        $ins_sql="insert into users(name,email,password)values(:name,:email,:password)";
        $ins_stm=$con->prepare($ins_sql);
        $ins_stm->bindParam(":name",$name);
        $ins_stm->bindParam(":email",$email);
        $ins_stm->bindParam(":password",$passwordHash); 
        $ins_stm->execute();
        header("location:./sign_in.php");
         $_SESSION["success"] = "Account Created Succesffuly. Please Login";
    }
?>