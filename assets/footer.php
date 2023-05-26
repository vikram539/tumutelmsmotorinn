<footer>
	<div class="container pt-4 pb-4">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
				<div class="footer-content">					
					<?php
						if($hotel_info_array['hotel_name']!='')
						echo"<h3>".$hotel_info_array['hotel_name']."</h3>";
					?>
					<?php
						if($hotel_info_array['hotel_address']!='')
						echo"<p>".$hotel_info_array['hotel_address']."</p>";
					?>
					<?php
						if($ph_exp[0]!='')
						echo"<p><a href='tel:".$ph_exp[0]."' title='Contact No'>".$ph_exp[0]."</a></p>";
					?>
					
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
				<div class='footer-content'>
					
					<?php
						if($ph_exp[0]!='')
						echo"<p>Reservation: <a href='tel:".$ph_exp[0]."' title='Contact No'>".$ph_exp[0]."</a></p>";
					?>
					<?php
						if($hotel_info_array['hotel_email']!='')
						echo"<p><a href='mailto:".$hotel_info_array['hotel_email']."' title='Email'>".$hotel_info_array['hotel_email']."</p>";
					?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4"> 
				<div class='footer-content'>
					<a href="<?=$check_rates;?>" class="foot-btn" title="Book Now" target="_blank">UNLOCK EXCLUSIVE OFFERS</a>
					<?php
					$path =$website_images."credit-cards-accepted.png";
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
					?>
					<img src="<?=$base64?>" alt="credit-cards-accepted" />
				</div>
			</div>
			<div class="col-12">
			
				<div class='footer-menu'>
					<ul>
					<?php
					$_bottombar=$fun_obj->commonSelect_table("cms_pages","page_ID^page_name^filename",$where_clause="WHERE sub_menu_active!='y' and footer_active='1' ORDER BY page_order ASC");										
					while($run_bottombar=mysqli_fetch_array($_bottombar))
					{
						$_bottombar_name=$run_bottombar['page_name'];
						$_bottombar_filename=$run_bottombar['filename'];
						if($_bottombar_name=='index')
						{
							$_bottombar_name="home";
							$_bottombar_filename="";
						}
						echo"<li><span></span>&nbsp;<a href='".$website_domain.$_bottombar_filename."' title='$_bottombar_name'>$_bottombar_name</a></li>";
					}
					?>
					</ul>
				</div>
				<div class="footer-content">					
					<p class='reserve'>&copy;Copyright&nbsp;<?=$hotel_info_array['hotel_created_year'];?> <?=$hotel_info_array['hotel_name']?>.</p> 
				</div>
			</div>
		</div> 
	</div>
</footer> 

<div class="tweenty4-outer">
	<div class="tweenty4">	
	 <h2><a href="<?=$check_rates?>" target="_blank">book direct & save</a></h2>  
	</div>	
	<a href="" id="hide">X</a>
</div> 

<link rel="stylesheet" href="<?=$website_domain;?>dist/css/yBox.min.css?v7" />
<script type="text/javascript" src="<?=$website_domain;?>dist/js/directive.min.js?v7"></script>
<script type="text/javascript" src="<?=$website_domain;?>dist/js/yBox.min.js?v7"></script>
<script type="text/javascript" src="<?=$website_domain;?>js/all-js.js"></script>


