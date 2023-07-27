<?php
    session_start();
    require_once 'config/db.php';

    if (isset($_POST['query'])){
        $inputText = $_POST['query'];
        $sql ="SELECT * FROM subjectw WHERE sub_name LIKE :sub_name ";
        $stmt =$conn->prepare($sql);
        $stmt->execute(['sub_name' => '%' . $inputText . '%' ]);
        $result = $stmt->fetchAll();

        if($result){
            foreach($result as $e){
                echo '<a class="list-group-item list-group-item-action border1" href="comment.php?get_id='.$e['s_id'].'"><p style="font-size: 34px; color: black;">'.$e['sub_name'].'<p></a>';
            }
        }else{
            echo '<p style="font-size: 34px; color: black;" class="list-group-item border-1">ยังไม้ได้ลงทะเบียนในรายวิชานี้</p>';
        }

    }
?>