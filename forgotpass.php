<?php 
include "config.php";

    //proses ganti password
    if (isset($_POST['reset'])) {
    $email = $_POST['email'];
    $new_pass = password_hash($_POST['new_pass'], PASSWORD_DEFAULT);
    $confirm_pass = $_POST['confirm_pass'];
    
    //cek email
    $sql = mysqli_query($conn, "SELECT * FROM usertable WHERE email ='$email'");
    $hasil = mysqli_num_rows ($sql);
    if (! $hasil >= 1) {
        ?>
            <script language="JavaScript">
            alert('Email not found, please try again!');
            </script>
        <?php
    }
    //validasi data data kosong
    else if (empty($_POST['new_pass']) || empty($_POST['confirm_pass'])) {
    	?>
            <script language="JavaScript">
            alert('Change password failed, data cannot be empty!');
            </script>
        <?php 
    }
    //validasi input konfirm password
    else if (($_POST['new_pass']) != ($_POST['confirm_pass'])) {
        ?>
            <script language="JavaScript">
            alert('Change password failed, new password and confirm new password must be the same!');
            </script>
        <?php
    }
    else {
    //update data
    $sql = mysqli_query($conn, "UPDATE usertable SET password ='$new_pass' WHERE email ='$email'");
    //setelah berhasil update
    if ($sql) {
        ?>
            <script language="JavaScript">
            alert('Change password successfully!');
            window.location.replace("login.php");
            </script>
        <?php    
    } else {
        ?>
            <script language="JavaScript">
            alert('Change password failed!');
            </script>
        <?php    
    }
    }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style-1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
		body {
			background: #303234;
		}
		#content {
			font-family: Inter;
			font-style: normal;
			color: #4f4f4f;
			width: 540px;
			margin: 15px auto;
			height: auto;
			padding: 20px;
			background-color: #F6F6F6;
			box-shadow: 0 4px 8px 0;
			border-radius: 24px;
		}
	</style>
</head>
<body>
		<div class="navbar">
                <a href="#" style="float:left;">SIKE</a>
                <table align="left">
                    <tr>
                        <td><a href="home.php">Home</a></td>
                        <td><a href="tournament.php">Tournament</a></td>
                        <td><a href="news.php">News</a></td>
                        <td><a href="login.php">Find Friends</a></td>
                        <td><a href="login.php">Sign In</a></td>
                    </tr>
                </table>
            </div>
        </div>
	<br>
<div id="content">
		<form action="" method="POST" name="forgot_pass">
			<br><br><br>
			<h3 style="font-weight: bold; text-align: left;">Forgot Password</h3>
			<p style="text-align: left;">Enter the email associated with your account and we’ll reset your password.</p>
			<div class="form-row pagination justify-content-center">
				<div class="form-group col-md-10">
					<div class="input-group">
						<input type="email" name="email" class="form-control border-right-0" placeholder="Email Address" required>
						<div class="input-group-append">
							<span class="input-group-text bg-transparent"><i class="fas fa-envelope"></i></span>
						</div>
					</div>
					<p></p>

					<div class="input-group">
						<input type="password" name="new_pass" class="form-control border-right-0" placeholder="New Password" required>
						<div class="input-group-append">
							<span class="input-group-text bg-transparent"><i class="fas fa-unlock"></i></span>
						</div>
					</div>
					<p></p>

					<div class="input-group">
						<input type="password" name="confirm_pass" class="form-control border-right-0" placeholder="Confirm New Password" required>
						<div class="input-group-append">
							<span class="input-group-text bg-transparent"><i class="fas fa-unlock"></i></span>
						</div>
					</div>
					<p></p>

					<input style="background: #30696E; border-color: #30696E; font-weight: bold; font-size: 12pt;" class="btn btn-primary btn-lg btn-block" type="submit" name="reset" value="Reset Password">
				</div>
			</div>
			<br><br><br>
		</form>
	</div>
</body>
</html>