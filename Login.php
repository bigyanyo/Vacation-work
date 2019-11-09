<?php 
session_start() ;
$loginerr = 0 ;
if(isset($_POST['login'])){
	if(isset($_SESSION['data'])){
		if($_POST['log_name'] == $_SESSION['data']['log_name'] && $_POST['password'] == $_SESSION['data']['password']){
			header("Location: profile.php") ;
		}else{
			$loginerr = 1 ;
		}
	}else{
		$loginerr = 1 ;
	}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Login</title>
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
	<?php 
	if($loginerr){
		echo "<div style='color:red;'> Record doesnot exist . Try registering again. </div>" ;
	}

	?>
	<!--<form>-->
	<p class="lcontent">
	Fill up the registered data to log in.<br><br><br>
	<form action = "login.php" method= "POST">
	<p class="lcontent">
	Username:<spam class="rspace" style="margin-left: 25px;"></spam><input name='log_name' class="reginput" type="text" placeholder="Login name"><br>
	Password:<spam class="rspace" style="margin-left: 30px;"></spam><input name='password' class="reginput" type="password" placeholder="Login Password"><br><br>
	
	<input type="submit" id = "btn" class="llogin" name='login'>
	</p>
	
	</form>
	
	</p>
	<!--</form>-->

</body>
</html>	