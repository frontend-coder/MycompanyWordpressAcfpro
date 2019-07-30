<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mycompany
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">


	<title>Верстка шаблона Моя Компания</title>
	<meta name="description" content="Сверстал HTML шаблон для партфолио Моя компания">
	<meta name="keywords" content="Моя компания"/>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<?php
	$favicon_site = get_field('header_favicon', 'option');
	if ($favicon_site) :
		$favicon_site_url = $favicon_site;
		?>
		<link rel="shortcut icon" href="<?php echo esc_url($favicon_site_url);?>" type="image/x-icon">
	<?php endif; ?>

	<!-- 3 нижние строки Chrome, Firefox OS and Opera; Windows Phone; iOS Safari    -->
	<meta name="theme-color" content="#000">
	<meta name="msapplication-navbutton-color" content="#000">
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<!--  <link rel="stylesheet" href="css/libs.min.css" /> -->
	<?php wp_head(); ?>
</head>
<body>


	<?php
	$header_fon = get_field('header_fon', 'option');
 // myco_debug($header_fon);
	if($header_fon) :
		?>
		<header style="background-image: url(<?php echo esc_url($header_fon[url]); ?>);" class="header_img header_img_404">
			<div class="container">
				<div class="header_row">

					<div class="header_content">

						<?php
						$header_up = get_field('header_up', 'option');
						if ($header_up) :
							echo $header_up;
						endif; ?>

						<?php
						$header_description = get_field('header_description', 'option');
						if ($header_description) :
							echo $header_description;
						endif; ?>
						<a class="link_404" href="<?php echo home_url('/'); ?>">На главную</a>
					</div>

				</div>
			</div>
		</header>
	<?php endif; ?>


