<?php 
	 include 'session.php'; 
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>HawkEye || A personal Portfolio by Emon</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script  src="js/jquery.min.js" ></script><!--Jequery link (necessary for bootstrap's JavaSript Plugin)--><!-- Custom Theme files -->
		<script defer src="js/all.min.js"></script> <!--load all styles -->
		<script defer src="js/fontawesome.min.js"></script> <!--load all styles -->
		<script defer src="js/brands.min.js"></script> <!--load all styles -->
		<link href="css/all.min.css" rel='stylesheet' type='text/css' />
		<link href="css/fontawesome.min.css" rel='stylesheet' type='text/css' />
		<link href="css/brands.min.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel='stylesheet' type='text/css' /><!--Custom css file for customize page-->
	 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keyword" content="protfolio, web template, Emon" />
		<meta http-equiv="content-type", content="text/html; charset=utf-8" /> <!--The http-equiv attribute provides an HTTP header for the information/value of the content attribute || content-type	Specifies the character encoding for the document-->
		<link href='//fonts.googleapis.com/css?family=Asap:400,700,400italic' rel="stylesheet" type="text/css" />
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'><!--Using google fonts-->
	 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js" ></script>
		<script type="text/javascript" src="js/easing.js" ></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	 <!---- start-smoth-scrolling---->
	</head>
	<body>