<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

        
    <script src="js/my_profile.js"></script>
    <script src="js/validateForm.js"></script>
    <script src="js/restrict.js"></script>
  </head>
  <body>
    <!-- including side navigations -->
    <?php 
    include("sections/sidenav.html"); ?>
    <div class="container-fluid">
      <div class="container">
        <!-- header section -->
        <?php
          require "includes/header.php";
          createHeader('user', 'Profile', 'Manage Admin Details');
          // header section end
          require "includes/dbConfig.php";
          require "server.php";
          if($con) {
            $query = "SELECT * FROM admin";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_array($result);
            $pharmacyName = $row['pharmacyName'];
            $address = $row['address'];
            $email = $row['email'];
            $contactNumber = $row['contactNumber'];
            $username = $row['username'];
          }
        ?>
        <div class="row">
          <div class="row col col-md-6">

            <div class="row col col-md-12">
              <div class="col col-md-12 form-group">
                <label class="font-weight-bold" for="pharmacyName">Pharmacy Name :</label>
                <input id="pharmacyName" type="text" class="form-control" value="<?php echo $pharmacyName; ?>" placeholder="pharmacy name" onkeyup="validateName(this.value, 'pharmacy_name_error');" disabled>
                <code class="text-danger small font-weight-bold float-right mb-2" id="pharmacy_name_error" style="display: none;"></code>
              </div>
            </div>

            <div class="row col col-md-12">
              <div class="col col-md-12 form-group">
                <label class="font-weight-bold" for="address">Address :</label>
                <textarea id="address" class="form-control" placeholder="address" name="address" onkeyup="validateAddress(this.value, 'address_error');" style="max-height: 100px;" disabled><?php echo $address; ?></textarea>
                <code class="text-danger small font-weight-bold float-right mb-2" id="address_error" style="display: none;"></code>
              </div>
            </div>

            <div class="row col col-md-12">
              <div class="col col-md-12 form-group">
                <label class="font-weight-bold" for="email">Email :</label>
                <input id="email" type="email" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="email" onkeyup="notNull(this.value, 'email_error');" disabled>
                <code class="text-danger small font-weight-bold float-right mb-2" id="email_error" style="display: none;"></code>
              </div>
            </div>

            <div class="row col col-md-12">
              <div class="col col-md-12 form-group">
                <label class="font-weight-bold" for="contact_number">Contact Number :</label>
                <input id="contact_number" type="number" class="form-control" value="<?php echo $contact_number; ?>" placeholder="contact number" onkeyup="validateContactNumber(this.value, 'contact_number_error');" disabled>
                <code class="text-danger small font-weight-bold float-right mb-2" id="contact_number_error" style="display: none;"></code>
              </div>
            </div>

            <div class="row col col-md-12">
              <div class="col col-md-12 form-group">
                <label class="font-weight-bold" for="username">Username :</label>
                <input id="username" type="text" class="form-control" value="<?php echo $username; ?>" placeholder="username" onkeyup="notNull(this.value, 'username_error');" disabled>
                <code class="text-danger small font-weight-bold float-right mb-2" id="username_error" style="display: none;"></code>
              </div>
            </div>

            <!-- horizontal line -->
            <div class="col col-md-12">
              <hr class="col-md-12 float-left" style="padding: 0px; width: 95%; border-top: 2px solid  #02b6ff;">
            </div>

            <!-- form submit button -->
            <div class="row col col-md-12 m-auto" id="edit">
              <div class="col col-md-2 form-group float-right"></div>
              <div id="edit_button" class="col col-md-4 form-group float-right">
                <button class="btn btn-primary form-control font-weight-bold" onclick="edit();">EDIT</button>
              </div>
              <div id="password_button" class="col col-md-4 form-group float-right">
                <a href="change_password.php" class="btn btn-warning form-control font-weight-bold">Change Password</a>
              </div>
            </div>

            <div class="row col col-md-12 m-auto" id="update_cancel" style="display: none;">
              <div class="col col-md-2 form-group float-right"></div>
              <div id="cancel_button" class="col col-md-4 form-group float-right">
                <button class="btn btn-danger form-control font-weight-bold" onclick="edit(true);">CANCEL</button>
              </div>
              <div id="update_button" class="col col-md-4 form-group float-right">
                <button class="btn btn-success form-control font-weight-bold" onclick="updateAdminDetails();">UPDATE</button>
              </div>
            </div>
            <!-- result message -->
            <div id="admin_acknowledgement" class="col-md-12 h5 text-success font-weight-bold text-center" style="font-family: sans-serif;"></div>
          </div>
        </div>
        <hr style="border-top: 2px solid #9732DAFF;">
      </div>
    </div>

  </body>
</html>
