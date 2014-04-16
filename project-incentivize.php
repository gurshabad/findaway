<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Find A Way | Home</title>
	<meta charset="utf-8">
	<link rel="icon" href="./img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/raleway.css">
	<link rel="stylesheet" href="./css/superfish.css">
	<link rel="stylesheet" href="./css/superfish-navbar.css">
	<link rel="stylesheet" href="./css/subscribe-form.css">
	<link rel="stylesheet" href="./css/new.css">
	<script src="./js/jquery.js"></script>
	<script src="./js/superfish.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/imgLiquid.js"></script>
	<script src="./js/sForm.js"></script>
	</head>

<body>
	<?php include('navbar.php') ?>
<!-- NAVBAR ENDS -->
<div class="fadein">
	<img src="./img/pages/incentivize.jpg">
</div>
<div style="margin-top:450px;"></div>
<!-- PICTURE DIV ENDS -->
<div class="container">
<div class="row">
	<div class="page-title col-md-3">
		<h2>PROJECT INCENTIVIZE</h2>
	</div>
	<div class="page-content col-md-9">
		<p></p>
		<p>Incentivize is, as the name says, a project to give incentives to people to take up small overlooked issues and find a way to help those in need. It is to motivate people and help them direct their efforts. The first event as part of Incentivize was CAM - Capture a Moment, an online photography competition wherein people can upload a photo of that one act of kindness that they thought made a difference in a person's life or society's condition. It could be any small act, captured through a lens, and posted to our <a href="https://www.facebook.com/events/744967548849200/">Facebook event page</a>. The prizes for the most appealing idea and the most appealing photograph were recently announced and eBay vouchers and restaurant coupons worth Rs 1500 were awarded to the winners.</p>
		<p>The photograph with the most appealing idea was sent in by <strong>Priyanka Mahashabde</strong>.</p>	
		<p>
			<div class="row" style="text-align: center">
				<div class="content-photo imgLiquidFill imgLiquid col-md-8">
					<img src="./img/pages/incentivize1.jpg">
				</div>
				<div class="photocaption col-md-4">
					<p><h3>&nbsp;</h3></p>
					<p class="text-muted">Team Youth For Seva is elated to share the extremely good collection of Books, Denims and warm clothes at Paschim Vihar.</p>
					<p class="text-muted">The Spirit of Service could be felt on the drive day - when highly energetic volunteers, running to reach doors of people living there, and equally enthusiastic locals, running to reach themselves to canopy area to place the things they wanted to contribute with, before the volunteers reach them.</p>
				</div>
			</div>
		</p>
		<p>The most appealing photo was submitted by <strong>Shataakshi Verma</strong>.</p>
		<p>
			<div class="row" style="text-align: center">
				<div class="content-photo imgLiquidFill imgLiquid col-md-8">
					<img src="./img/pages/incentivize2.jpg">
				</div>
				<div class="photocaption col-md-4">
					<p><h3>&nbsp;</h3></p>
					<p class="text-muted">This world is smaller than we think , we all have come here for a reason and we all are equal , we share the same blood. But then why do we build boundaries?</p>
					<p class="text-muted">Sometimes it is good to forget our egos and those boundaries - for one random act of kindness can fill your heart and other people's heart with warmth and happiness.</p>
				</div>
			</div>
		</p>
		<p>Congratulations to all the winners!</p>
		<p>We hope that the good Samaritan spirit remains alive and kicking in all of you, and through Project Incentivize, you inspire others to follow in your path.</p>
	</div>
</div>
</div>
<!-- PREFOOTER -->
	<?php include('prefooter.php') ?>
<!-- FOOTER -->
	<?php include('footer.php') ?>
	<!-- The Javascript begins -->
	<script>
	jQuery(document).ready(function(){
		jQuery('ul.sf-menu').superfish({
			pathClass:	'current'
		});
	});
	</script>
	<script>
	$(document).ready(function() {
    $(".imgLiquidFill").imgLiquid();
	});
	</script>
	<script>
	function myFocus(element){
			 if (element.value == element.defaultValue){
					 element.focus();
					 element.value = '';
			 }
		}
		function myBlur(element){
			 if (element.value == ''){
					 element.blur();
					 element.value = element.defaultValue;
			 }
		}
	</script>
	<script type="text/javascript">
		$(function() {
		$('.fadein img:gt(0)').hide();

		setInterval(function () {
    	$('.fadein :first-child').fadeOut()
                             .next('img')
                             .fadeIn()
                             .end()
                             .appendTo('.fadein');
		}, 4000); // 4 seconds
		});
	</script>
</body>
</html>