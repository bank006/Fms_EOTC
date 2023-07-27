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
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mitr:wght@200&display=swap');

body{
font-family: 'Mitr', sans-serif;

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

    <div class="container-fluid">
        <div class="row">
            <nav style="background: #C15AF4;" id="sidebar" class="col-md-3 col-lg-2 d-md-block dg-light sidebar collpase">
                <div class="position-sticky ">
                    <ul class="nav flex-column  ms-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">
                                <span ><a style="color:black; font-size:20px;" class="ml-2" href="#">หลักสูตร</a></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " aria-current="page">
                                <span class="ml-2"><a style="color:black; font-size:20px;" href="./reviwe.php">รีวิวรายวิชาเรียน</a></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class=" col-md10 ml-sm-auto col-lg-10 px-md-4 py-4">
                <nav aria-label="bredcrumb">
                    <!-- <ol class="bredcrumb">
                        <li class="bredcrumb-item">
                            <a href="#">home</a>
                        </li>
                    </ol> -->
                </nav>

                <h2>ก.หมวดศึกษาทั่วไป</h2>
                <table style="margin-bottom: 30px;">
                    <thead>
                        <th>หมวดวิชา</th>
                        <th style="padding-left:100px;">ภาคปกติ</th>
                        <th style="padding-left: 100px;">ภาคสหกิจ</th>
                    </thead>
                    <tbody>
                        <td>สาระที่1 ศาสตร์พระราชาเเละประโยชน์เพื่อนมนุษย์</td>
                        <td class="text-end">4</td>
                        <td class="text-end">4</td>
                    </tbody>
                    <tbody>
                        <td>สาระที่2 ความเป็นพลเมืองเเละชีวิตที่สันติ</td>
                        <td class="text-end">5</td>
                        <td class="text-end">5</td>
                    </tbody>
                    <tbody>
                        <td>สาระที่3 การเป็นผู้ประกอบการ</td>
                        <td class="text-end">1</td>
                        <td class="text-end">1</td>
                    </tbody>
                    <tbody>
                        <td>สาระที่4 การรู้อย่างเท่าทันเเละการรู้ดิจิทัล</td>
                        <td class="text-end">4</td>
                        <td class="text-end">4</td>
                    </tbody>
                    <tbody>
                        <td>สาระที่5 การคิดเชิงระบบการคิดเชิงตรรกะเเละตัวเลข</td>
                        <td class="text-end">4</td>
                        <td class="text-end">4</td>
                    </tbody>
                    <tbody>
                        <td>สาระที่6 ภาษาเเละการสื่อสาร</td>
                        <td class="text-end">4</td>
                        <td class="text-end">4</td>
                    </tbody>
                    <tbody>
                        <td>สาระที่7 สุนทรีศาสตร์เเละกีฬา</td>
                        <td class="text-end">2</td>
                        <td class="text-end">2</td>
                    </tbody>
                    <tbody>
                        <td>สาระที่8 รายวิชาเลือก</td>
                        <td class="text-end">6</td>
                        <td class="text-end">6</td>
                    </tbody>
                  
          
                </table>
                <h2>ข.หมวดวิชาทั่วไป</h2>
                <table style="margin-bottom: 30px;">
                    <thead>
                        <th>วิชาแกน</th>
                    </thead>
                    <tbody>
                        <td style="padding-right: 230px;">347-203 สถิติพื้นฐานส าหรับธุรกิจและการประยุกต์ใช้ </td>
                        <td>  3((2)-2-5)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 230px;">460-101 หลักการตลาด </td>
                        <td>3((3)-0-6)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 230px;">460-103 หลักการเงิน</td>
                        <td>3((3)-0-6)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 230px;">460-104 การจัดการการผลิตและการดำเนินงาน</td>
                        <td>3((3)-0-6)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 230px;">460-201 ทักษะการติดต่อสื่อสารทางธุรกิจ</td>
                        <td>2((1)-2-3)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 230px;">460-301 ธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูลเชิงธุรกิจ</td>
                        <td> 3((2)-2-5) </td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 230px;">460-401 การจัดการเชิงกลยุทธ์</td>
                        <td>  3((2)-2-5)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 230px;">464-101 การบัญชีการเงินเบื้องต้น</td>
                        <td>3((3)-0-6)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 230px;">874-293 กฎหมายธุรกิจ</td>
                        <td>3((3)-0-6)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 230px;">876-102 หลักเศรษฐศาสตร์พื้นฐานและการประยุกต์ </td>
                        <td>3((3)-0-6)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 230px;">460-202 ชุดวิชาดิจิทัล นวัตกรรม และความเป็นผู้ประกอบการ</td>
                        <td>7((3)-8-10)</td>
                    </tbody>
                </table>
              
                
                <table>
                    <thead>
                        <th>วิชาชีพ</th>
                        
                    </thead>
                    <thead>
                        <th>วิชาบังคับ</th>
                    </thead>
                    <thead>
                        <th><h7 >กลุ่มพื้นฐานและโครงสร้างเทคโนโลยีสารสนเทศ</h7></th>
                    </thead>
                    
                    <tbody>
                        
                        <td style="padding-right: 400px;">477-101 หลักการพื้นฐานระบบสารสนเทศ(Foundations of Information System)</td>
                        <td>3((3)-0-6)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 400px;">477-302 เทคโนโลยีแพลตฟอร์มส าหรับคลาวด์(Cloud Computing Platform Technology)</td>
                        <td>3((2)-2-5)</td>
                    </tbody>
                </table>
                <h7 >กลุ่มการพัฒนาระบบสารสนเทศ</h7>
                <table>
                    <tbody>
                        <td style="padding-right: 230px;">477-102 ตรรกะของการใช้โปรแกรมและโครงสร้างข้อมูล(Programming Logic and Data Structure) </td>
                        <td>3((3)-0-6)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 230px;">477-201 การเขียนโปรแกรมเบื้องต้นทางธุรกิจ(Introduction to Programming in Business)</td>
                        <td>3((2)-2-5)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 230px;">477-301 การพัฒนาเว็บขั้นสมบูรณ์(Full Stack Web Development) </td>
                        <td>3((2)-2-5)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 230px;">477-303 การวิเคราะห์และออกแบบระบบสารสนเทศทางธุรกิจ(Business Information System Analysis and Design)  </td>
                        <td>3((2)-2-5)</td>
                    </tbody>
                </table>
                <h7 >กลุ่มการจัดการข้อมูล</h7>
                <table>
                    <tbody>
                        <td style="padding-right: 630px;">477-202 การจัดการฐานข้อมูล(Database Management)</td>
                        <td>3((2)-2-5)</td>
                    </tbody>
                </table>
                <h7 >กลุ่มโครงงานระบบสารสนเทศทางธุรกิจ</h7>
                <table>
                <tbody>
                        <td style="padding-right: 427px;">477-401 สัมมนาระบบสารสนเทศทางธุรกิจ(Seminar in Business Information System)</td>
                        <td>3((1)-4-4)</td>
                    </tbody>
                </table>
                <h7 >กลุ่มเครือข่ายคอมพิวเตอร์และความมั่นคงทางไซเบอร์</h7>
                <table>
                    <tbody>
                        <td style="padding-right: 300px;">477-203 เครือข่ายคอมพิวเตอร์และความมั่นคงทางไซเบอร์(Computer Networking and Cyber Security)</td>
                        <td>3((2)-2-5)</td>
                    </tbody>
                </table>
                <li>วิชาบังคับ สำหรับนักศึกษาที่เลือกเรียนแผนการศึกษาปกติ</li>
                <h7>กลุ่มโครงงานระบบสารสนเทศทางธุรกิจ</h7>
                <table>
                    <tbody>
                        <td style="padding-right: 383px;">477-304 การฝึกงานทางระบบสารสนเทศ(Information System Internship) </td>
                        <td> 320 ชั่วโมง</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 383px;">477-402 โครงงานระบบสารสนเทศทางธุรกิจ I  (Project in Business Information System I)</td>
                        <td>3((0)-9-0)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 383px;">477-403 โครงงานระบบสารสนเทศทางธุรกิจ II (Project in Business Information System II) </td>
                        <td>3((0)-9-0)</td>
                    </tbody>
                </table>
                <h7>กลุ่มธุรกิจอิเล็กทรอนิกส์และนวัตกรรม</h7>
                <table>
                    <tbody>
                        <td style="padding-right: 360px;">477-305 พาณิชย์อิเล็กทรอนิกส์(E-Commerce)</td>
                        <td>3((2)-2-5)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 320px;">477-306 ปัญญาประดิษฐ์และการเรียนรู้ของเครื่องจักร(Artificial Intelligence and Machine Learning)</td>
                        <td>3((2)-2-5)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 320px;">477-307 ทรัพย์สินทางปัญญาส าหรับดิจิทัลคอนเทนท์(Intellectual Property for Digital Contents)</td>
                        <td>3((3)-0-6)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 320px;">477-308 การค้นคืนสารสนเทศ(Information Retrieval) </td>
                        <td>3((2)-2-5)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 320px;">477-309 วิทยาการเข้ารหัสลับและเทคโนโลยีบล็อกเชน(Cryptography and Blockchain Technology) </td>
                        <td>3((2)-2-5)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 320px;">477-310 การปฏิรูปสู่ดิจิทัล(Digital Transformation)</td>
                        <td>3((2)-2-5)</td>
                    </tbody>
                </table>
                <h7>กลุ่มการวิเคราะห์ข้อมูลเชิงธุรกิจ</h7>
                <table>
                    <tbody>
                        <td style="padding-right: 360px;">477-311 ระบบฐานข้อมูลขั้นสูง(Advanced Database Systems)</td>
                        <td>3((2)-2-5)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 405px;">477-312 การส ารวจและการเตรียมข้อมูล(Data Exploration and Preprocessing)</td>
                        <td>3((2)-2-5)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 405px;">477-313 การเขียนโปรแกรมส าหรับการวิเคราะห์ข้อมูล(Programming for Data Analytics)</td>
                        <td>3((2)-2-5</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 405px;">477-314 การแสดงข้อมูลด้วยแผนภาพ(Data Visualization)</td>
                        <td>3((2)-2-5)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 405px;">477-315 คลังข้อมูลและเหมืองข้อมูล(Data Warehousing and Mining)</td>
                        <td>3((2)-2-5)</td>
                    </tbody>
                    <tbody>
                        <td style="padding-right: 405px;">477-316 การเขียนโปรแกรมทางสถิติ(Statistical Programming)</td>
                        <td>3((2)-2-5)</td>
                    </tbody>
                    <h7>ค.</h7>
                </table>
            </main>
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

    </body>
</html>