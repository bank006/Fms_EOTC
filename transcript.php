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
        .y li{
            font-size: 24px;
            color: black;
        }
        .y p{
            font-size: 20px;
            color: black;
        }

        .backgourd{
            background-image:url(./images/fms_bg.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 90vh;
            
            overflow-y: scroll;
            margin-left: 250px;
            position: relative;
            background: rgba(240, 277, 277, 0.5);
            backdrop-filter: blur(15px);
        }

        .backgourd-blur{
            
            position: absolute;
            z-index: 1;
        }

        .content{
            padding: 10px;
            height: 65vh;
            overflow-y: scroll;
            margin-top: -50px;
        }

        .boxcontent{
            position: absolute;
            margin-left: 250px;
            height: 85vh;
            width: 1280px;
            
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
            <nav style=" background: #5ABEFF;" id="sidebar" class="col-xl-2 sidebar collpase">
                <div style="position:fixed;" >
                    <ul class="nav flex-column  ms-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">
                                <span class="ml-2"><a style="color: white; font-size:15px;" href="./transcript.php">กิจกรรมมหาวิทยาลัย</a></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " aria-current="page">
                                <span class="ml-2"><a style="color: white; font-size:15px; "   href="./rallyfms.php" >ชุมชุมคณะวิทยาการจัดการ</a></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " aria-current="page">
                                <span class="ml-2"><a style="color: white; font-size:15px;"   href="./rallypsu.php" >ชุมนุมมหาวิทยาลัย</a></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <div class="backgourd">
               <div class="backgourd-blur"></div>
            </div>
            <div class="boxcontent">
                    <div style="margin-top: 20px; " class="back">
                        <a href="./reviwe.php"><i style="width: 60px; height:60px; color:black;" class="fa-solid fa-chevron-left"></i></a>
                    </div>
                    <div class="content">
                        <div class="y">
                            <li>ชั้นปีที่1ขั้นเตรียมความพร้อม</li>
                            <p>(Leaner Awareness)(Freshman Preparation(Leaner Awareness))</p>
                            <p>Y102 หลักสูตร Freeman Orientation</p>
                            <p>Y103 หลักสูตรการเตรียมความพร้อมการเรียนรู้เเบบวิธีดุดมศึกษา</p>
                            <p>Y104 หลักสูตรการเตรียมความพร้อมอยู่ร่วมในโลกสังคมพหุวัฒนธรรม</p>
                        </div>
                        <div class="y">
                            <li>ชั้นปีที่2ขั้นเรียนรู้ชุมชน เรียนรู้สังคม(Community and cultural Engagement )(Community and Cultural Engagement for Sophomores</li>
                            <p>Y201 หลักสูตรการเข้าสู่ชุมชนเเละการเรียนรู้ชุมชน</p>
                            <p>Y202 หลักสูตรพัฒนาภาวะผู้นำ</p>
                            <p>Y203 หลักสูตรทักษะการใช้ชีวิต</p>
                        </div>
                        <div class="y">
                            <li>ชั้นปีที่3 ขั้นสัมผัสโลกกว้าง (Global Discovery)(Global Discovery for Juniors)</li>
                            <p>Y301 หลักสูตรหารเป็นเมืองโลก (Civic Education)</p>
                            <p>Y202 หลักสูตรส่งเสริมการเคลื่อนย้ายนักศึกษา(Student Mobility)</p>
                            <p>Y303 หลักสูตรเสริมสร้างสมมรรถนะสากล</p>
                        </div>
                        <div class="y">
                            <li>ชั้นปีที่4 ขั้นพร้อมสู่การทำงาน(Jop Oraientation)(Jop Orientation Course for Seniors)</li>
                            <p>Y401 หลักสูตรทักษะผู้ประกอบการ</p>
                            <p>Y202 หลักสูตรเตรียมความพร้อมสู่โลกการทำงาน</p>
                        </div>
                    </div>
            </div>
            
            

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