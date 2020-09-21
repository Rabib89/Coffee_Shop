<?php


///insert code
if(isset($_POST['add']))
{

	  $proId      =$_POST['proId'];
      $proName    =$_POST['proName'];
      $brand      =$_POST['brand'];
      $quantity   =$_POST['quantity'];


	  $c = oci_connect("scott","tiger","localhost");
	  oci_set_client_identifier($c, 'admin');

	  $s = oci_parse($c, " INSERT INTO productDetails(proId, proName, brand,quantity)
	                       VALUES ('$proId', '$proName', '$brand','$quantity')"  );



	  $result=oci_execute($s);

	  if($result){

	  	echo "data inserted";
	  }
	  else
	  {
	  	 echo "Failed";
	  }

}



///update code
if(isset($_POST['update']))
{

	  $proId      =$_POST['proId'];
      $proName    =$_POST['proName'];
      $brand      =$_POST['brand'];
      $quantity   =$_POST['quantity'];


	  $c = oci_connect("scott","tiger","localhost");
	  oci_set_client_identifier($c, 'admin');

	  $s = oci_parse($c, "UPDATE productDetails SET
	  	                  proName='$proName',brand='$brand',quantity='$quantity'
	                      WHERE proId ='$proId' "  );



	  $result=oci_execute($s);

	  if($result){

	  	echo "data updated";
	  }
	  else
	  {
	  	 echo "Failed";
	  }

}


///delete code
if(isset($_POST['delete']))
{

	  $proId      =$_POST['proId'];



	  $c = oci_connect("scott","tiger","localhost");
	  oci_set_client_identifier($c, 'admin');

	  $s = oci_parse($c, "DELETE from productDetails
	                      WHERE proId ='$proId' "  );



	  $result=oci_execute($s);

	  if($result){

	  	echo "data deleted";
	  }
	  else
	  {
	  	 echo "Failed";
	  }

}


///logout
if(isset($_POST['logout'])){

    	header("location: logout.php");

}










?>



<!DOCTYPE html>
<html>
<head>
	<title>Product Details</title>
	<link rel="stylesheet" type="text/css" href="css/coffee.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style media="screen">
		body{background-image: url(css/img/p1.jpg);}
	</style>
</head>

	<body >
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

		<div class="container">
			<div class="main">
			<h1 style="text-align: center;">Product Details</h1>
			<form action="" method="POST">
				<div class="name">
				<input type="number" name="proId" placeholder="Product Id" class="in"><br><br>
				<input type="text" name="proName" placeholder="Product Name" class="in"><br><br>
				<input type="text" name="brand" placeholder="Product Brand" class="in"><br><br>
				<input type="number" name="quantity" placeholder="Product Quantity" class="in"><br><br>

				<input type="submit" name="add" value="ADD" class="btn coff_sub">
				<input type="submit" name="update" value="UPDATE" class="btn coff_sub">
				<input type="submit" name="delete" value="DELETE" class="btn coff_sub">
				<input type="submit" name="logout" value="LOGOUT" class="btn coff_sub">
				</div>
			</form>
		</div>
		</div>
  </body>
</html>
