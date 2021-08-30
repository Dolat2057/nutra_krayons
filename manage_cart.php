  <link rel="icon" type="image/png" href="./assests/images/favicon.png" sizes="32x32" />
<?php
include("connection/session.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['Add_To_Cart'])) {
        if (isset($_SESSION['cart'])) {
            // $myitems = array_column($_SESSION['cart'], 'Item_Name');
            // if (in_array($_POST['Item_Name'], $myitems)) {
            //     echo $_SESSION['status'] = "<span style='font-weight:bold !important;'>See Again To The Cart!!!<span> Item Already Added";
            //     header('location:./my_cart.php');
            // }
          
            // else {
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array('Item_Name' => $_POST['Item_Name'], 'product_id' => $_POST['product_id'], 'Item_Image' => $_POST['Item_Image'], 'Price' => $_POST['Price'], 'Quantity' => 1);
            echo $_SESSION['status'] = "<span style='font-weight:bold !important;color:#73ae20 !important;'>Thanks!!!<span>Item Added";
            header('location:./my_cart.php');
            //   }
        } else {
            $_SESSION['cart'][0] = array('Item_Name' => $_POST['Item_Name'], 'product_id' => $_POST['product_id'], 'Item_Image' => $_POST['Item_Image'], 'Price' => $_POST['Price'], 'Quantity' => 1);
            echo $_SESSION['status'] = "<span style='font-weight:bold !important; color:#73ae20 !important'>Thanks!!!<span>Item Added";
            header('location:./my_cart.php');
        }
    }


    // remove button coding
    if (isset($_POST['Remove_Item'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['Item_Name'] == $_POST['Item_Name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo $_SESSION['status'] = "<span style='color:red;font-weight:bold !important;'>Danger!!!<span>Item Removed";
                header('location:./my_cart.php');
            }
        }
    }
}
