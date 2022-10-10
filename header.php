<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
$script_filename =  explode('/',$_SERVER['SCRIPT_FILENAME']);
$curr_path = $script_filename[count($script_filename)-1];

$home_active = $aboutus_active = $services_active = $clients_active = $gallery_active = $career_active = $contact_active = '';

if($curr_path == 'index' || $curr_path == 'index.php'){
  $home_active = "active";
}
elseif($curr_path == 'about' || $curr_path == 'about.php'){
  $aboutus_active = "active";
}
elseif($curr_path == 'services' || $curr_path == 'services.php'){
  $services_active = "active";
}
elseif($curr_path == 'clients' || $curr_path == 'clients.php'){
  $clients_active = "active";
}
elseif($curr_path == 'gallery' || $curr_path == 'gallery.php'){
  $gallery_active = "active";
}
elseif($curr_path == 'career' || $curr_path == 'career.php'){
  $career_active = "active";
}
elseif($curr_path == 'contact' || $curr_path == 'contact.php'){
  $contact_active = "active";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Equipcare – Committed to machine's care</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="./images/favicon.png">
<meta name="keywords" content="Mining Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstarp-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstarp-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/lightbox.css">
<!--// css -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="banner-content">
			<div class="logo">
				<img src="./images/logo.png" height="150px"><br>
				<a href="index.php">Knowteq Equipcare LLP</a>
			</div>
			<div class="top-nav">
				<span class="menu">MENU</span>
				<ul class="nav1 cl-effect-15">
					<li><a href="index.php" <?php echo $home_active == '' ? "data-hover='Home'" : '';?> class="<?php echo $home_active;?>">Home</a></li>
					<li><a href="about.php" <?php echo $aboutus_active == '' ? "data-hover='About'" : '';?> class="<?php echo $aboutus_active;?>">About</a></li>
					<li><a href="services.php" <?php echo $services_active == '' ? "data-hover='Services'" : '';?> class="<?php echo $services_active;?>">Services</a></li>
					<li><a href="clients.php" <?php echo $clients_active == '' ? "data-hover='Clients'" : '';?> class="<?php echo $clients_active;?>">Clients</a></li>
					<li><a href="gallery.php" <?php echo $gallery_active == '' ? "data-hover='Gallery'" : '';?> class="<?php echo $gallery_active;?>">Gallery</a></li>
					<li><a href="career.php" <?php echo $career_active == '' ? "data-hover='Career'" : '';?> class="<?php echo $career_active;?>">Career</a></li>
					<li><a href="contact.php" <?php echo $contact_active == '' ? "data-hover='Contact'" : '';?> class="<?php echo $contact_active;?>">Contact</a></li>
				</ul>
				<!-- script-for-menu -->
					<script>
						 $( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						// Animation complete.
							});
							});
					</script>
				<!-- /script-for-menu -->
			</div>
			<div class="banner-slid">
				<script src="js/responsiveslides.min.js"></script>
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					</script>
					<!-- <div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="banner-info">
									<h5>Nam dignissim mauris erat placerat</h5>
									<p>Convallis nulla  in consequat ipsum. Morbi pretium rutrum enim, ac blandit tortor tempus ac. 
										Nullam tempor, nibh quis fringilla molestie, eros odio laoreet nisi, et vestibulum
									</p>
								</div>
							</li>
							<li>
								<div class="banner-info">
									<h5>Curabitur convallis nunc lectus</h5>
									<p>Vestibulum in consequat ipsum. Morbi pretium rutrum enim, ac blandit tortor tempus ac. 
										Nullam tempor, nibh quis fringilla molestie, eros odio laoreet nisi, et convallis nulla 
									</p>
								</div>
							</li>
							<li>
								<div class="banner-info">
									<h5> Maecenas vehicula libero lectus</h5>
									<p>fringilla in consequat ipsum. Morbi pretium rutrum enim, ac blandit tortor tempus ac. 
										Nullam tempor, nibh quis vestibulum molestie, eros odio laoreet nisi, et convallis nulla 
									</p>
								</div>
							</li>
						</ul>
					</div> -->
			</div>
			<div class="header-address">
				<ul>
					<li>Tarakpur Near- ECL Hospital, Kajora Gram, Andal, Dist- West Burdwan, Asansol, West Bengal, 713321, India</li>
					<li><a href="mailto:info@equipcare.in">E-mail : info@equipcare.in</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->