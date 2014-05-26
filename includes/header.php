<?php

    session_start(); //this must be on each page the $_SESSION will be set or accessed.

?>
  <html lang="en">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Flexi-Coding LLC" content="">
		<meta name="Matthew Gagn&eacute;@Flexi-Coding LLC" content="">
		<link rel="shortcut icon" href="img/favicon.ico">  
		<title>Flexi-Coding LLC</title>
		
		<link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">
		<!-- First, add jQuery (and jQuery UI if using custom easing or animation -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
		
		<!-- Second, add the Timer and Easing plugins -->
		<script type="text/javascript" src="../js/jquery.timers-1.2.js"></script>
		<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
		
		<!-- Third, add the GalleryView Javascript and CSS files -->
		<script type="text/javascript" src="../js/jquery.galleryview-3.0-dev.js"></script>
		<link type="text/css" rel="stylesheet" href="../css/jquery.galleryview-3.0-dev.css" />
		
		<script src="../js/bootstrap.min.js"></script>
		<link href="../css/bootstrap.css" rel="stylesheet">
		
		<!-- Now for the Popup Quote/Contact Form -->
		<link href="../css/jquery.feedback_me.css" rel="stylesheet" type="text/css">
		<script src="../js/jquery.feedback_me.js"></script>

		<!-- Custom styles for this template -->
		<link href="../css/flexicoding.css" rel="stylesheet" type="text/css" />
		
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
				 
		<script type="text/javascript">
			$(document).ready(function() {
				$('#myGallery').galleryView({
					filmstrip_position: 'right',
					enable_overlays: true,
					overlay_position: 'top',
					panel_animation: 'crossfade'
				});
	
				$(function(){
					$('.tab-section').hide();
					$('#tabs a').bind('click', function(e){
						$('#tabs a.current').removeClass('current');
						$('.tab-section:visible').hide();
						$(this.hash).show();
						$(this).addClass('current');
						//e.preventDefault();
					}).filter(':first').click();
				});
				
				$('#about').bind('click', function(e){
					document.location.href = "http://flexicoding.com/csv2/";
				});

				//set up some minimal options for the feedback_me plugin
				fm_options = {
					jQueryUI: true,
					bootstrap: true,
					position: "right-top",
					title_label: "Request a Quote",
					trigger_label: "Request a Quote",
					show_email: true,
					name_label: "Name:",
					email_label: "Email:",
					message_label: "Message:",
					name_placeholder: "YOUR name goes here...",
					email_placeholder: "user@example.com",
					message_placeholder: "The details of the type of service you would like a quote for.",
					name_required: true,
					email_required: true,
					message_required: true,
					show_asterisk_for_required: true,
					feedback_url: "send_feedback_jqueryui",
					custom_params: {
						csrf: "my_secret_token",
						user_id: "matt_gagne",
						feedback_type: "jqueryUI"
					}
				};
				
				//init feedback_me plugin
				fm.init(fm_options);
				
			});/* end of doc ready */     
		</script>
<!--        <script type = "text/javascript" src = "../js/sliding.form.js"></script>-->
	</head>
  
	<body>
<!--		<div class="navbar" role="navigation">-->
		<div class="navbar">
			<a href="http://flexicoding.com" title"Home"><div class="logo">&nbsp;</div></a>
			<div class="slogan">&nbsp;</div>
			<ul id="tabs">
				<li><a href="#home" class="btn btn_default btn_tabs">Why Hire Us?</a></li>
				<li><a href="#page2" class="btn btn_default btn_tabs">Why Hire Us? (Page2)</a></li>
				<li><a href="#gallery" class="btn btn_default btn_tabs">Gallery/Portfolio</a></li>
				<li><a href="http://flexicoding.com/cv/" id="about" class="btn btn_default btn_tabs">About</a></li>
			</ul>
		</div><!-- navbar -->			