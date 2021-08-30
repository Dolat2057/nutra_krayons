<?php

require("./init.php");


$publishableKey = "pk_test_51Ihpu2SFGhGXYPYIk5stGqlpfZdnc5lZeodvdsvgqe3kH7AZAAH47JNR6pPsaVMbrJL6FtdHaiLG9BeRe5MMQuKq005FRN1GSP";

$secretKey = "sk_test_51Ihpu2SFGhGXYPYI8JyYI6H3zeGGHwqHGFpndAgeuoWMxwSgMc4HEun7Jh2rEqibkBmteNSVdac6qN8mlkPVTZys00nIkNkp49";

\Stripe\Stripe::setApiKey($secretKey);

?>