<?php

include "config.php";

session_start();

if(!isset($_SESSION['email'])){
    header("location:login.php");
}

if (isset($_POST['update'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$team = $_POST['team'];
	$university = $_POST['university'];

	mysqli_query($conn, "UPDATE usertable SET name = '$name', phone = '$phone', team = '$team', university = '$university' WHERE email = '$email'");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Profile</title>
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
                        <td><a href="find-friends.php">Find Friends</a></td>
                        <td class="aktif"><a href="update-profile.php">My Profile</a></td>
                        <td><a href="logout.php">Logout</a></td>
                    </tr>
                  </table>
                </div>
                <table>
                  <tr>
                    <td>
                    	<h4>My Profile</h4>
                    </td>
                    <td width="793"></td>
                    <td><form action="find-friends.php">
              <input class="search" type="text" name="searchbar" placeholder="Search here..." required>
            </form></td>
                  </tr>
                </table>
<hr class="hr3">
<!-- Start My Profile -->
<table>
	<?php
	$hasil = mysqli_query($conn, "SELECT * FROM usertable");
	foreach ($hasil as $row) {
	if ($row['email'] == $_SESSION['email']) {
	?>
	<tr>
		<td style="width: 140px;"><img style="width: 120px; height: 120px; border-radius: 16px;" src="assets/profile.jpg"></td>
		<td>
			<table cellpadding="5" style="font-size: 20px; font-weight: lighter;">
				<tr>
					<td><?php echo $row['name']; ?></td>
				</tr>
				<tr>
					<td><?php echo $row['team']; ?></td>
				</tr>
				<tr>
					<td><?php echo $row['university']; ?></td>
				</tr>
			</table>
		</td>
	</tr>
	<?php
	 	}
	 } 
	?>
</table>
<!-- End My Profile -->
<br><br>
<!-- Start Edit Profile -->
<form action="update-profile.php" method="post">
	<table>
		<?php
		$hasil = mysqli_query($conn, "SELECT * FROM usertable");
		foreach ($hasil as $hsl) {
		if ($hsl['email'] == $_SESSION['email']) {
		?>
		<tr>
			<td>
				<div class="box1">
                      <span class="iconify" data-icon="akar-icons:person" style="color: white;" data-width="30" data-height="30"></span>&nbsp; &nbsp;
                      <input type="text" name="name" value="<?php echo $hsl['name']; ?>">
                    </div>
			</td>
			<td>
				<div class="box1">
                      <span class="iconify" data-icon="uil:university" style="color: white;" data-width="30" data-height="30"></span>&nbsp; &nbsp;
                      <input type="text" name="university" value="<?php echo $hsl['university']; ?>">
                    </div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="box1">
                      <span class="iconify" data-icon="carbon:email" style="color: white;" data-width="30" data-height="30"></span>&nbsp; &nbsp;
                      <input type="text" name="email" value="<?php echo $hsl['email']; ?>" readonly>
                    </div>
			</td>
			<td>
				<div class="box1">
                      <span class="iconify" data-icon="fluent:people-team-20-regular" style="color: white;" data-width="30" data-height="30"></span>&nbsp; &nbsp;
                      <input type="text" name="team" value="<?php echo $hsl['team']; ?>">
                    </div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="box1">
                      <span class="iconify" data-icon="bx:bx-phone" style="color: white;" data-width="30" data-height="30"></span>&nbsp; &nbsp;
                      <input type="text" name="phone" value="<?php echo $hsl['phone']; ?>">
                    </div>
			</td>
		</tr>
		<tr>
			<td>
                <br>
				<input style="background: #30696E; font-weight: bold; font-size: 12pt; width: 143px; height: 40px; border: 1px solid #30696E; border-radius: 20px;" type="submit" name="update" value="Update Profile">
			</td>
		</tr>
		<?php
		} 
		}
		?>
	</table>
</form>
<!-- End Update Profile -->

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