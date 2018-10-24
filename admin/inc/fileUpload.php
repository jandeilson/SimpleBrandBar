<?php
include "../../settings.php";

$allowed = array('png', 'jpg', 'gif','zip');

$filename = ( $_FILES['fileUpload']['name']);

if(isset($_FILES['fileUpload']) && $_FILES['fileUpload']['error'] == 0){

    $extension = pathinfo($_FILES['fileUpload']['name'], PATHINFO_EXTENSION);

    if(!in_array(strtolower($extension), $allowed)){
        ?><p class="error">Sorry, but something apparently is wrong.</p><?php
        exit;
    }

    if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], '../../img/'.$_FILES['fileUpload']['name'])){
    	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO site (id, siteLogo) VALUES ('1', '$filename') ON DUPLICATE KEY UPDATE siteLogo = '$filename';";
        $dbh->exec($sql);
        
        echo "Your logo was uploaded successfully!";
        exit;
    }
}

?><p class="error">Sorry, but something apparently is wrong.</p><?php
exit;
?>