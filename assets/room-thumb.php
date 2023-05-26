<section class="thumb-action container-fluid mt-4 mb-4 pt-4 pb-4">
<div class="row">
<?php
$room_id=2;
$acc_h2=$fun_obj->TextArray($room_id, "h2");

echo"<div class='col-12 mt-4 mb-4 pt-4 pb-4'>
		<div class='txt-formation'>";
		if($acc_h2[0]!='') echo"<h2><i class='fa fa-bed' aria-hidden='true'></i>&nbsp;".$acc_h2[0]."</h2>";
	echo"</div>
</div>";

$aprt_thumb_sel=$fun_obj->commonSelect_table("cms_pages","page_ID^page_name^filename","WHERE sub_menu_active='y' AND flag='$room_id' ORDER BY page_order ASC limit 3");
while($aprt_thumb_run=mysqli_fetch_array($aprt_thumb_sel))
{
	$roomID=$aprt_thumb_run['page_ID'];
	$roomurl=$aprt_thumb_run['filename'];
	
	
	
	$name_h2=$fun_obj->TextArray($roomID, "h2");
	$book_btn=$fun_obj->TextArray($roomID, "booking_btn");
	echo"
	<div class='col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3"?> <?php if($page_ID==$roomID) echo 'd-none' ?><?php echo"'>
		<div class='thumb-action-img'>
			<a href='".$website_domain."accommodation.php'>";
				$roomImg_sel=$fun_obj->commonSelect_table("cms_gallery","gallery_id^page_id^pagename^small_img","WHERE page_id='".$roomID."' AND flag='1' AND img_for_slider!='1' ORDER BY img_order limit 1");			
									//var_dump($roomImg_sel);						
				while($smallImg1=mysqli_fetch_array($roomImg_sel))
				{
					$roomname1=trim($smallImg1['pagename']);	
					$room1_trimPagename=strtolower(trim($smallImg1['pagename']));
					$room1_trimPagename=str_replace(" ","-",$room1_trimPagename);
					
					$path =$website_domain."images/".$room1_trimPagename."/".$smallImg1['small_img'];
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
							
					echo"<img src='$base64' alt='".$roomname1."' title='".$roomname1."' class='img-fluid' />";
				}
			echo"</a>";
			if($name_h2[0]!='')
			{
				echo"<h2>".$name_h2[0]."</h2>
				<div class='read-more-btn'><a href='accommodation.php' class='text-white text-decoration-none'>read more..</a></div>";
			}			
		echo"</div><!--end thumb-action-img-->";
	echo"</div><!--end col------->";
}
?>
	<div class='col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3'>
		<div class='thumb-action-img more-acc'>
		<img src='<?=$website_images?>read-more.jpg' alt='Read More' title='Read More' class='img-fluid' />
		<?php
		$our_room_sel=$fun_obj->commonSelect_table("cms_pages","page_ID^page_name^filename","WHERE page_ID='$room_id'");
		
		$our_room_run=mysqli_fetch_array($our_room_sel);
		$our_room_url=$our_room_run['filename'];
		?>
			<a href='<?=$website_domain.$our_room_url?>'>view more</a>
		</div>
	</div>
</div>
</section>