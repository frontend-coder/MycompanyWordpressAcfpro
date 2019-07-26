<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mycompany
 */

?>


<footer>
  <ul class="footer_list">
        <?php while( has_sub_field('footer_socialweb', 'option') ):
          $footer_socialweb_icon = get_sub_field('footer_socialweb_icon', 'option');
          $footer_socialweb_link = get_sub_field('footer_socialweb_link', 'option');
          ?>
    <li> <a href="<?php echo esc_url($footer_socialweb_link); ?>" target="_blank"><i class="fa <?php echo esc_html($footer_socialweb_icon); ?>" aria-hidden="true"></i></a> </li>

 <?php endwhile; ?>
  </ul>
</footer>

<?php wp_footer(); ?>
<!--
<script src="js/scripts.min.js"></script> -->
<!-- Yandex.Metrika counter -->
<!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter -->
<!-- /Google Analytics counter -->
</body>
</html>