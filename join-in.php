<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Find A Way | Join In</title>
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
		<h2>JOIN IN</h2>
	</div>
	<div class="page-content col-md-9" style="text-align: center; font-size: 17px;">
		<p></p>
		<p>Aggressive optimism and your enthusiasm are all that keep us going. We would love to have you as a part of our initiative, be it as a contributor, a campus ambassador or just as someone who cares. </p>
		<hr><p>To donate, give us a call or drop us an email at contact@findaway.in, and we’ll get back to you</p>
		<hr><p>To become a Volunteer, fill out <a href="https://docs.google.com/a/iiitd.ac.in/forms/d/1iIoeQoARxVj4kn0FB_3P48aJuLsiGhD_ZTgzhyK2iKE/viewform">this</a> form.</p>
		<hr><p>To join the Find A Way Team, fill out <a href="https://docs.google.com/a/iiitd.ac.in/forms/d/1iIoeQoARxVj4kn0FB_3P48aJuLsiGhD_ZTgzhyK2iKE/viewform">this</a> form.</p>
		<hr><p>To become a Find A Way Card Project Restaurant Partner, fill out <a href="https://docs.google.com/a/iiitd.ac.in/forms/d/1jJSHoc4VygDhNduZDneC3V_uDU8HrcOKgq5zolsPYv0/viewform">this</a> form.</p>
		<hr><p>To become a Find A Way Card Project Campus Ambassador, fill out <a href="https://docs.google.com/a/iiitd.ac.in/forms/d/1EHV7bntkKpQ1FFcjjDOarMvedl09-oGE20TupFM6A5g/viewform">this</a> form.</p>
		<hr><p>To buy the Find A Way Card from us directly, fill out <a href="https://docs.google.com/a/iiitd.ac.in/forms/d/1PRcFr_Xa4FvxRfvwGGJAxUAnQzrQefmq5XUQaDF_MF8/viewform">this</a> form.</p>
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