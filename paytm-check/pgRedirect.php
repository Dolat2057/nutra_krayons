<?php
include("../connection/session.php");
include("../connection/conn.php");
include("../config/config.inc.php");
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
//following files need to be included
require_once("config_paytm.php");
require_once("encdec_paytm.php");
?>

<?php
if (isset($_POST['checkout-submit'])) {
    $ORDER_ID = $_POST["ORDER_ID"];
    $_SESSION['ORDER_ID'] = $ORDER_ID;
    $CUST_ID = $_POST["CUST_ID"];
    $INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
    $CHANNEL_ID = $_POST["CHANNEL_ID"];
    $TXN_AMOUNT = $_POST["TXN_AMOUNT"];
    $CALLBACK_URL = $_POST["CALLBACK_URL"];
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $apartment = $_POST['apartment'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $phone = $_POST['phone'];
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            $product_id = $value['product_id'];
            $Item_Name = $value['Item_Name'];
            $Item_Image = $value['Item_Image'];
            $price = $value['Price'];
            $odate = time();
      
    $query = "INSERT INTO order_table(ORDER_ID,CUST_ID,INDUSTRY_TYPE_ID,CHANNEL_ID,TXN_AMOUNT,CALLBACK_URL,email,first_name,last_name,address,apartment,city,country,state,pincode,phone,product_id,product_name,product_image,price,order_date)
    VALUES ('$ORDER_ID','$CUST_ID','$INDUSTRY_TYPE_ID','$CHANNEL_ID','$TXN_AMOUNT','$CALLBACK_URL','$email','$first_name','$last_name','$address','$apartment','$city','$country','$state','$pincode','$phone','$product_id','$Item_Name','$Item_Image','$price','$odate')";

    $result   = mysqli_query($conn, $query);
    if ($result) {

        echo '';
    } else {
        echo mysqli_error($conn);
        echo 'not submitted';
    }
}
}
}
?>
<?php
$checkSum = "";
$paramList = array();

$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];
$CALLBACK_URL = $_POST["CALLBACK_URL"];
// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
$paramList["CALLBACK_URL"] = "http://nutra.krayons.mobi/paytm-check/success-1.php";

/*
$paramList["CALLBACK_URL"] = "http://localhost/PaytmKit/pgResponse.php";
$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
$paramList["EMAIL"] = $EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //
*/
//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList, PAYTM_MERCHANT_KEY);
?>
<html>

<head>
    <title>Merchant Check Out Page</title>
</head>

<body>
    <center>
        <h1>Please do not refresh this page...</h1>
        <h2>wait for the moments</h2>
    </center>
    <form action="<?php echo PAYTM_TXN_URL ?>" name="f1">
        <table border="1">
            <tbody>
                <?php
                foreach ($paramList as $name => $value) {
                    echo '<input type="hidden" name="' . $name . '" value="' . $value . '">';
                }
                ?>
                <input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
            </tbody>
        </table>
        <script type="text/javascript">
            document.f1.submit();
        </script>
    </form>
</body>


</html>