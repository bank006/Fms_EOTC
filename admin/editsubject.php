<?php
    session_start();
    require_once '../config/db.php';



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

                                                if(isset($_GET['edit_post'])){
                                                    $edit = $_GET['edit_post'];
                                                    $stmt = $conn->query("SELECT * FROM subjectw WHERE s_id = $edit ");
                                                    $stmt->execute();
                                                    $data = $stmt->fetch();
                                                }
            
                                               

                                                
                                               
                                                            
                                            ?>
            <form action="./editdb.php"  method="POST">
 
                <div class="" id="sModal" tabindex="" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New subject</h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <div class="modal-body">
                            
                                    <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">ID subject</label>
                                            <input type="text" hidden name="s_id" value="<?php echo $data['s_id'];?>">
                                            <input type="text" class="form-control" id="recipient-name" name="idsub" value="<?php echo $data['sub_id'];?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">name subject</label>
                                            <input class="form-control" id="message-text" name="namesub" value="<?php echo $data['sub_name'];?>">
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <a href="./subject.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Go back</a>
                                        <button name="upDate" class="btn btn-warning d-grid w-30" type="submit" >update</button>
                                        
                                    </div>      
                            </div>
                        </div>
                        </div>
            </form>

                        
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
