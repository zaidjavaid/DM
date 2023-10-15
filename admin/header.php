<?php
ob_start();
include('db.php');
include('../validation.php');

session_start();
if (!isset($_SESSION['loggedAdmin'])) {
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<script src="../assets/jquery.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<?php include('../validation.php'); ?>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,300&family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>

<body>

	<div class="header">
		<div style="float: left ; font-size: 35px;">Admin Panel&nbsp; &nbsp;&nbsp;<span style="font-size: 13px">Health is Wealth</span></div>
		<div style="float: right; "><button class="button"><a href="logout.php" style="text-decoration: none; color: white">Logout</a></button></div>
	</div>

</body>

</html>



<style type="text/css">
	body {
		margin: 0;
		font-family: 'Kanit', sans-serif;
		font-family: 'Ubuntu', sans-serif;
	}

	.header {
		background-color: #453;
		padding: 20px;
		color: whitesmoke;
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
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