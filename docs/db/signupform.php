<?php
    include_once 'connect_db.php';

    if(isset($_POST["submit"])){
        $fname = $_POST['firstname'];
        $sname = $_POST['surname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordrpt = $_POST['passwordrpt'];

        require_once 'connect_db.php';
        require_once 'functions.php';

        if (($password !== $passwordrpt) !== false){
            header("Location: ../signup.php?error=passwordsdontmatch");
            exit();
        }

        if (emailExists($handler, $email) !== false){
            header("Location: ../signup.php?error=emailtaken");
            exit();
        }

        $encryptpassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO member (firstName, lastName, phone, email, pword) VALUES ('$fname', '$sname', '$phone', '$email', '$encryptpassword');";
      
        //$sql = "INSERT INTO member (firstName, lastName, phone, email, pword) VALUES ('$fname', '$sname', '$phone', '$email', '$password');";
        mysqli_query($handler, $sql);

        header("Location: ../accountcreated.php?feedback=success");
    }
    else{
        header("Location: ../signup.php?feedback=failed");
        exit();
    }

    
?>