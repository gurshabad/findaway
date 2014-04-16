<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Find A Way | Supporters</title>
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
		<h2>SUPPORTERS</h2>
	</div>
	<div class="page-content col-md-9" style="text-align:center; font-size:17px;">
		<p></p>
		<p>Thank you for believing in Find A Way!</p>
		<hr><p>Thanks to the <a href="http://www.iiitd.ac.in/news/microsoft-whodunnit-2013">Microsoft Whodunnit Challenge Winners</a> 2013 for donating a portion of their prize money.</p>
		<hr><p>Thanks to the &nbsp;<img height="22px" width="auto" src="http://i.imgur.com/cIrEz3d.jpg"> group of restaurants for sponsoring the Find A Way Card.</p>
		<hr>
		<p>Thanks to all the <strong>volunteers</strong> from IIITD who worked with us during December 2013.</p>
		<div class="row text-muted">
			<div class="col-md-6">
			<ul type="none">
			<li>Shitij Singhal</li>
			<li>Aditya Lakra</li>
			<li>Uday Pratap Yadav</li>
			<li>Sankalp</li>
			<li>Karishma Babbar</li>
			<li>Aashanvit Sheoran</li>
			<li>Shubham</li>
			</ul>
			</div>
			<div class="col-md-6">
			<ul type="none">
			<li>Shambhavi</li>
			<li>Rachna</li>
			<li>Anudeep</li>
			<li>Samiran</li>
			<li>Naman</li>
			<li>Akash</li>
			<li>Chanchal</li>
			</ul>
			</div>
		</div>
		<hr>
		<p>Thanks to the Find A Way Card Project <a href="http://findaway.in/card/restaurants/">Restaurant Partners</a>!</p>
		<hr>
		<p>Thanks to the Find A Way Card Project <a href="http://findaway.in/card/campusreps/">Campus Ambassadors</a>!</p>
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