<?php
    session_start();
    require_once 'config/db.php';

    if (isset($_POST['query'])){
        $inputText = $_POST['query'];
        $sql ="SELECT * FROM intership WHERE ats_name LIKE :ats_name";
        $stmt =$conn->prepare($sql);
        $stmt->execute(['ats_name' => '%' . $inputText . '%' ]);
        $result = $stmt->fetchAll();

        if($result){
            foreach($result as $e){
                echo '<a class="list-group-item list-group-item-action border1" href="comment.php?get_sid ='. $e['ats_id'].'"><p style="font-size: 34px; color: black;">'.$e['ats_name'].''.$e['ats_loca'].'<p></a>';
            }
        }else{
            echo '<p style="font-size: 34px; color: black;" class="list-group-item border-1">ไม่มีรายชื่อสถานประกอบการ</p>';
        }

    }
?>