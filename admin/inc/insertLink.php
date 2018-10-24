<?php
include "../../settings.php";

$title = $_POST['title'];
$slug = $_POST['slug'];
$iframe = $_POST['iframe'];

try {
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO links (title, slug, iframe) VALUES ('$title', '$slug', '$iframe')";
    
    $dbh->exec($sql);
    echo "Your link was successfully added!";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$dbh = null;

?>