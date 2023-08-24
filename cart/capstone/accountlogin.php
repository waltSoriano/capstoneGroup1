<?php

session_start();

if (isset ($_POST['uname']) &&
    isset ($_POST['pass'])) {

        include "db_conn.php";
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];

        $data = "uname" .$uname;

        if (empty($uname)){
            $em = "Username is required";
            header("Location: account.php?error=$em&$data");
            exit;

        } else if (empty($pass)){
            $em = "Password is required";
            header("Location: account.php?error=$em&$data");
            exit;

        } else {

            $sql = "SELECT * FROM users WHERE USERNAME= ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$uname]);


            if ($stmt->rowCount() == 1){

                $user = $stmt->fetch();

                $username = $user['username'];
                $password = $user['password'];
                $fname = $user['fname'];
                $email = $user['email'];
                $id = $user['id'];

                if ($username === $uname) {
                    if(password_verify($pass, $password)){
                        $_SESSION['id']= $id;
                        $_SESSION['fname']= $fname;
                        header("Location: welcome.php");
                        exit;
                    } else {
                        $em = "Incorrect Username or Password";
                        header("Location: account.php?error=$em&$data");
                        exit;
                    } 
                   }   else {
                        $em = "Incorrect Username or Password";
                        header("Location: account.php?error=$em&$data");
                        exit;
                    }
                 } else {
                        $em = "Incorrect Username or Password";
                        header("Location: account.php?error=$em&$data");
                        exit;
                    }
                }
                    
            } else {
            header("Location: ../login.php?error=error");
            exit;
        }
?>