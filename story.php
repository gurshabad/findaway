<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Find A Way | Our Story</title>
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
		<h2>OUR STORY</h2>
	</div>
	<div class="page-content col-md-9">
		<p></p>
		<p>Find A Way was born out of an urge to do something meaningful. Brain-storming over the summer of 2013, three of the founding members realized that the best way that they, being college students, could help society out was by creating a non-profit organization that acts as the grease in the works between the public and the many NGOs that are not doing so well financially due to lack of reach.</p>
		<p>They saw for themselves how difficult it is to take time out from our fast-paced and ever-busy lives to commit that one small act of charity that makes someone else’s day and puts a smile on their face. They realized that the gap between NGOs championing various causes and the people who want to support those causes needs to be bridged.</p>
		<p>Since most of the members are computer science students, they realized that they had the power of technology at hand, and could use it as a tool to help those who don’t know how to harness it. Social networking, online marketing tools and monitoring and managing data using software are just some of the things they felt they could assist NGOs with, having the necessary resources and knowledge available to them via their colleges.</p>
		<p>And so, within a span of a few months, and with help from IIITD faculty and a few enthusiastic classmates, Find A Way was conceived. Naming the organisation, getting it registered and other logistical concerns took about three months, and it was 25 September 2013 before the NPO was fully existent.</p>
		<p>
			<div class="row" style="text-align: center">
				<div class="content-photo imgLiquidFill imgLiquid col-md-8">
					<img src="./img/pages/story.jpg">
				</div>
				<div class="photocaption col-md-4">
					<p><h3>OUR STORY</h3></p>
					<p class="text-muted">The Card Project was the first step towards realizing our goal of changing the world one small act at a time. The Find A Way team worked super hard to distribute as many cards as possible, to make sure that as many children as is possible benefit through the Eat and Educate campaign. Check out more details <a href="http://findaway.in/card/">here</a>.</p>
				</div>
			</div>
		</p>
		<p>The aim of the organization was not to create a huge bang or to change the world in one day. We believe that every life we touch is a step further, a new achievement. We didn’t start out with set goals in mind -- the path on which we take Find A Way is enlightened by what we do right now. We are not perfect, everyday we learn and grow, and our experiences with the people who are benefitted through Find A Way define our identity.</p>
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