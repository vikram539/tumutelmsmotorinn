<?php
$pageIDs=14;

$checkin_time=$fun_obj->TextArray($pageIDs, "checkin_time");
$checkout_time=$fun_obj->TextArray($pageIDs, "checkout_time");
$reception_hours=$fun_obj->TextArray($pageIDs, "reception_hours");
$after_hours=$fun_obj->TextArray($pageIDs, "after_hours");
$rec_h4=$fun_obj->TextArray($pageIDs, "h4");

?>
				<div class='front-desk'>
					<?php if($rec_h4[0]!='') echo"<h2>".$rec_h4[0]."</h2>";?>
					<?php if($hotel_info_array['hotel_address']!='') echo"<p><i class='icofont-location-pin'></i>&nbsp;".$hotel_info_array['hotel_address']."</p>";?>
					
					<?php if($checkin_time[0]!='') echo"<p class='common-p'><strong>check-In : </strong>".$checkin_time[0]."&emsp;|&emsp;";
					if($checkout_time[0]!='') echo"<strong>Check-Out : </strong>".$checkout_time[0]."</p>";?>
					<?php if($reception_hours[0]!='') echo"<p class='common-p'><strong>reception Hours : </strong>".$reception_hours[0]."</p>";?>
					<?php if($after_hours[0]!='') echo"<p class='common-p'><strong></strong>".$after_hours[0]. $ph_exp[0]."</p>"; ?>
				</div>