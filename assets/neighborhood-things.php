<section>

	<div class="container-fluid-width">

		<div class="neighborhood-block">

			<div class="row">

			<?php

			$offerid=5;

			 

			$offers_sel=$fun_obj->commonSelect_table("cms_pages","page_ID^page_name^filename","WHERE flag='$offerid' and sub_menu_active='y' order by page_order ASC limit 2");

			

			while($offers_run=mysqli_fetch_array($offers_sel))

			{

				$offers_url=$offers_run['filename'];

				$offers_name=$offers_run['page_name'];

				$offers_id=$offers_run['page_ID'];				

			?>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

					<div class="neighbor-block-1">

					<?php

					$offerImg_sel=$fun_obj->commonSelect_table("cms_gallery","gallery_id^page_id^pagename^small_img","WHERE page_id='$offers_id' AND flag='1' AND img_for_slider!='1' ORDER BY img_order ASC");

					

					$offer_img_run=mysqli_fetch_array($offerImg_sel);

					

					$pageName=trim($offer_img_run['pagename']);

					$pageName_trim=str_replace(" ","-", strtolower(trim($offer_img_run['pagename'])));

					

					@$page_h2=$fun_obj->TextArray($offers_id, "h2");

					@$page_h4=$fun_obj->TextArray($offers_id, "h4");	

					$page_p=$fun_obj->TextArray($offers_id, "p");

						$path =$website_images.$pageName_trim."/".$offer_img_run['small_img'];
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
					?> 

						<div class="neighbor-img-block">

							<?php

							echo"<a href='".$website_domain."neighborhood.php'><img src='$base64' alt='$offers_name' title='$offers_name' class='img-fluid' /></a>";

							?>

							

							<div class="offer-heading">  

								<?php if($page_h2[0]!='') echo"<h2>".$page_h2[0]."</h2>"; ?>								

							</div> 

							

							<div class="offer-content">  

								<?php if($page_h4[0]!='') echo"<h4>".$page_h4[0]."</h4>"; ?>

								<?php if($page_p[0]!='') echo"<p>".$page_p[0]."</p>"; ?>

							</div> 

						</div> 

					</div>

				</div>

			<?php

			}

			?>

			</div>

		</div>

	</div>

</section>