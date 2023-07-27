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
        
        .y li {
            color: black;
            font-size: 24px;
        }
      
        .y a{
            color: black;
            font-size: 17px;
            margin-left: 20px;
        }

        hr{
            size: 2px;
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
            <nav style="background: #5ABEFF;" id="sidebar" class="col-md-3 col-lg-2 d-md-block dg-light sidebar collpase">
                <div style="position:fixed;" >
                    <ul class="nav flex-column  ms-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">
                                <span class="ml-2"><a style="color: white; font-size:20px;" href="./transcript.php">กิจกรรมมหาวิทยาลัย</a></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " aria-current="page">
                                <span class="ml-2"><a style="color: white; font-size:20px;"   href="./rallyfms.php" >ชุมชุมคณะวิทยาการจัดการ</a></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " aria-current="page">
                                <span class="ml-2"><a style="color: white; font-size:20px;"   href="./rallypsu.php" >ชุมนุมมหาวิทยาลัย</a></span>
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
                        <a href="./rallyfms.php"><i style="width: 60px; height:60px; color:black;" class="fa-solid fa-chevron-left"></i></a>
                    </div>

                    <div class="content">
                        <h3>ด้านบำเพ็ญประโยชน์</h3>
                        <div class="y">                           
                            <a href="https://www.facebook.com/SorndekPSUhatyai"><li>ชมรมการศึกษาเพื่อสังคม</li></a>
                        </div>
                        <div class="y">
                            <a href="https://web.facebook.com/PublicHealthRelationClub"><li>ชมรมสาธารณสุขสัมพันธ์</li></a>
                        </div>
                        <div class="y">                           
                            <a href="https://web.facebook.com/anurak.psu.hatyai"><li>ชมรมอนุรักษ์สิ่งแวดล้อม</li></a>
                        </div>
                        <div class="y">
                            <a href="https://web.facebook.com/rsaclub"><li>ชมรมอาสาพัฒนา</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/rotaractclubpsu"><li>ชมรมโรตาแรคท์ </li></a>
                        </div>
                        <hr>
                    
                        <h3>ด้านศิลปวัฒนธรรม</h3>
                        <div class="y">                           
                            <a href="https://web.facebook.com/psumusicclub"><li>ชมรมดนตรีสากล</li></a>
                        </div>
                        <div class="y">
                            <a href="https://web.facebook.com/profile.php?id=100070332090656"><li>ชมรมดนตรีไทย</li></a>
                        </div>
                        <div class="y">                           
                            <a href="https://web.facebook.com/profile.php?id=10006354009826"><li>ชมรม คริสตชน  </li></a>
                        </div>
                        <div class="y">
                            <a href="https://web.facebook.com/psulooktungcontest2016"><li>ชมรม นาฏรักษ์</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/PSUDancingClub"><li>ชมรม ศิลปะการเต้นรำ </li></a>
                        </div>
                        <div class="y">                           
                            <a href="https://web.facebook.com/Interclubpsu"><li>ชมรมแลกเปลี่ยนวัฒนธรรมนานาชาติ</li></a>
                        </div>
                        <div class="y">
                            <a href="https://web.facebook.com/PSUCheerleaderHY"><li>ชมรม ผู้นำเชียร์</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/psu.buddhist.club"><li>ชมรมพุทธศาสน์</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/MSSPSU"><li>ชมรมมุสลิม</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/spice.psu"><li>ชมรมเสียงตามสาย</li></a>
                        </div>
                        <hr>
                        <h3>ด้านวิชาการ</h3>
                        <div class="y">                           
                            <a href="https://web.facebook.com/refusecorruptclub"><li>ชมรมคอรัป"ฉัน"ไม่ขอรับ</li></a>
                        </div>
                        <div class="y">
                            <a href="https://web.facebook.com/norsortor.psu"><li>ชมรมนักศึกษาวิชาทหาร</li></a>
                        </div>
                        <div class="y">                           
                            <a href="https://web.facebook.com/PSUSECO88"><li>ชมรมผู้ประกอบการนักศึกษา</li></a>
                        </div>
                        <div class="y">
                            <a href="https://web.facebook.com/PSUChineseCLUB"><li>ชมรมภาษาจีน</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/KelabBahasaMelayu.PSU"><li>ชมรมภาษามลายู</li></a>
                        </div>
                        <div class="y">                           
                            <a href="https://web.facebook.com/PsuSpeechClub"><li>ชมรมวาทศิลป์</li></a>
                        </div>
                        <div class="y">
                            <a href="https://web.facebook.com/psuvitesclub"><li>ชมรมวิเทศสัมพันธ์</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/psu.buddhist.club"><li>ชมรมพุทธศาสน์</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/psu.photoclub"><li>ชมรมศิลปะการถ่ายภาพ</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/peacepsu"><li>ชมรมสันติศึกษา</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/democracyclubpsu"><li>ชมรมเสรีชน คนประชาธิปไตย</li></a>
                        </div>
                        <hr>
                        <div class="y">                           
                            <a href="https://web.facebook.com/psumusicclub"><li>ชมรมดนตรีสากล</li></a>
                        </div>
                        <div class="y">
                            <a href="https://web.facebook.com/profile.php?id=100070332090656"><li>ชมรมดนตรีไทย</li></a>
                        </div>
                        <div class="y">                           
                            <a href="https://web.facebook.com/profile.php?id=10006354009826"><li>ชมรม คริสตชน  </li></a>
                        </div>
                        <div class="y">
                            <a href="https://web.facebook.com/psulooktungcontest2016"><li>ชมรม นาฏรักษ์</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/PSUDancingClub"><li>ชมรม ศิลปะการเต้นรำ </li></a>
                        </div>
                        <div class="y">                           
                            <a href="https://web.facebook.com/Interclubpsu"><li>ชมรมแลกเปลี่ยนวัฒนธรรมนานาชาติ</li></a>
                        </div>
                        <div class="y">
                            <a href="https://web.facebook.com/PSUCheerleaderHY"><li>ชมรม ผู้นำเชียร์</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/psu.buddhist.club"><li>ชมรมพุทธศาสน์</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/MSSPSU"><li>ชมรมมุสลิม</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/spice.psu"><li>ชมรมเสียงตามสาย</li></a>
                        </div>
                        <hr>
                        <h3>ด้านกีฬา</h3>
                        <div class="y">                           
                            <a href="https://www.facebook.com/psusoftball"><li>ชมรมซอฟท์บอลและเบสบอล</li></a>
                        </div>
                        <div class="y">
                            <a href="https://web.facebook.com/psubasketballclub"><li>ชมรมบาสเกตบอล</li></a>
                        </div>
                        <div class="y">                           
                            <a href="https://web.facebook.com/psufutsalhatyai"><li>ชมรมฟุตซอล</li></a>
                        </div>
                        <div class="y">
                            <a href="https://web.facebook.com/PSU.LEAGUE.2015"><li>ชมรมฟุตบอล</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/psushootingclub"><li>ชมรมยิงปืน</li></a>
                        </div>
                        <div class="y">                           
                            <a href="https://web.facebook.com/Psurugbyclub"><li>ชมรมรักบี้</li></a>
                        </div>
                        <div class="y">
                            <a href="https://web.facebook.com/profile.php?id=100063469032001"><li>ชมรมวอลเลย์บอล</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/MartialArtsClubPSU"><li>ชมรมศิลปะป้องกันตัว</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/psupetanque"><li>ชมรมเปตอง</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/profile.php?id=100057533256166"><li>ชมรมแบดมินตัน</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/profile.php?id=100081573367904"><li>ชมรม E-Sport</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/profile.php?id=100066982785786"><li>ชมรมบริดจ์</li></a>
                        </div>
                        <div class="y"> 
                            <a href="https://web.facebook.com/psufencinghatyai/"><li>ชมรมฟันดาบสากล</li></a>
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