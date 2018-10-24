<?php
$query = $dbh->query ("SELECT * FROM site WHERE id = 1");
$row = $query->fetch(PDO::FETCH_ASSOC);
if ($row > 0) {
?>
<form id="formSiteDetails" action="" method="post">
        <input type="text" name="siteName" value="<?=$row['siteName']?>" placeholder="Your site Name (ex: Simple BrandBar)" required />
        <input type="text" name="siteDesc" value="<?=$row['siteDesc']?>" placeholder="Your site Description (ex: Awesome Simple Brandbar)" required />
        <input type="url" name="siteUrl" value="<?=$row['siteUrl']?>" placeholder="Your site URL (ex: https://github.com/jandeilson/simplebrandbar)" required />
        <input type="submit" id="submit" value="Change your site details" />
<?php
} else {
?>
<form id="formSiteDetails" action="" method="post">
        <input type="text" name="siteName" placeholder="Your site Name (ex: Simple BrandBar)" required />
        <input type="text" name="siteDesc" placeholder="Your site Description (ex: Awesome Simple Brandbar)" required />
        <input type="url" name="siteUrl" placeholder="Your site URL (ex: https://github.com/jandeilson/simplebrandbar)" required />
        <input type="submit" id="submit" value="Save your site details" />
<?php
}
?>
    </form>
<div id="loadingSiteDetails"></div>
<div class="sent sentSiteDetails"></div>
