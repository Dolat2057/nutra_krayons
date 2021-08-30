<?php
include('../config/config.inc.php');
include("./common/nav.php");
?>
<title>login</title>
<link rel="icon" type="image/png" href="../assests/images/favicon.png" sizes="32x32" />
<style>
  .well {
    width: 350px !important;
  }

  hr {
    margin: 12px !important;
    border: 1px solid #ced4da !important;
  }
</style>
</head>

<body>


  <?php
  if (isset($_POST['email'])) {
    $email = stripslashes($_REQUEST['email']);    // removes backslashes
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    // Check user is exist in the database
    $query    = "SELECT * FROM `users_registration` WHERE email='$email'
                 AND password='$password'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
      $_SESSION['email'] = $email;

      echo "<script>
      window.location.href='../index.php';
      </script>";



    } else {

      echo '
        <form class="form" method="POST" name="login">
    <div class="container-fluid">
      <div class="row">
        <div class="well center-block">
        
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <div class="">
            <h3>Incorrect Email/Password</h3>
            
            <p style="margin-top:20px  !important; font-weight:500 !important" class="link">Click here to <a class="link btn btn-danger" href="./login.php">Login</a> again.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      </div>
      ';
    }
  } else {
  ?>

    <form class="form" method="POST">
      <div class="container-fluid">
        <div class="row">
          <div class="well center-block">
            <div class="well-header">
              <h3 class="text-center text-success1"> Login here </h3>
              <hr>
            </div>


            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <div class="input-group">
                    <input type="email" placeholder="Email" id="email" name="email" class="form-control">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="form-group">
                  <div class="input-group">

                    <input type="text" name="password" placeholder="Password" id="password" class="form-control">
                  </div>
                </div>
              </div>
            </div>

            <div class="row widget">
              <div class="col-md-12 col-xs-12 col-sm-12">
                <input type="submit" class="btn btn-danger btn-block" value="Login" name="submit" class="login-button" />
                <p style="padding-top: 10px;" class="link">Not yet registered ? <a href="registration.php">Register here</a></p>
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
<script>
        function Previous() {
            window.history.go(-1);
        }
    </script>
</body>

</html>