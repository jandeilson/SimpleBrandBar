<?php
include "../config.php";

try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE IF NOT EXISTS `$dbname`.`links` (
        `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
        `title` varchar(42) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
        `slug` varchar(42) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
        `iframe` varchar(142) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
        `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`)
    );
    CREATE TABLE IF NOT EXISTS `$dbname`.`site` (
        `id` int(1) unsigned NOT NULL,
        `siteName` varchar(42) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
        `siteDesc` varchar(142) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
        `siteUrl` varchar(42) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
        `siteLogo` varchar(142) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`)
    );
    CREATE TABLE IF NOT EXISTS `$dbname`.`options` (
        `id` int(1) unsigned NOT NULL AUTO_INCREMENT,
        `barDefault` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`)
    );
    CREATE TABLE IF NOT EXISTS `$dbname`.`bars` (
        `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
        `barName` varchar(42) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
        `barCustomOption1` varchar(42) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
        `barCustomOption2` varchar(42) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
        `barCustomOption3` varchar(42) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
        `barCustomOption4` varchar(42) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
        `barCustomOption5` varchar(42) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY (`id`)
    )";

    $dbh->exec($sql);

    $sql = "INSERT INTO `$dbname`.`bars` (`id`, `barName`, `barCustomOption1`, `barCustomOption2`, `barCustomOption3`, `barCustomOption4`, `barCustomOption5`) VALUES ('1', 'BrandBar Style 1', 'https://github.com/jandeilson/simplebrandbar', 'fa-shopping-cart', 'Purchase Now!', '#424242', '')
            ON DUPLICATE KEY UPDATE `barName` = 'BrandBar Style 1', `barCustomOption1` = 'https://github.com/jandeilson/simplebrandbar', barCustomOption2 = 'fa-shopping-cartl', barCustomOption3 = 'Purchase Now!', barCustomOption4 = '#42424', barCustomOption5 = '';
            INSERT INTO `$dbname`.`options` (`id`, `barDefault`) VALUES ('1', '1')
            ON DUPLICATE KEY UPDATE `barDefault` = '1';";

    $dbh->exec($sql);
    ?>
    <div style="text-align:center;padding:10%;">
        <h1>Simple BrandBar successfully installed!</h1>
        <h2>Any problem, please contact me.</h2>
        <p><a href="mailto:jandeilson.desousa@gmail.com?subject=Support Request Simple BrandBar">Support</a></p>
    </div>
    <?php
    }
catch(PDOException $e)
    {
    ?>
    <div style="text-align:center;padding:10%;">
        <h1>Something wrong! Check your MySQL database or contact me.</h1>
        <p><?php echo $sql . "<br>" . $e->getMessage(); ?>
        <p><a href="mailto:jandeilson.desousa@gmail.com?subject=Support Request Simple BrandBar">Support</a></p>
    </div>
    <?php
    }

$dbh = null;