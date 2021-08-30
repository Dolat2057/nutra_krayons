<title>Brand</title>
<link rel="icon" type="image/png" href="./assests/images/favicon.png" sizes="32x32" />
<?php
include('config/config.inc.php');
include('common/nav.php');
?>
<style>
    .brand-item:hover {
        color: #73ae20;
    }
</style>
<div class="container">
    <ul class="breadcrumb" style="margin-left:7px">
        <li><a href="<?= URL ?>index.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<? URL ?>brand.php">Brand</a></li>
    </ul>
    <div class="mrtop"></div>
    <div id="content" style="float:none !important;" class="col-sm-12">
        <h1 class="page-title">Find Your Favorite Brand</h1>
        <p><strong>Brand Index:</strong>

            &nbsp;&nbsp;&nbsp;<a href="#" class="link-color">H</a>
            &nbsp;&nbsp;&nbsp;<a href="#" class="link-color">S</a>
            &nbsp;&nbsp;&nbsp;<a href="#" class="link-color">I</a>
            &nbsp;&nbsp;&nbsp;<a href="#" class="link-color">W</a>
        </p>

        <div class="manufacturer-list">
            <div class="manufacturer-heading">H<a id="H"></a></div>

            <div class="manufacturer-content">
                <div class="row">
                    <div class="col-sm-12"><a class="brand-item" href="<?= URL ?>products.php?product_type=Haircare">Hair Care</a></div>

                </div>
            </div>

        </div>
        <div class="manufacturer-list">
            <div class="manufacturer-heading">S<a id="S"></a></div>

            <div class="manufacturer-content">
                <div class="row">
                    <div class="col-sm-12"><a class="brand-item" href="<?= URL ?>products.php?product_type=Sexualwellness">Sexual Wellness</a></div>
                </div>
            </div>

        </div>
        <div class="manufacturer-list">
            <div class="manufacturer-heading">I<a id="I"></a></div>

            <div class="manufacturer-content">
                <div class="row">
                    <div class="col-sm-12"><a class="brand-item" href="<?= URL ?>products.php?product_type=Immunitybooster">Immunity Booster</a></div>
                </div>
            </div>

        </div>
        <div class="manufacturer-list">
            <div class="manufacturer-heading">W<a id="W"></a></div>

            <div class="manufacturer-content">
                <div class="row">
                    <div class="col-sm-12"><a class="brand-item" href="<?= URL ?>products.php?product_type=Weightloss">Weight Loss</a></div>
                    <div class="col-sm-12"><a class="brand-item" href="<?= URL ?>products.php">Weight Gain</a></div>
                    <div class="col-sm-12"><a class="brand-item" href="<?= URL ?>products.php?product_type=Womenwellness">Women Wellness</a></div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
include("common/footer.php");
?>