<?php
	$gust_say_ID=16;
	$gust_say_h2=$fun_obj->TextArray($gust_say_ID, "h2");
	$gust_say_p=$fun_obj->TextArray($gust_say_ID, "p");
?>
<section class='mt-4 mb-4 pt-4 pb-4'>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="txt-formation text-center">
					<?php if($gust_say_h2[0]!='') echo"<h2>".$gust_say_h2[0]."</h2>";?>
					<?php if($gust_say_p[0]!='') echo"<p>".$gust_say_p[0]."</p>";?>
				</div>
			</div>
			<div class="owl-carousel owl-theme guest-views">
		<?php
		$guest_sel=$fun_obj->commonSelect_table("cms_pages","page_ID^page_name^filename","WHERE sub_menu_active='y' AND flag='$gust_say_ID'");			
			
			while($gust_say_run=mysqli_fetch_array($guest_sel))
			{
				$gust_sayID=$gust_say_run['page_ID'];
				
				$gust_say_name=$fun_obj->TextArray($gust_sayID, "name");
				$gust_say_icon=$fun_obj->TextArray($gust_sayID, "icon");
				$gust_say_star=$fun_obj->TextArray($gust_sayID, "star");
				$gust_say_head=$fun_obj->TextArray($gust_sayID, "head");
				$gust_say_detail=$fun_obj->TextArray($gust_sayID, "detail");
				$gust_say_bookingsite=$fun_obj->TextArray($gust_sayID, "bookingsite");
				
				echo"<div class='item'>
				<div class='mb-4 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4'>
					<div class='guest-posted'>";
					
					if($gust_say_name[0]!='') echo"<p>".$gust_say_icon[0]."<small>".$gust_say_name[0]."</small> <span>".$gust_say_star[0]."</span></p>";
					
					if($gust_say_head[0]!='') echo"<h4>".$gust_say_head[0]."</h4><hr>";
					if($gust_say_detail[0]!='') echo"<p class='post-detail'>".$gust_say_detail[0]."</p>";
					
					echo"<hr>";
					if($gust_say_bookingsite[0]!='') echo"<p class='posted'><small>posted on</small> ".$gust_say_bookingsite[0]."</p>";
					
					
				echo"</div>
					</div>
					</div><!--end owl item -->";
			}
		
		?>
			</div><!-- end owl -->
		</div>
	</div>
</section>
<script>
$('.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
    nav:true,
	navText: ["<i class='icofont-curved-double-right'></i>","<i class='icofont-curved-double-left'></i>"],    
	autoplay: true,
	autoplayTimeout: 3000,
	responsiveClass:true,
	items:1
})

</script>