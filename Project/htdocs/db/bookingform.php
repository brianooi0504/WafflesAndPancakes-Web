<?php
    include_once 'connect_db.php';

    if(isset($_POST["submit"])){
        $fname = $_POST['firstname'];
        $sname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $guest = $_POST['guests'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $request = $_POST['reqs'];

        $sql = "INSERT INTO eventbookings (firstName, lastName, email, phone, numGuests, resDate, resTime, request) VALUES ('$fname', '$sname', '$email', '$phone', $guest, '$date', '$time', '$request');";
    
        mysqli_query($handler, $sql);

        header("Location: ../bookingreceived.php?feedback=success");
    }
    else{
        header("Location: ../eventbookings.php?feedback=success");
    }
?>