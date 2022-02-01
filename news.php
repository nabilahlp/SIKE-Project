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
    <title>News</title>
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
                        <td><a href="home.php">Home</a></td>
                        <td><a href="tournament.php">Tournament</a></td>
                        <td class="aktif"><a href="news.php">News</a></td>
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
                        <td><a href="home.php">Home</a></td>
                        <td><a href="tournament.php">Tournament</a></td>
                        <td class="aktif"><a href="news.php">News</a></td>
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
                        <td><a href="home.php">Home</a></td>
                        <td><a href="tournament.php">Tournament</a></td>
                        <td class="aktif"><a href="news.php">News</a></td>
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


<!-- Start News -->
<h3 style="float: left;">News</h3>
<br><br>
<table>
            <?php 
            $hasil = mysqli_query($conn,"SELECT * FROM news WHERE id_news ='4'");
            foreach($hasil as $row){
            ?>
            <tr>
                <td>
                    <div class="card mb-3" style="width: 1220px; margin-left: 15px; padding:auto;background-color: transparent;">
                    <div class="row g-0">
                    <div class="col-md-4">
                    <img src="<?php echo $row['image']; ?>" class="img-fluid rounded-start" style="width: 500px;height: 210px; border-radius: 10px;">
                    </div>
                    <div class="col-md-8" style="width: 65%;  height:200px; ">
                    <div class="card-body">
                    <h6 class="card-title"><a href="<?php echo $row['link']; ?>"  style="color: white; text-decoration: none; font-size: 23px;"><b><?php echo $row['title']; ?></b></a></h6>
                    <small class="card-text">
                    <h7 style="color: white; font-size: 16px;"><?php echo $row['date']; ?></h7>
                    <p style="font-weight: lighter; color: white; font-size: 18px;"><?php echo $row['textpost']; ?></p>
                    <a href="<?php echo $row['link']; ?>" style="text-decoration: none; font-size: 18px;"><b style="color: #F03939 ;">Read More</b></a></small>
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
<br><br><br>
<!-- End News -->
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