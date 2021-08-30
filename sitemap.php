<title>SiteMap</title>
<link rel="icon" type="image/png" href="./assests/images/favicon.png" sizes="32x32" />
<style>
  .sitemap-ul {
    font-size: 30px !important;
    margin-top: 8px;
    font-family: 'oswald','sans-serif';

  }

  .sitemap-li {
    font-size: 20px !important;
    list-style-type: circle;
    line-height: 1.6;
    padding-top: 5px;
    margin-left: 40px;
    color: #73AE20;
    font-family: 'oswald','sans-serif';


  }

  .sitemap-anchor {
    display: flex;
    font-family: 'oswald','sans-serif';


  }

  .sitemap-li2 {
    font-size: 20px !important;
    list-style-type: square;
    line-height: 1.6;
    padding-top: 5px;
    margin-left: 35px;
    font-family: 'oswald','sans-serif';


  }
</style>

<?php
include('config/config.inc.php');
?>


<?php
include("common/nav.php");
?>
<div class="container">
  <ul class="breadcrumb">
    <li><a href="<?= URL ?>index.php"><i class="fa fa-home"></i> Home</a></li>
    <li><a href="<?= URL ?>sitemap.php">Sitemap</a></li>
  </ul>
</div>

<!-- sitemap -->
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <ul class="sitemap-ul">
        Navbar
        <a href="<?= URL ?>index.php" class="sitemap-anchor">
          <li class="sitemap-li">Home</li>
        </a>
        <a href="<?= URL ?>products.php?product_type=Haircare" class="sitemap-anchor" style="color: #73AE20;">
          <li class="sitemap-li">Product
            <ul>

              <a class="sitemap-anchor" href="<?= URL ?>products.php?product_type=Haircare">
                <li class="sitemap-li2">Hair Care</li>
              </a>
              <a class="sitemap-anchor" href="<?= URL ?>products.php?product_type=Weightloss">
                <li class="sitemap-li2">Weight Loss</li>
              </a>
              <a class="sitemap-anchor" href="<?= URL ?>products.php?product_type=Womenwellness">
                <li class="sitemap-li2">Women Wellness</li>
              </a>
              <a class="sitemap-anchor" href="<?= URL ?>products.php?product_type=Sexualwellness">
                <li class="sitemap-li2">Sexual Wellness</li>
              </a>
              <a class="sitemap-anchor" href="<?= URL ?>products.php?product_type=Immunitybooster">
                <li class="sitemap-li2">Immunity Booster</li>
              </a>
            </ul>

          </li>
        </a>
        <a href="<?= URL ?>about-us.php" class="sitemap-anchor">
          <li class="sitemap-li">About</li>
        </a>
        <a href="<?= URL ?>faq.php" class="sitemap-anchor">
          <li class="sitemap-li">Faqs</li>
        </a>
        <a href="<?= URL ?>contact.php" class="sitemap-anchor">
          <li class="sitemap-li">Contact</li>
        </a>
      </ul>
    </div>


    <div class="col-md-4">
      <ul class="sitemap-ul">
        User
        <a href="<?= URL ?>user/login.php" class="sitemap-anchor">
          <li class="sitemap-li">Login</li>
        </a>
        <a href="<?= URL ?>user/registration.php" class="sitemap-anchor" style="color: #73AE20;">
          <li class="sitemap-li">Register
          </li>
        </a>
        <a href="<?= URL ?>my_cart.php" class="sitemap-anchor" style="color: #73AE20;">
          <li class="sitemap-li">Cart
          </li>
        </a>

      </ul>
    </div>
    <div class="col-md-4">
      <ul class="sitemap-ul">
        Footer
        <li style="padding-top: 9px; font-size: 22px;" class="sitemap-li">Customer service

          <ul>
            <a href="<?= URL ?>about-us.php" class="sitemap-anchor">
              <li class="sitemap-li2">About-us</li>
            </a>
            <a href="<?= URL ?>privacy-policy.php" class="sitemap-anchor">
              <li class="sitemap-li2">Privacy Policy</li>
            </a>
            <a href="<?= URL ?>consumer-policy.php" class="sitemap-anchor">
              <li class="sitemap-li2">Consumer Policy</li>
            </a>
            <a href="<?= URL ?>terms-of-service.php" class="sitemap-anchor">
              <li class="sitemap-li2">Terms Of Service</li>
            </a>
            <a href="<?= URL ?>shipping-policy.php" class="sitemap-anchor">
              <li class="sitemap-li2">Shipping And <br> Delivery Policy</li>
            </a>
            <a href="<?= URL ?>contact-us.php" class="sitemap-anchor">
              <li class="sitemap-li2">Contact-us</li>
            </a>
          </ul>
        </li>
      </ul>
      <ul class="sitemap-ul">

        <li style="padding-top: 9px; font-size: 22px;" class="sitemap-li">Extras

          <ul>
            <a href="<?= URL ?>brand.php" class="sitemap-anchor">
              <li class="sitemap-li2">Brand</li>
            </a>
            <a href="<?= URL ?>affiliates.php" class="sitemap-anchor">
              <li class="sitemap-li2">Affiliates</li>
            </a>
            <a href="<?= URL ?>faq.php" class="sitemap-anchor">
              <li class="sitemap-li2">Faqs and help</li>
            </a>

            <a href="<?= URL ?>sitemap.php" class="sitemap-anchor">
              <li class="sitemap-li2">Sitemap</li>
            </a>
          </ul>
        </li>
      </ul>
      <ul class="sitemap-ul">

        <li style="padding-top: 9px; font-size: 22px;" class="sitemap-li">Follow us on

          <ul>
            <a href="<?= URL ?>footer.php" class="sitemap-anchor">
              <li class="sitemap-li2">facebook</li>
            </a>


            <a href="<?= URL ?>footer.php" class="sitemap-anchor">
              <li class="sitemap-li2">linkedin</li>
            </a>
          </ul>
        </li>
      </ul>
      <ul class="sitemap-ul">

        <li style="padding-top: 9px; font-size: 22px;" class="sitemap-li">Info

          <ul>
            <a href="<?= URL ?>footer.php" class="sitemap-anchor">
              <li class="sitemap-li2">Address</li>
            </a>


            <a href="<?= URL ?>footer.php" class="sitemap-anchor">
              <li class="sitemap-li2">Subscribe</li>
            </a>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- ends here -->
<?php
include("common/footer.php");
?>

<script src="./assests/js/sitemap.js"></script>