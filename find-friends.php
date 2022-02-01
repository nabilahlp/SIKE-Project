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
    <title>Find Friends</title>
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
        .search {
          background-color: #202128;
          border: 0.5px solid #FFF;
          box-sizing: border-box;
          border-radius: 32px;
          width: 363px;
          height: 32px;
          padding: 15px;
          font-size: 12px;
        }
         .hr3 {
          border: 0;
          width: 1270px;
          height: 1px;
          background: #BDBDBD;
        }
        .box1 {
            width: 588px;
            height: 55px;  
            padding: 10px;
            margin-top: 10px;
            margin-right: 50px;
            border: 1px solid white;
            font-weight: lighter;
            font-size: 18px;
        }
        .navbar .aktif {
            border-bottom: 3px solid #F03939;
            text-align: center;
            text-decoration: none;
        }
        /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  color: #000;
  padding: 20px;
  border: 1px solid #888;
  width: 600px; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
        input {
  background-color: transparent;
  color: white;
  border-color: transparent;
}
       

    </style>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</head>
<body>
<div class="content">
   <div class="navbar" style="font-weight: lighter">
                <a href="home.php" style="float:left;"><img style="background-color: transparent;" src="assets/logo-navbar.png"></a>
                <table align="right">
                    <tr>
                        <td><a href="home.php">Home</a></td>
                        <td><a href="tournament.php">Tournament</a></td>
                        <td><a href="news.php">News</a></td>
                        <td class="aktif"><a href="find-friends.php">Find Friends</a></td>
                        <td><a href="update-profile.php">My Profile</a></td>
                        <td><a href="logout.php">Logout</a></td>
                    </tr>
                  </table>
                </div>
                <table>
                  <tr>
                    <td>
                        <h4>Find Friends and Team</h4>
                    </td>
                    <td width="660"></td>
                    <td><form action="find-friends.php">
              <input class="search" type="text" name="searchbar" placeholder="Search here..." required>
            </form></td>
                  </tr>
                </table>
<hr class="hr3">
<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <table>
        <tr>
            <td><h4>Profile Detail</h4></td>
            <td><span class="close">&times;</span></td>
        </tr>
    </table>
    <hr>
    <table cellpadding="5">
        <?php
        if (isset($_GET['searchbar'])) {
        $search = $_GET['searchbar'];
        $hasil = mysqli_query($conn, "SELECT * FROM usertable WHERE name like '%".$search."%' OR team like '%".$search."%'");
        foreach ($hasil as $row) {
        ?>
        <tr>
            <td style="width: 140px;">
                <img style="width: 120px; height: 120px;" src="assets/profile.jpg">
            </td>
            <td>
                <table>
                    <tr>
                        <td><b><?php echo $row['name'];?></b></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['team'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['university'];?></td>
                    </tr>
                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <td>Contact</td>
                    </tr>
                    <tr>
                        <td><a href="mailto:<?php echo $row['email'];?>"><img style="width: 48px; height: 48px;" src="assets/logos_email.png"></a></td>
                        <td><a href="https://wa.me/<?php echo $row['phone'];?>"><img style="width: 48px; height: 48px;" src="assets/logos_whatsapp.png"></a></td>
                    </tr>
                </table>
            </td>
        </tr>
        <?php 
        }
        }
        ?>
    </table>
  </div>
</div>
        <table>
            <tr>
                <td id="detail-profile" style="column-width:600px">
                    <table cellpadding="5">
                    <?php
                    if (isset($_GET['searchbar'])) {
                    $search = $_GET['searchbar'];
                    $hasil = mysqli_query($conn, "SELECT * FROM usertable WHERE name like '%".$search."%' OR team like '%".$search."%'");
                    foreach ($hasil as $row) {
                    ?>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td style="width: 140px;">
                                        <img style="width: 120px; height: 120px; border-radius: 16px;" src="assets/profile.jpg">
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td><b><?php echo $row['name'];?></b></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo $row['team'];?> - <?php echo $row['university'];?>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <?php 
                    }
                    }
                    ?>
                    </table>
                </td>
                <td style="column-width: 600px;">
                    <table cellpadding="5">
                    <?php
                    if (isset($_GET['searchbar'])) {
                    $search = $_GET['searchbar'];
                    $hasil = mysqli_query($conn, "SELECT DISTINCT team, university FROM usertable WHERE name like '%".$search."%' OR team like '%".$search."%'");
                    foreach ($hasil as $row) {
                    ?>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td style="width: 140px;">
                                        <img style="width: 120px; height: 120px; border-radius: 16px;" src="assets/team.png">
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td><b><?php echo $row['team'];?></b></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo $row['university'];?>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <?php 
                    }
                    }
                    ?>
                    </table>
                </td>
            </tr>
        </table>
<!-- End Update Profile -->
<br><br><br><br><br><br><br><br><br><br><br><br>
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
<script>
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("detail-profile");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>