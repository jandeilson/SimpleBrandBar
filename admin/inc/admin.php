<?php
include "../settings.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
<title>Dashboard &lsaquo; Simple BrandBar</title>
	
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">

<link href="../img/admin/favicon.png" rel="icon">
<body>

<div class="logo">
  <h1>SimpleBrandBar</h1>
	<h2 class="logo-desc">Having your own "brandbar" never been easier!</h2>
</div>

<h1 class="tits">Dashboard <a style="float:right;font-size:18px;" href="?logout=true">Logout?</a></h1>

<div class="col-md-8">
  <div class="form">
    <h2>New Link</h2>
    <?php include "inc/newLink.php"; ?>
  </div>
</div><!-- .col-md-8 -->

<div class="col-md-4">
  <div class="last-links">
    <h2>Last Links</h2>
    <ul class="getLastLinks"></ul>
  </div>
</div><!-- .col-md-4 -->

<h1 class="tits">Settings</h1>

<div class="col-md-6">
  <div class="form">
    <h2>Your Site Details</h2>
    <?php include "inc/siteDetails.php"; ?>
  </div>
</div> <!-- .col-md-6 -->

<div class="col-md-6">
  <div class="bar-style">
    <h2>BrandBar Options</h2>
<div class="tabs">
<div class="tab">
<input type="radio" id="tab-1" name="tab-group-1" checked>
<label for="tab-1">Style</label>
       
<div class="content">
    <?php include "inc/checkBrandBarStyle.php"; ?>
</div> 
</div>
    
<div class="tab">
<input type="radio" id="tab-2" name="tab-group-1">
<label for="tab-2">Logo</label>
       
<div class="content">
    <?php include "inc/brandBarLogo.php"; ?><br/>
</div> 
</div>

<div class="tab">
<input type="radio" id="tab-3" name="tab-group-1">
<label for="tab-3">Customize</label>
       
<div class="content">
    <fieldset>
      <legend>Customize</legend>
      <select id="selectBrandBar">
        <option value="" disabled selected>Choose a BrandBar Style</option>
        <?php include "inc/selectBars.php"; ?>
      </select><br/>
      <div id="brandBarStyle1"></div>
    </fieldset>
</div> 
</div>

</div>
  </div>
</div> <!-- .col-md-6 -->

<footer>
	<p>Made with a lot of love by <a href="https://github.com/jandeilson/simplebrandbar">Jandeilson De Sousa</a></p>
	<p><a href="mailto:jandeilson.desousa@gmail.com?subject=Support Request Simple BrandBar">Support</a></p>
</footer>

<!-- JavaScript Includes -->
<script src="../js/jquery-2.1.4.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<!-- jQuery File Upload Dependencies -->

<!-- Our main JS file -->
<script src="../js/admin.js"></script>

</body>
</html>