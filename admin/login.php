<?php
ob_start();
session_start();
?>

<!DOCTYPE>
<html>

<head>
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <script src="../assets/jquery.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <?php include('../validation.php'); ?>
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">


</head>

<body>

  <div class='two'>
    <div style='text-align: center; color:#DEDEDE; '>
      <h1 style=" font-size: 55px;"> Admin Login</h1>

    </div>
    <form method='post'>
      <input type="Email" required name="email" placeholder="Email" id='username' class='both' title='Email'> <br />
      <input type="password" required name="password" placeholder="Password" id='password' class='both' title='Password' maxlength="20" minlength="6"><br />
      <input type="submit" name="btn" id='btn_submit' value='PROCEED' class="btn btn-info">
      <br>
      <a href="../index.php" id="a" value='Back to Home page' class="btn ">Back to Home page
    </form>

  </div>

</body>

</html>



<?php
if (isset($_POST['btn'])) {
  include('db.php');

  $result = mysqli_query($con, "select * from admin where email ='" . $_POST['email'] . "' and password = '" . $_POST['password'] . "'");
  $r = mysqli_num_rows($result);

  if ($r == 1) {
    session_start();
    $_SESSION['loggedAdmin'] = $_POST['email'];
    header('location:dashboard.php');
    exit;
  } else {
    echo "<div style='text-align:center; padding:10px; color:red'> Invalid Email or Password. Please try again </div>";
  }
}


?>

<style type="text/css">
  body {
    margin: 0;
    background-color: whitesmoke;
    /* background-image: url('../images/5.jpg'); */
    background-image:url('https://img.freepik.com/free-vector/abstract-technology-particle-background_52683-25766.jpg?w=826&t=st=1697261024~exp=1697261624~hmac=291ccace7cdded74001554b3efd93d54394ce5efab6ec16d9dfa54e6808e9369');
    background-size: cover;


  }


  .two {
    background-color:transparent ;
    width: 50%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 7%;
    background-color:transparent;
    padding: 50px;
    opacity: .6;
    border-radius: 15px;

  }

  .both {
    margin-left: 15%;

    width: 70%;
    height: 45px;
    padding: 5px;
    margin-top: 40px;
    text-indent: 30px;
    border: 1px solid white;
    border-radius: 10px;
    outline: none;
    font-size: 16px;
    /* color: #323232; */
    background-color:transparent;
    color:white;
    font-weight:medium;
  }

  .both:hover {
    border: solid 3px #337ab7;

  }

  #btn_submit:hover {
    font-size: large;
    background-color:#1D2951;
  }

  #btn_submit {
    margin-left: 41%;
    margin-top: 50px;
    padding: 13px;
  }

  #a {
    background-color: wheat;
    margin-left:180px;
    margin-top:10px;
  }

  #a:hover {
    font-size: large;
    color: black;
    background-color:#996731;
  }
</style>