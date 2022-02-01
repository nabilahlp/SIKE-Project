<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
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
			width: 628px;
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
                <a href="index.php" style="float:left;"><img style="background-color: transparent;" src="assets/logo-navbar.png"></a>
                <table align="left">
                    <tr>
                        <td><a href="index.php">Home</a></td>
                        <td><a href="login.php">Tournament</a></td>
                        <td><a href="login.php">News</a></td>
                        <td><a href="login.php">Find Friends</a></td>
                        <td><a href="login.php">Sign In</a></td>
                    </tr>
                </table>
            </div>
        </div>
	<br>
<div id="content">
		<form action="action_register.php" method="POST" autocomplete="">
			<h2 style="text-align: center; font-weight: bold;">Welcome to SIKE!</h2><br>
			<p>Place for the winner only</p>
			<h3 style="font-weight: bold; text-align: left;">Sign up here</h3><br>
			<div class="form-row pagination justify-content-center">
				<div class="form-group col-md-10">
					<div class="input-group">
						<input type="text" name="name" class="form-control border-right-0" placeholder="Full Name" required>
						<div class="input-group-append">
							<span class="input-group-text bg-transparent"><i class="fas fa-user"></i></span>
						</div>
					</div>
					<p></p>

					<div class="input-group">
						<input type="text" name="university" class="form-control border-right-0" placeholder="University" required>
						<div class="input-group-append">
							<span class="input-group-text bg-transparent"><i class="fas fa-university"></i></span>
						</div>
					</div>
					<p></p>

					<div class="input-group">
						<input type="text" name="team" class="form-control border-right-0" placeholder="Team Name">
						<div class="input-group-append">
							<span class="input-group-text bg-transparent"><i class="fas fa-users"></i></span>
						</div>
					</div>
					<p></p>

					<div class="input-group">
						<input type="email" name="email" class="form-control border-right-0" placeholder="Email Address" required>
						<div class="input-group-append">
							<span class="input-group-text bg-transparent"><i class="fas fa-envelope"></i></span>
						</div>
					</div>
					<p></p>

					<div class="input-group">
						<input type="text" name="phone" class="form-control border-right-0" placeholder="Phone Number">
						<div class="input-group-append">
							<span class="input-group-text bg-transparent"><i class="fas fa-phone"></i></span>
						</div>
					</div>
					<p></p>

					<div class="input-group">
						<input type="password" name="password" class="form-control border-right-0" placeholder="Password" required>
						<div class="input-group-append">
							<span class="input-group-text bg-transparent"><i class="fas fa-unlock"></i></span>
						</div>
					</div>
					<p></p>

					<div class="custom-control custom-checkbox">
						<input type="checkbox" name="agree" class="custom-control-input" id="agree">
						<label class="custom-control-label" for="agree" style="float: left;">I agree with SIKE <a style="text-decoration: none;" href="https://www.termsandcondiitionssample.com/live.php?token=07c26rsXgMT2DSTW4rmhuXwiV4LHdGdn"><b style="color: #4f4f4f;">Terms and Conditions</b></a> and <a style="text-decoration: none;" href="https://www.privacypolicygenerator.info/live.php?token=zzILxRI0CCrtch96D69rqn0J2L5GZWlf"><b style="color: #4f4f4f;">Privacy Policy</b></a></label>
					</div>
					<p></p>

					<input style="background: #30696E; border-color: #30696E; font-weight: bold; font-size: 12pt;" class="btn btn-primary btn-lg btn-block" type="submit" name="register" value="Sign Up">
				</div>
			</div>
			
			<p style="text-align: center;">Already have an account? <a style="text-decoration: none; font-weight: bold; color: #4F4F4F;" href="login.php">Login here</a></p>
		</form>
	</div>
</body>
</html>