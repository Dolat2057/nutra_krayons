<title>user</title>
<link rel="icon" type="image/png" href="../assests/images/favicon.png" sizes="32x32" />
<link rel="stylesheet" href="../assests/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/registration.css">
<link rel="stylesheet" href="../assests/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../assests/css/footer.css">
<link rel="stylesheet" href="../assests/css/success.css">


<?php
include("../config/config.inc.php");
?>
<style>
    .well {
        width: 700px;
    }

    .dropdown-item:active {
        background-color: #73AE20 !important;
    }
  
    body::-webkit-scrollbar {
        width: 13px;
        /* width of the entire scrollbar */
    }

    body::-webkit-scrollbar-track {
        background: #f8f8f8;
        /* color of the tracking area */
    }

    body::-webkit-scrollbar-thumb {
        background-color: #73ae20;
        /* color of the scroll thumb */
        border-radius: 20px;
    }

    body::-webkit-scrollbar-thumb:hover {
        background-color: #3e9fbe;
    }
</style>

<?php
include("../connection/conn.php");
include("./auth_session.php");

$email = $_SESSION['email'];

$sql = "SELECT * FROM  users_registration  where email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
}

?>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <h1> <a class="navbar-brand" style="font-size:25px !important" href="../index.php">BLI<span style="color: #73AE20;">SS</span></a></h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-5">


            <li class="nav-item dropdown ">

                <a class="nav-link dropdown-toggle" style="text-transform: capitalize; font-weight:bold;font-size:19px !important" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <?php echo 'Hii' . ' ' . $row['first_name'];

                    ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="#order">My Orders</a>
                    <a class="dropdown-item" href="#user-detail">Details</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="./logout.php"><button type="logout" class="btn btn-danger">Logout</button></a>
            </li>

        </ul>

    </div>
</nav>

<div id="order">
    <form class="form" action="" method="POST" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="row">
                <div class="well center-block">
                    <div class="well-header">
                        <h3 class="text-center text-success1"> Your Orders </h3>
                        <hr>
                    </div>

                    <div class="row">
                        <a type="button" class="btn btn-link " data-toggle="collapse" data-target="#order1">
                            <h7 class="user_name"  style="text-align:center !important; color:#000; font-weight:bold !important">ORDER HISTORY
                                <i class="fa fa-chevron-down"></i>
                            </h7>
                        </a>
                        <?php if ($email = $_SESSION['email']) { ?>
                            <table class="table table-light  table table-responsive collapse" id="order1">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Order Id</th>
                                        <th scope="col">Product id</th>
                                        <th scope="col">Product image</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Product price</th>



                                    </tr>
                                </thead>
                                <?php


                                $query = "SELECT * from order_table where email = '$email'
                            and payment_status = 'SUCCESS'";
                                $data = mysqli_query($conn, $query);
                                $total = mysqli_num_rows($data);
                                if ($total != 0) {
                                    while ($row1 = mysqli_fetch_assoc($data)) {

                                ?>
                                        <tbody>


                                            <tr class="text-center">
                                                <td><?= $row1['ORDER_ID'] ?></td>
                                                <td><?= $row1['product_id']; ?></td>
                                                <td><img style="height:60px; width: 90px;" src="<?= $row1['product_image']; ?>" alt=""></td>
                                                <td><?= $row1['product_name'] ?></td>
                                                <td><?= $row1['price'] ?></td>

                                            </tr>

                                        </tbody>



                                    <?php }
                                } else {
                                    ?>
                                    <table class="table table-light  table table-responsive collapse" id="order1">
                                        <h3 style="text-align:center">

                                            <div class="text-effect">
                                                <span>You did'nt order anything yet.</span>

                                            </div>
                                        </h3>

                                    <?php
                                }
                                    ?>
                                    </table>

                    </div>


                </div>
            </div>
        </div>

    </form>
</div>
<?php } ?>
<!-- user page -->
<div id="user-detail">
    <form class="form" action="" method="POST" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="row">
                <div class="well center-block">
                    <div class="well-header">
                        <h3 class="text-center text-success1"> Your Details </h3>
                        <hr>
                    </div>

                    <div class="row">


                        <a type="button" class="btn btn-link " data-toggle="collapse" data-target="#user-detail1">
                            <h7 class="user_name" style="text-align:center !important;color:#000; font-weight:bold !important">User Details
                                <i class="fa fa-chevron-down"></i>
                            </h7>
                        </a>





                        <table class="table  table-responsive collapse" id="user-detail1">
                            <tr>
                                <td>Name</td>
                                <td><?php echo $row['first_name'] ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo $row['email'] ?></td>
                            </tr>


                            <tr>

                                <td>password</td>
                                <td><?php echo  $row['password']; ?> </td>
                            </tr>



                            <td><button type="button" class="btn btn-danger btn-block updatePro" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-edit"></i> Edit Profile</button></td>
                            </tr>

                        </table>
                    </div>


                </div>
            </div>
        </div>

    </form>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="./updateprofile.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="first_name" value="<?php echo $row['first_name'] ?>" id="first_name" class="form-control" placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <input type="email" value="<?php echo $row['email'] ?>" name="email" id="email" class="form-control" readonly>
                    </div>


                    <div class="form-group">
                        <input type="text" value="<?php echo $row['password'] ?>" name="password" id="password" class="form-control" placeholder="Enter your Password">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger" name="updateProfile">Update</button>
                </form>

            </div>

        </div>

    </div>
</div>

</div>
</div>
</div>

<?php
include("./common/footer.php");
?>

</body>

</html>