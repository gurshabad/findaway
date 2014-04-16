<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Find A Way | Our Values</title>
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
		<h2>OUR VALUES</h2>
	</div>
	<div class="page-content col-md-9">
		<p></p>
		<p><h3>INNOVATION</h3>The youth of today believes in constant redefinition and renovation. We feel an ever-present need to innovate, to come up with better and more efficient ideas to achieve the same things. We have the might of technology on our side, and the daring to challenge ourselves to outperform our previous achievements.</p>
		<p><h3>IMPACT</h3>We are fueled by a desire to help, the awesome feeling we get when we make someone’s life light up, and the love and enthusiasm that people have shown us so far. Your help and appreciation keep us going.<br>Reaching out to as many people as possible and affecting their lives for the better, be it the helper or the helped, is what we strive for in our mission.</p>
		<p><h3>TRANSPARENCY</h3>We believe that it doesn’t take much to spread a smile. Any contribution, however small, goes a long way in helping people in need. You can be sure that if you contribute to our projects, the money will go to someone who needs it. We believe in what we are -- a non-profit organization.</p>
		<p><h3>EFFICIENCY</h3>We don’t believe in fancy claims and lofty goals. Our philosophy is simple - we follow a best-effort approach. We learn from our mistakes and are not afraid to ask for help where we need it. Above all, we possess a drive to succeed that makes us efficient and resourceful.</p>
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