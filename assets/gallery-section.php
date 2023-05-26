<section class="gallery-section-home">

	<?php

		$indexGallery=6;

		$indexGallery_head=$fun_obj->TextArray($indexGallery, "heading");

		$indexGallery_h4=$fun_obj->TextArray($indexGallery, "h4");	

	?>

	<div class="container">

		<div class='group-wrap flex-wrap'>

			<div class="col-12">

				<?php if($indexGallery_head[0]!='') echo"<h2>".$indexGallery_head[0]."</h2>";?>

			</div>

			<?php

				$index_galley_img_slider=$fun_obj->commonSelect_table("cms_gallery","pagename^page_id^small_img","where page_id='$indexGallery' AND flag='1' ORDER BY img_order ASC");

				

				while($index_img_run=mysqli_fetch_array($index_galley_img_slider))

				{

					$index_img_name=str_replace(" ","-",strtolower(trim($index_img_run['pagename'])));

					$index_img_path=$website_images.$index_img_name."/".$index_img_run['small_img'];

							$path =$index_img_path;
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

					echo"<div class='light-padding light-img col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4'>

						<a href='$base64' class='yBox' data-ybox-group='group1'>

							<img data-u='image' src='$base64' alt='$property_name' class='img-fluid' />	

						</a></div>";

				}  

			?>

			

		</div> 

	</div>

</section>