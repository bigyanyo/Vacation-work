<?php 
session_start() ;
if(isset($_POST['register'])){
	$_SESSION['logged_in'] = 1 ;
	$_SESSION['data'] = $_POST ;
	header("Location: login.php") ;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Register</title>
</head>

<body>
	<header>
		<img class="hotel_img" src="img/name_htl.png">
		<nav>
			<ul class="nav_links">
				<li><a href="index.php">Home</a></li>
				<li><a href="register.php">Book Now</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="profile.php">Profile</a></li>
			</ul>
		</nav>
		<a class="contact" href="contact.php"><button>Contact</button></a>
	</header>

	<form action = "register.php" method="POST">

	<p class="rcontent">
	
	<label for="text">
		Fill up your data here:<br><br><br>
	</label>
	Name:<spam class="rspace" style="margin-left: 25px;"></spam><input name='name' class="reginput" type="text" placeholder="Your Name" required><br>

	Age:<spam class="rspace" style="margin-left: 42px;"></spam><input name='age' class="reginput" type="text" placeholder="Your Age" required><br>

	Contact:<spam class="rspace" style="margin-left: 10px;"></spam><input name='contact' class="reginput" type="text" placeholder="Your Contact number" required><br>
	
	Days:<spam class="rspace" style="margin-left: 35px;"></spam><input name='days' class="reginput" type="text" placeholder="Number of days to live" required><br>

	People:<spam class="rspace" style="margin-left: 19px;"></spam><input name='peoples' class="reginput" type="text" placeholder="Number of people" required><br><br><br>

	Username:<spam class="rspace" style="margin-left: 25px;"></spam><input name='log_name' class="reginput" type="text" placeholder="Login name" required><br>

	Password:<spam class="rspace" style="margin-left: 30px;"></spam><input name='password' class="reginput" type="password" placeholder="Login Password" required><br>

	<br>
	<button type="Submit" id = "btn" class="bsubmit" name='register'>Submit</button>
	<button type="Reset" id = "btn">Reset</button>
	

	</p>
	</form>

	<script>

	document.querySelector(".bsubmit").onclick = function (){
		alert('Your data has been submitted succesfully! Please login to proceed!');
	}

	</script>

</body>
</html>	