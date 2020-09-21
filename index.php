<?php

#require_once('index.php');


session_start();

function login_form($message)
{
  echo <<<EOD
  <body style="font-family: Arial, sans-serif;">
  <div class="loginBox">

    <h2>Login</h2>
    <form action="index.php" method="POST">
      <p><input type="text" name="name" class="from-control" placeholder="Username"></p>

      <p><input type="password" name="pass" class="from-control" placeholder="Password"</p>
      <input type="submit" value="Login" class="btn">
	     <a href="registration.php"><p>Don't have an account?SignUp Now.</p></a>
    </form>

	  <p>$message</p>
    </div>
  </body>
EOD;
}

if (!isset($_POST['name']) || !isset($_POST['pass'])) {
  login_form('');
}
else {
  $c = oci_connect("scott","tiger","localhost");
  oci_set_client_identifier($c, 'admin');

  $s = oci_parse($c, 'select username from  login where  username = :un_bv and    password = :pw_bv');
  oci_bind_by_name($s, ":un_bv", $_POST['name']);
  oci_bind_by_name($s, ":pw_bv", $_POST['pass']);
  oci_execute($s);
  $r = oci_fetch_array($s, OCI_ASSOC);

if ($r) {

    $_SESSION['name'] = $_POST['name'];
   header("location:home.php");
    echo <<<EOD
    <body style="font-family: Arial, sans-serif;">

    <h2>Login was successful</h2>

	<p><a href="logout.php">Logout</a><p>
    </body>
EOD;
    exit;
  }
   else {

    login_form('invalid user and password');
  }
}

?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Log-in</title>
  <link rel="stylesheet" type="text/css" href="css/log.css">
</head>
<body></body>
</html>
