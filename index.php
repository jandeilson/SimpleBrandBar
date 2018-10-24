<?php
include "settings.php";

if (isset($_GET["slug"])) {

$slug = $_GET["slug"];

try {
	$query = $dbh->query ("SELECT * FROM links INNER JOIN site, bars, options WHERE slug = '$slug' LIMIT 1");

	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    	include "inc/iframe.php";
    }

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
} else {
	echo "No links found.";
}