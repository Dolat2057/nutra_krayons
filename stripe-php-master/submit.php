<?php  
require("./config.php");


if(isset($_POST['stripeToken'])){
\Stripe\Stripe::setVerifySslCerts(false);


$token = $_POST['stripeToken'];
$alok = $_POST[''];
$data = \Stripe\Charge::create(array(
     "amount"=>$alok,
       
     "currency"=>"inr",
     "source"=>$token,
    
));

echo '<pre>';
print_r($data);

}
?>