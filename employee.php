<?php

///insert code
if(isset($_POST['add']))
{
	  $empId             =$_POST['empId'];
      $empName           =$_POST['empName'];
      $empDesi           =$_POST['empDesi'];
      $empSal            =$_POST['empSal'];
      $empPhn            =$_POST['empPhn'];
      $empAdd            =$_POST['empAdd'];
      $empNid            =$_POST['empNid'];
      $empGender         =$_POST['empGender'];
      $joinDate          =$_POST['joinDate'];
      $empMail           =$_POST['empMail'];


	  $c = oci_connect("scott","tiger","localhost");
	  oci_set_client_identifier($c, 'admin');

	  $s = oci_parse($c, " INSERT INTO employee
	  	                   (empId,empName,empDesignation,empSal,empPhn,empAdd,empNid,empGender,joinDate,empMail)
	                       VALUES ('$empId','$empName','$empDesi',
	                       '$empSal ','$empPhn',' $empAdd ',
	                       '$empNid','$empGender','$joinDate','$empMail')"  );



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

	  $empId             =$_POST['empId'];
      $empName           =$_POST['empName'];
      $empDesi           =$_POST['empDesi'];
      $empSal            =$_POST['empSal'];
      $empPhn            =$_POST['empPhn'];
      $empAdd            =$_POST['empAdd'];
      $empNid            =$_POST['empNid'];
      $empGender         =$_POST['empGender'];
      $joinDate          =$_POST['joinDate'];
      $empMail           =$_POST['empMail'];


	  $c = oci_connect("scott","tiger","localhost");
	  oci_set_client_identifier($c, 'admin');

	  $s = oci_parse($c, " UPDATE employee set empName='$empName',empDesignation='$empDesi',empSal='$empSal',empPhn='$empPhn',empAdd='$empAdd',empNid='$empNid',empGender='$empGender',joinDate='$joinDate',empMail='$empMail'
	  	   Where empId='$empId'"  );



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

	  $empId             =$_POST['empId'];


	  $c = oci_connect("scott","tiger","localhost");
	  oci_set_client_identifier($c, 'admin');

	  $s = oci_parse($c, " DELETE FROM employee WHERE empId='$empId'"  );



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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Employee window</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/emp.css">

</head>
<body>
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
			<h1 style="text-align: center;">Employee Details</h1><br>
			<form action="" method="POST" >
				<div class="name">
			<input type="number"  name="empId" class="in" placeholder="ID"><br><br>
			<input type="text"    name="empName" class="in" placeholder="Name"><br><br>
			<input type="text"    name="empDesi" class="in" placeholder="Designation"><br><br>
			<input type="number"  name="empSal" class="in" placeholder="Salary"><br><br>
			<input type="number"  name="empPhn" class="in" placeholder="phone number"><br><br>
			<input type="text"    name="empAdd" class="in" placeholder="Address"><br><br>
			<input type="number"  name="empNid" class="in" placeholder="NID Number"><br><br>

			<input type="text"   name="empGender" class="in" placeholder="Gender" > <br><br>
			<input type="text"   name="joinDate" class="in" placeholder="Join Date"><br><br>
			<input type="email"  name="empMail" class="in" placeholder="Email"><br><br>
			</div>



			<input type="submit" name="add"    value="Add" class="btn" id="emp_sub">&nbsp &nbsp &nbsp
			<input type="submit" name="delete" value="Delete" class="btn" id="emp_sub">&nbsp &nbsp &nbsp
			<input type="submit" name="update" value="Update" class="btn" id="emp_sub">&nbsp &nbsp &nbsp
			<input type="submit" name="logout" value="Logout" class="btn" id="emp_sub">&nbsp &nbsp &nbsp


		</form>
	</div>
	</div>
</body>
</html>
