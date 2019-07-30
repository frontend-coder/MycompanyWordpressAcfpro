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
		<header style="background-image: url(<?php echo esc_url($header_fon[url]); ?>);" class="header_img" id="mainblock">
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
					</div>

				</div>
			</div>
		</header>
	<?php endif; ?>


	<div class="top_line">
		<div class="container">
			<div class="row">
				<div class="top_line_box">
					<div class="top_line_logo">
						<?php
						$header_logo = get_field('header_logo', 'option');
						if($header_logo) :
							?>
							<h3>
 <a href="<?php echo home_url('/'); ?>">
			<?php echo esc_html($header_logo); ?>
</a>
							</h3>
						<?php endif; ?>
					</div>
<?php
			wp_nav_menu( array(
				// [ 'items_wrap' => '%3$s' ],
				//  [ 'container' => '' ],
				'container' => 'div',
				'container_id' => '',
				'container_class' => 'top_line_menu',
				'theme_location' => 'menu-1',
				'menu_id'        => '',
				'menu_class'          =>  '',
			) );
			?>

		<!-- 			<div class="top_line_menu">
						<ul>
							<li><a href="#mainblock">главная</a></li>
							<li><a href="#aboutus">о нас</a></li>
							<li><a href="#service">услуги</a></li>
							<li><a href="#portfolio">портфолио</a></li>
							<li><a href="#adwice">Отзывы</a></li>
							<li><a href="#contacts">контакты</a></li>
						</ul>
					</div> -->

					<div class="mobile_gamburger">
						<a href="#" class="toggle-mnu">
							<span></span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!--start hidden-mnu -->


<?php
			wp_nav_menu( array(
				// [ 'items_wrap' => '%3$s' ],
				//  [ 'container' => '' ],
				'container' => 'div',
				'container_id' => '',
				'container_class' => 'top-menu hidden-mnu',
				'theme_location' => 'menu-1',
				'menu_id'        => '',
				'menu_class'          =>  '',
			) );
			?>
		<!--
		<div class="top-menu hidden-mnu">
			<ul>
				<li><a href="#mainblock">главная</a></li>
				<li><a href="#aboutus">о нас</a></li>
				<li><a href="#service">услуги</a></li>
				<li><a href="#portfolio">портфолио</a></li>
				<li><a href="#adwice">Отзывы</a></li>
				<li><a href="#contacts">контакты</a></li>
			</ul>
		</div> -->
		<!--end hidden-mnu -->
	</div>