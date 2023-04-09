<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

    <style>
        .form-control:focus {
            box-shadow: none;
        }

        .input-group-text {
            width: 150px;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Register</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="register.php">
                        <?php include('errors.php'); ?>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Pharmacy Name</span>
                                </div>
                                <input type="text" name="pharmacyName" class="form-control"
                                    value="<?php echo $pharmacyName; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Address</span>
                                </div>
                                <input type="text" name="address" class="form-control"
                                    value="<?php echo $address; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Email</span>
                                </div>
                                <input type="email" name="email" class="form-control"
                                    value="<?php echo $email; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Contact Number</span>
                                </div>
                                <input type="number" name="contactNumber" class="form-control" value="<?php echo $contactNumber; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Username</span>
                                </div>
                                <input type="text" name="username" class="form-control"
                                    value="<?php echo $username; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Password</span>
                                </div>
                                <input type="password" name="password_1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">Confirm Password</span>
</div>
<input type="password" name="password_2" class="form-control">
</div>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary" name="reg_user">Register</button>
</div>
<p>Already have an account? <a href="index.php">Sign in</a></p>
</form>
</div>
</div>
</div>
</body>

</html>
