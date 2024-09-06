<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки СЕС
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package green_system
	 */
	get_header();
?>


<?php

	$serviceCategory = get_the_terms( get_the_ID() , 'solar_decision_tax');

	$serviceCategoryId = 0;

	if( is_array( $serviceCategory ) ){
		foreach( $serviceCategory as $cur_term ){
			$serviceCategoryId = $cur_term->term_id;
		}
	}

?>
	<!-- Головний екран -->
	<section class="main-screen-power-plant" style="background-image: url('<?php echo carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_main_screen_image'.green_system_lang_prefix());?>')">
		<div class="container">
			<div class="row">
        <div class="text-content col-12">
          <h1 class="block-title"><?php echo carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_main_screen_title'.green_system_lang_prefix());;?></h1>
          <p class="subtitle"><?php echo carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_main_screen_subtitle'.green_system_lang_prefix());;?></p>
          <a href="#" rel="nofollow" class="button" data-bs-toggle="modal" data-bs-target="#formModal"><?php echo esc_html( pll__( 'Отримати консультацію' ) ); ?></a>
        </div>
			</div>
        <?php
          $mainScreenAdvantagesList = carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_advantages_list'.green_system_lang_prefix());

          if ( $mainScreenAdvantagesList ):
        ?>
        <div class="row">
          <ul class="advantages-list col-12">
            <?php foreach( $mainScreenAdvantagesList as $item ):?>
                <li class="advantages-list__item">
                  <div class="icon">
                    <img src="<?php echo $item['icon'];?>" alt="" class="scg-pic">
                  </div>
                  <p class="description"><?php echo $item['text'];?></p>
                </li>
            <?php endforeach;?>
          </ul>
        </div>
      <?php endif;?>
		</div>
	</section>

    <?php
        $idealSolutionBlockTitle = carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_ideal_solution_block_title'.green_system_lang_prefix());
	      $idealSolutionList = carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_ideal_solution_list'.green_system_lang_prefix());

        if( $idealSolutionBlockTitle && $idealSolutionList ):?>

        <!-- Ідеальне рішення якщо -->
        <section class="ideal-solution indent-bottom-big indent-top-big animation-tracking">
          <div class="container">
            <div class="row first-up">
              <h2 class="block-title big-title col-12">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                  <path d="M21.6968 18.3033C21.2468 17.8533 20.6364 17.6004 20 17.6004C19.3636 17.6004 18.7532 17.8533 18.3032 18.3033C17.8532 18.7533 17.6004 19.3636 17.6004 20C17.6004 20.6364 17.8532 21.2468 18.3032 21.6968C18.7532 22.1468 19.3636 22.3996 20 22.3996C20.6364 22.3996 21.2468 22.1468 21.6968 21.6968C22.1468 21.2468 22.3996 20.6364 22.3996 20C22.3996 19.3636 22.1468 18.7533 21.6968 18.3033Z" fill="#599C12"/>
                  <path d="M28.8955 25.5019C28.4455 25.0519 27.835 24.7991 27.1987 24.7991C26.5623 24.7991 25.9519 25.0519 25.5019 25.5019C25.0519 25.9519 24.7991 26.5623 24.7991 27.1987C24.7991 27.835 25.0519 28.4455 25.5019 28.8955C25.9519 29.3455 26.5623 29.5982 27.1987 29.5982C27.835 29.5982 28.4455 29.3455 28.8955 28.8955C29.3455 28.4455 29.5982 27.835 29.5982 27.1987C29.5982 26.5623 29.3455 25.9519 28.8955 25.5019Z" fill="#599C12"/>
                  <path d="M36.0941 32.7005C35.6441 32.2505 35.0337 31.9978 34.3973 31.9978C33.761 31.9978 33.1505 32.2505 32.7005 32.7005C32.2505 33.1505 31.9978 33.761 31.9978 34.3973C31.9978 35.0337 32.2505 35.6441 32.7005 36.0941C33.1505 36.5441 33.761 36.7969 34.3973 36.7969C35.0337 36.7969 35.6441 36.5441 36.0941 36.0941C36.5441 35.6441 36.7969 35.0337 36.7969 34.3973C36.7969 33.761 36.5441 33.1505 36.0941 32.7005Z" fill="#599C12"/>
                  <path d="M36.0941 18.3033C35.6441 17.8533 35.0337 17.6004 34.3973 17.6004C33.761 17.6004 33.1505 17.8533 32.7005 18.3033C32.2505 18.7533 31.9978 19.3636 31.9978 20C31.9978 20.6364 32.2505 21.2468 32.7005 21.6968C33.1505 22.1468 33.761 22.3996 34.3973 22.3996C35.0337 22.3996 35.6441 22.1468 36.0941 21.6968C36.5441 21.2468 36.7969 20.6364 36.7969 20C36.7969 19.3636 36.5441 18.7533 36.0941 18.3033Z" fill="#599C12"/>
                  <path d="M14.4981 11.1046C14.0481 10.6546 13.4377 10.4018 12.8013 10.4018C12.165 10.4018 11.5545 10.6546 11.1045 11.1046C10.6545 11.5546 10.4018 12.1649 10.4018 12.8013C10.4018 13.4377 10.6545 14.0481 11.1045 14.4981C11.5545 14.9481 12.165 15.2009 12.8013 15.2009C13.4377 15.2009 14.0481 14.9481 14.4981 14.4981C14.9481 14.0481 15.2009 13.4377 15.2009 12.8013C15.2009 12.1649 14.9481 11.5546 14.4981 11.1046Z" fill="#599C12"/>
                  <path d="M7.29948 3.90594C6.84949 3.45593 6.23904 3.20312 5.60268 3.20312C4.96632 3.20312 4.35587 3.45593 3.90587 3.90594C3.45588 4.35594 3.20312 4.96628 3.20312 5.60268C3.20312 6.23907 3.45588 6.84942 3.90587 7.29942C4.35587 7.74941 4.96632 8.00223 5.60268 8.00223C6.23904 8.00223 6.84949 7.74941 7.29948 7.29942C7.74948 6.84942 8.00223 6.23907 8.00223 5.60268C8.00223 4.96628 7.74948 4.35594 7.29948 3.90594Z" fill="#599C12"/>
                  <path d="M36.0941 25.5019C35.6441 25.0519 35.0337 24.7991 34.3973 24.7991C33.761 24.7991 33.1505 25.0519 32.7005 25.5019C32.2505 25.9519 31.9978 26.5623 31.9978 27.1987C31.9978 27.835 32.2505 28.4455 32.7005 28.8955C33.1505 29.3455 33.761 29.5982 34.3973 29.5982C35.0337 29.5982 35.6441 29.3455 36.0941 28.8955C36.5441 28.4455 36.7969 27.835 36.7969 27.1987C36.7969 26.5623 36.5441 25.9519 36.0941 25.5019Z" fill="#599C12"/>
                  <path d="M21.6968 32.7005C21.2468 32.2505 20.6364 31.9978 20 31.9978C19.3636 31.9978 18.7532 32.2505 18.3032 32.7005C17.8532 33.1505 17.6004 33.761 17.6004 34.3973C17.6004 35.0337 17.8532 35.6441 18.3032 36.0941C18.7532 36.5441 19.3636 36.7969 20 36.7969C20.6364 36.7969 21.2468 36.5441 21.6968 36.0941C22.1468 35.6441 22.3996 35.0337 22.3996 34.3973C22.3996 33.761 22.1468 33.1505 21.6968 32.7005Z" fill="#599C12"/>
                  <path d="M28.8955 32.7005C28.4455 32.2505 27.835 31.9978 27.1987 31.9978C26.5623 31.9978 25.9519 32.2505 25.5019 32.7005C25.0519 33.1505 24.7991 33.761 24.7991 34.3973C24.7991 35.0337 25.0519 35.6441 25.5019 36.0941C25.9519 36.5441 26.5623 36.7969 27.1987 36.7969C27.835 36.7969 28.4455 36.5441 28.8955 36.0941C29.3455 35.6441 29.5982 35.0337 29.5982 34.3973C29.5982 33.761 29.3455 33.1505 28.8955 32.7005Z" fill="#599C12"/>
                </svg>
                <?php echo $idealSolutionBlockTitle;?>
              </h2>
            </div>
            <?php get_template_part('template-parts/solution-item-list', '', $idealSolutionList);?>
          </div>
        </section>
    <?php endif;?>

	<?php
	    $whatYouGetBlockTitle = carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_what_you_get_block_title'.green_system_lang_prefix());
	    $whatYouGetList = carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_what_you_get_list'.green_system_lang_prefix());
	    $whatYouGetImage = carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_what_you_get_image'.green_system_lang_prefix());
	    $i = 0;

	    if( $whatYouGetBlockTitle && $whatYouGetList ):?>

	    <!-- Що ви отримаєте -->
	    <section class="what-you-get indent-top-small indent-bottom-big animation-tracking">
	      <div class="container">
	        <div class="row">
            <div class="text-content col-lg-6">
              <h2 class="block-title big-title first-up"><?php echo $whatYouGetBlockTitle;?></h2>
              <div class="accordion second-up" id="accordion-what-you-get">
	              <?php foreach( $whatYouGetList as $item ): $i++;?>
                  <div class="card">
                    <div class="card-header">
                      <a class="collapsed btn" data-bs-toggle="collapse" href="#whatYouGet<?php echo $i;?>">
                        <?php echo $item['name'];?>
                      </a>
                    </div>
                    <div id="whatYouGet<?php echo $i;?>" class="collapse" data-bs-parent="#accordion-what-you-get">
                      <div class="card-body">
                        <div class="progress-wrapper">
                          <span></span>
                        </div>
                        <p class="text"><?php echo $item['text'];?></p>

                      </div>
                    </div>
                  </div>
                <?php endforeach;?>
              </div>
            </div>
            <?php if( $whatYouGetImage ):?>
              <div class="pic-wrapper col-lg-6 third-up">
                <div class="pic">
                  <img
                      class="lazy"
                      data-src="<?php echo wp_get_attachment_image_src($whatYouGetImage, 'full')[0];?>"
                      alt="<?php echo get_post_meta($whatYouGetImage, '_wp_attachment_image_alt', TRUE);?>"
                  >
                </div>
                <svg class="dots" width="204" height="348" viewBox="0 0 204 348" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            <?php endif;?>
	        </div>
	      </div>
	    </section>
	<?php endif;?>

    <?php
        $callBlockTitle = carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_call_block_title'.green_system_lang_prefix());
	      $callText = carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_call_text'.green_system_lang_prefix());
	      $callImage = carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_call_image'.green_system_lang_prefix());

        if( $callBlockTitle && $callText && $callImage ):?>
        <!-- Заклил -->
        <section class="power-plant-call animation-tracking">
          <div class="container">
            <div class="row">
              <div class="pic-wrapper col-lg-5 second-up">
                <div class="inner-pic">
                  <img
                      class="lazy"
                      data-src="<?php echo wp_get_attachment_image_src($callImage, 'full')[0];?>"
                      alt="<?php echo get_post_meta($callImage, '_wp_attachment_image_alt', TRUE);?>"
                  >
                </div>
              </div>
              <div class="text-content col-lg-7 indent-top-small indent-bottom-big first-up">
                <h2 class="block-title big-title"><?php echo $callBlockTitle;?></h2>
                <div class="text"><?php echo wpautop($callText);?></div>
                <a href="#" rel="nofollow" class="button" data-bs-toggle="modal" data-bs-target="#formModal">
                  <?php echo esc_html( pll__( 'Розрахувати вартість СЕС' ) ); ?>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <g clip-path="url(#clip0_992_222)">
                      <path d="M3.125 19.375C3.125 19.2093 3.05917 19.0503 2.94196 18.933C2.82475 18.8158 2.66575 18.75 2.5 18.75C2.33425 18.75 2.17525 18.8158 2.05804 18.933C1.94083 19.0503 1.875 19.2093 1.875 19.375C1.875 19.5408 1.94083 19.6998 2.05804 19.817C2.17525 19.9342 2.33425 20 2.5 20C2.66575 20 2.82475 19.9342 2.94196 19.817C3.05917 19.6998 3.125 19.5408 3.125 19.375ZM5 19.375C5 19.2093 4.93417 19.0503 4.81696 18.933C4.69975 18.8158 4.54075 18.75 4.375 18.75C4.20925 18.75 4.05025 18.8158 3.93304 18.933C3.81583 19.0503 3.75 19.2093 3.75 19.375C3.75 19.5408 3.81583 19.6998 3.93304 19.817C4.05025 19.9342 4.20925 20 4.375 20C4.54075 20 4.69975 19.9342 4.81696 19.817C4.93417 19.6998 5 19.5408 5 19.375ZM6.875 17.5C6.875 17.3343 6.80917 17.1753 6.69196 17.058C6.57475 16.9408 6.41575 16.875 6.25 16.875C6.08425 16.875 5.92525 16.9408 5.80804 17.058C5.69083 17.1753 5.625 17.3343 5.625 17.5C5.625 17.6658 5.69083 17.8248 5.80804 17.942C5.92525 18.0592 6.08425 18.125 6.25 18.125C6.41575 18.125 6.57475 18.0592 6.69196 17.942C6.80917 17.8248 6.875 17.6658 6.875 17.5ZM8.75 17.5C8.75 17.3343 8.68417 17.1753 8.56696 17.058C8.44975 16.9408 8.29075 16.875 8.125 16.875C7.95925 16.875 7.80025 16.9408 7.68304 17.058C7.56583 17.1753 7.5 17.3343 7.5 17.5C7.5 17.6658 7.56583 17.8248 7.68304 17.942C7.80025 18.0592 7.95925 18.125 8.125 18.125C8.29075 18.125 8.44975 18.0592 8.56696 17.942C8.68417 17.8248 8.75 17.6658 8.75 17.5ZM10.625 15.625C10.625 15.4593 10.5592 15.3003 10.442 15.183C10.3248 15.0658 10.1658 15 10 15C9.83425 15 9.67525 15.0658 9.55804 15.183C9.44083 15.3003 9.375 15.4593 9.375 15.625C9.375 15.7908 9.44083 15.9498 9.55804 16.067C9.67525 16.1842 9.83425 16.25 10 16.25C10.1658 16.25 10.3248 16.1842 10.442 16.067C10.5592 15.9498 10.625 15.7908 10.625 15.625ZM12.5 15.625C12.5 15.4593 12.4342 15.3003 12.317 15.183C12.1998 15.0658 12.0408 15 11.875 15C11.7093 15 11.5503 15.0658 11.433 15.183C11.3158 15.3003 11.25 15.4593 11.25 15.625C11.25 15.7908 11.3158 15.9498 11.433 16.067C11.5503 16.1842 11.7093 16.25 11.875 16.25C12.0408 16.25 12.1998 16.1842 12.317 16.067C12.4342 15.9498 12.5 15.7908 12.5 15.625ZM14.375 13.75C14.375 13.5843 14.3092 13.4253 14.192 13.308C14.0748 13.1908 13.9158 13.125 13.75 13.125C13.5843 13.125 13.4253 13.1908 13.308 13.308C13.1908 13.4253 13.125 13.5843 13.125 13.75C13.125 13.9158 13.1908 14.0748 13.308 14.192C13.4253 14.3092 13.5843 14.375 13.75 14.375C13.9158 14.375 14.0748 14.3092 14.192 14.192C14.3092 14.0748 14.375 13.9158 14.375 13.75ZM16.25 13.75C16.25 13.5843 16.1842 13.4253 16.0669 13.308C15.9497 13.1908 15.7908 13.125 15.625 13.125C15.4593 13.125 15.3003 13.1908 15.183 13.308C15.0658 13.4253 15 13.5843 15 13.75C15 13.9158 15.0658 14.0748 15.183 14.192C15.3003 14.3092 15.4593 14.375 15.625 14.375C15.7908 14.375 15.9497 14.3092 16.0669 14.192C16.1842 14.0748 16.25 13.9158 16.25 13.75ZM18.125 11.875C18.125 11.7093 18.0592 11.5503 17.9419 11.433C17.8247 11.3158 17.6658 11.25 17.5 11.25C17.3342 11.25 17.1753 11.3158 17.0581 11.433C16.9409 11.5503 16.875 11.7093 16.875 11.875C16.875 12.0408 16.9409 12.1998 17.0581 12.317C17.1753 12.4342 17.3342 12.5 17.5 12.5C17.6658 12.5 17.8247 12.4342 17.9419 12.317C18.0592 12.1998 18.125 12.0408 18.125 11.875ZM6.875 2.5C6.875 2.33424 6.80917 2.17527 6.69196 2.05806C6.57475 1.94085 6.41575 1.875 6.25 1.875C6.08425 1.875 5.92525 1.94085 5.80804 2.05806C5.69083 2.17527 5.625 2.33424 5.625 2.5C5.625 2.66576 5.69083 2.82473 5.80804 2.94194C5.92525 3.05915 6.08425 3.125 6.25 3.125C6.41575 3.125 6.57475 3.05915 6.69196 2.94194C6.80917 2.82473 6.875 2.66576 6.875 2.5ZM8.75 2.5C8.75 2.33424 8.68417 2.17527 8.56696 2.05806C8.44975 1.94085 8.29075 1.875 8.125 1.875C7.95925 1.875 7.80025 1.94085 7.68304 2.05806C7.56583 2.17527 7.5 2.33424 7.5 2.5C7.5 2.66576 7.56583 2.82473 7.68304 2.94194C7.80025 3.05915 7.95925 3.125 8.125 3.125C8.29075 3.125 8.44975 3.05915 8.56696 2.94194C8.68417 2.82473 8.75 2.66576 8.75 2.5ZM10.625 4.375C10.625 4.20925 10.5592 4.05027 10.442 3.93306C10.3247 3.81585 10.1658 3.75 10 3.75C9.83425 3.75 9.67525 3.81585 9.55804 3.93306C9.44083 4.05027 9.375 4.20925 9.375 4.375C9.375 4.54075 9.44083 4.69975 9.55804 4.81696C9.67525 4.93417 9.83425 5 10 5C10.1658 5 10.3248 4.93417 10.442 4.81696C10.5592 4.69975 10.625 4.54075 10.625 4.375ZM12.5 4.375C12.5 4.20925 12.4342 4.05027 12.317 3.93306C12.1997 3.81585 12.0408 3.75 11.875 3.75C11.7093 3.75 11.5503 3.81585 11.433 3.93306C11.3158 4.05027 11.25 4.20925 11.25 4.375C11.25 4.54075 11.3158 4.69975 11.433 4.81696C11.5503 4.93417 11.7093 5 11.875 5C12.0408 5 12.1998 4.93417 12.317 4.81696C12.4342 4.69975 12.5 4.54075 12.5 4.375ZM14.375 6.25C14.375 6.08425 14.3092 5.92525 14.192 5.80804C14.0748 5.69083 13.9158 5.625 13.75 5.625C13.5843 5.625 13.4253 5.69083 13.308 5.80804C13.1908 5.92525 13.125 6.08425 13.125 6.25C13.125 6.41575 13.1908 6.57475 13.308 6.69196C13.4253 6.80917 13.5843 6.875 13.75 6.875C13.9158 6.875 14.0748 6.80917 14.192 6.69196C14.3092 6.57475 14.375 6.41575 14.375 6.25ZM16.25 6.25C16.25 6.08425 16.1842 5.92525 16.0669 5.80804C15.9497 5.69083 15.7908 5.625 15.625 5.625C15.4593 5.625 15.3003 5.69083 15.183 5.80804C15.0658 5.92525 15 6.08425 15 6.25C15 6.41575 15.0658 6.57475 15.183 6.69196C15.3003 6.80917 15.4593 6.875 15.625 6.875C15.7908 6.875 15.9497 6.80917 16.0669 6.69196C16.1842 6.57475 16.25 6.41575 16.25 6.25ZM18.125 8.125C18.125 7.95925 18.0592 7.80025 17.9419 7.68304C17.8247 7.56583 17.6658 7.5 17.5 7.5C17.3342 7.5 17.1753 7.56583 17.0581 7.68304C16.9409 7.80025 16.875 7.95925 16.875 8.125C16.875 8.29075 16.9409 8.44975 17.0581 8.56696C17.1753 8.68417 17.3342 8.75 17.5 8.75C17.6658 8.75 17.8247 8.68417 17.9419 8.56696C18.0592 8.44975 18.125 8.29075 18.125 8.125ZM20 10C20 9.83425 19.9342 9.67525 19.8169 9.55804C19.6997 9.44084 19.5408 9.375 19.375 9.375C19.2092 9.375 19.0503 9.44084 18.9331 9.55804C18.8159 9.67525 18.75 9.83425 18.75 10C18.75 10.1658 18.8159 10.3248 18.9331 10.442C19.0503 10.5592 19.2092 10.625 19.375 10.625C19.5408 10.625 19.6997 10.5592 19.8169 10.442C19.9342 10.3248 20 10.1658 20 10ZM3.125 0.625C3.125 0.459242 3.05917 0.300269 2.94196 0.183059C2.82475 0.0658481 2.66575 2.06709e-07 2.5 2.08685e-07C2.33425 2.10662e-07 2.17525 0.0658481 2.05804 0.183059C1.94083 0.300269 1.875 0.459242 1.875 0.625C1.875 0.790759 1.94083 0.949734 2.05804 1.06694C2.17525 1.18415 2.33425 1.25 2.5 1.25C2.66575 1.25 2.82475 1.18415 2.94196 1.06694C3.05917 0.949734 3.125 0.790759 3.125 0.625ZM5 0.625C5 0.459242 4.93417 0.300269 4.81696 0.183059C4.69975 0.0658481 4.54075 1.8435e-07 4.375 1.86326e-07C4.20925 1.88303e-07 4.05025 0.0658481 3.93304 0.183059C3.81583 0.300269 3.75 0.459242 3.75 0.625C3.75 0.790759 3.81583 0.949734 3.93304 1.06694C4.05025 1.18415 4.20925 1.25 4.375 1.25C4.54075 1.25 4.69975 1.18415 4.81696 1.06694C4.93417 0.949734 5 0.790759 5 0.625ZM3.125 15.625C3.125 15.4593 3.05917 15.3003 2.94196 15.183C2.82475 15.0658 2.66575 15 2.5 15C2.33425 15 2.17525 15.0658 2.05804 15.183C1.94083 15.3003 1.875 15.4593 1.875 15.625C1.875 15.7908 1.94083 15.9498 2.05804 16.067C2.17525 16.1842 2.33425 16.25 2.5 16.25C2.66575 16.25 2.82475 16.1842 2.94196 16.067C3.05917 15.9498 3.125 15.7908 3.125 15.625ZM3.125 17.5C3.125 17.3343 3.05917 17.1753 2.94196 17.058C2.82475 16.9408 2.66575 16.875 2.5 16.875C2.33425 16.875 2.17525 16.9408 2.05804 17.058C1.94083 17.1753 1.875 17.3343 1.875 17.5C1.875 17.6658 1.94083 17.8248 2.05804 17.942C2.17525 18.0592 2.33425 18.125 2.5 18.125C2.66575 18.125 2.82475 18.0592 2.94196 17.942C3.05917 17.8248 3.125 17.6658 3.125 17.5ZM5 17.5C5 17.3343 4.93417 17.1753 4.81696 17.058C4.69975 16.9408 4.54075 16.875 4.375 16.875C4.20925 16.875 4.05025 16.9408 3.93304 17.058C3.81583 17.1753 3.75 17.3343 3.75 17.5C3.75 17.6658 3.81583 17.8248 3.93304 17.942C4.05025 18.0592 4.20925 18.125 4.375 18.125C4.54075 18.125 4.69975 18.0592 4.81696 17.942C4.93417 17.8248 5 17.6658 5 17.5ZM8.75 15.625C8.75 15.4593 8.68417 15.3003 8.56696 15.183C8.44975 15.0658 8.29075 15 8.125 15C7.95925 15 7.80025 15.0658 7.68304 15.183C7.56583 15.3003 7.5 15.4593 7.5 15.625C7.5 15.7908 7.56583 15.9498 7.68304 16.067C7.80025 16.1842 7.95925 16.25 8.125 16.25C8.29075 16.25 8.44975 16.1842 8.56696 16.067C8.68417 15.9498 8.75 15.7908 8.75 15.625ZM12.5 13.75C12.5 13.5843 12.4342 13.4253 12.317 13.308C12.1998 13.1908 12.0408 13.125 11.875 13.125C11.7093 13.125 11.5503 13.1908 11.433 13.308C11.3158 13.4253 11.25 13.5843 11.25 13.75C11.25 13.9158 11.3158 14.0748 11.433 14.192C11.5503 14.3092 11.7093 14.375 11.875 14.375C12.0408 14.375 12.1998 14.3092 12.317 14.192C12.4342 14.0748 12.5 13.9158 12.5 13.75ZM16.25 11.875C16.25 11.7093 16.1842 11.5503 16.0669 11.433C15.9497 11.3158 15.7908 11.25 15.625 11.25C15.4593 11.25 15.3003 11.3158 15.183 11.433C15.0658 11.5503 15 11.7093 15 11.875C15 12.0408 15.0658 12.1998 15.183 12.317C15.3003 12.4342 15.4593 12.5 15.625 12.5C15.7908 12.5 15.9497 12.4342 16.0669 12.317C16.1842 12.1998 16.25 12.0408 16.25 11.875ZM5 6.25C5 6.08425 4.93417 5.92525 4.81696 5.80804C4.69975 5.69083 4.54075 5.625 4.375 5.625C4.20925 5.625 4.05025 5.69083 3.93304 5.80804C3.81583 5.92525 3.75 6.08425 3.75 6.25C3.75 6.41575 3.81583 6.57475 3.93304 6.69196C4.05025 6.80917 4.20925 6.875 4.375 6.875C4.54075 6.875 4.69975 6.80917 4.81696 6.69196C4.93417 6.57475 5 6.41575 5 6.25ZM3.125 4.375C3.125 4.20925 3.05917 4.05027 2.94196 3.93306C2.82475 3.81585 2.66575 3.75 2.5 3.75C2.33425 3.75 2.17525 3.81585 2.05804 3.93306C1.94083 4.05027 1.875 4.20925 1.875 4.375C1.875 4.54075 1.94083 4.69975 2.05804 4.81696C2.17525 4.93417 2.33425 5 2.5 5C2.66575 5 2.82475 4.93417 2.94196 4.81696C3.05917 4.69975 3.125 4.54075 3.125 4.375ZM5 15.625C5 15.4593 4.93417 15.3003 4.81696 15.183C4.69975 15.0658 4.54075 15 4.375 15C4.20925 15 4.05025 15.0658 3.93304 15.183C3.81583 15.3003 3.75 15.4593 3.75 15.625C3.75 15.7908 3.81583 15.9498 3.93304 16.067C4.05025 16.1842 4.20925 16.25 4.375 16.25C4.54075 16.25 4.69975 16.1842 4.81696 16.067C4.93417 15.9498 5 15.7908 5 15.625ZM5 13.75C5 13.5843 4.93417 13.4253 4.81696 13.308C4.69975 13.1908 4.54075 13.125 4.375 13.125C4.20925 13.125 4.05025 13.1908 3.93304 13.308C3.81583 13.4253 3.75 13.5843 3.75 13.75C3.75 13.9158 3.81583 14.0748 3.93304 14.192C4.05025 14.3092 4.20925 14.375 4.375 14.375C4.54075 14.375 4.69975 14.3092 4.81696 14.192C4.93417 14.0748 5 13.9158 5 13.75ZM5 11.875C5 11.7093 4.93417 11.5503 4.81696 11.433C4.69975 11.3158 4.54075 11.25 4.375 11.25C4.20925 11.25 4.05025 11.3158 3.93304 11.433C3.81583 11.5503 3.75 11.7093 3.75 11.875C3.75 12.0408 3.81583 12.1998 3.93304 12.317C4.05025 12.4342 4.20925 12.5 4.375 12.5C4.54075 12.5 4.69975 12.4342 4.81696 12.317C4.93417 12.1998 5 12.0408 5 11.875ZM5 10C5 9.83425 4.93417 9.67525 4.81696 9.55804C4.69975 9.44084 4.54075 9.375 4.375 9.375C4.20925 9.375 4.05025 9.44084 3.93304 9.55804C3.81583 9.67525 3.75 9.83425 3.75 10C3.75 10.1658 3.81583 10.3248 3.93304 10.442C4.05025 10.5592 4.20925 10.625 4.375 10.625C4.54075 10.625 4.69975 10.5592 4.81696 10.442C4.93417 10.3248 5 10.1658 5 10ZM5 8.125C5 7.95925 4.93417 7.80025 4.81696 7.68304C4.69975 7.56583 4.54075 7.5 4.375 7.5C4.20925 7.5 4.05025 7.56583 3.93304 7.68304C3.81583 7.80025 3.75 7.95925 3.75 8.125C3.75 8.29075 3.81583 8.44975 3.93304 8.56696C4.05025 8.68417 4.20925 8.75 4.375 8.75C4.54075 8.75 4.69975 8.68417 4.81696 8.56696C4.93417 8.44975 5 8.29075 5 8.125ZM6.875 10C6.875 9.83425 6.80917 9.67525 6.69196 9.55804C6.57475 9.44084 6.41575 9.375 6.25 9.375C6.08425 9.375 5.92525 9.44084 5.80804 9.55804C5.69083 9.67525 5.625 9.83425 5.625 10C5.625 10.1658 5.69083 10.3248 5.80804 10.442C5.92525 10.5592 6.08425 10.625 6.25 10.625C6.41575 10.625 6.57475 10.5592 6.69196 10.442C6.80917 10.3248 6.875 10.1658 6.875 10ZM6.875 15.625C6.875 15.4593 6.80917 15.3003 6.69196 15.183C6.57475 15.0658 6.41575 15 6.25 15C6.08425 15 5.92525 15.0658 5.80804 15.183C5.69083 15.3003 5.625 15.4593 5.625 15.625C5.625 15.7908 5.69083 15.9498 5.80804 16.067C5.92525 16.1842 6.08425 16.25 6.25 16.25C6.41575 16.25 6.57475 16.1842 6.69196 16.067C6.80917 15.9498 6.875 15.7908 6.875 15.625ZM6.875 13.75C6.875 13.5843 6.80917 13.4253 6.69196 13.308C6.57475 13.1908 6.41575 13.125 6.25 13.125C6.08425 13.125 5.92525 13.1908 5.80804 13.308C5.69083 13.4253 5.625 13.5843 5.625 13.75C5.625 13.9158 5.69083 14.0748 5.80804 14.192C5.92525 14.3092 6.08425 14.375 6.25 14.375C6.41575 14.375 6.57475 14.3092 6.69196 14.192C6.80917 14.0748 6.875 13.9158 6.875 13.75ZM6.875 11.875C6.875 11.7093 6.80917 11.5503 6.69196 11.433C6.57475 11.3158 6.41575 11.25 6.25 11.25C6.08425 11.25 5.92525 11.3158 5.80804 11.433C5.69083 11.5503 5.625 11.7093 5.625 11.875C5.625 12.0408 5.69083 12.1998 5.80804 12.317C5.92525 12.4342 6.08425 12.5 6.25 12.5C6.41575 12.5 6.57475 12.4342 6.69196 12.317C6.80917 12.1998 6.875 12.0408 6.875 11.875ZM8.75 13.75C8.75 13.5843 8.68417 13.4253 8.56696 13.308C8.44975 13.1908 8.29075 13.125 8.125 13.125C7.95925 13.125 7.80025 13.1908 7.68304 13.308C7.56583 13.4253 7.5 13.5843 7.5 13.75C7.5 13.9158 7.56583 14.0748 7.68304 14.192C7.80025 14.3092 7.95925 14.375 8.125 14.375C8.29075 14.375 8.44975 14.3092 8.56696 14.192C8.68417 14.0748 8.75 13.9158 8.75 13.75ZM8.75 11.875C8.75 11.7093 8.68417 11.5503 8.56696 11.433C8.44975 11.3158 8.29075 11.25 8.125 11.25C7.95925 11.25 7.80025 11.3158 7.68304 11.433C7.56583 11.5503 7.5 11.7093 7.5 11.875C7.5 12.0408 7.56583 12.1998 7.68304 12.317C7.80025 12.4342 7.95925 12.5 8.125 12.5C8.29075 12.5 8.44975 12.4342 8.56696 12.317C8.68417 12.1998 8.75 12.0408 8.75 11.875ZM8.75 10C8.75 9.83425 8.68417 9.67525 8.56696 9.55804C8.44975 9.44084 8.29075 9.375 8.125 9.375C7.95925 9.375 7.80025 9.44084 7.68304 9.55804C7.56583 9.67525 7.5 9.83425 7.5 10C7.5 10.1658 7.56583 10.3248 7.68304 10.442C7.80025 10.5592 7.95925 10.625 8.125 10.625C8.29075 10.625 8.44975 10.5592 8.56696 10.442C8.68417 10.3248 8.75 10.1658 8.75 10ZM10.625 13.75C10.625 13.5843 10.5592 13.4253 10.442 13.308C10.3248 13.1908 10.1658 13.125 10 13.125C9.83425 13.125 9.67525 13.1908 9.55804 13.308C9.44083 13.4253 9.375 13.5843 9.375 13.75C9.375 13.9158 9.44083 14.0748 9.55804 14.192C9.67525 14.3092 9.83425 14.375 10 14.375C10.1658 14.375 10.3248 14.3092 10.442 14.192C10.5592 14.0748 10.625 13.9158 10.625 13.75ZM10.625 11.875C10.625 11.7093 10.5592 11.5503 10.442 11.433C10.3248 11.3158 10.1658 11.25 10 11.25C9.83425 11.25 9.67525 11.3158 9.55804 11.433C9.44083 11.5503 9.375 11.7093 9.375 11.875C9.375 12.0408 9.44083 12.1998 9.55804 12.317C9.67525 12.4342 9.83425 12.5 10 12.5C10.1658 12.5 10.3248 12.4342 10.442 12.317C10.5592 12.1998 10.625 12.0408 10.625 11.875ZM12.5 11.875C12.5 11.7093 12.4342 11.5503 12.317 11.433C12.1998 11.3158 12.0408 11.25 11.875 11.25C11.7093 11.25 11.5503 11.3158 11.433 11.433C11.3158 11.5503 11.25 11.7093 11.25 11.875C11.25 12.0408 11.3158 12.1998 11.433 12.317C11.5503 12.4342 11.7093 12.5 11.875 12.5C12.0408 12.5 12.1998 12.4342 12.317 12.317C12.4342 12.1998 12.5 12.0408 12.5 11.875ZM14.375 11.875C14.375 11.7093 14.3092 11.5503 14.192 11.433C14.0748 11.3158 13.9158 11.25 13.75 11.25C13.5843 11.25 13.4253 11.3158 13.308 11.433C13.1908 11.5503 13.125 11.7093 13.125 11.875C13.125 12.0408 13.1908 12.1998 13.308 12.317C13.4253 12.4342 13.5843 12.5 13.75 12.5C13.9158 12.5 14.0748 12.4342 14.192 12.317C14.3092 12.1998 14.375 12.0408 14.375 11.875ZM10.625 10C10.625 9.83425 10.5592 9.67525 10.442 9.55804C10.3248 9.44084 10.1658 9.375 10 9.375C9.83425 9.375 9.67525 9.44084 9.55804 9.55804C9.44083 9.67525 9.375 9.83425 9.375 10C9.375 10.1658 9.44083 10.3248 9.55804 10.442C9.67525 10.5592 9.83425 10.625 10 10.625C10.1658 10.625 10.3248 10.5592 10.442 10.442C10.5592 10.3248 10.625 10.1658 10.625 10ZM12.5 10C12.5 9.83425 12.4342 9.67525 12.317 9.55804C12.1998 9.44084 12.0408 9.375 11.875 9.375C11.7093 9.375 11.5503 9.44084 11.433 9.55804C11.3158 9.67525 11.25 9.83425 11.25 10C11.25 10.1658 11.3158 10.3248 11.433 10.442C11.5503 10.5592 11.7093 10.625 11.875 10.625C12.0408 10.625 12.1998 10.5592 12.317 10.442C12.4342 10.3248 12.5 10.1658 12.5 10ZM14.375 10C14.375 9.83425 14.3092 9.67525 14.192 9.55804C14.0748 9.44084 13.9158 9.375 13.75 9.375C13.5843 9.375 13.4253 9.44084 13.308 9.55804C13.1908 9.67525 13.125 9.83425 13.125 10C13.125 10.1658 13.1908 10.3248 13.308 10.442C13.4253 10.5592 13.5843 10.625 13.75 10.625C13.9158 10.625 14.0748 10.5592 14.192 10.442C14.3092 10.3248 14.375 10.1658 14.375 10ZM16.25 10C16.25 9.83425 16.1842 9.67525 16.0669 9.55804C15.9497 9.44084 15.7908 9.375 15.625 9.375C15.4593 9.375 15.3003 9.44084 15.183 9.55804C15.0658 9.67525 15 9.83425 15 10C15 10.1658 15.0658 10.3248 15.183 10.442C15.3003 10.5592 15.4593 10.625 15.625 10.625C15.7908 10.625 15.9497 10.5592 16.0669 10.442C16.1842 10.3248 16.25 10.1658 16.25 10ZM3.125 2.5C3.125 2.33424 3.05917 2.17527 2.94196 2.05806C2.82475 1.94085 2.66575 1.875 2.5 1.875C2.33425 1.875 2.17525 1.94085 2.05804 2.05806C1.94083 2.17527 1.875 2.33424 1.875 2.5C1.875 2.66576 1.94083 2.82473 2.05804 2.94194C2.17525 3.05915 2.33425 3.125 2.5 3.125C2.66575 3.125 2.82475 3.05915 2.94196 2.94194C3.05917 2.82473 3.125 2.66576 3.125 2.5ZM18.125 10C18.125 9.83425 18.0592 9.67525 17.9419 9.55804C17.8247 9.44084 17.6658 9.375 17.5 9.375C17.3342 9.375 17.1753 9.44084 17.0581 9.55804C16.9409 9.67525 16.875 9.83425 16.875 10C16.875 10.1658 16.9409 10.3248 17.0581 10.442C17.1753 10.5592 17.3342 10.625 17.5 10.625C17.6658 10.625 17.8247 10.5592 17.9419 10.442C18.0592 10.3248 18.125 10.1658 18.125 10Z" fill="#FCFCFC"/>
                    </g>
                    <defs>
                      <clipPath id="clip0_992_222">
                        <rect width="20" height="20" fill="white" transform="translate(20) rotate(90)"/>
                      </clipPath>
                    </defs>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </section>
    <?php endif;?>

  <!-- Типи соняшних електростанцій  -->
  <section class="solar-power-plants-types indent-top-big indent-bottom-small animation-tracking">
      <div class="container">
        <div class="row types-list first-up">
            <?php
	  	        $powerPlantCat = get_categories( array(
                'taxonomy'     => 'solar_types_tax',
                'type'         => 'solar_types',
                'child_of'     => false,
                'parent'       => '',
                'orderby'      => 'name',
                'order'        => 'ASC',
                'hide_empty'   => 1,
                'exclude'      => array(21,19),
                'hierarchical' => false,
                'number'       => 0,
                'pad_counts'   => false,
              ) );

              if ( $powerPlantCat ):?>
                <ul class="solar-power-plants-types__list col-12">
	                <?php foreach( $powerPlantCat as $plantCat ):?>
                    <?php
                      $powerPlentCatArgs = array(
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'solar_types_tax',
                            'field' => 'id',
                            'terms' => $plantCat->term_id,
                          )

                        ),
                        'post_type' => 'solar_types',
                        'post_status'  => 'publish',
                        'orderby' 	 => 'date',
                        'offset'     => 0
                      );

                      $countProducts = 0;

                      $ourProductsCat = new WP_Query( $powerPlentCatArgs );

	                  if ( $ourProductsCat->have_posts() ) :?>

		                  <?php	while ( $ourProductsCat->have_posts() ) : $ourProductsCat->the_post(); ?>

			                  <?php
			                  if( has_term($serviceCategoryId, 'solar_decision_tax') ){
                          $countProducts = $countProducts + 1;
                          }
			                  ?>

		                  <?php endwhile;?>

	                  <?php endif; ?>
	                  <?php wp_reset_postdata(); ?>
                    <?php if( $countProducts > 0 ):?>
                      <li class="solar-power-plants-types__item">
                        <a href="#" rel="nofollow" data-cat-id="<?php echo $plantCat->term_id;?>" data-cat-and="<?php echo $serviceCategoryId;?>">
                            <?php echo $plantCat->name;?>
                        </a>
                      </li>
	                  <?php endif;?>
	                <?php endforeach;?>
                </ul>
          <?php endif;?>
        </div>
        <div class="row content second-up" id="power-plants-list"></div>
      </div>
    </section>

    <?php
        $featuresBlockTitle = carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_features_block_title'.green_system_lang_prefix());
	      $featuresDescription = carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_features_description'.green_system_lang_prefix());
	      $featuresText = carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_features_text'.green_system_lang_prefix());

        if( $featuresBlockTitle && $featuresDescription ):?>
        <!-- Особливості -->
        <section class="features indent-top-big indent-bottom-big animation-tracking">
          <div class="container">
            <div class="row">
              <h2 class="block-title big-title col-lg-6 first-up"><?php echo $featuresBlockTitle;?></h2>
              <div class="text-content col-lg-6 second-up">
                <p class="text-preview"><?php echo $featuresDescription;?></p>
                <?php if( $featuresText ):?>
                    <div class="more-text"><?php echo wpautop($featuresText);?></div>
                  <a href="#" rel="nofollow" class="button">
	                  <?php echo esc_html( pll__( 'Детальніше' ) ); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <g clip-path="url(#clip0_1014_182)">
                        <path d="M0.624997 3.125C0.790747 3.125 0.949746 3.05917 1.06695 2.94196C1.18416 2.82475 1.25 2.66575 1.25 2.5C1.25 2.33425 1.18416 2.17525 1.06695 2.05804C0.949746 1.94084 0.790747 1.875 0.624997 1.875C0.459246 1.875 0.300246 1.94084 0.183037 2.05804C0.0658287 2.17525 -3.45174e-06 2.33425 -3.43725e-06 2.5C-3.42276e-06 2.66575 0.0658287 2.82475 0.183037 2.94196C0.300246 3.05917 0.459246 3.125 0.624997 3.125ZM0.624997 5C0.790747 5 0.949746 4.93417 1.06695 4.81696C1.18416 4.69975 1.25 4.54075 1.25 4.375C1.25 4.20925 1.18416 4.05025 1.06695 3.93304C0.949746 3.81584 0.790747 3.75 0.624997 3.75C0.459246 3.75 0.300246 3.81584 0.183037 3.93304C0.0658288 4.05025 -3.28782e-06 4.20925 -3.27333e-06 4.375C-3.25884e-06 4.54075 0.0658289 4.69975 0.183037 4.81696C0.300246 4.93417 0.459246 5 0.624997 5ZM2.5 6.875C2.66575 6.875 2.82475 6.80917 2.94195 6.69196C3.05916 6.57475 3.125 6.41575 3.125 6.25C3.125 6.08425 3.05916 5.92525 2.94195 5.80804C2.82475 5.69084 2.66575 5.625 2.5 5.625C2.33425 5.625 2.17525 5.69084 2.05804 5.80804C1.94083 5.92525 1.875 6.08425 1.875 6.25C1.875 6.41575 1.94083 6.57475 2.05804 6.69196C2.17525 6.80917 2.33425 6.875 2.5 6.875ZM2.5 8.75C2.66575 8.75 2.82475 8.68417 2.94195 8.56696C3.05916 8.44975 3.125 8.29075 3.125 8.125C3.125 7.95925 3.05916 7.80025 2.94195 7.68304C2.82475 7.56584 2.66575 7.5 2.5 7.5C2.33425 7.5 2.17525 7.56584 2.05804 7.68304C1.94083 7.80025 1.875 7.95925 1.875 8.125C1.875 8.29075 1.94083 8.44975 2.05804 8.56696C2.17525 8.68417 2.33425 8.75 2.5 8.75ZM4.375 10.625C4.54075 10.625 4.69975 10.5592 4.81696 10.442C4.93416 10.3248 5 10.1658 5 10C5 9.83425 4.93416 9.67525 4.81696 9.55804C4.69975 9.44084 4.54075 9.375 4.375 9.375C4.20925 9.375 4.05025 9.44084 3.93304 9.55804C3.81583 9.67525 3.75 9.83425 3.75 10C3.75 10.1658 3.81583 10.3248 3.93304 10.442C4.05025 10.5592 4.20925 10.625 4.375 10.625ZM4.375 12.5C4.54075 12.5 4.69975 12.4342 4.81696 12.317C4.93416 12.1998 5 12.0408 5 11.875C5 11.7093 4.93416 11.5503 4.81696 11.433C4.69975 11.3158 4.54075 11.25 4.375 11.25C4.20925 11.25 4.05025 11.3158 3.93304 11.433C3.81583 11.5503 3.75 11.7093 3.75 11.875C3.75 12.0408 3.81583 12.1998 3.93304 12.317C4.05025 12.4342 4.20925 12.5 4.375 12.5ZM6.25 14.375C6.41575 14.375 6.57475 14.3092 6.69196 14.192C6.80916 14.0748 6.875 13.9158 6.875 13.75C6.875 13.5843 6.80916 13.4253 6.69196 13.308C6.57475 13.1908 6.41575 13.125 6.25 13.125C6.08425 13.125 5.92525 13.1908 5.80804 13.308C5.69083 13.4253 5.625 13.5843 5.625 13.75C5.625 13.9158 5.69083 14.0748 5.80804 14.192C5.92525 14.3092 6.08425 14.375 6.25 14.375ZM6.25 16.25C6.41575 16.25 6.57475 16.1842 6.69196 16.0669C6.80916 15.9497 6.875 15.7908 6.875 15.625C6.875 15.4593 6.80916 15.3003 6.69196 15.183C6.57475 15.0658 6.41575 15 6.25 15C6.08425 15 5.92525 15.0658 5.80804 15.183C5.69083 15.3003 5.625 15.4593 5.625 15.625C5.625 15.7908 5.69083 15.9497 5.80804 16.0669C5.92525 16.1842 6.08425 16.25 6.25 16.25ZM8.125 18.125C8.29075 18.125 8.44975 18.0592 8.56696 17.9419C8.68416 17.8247 8.75 17.6658 8.75 17.5C8.75 17.3342 8.68416 17.1753 8.56696 17.0581C8.44975 16.9409 8.29075 16.875 8.125 16.875C7.95925 16.875 7.80025 16.9409 7.68304 17.0581C7.56583 17.1753 7.5 17.3342 7.5 17.5C7.5 17.6658 7.56583 17.8247 7.68304 17.9419C7.80025 18.0592 7.95925 18.125 8.125 18.125ZM17.5 6.875C17.6658 6.875 17.8247 6.80917 17.9419 6.69196C18.0591 6.57475 18.125 6.41575 18.125 6.25C18.125 6.08425 18.0591 5.92525 17.9419 5.80804C17.8247 5.69083 17.6658 5.625 17.5 5.625C17.3342 5.625 17.1753 5.69083 17.0581 5.80804C16.9408 5.92525 16.875 6.08425 16.875 6.25C16.875 6.41575 16.9408 6.57475 17.0581 6.69196C17.1753 6.80917 17.3342 6.875 17.5 6.875ZM17.5 8.75C17.6658 8.75 17.8247 8.68417 17.9419 8.56696C18.0591 8.44975 18.125 8.29075 18.125 8.125C18.125 7.95925 18.0591 7.80025 17.9419 7.68304C17.8247 7.56583 17.6658 7.5 17.5 7.5C17.3342 7.5 17.1753 7.56583 17.0581 7.68304C16.9408 7.80025 16.875 7.95925 16.875 8.125C16.875 8.29075 16.9408 8.44975 17.0581 8.56696C17.1753 8.68417 17.3342 8.75 17.5 8.75ZM15.625 10.625C15.7907 10.625 15.9497 10.5592 16.0669 10.442C16.1841 10.3248 16.25 10.1658 16.25 10C16.25 9.83425 16.1841 9.67525 16.0669 9.55804C15.9497 9.44083 15.7907 9.375 15.625 9.375C15.4592 9.375 15.3002 9.44083 15.183 9.55804C15.0658 9.67525 15 9.83425 15 10C15 10.1658 15.0658 10.3248 15.183 10.442C15.3002 10.5592 15.4592 10.625 15.625 10.625ZM15.625 12.5C15.7907 12.5 15.9497 12.4342 16.0669 12.317C16.1841 12.1998 16.25 12.0408 16.25 11.875C16.25 11.7093 16.1841 11.5503 16.0669 11.433C15.9497 11.3158 15.7907 11.25 15.625 11.25C15.4592 11.25 15.3002 11.3158 15.183 11.433C15.0658 11.5503 15 11.7093 15 11.875C15 12.0408 15.0658 12.1998 15.183 12.317C15.3002 12.4342 15.4592 12.5 15.625 12.5ZM13.75 14.375C13.9157 14.375 14.0747 14.3092 14.192 14.192C14.3092 14.0748 14.375 13.9158 14.375 13.75C14.375 13.5843 14.3092 13.4253 14.192 13.308C14.0747 13.1908 13.9157 13.125 13.75 13.125C13.5842 13.125 13.4252 13.1908 13.308 13.308C13.1908 13.4253 13.125 13.5843 13.125 13.75C13.125 13.9158 13.1908 14.0748 13.308 14.192C13.4252 14.3092 13.5842 14.375 13.75 14.375ZM13.75 16.25C13.9157 16.25 14.0747 16.1842 14.192 16.0669C14.3092 15.9497 14.375 15.7908 14.375 15.625C14.375 15.4593 14.3092 15.3003 14.192 15.183C14.0747 15.0658 13.9157 15 13.75 15C13.5842 15 13.4252 15.0658 13.308 15.183C13.1908 15.3003 13.125 15.4593 13.125 15.625C13.125 15.7908 13.1908 15.9497 13.308 16.0669C13.4252 16.1842 13.5842 16.25 13.75 16.25ZM11.875 18.125C12.0407 18.125 12.1997 18.0592 12.317 17.9419C12.4342 17.8247 12.5 17.6658 12.5 17.5C12.5 17.3342 12.4342 17.1753 12.317 17.0581C12.1997 16.9409 12.0407 16.875 11.875 16.875C11.7092 16.875 11.5502 16.9409 11.433 17.0581C11.3158 17.1753 11.25 17.3342 11.25 17.5C11.25 17.6658 11.3158 17.8247 11.433 17.9419C11.5502 18.0592 11.7092 18.125 11.875 18.125ZM10 20C10.1657 20 10.3247 19.9342 10.442 19.8169C10.5592 19.6997 10.625 19.5408 10.625 19.375C10.625 19.2092 10.5592 19.0503 10.442 18.9331C10.3247 18.8159 10.1657 18.75 10 18.75C9.83425 18.75 9.67525 18.8159 9.55804 18.9331C9.44083 19.0503 9.375 19.2092 9.375 19.375C9.375 19.5408 9.44083 19.6997 9.55804 19.8169C9.67525 19.9342 9.83425 20 10 20ZM19.375 3.125C19.5408 3.125 19.6997 3.05917 19.8169 2.94196C19.9342 2.82475 20 2.66575 20 2.5C20 2.33425 19.9342 2.17525 19.8169 2.05804C19.6997 1.94083 19.5408 1.875 19.375 1.875C19.2092 1.875 19.0503 1.94083 18.9331 2.05804C18.8158 2.17525 18.75 2.33425 18.75 2.5C18.75 2.66575 18.8158 2.82475 18.9331 2.94196C19.0503 3.05917 19.2092 3.125 19.375 3.125ZM19.375 5C19.5408 5 19.6997 4.93417 19.8169 4.81696C19.9342 4.69975 20 4.54075 20 4.375C20 4.20925 19.9342 4.05025 19.8169 3.93304C19.6997 3.81583 19.5408 3.75 19.375 3.75C19.2092 3.75 19.0503 3.81583 18.9331 3.93304C18.8158 4.05025 18.75 4.20925 18.75 4.375C18.75 4.54075 18.8158 4.69975 18.9331 4.81696C19.0503 4.93417 19.2092 5 19.375 5ZM4.375 3.125C4.54075 3.125 4.69975 3.05917 4.81696 2.94196C4.93416 2.82475 5 2.66575 5 2.5C5 2.33425 4.93416 2.17525 4.81695 2.05804C4.69975 1.94084 4.54075 1.875 4.375 1.875C4.20925 1.875 4.05025 1.94084 3.93304 2.05804C3.81583 2.17525 3.75 2.33425 3.75 2.5C3.75 2.66575 3.81583 2.82475 3.93304 2.94196C4.05025 3.05917 4.20925 3.125 4.375 3.125ZM2.5 3.125C2.66575 3.125 2.82475 3.05917 2.94195 2.94196C3.05916 2.82475 3.125 2.66575 3.125 2.5C3.125 2.33425 3.05916 2.17525 2.94195 2.05804C2.82475 1.94084 2.66575 1.875 2.5 1.875C2.33425 1.875 2.17525 1.94084 2.05804 2.05804C1.94083 2.17525 1.875 2.33425 1.875 2.5C1.875 2.66575 1.94083 2.82475 2.05804 2.94196C2.17525 3.05917 2.33425 3.125 2.5 3.125ZM2.5 5C2.66575 5 2.82475 4.93417 2.94195 4.81696C3.05916 4.69975 3.125 4.54075 3.125 4.375C3.125 4.20925 3.05916 4.05025 2.94195 3.93304C2.82475 3.81584 2.66575 3.75 2.5 3.75C2.33425 3.75 2.17525 3.81584 2.05804 3.93304C1.94083 4.05025 1.875 4.20925 1.875 4.375C1.875 4.54075 1.94083 4.69975 2.05804 4.81696C2.17525 4.93417 2.33425 5 2.5 5ZM4.375 8.75C4.54075 8.75 4.69975 8.68417 4.81696 8.56696C4.93416 8.44975 5 8.29075 5 8.125C5 7.95925 4.93416 7.80025 4.81696 7.68304C4.69975 7.56584 4.54075 7.5 4.375 7.5C4.20925 7.5 4.05025 7.56584 3.93304 7.68304C3.81583 7.80025 3.75 7.95925 3.75 8.125C3.75 8.29075 3.81583 8.44975 3.93304 8.56696C4.05025 8.68417 4.20925 8.75 4.375 8.75ZM6.25 12.5C6.41575 12.5 6.57475 12.4342 6.69196 12.317C6.80916 12.1998 6.875 12.0408 6.875 11.875C6.875 11.7093 6.80916 11.5503 6.69196 11.433C6.57475 11.3158 6.41575 11.25 6.25 11.25C6.08425 11.25 5.92525 11.3158 5.80804 11.433C5.69083 11.5503 5.625 11.7093 5.625 11.875C5.625 12.0408 5.69083 12.1998 5.80804 12.317C5.92525 12.4342 6.08425 12.5 6.25 12.5ZM8.125 16.25C8.29075 16.25 8.44975 16.1842 8.56696 16.0669C8.68416 15.9497 8.75 15.7908 8.75 15.625C8.75 15.4593 8.68416 15.3003 8.56696 15.183C8.44975 15.0658 8.29075 15 8.125 15C7.95925 15 7.80025 15.0658 7.68304 15.183C7.56583 15.3003 7.5 15.4593 7.5 15.625C7.5 15.7908 7.56583 15.9497 7.68304 16.0669C7.80025 16.1842 7.95925 16.25 8.125 16.25ZM13.75 5C13.9157 5 14.0747 4.93417 14.192 4.81696C14.3092 4.69975 14.375 4.54075 14.375 4.375C14.375 4.20925 14.3092 4.05025 14.192 3.93304C14.0747 3.81583 13.9157 3.75 13.75 3.75C13.5842 3.75 13.4252 3.81583 13.308 3.93304C13.1908 4.05025 13.125 4.20925 13.125 4.375C13.125 4.54075 13.1908 4.69975 13.308 4.81696C13.4252 4.93417 13.5842 5 13.75 5ZM15.625 3.125C15.7907 3.125 15.9497 3.05917 16.0669 2.94196C16.1841 2.82475 16.25 2.66575 16.25 2.5C16.25 2.33425 16.1841 2.17525 16.0669 2.05804C15.9497 1.94083 15.7907 1.875 15.625 1.875C15.4592 1.875 15.3002 1.94083 15.183 2.05804C15.0658 2.17525 15 2.33425 15 2.5C15 2.66575 15.0658 2.82475 15.183 2.94196C15.3002 3.05917 15.4592 3.125 15.625 3.125ZM4.375 5C4.54075 5 4.69975 4.93417 4.81696 4.81696C4.93416 4.69975 5 4.54075 5 4.375C5 4.20925 4.93416 4.05025 4.81696 3.93304C4.69975 3.81584 4.54075 3.75 4.375 3.75C4.20925 3.75 4.05025 3.81584 3.93304 3.93304C3.81583 4.05025 3.75 4.20925 3.75 4.375C3.75 4.54075 3.81583 4.69975 3.93304 4.81696C4.05025 4.93417 4.20925 5 4.375 5ZM6.25 5C6.41575 5 6.57475 4.93417 6.69196 4.81696C6.80916 4.69975 6.875 4.54075 6.875 4.375C6.875 4.20925 6.80916 4.05025 6.69196 3.93304C6.57475 3.81584 6.41575 3.75 6.25 3.75C6.08425 3.75 5.92525 3.81584 5.80804 3.93304C5.69083 4.05025 5.625 4.20925 5.625 4.375C5.625 4.54075 5.69083 4.69975 5.80804 4.81696C5.92525 4.93417 6.08425 5 6.25 5ZM8.125 5C8.29075 5 8.44975 4.93417 8.56696 4.81696C8.68416 4.69975 8.75 4.54075 8.75 4.375C8.75 4.20925 8.68416 4.05025 8.56696 3.93304C8.44975 3.81584 8.29075 3.75 8.125 3.75C7.95925 3.75 7.80025 3.81584 7.68304 3.93304C7.56583 4.05025 7.5 4.20925 7.5 4.375C7.5 4.54075 7.56583 4.69975 7.68304 4.81696C7.80025 4.93417 7.95925 5 8.125 5ZM10 5C10.1657 5 10.3247 4.93417 10.442 4.81696C10.5592 4.69975 10.625 4.54075 10.625 4.375C10.625 4.20925 10.5592 4.05025 10.442 3.93304C10.3247 3.81583 10.1657 3.75 10 3.75C9.83425 3.75 9.67525 3.81583 9.55804 3.93304C9.44083 4.05025 9.375 4.20925 9.375 4.375C9.375 4.54075 9.44083 4.69975 9.55804 4.81696C9.67525 4.93417 9.83425 5 10 5ZM11.875 5C12.0407 5 12.1997 4.93417 12.317 4.81696C12.4342 4.69975 12.5 4.54075 12.5 4.375C12.5 4.20925 12.4342 4.05025 12.317 3.93304C12.1997 3.81583 12.0407 3.75 11.875 3.75C11.7092 3.75 11.5502 3.81583 11.433 3.93304C11.3158 4.05025 11.25 4.20925 11.25 4.375C11.25 4.54075 11.3158 4.69975 11.433 4.81696C11.5502 4.93417 11.7092 5 11.875 5ZM10 6.875C10.1657 6.875 10.3247 6.80917 10.442 6.69196C10.5592 6.57475 10.625 6.41575 10.625 6.25C10.625 6.08425 10.5592 5.92525 10.442 5.80804C10.3247 5.69083 10.1657 5.625 10 5.625C9.83425 5.625 9.67525 5.69083 9.55804 5.80804C9.44083 5.92525 9.375 6.08425 9.375 6.25C9.375 6.41575 9.44083 6.57475 9.55804 6.69196C9.67525 6.80917 9.83425 6.875 10 6.875ZM4.375 6.875C4.54075 6.875 4.69975 6.80917 4.81696 6.69196C4.93416 6.57475 5 6.41575 5 6.25C5 6.08425 4.93416 5.92525 4.81696 5.80804C4.69975 5.69084 4.54075 5.625 4.375 5.625C4.20925 5.625 4.05025 5.69084 3.93304 5.80804C3.81583 5.92525 3.75 6.08425 3.75 6.25C3.75 6.41575 3.81583 6.57475 3.93304 6.69196C4.05025 6.80917 4.20925 6.875 4.375 6.875ZM6.25 6.875C6.41575 6.875 6.57475 6.80917 6.69196 6.69196C6.80916 6.57475 6.875 6.41575 6.875 6.25C6.875 6.08425 6.80916 5.92525 6.69196 5.80804C6.57475 5.69084 6.41575 5.625 6.25 5.625C6.08425 5.625 5.92525 5.69084 5.80804 5.80804C5.69083 5.92525 5.625 6.08425 5.625 6.25C5.625 6.41575 5.69083 6.57475 5.80804 6.69196C5.92525 6.80917 6.08425 6.875 6.25 6.875ZM8.125 6.875C8.29075 6.875 8.44975 6.80917 8.56696 6.69196C8.68416 6.57475 8.75 6.41575 8.75 6.25C8.75 6.08425 8.68416 5.92525 8.56696 5.80804C8.44975 5.69084 8.29075 5.625 8.125 5.625C7.95925 5.625 7.80025 5.69084 7.68304 5.80804C7.56583 5.92525 7.5 6.08425 7.5 6.25C7.5 6.41575 7.56583 6.57475 7.68304 6.69196C7.80025 6.80917 7.95925 6.875 8.125 6.875ZM6.25 8.75C6.41575 8.75 6.57475 8.68417 6.69196 8.56696C6.80916 8.44975 6.875 8.29075 6.875 8.125C6.875 7.95925 6.80916 7.80025 6.69196 7.68304C6.57475 7.56584 6.41575 7.5 6.25 7.5C6.08425 7.5 5.92525 7.56584 5.80804 7.68304C5.69083 7.80025 5.625 7.95925 5.625 8.125C5.625 8.29075 5.69083 8.44975 5.80804 8.56696C5.92525 8.68417 6.08425 8.75 6.25 8.75ZM8.125 8.75C8.29075 8.75 8.44975 8.68417 8.56696 8.56696C8.68416 8.44975 8.75 8.29075 8.75 8.125C8.75 7.95925 8.68416 7.80025 8.56696 7.68304C8.44975 7.56584 8.29075 7.5 8.125 7.5C7.95925 7.5 7.80025 7.56584 7.68304 7.68304C7.56583 7.80025 7.5 7.95925 7.5 8.125C7.5 8.29075 7.56583 8.44975 7.68304 8.56696C7.80025 8.68417 7.95925 8.75 8.125 8.75ZM10 8.75C10.1657 8.75 10.3247 8.68417 10.442 8.56696C10.5592 8.44975 10.625 8.29075 10.625 8.125C10.625 7.95925 10.5592 7.80025 10.442 7.68304C10.3247 7.56583 10.1657 7.5 10 7.5C9.83425 7.5 9.67525 7.56583 9.55804 7.68304C9.44083 7.80025 9.375 7.95925 9.375 8.125C9.375 8.29075 9.44083 8.44975 9.55804 8.56696C9.67525 8.68417 9.83425 8.75 10 8.75ZM6.25 10.625C6.41575 10.625 6.57475 10.5592 6.69196 10.442C6.80916 10.3248 6.875 10.1658 6.875 10C6.875 9.83425 6.80916 9.67525 6.69196 9.55804C6.57475 9.44084 6.41575 9.375 6.25 9.375C6.08425 9.375 5.92525 9.44084 5.80804 9.55804C5.69083 9.67525 5.625 9.83425 5.625 10C5.625 10.1658 5.69083 10.3248 5.80804 10.442C5.92525 10.5592 6.08425 10.625 6.25 10.625ZM8.125 10.625C8.29075 10.625 8.44975 10.5592 8.56696 10.442C8.68416 10.3248 8.75 10.1658 8.75 10C8.75 9.83425 8.68416 9.67525 8.56696 9.55804C8.44975 9.44084 8.29075 9.375 8.125 9.375C7.95925 9.375 7.80025 9.44084 7.68304 9.55804C7.56583 9.67525 7.5 9.83425 7.5 10C7.5 10.1658 7.56583 10.3248 7.68304 10.442C7.80025 10.5592 7.95925 10.625 8.125 10.625ZM8.125 12.5C8.29075 12.5 8.44975 12.4342 8.56696 12.317C8.68416 12.1998 8.75 12.0408 8.75 11.875C8.75 11.7093 8.68416 11.5503 8.56696 11.433C8.44975 11.3158 8.29075 11.25 8.125 11.25C7.95925 11.25 7.80025 11.3158 7.68304 11.433C7.56583 11.5503 7.5 11.7093 7.5 11.875C7.5 12.0408 7.56583 12.1998 7.68304 12.317C7.80025 12.4342 7.95925 12.5 8.125 12.5ZM8.125 14.375C8.29075 14.375 8.44975 14.3092 8.56696 14.192C8.68416 14.0748 8.75 13.9158 8.75 13.75C8.75 13.5843 8.68416 13.4253 8.56696 13.308C8.44975 13.1908 8.29075 13.125 8.125 13.125C7.95925 13.125 7.80025 13.1908 7.68304 13.308C7.56583 13.4253 7.5 13.5843 7.5 13.75C7.5 13.9158 7.56583 14.0748 7.68304 14.192C7.80025 14.3092 7.95925 14.375 8.125 14.375ZM10 10.625C10.1657 10.625 10.3247 10.5592 10.442 10.442C10.5592 10.3248 10.625 10.1658 10.625 10C10.625 9.83425 10.5592 9.67525 10.442 9.55804C10.3247 9.44083 10.1657 9.375 10 9.375C9.83425 9.375 9.67525 9.44083 9.55804 9.55804C9.44083 9.67525 9.375 9.83425 9.375 10C9.375 10.1658 9.44083 10.3248 9.55804 10.442C9.67525 10.5592 9.83425 10.625 10 10.625ZM10 12.5C10.1657 12.5 10.3247 12.4342 10.442 12.317C10.5592 12.1998 10.625 12.0408 10.625 11.875C10.625 11.7093 10.5592 11.5503 10.442 11.433C10.3247 11.3158 10.1657 11.25 10 11.25C9.83425 11.25 9.67525 11.3158 9.55804 11.433C9.44083 11.5503 9.375 11.7093 9.375 11.875C9.375 12.0408 9.44083 12.1998 9.55804 12.317C9.67525 12.4342 9.83425 12.5 10 12.5ZM10 14.375C10.1657 14.375 10.3247 14.3092 10.442 14.192C10.5592 14.0748 10.625 13.9158 10.625 13.75C10.625 13.5843 10.5592 13.4253 10.442 13.308C10.3247 13.1908 10.1657 13.125 10 13.125C9.83425 13.125 9.67525 13.1908 9.55804 13.308C9.44083 13.4253 9.375 13.5843 9.375 13.75C9.375 13.9158 9.44083 14.0748 9.55804 14.192C9.67525 14.3092 9.83425 14.375 10 14.375ZM10 16.25C10.1657 16.25 10.3247 16.1842 10.442 16.0669C10.5592 15.9497 10.625 15.7908 10.625 15.625C10.625 15.4593 10.5592 15.3003 10.442 15.183C10.3247 15.0658 10.1657 15 10 15C9.83425 15 9.67525 15.0658 9.55804 15.183C9.44083 15.3003 9.375 15.4593 9.375 15.625C9.375 15.7908 9.44083 15.9497 9.55804 16.0669C9.67525 16.1842 9.83425 16.25 10 16.25ZM17.5 3.125C17.6658 3.125 17.8247 3.05917 17.9419 2.94196C18.0591 2.82475 18.125 2.66575 18.125 2.5C18.125 2.33425 18.0591 2.17525 17.9419 2.05804C17.8247 1.94083 17.6658 1.875 17.5 1.875C17.3342 1.875 17.1753 1.94083 17.0581 2.05804C16.9408 2.17525 16.875 2.33425 16.875 2.5C16.875 2.66575 16.9408 2.82475 17.0581 2.94196C17.1753 3.05917 17.3342 3.125 17.5 3.125ZM10 18.125C10.1657 18.125 10.3247 18.0592 10.442 17.9419C10.5592 17.8247 10.625 17.6658 10.625 17.5C10.625 17.3342 10.5592 17.1753 10.442 17.0581C10.3247 16.9409 10.1657 16.875 10 16.875C9.83425 16.875 9.67525 16.9409 9.55804 17.0581C9.44083 17.1753 9.375 17.3342 9.375 17.5C9.375 17.6658 9.44083 17.8247 9.55804 17.9419C9.67525 18.0592 9.83425 18.125 10 18.125Z" fill="#131313"/>
                      </g>
                      <defs>
                        <clipPath id="clip0_1014_182">
                          <rect width="20" height="20" fill="white" transform="translate(20 20) rotate(180)"/>
                        </clipPath>
                      </defs>
                    </svg>
                  </a>
                <?php endif;?>
              </div>
            </div>
          </div>
        </section>
    <?php endif;?>

<?php
	$projectsArgs = array(
		'tax_query' => array(
			array(
				'taxonomy' => 'solar_decision_tax',
				'field' => 'id',
				'lang' => false,
				'suppress_filters' => false,
				'terms' => $serviceCategoryId

			)
		),
		'post_type' => 'realized_objects',
		'orderby' 	 => 'date',
		'suppress_filters' => false,
		'lang' => false,
		'posts_per_page' => 4
	);

	$projectsList = new WP_Query( $projectsArgs );

	if ( $projectsList->have_posts() ) :?>

    <!-- Реалізовані обʼєкти -->
    <section class="our-projects indent-top-small indent-bottom-big animation-tracking">
      <div class="container">
        <div class="row first-up">
          <h2 class="block-title big-title col-12 text-center"><?php echo esc_html( pll__( 'Реалізовані об’єкти ' ) ); ?></h2>
        </div>
        <div class="row second-up">
          <div class="content text-center col-12">
            <ul class="our-projects__category-list">
	            <?php
		            $allProjectsArgs = array(
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'solar_decision_tax',
                      'field' => 'id',
                      'lang' => false,
                      'suppress_filters' => false,
                      'terms' => $serviceCategoryId

                    )
                  ),
			            'post_type' => 'realized_objects',
			            'orderby' 	 => 'date',
			            'suppress_filters' => false,
			            'post_status'  => 'publish',
			            'lang' => false,
			            'posts_per_page' => -1,
		            );

		            $allProjectsList = new WP_Query( $allProjectsArgs );
		            $allProjectsCount = $allProjectsList->post_count;
	            ?>
              <li class="our-projects__category active" >
                <a href="#" rel="nofollow" data-cat-id="0" data-cat-and="<?php echo $serviceCategoryId;?>" data-all-projects="<?php echo $allProjectsCount;?>">
		              <?php echo esc_html( pll__( 'Всі' ) ); ?>
                </a>
              </li>
	            <?php
		            $projectsCat = get_categories( array(
			            'taxonomy'     => 'object_plant_type_tax',
			            'type'         => 'realized_objects',
			            'child_of'     => false,
			            'parent'       => '',
			            'orderby'      => 'name',
			            'order'        => 'ASC',
			            'hide_empty'   => 1,
			            'exclude'      => array(21,19),
			            'hierarchical' => false,
			            'number'       => 0,
			            'pad_counts'   => false,
		            ) );
		            if ( $projectsCat ):
			            foreach ( $projectsCat as $item ):?>
				            <?php
				            $projectsMore = array(
					            'tax_query' => array(
						            array(
							            'taxonomy' => 'object_plant_type_tax',
							            'field' => 'id',
							            'terms' => $item->term_id,
						            )

					            ),
					            'post_type' => 'realized_objects',
					            'post_status'  => 'publish',
					            'orderby' 	 => 'date',
					            'offset'     => 0
				            );

				            $countDecision = 0;

				            $ourProjectsMore = new WP_Query( $projectsMore );

		              if ( $ourProjectsMore->have_posts() ) :?>

			              <?php	while ( $ourProjectsMore->have_posts() ) : $ourProjectsMore->the_post(); ?>

				              <?php
                          if( has_term($serviceCategoryId, 'solar_decision_tax') ){
				                    $countDecision = $countDecision + 1;
                          }
				              ?>

			              <?php endwhile;?>

		              <?php endif; ?>
		              <?php wp_reset_postdata(); ?>

                      <?php if( $countDecision > 0 ):?>
                        <li class="our-projects__category" >
                          <a href="#" rel="nofollow" data-cat-id="<?php echo $item->term_id;?>" data-cat-and="<?php echo $serviceCategoryId;?>" data-all-projects = "<?php echo $countDecision; ;?>">
                      <?php echo $item->name;?>
                          </a>
                        </li>
                      <?php endif;?>

			            <?php endforeach;?>
		            <?php endif;?>
            </ul>
          </div>
        </div>
        <div class="row our-projects__list third-up" id="our-projects-list">
	        <?php	while ( $projectsList->have_posts() ) : $projectsList->the_post(); ?>
              <a href="<?php the_permalink();?>" class="projects-item col-lg-3 col-sm-6 col-6">
            <span class="inner">
              <span class="projects-item__preview">
                 <img
                     src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
                     alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);?>"
                 >
                 <span class="projects-item__more">
                   <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
    <path d="M20 6.04275C18.9093 6.04275 18 6.9099 18 8.00061V8.04303C18 9.12384 18.8762 10 19.957 10H20.043C21.1238 10 22 9.1238 22 8.04295V8.00069C22 6.90994 21.0907 6.04275 20 6.04275Z" fill="#F7FDF8"/>
    <path d="M22 15.9826C22 14.9142 21.173 14.004 20.1046 14.0002C20.0698 14.0001 20.0349 14 20 14C19.9651 14 19.9302 14.0001 19.8954 14.0002C18.827 14.004 18 14.9142 18 15.9826C18 17.0871 18.8954 18 20 18C21.1046 18 22 17.0871 22 15.9826Z" fill="#F7FDF8"/>
    <path d="M22 23.9826C22 22.9142 21.173 22.004 20.1046 22.0002C20.0698 22.0001 20.0349 22 20 22C19.9651 22 19.9302 22.0001 19.8954 22.0002C18.827 22.004 18 22.9142 18 23.9826C18 25.0871 18.8954 26 20 26C21.1046 26 22 25.0871 22 23.9826Z" fill="#F7FDF8"/>
    <path d="M20 30.0427C18.9093 30.0427 18 30.9099 18 32.0006V32.043C18 33.1238 18.8762 34 19.957 34H20.043C21.1238 34 22 33.1238 22 32.043V32.0007C22 30.9099 21.0907 30.0427 20 30.0427Z" fill="#F7FDF8"/>
    <path d="M33.9573 20C33.9573 18.9093 33.0901 18 31.9994 18L31.957 18C30.8762 18 30 18.8762 30 19.957L30 20.043C30 21.1238 30.8762 22 31.957 22L31.9993 22C33.0901 22 33.9573 21.0907 33.9573 20Z" fill="#F7FDF8"/>
    <path d="M24.0174 22C25.0858 22 25.996 21.173 25.9998 20.1046C25.9999 20.0698 26 20.0349 26 20C26 19.9651 25.9999 19.9302 25.9998 19.8954C25.996 18.827 25.0858 18 24.0174 18C22.9129 18 22 18.8954 22 20C22 21.1046 22.9129 22 24.0174 22Z" fill="#F7FDF8"/>
    <path d="M16.0174 22C17.0858 22 17.996 21.173 17.9998 20.1046C17.9999 20.0698 18 20.0349 18 20C18 19.9651 17.9999 19.9302 17.9998 19.8954C17.996 18.827 17.0858 18 16.0174 18C14.9129 18 14 18.8954 14 20C14 21.1046 14.9129 22 16.0174 22Z" fill="#F7FDF8"/>
    <path d="M9.95725 20C9.95725 18.9093 9.0901 18 7.99939 18L7.95697 18C6.87616 18 6 18.8762 6 19.957L6 20.043C6 21.1238 6.8762 22 7.95705 22L7.99931 22C9.09006 22 9.95725 21.0907 9.95725 20Z" fill="#F7FDF8"/>
    <path d="M28.0174 15C29.0858 15 29.996 14.173 29.9998 13.1046C29.9999 13.0698 30 13.0349 30 13C30 12.9651 29.9999 12.9302 29.9998 12.8954C29.996 11.827 29.0858 11 28.0174 11C26.9129 11 26 11.8954 26 13C26 14.1046 26.9129 15 28.0174 15Z" fill="#F7FDF8"/>
    <path d="M28.0174 30C29.0858 30 29.996 29.173 29.9998 28.1046C29.9999 28.0698 30 28.0349 30 28C30 27.9651 29.9999 27.9302 29.9998 27.8954C29.996 26.827 29.0858 26 28.0174 26C26.9129 26 26 26.8954 26 28C26 29.1046 26.9129 30 28.0174 30Z" fill="#F7FDF8"/>
    <path d="M12.0174 15C13.0858 15 13.996 14.173 13.9998 13.1046C13.9999 13.0698 14 13.0349 14 13C14 12.9651 13.9999 12.9302 13.9998 12.8954C13.996 11.827 13.0858 11 12.0174 11C10.9129 11 10 11.8954 10 13C10 14.1046 10.9129 15 12.0174 15Z" fill="#F7FDF8"/>
    <path d="M12.0174 30C13.0858 30 13.996 29.173 13.9998 28.1046C13.9999 28.0698 14 28.0349 14 28C14 27.9651 13.9999 27.9302 13.9998 27.8954C13.996 26.827 13.0858 26 12.0174 26C10.9129 26 10 26.8954 10 28C10 29.1046 10.9129 30 12.0174 30Z" fill="#F7FDF8"/>
  </svg>
                   <span class="text"><?php echo esc_html( pll__( 'Переглянути' ) ); ?></span>
                 </span>
              </span>
              <span class="projects-item__info">
                 <span class="projects-item__name"><?php the_title();?></span>
                    <span class="projects-item__location">
                       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                          <path d="M10 18.8334C10 18.8334 16.25 13.8334 16.25 8.41675C16.25 4.96508 13.4517 2.16675 10 2.16675C6.54833 2.16675 3.75 4.96508 3.75 8.41675C3.75 13.8334 10 18.8334 10 18.8334Z" stroke="#FDB62C" stroke-width="1.66667" stroke-linejoin="round"/>
                           <path d="M10 10.9167C10.3283 10.9167 10.6534 10.8521 10.9567 10.7264C11.26 10.6008 11.5356 10.4167 11.7678 10.1845C11.9999 9.95237 12.1841 9.67677 12.3097 9.37346C12.4353 9.07014 12.5 8.74505 12.5 8.41675C12.5 8.08844 12.4353 7.76335 12.3097 7.46004C12.1841 7.15673 11.9999 6.88113 11.7678 6.64898C11.5356 6.41683 11.26 6.23269 10.9567 6.10705C10.6534 5.98141 10.3283 5.91675 10 5.91675C9.33696 5.91675 8.70107 6.18014 8.23223 6.64898C7.76339 7.11782 7.5 7.75371 7.5 8.41675C7.5 9.07979 7.76339 9.71567 8.23223 10.1845C8.70107 10.6534 9.33696 10.9167 10 10.9167Z" stroke="#FDB62C" stroke-width="1.66667" stroke-linejoin="round"/>
                       </svg>
                       <?php echo carbon_get_post_meta(get_the_ID(), 'green_system_realized_objects_location'.green_system_lang_prefix());?>
                    </span>
                 </span>
            </span>
              </a>
	        <?php endwhile;?>
        </div>
        <div class="row third-up">
          <div class="col-12 text-center">
            <a href="#" rel="nofollow" class="more-project-btn" id="more-project-main" data-cat-id ="0" data-cat-and="<?php echo $serviceCategoryId;?>">
              <span>Побачити більше</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <g clip-path="url(#clip0_114_2820)">
                  <path d="M0.625 3.125C0.79075 3.125 0.949749 3.05916 1.06696 2.94196C1.18417 2.82475 1.25 2.66575 1.25 2.5C1.25 2.33425 1.18417 2.17525 1.06696 2.05804C0.949749 1.94083 0.79075 1.875 0.625 1.875C0.459249 1.875 0.300249 1.94083 0.18304 2.05804C0.0658318 2.17525 -3.6296e-07 2.33425 -3.7745e-07 2.5C-3.9194e-07 2.66575 0.0658317 2.82475 0.18304 2.94196C0.300249 3.05916 0.459249 3.125 0.625 3.125ZM0.624999 5C0.79075 5 0.949748 4.93417 1.06696 4.81696C1.18417 4.69975 1.25 4.54075 1.25 4.375C1.25 4.20925 1.18417 4.05025 1.06696 3.93304C0.949749 3.81583 0.79075 3.75 0.625 3.75C0.459249 3.75 0.300249 3.81583 0.18304 3.93304C0.0658316 4.05025 -5.26877e-07 4.20925 -5.41368e-07 4.375C-5.55858e-07 4.54075 0.0658316 4.69975 0.18304 4.81696C0.300249 4.93417 0.459249 5 0.624999 5ZM2.5 6.875C2.66575 6.875 2.82475 6.80917 2.94196 6.69196C3.05917 6.57475 3.125 6.41575 3.125 6.25C3.125 6.08425 3.05917 5.92525 2.94196 5.80804C2.82475 5.69083 2.66575 5.625 2.5 5.625C2.33425 5.625 2.17525 5.69083 2.05804 5.80804C1.94083 5.92525 1.875 6.08425 1.875 6.25C1.875 6.41575 1.94083 6.57475 2.05804 6.69196C2.17525 6.80917 2.33425 6.875 2.5 6.875ZM2.5 8.75C2.66575 8.75 2.82475 8.68417 2.94196 8.56696C3.05917 8.44975 3.125 8.29075 3.125 8.125C3.125 7.95925 3.05917 7.80025 2.94196 7.68304C2.82475 7.56583 2.66575 7.5 2.5 7.5C2.33425 7.5 2.17525 7.56583 2.05804 7.68304C1.94083 7.80025 1.875 7.95925 1.875 8.125C1.875 8.29075 1.94083 8.44975 2.05804 8.56696C2.17525 8.68417 2.33425 8.75 2.5 8.75ZM4.375 10.625C4.54075 10.625 4.69975 10.5592 4.81696 10.442C4.93417 10.3247 5 10.1657 5 10C5 9.83425 4.93417 9.67525 4.81696 9.55804C4.69975 9.44083 4.54075 9.375 4.375 9.375C4.20925 9.375 4.05025 9.44083 3.93304 9.55804C3.81583 9.67525 3.75 9.83425 3.75 10C3.75 10.1657 3.81583 10.3247 3.93304 10.442C4.05025 10.5592 4.20925 10.625 4.375 10.625ZM4.375 12.5C4.54075 12.5 4.69975 12.4342 4.81696 12.317C4.93417 12.1997 5 12.0407 5 11.875C5 11.7092 4.93417 11.5502 4.81696 11.433C4.69975 11.3158 4.54075 11.25 4.375 11.25C4.20925 11.25 4.05025 11.3158 3.93304 11.433C3.81583 11.5502 3.75 11.7092 3.75 11.875C3.75 12.0407 3.81583 12.1997 3.93304 12.317C4.05025 12.4342 4.20925 12.5 4.375 12.5ZM6.25 14.375C6.41575 14.375 6.57475 14.3092 6.69196 14.192C6.80917 14.0747 6.875 13.9157 6.875 13.75C6.875 13.5842 6.80917 13.4252 6.69196 13.308C6.57475 13.1908 6.41575 13.125 6.25 13.125C6.08425 13.125 5.92525 13.1908 5.80804 13.308C5.69083 13.4252 5.625 13.5842 5.625 13.75C5.625 13.9157 5.69083 14.0747 5.80804 14.192C5.92525 14.3092 6.08425 14.375 6.25 14.375ZM6.25 16.25C6.41575 16.25 6.57475 16.1841 6.69196 16.0669C6.80917 15.9497 6.875 15.7907 6.875 15.625C6.875 15.4592 6.80917 15.3002 6.69196 15.183C6.57475 15.0658 6.41575 15 6.25 15C6.08425 15 5.92525 15.0658 5.80804 15.183C5.69083 15.3002 5.625 15.4592 5.625 15.625C5.625 15.7907 5.69083 15.9497 5.80804 16.0669C5.92525 16.1841 6.08425 16.25 6.25 16.25ZM8.125 18.125C8.29075 18.125 8.44975 18.0591 8.56696 17.9419C8.68417 17.8247 8.75 17.6658 8.75 17.5C8.75 17.3342 8.68417 17.1753 8.56696 17.0581C8.44975 16.9408 8.29075 16.875 8.125 16.875C7.95925 16.875 7.80025 16.9408 7.68304 17.0581C7.56583 17.1753 7.5 17.3342 7.5 17.5C7.5 17.6658 7.56583 17.8247 7.68304 17.9419C7.80025 18.0591 7.95925 18.125 8.125 18.125ZM17.5 6.875C17.6658 6.875 17.8247 6.80917 17.9419 6.69196C18.0592 6.57475 18.125 6.41575 18.125 6.25C18.125 6.08425 18.0592 5.92525 17.9419 5.80804C17.8247 5.69083 17.6658 5.625 17.5 5.625C17.3342 5.625 17.1753 5.69083 17.0581 5.80804C16.9409 5.92525 16.875 6.08425 16.875 6.25C16.875 6.41575 16.9409 6.57475 17.0581 6.69196C17.1753 6.80917 17.3342 6.875 17.5 6.875ZM17.5 8.75C17.6658 8.75 17.8247 8.68417 17.9419 8.56696C18.0592 8.44975 18.125 8.29075 18.125 8.125C18.125 7.95925 18.0592 7.80025 17.9419 7.68304C17.8247 7.56583 17.6658 7.5 17.5 7.5C17.3342 7.5 17.1753 7.56583 17.0581 7.68304C16.9409 7.80025 16.875 7.95925 16.875 8.125C16.875 8.29075 16.9409 8.44975 17.0581 8.56696C17.1753 8.68417 17.3342 8.75 17.5 8.75ZM15.625 10.625C15.7908 10.625 15.9497 10.5592 16.0669 10.442C16.1842 10.3247 16.25 10.1658 16.25 10C16.25 9.83425 16.1842 9.67525 16.0669 9.55804C15.9497 9.44083 15.7908 9.375 15.625 9.375C15.4593 9.375 15.3003 9.44083 15.183 9.55804C15.0658 9.67525 15 9.83425 15 10C15 10.1658 15.0658 10.3247 15.183 10.442C15.3002 10.5592 15.4593 10.625 15.625 10.625ZM15.625 12.5C15.7908 12.5 15.9497 12.4342 16.0669 12.317C16.1842 12.1997 16.25 12.0407 16.25 11.875C16.25 11.7093 16.1842 11.5502 16.0669 11.433C15.9497 11.3158 15.7908 11.25 15.625 11.25C15.4593 11.25 15.3002 11.3158 15.183 11.433C15.0658 11.5502 15 11.7093 15 11.875C15 12.0407 15.0658 12.1997 15.183 12.317C15.3002 12.4342 15.4593 12.5 15.625 12.5ZM13.75 14.375C13.9157 14.375 14.0747 14.3092 14.192 14.192C14.3092 14.0747 14.375 13.9157 14.375 13.75C14.375 13.5842 14.3092 13.4253 14.192 13.308C14.0748 13.1908 13.9157 13.125 13.75 13.125C13.5842 13.125 13.4253 13.1908 13.308 13.308C13.1908 13.4252 13.125 13.5842 13.125 13.75C13.125 13.9157 13.1908 14.0747 13.308 14.192C13.4253 14.3092 13.5842 14.375 13.75 14.375ZM13.75 16.25C13.9157 16.25 14.0747 16.1841 14.192 16.0669C14.3092 15.9497 14.375 15.7907 14.375 15.625C14.375 15.4592 14.3092 15.3002 14.192 15.183C14.0747 15.0658 13.9157 15 13.75 15C13.5842 15 13.4253 15.0658 13.308 15.183C13.1908 15.3002 13.125 15.4592 13.125 15.625C13.125 15.7907 13.1908 15.9497 13.308 16.0669C13.4252 16.1841 13.5842 16.25 13.75 16.25ZM11.875 18.125C12.0407 18.125 12.1997 18.0591 12.317 17.9419C12.4342 17.8247 12.5 17.6658 12.5 17.5C12.5 17.3342 12.4342 17.1753 12.317 17.0581C12.1997 16.9408 12.0407 16.875 11.875 16.875C11.7092 16.875 11.5502 16.9408 11.433 17.0581C11.3158 17.1753 11.25 17.3342 11.25 17.5C11.25 17.6658 11.3158 17.8247 11.433 17.9419C11.5502 18.0591 11.7092 18.125 11.875 18.125ZM10 20C10.1657 20 10.3247 19.9342 10.442 19.8169C10.5592 19.6997 10.625 19.5408 10.625 19.375C10.625 19.2092 10.5592 19.0503 10.442 18.9331C10.3247 18.8158 10.1657 18.75 10 18.75C9.83425 18.75 9.67525 18.8158 9.55804 18.9331C9.44083 19.0503 9.375 19.2092 9.375 19.375C9.375 19.5408 9.44083 19.6997 9.55804 19.8169C9.67525 19.9342 9.83425 20 10 20ZM19.375 3.125C19.5408 3.125 19.6997 3.05917 19.8169 2.94196C19.9342 2.82475 20 2.66575 20 2.5C20 2.33425 19.9342 2.17525 19.8169 2.05804C19.6997 1.94083 19.5408 1.875 19.375 1.875C19.2092 1.875 19.0503 1.94083 18.9331 2.05804C18.8159 2.17525 18.75 2.33425 18.75 2.5C18.75 2.66575 18.8159 2.82475 18.9331 2.94196C19.0503 3.05917 19.2092 3.125 19.375 3.125ZM19.375 5C19.5408 5 19.6997 4.93417 19.8169 4.81696C19.9342 4.69975 20 4.54075 20 4.375C20 4.20925 19.9342 4.05025 19.8169 3.93304C19.6997 3.81583 19.5408 3.75 19.375 3.75C19.2092 3.75 19.0503 3.81583 18.9331 3.93304C18.8159 4.05025 18.75 4.20925 18.75 4.375C18.75 4.54075 18.8159 4.69975 18.9331 4.81696C19.0503 4.93417 19.2092 5 19.375 5ZM4.375 3.125C4.54075 3.125 4.69975 3.05916 4.81696 2.94196C4.93417 2.82475 5 2.66575 5 2.5C5 2.33425 4.93417 2.17525 4.81696 2.05804C4.69975 1.94083 4.54075 1.875 4.375 1.875C4.20925 1.875 4.05025 1.94083 3.93304 2.05804C3.81583 2.17525 3.75 2.33425 3.75 2.5C3.75 2.66575 3.81583 2.82475 3.93304 2.94196C4.05025 3.05916 4.20925 3.125 4.375 3.125ZM2.5 3.125C2.66575 3.125 2.82475 3.05916 2.94196 2.94196C3.05917 2.82475 3.125 2.66575 3.125 2.5C3.125 2.33425 3.05917 2.17525 2.94196 2.05804C2.82475 1.94083 2.66575 1.875 2.5 1.875C2.33425 1.875 2.17525 1.94083 2.05804 2.05804C1.94083 2.17525 1.875 2.33425 1.875 2.5C1.875 2.66575 1.94083 2.82475 2.05804 2.94196C2.17525 3.05916 2.33425 3.125 2.5 3.125ZM2.5 5C2.66575 5 2.82475 4.93417 2.94196 4.81696C3.05917 4.69975 3.125 4.54075 3.125 4.375C3.125 4.20925 3.05917 4.05025 2.94196 3.93304C2.82475 3.81583 2.66575 3.75 2.5 3.75C2.33425 3.75 2.17525 3.81583 2.05804 3.93304C1.94083 4.05025 1.875 4.20925 1.875 4.375C1.875 4.54075 1.94083 4.69975 2.05804 4.81696C2.17525 4.93417 2.33425 5 2.5 5ZM4.375 8.75C4.54075 8.75 4.69975 8.68417 4.81696 8.56696C4.93417 8.44975 5 8.29075 5 8.125C5 7.95925 4.93417 7.80025 4.81696 7.68304C4.69975 7.56583 4.54075 7.5 4.375 7.5C4.20925 7.5 4.05025 7.56583 3.93304 7.68304C3.81583 7.80025 3.75 7.95925 3.75 8.125C3.75 8.29075 3.81583 8.44975 3.93304 8.56696C4.05025 8.68417 4.20925 8.75 4.375 8.75ZM6.25 12.5C6.41575 12.5 6.57475 12.4342 6.69196 12.317C6.80917 12.1997 6.875 12.0407 6.875 11.875C6.875 11.7092 6.80917 11.5502 6.69196 11.433C6.57475 11.3158 6.41575 11.25 6.25 11.25C6.08425 11.25 5.92525 11.3158 5.80804 11.433C5.69083 11.5502 5.625 11.7092 5.625 11.875C5.625 12.0407 5.69083 12.1997 5.80804 12.317C5.92525 12.4342 6.08425 12.5 6.25 12.5ZM8.125 16.25C8.29075 16.25 8.44975 16.1841 8.56696 16.0669C8.68417 15.9497 8.75 15.7907 8.75 15.625C8.75 15.4592 8.68417 15.3002 8.56696 15.183C8.44975 15.0658 8.29075 15 8.125 15C7.95925 15 7.80025 15.0658 7.68304 15.183C7.56583 15.3002 7.5 15.4592 7.5 15.625C7.5 15.7907 7.56583 15.9497 7.68304 16.0669C7.80025 16.1841 7.95925 16.25 8.125 16.25ZM13.75 5C13.9158 5 14.0748 4.93417 14.192 4.81696C14.3092 4.69975 14.375 4.54075 14.375 4.375C14.375 4.20925 14.3092 4.05025 14.192 3.93304C14.0748 3.81583 13.9158 3.75 13.75 3.75C13.5843 3.75 13.4253 3.81583 13.308 3.93304C13.1908 4.05025 13.125 4.20925 13.125 4.375C13.125 4.54075 13.1908 4.69975 13.308 4.81696C13.4253 4.93417 13.5843 5 13.75 5ZM15.625 3.125C15.7908 3.125 15.9497 3.05917 16.0669 2.94196C16.1842 2.82475 16.25 2.66575 16.25 2.5C16.25 2.33425 16.1842 2.17525 16.0669 2.05804C15.9497 1.94083 15.7908 1.875 15.625 1.875C15.4593 1.875 15.3003 1.94083 15.183 2.05804C15.0658 2.17525 15 2.33425 15 2.5C15 2.66575 15.0658 2.82475 15.183 2.94196C15.3003 3.05917 15.4593 3.125 15.625 3.125ZM4.375 5C4.54075 5 4.69975 4.93417 4.81696 4.81696C4.93417 4.69975 5 4.54075 5 4.375C5 4.20925 4.93417 4.05025 4.81696 3.93304C4.69975 3.81583 4.54075 3.75 4.375 3.75C4.20925 3.75 4.05025 3.81583 3.93304 3.93304C3.81583 4.05025 3.75 4.20925 3.75 4.375C3.75 4.54075 3.81583 4.69975 3.93304 4.81696C4.05025 4.93417 4.20925 5 4.375 5ZM6.25 5C6.41575 5 6.57475 4.93417 6.69196 4.81696C6.80917 4.69975 6.875 4.54075 6.875 4.375C6.875 4.20925 6.80917 4.05025 6.69196 3.93304C6.57475 3.81583 6.41575 3.75 6.25 3.75C6.08425 3.75 5.92525 3.81583 5.80804 3.93304C5.69083 4.05025 5.625 4.20925 5.625 4.375C5.625 4.54075 5.69083 4.69975 5.80804 4.81696C5.92525 4.93417 6.08425 5 6.25 5ZM8.125 5C8.29075 5 8.44975 4.93417 8.56696 4.81696C8.68417 4.69975 8.75 4.54075 8.75 4.375C8.75 4.20925 8.68417 4.05025 8.56696 3.93304C8.44975 3.81583 8.29075 3.75 8.125 3.75C7.95925 3.75 7.80025 3.81583 7.68304 3.93304C7.56583 4.05025 7.5 4.20925 7.5 4.375C7.5 4.54075 7.56583 4.69975 7.68304 4.81696C7.80025 4.93417 7.95925 5 8.125 5ZM10 5C10.1657 5 10.3248 4.93417 10.442 4.81696C10.5592 4.69975 10.625 4.54075 10.625 4.375C10.625 4.20925 10.5592 4.05025 10.442 3.93304C10.3248 3.81583 10.1658 3.75 10 3.75C9.83425 3.75 9.67525 3.81583 9.55804 3.93304C9.44083 4.05025 9.375 4.20925 9.375 4.375C9.375 4.54075 9.44083 4.69975 9.55804 4.81696C9.67525 4.93417 9.83425 5 10 5ZM11.875 5C12.0408 5 12.1998 4.93417 12.317 4.81696C12.4342 4.69975 12.5 4.54075 12.5 4.375C12.5 4.20925 12.4342 4.05025 12.317 3.93304C12.1998 3.81583 12.0408 3.75 11.875 3.75C11.7092 3.75 11.5503 3.81583 11.433 3.93304C11.3158 4.05025 11.25 4.20925 11.25 4.375C11.25 4.54075 11.3158 4.69975 11.433 4.81696C11.5503 4.93417 11.7092 5 11.875 5ZM10 6.875C10.1657 6.875 10.3248 6.80917 10.442 6.69196C10.5592 6.57475 10.625 6.41575 10.625 6.25C10.625 6.08425 10.5592 5.92525 10.442 5.80804C10.3248 5.69083 10.1657 5.625 10 5.625C9.83425 5.625 9.67525 5.69083 9.55804 5.80804C9.44083 5.92525 9.375 6.08425 9.375 6.25C9.375 6.41575 9.44083 6.57475 9.55804 6.69196C9.67525 6.80917 9.83425 6.875 10 6.875ZM4.375 6.875C4.54075 6.875 4.69975 6.80917 4.81696 6.69196C4.93417 6.57475 5 6.41575 5 6.25C5 6.08425 4.93417 5.92525 4.81696 5.80804C4.69975 5.69083 4.54075 5.625 4.375 5.625C4.20925 5.625 4.05025 5.69083 3.93304 5.80804C3.81583 5.92525 3.75 6.08425 3.75 6.25C3.75 6.41575 3.81583 6.57475 3.93304 6.69196C4.05025 6.80917 4.20925 6.875 4.375 6.875ZM6.25 6.875C6.41575 6.875 6.57475 6.80917 6.69196 6.69196C6.80917 6.57475 6.875 6.41575 6.875 6.25C6.875 6.08425 6.80917 5.92525 6.69196 5.80804C6.57475 5.69083 6.41575 5.625 6.25 5.625C6.08425 5.625 5.92525 5.69083 5.80804 5.80804C5.69083 5.92525 5.625 6.08425 5.625 6.25C5.625 6.41575 5.69083 6.57475 5.80804 6.69196C5.92525 6.80917 6.08425 6.875 6.25 6.875ZM8.125 6.875C8.29075 6.875 8.44975 6.80917 8.56696 6.69196C8.68417 6.57475 8.75 6.41575 8.75 6.25C8.75 6.08425 8.68417 5.92525 8.56696 5.80804C8.44975 5.69083 8.29075 5.625 8.125 5.625C7.95925 5.625 7.80025 5.69083 7.68304 5.80804C7.56583 5.92525 7.5 6.08425 7.5 6.25C7.5 6.41575 7.56583 6.57475 7.68304 6.69196C7.80025 6.80917 7.95925 6.875 8.125 6.875ZM6.25 8.75C6.41575 8.75 6.57475 8.68417 6.69196 8.56696C6.80917 8.44975 6.875 8.29075 6.875 8.125C6.875 7.95925 6.80917 7.80025 6.69196 7.68304C6.57475 7.56583 6.41575 7.5 6.25 7.5C6.08425 7.5 5.92525 7.56583 5.80804 7.68304C5.69083 7.80025 5.625 7.95925 5.625 8.125C5.625 8.29075 5.69083 8.44975 5.80804 8.56696C5.92525 8.68417 6.08425 8.75 6.25 8.75ZM8.125 8.75C8.29075 8.75 8.44975 8.68417 8.56696 8.56696C8.68417 8.44975 8.75 8.29075 8.75 8.125C8.75 7.95925 8.68417 7.80025 8.56696 7.68304C8.44975 7.56583 8.29075 7.5 8.125 7.5C7.95925 7.5 7.80025 7.56583 7.68304 7.68304C7.56583 7.80025 7.5 7.95925 7.5 8.125C7.5 8.29075 7.56583 8.44975 7.68304 8.56696C7.80025 8.68417 7.95925 8.75 8.125 8.75ZM10 8.75C10.1657 8.75 10.3247 8.68417 10.442 8.56696C10.5592 8.44975 10.625 8.29075 10.625 8.125C10.625 7.95925 10.5592 7.80025 10.442 7.68304C10.3248 7.56583 10.1657 7.5 10 7.5C9.83425 7.5 9.67525 7.56583 9.55804 7.68304C9.44083 7.80025 9.375 7.95925 9.375 8.125C9.375 8.29075 9.44083 8.44975 9.55804 8.56696C9.67525 8.68417 9.83425 8.75 10 8.75ZM6.25 10.625C6.41575 10.625 6.57475 10.5592 6.69196 10.442C6.80917 10.3247 6.875 10.1657 6.875 10C6.875 9.83425 6.80917 9.67525 6.69196 9.55804C6.57475 9.44083 6.41575 9.375 6.25 9.375C6.08425 9.375 5.92525 9.44083 5.80804 9.55804C5.69083 9.67525 5.625 9.83425 5.625 10C5.625 10.1657 5.69083 10.3247 5.80804 10.442C5.92525 10.5592 6.08425 10.625 6.25 10.625ZM8.125 10.625C8.29075 10.625 8.44975 10.5592 8.56696 10.442C8.68417 10.3247 8.75 10.1657 8.75 10C8.75 9.83425 8.68417 9.67525 8.56696 9.55804C8.44975 9.44083 8.29075 9.375 8.125 9.375C7.95925 9.375 7.80025 9.44083 7.68304 9.55804C7.56583 9.67525 7.5 9.83425 7.5 10C7.5 10.1657 7.56583 10.3247 7.68304 10.442C7.80025 10.5592 7.95925 10.625 8.125 10.625ZM8.125 12.5C8.29075 12.5 8.44975 12.4342 8.56696 12.317C8.68417 12.1997 8.75 12.0407 8.75 11.875C8.75 11.7092 8.68417 11.5502 8.56696 11.433C8.44975 11.3158 8.29075 11.25 8.125 11.25C7.95925 11.25 7.80025 11.3158 7.68304 11.433C7.56583 11.5502 7.5 11.7092 7.5 11.875C7.5 12.0407 7.56583 12.1997 7.68304 12.317C7.80025 12.4342 7.95925 12.5 8.125 12.5ZM8.125 14.375C8.29075 14.375 8.44975 14.3092 8.56696 14.192C8.68417 14.0747 8.75 13.9157 8.75 13.75C8.75 13.5842 8.68417 13.4252 8.56696 13.308C8.44975 13.1908 8.29075 13.125 8.125 13.125C7.95925 13.125 7.80025 13.1908 7.68304 13.308C7.56583 13.4252 7.5 13.5842 7.5 13.75C7.5 13.9157 7.56583 14.0747 7.68304 14.192C7.80025 14.3092 7.95925 14.375 8.125 14.375ZM10 10.625C10.1657 10.625 10.3247 10.5592 10.442 10.442C10.5592 10.3247 10.625 10.1657 10.625 10C10.625 9.83425 10.5592 9.67525 10.442 9.55804C10.3247 9.44083 10.1657 9.375 10 9.375C9.83425 9.375 9.67525 9.44083 9.55804 9.55804C9.44083 9.67525 9.375 9.83425 9.375 10C9.375 10.1657 9.44083 10.3247 9.55804 10.442C9.67525 10.5592 9.83425 10.625 10 10.625ZM10 12.5C10.1657 12.5 10.3247 12.4342 10.442 12.317C10.5592 12.1997 10.625 12.0407 10.625 11.875C10.625 11.7092 10.5592 11.5502 10.442 11.433C10.3247 11.3158 10.1657 11.25 10 11.25C9.83425 11.25 9.67525 11.3158 9.55804 11.433C9.44083 11.5502 9.375 11.7092 9.375 11.875C9.375 12.0407 9.44083 12.1997 9.55804 12.317C9.67525 12.4342 9.83425 12.5 10 12.5ZM10 14.375C10.1657 14.375 10.3247 14.3092 10.442 14.192C10.5592 14.0747 10.625 13.9157 10.625 13.75C10.625 13.5842 10.5592 13.4252 10.442 13.308C10.3247 13.1908 10.1657 13.125 10 13.125C9.83425 13.125 9.67525 13.1908 9.55804 13.308C9.44083 13.4252 9.375 13.5842 9.375 13.75C9.375 13.9157 9.44083 14.0747 9.55804 14.192C9.67525 14.3092 9.83425 14.375 10 14.375ZM10 16.25C10.1657 16.25 10.3247 16.1841 10.442 16.0669C10.5592 15.9497 10.625 15.7907 10.625 15.625C10.625 15.4592 10.5592 15.3002 10.442 15.183C10.3247 15.0658 10.1657 15 10 15C9.83425 15 9.67525 15.0658 9.55804 15.183C9.44083 15.3002 9.375 15.4592 9.375 15.625C9.375 15.7907 9.44083 15.9497 9.55804 16.0669C9.67525 16.1841 9.83425 16.25 10 16.25ZM17.5 3.125C17.6658 3.125 17.8247 3.05917 17.9419 2.94196C18.0592 2.82475 18.125 2.66575 18.125 2.5C18.125 2.33425 18.0592 2.17525 17.9419 2.05804C17.8247 1.94083 17.6658 1.875 17.5 1.875C17.3342 1.875 17.1753 1.94083 17.0581 2.05804C16.9409 2.17525 16.875 2.33425 16.875 2.5C16.875 2.66575 16.9409 2.82475 17.0581 2.94196C17.1753 3.05917 17.3342 3.125 17.5 3.125ZM10 18.125C10.1657 18.125 10.3247 18.0591 10.442 17.9419C10.5592 17.8247 10.625 17.6658 10.625 17.5C10.625 17.3342 10.5592 17.1753 10.442 17.0581C10.3247 16.9408 10.1657 16.875 10 16.875C9.83425 16.875 9.67525 16.9408 9.55804 17.0581C9.44083 17.1753 9.375 17.3342 9.375 17.5C9.375 17.6658 9.44083 17.8247 9.55804 17.9419C9.67525 18.0591 9.83425 18.125 10 18.125Z" fill="#384438"/>
                </g>
                <defs>
                  <clipPath id="clip0_114_2820">
                    <rect width="20" height="20" fill="white" transform="translate(20 20) rotate(-180)"/>
                  </clipPath>
                </defs>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>
	<?php endif; ?>
<?php wp_reset_postdata();
?>

<?php
	$contactFormTitle = carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_form_block_title'.green_system_lang_prefix());
	$contactFormText = carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_form_text'.green_system_lang_prefix());
	$contactFormKey = carbon_get_post_meta(get_the_ID(), 'green_system_power_plant_form_kay'.green_system_lang_prefix());

	if ( $contactFormTitle && $contactFormText ):

		global $args;

		$args = array(
			'title' => $contactFormTitle,
			'text'  => $contactFormText,
			'page_kay' => $contactFormKey,
		)

		?>
		<?php get_template_part('template-parts/block-contact-form','', $args);?>
	<?php endif;?>

<?php get_footer();
