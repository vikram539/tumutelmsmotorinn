<?php

$page_ID=3;

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

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">

				<div class="read-more-content">

					<?php 

						for($i=0; $i<count($p); $i++)

						{

							if($p[$i]!='') echo"<p>".$p[$i]."</p>";	

						}

					?>	

				</div>

			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">

				<?php 

					$inner_img_sel=$fun_obj->commonSelect_table("cms_gallery","pagename^page_id^small_img^img_description","where page_id='$page_ID' AND flag='1' and img_for_slider!='1' ORDER BY img_order ASC");

				?>

				<div class="inner-banner-img">

				<?php	

					while($inner_img_run=mysqli_fetch_array($inner_img_sel))

					{

						$inner_img_name_=str_replace(" ","-",strtolower(trim($inner_img_run['pagename'])));



						$inner_img_path_=$website_images.$inner_img_name_."/".$inner_img_run['small_img'];


$path =$inner_img_path_;
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
							
							echo"<div class='inner-img-items'><img data-u='image' src='".$base64."' alt='$inner_img_name_' class='img-fluid' /> </div>";

					}

				?>

				</div>  



			</div>

		</div>

	</div>

</section> 



<?php include("assets/room-extend.php"); ?> 

<?php include("assets/footer.php"); ?>

</body>

</html>