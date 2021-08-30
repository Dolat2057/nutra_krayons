<title>Search</title>
  <link rel="icon" type="image/png" href="./assests/images/favicon.png" sizes="32x32" />
<?php
include("./connection/conn.php");
include("./config/config.inc.php");
include("./common/nav.php");
?>

<?php
if (isset($_POST['search-submit'])) {
    $search  = mysqli_real_escape_string($conn, $_POST['search']);
    $search = str_replace(' ', '', $search);
    $sql  = "SELECT * FROM product_slider where title like '%$search%'  or small_description like '%$search%' or product_type like '%$search%' or big_description like '%$search%si'";
    $res = mysqli_query($conn, $sql);
    if ($search == '' && ' ' && '  ') {
        echo '
            <div class="error">
                <div class="container-fluid">
                    <div class="col-xs-12 ground-color text-center">
                        <div class="container-error-404">
                            <div class="clip"><div class="shadow"><span class="digit thirdDigit"></span></div></div>
                            <div class="clip"><div class="shadow"><span class="digit secondDigit"></span></div></div>
                            <div class="clip"><div class="shadow"><span class="digit firstDigit"></span></div></div>
                            <div class="msg">OH!<span class="triangle"></span></div>
                        </div>
                        <h2 class="h1">Sorry! Page not found</h2>
                    </div>
                </div>
            </div>
            ';
    } else
        
            if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            echo '
                                <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12">
                                <div class="card" style="margin-top:30px; margin-bottom:10px; padding:20px; height:24rem;">
                                    <div class="inner">
                                        <img class="card-img-top" src="' .URL. $row['image'] . '" width="200px" height="200px" alt="image">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">' . $row['title'] . '</h5    
                                        <p class="card-text">' . $row['small_description'] . '
                                        </p>
                                        <p class="card-text"><span style="color:black !important;">Type:</span>' . $row['product_type'] . '</p>
                                    
                                      
                                            <a class="btn_common" href="product-detail.php?product_id=' . $row['product_id'] . ' " style="background-color:#73AE20;color:white; border:1px solid #73AE20;">View Details </a>
                                    </div>
                                </div>
                            </div>
                            ';
        }
    } else {
        echo '
                        <div class="error">
                            <div class="container-floud">
                                <div class="col-xs-12 ground-color text-center">
                                    <div class="container-error-404">
                                        <div class="clip"><div class="shadow"><span class="digit thirdDigit"></span></div></div>
                                        <div class="clip"><div class="shadow"><span class="digit secondDigit"></span></div></div>
                                        <div class="clip"><div class="shadow"><span class="digit firstDigit"></span></div></div>
                                        <div class="msg">OH!<span class="triangle"></span></div>
                                    </div>
                                    <h2 class="h1">Sorry! Page not found</h2>
                                </div>
                            </div>
                        </div>
                        ';
    }
}
?>
<!-- search query run -->
<?php
if (isset($_GET['product_id']) && $_GET['product_id'] > 0 != '') {
    $product_id = mysqli_real_escape_string($conn, $_GET['product_id']);
    $sql =  "SELECT * from product_slider where product_id = '$product_id'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc(($res));
        echo
        '<div class="card" style="width: 18rem; text-align:center; margin-top:30px;">
            <img src="' . $row['image'] . '" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">' . $row['title'] . '</h5>
            <p class="card-text">' . $row['small_description'] . '</p>
            <a href="product-detail.php?product_id=<?php  ' . $row['product_id'] . ';?> "
            style="background-color:#73AE20;color:white; border:1px solid #73AE20;" class="btn_common">' . $row['button'] . '</a>
            </div>
            </div>';
    } else {
        header("location:./index.php");
    }
}
?>

<?php
include("common/footer.php");
?>
<script src="<?= URL ?>assests/js/page-not-found.js">
    ;
</script>