<?php

$page_ID=6;

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

		</div>

	</div>

</section> 

<section class="gallery-section-home">	

	<div class="container">

		<div class='group-wrap flex-wrap'>

			<?php

			$gallery_img=$fun_obj->commonSelect_table("cms_pages","page_ID^page_name^filename",$where_clause="WHERE gallery_active='y' AND gallery_flag='1' ORDER BY page_order ASC");

			while($gallery_img_run=mysqli_fetch_array($gallery_img))

			{

				$gallery_img_id=$gallery_img_run['page_ID'];

				

				$index_galley_img_slider=$fun_obj->commonSelect_table("cms_gallery","pagename^page_id^small_img","where page_id='$gallery_img_id' AND flag='1' ORDER BY img_order ASC");

				

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

			}

			?>

			

		</div> 

	</div>

</section>

<?php include("assets/footer.php"); ?>

</body>

</html>