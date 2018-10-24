<?php
$query = $dbh->query ("SELECT id, barName FROM bars");
$row = $query->fetch(PDO::FETCH_ASSOC);
?>
<option value="<?=$row['id']?>"><?=$row['barName']?></option>
