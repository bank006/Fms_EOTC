<?php
    session_start();
    require_once '../config/db.php';

    if(isset($_POST['upDate'])){
        $s_id = $_POST['s_id'];
        $idsub =  $_POST['idsub'];
        $namesub =  $_POST['namesub'];

        $sql = $conn->prepare("UPDATE subjectw SET  sub_id = :sub_id, sub_name = :sub_name WHERE s_id = :s_id ");
        $sql->bindParam("s_id", $s_id);
        $sql->bindParam(":sub_id",$idsub);
        $sql->bindParam(":sub_name", $namesub);
        $sql->execute();

        if($sql){
            $_SESSION['success']="update success";
            header("location: subject.php");
        }else{
            $_SESSION['error']="don't update success";
            header("location: editsubject.php");
        }
    }



?>