<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки подяки
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package green_system
	 */
	get_header();
	?>

	<!-- Сторінка подяки -->
	<section class="thx-wrapper" style="background-image: url('<?php the_post_thumbnail_url();?>')">
		<div class="container">
			<div class="row">
				<div class="content col-lg-8 offset-lg-2 col-12 text-center">
					<?php the_content();?>
            <p class="go-social"><?php echo esc_html( pll__( 'Переходьте на наші соц мережі' ) ); ?></p>
					<?php get_template_part('template-parts/social');?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer();
