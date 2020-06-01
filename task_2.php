<?php

function changeString($input) {
	$output = explode('|', $input);
	$pfirst = $output[0];
	$plast = $output[1];
	
	
	
	$fileDetail = explode(".", $pfirst);
	$stringAlt = $output[1];


	return [$fileDetail[0], $stringAlt];
}


	
$stringDetail = changeString("11-1.jpg|Fork in the road");


?>
<div class="block-img">
<picture>
<source class="lazyload" data-srcset="../images/<?=$stringDetail[0]?>.webp" type="image/webp" alt="<?=$stringDetail[1]?>">
<source class="lazyload" data-srcset="../images/<?=$stringDetail[0]?>.jpg" type="image/png" alt="<?=$stringDetail[1]?>">
<img defer class="lazyload" data-src="../images/<?=$stringDetail[0]?>.jpg" alt="<?=$stringDetail[1]?>">
</picture>
</div>