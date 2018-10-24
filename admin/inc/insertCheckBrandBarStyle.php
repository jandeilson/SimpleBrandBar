<?php
include "../../settings.php";

$brandBarStyle = $_POST["brandBarStyle"];

try {
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO options (id, barDefault) VALUES ('1', '$brandBarStyle')
    ON DUPLICATE KEY UPDATE barDefault = '$brandBarStyle'";

    $dbh->exec($sql);
    echo "Your default BrandBar was recorded successfully!";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$dbh = null;


?>