$(document).ready(function(){	
	"use strict";	
//================= Offer 
	$("#close").on("click",function(){
		$(".unlock-offer").slideUp(1000);
	});
	
	let devieceSize=screen.width;
	if(devieceSize > 991)
	{
	$(window).on("scroll",function(){
		
	let topdis=$(window).scrollTop();
	if(topdis > 1)
	{
		$(".unlock-offer").slideUp(1000);
	}
	else
	{
		$(".unlock-offer").slideDown(1000);
	}
	});
	}
	$(".tweenty4-outer>a").on("click",function(e){
		
		e.preventDefault();
		$(".tweenty4-outer").fadeOut(1000);
	});
});