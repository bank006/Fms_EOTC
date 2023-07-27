<?php
    session_start();
    require_once '../config/db.php';


    if(isset($_POST['upLoad'])){
        $id_sub = $_POST['idsub'];
        $name_sub = $_POST['namesub'];

        $sql = $conn->prepare("INSERT INTO subjectw(sub_id,sub_name) VALUE(:sub_id,:sub_name)");
        $sql->bindParam(":sub_id",$id_sub);
        $sql->bindParam(":sub_name", $name_sub);
        $sql->execute();

        if($sql){
            $_SESSION['success2']="upload success";
            header('location: subject.php');
        }else{
            $_SESSION['error2']="can't upload ";
            header('location: uploadsubject.php');
        }
    }

?>