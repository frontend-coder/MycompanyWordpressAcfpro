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

  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon.ico">
  <!-- 3 нижние строки Chrome, Firefox OS and Opera; Windows Phone; iOS Safari    -->
  <meta name="theme-color" content="#000">
  <meta name="msapplication-navbutton-color" content="#000">
  <meta name="apple-mobile-web-app-status-bar-style" content="#000">

 <!--  <link rel="stylesheet" href="css/libs.min.css" /> -->
 <?php wp_head(); ?>
</head>
<body>
 <header class="header_img" id="mainblock">
  <div class="container">
   <div class="header_row">

    <div class="header_content">
      <h1>добро пожаловать в <span> мою компанию </span>  </h1>
      <p>Мы - цифровое агентство обладающее <span>многолетним опытом</span> сформировавшее колектив <span> из неординарных профи</span>.
      </p>
    </div>

  </div>
</div>
</header>
<div class="top_line">
  <div class="container">
    <div class="row">
      <div class="top_line_box">
        <div class="top_line_logo">
         <h3>mycompany</h3>
       </div>
       <div class="top_line_menu">
        <ul>
          <li><a href="#mainblock">главная</a></li>
          <li><a href="#aboutus">о нас</a></li>
          <li><a href="#service">услуги</a></li>
          <li><a href="#portfolio">портфолио</a></li>
          <li><a href="#adwice">Отзывы</a></li>
          <li><a href="#contacts">контакты</a></li>
        </ul>
      </div>
      <div class="mobile_gamburger">
        <a href="#" class="toggle-mnu">
          <span></span>
        </a>
      </div>
    </div>
  </div>
</div>
<!--start hidden-mnu -->
<div class="top-menu hidden-mnu">
  <ul>
   <li><a href="#mainblock">главная</a></li>
   <li><a href="#aboutus">о нас</a></li>
   <li><a href="#service">услуги</a></li>
   <li><a href="#portfolio">портфолио</a></li>
   <li><a href="#adwice">Отзывы</a></li>
   <li><a href="#contacts">контакты</a></li>
 </ul>
</div>
<!--end hidden-mnu -->
</div>