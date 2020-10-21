<?php
session_start();
include("config.php");

	
$message="";
if(!empty($_POST["login"])) {
	$result = mysqli_query($conn,"SELECT * FROM register_tbl WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["id"] = $row['id'];
	} else {
	$message = "Invalid Username or Password!";
	}
}
if(!empty($_POST["logout"])) {
	$_SESSION["id"] = "";
	session_destroy();
}
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>LOG-OUT</title>
<style>
</style>
</head>
<body>
<div>
 
<?php if(empty($_SESSION["id"])) { ?>
<form action="" method="post" id="frmLogin">
	<div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>	
	<div class="field-group">
		<center> <div><label for="login">Username</label></div> </center>
		<center><div><input name="email" type="text" class="input-field"></div></center>
	</div>
	<div class="field-group">
		<center><div><label for="password">Password</label></div></center>
		<center><div><input name="password" type="password" class="input-field"> </div></center>
	</div>
	<div class="field-group">
		<center><div><input type="submit" name="login" value="Log-out" class="form-submit-button"></span></div></center>
	</div>       
</form>
<?php 
} else { 
$result = mysqli_query($conn,"SELECT * FROM register_tbl WHERE id='" . $_SESSION["id"] . "'");
$row  = mysqli_fetch_array($result);
?>
<form action="" method="post" id="frmLogout">
<div class="member-dashboard">Welcome <?php echo ucwords($row['lname']); ?>, You have successfully log-out!<br>

<?php include("view.php"); ?>

Click to <input type="submit" name="logout" value="Logout" class="logout-button">.</div>
<br><hr>
</form>
</div>
</div>
<?php } ?>
</body></html>