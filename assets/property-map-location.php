<section class="map">
	<div class="container-fluid">
		<div class="row">
		<?php 
			$map_location_id=5;
			$map_location_h2=$fun_obj->TextArray($map_location_id, "h2");
			$map_location_h4=$fun_obj->TextArray($map_location_id, "h4");
			$map_location_p=$fun_obj->TextArray($map_location_id, "p");
			$map_location_li=$fun_obj->TextArray($map_location_id, "li");
		?>
			<div class="col-12">
				<div class="txt-formation text-center">					
					<?php if($map_location_h2[0]!='') echo"<h2>".$map_location_h2[0]."</h2>";?>
					<?php if($map_location_h4[0]!='') echo"<p>".$map_location_h4[0]."</p>";?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
				<div class="map-location">
					<?php if($hotel_info_array['hotel_map']!='') echo $hotel_info_array['hotel_map'];?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<div class="map-location">
					<?php if($map_location_h4[0]!='') echo"<h4>".$map_location_h4[0]."</h4>";?>
					<?php if($map_location_p[0]!='') echo"<p class='text-left'>".$map_location_p[0]."</p>";?>
					<?php if($map_location_p[1]!='') echo"<p class='text-left'>".$map_location_p[1]."</p>"; /* ?>
					<ul>
					<?php 
					for($i=0; $i<count($map_location_li); $i++)
					{
						if($map_location_li[$i]!='') echo"<li><i class='fa fa-check' aria-hidden='true'></i><label>".$map_location_li[$i]."</label></li>";
					}
					?>
					</ul>
					<?php
					*/
						$map_room_sel=$fun_obj->commonSelect_table("cms_pages","page_ID^page_name^filename","WHERE page_ID='$map_location_id'");	
						$map_room_run=mysqli_fetch_array($map_room_sel);
						$map_room_url=$map_room_run['filename'];
						$map_room_name=$map_room_run['page_name'];
						
						echo"<a href='".$website_domain.$map_room_url."' title='$map_room_name' alt='$map_room_name' class='btn btn-success view-all'>read more..</a>";
					?>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>