<?php

//$childroom_id=14; 

	$room_img_slider=$fun_obj->commonSelect_table("cms_gallery","pagename^page_id^small_img^img_description","where page_id='$page_ID' AND flag='1' and img_for_slider='1' ORDER BY img_order ASC");

?>

<div class="inner-banner">

<?php	

	while($slider_run=mysqli_fetch_array($room_img_slider))

	{

		$room_name_=str_replace(" ","-",strtolower(trim($slider_run['pagename'])));



		$img_path_=$website_images.$room_name_."/".$slider_run['small_img'];


$path =$img_path_;
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
							
            echo"<div class='inner-items'><img data-u='image' src='$base64' alt='$room_name_' class='img-fluid' /> ";

				if(@$heading[0]!='') echo"<h2>".$heading[0]."</h2>";

			echo"</div>";

	}

?>

</div>  