<?php

///insert code
if(isset($_POST['add']))
{
	  $customerName      =$_POST['customerName'];
      $orderNo           =$_POST['orderNo'];
      $orderDetails      =$_POST['orderDetails'];
      $orderQuantity     =$_POST['orderQuantity'];
      $contactNo         =$_POST['contactNo'];
      $totalBill         =$_POST['totalBill'];


	  $c = oci_connect("scott","tiger","localhost");
	  oci_set_client_identifier($c, 'admin');

	  $s = oci_parse($c, " INSERT INTO customerOrder
	  	                   (custName,ordrNo,ordrDetails,ordrQuantity,contactNo,totalBill)
	                       VALUES ('$customerName','$orderNo','$orderDetails',
	                       '$orderQuantity','$contactNo','$totalBill')"  );



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
	  $customerName      =$_POST['customerName'];
      $orderNo           =$_POST['orderNo'];
      $orderDetails      =$_POST['orderDetails'];
      $orderQuantity     =$_POST['orderQuantity'];
      $contactNo         =$_POST['contactNo'];
      $totalBill         =$_POST['totalBill'];


	  $c = oci_connect("scott","tiger","localhost");
	  oci_set_client_identifier($c, 'admin');

	  $s = oci_parse($c, " UPDATE customerOrder SET  custName='$customerName',ordrDetails='$orderDetails',ordrQuantity='$orderQuantity',contactNo='$contactNo',totalBill='$totalBill'  WHERE ordrNo='$orderNo' "  );



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

      $orderNo           =$_POST['orderNo'];


	  $c = oci_connect("scott","tiger","localhost");
	  oci_set_client_identifier($c, 'admin');

	  $s = oci_parse($c, " DELETE FROM customerOrder WHERE ordrNo='$orderNo' "  );



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
	<title>Customer Details</title>
	<link rel="stylesheet" type="text/css" href="css/coffee.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body style="background-image: url(css/img/order.jpg);">



	<div class="container">
		<div class="main">
		<h1 style="text-align: center;">Customers & Orders</h1>

				<form action="" method="POST">
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
					<div class="name">
					<input type="text"   name=customerName class="in" placeholder="Customer Name"><br><br>
					<input type="number" name="orderNo" class="in" placeholder="Order No"><br><br>
					<input type="text"   name="orderDetails" class="in" placeholder="Order Details" ><br><br>
					<input type="number" name="orderQuantity" class="in" placeholder="Order Quantity"><br><br>
					<input type="tel"    name="contactNo" class="in" placeholder="Contact Number"><br><br>
					<input type="number" name="totalBill" class="in" placeholder="Total Bill"><br><br>

					<input type="submit" name="add"    value="ADD" class="coff_sub">
					<input type="submit" name="update" value="UPDATE" class="coff_sub">
					<input type="submit" name="delete" value="DELETE" class="coff_sub">
				  <input type="submit" name="logout" value="LOGOUT" class="coff_sub">
					</div>
			    </form>
			</div>
			</div>
	     </body>
</html>
