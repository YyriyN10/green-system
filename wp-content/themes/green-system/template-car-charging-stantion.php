<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки "Зарядні станнції для авто"
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package green_system
	 */
	get_header();
?>

	<!-- Головний екран -->
<?php
  $carChargingMainScreenTitle = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_main_screen_title'.green_system_lang_prefix());
	$carChargingMainScreenText = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_main_screen_text'.green_system_lang_prefix());
	$carChargingMainScreenImage = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_main_screen_image'.green_system_lang_prefix());

	if ( $carChargingMainScreenImage && $carChargingMainScreenText && $carChargingMainScreenTitle):
?>
	<section class="car-charging-main-screen" style="background-image: url('<?php echo $carChargingMainScreenImage;?>')">
    <div class="element"></div>
		<div class="container">
			<div class="row">
        <div class="text-content col-12">
          <h1 class="block-title big-title"><?php echo $carChargingMainScreenTitle;?></h1>
          <p class="subtitle"><?php echo $carChargingMainScreenText;?></p>
          <a href="#" rel="nofollow" class="button" data-bs-toggle="modal" data-bs-target="#formModal">
						<?php echo esc_html( pll__( 'Отримати консультацію' ) ); ?>
          </a>
        </div>
			</div>
		</div>
	</section>
<?php endif;?>

  <?php
      $carChargingWhyUsBlockTitle = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_why_us_title'.green_system_lang_prefix());
	    $carChargingWhyUsList = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_why_us_advantages_list'.green_system_lang_prefix());
	    $carChargingWhyUsPoster = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_why_us_image'.green_system_lang_prefix());
	    $carChargingWhyUsVideo = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_why_us_video'.green_system_lang_prefix());

      if( $carChargingWhyUsBlockTitle && $carChargingWhyUsList && $carChargingWhyUsPoster && $carChargingWhyUsVideo ):?>
      <!-- Чому ми -->
      <section class="car-charging-why-us">
        <div class="container">
          <div class="row">
            <div class="content col-12">
              <div class="text-content indent-top-big indent-bottom-big">
                <h2 class="block-title big-title"><?php echo $carChargingWhyUsBlockTitle;?></h2>
                <ul class="advantage-list">
                  <?php foreach( $carChargingWhyUsList as $item ):?>
                    <li class="advantage-list__item">
                      <div class="icon"><img src="<?php echo $item['icon'];?>" alt="" class="svg-pic"></div>
                      <div class="text"><?php echo wpautop($item['text']);?></div>
                    </li>
                  <?php endforeach;?>
                </ul>
              </div>
              <div class="video-wrapper">
                <div class="inner">
                  <img
                     class="lazy"
                     data-src="<?php echo wp_get_attachment_image_src($carChargingWhyUsPoster, 'full')[0];?>"
                     alt="<?php echo get_post_meta($carChargingWhyUsPoster, '_wp_attachment_image_alt', TRUE);?>"
                  >
                  <a href="#" rel="nofollow" class="play" data-video="<?php echo $carChargingWhyUsVideo;?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                      <path d="M25.332 41.5574V22.4427C25.3324 22.2035 25.3971 21.9689 25.5194 21.7633C25.6416 21.5578 25.8169 21.3889 26.0269 21.2744C26.2368 21.1599 26.4737 21.1039 26.7127 21.1124C26.9518 21.1209 27.1841 21.1935 27.3854 21.3227L42.2547 30.8774C42.443 30.998 42.5979 31.164 42.7052 31.3602C42.8125 31.5564 42.8687 31.7764 42.8687 32C42.8687 32.2236 42.8125 32.4436 42.7052 32.6398C42.5979 32.836 42.443 33.0021 42.2547 33.1227L27.3854 42.68C27.1841 42.8092 26.9518 42.8818 26.7127 42.8903C26.4737 42.8988 26.2368 42.8428 26.0269 42.7283C25.8169 42.6138 25.6416 42.4449 25.5194 42.2394C25.3971 42.0338 25.3324 41.7992 25.332 41.56V41.5574Z" fill="white"/>
                      <path d="M2.66797 32.0001C2.66797 15.8001 15.8013 2.66675 32.0013 2.66675C48.2013 2.66675 61.3346 15.8001 61.3346 32.0001C61.3346 48.2001 48.2013 61.3334 32.0013 61.3334C15.8013 61.3334 2.66797 48.2001 2.66797 32.0001ZM32.0013 6.66675C25.2825 6.66675 18.8389 9.33579 14.0879 14.0867C9.33701 18.8376 6.66797 25.2813 6.66797 32.0001C6.66797 38.7189 9.33701 45.1625 14.0879 49.9135C18.8389 54.6644 25.2825 57.3334 32.0013 57.3334C38.7201 57.3334 45.1638 54.6644 49.9147 49.9135C54.6656 45.1625 57.3346 38.7189 57.3346 32.0001C57.3346 25.2813 54.6656 18.8376 49.9147 14.0867C45.1638 9.33579 38.7201 6.66675 32.0013 6.66675Z" fill="white"/>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  <?php endif;?>
  <?php
      $сhargingStationsAtHomeTitle = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_home_stations_title'.green_system_lang_prefix());
	    $сhargingStationsAtHomeList = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_home_stations_advantages_list'.green_system_lang_prefix());

      if( $сhargingStationsAtHomeTitle && $сhargingStationsAtHomeList ):?>
      <!-- Зарядні станції вдома -->
      <section class="сharging-stations-at-home animation-tracking indent-top-big indent-bottom-big">
        <div class="container">
          <div class="row">
            <h2 class="block-title green-title col-12">
              <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                <path d="M18.6968 15.3033C18.2468 14.8533 17.6364 14.6004 17 14.6004C16.3636 14.6004 15.7532 14.8533 15.3032 15.3033C14.8532 15.7533 14.6004 16.3636 14.6004 17C14.6004 17.6364 14.8532 18.2468 15.3032 18.6968C15.7532 19.1468 16.3636 19.3996 17 19.3996C17.6364 19.3996 18.2468 19.1468 18.6968 18.6968C19.1468 18.2468 19.3996 17.6364 19.3996 17C19.3996 16.3636 19.1468 15.7533 18.6968 15.3033Z" fill="#599C12"/>
                <path d="M25.8955 22.5019C25.4455 22.0519 24.835 21.7991 24.1987 21.7991C23.5623 21.7991 22.9519 22.0519 22.5019 22.5019C22.0519 22.9519 21.7991 23.5623 21.7991 24.1987C21.7991 24.835 22.0519 25.4455 22.5019 25.8955C22.9519 26.3455 23.5623 26.5982 24.1987 26.5982C24.835 26.5982 25.4455 26.3455 25.8955 25.8955C26.3455 25.4455 26.5982 24.835 26.5982 24.1987C26.5982 23.5623 26.3455 22.9519 25.8955 22.5019Z" fill="#599C12"/>
                <path d="M33.0941 29.7005C32.6441 29.2505 32.0337 28.9978 31.3973 28.9978C30.761 28.9978 30.1505 29.2505 29.7005 29.7005C29.2505 30.1505 28.9978 30.761 28.9978 31.3973C28.9978 32.0337 29.2505 32.6441 29.7005 33.0941C30.1505 33.5441 30.761 33.7969 31.3973 33.7969C32.0337 33.7969 32.6441 33.5441 33.0941 33.0941C33.5441 32.6441 33.7969 32.0337 33.7969 31.3973C33.7969 30.761 33.5441 30.1505 33.0941 29.7005Z" fill="#599C12"/>
                <path d="M33.0941 15.3033C32.6441 14.8533 32.0337 14.6004 31.3973 14.6004C30.761 14.6004 30.1505 14.8533 29.7005 15.3033C29.2505 15.7533 28.9978 16.3636 28.9978 17C28.9978 17.6364 29.2505 18.2468 29.7005 18.6968C30.1505 19.1468 30.761 19.3996 31.3973 19.3996C32.0337 19.3996 32.6441 19.1468 33.0941 18.6968C33.5441 18.2468 33.7969 17.6364 33.7969 17C33.7969 16.3636 33.5441 15.7533 33.0941 15.3033Z" fill="#599C12"/>
                <path d="M11.4981 8.1046C11.0481 7.6546 10.4377 7.40179 9.80134 7.40179C9.16498 7.40179 8.55453 7.6546 8.10453 8.1046C7.65454 8.55459 7.40179 9.16495 7.40179 9.80134C7.40179 10.4377 7.65454 11.0481 8.10453 11.4981C8.55453 11.9481 9.16498 12.2009 9.80134 12.2009C10.4377 12.2009 11.0481 11.9481 11.4981 11.4981C11.9481 11.0481 12.2009 10.4377 12.2009 9.80134C12.2009 9.16495 11.9481 8.55459 11.4981 8.1046Z" fill="#599C12"/>
                <path d="M4.29948 0.905938C3.84949 0.455934 3.23904 0.203125 2.60268 0.203125C1.96632 0.203125 1.35587 0.455934 0.905872 0.905938C0.455875 1.35594 0.203125 1.96628 0.203125 2.60268C0.203125 3.23907 0.455875 3.84942 0.905872 4.29942C1.35587 4.74941 1.96632 5.00223 2.60268 5.00223C3.23904 5.00223 3.84949 4.74941 4.29948 4.29942C4.74948 3.84942 5.00223 3.23907 5.00223 2.60268C5.00223 1.96628 4.74948 1.35594 4.29948 0.905938Z" fill="#599C12"/>
                <path d="M33.0941 22.5019C32.6441 22.0519 32.0337 21.7991 31.3973 21.7991C30.761 21.7991 30.1505 22.0519 29.7005 22.5019C29.2505 22.9519 28.9978 23.5623 28.9978 24.1987C28.9978 24.835 29.2505 25.4455 29.7005 25.8955C30.1505 26.3455 30.761 26.5982 31.3973 26.5982C32.0337 26.5982 32.6441 26.3455 33.0941 25.8955C33.5441 25.4455 33.7969 24.835 33.7969 24.1987C33.7969 23.5623 33.5441 22.9519 33.0941 22.5019Z" fill="#599C12"/>
                <path d="M18.6968 29.7005C18.2468 29.2505 17.6364 28.9978 17 28.9978C16.3636 28.9978 15.7532 29.2505 15.3032 29.7005C14.8532 30.1505 14.6004 30.761 14.6004 31.3973C14.6004 32.0337 14.8532 32.6441 15.3032 33.0941C15.7532 33.5441 16.3636 33.7969 17 33.7969C17.6364 33.7969 18.2468 33.5441 18.6968 33.0941C19.1468 32.6441 19.3996 32.0337 19.3996 31.3973C19.3996 30.761 19.1468 30.1505 18.6968 29.7005Z" fill="#599C12"/>
                <path d="M25.8955 29.7005C25.4455 29.2505 24.835 28.9978 24.1987 28.9978C23.5623 28.9978 22.9519 29.2505 22.5019 29.7005C22.0519 30.1505 21.7991 30.761 21.7991 31.3973C21.7991 32.0337 22.0519 32.6441 22.5019 33.0941C22.9519 33.5441 23.5623 33.7969 24.1987 33.7969C24.835 33.7969 25.4455 33.5441 25.8955 33.0941C26.3455 32.6441 26.5982 32.0337 26.5982 31.3973C26.5982 30.761 26.3455 30.1505 25.8955 29.7005Z" fill="#599C12"/>
              </svg>
              <?php echo $сhargingStationsAtHomeTitle;?>
            </h2>
          </div>
	        <?php get_template_part('template-parts/solution-item-list', '', $сhargingStationsAtHomeList);?>
        </div>
      </section>
  <?php endif;?>

  <?php
      $callCarChargingTitle = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_call_title'.green_system_lang_prefix());
	    $callCarChargingText = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_call_text'.green_system_lang_prefix());

      if( $callCarChargingTitle && $callCarChargingText ):?>
      <!-- Заклик до дії -->
      <section class="call-car-сharging indent-top-big indent-bottom-big">
        <div class="container">
          <div class="row">
            <h2 class="block-title small-title col-lg-6"><?php echo $callCarChargingTitle;?></h2>
            <div class="text-content col-lg-6">
              <div class="text"><?php echo wpautop($callCarChargingText);?></div>
              <a href="#" rel="nofollow" class="button" data-bs-toggle="modal" data-bs-target="#formModal">
		            <?php echo esc_html( pll__( 'Отримати консультацію' ) ); ?>
              </a>
            </div>
          </div>
        </div>
      </section>
  <?php endif;?>

  <?php
      $businessOpportunityBlockTitle = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_business_opportunity_title'.green_system_lang_prefix());
	    $businessOpportunityText = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_business_opportunity_list'.green_system_lang_prefix());
	    $businessOpportunityImage = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_business_opportunity_image'.green_system_lang_prefix());

      if( $businessOpportunityBlockTitle && $businessOpportunityImage && $businessOpportunityText):?>
      <!-- Можливість для розвитрку бізнесу -->
      <section class="business-opportunity indent-top-big indent-bottom-big">
        <div class="container">
          <div class="row">
            <div class="pic-wrapper col-lg-6">
              <div class="pic">
                <img
                   class="lazy"
                   data-src="<?php echo wp_get_attachment_image_src($businessOpportunityImage, 'full')[0];?>"
                   alt="<?php echo get_post_meta($businessOpportunityImage, '_wp_attachment_image_alt', TRUE);?>"
                >
              </div>
              <svg class="dots-pic" width="204" height="348" viewBox="0 0 204 348" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="6" cy="342" r="2" transform="rotate(-90 6 342)" fill="#599C12"/>
                <circle cx="6" cy="334" r="2" transform="rotate(-90 6 334)" fill="#599C12"/>
                <circle cx="6" cy="326" r="2" transform="rotate(-90 6 326)" fill="#599C12"/>
                <circle cx="6" cy="318" r="2" transform="rotate(-90 6 318)" fill="#599C12"/>
                <circle cx="6" cy="310" r="2" transform="rotate(-90 6 310)" fill="#599C12"/>
                <circle cx="6" cy="302" r="2" transform="rotate(-90 6 302)" fill="#599C12"/>
                <circle cx="6" cy="294" r="2" transform="rotate(-90 6 294)" fill="#599C12"/>
                <circle cx="6" cy="286" r="2" transform="rotate(-90 6 286)" fill="#599C12"/>
                <circle cx="6" cy="278" r="2" transform="rotate(-90 6 278)" fill="#599C12"/>
                <circle cx="6" cy="270" r="2" transform="rotate(-90 6 270)" fill="#599C12"/>
                <circle cx="6" cy="262" r="2" transform="rotate(-90 6 262)" fill="#599C12"/>
                <circle cx="6" cy="254" r="2" transform="rotate(-90 6 254)" fill="#599C12"/>
                <circle cx="6" cy="246" r="2" transform="rotate(-90 6 246)" fill="#599C12"/>
                <circle cx="6" cy="238" r="2" transform="rotate(-90 6 238)" fill="#599C12"/>
                <circle cx="6" cy="230" r="2" transform="rotate(-90 6 230)" fill="#599C12"/>
                <circle cx="6" cy="222" r="2" transform="rotate(-90 6 222)" fill="#599C12"/>
                <circle cx="6" cy="214" r="2" transform="rotate(-90 6 214)" fill="#599C12"/>
                <circle cx="6" cy="206" r="2" transform="rotate(-90 6 206)" fill="#599C12"/>
                <circle cx="6" cy="198" r="2" transform="rotate(-90 6 198)" fill="#599C12"/>
                <circle cx="6" cy="190" r="2" transform="rotate(-90 6 190)" fill="#599C12"/>
                <circle cx="6" cy="182" r="2" transform="rotate(-90 6 182)" fill="#599C12"/>
                <circle cx="6" cy="174" r="2" transform="rotate(-90 6 174)" fill="#599C12"/>
                <circle cx="6" cy="166" r="2" transform="rotate(-90 6 166)" fill="#599C12"/>
                <circle cx="6" cy="158" r="2" transform="rotate(-90 6 158)" fill="#599C12"/>
                <circle cx="6" cy="150" r="2" transform="rotate(-90 6 150)" fill="#599C12"/>
                <circle cx="6" cy="142" r="2" transform="rotate(-90 6 142)" fill="#599C12"/>
                <circle cx="6" cy="134" r="2" transform="rotate(-90 6 134)" fill="#599C12"/>
                <circle cx="6" cy="126" r="2" transform="rotate(-90 6 126)" fill="#599C12"/>
                <circle cx="6" cy="118" r="2" transform="rotate(-90 6 118)" fill="#599C12"/>
                <circle cx="6" cy="110" r="2" transform="rotate(-90 6 110)" fill="#599C12"/>
                <circle cx="6" cy="102" r="2" transform="rotate(-90 6 102)" fill="#599C12"/>
                <circle cx="6" cy="94" r="2" transform="rotate(-90 6 94)" fill="#599C12"/>
                <circle cx="6" cy="86" r="2" transform="rotate(-90 6 86)" fill="#599C12"/>
                <circle cx="6" cy="78" r="2" transform="rotate(-90 6 78)" fill="#599C12"/>
                <circle cx="6" cy="70" r="2" transform="rotate(-90 6 70)" fill="#599C12"/>
                <circle cx="6" cy="62" r="2" transform="rotate(-90 6 62)" fill="#599C12"/>
                <circle cx="6" cy="54" r="2" transform="rotate(-90 6 54)" fill="#599C12"/>
                <circle cx="6" cy="46" r="2" transform="rotate(-90 6 46)" fill="#599C12"/>
                <circle cx="6" cy="38" r="2" transform="rotate(-90 6 38)" fill="#599C12"/>
                <circle cx="6" cy="30" r="2" transform="rotate(-90 6 30)" fill="#599C12"/>
                <circle cx="6" cy="22" r="2" transform="rotate(-90 6 22)" fill="#599C12"/>
                <circle cx="6" cy="14" r="2" transform="rotate(-90 6 14)" fill="#599C12"/>
                <circle cx="6" cy="6" r="2" transform="rotate(-90 6 6)" fill="#599C12"/>
                <circle cx="14" cy="342" r="2" transform="rotate(-90 14 342)" fill="#599C12"/>
                <circle cx="14" cy="334" r="2" transform="rotate(-90 14 334)" fill="#599C12"/>
                <circle cx="14" cy="326" r="2" transform="rotate(-90 14 326)" fill="#599C12"/>
                <circle cx="14" cy="318" r="2" transform="rotate(-90 14 318)" fill="#599C12"/>
                <circle cx="14" cy="310" r="2" transform="rotate(-90 14 310)" fill="#599C12"/>
                <circle cx="14" cy="302" r="2" transform="rotate(-90 14 302)" fill="#599C12"/>
                <circle cx="14" cy="294" r="2" transform="rotate(-90 14 294)" fill="#599C12"/>
                <circle cx="14" cy="286" r="2" transform="rotate(-90 14 286)" fill="#599C12"/>
                <circle cx="14" cy="278" r="2" transform="rotate(-90 14 278)" fill="#599C12"/>
                <circle cx="14" cy="270" r="2" transform="rotate(-90 14 270)" fill="#599C12"/>
                <circle cx="14" cy="262" r="2" transform="rotate(-90 14 262)" fill="#599C12"/>
                <circle cx="14" cy="254" r="2" transform="rotate(-90 14 254)" fill="#599C12"/>
                <circle cx="14" cy="246" r="2" transform="rotate(-90 14 246)" fill="#599C12"/>
                <circle cx="14" cy="238" r="2" transform="rotate(-90 14 238)" fill="#599C12"/>
                <circle cx="14" cy="230" r="2" transform="rotate(-90 14 230)" fill="#599C12"/>
                <circle cx="14" cy="222" r="2" transform="rotate(-90 14 222)" fill="#599C12"/>
                <circle cx="14" cy="214" r="2" transform="rotate(-90 14 214)" fill="#599C12"/>
                <circle cx="14" cy="206" r="2" transform="rotate(-90 14 206)" fill="#599C12"/>
                <circle cx="14" cy="198" r="2" transform="rotate(-90 14 198)" fill="#599C12"/>
                <circle cx="14" cy="190" r="2" transform="rotate(-90 14 190)" fill="#599C12"/>
                <circle cx="14" cy="182" r="2" transform="rotate(-90 14 182)" fill="#599C12"/>
                <circle cx="14" cy="174" r="2" transform="rotate(-90 14 174)" fill="#599C12"/>
                <circle cx="14" cy="166" r="2" transform="rotate(-90 14 166)" fill="#599C12"/>
                <circle cx="14" cy="158" r="2" transform="rotate(-90 14 158)" fill="#599C12"/>
                <circle cx="14" cy="150" r="2" transform="rotate(-90 14 150)" fill="#599C12"/>
                <circle cx="14" cy="142" r="2" transform="rotate(-90 14 142)" fill="#599C12"/>
                <circle cx="14" cy="134" r="2" transform="rotate(-90 14 134)" fill="#599C12"/>
                <circle cx="14" cy="126" r="2" transform="rotate(-90 14 126)" fill="#599C12"/>
                <circle cx="14" cy="118" r="2" transform="rotate(-90 14 118)" fill="#599C12"/>
                <circle cx="14" cy="110" r="2" transform="rotate(-90 14 110)" fill="#599C12"/>
                <circle cx="14" cy="102" r="2" transform="rotate(-90 14 102)" fill="#599C12"/>
                <circle cx="14" cy="94" r="2" transform="rotate(-90 14 94)" fill="#599C12"/>
                <circle cx="14" cy="86" r="2" transform="rotate(-90 14 86)" fill="#599C12"/>
                <circle cx="14" cy="78" r="2" transform="rotate(-90 14 78)" fill="#599C12"/>
                <circle cx="14" cy="70" r="2" transform="rotate(-90 14 70)" fill="#599C12"/>
                <circle cx="14" cy="62" r="2" transform="rotate(-90 14 62)" fill="#599C12"/>
                <circle cx="14" cy="54" r="2" transform="rotate(-90 14 54)" fill="#599C12"/>
                <circle cx="14" cy="46" r="2" transform="rotate(-90 14 46)" fill="#599C12"/>
                <circle cx="14" cy="38" r="2" transform="rotate(-90 14 38)" fill="#599C12"/>
                <circle cx="14" cy="30" r="2" transform="rotate(-90 14 30)" fill="#599C12"/>
                <circle cx="14" cy="22" r="2" transform="rotate(-90 14 22)" fill="#599C12"/>
                <circle cx="14" cy="14" r="2" transform="rotate(-90 14 14)" fill="#599C12"/>
                <circle cx="14" cy="6" r="2" transform="rotate(-90 14 6)" fill="#599C12"/>
                <circle cx="22" cy="342" r="2" transform="rotate(-90 22 342)" fill="#599C12"/>
                <circle cx="22" cy="334" r="2" transform="rotate(-90 22 334)" fill="#599C12"/>
                <circle cx="22" cy="326" r="2" transform="rotate(-90 22 326)" fill="#599C12"/>
                <circle cx="22" cy="318" r="2" transform="rotate(-90 22 318)" fill="#599C12"/>
                <circle cx="22" cy="310" r="2" transform="rotate(-90 22 310)" fill="#599C12"/>
                <circle cx="22" cy="302" r="2" transform="rotate(-90 22 302)" fill="#599C12"/>
                <circle cx="22" cy="294" r="2" transform="rotate(-90 22 294)" fill="#599C12"/>
                <circle cx="22" cy="286" r="2" transform="rotate(-90 22 286)" fill="#599C12"/>
                <circle cx="22" cy="278" r="2" transform="rotate(-90 22 278)" fill="#599C12"/>
                <circle cx="22" cy="270" r="2" transform="rotate(-90 22 270)" fill="#599C12"/>
                <circle cx="22" cy="262" r="2" transform="rotate(-90 22 262)" fill="#599C12"/>
                <circle cx="22" cy="254" r="2" transform="rotate(-90 22 254)" fill="#599C12"/>
                <circle cx="22" cy="246" r="2" transform="rotate(-90 22 246)" fill="#599C12"/>
                <circle cx="22" cy="238" r="2" transform="rotate(-90 22 238)" fill="#599C12"/>
                <circle cx="22" cy="230" r="2" transform="rotate(-90 22 230)" fill="#599C12"/>
                <circle cx="22" cy="222" r="2" transform="rotate(-90 22 222)" fill="#599C12"/>
                <circle cx="22" cy="214" r="2" transform="rotate(-90 22 214)" fill="#599C12"/>
                <circle cx="22" cy="206" r="2" transform="rotate(-90 22 206)" fill="#599C12"/>
                <circle cx="22" cy="198" r="2" transform="rotate(-90 22 198)" fill="#599C12"/>
                <circle cx="22" cy="190" r="2" transform="rotate(-90 22 190)" fill="#599C12"/>
                <circle cx="22" cy="182" r="2" transform="rotate(-90 22 182)" fill="#599C12"/>
                <circle cx="22" cy="174" r="2" transform="rotate(-90 22 174)" fill="#599C12"/>
                <circle cx="22" cy="166" r="2" transform="rotate(-90 22 166)" fill="#599C12"/>
                <circle cx="22" cy="158" r="2" transform="rotate(-90 22 158)" fill="#599C12"/>
                <circle cx="22" cy="150" r="2" transform="rotate(-90 22 150)" fill="#599C12"/>
                <circle cx="22" cy="142" r="2" transform="rotate(-90 22 142)" fill="#599C12"/>
                <circle cx="22" cy="134" r="2" transform="rotate(-90 22 134)" fill="#599C12"/>
                <circle cx="22" cy="126" r="2" transform="rotate(-90 22 126)" fill="#599C12"/>
                <circle cx="22" cy="118" r="2" transform="rotate(-90 22 118)" fill="#599C12"/>
                <circle cx="22" cy="110" r="2" transform="rotate(-90 22 110)" fill="#599C12"/>
                <circle cx="22" cy="102" r="2" transform="rotate(-90 22 102)" fill="#599C12"/>
                <circle cx="22" cy="94" r="2" transform="rotate(-90 22 94)" fill="#599C12"/>
                <circle cx="22" cy="86" r="2" transform="rotate(-90 22 86)" fill="#599C12"/>
                <circle cx="22" cy="78" r="2" transform="rotate(-90 22 78)" fill="#599C12"/>
                <circle cx="22" cy="70" r="2" transform="rotate(-90 22 70)" fill="#599C12"/>
                <circle cx="22" cy="62" r="2" transform="rotate(-90 22 62)" fill="#599C12"/>
                <circle cx="22" cy="54" r="2" transform="rotate(-90 22 54)" fill="#599C12"/>
                <circle cx="22" cy="46" r="2" transform="rotate(-90 22 46)" fill="#599C12"/>
                <circle cx="22" cy="38" r="2" transform="rotate(-90 22 38)" fill="#599C12"/>
                <circle cx="22" cy="30" r="2" transform="rotate(-90 22 30)" fill="#599C12"/>
                <circle cx="22" cy="22" r="2" transform="rotate(-90 22 22)" fill="#599C12"/>
                <circle cx="22" cy="14" r="2" transform="rotate(-90 22 14)" fill="#599C12"/>
                <circle cx="22" cy="6" r="2" transform="rotate(-90 22 6)" fill="#599C12"/>
                <circle cx="30" cy="342" r="2" transform="rotate(-90 30 342)" fill="#599C12"/>
                <circle cx="30" cy="334" r="2" transform="rotate(-90 30 334)" fill="#599C12"/>
                <circle cx="30" cy="326" r="2" transform="rotate(-90 30 326)" fill="#599C12"/>
                <circle cx="30" cy="318" r="2" transform="rotate(-90 30 318)" fill="#599C12"/>
                <circle cx="30" cy="310" r="2" transform="rotate(-90 30 310)" fill="#599C12"/>
                <circle cx="30" cy="302" r="2" transform="rotate(-90 30 302)" fill="#599C12"/>
                <circle cx="30" cy="294" r="2" transform="rotate(-90 30 294)" fill="#599C12"/>
                <circle cx="30" cy="286" r="2" transform="rotate(-90 30 286)" fill="#599C12"/>
                <circle cx="30" cy="278" r="2" transform="rotate(-90 30 278)" fill="#599C12"/>
                <circle cx="30" cy="270" r="2" transform="rotate(-90 30 270)" fill="#599C12"/>
                <circle cx="30" cy="262" r="2" transform="rotate(-90 30 262)" fill="#599C12"/>
                <circle cx="30" cy="254" r="2" transform="rotate(-90 30 254)" fill="#599C12"/>
                <circle cx="30" cy="246" r="2" transform="rotate(-90 30 246)" fill="#599C12"/>
                <circle cx="30" cy="238" r="2" transform="rotate(-90 30 238)" fill="#599C12"/>
                <circle cx="30" cy="230" r="2" transform="rotate(-90 30 230)" fill="#599C12"/>
                <circle cx="30" cy="222" r="2" transform="rotate(-90 30 222)" fill="#599C12"/>
                <circle cx="30" cy="214" r="2" transform="rotate(-90 30 214)" fill="#599C12"/>
                <circle cx="30" cy="206" r="2" transform="rotate(-90 30 206)" fill="#599C12"/>
                <circle cx="30" cy="198" r="2" transform="rotate(-90 30 198)" fill="#599C12"/>
                <circle cx="30" cy="190" r="2" transform="rotate(-90 30 190)" fill="#599C12"/>
                <circle cx="30" cy="182" r="2" transform="rotate(-90 30 182)" fill="#599C12"/>
                <circle cx="30" cy="174" r="2" transform="rotate(-90 30 174)" fill="#599C12"/>
                <circle cx="30" cy="166" r="2" transform="rotate(-90 30 166)" fill="#599C12"/>
                <circle cx="30" cy="158" r="2" transform="rotate(-90 30 158)" fill="#599C12"/>
                <circle cx="30" cy="150" r="2" transform="rotate(-90 30 150)" fill="#599C12"/>
                <circle cx="30" cy="142" r="2" transform="rotate(-90 30 142)" fill="#599C12"/>
                <circle cx="30" cy="134" r="2" transform="rotate(-90 30 134)" fill="#599C12"/>
                <circle cx="30" cy="126" r="2" transform="rotate(-90 30 126)" fill="#599C12"/>
                <circle cx="30" cy="118" r="2" transform="rotate(-90 30 118)" fill="#599C12"/>
                <circle cx="30" cy="110" r="2" transform="rotate(-90 30 110)" fill="#599C12"/>
                <circle cx="30" cy="102" r="2" transform="rotate(-90 30 102)" fill="#599C12"/>
                <circle cx="30" cy="94" r="2" transform="rotate(-90 30 94)" fill="#599C12"/>
                <circle cx="30" cy="86" r="2" transform="rotate(-90 30 86)" fill="#599C12"/>
                <circle cx="30" cy="78" r="2" transform="rotate(-90 30 78)" fill="#599C12"/>
                <circle cx="30" cy="70" r="2" transform="rotate(-90 30 70)" fill="#599C12"/>
                <circle cx="30" cy="62" r="2" transform="rotate(-90 30 62)" fill="#599C12"/>
                <circle cx="30" cy="54" r="2" transform="rotate(-90 30 54)" fill="#599C12"/>
                <circle cx="30" cy="46" r="2" transform="rotate(-90 30 46)" fill="#599C12"/>
                <circle cx="30" cy="38" r="2" transform="rotate(-90 30 38)" fill="#599C12"/>
                <circle cx="30" cy="30" r="2" transform="rotate(-90 30 30)" fill="#599C12"/>
                <circle cx="30" cy="22" r="2" transform="rotate(-90 30 22)" fill="#599C12"/>
                <circle cx="30" cy="14" r="2" transform="rotate(-90 30 14)" fill="#599C12"/>
                <circle cx="30" cy="6" r="2" transform="rotate(-90 30 6)" fill="#599C12"/>
                <circle cx="38" cy="342" r="2" transform="rotate(-90 38 342)" fill="#599C12"/>
                <circle cx="38" cy="334" r="2" transform="rotate(-90 38 334)" fill="#599C12"/>
                <circle cx="38" cy="326" r="2" transform="rotate(-90 38 326)" fill="#599C12"/>
                <circle cx="38" cy="318" r="2" transform="rotate(-90 38 318)" fill="#599C12"/>
                <circle cx="38" cy="310" r="2" transform="rotate(-90 38 310)" fill="#599C12"/>
                <circle cx="38" cy="302" r="2" transform="rotate(-90 38 302)" fill="#599C12"/>
                <circle cx="38" cy="294" r="2" transform="rotate(-90 38 294)" fill="#599C12"/>
                <circle cx="38" cy="286" r="2" transform="rotate(-90 38 286)" fill="#599C12"/>
                <circle cx="38" cy="278" r="2" transform="rotate(-90 38 278)" fill="#599C12"/>
                <circle cx="38" cy="270" r="2" transform="rotate(-90 38 270)" fill="#599C12"/>
                <circle cx="38" cy="262" r="2" transform="rotate(-90 38 262)" fill="#599C12"/>
                <circle cx="38" cy="254" r="2" transform="rotate(-90 38 254)" fill="#599C12"/>
                <circle cx="38" cy="246" r="2" transform="rotate(-90 38 246)" fill="#599C12"/>
                <circle cx="38" cy="238" r="2" transform="rotate(-90 38 238)" fill="#599C12"/>
                <circle cx="38" cy="230" r="2" transform="rotate(-90 38 230)" fill="#599C12"/>
                <circle cx="38" cy="222" r="2" transform="rotate(-90 38 222)" fill="#599C12"/>
                <circle cx="38" cy="214" r="2" transform="rotate(-90 38 214)" fill="#599C12"/>
                <circle cx="38" cy="206" r="2" transform="rotate(-90 38 206)" fill="#599C12"/>
                <circle cx="38" cy="198" r="2" transform="rotate(-90 38 198)" fill="#599C12"/>
                <circle cx="38" cy="190" r="2" transform="rotate(-90 38 190)" fill="#599C12"/>
                <circle cx="38" cy="182" r="2" transform="rotate(-90 38 182)" fill="#599C12"/>
                <circle cx="38" cy="174" r="2" transform="rotate(-90 38 174)" fill="#599C12"/>
                <circle cx="38" cy="166" r="2" transform="rotate(-90 38 166)" fill="#599C12"/>
                <circle cx="38" cy="158" r="2" transform="rotate(-90 38 158)" fill="#599C12"/>
                <circle cx="38" cy="150" r="2" transform="rotate(-90 38 150)" fill="#599C12"/>
                <circle cx="38" cy="142" r="2" transform="rotate(-90 38 142)" fill="#599C12"/>
                <circle cx="38" cy="134" r="2" transform="rotate(-90 38 134)" fill="#599C12"/>
                <circle cx="38" cy="126" r="2" transform="rotate(-90 38 126)" fill="#599C12"/>
                <circle cx="38" cy="118" r="2" transform="rotate(-90 38 118)" fill="#599C12"/>
                <circle cx="38" cy="110" r="2" transform="rotate(-90 38 110)" fill="#599C12"/>
                <circle cx="38" cy="102" r="2" transform="rotate(-90 38 102)" fill="#599C12"/>
                <circle cx="38" cy="94" r="2" transform="rotate(-90 38 94)" fill="#599C12"/>
                <circle cx="38" cy="86" r="2" transform="rotate(-90 38 86)" fill="#599C12"/>
                <circle cx="38" cy="78" r="2" transform="rotate(-90 38 78)" fill="#599C12"/>
                <circle cx="38" cy="70" r="2" transform="rotate(-90 38 70)" fill="#599C12"/>
                <circle cx="38" cy="62" r="2" transform="rotate(-90 38 62)" fill="#599C12"/>
                <circle cx="38" cy="54" r="2" transform="rotate(-90 38 54)" fill="#599C12"/>
                <circle cx="38" cy="46" r="2" transform="rotate(-90 38 46)" fill="#599C12"/>
                <circle cx="38" cy="38" r="2" transform="rotate(-90 38 38)" fill="#599C12"/>
                <circle cx="38" cy="30" r="2" transform="rotate(-90 38 30)" fill="#599C12"/>
                <circle cx="38" cy="22" r="2" transform="rotate(-90 38 22)" fill="#599C12"/>
                <circle cx="38" cy="14" r="2" transform="rotate(-90 38 14)" fill="#599C12"/>
                <circle cx="38" cy="6" r="2" transform="rotate(-90 38 6)" fill="#599C12"/>
                <circle cx="46" cy="342" r="2" transform="rotate(-90 46 342)" fill="#599C12"/>
                <circle cx="46" cy="334" r="2" transform="rotate(-90 46 334)" fill="#599C12"/>
                <circle cx="46" cy="326" r="2" transform="rotate(-90 46 326)" fill="#599C12"/>
                <circle cx="46" cy="318" r="2" transform="rotate(-90 46 318)" fill="#599C12"/>
                <circle cx="46" cy="310" r="2" transform="rotate(-90 46 310)" fill="#599C12"/>
                <circle cx="46" cy="302" r="2" transform="rotate(-90 46 302)" fill="#599C12"/>
                <circle cx="46" cy="294" r="2" transform="rotate(-90 46 294)" fill="#599C12"/>
                <circle cx="46" cy="286" r="2" transform="rotate(-90 46 286)" fill="#599C12"/>
                <circle cx="46" cy="278" r="2" transform="rotate(-90 46 278)" fill="#599C12"/>
                <circle cx="46" cy="270" r="2" transform="rotate(-90 46 270)" fill="#599C12"/>
                <circle cx="46" cy="262" r="2" transform="rotate(-90 46 262)" fill="#599C12"/>
                <circle cx="46" cy="254" r="2" transform="rotate(-90 46 254)" fill="#599C12"/>
                <circle cx="46" cy="246" r="2" transform="rotate(-90 46 246)" fill="#599C12"/>
                <circle cx="46" cy="238" r="2" transform="rotate(-90 46 238)" fill="#599C12"/>
                <circle cx="46" cy="230" r="2" transform="rotate(-90 46 230)" fill="#599C12"/>
                <circle cx="46" cy="222" r="2" transform="rotate(-90 46 222)" fill="#599C12"/>
                <circle cx="46" cy="214" r="2" transform="rotate(-90 46 214)" fill="#599C12"/>
                <circle cx="46" cy="206" r="2" transform="rotate(-90 46 206)" fill="#599C12"/>
                <circle cx="46" cy="198" r="2" transform="rotate(-90 46 198)" fill="#599C12"/>
                <circle cx="46" cy="190" r="2" transform="rotate(-90 46 190)" fill="#599C12"/>
                <circle cx="46" cy="182" r="2" transform="rotate(-90 46 182)" fill="#599C12"/>
                <circle cx="46" cy="174" r="2" transform="rotate(-90 46 174)" fill="#599C12"/>
                <circle cx="46" cy="166" r="2" transform="rotate(-90 46 166)" fill="#599C12"/>
                <circle cx="46" cy="158" r="2" transform="rotate(-90 46 158)" fill="#599C12"/>
                <circle cx="46" cy="150" r="2" transform="rotate(-90 46 150)" fill="#599C12"/>
                <circle cx="46" cy="142" r="2" transform="rotate(-90 46 142)" fill="#599C12"/>
                <circle cx="46" cy="134" r="2" transform="rotate(-90 46 134)" fill="#599C12"/>
                <circle cx="46" cy="126" r="2" transform="rotate(-90 46 126)" fill="#599C12"/>
                <circle cx="46" cy="118" r="2" transform="rotate(-90 46 118)" fill="#599C12"/>
                <circle cx="46" cy="110" r="2" transform="rotate(-90 46 110)" fill="#599C12"/>
                <circle cx="46" cy="102" r="2" transform="rotate(-90 46 102)" fill="#599C12"/>
                <circle cx="46" cy="94" r="2" transform="rotate(-90 46 94)" fill="#599C12"/>
                <circle cx="46" cy="86" r="2" transform="rotate(-90 46 86)" fill="#599C12"/>
                <circle cx="46" cy="78" r="2" transform="rotate(-90 46 78)" fill="#599C12"/>
                <circle cx="46" cy="70" r="2" transform="rotate(-90 46 70)" fill="#599C12"/>
                <circle cx="46" cy="62" r="2" transform="rotate(-90 46 62)" fill="#599C12"/>
                <circle cx="46" cy="54" r="2" transform="rotate(-90 46 54)" fill="#599C12"/>
                <circle cx="46" cy="46" r="2" transform="rotate(-90 46 46)" fill="#599C12"/>
                <circle cx="46" cy="38" r="2" transform="rotate(-90 46 38)" fill="#599C12"/>
                <circle cx="46" cy="30" r="2" transform="rotate(-90 46 30)" fill="#599C12"/>
                <circle cx="46" cy="22" r="2" transform="rotate(-90 46 22)" fill="#599C12"/>
                <circle cx="46" cy="14" r="2" transform="rotate(-90 46 14)" fill="#599C12"/>
                <circle cx="46" cy="6" r="2" transform="rotate(-90 46 6)" fill="#599C12"/>
                <circle cx="54" cy="342" r="2" transform="rotate(-90 54 342)" fill="#599C12"/>
                <circle cx="54" cy="334" r="2" transform="rotate(-90 54 334)" fill="#599C12"/>
                <circle cx="54" cy="326" r="2" transform="rotate(-90 54 326)" fill="#599C12"/>
                <circle cx="54" cy="318" r="2" transform="rotate(-90 54 318)" fill="#599C12"/>
                <circle cx="54" cy="310" r="2" transform="rotate(-90 54 310)" fill="#599C12"/>
                <circle cx="54" cy="302" r="2" transform="rotate(-90 54 302)" fill="#599C12"/>
                <circle cx="54" cy="294" r="2" transform="rotate(-90 54 294)" fill="#599C12"/>
                <circle cx="54" cy="286" r="2" transform="rotate(-90 54 286)" fill="#599C12"/>
                <circle cx="54" cy="278" r="2" transform="rotate(-90 54 278)" fill="#599C12"/>
                <circle cx="54" cy="270" r="2" transform="rotate(-90 54 270)" fill="#599C12"/>
                <circle cx="54" cy="262" r="2" transform="rotate(-90 54 262)" fill="#599C12"/>
                <circle cx="54" cy="254" r="2" transform="rotate(-90 54 254)" fill="#599C12"/>
                <circle cx="54" cy="246" r="2" transform="rotate(-90 54 246)" fill="#599C12"/>
                <circle cx="54" cy="238" r="2" transform="rotate(-90 54 238)" fill="#599C12"/>
                <circle cx="54" cy="230" r="2" transform="rotate(-90 54 230)" fill="#599C12"/>
                <circle cx="54" cy="222" r="2" transform="rotate(-90 54 222)" fill="#599C12"/>
                <circle cx="54" cy="214" r="2" transform="rotate(-90 54 214)" fill="#599C12"/>
                <circle cx="54" cy="206" r="2" transform="rotate(-90 54 206)" fill="#599C12"/>
                <circle cx="54" cy="198" r="2" transform="rotate(-90 54 198)" fill="#599C12"/>
                <circle cx="54" cy="190" r="2" transform="rotate(-90 54 190)" fill="#599C12"/>
                <circle cx="54" cy="182" r="2" transform="rotate(-90 54 182)" fill="#599C12"/>
                <circle cx="54" cy="174" r="2" transform="rotate(-90 54 174)" fill="#599C12"/>
                <circle cx="54" cy="166" r="2" transform="rotate(-90 54 166)" fill="#599C12"/>
                <circle cx="54" cy="158" r="2" transform="rotate(-90 54 158)" fill="#599C12"/>
                <circle cx="54" cy="150" r="2" transform="rotate(-90 54 150)" fill="#599C12"/>
                <circle cx="54" cy="142" r="2" transform="rotate(-90 54 142)" fill="#599C12"/>
                <circle cx="54" cy="134" r="2" transform="rotate(-90 54 134)" fill="#599C12"/>
                <circle cx="54" cy="126" r="2" transform="rotate(-90 54 126)" fill="#599C12"/>
                <circle cx="54" cy="118" r="2" transform="rotate(-90 54 118)" fill="#599C12"/>
                <circle cx="54" cy="110" r="2" transform="rotate(-90 54 110)" fill="#599C12"/>
                <circle cx="54" cy="102" r="2" transform="rotate(-90 54 102)" fill="#599C12"/>
                <circle cx="54" cy="94" r="2" transform="rotate(-90 54 94)" fill="#599C12"/>
                <circle cx="54" cy="86" r="2" transform="rotate(-90 54 86)" fill="#599C12"/>
                <circle cx="54" cy="78" r="2" transform="rotate(-90 54 78)" fill="#599C12"/>
                <circle cx="54" cy="70" r="2" transform="rotate(-90 54 70)" fill="#599C12"/>
                <circle cx="54" cy="62" r="2" transform="rotate(-90 54 62)" fill="#599C12"/>
                <circle cx="54" cy="54" r="2" transform="rotate(-90 54 54)" fill="#599C12"/>
                <circle cx="54" cy="46" r="2" transform="rotate(-90 54 46)" fill="#599C12"/>
                <circle cx="54" cy="38" r="2" transform="rotate(-90 54 38)" fill="#599C12"/>
                <circle cx="54" cy="30" r="2" transform="rotate(-90 54 30)" fill="#599C12"/>
                <circle cx="54" cy="22" r="2" transform="rotate(-90 54 22)" fill="#599C12"/>
                <circle cx="54" cy="14" r="2" transform="rotate(-90 54 14)" fill="#599C12"/>
                <circle cx="54" cy="6" r="2" transform="rotate(-90 54 6)" fill="#599C12"/>
                <circle cx="62" cy="342" r="2" transform="rotate(-90 62 342)" fill="#599C12"/>
                <circle cx="62" cy="334" r="2" transform="rotate(-90 62 334)" fill="#599C12"/>
                <circle cx="62" cy="326" r="2" transform="rotate(-90 62 326)" fill="#599C12"/>
                <circle cx="62" cy="318" r="2" transform="rotate(-90 62 318)" fill="#599C12"/>
                <circle cx="62" cy="310" r="2" transform="rotate(-90 62 310)" fill="#599C12"/>
                <circle cx="62" cy="302" r="2" transform="rotate(-90 62 302)" fill="#599C12"/>
                <circle cx="62" cy="294" r="2" transform="rotate(-90 62 294)" fill="#599C12"/>
                <circle cx="62" cy="286" r="2" transform="rotate(-90 62 286)" fill="#599C12"/>
                <circle cx="62" cy="278" r="2" transform="rotate(-90 62 278)" fill="#599C12"/>
                <circle cx="62" cy="270" r="2" transform="rotate(-90 62 270)" fill="#599C12"/>
                <circle cx="62" cy="262" r="2" transform="rotate(-90 62 262)" fill="#599C12"/>
                <circle cx="62" cy="254" r="2" transform="rotate(-90 62 254)" fill="#599C12"/>
                <circle cx="62" cy="246" r="2" transform="rotate(-90 62 246)" fill="#599C12"/>
                <circle cx="62" cy="238" r="2" transform="rotate(-90 62 238)" fill="#599C12"/>
                <circle cx="62" cy="230" r="2" transform="rotate(-90 62 230)" fill="#599C12"/>
                <circle cx="62" cy="222" r="2" transform="rotate(-90 62 222)" fill="#599C12"/>
                <circle cx="62" cy="214" r="2" transform="rotate(-90 62 214)" fill="#599C12"/>
                <circle cx="62" cy="206" r="2" transform="rotate(-90 62 206)" fill="#599C12"/>
                <circle cx="62" cy="198" r="2" transform="rotate(-90 62 198)" fill="#599C12"/>
                <circle cx="62" cy="190" r="2" transform="rotate(-90 62 190)" fill="#599C12"/>
                <circle cx="62" cy="182" r="2" transform="rotate(-90 62 182)" fill="#599C12"/>
                <circle cx="62" cy="174" r="2" transform="rotate(-90 62 174)" fill="#599C12"/>
                <circle cx="62" cy="166" r="2" transform="rotate(-90 62 166)" fill="#599C12"/>
                <circle cx="62" cy="158" r="2" transform="rotate(-90 62 158)" fill="#599C12"/>
                <circle cx="62" cy="150" r="2" transform="rotate(-90 62 150)" fill="#599C12"/>
                <circle cx="62" cy="142" r="2" transform="rotate(-90 62 142)" fill="#599C12"/>
                <circle cx="62" cy="134" r="2" transform="rotate(-90 62 134)" fill="#599C12"/>
                <circle cx="62" cy="126" r="2" transform="rotate(-90 62 126)" fill="#599C12"/>
                <circle cx="62" cy="118" r="2" transform="rotate(-90 62 118)" fill="#599C12"/>
                <circle cx="62" cy="110" r="2" transform="rotate(-90 62 110)" fill="#599C12"/>
                <circle cx="62" cy="102" r="2" transform="rotate(-90 62 102)" fill="#599C12"/>
                <circle cx="62" cy="94" r="2" transform="rotate(-90 62 94)" fill="#599C12"/>
                <circle cx="62" cy="86" r="2" transform="rotate(-90 62 86)" fill="#599C12"/>
                <circle cx="62" cy="78" r="2" transform="rotate(-90 62 78)" fill="#599C12"/>
                <circle cx="62" cy="70" r="2" transform="rotate(-90 62 70)" fill="#599C12"/>
                <circle cx="62" cy="62" r="2" transform="rotate(-90 62 62)" fill="#599C12"/>
                <circle cx="62" cy="54" r="2" transform="rotate(-90 62 54)" fill="#599C12"/>
                <circle cx="62" cy="46" r="2" transform="rotate(-90 62 46)" fill="#599C12"/>
                <circle cx="62" cy="38" r="2" transform="rotate(-90 62 38)" fill="#599C12"/>
                <circle cx="62" cy="30" r="2" transform="rotate(-90 62 30)" fill="#599C12"/>
                <circle cx="62" cy="22" r="2" transform="rotate(-90 62 22)" fill="#599C12"/>
                <circle cx="62" cy="14" r="2" transform="rotate(-90 62 14)" fill="#599C12"/>
                <circle cx="62" cy="6" r="2" transform="rotate(-90 62 6)" fill="#599C12"/>
                <circle cx="70" cy="342" r="2" transform="rotate(-90 70 342)" fill="#599C12"/>
                <circle cx="70" cy="334" r="2" transform="rotate(-90 70 334)" fill="#599C12"/>
                <circle cx="70" cy="326" r="2" transform="rotate(-90 70 326)" fill="#599C12"/>
                <circle cx="70" cy="318" r="2" transform="rotate(-90 70 318)" fill="#599C12"/>
                <circle cx="70" cy="310" r="2" transform="rotate(-90 70 310)" fill="#599C12"/>
                <circle cx="70" cy="302" r="2" transform="rotate(-90 70 302)" fill="#599C12"/>
                <circle cx="70" cy="294" r="2" transform="rotate(-90 70 294)" fill="#599C12"/>
                <circle cx="70" cy="286" r="2" transform="rotate(-90 70 286)" fill="#599C12"/>
                <circle cx="70" cy="278" r="2" transform="rotate(-90 70 278)" fill="#599C12"/>
                <circle cx="70" cy="270" r="2" transform="rotate(-90 70 270)" fill="#599C12"/>
                <circle cx="70" cy="262" r="2" transform="rotate(-90 70 262)" fill="#599C12"/>
                <circle cx="70" cy="254" r="2" transform="rotate(-90 70 254)" fill="#599C12"/>
                <circle cx="70" cy="246" r="2" transform="rotate(-90 70 246)" fill="#599C12"/>
                <circle cx="70" cy="238" r="2" transform="rotate(-90 70 238)" fill="#599C12"/>
                <circle cx="70" cy="230" r="2" transform="rotate(-90 70 230)" fill="#599C12"/>
                <circle cx="70" cy="222" r="2" transform="rotate(-90 70 222)" fill="#599C12"/>
                <circle cx="70" cy="214" r="2" transform="rotate(-90 70 214)" fill="#599C12"/>
                <circle cx="70" cy="206" r="2" transform="rotate(-90 70 206)" fill="#599C12"/>
                <circle cx="70" cy="198" r="2" transform="rotate(-90 70 198)" fill="#599C12"/>
                <circle cx="70" cy="190" r="2" transform="rotate(-90 70 190)" fill="#599C12"/>
                <circle cx="70" cy="182" r="2" transform="rotate(-90 70 182)" fill="#599C12"/>
                <circle cx="70" cy="174" r="2" transform="rotate(-90 70 174)" fill="#599C12"/>
                <circle cx="70" cy="166" r="2" transform="rotate(-90 70 166)" fill="#599C12"/>
                <circle cx="70" cy="158" r="2" transform="rotate(-90 70 158)" fill="#599C12"/>
                <circle cx="70" cy="150" r="2" transform="rotate(-90 70 150)" fill="#599C12"/>
                <circle cx="70" cy="142" r="2" transform="rotate(-90 70 142)" fill="#599C12"/>
                <circle cx="70" cy="134" r="2" transform="rotate(-90 70 134)" fill="#599C12"/>
                <circle cx="70" cy="126" r="2" transform="rotate(-90 70 126)" fill="#599C12"/>
                <circle cx="70" cy="118" r="2" transform="rotate(-90 70 118)" fill="#599C12"/>
                <circle cx="70" cy="110" r="2" transform="rotate(-90 70 110)" fill="#599C12"/>
                <circle cx="70" cy="102" r="2" transform="rotate(-90 70 102)" fill="#599C12"/>
                <circle cx="70" cy="94" r="2" transform="rotate(-90 70 94)" fill="#599C12"/>
                <circle cx="70" cy="86" r="2" transform="rotate(-90 70 86)" fill="#599C12"/>
                <circle cx="70" cy="78" r="2" transform="rotate(-90 70 78)" fill="#599C12"/>
                <circle cx="70" cy="70" r="2" transform="rotate(-90 70 70)" fill="#599C12"/>
                <circle cx="70" cy="62" r="2" transform="rotate(-90 70 62)" fill="#599C12"/>
                <circle cx="70" cy="54" r="2" transform="rotate(-90 70 54)" fill="#599C12"/>
                <circle cx="70" cy="46" r="2" transform="rotate(-90 70 46)" fill="#599C12"/>
                <circle cx="70" cy="38" r="2" transform="rotate(-90 70 38)" fill="#599C12"/>
                <circle cx="70" cy="30" r="2" transform="rotate(-90 70 30)" fill="#599C12"/>
                <circle cx="70" cy="22" r="2" transform="rotate(-90 70 22)" fill="#599C12"/>
                <circle cx="70" cy="14" r="2" transform="rotate(-90 70 14)" fill="#599C12"/>
                <circle cx="70" cy="6" r="2" transform="rotate(-90 70 6)" fill="#599C12"/>
                <circle cx="78" cy="342" r="2" transform="rotate(-90 78 342)" fill="#599C12"/>
                <circle cx="78" cy="334" r="2" transform="rotate(-90 78 334)" fill="#599C12"/>
                <circle cx="78" cy="326" r="2" transform="rotate(-90 78 326)" fill="#599C12"/>
                <circle cx="78" cy="318" r="2" transform="rotate(-90 78 318)" fill="#599C12"/>
                <circle cx="78" cy="310" r="2" transform="rotate(-90 78 310)" fill="#599C12"/>
                <circle cx="78" cy="302" r="2" transform="rotate(-90 78 302)" fill="#599C12"/>
                <circle cx="78" cy="294" r="2" transform="rotate(-90 78 294)" fill="#599C12"/>
                <circle cx="78" cy="286" r="2" transform="rotate(-90 78 286)" fill="#599C12"/>
                <circle cx="78" cy="278" r="2" transform="rotate(-90 78 278)" fill="#599C12"/>
                <circle cx="78" cy="270" r="2" transform="rotate(-90 78 270)" fill="#599C12"/>
                <circle cx="78" cy="262" r="2" transform="rotate(-90 78 262)" fill="#599C12"/>
                <circle cx="78" cy="254" r="2" transform="rotate(-90 78 254)" fill="#599C12"/>
                <circle cx="78" cy="246" r="2" transform="rotate(-90 78 246)" fill="#599C12"/>
                <circle cx="78" cy="238" r="2" transform="rotate(-90 78 238)" fill="#599C12"/>
                <circle cx="78" cy="230" r="2" transform="rotate(-90 78 230)" fill="#599C12"/>
                <circle cx="78" cy="222" r="2" transform="rotate(-90 78 222)" fill="#599C12"/>
                <circle cx="78" cy="214" r="2" transform="rotate(-90 78 214)" fill="#599C12"/>
                <circle cx="78" cy="206" r="2" transform="rotate(-90 78 206)" fill="#599C12"/>
                <circle cx="78" cy="198" r="2" transform="rotate(-90 78 198)" fill="#599C12"/>
                <circle cx="78" cy="190" r="2" transform="rotate(-90 78 190)" fill="#599C12"/>
                <circle cx="78" cy="182" r="2" transform="rotate(-90 78 182)" fill="#599C12"/>
                <circle cx="78" cy="174" r="2" transform="rotate(-90 78 174)" fill="#599C12"/>
                <circle cx="78" cy="166" r="2" transform="rotate(-90 78 166)" fill="#599C12"/>
                <circle cx="78" cy="158" r="2" transform="rotate(-90 78 158)" fill="#599C12"/>
                <circle cx="78" cy="150" r="2" transform="rotate(-90 78 150)" fill="#599C12"/>
                <circle cx="78" cy="142" r="2" transform="rotate(-90 78 142)" fill="#599C12"/>
                <circle cx="78" cy="134" r="2" transform="rotate(-90 78 134)" fill="#599C12"/>
                <circle cx="78" cy="126" r="2" transform="rotate(-90 78 126)" fill="#599C12"/>
                <circle cx="78" cy="118" r="2" transform="rotate(-90 78 118)" fill="#599C12"/>
                <circle cx="78" cy="110" r="2" transform="rotate(-90 78 110)" fill="#599C12"/>
                <circle cx="78" cy="102" r="2" transform="rotate(-90 78 102)" fill="#599C12"/>
                <circle cx="78" cy="94" r="2" transform="rotate(-90 78 94)" fill="#599C12"/>
                <circle cx="78" cy="86" r="2" transform="rotate(-90 78 86)" fill="#599C12"/>
                <circle cx="78" cy="78" r="2" transform="rotate(-90 78 78)" fill="#599C12"/>
                <circle cx="78" cy="70" r="2" transform="rotate(-90 78 70)" fill="#599C12"/>
                <circle cx="78" cy="62" r="2" transform="rotate(-90 78 62)" fill="#599C12"/>
                <circle cx="78" cy="54" r="2" transform="rotate(-90 78 54)" fill="#599C12"/>
                <circle cx="78" cy="46" r="2" transform="rotate(-90 78 46)" fill="#599C12"/>
                <circle cx="78" cy="38" r="2" transform="rotate(-90 78 38)" fill="#599C12"/>
                <circle cx="78" cy="30" r="2" transform="rotate(-90 78 30)" fill="#599C12"/>
                <circle cx="78" cy="22" r="2" transform="rotate(-90 78 22)" fill="#599C12"/>
                <circle cx="78" cy="14" r="2" transform="rotate(-90 78 14)" fill="#599C12"/>
                <circle cx="78" cy="6" r="2" transform="rotate(-90 78 6)" fill="#599C12"/>
                <circle cx="86" cy="342" r="2" transform="rotate(-90 86 342)" fill="#599C12"/>
                <circle cx="86" cy="334" r="2" transform="rotate(-90 86 334)" fill="#599C12"/>
                <circle cx="86" cy="326" r="2" transform="rotate(-90 86 326)" fill="#599C12"/>
                <circle cx="86" cy="318" r="2" transform="rotate(-90 86 318)" fill="#599C12"/>
                <circle cx="86" cy="310" r="2" transform="rotate(-90 86 310)" fill="#599C12"/>
                <circle cx="86" cy="302" r="2" transform="rotate(-90 86 302)" fill="#599C12"/>
                <circle cx="86" cy="294" r="2" transform="rotate(-90 86 294)" fill="#599C12"/>
                <circle cx="86" cy="286" r="2" transform="rotate(-90 86 286)" fill="#599C12"/>
                <circle cx="86" cy="278" r="2" transform="rotate(-90 86 278)" fill="#599C12"/>
                <circle cx="86" cy="270" r="2" transform="rotate(-90 86 270)" fill="#599C12"/>
                <circle cx="86" cy="262" r="2" transform="rotate(-90 86 262)" fill="#599C12"/>
                <circle cx="86" cy="254" r="2" transform="rotate(-90 86 254)" fill="#599C12"/>
                <circle cx="86" cy="246" r="2" transform="rotate(-90 86 246)" fill="#599C12"/>
                <circle cx="86" cy="238" r="2" transform="rotate(-90 86 238)" fill="#599C12"/>
                <circle cx="86" cy="230" r="2" transform="rotate(-90 86 230)" fill="#599C12"/>
                <circle cx="86" cy="222" r="2" transform="rotate(-90 86 222)" fill="#599C12"/>
                <circle cx="86" cy="214" r="2" transform="rotate(-90 86 214)" fill="#599C12"/>
                <circle cx="86" cy="206" r="2" transform="rotate(-90 86 206)" fill="#599C12"/>
                <circle cx="86" cy="198" r="2" transform="rotate(-90 86 198)" fill="#599C12"/>
                <circle cx="86" cy="190" r="2" transform="rotate(-90 86 190)" fill="#599C12"/>
                <circle cx="86" cy="182" r="2" transform="rotate(-90 86 182)" fill="#599C12"/>
                <circle cx="86" cy="174" r="2" transform="rotate(-90 86 174)" fill="#599C12"/>
                <circle cx="86" cy="166" r="2" transform="rotate(-90 86 166)" fill="#599C12"/>
                <circle cx="86" cy="158" r="2" transform="rotate(-90 86 158)" fill="#599C12"/>
                <circle cx="86" cy="150" r="2" transform="rotate(-90 86 150)" fill="#599C12"/>
                <circle cx="86" cy="142" r="2" transform="rotate(-90 86 142)" fill="#599C12"/>
                <circle cx="86" cy="134" r="2" transform="rotate(-90 86 134)" fill="#599C12"/>
                <circle cx="86" cy="126" r="2" transform="rotate(-90 86 126)" fill="#599C12"/>
                <circle cx="86" cy="118" r="2" transform="rotate(-90 86 118)" fill="#599C12"/>
                <circle cx="86" cy="110" r="2" transform="rotate(-90 86 110)" fill="#599C12"/>
                <circle cx="86" cy="102" r="2" transform="rotate(-90 86 102)" fill="#599C12"/>
                <circle cx="86" cy="94" r="2" transform="rotate(-90 86 94)" fill="#599C12"/>
                <circle cx="86" cy="86" r="2" transform="rotate(-90 86 86)" fill="#599C12"/>
                <circle cx="86" cy="78" r="2" transform="rotate(-90 86 78)" fill="#599C12"/>
                <circle cx="86" cy="70" r="2" transform="rotate(-90 86 70)" fill="#599C12"/>
                <circle cx="86" cy="62" r="2" transform="rotate(-90 86 62)" fill="#599C12"/>
                <circle cx="86" cy="54" r="2" transform="rotate(-90 86 54)" fill="#599C12"/>
                <circle cx="86" cy="46" r="2" transform="rotate(-90 86 46)" fill="#599C12"/>
                <circle cx="86" cy="38" r="2" transform="rotate(-90 86 38)" fill="#599C12"/>
                <circle cx="86" cy="30" r="2" transform="rotate(-90 86 30)" fill="#599C12"/>
                <circle cx="86" cy="22" r="2" transform="rotate(-90 86 22)" fill="#599C12"/>
                <circle cx="86" cy="14" r="2" transform="rotate(-90 86 14)" fill="#599C12"/>
                <circle cx="86" cy="6" r="2" transform="rotate(-90 86 6)" fill="#599C12"/>
                <circle cx="94" cy="342" r="2" transform="rotate(-90 94 342)" fill="#599C12"/>
                <circle cx="94" cy="334" r="2" transform="rotate(-90 94 334)" fill="#599C12"/>
                <circle cx="94" cy="326" r="2" transform="rotate(-90 94 326)" fill="#599C12"/>
                <circle cx="94" cy="318" r="2" transform="rotate(-90 94 318)" fill="#599C12"/>
                <circle cx="94" cy="310" r="2" transform="rotate(-90 94 310)" fill="#599C12"/>
                <circle cx="94" cy="302" r="2" transform="rotate(-90 94 302)" fill="#599C12"/>
                <circle cx="94" cy="294" r="2" transform="rotate(-90 94 294)" fill="#599C12"/>
                <circle cx="94" cy="286" r="2" transform="rotate(-90 94 286)" fill="#599C12"/>
                <circle cx="94" cy="278" r="2" transform="rotate(-90 94 278)" fill="#599C12"/>
                <circle cx="94" cy="270" r="2" transform="rotate(-90 94 270)" fill="#599C12"/>
                <circle cx="94" cy="262" r="2" transform="rotate(-90 94 262)" fill="#599C12"/>
                <circle cx="94" cy="254" r="2" transform="rotate(-90 94 254)" fill="#599C12"/>
                <circle cx="94" cy="246" r="2" transform="rotate(-90 94 246)" fill="#599C12"/>
                <circle cx="94" cy="238" r="2" transform="rotate(-90 94 238)" fill="#599C12"/>
                <circle cx="94" cy="230" r="2" transform="rotate(-90 94 230)" fill="#599C12"/>
                <circle cx="94" cy="222" r="2" transform="rotate(-90 94 222)" fill="#599C12"/>
                <circle cx="94" cy="214" r="2" transform="rotate(-90 94 214)" fill="#599C12"/>
                <circle cx="94" cy="206" r="2" transform="rotate(-90 94 206)" fill="#599C12"/>
                <circle cx="94" cy="198" r="2" transform="rotate(-90 94 198)" fill="#599C12"/>
                <circle cx="94" cy="190" r="2" transform="rotate(-90 94 190)" fill="#599C12"/>
                <circle cx="94" cy="182" r="2" transform="rotate(-90 94 182)" fill="#599C12"/>
                <circle cx="94" cy="174" r="2" transform="rotate(-90 94 174)" fill="#599C12"/>
                <circle cx="94" cy="166" r="2" transform="rotate(-90 94 166)" fill="#599C12"/>
                <circle cx="94" cy="158" r="2" transform="rotate(-90 94 158)" fill="#599C12"/>
                <circle cx="94" cy="150" r="2" transform="rotate(-90 94 150)" fill="#599C12"/>
                <circle cx="94" cy="142" r="2" transform="rotate(-90 94 142)" fill="#599C12"/>
                <circle cx="94" cy="134" r="2" transform="rotate(-90 94 134)" fill="#599C12"/>
                <circle cx="94" cy="126" r="2" transform="rotate(-90 94 126)" fill="#599C12"/>
                <circle cx="94" cy="118" r="2" transform="rotate(-90 94 118)" fill="#599C12"/>
                <circle cx="94" cy="110" r="2" transform="rotate(-90 94 110)" fill="#599C12"/>
                <circle cx="94" cy="102" r="2" transform="rotate(-90 94 102)" fill="#599C12"/>
                <circle cx="94" cy="94" r="2" transform="rotate(-90 94 94)" fill="#599C12"/>
                <circle cx="94" cy="86" r="2" transform="rotate(-90 94 86)" fill="#599C12"/>
                <circle cx="94" cy="78" r="2" transform="rotate(-90 94 78)" fill="#599C12"/>
                <circle cx="94" cy="70" r="2" transform="rotate(-90 94 70)" fill="#599C12"/>
                <circle cx="94" cy="62" r="2" transform="rotate(-90 94 62)" fill="#599C12"/>
                <circle cx="94" cy="54" r="2" transform="rotate(-90 94 54)" fill="#599C12"/>
                <circle cx="94" cy="46" r="2" transform="rotate(-90 94 46)" fill="#599C12"/>
                <circle cx="94" cy="38" r="2" transform="rotate(-90 94 38)" fill="#599C12"/>
                <circle cx="94" cy="30" r="2" transform="rotate(-90 94 30)" fill="#599C12"/>
                <circle cx="94" cy="22" r="2" transform="rotate(-90 94 22)" fill="#599C12"/>
                <circle cx="94" cy="14" r="2" transform="rotate(-90 94 14)" fill="#599C12"/>
                <circle cx="94" cy="6" r="2" transform="rotate(-90 94 6)" fill="#599C12"/>
                <circle cx="102" cy="342" r="2" transform="rotate(-90 102 342)" fill="#599C12"/>
                <circle cx="102" cy="334" r="2" transform="rotate(-90 102 334)" fill="#599C12"/>
                <circle cx="102" cy="326" r="2" transform="rotate(-90 102 326)" fill="#599C12"/>
                <circle cx="102" cy="318" r="2" transform="rotate(-90 102 318)" fill="#599C12"/>
                <circle cx="102" cy="310" r="2" transform="rotate(-90 102 310)" fill="#599C12"/>
                <circle cx="102" cy="302" r="2" transform="rotate(-90 102 302)" fill="#599C12"/>
                <circle cx="102" cy="294" r="2" transform="rotate(-90 102 294)" fill="#599C12"/>
                <circle cx="102" cy="286" r="2" transform="rotate(-90 102 286)" fill="#599C12"/>
                <circle cx="102" cy="278" r="2" transform="rotate(-90 102 278)" fill="#599C12"/>
                <circle cx="102" cy="270" r="2" transform="rotate(-90 102 270)" fill="#599C12"/>
                <circle cx="102" cy="262" r="2" transform="rotate(-90 102 262)" fill="#599C12"/>
                <circle cx="102" cy="254" r="2" transform="rotate(-90 102 254)" fill="#599C12"/>
                <circle cx="102" cy="246" r="2" transform="rotate(-90 102 246)" fill="#599C12"/>
                <circle cx="102" cy="238" r="2" transform="rotate(-90 102 238)" fill="#599C12"/>
                <circle cx="102" cy="230" r="2" transform="rotate(-90 102 230)" fill="#599C12"/>
                <circle cx="102" cy="222" r="2" transform="rotate(-90 102 222)" fill="#599C12"/>
                <circle cx="102" cy="214" r="2" transform="rotate(-90 102 214)" fill="#599C12"/>
                <circle cx="102" cy="206" r="2" transform="rotate(-90 102 206)" fill="#599C12"/>
                <circle cx="102" cy="198" r="2" transform="rotate(-90 102 198)" fill="#599C12"/>
                <circle cx="102" cy="190" r="2" transform="rotate(-90 102 190)" fill="#599C12"/>
                <circle cx="102" cy="182" r="2" transform="rotate(-90 102 182)" fill="#599C12"/>
                <circle cx="102" cy="174" r="2" transform="rotate(-90 102 174)" fill="#599C12"/>
                <circle cx="102" cy="166" r="2" transform="rotate(-90 102 166)" fill="#599C12"/>
                <circle cx="102" cy="158" r="2" transform="rotate(-90 102 158)" fill="#599C12"/>
                <circle cx="102" cy="150" r="2" transform="rotate(-90 102 150)" fill="#599C12"/>
                <circle cx="102" cy="142" r="2" transform="rotate(-90 102 142)" fill="#599C12"/>
                <circle cx="102" cy="134" r="2" transform="rotate(-90 102 134)" fill="#599C12"/>
                <circle cx="102" cy="126" r="2" transform="rotate(-90 102 126)" fill="#599C12"/>
                <circle cx="102" cy="118" r="2" transform="rotate(-90 102 118)" fill="#599C12"/>
                <circle cx="102" cy="110" r="2" transform="rotate(-90 102 110)" fill="#599C12"/>
                <circle cx="102" cy="102" r="2" transform="rotate(-90 102 102)" fill="#599C12"/>
                <circle cx="102" cy="94" r="2" transform="rotate(-90 102 94)" fill="#599C12"/>
                <circle cx="102" cy="86" r="2" transform="rotate(-90 102 86)" fill="#599C12"/>
                <circle cx="102" cy="78" r="2" transform="rotate(-90 102 78)" fill="#599C12"/>
                <circle cx="102" cy="70" r="2" transform="rotate(-90 102 70)" fill="#599C12"/>
                <circle cx="102" cy="62" r="2" transform="rotate(-90 102 62)" fill="#599C12"/>
                <circle cx="102" cy="54" r="2" transform="rotate(-90 102 54)" fill="#599C12"/>
                <circle cx="102" cy="46" r="2" transform="rotate(-90 102 46)" fill="#599C12"/>
                <circle cx="102" cy="38" r="2" transform="rotate(-90 102 38)" fill="#599C12"/>
                <circle cx="102" cy="30" r="2" transform="rotate(-90 102 30)" fill="#599C12"/>
                <circle cx="102" cy="22" r="2" transform="rotate(-90 102 22)" fill="#599C12"/>
                <circle cx="102" cy="14" r="2" transform="rotate(-90 102 14)" fill="#599C12"/>
                <circle cx="102" cy="6" r="2" transform="rotate(-90 102 6)" fill="#599C12"/>
                <circle cx="110" cy="342" r="2" transform="rotate(-90 110 342)" fill="#599C12"/>
                <circle cx="110" cy="334" r="2" transform="rotate(-90 110 334)" fill="#599C12"/>
                <circle cx="110" cy="326" r="2" transform="rotate(-90 110 326)" fill="#599C12"/>
                <circle cx="110" cy="318" r="2" transform="rotate(-90 110 318)" fill="#599C12"/>
                <circle cx="110" cy="310" r="2" transform="rotate(-90 110 310)" fill="#599C12"/>
                <circle cx="110" cy="302" r="2" transform="rotate(-90 110 302)" fill="#599C12"/>
                <circle cx="110" cy="294" r="2" transform="rotate(-90 110 294)" fill="#599C12"/>
                <circle cx="110" cy="286" r="2" transform="rotate(-90 110 286)" fill="#599C12"/>
                <circle cx="110" cy="278" r="2" transform="rotate(-90 110 278)" fill="#599C12"/>
                <circle cx="110" cy="270" r="2" transform="rotate(-90 110 270)" fill="#599C12"/>
                <circle cx="110" cy="262" r="2" transform="rotate(-90 110 262)" fill="#599C12"/>
                <circle cx="110" cy="254" r="2" transform="rotate(-90 110 254)" fill="#599C12"/>
                <circle cx="110" cy="246" r="2" transform="rotate(-90 110 246)" fill="#599C12"/>
                <circle cx="110" cy="238" r="2" transform="rotate(-90 110 238)" fill="#599C12"/>
                <circle cx="110" cy="230" r="2" transform="rotate(-90 110 230)" fill="#599C12"/>
                <circle cx="110" cy="222" r="2" transform="rotate(-90 110 222)" fill="#599C12"/>
                <circle cx="110" cy="214" r="2" transform="rotate(-90 110 214)" fill="#599C12"/>
                <circle cx="110" cy="206" r="2" transform="rotate(-90 110 206)" fill="#599C12"/>
                <circle cx="110" cy="198" r="2" transform="rotate(-90 110 198)" fill="#599C12"/>
                <circle cx="110" cy="190" r="2" transform="rotate(-90 110 190)" fill="#599C12"/>
                <circle cx="110" cy="182" r="2" transform="rotate(-90 110 182)" fill="#599C12"/>
                <circle cx="110" cy="174" r="2" transform="rotate(-90 110 174)" fill="#599C12"/>
                <circle cx="110" cy="166" r="2" transform="rotate(-90 110 166)" fill="#599C12"/>
                <circle cx="110" cy="158" r="2" transform="rotate(-90 110 158)" fill="#599C12"/>
                <circle cx="110" cy="150" r="2" transform="rotate(-90 110 150)" fill="#599C12"/>
                <circle cx="110" cy="142" r="2" transform="rotate(-90 110 142)" fill="#599C12"/>
                <circle cx="110" cy="134" r="2" transform="rotate(-90 110 134)" fill="#599C12"/>
                <circle cx="110" cy="126" r="2" transform="rotate(-90 110 126)" fill="#599C12"/>
                <circle cx="110" cy="118" r="2" transform="rotate(-90 110 118)" fill="#599C12"/>
                <circle cx="110" cy="110" r="2" transform="rotate(-90 110 110)" fill="#599C12"/>
                <circle cx="110" cy="102" r="2" transform="rotate(-90 110 102)" fill="#599C12"/>
                <circle cx="110" cy="94" r="2" transform="rotate(-90 110 94)" fill="#599C12"/>
                <circle cx="110" cy="86" r="2" transform="rotate(-90 110 86)" fill="#599C12"/>
                <circle cx="110" cy="78" r="2" transform="rotate(-90 110 78)" fill="#599C12"/>
                <circle cx="110" cy="70" r="2" transform="rotate(-90 110 70)" fill="#599C12"/>
                <circle cx="110" cy="62" r="2" transform="rotate(-90 110 62)" fill="#599C12"/>
                <circle cx="110" cy="54" r="2" transform="rotate(-90 110 54)" fill="#599C12"/>
                <circle cx="110" cy="46" r="2" transform="rotate(-90 110 46)" fill="#599C12"/>
                <circle cx="110" cy="38" r="2" transform="rotate(-90 110 38)" fill="#599C12"/>
                <circle cx="110" cy="30" r="2" transform="rotate(-90 110 30)" fill="#599C12"/>
                <circle cx="110" cy="22" r="2" transform="rotate(-90 110 22)" fill="#599C12"/>
                <circle cx="110" cy="14" r="2" transform="rotate(-90 110 14)" fill="#599C12"/>
                <circle cx="110" cy="6" r="2" transform="rotate(-90 110 6)" fill="#599C12"/>
                <circle cx="118" cy="342" r="2" transform="rotate(-90 118 342)" fill="#599C12"/>
                <circle cx="118" cy="334" r="2" transform="rotate(-90 118 334)" fill="#599C12"/>
                <circle cx="118" cy="326" r="2" transform="rotate(-90 118 326)" fill="#599C12"/>
                <circle cx="118" cy="318" r="2" transform="rotate(-90 118 318)" fill="#599C12"/>
                <circle cx="118" cy="310" r="2" transform="rotate(-90 118 310)" fill="#599C12"/>
                <circle cx="118" cy="302" r="2" transform="rotate(-90 118 302)" fill="#599C12"/>
                <circle cx="118" cy="294" r="2" transform="rotate(-90 118 294)" fill="#599C12"/>
                <circle cx="118" cy="286" r="2" transform="rotate(-90 118 286)" fill="#599C12"/>
                <circle cx="118" cy="278" r="2" transform="rotate(-90 118 278)" fill="#599C12"/>
                <circle cx="118" cy="270" r="2" transform="rotate(-90 118 270)" fill="#599C12"/>
                <circle cx="118" cy="262" r="2" transform="rotate(-90 118 262)" fill="#599C12"/>
                <circle cx="118" cy="254" r="2" transform="rotate(-90 118 254)" fill="#599C12"/>
                <circle cx="118" cy="246" r="2" transform="rotate(-90 118 246)" fill="#599C12"/>
                <circle cx="118" cy="238" r="2" transform="rotate(-90 118 238)" fill="#599C12"/>
                <circle cx="118" cy="230" r="2" transform="rotate(-90 118 230)" fill="#599C12"/>
                <circle cx="118" cy="222" r="2" transform="rotate(-90 118 222)" fill="#599C12"/>
                <circle cx="118" cy="214" r="2" transform="rotate(-90 118 214)" fill="#599C12"/>
                <circle cx="118" cy="206" r="2" transform="rotate(-90 118 206)" fill="#599C12"/>
                <circle cx="118" cy="198" r="2" transform="rotate(-90 118 198)" fill="#599C12"/>
                <circle cx="118" cy="190" r="2" transform="rotate(-90 118 190)" fill="#599C12"/>
                <circle cx="118" cy="182" r="2" transform="rotate(-90 118 182)" fill="#599C12"/>
                <circle cx="118" cy="174" r="2" transform="rotate(-90 118 174)" fill="#599C12"/>
                <circle cx="118" cy="166" r="2" transform="rotate(-90 118 166)" fill="#599C12"/>
                <circle cx="118" cy="158" r="2" transform="rotate(-90 118 158)" fill="#599C12"/>
                <circle cx="118" cy="150" r="2" transform="rotate(-90 118 150)" fill="#599C12"/>
                <circle cx="118" cy="142" r="2" transform="rotate(-90 118 142)" fill="#599C12"/>
                <circle cx="118" cy="134" r="2" transform="rotate(-90 118 134)" fill="#599C12"/>
                <circle cx="118" cy="126" r="2" transform="rotate(-90 118 126)" fill="#599C12"/>
                <circle cx="118" cy="118" r="2" transform="rotate(-90 118 118)" fill="#599C12"/>
                <circle cx="118" cy="110" r="2" transform="rotate(-90 118 110)" fill="#599C12"/>
                <circle cx="118" cy="102" r="2" transform="rotate(-90 118 102)" fill="#599C12"/>
                <circle cx="118" cy="94" r="2" transform="rotate(-90 118 94)" fill="#599C12"/>
                <circle cx="118" cy="86" r="2" transform="rotate(-90 118 86)" fill="#599C12"/>
                <circle cx="118" cy="78" r="2" transform="rotate(-90 118 78)" fill="#599C12"/>
                <circle cx="118" cy="70" r="2" transform="rotate(-90 118 70)" fill="#599C12"/>
                <circle cx="118" cy="62" r="2" transform="rotate(-90 118 62)" fill="#599C12"/>
                <circle cx="118" cy="54" r="2" transform="rotate(-90 118 54)" fill="#599C12"/>
                <circle cx="118" cy="46" r="2" transform="rotate(-90 118 46)" fill="#599C12"/>
                <circle cx="118" cy="38" r="2" transform="rotate(-90 118 38)" fill="#599C12"/>
                <circle cx="118" cy="30" r="2" transform="rotate(-90 118 30)" fill="#599C12"/>
                <circle cx="118" cy="22" r="2" transform="rotate(-90 118 22)" fill="#599C12"/>
                <circle cx="118" cy="14" r="2" transform="rotate(-90 118 14)" fill="#599C12"/>
                <circle cx="118" cy="6" r="2" transform="rotate(-90 118 6)" fill="#599C12"/>
                <circle cx="126" cy="342" r="2" transform="rotate(-90 126 342)" fill="#599C12"/>
                <circle cx="126" cy="334" r="2" transform="rotate(-90 126 334)" fill="#599C12"/>
                <circle cx="126" cy="326" r="2" transform="rotate(-90 126 326)" fill="#599C12"/>
                <circle cx="126" cy="318" r="2" transform="rotate(-90 126 318)" fill="#599C12"/>
                <circle cx="126" cy="310" r="2" transform="rotate(-90 126 310)" fill="#599C12"/>
                <circle cx="126" cy="302" r="2" transform="rotate(-90 126 302)" fill="#599C12"/>
                <circle cx="126" cy="294" r="2" transform="rotate(-90 126 294)" fill="#599C12"/>
                <circle cx="126" cy="286" r="2" transform="rotate(-90 126 286)" fill="#599C12"/>
                <circle cx="126" cy="278" r="2" transform="rotate(-90 126 278)" fill="#599C12"/>
                <circle cx="126" cy="270" r="2" transform="rotate(-90 126 270)" fill="#599C12"/>
                <circle cx="126" cy="262" r="2" transform="rotate(-90 126 262)" fill="#599C12"/>
                <circle cx="126" cy="254" r="2" transform="rotate(-90 126 254)" fill="#599C12"/>
                <circle cx="126" cy="246" r="2" transform="rotate(-90 126 246)" fill="#599C12"/>
                <circle cx="126" cy="238" r="2" transform="rotate(-90 126 238)" fill="#599C12"/>
                <circle cx="126" cy="230" r="2" transform="rotate(-90 126 230)" fill="#599C12"/>
                <circle cx="126" cy="222" r="2" transform="rotate(-90 126 222)" fill="#599C12"/>
                <circle cx="126" cy="214" r="2" transform="rotate(-90 126 214)" fill="#599C12"/>
                <circle cx="126" cy="206" r="2" transform="rotate(-90 126 206)" fill="#599C12"/>
                <circle cx="126" cy="198" r="2" transform="rotate(-90 126 198)" fill="#599C12"/>
                <circle cx="126" cy="190" r="2" transform="rotate(-90 126 190)" fill="#599C12"/>
                <circle cx="126" cy="182" r="2" transform="rotate(-90 126 182)" fill="#599C12"/>
                <circle cx="126" cy="174" r="2" transform="rotate(-90 126 174)" fill="#599C12"/>
                <circle cx="126" cy="166" r="2" transform="rotate(-90 126 166)" fill="#599C12"/>
                <circle cx="126" cy="158" r="2" transform="rotate(-90 126 158)" fill="#599C12"/>
                <circle cx="126" cy="150" r="2" transform="rotate(-90 126 150)" fill="#599C12"/>
                <circle cx="126" cy="142" r="2" transform="rotate(-90 126 142)" fill="#599C12"/>
                <circle cx="126" cy="134" r="2" transform="rotate(-90 126 134)" fill="#599C12"/>
                <circle cx="126" cy="126" r="2" transform="rotate(-90 126 126)" fill="#599C12"/>
                <circle cx="126" cy="118" r="2" transform="rotate(-90 126 118)" fill="#599C12"/>
                <circle cx="126" cy="110" r="2" transform="rotate(-90 126 110)" fill="#599C12"/>
                <circle cx="126" cy="102" r="2" transform="rotate(-90 126 102)" fill="#599C12"/>
                <circle cx="126" cy="94" r="2" transform="rotate(-90 126 94)" fill="#599C12"/>
                <circle cx="126" cy="86" r="2" transform="rotate(-90 126 86)" fill="#599C12"/>
                <circle cx="126" cy="78" r="2" transform="rotate(-90 126 78)" fill="#599C12"/>
                <circle cx="126" cy="70" r="2" transform="rotate(-90 126 70)" fill="#599C12"/>
                <circle cx="126" cy="62" r="2" transform="rotate(-90 126 62)" fill="#599C12"/>
                <circle cx="126" cy="54" r="2" transform="rotate(-90 126 54)" fill="#599C12"/>
                <circle cx="126" cy="46" r="2" transform="rotate(-90 126 46)" fill="#599C12"/>
                <circle cx="126" cy="38" r="2" transform="rotate(-90 126 38)" fill="#599C12"/>
                <circle cx="126" cy="30" r="2" transform="rotate(-90 126 30)" fill="#599C12"/>
                <circle cx="126" cy="22" r="2" transform="rotate(-90 126 22)" fill="#599C12"/>
                <circle cx="126" cy="14" r="2" transform="rotate(-90 126 14)" fill="#599C12"/>
                <circle cx="126" cy="6" r="2" transform="rotate(-90 126 6)" fill="#599C12"/>
                <circle cx="134" cy="342" r="2" transform="rotate(-90 134 342)" fill="#599C12"/>
                <circle cx="134" cy="334" r="2" transform="rotate(-90 134 334)" fill="#599C12"/>
                <circle cx="134" cy="326" r="2" transform="rotate(-90 134 326)" fill="#599C12"/>
                <circle cx="134" cy="318" r="2" transform="rotate(-90 134 318)" fill="#599C12"/>
                <circle cx="134" cy="310" r="2" transform="rotate(-90 134 310)" fill="#599C12"/>
                <circle cx="134" cy="302" r="2" transform="rotate(-90 134 302)" fill="#599C12"/>
                <circle cx="134" cy="294" r="2" transform="rotate(-90 134 294)" fill="#599C12"/>
                <circle cx="134" cy="286" r="2" transform="rotate(-90 134 286)" fill="#599C12"/>
                <circle cx="134" cy="278" r="2" transform="rotate(-90 134 278)" fill="#599C12"/>
                <circle cx="134" cy="270" r="2" transform="rotate(-90 134 270)" fill="#599C12"/>
                <circle cx="134" cy="262" r="2" transform="rotate(-90 134 262)" fill="#599C12"/>
                <circle cx="134" cy="254" r="2" transform="rotate(-90 134 254)" fill="#599C12"/>
                <circle cx="134" cy="246" r="2" transform="rotate(-90 134 246)" fill="#599C12"/>
                <circle cx="134" cy="238" r="2" transform="rotate(-90 134 238)" fill="#599C12"/>
                <circle cx="134" cy="230" r="2" transform="rotate(-90 134 230)" fill="#599C12"/>
                <circle cx="134" cy="222" r="2" transform="rotate(-90 134 222)" fill="#599C12"/>
                <circle cx="134" cy="214" r="2" transform="rotate(-90 134 214)" fill="#599C12"/>
                <circle cx="134" cy="206" r="2" transform="rotate(-90 134 206)" fill="#599C12"/>
                <circle cx="134" cy="198" r="2" transform="rotate(-90 134 198)" fill="#599C12"/>
                <circle cx="134" cy="190" r="2" transform="rotate(-90 134 190)" fill="#599C12"/>
                <circle cx="134" cy="182" r="2" transform="rotate(-90 134 182)" fill="#599C12"/>
                <circle cx="134" cy="174" r="2" transform="rotate(-90 134 174)" fill="#599C12"/>
                <circle cx="134" cy="166" r="2" transform="rotate(-90 134 166)" fill="#599C12"/>
                <circle cx="134" cy="158" r="2" transform="rotate(-90 134 158)" fill="#599C12"/>
                <circle cx="134" cy="150" r="2" transform="rotate(-90 134 150)" fill="#599C12"/>
                <circle cx="134" cy="142" r="2" transform="rotate(-90 134 142)" fill="#599C12"/>
                <circle cx="134" cy="134" r="2" transform="rotate(-90 134 134)" fill="#599C12"/>
                <circle cx="134" cy="126" r="2" transform="rotate(-90 134 126)" fill="#599C12"/>
                <circle cx="134" cy="118" r="2" transform="rotate(-90 134 118)" fill="#599C12"/>
                <circle cx="134" cy="110" r="2" transform="rotate(-90 134 110)" fill="#599C12"/>
                <circle cx="134" cy="102" r="2" transform="rotate(-90 134 102)" fill="#599C12"/>
                <circle cx="134" cy="94" r="2" transform="rotate(-90 134 94)" fill="#599C12"/>
                <circle cx="134" cy="86" r="2" transform="rotate(-90 134 86)" fill="#599C12"/>
                <circle cx="134" cy="78" r="2" transform="rotate(-90 134 78)" fill="#599C12"/>
                <circle cx="134" cy="70" r="2" transform="rotate(-90 134 70)" fill="#599C12"/>
                <circle cx="134" cy="62" r="2" transform="rotate(-90 134 62)" fill="#599C12"/>
                <circle cx="134" cy="54" r="2" transform="rotate(-90 134 54)" fill="#599C12"/>
                <circle cx="134" cy="46" r="2" transform="rotate(-90 134 46)" fill="#599C12"/>
                <circle cx="134" cy="38" r="2" transform="rotate(-90 134 38)" fill="#599C12"/>
                <circle cx="134" cy="30" r="2" transform="rotate(-90 134 30)" fill="#599C12"/>
                <circle cx="134" cy="22" r="2" transform="rotate(-90 134 22)" fill="#599C12"/>
                <circle cx="134" cy="14" r="2" transform="rotate(-90 134 14)" fill="#599C12"/>
                <circle cx="134" cy="6" r="2" transform="rotate(-90 134 6)" fill="#599C12"/>
                <circle cx="142" cy="342" r="2" transform="rotate(-90 142 342)" fill="#599C12"/>
                <circle cx="142" cy="334" r="2" transform="rotate(-90 142 334)" fill="#599C12"/>
                <circle cx="142" cy="326" r="2" transform="rotate(-90 142 326)" fill="#599C12"/>
                <circle cx="142" cy="318" r="2" transform="rotate(-90 142 318)" fill="#599C12"/>
                <circle cx="142" cy="310" r="2" transform="rotate(-90 142 310)" fill="#599C12"/>
                <circle cx="142" cy="302" r="2" transform="rotate(-90 142 302)" fill="#599C12"/>
                <circle cx="142" cy="294" r="2" transform="rotate(-90 142 294)" fill="#599C12"/>
                <circle cx="142" cy="286" r="2" transform="rotate(-90 142 286)" fill="#599C12"/>
                <circle cx="142" cy="278" r="2" transform="rotate(-90 142 278)" fill="#599C12"/>
                <circle cx="142" cy="270" r="2" transform="rotate(-90 142 270)" fill="#599C12"/>
                <circle cx="142" cy="262" r="2" transform="rotate(-90 142 262)" fill="#599C12"/>
                <circle cx="142" cy="254" r="2" transform="rotate(-90 142 254)" fill="#599C12"/>
                <circle cx="142" cy="246" r="2" transform="rotate(-90 142 246)" fill="#599C12"/>
                <circle cx="142" cy="238" r="2" transform="rotate(-90 142 238)" fill="#599C12"/>
                <circle cx="142" cy="230" r="2" transform="rotate(-90 142 230)" fill="#599C12"/>
                <circle cx="142" cy="222" r="2" transform="rotate(-90 142 222)" fill="#599C12"/>
                <circle cx="142" cy="214" r="2" transform="rotate(-90 142 214)" fill="#599C12"/>
                <circle cx="142" cy="206" r="2" transform="rotate(-90 142 206)" fill="#599C12"/>
                <circle cx="142" cy="198" r="2" transform="rotate(-90 142 198)" fill="#599C12"/>
                <circle cx="142" cy="190" r="2" transform="rotate(-90 142 190)" fill="#599C12"/>
                <circle cx="142" cy="182" r="2" transform="rotate(-90 142 182)" fill="#599C12"/>
                <circle cx="142" cy="174" r="2" transform="rotate(-90 142 174)" fill="#599C12"/>
                <circle cx="142" cy="166" r="2" transform="rotate(-90 142 166)" fill="#599C12"/>
                <circle cx="142" cy="158" r="2" transform="rotate(-90 142 158)" fill="#599C12"/>
                <circle cx="142" cy="150" r="2" transform="rotate(-90 142 150)" fill="#599C12"/>
                <circle cx="142" cy="142" r="2" transform="rotate(-90 142 142)" fill="#599C12"/>
                <circle cx="142" cy="134" r="2" transform="rotate(-90 142 134)" fill="#599C12"/>
                <circle cx="142" cy="126" r="2" transform="rotate(-90 142 126)" fill="#599C12"/>
                <circle cx="142" cy="118" r="2" transform="rotate(-90 142 118)" fill="#599C12"/>
                <circle cx="142" cy="110" r="2" transform="rotate(-90 142 110)" fill="#599C12"/>
                <circle cx="142" cy="102" r="2" transform="rotate(-90 142 102)" fill="#599C12"/>
                <circle cx="142" cy="94" r="2" transform="rotate(-90 142 94)" fill="#599C12"/>
                <circle cx="142" cy="86" r="2" transform="rotate(-90 142 86)" fill="#599C12"/>
                <circle cx="142" cy="78" r="2" transform="rotate(-90 142 78)" fill="#599C12"/>
                <circle cx="142" cy="70" r="2" transform="rotate(-90 142 70)" fill="#599C12"/>
                <circle cx="142" cy="62" r="2" transform="rotate(-90 142 62)" fill="#599C12"/>
                <circle cx="142" cy="54" r="2" transform="rotate(-90 142 54)" fill="#599C12"/>
                <circle cx="142" cy="46" r="2" transform="rotate(-90 142 46)" fill="#599C12"/>
                <circle cx="142" cy="38" r="2" transform="rotate(-90 142 38)" fill="#599C12"/>
                <circle cx="142" cy="30" r="2" transform="rotate(-90 142 30)" fill="#599C12"/>
                <circle cx="142" cy="22" r="2" transform="rotate(-90 142 22)" fill="#599C12"/>
                <circle cx="142" cy="14" r="2" transform="rotate(-90 142 14)" fill="#599C12"/>
                <circle cx="142" cy="6" r="2" transform="rotate(-90 142 6)" fill="#599C12"/>
                <circle cx="150" cy="342" r="2" transform="rotate(-90 150 342)" fill="#599C12"/>
                <circle cx="150" cy="334" r="2" transform="rotate(-90 150 334)" fill="#599C12"/>
                <circle cx="150" cy="326" r="2" transform="rotate(-90 150 326)" fill="#599C12"/>
                <circle cx="150" cy="318" r="2" transform="rotate(-90 150 318)" fill="#599C12"/>
                <circle cx="150" cy="310" r="2" transform="rotate(-90 150 310)" fill="#599C12"/>
                <circle cx="150" cy="302" r="2" transform="rotate(-90 150 302)" fill="#599C12"/>
                <circle cx="150" cy="294" r="2" transform="rotate(-90 150 294)" fill="#599C12"/>
                <circle cx="150" cy="286" r="2" transform="rotate(-90 150 286)" fill="#599C12"/>
                <circle cx="150" cy="278" r="2" transform="rotate(-90 150 278)" fill="#599C12"/>
                <circle cx="150" cy="270" r="2" transform="rotate(-90 150 270)" fill="#599C12"/>
                <circle cx="150" cy="262" r="2" transform="rotate(-90 150 262)" fill="#599C12"/>
                <circle cx="150" cy="254" r="2" transform="rotate(-90 150 254)" fill="#599C12"/>
                <circle cx="150" cy="246" r="2" transform="rotate(-90 150 246)" fill="#599C12"/>
                <circle cx="150" cy="238" r="2" transform="rotate(-90 150 238)" fill="#599C12"/>
                <circle cx="150" cy="230" r="2" transform="rotate(-90 150 230)" fill="#599C12"/>
                <circle cx="150" cy="222" r="2" transform="rotate(-90 150 222)" fill="#599C12"/>
                <circle cx="150" cy="214" r="2" transform="rotate(-90 150 214)" fill="#599C12"/>
                <circle cx="150" cy="206" r="2" transform="rotate(-90 150 206)" fill="#599C12"/>
                <circle cx="150" cy="198" r="2" transform="rotate(-90 150 198)" fill="#599C12"/>
                <circle cx="150" cy="190" r="2" transform="rotate(-90 150 190)" fill="#599C12"/>
                <circle cx="150" cy="182" r="2" transform="rotate(-90 150 182)" fill="#599C12"/>
                <circle cx="150" cy="174" r="2" transform="rotate(-90 150 174)" fill="#599C12"/>
                <circle cx="150" cy="166" r="2" transform="rotate(-90 150 166)" fill="#599C12"/>
                <circle cx="150" cy="158" r="2" transform="rotate(-90 150 158)" fill="#599C12"/>
                <circle cx="150" cy="150" r="2" transform="rotate(-90 150 150)" fill="#599C12"/>
                <circle cx="150" cy="142" r="2" transform="rotate(-90 150 142)" fill="#599C12"/>
                <circle cx="150" cy="134" r="2" transform="rotate(-90 150 134)" fill="#599C12"/>
                <circle cx="150" cy="126" r="2" transform="rotate(-90 150 126)" fill="#599C12"/>
                <circle cx="150" cy="118" r="2" transform="rotate(-90 150 118)" fill="#599C12"/>
                <circle cx="150" cy="110" r="2" transform="rotate(-90 150 110)" fill="#599C12"/>
                <circle cx="150" cy="102" r="2" transform="rotate(-90 150 102)" fill="#599C12"/>
                <circle cx="150" cy="94" r="2" transform="rotate(-90 150 94)" fill="#599C12"/>
                <circle cx="150" cy="86" r="2" transform="rotate(-90 150 86)" fill="#599C12"/>
                <circle cx="150" cy="78" r="2" transform="rotate(-90 150 78)" fill="#599C12"/>
                <circle cx="150" cy="70" r="2" transform="rotate(-90 150 70)" fill="#599C12"/>
                <circle cx="150" cy="62" r="2" transform="rotate(-90 150 62)" fill="#599C12"/>
                <circle cx="150" cy="54" r="2" transform="rotate(-90 150 54)" fill="#599C12"/>
                <circle cx="150" cy="46" r="2" transform="rotate(-90 150 46)" fill="#599C12"/>
                <circle cx="150" cy="38" r="2" transform="rotate(-90 150 38)" fill="#599C12"/>
                <circle cx="150" cy="30" r="2" transform="rotate(-90 150 30)" fill="#599C12"/>
                <circle cx="150" cy="22" r="2" transform="rotate(-90 150 22)" fill="#599C12"/>
                <circle cx="150" cy="14" r="2" transform="rotate(-90 150 14)" fill="#599C12"/>
                <circle cx="150" cy="6" r="2" transform="rotate(-90 150 6)" fill="#599C12"/>
                <circle cx="158" cy="342" r="2" transform="rotate(-90 158 342)" fill="#599C12"/>
                <circle cx="158" cy="334" r="2" transform="rotate(-90 158 334)" fill="#599C12"/>
                <circle cx="158" cy="326" r="2" transform="rotate(-90 158 326)" fill="#599C12"/>
                <circle cx="158" cy="318" r="2" transform="rotate(-90 158 318)" fill="#599C12"/>
                <circle cx="158" cy="310" r="2" transform="rotate(-90 158 310)" fill="#599C12"/>
                <circle cx="158" cy="302" r="2" transform="rotate(-90 158 302)" fill="#599C12"/>
                <circle cx="158" cy="294" r="2" transform="rotate(-90 158 294)" fill="#599C12"/>
                <circle cx="158" cy="286" r="2" transform="rotate(-90 158 286)" fill="#599C12"/>
                <circle cx="158" cy="278" r="2" transform="rotate(-90 158 278)" fill="#599C12"/>
                <circle cx="158" cy="270" r="2" transform="rotate(-90 158 270)" fill="#599C12"/>
                <circle cx="158" cy="262" r="2" transform="rotate(-90 158 262)" fill="#599C12"/>
                <circle cx="158" cy="254" r="2" transform="rotate(-90 158 254)" fill="#599C12"/>
                <circle cx="158" cy="246" r="2" transform="rotate(-90 158 246)" fill="#599C12"/>
                <circle cx="158" cy="238" r="2" transform="rotate(-90 158 238)" fill="#599C12"/>
                <circle cx="158" cy="230" r="2" transform="rotate(-90 158 230)" fill="#599C12"/>
                <circle cx="158" cy="222" r="2" transform="rotate(-90 158 222)" fill="#599C12"/>
                <circle cx="158" cy="214" r="2" transform="rotate(-90 158 214)" fill="#599C12"/>
                <circle cx="158" cy="206" r="2" transform="rotate(-90 158 206)" fill="#599C12"/>
                <circle cx="158" cy="198" r="2" transform="rotate(-90 158 198)" fill="#599C12"/>
                <circle cx="158" cy="190" r="2" transform="rotate(-90 158 190)" fill="#599C12"/>
                <circle cx="158" cy="182" r="2" transform="rotate(-90 158 182)" fill="#599C12"/>
                <circle cx="158" cy="174" r="2" transform="rotate(-90 158 174)" fill="#599C12"/>
                <circle cx="158" cy="166" r="2" transform="rotate(-90 158 166)" fill="#599C12"/>
                <circle cx="158" cy="158" r="2" transform="rotate(-90 158 158)" fill="#599C12"/>
                <circle cx="158" cy="150" r="2" transform="rotate(-90 158 150)" fill="#599C12"/>
                <circle cx="158" cy="142" r="2" transform="rotate(-90 158 142)" fill="#599C12"/>
                <circle cx="158" cy="134" r="2" transform="rotate(-90 158 134)" fill="#599C12"/>
                <circle cx="158" cy="126" r="2" transform="rotate(-90 158 126)" fill="#599C12"/>
                <circle cx="158" cy="118" r="2" transform="rotate(-90 158 118)" fill="#599C12"/>
                <circle cx="158" cy="110" r="2" transform="rotate(-90 158 110)" fill="#599C12"/>
                <circle cx="158" cy="102" r="2" transform="rotate(-90 158 102)" fill="#599C12"/>
                <circle cx="158" cy="94" r="2" transform="rotate(-90 158 94)" fill="#599C12"/>
                <circle cx="158" cy="86" r="2" transform="rotate(-90 158 86)" fill="#599C12"/>
                <circle cx="158" cy="78" r="2" transform="rotate(-90 158 78)" fill="#599C12"/>
                <circle cx="158" cy="70" r="2" transform="rotate(-90 158 70)" fill="#599C12"/>
                <circle cx="158" cy="62" r="2" transform="rotate(-90 158 62)" fill="#599C12"/>
                <circle cx="158" cy="54" r="2" transform="rotate(-90 158 54)" fill="#599C12"/>
                <circle cx="158" cy="46" r="2" transform="rotate(-90 158 46)" fill="#599C12"/>
                <circle cx="158" cy="38" r="2" transform="rotate(-90 158 38)" fill="#599C12"/>
                <circle cx="158" cy="30" r="2" transform="rotate(-90 158 30)" fill="#599C12"/>
                <circle cx="158" cy="22" r="2" transform="rotate(-90 158 22)" fill="#599C12"/>
                <circle cx="158" cy="14" r="2" transform="rotate(-90 158 14)" fill="#599C12"/>
                <circle cx="158" cy="6" r="2" transform="rotate(-90 158 6)" fill="#599C12"/>
                <circle cx="166" cy="342" r="2" transform="rotate(-90 166 342)" fill="#599C12"/>
                <circle cx="166" cy="334" r="2" transform="rotate(-90 166 334)" fill="#599C12"/>
                <circle cx="166" cy="326" r="2" transform="rotate(-90 166 326)" fill="#599C12"/>
                <circle cx="166" cy="318" r="2" transform="rotate(-90 166 318)" fill="#599C12"/>
                <circle cx="166" cy="310" r="2" transform="rotate(-90 166 310)" fill="#599C12"/>
                <circle cx="166" cy="302" r="2" transform="rotate(-90 166 302)" fill="#599C12"/>
                <circle cx="166" cy="294" r="2" transform="rotate(-90 166 294)" fill="#599C12"/>
                <circle cx="166" cy="286" r="2" transform="rotate(-90 166 286)" fill="#599C12"/>
                <circle cx="166" cy="278" r="2" transform="rotate(-90 166 278)" fill="#599C12"/>
                <circle cx="166" cy="270" r="2" transform="rotate(-90 166 270)" fill="#599C12"/>
                <circle cx="166" cy="262" r="2" transform="rotate(-90 166 262)" fill="#599C12"/>
                <circle cx="166" cy="254" r="2" transform="rotate(-90 166 254)" fill="#599C12"/>
                <circle cx="166" cy="246" r="2" transform="rotate(-90 166 246)" fill="#599C12"/>
                <circle cx="166" cy="238" r="2" transform="rotate(-90 166 238)" fill="#599C12"/>
                <circle cx="166" cy="230" r="2" transform="rotate(-90 166 230)" fill="#599C12"/>
                <circle cx="166" cy="222" r="2" transform="rotate(-90 166 222)" fill="#599C12"/>
                <circle cx="166" cy="214" r="2" transform="rotate(-90 166 214)" fill="#599C12"/>
                <circle cx="166" cy="206" r="2" transform="rotate(-90 166 206)" fill="#599C12"/>
                <circle cx="166" cy="198" r="2" transform="rotate(-90 166 198)" fill="#599C12"/>
                <circle cx="166" cy="190" r="2" transform="rotate(-90 166 190)" fill="#599C12"/>
                <circle cx="166" cy="182" r="2" transform="rotate(-90 166 182)" fill="#599C12"/>
                <circle cx="166" cy="174" r="2" transform="rotate(-90 166 174)" fill="#599C12"/>
                <circle cx="166" cy="166" r="2" transform="rotate(-90 166 166)" fill="#599C12"/>
                <circle cx="166" cy="158" r="2" transform="rotate(-90 166 158)" fill="#599C12"/>
                <circle cx="166" cy="150" r="2" transform="rotate(-90 166 150)" fill="#599C12"/>
                <circle cx="166" cy="142" r="2" transform="rotate(-90 166 142)" fill="#599C12"/>
                <circle cx="166" cy="134" r="2" transform="rotate(-90 166 134)" fill="#599C12"/>
                <circle cx="166" cy="126" r="2" transform="rotate(-90 166 126)" fill="#599C12"/>
                <circle cx="166" cy="118" r="2" transform="rotate(-90 166 118)" fill="#599C12"/>
                <circle cx="166" cy="110" r="2" transform="rotate(-90 166 110)" fill="#599C12"/>
                <circle cx="166" cy="102" r="2" transform="rotate(-90 166 102)" fill="#599C12"/>
                <circle cx="166" cy="94" r="2" transform="rotate(-90 166 94)" fill="#599C12"/>
                <circle cx="166" cy="86" r="2" transform="rotate(-90 166 86)" fill="#599C12"/>
                <circle cx="166" cy="78" r="2" transform="rotate(-90 166 78)" fill="#599C12"/>
                <circle cx="166" cy="70" r="2" transform="rotate(-90 166 70)" fill="#599C12"/>
                <circle cx="166" cy="62" r="2" transform="rotate(-90 166 62)" fill="#599C12"/>
                <circle cx="166" cy="54" r="2" transform="rotate(-90 166 54)" fill="#599C12"/>
                <circle cx="166" cy="46" r="2" transform="rotate(-90 166 46)" fill="#599C12"/>
                <circle cx="166" cy="38" r="2" transform="rotate(-90 166 38)" fill="#599C12"/>
                <circle cx="166" cy="30" r="2" transform="rotate(-90 166 30)" fill="#599C12"/>
                <circle cx="166" cy="22" r="2" transform="rotate(-90 166 22)" fill="#599C12"/>
                <circle cx="166" cy="14" r="2" transform="rotate(-90 166 14)" fill="#599C12"/>
                <circle cx="166" cy="6" r="2" transform="rotate(-90 166 6)" fill="#599C12"/>
                <circle cx="174" cy="342" r="2" transform="rotate(-90 174 342)" fill="#599C12"/>
                <circle cx="174" cy="334" r="2" transform="rotate(-90 174 334)" fill="#599C12"/>
                <circle cx="174" cy="326" r="2" transform="rotate(-90 174 326)" fill="#599C12"/>
                <circle cx="174" cy="318" r="2" transform="rotate(-90 174 318)" fill="#599C12"/>
                <circle cx="174" cy="310" r="2" transform="rotate(-90 174 310)" fill="#599C12"/>
                <circle cx="174" cy="302" r="2" transform="rotate(-90 174 302)" fill="#599C12"/>
                <circle cx="174" cy="294" r="2" transform="rotate(-90 174 294)" fill="#599C12"/>
                <circle cx="174" cy="286" r="2" transform="rotate(-90 174 286)" fill="#599C12"/>
                <circle cx="174" cy="278" r="2" transform="rotate(-90 174 278)" fill="#599C12"/>
                <circle cx="174" cy="270" r="2" transform="rotate(-90 174 270)" fill="#599C12"/>
                <circle cx="174" cy="262" r="2" transform="rotate(-90 174 262)" fill="#599C12"/>
                <circle cx="174" cy="254" r="2" transform="rotate(-90 174 254)" fill="#599C12"/>
                <circle cx="174" cy="246" r="2" transform="rotate(-90 174 246)" fill="#599C12"/>
                <circle cx="174" cy="238" r="2" transform="rotate(-90 174 238)" fill="#599C12"/>
                <circle cx="174" cy="230" r="2" transform="rotate(-90 174 230)" fill="#599C12"/>
                <circle cx="174" cy="222" r="2" transform="rotate(-90 174 222)" fill="#599C12"/>
                <circle cx="174" cy="214" r="2" transform="rotate(-90 174 214)" fill="#599C12"/>
                <circle cx="174" cy="206" r="2" transform="rotate(-90 174 206)" fill="#599C12"/>
                <circle cx="174" cy="198" r="2" transform="rotate(-90 174 198)" fill="#599C12"/>
                <circle cx="174" cy="190" r="2" transform="rotate(-90 174 190)" fill="#599C12"/>
                <circle cx="174" cy="182" r="2" transform="rotate(-90 174 182)" fill="#599C12"/>
                <circle cx="174" cy="174" r="2" transform="rotate(-90 174 174)" fill="#599C12"/>
                <circle cx="174" cy="166" r="2" transform="rotate(-90 174 166)" fill="#599C12"/>
                <circle cx="174" cy="158" r="2" transform="rotate(-90 174 158)" fill="#599C12"/>
                <circle cx="174" cy="150" r="2" transform="rotate(-90 174 150)" fill="#599C12"/>
                <circle cx="174" cy="142" r="2" transform="rotate(-90 174 142)" fill="#599C12"/>
                <circle cx="174" cy="134" r="2" transform="rotate(-90 174 134)" fill="#599C12"/>
                <circle cx="174" cy="126" r="2" transform="rotate(-90 174 126)" fill="#599C12"/>
                <circle cx="174" cy="118" r="2" transform="rotate(-90 174 118)" fill="#599C12"/>
                <circle cx="174" cy="110" r="2" transform="rotate(-90 174 110)" fill="#599C12"/>
                <circle cx="174" cy="102" r="2" transform="rotate(-90 174 102)" fill="#599C12"/>
                <circle cx="174" cy="94" r="2" transform="rotate(-90 174 94)" fill="#599C12"/>
                <circle cx="174" cy="86" r="2" transform="rotate(-90 174 86)" fill="#599C12"/>
                <circle cx="174" cy="78" r="2" transform="rotate(-90 174 78)" fill="#599C12"/>
                <circle cx="174" cy="70" r="2" transform="rotate(-90 174 70)" fill="#599C12"/>
                <circle cx="174" cy="62" r="2" transform="rotate(-90 174 62)" fill="#599C12"/>
                <circle cx="174" cy="54" r="2" transform="rotate(-90 174 54)" fill="#599C12"/>
                <circle cx="174" cy="46" r="2" transform="rotate(-90 174 46)" fill="#599C12"/>
                <circle cx="174" cy="38" r="2" transform="rotate(-90 174 38)" fill="#599C12"/>
                <circle cx="174" cy="30" r="2" transform="rotate(-90 174 30)" fill="#599C12"/>
                <circle cx="174" cy="22" r="2" transform="rotate(-90 174 22)" fill="#599C12"/>
                <circle cx="174" cy="14" r="2" transform="rotate(-90 174 14)" fill="#599C12"/>
                <circle cx="174" cy="6" r="2" transform="rotate(-90 174 6)" fill="#599C12"/>
                <circle cx="182" cy="342" r="2" transform="rotate(-90 182 342)" fill="#599C12"/>
                <circle cx="182" cy="334" r="2" transform="rotate(-90 182 334)" fill="#599C12"/>
                <circle cx="182" cy="326" r="2" transform="rotate(-90 182 326)" fill="#599C12"/>
                <circle cx="182" cy="318" r="2" transform="rotate(-90 182 318)" fill="#599C12"/>
                <circle cx="182" cy="310" r="2" transform="rotate(-90 182 310)" fill="#599C12"/>
                <circle cx="182" cy="302" r="2" transform="rotate(-90 182 302)" fill="#599C12"/>
                <circle cx="182" cy="294" r="2" transform="rotate(-90 182 294)" fill="#599C12"/>
                <circle cx="182" cy="286" r="2" transform="rotate(-90 182 286)" fill="#599C12"/>
                <circle cx="182" cy="278" r="2" transform="rotate(-90 182 278)" fill="#599C12"/>
                <circle cx="182" cy="270" r="2" transform="rotate(-90 182 270)" fill="#599C12"/>
                <circle cx="182" cy="262" r="2" transform="rotate(-90 182 262)" fill="#599C12"/>
                <circle cx="182" cy="254" r="2" transform="rotate(-90 182 254)" fill="#599C12"/>
                <circle cx="182" cy="246" r="2" transform="rotate(-90 182 246)" fill="#599C12"/>
                <circle cx="182" cy="238" r="2" transform="rotate(-90 182 238)" fill="#599C12"/>
                <circle cx="182" cy="230" r="2" transform="rotate(-90 182 230)" fill="#599C12"/>
                <circle cx="182" cy="222" r="2" transform="rotate(-90 182 222)" fill="#599C12"/>
                <circle cx="182" cy="214" r="2" transform="rotate(-90 182 214)" fill="#599C12"/>
                <circle cx="182" cy="206" r="2" transform="rotate(-90 182 206)" fill="#599C12"/>
                <circle cx="182" cy="198" r="2" transform="rotate(-90 182 198)" fill="#599C12"/>
                <circle cx="182" cy="190" r="2" transform="rotate(-90 182 190)" fill="#599C12"/>
                <circle cx="182" cy="182" r="2" transform="rotate(-90 182 182)" fill="#599C12"/>
                <circle cx="182" cy="174" r="2" transform="rotate(-90 182 174)" fill="#599C12"/>
                <circle cx="182" cy="166" r="2" transform="rotate(-90 182 166)" fill="#599C12"/>
                <circle cx="182" cy="158" r="2" transform="rotate(-90 182 158)" fill="#599C12"/>
                <circle cx="182" cy="150" r="2" transform="rotate(-90 182 150)" fill="#599C12"/>
                <circle cx="182" cy="142" r="2" transform="rotate(-90 182 142)" fill="#599C12"/>
                <circle cx="182" cy="134" r="2" transform="rotate(-90 182 134)" fill="#599C12"/>
                <circle cx="182" cy="126" r="2" transform="rotate(-90 182 126)" fill="#599C12"/>
                <circle cx="182" cy="118" r="2" transform="rotate(-90 182 118)" fill="#599C12"/>
                <circle cx="182" cy="110" r="2" transform="rotate(-90 182 110)" fill="#599C12"/>
                <circle cx="182" cy="102" r="2" transform="rotate(-90 182 102)" fill="#599C12"/>
                <circle cx="182" cy="94" r="2" transform="rotate(-90 182 94)" fill="#599C12"/>
                <circle cx="182" cy="86" r="2" transform="rotate(-90 182 86)" fill="#599C12"/>
                <circle cx="182" cy="78" r="2" transform="rotate(-90 182 78)" fill="#599C12"/>
                <circle cx="182" cy="70" r="2" transform="rotate(-90 182 70)" fill="#599C12"/>
                <circle cx="182" cy="62" r="2" transform="rotate(-90 182 62)" fill="#599C12"/>
                <circle cx="182" cy="54" r="2" transform="rotate(-90 182 54)" fill="#599C12"/>
                <circle cx="182" cy="46" r="2" transform="rotate(-90 182 46)" fill="#599C12"/>
                <circle cx="182" cy="38" r="2" transform="rotate(-90 182 38)" fill="#599C12"/>
                <circle cx="182" cy="30" r="2" transform="rotate(-90 182 30)" fill="#599C12"/>
                <circle cx="182" cy="22" r="2" transform="rotate(-90 182 22)" fill="#599C12"/>
                <circle cx="182" cy="14" r="2" transform="rotate(-90 182 14)" fill="#599C12"/>
                <circle cx="182" cy="6" r="2" transform="rotate(-90 182 6)" fill="#599C12"/>
                <circle cx="190" cy="342" r="2" transform="rotate(-90 190 342)" fill="#599C12"/>
                <circle cx="190" cy="334" r="2" transform="rotate(-90 190 334)" fill="#599C12"/>
                <circle cx="190" cy="326" r="2" transform="rotate(-90 190 326)" fill="#599C12"/>
                <circle cx="190" cy="318" r="2" transform="rotate(-90 190 318)" fill="#599C12"/>
                <circle cx="190" cy="310" r="2" transform="rotate(-90 190 310)" fill="#599C12"/>
                <circle cx="190" cy="302" r="2" transform="rotate(-90 190 302)" fill="#599C12"/>
                <circle cx="190" cy="294" r="2" transform="rotate(-90 190 294)" fill="#599C12"/>
                <circle cx="190" cy="286" r="2" transform="rotate(-90 190 286)" fill="#599C12"/>
                <circle cx="190" cy="278" r="2" transform="rotate(-90 190 278)" fill="#599C12"/>
                <circle cx="190" cy="270" r="2" transform="rotate(-90 190 270)" fill="#599C12"/>
                <circle cx="190" cy="262" r="2" transform="rotate(-90 190 262)" fill="#599C12"/>
                <circle cx="190" cy="254" r="2" transform="rotate(-90 190 254)" fill="#599C12"/>
                <circle cx="190" cy="246" r="2" transform="rotate(-90 190 246)" fill="#599C12"/>
                <circle cx="190" cy="238" r="2" transform="rotate(-90 190 238)" fill="#599C12"/>
                <circle cx="190" cy="230" r="2" transform="rotate(-90 190 230)" fill="#599C12"/>
                <circle cx="190" cy="222" r="2" transform="rotate(-90 190 222)" fill="#599C12"/>
                <circle cx="190" cy="214" r="2" transform="rotate(-90 190 214)" fill="#599C12"/>
                <circle cx="190" cy="206" r="2" transform="rotate(-90 190 206)" fill="#599C12"/>
                <circle cx="190" cy="198" r="2" transform="rotate(-90 190 198)" fill="#599C12"/>
                <circle cx="190" cy="190" r="2" transform="rotate(-90 190 190)" fill="#599C12"/>
                <circle cx="190" cy="182" r="2" transform="rotate(-90 190 182)" fill="#599C12"/>
                <circle cx="190" cy="174" r="2" transform="rotate(-90 190 174)" fill="#599C12"/>
                <circle cx="190" cy="166" r="2" transform="rotate(-90 190 166)" fill="#599C12"/>
                <circle cx="190" cy="158" r="2" transform="rotate(-90 190 158)" fill="#599C12"/>
                <circle cx="190" cy="150" r="2" transform="rotate(-90 190 150)" fill="#599C12"/>
                <circle cx="190" cy="142" r="2" transform="rotate(-90 190 142)" fill="#599C12"/>
                <circle cx="190" cy="134" r="2" transform="rotate(-90 190 134)" fill="#599C12"/>
                <circle cx="190" cy="126" r="2" transform="rotate(-90 190 126)" fill="#599C12"/>
                <circle cx="190" cy="118" r="2" transform="rotate(-90 190 118)" fill="#599C12"/>
                <circle cx="190" cy="110" r="2" transform="rotate(-90 190 110)" fill="#599C12"/>
                <circle cx="190" cy="102" r="2" transform="rotate(-90 190 102)" fill="#599C12"/>
                <circle cx="190" cy="94" r="2" transform="rotate(-90 190 94)" fill="#599C12"/>
                <circle cx="190" cy="86" r="2" transform="rotate(-90 190 86)" fill="#599C12"/>
                <circle cx="190" cy="78" r="2" transform="rotate(-90 190 78)" fill="#599C12"/>
                <circle cx="190" cy="70" r="2" transform="rotate(-90 190 70)" fill="#599C12"/>
                <circle cx="190" cy="62" r="2" transform="rotate(-90 190 62)" fill="#599C12"/>
                <circle cx="190" cy="54" r="2" transform="rotate(-90 190 54)" fill="#599C12"/>
                <circle cx="190" cy="46" r="2" transform="rotate(-90 190 46)" fill="#599C12"/>
                <circle cx="190" cy="38" r="2" transform="rotate(-90 190 38)" fill="#599C12"/>
                <circle cx="190" cy="30" r="2" transform="rotate(-90 190 30)" fill="#599C12"/>
                <circle cx="190" cy="22" r="2" transform="rotate(-90 190 22)" fill="#599C12"/>
                <circle cx="190" cy="14" r="2" transform="rotate(-90 190 14)" fill="#599C12"/>
                <circle cx="190" cy="6" r="2" transform="rotate(-90 190 6)" fill="#599C12"/>
                <circle cx="198" cy="342" r="2" transform="rotate(-90 198 342)" fill="#599C12"/>
                <circle cx="198" cy="334" r="2" transform="rotate(-90 198 334)" fill="#599C12"/>
                <circle cx="198" cy="326" r="2" transform="rotate(-90 198 326)" fill="#599C12"/>
                <circle cx="198" cy="318" r="2" transform="rotate(-90 198 318)" fill="#599C12"/>
                <circle cx="198" cy="310" r="2" transform="rotate(-90 198 310)" fill="#599C12"/>
                <circle cx="198" cy="302" r="2" transform="rotate(-90 198 302)" fill="#599C12"/>
                <circle cx="198" cy="294" r="2" transform="rotate(-90 198 294)" fill="#599C12"/>
                <circle cx="198" cy="286" r="2" transform="rotate(-90 198 286)" fill="#599C12"/>
                <circle cx="198" cy="278" r="2" transform="rotate(-90 198 278)" fill="#599C12"/>
                <circle cx="198" cy="270" r="2" transform="rotate(-90 198 270)" fill="#599C12"/>
                <circle cx="198" cy="262" r="2" transform="rotate(-90 198 262)" fill="#599C12"/>
                <circle cx="198" cy="254" r="2" transform="rotate(-90 198 254)" fill="#599C12"/>
                <circle cx="198" cy="246" r="2" transform="rotate(-90 198 246)" fill="#599C12"/>
                <circle cx="198" cy="238" r="2" transform="rotate(-90 198 238)" fill="#599C12"/>
                <circle cx="198" cy="230" r="2" transform="rotate(-90 198 230)" fill="#599C12"/>
                <circle cx="198" cy="222" r="2" transform="rotate(-90 198 222)" fill="#599C12"/>
                <circle cx="198" cy="214" r="2" transform="rotate(-90 198 214)" fill="#599C12"/>
                <circle cx="198" cy="206" r="2" transform="rotate(-90 198 206)" fill="#599C12"/>
                <circle cx="198" cy="198" r="2" transform="rotate(-90 198 198)" fill="#599C12"/>
                <circle cx="198" cy="190" r="2" transform="rotate(-90 198 190)" fill="#599C12"/>
                <circle cx="198" cy="182" r="2" transform="rotate(-90 198 182)" fill="#599C12"/>
                <circle cx="198" cy="174" r="2" transform="rotate(-90 198 174)" fill="#599C12"/>
                <circle cx="198" cy="166" r="2" transform="rotate(-90 198 166)" fill="#599C12"/>
                <circle cx="198" cy="158" r="2" transform="rotate(-90 198 158)" fill="#599C12"/>
                <circle cx="198" cy="150" r="2" transform="rotate(-90 198 150)" fill="#599C12"/>
                <circle cx="198" cy="142" r="2" transform="rotate(-90 198 142)" fill="#599C12"/>
                <circle cx="198" cy="134" r="2" transform="rotate(-90 198 134)" fill="#599C12"/>
                <circle cx="198" cy="126" r="2" transform="rotate(-90 198 126)" fill="#599C12"/>
                <circle cx="198" cy="118" r="2" transform="rotate(-90 198 118)" fill="#599C12"/>
                <circle cx="198" cy="110" r="2" transform="rotate(-90 198 110)" fill="#599C12"/>
                <circle cx="198" cy="102" r="2" transform="rotate(-90 198 102)" fill="#599C12"/>
                <circle cx="198" cy="94" r="2" transform="rotate(-90 198 94)" fill="#599C12"/>
                <circle cx="198" cy="86" r="2" transform="rotate(-90 198 86)" fill="#599C12"/>
                <circle cx="198" cy="78" r="2" transform="rotate(-90 198 78)" fill="#599C12"/>
                <circle cx="198" cy="70" r="2" transform="rotate(-90 198 70)" fill="#599C12"/>
                <circle cx="198" cy="62" r="2" transform="rotate(-90 198 62)" fill="#599C12"/>
                <circle cx="198" cy="54" r="2" transform="rotate(-90 198 54)" fill="#599C12"/>
                <circle cx="198" cy="46" r="2" transform="rotate(-90 198 46)" fill="#599C12"/>
                <circle cx="198" cy="38" r="2" transform="rotate(-90 198 38)" fill="#599C12"/>
                <circle cx="198" cy="30" r="2" transform="rotate(-90 198 30)" fill="#599C12"/>
                <circle cx="198" cy="22" r="2" transform="rotate(-90 198 22)" fill="#599C12"/>
                <circle cx="198" cy="14" r="2" transform="rotate(-90 198 14)" fill="#599C12"/>
                <circle cx="198" cy="6" r="2" transform="rotate(-90 198 6)" fill="#599C12"/>
              </svg>

            </div>
            <div class="text-content col-lg-6">
              <h2 class="block-title big-title"><?php echo $businessOpportunityBlockTitle;?></h2>
              <div class="text"><?php echo wpautop($businessOpportunityText);?></div>
            </div>

          </div>
        </div>
      </section>
  <?php endif;?>

<?php wp_reset_postdata(); ?>

<?php
	$faqBlockTitle = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_faq_title'.green_system_lang_prefix());
	$faqQuestionList = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_faq_list'.green_system_lang_prefix());
	$i = 0;

	if( $faqBlockTitle && $faqQuestionList ):

		$args = array(
			'title' => $faqBlockTitle,
			'content'  => $faqQuestionList
		)

		?>
    <!-- Питання відповіді-->
		<?php get_template_part('template-parts/block-faq','', $args);?>
	<?php endif;?>

<?php
	$contactFormTitle = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_form_block_title'.green_system_lang_prefix());
	$contactFormText = carbon_get_post_meta(get_the_ID(), 'green_system_car_charging_form_text'.green_system_lang_prefix());

	if ( $contactFormTitle && $contactFormText ):

		$args = array(
			'title' => $contactFormTitle,
			'text'  => $contactFormText
		)

		?>
		<?php get_template_part('template-parts/block-contact-form','', $args);?>
	<?php endif;?>

<?php get_footer();
