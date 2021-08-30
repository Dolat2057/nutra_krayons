<title>Product-detail</title>
  <link rel="icon" type="image/png" href="./assests/images/favicon.png" sizes="32x32" />
<link rel="stylesheet" href="./assests/css/productzoom-css.css">
<?php
include("connection/conn.php");
include('config/config.inc.php');
?>
<?php include("common/nav.php"); ?>


<body class="product-product ltr layout-2 ">
    <?php
    $ID = $_REQUEST['product_id'];
    $data = "SELECT * FROM `product_slider` WHERE `product_id`='" . $ID . "' ";
    $result_data = mysqli_query($conn, $data);
    $row = mysqli_fetch_array($result_data);

    ?>

    <div class="mt-80"></div>
    <div id="wrapper" class="wrapper-fluid banners-effect-7">
        <div class="content-main container product-detail  ">
            <div class="row">
                <z div id="content" class="product-view col-sm-12">
                    <div class="content-product-mainheader clearfix">
                        <div class="row">
                            <div class="content-product-left  col-md-6 col-sm-12 col-xs-12">
                                <div class="so-loadeding">
                                    <div class="container">
                                        <div class="zoom-container">
                                            <img src="./assests/images/product-images/slider-2.5.jpg" height="320px" width="320px" alt="" class="xzoom">


                                            <div class="xzoom-thumbs" style="padding-top: 8px;">
                                                <a href="./assests/images/product-images/small-image1.jpg">
                                                    <img src="./assests/images/product-images/small-image1.jpg" class="xzoom-gallery" alt="">
                                                </a>
                                                <a href="./assests/images/product-images/small-image2.jpg">
                                                    <img src="./assests/images/product-images/small-image2.jpg" class="xzoom-gallery" alt="">
                                                </a>
                                                <a href="./assests/images/product-images/big-image-1.jpg">
                                                    <img src="./assests/images/product-images/big-image-1.jpg" class="xzoom-gallery" alt="">
                                                </a>
                                                <a href="./assests/images/product-images/big-image2.jpg">
                                                    <img src="./assests/images/product-images/big-image2.jpg" class="xzoom-gallery" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-product-right col-md-6 col-sm-12 col-xs-12">
                                <div class="title-product" style="margin-top: 10px;">
                                    <h1 itemprop="name"><?= $row['title']; ?></h1>
                                </div>
                                <div class="product_page_price price">
                                    <span class="price-new">
                                        <span itemprop="price" content="" id="price-special">
                                            <?= '$' . $row['price']; ?>
                                        </span>
                                    </span>
                                    </span>
                                </div>

                                <div class="product-box-desc">
                                    <div class="inner-box-desc">
                                        <div class="brand" itemprop="brand">
                                            <span>Brand: </span><a href="" itemprop="url">
                                                <span itemprop="name">By Default </span></a>
                                        </div>
                                        <div class="model"><span>Product Code: </span> <?= $row['product_id'] ?></div>
                                        <div class="stock"><span>Availability:</span> <i class="fa fa-check-square-o"></i> In Stock</div>
                                        <div class="inner-box-viewed ">
                                            <span>Viewed</span> <i class="fa fa-eye"></i> 614 times
                                        </div>


                                    </div>

                                    <div id="product">
                                        <div class="box-cart clearfix form-group">
                                            <div class="form-group box-info-product">
                                                <div class="option quantity">
                                                </div>
                                                <div class="detail-action">
                                                    <div class="cart">

                                                        <form action="<?= URL ?>manage_cart.php" method="POST">
                                                            <input type="submit" id="Add_To_Cart1" name="Add_To_Cart" value="Add to Cart" class="btn btn-mega">

                                                            <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>">
                                                            <input type="hidden" name="Item_Image" value="<?php echo $row['image'] ?>">
                                                            <input type="hidden" name="Item_Name" value="<?php echo $row['title'] ?>">
                                                            <input type="hidden" name="Price" value="<?php echo $row['price'] ?>">
                                                    </div>
                                                    </form>

                                                </div>


                                            </div>

                                            <div class="clearfix"></div>
                                        </div>


                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="content-product-mainbody clearfix row">
                            <div class="content-product-content col-sm-12">
                                <div class="content-product-midde clearfix">

                                    <div class="producttab ">
                                        <div class="tabsslider vertical-tabs  vertical-tabs  col-xs-12">
                                            <ul class="nav nav-tabs col-lg-3 col-md-6 col-sm-4">
                                                <li class="active"><a data-toggle="tab" href="#tab-description">Description</a></li>

                                                <li><a href="#tab-review" data-toggle="tab">Reviews (0)</a></li>

                                                <li><a href="#tab-contentshipping" data-toggle="tab">Shipping Methods</a>
                                                </li>


                                            </ul>
                                            <div class="tab-content  col-lg-9 col-sm-8 col-md-6  col-xs-12">
                                                <div class="tab-pane active" id="tab-description">

                                                    <h6 class="product-property-title" style="font-size:16px !important"><?= $row['big_description']; ?></h6>
                                                    <div id="collapse-description" class="desc-collapse showdown">
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="tab-review">
                                                    <form class="form-horizontal" id="form-review">
                                                        <div id="review"></div>
                                                        <h3>Write a review</h3>
                                                        <div class="form-group required">
                                                            <div class="col-sm-12">
                                                                <label class="control-label" for="input-name">Your
                                                                    Name</label>
                                                                <input type="text" name="name" value="" id="input-name" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group required">
                                                            <div class="col-sm-12">
                                                                <label class="control-label" for="input-review">Your
                                                                    Review</label>
                                                                <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                                                <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group required">
                                                            <div class="col-sm-12">
                                                                <label class="control-label">Rating</label> &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                                <input type="radio" name="rating" value="1" /> &nbsp;
                                                                <input type="radio" name="rating" value="2" /> &nbsp;
                                                                <input type="radio" name="rating" value="3" /> &nbsp;
                                                                <input type="radio" name="rating" value="4" /> &nbsp;
                                                                <input type="radio" name="rating" value="5" /> &nbsp;Good
                                                            </div>
                                                        </div>


                                                        <div class="pull-right">
                                                            <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                                                        </div>

                                                    </form>
                                                </div>

                                                <div class="tab-pane" id="tab-contentshipping">
                                                    <div class="shipping_methods_info">
                                                        <!-- shipping method -->
                                                        <p><span style="font-size: small;">When you order from
                                                                opencartworks.com, you will receive a confirmation email.
                                                                Once your order is shipped, you will be emailed the tracking
                                                                information for your order's shipment. You can choose your
                                                                preferred shipping method on the Order Information page
                                                                during the checkout process.</span></p>
                                                        <p><span style="font-size: small;">The total time it takes to
                                                                receive your order is shown below:</span></p>
                                                        <p style="text-align:center;">
                                                            <img src="<?= URL ?>assests/images/shipping_method_new_intro.jpg" data-original="<?= URL ?>assests/images/shipping_method_new_intro.jpg" class="bg_lazy" style="display: inline;">
                                                        </p>
                                                        <p><span style="font-size: small;">The total delivery time is
                                                                calculated from the time your order is placed until the time
                                                                it is delivered to you. Total delivery time is broken down
                                                                into processing time and shipping time.</span></p>
                                                        <p><span style="font-size: small;"><strong>Processing time:</strong>
                                                                The time it takes to prepare your item(s) to ship from our
                                                                warehouse. This includes preparing your items, performing
                                                                quality checks, and packing for shipment.</span></p>
                                                        <p><span style="font-size: small;"><strong>Shipping time:</strong>
                                                                The time for your item(s) to tarvel from our warehouse to
                                                                your destination.</span></p>
                                                        <p><span style="font-size: small;">Shipping from your local
                                                                warehouse is significantly faster. Some charges may
                                                                apply.<br></span></p>
                                                        <p><span style="font-size: small;">In addition, the transit time
                                                                depends on where you're located and where your package comes
                                                                from. If you want to know more information, please contact
                                                                the customer service. We will settle your problem as soon as
                                                                possible. Enjoy shopping!<br></span></p>
                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
            </div>
        </div>


    </div>


    <?php
    include("common/footer.php");
    ?>
    <script src="./assests/js/product-zoom.js"></script>
    <script src="./assests/js/zoom.js"></script>