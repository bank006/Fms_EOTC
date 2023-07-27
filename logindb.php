<?php

    session_start();

    require_once 'config/db.php';

    if (isset($_POST['submitLogins'])) {
        $email = $_POST['username'];
        $password1 = $_POST['password'];

 
        }if (empty($email)) {
            $_SESSION['error']='Pleas your email';
            header("location: index.php");
    
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error']='invalid your email';
            header("location: index.php");
    
        } elseif (empty($password1)) {
            $_SESSION['error']='Pleas enter your password';
            header("location: index.php");

        }elseif (strlen($_POST['password']) <8) {
            $_SESSION['error']='password > 8';
            header("location: index.php");
            
    
        // } else if (strlen($_POST['password1']) >= 5 || strlen($_POST['passwprd1']) <=10 ) {
        //     $_SESSION['error']='รหัสผ่านต้องมีความยาวระหวาง 5 ถึง 10';
        //     header("location: sigup.php");
    
     

        } else {
            try {

                $check_data = $conn->prepare("SELECT * FROM sigups WHERE email = :email");
                $check_data -> bindParam(":email", $email);
                $check_data -> execute(); 
                $row = $check_data->fetch(PDO::FETCH_ASSOC);

                if ($check_data->rowCount()>0){


                    if($email == $row['email']){
                        if(password_verify($password1,$row['password'])){
                            if($row['urole']=='user'){
                                $_SESSION['user_login']=$row['id'];
                                header("location: home.php");
                        

                            }elseif($row['urole']=='admin'){
                                $_SESSION['admin_login']=$row['id'];
                                header("location: admin/user.php");
                                
                            } else{
                                $_SESSION['users_login']=$row['id'];
                                header("location: indexwebpage.php");

                            }

                        } else{
                            $_SESSION['error']='wrong password';
                            header("location: index.php");

                        }

                    }else{
                        $_SESSION['error']='wrong email ';
                        header("location: index.php");

                    }   
                }else {
                    $_SESSION['error'] = "no data users";
                    header("location: index.php");

                }

            } catch(PDOException $e){
                echo $e->getMessage();
            }
        }    
?>