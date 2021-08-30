<title>Affiliate</title>
<link rel="icon" href="./assests/images/favicon.png" type="image/gif" sizes="32x32">
<?php
include('config/config.inc.php');
include("common/nav.php");
?>

<div id="affiliate-login" class="container">
  <ul class="breadcrumb">
  <li><a href="<?= URL ?>index.php"><i class="fa fa-home"></i> Home</a></li>
    <li><a href="#">Account</a></li>
    <li><a href="#">Login</a></li>
  </ul>
  <div class="mrtop"></div>
  <div class="row">
    <div id="content" class="col-sm-12">
    <p>
      <b>Affiliate Program</b>
      <p style="margin-top:10px;">Bliss affiliate program is free and enables members to earn revenue by placing a link or links on their web site which advertises Bliss or specific products on it. Any sales made to customers who have clicked on those links will earn the affiliate commission. The standard commission rate is currently 5%.</p>
      <p style="margin-top:10px;">For more information, visit our FAQ page or see our Affiliate terms &amp; conditions.</p>
      </p>
      <div class="row">
        <div class="col-sm-6">
          <div class="well">
            <b>New Affiliate</b>
         
            <p style="margin-top:10px;">I am not currently an affiliate.</p>
            <p style="margin-top:10px;">Click Continue below to create a new affiliate account. Please note that this is not connected in any way to your customer account.</p>
         
            <a class="btn btn-primary" href="#">Continue</a>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="well">
            <b>Affiliate Login</b>
            <p style="margin-top:10px;"><strong>I am a returning affiliate.</strong></p>
            <form action="#" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label" for="input-email">Affiliate E-Mail</label>
                <input type="text" name="email" value="" placeholder="Affiliate E-Mail" id="input-email" class="form-control">
              </div>
              <div class="form-group">
                <label class="control-label" for="input-password">Password</label>
                <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
                <a href="#">Forgotten Password</a>
              </div>
              <input type="submit" value="Login" class="btn btn-primary">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include("common/footer.php");
?>