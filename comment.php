<?php
    session_start();
    require_once "config/db.php";
    
    if(isset($_GET['get_id'])){
        $get_id = $_GET['get_id'];
        if(isset($_SESSION['user_login'])){
            $id_user = $_SESSION['user_login'];
        }
    else{
        $get_id || $id_user ='';
        header('location:commment.php');
    }
}


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
    <link href="./css/comment.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">

    <?php
        if(isset($_POST['submit'])){
            if($id_user != ''){

                $review = $_POST['review'];
                $review = filter_var($review, FILTER_SANITIZE_STRING);
                $rating = $_POST['rating'];
                $rating = filter_var($rating, FILTER_SANITIZE_STRING);
              
                $word = array('/กู/','/ควย/','/ค.ว.ย/','/ควาย/','/ไอ้/', '/บ้า/','/มึง/', '/ว่ะ/','/fuck/', '/แม่ง/', '/เลว/', '/ฟาย/', '/สัส/', '/สัด/', '/ฉิหาย/','/เหี้ย/','/ห่า/','/เย็ด/',);
        
                for($i=0;$i<count($word);$i++){
                    $review=preg_replace($word[$i],'',$review);
                }

                $verify_review = $conn->prepare("SELECT * FROM comment WHERE sub_id = ? AND user_id = ? ");
                $verify_review->execute([$get_id, $id_user]);

                if($verify_review->rowCount()> 0 ){
                    $add_review = $conn->prepare("INSERT INTO comment(text_com, user_rating, sub_id , user_id) VALUE(?,?,?,?)");
                    $add_review->execute([$review, $rating, $get_id, $id_user]);
                    $success_msg[]='success';
                    
                }else{
                    $warning_msg[]='your review already';

                    
                }

            }

        }else{
            $warning_msg[]='error';
        }
    
    
    
    ?>
    
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
        .title{
            width: 80%;
            margin-left: 250px;
            padding: 50px;
        }

        .scoll{
            overflow-y: scroll;
        }

        .star input {
            padding-left: 60px;
            width: 60px;
            height: 60px;
            font-size: 50px;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            appearance: none;
            -webkit-appearance: none ;  
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

  
    <div style="margin-top: 20px;  width:300px; padding-top:10px;" class="back" >
        <a href="./reviwe.php"><i style="width: 100px; height:60px; " class="fa-solid fa-chevron-left"></i></a>
    </div>

    <div   class="container-fluid">
        <div class="row">
            <nav style="background: #C15AF4;" id="sidebar" class=" col-md-3 col-lg-2 d-md-block dg-light sidebar collpase">
                <div class="position-sticky ">
                    <ul class="nav flex-column  ms-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">
                                <span class="ml-2"><a style="color:black; font-size:20px;" href="./cours.php">หลักสูตร</a></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link " aria-current="page">
                                <span class="ml-2"><a style="color:black; font-size:20px;" href="#">รีวิวรายวิชาเรียน</a></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav> 
            <?php

                if (isset($_GET['get_id'])){
                    $id = $_GET['get_id'];
                    $stmt = $conn->query("SELECT * FROM subjectw WHERE s_id = $id");
                    $stmt->execute();
                    $ro = $stmt->fetch(PDO::FETCH_ASSOC);

                  

                }



                ?> 
                <div class="sub">
                    <div class="felx">
                        
                        <p><?php echo$ro['sub_name'];?></p>
                    </div>
                </div>

      



        <div class="scoll">
                
                    <!-- <p style="position: absolute; z-index:1; margin-left:850px; color:black; font-size:24px; z-index:-1; ">ยังไม่มีการรีวิว</p> -->
                <?php
                
                        $select_post = $conn->prepare("SELECT * FROM subjectw WHERE s_id = ? LIMIT 1");
                        $select_post->execute([$get_id]);
                        if($select_post->rowCount() > 0){
                            while($fetch_post = $select_post->fetch(PDO::FETCH_ASSOC)){

                            $total_rating = 0 ;
                            $rating_1 = 0 ;
                            $rating_2 = 0 ;
                            $rating_3 = 0 ;
                            $rating_4 = 0 ;
                            $rating_5 = 0 ;

                            $select_rating = $conn -> prepare("SELECT * FROM comment WHERE sub_id = ?");
                            $select_rating->execute([$fetch_post['s_id']]);
                            $total_review = $select_rating->rowCount();
                            while($fetch_rating = $select_rating->fetch(PDO::FETCH_ASSOC) ){
                                $total_rating += $fetch_rating['user_rating'];
                                if($fetch_rating['user_rating'] == 1){
                                    $rating_1 += $fetch_rating['user_rating'];
                                }
                                if($fetch_rating['user_rating'] == 2){
                                    $rating_2 += $fetch_rating['user_rating'];
                                }
                                if($fetch_rating['user_rating'] == 3){
                                    $rating_3 += $fetch_rating['user_rating'];
                                }
                                if($fetch_rating['user_rating'] == 4){
                                    $rating_4 += $fetch_rating['user_rating'];
                                }
                                if($fetch_rating['user_rating'] == 5){
                                    $rating_5 += $fetch_rating['user_rating'];
                                }
                            }

                            if ($total_review != 0 ){
                                $average = round($total_rating / $total_review, 1);
                            }else{
                                $average = 0;
                            }
                
                
                ?>
                <div class="big" >
                    <!-- star -->
                <div class="row" style="  height:280px; border-bottom:1px solid black; margin-bottom:50px;">
                <div class="col-sm-4 text-center" style="margin-top:50px;">
                        <h1 class="text-warning mt-2 mb-4">
                            <b><span id="average_rating"><?=$average; ?></span> / 5</b><i class="fas fa-star star-light mr-1 main_star"></i>
                        </h1>
                    
                        <h3><span id="total_review"><?=$total_review; ?></span> Review</h3>
                    </div>

                    <div class="col-sm-4" style="height:300px;  margin-bottom: 50px;">
                        <div style="height:300px;" class="bb">
                        <p>
                            <i class="fas fa-star star-light mr-1 main_star "></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
    
                            <span><?=$rating_5; ?></span>
                        </p>
                        <p>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            
                            <span><?=$rating_4; ?></span>
                        </p>
                        <p>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            
                            
                            <span><?=$rating_3; ?></span>
                        </p>
                        <p>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <span><?=$rating_2; ?></span>
                        </p>
                        <p>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <span><?=$rating_1; ?></span>
                        </p>
                 
                        </div>
                    </div>
                    <?php
                                    
                                }
                            }else{
                                echo '<p class="empty">post is missing</p>';
                            }
                    
                    ?>
                    <div class=" col-sm-3 text-center" style=" margin-top:50px;  margin-bottom: 50px;">
                        <h4 class="mt-4 mb-3"> เขียนรีวิวอะไรก็ได้สิ้</h4>
                        <button type="button" name="add_review" id="add_review" class="btn btn-success">Review</button>
                    </div>
               </div>

           



               <div class="mt-5" id=review_content></div>
                <?php

                    if (isset($_GET['get_id'])){
                        $id = $_GET['get_id'];
                        $stmt = $conn->query("SELECT comment.id_com, comment.text_com, comment.sub_id, comment.user_id FROM comment JOIN subjectw ON subjectw.s_id=comment.sub_id WHERE s_id = $id ");
                        $stmt->execute();
                        if($stmt->rowCount() > 0){
                            while($ro = $stmt->fetchAll()){
                        
                            $coun_review = $conn->prepare("SELECT * FROM comment WHERE user_id = ?");
                            $coun_review->execute([$id]);
                            $total_review = $coun_review->rowCount();
                            foreach($ro as $o){

                    ?> 
                
                        <div     class="rowbox">
                            <div style="border: 1px solid black;  width:100%;" class="box">
                                <p style="color:black;"><?php echo $o['text_com'];?></p>
                                <p style="color:black;"><?php echo $o['id_com'];?></p>
                            </div>
                        </div>
                        <?php  }
                            }
                        }
                    
                    }
                        else {
                                echo '<p " class="empty">no post</p>';
                            } ?>
                </div>
                
            </div>

            <?php

if (isset($_GET['get_id'])){
    $id = $_GET['get_id'];
    $stmt = $conn->query("SELECT * FROM subjectw WHERE s_id = $id");
    $stmt->execute();
    $ro = $stmt->fetch(PDO::FETCH_ASSOC);

  

}



?> 
            <div id="review_modal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="color: black;" class="modal-title">submit Review</h5>
                            <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="comment.php?get_id=<?php echo $ro['s_id'] ?>"   method="POST">
                            <div class="modal-body">  
                                    <div  class="star" >
                                        <input class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1" name="rating" value="1" type="radio" style="--c:#ff9933;" type="radio" name="crl1"  >
                                        <input class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2" name="rating" value="2" style="--c:#ff9933;" type="radio" name="crl1" >
                                        <input class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3" name="rating" value="3" style="--c:#ff9933;" type="radio" name="crl1" >
                                        <input class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4" name="rating" value="4" style="--c:#ff9933;" type="radio" name="crl1" >
                                        <input class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5" name="rating" value="5" style="--c:#ff9933;" type="radio" name="crl1" >
                                   
                                    </div>
                                    
                                
                                <div class="form-group" >
                                    <input style="margin-left:20px; border:1px solid black; width:400px; margin-top:20px ; border-radius: 20px;" class="from-control" type="text" name="review" id="review" placeholder="เขียนอะไรสักอย่างสิ้.....">
                                </div>
                                <!-- <div class="form-group text-center mt-4"> -->
                                    <button style="margin-top: 10px; margin-left: 350px;" type="submit" class="btn btn-primary" type="submit" name="submit" id="submit" >submit</button>
                                <!-- </div> -->
                            </div>
                            </form>
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

    </body>
</html>



<script>

    $(document).ready(function(){
        var rating_date = 0;
        $('#add_review').click(function(){

            $('#review_modal').modal('show');
        });
        $('#close').click(function(){

            $('#review_modal').modal('hide');
        });

        $(document).on('mouseenter','.submit_star',function(){

            var rating = $(this).data('rating');
            
            reset_background();

            for(var count = 1; count <= rating; count++ )
            {
                $('#submit_star_'+count).addClass('text-warning');
            }

        });

        function reset_background()
        {
            for(var count = 1; count <= 5; count++)
            {
                $('#submit_star_'+count).addClass('star-light');

                $('#submit_star_'+count).removeClass('text-warning');
            }
        }
        $(document).on('mouseleave','.submit_star',function(){

            reset_background();

            for(var count = 1; count <= rating_date; count++)
            {

                $('#submit_star_'+count).removeClass('star-light');

                $('#submit_star_'+count).addClass('text-warning');
            }

        });

         $(document).on('click','.submit_star', function(){

             rating_date = $(this).data('rating');

        });

        // $('#submit').click(function(){
        //     var review = $('#review').val();

        //     if(review == ''  )
        //     {
        //         alert("field")
        //         return false;
        //     }
        //     {
        //         $.ajax({
        //             url:"commentdb2.php?=get_id echo $ro['s_id']  ",
        //             method:"Post",
        //             data:{rating_date:rating_date, review:review },
        //             success:function(data)
        //             {
        //                 $('#review_modal').modal('hide');
        //                 alert(data);
        //             }
        //         })
        //     }
        // })

    });

</script>