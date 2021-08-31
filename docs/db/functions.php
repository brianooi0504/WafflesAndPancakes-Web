<?php

function emailExists($handler, $email) {
    $sql = "SELECT * FROM member WHERE email = ?;";
    $stmt = mysqli_stmt_init($handler);

    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function loginMember($handler, $email, $password){
    $emailExists = emailExists($handler, $email);

    if ($emailExists === false){
        header("Location: ../login.php?error=wrongLogin");
        exit();
    }

    $encryptedpassword = $emailExists["pword"];
    $checkPassword = password_verify($password, $encryptedpassword);

    if ($checkPassword === false){
        header("Location: ../login.php?error=wrongLogin");
        exit();
    }
    else {
        session_start();
        $_SESSION["email"] = $emailExists["email"];
        header("Location: ../index.php?login=success");
        exit();
    }
}

?>