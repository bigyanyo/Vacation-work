<?php 
session_start();
$data = $_SESSION['data'] ?? [] ;

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Profile</title>
</head>

<body>
	<header>
		<img class="hotel_img" src="img/name_htl.png">
		<nav>
			<ul class="nav_links">
				<li><a href="home.php">Home</a></li>
				<li><a href="register.php">Book Now</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="profile.php">Profile</a></li>
			</ul>
		</nav>
		<a class="contact" href="contact.php"><button>Contact</button></a>
	</header>

	<p class="pcontent">
		<spam style="font-family: Impact; font-size: xx-large;">Registered Data: </spam><br><br><br>

		<?php 
		if($data){
			extract($data) ;
			echo "<h2 class='h2content'>
			Name: $name <br><br>
			Age: $age <br><br>
			Contact number: $contact <br><br>
			No. of days to live: $days <br><br>
			No. of people: $peoples 
			</h2>
			<br><br><br><br>
			<h1 class='h2content'>Visit our hotel for further Process.</h1>";}
		else{
			echo "No data yet." ;
		}

		?>
	</p>

</body>
</html>	