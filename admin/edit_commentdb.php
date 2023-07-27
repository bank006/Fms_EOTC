<?php
    session_start();
    require_once '../config/db.php';

    if(isset($_POST['upDate_comment'])){
        $id_com = $_POST['s_id'];
        $text_com =  $_POST['comment'];
        $user_rating =  $_POST['rating'];
        $sub_id =  $_POST['sub_id'];
        $user_id =  $_POST['user_id'];
        

        $sql = $conn->prepare("UPDATE comment SET  text_com = :text_com, user_rating = :user_rating, sub_id = :sub_id, user_id = :user_id  WHERE id_com = :id_com ");
        $sql->bindParam("id_com", $id_com);
        $sql->bindParam(":text_com",$text_com);
        $sql->bindParam(":user_rating", $user_rating);
        $sql->bindParam(":sub_id", $sub_id);
        $sql->bindParam(":user_id", $user_id);
        $sql->execute();

        if($sql){
            $_SESSION['success1']="update success";
            header("location: commenttwo.php");
        }else{
            $_SESSION['error1']="don't update success";
            header("location: editcomment.php");
        }
    }



?>