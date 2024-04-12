<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблоен сторінки товару
	 *
	 * Template post type: solar_types
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package green_system
	 */

	get_header();?>
	<!-- Main Screen -->
<?php
	$mainScreenTeamMenPic = carbon_get_post_meta(get_the_ID(),'ua_teens_team_men_main_screen_pic'.ua_teens_lang_prefix());
	$mainScreenTeamPosition = carbon_get_post_meta(get_the_ID(),'ua_teens_team_men_main_position'.ua_teens_lang_prefix());
	$mainScreenTeamDirection= carbon_get_post_meta(get_the_ID(),'ua_teens_team_men_main_direction'.ua_teens_lang_prefix());

	$mainScreenTeamTitle = get_the_title();

	$mainScreenTeamTitle = explode(' ', $mainScreenTeamTitle );



	if ( $mainScreenTeamMenPic && $mainScreenTeamDirection ):
		?>
		<section class="main-screen-team-men" style = "background-image: url('<?php echo wp_get_attachment_image_src($mainScreenTeamMenPic, 'full')[0];?>')" >
			<div class="container">
				<div class="row">
					<?php if( $mainScreenTeamTitle ):?>
						<h1 class="block-title upper-title big-title col-12">
							<span><?php echo $mainScreenTeamTitle[0];?></span>
							<?php echo $mainScreenTeamTitle[1];?>
						</h1>
					<?php endif;?>

					<div class="pic-wrapper col-xl-5 offset-xl-3 col-lg-6 offset-lg-2">
						<img
							src="<?php echo wp_get_attachment_image_src($mainScreenTeamMenPic, 'full')[0];?>"
							alt="<?php echo get_post_meta($mainScreenTeamMenPic, '_wp_attachment_image_alt', TRUE);?>"
						>
					</div>
					<div class="text col-lg-4">
						<p class="direction subtitle small-subtitle"><?php echo $mainScreenTeamDirection;?></p>
						<p class="position"><?php echo $mainScreenTeamPosition;?></p>
					</div>
				</div>
			</div>
		</section>
	<?php endif;?>


<?php get_footer();
