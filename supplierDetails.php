<?php

///insert code
if(isset($_POST['add']))
{

	  $suppId        =$_POST['suppId'];
      $suppName      =$_POST['suppName'];
      $suppAdd       =$_POST['suppAdd'];
      $city          =$_POST['city'];
      $postalCode    =$_POST['postalCode'];
      $suppMail      =$_POST['suppMail'];
      $suppPhn       =$_POST['suppPhn'];
      $supplierOf    =$_POST['supplierOf'];


	  $c = oci_connect("scott","tiger","localhost");
	  oci_set_client_identifier($c, 'admin');

	  $s = oci_parse($c, " INSERT INTO supplierDetails(suppId, suppName, suppAdd,city,postalCode,suppMail,suppPhn,supplierOf)
	                       VALUES ('$suppId', '$suppName', '$suppAdd','$city','$postalCode','$suppMail','$suppPhn','$supplierOf')"  );



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

	  $suppId        =$_POST['suppId'];
      $suppName      =$_POST['suppName'];
      $suppAdd       =$_POST['suppAdd'];
      $city          =$_POST['city'];
      $postalCode    =$_POST['postalCode'];
      $suppMail      =$_POST['suppMail'];
      $suppPhn       =$_POST['suppPhn'];
      $supplierOf    =$_POST['supplierOf'];


	  $c = oci_connect("scott","tiger","localhost");
	  oci_set_client_identifier($c, 'admin');

	  $s = oci_parse($c, " UPDATE   supplierDetails SET suppName='$suppName', suppAdd='$suppAdd',city='$city',postalCode='$postalCode',suppMail='$suppMail',suppPhn='$suppPhn',supplierOf= '$supplierOf'  WHERE suppId='$suppId'"  );



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

	  $suppId        =$_POST['suppId'];



	  $c = oci_connect("scott","tiger","localhost");
	  oci_set_client_identifier($c, 'admin');

	  $s = oci_parse($c, " DELETE FROM   supplierDetails  WHERE suppId='$suppId'"  );



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
	<title>Supplier Details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/supply.css">
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
				<h1 style="text-align: center;">Supplier Details</h1>
				<form action="" method="POST">
					<div class="name">
						<input type="number"  name="suppId"     class="in" placeholder="Supplier Id" ><br><br>
						<input type="text"    name="suppName"   class="in" placeholder="Supplier Name" ><br><br>
						<input type="text"    name="suppAdd"    class="in" placeholder="Address" ><br><br>
						<input type="text"    name="city"       class="in" placeholder="City" ><br><br>
						<input type="number"  name="postalCode" class="in" placeholder="Postal/ZIP Code" ><br><br>
		        <input type="email"   name="suppMail"   class="in" placeholder="Email" ><br><br>
		        <input type="tel"     name="suppPhn"    class="in" placeholder="Contact No." ><br><br>
		        <input type="text"    name="supplierOf" class="in" placeholder="Supplier Of" ><br><br>
						</div>
						<input type="submit" name="add"    value="ADD"    class="btn sub">
						<input type="submit" name="update" value="UPDATE" class="btn sub">
						<input type="submit" name="delete" value="DELETE" class="btn sub">
						<input type="submit" name="logout" value="LOGOUT" class="btn sub">

			</form>
		</div>
		</div>
  </body>
</html>
