<title>Products</title>
  <link rel="icon" type="image/png" href="<?=URL?>assests/images/favicon.png" sizes="32x32" />
<style>
    @media only screen and (min-width: 767px) {
        .product_btn {
            padding-left: 45px !important;
            padding-right: 45px !important;

        }

        .product_btn_bg {
            padding-left: 40px !important;
            padding-right: 40px !important;

        }
    }
</style>
<?php
include("connection/conn.php");
include('config/config.inc.php');
include('common/nav.php');
?>

<div class="col-md-12 product_btn_bg">
    <ul class="" style="padding-top: 10px; display:list-item !important; margin-right: 10px !important;">
        <?php
        $sql = "select distinct product_type from product_slider order by product_type";
        $result = $conn->query($sql);
        ?>

        <div class="product_btn" style="background-color: #d6d8d9; padding-bottom:10px">
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>

                <a href="<?= URL ?>products.php?product_type=<?= $row['product_type']; ?>" style="color: #000 !important; font-weight:600;margin-left:5px;"> <button class="product_tabs"><?= $row['product_type']; ?></button></a>
            <?php } ?>
        </div>

    </ul>
</div>


<div class="container">
    <div class="row">
        <?php
        if (isset($_GET['product_type'])) {
            $product_type = $_GET['product_type'];
            $sql1 = "SELECT * FROM product_slider where product_type='$product_type'";
            $result = $conn->query($sql1);
        }
        if (isset($_GET['search'])) {
            $id = $_GET['search'];
            $sql1 = "SELECT id, product_type,price, small-description, image FROM product_slider where  product_type Like '%$id%' OR product_id Like '%$product_id%'";
            $result = $conn->query($sql1);
        }


        while ($row = $result->fetch_assoc()) { ?>
            <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12">
                <div class="card" style="margin-top:30px; margin-bottom:10px; padding:20px; height:29rem;">
                    <div class="inner">
                        <img class="card-img-top" src="<?php echo URL. $row['image'] ?>" width="400px" height="200px" alt="image">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">
                        <h5><?php echo $row['title'] ?></h5>
                        </p>
                        <p><?php echo $row['small_description']; ?></p>
                        <h4 class="price_product"><?PHP echo '$' . $row['price'] . '.00'; ?></h4>
                        <br>
                        Type: <?php echo $row['product_type']; ?>
                        <p>
                            <a class="btn_common" href="<?= URL ?>product-detail.php?product_id=<?= $row['product_id']; ?>" style="background-color:#73AE20;color:white; border:1px solid #73AE20;">View Details </a>
                    </div>
                </div>
            </div>

        <?php } ?>


    </div>
</div>



<?php
include("common/footer.php");
?>