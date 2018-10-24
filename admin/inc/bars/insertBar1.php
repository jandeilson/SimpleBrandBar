<?php
include "../../../settings.php";

$buttonUrl= $_POST["brandBarButtonUrl"];
$buttonIcon = $_POST["brandBarButtonIcon"];
$buttonName = $_POST["brandBarButtonName"];
$barBackground = $_POST["brandBarBackground"];

try {
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO bars (id, barName, barCustomOption1, barCustomOption2, barCustomOption3, barCustomOption4) VALUES ('1', 'BrandBar Style 1', '$buttonUrl', '$buttonIcon', '$buttonName', '$barBackground')
    ON DUPLICATE KEY UPDATE barName = 'BrandBar Style 1', barCustomOption1 = '$buttonUrl', barCustomOption2 = '$buttonIcon', barCustomOption3 = '$buttonName', barCustomOption4 = '$barBackground';";

    $dbh->exec($sql);
    echo "Your BrandBar options was recorded successfully!";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$dbh = null;