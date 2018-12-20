<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Avanged Sevenfold</title>
		<link rel="shortcut icon" href="images/gambar/lambang.png">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="style.css" rel="stylesheet" type="text/css"/>
		<link href="layout.css" rel="stylesheet" type="text/css"/>
		<link href="css/themes/link.css" rel="stylesheet" type="text/css"/>
		<script src="maxheight.js" type="text/javascript"></script>
		<!--[if lt IE 7]>
			<link href="ie_style.css" rel="stylesheet" type="text/css" />
			<script type="text/javascript" src="ie_png.js"></script>
			<script type="text/javascript">ie_png.fix('.png, #header .row-2, #header .nav li a, #content, .gallery li');</script>
		<![endif]-->
		<style type="text/css">
		<!--
			body,td,th {
				color: #CCC;
			}
			body {
				background-color: #F00;
				color: #C0DBF0;
			}
			a:link {
				color: #CCC;
			}
			a:visited {
				color: #F00;
			}
			a:hover {
				color: #CCC;
			}
			a:active {
				color: #F00;
			}
			.1 {
				text-align: center;
			}
			.3 {
				text-align: center;
			}
			h4 {
				font-size: 0.91em;
			}
			-->
		</style>
		<script type="text/javascript" src="js/lib/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/lib/jquery.easing.min.js"></script>
		<script type="text/javascript" src="src/jquery.scrollUp.js"></script>
	</head>
	<script>
		/* scrollUp Minimum setup */
		// $(function () {
		// 	$.scrollUp();
		// });
		// scrollUp full options
		$(function () {
			$.scrollUp({
				scrollName: 'scrollUp', // Element ID
				scrollDistance: 300, // Distance from top/bottom before showing element (px)
				scrollFrom: 'top', // 'top' or 'bottom'
				scrollSpeed: 300, // Speed back to top (ms)
				easingType: 'linear', // Scroll to top easing (see http://easings.net/)
				animation: 'fade', // Fade, slide, none
				animationInSpeed: 200, // Animation in speed (ms)
				animationOutSpeed: 200, // Animation out speed (ms)
				scrollText: 'Up', // Text for element, can contain HTML
				scrollTitle: false, // Set a custom <a> title if required. Defaults to scrollText
				scrollImg: false, // Set true to use image
				activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
				zIndex: 2147483647 // Z-Index for the overlay
			});
		});
		// Destroy example
		$(function(){
			$('.destroy').click(function(){
				$.scrollUp.destroy();
			})
		});
	</script>
	<body id="page1" onload="new ElementMaxHeight();">
		<div id="main">
		  <!-- header -->
			<div id="header">
				<div class="row-1">
					<div class="wrapper">
						<div class="logo">
							<h1><a href="index.php" style="font:'Comic Sans MS', cursive">Avenged Sevenfold</a></h1>
							<em><img src="images/gambar/lambang.png" /></em> 
							<strong>A7x</strong> 
						</div>
					</div>
				</div>
				<div class="row-2">
					<div class="indent">
					<!-- header-box begin -->
						<div class="header-box">
							<div class="inner">
								<ul class="nav" style="margin-left:-62px">
									<li><a></a></li>
									<li><a href="index.php?hal=home">Home</a></li>
									<li><a href="index.php?hal=profile">Profile</a></li>
									<li><a href="index.php?hal=album">Albums</a></li>
									<li><a></a></li>
								</ul>
							</div>
						</div>
					<!-- header-box end -->
					</div>
				</div>
			</div>
			<!-- content -->
			<div id="content">
				<div class="wrapper">
					<div class="aside maxheight">
						<!-- box begin -->
						<div class="box maxheight">
							<div class="inner">
								<h3 class="1"><span class="3">Informasi:</span></h3>
								<span class="3"><span class="1"><span class="1">Avenged Sevenfold (atau dipanggil A7X) adalah band Hardrock Amerika dari Huntington Beach, California, yang dibentuk pada tahun 1999. Band ini terdiri dari vokalis M. Shadows, lead guitar Synyster Gates, Zacky Vengeance rhythm guitar, bassist Johnny Christ, dan Drummer Arin Ilejay.</span></span></span>
							</div>
						</div>
						<!-- box end -->
					</div>
					<div class="content">
						<div class="indent">
						  <?php 
							if(isset($_GET['hal'])){
								$hal = $_GET['hal'];
								require_once($hal.".php");
							}else{
								require_once("home.php");
							}
							?>
						</div>
					</div>
				</div>
			</div>
			<!-- footer -->
			<div id="footer">
				<ul class="nav" style="margin-left:62px">
					<li><a href="index.php?hal=home">Home</a>|</li>
					<li><a href="index.php?hal=profile">Profile</a>|</li>
					<li><a href="index.php?hal=album">Albums</a></li>
				</ul>
				<div class="wrapper">
					<div class="fleft">Copyright &copy; 2018 <a href="index.php">Avanged Sevenfold</a>.</div>
				</div>
			</div>
		</div>
		<div align=center></div>
	</body>
</html>