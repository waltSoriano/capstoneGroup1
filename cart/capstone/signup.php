<?php

if (isset($_POST['Fname']) &&
    isset($_POST['uname']) &&
    isset ($_POST['pass']) &&
    isset ($_POST['email']))


    include "db_conn.php";
    $fname = $_POST ['Fname'];
    $uname = $_POST ['uname'];
    $pass = $_POST ['pass'];
    $email = $_POST ['email'];

    $data = "fname" .$fname. "&uname" .$uname. "&email" .$email;

    if (empty($fname)){
       $em = "Fullname is required";
       header ("Location: register.php?error=$em&$data");
       exit;
    } else if (empty($uname)){
        $em = "Username is required";
        header ("Location: register.php?error=$em&$data");
        exit;
    } else if (empty($email)){
        $em = "Email is required";
        header ("Location: register.php?error=$em&$data");
        exit;
    } else if (empty($pass)){
        $em = "Password is required";
        header ("Location: register.php?error=$em&$data");
        exit;
    } 

    else {

        $pass = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(fname, username, password, email)
                VALUES (?,?,?,?)";

        $stmt = $conn->prepare($sql);

        $stmt->execute([$fname, $uname, $pass, $email]);

        header("Location: register.php?success=Your Account has been created successfully");
        exit;
    }

?>