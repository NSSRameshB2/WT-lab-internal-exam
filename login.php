<?php
include "server.php";
session_start();
		if (isset($_POST['Login'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];
				 $qry = "SELECT * FROM user WHERE 'email'='$email' `password`='$password'";
				$sql = mysqli_query($db,$qry);
				 		 if(mysqli_num_rows($sql)>0) {
    			    	    		$row=mysqli_fetch_assoc($sql);
    			    	    		$_SESSION['uid'] = $row['uid']; 
    			    	    		$_SESSION['email'] = $row['email'];
    			    	    		$_SESSION['password'] = $row['password'];
								$_SESSION['success'] = "You are now logged in";
        				}
        				header('location:add.php');
		}
?>
<!Doctype html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<head>
      <h1 align =center>Property Selling</h1>
</head>
<body>
<div class=total>
	<div class="header">
   <button>
	<a href="home.php" >Home</a>
   </button>
	<h2>Login<h2>
	</div>
	<div class="center">
	<form method="post" action="">
	<div class="details">
	<label>Email</label><br>
	<input type="text" name="email" placeholder="enter mail id"required>
	</div>
	<div class="details">
	<label>Password</label><br>
	<input type="password" name="password" placeholder="enter password"required>
	</div>
	<div class="details">
	<button type="submit" name="Login" class="button">Login</button>
	</div>
	<p>NotYetRegister? <br /><a href="register.php">SignUp</a></p>

	</form>
	</div>
</div>
</body>
</html>
