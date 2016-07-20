<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Кредитный калькулятор #1</title>
	    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<form action="" method="POST">
	<input type="text" name="count">
	<input type="text" name="date" placeholder="Введите дату прим. 12.06.2016">
	<input type="submit" value="Клац клац">
</form>
<div class="price-slider">
            <h4 class="great">Amount</h4>
            <span>Minimum $10 is required</span>
            <div class="col-sm-12">
              <div id="slider"></div>
            </div>
	<?php
		$count=$_POST['count'];
		$date=$_POST['date'];

		$currdate = new DateTime(date("d.m.Y"));
		$paydate = new DateTime($date);
		$interval = $paydate->diff($currdate);
		$days=$interval->days;
		$creditRate = 2.5/100;
		$creditRate *= $count;
		echo $sum = $creditRate*$days+$count;
	?>
	<script>
		      $(document).ready(function() {
          $("#slider").slider({
              range: "min",
              animate: true,
              value:1,
              min: 1,
              max: 1000,
              step: 1,
              slide: function(event, ui) {
                update(1,ui.value); //changed
              }
          });
        $("#amount").val(0);
		$("#amount-label").text(0);
		update();

	    function update(slider,val) {
       		var $amount = slider == 1?val:$("#amount").val();
       		$( "#amount" ).val($amount);
         	$( "#amount-label" ).text($amount);

         $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$amount+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
     }
	</script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>