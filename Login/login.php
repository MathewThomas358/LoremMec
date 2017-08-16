
<!DOCTYPE html>
<html>
<head>
	<title>Lorem Ipsum | Where we Connect</title>
	<link rel="stylesheet" type="text/css" href="../Bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login.css">
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
        <li><a href="../Signup/sign.php">Signup  <i class="fa fa-user-plus"></i></a></li>
        <li><a href="login.php">Login  <i class="fa fa-user"></i></a></li>
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
 				<p class="cookie talign bigg">Login</p>
 			</div>
 		</div>
 		<div class="col-lg-3"></div>
 	</div>
 </div>
 <div class="container">
 	<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4"></div>
 		<div class="col-lg-4 col-md-4 col-sm-4">
 			<div class=" opac">
 				<div>
 					<h2 class="cookie">Login</h2>
 					<form action="process.php" method="POST">
  							<div class="form-group">
    							<label for="exampleInputEmail1">Email address</label>
    							<input type="email" name="username" class="form-control" id="exampleInputEmail1" placeholder="Email">
  							</div>
  							<div class="form-group">
    							<label for="exampleInputPassword1">Password</label>
    							<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  							</div>
  							
  							<button type = "submit" name="submit" class = "btn btn-primary">Login <i class="fa fa-user"></i></button>
					</form>
 				</div>
 			</div>
 		</div>
    <div class="col-lg-4 col-md-4 col-sm-4"></div>
 	</div>
 </div>
 
 
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

