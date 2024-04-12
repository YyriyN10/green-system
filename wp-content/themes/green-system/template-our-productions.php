<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки "Наша продукція"
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package green_system
	 */
	get_header();
?>
	<!-- Головний екран -->
	<section class="main-screen">
		<div class="container">
			<div class="row">
				<h1 class="block-title"><?php echo carbon_get_post_meta(get_the_ID(), 'green_system_home_main_screen_title'.green_system_lang_prefix());;?></h1>
				<p class="subtitle"><?php echo carbon_get_post_meta(get_the_ID(), 'green_system_home_main_screen_subtitle'.green_system_lang_prefix());;?></p>
				<a href="" rel="nofollow" class="button"><?php echo esc_html( pll__( 'Отримати консультацію' ) ); ?></a>
				<div class="pic-wrapper">
					<img
						src="<?php echo wp_get_attachment_image_src(carbon_get_post_meta(get_the_ID(), 'green_system_home_main_screen_image'.green_system_lang_prefix()), 'full')[0];?>"
						alt="<?php echo get_post_meta(carbon_get_post_meta(get_the_ID(), 'green_system_home_main_screen_image'.green_system_lang_prefix()), '_wp_attachment_image_alt', TRUE);?>"
					>
				</div>
			</div>

		</div>
	</section>

	<!-- Наші переваги -->
<?php
	$ourAdvantagesList = carbon_get_post_meta(get_the_ID(), 'green_system_home_advantages_list'.green_system_lang_prefix());

	if ( $ourAdvantagesList ):
		?>
		<section class="our-advantages">
			<div class="container">
				<div class="row">
					<div class="content col-12">
						<?php foreach( $ourAdvantagesList as $item ):?>
							<div class="item">
								<img src="<?php echo $item['icon'];?>" alt="" class="svg-pic">
								<p><?php echo $item['text'];?></p>
							</div>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</section>
	<?php endif;?>

	<!-- Про нас -->
<?php
	$aboutUsBlockTitle = carbon_get_post_meta(get_the_ID(), 'green_system_home_about_us_block_title'.green_system_lang_prefix());
	$aboutUsList = carbon_get_post_meta(get_the_ID(), 'green_system_home_about_us_list'.green_system_lang_prefix());

	if ( $aboutUsBlockTitle && $aboutUsList ):
		?>
		<section class="about-us">
			<div class="container">
				<div class="row">
					<h2 class="block-title col-12"><?php echo $aboutUsBlockTitle;?></h2>
				</div>
				<div class="row">
					<div class="content col-12">
						<?php foreach( $aboutUsList as $item ):?>
							<div class="item">
								<img src="<?php echo $item['icon'];?>" alt="" class="svg-pic">
								<p><?php echo $item['text'];?></p>
							</div>
						<?php endforeach;?>

					</div>
				</div>
			</div>
		</section>
	<?php endif;?>
	<!-- Форма зворотнього звязку -->
	<section class="contact-form">
		<div class="container">
			<div class="row">
				<h2 class="block-title col-12"><?php echo esc_html( pll__( 'Бажаєте замовити СЕС чи отримати консультацію фахівця?' ) ); ?></h2>
				<p class="subtitle col-12"><?php echo esc_html( pll__( 'Залиште заявку і наш менеджер зв’яжеться з вами' ) ); ?></p>
			</div>
			<div class="row">
				<div class="content col-12">
					<?php get_template_part('template-parts/form');?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer();
