<?php 
ob_start();
			include('../admin/db.php');

     session_start();
	if(!isset($_SESSION['loggedInUser']))
	{		
		header('location:login.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">
</head>
<body>

	<div class="header">
		<div style="float: left ; font-size: 30px;"><span style="color: #17788e;">USER</span> Panel &nbsp; &nbsp;&nbsp; <b> <span style="font-size: 20px; color:black;"> </b> </span>&nbsp; &nbsp;&nbsp;<span style="font-size: 13px">Health is wealth</span></div>
		<div style="float: right; " > <button class="button"><a href="logout.php" >Logout</a></botton></div>
	</div>

</body>
</html>



<style type="text/css">
	body {
		margin: 0;
		background-color:white; 
		font-family: 'Ubuntu', sans-serif;
	}
	.header {
		/* background:linear-gradient(45deg, red, orange, yellow, green, blue, indigo, violet, red);  */
		background-color: #ffffff;
background-image: linear-gradient(315deg, #ffffff 0%, #1b2845 74%);

		padding: 20px;
		color: #f2f2f2;
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
	}
	.hearder a:hover{
	 background-color: orange;
	// background-image: linear-gradient(315deg, #ffffff 0%, #1b2845 74%);
	}
	.button {
  padding: 10px 20px;
  font-size: 16px;
  background: transparent;
  border: none;
  position: relative;
  color: #f0f0f0;
  z-index: 1;
}

.button::after,
.button::before {
  content: '';
  position: absolute;
  bottom: 0;
  right: 0;
  z-index: -99999;
  transition: all .4s;
}

.button::before {
  transform: translate(0%, 0%);
  width: 100%;
  height: 100%;
  background: #28282d;
  border-radius: 10px;
}

.button::after {
  transform: translate(10px, 10px);
  width: 35px;
  height: 25px;
  background: #ffffff15;
  backdrop-filter: blur(5px);
  border-radius: 50px;
}

.button:hover::before {
  transform: translate(5%, 20%);
  width: 110%;
  height: 110%;
}

.button:hover::after {
  border-radius: 10px;
  transform: translate(0, 0);
  width: 100%;
  height: 100%;
}

.button:active::after {
  transition: 0s;
  transform: translate(0, 5%);
}

</style>