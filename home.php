
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HomeWindow</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<style media="screen">
		h1{float: right;font-size: 57px;line-height: 1.2;position: absolute;top: 6%;left: 56%;color: wheat;}
	</style>
	</head>
	<body style="background-image: url(css/img/home.jpg);">
	<h1>Welcome to Coffee Shop <br> </h1>
	<div>

	<div>
		<form action="" method="POST" >
			<div class="sidebar">
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="customerOrder.php">Orders</a></li>
					<li><a href="employee.php">Employee</a></li>
					<li><a href="coffee.php">Menu</a></li>
					<li><a href="supplierDetails.php">Supplier</a></li>
					<li><a href="productDetails.php">Product</a></li>
					<li><a href="registration.php">Register</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>

			<!-- <input type="submit" name="customerOrder" value="Customer Details" class="btn"><br><br>
			<input type="submit" name="employee" value="Employee Details" class="btn"><br><br>
			<input type="submit" name="coffee"   value="Coffee Details"   class="btn"><br><br>
			<input type="submit" name="search"   value="Search"           class="btn"><br><br>
      <input type="submit" name="logout"   value="Logout"           class="btn"><br><br>
      <input type="submit" name="productDetails"   value="Product Details"           class="btn"><br><br>
      <input type="submit" name="supplierDetails"   value="Suplier Details"           class="btn"><br><br> -->


		</form>

<?php

if(isset($_POST['logout'])){

    	header("location: logout.php");

}

if(isset($_POST['customerOrder'])){

    	header("location: customerOrder.php");

}


if(isset($_POST['employee'])){

    	header("location: employee.php");

}

if(isset($_POST['coffee'])){

    	header("location: coffee.php");

}


if(isset($_POST['search'])){

    	header("location: search.php");

}


if(isset($_POST['productDetails'])){

    	header("location: productDetails.php");

}
if(isset($_POST['supplierDetails'])){

    	header("location: supplierDetails.php");

}
?>


		</div>
	</div>
</body>
</html>
