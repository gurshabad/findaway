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
	<img src="./img/slides/slide3.jpg">
	<img src="./img/slides/slide1.jpg">
	<img src="./img/slides/slide2.jpg">
</div>
<div style="margin-top:450px;"></div>
<!-- PICTURE DIV ENDS -->
<div class="container">
<div class="row">
	<div class="page-title col-md-3">
		<h2>PAGE HEADING</h2>
	</div>
	<div class="page-content col-md-9">
		<p></p>
		<p>Donec in vel ipsum auctorulvinaroin ullamcorper u et feum iaculis lacinia est. Proin dictum elemenelit. Fusce euismod consequat antrem ipsm dolor sitmet consectetuer in vel ipsum auctorulvinaroin adipiscing elit. Pellesque sed dolor.<br><br>Aliquam congue fermentum nisuris accumsan nullael diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede  mi aliquet sit amet euismod inuctor ut ligula. Aliquam dabus tidunt metus. Praesent justo dolor lobortis quis in vel ipsum auctorulvinaroin lobortis digssim pulvinar ac lorem. Vestibulum sed ante.<br>Donec sagittis euismod purus.</p>
		<p>Donec in vel ipsum auctorulvinaroin ullamcorper u et feum iaculis lacinia est. Proin dictum elemenelit. Fusce euismod consequat antrem ipsm dolor sitmet consectetuer in vel ipsum auctorulvinaroin adipiscing elit. Pellesque sed dolor.<br><br>Aliquam congue fermentum nisuris accumsan nullael diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede  mi aliquet sit amet euismod inuctor ut ligula. Aliquam dabus tidunt metus. Praesent justo dolor lobortis quis in vel ipsum auctorulvinaroin lobortis digssim pulvinar ac lorem. Vestibulum sed ante.<br>Donec sagittis euismod purus.</p>
		<p>Donec in vel ipsum auctorulvinaroin ullamcorper u et feum iaculis lacinia est. Proin dictum elemenelit. Fusce euismod consequat antrem ipsm dolor sitmet consectetuer in vel ipsum auctorulvinaroin adipiscing elit. Pellesque sed dolor.<br><br>Aliquam congue fermentum nisuris accumsan nullael diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede  mi aliquet sit amet euismod inuctor ut ligula. Aliquam dabus tidunt metus. Praesent justo dolor lobortis quis in vel ipsum auctorulvinaroin lobortis digssim pulvinar ac lorem. Vestibulum sed ante.<br>Donec sagittis euismod purus.</p>
		<p>
			<div class="row" style="text-align: center">
				<div class="content-photo imgLiquidFill imgLiquid col-md-8">
					<img src="./img/slides/slide2.jpg">
				</div>
				<div class="photocaption col-md-4">
					<p><h3>PHOTO TITLE</h3></p>
					<p class="text-muted">A nice description of the photo goes here. Cool Cool Cool.</p>
					<p class="text-muted">More text can go here if required, this box looks cooler if filled completely.</p>
					<p class="text-muted">Donec in vel ipsum auctorulcinaroin ullamcorper u et feum iaculis.</p>
				</div>
			</div>
		</p>
		<p>Donec in vel ipsum auctorulvinaroin ullamcorper u et feum iaculis lacinia est. Proin dictum elemenelit. Fusce euismod consequat antrem ipsm dolor sitmet consectetuer in vel ipsum auctorulvinaroin adipiscing elit. Pellesque sed dolor.<br><br>Aliquam congue fermentum nisuris accumsan nullael diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede  mi aliquet sit amet euismod inuctor ut ligula. Aliquam dabus tidunt metus. Praesent justo dolor lobortis quis in vel ipsum auctorulvinaroin lobortis digssim pulvinar ac lorem. Vestibulum sed ante.<br>Donec sagittis euismod purus.</p>
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