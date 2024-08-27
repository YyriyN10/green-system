<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки "Про нас"
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package green_system
	 */
	get_header();
?>

<?php get_template_part('template-parts/block-breadcrumbs');?>

	<!-- Головний екран -->
	<section class="about-us-main-screen" style="background-image: url('<?php echo carbon_get_post_meta(get_the_ID(), 'green_system_about_us_main_screen_image'.green_system_lang_prefix());;?>')">
		<div class="container">
			<div class="row">
				<h1 class="block-title col-12 text-center big-title"><?php echo carbon_get_post_meta(get_the_ID(), 'green_system_about_us_main_screen_title'.green_system_lang_prefix());;?></h1>
			</div>
		</div>
	</section>

	<!-- Наші переваги -->
<?php
	$ourAdvantagesList = carbon_get_post_meta(get_the_ID(), 'green_system_about_us_advantages_list'.green_system_lang_prefix());

	if ( $ourAdvantagesList ):

		?>
		<section class="our-advantages-list indent-top-big indent-bottom-small animation-tracking">
			<div class="container">
        <div class="row second-up">
          <ul class="ideal-solution__list col-12">
						<?php foreach( $ourAdvantagesList as $item ):?>
                <li class="ideal-solution__item">
                  <h3 class="name"><?php echo $item['name'];?></h3>

                  <div class="icon">
                    <img src="<?php echo $item['icon'];?>" alt="" class="svg-pic">
                  </div>
                </li>
						<?php endforeach;?>
          </ul>
        </div>
			</div>
		</section>
	<?php endif;?>

	<!-- Про нас -->
<?php
	$aboutUsItemList = carbon_get_post_meta(get_the_ID(), 'green_system_about_us_description_list'.green_system_lang_prefix());
	$aboutUsList = carbon_get_post_meta(get_the_ID(), 'green_system_home_about_us_list'.green_system_lang_prefix());

	if ( $aboutUsItemList  ):?>
		<section class="about-us-list-info indent-top-small indent-bottom-big">
			<div class="container">
				<div class="row">
					<?php foreach( $aboutUsItemList as $item ):?>
					<div class="content col-12">
            <div class="media-content">
              <?php if( $item['media_type'] == 'image' ):?>
                <img
                   class="lazy"
                   data-src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
                   alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
                >
              <?php endif;?>

	            <?php if( $item['media_type'] == 'video' ):?>
                <a href="#" rel="nofollow" >
                  <img
                      class="lazy"
                      data-src="<?php echo wp_get_attachment_image_src($item['poster'], 'full')[0];?>"
                      alt="<?php echo get_post_meta($item['poster'], '_wp_attachment_image_alt', TRUE);?>"
                  >
	                <?php if( $item['video_type'] == 'video_file' ):?>
                    <span class="play" data-video="<?php echo $item['video'];?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
  <path d="M25.332 41.5574V22.4427C25.3324 22.2035 25.3971 21.9689 25.5194 21.7633C25.6416 21.5578 25.8169 21.3889 26.0269 21.2744C26.2368 21.1599 26.4737 21.1039 26.7127 21.1124C26.9518 21.1209 27.1841 21.1935 27.3854 21.3227L42.2547 30.8774C42.443 30.998 42.5979 31.164 42.7052 31.3602C42.8125 31.5564 42.8687 31.7764 42.8687 32C42.8687 32.2236 42.8125 32.4436 42.7052 32.6398C42.5979 32.836 42.443 33.0021 42.2547 33.1227L27.3854 42.68C27.1841 42.8092 26.9518 42.8818 26.7127 42.8903C26.4737 42.8988 26.2368 42.8428 26.0269 42.7283C25.8169 42.6138 25.6416 42.4449 25.5194 42.2394C25.3971 42.0338 25.3324 41.7992 25.332 41.56V41.5574Z" fill="white"/>
  <path d="M2.66797 32.0001C2.66797 15.8001 15.8013 2.66675 32.0013 2.66675C48.2013 2.66675 61.3346 15.8001 61.3346 32.0001C61.3346 48.2001 48.2013 61.3334 32.0013 61.3334C15.8013 61.3334 2.66797 48.2001 2.66797 32.0001ZM32.0013 6.66675C25.2825 6.66675 18.8389 9.33579 14.0879 14.0867C9.33701 18.8376 6.66797 25.2813 6.66797 32.0001C6.66797 38.7189 9.33701 45.1625 14.0879 49.9135C18.8389 54.6644 25.2825 57.3334 32.0013 57.3334C38.7201 57.3334 45.1638 54.6644 49.9147 49.9135C54.6656 45.1625 57.3346 38.7189 57.3346 32.0001C57.3346 25.2813 54.6656 18.8376 49.9147 14.0867C45.1638 9.33579 38.7201 6.66675 32.0013 6.66675Z" fill="white"/>
</svg>
                  </span>
	                <?php elseif ( $item['video_type'] == 'video_youtube' ):?>
                    <span class="play-youtube" data-videoid = "<?php echo $item['youtybe_video_id'];?>">
                      <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                        <path d="M25.333 41.5574V22.4427C25.3334 22.2035 25.3981 21.9689 25.5204 21.7633C25.6426 21.5578 25.8179 21.3889 26.0279 21.2744C26.2378 21.1599 26.4747 21.1039 26.7137 21.1124C26.9527 21.1209 27.1851 21.1935 27.3863 21.3227L42.2557 30.8774C42.444 30.998 42.5989 31.164 42.7062 31.3602C42.8135 31.5564 42.8697 31.7764 42.8697 32C42.8697 32.2236 42.8135 32.4436 42.7062 32.6398C42.5989 32.836 42.444 33.0021 42.2557 33.1227L27.3863 42.68C27.1851 42.8092 26.9527 42.8818 26.7137 42.8903C26.4747 42.8988 26.2378 42.8428 26.0279 42.7283C25.8179 42.6138 25.6426 42.4449 25.5204 42.2394C25.3981 42.0338 25.3334 41.7992 25.333 41.56V41.5574Z" fill="white"/>
                        <path d="M2.66699 32.0001C2.66699 15.8001 15.8003 2.66675 32.0003 2.66675C48.2003 2.66675 61.3337 15.8001 61.3337 32.0001C61.3337 48.2001 48.2003 61.3334 32.0003 61.3334C15.8003 61.3334 2.66699 48.2001 2.66699 32.0001ZM32.0003 6.66675C25.2815 6.66675 18.8379 9.33579 14.087 14.0867C9.33603 18.8376 6.66699 25.2813 6.66699 32.0001C6.66699 38.7189 9.33603 45.1625 14.087 49.9135C18.8379 54.6644 25.2815 57.3334 32.0003 57.3334C38.7191 57.3334 45.1628 54.6644 49.9137 49.9135C54.6646 45.1625 57.3337 38.7189 57.3337 32.0001C57.3337 25.2813 54.6646 18.8376 49.9137 14.0867C45.1628 9.33579 38.7191 6.66675 32.0003 6.66675Z" fill="white"/>
                      </svg>
                    </span>
	                <?php endif;?>
                </a>
	            <?php endif;?>
            </div>
            <div class="text-content">
              <h2 class="block-title small-title"><?php echo $item['title'];?></h2>
              <div class="text"><?php echo wpautop($item['text']);?></div>
            </div>
					</div>
					<?php endforeach;?>
				</div>
			</div>
		</section>
	<?php endif;?>

	<!-- Форма зворотнього звязку -->
<?php
	$contactFormTitle = carbon_get_post_meta(get_the_ID(), 'green_system_about_us_form_block_title'.green_system_lang_prefix());
	$contactFormText = carbon_get_post_meta(get_the_ID(), 'green_system_about_us_form_text'.green_system_lang_prefix());
	$contactFormKey = carbon_get_post_meta(get_the_ID(), 'green_system_about_us_form_kay'.green_system_lang_prefix());

	if ( $contactFormTitle && $contactFormText ):

		$args = array(
			'title' => $contactFormTitle,
			'text'  => $contactFormText,
      'page_kay' => $contactFormKey,
		)

		?>
		<?php get_template_part('template-parts/block-contact-form','', $args);?>
	<?php endif;?>
<?php get_footer();
