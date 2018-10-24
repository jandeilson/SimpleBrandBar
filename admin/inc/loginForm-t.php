<?php
include "../settings.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" /> 
    <title>Login | Simple BrandBar</title>

    <link rel="stylesheet" type="text/css" href="../css/styleLoginForm.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <link href="../img/admin/favicon.png" rel="icon">
</head>
<body>

<div class="logo">
  <h1>SimpleBrandBar</h1>
  <h2 class="logo-desc">Having your own "brandbar" never been easier!</h2>
</div>

<form id="form" name="form" action="<?php echo $self; ?>" method="post">
  <div id="block">
    <label id="username" for="username"><i class="fa fa-user"></i></label>
    <input type="text" name="username" id="username" placeholder="Username" required/>
    <label id="pass" for="password"><i class="fa fa-key"></i></label>
    <input type="password" name="password" id="password" placeholder="Password" required />
    <button type="submit" id="submit" name="submit" value="Login"/><i class="fa fa-sign-in"></i></button>
  </div>
</form>
