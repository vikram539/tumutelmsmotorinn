<?php

$page_ID=5;

include("assets/variables.php");

include("assets/header.php");  

?>   

</head>

<body>

<header> 

<?php include("assets/primary-menu.php"); ?>



<?php include("assets/inner-banner.php"); ?>

</header>

<section class="first-section">

	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

				<div class="first-section-content inner-content">					

					<?php if($h2[0]!='') echo"<h2 data-content='".$h2[0]."'></h2>";?>

				</div>

			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

				<div class="read-more-content">

					<?php 

						for($i=0; $i<count($p); $i++)

						{

							if($p[$i]!='') echo"<p>".$p[$i]."</p>";	

						}

					?>	

				</div>

			</div>

		<?php /*	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">

				<?php 

					$inner_img_sel=$fun_obj->commonSelect_table("cms_gallery","pagename^page_id^small_img^img_description","where page_id='$page_ID' AND flag='1' and img_for_slider!='1' ORDER BY img_order ASC");

				?>

				<div class="inner-banner-img">

				<?php	

					while($inner_img_run=mysqli_fetch_array($inner_img_sel))

					{

						$inner_img_name_=str_replace(" ","-",strtolower(trim($inner_img_run['pagename'])));



						$inner_img_path_=$website_images.$inner_img_name_."/".$inner_img_run['small_img'];



							echo"<div class='inner-img-items'><img data-u='image' src='".$inner_img_path_."' alt='$inner_img_name_' class='img-fluid' /> </div>";

					}

				?>

				</div>  



			</div> */ ?>

		</div>

	</div>

</section> 

<section>

	<div class="container-fluid-width">

		<div class="neighborhood-block">

			<div class="row">

			<?php

			$offerid=5;

			

			$offers_sel=$fun_obj->commonSelect_table("cms_pages","page_ID^page_name^filename","WHERE flag='$offerid' and sub_menu_active='y' order by page_order ASC");

			

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

					
							$path =$website_images.$pageName_trim."/".$offer_img_run['small_img'];
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

					@$page_h2=$fun_obj->TextArray($offers_id, "h2");

					@$page_h4=$fun_obj->TextArray($offers_id, "h4");	

					$page_p=$fun_obj->TextArray($offers_id, "p");

					?> 

						<div class="neighbor-img-block">

							<?php

							echo"<img src='$base64' alt='$offers_name' title='$offers_name' class='img-fluid' />";

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

<?php include("assets/footer.php"); ?>

</body>

</html>