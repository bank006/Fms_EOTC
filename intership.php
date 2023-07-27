<?php
    session_start();
    require_once "config/db.php";

    // print_r($_SESSION['user_login']);

?>

<!doctype html>
<html lang="en">
<head>
    <title>Home | FMS FRESHY BOARD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS FILES -->        
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/reviwe.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mitr:wght@200&display=swap');

body{
font-family: 'Mitr', sans-serif;
overflow: hidden;
}

        .sidebar{
            background: whitesmoke;
            top: 130px;
            bottom: 0;
            position: fixed;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, 0.1);
        }
        main{
        
            position: absolute;
            right: 0;
        }
        h7{
            color: blue;
        }
        span{
            font-size: 20px;
            color: black;
        }
      

        .loca{
            margin-left: 850px;
            position: absolute;
            margin-top: -65px;
        }
      
    </style>
</head>
<body id="section_1">

    <?php 
        include("header.php");
    ?>

    <?php 
        include("navbar.php");
    ?>

   

    <div style=" width:1100px; margin-right:200px;"      class="container-fluid">
        <div  class="row">
           
            <div class="review" >
                <h2 class="mt">ชื่อสถานประกอบการ</h2>
                <div >
                    <!-- <p>ค้นหารายวิชาที่เรียน</p> -->

                </div>
                <form action="./comment.php" method="POST" class="p-3" >
                    <div class="input-group">
                        <input type="text" name="searchats" id="searchats" class="form-control form-control-lg  border border-dark" placeholder="ค้นหาจังหวัดสถานประกอบการ" autocomplete="off" required>
                        <!-- <div class="input-group-append">
                        <button  type="submit" name="submit " value="search" class="btn btn-lg border border-dark rounded-0 btn-success " placeholder="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div> -->
                    </div>
                </form>
            </div>   
        </div>    
    </div> 
    <div style="margin-left:250px;  display: flex; " class="title">
        <p style=" display:block; font-size: 20px; color:#282828;">รายชื่อสถานประกอบการทั้งหมด</p>
        <!-- <p style="display:block; margin-left:500px; font-size: 20px; color:#282828;"><a style="color: #282828; " href="./allcomment.php">ดูรีวิวรายวิชาทั้งหมด..</a></p> -->
    </div>
    <div  class="col-md-8" style=" overflow-y: scroll; margin-left: 250px;  width:1100px; height:50vh;">
         <div class="list-group" ></div>
            <div class="container my-7">
               
         
                
           <div  class="big">

                <div  class="row">
                <div class=" col-sm">  
                        <div >
                            <div >
                                <p id="show-listats"></p>
                            </div> 
                            <hr>
                        </div>   
                    </div>
                <?php
                    $stmt = $conn->query("SELECT * FROM intership  ORDER BY ats_name ASC  ");
                    $stmt->execute();
                    $row = $stmt->fetchAll();

                    foreach($row as $r){
                
           
           ?> 
                    
                    <div class="boxrow col-sm">  
                        <div style="display: flex; "  class="box " >
                            <a style="display: block;  black; width:400px;" href="#"><p style="font-size: 34px; color: black;"><?=$r['ats_name'];?></p></a>
                            
                            <a style="display: block; margin-left:500px;" href="#"><p style="font-size: 34px; color: black;"><?=$r['ats_loca'];?></p></a>
                            
                        </div>
                        <hr>
                        
                    </div>
                    


             
                   <?php   }
                             ?>
               
                </div>
           </div>
    </div>  


    

   

    
    
 
                



        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/custom.js"></script>

        <script>
            feather.replace()
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="./mainintership.js"></script>

    </body>
</html>