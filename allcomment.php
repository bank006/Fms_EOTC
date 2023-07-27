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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
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
      
    </style>
</head>
<body id="section_1">

    <?php 
        include("header.php");
    ?>

    <?php 
        include("navbar.php");
    ?>

    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavs" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> -->

   

    <div   class="container-fluid">
        <div  class="row">
            <nav style="background: #C15AF4;" id="sidebar" class="col-md-3 col-lg-2 d-md-block dg-light sidebar collpase">
                <div style="position:fixed;" >
                    <ul class="nav flex-column  ms-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">
                                <span class="ml-2"><a style="color:black; font-size:20px;" href="./cours.php">หลักสูตร</a></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " aria-current="page">
                                <span class="ml-2"><a style="color:black; font-size:20px;"   href="./reviwe.php" >รีวิวรายวิชาเรียน</a></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div style=" margin-left:260px; width:30px; margin-top:12px;"  class="back" >
                <a href="./reviwe.php"><i style=" width: 30px; height:30px; " class="fa-solid fa-chevron-left"></i></a>
            </div> 
            <div class="review" style="padding-left: 300px;" >
            
            <h2 class="mt">ดูรีวิวรายวิชาเรียน</h2>
                
                <div >
                    <!-- <p>ค้นหารายวิชาที่เรียน</p> -->

                </div>
                <form action="./comment.php" method="POST" class="p-3" >
                    <div class="input-group">
                        <input type="text" name="search" id="search" class="form-control form-control-lg  border border-dark" placeholder="ค้นหารายวิชาที่ต้องการรีวิว" autocomplete="off" required>
                        <div class="input-group-append">
                            <button style="background: #FFAF0A ;" type="submit" name="submit " value="search" class="btn btn-lg border border-dark rounded-0 " placeholder="search">search</button>
                        </div>
                    </div>
                </form>
            </div>   
        </div>    
    </div> 
    
    <div style="margin-left:400px;  display: flex; " class="title">
    
        <p style=" display:block; font-size: 20px; color:#282828;">รายวิชาทั้งหมด</p>
        <!-- <p style="display:block; margin-left:500px; font-size: 20px; color:#282828;"><a style="color: #282828; " href="#">ดูรีวิวรายวิชาทั้งหมด..</a></p> -->
    </div>
    <div  class="col-md-8" style=" overflow-y: scroll; margin-left: 350px;  width:1100px; height:50vh;">
         <div class="list-group" ></div>
            <div class="container my-7">
               
         
                
           <div  class="big">
           
                <div  class="row">

                
                <?php
                    $stmt = $conn->query("SELECT * FROM subjectw ");
                    $stmt->execute();
                    $row = $stmt->fetchAll();

                    foreach($row as $r){
                
           
           ?> 
                    
                    <div class="boxrow col-sm">  
                        <div class="box " id="show-list">
                            <a href="./comment.php?get_id=<?php echo$r['s_id'];?>"><p style="font-size: 34px; color: black;"><?=$r['sub_id'];?> &nbsp;<?php echo$r['sub_name'];?></p></a>
                            <div class="comment">
                                <a 
                                   type="submit" class="btn btn-success"  href="./comment.php?get_id=<?php echo$r['s_id'];?>"><p style="font-size: 34px; color: black;"></p>
                                
                    
                                คลิ๊กเพื่อรีวิว
                                    
                                </a>
                            </div>
                        </div>
                        
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
        <script src="./main.js"></script>

    </body>
</html>