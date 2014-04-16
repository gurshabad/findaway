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
<div class="row" style="text-align: center;">
		<p></p>
		<p class="roller">helping you help others.</p>
		<p class="roller" style="font-size: 23px;">We're on a mission to change the world. On our own terms.</p>
		<p class="roller2 text-muted">Working in close collaboration with the NGOs, we bridge the gap between their efforts and your desire to help.<br>Know more about what we're trying to do through our introductory video.</p>
		<p> <object><param name="movie" value="http://www.youtube.com/v/3NtaOs-sxi0?hl=en_US&;version=3&rel=0&autohide=1&showinfo=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/3NtaOs-sxi0?hl=en_US&;version=3&rel=0&autohide=1&showinfo=0" type="application/x-shockwave-flash" width="70%" height="400" allowscriptaccess="always" allowfullscreen="true"></embed></object></p>
</div>
<div class="row">
	<div class="page-title col-md-3">
		<h2>WHAT'S NEW</h2>
	</div>
	<div class="page-content col-md-9">
		<script src="blogreader.js" type="javascript/text"></script>

		<script language="JavaScript" src="http://www.feedroll.com/rssviewer/feed2js.php?src=http%3A%2F%2Fhelpingyoufindaway.tumblr.com%2Frss%2F&num=4&date=y&targ=y&utf=y&html=a"  charset="UTF-8" type="text/javascript"></script>
		<noscript>
			<a href="http://www.feedroll.com/rssviewer/feed2js.php?src=http%3A%2F%2Fhelpingyoufindaway.tumblr.com%2Frss%2F&num=4&date=y&targ=y&utf=y&html=y">View RSS feed</a>
		</noscript>
		<hr>
		<p><a href="http://helpingyoufindaway.tumblr.com">Read more</a></p>

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