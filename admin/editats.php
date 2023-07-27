<?php
    session_start();
    require_once '../config/db.php';


    if(isset($_POST['upDate_intership'])){
        $ats_id = $_POST['ats_id'];
        $ats_name = $_POST['ats_name'];
        $ats_loca = $_POST['ats_loca'];
        


        $stmt = $conn->prepare("UPDATE intership SET  ats_name = :ats_name, ats_loca = :ats_loca WHERE ats_id = :ats_id ");
        $stmt->bindParam("ats_id", $ats_id);
        $stmt->bindParam(":ats_name", $ats_name);
        $stmt->bindParam(":ats_loca", $ats_loca);
        $stmt->execute();

        if($stmt){
            $_SESSION['success4']='<p class="btn-success"> succes<p>';
            header('location: internship_admin.php');
        }else{
            $_SESSION['error4']='<p class="btn-danger">cant edite succes<p>';
            header('location: uploaduntership.php');
        }

    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
                                            <?php

                                                if(isset($_GET['edit_ats'])){
                                                    $edit = $_GET['edit_ats'];
                                                    $stmt = $conn->query("SELECT * FROM intership WHERE ats_id = $edit ");
                                                    $stmt->execute();
                                                    $data = $stmt->fetch();
                                                }
            
                                               

                                                
                                               
                                                            
                                            ?>
            <form action="editats.php"  method="POST">
 
                <div class="" id="sModal" tabindex="" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New intership</h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <div class="modal-body">
                            
                                    <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">new name intership</label>
                                            <input type="text" hidden name="ats_id" value="<?php echo $data['ats_id'];?>">                                    
                                            <input type="text" class="form-control" id="recipient-name" name="ats_name" value="<?php echo $data['ats_name'];?>">
                                            <label for="recipient-name" class="col-form-label">new local</label>
                                            <input type="text" class="form-control " id="recipient-name" name="ats_loca" value="<?php echo $data['ats_loca'];?>">
                                            
                                        </div>
                                        <!-- <div class="mb-3">
                                            <label for="message-text" class="col-form-label">name subject</label>
                                            <input class="form-control" id="message-text" name="namesub" value="<?php echo $data['sub_name'];?>">
                                        </div> -->
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <a href="./internship_admin.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Go back</a>
                                        <button name="upDate_intership" class="btn btn-warning d-grid w-30" type="submit" >update</button>
                                        
                                    </div>      
                            </div>
                        </div>
                        </div>
            </form>

                        
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
