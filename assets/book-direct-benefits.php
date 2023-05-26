<?php 

$book_direct_id=15;



$book_direct_h4=$fun_obj->TextArray($book_direct_id, "h4");

$facilityIcon_p=$fun_obj->TextArray($book_direct_id, "p");

$book_direct_li=$fun_obj->TextArray($book_direct_id, "li");

?>

<div class="book-home">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<div class="book-direct">

					<div class="first-title">

						<?php if($book_direct_h4[0]!='') echo"<a href='$check_rates'  target='_blank' rel='nofollow' title='Opens in a new Window'>".$book_direct_h4[0]."</a>";?>

					</div>

					<ul class='book-direct-icon'>

					<?php 

				

			$icon_sel=$fun_obj->commonSelect_table("cms_hotel_facility_icons","hotel_facility_id^facility_name^facility_page_id^facility_img^flag^facility_alt_name","WHERE FIND_IN_SET('$book_direct_id',facility_page_id) order by facility_icon_order ASC");

			

				while($run_icon=mysqli_fetch_array($icon_sel))

				{

					$alt_name=$run_icon['facility_alt_name'];

					$icon_image=$run_icon['facility_img'];

					$path =$website_images."facility-img-icons/".$icon_image;
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

					echo"<li class='carouselitems'><img src='$base64'  alt='' title='' /><span>".$alt_name."</span></li>";

				}

				?>

					</ul>

				</div>

			</div>

		</div>

	</div>

</div>