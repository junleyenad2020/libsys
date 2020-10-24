<?php include_once('../template/common/navbar.php'); ?>
<?php include_once('../template/common/base.php'); ?>

<div class="row justify-content-center" style="margin-top:150px;">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Sign up</div>
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
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                        <div class="col-md-6">
                            <input type="password" id="password2" class="form-control" name="password2" required>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" onsubmit="check_password()">
                            Submit
                        </button>
                        <button type="submit" class="btn btn-success">
                            Login
                        </button>
                        <a href="" </div> </div> </form> </div> </div> </div> </div> <script>


                            function check_password() {
                            var password = document.getElementById('password');
                            var password2 = document.getElementById('password2');

                            if(password2 != password) {
                            // console.log('password not identical');
                            // alert('your password is not identical');]
                            console.log(password2.value);
                            }
                            }
                            </script>

                            <?php include_once('../template/common/footer.php'); ?>