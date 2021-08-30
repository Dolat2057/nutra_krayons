<link rel="stylesheet" href="../assests/bootstrap/css/bootstrap.min.css">
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background: #ffffff;
        background: linear-gradient(to bottom, #ffffff 0%, #e1e8ed 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e1e8ed', GradientType=0);
        height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .wrapper-1 {
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .wrapper-2 {
        padding: 30px;
        text-align: center;
    }

    h1 {
        font-family: 'Kaushan Script', cursive;
        font-size: 2em;
        letter-spacing: 3px;
        color: #73AE20;
        margin: 0;
        margin-bottom: 20px;
    }

    .wrapper-2 p {
        margin: 0;
        font-size: 1.3em;
        color: #aaa;
        font-family: 'Oswald', sans-serif;
        letter-spacing: 1px;
    }


    .footer-like {
        margin-top: auto;
        background: #d5ebb7;
        padding: 6px;
        text-align: center;
    }

    .footer-like p {
        margin: 0;
        padding: 4px;
        color: #73AE20;
        font-family: 'Source Sans Pro', sans-serif;
        letter-spacing: 1px;
    }

    .footer-like p a {
        text-decoration: none;
        color: #73AE20;
        font-weight: 600;
    }

    @media (min-width:360px) {
        h1 {
            font-size: 2.3rem;
        }

        h2 {
            font-size: 2.3rem;
        }

        .go-home {
            margin-bottom: 20px;
        }
    }

    @media (min-width:600px) {
        .content {
            max-width: 1000px;
            margin: 0 auto;
        }

        .wrapper-1 {
            height: initial;
            max-width: 620px;
            margin: 0 auto;
            margin-top: 50px;
            box-shadow: 4px 8px 40px 8px #d5ebb7;
        }

        h2 {
            font-size: 1.2rem;
        }
    }

    .scroll {
        max-height: 250px;
        overflow-y: scroll;
    }
</style>
<link rel="stylesheet" href="../assests/css/success.scss">

<?php

include("../connection/session.php");
include("../connection/conn.php");
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("config_paytm.php");
require_once("encdec_paytm.php");
$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";
$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg
//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.

if ($isValidChecksum == "TRUE") {
    //  echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
    if ($_POST["STATUS"] == "TXN_SUCCESS") {
        $ORDER_ID = $_POST['ORDERID'];

        $update = "UPDATE `order_table` SET payment_status= 'SUCCESS' where ORDER_ID = '$ORDER_ID' ";
        $conn->query($update);

?>
        <div class=content>
            <div class="wrapper-1">
                <div class="wrapper-2">

                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                        <circle class="path circle" fill="none" stroke="#73AE20" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                        <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                    </svg>


                    <h1>Order Placed Successfull.</h1>
                    <h1>We've received your order</h1>
                    <h2>ORDER NO. #<?php echo $ORDER_ID; ?> </h2>
                    <?php

                    $query = "SELECT  * from `order_table` WHERE ORDER_ID = '$ORDER_ID' limit 1";
                    $data = mysqli_query($conn, $query);
                    $total = mysqli_num_rows($data);
                    if ($total != 0) {
                        while ($result = mysqli_fetch_assoc($data)) {
                            // echo $result['email'];   
                    ?>

                </div>

                <div class="scroll">
                    <h3 style="margin-left: 14px;">Delivery Details</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">Delivery For:
                                <h6 style="text-transform: capitalize;"><?php echo $result['first_name'] . ' ' . $result['last_name'] ?></h6>
                                <label for="">Address:</label>
                                <h6 style="text-transform: capitalize;"><?php echo $result['apartment'] . ',' . $result['address'] . ',' . $result['city'] . ',' . $result['state'] . ',' . $result['country'] . ',' . $result['pincode']; ?></h6>
                                <label for="">Phone:</label>
                                <h6><?= $result['phone']; ?></h6>
                                <label for="">Date</label>
                                <h6><?= $result['order_date']; ?></h6>
                            </div>
                            <div class="col-md-6">Delivery Method
                                <h6>Standard delivery method<h6>
                            </div>
                        </div>
                    </div>
            <?php     }
                    } ?>
            <h3 style="margin-left: 14px;">Order Summary</h3>

            <table class="table table-white   text-center">
                <tbody>
                    <?php

                    $query = "SELECT  * from `order_table` WHERE ORDER_ID = '$ORDER_ID'";
                    $data = mysqli_query($conn, $query);
                    $total = mysqli_num_rows($data);
                    if ($total != 0) {
                        while ($result1 = mysqli_fetch_assoc($data)) {
                            // echo $result['email'];   
                    ?>
                            <tr class="">
                                <td><?php echo $result1['product_id']; ?></td>
                                <td><img style="width: 90px; height: 60px;" src="<?php echo $result1['product_image'] ?>" alt=""></td>
                                <td><?php echo $result1['product_name']; ?></td>
                                <td><?php echo $result1['price']; ?></td>
                            </tr>
                    <?php

                        }
                    }
                    ?>
                </tbody>
            </table>
            <?php
            $query = "SELECT  * from `order_table` WHERE ORDER_ID = '$ORDER_ID' limit 1";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    // echo $result['email'];   
            ?>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h3> Total:</h3>
                            </div>
                            <div class="col-md-6">
                                <h4><?php echo '$'.number_format($result['TXN_AMOUNT'],2)?></h4>

                            </div>


                        </div>


                    </div>
                    <h3 style="margin-left: 14px;"> Payment Information</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">PAYTM:<BR>
                                <label for="">TXN ID:<BR><?php echo $_POST['TXNID'] ?></label>
                                <label for="">Bank TXN Id:<?php echo $_POST['BANKTXNID'] ?></label>
                                <label for="">Gateway Name:<?php echo $_POST['GATEWAYNAME'] ?></label>
                                <label for="">Bank Name:<?php echo $_POST['BANKNAME'] ?></label>
                                <label for="">Payment Mode:<?php echo $_POST['PAYMENTMODE'] ?></label>
                                <label for="">TXN Date:<?php echo $_POST['TXNDATE'] ?></label>

                            </div>
                            <div class="col-md-6">Billing Address:
                                <h6 style="text-transform: capitalize;"><?php echo $result['first_name'] . ' ' . $result['last_name'] ?></h6>
                                <label for="">Address:</label>
                                <h6 style="text-transform: capitalize;"><?php echo $result['apartment'] . ',' . $result['address'] . ',' . $result['city'] . ',' . $result['state'] . ',' . $result['country'] . ',' . $result['pincode']; ?></h6>
                                <label for="">Phone:</label>
                                <h6><?= $result['phone']; ?></h6>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
                </div>
                <div class="footer-like">
                    <p class="para-center">Go to your
                        <a href="../user/user.php">Dashboard</a>
                    </p>
                </div>
            </div>
        </div>

        <?php

        echo '<script>
                                setTimeout(
                                    function(){
                                        window.location.href = "../index.php"; 
                                    },
                                3000000);

                          </script>';
        ?>

    <?php

    } else {
        $ORDER_ID = $_POST['ORDERID'];

        $update = "UPDATE `order_table` SET payment_status= 'NOT SUCCESS' where ORDER_ID = '$ORDER_ID' ";
        $conn->query($update);

    ?>
        <div class=content>
            <div class="wrapper-1">
                <div class="wrapper-2">

                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                        <circle class="path circle" fill="none" stroke="#7eae20" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                        <line class="path line" fill="none" stroke="#73ae20" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3" />
                        <line class="path line" fill="none" stroke="#73ae20" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2" />
                    </svg>


                    <h1>Order placed unsuccessful</h1>
                    <h1>We did'nt received your order</h1>
                    <h2>ORDER NO. #<?php echo $ORDER_ID; ?> </h2>

                </div>
                <div class="footer-like">
                    <p class="para-center">Please order again
                        <a href="../index.php">Home Page</a>
                    </p>
                </div>
            </div>
        </div>
<?php
        echo '<script>
                                setTimeout(
                                    function(){
                                        window.location.href = "../index.php"; 
                                    },
                                3000000);

                         </script>';
    }

    if (isset($_POST) && count($_POST) > 0) {
        foreach ($_POST as $paramName => $paramValue) {
            //echo "<br/>" . $paramName . " = " . $paramValue;
        }
    }
} else {
    //echo "<b>Checksum mismatched.</b>";
    //Process transaction as suspicious.
}
?>