<?php
$page_ID=7;
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
				<div class="first-section-content inner-content ">					
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
				<div class="inner-banner-img contacts">
					
					<?php
						if($hotel_info_array['hotel_address']!='')
						echo"<p><span class='material-icons'>location_on</span>&nbsp;".$hotel_info_array['hotel_address']."</p>";
					?>
					
					<?php
						if($hotel_info_array['hotel_email']!='')
						echo"<p><span class='material-icons'>email</span>&nbsp;<a href='mailto:".$hotel_info_array['hotel_email']."' title='Email' class='text-decoration-none'>".$hotel_info_array['hotel_email']."</p>";
					?>
					<?php
						if($ph_exp[0]!='')
						echo"<p><span class='material-icons'>phone_iphone</span>&nbsp;<a href='tel:".$ph_exp[0]."' title='Contact No' class='text-decoration-none'>".$ph_exp[0]."</a></p>";
					?>
				</div>  

			</div>
		</div>
	</div>
</section> 
<section>
	<div class="container-fluid">
		<?php
			if($hotel_info_array['hotel_map']!='')
			echo $hotel_info_array['hotel_map'];
		?>
	</div>
</section>
<?php include("assets/footer.php"); ?>
</body>
</html>