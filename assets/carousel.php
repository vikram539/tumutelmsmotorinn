<style>

	.owl-nav button {

    position: absolute;

    top: 0;

    bottom: 0;

}

.owl-prev {
 


    right: 0px;

}

.owl-next {

    left: 0px;

}

.owl-nav button span {

    font-size: 50px;

    text-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;

	color:#fff;

}

.owl-theme .owl-nav

{

	margin-top:0;

}

.owl-carousel, inner-banner

{

	margin-top:90px;

}

.owl-theme .owl-nav [class*=owl-]:hover

{

	background:transparent;

}

button:focus

{

	outline:none;

}

</style>



<?php

$childroom_id=14; 

	$room_img_slider=$fun_obj->commonSelect_table("cms_gallery","pagename^page_id^small_img^img_description","where page_id='$childroom_id' AND flag='1' and img_for_slider!='1' ORDER BY cast(img_order as int)");

?>

<div class="owl-carousel owl-theme">

<?php	

	while($slider_run=mysqli_fetch_array($room_img_slider))

	{

		$room_name_=str_replace(" ","-",strtolower(trim($slider_run['pagename'])));



		$img_path_=$website_images.$room_name_."/".$slider_run['small_img'];


							$path =$img_path_;
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
							

            echo"<div class='item'><img data-u='image' src='$base64' alt='$room_name_' class='img-fluid' /> </div>";

	}

?>

</div>

<script>

		$('.owl-carousel').owlCarousel({

		loop:true,

        items: 1,

        autoplay: true,

        nav: true,

		dots:false,

		navText: ["<span class='material-icons'>arrow_circle_right</span>","<span class='material-icons'>arrow_circle_left</span>"]  



})

</script>