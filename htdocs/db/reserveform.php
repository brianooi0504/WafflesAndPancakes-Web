<?php
    include_once 'connect_db.php';

    if(isset($_POST["submit"])){
        $fname = $_POST['firstname'];
        $sname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $adult = $_POST['adults'];
        $child = $_POST['child'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $request = $_POST['reqs'];

        $sql = "INSERT INTO reservations (firstName, lastName, email, phone, numAdults, numChilds, resDate, resTime, request) VALUES ('$fname', '$sname', '$email', '$phone', $adult, $child, '$date', '$time', '$request');";
    
        mysqli_query($handler, $sql);

        header("Location: ../bookingreceived.php?feedback=success");
    }
    else{
        header("Location: ../reservations.php?feedback=unsuccessful");
    }
?>