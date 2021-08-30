<title>product-slider1</title>
<style>
    @media only screen and (min-width: 767px) {
        .section {
            padding-left: 60px !important;
            padding-right: 60px !important;
        }
    }
</style>
<?php
include("connection/conn.php");
?>
<section class="section-title">
    <div class="mt-10"></div>
    <h2 class="heading-2">Nutritional Supplements</h2>
    <div class="mt-10"></div>
</section>
<div class="section">
    <div class="owl-carousel owl-theme ">
        <?php
        error_reporting(0);
        $query = "SELECT  * from `product_slider` LIMIT 11";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);
        if ($total != 0) {
            while ($result = mysqli_fetch_assoc($data)) {

        ?>

                <div class="item shopping_box">

                    <div class="image">
                        <img style="height: 250px !important;" src="<?=URL. $result['image'];?>" alt="nutra" class="img-responsive border-radius">
                        <div class="overlay border_radius">
                            <a class="btn_common yellow border_radius btn-cart" href="<?php URL ?>product-detail.php?product_id=<?= $result['product_id'];   ?>">
                                <?php echo $result['button']; ?>
                            </a>
                        </div>
                    </div>
                    <div class="shop_content text-center">
                        <h4><a href="<?php URL ?>product-detail.php?product_id=<?= $result['product_id']; ?>" class="title_link"><?php echo $result['title']; ?></a></h4>
                        <p><?php echo $result['small_description']; ?></p>
                        <h4 class="price_product"><?PHP echo '$' . $result['price'] . '.00'; ?></h4>
                    </div>


                </div>
        <?php  }
        } ?>

    </div>

    <div class="owl-nav">
        <p type="button" class="owl-prev"></p>
        <p type="button" class="owl-next"></p>
    </div>
</div>
</div>