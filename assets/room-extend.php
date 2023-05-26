		<?php
		$accID=3;
		
		$room_sel=$fun_obj->commonSelect_table("cms_pages","page_ID^page_name^filename",$where_clause="WHERE flag='$accID' AND disable_dorpdown='1' ORDER BY page_order ASC");		
		while($room_run=mysqli_fetch_array($room_sel))
		{
			$childroom_id=$room_run['page_ID'];
			$childroom_page_name=$room_run['page_name'];
		
		$room_h2=$fun_obj->TextArray($childroom_id, "h2");
		$room_h3=$fun_obj->TextArray($childroom_id, "h3");
		$room_h4=$fun_obj->TextArray($childroom_id, "h4");	
		$room_p=$fun_obj->TextArray($childroom_id, "p");	
		$room_li=$fun_obj->TextArray($childroom_id, "li");	
		$booking_btn=$fun_obj->TextArray($childroom_id, "book_now");
if($room_h2[0]!='')
{
		?>
		
	
<section class="bg-light mb-4 mt-4 pt-4 pb-4">
<div class="container">
	<div class="row">
			<div class='col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6'>
				<div class="description">
					<?php if($room_h2[0]!='') echo"<h2>".$room_h2[0]."<hr></h2>";?>
					<?php if($room_h3[0]!='') echo"<h3>".$room_h3[0]."</h3>";?>			
					<?php if($room_p[0]!='') echo"<p class='text-left'>".$room_p[0]."</p>";?>
					<?php if($room_p[1]!='') echo"<p class='text-left'>".$room_p[1]."</p>";?>	
				</div>
			</div> 
			<hr>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 desc-wrap">
			<div class="description ">				
				
				<?php if($room_h4[0]!='') echo"<h4>".$room_h4[0]."<hr></h4>";?>
				<ul class="d-flex list-unstyled flex-wrap mb-0">
				<?php 
					for($i=0; $i<count($room_li); $i++)
					{
						if($room_li[$i]!='') echo"<li><span class='material-icons'>star_border_purple500
</span>&nbsp;".$room_li[$i]."</li>";
					}
					?>
				</ul>
			</div>
		</div> 
		<div class="col-12"><hr></div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		
			<div class='group-wrap flex-wrap'>	
				<div class="owl-carousel owl-theme">			
			<?php
				$index_galley_img_slider=$fun_obj->commonSelect_table("cms_gallery","pagename^page_id^small_img","where page_ID='$childroom_id' ORDER BY img_order ASC");
				
				while($index_img_run=mysqli_fetch_array($index_galley_img_slider))
				{
					$index_img_name=str_replace(" ","-",strtolower(trim($index_img_run['pagename'])));
					$index_img_path=$website_images.$index_img_name."/".$index_img_run['small_img'];


					$path =$index_img_path;
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

					echo"<div class='item room-img light-img '>
						<a href='$base64' class='yBox' data-ybox-group='group1'>
							<img data-u='image' src='$base64' alt='$property_name' class='img-fluid' />	
						</a></div>";
				} 
			?>
			</div>
		</div>
		</div>
		<div class='col-12'>		
				<div class="owl-btn">
					<a href="<?=$check_rates;?>" title="Check Rates" target="_blank">check rates</a>
					<a href="<?=$booking_btn[0];?>" target="_blank" title="Book Now">book now</a>
				</div>
		</div>
	</div>
</div>
</section>

		<?php
}
		}
		?>
<script>
$('.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
	lazyLoad:true,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>