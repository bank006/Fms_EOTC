<?php

    session_start();

    require_once 'config/db.php';

    if (isset($_POST['submitLogin'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        $urole = 'user';

        
        if (empty($username)){
            $_SESSION['error']='Pleas enter your name';
            header("location: sigup.php");

        } elseif (empty($email)) {
            $_SESSION['error']='Pleas enter your email';
            header("location: sigup.php");
    
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error']='invalid your email';
            header("location: sigup.php");
    
        } elseif (empty($password1)) {
            $_SESSION['error']='wrong your password';
            header("location: sigup.php");

        }elseif (strlen($_POST['password1']) <8) {
            $_SESSION['error']='รหัสผ่านต้องมีค่ามากกว่า 8 ตัว';
            header("location: sigup.php");
            
    
        // } else if (strlen($_POST['password1']) >= 5 || strlen($_POST['passwprd1']) <=10 ) {
        //     $_SESSION['error']='รหัสผ่านต้องมีความยาวระหวาง 5 ถึง 10';
        //     header("location: sigup.php");
    
        } elseif (empty($password2)) {
            $_SESSION['error']='Confirm password';
            header("location: sigup.php");
    
        } elseif ($password1 != $password2) {
            $_SESSION['error']='Password not math';
            header("location: sigup.php");

        } else {
            try {
                

                $check_email = $conn->prepare("SELECT email FROM sigups WHERE email = :email");
                $check_email -> bindParam(":email", $email);
                $check_email -> execute(); 
                $row = $check_email->fetch(PDO::FETCH_ASSOC);

                if ($row['email'] == $email){
                    $_SESSION['warning'] = "อีเมล์นี้มีในระบบเเล้ว <a href='login.php'>คลิ้กที่นี้</a>เพื่อเข้าสู้ระบบ ";
                    header("location: sigup.php");
                } elseif (!isset($_SESSION['error'])) {
                    
                    $passwordhash = password_hash($password1, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("INSERT INTO sigups(username, email, password, urole) VALUE(:username ,:email, :password, :urole)");
                    $stmt->bindParam(":username", $username);
                    $stmt->bindParam(":email", $email);
                    $stmt->bindParam(":password", $passwordhash);
                    $stmt->bindParam(":urole", $urole);
                    $stmt->execute();
                    $_SESSION['success'] ;
                    header("location: index.php");


                }else {
                    $_SESSION['error'] = "somthing error";
                    header("location: singup.php");

                }

            } catch(PDOException $e){
                echo $e->getMessage();
            }
        }    
    }

?>