<?php
include_once 'connect_db.php';

if (!$handler) {
    die("Connection failed: " . mysqli_connect_error());
} else{
echo "Connected successfully".'<br />';
}

$the_query = "CREATE TABLE feedback (
    feedbackID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phone VARCHAR(20),
    userMessage VARCHAR(200))";

$the_query2 = "CREATE TABLE member (
    memberID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    phone VARCHAR(20),
    email VARCHAR(50),
    pword VARCHAR(128))";

$the_query3 = "CREATE TABLE reservations (
    reserveID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phone VARCHAR(20),
    numAdults INT(1),
    numChilds INT(1),
    resDate DATE,
    resTime TIME,
    request VARCHAR(200))";

$the_query4 = "CREATE TABLE eventbookings (
    bookingID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phone VARCHAR(20),
    numGuests INT(6),
    resDate DATE,
    resTime TIME,
    request VARCHAR(200))";

if (mysqli_query($handler, $the_query)) { 
    echo "Table created successfully".'<br />';
} else{
echo "Error creating table: " . mysqli_error($handler).'<br />';
}

if (mysqli_query($handler, $the_query2)) { 
    echo "Table created successfully".'<br />';
} else{
echo "Error creating table: " . mysqli_error($handler).'<br />';
}

if (mysqli_query($handler, $the_query3)) { 
    echo "Table created successfully".'<br />';
} else{
echo "Error creating table: " . mysqli_error($handler).'<br />';
}

if (mysqli_query($handler, $the_query4)) { 
    echo "Table created successfully".'<br />';
} else{
echo "Error creating table: " . mysqli_error($handler).'<br />';
}
?>