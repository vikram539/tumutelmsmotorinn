<div class="sticky-header header-bg">
	<div class="unlock-offer">
		<div class="container-fluid">
			<a href="<?=$check_rates?>" target="_blank" class="offer-href">
				<span class="material-icons">key&nbsp;</span>
				<span aria-hidden="true">Unlock Offer</span>
			</a>			
		</div>
		<span id='close'>X</span>
	</div>
	<div class="top-primary-menu">	
		<div class="container-fluid">
			<nav class="navbar navbar-dark navbar-expand-xl">
				<button type="button" class="navbar-toggler" data-target="#navigation" data-toggle="collapse">
					<span class="navbar-toggler-icon"></span>
				</button>
					
				
					<?php
							$path = $website_images.$hotel_info_array['header_logo'];
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
							?>
				
				<a href="<?=$website_domain;?>" class="navbar-brand logo">
					<img src="<?=$base64; ?>" alt="<?=$property_name; ?>" title="<?=$property_name; ?>"> 					
				</a> 
				
					<ul>					
						<li class="nav-links">
							<a href="<?=$check_rates;?>" target="_blank">book now</a>
							<span><?php if($ph_exp[0]!='') echo "<a href='tel:".$ph_exp[0]."' target='_blank'><span class='material-icons'>contact_phone</span>&nbsp;".$ph_exp[0]."</a>";?></span>
						</li>
					</ul>
					
				<div class="collapse navbar-collapse" id="navigation">
					<ul class="navbar-nav primary-link">
					<?php											
					$main_menu=$fun_obj->commonSelect_table("cms_pages","page_ID^page_name^filename",$where_clause="WHERE for_menu='active' AND secondary_menu!='1' ORDER BY page_order ASC");									
						while($run_main_menu=mysqli_fetch_array($main_menu))
						{
							$P_name=$run_main_menu['page_name'];
							$file_name=$run_main_menu['filename'];
							$pageID=$run_main_menu['page_ID']; 
									
							if($pageID==$page_ID)
							{
								$actives='actives';
							}
									
							if($pageID==1)
							{
								$actives='actives';
								$P_name="home";
							}
							echo"<li class='nav-link";
									if($pageID==$page_ID){ echo" actives"; } 
									echo"' data-id='$pageID'><a href='$file_name' title=''>$P_name</a>";
							echo"</li>";					
						}
					?>	
					</ul>
				</div>
				
			</nav>
		</div>
		
	</div>
</div>