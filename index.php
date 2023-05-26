<?php
$page_ID=1;
include("assets/variables.php");
include("assets/header.php");  
?>   
</head>
<body>
<header> 
<?php include("assets/primary-menu.php"); ?>

<?php include("assets/carousel.php"); ?>
<?php include("assets/book-direct-benefits.php"); ?>
</header>
<section class="first-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
				<div class="first-section-content">
					<?php if($h2[0]!='') echo"<h2>".$h2[0]."</h2>";?>
					
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
				<div class="read-more-content">
					<?php if($h4[0]!='') echo"<h4>".$h4[0]."</h4>";?>
					<?php if($p[0]!='') echo"<p>".$p[0]."</p>";	?>	
				</div>
			</div>
		</div>
	</div>
</section>
 
<?php include("assets/accommodation-option.php"); ?>
<?php include("assets/neighborhood-things.php"); ?>
<?php include("assets/gallery-section.php"); ?>
<?php include("assets/footer.php"); ?>
</body>
</html>