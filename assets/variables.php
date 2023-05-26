<?php
	include("webdesignbank-admin/php-function/function.php");

	$property_name=$hotel_info_array['hotel_name'];
	
	$pro_css=str_replace(" ","-",strtolower(trim($property_name)));
//############## For php to css file
	$filename=trim($property_name);
	$filename=strtolower($filename);
	$filename=preg_replace("/\s+/","-",$filename);

//########## add PHP extention at the end of file name
	$PHP_ext=$filename.".php";
	$property_css=$filename.".css";
	$file_path=dirname(__DIR__)."/css/";
	if(!file_exists($file_path))
	{
		mkdir($file_path, 0777); 
				
	}
		
	

	
	else
	{		
			if(!file_exists($file_path.$PHP_ext))
			{
				$f_open=fopen($file_path.$PHP_ext,"w");
					$blank_text="";	
					fwrite($f_open, $blank_text);  
					fclose($f_open);
			}
		
		$file_get_contents=file_get_contents($file_path.$PHP_ext);		
		$file_put_contents=file_put_contents($file_path.$property_css,$file_get_contents);	
	}
	
//#########################Website variable
	$website_images=$website_domain."images/";
	$check_rates=$hotel_info_array['hotel_book_btn'];
	$facebook_link="";
	$instagram_link="";
	$google_location=""; 
	$trip_advisor="";
	$expedia="";
	$google_plus="";
	
	
//============ Hotel |Phone Explode ==============//
	
	$ph_exp=explode(",",$hotel_info_array['hotel_phone']);
	
//============ Social Media Explode ==============//
	$icon_exp=explode(",",$hotel_info_array['social_media_icon']);

//============== Booking ID ==================//	
	$exp=explode("=",$hotel_info_array['hotel_book_btn']);
	$bookingID=$exp[1];
?>