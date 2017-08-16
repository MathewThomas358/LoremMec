<?php
  if (isset($_POST['submit'])) {

     $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $email=$_POST['email'];
     $cid=$_POST['cid'];
     $pword=$_POST['pword'];

      $connection = mysqli_connect('localhost:3306', 'root', '', 'id666374_mecdata');
      
      
      $query = "INSERT INTO data(fname,lname,email,cid,pword)";
      $query .= "VALUE ('$fname','$lname','$email','$cid','$pword')";

      mysqli_query($connection, $query);

  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lorem Ipsum | Where we Connect</title>
	<link rel="stylesheet" type="text/css" href="../Bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="sign.css">
	<link href="https://fonts.googleapis.com/css?family=Chewy|Vampiro+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">
</head>
<body>
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php">Lorem Ipsum</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="http://www.mec.ac.in">MEC</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="sign.php">Signup  <i class="fa fa-user-plus"></i></a></li>
        <li><a href="../Login/login.php">Login  <i class="fa fa-user"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>
 <div class="container">
 	<div class="row">
 		<div class="col-lg-3"></div>
 		<div class="col-lg-6">
 			<div class="jumbotron">
 				<h2 class="acme talign big">Lorem Ipsum</h2>
 				<p class="cookie talign bigg">Sign Up</p>
 			</div>
 		</div>
 		<div class="col-lg-3"></div>
 	</div>
 </div>
 <div class="container">
 	<div class="row">
 		<div class="col-lg-4 col-md-4 col-sm-4"></div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="">
        <div>
          <h2 class="cookie">Sign-Up</h2>
          <form action="../Sign_Success/SignSucc.php" method="post">
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <input type="name" name="fname" class="form-control" id="exampleInputEmail1" placeholder="First Name">
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <input type="name" name="lname" class="form-control" id="exampleInputEmail1" placeholder="Last Name">
                    </div>
                  </div>
                  
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="E-Mail ID">
                </div>
                <div class="form-group">
                  <input type="name" name="cid" class="form-control" id="exampleInputPassword1" placeholder="College ID">
                </div>
                <div class="form-group">
                  <input type="password" name="pword" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <button type = "submit" name="submit" class = "btn btn-primary" href="Sign_Success/SignSucc.php">Sign Up <i class="fa fa-user-plus"></i></button>
          </form>
        </div>
      </div>
    </div>
 		<div class="col-lg-4 col-md-4 col-sm-4"></div>
 		
 	</div>
 </div>
 
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="MEC.js"></script>
</body>
</html>

