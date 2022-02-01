<?php

include "config.php";

session_start();

if(!isset($_SESSION['email'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style-1.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
        body {
            background: #303234;
        }
        #content {
            font-family: Inter;
            font-style: normal;
            color: #4f4f4f;
            width: 628px;
            margin: 15px auto;
            height: auto;
            padding: 20px;
            background-color: #F6F6F6;
            box-shadow: 0 4px 8px 0;
            border-radius: 24px;
        }
        .navbar .aktif {
            border-bottom: 3px solid #F03939;
            text-align: center;
            text-decoration: none;
        }
       

    </style>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</head>
<body>

<!-- Start Carousell -->
<div class="slideshow-container">
    <!-- Start Banner 1 -->
    <div class="mySlides">
        <div class="numbertext">    
            <div class="navbar">
                <a href="index.php" style="float:left;"><img style="background-color: transparent;" src="assets/logo-navbar.png"></a>
                <table align="right">
                    <tr>
                        <td class="aktif"><a href="home.php">Home</a></td>
                        <td><a href="tournament.php">Tournament</a></td>
                        <td><a href="news.php">News</a></td>
                        <td><a href="find-friends.php">Find Friends</a></td>
                        <td><a href="update-profile.php">My Profile</a></td>
                        <td><a href="logout.php">Logout</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <img src="assets/banner1.png" style="width:100%">
    </div> 
    <!-- End Banner 3 -->
    <!-- Start Banner 2 -->
    <div class="mySlides">
        <div class="numbertext">    
            <div class="navbar">
                <a href="index.php" style="float:left;"><img style="background-color: transparent;" src="assets/logo-navbar.png"></a>
                <table align="right">
                    <tr>
                        <td class="aktif"><a href="home.php">Home</a></td>
                        <td><a href="tournament.php">Tournament</a></td>
                        <td><a href="news.php">News</a></td>
                        <td><a href="find-friends.php">Find Friends</a></td>
                        <td><a href="update-profile.php">My Profile</a></td>
                        <td><a href="logout.php">Logout</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <img src="assets/banner.png" style="width:100%">
    </div> 
    <!-- End Banner 2 -->
    <!-- Start Banner 3 -->
    <div class="mySlides">
        <div class="numbertext">    
            <div class="navbar">
                <a href="index.php" style="float:left;"><img style="background-color: transparent;" src="assets/logo-navbar.png"></a>
                <table align="right">
                    <tr>
                        <td class="aktif"><a href="home.php">Home</a></td>
                        <td><a href="tournament.php">Tournament</a></td>
                        <td><a href="news.php">News</a></td>
                        <td><a href="find-friends.php">Find Friends</a></td>
                        <td><a href="update-profile.php">My Profile</a></td>
                        <td><a href="logout.php">Logout</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <img src="assets/banner3.png" style="width:100%">
    </div> 
    <!-- End Banner 3 -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<!-- Start dot circles -->
<div style="text-align:center; background-color: #202128;;">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<!-- End dot circles -->

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
    </script>
<!-- End Carousell -->

<div class="content">
    <table>
        <tr> 
            <td>

                <div class="box" style="background-color:  #34353C; border-color:#34353C;  margin-left:20px; margin-bottom: 20px;">
                    <img src="assets/dot.png" style="display:block; margin-left:auto; margin-right:auto; background-color: transparent; width: 50%;">
                </div>
            </td>
            <td>

                <div class="box" style="background-color:  #34353C; border-color:#34353C;  margin-left:20px; margin-bottom: 20px;">
                    <img src="assets/ml-logo.png" style="display:block; margin-left:auto; margin-right:auto; background-color: transparent; width: 240px; height: 120px;">
                </div>
            </td>
            <td>

                <div class="box" style="background-color:  #34353C; border-color:#34353C;  margin-left:20px; margin-bottom: 20px;">
                    <img src="assets/val-logo.png" style="display:block; margin-left:auto; margin-right:auto; background-color: transparent; width: 50%; height: 100px;">
                </div>
            </td>
            <td>

                <div class="box" style="background-color:  #34353C; border-color:#34353C;  margin-left:20px; margin-bottom: 20px;">
                    <img src="assets/fort-logo.png" style="display:block; margin-left:auto; margin-right:auto; background-color: transparent; width: 200px; height: 100px;">
                </div>
            </td>
        </tr>
                <tr> 
            <td>

                <div class="box" style="background-color:  #34353C; border-color:#34353C;  margin-left:20px; margin-bottom: 20px;">
                    <img src="assets/aov-logo.png" style="display:block; margin-left:auto; margin-right:auto; background-color: transparent; width: 200px; height: 100px;">
                </div>
            </td>
            <td>

                <div class="box" style="background-color:  #34353C; border-color:#34353C;  margin-left:20px; margin-bottom: 20px;">
                    <img src="assets/free-logo.png" style="display:block; margin-left:auto; margin-right:auto; background-color: transparent; width: 200px; height: 90px;">
                </div>
            </td>
            <td>

                <div class="box" style="background-color:  #34353C; border-color:#34353C;  margin-left:20px; margin-bottom: 20px;">
                    <img src="assets/lol-logo.png" style="display:block; margin-left:auto; margin-right:auto; background-color: transparent; width: 200px; height: 90px;">
                </div>
            </td>
            <td>

                <div class="box" style="background-color:  #34353C; border-color:#34353C;  margin-left:20px; margin-bottom: 20px;">
                    <img src="assets/pubg-logo.png" style="display:block; margin-left:auto; margin-right:auto; background-color: transparent; width: 200px; height: 90px;">
                </div>
            </td>
        </tr>
    </table>

<!-- Start Tournament -->
<h3 style="float: left;">Tournament </h3>
<h5 style="float: right; padding-right: 30px;"><a style="text-decoration:none; color: #FFF;" href="tournament.php">See More</a></h5>
<br><br>
<table>
    <tr>
        <td>
            <table>
            <?php 
            $hasil = mysqli_query($conn,"SELECT * FROM tournament WHERE id_tournament = '2'");
            foreach($hasil as $row){
            ?>
            <tr>
                <td>
                    <div class="card" style="width: 390px;">
                    <img src="<?php echo $row['image']; ?>" alt="Avatar" style="width:100%;">
                    <div class="container">
                    <h7 style="font-weight: normal;"><?php echo $row['event']; ?></h7>
                    <h6><?php echo $row['title']; ?></h6>
                    <br><?php echo $row['start_date']; ?><br> 
                    <h7 style="color: #F03939;"><?php echo $row['prize']; ?></h7>
                    </div>
                    </div>
                </td>
            </tr>
            <?php
            }
            ?>
            </table>
        </td>
        <td>
            <table>
            <?php 
            $hasil = mysqli_query($conn,"SELECT * FROM tournament WHERE id_tournament = '3'");
            foreach($hasil as $row){
            ?>
            <tr>
                <td>
                    <div class="card" style="width: 390px;">
                    <img src="<?php echo $row['image']; ?>" alt="Avatar" style="width:100%;">
                    <div class="container">
                    <h7 style="font-weight: normal;"><?php echo $row['event']; ?></h7>
                    <h6><?php echo $row['title']; ?></h6>
                    <br><?php echo $row['start_date']; ?><br> 
                    <h7 style="color: #F03939;"><?php echo $row['prize']; ?></h7>
                    </div>
                    </div>
                </td>
            </tr>
            <?php
            }
            ?>
            </table>
        </td>
        <td>
            <table>
            <?php 
            $hasil = mysqli_query($conn,"SELECT * FROM tournament WHERE id_tournament = '4'");
            foreach($hasil as $row){
            ?>
            <tr>
                <td>
                    <div class="card" style="width: 390px;">
                    <img src="<?php echo $row['image']; ?>" alt="Avatar" style="width:100%;">
                    <div class="container">
                    <h7 style="font-weight: normal;"><?php echo $row['event']; ?></h7>
                    <h6><?php echo $row['title']; ?></h6>
                    <br><?php echo $row['start_date']; ?><br> 
                    <h7 style="color: #F03939;"><?php echo $row['prize']; ?></h7>
                    </div>
                    </div>
                </td>
            </tr>
            <?php
            }
            ?>
            </table>
        </td>
    </tr>
</table>
<br>
<!-- End Tournament -->

<!-- Start News -->
<h3 style="float: left;">News</h3>
<h5 style="float: right; padding-right: 30px;"><a style="text-decoration:none; color: #FFF;" href="news.php">See More</a></h5>
<br><br>
<table>
    <tr>
        <td>
            <table>
            <?php 
            $hasil = mysqli_query($conn,"SELECT * FROM news WHERE id_news ='4'");
            foreach($hasil as $row){
            ?>
            <tr>
                <td>
                    <div class="card mb-3" style="width: 600px; background-color: #34353C;">
                    <div class="row g-0">
                    <div class="col-md-4">
                    <img src="<?php echo $row['image']; ?>" class="img-fluid rounded-start" style="height: 200px;">
                    </div>
                    <div class="col-md-8" style="width: 60%; padding: 0px; height:200px; ">
                    <div class="card-body">
                    <h6 class="card-title"><a href="<?php echo $row['link']; ?>"  style="color: white; text-decoration: none;"><b><?php echo $row['title']; ?></b></a></h6>
                    <small class="card-text">
                    <h7 style="color: white;"><?php echo $row['date']; ?></h7>
                    <p style="font-weight: lighter; color: white;"><?php echo $row['textpost']; ?></p>
                    <a href="<?php echo $row['link']; ?>" style="text-decoration: none;"><b style="color: #F03939 ;">Read More</b></a></small>
                    </div>
                    </div>
                    </div>
                    </div>
                </td>
            </tr>
            <?php 
            }
            ?>
            </table>
        </td>
        <td>
            <table>
            <?php 
            $hasil = mysqli_query($conn,"SELECT * FROM news WHERE id_news ='2'");
            foreach($hasil as $row){
            ?>
            <tr>
                <td>
                    <div class="card mb-3" style="width: 600px; background-color: #34353C;">
                    <div class="row g-0">
                    <div class="col-md-4">
                    <img src="<?php echo $row['image']; ?>" class="img-fluid rounded-start" style="height: 200px;">
                    </div>
                    <div class="col-md-8" style="width: 60%; padding: 0px; height:200px; ">
                    <div class="card-body">
                    <h6 class="card-title"><a href="<?php echo $row['link']; ?>"  style="color: white; text-decoration: none;"><b><?php echo $row['title']; ?></b></a></h6>
                    <small class="card-text">
                    <h7 style="color: white;"><?php echo $row['date']; ?></h7>
                    <p style="font-weight: lighter; color: white;"><?php echo $row['textpost']; ?></p>
                    <a href="<?php echo $row['link']; ?>" style="text-decoration: none;"><b style="color: #F03939 ;">Read More</b></a></small>
                    </div>
                    </div>
                    </div>
                    </div>
                </td>
            </tr>
            <?php 
            }
            ?>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table>
            <?php 
            $hasil = mysqli_query($conn,"SELECT * FROM news WHERE id_news ='3'");
            foreach($hasil as $row){
            ?>
            <tr>
                <td>
                    <div class="card mb-3" style="width: 600px; background-color: #34353C;">
                    <div class="row g-0">
                    <div class="col-md-4">
                    <img src="<?php echo $row['image']; ?>" class="img-fluid rounded-start" style="height: 200px;">
                    </div>
                    <div class="col-md-8" style="width: 60%; padding: 0px; height:200px; ">
                    <div class="card-body">
                    <h6 class="card-title"><a href="<?php echo $row['link']; ?>"  style="color: white; text-decoration: none;"><b><?php echo $row['title']; ?></b></a></h6>
                    <small class="card-text">
                    <h7 style="color: white;"><?php echo $row['date']; ?></h7>
                    <p style="font-weight: lighter; color: white;"><?php echo $row['textpost']; ?></p>
                    <a href="<?php echo $row['link']; ?>" style="text-decoration: none;"><b style="color: #F03939 ;">Read More</b></a></small>
                    </div>
                    </div>
                    </div>
                    </div>
                </td>
            </tr>
            <?php 
            }
            ?>
            </table>
        </td>
        <td>
            <table>
            <?php 
            $hasil = mysqli_query($conn,"SELECT * FROM news WHERE id_news ='1'");
            foreach($hasil as $row){
            ?>
            <tr>
                <td>
                    <div class="card mb-3" style="width: 600px; background-color: #34353C;">
                    <div class="row g-0">
                    <div class="col-md-4">
                    <img src="<?php echo $row['image']; ?>" class="img-fluid rounded-start" style="height: 200px;">
                    </div>
                    <div class="col-md-8" style="width: 60%; padding: 0px; height:200px; ">
                    <div class="card-body">
                    <h6 class="card-title"><a href="<?php echo $row['link']; ?>"  style="color: white; text-decoration: none;"><b><?php echo $row['title']; ?></b></a></h6>
                    <small class="card-text">
                    <h7 style="color: white;"><?php echo $row['date']; ?></h7>
                    <p style="font-weight: lighter; color: white;"><?php echo $row['textpost']; ?></p>
                    <a href="<?php echo $row['link']; ?>" style="text-decoration: none;"><b style="color: #F03939 ;">Read More</b></a></small>
                    </div>
                    </div>
                    </div>
                    </div>
                </td>
            </tr>
            <?php 
            }
            ?>
            </table>
        </td>
    </tr>
</table>
<!-- End News -->
<br><br><br>
</div>
<!-- Start Footer -->
<div class="footer" style="padding:20px;height:250px; color: white; font-weight: bold; text-align: center;">
    <center><img src="assets/logo.png" ></center>
    <h3>Place for the winner only</h3>
    <span class="iconify" data-icon="ant-design:instagram-filled" style="color: #f03939;" data-width="48" data-height="48"></span>
    <span class="iconify" data-icon="brandico:facebook-rect" style="color: #f03939;" data-width="37" data-height="37"></span>
    <span class="iconify" data-icon="fa-brands:twitter-square" style="color: #f03939;" data-width="42" data-height="42"></span>
    <h6 style="padding-top: 50px;">&copy SIKE 2021. All right reserved.</h6>
</div>
<!-- End Footer -->
</body>
</html>