<!DOCTYPE html>
<html>
<head>
	<title>EB Instalacje elektryczne</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">

	<?php wp_head();?>
</head>
<body>
	<div class="pasek_gora">
		<div class="kontakt">
			<img class="img1" src="/wordpress/wordpress/wp-content/uploads/2020/09/phone.png" width="26" height="26">
			<a class="a1" href="tel:+48781345725">781-345-725</a>
			<img class="img2" src="/wordpress/wordpress/wp-content/uploads/2020/09/mail.png" height="26px" width="26px;">
			<a class="a2" href="mailto:michbie911@gmail.com e-mail">michbie911@gmail.com</a>
		</div>
		<div class="data">
			<?php
			$dni_tygodnia = array( 'PONIEDZIAŁEK', 'WTOREK', 'ŚRODA', 'CZWARTEK', 'PIĄTEK', 'SOBOTA','NIEDZIELA');
			$dzien = date( "N" );
			$data = date("d-m-Y");
			echo 'DZIŚ JEST '.$dni_tygodnia[$dzien-1];
			echo ' '.$data;
			?>
		</div>
	</div>
	<div class="logo">
		<?php the_custom_logo(); ?>
	</div>
	<div class="div_menu">
	  <?php wp_nav_menu(
			array('theme_location' => 'header-menu','menu_class' => 'primary-menu',));?>
	</div>
	<div class="pasek">
	</div>
	<div class="slider">
		<?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>
	</div>
