<?php include_once('../template/common/navbar.php'); ?>
<?php include_once('../template/common/base.php'); ?>

<?php
// make it a function to call out 
$message = "";

if (!empty($_POST["login"])) {
    $result = mysqli_query($conn, "SELECT * FROM register_tbl WHERE email='" . $_POST["email"] . "' and password = '" . $_POST["password"] . "'");
    $row  = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION["id"] = $row['id'];
    } else {
        $message = "Invalid Username or Password!";
    }
}
if (!empty($_POST["logout"])) {
    $_SESSION["id"] = "";
    session_destroy();
}
?>

<div class="row justify-content-center" style="margin-top:150px;">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Register</div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group row">
                        <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail/Username</label>
                        <div class="col-md-6">
                            <input type="text" id="email_address" class="form-control" name="email-address" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                        <div class="col-md-6">
                            <input type="password" id="password" class="form-control" name="password" required>
                        </div>
                    </div>

                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                        <button type="submit" class="btn btn-success">
                            Login
                        </button>
                    </div>

            </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php include_once('../template/common/footer.php'); ?>