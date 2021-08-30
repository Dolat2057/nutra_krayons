

<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="./assests/images/favicon.png" type="image/gif" sizes="32x32">
<?php
include("../connection/conn.php");
include("../config/config.inc.php");
include("../connection/session.php");
?>
<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
?>
<!-- checkout authentication -->
<?php
if (!isset($_SESSION["email"])) {
    header("Location:../index.php");
    exit();
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assests/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assests/css/checkout.css">
</head>

<body>
    <div class="content" style="margin-top: 30px !important;">
        <div class="wrap">
            <div class="main">
                <ul class="breadcrumb">
                    <li><a style="color: black;" href="<?= URL ?>my_cart.php">Cart</a></li>
                    <li><a href="<?= URL ?>checkout.php">Information</a></li>
                    <!-- <li><a href="">Shipping</a></li> -->


                </ul>
                <div class="mrtop"></div>

                <main class="main__content" role="main">
                    <div class="step">
                        <form class="edit_checkout" method="POST" action="pgRedirect.php">
                            <div class="step__sections">
                                <div class="section section--contact-information">
                                    <div class="section__header">
                                        <div class="layout-flex layout-flex--tight-vertical layout-flex--loose-horizontal layout-flex--wrap">
                                            <h4 class="section__title layout-flex__item layout-flex__item--stretch" id="main-header" tabindex="-1">Contact information </h4>
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

                                                <a href="" class="checkout-name1" type="button" data-toggle="dropdown">


                                                    <?php echo  $row['first_name'] . ' ' . $row['last_name'] ?>

                                                </a>


                                        </div>

                                        <a href="../user/logout.php" class="btn-danger1">Logout</a>
                                        <div class="section__content">
                                            <div class="fieldset">
                                                <div class="field field--email_or_phone"><label class="field__label field__label--visible" for="checkout_email_or_phone">Email</label>
                                                    <input value="<?= $row['email'] ?>" placeholder="Email" name="email" class="field__input" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="section section--shipping-address">
                                            <div class="section__header">
                                                <h2 class="section__title">Shipping address </h2>
                                            </div>
                                            <div class="section__content">
                                                <input id="ORDER_ID" name="ORDER_ID" value="<?php echo "OD" . rand(1, 100) . rand(10, 500) . rand(5000, 10000) ?>" type="hidden" />

                                                <input type="hidden" id="CUST_ID" name="CUST_ID" value="<?php echo "CUST" . rand(10, 2000) . "1" . rand(20, 100) ?>" />

                                                <input id="INDUSTRY_TYPE_ID" name="INDUSTRY_TYPE_ID" type="hidden" value="Bliss" />


                                                <input id="CHANNEL_ID" name="CHANNEL_ID" type="hidden" value="WEB" />

                                                <!-- call the total in the input field value -->
                                                <div class="fieldset">
                                                    <div class="field field--first_name">
                                                        <input type="hidden" name="TXN_AMOUNT" value="" class="field__input" id="mydata" placeholder="grand total" />
                                                    </div>
                                                </div>


                                                <input type="hidden" name="CALLBACK_URL" value="http://nutra.krayons.mobi/paytm-check/success-1.php"/>

                                                <div class="fieldset">
                                                    <div class="field field--first_name field--half">
                                                        <input value="<?= $row['first_name'] ?>" type="text" placeholder="First_name" name="first_name" class="field__input" required>
                                                    </div>
                                                    <div class="field field--last_name field--half"><input value="<?= $row['last_name'] ?>" type="text" placeholder="Last_name" name="last_name" class="field__input" required></div>
                                                </div>
                                                <div class="fieldset">
                                                    <div class="field field--address">
                                                        <input value="" name="address" type="text" placeholder="Address" class="field__input" required>
                                                    </div>
                                                </div>
                                                <div class="fieldset">
                                                    <div class="field field--apartment">
                                                        <input value="" name="apartment" type="text" placeholder="Apartment" class="field__input" required>
                                                    </div>
                                                </div>
                                                <div class="fieldset">
                                                    <div class="field field--city">
                                                        <input value="" name="city" type="text" placeholder="City" class="field__input" required>
                                                    </div>
                                                </div>
                                                <div class="fieldset">
                                                    <div class="field field--country field--third">
                                                        <select name="country" id="country" class="field__input" required></select>
                                                    </div>
                                                    <div class="field field--state field--third">
                                                        <select name="state" id="state" class="field__input" required></select>
                                                    </div>
                                                    <div class="field field--pincode field--third">
                                                        <input value="" name="pincode" type="number" placeholder="Pincode" class="field__input" required>
                                                    </div>
                                                </div>
                                                <div class="fieldset">
                                                    <div class="field field--phone">
                                                        <input value="" name="phone" type="number" placeholder="Phone" class="field__input" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="step__footer">
                                            <button style="margin-top: 8px;" name="checkout-submit" type="submit" class="step__footer__continue-btn btn btn-danger1">
                                                Procced to pay
                                            </button>
                                            <span></span>
                                            <a style="margin-top: 8px !important" class="step__footer__pre vious-link  btn-block btn-danger2 " href="<?php URL ?>my_cart.php">
                                                Return to Cart
                                            </a>
                                        </div>
                        </form>
                    <?php } ?>
                    </div>
                </main>
            </div>
            <aside class="sidebar" role="complementary">
                <div class="sidebar__content">
                    <div id="order-summary" class="order-summary order-summary--is-collapsed">
                        <h2 class="visually-hidden-if-js">Order summary</h2>
                        <div class="order-summary__sections">
                            <div class="order-summary__section order-summary__section--product-list">
                                <div class="order-summary__section__content">
                                    <table class="product-table">
                                        <!-- <thead class="product-table__header">
                                            <tr>
                                                <th scope="col"><span class="visually-hidden">Product image</span></th>
                                                <th scope="col"><span class="visually-hidden">Description</span></th>
                                            
                                                <th scope="col"><span class="visually-hidden">Price</span></th>
                                                </tr>
                                        </thead> -->
                                        <tbody>
                                            <?php
                                            if (isset($_SESSION['cart'])) {

                                                foreach ($_SESSION['cart'] as $key => $value) {
                                            ?>


                                                    <tr class="product">

                                                        <td class="product__image">
                                                            <div class="product-thumbnail ">
                                                                <div class="product-thumbnail__wrapper"><img class="product-thumbnail__image" src="<?php echo $value['Item_Image'] ?>"></div>
                                                            </div>
                                                        </td>

                                                        <th class="product__description" scope="row"><span class="product__description__name order-summary__emphasis"></span><span class="product__description__variant order-summary__small-text"></span><?php echo $value['Item_Name'] ?></th>

                                                        <td class="product__price"><span class="order-summary__emphasis skeleton-while-loading"><?php echo number_format($value['Price'], 2) ?></span></td>
                                                    </tr>

                                        </tbody>
                                <?php }
                                            } ?>
                                    </table>
                                </div>
                            </div>
                            <div class="order-summary__section order-summary__section--total-lines">
                                <table class="total-line-table">

                                    <tfoot class="total-line-table__footer">
                                        <tr class="total-line">
                                            <th class="total-line__name payment-due-label" scope="row"><span class="payment-due-label__total">Total</span></th>
                                            <td class="total-line__price payment-due">
                                                <!-- <span id="gtotal1" class="payment-due__price"></span> -->
                                                <?php
                                                $value = '<span class="cid" id="gtotal1"></span>';
                                                echo $value
                                                ?>
                                                
                                            </td>


                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <script src="../assests/js/jquery.js"></script>
    <script src="../assests/js/country-state-select.js"></script>
    <script language="javascript">
        populateCountries("country", "state");
        populateCountries("country2");
    </script>
    <script>
        var a = '$';
        var b = sessionStorage.getItem(gtotal1);
        var c = '.00';

        gtotal1.innerHTML = a.concat(b).concat(c);
        $("#mydata").val(b);
    </script>

</body>

</html>