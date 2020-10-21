<?php include('template\common\base.php'); ?>
<?php
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
             <div class="row">
			 <div class="col-lg-6 m-auto">
			  <div class="card bg-white mt-5">
				 <div class="card-title bg-primary text-black mt-6">
				  <h4 class ="text-center py-3"> Log in Form</h4>
				  </div>
             
			 
         
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
		<center><div><input type="submit" name="login" value="Login" class="form-submit-button mt-3"></span></div></center>
	</div>       
</form>
<?php 
} else { 
$result = mysqli_query($conn,"SELECT * FROM register_tbl WHERE id='" . $_SESSION["id"] . "'");
$row  = mysqli_fetch_array($result);
?>
<form action="" method="post" id="frmLogout">
<div class="member-dashboard"><h4 class ="text-center py-3">Welcome <?php echo ucwords($row['lname']); ?></h4>,<h4 class ="text-center py-3"> You have successfully logged in!</h4><br>
<br>
</br>
Click to <input type="submit" name="logout" value="Logout" class="logout-button"></div>
<br><hr>
</form>
</div>
</div>
<?php } ?>
<?php include('template\footer.php'); ?>