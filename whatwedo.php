<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Find A Way | What We Do</title>
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
	<img src="./img/slides/slide3.jpg">
	<img src="./img/slides/slide1.jpg">
	<img src="./img/slides/slide2.jpg">
</div>
<div style="margin-top:450px;"></div>
<!-- PICTURE DIV ENDS -->
<div class="container">
<div class="row">
	<div class="page-title col-md-3">
		<h2>WHAT WE DO</h2>
	</div>
	<div class="page-content col-md-9">
		<p></p>
		<p>Find A Way is a group of college students who are trying, in their own small way, to make a difference. All we have is the idea that we too can change the world, and some technological abilities that we think can help us achieve that goal.</p>
		<p>We know how tough it is for people to extract time from their busy schedules and actively carry out their social responsibility. Also, there are many NGOs that are working hard to gather funds and other resources to support worthy causes but are making less leeway than they ought to.</p>
		<p>Our organisation works in close collaboration with such NGOs to help their causes gain momentum using mass media initiatives. Our various projects are designed to help NGOs gather funds better and to help them reach out to a wider audience.</p>
		<p>We use our technological know-how to bring NGOs to your doorstep and act as a bridge between them and you, so that you can support the cause closest to your heart without investing too much time and effort. Find A Way does the work for you while you contribute to society and still carry on with your busy life.</p>
		<p>
			<div class="row" style="text-align: center">
				<div class="content-photo imgLiquidFill imgLiquid col-md-8">
					<img src="./img/pages/whatwedo1.jpg">
				</div>
				<div class="photocaption col-md-4">
					<p></p>
					<p class="text-muted">The Find A Way team members spent a memorable day at the school where CWCS-sponsored children study. There, they not only interacted with the children, but also saw for themselves the condition of their classrooms. The children have uniforms and textbooks, but not a healthy learning environment. In spite of these challenges,  children at CWCS are a happy lot, and love coming to school. Helping CWCS sponsor more children and improve the quality of schools and classrooms is the aim of the Eat and Educate campaign, which is funded by the Card Project.</p>
				</div>
			</div>
		</p>
		<p>We hope our small attempt finds a way to touch lives in a significant manner, and that we live up to our motto of helping you help others.</p>
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