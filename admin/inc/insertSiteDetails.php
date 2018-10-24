<?php
include "../../settings.php";

$siteName = $_POST["siteName"];
$siteDesc = $_POST["siteDesc"];
$siteUrl = $_POST["siteUrl"];

try {
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO site (id, siteName, siteDesc, siteUrl) VALUES ('1', '$siteName', '$siteDesc', '$siteUrl')
    ON DUPLICATE KEY UPDATE siteName = '$siteName', siteDesc = '$siteDesc', siteUrl = '$siteUrl';";

    $dbh->exec($sql);
    echo "Your site details was recorded successfully!";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$dbh = null;

?>