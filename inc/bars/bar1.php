<div id="top_bar" style="background:<?=$row['barCustomOption4']?>;">
	<div class="logo">
		<h1>
			<a id="logo" href="<?=$row['siteUrl']?>"><img src="img/<?=$row['siteLogo']?>" height="26" alt="<?=$row['siteName']?>" title="<?=$row['siteName']?>"></a>
		</h1>
	</div>

	<div class="title"><?=$row['siteDesc']?></div>
	
	<div class="close">
		<a class="btn_close" title="Close" href="<?=$row['iframe']?>"><i class="fa fa-times"></i></a>
	</div>
	
	<div class="customButton">
		<a class="btn_customButton" href="<?=$row['barCustomOption1']?>"><i class="fa <?=$row['barCustomOption2']?>"></i> <?=$row['barCustomOption3']?></a>
	</div>
</div>
