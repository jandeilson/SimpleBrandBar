<?php
session_start();

include "security.php";

$random1 = 'secret_key1';
$random2 = 'secret_key2';

$hash = md5($random1.$password.$random2); 

$self = $_SERVER['REQUEST_URI'];

if(isset($_GET['logout'])) {
  unset($_SESSION['login']);
}

if (isset($_SESSION['login']) && $_SESSION['login'] == $hash) {
include "inc/admin.php";
}

else if (isset($_POST['submit'])) {
  if ($_POST['username'] == $username && $_POST['password'] == $password){
    $_SESSION["login"] = $hash;
    header("Location: $_SERVER[PHP_SELF]");
  } else {
    include "inc/loginForm-t.php";
?><p class="pass-in">Your username or password is incorrect, try again.</p><?php
    include "inc/loginForm-f.php";
  }
} 

else {
    include "inc/loginForm-t.php";
    include "inc/loginForm-f.php";
}

