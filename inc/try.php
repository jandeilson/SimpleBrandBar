<?php
try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    return $dbh;

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}