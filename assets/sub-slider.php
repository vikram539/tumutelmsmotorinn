<div class="owl-carousel">
<?php

$galley_img_slider=$fun_obj->commonSelect_table("cms_gallery","pagename^page_id^small_img^img_description","where page_id='$page_ID' AND flag='1' and img_for_slider='1' and img_order='1' ORDER BY img_order ASC limit 1");
	$img_run_slider=mysqli_fetch_array($galley_img_slider);
	
		$img_description=$img_run_slider['img_description'];
		
		$room_name_slider=str_replace(" ","-",strtolower(trim($img_run_slider['pagename'])));
	//echo"<br>". $website_images.$room_name."/".$img_run['small_img'];
		$img_path_slider=$website_images.$room_name_slider."/".$img_run_slider['small_img'];
		
		$path =$img_path_slider;
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
							
		echo"<img data-u='image'  src='$base64' alt='$property_name' class='img-fluid' />";
?>
</div>