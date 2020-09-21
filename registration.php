<?php

//insert Code
if(isset($_POST['submit'])){


		$fullname     =$_POST['fullname'];
	    $username     =$_POST['username'];
	    $email        =$_POST['email'];
	    $password     =$_POST['password'];
	    $phone        =$_POST['phone'];
	    $gender       =$_POST['gender'];
        $dob          =$_POST['dob'];


	    $c = oci_connect("scott","tiger","localhost");
	    oci_set_client_identifier($c, 'admin');

	    $s = oci_parse($c, " INSERT INTO registration(fullname, username, email,password,phone,gender,dob)
	                       VALUES ('$fullname', '$username', '$email','$password','$phone','$gender','$dob')"  );



	  $result=oci_execute($s);

	  if($result){

	  	echo "Your Registration is successful..";
	  }
	  else
	  {
	  	 echo "Failed";
	  }


}



?>




<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>

    <body >
			<div class="sidebar">
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="employee.php">Employee</a></li>
					<li><a href="coffee.php">Menu</a></li>
					<li><a href="supplierDetails.php">Supplier</a></li>
					<li><a href="productDetails.php">Product</a></li>
					<li><a href="registration.php">Register</a></li>
					<li><a href="customerOrder.php">Orders</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>

			<div class="container">
				<div class="main">
				<h1 style="text-align: center;">Registration</h1>
				<form action="" method="POST">
					<div class="name">
					<input type="text" name="fullname" placeholder="Full Name" class="in"><br><br>
					<input type="text" name="username" placeholder="User Name" class="in"><br><br>
					<input type="email" name="email" placeholder="Enter Email Address" class="in"><br><br>
					<input type="password" name="password" placeholder="Password" class="in"><br><br>
					<input type="tel" name="phone" placeholder="Enter Phone Number" class="in"><br><br>
          <input type="text" name="gender" placeholder="Gender" class="in"><br><br>

          <input type="text" name="dob" placeholder="date of birth:" class="in"><br><br>
					</div>
	        <input type="submit" name="submit" value="SUBMIT" class="sub reg_sub"><br><br> <a href="index.php">Already Registerd?</a>
				</form>
				</div>

			</div>


	</body>
</html>
