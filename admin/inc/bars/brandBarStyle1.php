<?php
include "../../../settings.php";

$query = $dbh->query ("SELECT * FROM bars WHERE id = 1");
$row = $query->fetch(PDO::FETCH_ASSOC);
?>
<form id="formBrandBarStyle1" action="" method="post">
    <fieldset>
      <legend>Button & Style</legend>
       <input type="text" name="brandBarButtonIcon" value="<?=$row['barCustomOption2']?>" placeholder="Insert here any Font Awesome icon. (ex: fa-shopping-cart)" />
       <input type="text" name="brandBarButtonName" value="<?=$row['barCustomOption3']?>" placeholder="Insert here any Name you want. (ex: Purchase Now!)" />
       <input type="url" name="brandBarButtonUrl" value="<?=$row['barCustomOption1']?>" placeholder="Insert here any URL you want. (ex: https://github.com/jandeilson/simplebrandbar)" />
       <input type="text" name="brandBarBackground" value="<?=$row['barCustomOption4']?>" placeholder="Insert here any Color you want. (ex: #00ffff or cyan)" />
    </fieldset>
    <input type="submit" id="submit" value="Change your BrandBar Style options" />
</form>
<div id="loadingBrandBarStyle"></div>
<div class="sent sentBrandBarStyle"></div>

<script>
  $("#formBrandBarStyle1").submit(function(){
    var dados = $(this).serialize();
    var form = this;

    $("#loadingBrandBarStyle").show();
    
    $.ajax({
      type: "POST",
      url: "../admin/inc/bars/insertBar1",
      data: dados,
      success: function(html) {
        $('.sentBrandBarStyle').html(html);
      }
    });

    setTimeout(function () {
      $("#loadingBrandBarStyle").hide();
      $(".sentBrandBarStyle").show();
    }, 2000);

    setTimeout(function () {
      $(".sentBrandBarStyle").hide();
    }, 3000);

    return false;
  });
</script>