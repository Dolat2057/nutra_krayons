<?php

require("./config.php");

?>
<form action="submit.php" method="POST">
<script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $publishableKey ?>" data-amount="5555000" data-name="icecream"
 data-description="Ice cream shop" data-image="../assests/images/favicon.png" data-currency="usd"
 >

</script>
 
</form>