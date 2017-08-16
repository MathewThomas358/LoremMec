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
	<link rel="stylesheet" type="text/css" href="../Bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="SignSucc.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<title>Success</title>
</head>
<body>
		<div class="container">
			<div class="jumbotron">
				<p class="lemon big" style="color: white;">Successfully Signed Up!!
				<br>
				Login <a href="../Login/login.php">here</a>
				</p>
			</div>
		</div>

</body>
</html>


