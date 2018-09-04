<!DOCTYPE html>
<html>
<head>
	<title>CIA 3 Componenet Submission</title>

		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">	
    <!-- Plugin CSS -->
    <link href="magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/cia3.min.css" rel="stylesheet">

</head>
<body>


<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-tr" href="#page-top">CIA 3  </a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
 <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html">Signup</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html">Login</a>
            </li>
            <!-- NOT required as of NOW
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#resume"></a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
            </li>
            -->
          </ul>
        </div>
       </div>
    </nav>


<section class="introduction bg-primary text-white mb-0" >
<br>
<br>
<div class="container">
<h3 class="text-center text-uppercase text-secondary mb-5" >  Create A Dynamic Website  with CRUD Operations</h3>

<hr class="star-light mb-5">
<div class="row">
<div class="col-lg-4 ml-auto">

	
</div>
	
</div>
	
</div>	


</section>




<?php

$server = "localhost:3308";
$user ="root";
$pass ="root";
$db = "cia";
$con = mysqli_connect($server,$user,$pass);
if(!$con)
{
  echo "Not Connected";

}

$dbselect = mysqli_select_db($con,$db);
if(!$dbselect)
{
  echo "Database Not Selected";
}



$email=$_POST['email'];
$password=$_POST['password'];






 $sql ="select email,password (email, password)  from resgistration where email='$email' AND password='$password'"; 

  if(@mysqli_query($con,$sql))
  {
     echo "hello";
  }
  else {
  echo "sorry";
  }
echo "user is  $email, $password";
?>




  <footer class="text-center">
<div class="copyright py-4 text-center text-white">
<div class="container">
  <big>Copyright &copy; All right Reserved to Sachin Thakur</big>
</div>
</div>
</footer>

</body>
</html>