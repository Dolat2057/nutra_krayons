<?php
include('../config/config.inc.php');

?>
<title>Registration</title>
<link rel="icon" type="image/png" href="../assests/images/favicon.png" sizes="32x32" />

<style>
  .well {
    width: 400px !important;
  }

  .form-control:focus {
    background-color: #e9e9e9 !important;
  }

  hr {
    margin: 12px !important;
    border: 1px solid #ced4da !important;
  }

  .form-control {
    height: 50px !important;
  }
</style>
<?php
include("./common/nav.php");
?>

<?php

if (isset($_REQUEST['submit'])) {
  // removes backslashes

  $first_name = stripslashes($_REQUEST['first_name']);
  $first_name = mysqli_real_escape_string($conn, $first_name);

  $last_name = stripslashes($_REQUEST['last_name']);
  $last_name = mysqli_real_escape_string($conn, $last_name);

  $email   = stripslashes($_REQUEST['email']);
  $email   = mysqli_real_escape_string($conn, $email);

  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  $query1 = mysqli_query($conn, "SELECT * from users_registration WHERE email = '$email'");
  if (mysqli_num_rows($query1) > 0) {
    echo '
                <form class="form" method="POST">
                <div class="container-fluid">
                  <div class="row">
                    <div class="well center-block">
                    
                    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <div class="">
                        <h3>Email Already in use !!</h3><br/>
                        <p style="margin-top:10px  !important; font-weight:500 !important" class="link">Click here to  <a class="link btn btn-danger" href="./registration.php">Register</a> again.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                  </div>
                  </div>';
  } else {


    $query    = "INSERT into `users_registration` (first_name,last_name,email,password)
                   VALUES ('$first_name','$last_name','$email','$password')";
    $result   = mysqli_query($conn, $query);
    if ($result) {
      echo '
                <form class="form" method="POST">
                <div class="container-fluid">
                  <div class="row">
                    <div class="well center-block">
                    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <div class="">
                        <h3>You are registered successfully.</h3><br/>
                <p class="link">Click here to <a class="link btn-danger" href="./login.php">Login</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                  </div>
                  </div>';
                 
    } else {
      echo mysqli_error($conn);
      echo "<div class='form'>
                <h3>Required fields are missing.</h3><br/>
                <p class='link'>Click here to <a href='./registration.php'>registration</a> again.</p>
                </div>";
    }
  }
} else {


?>


  <!-- form page -->
  <form class="form" action="" method="POST" enctype="multipart/form-data">
    <div class="container-fluid">
      <div class="row">
        <div class="well center-block">
          <div class="well-header">
            <h3 class="text-center text-success1"> Register Here! </h3>
            <hr>
          </div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" placeholder="First Name" name="first_name" id="first_name" class="form-control" required>

                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" placeholder="Last Name" name="last_name" id="last_name" class="form-control" required>

                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <div class="input-group">
                  <input type="email" placeholder="Email" id="email" name="email" class="form-control" required>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
              <div class="form-group">
                <div class="input-group">

                  <input type="text" name="password" required placeholder="Password" id="password" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <div class="row widget">
            <div class="col-md-12 col-xs-12 col-sm-12">
              <button class="btn btn-danger btn-block" type="submit" name="submit"> Submit </button>
              <p class="link">Already Registered ? <a style="padding-top: 10px;" href="./login.php">Login here</a></p>

              <a href="../index.php" class="link btn btn-danger">Back to site</a>
            </div>
          </div>
        </div>
      </div>
    </div>


  </form>
<?php
}
?>
<?php
include("./common/footer.php");
?>

<script language="javascript">
  populateCountries("country", "state");
  populateCountries("country2");
</script>


</body>

</html>