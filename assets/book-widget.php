<link href= 
'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' 
          rel='stylesheet'> 
<form class="booking_engine" action="" method="post" id="book_url" target="_blank"> 
	<div class="">
	<h3>Reservations</h3>
	<div class="form_grid row">
		<div class="form-group check col-md-6 col-sm-4 col-lg-12"> 
			<label>Check In</label> 
			<input type="text" id="from" name="from" autocomplete="off">
			<!--<input type="text" class="form-control" name="StartDate" id="my_date_picker1" data-language="en" autocomplete>-->
		</div>
		<div class="form-group check col-md-6 col-sm-4  col-lg-12"> 
			<label>Check Out</label> 
			<input type="text" id="to" name="to" autocomplete="off" required>
			<input type="hidden" id="nights" name="nights">

			<!--<input type="text" class="form-control" name="checkout" id="my_date_picker2" data-language="en"></div><div class="book_now col-md-12 col-sm-4"> -->
		<input type="submit" class="btn btn-info" value="BOOK NOW" id="check_avail"></div>
	</div>
</div>
</form>

 <script src= 
"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">  
        </script> 
        <script> 
		$(function() {
			
			
    function datepicked() {
        var fromDate = $('#from').datepicker('getDate');
        var toDate = $('#to').datepicker('getDate');
        if (fromDate && toDate) {
            var difference_msec = toDate.getTime() - fromDate.getTime();
            var difference_days = difference_msec / 86400000;
            $("#nights").val(Math.ceil(difference_days));
        }
    }
    $('#from').datepicker({
        numberOfMonths: 2,
        firstDay: 1,
        dateFormat: 'yy-dd-mm',
        minDate: '0',
        maxDate: '+2Y',
        onSelect: function(dateStr) {
            var d1 = $(this).datepicker("getDate");
            d1.setDate(d1.getDate() + 0); // change to + 1 if necessary
            var d2 = $(this).datepicker("getDate");
            d2.setDate(d2.getDate() + 30); // change to + 29 if necessary
            $("#to").datepicker("setDate", null);
            $("#to").datepicker("option", "minDate", d1);
            $("#to").datepicker("option", "maxDate", d2);
            datepicked();
        }
    });
    $('#to').datepicker({
        numberOfMonths: 2,
        firstDay: 1,
        dateFormat: 'yy-dd-mm',
        minDate: '0',
        maxDate: '+2Y',
        onSelect: function(dateStr) {
            datepicked();
        }
    });
	$("#check_avail").on("click",function(){
			
				
				var checkin2=$("#from").val();
				var splitDate1=checkin2.split("-");
				var checkin=splitDate1[0]+"-"+splitDate1[2]+"-"+splitDate1[1];		
				
				var checkout2=$("#to").val();
				var splitDate2=checkout2.split("-");
				var checkout=splitDate2[0]+"-"+splitDate2[2]+"-"+splitDate2[1];	
				
				var nights=$("#nights").val();
				
			
				
				var url="https://bookings247.com.au/booking2/booknow.php?property_id=<?=$bookingID;?>&checkin="+checkin+"&checkout="+checkout+"&nights="+nights;

				$("#book_url").attr("action",url).submit();
			});
			
			
});

$(function() {
				
				
            $( "#from" ).datepicker({minDate : 0, dateFormat: 'dd-mm-yy'}).datepicker('setDate',new Date());
			
			var date2 = $('#from').datepicker('getDate');
            date2.setDate(date2.getDate()+1);
			
			
            //$("#my_date_picker2").attr("disabled", "disabled");
            $( "#to" ).datepicker({minDate : +1, dateFormat: 'dd-mm-yy'}).datepicker("setDate", date2);;
			
       $( "#from" ).on("change",function(){
				onCheckin();
				
			 });
            
         });
		 
		  function onCheckin(){
		  if($("#from").val() !== ""){
			$("#to").removeAttr("disabled");
			var dateMin = $('#from').datepicker("getDate");
				var rMin = new Date(dateMin.getFullYear(), dateMin.getMonth(), dateMin.getDate() + 1);
			$("#to").datepicker('option', 'minDate', new Date(rMin));
		  }else{
		  $("#to").val("");
		  $("#to").attr("disabled", "disabled");
		  }
		  }

           /* $(document).ready(function() { 
			//document.getElementById('my_date_picker1').value = new Date().toDateInputValue();
			
			
			$("#check_avail").on("click",function(){
			
				//var checkin=$("#my_date_picker1").val();
				//var checkout=$("#my_date_picker2").val();
				
				var checkin2=$("#my_date_picker1").val();
				var splitDate1=checkin2.split("-");
				var checkin=splitDate1[1]+"/"+splitDate1[0]+"/"+splitDate1[2];		
				
				var checkout2=$("#my_date_picker2").val();
				var splitDate2=checkout2.split("-");
				var checkout=splitDate2[1]+"/"+splitDate2[0]+"/"+splitDate2[2];	
				
			
				
				var url="https://bookings247.com.au/booking2/booknow.php?property_id=3103&checkin="+checkin+"&checkout="+checkout;

				$("#book_url").attr("action",url).submit();
				//return url;
				//console.log(url);
				
			});
			
			$(function() {
				
				
            $( "#my_date_picker1" ).datepicker({minDate : 0, dateFormat: 'dd-mm-yy'}).datepicker('setDate',new Date());
			
			var date2 = $('#my_date_picker1').datepicker('getDate');
            date2.setDate(date2.getDate()+1);
			
			
            //$("#my_date_picker2").attr("disabled", "disabled");
            $( "#my_date_picker2" ).datepicker({minDate : +1, dateFormat: 'dd-mm-yy'}).datepicker("setDate", date2);;
			
       $( "#my_date_picker1" ).on("change",function(){
				onCheckin();
				
			 });
            
         });
		 
		  function onCheckin(){
		  if($("#my_date_picker1").val() !== ""){
			$("#my_date_picker2").removeAttr("disabled");
			var dateMin = $('#my_date_picker1').datepicker("getDate");
				var rMin = new Date(dateMin.getFullYear(), dateMin.getMonth(), dateMin.getDate() + 1);
			$("#my_date_picker2").datepicker('option', 'minDate', new Date(rMin));
		  }else{
		  $("#my_date_picker2").val("");
		  $("#my_date_picker2").attr("disabled", "disabled");
		  }
		  }
            })  */
        </script> 