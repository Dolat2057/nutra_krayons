  <link rel="icon" type="image/png" href="./assests/images/favicon.png" sizes="32x32" />
<?php
include("connection/conn.php");
include("config/config.inc.php");
include("common/nav.php");  
?>

<?php
if (isset($_POST['subssubmit'])) {
  $subsemail = $_POST['subsemail'];

  $query = "INSERT into `subs_email` (subsemail)
    VALUES ('$subsemail')";
      $result   = mysqli_query($conn, $query);
      if ($result) {
        echo '
              <form class="form" method="POST">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="well center-block">
                                <div class="well-header">
                                    <h3 class="text-center text-success1">Thanks for subscribing! 
                                    <br>  
                                    </h3>
                                    
                                </div>


                              <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                  <div class="form-group">
                                    <div class="">
                                    <h3>Check your email for confirmation message...</h3><br/>
                                    <a style="text-decoration:none !important" href="./index.php"><p class="btn btn-block btn-danger" >HOME</p></a>
                                    <p>Do You Want to Login</p><a href="./user/login.php" style="color:#000 !important;font-weight:bold !important">click on this..</a> 
                                    </div>
                                  </div>
                                </div>      
                            </div>
                      </div>
                  </div>
              </div>
        </form>
        
        ';
              }
            } 
            
            else {
                    echo mysqli_error($conn);
                    echo '<form class="form">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="well center-block">
                          
                          <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <div class="">
                              <h3>Email is not valid...</h3><br/>
                      <p class="link"> Back To <a class="btn btn-danger" href="./index.php">Home</a></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        </div>
                        </div>';
                   }
?>

<title>Subscription Newsletter</title>
<?php
include("common/footer.php");
?>