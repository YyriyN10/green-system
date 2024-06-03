<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package green-system
 */

get_header();
?>

  <section class="error-404 not-found">
    <div class="container">
      <div class="row">
        <div class="content col-lg-6 offset-lg-3 col-12 text-center">
          <div class="pic-wrapper">
            <img src="<?php echo THEME_PATH;?>/assets/img/pic-404.png" alt="">
          </div>
          <h1><?php echo esc_html( pll__( 'Сторінка, яку ви шукаєте, була переміщена, видалена, перейменована або, можливо, ніколи не існувала!' ) ); ?></h1>
          <a href="<?php echo get_home_url('/');?>" class="button">
            <?php echo esc_html( pll__( 'повернутись на головну' ) ); ?>
          </a>
        </div>
      </div>
    </div>

  </section>

<?php
get_footer();
