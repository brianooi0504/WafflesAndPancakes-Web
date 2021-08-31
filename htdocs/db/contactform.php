<?php
    include_once 'connect_db.php';
    
    if(isset($_POST["submit"])){ 
        $fname = $_POST['firstname'];
        $sname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql = "INSERT INTO feedback (firstName, lastName, email, phone, userMessage) VALUES ('$fname', '$sname', '$email', '$phone', '$message');";

        mysqli_query($handler, $sql);

        header("Location: ../feedbackreceived.php?feedback=success");
    }
    else{
        header("Location: ../contactus.php?feedback=unsuccessful");
    }
?>

