<?php
	$accomm_thumb_ID=3;
	$acc_h2=$fun_obj->TextArray($accomm_thumb_ID, "h2");
	$acc_p=$fun_obj->TextArray($accomm_thumb_ID, "p");
?>
<section class="welcome-section">
	<div class="container">
		<?php if($acc_h2[0]!='') echo"<h2>".$acc_h2[0]."</h2>";?>
	</div>
</section>
<section class="second-section">
	<div class="room-image">		
	</div>
	<div class="room-content">
		<h4>Rooms &amp; Suites</h4>
		<h3>Find Your Accommodation</h3>
		<a href="<?=$website_domain?>rooms.php" class="secondary-btn button"> <span aria-hidden="true">View All Rooms</span></a>
	</div>
</section>