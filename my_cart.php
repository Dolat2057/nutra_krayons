<title>My cart</title>
<link rel="icon" type="image/png" href="./assests/images/favicon.png" sizes="32x32" />

<?php
include("connection/conn.php");
include("config/config.inc.php");
?>
<?php

?>
<body>
    <?php
    include("./common/nav.php");
    ?>
    <style>
        .fa-shopping-cart {
            display: none !important;
        }
    </style>
    <div class="container">
        <div class="col-md-12 " id="flash-msg" style="margin-top: 10px !important;">
            <?php
            if (isset($_SESSION['status'])) {
            ?>
                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION['status']; ?>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
        </div>
    <?php
                unset($_SESSION['status']);
            }
    ?>
    <div class="row">
        <div class="col-lg-12 text-center border rounded-bg-light my-5">
            <h1>MY CART</h1>
        </div>
        <div class="col-lg-9">
            <table class="table table-responsive">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Product id</th>
                        <th scope="col">Product image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product price</th>
                        <!-- <th scope="col">Product Quantity</th> -->
                        <!-- <th scope="col">Total</th> -->
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    if (isset($_SESSION['cart'])) {

                        foreach ($_SESSION['cart'] as $key => $value) {
                            echo "
                             <tr>
                             <td>
                             $value[product_id]
                    
                             </td>
                             <td><img src='".URL."$value[Item_Image]'style='width:50px;height:70px;'/></td>

                         <td>$value[Item_Name]</td>
                         <td>$value[Price] <input type='hidden' class='iprice1'value='$value[Price]'></td>
                         
                         <td>
                         <form action='./manage_cart.php' method='POST'>
                         <button name='Remove_Item' class='btn btn-success'>REMOVE</button>
                         <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                         </form>
                         </td>
                             </tr>
                             ";
                        }
                    }

                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-3">
            <div class="border bg-light rounded p-4">
                <h4>Grand Total:</h4>
                <span class="text-center" id="gtotal1"></span>
                <br>

                <?php if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
                ?>

                    <?php

                    $email = $_SESSION['email'];

                    $sql = "SELECT * FROM  users_registration where email='$email'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                  
                    }
                    ?>
                    <form action="./paytm-check/checkout.php">
                        <br>
                        <button type="submit" class=" btn btn-success btn-block" id="ck1">Checkout</button>
                    </form>
                <?php } else {
                ?>
                    <form action="./user/login.php">
                        <br>
                        <button type="submit" class=" btn btn-success btn-block"> first Login here</button>
                    </form>

                <?php } ?>
            </div>
        </div>
        <a href="./index.php"> <button style="margin-left: 5px; margin-top: 10px; margin-bottom:10px" class="btn btn-success">Home Page</button></a>
    </div>
    </div>
    </div>
    <?php
    include("./common/footer.php");
    ?>
    <script>
        // quantity increases price increases js 
        var gt = 0;
        var iprice1 = document.getElementsByClassName('iprice1');
        var iquantity = document.getElementsByClassName('iquantity');
        var gtotal1 = document.getElementById('gtotal1');

        function subTotal() {
            gt = 0;
            for (i = 0; i < iprice1.length; i++) {
                gt = gt + (iprice1[i].value) * (iquantity[i].value);
            }
            var a = '$';
            var b = gt;
            var c = '.00'
            gtotal1.innerHTML = a.concat(b).concat(c);

        }
        subTotal();
        sessionStorage.setItem(gtotal1, gt);
        console.log(sessionStorage.getItem(gtotal1));
    </script>
    <script>

    </script>

</body>

</html>