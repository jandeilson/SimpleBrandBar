<?php
include "../../settings.php";

try {
    foreach($dbh->query("SELECT slug FROM links ORDER BY date DESC LIMIT 10") as $row) {  
    
    $url = $_SERVER['REQUEST_URI'];
    $parts = explode('/',$url);
    $dir = $_SERVER['SERVER_NAME'];
    for ($i = 0; $i < count($parts) - 3; $i++) {
        $dir .= $parts[$i] . "/";
    }
    
    ?>
    <li><input class="links" onclick="this.focus();this.select()" readonly="readonly" value="<?=$dir?><?=$row['slug']?>"></li>
    <?php

    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}