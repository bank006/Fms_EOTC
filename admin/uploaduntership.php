<?php
    session_start();
    require_once '../config/db.php';


    if(isset($_POST['upLoadats'])){
        $name = $_POST['name'];
        $local = $_POST['local'];


        $stmt = $conn->prepare("INSERT INTO intership(ats_name,ats_loca) VALUE(:ats_name,:ats_loca)");
        $stmt->bindParam(":ats_name", $name);
        $stmt->bindParam(":ats_loca", $local);
        $stmt->execute();

        if($stmt){
            $_SESSION['success3']='<p class="btn-success">upload succes<p>';
            header('location: internship_admin.php');
        }else{
            $_SESSION['error3']='<p class="btn-danger">cant upload succes<p>';
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
                            
            <form action="./uploaduntership.php"  method="POST">
            <?php if (isset($_SESSION['error3'])) {?>
                <div class="alert alert-danger" role="alert">
                    <?php
                        echo $_SESSION['error'];
                        unset ($_SESSION['error']);
                    ?> 
                </div>
            <?php }?>


            <?php if (isset($_SESSION['success3'])) {?>
                <div class="alert alert-success" role="alert">
                    <?php
                        echo $_SESSION['success'];
                        unset ($_SESSION['success']);
                    ?> 
                </div>
            <?php }?>
 
                <div class="" id="sModal" tabindex="" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New intership</h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <div class="modal-body">
                            
                                    <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">name</label>
                                            
                                            <input type="text" class="form-control" id="recipient-name" name="name" placeholder="Ex:465-202">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">local</label>
                                            <input class="form-control" id="message-text" name="local" placeholder="Ex:เอกการตลาด" >
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <a href="./subject.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Go back</a>
                                        <button name="upLoadats" class="btn btn-warning d-grid w-30" type="submit" >Upload</button>
                                        
                                    </div>      
                            </div>
                        </div>
                        </div>
            </form>

                        
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
