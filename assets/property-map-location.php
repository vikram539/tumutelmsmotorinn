<section class="map pt-4 pb-4">
	<div class="container-fluid">
		<div class="row">
			<?php 
				$map_location_id=9;
				$map_location_h2=$fun_obj->TextArray($map_location_id, "h2");
				$map_location_h4=$fun_obj->TextArray($map_location_id, "h4");
			?>
			<div class="col-12">
				<div class="txt-formation text-center">					
					<?php if($map_location_h2[0]!='') echo"<h2>".$map_location_h2[0]."</h2>";?>
					<?php if($map_location_h4[0]!='') echo"<p>".$map_location_h4[0]."</p>";?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="map-location">
					<?php if($hotel_info_array['hotel_map']!='') echo $hotel_info_array['hotel_map'];?>
				</div>
			</div>			
		</div>
	</div>
</section>