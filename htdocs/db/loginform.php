<?php
    
    include_once 'connect_db.php';
    
    if(isset($_POST["submit"])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once 'connect_db.php';
        require_once 'functions.php';

        loginMember($handler, $email, $password);
    }
    else{
        header("Location: ../login.php?feedback=unsuccessful");
        exit();
    }
?>