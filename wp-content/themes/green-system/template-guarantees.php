<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки "Гарантії"
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package green_system
	 */
	get_header();
?>

<?php get_template_part('template-parts/block-breadcrumbs');?>

  <section class="page-name">
    <div class="container">
      <div class="row">
        <h1 class="block-title col-12 big-title"><?php the_title();?></h1>
      </div>
    </div>
  </section>
<?php
    $guaranteesMainScreenMainText = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_main_screen_top_text'.green_system_lang_prefix());
	  $guaranteesMainScreenQuote = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_main_screen_quote'.green_system_lang_prefix());
	  $guaranteesMainScreenImage = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_main_screen_image'.green_system_lang_prefix());
	  $guaranteesMainScreenQualityTitle = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_quality_main_screen_title'.green_system_lang_prefix());
	  $guaranteesMainScreenQualityLIst = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_quality_main_screen_list'.green_system_lang_prefix());
	  $guaranteesMainScreenQuoteIcon = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_main_screen_quote_icon'.green_system_lang_prefix());

    if( $guaranteesMainScreenMainText && $guaranteesMainScreenImage && $guaranteesMainScreenQualityLIst && $guaranteesMainScreenQuote ):
 ?>
    <!-- Головний екран -->
    <section class="guarantees-main-screen indent-bottom-middle">
      <div class="container">
        <div class="row">
          <p class="main-text subtitle"><?php echo $guaranteesMainScreenMainText;?></p>
        </div>
        <div class="row">
          <div class="text-content col-lg-6">
            <p class="quote">
              <span class="icon"><img src="<?php echo $guaranteesMainScreenQuoteIcon;?>" alt="" class="svg-pic"></span>
              <span class="text"><?php echo $guaranteesMainScreenQuote;?></span>
            </p>
            <?php if( $guaranteesMainScreenQualityTitle ):?>
              <h3><?php echo $guaranteesMainScreenQualityTitle;?></h3>
              <ul>
                <?php foreach( $guaranteesMainScreenQualityLIst as $item ):?>
                  <li><?php echo $item['text'];?></li>
                <?php endforeach;?>
              </ul>
            <?php endif;?>
          </div>
          <div class="pic-wrapper col-lg-5 offset-lg-1 col-sm-8 offset-sm-4 col-10 offset-2">
            <div class="pic">
              <img
                 src="<?php echo wp_get_attachment_image_src($guaranteesMainScreenImage, 'full')[0];?>"
                 alt="<?php echo get_post_meta($guaranteesMainScreenImage, '_wp_attachment_image_alt', TRUE);?>"
              >
            </div>
            <svg class="dots-pic" width="348" height="204" viewBox="0 0 348 204" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="6" cy="6" r="2" fill="#599C12"/>
              <circle cx="14" cy="6" r="2" fill="#599C12"/>
              <circle cx="22" cy="6" r="2" fill="#599C12"/>
              <circle cx="30" cy="6" r="2" fill="#599C12"/>
              <circle cx="38" cy="6" r="2" fill="#599C12"/>
              <circle cx="46" cy="6" r="2" fill="#599C12"/>
              <circle cx="54" cy="6" r="2" fill="#599C12"/>
              <circle cx="62" cy="6" r="2" fill="#599C12"/>
              <circle cx="70" cy="6" r="2" fill="#599C12"/>
              <circle cx="78" cy="6" r="2" fill="#599C12"/>
              <circle cx="86" cy="6" r="2" fill="#599C12"/>
              <circle cx="94" cy="6" r="2" fill="#599C12"/>
              <circle cx="102" cy="6" r="2" fill="#599C12"/>
              <circle cx="110" cy="6" r="2" fill="#599C12"/>
              <circle cx="118" cy="6" r="2" fill="#599C12"/>
              <circle cx="126" cy="6" r="2" fill="#599C12"/>
              <circle cx="134" cy="6" r="2" fill="#599C12"/>
              <circle cx="142" cy="6" r="2" fill="#599C12"/>
              <circle cx="150" cy="6" r="2" fill="#599C12"/>
              <circle cx="158" cy="6" r="2" fill="#599C12"/>
              <circle cx="166" cy="6" r="2" fill="#599C12"/>
              <circle cx="174" cy="6" r="2" fill="#599C12"/>
              <circle cx="182" cy="6" r="2" fill="#599C12"/>
              <circle cx="190" cy="6" r="2" fill="#599C12"/>
              <circle cx="198" cy="6" r="2" fill="#599C12"/>
              <circle cx="206" cy="6" r="2" fill="#599C12"/>
              <circle cx="214" cy="6" r="2" fill="#599C12"/>
              <circle cx="222" cy="6" r="2" fill="#599C12"/>
              <circle cx="230" cy="6" r="2" fill="#599C12"/>
              <circle cx="238" cy="6" r="2" fill="#599C12"/>
              <circle cx="246" cy="6" r="2" fill="#599C12"/>
              <circle cx="254" cy="6" r="2" fill="#599C12"/>
              <circle cx="262" cy="6" r="2" fill="#599C12"/>
              <circle cx="270" cy="6" r="2" fill="#599C12"/>
              <circle cx="278" cy="6" r="2" fill="#599C12"/>
              <circle cx="286" cy="6" r="2" fill="#599C12"/>
              <circle cx="294" cy="6" r="2" fill="#599C12"/>
              <circle cx="302" cy="6" r="2" fill="#599C12"/>
              <circle cx="310" cy="6" r="2" fill="#599C12"/>
              <circle cx="318" cy="6" r="2" fill="#599C12"/>
              <circle cx="326" cy="6" r="2" fill="#599C12"/>
              <circle cx="334" cy="6" r="2" fill="#599C12"/>
              <circle cx="342" cy="6" r="2" fill="#599C12"/>
              <circle cx="6" cy="14" r="2" fill="#599C12"/>
              <circle cx="14" cy="14" r="2" fill="#599C12"/>
              <circle cx="22" cy="14" r="2" fill="#599C12"/>
              <circle cx="30" cy="14" r="2" fill="#599C12"/>
              <circle cx="38" cy="14" r="2" fill="#599C12"/>
              <circle cx="46" cy="14" r="2" fill="#599C12"/>
              <circle cx="54" cy="14" r="2" fill="#599C12"/>
              <circle cx="62" cy="14" r="2" fill="#599C12"/>
              <circle cx="70" cy="14" r="2" fill="#599C12"/>
              <circle cx="78" cy="14" r="2" fill="#599C12"/>
              <circle cx="86" cy="14" r="2" fill="#599C12"/>
              <circle cx="94" cy="14" r="2" fill="#599C12"/>
              <circle cx="102" cy="14" r="2" fill="#599C12"/>
              <circle cx="110" cy="14" r="2" fill="#599C12"/>
              <circle cx="118" cy="14" r="2" fill="#599C12"/>
              <circle cx="126" cy="14" r="2" fill="#599C12"/>
              <circle cx="134" cy="14" r="2" fill="#599C12"/>
              <circle cx="142" cy="14" r="2" fill="#599C12"/>
              <circle cx="150" cy="14" r="2" fill="#599C12"/>
              <circle cx="158" cy="14" r="2" fill="#599C12"/>
              <circle cx="166" cy="14" r="2" fill="#599C12"/>
              <circle cx="174" cy="14" r="2" fill="#599C12"/>
              <circle cx="182" cy="14" r="2" fill="#599C12"/>
              <circle cx="190" cy="14" r="2" fill="#599C12"/>
              <circle cx="198" cy="14" r="2" fill="#599C12"/>
              <circle cx="206" cy="14" r="2" fill="#599C12"/>
              <circle cx="214" cy="14" r="2" fill="#599C12"/>
              <circle cx="222" cy="14" r="2" fill="#599C12"/>
              <circle cx="230" cy="14" r="2" fill="#599C12"/>
              <circle cx="238" cy="14" r="2" fill="#599C12"/>
              <circle cx="246" cy="14" r="2" fill="#599C12"/>
              <circle cx="254" cy="14" r="2" fill="#599C12"/>
              <circle cx="262" cy="14" r="2" fill="#599C12"/>
              <circle cx="270" cy="14" r="2" fill="#599C12"/>
              <circle cx="278" cy="14" r="2" fill="#599C12"/>
              <circle cx="286" cy="14" r="2" fill="#599C12"/>
              <circle cx="294" cy="14" r="2" fill="#599C12"/>
              <circle cx="302" cy="14" r="2" fill="#599C12"/>
              <circle cx="310" cy="14" r="2" fill="#599C12"/>
              <circle cx="318" cy="14" r="2" fill="#599C12"/>
              <circle cx="326" cy="14" r="2" fill="#599C12"/>
              <circle cx="334" cy="14" r="2" fill="#599C12"/>
              <circle cx="342" cy="14" r="2" fill="#599C12"/>
              <circle cx="6" cy="22" r="2" fill="#599C12"/>
              <circle cx="14" cy="22" r="2" fill="#599C12"/>
              <circle cx="22" cy="22" r="2" fill="#599C12"/>
              <circle cx="30" cy="22" r="2" fill="#599C12"/>
              <circle cx="38" cy="22" r="2" fill="#599C12"/>
              <circle cx="46" cy="22" r="2" fill="#599C12"/>
              <circle cx="54" cy="22" r="2" fill="#599C12"/>
              <circle cx="62" cy="22" r="2" fill="#599C12"/>
              <circle cx="70" cy="22" r="2" fill="#599C12"/>
              <circle cx="78" cy="22" r="2" fill="#599C12"/>
              <circle cx="86" cy="22" r="2" fill="#599C12"/>
              <circle cx="94" cy="22" r="2" fill="#599C12"/>
              <circle cx="102" cy="22" r="2" fill="#599C12"/>
              <circle cx="110" cy="22" r="2" fill="#599C12"/>
              <circle cx="118" cy="22" r="2" fill="#599C12"/>
              <circle cx="126" cy="22" r="2" fill="#599C12"/>
              <circle cx="134" cy="22" r="2" fill="#599C12"/>
              <circle cx="142" cy="22" r="2" fill="#599C12"/>
              <circle cx="150" cy="22" r="2" fill="#599C12"/>
              <circle cx="158" cy="22" r="2" fill="#599C12"/>
              <circle cx="166" cy="22" r="2" fill="#599C12"/>
              <circle cx="174" cy="22" r="2" fill="#599C12"/>
              <circle cx="182" cy="22" r="2" fill="#599C12"/>
              <circle cx="190" cy="22" r="2" fill="#599C12"/>
              <circle cx="198" cy="22" r="2" fill="#599C12"/>
              <circle cx="206" cy="22" r="2" fill="#599C12"/>
              <circle cx="214" cy="22" r="2" fill="#599C12"/>
              <circle cx="222" cy="22" r="2" fill="#599C12"/>
              <circle cx="230" cy="22" r="2" fill="#599C12"/>
              <circle cx="238" cy="22" r="2" fill="#599C12"/>
              <circle cx="246" cy="22" r="2" fill="#599C12"/>
              <circle cx="254" cy="22" r="2" fill="#599C12"/>
              <circle cx="262" cy="22" r="2" fill="#599C12"/>
              <circle cx="270" cy="22" r="2" fill="#599C12"/>
              <circle cx="278" cy="22" r="2" fill="#599C12"/>
              <circle cx="286" cy="22" r="2" fill="#599C12"/>
              <circle cx="294" cy="22" r="2" fill="#599C12"/>
              <circle cx="302" cy="22" r="2" fill="#599C12"/>
              <circle cx="310" cy="22" r="2" fill="#599C12"/>
              <circle cx="318" cy="22" r="2" fill="#599C12"/>
              <circle cx="326" cy="22" r="2" fill="#599C12"/>
              <circle cx="334" cy="22" r="2" fill="#599C12"/>
              <circle cx="342" cy="22" r="2" fill="#599C12"/>
              <circle cx="6" cy="30" r="2" fill="#599C12"/>
              <circle cx="14" cy="30" r="2" fill="#599C12"/>
              <circle cx="22" cy="30" r="2" fill="#599C12"/>
              <circle cx="30" cy="30" r="2" fill="#599C12"/>
              <circle cx="38" cy="30" r="2" fill="#599C12"/>
              <circle cx="46" cy="30" r="2" fill="#599C12"/>
              <circle cx="54" cy="30" r="2" fill="#599C12"/>
              <circle cx="62" cy="30" r="2" fill="#599C12"/>
              <circle cx="70" cy="30" r="2" fill="#599C12"/>
              <circle cx="78" cy="30" r="2" fill="#599C12"/>
              <circle cx="86" cy="30" r="2" fill="#599C12"/>
              <circle cx="94" cy="30" r="2" fill="#599C12"/>
              <circle cx="102" cy="30" r="2" fill="#599C12"/>
              <circle cx="110" cy="30" r="2" fill="#599C12"/>
              <circle cx="118" cy="30" r="2" fill="#599C12"/>
              <circle cx="126" cy="30" r="2" fill="#599C12"/>
              <circle cx="134" cy="30" r="2" fill="#599C12"/>
              <circle cx="142" cy="30" r="2" fill="#599C12"/>
              <circle cx="150" cy="30" r="2" fill="#599C12"/>
              <circle cx="158" cy="30" r="2" fill="#599C12"/>
              <circle cx="166" cy="30" r="2" fill="#599C12"/>
              <circle cx="174" cy="30" r="2" fill="#599C12"/>
              <circle cx="182" cy="30" r="2" fill="#599C12"/>
              <circle cx="190" cy="30" r="2" fill="#599C12"/>
              <circle cx="198" cy="30" r="2" fill="#599C12"/>
              <circle cx="206" cy="30" r="2" fill="#599C12"/>
              <circle cx="214" cy="30" r="2" fill="#599C12"/>
              <circle cx="222" cy="30" r="2" fill="#599C12"/>
              <circle cx="230" cy="30" r="2" fill="#599C12"/>
              <circle cx="238" cy="30" r="2" fill="#599C12"/>
              <circle cx="246" cy="30" r="2" fill="#599C12"/>
              <circle cx="254" cy="30" r="2" fill="#599C12"/>
              <circle cx="262" cy="30" r="2" fill="#599C12"/>
              <circle cx="270" cy="30" r="2" fill="#599C12"/>
              <circle cx="278" cy="30" r="2" fill="#599C12"/>
              <circle cx="286" cy="30" r="2" fill="#599C12"/>
              <circle cx="294" cy="30" r="2" fill="#599C12"/>
              <circle cx="302" cy="30" r="2" fill="#599C12"/>
              <circle cx="310" cy="30" r="2" fill="#599C12"/>
              <circle cx="318" cy="30" r="2" fill="#599C12"/>
              <circle cx="326" cy="30" r="2" fill="#599C12"/>
              <circle cx="334" cy="30" r="2" fill="#599C12"/>
              <circle cx="342" cy="30" r="2" fill="#599C12"/>
              <circle cx="6" cy="38" r="2" fill="#599C12"/>
              <circle cx="14" cy="38" r="2" fill="#599C12"/>
              <circle cx="22" cy="38" r="2" fill="#599C12"/>
              <circle cx="30" cy="38" r="2" fill="#599C12"/>
              <circle cx="38" cy="38" r="2" fill="#599C12"/>
              <circle cx="46" cy="38" r="2" fill="#599C12"/>
              <circle cx="54" cy="38" r="2" fill="#599C12"/>
              <circle cx="62" cy="38" r="2" fill="#599C12"/>
              <circle cx="70" cy="38" r="2" fill="#599C12"/>
              <circle cx="78" cy="38" r="2" fill="#599C12"/>
              <circle cx="86" cy="38" r="2" fill="#599C12"/>
              <circle cx="94" cy="38" r="2" fill="#599C12"/>
              <circle cx="102" cy="38" r="2" fill="#599C12"/>
              <circle cx="110" cy="38" r="2" fill="#599C12"/>
              <circle cx="118" cy="38" r="2" fill="#599C12"/>
              <circle cx="126" cy="38" r="2" fill="#599C12"/>
              <circle cx="134" cy="38" r="2" fill="#599C12"/>
              <circle cx="142" cy="38" r="2" fill="#599C12"/>
              <circle cx="150" cy="38" r="2" fill="#599C12"/>
              <circle cx="158" cy="38" r="2" fill="#599C12"/>
              <circle cx="166" cy="38" r="2" fill="#599C12"/>
              <circle cx="174" cy="38" r="2" fill="#599C12"/>
              <circle cx="182" cy="38" r="2" fill="#599C12"/>
              <circle cx="190" cy="38" r="2" fill="#599C12"/>
              <circle cx="198" cy="38" r="2" fill="#599C12"/>
              <circle cx="206" cy="38" r="2" fill="#599C12"/>
              <circle cx="214" cy="38" r="2" fill="#599C12"/>
              <circle cx="222" cy="38" r="2" fill="#599C12"/>
              <circle cx="230" cy="38" r="2" fill="#599C12"/>
              <circle cx="238" cy="38" r="2" fill="#599C12"/>
              <circle cx="246" cy="38" r="2" fill="#599C12"/>
              <circle cx="254" cy="38" r="2" fill="#599C12"/>
              <circle cx="262" cy="38" r="2" fill="#599C12"/>
              <circle cx="270" cy="38" r="2" fill="#599C12"/>
              <circle cx="278" cy="38" r="2" fill="#599C12"/>
              <circle cx="286" cy="38" r="2" fill="#599C12"/>
              <circle cx="294" cy="38" r="2" fill="#599C12"/>
              <circle cx="302" cy="38" r="2" fill="#599C12"/>
              <circle cx="310" cy="38" r="2" fill="#599C12"/>
              <circle cx="318" cy="38" r="2" fill="#599C12"/>
              <circle cx="326" cy="38" r="2" fill="#599C12"/>
              <circle cx="334" cy="38" r="2" fill="#599C12"/>
              <circle cx="342" cy="38" r="2" fill="#599C12"/>
              <circle cx="6" cy="46" r="2" fill="#599C12"/>
              <circle cx="14" cy="46" r="2" fill="#599C12"/>
              <circle cx="22" cy="46" r="2" fill="#599C12"/>
              <circle cx="30" cy="46" r="2" fill="#599C12"/>
              <circle cx="38" cy="46" r="2" fill="#599C12"/>
              <circle cx="46" cy="46" r="2" fill="#599C12"/>
              <circle cx="54" cy="46" r="2" fill="#599C12"/>
              <circle cx="62" cy="46" r="2" fill="#599C12"/>
              <circle cx="70" cy="46" r="2" fill="#599C12"/>
              <circle cx="78" cy="46" r="2" fill="#599C12"/>
              <circle cx="86" cy="46" r="2" fill="#599C12"/>
              <circle cx="94" cy="46" r="2" fill="#599C12"/>
              <circle cx="102" cy="46" r="2" fill="#599C12"/>
              <circle cx="110" cy="46" r="2" fill="#599C12"/>
              <circle cx="118" cy="46" r="2" fill="#599C12"/>
              <circle cx="126" cy="46" r="2" fill="#599C12"/>
              <circle cx="134" cy="46" r="2" fill="#599C12"/>
              <circle cx="142" cy="46" r="2" fill="#599C12"/>
              <circle cx="150" cy="46" r="2" fill="#599C12"/>
              <circle cx="158" cy="46" r="2" fill="#599C12"/>
              <circle cx="166" cy="46" r="2" fill="#599C12"/>
              <circle cx="174" cy="46" r="2" fill="#599C12"/>
              <circle cx="182" cy="46" r="2" fill="#599C12"/>
              <circle cx="190" cy="46" r="2" fill="#599C12"/>
              <circle cx="198" cy="46" r="2" fill="#599C12"/>
              <circle cx="206" cy="46" r="2" fill="#599C12"/>
              <circle cx="214" cy="46" r="2" fill="#599C12"/>
              <circle cx="222" cy="46" r="2" fill="#599C12"/>
              <circle cx="230" cy="46" r="2" fill="#599C12"/>
              <circle cx="238" cy="46" r="2" fill="#599C12"/>
              <circle cx="246" cy="46" r="2" fill="#599C12"/>
              <circle cx="254" cy="46" r="2" fill="#599C12"/>
              <circle cx="262" cy="46" r="2" fill="#599C12"/>
              <circle cx="270" cy="46" r="2" fill="#599C12"/>
              <circle cx="278" cy="46" r="2" fill="#599C12"/>
              <circle cx="286" cy="46" r="2" fill="#599C12"/>
              <circle cx="294" cy="46" r="2" fill="#599C12"/>
              <circle cx="302" cy="46" r="2" fill="#599C12"/>
              <circle cx="310" cy="46" r="2" fill="#599C12"/>
              <circle cx="318" cy="46" r="2" fill="#599C12"/>
              <circle cx="326" cy="46" r="2" fill="#599C12"/>
              <circle cx="334" cy="46" r="2" fill="#599C12"/>
              <circle cx="342" cy="46" r="2" fill="#599C12"/>
              <circle cx="6" cy="54" r="2" fill="#599C12"/>
              <circle cx="14" cy="54" r="2" fill="#599C12"/>
              <circle cx="22" cy="54" r="2" fill="#599C12"/>
              <circle cx="30" cy="54" r="2" fill="#599C12"/>
              <circle cx="38" cy="54" r="2" fill="#599C12"/>
              <circle cx="46" cy="54" r="2" fill="#599C12"/>
              <circle cx="54" cy="54" r="2" fill="#599C12"/>
              <circle cx="62" cy="54" r="2" fill="#599C12"/>
              <circle cx="70" cy="54" r="2" fill="#599C12"/>
              <circle cx="78" cy="54" r="2" fill="#599C12"/>
              <circle cx="86" cy="54" r="2" fill="#599C12"/>
              <circle cx="94" cy="54" r="2" fill="#599C12"/>
              <circle cx="102" cy="54" r="2" fill="#599C12"/>
              <circle cx="110" cy="54" r="2" fill="#599C12"/>
              <circle cx="118" cy="54" r="2" fill="#599C12"/>
              <circle cx="126" cy="54" r="2" fill="#599C12"/>
              <circle cx="134" cy="54" r="2" fill="#599C12"/>
              <circle cx="142" cy="54" r="2" fill="#599C12"/>
              <circle cx="150" cy="54" r="2" fill="#599C12"/>
              <circle cx="158" cy="54" r="2" fill="#599C12"/>
              <circle cx="166" cy="54" r="2" fill="#599C12"/>
              <circle cx="174" cy="54" r="2" fill="#599C12"/>
              <circle cx="182" cy="54" r="2" fill="#599C12"/>
              <circle cx="190" cy="54" r="2" fill="#599C12"/>
              <circle cx="198" cy="54" r="2" fill="#599C12"/>
              <circle cx="206" cy="54" r="2" fill="#599C12"/>
              <circle cx="214" cy="54" r="2" fill="#599C12"/>
              <circle cx="222" cy="54" r="2" fill="#599C12"/>
              <circle cx="230" cy="54" r="2" fill="#599C12"/>
              <circle cx="238" cy="54" r="2" fill="#599C12"/>
              <circle cx="246" cy="54" r="2" fill="#599C12"/>
              <circle cx="254" cy="54" r="2" fill="#599C12"/>
              <circle cx="262" cy="54" r="2" fill="#599C12"/>
              <circle cx="270" cy="54" r="2" fill="#599C12"/>
              <circle cx="278" cy="54" r="2" fill="#599C12"/>
              <circle cx="286" cy="54" r="2" fill="#599C12"/>
              <circle cx="294" cy="54" r="2" fill="#599C12"/>
              <circle cx="302" cy="54" r="2" fill="#599C12"/>
              <circle cx="310" cy="54" r="2" fill="#599C12"/>
              <circle cx="318" cy="54" r="2" fill="#599C12"/>
              <circle cx="326" cy="54" r="2" fill="#599C12"/>
              <circle cx="334" cy="54" r="2" fill="#599C12"/>
              <circle cx="342" cy="54" r="2" fill="#599C12"/>
              <circle cx="6" cy="62" r="2" fill="#599C12"/>
              <circle cx="14" cy="62" r="2" fill="#599C12"/>
              <circle cx="22" cy="62" r="2" fill="#599C12"/>
              <circle cx="30" cy="62" r="2" fill="#599C12"/>
              <circle cx="38" cy="62" r="2" fill="#599C12"/>
              <circle cx="46" cy="62" r="2" fill="#599C12"/>
              <circle cx="54" cy="62" r="2" fill="#599C12"/>
              <circle cx="62" cy="62" r="2" fill="#599C12"/>
              <circle cx="70" cy="62" r="2" fill="#599C12"/>
              <circle cx="78" cy="62" r="2" fill="#599C12"/>
              <circle cx="86" cy="62" r="2" fill="#599C12"/>
              <circle cx="94" cy="62" r="2" fill="#599C12"/>
              <circle cx="102" cy="62" r="2" fill="#599C12"/>
              <circle cx="110" cy="62" r="2" fill="#599C12"/>
              <circle cx="118" cy="62" r="2" fill="#599C12"/>
              <circle cx="126" cy="62" r="2" fill="#599C12"/>
              <circle cx="134" cy="62" r="2" fill="#599C12"/>
              <circle cx="142" cy="62" r="2" fill="#599C12"/>
              <circle cx="150" cy="62" r="2" fill="#599C12"/>
              <circle cx="158" cy="62" r="2" fill="#599C12"/>
              <circle cx="166" cy="62" r="2" fill="#599C12"/>
              <circle cx="174" cy="62" r="2" fill="#599C12"/>
              <circle cx="182" cy="62" r="2" fill="#599C12"/>
              <circle cx="190" cy="62" r="2" fill="#599C12"/>
              <circle cx="198" cy="62" r="2" fill="#599C12"/>
              <circle cx="206" cy="62" r="2" fill="#599C12"/>
              <circle cx="214" cy="62" r="2" fill="#599C12"/>
              <circle cx="222" cy="62" r="2" fill="#599C12"/>
              <circle cx="230" cy="62" r="2" fill="#599C12"/>
              <circle cx="238" cy="62" r="2" fill="#599C12"/>
              <circle cx="246" cy="62" r="2" fill="#599C12"/>
              <circle cx="254" cy="62" r="2" fill="#599C12"/>
              <circle cx="262" cy="62" r="2" fill="#599C12"/>
              <circle cx="270" cy="62" r="2" fill="#599C12"/>
              <circle cx="278" cy="62" r="2" fill="#599C12"/>
              <circle cx="286" cy="62" r="2" fill="#599C12"/>
              <circle cx="294" cy="62" r="2" fill="#599C12"/>
              <circle cx="302" cy="62" r="2" fill="#599C12"/>
              <circle cx="310" cy="62" r="2" fill="#599C12"/>
              <circle cx="318" cy="62" r="2" fill="#599C12"/>
              <circle cx="326" cy="62" r="2" fill="#599C12"/>
              <circle cx="334" cy="62" r="2" fill="#599C12"/>
              <circle cx="342" cy="62" r="2" fill="#599C12"/>
              <circle cx="6" cy="70" r="2" fill="#599C12"/>
              <circle cx="14" cy="70" r="2" fill="#599C12"/>
              <circle cx="22" cy="70" r="2" fill="#599C12"/>
              <circle cx="30" cy="70" r="2" fill="#599C12"/>
              <circle cx="38" cy="70" r="2" fill="#599C12"/>
              <circle cx="46" cy="70" r="2" fill="#599C12"/>
              <circle cx="54" cy="70" r="2" fill="#599C12"/>
              <circle cx="62" cy="70" r="2" fill="#599C12"/>
              <circle cx="70" cy="70" r="2" fill="#599C12"/>
              <circle cx="78" cy="70" r="2" fill="#599C12"/>
              <circle cx="86" cy="70" r="2" fill="#599C12"/>
              <circle cx="94" cy="70" r="2" fill="#599C12"/>
              <circle cx="102" cy="70" r="2" fill="#599C12"/>
              <circle cx="110" cy="70" r="2" fill="#599C12"/>
              <circle cx="118" cy="70" r="2" fill="#599C12"/>
              <circle cx="126" cy="70" r="2" fill="#599C12"/>
              <circle cx="134" cy="70" r="2" fill="#599C12"/>
              <circle cx="142" cy="70" r="2" fill="#599C12"/>
              <circle cx="150" cy="70" r="2" fill="#599C12"/>
              <circle cx="158" cy="70" r="2" fill="#599C12"/>
              <circle cx="166" cy="70" r="2" fill="#599C12"/>
              <circle cx="174" cy="70" r="2" fill="#599C12"/>
              <circle cx="182" cy="70" r="2" fill="#599C12"/>
              <circle cx="190" cy="70" r="2" fill="#599C12"/>
              <circle cx="198" cy="70" r="2" fill="#599C12"/>
              <circle cx="206" cy="70" r="2" fill="#599C12"/>
              <circle cx="214" cy="70" r="2" fill="#599C12"/>
              <circle cx="222" cy="70" r="2" fill="#599C12"/>
              <circle cx="230" cy="70" r="2" fill="#599C12"/>
              <circle cx="238" cy="70" r="2" fill="#599C12"/>
              <circle cx="246" cy="70" r="2" fill="#599C12"/>
              <circle cx="254" cy="70" r="2" fill="#599C12"/>
              <circle cx="262" cy="70" r="2" fill="#599C12"/>
              <circle cx="270" cy="70" r="2" fill="#599C12"/>
              <circle cx="278" cy="70" r="2" fill="#599C12"/>
              <circle cx="286" cy="70" r="2" fill="#599C12"/>
              <circle cx="294" cy="70" r="2" fill="#599C12"/>
              <circle cx="302" cy="70" r="2" fill="#599C12"/>
              <circle cx="310" cy="70" r="2" fill="#599C12"/>
              <circle cx="318" cy="70" r="2" fill="#599C12"/>
              <circle cx="326" cy="70" r="2" fill="#599C12"/>
              <circle cx="334" cy="70" r="2" fill="#599C12"/>
              <circle cx="342" cy="70" r="2" fill="#599C12"/>
              <circle cx="6" cy="78" r="2" fill="#599C12"/>
              <circle cx="14" cy="78" r="2" fill="#599C12"/>
              <circle cx="22" cy="78" r="2" fill="#599C12"/>
              <circle cx="30" cy="78" r="2" fill="#599C12"/>
              <circle cx="38" cy="78" r="2" fill="#599C12"/>
              <circle cx="46" cy="78" r="2" fill="#599C12"/>
              <circle cx="54" cy="78" r="2" fill="#599C12"/>
              <circle cx="62" cy="78" r="2" fill="#599C12"/>
              <circle cx="70" cy="78" r="2" fill="#599C12"/>
              <circle cx="78" cy="78" r="2" fill="#599C12"/>
              <circle cx="86" cy="78" r="2" fill="#599C12"/>
              <circle cx="94" cy="78" r="2" fill="#599C12"/>
              <circle cx="102" cy="78" r="2" fill="#599C12"/>
              <circle cx="110" cy="78" r="2" fill="#599C12"/>
              <circle cx="118" cy="78" r="2" fill="#599C12"/>
              <circle cx="126" cy="78" r="2" fill="#599C12"/>
              <circle cx="134" cy="78" r="2" fill="#599C12"/>
              <circle cx="142" cy="78" r="2" fill="#599C12"/>
              <circle cx="150" cy="78" r="2" fill="#599C12"/>
              <circle cx="158" cy="78" r="2" fill="#599C12"/>
              <circle cx="166" cy="78" r="2" fill="#599C12"/>
              <circle cx="174" cy="78" r="2" fill="#599C12"/>
              <circle cx="182" cy="78" r="2" fill="#599C12"/>
              <circle cx="190" cy="78" r="2" fill="#599C12"/>
              <circle cx="198" cy="78" r="2" fill="#599C12"/>
              <circle cx="206" cy="78" r="2" fill="#599C12"/>
              <circle cx="214" cy="78" r="2" fill="#599C12"/>
              <circle cx="222" cy="78" r="2" fill="#599C12"/>
              <circle cx="230" cy="78" r="2" fill="#599C12"/>
              <circle cx="238" cy="78" r="2" fill="#599C12"/>
              <circle cx="246" cy="78" r="2" fill="#599C12"/>
              <circle cx="254" cy="78" r="2" fill="#599C12"/>
              <circle cx="262" cy="78" r="2" fill="#599C12"/>
              <circle cx="270" cy="78" r="2" fill="#599C12"/>
              <circle cx="278" cy="78" r="2" fill="#599C12"/>
              <circle cx="286" cy="78" r="2" fill="#599C12"/>
              <circle cx="294" cy="78" r="2" fill="#599C12"/>
              <circle cx="302" cy="78" r="2" fill="#599C12"/>
              <circle cx="310" cy="78" r="2" fill="#599C12"/>
              <circle cx="318" cy="78" r="2" fill="#599C12"/>
              <circle cx="326" cy="78" r="2" fill="#599C12"/>
              <circle cx="334" cy="78" r="2" fill="#599C12"/>
              <circle cx="342" cy="78" r="2" fill="#599C12"/>
              <circle cx="6" cy="86" r="2" fill="#599C12"/>
              <circle cx="14" cy="86" r="2" fill="#599C12"/>
              <circle cx="22" cy="86" r="2" fill="#599C12"/>
              <circle cx="30" cy="86" r="2" fill="#599C12"/>
              <circle cx="38" cy="86" r="2" fill="#599C12"/>
              <circle cx="46" cy="86" r="2" fill="#599C12"/>
              <circle cx="54" cy="86" r="2" fill="#599C12"/>
              <circle cx="62" cy="86" r="2" fill="#599C12"/>
              <circle cx="70" cy="86" r="2" fill="#599C12"/>
              <circle cx="78" cy="86" r="2" fill="#599C12"/>
              <circle cx="86" cy="86" r="2" fill="#599C12"/>
              <circle cx="94" cy="86" r="2" fill="#599C12"/>
              <circle cx="102" cy="86" r="2" fill="#599C12"/>
              <circle cx="110" cy="86" r="2" fill="#599C12"/>
              <circle cx="118" cy="86" r="2" fill="#599C12"/>
              <circle cx="126" cy="86" r="2" fill="#599C12"/>
              <circle cx="134" cy="86" r="2" fill="#599C12"/>
              <circle cx="142" cy="86" r="2" fill="#599C12"/>
              <circle cx="150" cy="86" r="2" fill="#599C12"/>
              <circle cx="158" cy="86" r="2" fill="#599C12"/>
              <circle cx="166" cy="86" r="2" fill="#599C12"/>
              <circle cx="174" cy="86" r="2" fill="#599C12"/>
              <circle cx="182" cy="86" r="2" fill="#599C12"/>
              <circle cx="190" cy="86" r="2" fill="#599C12"/>
              <circle cx="198" cy="86" r="2" fill="#599C12"/>
              <circle cx="206" cy="86" r="2" fill="#599C12"/>
              <circle cx="214" cy="86" r="2" fill="#599C12"/>
              <circle cx="222" cy="86" r="2" fill="#599C12"/>
              <circle cx="230" cy="86" r="2" fill="#599C12"/>
              <circle cx="238" cy="86" r="2" fill="#599C12"/>
              <circle cx="246" cy="86" r="2" fill="#599C12"/>
              <circle cx="254" cy="86" r="2" fill="#599C12"/>
              <circle cx="262" cy="86" r="2" fill="#599C12"/>
              <circle cx="270" cy="86" r="2" fill="#599C12"/>
              <circle cx="278" cy="86" r="2" fill="#599C12"/>
              <circle cx="286" cy="86" r="2" fill="#599C12"/>
              <circle cx="294" cy="86" r="2" fill="#599C12"/>
              <circle cx="302" cy="86" r="2" fill="#599C12"/>
              <circle cx="310" cy="86" r="2" fill="#599C12"/>
              <circle cx="318" cy="86" r="2" fill="#599C12"/>
              <circle cx="326" cy="86" r="2" fill="#599C12"/>
              <circle cx="334" cy="86" r="2" fill="#599C12"/>
              <circle cx="342" cy="86" r="2" fill="#599C12"/>
              <circle cx="6" cy="94" r="2" fill="#599C12"/>
              <circle cx="14" cy="94" r="2" fill="#599C12"/>
              <circle cx="22" cy="94" r="2" fill="#599C12"/>
              <circle cx="30" cy="94" r="2" fill="#599C12"/>
              <circle cx="38" cy="94" r="2" fill="#599C12"/>
              <circle cx="46" cy="94" r="2" fill="#599C12"/>
              <circle cx="54" cy="94" r="2" fill="#599C12"/>
              <circle cx="62" cy="94" r="2" fill="#599C12"/>
              <circle cx="70" cy="94" r="2" fill="#599C12"/>
              <circle cx="78" cy="94" r="2" fill="#599C12"/>
              <circle cx="86" cy="94" r="2" fill="#599C12"/>
              <circle cx="94" cy="94" r="2" fill="#599C12"/>
              <circle cx="102" cy="94" r="2" fill="#599C12"/>
              <circle cx="110" cy="94" r="2" fill="#599C12"/>
              <circle cx="118" cy="94" r="2" fill="#599C12"/>
              <circle cx="126" cy="94" r="2" fill="#599C12"/>
              <circle cx="134" cy="94" r="2" fill="#599C12"/>
              <circle cx="142" cy="94" r="2" fill="#599C12"/>
              <circle cx="150" cy="94" r="2" fill="#599C12"/>
              <circle cx="158" cy="94" r="2" fill="#599C12"/>
              <circle cx="166" cy="94" r="2" fill="#599C12"/>
              <circle cx="174" cy="94" r="2" fill="#599C12"/>
              <circle cx="182" cy="94" r="2" fill="#599C12"/>
              <circle cx="190" cy="94" r="2" fill="#599C12"/>
              <circle cx="198" cy="94" r="2" fill="#599C12"/>
              <circle cx="206" cy="94" r="2" fill="#599C12"/>
              <circle cx="214" cy="94" r="2" fill="#599C12"/>
              <circle cx="222" cy="94" r="2" fill="#599C12"/>
              <circle cx="230" cy="94" r="2" fill="#599C12"/>
              <circle cx="238" cy="94" r="2" fill="#599C12"/>
              <circle cx="246" cy="94" r="2" fill="#599C12"/>
              <circle cx="254" cy="94" r="2" fill="#599C12"/>
              <circle cx="262" cy="94" r="2" fill="#599C12"/>
              <circle cx="270" cy="94" r="2" fill="#599C12"/>
              <circle cx="278" cy="94" r="2" fill="#599C12"/>
              <circle cx="286" cy="94" r="2" fill="#599C12"/>
              <circle cx="294" cy="94" r="2" fill="#599C12"/>
              <circle cx="302" cy="94" r="2" fill="#599C12"/>
              <circle cx="310" cy="94" r="2" fill="#599C12"/>
              <circle cx="318" cy="94" r="2" fill="#599C12"/>
              <circle cx="326" cy="94" r="2" fill="#599C12"/>
              <circle cx="334" cy="94" r="2" fill="#599C12"/>
              <circle cx="342" cy="94" r="2" fill="#599C12"/>
              <circle cx="6" cy="102" r="2" fill="#599C12"/>
              <circle cx="14" cy="102" r="2" fill="#599C12"/>
              <circle cx="22" cy="102" r="2" fill="#599C12"/>
              <circle cx="30" cy="102" r="2" fill="#599C12"/>
              <circle cx="38" cy="102" r="2" fill="#599C12"/>
              <circle cx="46" cy="102" r="2" fill="#599C12"/>
              <circle cx="54" cy="102" r="2" fill="#599C12"/>
              <circle cx="62" cy="102" r="2" fill="#599C12"/>
              <circle cx="70" cy="102" r="2" fill="#599C12"/>
              <circle cx="78" cy="102" r="2" fill="#599C12"/>
              <circle cx="86" cy="102" r="2" fill="#599C12"/>
              <circle cx="94" cy="102" r="2" fill="#599C12"/>
              <circle cx="102" cy="102" r="2" fill="#599C12"/>
              <circle cx="110" cy="102" r="2" fill="#599C12"/>
              <circle cx="118" cy="102" r="2" fill="#599C12"/>
              <circle cx="126" cy="102" r="2" fill="#599C12"/>
              <circle cx="134" cy="102" r="2" fill="#599C12"/>
              <circle cx="142" cy="102" r="2" fill="#599C12"/>
              <circle cx="150" cy="102" r="2" fill="#599C12"/>
              <circle cx="158" cy="102" r="2" fill="#599C12"/>
              <circle cx="166" cy="102" r="2" fill="#599C12"/>
              <circle cx="174" cy="102" r="2" fill="#599C12"/>
              <circle cx="182" cy="102" r="2" fill="#599C12"/>
              <circle cx="190" cy="102" r="2" fill="#599C12"/>
              <circle cx="198" cy="102" r="2" fill="#599C12"/>
              <circle cx="206" cy="102" r="2" fill="#599C12"/>
              <circle cx="214" cy="102" r="2" fill="#599C12"/>
              <circle cx="222" cy="102" r="2" fill="#599C12"/>
              <circle cx="230" cy="102" r="2" fill="#599C12"/>
              <circle cx="238" cy="102" r="2" fill="#599C12"/>
              <circle cx="246" cy="102" r="2" fill="#599C12"/>
              <circle cx="254" cy="102" r="2" fill="#599C12"/>
              <circle cx="262" cy="102" r="2" fill="#599C12"/>
              <circle cx="270" cy="102" r="2" fill="#599C12"/>
              <circle cx="278" cy="102" r="2" fill="#599C12"/>
              <circle cx="286" cy="102" r="2" fill="#599C12"/>
              <circle cx="294" cy="102" r="2" fill="#599C12"/>
              <circle cx="302" cy="102" r="2" fill="#599C12"/>
              <circle cx="310" cy="102" r="2" fill="#599C12"/>
              <circle cx="318" cy="102" r="2" fill="#599C12"/>
              <circle cx="326" cy="102" r="2" fill="#599C12"/>
              <circle cx="334" cy="102" r="2" fill="#599C12"/>
              <circle cx="342" cy="102" r="2" fill="#599C12"/>
              <circle cx="6" cy="110" r="2" fill="#599C12"/>
              <circle cx="14" cy="110" r="2" fill="#599C12"/>
              <circle cx="22" cy="110" r="2" fill="#599C12"/>
              <circle cx="30" cy="110" r="2" fill="#599C12"/>
              <circle cx="38" cy="110" r="2" fill="#599C12"/>
              <circle cx="46" cy="110" r="2" fill="#599C12"/>
              <circle cx="54" cy="110" r="2" fill="#599C12"/>
              <circle cx="62" cy="110" r="2" fill="#599C12"/>
              <circle cx="70" cy="110" r="2" fill="#599C12"/>
              <circle cx="78" cy="110" r="2" fill="#599C12"/>
              <circle cx="86" cy="110" r="2" fill="#599C12"/>
              <circle cx="94" cy="110" r="2" fill="#599C12"/>
              <circle cx="102" cy="110" r="2" fill="#599C12"/>
              <circle cx="110" cy="110" r="2" fill="#599C12"/>
              <circle cx="118" cy="110" r="2" fill="#599C12"/>
              <circle cx="126" cy="110" r="2" fill="#599C12"/>
              <circle cx="134" cy="110" r="2" fill="#599C12"/>
              <circle cx="142" cy="110" r="2" fill="#599C12"/>
              <circle cx="150" cy="110" r="2" fill="#599C12"/>
              <circle cx="158" cy="110" r="2" fill="#599C12"/>
              <circle cx="166" cy="110" r="2" fill="#599C12"/>
              <circle cx="174" cy="110" r="2" fill="#599C12"/>
              <circle cx="182" cy="110" r="2" fill="#599C12"/>
              <circle cx="190" cy="110" r="2" fill="#599C12"/>
              <circle cx="198" cy="110" r="2" fill="#599C12"/>
              <circle cx="206" cy="110" r="2" fill="#599C12"/>
              <circle cx="214" cy="110" r="2" fill="#599C12"/>
              <circle cx="222" cy="110" r="2" fill="#599C12"/>
              <circle cx="230" cy="110" r="2" fill="#599C12"/>
              <circle cx="238" cy="110" r="2" fill="#599C12"/>
              <circle cx="246" cy="110" r="2" fill="#599C12"/>
              <circle cx="254" cy="110" r="2" fill="#599C12"/>
              <circle cx="262" cy="110" r="2" fill="#599C12"/>
              <circle cx="270" cy="110" r="2" fill="#599C12"/>
              <circle cx="278" cy="110" r="2" fill="#599C12"/>
              <circle cx="286" cy="110" r="2" fill="#599C12"/>
              <circle cx="294" cy="110" r="2" fill="#599C12"/>
              <circle cx="302" cy="110" r="2" fill="#599C12"/>
              <circle cx="310" cy="110" r="2" fill="#599C12"/>
              <circle cx="318" cy="110" r="2" fill="#599C12"/>
              <circle cx="326" cy="110" r="2" fill="#599C12"/>
              <circle cx="334" cy="110" r="2" fill="#599C12"/>
              <circle cx="342" cy="110" r="2" fill="#599C12"/>
              <circle cx="6" cy="118" r="2" fill="#599C12"/>
              <circle cx="14" cy="118" r="2" fill="#599C12"/>
              <circle cx="22" cy="118" r="2" fill="#599C12"/>
              <circle cx="30" cy="118" r="2" fill="#599C12"/>
              <circle cx="38" cy="118" r="2" fill="#599C12"/>
              <circle cx="46" cy="118" r="2" fill="#599C12"/>
              <circle cx="54" cy="118" r="2" fill="#599C12"/>
              <circle cx="62" cy="118" r="2" fill="#599C12"/>
              <circle cx="70" cy="118" r="2" fill="#599C12"/>
              <circle cx="78" cy="118" r="2" fill="#599C12"/>
              <circle cx="86" cy="118" r="2" fill="#599C12"/>
              <circle cx="94" cy="118" r="2" fill="#599C12"/>
              <circle cx="102" cy="118" r="2" fill="#599C12"/>
              <circle cx="110" cy="118" r="2" fill="#599C12"/>
              <circle cx="118" cy="118" r="2" fill="#599C12"/>
              <circle cx="126" cy="118" r="2" fill="#599C12"/>
              <circle cx="134" cy="118" r="2" fill="#599C12"/>
              <circle cx="142" cy="118" r="2" fill="#599C12"/>
              <circle cx="150" cy="118" r="2" fill="#599C12"/>
              <circle cx="158" cy="118" r="2" fill="#599C12"/>
              <circle cx="166" cy="118" r="2" fill="#599C12"/>
              <circle cx="174" cy="118" r="2" fill="#599C12"/>
              <circle cx="182" cy="118" r="2" fill="#599C12"/>
              <circle cx="190" cy="118" r="2" fill="#599C12"/>
              <circle cx="198" cy="118" r="2" fill="#599C12"/>
              <circle cx="206" cy="118" r="2" fill="#599C12"/>
              <circle cx="214" cy="118" r="2" fill="#599C12"/>
              <circle cx="222" cy="118" r="2" fill="#599C12"/>
              <circle cx="230" cy="118" r="2" fill="#599C12"/>
              <circle cx="238" cy="118" r="2" fill="#599C12"/>
              <circle cx="246" cy="118" r="2" fill="#599C12"/>
              <circle cx="254" cy="118" r="2" fill="#599C12"/>
              <circle cx="262" cy="118" r="2" fill="#599C12"/>
              <circle cx="270" cy="118" r="2" fill="#599C12"/>
              <circle cx="278" cy="118" r="2" fill="#599C12"/>
              <circle cx="286" cy="118" r="2" fill="#599C12"/>
              <circle cx="294" cy="118" r="2" fill="#599C12"/>
              <circle cx="302" cy="118" r="2" fill="#599C12"/>
              <circle cx="310" cy="118" r="2" fill="#599C12"/>
              <circle cx="318" cy="118" r="2" fill="#599C12"/>
              <circle cx="326" cy="118" r="2" fill="#599C12"/>
              <circle cx="334" cy="118" r="2" fill="#599C12"/>
              <circle cx="342" cy="118" r="2" fill="#599C12"/>
              <circle cx="6" cy="126" r="2" fill="#599C12"/>
              <circle cx="14" cy="126" r="2" fill="#599C12"/>
              <circle cx="22" cy="126" r="2" fill="#599C12"/>
              <circle cx="30" cy="126" r="2" fill="#599C12"/>
              <circle cx="38" cy="126" r="2" fill="#599C12"/>
              <circle cx="46" cy="126" r="2" fill="#599C12"/>
              <circle cx="54" cy="126" r="2" fill="#599C12"/>
              <circle cx="62" cy="126" r="2" fill="#599C12"/>
              <circle cx="70" cy="126" r="2" fill="#599C12"/>
              <circle cx="78" cy="126" r="2" fill="#599C12"/>
              <circle cx="86" cy="126" r="2" fill="#599C12"/>
              <circle cx="94" cy="126" r="2" fill="#599C12"/>
              <circle cx="102" cy="126" r="2" fill="#599C12"/>
              <circle cx="110" cy="126" r="2" fill="#599C12"/>
              <circle cx="118" cy="126" r="2" fill="#599C12"/>
              <circle cx="126" cy="126" r="2" fill="#599C12"/>
              <circle cx="134" cy="126" r="2" fill="#599C12"/>
              <circle cx="142" cy="126" r="2" fill="#599C12"/>
              <circle cx="150" cy="126" r="2" fill="#599C12"/>
              <circle cx="158" cy="126" r="2" fill="#599C12"/>
              <circle cx="166" cy="126" r="2" fill="#599C12"/>
              <circle cx="174" cy="126" r="2" fill="#599C12"/>
              <circle cx="182" cy="126" r="2" fill="#599C12"/>
              <circle cx="190" cy="126" r="2" fill="#599C12"/>
              <circle cx="198" cy="126" r="2" fill="#599C12"/>
              <circle cx="206" cy="126" r="2" fill="#599C12"/>
              <circle cx="214" cy="126" r="2" fill="#599C12"/>
              <circle cx="222" cy="126" r="2" fill="#599C12"/>
              <circle cx="230" cy="126" r="2" fill="#599C12"/>
              <circle cx="238" cy="126" r="2" fill="#599C12"/>
              <circle cx="246" cy="126" r="2" fill="#599C12"/>
              <circle cx="254" cy="126" r="2" fill="#599C12"/>
              <circle cx="262" cy="126" r="2" fill="#599C12"/>
              <circle cx="270" cy="126" r="2" fill="#599C12"/>
              <circle cx="278" cy="126" r="2" fill="#599C12"/>
              <circle cx="286" cy="126" r="2" fill="#599C12"/>
              <circle cx="294" cy="126" r="2" fill="#599C12"/>
              <circle cx="302" cy="126" r="2" fill="#599C12"/>
              <circle cx="310" cy="126" r="2" fill="#599C12"/>
              <circle cx="318" cy="126" r="2" fill="#599C12"/>
              <circle cx="326" cy="126" r="2" fill="#599C12"/>
              <circle cx="334" cy="126" r="2" fill="#599C12"/>
              <circle cx="342" cy="126" r="2" fill="#599C12"/>
              <circle cx="6" cy="134" r="2" fill="#599C12"/>
              <circle cx="14" cy="134" r="2" fill="#599C12"/>
              <circle cx="22" cy="134" r="2" fill="#599C12"/>
              <circle cx="30" cy="134" r="2" fill="#599C12"/>
              <circle cx="38" cy="134" r="2" fill="#599C12"/>
              <circle cx="46" cy="134" r="2" fill="#599C12"/>
              <circle cx="54" cy="134" r="2" fill="#599C12"/>
              <circle cx="62" cy="134" r="2" fill="#599C12"/>
              <circle cx="70" cy="134" r="2" fill="#599C12"/>
              <circle cx="78" cy="134" r="2" fill="#599C12"/>
              <circle cx="86" cy="134" r="2" fill="#599C12"/>
              <circle cx="94" cy="134" r="2" fill="#599C12"/>
              <circle cx="102" cy="134" r="2" fill="#599C12"/>
              <circle cx="110" cy="134" r="2" fill="#599C12"/>
              <circle cx="118" cy="134" r="2" fill="#599C12"/>
              <circle cx="126" cy="134" r="2" fill="#599C12"/>
              <circle cx="134" cy="134" r="2" fill="#599C12"/>
              <circle cx="142" cy="134" r="2" fill="#599C12"/>
              <circle cx="150" cy="134" r="2" fill="#599C12"/>
              <circle cx="158" cy="134" r="2" fill="#599C12"/>
              <circle cx="166" cy="134" r="2" fill="#599C12"/>
              <circle cx="174" cy="134" r="2" fill="#599C12"/>
              <circle cx="182" cy="134" r="2" fill="#599C12"/>
              <circle cx="190" cy="134" r="2" fill="#599C12"/>
              <circle cx="198" cy="134" r="2" fill="#599C12"/>
              <circle cx="206" cy="134" r="2" fill="#599C12"/>
              <circle cx="214" cy="134" r="2" fill="#599C12"/>
              <circle cx="222" cy="134" r="2" fill="#599C12"/>
              <circle cx="230" cy="134" r="2" fill="#599C12"/>
              <circle cx="238" cy="134" r="2" fill="#599C12"/>
              <circle cx="246" cy="134" r="2" fill="#599C12"/>
              <circle cx="254" cy="134" r="2" fill="#599C12"/>
              <circle cx="262" cy="134" r="2" fill="#599C12"/>
              <circle cx="270" cy="134" r="2" fill="#599C12"/>
              <circle cx="278" cy="134" r="2" fill="#599C12"/>
              <circle cx="286" cy="134" r="2" fill="#599C12"/>
              <circle cx="294" cy="134" r="2" fill="#599C12"/>
              <circle cx="302" cy="134" r="2" fill="#599C12"/>
              <circle cx="310" cy="134" r="2" fill="#599C12"/>
              <circle cx="318" cy="134" r="2" fill="#599C12"/>
              <circle cx="326" cy="134" r="2" fill="#599C12"/>
              <circle cx="334" cy="134" r="2" fill="#599C12"/>
              <circle cx="342" cy="134" r="2" fill="#599C12"/>
              <circle cx="6" cy="142" r="2" fill="#599C12"/>
              <circle cx="14" cy="142" r="2" fill="#599C12"/>
              <circle cx="22" cy="142" r="2" fill="#599C12"/>
              <circle cx="30" cy="142" r="2" fill="#599C12"/>
              <circle cx="38" cy="142" r="2" fill="#599C12"/>
              <circle cx="46" cy="142" r="2" fill="#599C12"/>
              <circle cx="54" cy="142" r="2" fill="#599C12"/>
              <circle cx="62" cy="142" r="2" fill="#599C12"/>
              <circle cx="70" cy="142" r="2" fill="#599C12"/>
              <circle cx="78" cy="142" r="2" fill="#599C12"/>
              <circle cx="86" cy="142" r="2" fill="#599C12"/>
              <circle cx="94" cy="142" r="2" fill="#599C12"/>
              <circle cx="102" cy="142" r="2" fill="#599C12"/>
              <circle cx="110" cy="142" r="2" fill="#599C12"/>
              <circle cx="118" cy="142" r="2" fill="#599C12"/>
              <circle cx="126" cy="142" r="2" fill="#599C12"/>
              <circle cx="134" cy="142" r="2" fill="#599C12"/>
              <circle cx="142" cy="142" r="2" fill="#599C12"/>
              <circle cx="150" cy="142" r="2" fill="#599C12"/>
              <circle cx="158" cy="142" r="2" fill="#599C12"/>
              <circle cx="166" cy="142" r="2" fill="#599C12"/>
              <circle cx="174" cy="142" r="2" fill="#599C12"/>
              <circle cx="182" cy="142" r="2" fill="#599C12"/>
              <circle cx="190" cy="142" r="2" fill="#599C12"/>
              <circle cx="198" cy="142" r="2" fill="#599C12"/>
              <circle cx="206" cy="142" r="2" fill="#599C12"/>
              <circle cx="214" cy="142" r="2" fill="#599C12"/>
              <circle cx="222" cy="142" r="2" fill="#599C12"/>
              <circle cx="230" cy="142" r="2" fill="#599C12"/>
              <circle cx="238" cy="142" r="2" fill="#599C12"/>
              <circle cx="246" cy="142" r="2" fill="#599C12"/>
              <circle cx="254" cy="142" r="2" fill="#599C12"/>
              <circle cx="262" cy="142" r="2" fill="#599C12"/>
              <circle cx="270" cy="142" r="2" fill="#599C12"/>
              <circle cx="278" cy="142" r="2" fill="#599C12"/>
              <circle cx="286" cy="142" r="2" fill="#599C12"/>
              <circle cx="294" cy="142" r="2" fill="#599C12"/>
              <circle cx="302" cy="142" r="2" fill="#599C12"/>
              <circle cx="310" cy="142" r="2" fill="#599C12"/>
              <circle cx="318" cy="142" r="2" fill="#599C12"/>
              <circle cx="326" cy="142" r="2" fill="#599C12"/>
              <circle cx="334" cy="142" r="2" fill="#599C12"/>
              <circle cx="342" cy="142" r="2" fill="#599C12"/>
              <circle cx="6" cy="150" r="2" fill="#599C12"/>
              <circle cx="14" cy="150" r="2" fill="#599C12"/>
              <circle cx="22" cy="150" r="2" fill="#599C12"/>
              <circle cx="30" cy="150" r="2" fill="#599C12"/>
              <circle cx="38" cy="150" r="2" fill="#599C12"/>
              <circle cx="46" cy="150" r="2" fill="#599C12"/>
              <circle cx="54" cy="150" r="2" fill="#599C12"/>
              <circle cx="62" cy="150" r="2" fill="#599C12"/>
              <circle cx="70" cy="150" r="2" fill="#599C12"/>
              <circle cx="78" cy="150" r="2" fill="#599C12"/>
              <circle cx="86" cy="150" r="2" fill="#599C12"/>
              <circle cx="94" cy="150" r="2" fill="#599C12"/>
              <circle cx="102" cy="150" r="2" fill="#599C12"/>
              <circle cx="110" cy="150" r="2" fill="#599C12"/>
              <circle cx="118" cy="150" r="2" fill="#599C12"/>
              <circle cx="126" cy="150" r="2" fill="#599C12"/>
              <circle cx="134" cy="150" r="2" fill="#599C12"/>
              <circle cx="142" cy="150" r="2" fill="#599C12"/>
              <circle cx="150" cy="150" r="2" fill="#599C12"/>
              <circle cx="158" cy="150" r="2" fill="#599C12"/>
              <circle cx="166" cy="150" r="2" fill="#599C12"/>
              <circle cx="174" cy="150" r="2" fill="#599C12"/>
              <circle cx="182" cy="150" r="2" fill="#599C12"/>
              <circle cx="190" cy="150" r="2" fill="#599C12"/>
              <circle cx="198" cy="150" r="2" fill="#599C12"/>
              <circle cx="206" cy="150" r="2" fill="#599C12"/>
              <circle cx="214" cy="150" r="2" fill="#599C12"/>
              <circle cx="222" cy="150" r="2" fill="#599C12"/>
              <circle cx="230" cy="150" r="2" fill="#599C12"/>
              <circle cx="238" cy="150" r="2" fill="#599C12"/>
              <circle cx="246" cy="150" r="2" fill="#599C12"/>
              <circle cx="254" cy="150" r="2" fill="#599C12"/>
              <circle cx="262" cy="150" r="2" fill="#599C12"/>
              <circle cx="270" cy="150" r="2" fill="#599C12"/>
              <circle cx="278" cy="150" r="2" fill="#599C12"/>
              <circle cx="286" cy="150" r="2" fill="#599C12"/>
              <circle cx="294" cy="150" r="2" fill="#599C12"/>
              <circle cx="302" cy="150" r="2" fill="#599C12"/>
              <circle cx="310" cy="150" r="2" fill="#599C12"/>
              <circle cx="318" cy="150" r="2" fill="#599C12"/>
              <circle cx="326" cy="150" r="2" fill="#599C12"/>
              <circle cx="334" cy="150" r="2" fill="#599C12"/>
              <circle cx="342" cy="150" r="2" fill="#599C12"/>
              <circle cx="6" cy="158" r="2" fill="#599C12"/>
              <circle cx="14" cy="158" r="2" fill="#599C12"/>
              <circle cx="22" cy="158" r="2" fill="#599C12"/>
              <circle cx="30" cy="158" r="2" fill="#599C12"/>
              <circle cx="38" cy="158" r="2" fill="#599C12"/>
              <circle cx="46" cy="158" r="2" fill="#599C12"/>
              <circle cx="54" cy="158" r="2" fill="#599C12"/>
              <circle cx="62" cy="158" r="2" fill="#599C12"/>
              <circle cx="70" cy="158" r="2" fill="#599C12"/>
              <circle cx="78" cy="158" r="2" fill="#599C12"/>
              <circle cx="86" cy="158" r="2" fill="#599C12"/>
              <circle cx="94" cy="158" r="2" fill="#599C12"/>
              <circle cx="102" cy="158" r="2" fill="#599C12"/>
              <circle cx="110" cy="158" r="2" fill="#599C12"/>
              <circle cx="118" cy="158" r="2" fill="#599C12"/>
              <circle cx="126" cy="158" r="2" fill="#599C12"/>
              <circle cx="134" cy="158" r="2" fill="#599C12"/>
              <circle cx="142" cy="158" r="2" fill="#599C12"/>
              <circle cx="150" cy="158" r="2" fill="#599C12"/>
              <circle cx="158" cy="158" r="2" fill="#599C12"/>
              <circle cx="166" cy="158" r="2" fill="#599C12"/>
              <circle cx="174" cy="158" r="2" fill="#599C12"/>
              <circle cx="182" cy="158" r="2" fill="#599C12"/>
              <circle cx="190" cy="158" r="2" fill="#599C12"/>
              <circle cx="198" cy="158" r="2" fill="#599C12"/>
              <circle cx="206" cy="158" r="2" fill="#599C12"/>
              <circle cx="214" cy="158" r="2" fill="#599C12"/>
              <circle cx="222" cy="158" r="2" fill="#599C12"/>
              <circle cx="230" cy="158" r="2" fill="#599C12"/>
              <circle cx="238" cy="158" r="2" fill="#599C12"/>
              <circle cx="246" cy="158" r="2" fill="#599C12"/>
              <circle cx="254" cy="158" r="2" fill="#599C12"/>
              <circle cx="262" cy="158" r="2" fill="#599C12"/>
              <circle cx="270" cy="158" r="2" fill="#599C12"/>
              <circle cx="278" cy="158" r="2" fill="#599C12"/>
              <circle cx="286" cy="158" r="2" fill="#599C12"/>
              <circle cx="294" cy="158" r="2" fill="#599C12"/>
              <circle cx="302" cy="158" r="2" fill="#599C12"/>
              <circle cx="310" cy="158" r="2" fill="#599C12"/>
              <circle cx="318" cy="158" r="2" fill="#599C12"/>
              <circle cx="326" cy="158" r="2" fill="#599C12"/>
              <circle cx="334" cy="158" r="2" fill="#599C12"/>
              <circle cx="342" cy="158" r="2" fill="#599C12"/>
              <circle cx="6" cy="166" r="2" fill="#599C12"/>
              <circle cx="14" cy="166" r="2" fill="#599C12"/>
              <circle cx="22" cy="166" r="2" fill="#599C12"/>
              <circle cx="30" cy="166" r="2" fill="#599C12"/>
              <circle cx="38" cy="166" r="2" fill="#599C12"/>
              <circle cx="46" cy="166" r="2" fill="#599C12"/>
              <circle cx="54" cy="166" r="2" fill="#599C12"/>
              <circle cx="62" cy="166" r="2" fill="#599C12"/>
              <circle cx="70" cy="166" r="2" fill="#599C12"/>
              <circle cx="78" cy="166" r="2" fill="#599C12"/>
              <circle cx="86" cy="166" r="2" fill="#599C12"/>
              <circle cx="94" cy="166" r="2" fill="#599C12"/>
              <circle cx="102" cy="166" r="2" fill="#599C12"/>
              <circle cx="110" cy="166" r="2" fill="#599C12"/>
              <circle cx="118" cy="166" r="2" fill="#599C12"/>
              <circle cx="126" cy="166" r="2" fill="#599C12"/>
              <circle cx="134" cy="166" r="2" fill="#599C12"/>
              <circle cx="142" cy="166" r="2" fill="#599C12"/>
              <circle cx="150" cy="166" r="2" fill="#599C12"/>
              <circle cx="158" cy="166" r="2" fill="#599C12"/>
              <circle cx="166" cy="166" r="2" fill="#599C12"/>
              <circle cx="174" cy="166" r="2" fill="#599C12"/>
              <circle cx="182" cy="166" r="2" fill="#599C12"/>
              <circle cx="190" cy="166" r="2" fill="#599C12"/>
              <circle cx="198" cy="166" r="2" fill="#599C12"/>
              <circle cx="206" cy="166" r="2" fill="#599C12"/>
              <circle cx="214" cy="166" r="2" fill="#599C12"/>
              <circle cx="222" cy="166" r="2" fill="#599C12"/>
              <circle cx="230" cy="166" r="2" fill="#599C12"/>
              <circle cx="238" cy="166" r="2" fill="#599C12"/>
              <circle cx="246" cy="166" r="2" fill="#599C12"/>
              <circle cx="254" cy="166" r="2" fill="#599C12"/>
              <circle cx="262" cy="166" r="2" fill="#599C12"/>
              <circle cx="270" cy="166" r="2" fill="#599C12"/>
              <circle cx="278" cy="166" r="2" fill="#599C12"/>
              <circle cx="286" cy="166" r="2" fill="#599C12"/>
              <circle cx="294" cy="166" r="2" fill="#599C12"/>
              <circle cx="302" cy="166" r="2" fill="#599C12"/>
              <circle cx="310" cy="166" r="2" fill="#599C12"/>
              <circle cx="318" cy="166" r="2" fill="#599C12"/>
              <circle cx="326" cy="166" r="2" fill="#599C12"/>
              <circle cx="334" cy="166" r="2" fill="#599C12"/>
              <circle cx="342" cy="166" r="2" fill="#599C12"/>
              <circle cx="6" cy="174" r="2" fill="#599C12"/>
              <circle cx="14" cy="174" r="2" fill="#599C12"/>
              <circle cx="22" cy="174" r="2" fill="#599C12"/>
              <circle cx="30" cy="174" r="2" fill="#599C12"/>
              <circle cx="38" cy="174" r="2" fill="#599C12"/>
              <circle cx="46" cy="174" r="2" fill="#599C12"/>
              <circle cx="54" cy="174" r="2" fill="#599C12"/>
              <circle cx="62" cy="174" r="2" fill="#599C12"/>
              <circle cx="70" cy="174" r="2" fill="#599C12"/>
              <circle cx="78" cy="174" r="2" fill="#599C12"/>
              <circle cx="86" cy="174" r="2" fill="#599C12"/>
              <circle cx="94" cy="174" r="2" fill="#599C12"/>
              <circle cx="102" cy="174" r="2" fill="#599C12"/>
              <circle cx="110" cy="174" r="2" fill="#599C12"/>
              <circle cx="118" cy="174" r="2" fill="#599C12"/>
              <circle cx="126" cy="174" r="2" fill="#599C12"/>
              <circle cx="134" cy="174" r="2" fill="#599C12"/>
              <circle cx="142" cy="174" r="2" fill="#599C12"/>
              <circle cx="150" cy="174" r="2" fill="#599C12"/>
              <circle cx="158" cy="174" r="2" fill="#599C12"/>
              <circle cx="166" cy="174" r="2" fill="#599C12"/>
              <circle cx="174" cy="174" r="2" fill="#599C12"/>
              <circle cx="182" cy="174" r="2" fill="#599C12"/>
              <circle cx="190" cy="174" r="2" fill="#599C12"/>
              <circle cx="198" cy="174" r="2" fill="#599C12"/>
              <circle cx="206" cy="174" r="2" fill="#599C12"/>
              <circle cx="214" cy="174" r="2" fill="#599C12"/>
              <circle cx="222" cy="174" r="2" fill="#599C12"/>
              <circle cx="230" cy="174" r="2" fill="#599C12"/>
              <circle cx="238" cy="174" r="2" fill="#599C12"/>
              <circle cx="246" cy="174" r="2" fill="#599C12"/>
              <circle cx="254" cy="174" r="2" fill="#599C12"/>
              <circle cx="262" cy="174" r="2" fill="#599C12"/>
              <circle cx="270" cy="174" r="2" fill="#599C12"/>
              <circle cx="278" cy="174" r="2" fill="#599C12"/>
              <circle cx="286" cy="174" r="2" fill="#599C12"/>
              <circle cx="294" cy="174" r="2" fill="#599C12"/>
              <circle cx="302" cy="174" r="2" fill="#599C12"/>
              <circle cx="310" cy="174" r="2" fill="#599C12"/>
              <circle cx="318" cy="174" r="2" fill="#599C12"/>
              <circle cx="326" cy="174" r="2" fill="#599C12"/>
              <circle cx="334" cy="174" r="2" fill="#599C12"/>
              <circle cx="342" cy="174" r="2" fill="#599C12"/>
              <circle cx="6" cy="182" r="2" fill="#599C12"/>
              <circle cx="14" cy="182" r="2" fill="#599C12"/>
              <circle cx="22" cy="182" r="2" fill="#599C12"/>
              <circle cx="30" cy="182" r="2" fill="#599C12"/>
              <circle cx="38" cy="182" r="2" fill="#599C12"/>
              <circle cx="46" cy="182" r="2" fill="#599C12"/>
              <circle cx="54" cy="182" r="2" fill="#599C12"/>
              <circle cx="62" cy="182" r="2" fill="#599C12"/>
              <circle cx="70" cy="182" r="2" fill="#599C12"/>
              <circle cx="78" cy="182" r="2" fill="#599C12"/>
              <circle cx="86" cy="182" r="2" fill="#599C12"/>
              <circle cx="94" cy="182" r="2" fill="#599C12"/>
              <circle cx="102" cy="182" r="2" fill="#599C12"/>
              <circle cx="110" cy="182" r="2" fill="#599C12"/>
              <circle cx="118" cy="182" r="2" fill="#599C12"/>
              <circle cx="126" cy="182" r="2" fill="#599C12"/>
              <circle cx="134" cy="182" r="2" fill="#599C12"/>
              <circle cx="142" cy="182" r="2" fill="#599C12"/>
              <circle cx="150" cy="182" r="2" fill="#599C12"/>
              <circle cx="158" cy="182" r="2" fill="#599C12"/>
              <circle cx="166" cy="182" r="2" fill="#599C12"/>
              <circle cx="174" cy="182" r="2" fill="#599C12"/>
              <circle cx="182" cy="182" r="2" fill="#599C12"/>
              <circle cx="190" cy="182" r="2" fill="#599C12"/>
              <circle cx="198" cy="182" r="2" fill="#599C12"/>
              <circle cx="206" cy="182" r="2" fill="#599C12"/>
              <circle cx="214" cy="182" r="2" fill="#599C12"/>
              <circle cx="222" cy="182" r="2" fill="#599C12"/>
              <circle cx="230" cy="182" r="2" fill="#599C12"/>
              <circle cx="238" cy="182" r="2" fill="#599C12"/>
              <circle cx="246" cy="182" r="2" fill="#599C12"/>
              <circle cx="254" cy="182" r="2" fill="#599C12"/>
              <circle cx="262" cy="182" r="2" fill="#599C12"/>
              <circle cx="270" cy="182" r="2" fill="#599C12"/>
              <circle cx="278" cy="182" r="2" fill="#599C12"/>
              <circle cx="286" cy="182" r="2" fill="#599C12"/>
              <circle cx="294" cy="182" r="2" fill="#599C12"/>
              <circle cx="302" cy="182" r="2" fill="#599C12"/>
              <circle cx="310" cy="182" r="2" fill="#599C12"/>
              <circle cx="318" cy="182" r="2" fill="#599C12"/>
              <circle cx="326" cy="182" r="2" fill="#599C12"/>
              <circle cx="334" cy="182" r="2" fill="#599C12"/>
              <circle cx="342" cy="182" r="2" fill="#599C12"/>
              <circle cx="6" cy="190" r="2" fill="#599C12"/>
              <circle cx="14" cy="190" r="2" fill="#599C12"/>
              <circle cx="22" cy="190" r="2" fill="#599C12"/>
              <circle cx="30" cy="190" r="2" fill="#599C12"/>
              <circle cx="38" cy="190" r="2" fill="#599C12"/>
              <circle cx="46" cy="190" r="2" fill="#599C12"/>
              <circle cx="54" cy="190" r="2" fill="#599C12"/>
              <circle cx="62" cy="190" r="2" fill="#599C12"/>
              <circle cx="70" cy="190" r="2" fill="#599C12"/>
              <circle cx="78" cy="190" r="2" fill="#599C12"/>
              <circle cx="86" cy="190" r="2" fill="#599C12"/>
              <circle cx="94" cy="190" r="2" fill="#599C12"/>
              <circle cx="102" cy="190" r="2" fill="#599C12"/>
              <circle cx="110" cy="190" r="2" fill="#599C12"/>
              <circle cx="118" cy="190" r="2" fill="#599C12"/>
              <circle cx="126" cy="190" r="2" fill="#599C12"/>
              <circle cx="134" cy="190" r="2" fill="#599C12"/>
              <circle cx="142" cy="190" r="2" fill="#599C12"/>
              <circle cx="150" cy="190" r="2" fill="#599C12"/>
              <circle cx="158" cy="190" r="2" fill="#599C12"/>
              <circle cx="166" cy="190" r="2" fill="#599C12"/>
              <circle cx="174" cy="190" r="2" fill="#599C12"/>
              <circle cx="182" cy="190" r="2" fill="#599C12"/>
              <circle cx="190" cy="190" r="2" fill="#599C12"/>
              <circle cx="198" cy="190" r="2" fill="#599C12"/>
              <circle cx="206" cy="190" r="2" fill="#599C12"/>
              <circle cx="214" cy="190" r="2" fill="#599C12"/>
              <circle cx="222" cy="190" r="2" fill="#599C12"/>
              <circle cx="230" cy="190" r="2" fill="#599C12"/>
              <circle cx="238" cy="190" r="2" fill="#599C12"/>
              <circle cx="246" cy="190" r="2" fill="#599C12"/>
              <circle cx="254" cy="190" r="2" fill="#599C12"/>
              <circle cx="262" cy="190" r="2" fill="#599C12"/>
              <circle cx="270" cy="190" r="2" fill="#599C12"/>
              <circle cx="278" cy="190" r="2" fill="#599C12"/>
              <circle cx="286" cy="190" r="2" fill="#599C12"/>
              <circle cx="294" cy="190" r="2" fill="#599C12"/>
              <circle cx="302" cy="190" r="2" fill="#599C12"/>
              <circle cx="310" cy="190" r="2" fill="#599C12"/>
              <circle cx="318" cy="190" r="2" fill="#599C12"/>
              <circle cx="326" cy="190" r="2" fill="#599C12"/>
              <circle cx="334" cy="190" r="2" fill="#599C12"/>
              <circle cx="342" cy="190" r="2" fill="#599C12"/>
              <circle cx="6" cy="198" r="2" fill="#599C12"/>
              <circle cx="14" cy="198" r="2" fill="#599C12"/>
              <circle cx="22" cy="198" r="2" fill="#599C12"/>
              <circle cx="30" cy="198" r="2" fill="#599C12"/>
              <circle cx="38" cy="198" r="2" fill="#599C12"/>
              <circle cx="46" cy="198" r="2" fill="#599C12"/>
              <circle cx="54" cy="198" r="2" fill="#599C12"/>
              <circle cx="62" cy="198" r="2" fill="#599C12"/>
              <circle cx="70" cy="198" r="2" fill="#599C12"/>
              <circle cx="78" cy="198" r="2" fill="#599C12"/>
              <circle cx="86" cy="198" r="2" fill="#599C12"/>
              <circle cx="94" cy="198" r="2" fill="#599C12"/>
              <circle cx="102" cy="198" r="2" fill="#599C12"/>
              <circle cx="110" cy="198" r="2" fill="#599C12"/>
              <circle cx="118" cy="198" r="2" fill="#599C12"/>
              <circle cx="126" cy="198" r="2" fill="#599C12"/>
              <circle cx="134" cy="198" r="2" fill="#599C12"/>
              <circle cx="142" cy="198" r="2" fill="#599C12"/>
              <circle cx="150" cy="198" r="2" fill="#599C12"/>
              <circle cx="158" cy="198" r="2" fill="#599C12"/>
              <circle cx="166" cy="198" r="2" fill="#599C12"/>
              <circle cx="174" cy="198" r="2" fill="#599C12"/>
              <circle cx="182" cy="198" r="2" fill="#599C12"/>
              <circle cx="190" cy="198" r="2" fill="#599C12"/>
              <circle cx="198" cy="198" r="2" fill="#599C12"/>
              <circle cx="206" cy="198" r="2" fill="#599C12"/>
              <circle cx="214" cy="198" r="2" fill="#599C12"/>
              <circle cx="222" cy="198" r="2" fill="#599C12"/>
              <circle cx="230" cy="198" r="2" fill="#599C12"/>
              <circle cx="238" cy="198" r="2" fill="#599C12"/>
              <circle cx="246" cy="198" r="2" fill="#599C12"/>
              <circle cx="254" cy="198" r="2" fill="#599C12"/>
              <circle cx="262" cy="198" r="2" fill="#599C12"/>
              <circle cx="270" cy="198" r="2" fill="#599C12"/>
              <circle cx="278" cy="198" r="2" fill="#599C12"/>
              <circle cx="286" cy="198" r="2" fill="#599C12"/>
              <circle cx="294" cy="198" r="2" fill="#599C12"/>
              <circle cx="302" cy="198" r="2" fill="#599C12"/>
              <circle cx="310" cy="198" r="2" fill="#599C12"/>
              <circle cx="318" cy="198" r="2" fill="#599C12"/>
              <circle cx="326" cy="198" r="2" fill="#599C12"/>
              <circle cx="334" cy="198" r="2" fill="#599C12"/>
              <circle cx="342" cy="198" r="2" fill="#599C12"/>
            </svg>
          </div>
        </div>
      </div>
    </section>
<?php endif;?>

  <?php
      $warrantyObligationsBlockTitle = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_obligation_block_title'.green_system_lang_prefix());
	    $warrantyObligationsText = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_obligation_text'.green_system_lang_prefix());
	    $warrantyObligationsCall = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_obligation_call_to_text'.green_system_lang_prefix());

      if( $warrantyObligationsBlockTitle && $warrantyObligationsText ):?>
      <!-- Гарантійні зобовʼязання -->
      <section class="warranty-obligations indent-bottom-middle animation-tracking">
        <div class="container">
          <div class="row first-up">
            <h2 class="block-title col-12 small-title"><?php echo $warrantyObligationsBlockTitle;?></h2>
          </div>
          <div class="row second-up">
            <div class="text col-12">
              <?php echo wpautop($warrantyObligationsText);?>
            </div>
          </div>
          <div class="row third-up">
            <div class="call col-12">
              <div class="inner">
                <?php echo wpautop($warrantyObligationsCall);?>
              </div>
            </div>
          </div>
        </div>
      </section>
  <?php endif;?>
  <?php
      $warrantyRepairBlockTitle = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_repair_block_title'.green_system_lang_prefix());
	    $warrantyRepairText = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_repair_text'.green_system_lang_prefix());
	    $warrantyRepairTalonTitle = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_repair_talon_title'.green_system_lang_prefix());
	    $warrantyRepairTalonList = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_repair_talon_list'.green_system_lang_prefix());
	    $warrantyRepairTalonMore = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_repair_talon_more'.green_system_lang_prefix());

      if( $warrantyRepairBlockTitle && $warrantyRepairText ):?>
      <!-- Гарантійний ремонт -->
      <section class="warranty-repair indent-bottom-big animation-tracking">
        <div class="container">
          <div class="row first-up">
            <h2 class="block-title col-12 small-title"><?php echo @$warrantyRepairBlockTitle;?></h2>
          </div>
          <div class="row second-up">
            <div class="text col-12">
              <?php echo $warrantyRepairText;?>
            </div>
          </div>
          <?php if( $warrantyRepairTalonTitle && $warrantyRepairTalonList ):?>
            <div class="row talon-content third-up">
              <div class="talon col-md-6">
                <div class="inner">
                  <h3><?php echo $warrantyRepairTalonTitle;?></h3>
                  <ul>
		                <?php foreach( $warrantyRepairTalonList as $item ):?>
                      <li><?php echo $item['text'];?></li>
		                <?php endforeach;?>
                  </ul>
                  <svg width="220" height="220" viewBox="0 0 220 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="icon-warehouse" clip-path="url(#clip0_906_1948)">
                      <g id="Clip path group">
                        <mask id="mask0_906_1948" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="220" height="220">
                          <g id="clip0_2401_552">
                            <path id="Vector" d="M220 0H0V220H220V0Z" fill="white"/>
                          </g>
                        </mask>
                        <g mask="url(#mask0_906_1948)">
                          <g id="Group">
                            <path id="Vector_2" d="M130.625 20.625C128.802 20.625 127.053 21.3494 125.763 22.6386C124.474 23.9279 123.75 25.6767 123.75 27.5C123.75 29.3233 124.474 31.0721 125.763 32.3614C127.053 33.6507 128.802 34.375 130.625 34.375C132.448 34.375 134.197 33.6507 135.487 32.3614C136.776 31.0721 137.5 29.3233 137.5 27.5C137.5 25.6767 136.776 23.9279 135.487 22.6386C134.197 21.3494 132.448 20.625 130.625 20.625ZM110 20.625C108.177 20.625 106.428 21.3494 105.138 22.6386C103.849 23.9279 103.125 25.6767 103.125 27.5C103.125 29.3233 103.849 31.0721 105.138 32.3614C106.428 33.6507 108.177 34.375 110 34.375C111.823 34.375 113.572 33.6507 114.862 32.3614C116.151 31.0721 116.875 29.3233 116.875 27.5C116.875 25.6767 116.151 23.9279 114.862 22.6386C113.572 21.3494 111.823 20.625 110 20.625ZM89.375 20.625C87.5518 20.625 85.8028 21.3494 84.5135 22.6386C83.2242 23.9279 82.5 25.6767 82.5 27.5C82.5 29.3233 83.2242 31.0721 84.5135 32.3614C85.8028 33.6507 87.5518 34.375 89.375 34.375C91.1982 34.375 92.9473 33.6507 94.2365 32.3614C95.5258 31.0721 96.25 29.3233 96.25 27.5C96.25 25.6767 95.5258 23.9279 94.2365 22.6386C92.9473 21.3494 91.1982 20.625 89.375 20.625ZM89.375 41.25C87.5518 41.25 85.8028 41.9743 84.5135 43.2636C83.2242 44.5529 82.5 46.3018 82.5 48.125C82.5 49.9483 83.2242 51.6973 84.5135 52.9865C85.8028 54.2758 87.5518 55 89.375 55C91.1982 55 92.9473 54.2758 94.2365 52.9865C95.5258 51.6973 96.25 49.9483 96.25 48.125C96.25 46.3018 95.5258 44.5529 94.2365 43.2636C92.9473 41.9743 91.1982 41.25 89.375 41.25ZM130.625 61.875C128.802 61.875 127.053 62.5992 125.763 63.8885C124.474 65.1777 123.75 66.9268 123.75 68.75C123.75 70.5733 124.474 72.3223 125.763 73.6115C127.053 74.9008 128.802 75.625 130.625 75.625C132.448 75.625 134.197 74.9008 135.487 73.6115C136.776 72.3223 137.5 70.5733 137.5 68.75C137.5 66.9268 136.776 65.1777 135.487 63.8885C134.197 62.5992 132.448 61.875 130.625 61.875ZM130.625 41.25C128.802 41.25 127.053 41.9743 125.763 43.2636C124.474 44.5529 123.75 46.3018 123.75 48.125C123.75 49.9483 124.474 51.6973 125.763 52.9865C127.053 54.2758 128.802 55 130.625 55C132.448 55 134.197 54.2758 135.487 52.9865C136.776 51.6973 137.5 49.9483 137.5 48.125C137.5 46.3018 136.776 44.5529 135.487 43.2636C134.197 41.9743 132.448 41.25 130.625 41.25ZM110 61.875C108.177 61.875 106.428 62.5992 105.138 63.8885C103.849 65.1777 103.125 66.9268 103.125 68.75C103.125 70.5733 103.849 72.3223 105.138 73.6115C106.428 74.9008 108.177 75.625 110 75.625C111.823 75.625 113.572 74.9008 114.862 73.6115C116.151 72.3223 116.875 70.5733 116.875 68.75C116.875 66.9268 116.151 65.1777 114.862 63.8885C113.572 62.5992 111.823 61.875 110 61.875ZM89.375 61.875C87.5518 61.875 85.8028 62.5992 84.5135 63.8885C83.2242 65.1777 82.5 66.9268 82.5 68.75C82.5 70.5733 83.2242 72.3223 84.5135 73.6115C85.8028 74.9008 87.5518 75.625 89.375 75.625C91.1982 75.625 92.9473 74.9008 94.2365 73.6115C95.5258 72.3223 96.25 70.5733 96.25 68.75C96.25 66.9268 95.5258 65.1777 94.2365 63.8885C92.9473 62.5992 91.1982 61.875 89.375 61.875ZM130.625 82.5C128.802 82.5 127.053 83.2242 125.763 84.5135C124.474 85.8028 123.75 87.5518 123.75 89.375C123.75 91.1982 124.474 92.9473 125.763 94.2365C127.053 95.5258 128.802 96.25 130.625 96.25C132.448 96.25 134.197 95.5258 135.487 94.2365C136.776 92.9473 137.5 91.1982 137.5 89.375C137.5 87.5518 136.776 85.8028 135.487 84.5135C134.197 83.2242 132.448 82.5 130.625 82.5ZM110 82.5C108.177 82.5 106.428 83.2242 105.138 84.5135C103.849 85.8028 103.125 87.5518 103.125 89.375C103.125 91.1982 103.849 92.9473 105.138 94.2365C106.428 95.5258 108.177 96.25 110 96.25C111.823 96.25 113.572 95.5258 114.862 94.2365C116.151 92.9473 116.875 91.1982 116.875 89.375C116.875 87.5518 116.151 85.8028 114.862 84.5135C113.572 83.2242 111.823 82.5 110 82.5ZM89.375 82.5C87.5518 82.5 85.8028 83.2242 84.5135 84.5135C83.2242 85.8028 82.5 87.5518 82.5 89.375C82.5 91.1982 83.2242 92.9473 84.5135 94.2365C85.8028 95.5258 87.5518 96.25 89.375 96.25C91.1982 96.25 92.9473 95.5258 94.2365 94.2365C95.5258 92.9473 96.25 91.1982 96.25 89.375C96.25 87.5518 95.5258 85.8028 94.2365 84.5135C92.9473 83.2242 91.1982 82.5 89.375 82.5ZM171.875 123.75C170.052 123.75 168.303 124.474 167.013 125.763C165.724 127.053 165 128.802 165 130.625C165 132.448 165.724 134.197 167.013 135.487C168.303 136.776 170.052 137.5 171.875 137.5C173.698 137.5 175.447 136.776 176.737 135.487C178.026 134.197 178.75 132.448 178.75 130.625C178.75 128.802 178.026 127.053 176.737 125.763C175.447 124.474 173.698 123.75 171.875 123.75ZM151.25 123.75C149.427 123.75 147.678 124.474 146.388 125.763C145.099 127.053 144.375 128.802 144.375 130.625C144.375 132.448 145.099 134.197 146.388 135.487C147.678 136.776 149.427 137.5 151.25 137.5C153.073 137.5 154.822 136.776 156.112 135.487C157.401 134.197 158.125 132.448 158.125 130.625C158.125 128.802 157.401 127.053 156.112 125.763C154.822 124.474 153.073 123.75 151.25 123.75ZM130.625 123.75C128.802 123.75 127.053 124.474 125.763 125.763C124.474 127.053 123.75 128.802 123.75 130.625C123.75 132.448 124.474 134.197 125.763 135.487C127.053 136.776 128.802 137.5 130.625 137.5C132.448 137.5 134.197 136.776 135.487 135.487C136.776 134.197 137.5 132.448 137.5 130.625C137.5 128.802 136.776 127.053 135.487 125.763C134.197 124.474 132.448 123.75 130.625 123.75ZM89.375 123.75C87.5518 123.75 85.8028 124.474 84.5135 125.763C83.2242 127.053 82.5 128.802 82.5 130.625C82.5 132.448 83.2242 134.197 84.5135 135.487C85.8028 136.776 87.5518 137.5 89.375 137.5C91.1982 137.5 92.9473 136.776 94.2365 135.487C95.5258 134.197 96.25 132.448 96.25 130.625C96.25 128.802 95.5258 127.053 94.2365 125.763C92.9473 124.474 91.1982 123.75 89.375 123.75ZM68.75 123.75C66.9268 123.75 65.1777 124.474 63.8885 125.763C62.5992 127.053 61.875 128.802 61.875 130.625C61.875 132.448 62.5992 134.197 63.8885 135.487C65.1777 136.776 66.9268 137.5 68.75 137.5C70.5732 137.5 72.3223 136.776 73.6115 135.487C74.9008 134.197 75.625 132.448 75.625 130.625C75.625 128.802 74.9008 127.053 73.6115 125.763C72.3223 124.474 70.5732 123.75 68.75 123.75ZM48.125 123.75C46.3018 123.75 44.5529 124.474 43.2636 125.763C41.9743 127.053 41.25 128.802 41.25 130.625C41.25 132.448 41.9743 134.197 43.2636 135.487C44.5529 136.776 46.3018 137.5 48.125 137.5C49.9483 137.5 51.6973 136.776 52.9865 135.487C54.2758 134.197 55 132.448 55 130.625C55 128.802 54.2758 127.053 52.9865 125.763C51.6973 124.474 49.9483 123.75 48.125 123.75ZM27.5 123.75C25.6767 123.75 23.9279 124.474 22.6386 125.763C21.3494 127.053 20.625 128.802 20.625 130.625C20.625 132.448 21.3494 134.197 22.6386 135.487C23.9279 136.776 25.6767 137.5 27.5 137.5C29.3233 137.5 31.0721 136.776 32.3614 135.487C33.6507 134.197 34.375 132.448 34.375 130.625C34.375 128.802 33.6507 127.053 32.3614 125.763C31.0721 124.474 29.3233 123.75 27.5 123.75ZM130.625 144.375C128.802 144.375 127.053 145.099 125.763 146.388C124.474 147.678 123.75 149.427 123.75 151.25C123.75 153.073 124.474 154.822 125.763 156.112C127.053 157.401 128.802 158.125 130.625 158.125C132.448 158.125 134.197 157.401 135.487 156.112C136.776 154.822 137.5 153.073 137.5 151.25C137.5 149.427 136.776 147.678 135.487 146.388C134.197 145.099 132.448 144.375 130.625 144.375ZM89.375 144.375C87.5518 144.375 85.8028 145.099 84.5135 146.388C83.2242 147.678 82.5 149.427 82.5 151.25C82.5 153.073 83.2242 154.822 84.5135 156.112C85.8028 157.401 87.5518 158.125 89.375 158.125C91.1982 158.125 92.9473 157.401 94.2365 156.112C95.5258 154.822 96.25 153.073 96.25 151.25C96.25 149.427 95.5258 147.678 94.2365 146.388C92.9473 145.099 91.1982 144.375 89.375 144.375ZM68.75 144.375C66.9268 144.375 65.1777 145.099 63.8885 146.388C62.5992 147.678 61.875 149.427 61.875 151.25C61.875 153.073 62.5992 154.822 63.8885 156.112C65.1777 157.401 66.9268 158.125 68.75 158.125C70.5732 158.125 72.3223 157.401 73.6115 156.112C74.9008 154.822 75.625 153.073 75.625 151.25C75.625 149.427 74.9008 147.678 73.6115 146.388C72.3223 145.099 70.5732 144.375 68.75 144.375ZM27.5 144.375C25.6767 144.375 23.9279 145.099 22.6386 146.388C21.3494 147.678 20.625 149.427 20.625 151.25C20.625 153.073 21.3494 154.822 22.6386 156.112C23.9279 157.401 25.6767 158.125 27.5 158.125C29.3233 158.125 31.0721 157.401 32.3614 156.112C33.6507 154.822 34.375 153.073 34.375 151.25C34.375 149.427 33.6507 147.678 32.3614 146.388C31.0721 145.099 29.3233 144.375 27.5 144.375ZM171.875 165C170.052 165 168.303 165.724 167.013 167.013C165.724 168.303 165 170.052 165 171.875C165 173.698 165.724 175.447 167.013 176.737C168.303 178.026 170.052 178.75 171.875 178.75C173.698 178.75 175.447 178.026 176.737 176.737C178.026 175.447 178.75 173.698 178.75 171.875C178.75 170.052 178.026 168.303 176.737 167.013C175.447 165.724 173.698 165 171.875 165ZM151.25 20.625C149.427 20.625 147.678 21.3494 146.388 22.6386C145.099 23.9279 144.375 25.6767 144.375 27.5C144.375 29.3233 145.099 31.0721 146.388 32.3614C147.678 33.6507 149.427 34.375 151.25 34.375C153.073 34.375 154.822 33.6507 156.112 32.3614C157.401 31.0721 158.125 29.3233 158.125 27.5C158.125 25.6767 157.401 23.9279 156.112 22.6386C154.822 21.3494 153.073 20.625 151.25 20.625ZM151.25 41.25C149.427 41.25 147.678 41.9743 146.388 43.2636C145.099 44.5529 144.375 46.3018 144.375 48.125C144.375 49.9483 145.099 51.6973 146.388 52.9865C147.678 54.2758 149.427 55 151.25 55C153.073 55 154.822 54.2758 156.112 52.9865C157.401 51.6973 158.125 49.9483 158.125 48.125C158.125 46.3018 157.401 44.5529 156.112 43.2636C154.822 41.9743 153.073 41.25 151.25 41.25ZM151.25 61.875C149.427 61.875 147.678 62.5992 146.388 63.8885C145.099 65.1777 144.375 66.9268 144.375 68.75C144.375 70.5733 145.099 72.3223 146.388 73.6115C147.678 74.9008 149.427 75.625 151.25 75.625C153.073 75.625 154.822 74.9008 156.112 73.6115C157.401 72.3223 158.125 70.5733 158.125 68.75C158.125 66.9268 157.401 65.1777 156.112 63.8885C154.822 62.5992 153.073 61.875 151.25 61.875ZM151.25 82.5C149.427 82.5 147.678 83.2242 146.388 84.5135C145.099 85.8028 144.375 87.5518 144.375 89.375C144.375 91.1982 145.099 92.9473 146.388 94.2365C147.678 95.5258 149.427 96.25 151.25 96.25C153.073 96.25 154.822 95.5258 156.112 94.2365C157.401 92.9473 158.125 91.1982 158.125 89.375C158.125 87.5518 157.401 85.8028 156.112 84.5135C154.822 83.2242 153.073 82.5 151.25 82.5ZM68.75 20.625C66.9268 20.625 65.1777 21.3494 63.8885 22.6386C62.5992 23.9279 61.875 25.6767 61.875 27.5C61.875 29.3233 62.5992 31.0721 63.8885 32.3614C65.1777 33.6507 66.9268 34.375 68.75 34.375C70.5732 34.375 72.3223 33.6507 73.6115 32.3614C74.9008 31.0721 75.625 29.3233 75.625 27.5C75.625 25.6767 74.9008 23.9279 73.6115 22.6386C72.3223 21.3494 70.5732 20.625 68.75 20.625ZM68.75 41.25C66.9268 41.25 65.1777 41.9743 63.8885 43.2636C62.5992 44.5529 61.875 46.3018 61.875 48.125C61.875 49.9483 62.5992 51.6973 63.8885 52.9865C65.1777 54.2758 66.9268 55 68.75 55C70.5732 55 72.3223 54.2758 73.6115 52.9865C74.9008 51.6973 75.625 49.9483 75.625 48.125C75.625 46.3018 74.9008 44.5529 73.6115 43.2636C72.3223 41.9743 70.5732 41.25 68.75 41.25ZM68.75 61.875C66.9268 61.875 65.1777 62.5992 63.8885 63.8885C62.5992 65.1777 61.875 66.9268 61.875 68.75C61.875 70.5733 62.5992 72.3223 63.8885 73.6115C65.1777 74.9008 66.9268 75.625 68.75 75.625C70.5732 75.625 72.3223 74.9008 73.6115 73.6115C74.9008 72.3223 75.625 70.5733 75.625 68.75C75.625 66.9268 74.9008 65.1777 73.6115 63.8885C72.3223 62.5992 70.5732 61.875 68.75 61.875ZM68.75 82.5C66.9268 82.5 65.1777 83.2242 63.8885 84.5135C62.5992 85.8028 61.875 87.5518 61.875 89.375C61.875 91.1982 62.5992 92.9473 63.8885 94.2365C65.1777 95.5258 66.9268 96.25 68.75 96.25C70.5732 96.25 72.3223 95.5258 73.6115 94.2365C74.9008 92.9473 75.625 91.1982 75.625 89.375C75.625 87.5518 74.9008 85.8028 73.6115 84.5135C72.3223 83.2242 70.5732 82.5 68.75 82.5ZM192.5 123.75C190.677 123.75 188.928 124.474 187.638 125.763C186.349 127.053 185.625 128.802 185.625 130.625C185.625 132.448 186.349 134.197 187.638 135.487C188.928 136.776 190.677 137.5 192.5 137.5C194.323 137.5 196.072 136.776 197.362 135.487C198.651 134.197 199.375 132.448 199.375 130.625C199.375 128.802 198.651 127.053 197.362 125.763C196.072 124.474 194.323 123.75 192.5 123.75ZM192.5 144.375C190.677 144.375 188.928 145.099 187.638 146.388C186.349 147.678 185.625 149.427 185.625 151.25C185.625 153.073 186.349 154.822 187.638 156.112C188.928 157.401 190.677 158.125 192.5 158.125C194.323 158.125 196.072 157.401 197.362 156.112C198.651 154.822 199.375 153.073 199.375 151.25C199.375 149.427 198.651 147.678 197.362 146.388C196.072 145.099 194.323 144.375 192.5 144.375ZM192.5 165C190.677 165 188.928 165.724 187.638 167.013C186.349 168.303 185.625 170.052 185.625 171.875C185.625 173.698 186.349 175.447 187.638 176.737C188.928 178.026 190.677 178.75 192.5 178.75C194.323 178.75 196.072 178.026 197.362 176.737C198.651 175.447 199.375 173.698 199.375 171.875C199.375 170.052 198.651 168.303 197.362 167.013C196.072 165.724 194.323 165 192.5 165ZM151.25 165C149.427 165 147.678 165.724 146.388 167.013C145.099 168.303 144.375 170.052 144.375 171.875C144.375 173.698 145.099 175.447 146.388 176.737C147.678 178.026 149.427 178.75 151.25 178.75C153.073 178.75 154.822 178.026 156.112 176.737C157.401 175.447 158.125 173.698 158.125 171.875C158.125 170.052 157.401 168.303 156.112 167.013C154.822 165.724 153.073 165 151.25 165ZM151.25 144.375C149.427 144.375 147.678 145.099 146.388 146.388C145.099 147.678 144.375 149.427 144.375 151.25C144.375 153.073 145.099 154.822 146.388 156.112C147.678 157.401 149.427 158.125 151.25 158.125C153.073 158.125 154.822 157.401 156.112 156.112C157.401 154.822 158.125 153.073 158.125 151.25C158.125 149.427 157.401 147.678 156.112 146.388C154.822 145.099 153.073 144.375 151.25 144.375ZM130.625 165C128.802 165 127.053 165.724 125.763 167.013C124.474 168.303 123.75 170.052 123.75 171.875C123.75 173.698 124.474 175.447 125.763 176.737C127.053 178.026 128.802 178.75 130.625 178.75C132.448 178.75 134.197 178.026 135.487 176.737C136.776 175.447 137.5 173.698 137.5 171.875C137.5 170.052 136.776 168.303 135.487 167.013C134.197 165.724 132.448 165 130.625 165ZM89.375 165C87.5518 165 85.8028 165.724 84.5135 167.013C83.2242 168.303 82.5 170.052 82.5 171.875C82.5 173.698 83.2242 175.447 84.5135 176.737C85.8028 178.026 87.5518 178.75 89.375 178.75C91.1982 178.75 92.9473 178.026 94.2365 176.737C95.5258 175.447 96.25 173.698 96.25 171.875C96.25 170.052 95.5258 168.303 94.2365 167.013C92.9473 165.724 91.1982 165 89.375 165ZM68.75 165C66.9268 165 65.1777 165.724 63.8885 167.013C62.5992 168.303 61.875 170.052 61.875 171.875C61.875 173.698 62.5992 175.447 63.8885 176.737C65.1777 178.026 66.9268 178.75 68.75 178.75C70.5732 178.75 72.3223 178.026 73.6115 176.737C74.9008 175.447 75.625 173.698 75.625 171.875C75.625 170.052 74.9008 168.303 73.6115 167.013C72.3223 165.724 70.5732 165 68.75 165ZM48.125 165C46.3018 165 44.5529 165.724 43.2636 167.013C41.9743 168.303 41.25 170.052 41.25 171.875C41.25 173.698 41.9743 175.447 43.2636 176.737C44.5529 178.026 46.3018 178.75 48.125 178.75C49.9483 178.75 51.6973 178.026 52.9865 176.737C54.2758 175.447 55 173.698 55 171.875C55 170.052 54.2758 168.303 52.9865 167.013C51.6973 165.724 49.9483 165 48.125 165ZM27.5 165C25.6767 165 23.9279 165.724 22.6386 167.013C21.3494 168.303 20.625 170.052 20.625 171.875C20.625 173.698 21.3494 175.447 22.6386 176.737C23.9279 178.026 25.6767 178.75 27.5 178.75C29.3233 178.75 31.0721 178.026 32.3614 176.737C33.6507 175.447 34.375 173.698 34.375 171.875C34.375 170.052 33.6507 168.303 32.3614 167.013C31.0721 165.724 29.3233 165 27.5 165ZM171.875 185.625C170.052 185.625 168.303 186.349 167.013 187.638C165.724 188.928 165 190.677 165 192.5C165 194.323 165.724 196.072 167.013 197.362C168.303 198.651 170.052 199.375 171.875 199.375C173.698 199.375 175.447 198.651 176.737 197.362C178.026 196.072 178.75 194.323 178.75 192.5C178.75 190.677 178.026 188.928 176.737 187.638C175.447 186.349 173.698 185.625 171.875 185.625ZM192.5 185.625C190.677 185.625 188.928 186.349 187.638 187.638C186.349 188.928 185.625 190.677 185.625 192.5C185.625 194.323 186.349 196.072 187.638 197.362C188.928 198.651 190.677 199.375 192.5 199.375C194.323 199.375 196.072 198.651 197.362 197.362C198.651 196.072 199.375 194.323 199.375 192.5C199.375 190.677 198.651 188.928 197.362 187.638C196.072 186.349 194.323 185.625 192.5 185.625ZM213.125 123.75C211.302 123.75 209.553 124.474 208.263 125.763C206.974 127.053 206.25 128.802 206.25 130.625C206.25 132.448 206.974 134.197 208.263 135.487C209.553 136.776 211.302 137.5 213.125 137.5C214.948 137.5 216.697 136.776 217.987 135.487C219.276 134.197 220 132.448 220 130.625C220 128.802 219.276 127.053 217.987 125.763C216.697 124.474 214.948 123.75 213.125 123.75ZM213.125 144.375C211.302 144.375 209.553 145.099 208.263 146.388C206.974 147.678 206.25 149.427 206.25 151.25C206.25 153.073 206.974 154.822 208.263 156.112C209.553 157.401 211.302 158.125 213.125 158.125C214.948 158.125 216.697 157.401 217.987 156.112C219.276 154.822 220 153.073 220 151.25C220 149.427 219.276 147.678 217.987 146.388C216.697 145.099 214.948 144.375 213.125 144.375ZM213.125 165C211.302 165 209.553 165.724 208.263 167.013C206.974 168.303 206.25 170.052 206.25 171.875C206.25 173.698 206.974 175.447 208.263 176.737C209.553 178.026 211.302 178.75 213.125 178.75C214.948 178.75 216.697 178.026 217.987 176.737C219.276 175.447 220 173.698 220 171.875C220 170.052 219.276 168.303 217.987 167.013C216.697 165.724 214.948 165 213.125 165ZM213.125 185.625C211.302 185.625 209.553 186.349 208.263 187.638C206.974 188.928 206.25 190.677 206.25 192.5C206.25 194.323 206.974 196.072 208.263 197.362C209.553 198.651 211.302 199.375 213.125 199.375C214.948 199.375 216.697 198.651 217.987 197.362C219.276 196.072 220 194.323 220 192.5C220 190.677 219.276 188.928 217.987 187.638C216.697 186.349 214.948 185.625 213.125 185.625ZM151.25 185.625C149.427 185.625 147.678 186.349 146.388 187.638C145.099 188.928 144.375 190.677 144.375 192.5C144.375 194.323 145.099 196.072 146.388 197.362C147.678 198.651 149.427 199.375 151.25 199.375C153.073 199.375 154.822 198.651 156.112 197.362C157.401 196.072 158.125 194.323 158.125 192.5C158.125 190.677 157.401 188.928 156.112 187.638C154.822 186.349 153.073 185.625 151.25 185.625ZM130.625 185.625C128.802 185.625 127.053 186.349 125.763 187.638C124.474 188.928 123.75 190.677 123.75 192.5C123.75 194.323 124.474 196.072 125.763 197.362C127.053 198.651 128.802 199.375 130.625 199.375C132.448 199.375 134.197 198.651 135.487 197.362C136.776 196.072 137.5 194.323 137.5 192.5C137.5 190.677 136.776 188.928 135.487 187.638C134.197 186.349 132.448 185.625 130.625 185.625ZM89.375 185.625C87.5518 185.625 85.8028 186.349 84.5135 187.638C83.2242 188.928 82.5 190.677 82.5 192.5C82.5 194.323 83.2242 196.072 84.5135 197.362C85.8028 198.651 87.5518 199.375 89.375 199.375C91.1982 199.375 92.9473 198.651 94.2365 197.362C95.5258 196.072 96.25 194.323 96.25 192.5C96.25 190.677 95.5258 188.928 94.2365 187.638C92.9473 186.349 91.1982 185.625 89.375 185.625ZM68.75 185.625C66.9268 185.625 65.1777 186.349 63.8885 187.638C62.5992 188.928 61.875 190.677 61.875 192.5C61.875 194.323 62.5992 196.072 63.8885 197.362C65.1777 198.651 66.9268 199.375 68.75 199.375C70.5732 199.375 72.3223 198.651 73.6115 197.362C74.9008 196.072 75.625 194.323 75.625 192.5C75.625 190.677 74.9008 188.928 73.6115 187.638C72.3223 186.349 70.5732 185.625 68.75 185.625ZM48.125 185.625C46.3018 185.625 44.5529 186.349 43.2636 187.638C41.9743 188.928 41.25 190.677 41.25 192.5C41.25 194.323 41.9743 196.072 43.2636 197.362C44.5529 198.651 46.3018 199.375 48.125 199.375C49.9483 199.375 51.6973 198.651 52.9865 197.362C54.2758 196.072 55 194.323 55 192.5C55 190.677 54.2758 188.928 52.9865 187.638C51.6973 186.349 49.9483 185.625 48.125 185.625ZM27.5 185.625C25.6767 185.625 23.9279 186.349 22.6386 187.638C21.3494 188.928 20.625 190.677 20.625 192.5C20.625 194.323 21.3494 196.072 22.6386 197.362C23.9279 198.651 25.6767 199.375 27.5 199.375C29.3233 199.375 31.0721 198.651 32.3614 197.362C33.6507 196.072 34.375 194.323 34.375 192.5C34.375 190.677 33.6507 188.928 32.3614 187.638C31.0721 186.349 29.3233 185.625 27.5 185.625ZM6.875 123.75C5.05166 123.75 3.30295 124.474 2.01364 125.763C0.724327 127.053 0 128.802 0 130.625C0 132.448 0.724327 134.197 2.01364 135.487C3.30295 136.776 5.05166 137.5 6.875 137.5C8.69834 137.5 10.4471 136.776 11.7364 135.487C13.0257 134.197 13.75 132.448 13.75 130.625C13.75 128.802 13.0257 127.053 11.7364 125.763C10.4471 124.474 8.69834 123.75 6.875 123.75ZM6.875 144.375C5.05166 144.375 3.30295 145.099 2.01364 146.388C0.724327 147.678 0 149.427 0 151.25C0 153.073 0.724327 154.822 2.01364 156.112C3.30295 157.401 5.05166 158.125 6.875 158.125C8.69834 158.125 10.4471 157.401 11.7364 156.112C13.0257 154.822 13.75 153.073 13.75 151.25C13.75 149.427 13.0257 147.678 11.7364 146.388C10.4471 145.099 8.69834 144.375 6.875 144.375ZM6.875 165C5.05166 165 3.30295 165.724 2.01364 167.013C0.724327 168.303 0 170.052 0 171.875C0 173.698 0.724327 175.447 2.01364 176.737C3.30295 178.026 5.05166 178.75 6.875 178.75C8.69834 178.75 10.4471 178.026 11.7364 176.737C13.0257 175.447 13.75 173.698 13.75 171.875C13.75 170.052 13.0257 168.303 11.7364 167.013C10.4471 165.724 8.69834 165 6.875 165ZM6.875 185.625C5.05166 185.625 3.30295 186.349 2.01364 187.638C0.724327 188.928 0 190.677 0 192.5C0 194.323 0.724327 196.072 2.01364 197.362C3.30295 198.651 5.05166 199.375 6.875 199.375C8.69834 199.375 10.4471 198.651 11.7364 197.362C13.0257 196.072 13.75 194.323 13.75 192.5C13.75 190.677 13.0257 188.928 11.7364 187.638C10.4471 186.349 8.69834 185.625 6.875 185.625Z" fill="#FCFCFC"/>
                          </g>
                        </g>
                      </g>
                    </g>
                    <defs>
                      <clipPath id="clip0_906_1948">
                        <rect width="220" height="220" fill="white"/>
                      </clipPath>
                    </defs>
                  </svg>

                </div>
              </div>
              <?php if( $warrantyRepairTalonMore ):?>
                <div class="talon-more col-md-6">
                  <?php echo wpautop($warrantyRepairTalonMore);?>
                </div>
              <?php endif;?>
            </div>
          <?php endif;?>
        </div>
      </section>
  <?php endif;?>
<?php
	$contactFormTitle = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_block_title'.green_system_lang_prefix());
	$contactFormText = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_text'.green_system_lang_prefix());
	$contactFormKey = carbon_get_post_meta(get_the_ID(), 'green_system_guarantees_form_kay'.green_system_lang_prefix());

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
