<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки "Питання і Відповіді"
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
      $answersAboutCompanyBlockTitle = carbon_get_post_meta(get_the_ID(), 'green_system_questions_answers_about_company_block_title'.green_system_lang_prefix());
	    $answersAboutCompanyTitleIcon = carbon_get_post_meta(get_the_ID(), 'green_system_questions_answers_about_company_title_icon'.green_system_lang_prefix());
	    $answersAboutCompanyImage = carbon_get_post_meta(get_the_ID(), 'green_system_questions_answers_about_company_image'.green_system_lang_prefix());
	    $answersAboutCompanyQuestionList = carbon_get_post_meta(get_the_ID(), 'green_system_questions_answers_about_company_question_list'.green_system_lang_prefix());
	    $i = 0;

      if( $answersAboutCompanyBlockTitle && $answersAboutCompanyTitleIcon && $answersAboutCompanyImage && $answersAboutCompanyQuestionList ):?>
      <!-- Питання в/відповіді про компанію -->
      <section class="answers-about-company faq-page-block indent-bottom-middle animation-tracking">
        <div class="container">
          <div class="row">
            <div class="pic-wrapper col-lg-5 col-12 second-up">
              <div class="pic">
                <img
                   class="lazy"
                   data-src="<?php echo wp_get_attachment_image_src($answersAboutCompanyImage, 'full')[0];?>"
                   alt="<?php echo get_post_meta($answersAboutCompanyImage, '_wp_attachment_image_alt', TRUE);?>"
                >
              </div>
              <svg class="dots-pic" width="204" height="348" viewBox="0 0 204 348" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="198" cy="6" r="2" transform="rotate(90 198 6)" fill="#599C12"/>
                <circle cx="198" cy="14" r="2" transform="rotate(90 198 14)" fill="#599C12"/>
                <circle cx="198" cy="22" r="2" transform="rotate(90 198 22)" fill="#599C12"/>
                <circle cx="198" cy="30" r="2" transform="rotate(90 198 30)" fill="#599C12"/>
                <circle cx="198" cy="38" r="2" transform="rotate(90 198 38)" fill="#599C12"/>
                <circle cx="198" cy="46" r="2" transform="rotate(90 198 46)" fill="#599C12"/>
                <circle cx="198" cy="54" r="2" transform="rotate(90 198 54)" fill="#599C12"/>
                <circle cx="198" cy="62" r="2" transform="rotate(90 198 62)" fill="#599C12"/>
                <circle cx="198" cy="70" r="2" transform="rotate(90 198 70)" fill="#599C12"/>
                <circle cx="198" cy="78" r="2" transform="rotate(90 198 78)" fill="#599C12"/>
                <circle cx="198" cy="86" r="2" transform="rotate(90 198 86)" fill="#599C12"/>
                <circle cx="198" cy="94" r="2" transform="rotate(90 198 94)" fill="#599C12"/>
                <circle cx="198" cy="102" r="2" transform="rotate(90 198 102)" fill="#599C12"/>
                <circle cx="198" cy="110" r="2" transform="rotate(90 198 110)" fill="#599C12"/>
                <circle cx="198" cy="118" r="2" transform="rotate(90 198 118)" fill="#599C12"/>
                <circle cx="198" cy="126" r="2" transform="rotate(90 198 126)" fill="#599C12"/>
                <circle cx="198" cy="134" r="2" transform="rotate(90 198 134)" fill="#599C12"/>
                <circle cx="198" cy="142" r="2" transform="rotate(90 198 142)" fill="#599C12"/>
                <circle cx="198" cy="150" r="2" transform="rotate(90 198 150)" fill="#599C12"/>
                <circle cx="198" cy="158" r="2" transform="rotate(90 198 158)" fill="#599C12"/>
                <circle cx="198" cy="166" r="2" transform="rotate(90 198 166)" fill="#599C12"/>
                <circle cx="198" cy="174" r="2" transform="rotate(90 198 174)" fill="#599C12"/>
                <circle cx="198" cy="182" r="2" transform="rotate(90 198 182)" fill="#599C12"/>
                <circle cx="198" cy="190" r="2" transform="rotate(90 198 190)" fill="#599C12"/>
                <circle cx="198" cy="198" r="2" transform="rotate(90 198 198)" fill="#599C12"/>
                <circle cx="198" cy="206" r="2" transform="rotate(90 198 206)" fill="#599C12"/>
                <circle cx="198" cy="214" r="2" transform="rotate(90 198 214)" fill="#599C12"/>
                <circle cx="198" cy="222" r="2" transform="rotate(90 198 222)" fill="#599C12"/>
                <circle cx="198" cy="230" r="2" transform="rotate(90 198 230)" fill="#599C12"/>
                <circle cx="198" cy="238" r="2" transform="rotate(90 198 238)" fill="#599C12"/>
                <circle cx="198" cy="246" r="2" transform="rotate(90 198 246)" fill="#599C12"/>
                <circle cx="198" cy="254" r="2" transform="rotate(90 198 254)" fill="#599C12"/>
                <circle cx="198" cy="262" r="2" transform="rotate(90 198 262)" fill="#599C12"/>
                <circle cx="198" cy="270" r="2" transform="rotate(90 198 270)" fill="#599C12"/>
                <circle cx="198" cy="278" r="2" transform="rotate(90 198 278)" fill="#599C12"/>
                <circle cx="198" cy="286" r="2" transform="rotate(90 198 286)" fill="#599C12"/>
                <circle cx="198" cy="294" r="2" transform="rotate(90 198 294)" fill="#599C12"/>
                <circle cx="198" cy="302" r="2" transform="rotate(90 198 302)" fill="#599C12"/>
                <circle cx="198" cy="310" r="2" transform="rotate(90 198 310)" fill="#599C12"/>
                <circle cx="198" cy="318" r="2" transform="rotate(90 198 318)" fill="#599C12"/>
                <circle cx="198" cy="326" r="2" transform="rotate(90 198 326)" fill="#599C12"/>
                <circle cx="198" cy="334" r="2" transform="rotate(90 198 334)" fill="#599C12"/>
                <circle cx="198" cy="342" r="2" transform="rotate(90 198 342)" fill="#599C12"/>
                <circle cx="190" cy="6" r="2" transform="rotate(90 190 6)" fill="#599C12"/>
                <circle cx="190" cy="14" r="2" transform="rotate(90 190 14)" fill="#599C12"/>
                <circle cx="190" cy="22" r="2" transform="rotate(90 190 22)" fill="#599C12"/>
                <circle cx="190" cy="30" r="2" transform="rotate(90 190 30)" fill="#599C12"/>
                <circle cx="190" cy="38" r="2" transform="rotate(90 190 38)" fill="#599C12"/>
                <circle cx="190" cy="46" r="2" transform="rotate(90 190 46)" fill="#599C12"/>
                <circle cx="190" cy="54" r="2" transform="rotate(90 190 54)" fill="#599C12"/>
                <circle cx="190" cy="62" r="2" transform="rotate(90 190 62)" fill="#599C12"/>
                <circle cx="190" cy="70" r="2" transform="rotate(90 190 70)" fill="#599C12"/>
                <circle cx="190" cy="78" r="2" transform="rotate(90 190 78)" fill="#599C12"/>
                <circle cx="190" cy="86" r="2" transform="rotate(90 190 86)" fill="#599C12"/>
                <circle cx="190" cy="94" r="2" transform="rotate(90 190 94)" fill="#599C12"/>
                <circle cx="190" cy="102" r="2" transform="rotate(90 190 102)" fill="#599C12"/>
                <circle cx="190" cy="110" r="2" transform="rotate(90 190 110)" fill="#599C12"/>
                <circle cx="190" cy="118" r="2" transform="rotate(90 190 118)" fill="#599C12"/>
                <circle cx="190" cy="126" r="2" transform="rotate(90 190 126)" fill="#599C12"/>
                <circle cx="190" cy="134" r="2" transform="rotate(90 190 134)" fill="#599C12"/>
                <circle cx="190" cy="142" r="2" transform="rotate(90 190 142)" fill="#599C12"/>
                <circle cx="190" cy="150" r="2" transform="rotate(90 190 150)" fill="#599C12"/>
                <circle cx="190" cy="158" r="2" transform="rotate(90 190 158)" fill="#599C12"/>
                <circle cx="190" cy="166" r="2" transform="rotate(90 190 166)" fill="#599C12"/>
                <circle cx="190" cy="174" r="2" transform="rotate(90 190 174)" fill="#599C12"/>
                <circle cx="190" cy="182" r="2" transform="rotate(90 190 182)" fill="#599C12"/>
                <circle cx="190" cy="190" r="2" transform="rotate(90 190 190)" fill="#599C12"/>
                <circle cx="190" cy="198" r="2" transform="rotate(90 190 198)" fill="#599C12"/>
                <circle cx="190" cy="206" r="2" transform="rotate(90 190 206)" fill="#599C12"/>
                <circle cx="190" cy="214" r="2" transform="rotate(90 190 214)" fill="#599C12"/>
                <circle cx="190" cy="222" r="2" transform="rotate(90 190 222)" fill="#599C12"/>
                <circle cx="190" cy="230" r="2" transform="rotate(90 190 230)" fill="#599C12"/>
                <circle cx="190" cy="238" r="2" transform="rotate(90 190 238)" fill="#599C12"/>
                <circle cx="190" cy="246" r="2" transform="rotate(90 190 246)" fill="#599C12"/>
                <circle cx="190" cy="254" r="2" transform="rotate(90 190 254)" fill="#599C12"/>
                <circle cx="190" cy="262" r="2" transform="rotate(90 190 262)" fill="#599C12"/>
                <circle cx="190" cy="270" r="2" transform="rotate(90 190 270)" fill="#599C12"/>
                <circle cx="190" cy="278" r="2" transform="rotate(90 190 278)" fill="#599C12"/>
                <circle cx="190" cy="286" r="2" transform="rotate(90 190 286)" fill="#599C12"/>
                <circle cx="190" cy="294" r="2" transform="rotate(90 190 294)" fill="#599C12"/>
                <circle cx="190" cy="302" r="2" transform="rotate(90 190 302)" fill="#599C12"/>
                <circle cx="190" cy="310" r="2" transform="rotate(90 190 310)" fill="#599C12"/>
                <circle cx="190" cy="318" r="2" transform="rotate(90 190 318)" fill="#599C12"/>
                <circle cx="190" cy="326" r="2" transform="rotate(90 190 326)" fill="#599C12"/>
                <circle cx="190" cy="334" r="2" transform="rotate(90 190 334)" fill="#599C12"/>
                <circle cx="190" cy="342" r="2" transform="rotate(90 190 342)" fill="#599C12"/>
                <circle cx="182" cy="6" r="2" transform="rotate(90 182 6)" fill="#599C12"/>
                <circle cx="182" cy="14" r="2" transform="rotate(90 182 14)" fill="#599C12"/>
                <circle cx="182" cy="22" r="2" transform="rotate(90 182 22)" fill="#599C12"/>
                <circle cx="182" cy="30" r="2" transform="rotate(90 182 30)" fill="#599C12"/>
                <circle cx="182" cy="38" r="2" transform="rotate(90 182 38)" fill="#599C12"/>
                <circle cx="182" cy="46" r="2" transform="rotate(90 182 46)" fill="#599C12"/>
                <circle cx="182" cy="54" r="2" transform="rotate(90 182 54)" fill="#599C12"/>
                <circle cx="182" cy="62" r="2" transform="rotate(90 182 62)" fill="#599C12"/>
                <circle cx="182" cy="70" r="2" transform="rotate(90 182 70)" fill="#599C12"/>
                <circle cx="182" cy="78" r="2" transform="rotate(90 182 78)" fill="#599C12"/>
                <circle cx="182" cy="86" r="2" transform="rotate(90 182 86)" fill="#599C12"/>
                <circle cx="182" cy="94" r="2" transform="rotate(90 182 94)" fill="#599C12"/>
                <circle cx="182" cy="102" r="2" transform="rotate(90 182 102)" fill="#599C12"/>
                <circle cx="182" cy="110" r="2" transform="rotate(90 182 110)" fill="#599C12"/>
                <circle cx="182" cy="118" r="2" transform="rotate(90 182 118)" fill="#599C12"/>
                <circle cx="182" cy="126" r="2" transform="rotate(90 182 126)" fill="#599C12"/>
                <circle cx="182" cy="134" r="2" transform="rotate(90 182 134)" fill="#599C12"/>
                <circle cx="182" cy="142" r="2" transform="rotate(90 182 142)" fill="#599C12"/>
                <circle cx="182" cy="150" r="2" transform="rotate(90 182 150)" fill="#599C12"/>
                <circle cx="182" cy="158" r="2" transform="rotate(90 182 158)" fill="#599C12"/>
                <circle cx="182" cy="166" r="2" transform="rotate(90 182 166)" fill="#599C12"/>
                <circle cx="182" cy="174" r="2" transform="rotate(90 182 174)" fill="#599C12"/>
                <circle cx="182" cy="182" r="2" transform="rotate(90 182 182)" fill="#599C12"/>
                <circle cx="182" cy="190" r="2" transform="rotate(90 182 190)" fill="#599C12"/>
                <circle cx="182" cy="198" r="2" transform="rotate(90 182 198)" fill="#599C12"/>
                <circle cx="182" cy="206" r="2" transform="rotate(90 182 206)" fill="#599C12"/>
                <circle cx="182" cy="214" r="2" transform="rotate(90 182 214)" fill="#599C12"/>
                <circle cx="182" cy="222" r="2" transform="rotate(90 182 222)" fill="#599C12"/>
                <circle cx="182" cy="230" r="2" transform="rotate(90 182 230)" fill="#599C12"/>
                <circle cx="182" cy="238" r="2" transform="rotate(90 182 238)" fill="#599C12"/>
                <circle cx="182" cy="246" r="2" transform="rotate(90 182 246)" fill="#599C12"/>
                <circle cx="182" cy="254" r="2" transform="rotate(90 182 254)" fill="#599C12"/>
                <circle cx="182" cy="262" r="2" transform="rotate(90 182 262)" fill="#599C12"/>
                <circle cx="182" cy="270" r="2" transform="rotate(90 182 270)" fill="#599C12"/>
                <circle cx="182" cy="278" r="2" transform="rotate(90 182 278)" fill="#599C12"/>
                <circle cx="182" cy="286" r="2" transform="rotate(90 182 286)" fill="#599C12"/>
                <circle cx="182" cy="294" r="2" transform="rotate(90 182 294)" fill="#599C12"/>
                <circle cx="182" cy="302" r="2" transform="rotate(90 182 302)" fill="#599C12"/>
                <circle cx="182" cy="310" r="2" transform="rotate(90 182 310)" fill="#599C12"/>
                <circle cx="182" cy="318" r="2" transform="rotate(90 182 318)" fill="#599C12"/>
                <circle cx="182" cy="326" r="2" transform="rotate(90 182 326)" fill="#599C12"/>
                <circle cx="182" cy="334" r="2" transform="rotate(90 182 334)" fill="#599C12"/>
                <circle cx="182" cy="342" r="2" transform="rotate(90 182 342)" fill="#599C12"/>
                <circle cx="174" cy="6" r="2" transform="rotate(90 174 6)" fill="#599C12"/>
                <circle cx="174" cy="14" r="2" transform="rotate(90 174 14)" fill="#599C12"/>
                <circle cx="174" cy="22" r="2" transform="rotate(90 174 22)" fill="#599C12"/>
                <circle cx="174" cy="30" r="2" transform="rotate(90 174 30)" fill="#599C12"/>
                <circle cx="174" cy="38" r="2" transform="rotate(90 174 38)" fill="#599C12"/>
                <circle cx="174" cy="46" r="2" transform="rotate(90 174 46)" fill="#599C12"/>
                <circle cx="174" cy="54" r="2" transform="rotate(90 174 54)" fill="#599C12"/>
                <circle cx="174" cy="62" r="2" transform="rotate(90 174 62)" fill="#599C12"/>
                <circle cx="174" cy="70" r="2" transform="rotate(90 174 70)" fill="#599C12"/>
                <circle cx="174" cy="78" r="2" transform="rotate(90 174 78)" fill="#599C12"/>
                <circle cx="174" cy="86" r="2" transform="rotate(90 174 86)" fill="#599C12"/>
                <circle cx="174" cy="94" r="2" transform="rotate(90 174 94)" fill="#599C12"/>
                <circle cx="174" cy="102" r="2" transform="rotate(90 174 102)" fill="#599C12"/>
                <circle cx="174" cy="110" r="2" transform="rotate(90 174 110)" fill="#599C12"/>
                <circle cx="174" cy="118" r="2" transform="rotate(90 174 118)" fill="#599C12"/>
                <circle cx="174" cy="126" r="2" transform="rotate(90 174 126)" fill="#599C12"/>
                <circle cx="174" cy="134" r="2" transform="rotate(90 174 134)" fill="#599C12"/>
                <circle cx="174" cy="142" r="2" transform="rotate(90 174 142)" fill="#599C12"/>
                <circle cx="174" cy="150" r="2" transform="rotate(90 174 150)" fill="#599C12"/>
                <circle cx="174" cy="158" r="2" transform="rotate(90 174 158)" fill="#599C12"/>
                <circle cx="174" cy="166" r="2" transform="rotate(90 174 166)" fill="#599C12"/>
                <circle cx="174" cy="174" r="2" transform="rotate(90 174 174)" fill="#599C12"/>
                <circle cx="174" cy="182" r="2" transform="rotate(90 174 182)" fill="#599C12"/>
                <circle cx="174" cy="190" r="2" transform="rotate(90 174 190)" fill="#599C12"/>
                <circle cx="174" cy="198" r="2" transform="rotate(90 174 198)" fill="#599C12"/>
                <circle cx="174" cy="206" r="2" transform="rotate(90 174 206)" fill="#599C12"/>
                <circle cx="174" cy="214" r="2" transform="rotate(90 174 214)" fill="#599C12"/>
                <circle cx="174" cy="222" r="2" transform="rotate(90 174 222)" fill="#599C12"/>
                <circle cx="174" cy="230" r="2" transform="rotate(90 174 230)" fill="#599C12"/>
                <circle cx="174" cy="238" r="2" transform="rotate(90 174 238)" fill="#599C12"/>
                <circle cx="174" cy="246" r="2" transform="rotate(90 174 246)" fill="#599C12"/>
                <circle cx="174" cy="254" r="2" transform="rotate(90 174 254)" fill="#599C12"/>
                <circle cx="174" cy="262" r="2" transform="rotate(90 174 262)" fill="#599C12"/>
                <circle cx="174" cy="270" r="2" transform="rotate(90 174 270)" fill="#599C12"/>
                <circle cx="174" cy="278" r="2" transform="rotate(90 174 278)" fill="#599C12"/>
                <circle cx="174" cy="286" r="2" transform="rotate(90 174 286)" fill="#599C12"/>
                <circle cx="174" cy="294" r="2" transform="rotate(90 174 294)" fill="#599C12"/>
                <circle cx="174" cy="302" r="2" transform="rotate(90 174 302)" fill="#599C12"/>
                <circle cx="174" cy="310" r="2" transform="rotate(90 174 310)" fill="#599C12"/>
                <circle cx="174" cy="318" r="2" transform="rotate(90 174 318)" fill="#599C12"/>
                <circle cx="174" cy="326" r="2" transform="rotate(90 174 326)" fill="#599C12"/>
                <circle cx="174" cy="334" r="2" transform="rotate(90 174 334)" fill="#599C12"/>
                <circle cx="174" cy="342" r="2" transform="rotate(90 174 342)" fill="#599C12"/>
                <circle cx="166" cy="6" r="2" transform="rotate(90 166 6)" fill="#599C12"/>
                <circle cx="166" cy="14" r="2" transform="rotate(90 166 14)" fill="#599C12"/>
                <circle cx="166" cy="22" r="2" transform="rotate(90 166 22)" fill="#599C12"/>
                <circle cx="166" cy="30" r="2" transform="rotate(90 166 30)" fill="#599C12"/>
                <circle cx="166" cy="38" r="2" transform="rotate(90 166 38)" fill="#599C12"/>
                <circle cx="166" cy="46" r="2" transform="rotate(90 166 46)" fill="#599C12"/>
                <circle cx="166" cy="54" r="2" transform="rotate(90 166 54)" fill="#599C12"/>
                <circle cx="166" cy="62" r="2" transform="rotate(90 166 62)" fill="#599C12"/>
                <circle cx="166" cy="70" r="2" transform="rotate(90 166 70)" fill="#599C12"/>
                <circle cx="166" cy="78" r="2" transform="rotate(90 166 78)" fill="#599C12"/>
                <circle cx="166" cy="86" r="2" transform="rotate(90 166 86)" fill="#599C12"/>
                <circle cx="166" cy="94" r="2" transform="rotate(90 166 94)" fill="#599C12"/>
                <circle cx="166" cy="102" r="2" transform="rotate(90 166 102)" fill="#599C12"/>
                <circle cx="166" cy="110" r="2" transform="rotate(90 166 110)" fill="#599C12"/>
                <circle cx="166" cy="118" r="2" transform="rotate(90 166 118)" fill="#599C12"/>
                <circle cx="166" cy="126" r="2" transform="rotate(90 166 126)" fill="#599C12"/>
                <circle cx="166" cy="134" r="2" transform="rotate(90 166 134)" fill="#599C12"/>
                <circle cx="166" cy="142" r="2" transform="rotate(90 166 142)" fill="#599C12"/>
                <circle cx="166" cy="150" r="2" transform="rotate(90 166 150)" fill="#599C12"/>
                <circle cx="166" cy="158" r="2" transform="rotate(90 166 158)" fill="#599C12"/>
                <circle cx="166" cy="166" r="2" transform="rotate(90 166 166)" fill="#599C12"/>
                <circle cx="166" cy="174" r="2" transform="rotate(90 166 174)" fill="#599C12"/>
                <circle cx="166" cy="182" r="2" transform="rotate(90 166 182)" fill="#599C12"/>
                <circle cx="166" cy="190" r="2" transform="rotate(90 166 190)" fill="#599C12"/>
                <circle cx="166" cy="198" r="2" transform="rotate(90 166 198)" fill="#599C12"/>
                <circle cx="166" cy="206" r="2" transform="rotate(90 166 206)" fill="#599C12"/>
                <circle cx="166" cy="214" r="2" transform="rotate(90 166 214)" fill="#599C12"/>
                <circle cx="166" cy="222" r="2" transform="rotate(90 166 222)" fill="#599C12"/>
                <circle cx="166" cy="230" r="2" transform="rotate(90 166 230)" fill="#599C12"/>
                <circle cx="166" cy="238" r="2" transform="rotate(90 166 238)" fill="#599C12"/>
                <circle cx="166" cy="246" r="2" transform="rotate(90 166 246)" fill="#599C12"/>
                <circle cx="166" cy="254" r="2" transform="rotate(90 166 254)" fill="#599C12"/>
                <circle cx="166" cy="262" r="2" transform="rotate(90 166 262)" fill="#599C12"/>
                <circle cx="166" cy="270" r="2" transform="rotate(90 166 270)" fill="#599C12"/>
                <circle cx="166" cy="278" r="2" transform="rotate(90 166 278)" fill="#599C12"/>
                <circle cx="166" cy="286" r="2" transform="rotate(90 166 286)" fill="#599C12"/>
                <circle cx="166" cy="294" r="2" transform="rotate(90 166 294)" fill="#599C12"/>
                <circle cx="166" cy="302" r="2" transform="rotate(90 166 302)" fill="#599C12"/>
                <circle cx="166" cy="310" r="2" transform="rotate(90 166 310)" fill="#599C12"/>
                <circle cx="166" cy="318" r="2" transform="rotate(90 166 318)" fill="#599C12"/>
                <circle cx="166" cy="326" r="2" transform="rotate(90 166 326)" fill="#599C12"/>
                <circle cx="166" cy="334" r="2" transform="rotate(90 166 334)" fill="#599C12"/>
                <circle cx="166" cy="342" r="2" transform="rotate(90 166 342)" fill="#599C12"/>
                <circle cx="158" cy="6" r="2" transform="rotate(90 158 6)" fill="#599C12"/>
                <circle cx="158" cy="14" r="2" transform="rotate(90 158 14)" fill="#599C12"/>
                <circle cx="158" cy="22" r="2" transform="rotate(90 158 22)" fill="#599C12"/>
                <circle cx="158" cy="30" r="2" transform="rotate(90 158 30)" fill="#599C12"/>
                <circle cx="158" cy="38" r="2" transform="rotate(90 158 38)" fill="#599C12"/>
                <circle cx="158" cy="46" r="2" transform="rotate(90 158 46)" fill="#599C12"/>
                <circle cx="158" cy="54" r="2" transform="rotate(90 158 54)" fill="#599C12"/>
                <circle cx="158" cy="62" r="2" transform="rotate(90 158 62)" fill="#599C12"/>
                <circle cx="158" cy="70" r="2" transform="rotate(90 158 70)" fill="#599C12"/>
                <circle cx="158" cy="78" r="2" transform="rotate(90 158 78)" fill="#599C12"/>
                <circle cx="158" cy="86" r="2" transform="rotate(90 158 86)" fill="#599C12"/>
                <circle cx="158" cy="94" r="2" transform="rotate(90 158 94)" fill="#599C12"/>
                <circle cx="158" cy="102" r="2" transform="rotate(90 158 102)" fill="#599C12"/>
                <circle cx="158" cy="110" r="2" transform="rotate(90 158 110)" fill="#599C12"/>
                <circle cx="158" cy="118" r="2" transform="rotate(90 158 118)" fill="#599C12"/>
                <circle cx="158" cy="126" r="2" transform="rotate(90 158 126)" fill="#599C12"/>
                <circle cx="158" cy="134" r="2" transform="rotate(90 158 134)" fill="#599C12"/>
                <circle cx="158" cy="142" r="2" transform="rotate(90 158 142)" fill="#599C12"/>
                <circle cx="158" cy="150" r="2" transform="rotate(90 158 150)" fill="#599C12"/>
                <circle cx="158" cy="158" r="2" transform="rotate(90 158 158)" fill="#599C12"/>
                <circle cx="158" cy="166" r="2" transform="rotate(90 158 166)" fill="#599C12"/>
                <circle cx="158" cy="174" r="2" transform="rotate(90 158 174)" fill="#599C12"/>
                <circle cx="158" cy="182" r="2" transform="rotate(90 158 182)" fill="#599C12"/>
                <circle cx="158" cy="190" r="2" transform="rotate(90 158 190)" fill="#599C12"/>
                <circle cx="158" cy="198" r="2" transform="rotate(90 158 198)" fill="#599C12"/>
                <circle cx="158" cy="206" r="2" transform="rotate(90 158 206)" fill="#599C12"/>
                <circle cx="158" cy="214" r="2" transform="rotate(90 158 214)" fill="#599C12"/>
                <circle cx="158" cy="222" r="2" transform="rotate(90 158 222)" fill="#599C12"/>
                <circle cx="158" cy="230" r="2" transform="rotate(90 158 230)" fill="#599C12"/>
                <circle cx="158" cy="238" r="2" transform="rotate(90 158 238)" fill="#599C12"/>
                <circle cx="158" cy="246" r="2" transform="rotate(90 158 246)" fill="#599C12"/>
                <circle cx="158" cy="254" r="2" transform="rotate(90 158 254)" fill="#599C12"/>
                <circle cx="158" cy="262" r="2" transform="rotate(90 158 262)" fill="#599C12"/>
                <circle cx="158" cy="270" r="2" transform="rotate(90 158 270)" fill="#599C12"/>
                <circle cx="158" cy="278" r="2" transform="rotate(90 158 278)" fill="#599C12"/>
                <circle cx="158" cy="286" r="2" transform="rotate(90 158 286)" fill="#599C12"/>
                <circle cx="158" cy="294" r="2" transform="rotate(90 158 294)" fill="#599C12"/>
                <circle cx="158" cy="302" r="2" transform="rotate(90 158 302)" fill="#599C12"/>
                <circle cx="158" cy="310" r="2" transform="rotate(90 158 310)" fill="#599C12"/>
                <circle cx="158" cy="318" r="2" transform="rotate(90 158 318)" fill="#599C12"/>
                <circle cx="158" cy="326" r="2" transform="rotate(90 158 326)" fill="#599C12"/>
                <circle cx="158" cy="334" r="2" transform="rotate(90 158 334)" fill="#599C12"/>
                <circle cx="158" cy="342" r="2" transform="rotate(90 158 342)" fill="#599C12"/>
                <circle cx="150" cy="6" r="2" transform="rotate(90 150 6)" fill="#599C12"/>
                <circle cx="150" cy="14" r="2" transform="rotate(90 150 14)" fill="#599C12"/>
                <circle cx="150" cy="22" r="2" transform="rotate(90 150 22)" fill="#599C12"/>
                <circle cx="150" cy="30" r="2" transform="rotate(90 150 30)" fill="#599C12"/>
                <circle cx="150" cy="38" r="2" transform="rotate(90 150 38)" fill="#599C12"/>
                <circle cx="150" cy="46" r="2" transform="rotate(90 150 46)" fill="#599C12"/>
                <circle cx="150" cy="54" r="2" transform="rotate(90 150 54)" fill="#599C12"/>
                <circle cx="150" cy="62" r="2" transform="rotate(90 150 62)" fill="#599C12"/>
                <circle cx="150" cy="70" r="2" transform="rotate(90 150 70)" fill="#599C12"/>
                <circle cx="150" cy="78" r="2" transform="rotate(90 150 78)" fill="#599C12"/>
                <circle cx="150" cy="86" r="2" transform="rotate(90 150 86)" fill="#599C12"/>
                <circle cx="150" cy="94" r="2" transform="rotate(90 150 94)" fill="#599C12"/>
                <circle cx="150" cy="102" r="2" transform="rotate(90 150 102)" fill="#599C12"/>
                <circle cx="150" cy="110" r="2" transform="rotate(90 150 110)" fill="#599C12"/>
                <circle cx="150" cy="118" r="2" transform="rotate(90 150 118)" fill="#599C12"/>
                <circle cx="150" cy="126" r="2" transform="rotate(90 150 126)" fill="#599C12"/>
                <circle cx="150" cy="134" r="2" transform="rotate(90 150 134)" fill="#599C12"/>
                <circle cx="150" cy="142" r="2" transform="rotate(90 150 142)" fill="#599C12"/>
                <circle cx="150" cy="150" r="2" transform="rotate(90 150 150)" fill="#599C12"/>
                <circle cx="150" cy="158" r="2" transform="rotate(90 150 158)" fill="#599C12"/>
                <circle cx="150" cy="166" r="2" transform="rotate(90 150 166)" fill="#599C12"/>
                <circle cx="150" cy="174" r="2" transform="rotate(90 150 174)" fill="#599C12"/>
                <circle cx="150" cy="182" r="2" transform="rotate(90 150 182)" fill="#599C12"/>
                <circle cx="150" cy="190" r="2" transform="rotate(90 150 190)" fill="#599C12"/>
                <circle cx="150" cy="198" r="2" transform="rotate(90 150 198)" fill="#599C12"/>
                <circle cx="150" cy="206" r="2" transform="rotate(90 150 206)" fill="#599C12"/>
                <circle cx="150" cy="214" r="2" transform="rotate(90 150 214)" fill="#599C12"/>
                <circle cx="150" cy="222" r="2" transform="rotate(90 150 222)" fill="#599C12"/>
                <circle cx="150" cy="230" r="2" transform="rotate(90 150 230)" fill="#599C12"/>
                <circle cx="150" cy="238" r="2" transform="rotate(90 150 238)" fill="#599C12"/>
                <circle cx="150" cy="246" r="2" transform="rotate(90 150 246)" fill="#599C12"/>
                <circle cx="150" cy="254" r="2" transform="rotate(90 150 254)" fill="#599C12"/>
                <circle cx="150" cy="262" r="2" transform="rotate(90 150 262)" fill="#599C12"/>
                <circle cx="150" cy="270" r="2" transform="rotate(90 150 270)" fill="#599C12"/>
                <circle cx="150" cy="278" r="2" transform="rotate(90 150 278)" fill="#599C12"/>
                <circle cx="150" cy="286" r="2" transform="rotate(90 150 286)" fill="#599C12"/>
                <circle cx="150" cy="294" r="2" transform="rotate(90 150 294)" fill="#599C12"/>
                <circle cx="150" cy="302" r="2" transform="rotate(90 150 302)" fill="#599C12"/>
                <circle cx="150" cy="310" r="2" transform="rotate(90 150 310)" fill="#599C12"/>
                <circle cx="150" cy="318" r="2" transform="rotate(90 150 318)" fill="#599C12"/>
                <circle cx="150" cy="326" r="2" transform="rotate(90 150 326)" fill="#599C12"/>
                <circle cx="150" cy="334" r="2" transform="rotate(90 150 334)" fill="#599C12"/>
                <circle cx="150" cy="342" r="2" transform="rotate(90 150 342)" fill="#599C12"/>
                <circle cx="142" cy="6" r="2" transform="rotate(90 142 6)" fill="#599C12"/>
                <circle cx="142" cy="14" r="2" transform="rotate(90 142 14)" fill="#599C12"/>
                <circle cx="142" cy="22" r="2" transform="rotate(90 142 22)" fill="#599C12"/>
                <circle cx="142" cy="30" r="2" transform="rotate(90 142 30)" fill="#599C12"/>
                <circle cx="142" cy="38" r="2" transform="rotate(90 142 38)" fill="#599C12"/>
                <circle cx="142" cy="46" r="2" transform="rotate(90 142 46)" fill="#599C12"/>
                <circle cx="142" cy="54" r="2" transform="rotate(90 142 54)" fill="#599C12"/>
                <circle cx="142" cy="62" r="2" transform="rotate(90 142 62)" fill="#599C12"/>
                <circle cx="142" cy="70" r="2" transform="rotate(90 142 70)" fill="#599C12"/>
                <circle cx="142" cy="78" r="2" transform="rotate(90 142 78)" fill="#599C12"/>
                <circle cx="142" cy="86" r="2" transform="rotate(90 142 86)" fill="#599C12"/>
                <circle cx="142" cy="94" r="2" transform="rotate(90 142 94)" fill="#599C12"/>
                <circle cx="142" cy="102" r="2" transform="rotate(90 142 102)" fill="#599C12"/>
                <circle cx="142" cy="110" r="2" transform="rotate(90 142 110)" fill="#599C12"/>
                <circle cx="142" cy="118" r="2" transform="rotate(90 142 118)" fill="#599C12"/>
                <circle cx="142" cy="126" r="2" transform="rotate(90 142 126)" fill="#599C12"/>
                <circle cx="142" cy="134" r="2" transform="rotate(90 142 134)" fill="#599C12"/>
                <circle cx="142" cy="142" r="2" transform="rotate(90 142 142)" fill="#599C12"/>
                <circle cx="142" cy="150" r="2" transform="rotate(90 142 150)" fill="#599C12"/>
                <circle cx="142" cy="158" r="2" transform="rotate(90 142 158)" fill="#599C12"/>
                <circle cx="142" cy="166" r="2" transform="rotate(90 142 166)" fill="#599C12"/>
                <circle cx="142" cy="174" r="2" transform="rotate(90 142 174)" fill="#599C12"/>
                <circle cx="142" cy="182" r="2" transform="rotate(90 142 182)" fill="#599C12"/>
                <circle cx="142" cy="190" r="2" transform="rotate(90 142 190)" fill="#599C12"/>
                <circle cx="142" cy="198" r="2" transform="rotate(90 142 198)" fill="#599C12"/>
                <circle cx="142" cy="206" r="2" transform="rotate(90 142 206)" fill="#599C12"/>
                <circle cx="142" cy="214" r="2" transform="rotate(90 142 214)" fill="#599C12"/>
                <circle cx="142" cy="222" r="2" transform="rotate(90 142 222)" fill="#599C12"/>
                <circle cx="142" cy="230" r="2" transform="rotate(90 142 230)" fill="#599C12"/>
                <circle cx="142" cy="238" r="2" transform="rotate(90 142 238)" fill="#599C12"/>
                <circle cx="142" cy="246" r="2" transform="rotate(90 142 246)" fill="#599C12"/>
                <circle cx="142" cy="254" r="2" transform="rotate(90 142 254)" fill="#599C12"/>
                <circle cx="142" cy="262" r="2" transform="rotate(90 142 262)" fill="#599C12"/>
                <circle cx="142" cy="270" r="2" transform="rotate(90 142 270)" fill="#599C12"/>
                <circle cx="142" cy="278" r="2" transform="rotate(90 142 278)" fill="#599C12"/>
                <circle cx="142" cy="286" r="2" transform="rotate(90 142 286)" fill="#599C12"/>
                <circle cx="142" cy="294" r="2" transform="rotate(90 142 294)" fill="#599C12"/>
                <circle cx="142" cy="302" r="2" transform="rotate(90 142 302)" fill="#599C12"/>
                <circle cx="142" cy="310" r="2" transform="rotate(90 142 310)" fill="#599C12"/>
                <circle cx="142" cy="318" r="2" transform="rotate(90 142 318)" fill="#599C12"/>
                <circle cx="142" cy="326" r="2" transform="rotate(90 142 326)" fill="#599C12"/>
                <circle cx="142" cy="334" r="2" transform="rotate(90 142 334)" fill="#599C12"/>
                <circle cx="142" cy="342" r="2" transform="rotate(90 142 342)" fill="#599C12"/>
                <circle cx="134" cy="6" r="2" transform="rotate(90 134 6)" fill="#599C12"/>
                <circle cx="134" cy="14" r="2" transform="rotate(90 134 14)" fill="#599C12"/>
                <circle cx="134" cy="22" r="2" transform="rotate(90 134 22)" fill="#599C12"/>
                <circle cx="134" cy="30" r="2" transform="rotate(90 134 30)" fill="#599C12"/>
                <circle cx="134" cy="38" r="2" transform="rotate(90 134 38)" fill="#599C12"/>
                <circle cx="134" cy="46" r="2" transform="rotate(90 134 46)" fill="#599C12"/>
                <circle cx="134" cy="54" r="2" transform="rotate(90 134 54)" fill="#599C12"/>
                <circle cx="134" cy="62" r="2" transform="rotate(90 134 62)" fill="#599C12"/>
                <circle cx="134" cy="70" r="2" transform="rotate(90 134 70)" fill="#599C12"/>
                <circle cx="134" cy="78" r="2" transform="rotate(90 134 78)" fill="#599C12"/>
                <circle cx="134" cy="86" r="2" transform="rotate(90 134 86)" fill="#599C12"/>
                <circle cx="134" cy="94" r="2" transform="rotate(90 134 94)" fill="#599C12"/>
                <circle cx="134" cy="102" r="2" transform="rotate(90 134 102)" fill="#599C12"/>
                <circle cx="134" cy="110" r="2" transform="rotate(90 134 110)" fill="#599C12"/>
                <circle cx="134" cy="118" r="2" transform="rotate(90 134 118)" fill="#599C12"/>
                <circle cx="134" cy="126" r="2" transform="rotate(90 134 126)" fill="#599C12"/>
                <circle cx="134" cy="134" r="2" transform="rotate(90 134 134)" fill="#599C12"/>
                <circle cx="134" cy="142" r="2" transform="rotate(90 134 142)" fill="#599C12"/>
                <circle cx="134" cy="150" r="2" transform="rotate(90 134 150)" fill="#599C12"/>
                <circle cx="134" cy="158" r="2" transform="rotate(90 134 158)" fill="#599C12"/>
                <circle cx="134" cy="166" r="2" transform="rotate(90 134 166)" fill="#599C12"/>
                <circle cx="134" cy="174" r="2" transform="rotate(90 134 174)" fill="#599C12"/>
                <circle cx="134" cy="182" r="2" transform="rotate(90 134 182)" fill="#599C12"/>
                <circle cx="134" cy="190" r="2" transform="rotate(90 134 190)" fill="#599C12"/>
                <circle cx="134" cy="198" r="2" transform="rotate(90 134 198)" fill="#599C12"/>
                <circle cx="134" cy="206" r="2" transform="rotate(90 134 206)" fill="#599C12"/>
                <circle cx="134" cy="214" r="2" transform="rotate(90 134 214)" fill="#599C12"/>
                <circle cx="134" cy="222" r="2" transform="rotate(90 134 222)" fill="#599C12"/>
                <circle cx="134" cy="230" r="2" transform="rotate(90 134 230)" fill="#599C12"/>
                <circle cx="134" cy="238" r="2" transform="rotate(90 134 238)" fill="#599C12"/>
                <circle cx="134" cy="246" r="2" transform="rotate(90 134 246)" fill="#599C12"/>
                <circle cx="134" cy="254" r="2" transform="rotate(90 134 254)" fill="#599C12"/>
                <circle cx="134" cy="262" r="2" transform="rotate(90 134 262)" fill="#599C12"/>
                <circle cx="134" cy="270" r="2" transform="rotate(90 134 270)" fill="#599C12"/>
                <circle cx="134" cy="278" r="2" transform="rotate(90 134 278)" fill="#599C12"/>
                <circle cx="134" cy="286" r="2" transform="rotate(90 134 286)" fill="#599C12"/>
                <circle cx="134" cy="294" r="2" transform="rotate(90 134 294)" fill="#599C12"/>
                <circle cx="134" cy="302" r="2" transform="rotate(90 134 302)" fill="#599C12"/>
                <circle cx="134" cy="310" r="2" transform="rotate(90 134 310)" fill="#599C12"/>
                <circle cx="134" cy="318" r="2" transform="rotate(90 134 318)" fill="#599C12"/>
                <circle cx="134" cy="326" r="2" transform="rotate(90 134 326)" fill="#599C12"/>
                <circle cx="134" cy="334" r="2" transform="rotate(90 134 334)" fill="#599C12"/>
                <circle cx="134" cy="342" r="2" transform="rotate(90 134 342)" fill="#599C12"/>
                <circle cx="126" cy="6" r="2" transform="rotate(90 126 6)" fill="#599C12"/>
                <circle cx="126" cy="14" r="2" transform="rotate(90 126 14)" fill="#599C12"/>
                <circle cx="126" cy="22" r="2" transform="rotate(90 126 22)" fill="#599C12"/>
                <circle cx="126" cy="30" r="2" transform="rotate(90 126 30)" fill="#599C12"/>
                <circle cx="126" cy="38" r="2" transform="rotate(90 126 38)" fill="#599C12"/>
                <circle cx="126" cy="46" r="2" transform="rotate(90 126 46)" fill="#599C12"/>
                <circle cx="126" cy="54" r="2" transform="rotate(90 126 54)" fill="#599C12"/>
                <circle cx="126" cy="62" r="2" transform="rotate(90 126 62)" fill="#599C12"/>
                <circle cx="126" cy="70" r="2" transform="rotate(90 126 70)" fill="#599C12"/>
                <circle cx="126" cy="78" r="2" transform="rotate(90 126 78)" fill="#599C12"/>
                <circle cx="126" cy="86" r="2" transform="rotate(90 126 86)" fill="#599C12"/>
                <circle cx="126" cy="94" r="2" transform="rotate(90 126 94)" fill="#599C12"/>
                <circle cx="126" cy="102" r="2" transform="rotate(90 126 102)" fill="#599C12"/>
                <circle cx="126" cy="110" r="2" transform="rotate(90 126 110)" fill="#599C12"/>
                <circle cx="126" cy="118" r="2" transform="rotate(90 126 118)" fill="#599C12"/>
                <circle cx="126" cy="126" r="2" transform="rotate(90 126 126)" fill="#599C12"/>
                <circle cx="126" cy="134" r="2" transform="rotate(90 126 134)" fill="#599C12"/>
                <circle cx="126" cy="142" r="2" transform="rotate(90 126 142)" fill="#599C12"/>
                <circle cx="126" cy="150" r="2" transform="rotate(90 126 150)" fill="#599C12"/>
                <circle cx="126" cy="158" r="2" transform="rotate(90 126 158)" fill="#599C12"/>
                <circle cx="126" cy="166" r="2" transform="rotate(90 126 166)" fill="#599C12"/>
                <circle cx="126" cy="174" r="2" transform="rotate(90 126 174)" fill="#599C12"/>
                <circle cx="126" cy="182" r="2" transform="rotate(90 126 182)" fill="#599C12"/>
                <circle cx="126" cy="190" r="2" transform="rotate(90 126 190)" fill="#599C12"/>
                <circle cx="126" cy="198" r="2" transform="rotate(90 126 198)" fill="#599C12"/>
                <circle cx="126" cy="206" r="2" transform="rotate(90 126 206)" fill="#599C12"/>
                <circle cx="126" cy="214" r="2" transform="rotate(90 126 214)" fill="#599C12"/>
                <circle cx="126" cy="222" r="2" transform="rotate(90 126 222)" fill="#599C12"/>
                <circle cx="126" cy="230" r="2" transform="rotate(90 126 230)" fill="#599C12"/>
                <circle cx="126" cy="238" r="2" transform="rotate(90 126 238)" fill="#599C12"/>
                <circle cx="126" cy="246" r="2" transform="rotate(90 126 246)" fill="#599C12"/>
                <circle cx="126" cy="254" r="2" transform="rotate(90 126 254)" fill="#599C12"/>
                <circle cx="126" cy="262" r="2" transform="rotate(90 126 262)" fill="#599C12"/>
                <circle cx="126" cy="270" r="2" transform="rotate(90 126 270)" fill="#599C12"/>
                <circle cx="126" cy="278" r="2" transform="rotate(90 126 278)" fill="#599C12"/>
                <circle cx="126" cy="286" r="2" transform="rotate(90 126 286)" fill="#599C12"/>
                <circle cx="126" cy="294" r="2" transform="rotate(90 126 294)" fill="#599C12"/>
                <circle cx="126" cy="302" r="2" transform="rotate(90 126 302)" fill="#599C12"/>
                <circle cx="126" cy="310" r="2" transform="rotate(90 126 310)" fill="#599C12"/>
                <circle cx="126" cy="318" r="2" transform="rotate(90 126 318)" fill="#599C12"/>
                <circle cx="126" cy="326" r="2" transform="rotate(90 126 326)" fill="#599C12"/>
                <circle cx="126" cy="334" r="2" transform="rotate(90 126 334)" fill="#599C12"/>
                <circle cx="126" cy="342" r="2" transform="rotate(90 126 342)" fill="#599C12"/>
                <circle cx="118" cy="6" r="2" transform="rotate(90 118 6)" fill="#599C12"/>
                <circle cx="118" cy="14" r="2" transform="rotate(90 118 14)" fill="#599C12"/>
                <circle cx="118" cy="22" r="2" transform="rotate(90 118 22)" fill="#599C12"/>
                <circle cx="118" cy="30" r="2" transform="rotate(90 118 30)" fill="#599C12"/>
                <circle cx="118" cy="38" r="2" transform="rotate(90 118 38)" fill="#599C12"/>
                <circle cx="118" cy="46" r="2" transform="rotate(90 118 46)" fill="#599C12"/>
                <circle cx="118" cy="54" r="2" transform="rotate(90 118 54)" fill="#599C12"/>
                <circle cx="118" cy="62" r="2" transform="rotate(90 118 62)" fill="#599C12"/>
                <circle cx="118" cy="70" r="2" transform="rotate(90 118 70)" fill="#599C12"/>
                <circle cx="118" cy="78" r="2" transform="rotate(90 118 78)" fill="#599C12"/>
                <circle cx="118" cy="86" r="2" transform="rotate(90 118 86)" fill="#599C12"/>
                <circle cx="118" cy="94" r="2" transform="rotate(90 118 94)" fill="#599C12"/>
                <circle cx="118" cy="102" r="2" transform="rotate(90 118 102)" fill="#599C12"/>
                <circle cx="118" cy="110" r="2" transform="rotate(90 118 110)" fill="#599C12"/>
                <circle cx="118" cy="118" r="2" transform="rotate(90 118 118)" fill="#599C12"/>
                <circle cx="118" cy="126" r="2" transform="rotate(90 118 126)" fill="#599C12"/>
                <circle cx="118" cy="134" r="2" transform="rotate(90 118 134)" fill="#599C12"/>
                <circle cx="118" cy="142" r="2" transform="rotate(90 118 142)" fill="#599C12"/>
                <circle cx="118" cy="150" r="2" transform="rotate(90 118 150)" fill="#599C12"/>
                <circle cx="118" cy="158" r="2" transform="rotate(90 118 158)" fill="#599C12"/>
                <circle cx="118" cy="166" r="2" transform="rotate(90 118 166)" fill="#599C12"/>
                <circle cx="118" cy="174" r="2" transform="rotate(90 118 174)" fill="#599C12"/>
                <circle cx="118" cy="182" r="2" transform="rotate(90 118 182)" fill="#599C12"/>
                <circle cx="118" cy="190" r="2" transform="rotate(90 118 190)" fill="#599C12"/>
                <circle cx="118" cy="198" r="2" transform="rotate(90 118 198)" fill="#599C12"/>
                <circle cx="118" cy="206" r="2" transform="rotate(90 118 206)" fill="#599C12"/>
                <circle cx="118" cy="214" r="2" transform="rotate(90 118 214)" fill="#599C12"/>
                <circle cx="118" cy="222" r="2" transform="rotate(90 118 222)" fill="#599C12"/>
                <circle cx="118" cy="230" r="2" transform="rotate(90 118 230)" fill="#599C12"/>
                <circle cx="118" cy="238" r="2" transform="rotate(90 118 238)" fill="#599C12"/>
                <circle cx="118" cy="246" r="2" transform="rotate(90 118 246)" fill="#599C12"/>
                <circle cx="118" cy="254" r="2" transform="rotate(90 118 254)" fill="#599C12"/>
                <circle cx="118" cy="262" r="2" transform="rotate(90 118 262)" fill="#599C12"/>
                <circle cx="118" cy="270" r="2" transform="rotate(90 118 270)" fill="#599C12"/>
                <circle cx="118" cy="278" r="2" transform="rotate(90 118 278)" fill="#599C12"/>
                <circle cx="118" cy="286" r="2" transform="rotate(90 118 286)" fill="#599C12"/>
                <circle cx="118" cy="294" r="2" transform="rotate(90 118 294)" fill="#599C12"/>
                <circle cx="118" cy="302" r="2" transform="rotate(90 118 302)" fill="#599C12"/>
                <circle cx="118" cy="310" r="2" transform="rotate(90 118 310)" fill="#599C12"/>
                <circle cx="118" cy="318" r="2" transform="rotate(90 118 318)" fill="#599C12"/>
                <circle cx="118" cy="326" r="2" transform="rotate(90 118 326)" fill="#599C12"/>
                <circle cx="118" cy="334" r="2" transform="rotate(90 118 334)" fill="#599C12"/>
                <circle cx="118" cy="342" r="2" transform="rotate(90 118 342)" fill="#599C12"/>
                <circle cx="110" cy="6" r="2" transform="rotate(90 110 6)" fill="#599C12"/>
                <circle cx="110" cy="14" r="2" transform="rotate(90 110 14)" fill="#599C12"/>
                <circle cx="110" cy="22" r="2" transform="rotate(90 110 22)" fill="#599C12"/>
                <circle cx="110" cy="30" r="2" transform="rotate(90 110 30)" fill="#599C12"/>
                <circle cx="110" cy="38" r="2" transform="rotate(90 110 38)" fill="#599C12"/>
                <circle cx="110" cy="46" r="2" transform="rotate(90 110 46)" fill="#599C12"/>
                <circle cx="110" cy="54" r="2" transform="rotate(90 110 54)" fill="#599C12"/>
                <circle cx="110" cy="62" r="2" transform="rotate(90 110 62)" fill="#599C12"/>
                <circle cx="110" cy="70" r="2" transform="rotate(90 110 70)" fill="#599C12"/>
                <circle cx="110" cy="78" r="2" transform="rotate(90 110 78)" fill="#599C12"/>
                <circle cx="110" cy="86" r="2" transform="rotate(90 110 86)" fill="#599C12"/>
                <circle cx="110" cy="94" r="2" transform="rotate(90 110 94)" fill="#599C12"/>
                <circle cx="110" cy="102" r="2" transform="rotate(90 110 102)" fill="#599C12"/>
                <circle cx="110" cy="110" r="2" transform="rotate(90 110 110)" fill="#599C12"/>
                <circle cx="110" cy="118" r="2" transform="rotate(90 110 118)" fill="#599C12"/>
                <circle cx="110" cy="126" r="2" transform="rotate(90 110 126)" fill="#599C12"/>
                <circle cx="110" cy="134" r="2" transform="rotate(90 110 134)" fill="#599C12"/>
                <circle cx="110" cy="142" r="2" transform="rotate(90 110 142)" fill="#599C12"/>
                <circle cx="110" cy="150" r="2" transform="rotate(90 110 150)" fill="#599C12"/>
                <circle cx="110" cy="158" r="2" transform="rotate(90 110 158)" fill="#599C12"/>
                <circle cx="110" cy="166" r="2" transform="rotate(90 110 166)" fill="#599C12"/>
                <circle cx="110" cy="174" r="2" transform="rotate(90 110 174)" fill="#599C12"/>
                <circle cx="110" cy="182" r="2" transform="rotate(90 110 182)" fill="#599C12"/>
                <circle cx="110" cy="190" r="2" transform="rotate(90 110 190)" fill="#599C12"/>
                <circle cx="110" cy="198" r="2" transform="rotate(90 110 198)" fill="#599C12"/>
                <circle cx="110" cy="206" r="2" transform="rotate(90 110 206)" fill="#599C12"/>
                <circle cx="110" cy="214" r="2" transform="rotate(90 110 214)" fill="#599C12"/>
                <circle cx="110" cy="222" r="2" transform="rotate(90 110 222)" fill="#599C12"/>
                <circle cx="110" cy="230" r="2" transform="rotate(90 110 230)" fill="#599C12"/>
                <circle cx="110" cy="238" r="2" transform="rotate(90 110 238)" fill="#599C12"/>
                <circle cx="110" cy="246" r="2" transform="rotate(90 110 246)" fill="#599C12"/>
                <circle cx="110" cy="254" r="2" transform="rotate(90 110 254)" fill="#599C12"/>
                <circle cx="110" cy="262" r="2" transform="rotate(90 110 262)" fill="#599C12"/>
                <circle cx="110" cy="270" r="2" transform="rotate(90 110 270)" fill="#599C12"/>
                <circle cx="110" cy="278" r="2" transform="rotate(90 110 278)" fill="#599C12"/>
                <circle cx="110" cy="286" r="2" transform="rotate(90 110 286)" fill="#599C12"/>
                <circle cx="110" cy="294" r="2" transform="rotate(90 110 294)" fill="#599C12"/>
                <circle cx="110" cy="302" r="2" transform="rotate(90 110 302)" fill="#599C12"/>
                <circle cx="110" cy="310" r="2" transform="rotate(90 110 310)" fill="#599C12"/>
                <circle cx="110" cy="318" r="2" transform="rotate(90 110 318)" fill="#599C12"/>
                <circle cx="110" cy="326" r="2" transform="rotate(90 110 326)" fill="#599C12"/>
                <circle cx="110" cy="334" r="2" transform="rotate(90 110 334)" fill="#599C12"/>
                <circle cx="110" cy="342" r="2" transform="rotate(90 110 342)" fill="#599C12"/>
                <circle cx="102" cy="6" r="2" transform="rotate(90 102 6)" fill="#599C12"/>
                <circle cx="102" cy="14" r="2" transform="rotate(90 102 14)" fill="#599C12"/>
                <circle cx="102" cy="22" r="2" transform="rotate(90 102 22)" fill="#599C12"/>
                <circle cx="102" cy="30" r="2" transform="rotate(90 102 30)" fill="#599C12"/>
                <circle cx="102" cy="38" r="2" transform="rotate(90 102 38)" fill="#599C12"/>
                <circle cx="102" cy="46" r="2" transform="rotate(90 102 46)" fill="#599C12"/>
                <circle cx="102" cy="54" r="2" transform="rotate(90 102 54)" fill="#599C12"/>
                <circle cx="102" cy="62" r="2" transform="rotate(90 102 62)" fill="#599C12"/>
                <circle cx="102" cy="70" r="2" transform="rotate(90 102 70)" fill="#599C12"/>
                <circle cx="102" cy="78" r="2" transform="rotate(90 102 78)" fill="#599C12"/>
                <circle cx="102" cy="86" r="2" transform="rotate(90 102 86)" fill="#599C12"/>
                <circle cx="102" cy="94" r="2" transform="rotate(90 102 94)" fill="#599C12"/>
                <circle cx="102" cy="102" r="2" transform="rotate(90 102 102)" fill="#599C12"/>
                <circle cx="102" cy="110" r="2" transform="rotate(90 102 110)" fill="#599C12"/>
                <circle cx="102" cy="118" r="2" transform="rotate(90 102 118)" fill="#599C12"/>
                <circle cx="102" cy="126" r="2" transform="rotate(90 102 126)" fill="#599C12"/>
                <circle cx="102" cy="134" r="2" transform="rotate(90 102 134)" fill="#599C12"/>
                <circle cx="102" cy="142" r="2" transform="rotate(90 102 142)" fill="#599C12"/>
                <circle cx="102" cy="150" r="2" transform="rotate(90 102 150)" fill="#599C12"/>
                <circle cx="102" cy="158" r="2" transform="rotate(90 102 158)" fill="#599C12"/>
                <circle cx="102" cy="166" r="2" transform="rotate(90 102 166)" fill="#599C12"/>
                <circle cx="102" cy="174" r="2" transform="rotate(90 102 174)" fill="#599C12"/>
                <circle cx="102" cy="182" r="2" transform="rotate(90 102 182)" fill="#599C12"/>
                <circle cx="102" cy="190" r="2" transform="rotate(90 102 190)" fill="#599C12"/>
                <circle cx="102" cy="198" r="2" transform="rotate(90 102 198)" fill="#599C12"/>
                <circle cx="102" cy="206" r="2" transform="rotate(90 102 206)" fill="#599C12"/>
                <circle cx="102" cy="214" r="2" transform="rotate(90 102 214)" fill="#599C12"/>
                <circle cx="102" cy="222" r="2" transform="rotate(90 102 222)" fill="#599C12"/>
                <circle cx="102" cy="230" r="2" transform="rotate(90 102 230)" fill="#599C12"/>
                <circle cx="102" cy="238" r="2" transform="rotate(90 102 238)" fill="#599C12"/>
                <circle cx="102" cy="246" r="2" transform="rotate(90 102 246)" fill="#599C12"/>
                <circle cx="102" cy="254" r="2" transform="rotate(90 102 254)" fill="#599C12"/>
                <circle cx="102" cy="262" r="2" transform="rotate(90 102 262)" fill="#599C12"/>
                <circle cx="102" cy="270" r="2" transform="rotate(90 102 270)" fill="#599C12"/>
                <circle cx="102" cy="278" r="2" transform="rotate(90 102 278)" fill="#599C12"/>
                <circle cx="102" cy="286" r="2" transform="rotate(90 102 286)" fill="#599C12"/>
                <circle cx="102" cy="294" r="2" transform="rotate(90 102 294)" fill="#599C12"/>
                <circle cx="102" cy="302" r="2" transform="rotate(90 102 302)" fill="#599C12"/>
                <circle cx="102" cy="310" r="2" transform="rotate(90 102 310)" fill="#599C12"/>
                <circle cx="102" cy="318" r="2" transform="rotate(90 102 318)" fill="#599C12"/>
                <circle cx="102" cy="326" r="2" transform="rotate(90 102 326)" fill="#599C12"/>
                <circle cx="102" cy="334" r="2" transform="rotate(90 102 334)" fill="#599C12"/>
                <circle cx="102" cy="342" r="2" transform="rotate(90 102 342)" fill="#599C12"/>
                <circle cx="94" cy="6" r="2" transform="rotate(90 94 6)" fill="#599C12"/>
                <circle cx="94" cy="14" r="2" transform="rotate(90 94 14)" fill="#599C12"/>
                <circle cx="94" cy="22" r="2" transform="rotate(90 94 22)" fill="#599C12"/>
                <circle cx="94" cy="30" r="2" transform="rotate(90 94 30)" fill="#599C12"/>
                <circle cx="94" cy="38" r="2" transform="rotate(90 94 38)" fill="#599C12"/>
                <circle cx="94" cy="46" r="2" transform="rotate(90 94 46)" fill="#599C12"/>
                <circle cx="94" cy="54" r="2" transform="rotate(90 94 54)" fill="#599C12"/>
                <circle cx="94" cy="62" r="2" transform="rotate(90 94 62)" fill="#599C12"/>
                <circle cx="94" cy="70" r="2" transform="rotate(90 94 70)" fill="#599C12"/>
                <circle cx="94" cy="78" r="2" transform="rotate(90 94 78)" fill="#599C12"/>
                <circle cx="94" cy="86" r="2" transform="rotate(90 94 86)" fill="#599C12"/>
                <circle cx="94" cy="94" r="2" transform="rotate(90 94 94)" fill="#599C12"/>
                <circle cx="94" cy="102" r="2" transform="rotate(90 94 102)" fill="#599C12"/>
                <circle cx="94" cy="110" r="2" transform="rotate(90 94 110)" fill="#599C12"/>
                <circle cx="94" cy="118" r="2" transform="rotate(90 94 118)" fill="#599C12"/>
                <circle cx="94" cy="126" r="2" transform="rotate(90 94 126)" fill="#599C12"/>
                <circle cx="94" cy="134" r="2" transform="rotate(90 94 134)" fill="#599C12"/>
                <circle cx="94" cy="142" r="2" transform="rotate(90 94 142)" fill="#599C12"/>
                <circle cx="94" cy="150" r="2" transform="rotate(90 94 150)" fill="#599C12"/>
                <circle cx="94" cy="158" r="2" transform="rotate(90 94 158)" fill="#599C12"/>
                <circle cx="94" cy="166" r="2" transform="rotate(90 94 166)" fill="#599C12"/>
                <circle cx="94" cy="174" r="2" transform="rotate(90 94 174)" fill="#599C12"/>
                <circle cx="94" cy="182" r="2" transform="rotate(90 94 182)" fill="#599C12"/>
                <circle cx="94" cy="190" r="2" transform="rotate(90 94 190)" fill="#599C12"/>
                <circle cx="94" cy="198" r="2" transform="rotate(90 94 198)" fill="#599C12"/>
                <circle cx="94" cy="206" r="2" transform="rotate(90 94 206)" fill="#599C12"/>
                <circle cx="94" cy="214" r="2" transform="rotate(90 94 214)" fill="#599C12"/>
                <circle cx="94" cy="222" r="2" transform="rotate(90 94 222)" fill="#599C12"/>
                <circle cx="94" cy="230" r="2" transform="rotate(90 94 230)" fill="#599C12"/>
                <circle cx="94" cy="238" r="2" transform="rotate(90 94 238)" fill="#599C12"/>
                <circle cx="94" cy="246" r="2" transform="rotate(90 94 246)" fill="#599C12"/>
                <circle cx="94" cy="254" r="2" transform="rotate(90 94 254)" fill="#599C12"/>
                <circle cx="94" cy="262" r="2" transform="rotate(90 94 262)" fill="#599C12"/>
                <circle cx="94" cy="270" r="2" transform="rotate(90 94 270)" fill="#599C12"/>
                <circle cx="94" cy="278" r="2" transform="rotate(90 94 278)" fill="#599C12"/>
                <circle cx="94" cy="286" r="2" transform="rotate(90 94 286)" fill="#599C12"/>
                <circle cx="94" cy="294" r="2" transform="rotate(90 94 294)" fill="#599C12"/>
                <circle cx="94" cy="302" r="2" transform="rotate(90 94 302)" fill="#599C12"/>
                <circle cx="94" cy="310" r="2" transform="rotate(90 94 310)" fill="#599C12"/>
                <circle cx="94" cy="318" r="2" transform="rotate(90 94 318)" fill="#599C12"/>
                <circle cx="94" cy="326" r="2" transform="rotate(90 94 326)" fill="#599C12"/>
                <circle cx="94" cy="334" r="2" transform="rotate(90 94 334)" fill="#599C12"/>
                <circle cx="94" cy="342" r="2" transform="rotate(90 94 342)" fill="#599C12"/>
                <circle cx="86" cy="6" r="2" transform="rotate(90 86 6)" fill="#599C12"/>
                <circle cx="86" cy="14" r="2" transform="rotate(90 86 14)" fill="#599C12"/>
                <circle cx="86" cy="22" r="2" transform="rotate(90 86 22)" fill="#599C12"/>
                <circle cx="86" cy="30" r="2" transform="rotate(90 86 30)" fill="#599C12"/>
                <circle cx="86" cy="38" r="2" transform="rotate(90 86 38)" fill="#599C12"/>
                <circle cx="86" cy="46" r="2" transform="rotate(90 86 46)" fill="#599C12"/>
                <circle cx="86" cy="54" r="2" transform="rotate(90 86 54)" fill="#599C12"/>
                <circle cx="86" cy="62" r="2" transform="rotate(90 86 62)" fill="#599C12"/>
                <circle cx="86" cy="70" r="2" transform="rotate(90 86 70)" fill="#599C12"/>
                <circle cx="86" cy="78" r="2" transform="rotate(90 86 78)" fill="#599C12"/>
                <circle cx="86" cy="86" r="2" transform="rotate(90 86 86)" fill="#599C12"/>
                <circle cx="86" cy="94" r="2" transform="rotate(90 86 94)" fill="#599C12"/>
                <circle cx="86" cy="102" r="2" transform="rotate(90 86 102)" fill="#599C12"/>
                <circle cx="86" cy="110" r="2" transform="rotate(90 86 110)" fill="#599C12"/>
                <circle cx="86" cy="118" r="2" transform="rotate(90 86 118)" fill="#599C12"/>
                <circle cx="86" cy="126" r="2" transform="rotate(90 86 126)" fill="#599C12"/>
                <circle cx="86" cy="134" r="2" transform="rotate(90 86 134)" fill="#599C12"/>
                <circle cx="86" cy="142" r="2" transform="rotate(90 86 142)" fill="#599C12"/>
                <circle cx="86" cy="150" r="2" transform="rotate(90 86 150)" fill="#599C12"/>
                <circle cx="86" cy="158" r="2" transform="rotate(90 86 158)" fill="#599C12"/>
                <circle cx="86" cy="166" r="2" transform="rotate(90 86 166)" fill="#599C12"/>
                <circle cx="86" cy="174" r="2" transform="rotate(90 86 174)" fill="#599C12"/>
                <circle cx="86" cy="182" r="2" transform="rotate(90 86 182)" fill="#599C12"/>
                <circle cx="86" cy="190" r="2" transform="rotate(90 86 190)" fill="#599C12"/>
                <circle cx="86" cy="198" r="2" transform="rotate(90 86 198)" fill="#599C12"/>
                <circle cx="86" cy="206" r="2" transform="rotate(90 86 206)" fill="#599C12"/>
                <circle cx="86" cy="214" r="2" transform="rotate(90 86 214)" fill="#599C12"/>
                <circle cx="86" cy="222" r="2" transform="rotate(90 86 222)" fill="#599C12"/>
                <circle cx="86" cy="230" r="2" transform="rotate(90 86 230)" fill="#599C12"/>
                <circle cx="86" cy="238" r="2" transform="rotate(90 86 238)" fill="#599C12"/>
                <circle cx="86" cy="246" r="2" transform="rotate(90 86 246)" fill="#599C12"/>
                <circle cx="86" cy="254" r="2" transform="rotate(90 86 254)" fill="#599C12"/>
                <circle cx="86" cy="262" r="2" transform="rotate(90 86 262)" fill="#599C12"/>
                <circle cx="86" cy="270" r="2" transform="rotate(90 86 270)" fill="#599C12"/>
                <circle cx="86" cy="278" r="2" transform="rotate(90 86 278)" fill="#599C12"/>
                <circle cx="86" cy="286" r="2" transform="rotate(90 86 286)" fill="#599C12"/>
                <circle cx="86" cy="294" r="2" transform="rotate(90 86 294)" fill="#599C12"/>
                <circle cx="86" cy="302" r="2" transform="rotate(90 86 302)" fill="#599C12"/>
                <circle cx="86" cy="310" r="2" transform="rotate(90 86 310)" fill="#599C12"/>
                <circle cx="86" cy="318" r="2" transform="rotate(90 86 318)" fill="#599C12"/>
                <circle cx="86" cy="326" r="2" transform="rotate(90 86 326)" fill="#599C12"/>
                <circle cx="86" cy="334" r="2" transform="rotate(90 86 334)" fill="#599C12"/>
                <circle cx="86" cy="342" r="2" transform="rotate(90 86 342)" fill="#599C12"/>
                <circle cx="78" cy="6" r="2" transform="rotate(90 78 6)" fill="#599C12"/>
                <circle cx="78" cy="14" r="2" transform="rotate(90 78 14)" fill="#599C12"/>
                <circle cx="78" cy="22" r="2" transform="rotate(90 78 22)" fill="#599C12"/>
                <circle cx="78" cy="30" r="2" transform="rotate(90 78 30)" fill="#599C12"/>
                <circle cx="78" cy="38" r="2" transform="rotate(90 78 38)" fill="#599C12"/>
                <circle cx="78" cy="46" r="2" transform="rotate(90 78 46)" fill="#599C12"/>
                <circle cx="78" cy="54" r="2" transform="rotate(90 78 54)" fill="#599C12"/>
                <circle cx="78" cy="62" r="2" transform="rotate(90 78 62)" fill="#599C12"/>
                <circle cx="78" cy="70" r="2" transform="rotate(90 78 70)" fill="#599C12"/>
                <circle cx="78" cy="78" r="2" transform="rotate(90 78 78)" fill="#599C12"/>
                <circle cx="78" cy="86" r="2" transform="rotate(90 78 86)" fill="#599C12"/>
                <circle cx="78" cy="94" r="2" transform="rotate(90 78 94)" fill="#599C12"/>
                <circle cx="78" cy="102" r="2" transform="rotate(90 78 102)" fill="#599C12"/>
                <circle cx="78" cy="110" r="2" transform="rotate(90 78 110)" fill="#599C12"/>
                <circle cx="78" cy="118" r="2" transform="rotate(90 78 118)" fill="#599C12"/>
                <circle cx="78" cy="126" r="2" transform="rotate(90 78 126)" fill="#599C12"/>
                <circle cx="78" cy="134" r="2" transform="rotate(90 78 134)" fill="#599C12"/>
                <circle cx="78" cy="142" r="2" transform="rotate(90 78 142)" fill="#599C12"/>
                <circle cx="78" cy="150" r="2" transform="rotate(90 78 150)" fill="#599C12"/>
                <circle cx="78" cy="158" r="2" transform="rotate(90 78 158)" fill="#599C12"/>
                <circle cx="78" cy="166" r="2" transform="rotate(90 78 166)" fill="#599C12"/>
                <circle cx="78" cy="174" r="2" transform="rotate(90 78 174)" fill="#599C12"/>
                <circle cx="78" cy="182" r="2" transform="rotate(90 78 182)" fill="#599C12"/>
                <circle cx="78" cy="190" r="2" transform="rotate(90 78 190)" fill="#599C12"/>
                <circle cx="78" cy="198" r="2" transform="rotate(90 78 198)" fill="#599C12"/>
                <circle cx="78" cy="206" r="2" transform="rotate(90 78 206)" fill="#599C12"/>
                <circle cx="78" cy="214" r="2" transform="rotate(90 78 214)" fill="#599C12"/>
                <circle cx="78" cy="222" r="2" transform="rotate(90 78 222)" fill="#599C12"/>
                <circle cx="78" cy="230" r="2" transform="rotate(90 78 230)" fill="#599C12"/>
                <circle cx="78" cy="238" r="2" transform="rotate(90 78 238)" fill="#599C12"/>
                <circle cx="78" cy="246" r="2" transform="rotate(90 78 246)" fill="#599C12"/>
                <circle cx="78" cy="254" r="2" transform="rotate(90 78 254)" fill="#599C12"/>
                <circle cx="78" cy="262" r="2" transform="rotate(90 78 262)" fill="#599C12"/>
                <circle cx="78" cy="270" r="2" transform="rotate(90 78 270)" fill="#599C12"/>
                <circle cx="78" cy="278" r="2" transform="rotate(90 78 278)" fill="#599C12"/>
                <circle cx="78" cy="286" r="2" transform="rotate(90 78 286)" fill="#599C12"/>
                <circle cx="78" cy="294" r="2" transform="rotate(90 78 294)" fill="#599C12"/>
                <circle cx="78" cy="302" r="2" transform="rotate(90 78 302)" fill="#599C12"/>
                <circle cx="78" cy="310" r="2" transform="rotate(90 78 310)" fill="#599C12"/>
                <circle cx="78" cy="318" r="2" transform="rotate(90 78 318)" fill="#599C12"/>
                <circle cx="78" cy="326" r="2" transform="rotate(90 78 326)" fill="#599C12"/>
                <circle cx="78" cy="334" r="2" transform="rotate(90 78 334)" fill="#599C12"/>
                <circle cx="78" cy="342" r="2" transform="rotate(90 78 342)" fill="#599C12"/>
                <circle cx="70" cy="6" r="2" transform="rotate(90 70 6)" fill="#599C12"/>
                <circle cx="70" cy="14" r="2" transform="rotate(90 70 14)" fill="#599C12"/>
                <circle cx="70" cy="22" r="2" transform="rotate(90 70 22)" fill="#599C12"/>
                <circle cx="70" cy="30" r="2" transform="rotate(90 70 30)" fill="#599C12"/>
                <circle cx="70" cy="38" r="2" transform="rotate(90 70 38)" fill="#599C12"/>
                <circle cx="70" cy="46" r="2" transform="rotate(90 70 46)" fill="#599C12"/>
                <circle cx="70" cy="54" r="2" transform="rotate(90 70 54)" fill="#599C12"/>
                <circle cx="70" cy="62" r="2" transform="rotate(90 70 62)" fill="#599C12"/>
                <circle cx="70" cy="70" r="2" transform="rotate(90 70 70)" fill="#599C12"/>
                <circle cx="70" cy="78" r="2" transform="rotate(90 70 78)" fill="#599C12"/>
                <circle cx="70" cy="86" r="2" transform="rotate(90 70 86)" fill="#599C12"/>
                <circle cx="70" cy="94" r="2" transform="rotate(90 70 94)" fill="#599C12"/>
                <circle cx="70" cy="102" r="2" transform="rotate(90 70 102)" fill="#599C12"/>
                <circle cx="70" cy="110" r="2" transform="rotate(90 70 110)" fill="#599C12"/>
                <circle cx="70" cy="118" r="2" transform="rotate(90 70 118)" fill="#599C12"/>
                <circle cx="70" cy="126" r="2" transform="rotate(90 70 126)" fill="#599C12"/>
                <circle cx="70" cy="134" r="2" transform="rotate(90 70 134)" fill="#599C12"/>
                <circle cx="70" cy="142" r="2" transform="rotate(90 70 142)" fill="#599C12"/>
                <circle cx="70" cy="150" r="2" transform="rotate(90 70 150)" fill="#599C12"/>
                <circle cx="70" cy="158" r="2" transform="rotate(90 70 158)" fill="#599C12"/>
                <circle cx="70" cy="166" r="2" transform="rotate(90 70 166)" fill="#599C12"/>
                <circle cx="70" cy="174" r="2" transform="rotate(90 70 174)" fill="#599C12"/>
                <circle cx="70" cy="182" r="2" transform="rotate(90 70 182)" fill="#599C12"/>
                <circle cx="70" cy="190" r="2" transform="rotate(90 70 190)" fill="#599C12"/>
                <circle cx="70" cy="198" r="2" transform="rotate(90 70 198)" fill="#599C12"/>
                <circle cx="70" cy="206" r="2" transform="rotate(90 70 206)" fill="#599C12"/>
                <circle cx="70" cy="214" r="2" transform="rotate(90 70 214)" fill="#599C12"/>
                <circle cx="70" cy="222" r="2" transform="rotate(90 70 222)" fill="#599C12"/>
                <circle cx="70" cy="230" r="2" transform="rotate(90 70 230)" fill="#599C12"/>
                <circle cx="70" cy="238" r="2" transform="rotate(90 70 238)" fill="#599C12"/>
                <circle cx="70" cy="246" r="2" transform="rotate(90 70 246)" fill="#599C12"/>
                <circle cx="70" cy="254" r="2" transform="rotate(90 70 254)" fill="#599C12"/>
                <circle cx="70" cy="262" r="2" transform="rotate(90 70 262)" fill="#599C12"/>
                <circle cx="70" cy="270" r="2" transform="rotate(90 70 270)" fill="#599C12"/>
                <circle cx="70" cy="278" r="2" transform="rotate(90 70 278)" fill="#599C12"/>
                <circle cx="70" cy="286" r="2" transform="rotate(90 70 286)" fill="#599C12"/>
                <circle cx="70" cy="294" r="2" transform="rotate(90 70 294)" fill="#599C12"/>
                <circle cx="70" cy="302" r="2" transform="rotate(90 70 302)" fill="#599C12"/>
                <circle cx="70" cy="310" r="2" transform="rotate(90 70 310)" fill="#599C12"/>
                <circle cx="70" cy="318" r="2" transform="rotate(90 70 318)" fill="#599C12"/>
                <circle cx="70" cy="326" r="2" transform="rotate(90 70 326)" fill="#599C12"/>
                <circle cx="70" cy="334" r="2" transform="rotate(90 70 334)" fill="#599C12"/>
                <circle cx="70" cy="342" r="2" transform="rotate(90 70 342)" fill="#599C12"/>
                <circle cx="62" cy="6" r="2" transform="rotate(90 62 6)" fill="#599C12"/>
                <circle cx="62" cy="14" r="2" transform="rotate(90 62 14)" fill="#599C12"/>
                <circle cx="62" cy="22" r="2" transform="rotate(90 62 22)" fill="#599C12"/>
                <circle cx="62" cy="30" r="2" transform="rotate(90 62 30)" fill="#599C12"/>
                <circle cx="62" cy="38" r="2" transform="rotate(90 62 38)" fill="#599C12"/>
                <circle cx="62" cy="46" r="2" transform="rotate(90 62 46)" fill="#599C12"/>
                <circle cx="62" cy="54" r="2" transform="rotate(90 62 54)" fill="#599C12"/>
                <circle cx="62" cy="62" r="2" transform="rotate(90 62 62)" fill="#599C12"/>
                <circle cx="62" cy="70" r="2" transform="rotate(90 62 70)" fill="#599C12"/>
                <circle cx="62" cy="78" r="2" transform="rotate(90 62 78)" fill="#599C12"/>
                <circle cx="62" cy="86" r="2" transform="rotate(90 62 86)" fill="#599C12"/>
                <circle cx="62" cy="94" r="2" transform="rotate(90 62 94)" fill="#599C12"/>
                <circle cx="62" cy="102" r="2" transform="rotate(90 62 102)" fill="#599C12"/>
                <circle cx="62" cy="110" r="2" transform="rotate(90 62 110)" fill="#599C12"/>
                <circle cx="62" cy="118" r="2" transform="rotate(90 62 118)" fill="#599C12"/>
                <circle cx="62" cy="126" r="2" transform="rotate(90 62 126)" fill="#599C12"/>
                <circle cx="62" cy="134" r="2" transform="rotate(90 62 134)" fill="#599C12"/>
                <circle cx="62" cy="142" r="2" transform="rotate(90 62 142)" fill="#599C12"/>
                <circle cx="62" cy="150" r="2" transform="rotate(90 62 150)" fill="#599C12"/>
                <circle cx="62" cy="158" r="2" transform="rotate(90 62 158)" fill="#599C12"/>
                <circle cx="62" cy="166" r="2" transform="rotate(90 62 166)" fill="#599C12"/>
                <circle cx="62" cy="174" r="2" transform="rotate(90 62 174)" fill="#599C12"/>
                <circle cx="62" cy="182" r="2" transform="rotate(90 62 182)" fill="#599C12"/>
                <circle cx="62" cy="190" r="2" transform="rotate(90 62 190)" fill="#599C12"/>
                <circle cx="62" cy="198" r="2" transform="rotate(90 62 198)" fill="#599C12"/>
                <circle cx="62" cy="206" r="2" transform="rotate(90 62 206)" fill="#599C12"/>
                <circle cx="62" cy="214" r="2" transform="rotate(90 62 214)" fill="#599C12"/>
                <circle cx="62" cy="222" r="2" transform="rotate(90 62 222)" fill="#599C12"/>
                <circle cx="62" cy="230" r="2" transform="rotate(90 62 230)" fill="#599C12"/>
                <circle cx="62" cy="238" r="2" transform="rotate(90 62 238)" fill="#599C12"/>
                <circle cx="62" cy="246" r="2" transform="rotate(90 62 246)" fill="#599C12"/>
                <circle cx="62" cy="254" r="2" transform="rotate(90 62 254)" fill="#599C12"/>
                <circle cx="62" cy="262" r="2" transform="rotate(90 62 262)" fill="#599C12"/>
                <circle cx="62" cy="270" r="2" transform="rotate(90 62 270)" fill="#599C12"/>
                <circle cx="62" cy="278" r="2" transform="rotate(90 62 278)" fill="#599C12"/>
                <circle cx="62" cy="286" r="2" transform="rotate(90 62 286)" fill="#599C12"/>
                <circle cx="62" cy="294" r="2" transform="rotate(90 62 294)" fill="#599C12"/>
                <circle cx="62" cy="302" r="2" transform="rotate(90 62 302)" fill="#599C12"/>
                <circle cx="62" cy="310" r="2" transform="rotate(90 62 310)" fill="#599C12"/>
                <circle cx="62" cy="318" r="2" transform="rotate(90 62 318)" fill="#599C12"/>
                <circle cx="62" cy="326" r="2" transform="rotate(90 62 326)" fill="#599C12"/>
                <circle cx="62" cy="334" r="2" transform="rotate(90 62 334)" fill="#599C12"/>
                <circle cx="62" cy="342" r="2" transform="rotate(90 62 342)" fill="#599C12"/>
                <circle cx="54" cy="6" r="2" transform="rotate(90 54 6)" fill="#599C12"/>
                <circle cx="54" cy="14" r="2" transform="rotate(90 54 14)" fill="#599C12"/>
                <circle cx="54" cy="22" r="2" transform="rotate(90 54 22)" fill="#599C12"/>
                <circle cx="54" cy="30" r="2" transform="rotate(90 54 30)" fill="#599C12"/>
                <circle cx="54" cy="38" r="2" transform="rotate(90 54 38)" fill="#599C12"/>
                <circle cx="54" cy="46" r="2" transform="rotate(90 54 46)" fill="#599C12"/>
                <circle cx="54" cy="54" r="2" transform="rotate(90 54 54)" fill="#599C12"/>
                <circle cx="54" cy="62" r="2" transform="rotate(90 54 62)" fill="#599C12"/>
                <circle cx="54" cy="70" r="2" transform="rotate(90 54 70)" fill="#599C12"/>
                <circle cx="54" cy="78" r="2" transform="rotate(90 54 78)" fill="#599C12"/>
                <circle cx="54" cy="86" r="2" transform="rotate(90 54 86)" fill="#599C12"/>
                <circle cx="54" cy="94" r="2" transform="rotate(90 54 94)" fill="#599C12"/>
                <circle cx="54" cy="102" r="2" transform="rotate(90 54 102)" fill="#599C12"/>
                <circle cx="54" cy="110" r="2" transform="rotate(90 54 110)" fill="#599C12"/>
                <circle cx="54" cy="118" r="2" transform="rotate(90 54 118)" fill="#599C12"/>
                <circle cx="54" cy="126" r="2" transform="rotate(90 54 126)" fill="#599C12"/>
                <circle cx="54" cy="134" r="2" transform="rotate(90 54 134)" fill="#599C12"/>
                <circle cx="54" cy="142" r="2" transform="rotate(90 54 142)" fill="#599C12"/>
                <circle cx="54" cy="150" r="2" transform="rotate(90 54 150)" fill="#599C12"/>
                <circle cx="54" cy="158" r="2" transform="rotate(90 54 158)" fill="#599C12"/>
                <circle cx="54" cy="166" r="2" transform="rotate(90 54 166)" fill="#599C12"/>
                <circle cx="54" cy="174" r="2" transform="rotate(90 54 174)" fill="#599C12"/>
                <circle cx="54" cy="182" r="2" transform="rotate(90 54 182)" fill="#599C12"/>
                <circle cx="54" cy="190" r="2" transform="rotate(90 54 190)" fill="#599C12"/>
                <circle cx="54" cy="198" r="2" transform="rotate(90 54 198)" fill="#599C12"/>
                <circle cx="54" cy="206" r="2" transform="rotate(90 54 206)" fill="#599C12"/>
                <circle cx="54" cy="214" r="2" transform="rotate(90 54 214)" fill="#599C12"/>
                <circle cx="54" cy="222" r="2" transform="rotate(90 54 222)" fill="#599C12"/>
                <circle cx="54" cy="230" r="2" transform="rotate(90 54 230)" fill="#599C12"/>
                <circle cx="54" cy="238" r="2" transform="rotate(90 54 238)" fill="#599C12"/>
                <circle cx="54" cy="246" r="2" transform="rotate(90 54 246)" fill="#599C12"/>
                <circle cx="54" cy="254" r="2" transform="rotate(90 54 254)" fill="#599C12"/>
                <circle cx="54" cy="262" r="2" transform="rotate(90 54 262)" fill="#599C12"/>
                <circle cx="54" cy="270" r="2" transform="rotate(90 54 270)" fill="#599C12"/>
                <circle cx="54" cy="278" r="2" transform="rotate(90 54 278)" fill="#599C12"/>
                <circle cx="54" cy="286" r="2" transform="rotate(90 54 286)" fill="#599C12"/>
                <circle cx="54" cy="294" r="2" transform="rotate(90 54 294)" fill="#599C12"/>
                <circle cx="54" cy="302" r="2" transform="rotate(90 54 302)" fill="#599C12"/>
                <circle cx="54" cy="310" r="2" transform="rotate(90 54 310)" fill="#599C12"/>
                <circle cx="54" cy="318" r="2" transform="rotate(90 54 318)" fill="#599C12"/>
                <circle cx="54" cy="326" r="2" transform="rotate(90 54 326)" fill="#599C12"/>
                <circle cx="54" cy="334" r="2" transform="rotate(90 54 334)" fill="#599C12"/>
                <circle cx="54" cy="342" r="2" transform="rotate(90 54 342)" fill="#599C12"/>
                <circle cx="46" cy="6" r="2" transform="rotate(90 46 6)" fill="#599C12"/>
                <circle cx="46" cy="14" r="2" transform="rotate(90 46 14)" fill="#599C12"/>
                <circle cx="46" cy="22" r="2" transform="rotate(90 46 22)" fill="#599C12"/>
                <circle cx="46" cy="30" r="2" transform="rotate(90 46 30)" fill="#599C12"/>
                <circle cx="46" cy="38" r="2" transform="rotate(90 46 38)" fill="#599C12"/>
                <circle cx="46" cy="46" r="2" transform="rotate(90 46 46)" fill="#599C12"/>
                <circle cx="46" cy="54" r="2" transform="rotate(90 46 54)" fill="#599C12"/>
                <circle cx="46" cy="62" r="2" transform="rotate(90 46 62)" fill="#599C12"/>
                <circle cx="46" cy="70" r="2" transform="rotate(90 46 70)" fill="#599C12"/>
                <circle cx="46" cy="78" r="2" transform="rotate(90 46 78)" fill="#599C12"/>
                <circle cx="46" cy="86" r="2" transform="rotate(90 46 86)" fill="#599C12"/>
                <circle cx="46" cy="94" r="2" transform="rotate(90 46 94)" fill="#599C12"/>
                <circle cx="46" cy="102" r="2" transform="rotate(90 46 102)" fill="#599C12"/>
                <circle cx="46" cy="110" r="2" transform="rotate(90 46 110)" fill="#599C12"/>
                <circle cx="46" cy="118" r="2" transform="rotate(90 46 118)" fill="#599C12"/>
                <circle cx="46" cy="126" r="2" transform="rotate(90 46 126)" fill="#599C12"/>
                <circle cx="46" cy="134" r="2" transform="rotate(90 46 134)" fill="#599C12"/>
                <circle cx="46" cy="142" r="2" transform="rotate(90 46 142)" fill="#599C12"/>
                <circle cx="46" cy="150" r="2" transform="rotate(90 46 150)" fill="#599C12"/>
                <circle cx="46" cy="158" r="2" transform="rotate(90 46 158)" fill="#599C12"/>
                <circle cx="46" cy="166" r="2" transform="rotate(90 46 166)" fill="#599C12"/>
                <circle cx="46" cy="174" r="2" transform="rotate(90 46 174)" fill="#599C12"/>
                <circle cx="46" cy="182" r="2" transform="rotate(90 46 182)" fill="#599C12"/>
                <circle cx="46" cy="190" r="2" transform="rotate(90 46 190)" fill="#599C12"/>
                <circle cx="46" cy="198" r="2" transform="rotate(90 46 198)" fill="#599C12"/>
                <circle cx="46" cy="206" r="2" transform="rotate(90 46 206)" fill="#599C12"/>
                <circle cx="46" cy="214" r="2" transform="rotate(90 46 214)" fill="#599C12"/>
                <circle cx="46" cy="222" r="2" transform="rotate(90 46 222)" fill="#599C12"/>
                <circle cx="46" cy="230" r="2" transform="rotate(90 46 230)" fill="#599C12"/>
                <circle cx="46" cy="238" r="2" transform="rotate(90 46 238)" fill="#599C12"/>
                <circle cx="46" cy="246" r="2" transform="rotate(90 46 246)" fill="#599C12"/>
                <circle cx="46" cy="254" r="2" transform="rotate(90 46 254)" fill="#599C12"/>
                <circle cx="46" cy="262" r="2" transform="rotate(90 46 262)" fill="#599C12"/>
                <circle cx="46" cy="270" r="2" transform="rotate(90 46 270)" fill="#599C12"/>
                <circle cx="46" cy="278" r="2" transform="rotate(90 46 278)" fill="#599C12"/>
                <circle cx="46" cy="286" r="2" transform="rotate(90 46 286)" fill="#599C12"/>
                <circle cx="46" cy="294" r="2" transform="rotate(90 46 294)" fill="#599C12"/>
                <circle cx="46" cy="302" r="2" transform="rotate(90 46 302)" fill="#599C12"/>
                <circle cx="46" cy="310" r="2" transform="rotate(90 46 310)" fill="#599C12"/>
                <circle cx="46" cy="318" r="2" transform="rotate(90 46 318)" fill="#599C12"/>
                <circle cx="46" cy="326" r="2" transform="rotate(90 46 326)" fill="#599C12"/>
                <circle cx="46" cy="334" r="2" transform="rotate(90 46 334)" fill="#599C12"/>
                <circle cx="46" cy="342" r="2" transform="rotate(90 46 342)" fill="#599C12"/>
                <circle cx="38" cy="6" r="2" transform="rotate(90 38 6)" fill="#599C12"/>
                <circle cx="38" cy="14" r="2" transform="rotate(90 38 14)" fill="#599C12"/>
                <circle cx="38" cy="22" r="2" transform="rotate(90 38 22)" fill="#599C12"/>
                <circle cx="38" cy="30" r="2" transform="rotate(90 38 30)" fill="#599C12"/>
                <circle cx="38" cy="38" r="2" transform="rotate(90 38 38)" fill="#599C12"/>
                <circle cx="38" cy="46" r="2" transform="rotate(90 38 46)" fill="#599C12"/>
                <circle cx="38" cy="54" r="2" transform="rotate(90 38 54)" fill="#599C12"/>
                <circle cx="38" cy="62" r="2" transform="rotate(90 38 62)" fill="#599C12"/>
                <circle cx="38" cy="70" r="2" transform="rotate(90 38 70)" fill="#599C12"/>
                <circle cx="38" cy="78" r="2" transform="rotate(90 38 78)" fill="#599C12"/>
                <circle cx="38" cy="86" r="2" transform="rotate(90 38 86)" fill="#599C12"/>
                <circle cx="38" cy="94" r="2" transform="rotate(90 38 94)" fill="#599C12"/>
                <circle cx="38" cy="102" r="2" transform="rotate(90 38 102)" fill="#599C12"/>
                <circle cx="38" cy="110" r="2" transform="rotate(90 38 110)" fill="#599C12"/>
                <circle cx="38" cy="118" r="2" transform="rotate(90 38 118)" fill="#599C12"/>
                <circle cx="38" cy="126" r="2" transform="rotate(90 38 126)" fill="#599C12"/>
                <circle cx="38" cy="134" r="2" transform="rotate(90 38 134)" fill="#599C12"/>
                <circle cx="38" cy="142" r="2" transform="rotate(90 38 142)" fill="#599C12"/>
                <circle cx="38" cy="150" r="2" transform="rotate(90 38 150)" fill="#599C12"/>
                <circle cx="38" cy="158" r="2" transform="rotate(90 38 158)" fill="#599C12"/>
                <circle cx="38" cy="166" r="2" transform="rotate(90 38 166)" fill="#599C12"/>
                <circle cx="38" cy="174" r="2" transform="rotate(90 38 174)" fill="#599C12"/>
                <circle cx="38" cy="182" r="2" transform="rotate(90 38 182)" fill="#599C12"/>
                <circle cx="38" cy="190" r="2" transform="rotate(90 38 190)" fill="#599C12"/>
                <circle cx="38" cy="198" r="2" transform="rotate(90 38 198)" fill="#599C12"/>
                <circle cx="38" cy="206" r="2" transform="rotate(90 38 206)" fill="#599C12"/>
                <circle cx="38" cy="214" r="2" transform="rotate(90 38 214)" fill="#599C12"/>
                <circle cx="38" cy="222" r="2" transform="rotate(90 38 222)" fill="#599C12"/>
                <circle cx="38" cy="230" r="2" transform="rotate(90 38 230)" fill="#599C12"/>
                <circle cx="38" cy="238" r="2" transform="rotate(90 38 238)" fill="#599C12"/>
                <circle cx="38" cy="246" r="2" transform="rotate(90 38 246)" fill="#599C12"/>
                <circle cx="38" cy="254" r="2" transform="rotate(90 38 254)" fill="#599C12"/>
                <circle cx="38" cy="262" r="2" transform="rotate(90 38 262)" fill="#599C12"/>
                <circle cx="38" cy="270" r="2" transform="rotate(90 38 270)" fill="#599C12"/>
                <circle cx="38" cy="278" r="2" transform="rotate(90 38 278)" fill="#599C12"/>
                <circle cx="38" cy="286" r="2" transform="rotate(90 38 286)" fill="#599C12"/>
                <circle cx="38" cy="294" r="2" transform="rotate(90 38 294)" fill="#599C12"/>
                <circle cx="38" cy="302" r="2" transform="rotate(90 38 302)" fill="#599C12"/>
                <circle cx="38" cy="310" r="2" transform="rotate(90 38 310)" fill="#599C12"/>
                <circle cx="38" cy="318" r="2" transform="rotate(90 38 318)" fill="#599C12"/>
                <circle cx="38" cy="326" r="2" transform="rotate(90 38 326)" fill="#599C12"/>
                <circle cx="38" cy="334" r="2" transform="rotate(90 38 334)" fill="#599C12"/>
                <circle cx="38" cy="342" r="2" transform="rotate(90 38 342)" fill="#599C12"/>
                <circle cx="30" cy="6" r="2" transform="rotate(90 30 6)" fill="#599C12"/>
                <circle cx="30" cy="14" r="2" transform="rotate(90 30 14)" fill="#599C12"/>
                <circle cx="30" cy="22" r="2" transform="rotate(90 30 22)" fill="#599C12"/>
                <circle cx="30" cy="30" r="2" transform="rotate(90 30 30)" fill="#599C12"/>
                <circle cx="30" cy="38" r="2" transform="rotate(90 30 38)" fill="#599C12"/>
                <circle cx="30" cy="46" r="2" transform="rotate(90 30 46)" fill="#599C12"/>
                <circle cx="30" cy="54" r="2" transform="rotate(90 30 54)" fill="#599C12"/>
                <circle cx="30" cy="62" r="2" transform="rotate(90 30 62)" fill="#599C12"/>
                <circle cx="30" cy="70" r="2" transform="rotate(90 30 70)" fill="#599C12"/>
                <circle cx="30" cy="78" r="2" transform="rotate(90 30 78)" fill="#599C12"/>
                <circle cx="30" cy="86" r="2" transform="rotate(90 30 86)" fill="#599C12"/>
                <circle cx="30" cy="94" r="2" transform="rotate(90 30 94)" fill="#599C12"/>
                <circle cx="30" cy="102" r="2" transform="rotate(90 30 102)" fill="#599C12"/>
                <circle cx="30" cy="110" r="2" transform="rotate(90 30 110)" fill="#599C12"/>
                <circle cx="30" cy="118" r="2" transform="rotate(90 30 118)" fill="#599C12"/>
                <circle cx="30" cy="126" r="2" transform="rotate(90 30 126)" fill="#599C12"/>
                <circle cx="30" cy="134" r="2" transform="rotate(90 30 134)" fill="#599C12"/>
                <circle cx="30" cy="142" r="2" transform="rotate(90 30 142)" fill="#599C12"/>
                <circle cx="30" cy="150" r="2" transform="rotate(90 30 150)" fill="#599C12"/>
                <circle cx="30" cy="158" r="2" transform="rotate(90 30 158)" fill="#599C12"/>
                <circle cx="30" cy="166" r="2" transform="rotate(90 30 166)" fill="#599C12"/>
                <circle cx="30" cy="174" r="2" transform="rotate(90 30 174)" fill="#599C12"/>
                <circle cx="30" cy="182" r="2" transform="rotate(90 30 182)" fill="#599C12"/>
                <circle cx="30" cy="190" r="2" transform="rotate(90 30 190)" fill="#599C12"/>
                <circle cx="30" cy="198" r="2" transform="rotate(90 30 198)" fill="#599C12"/>
                <circle cx="30" cy="206" r="2" transform="rotate(90 30 206)" fill="#599C12"/>
                <circle cx="30" cy="214" r="2" transform="rotate(90 30 214)" fill="#599C12"/>
                <circle cx="30" cy="222" r="2" transform="rotate(90 30 222)" fill="#599C12"/>
                <circle cx="30" cy="230" r="2" transform="rotate(90 30 230)" fill="#599C12"/>
                <circle cx="30" cy="238" r="2" transform="rotate(90 30 238)" fill="#599C12"/>
                <circle cx="30" cy="246" r="2" transform="rotate(90 30 246)" fill="#599C12"/>
                <circle cx="30" cy="254" r="2" transform="rotate(90 30 254)" fill="#599C12"/>
                <circle cx="30" cy="262" r="2" transform="rotate(90 30 262)" fill="#599C12"/>
                <circle cx="30" cy="270" r="2" transform="rotate(90 30 270)" fill="#599C12"/>
                <circle cx="30" cy="278" r="2" transform="rotate(90 30 278)" fill="#599C12"/>
                <circle cx="30" cy="286" r="2" transform="rotate(90 30 286)" fill="#599C12"/>
                <circle cx="30" cy="294" r="2" transform="rotate(90 30 294)" fill="#599C12"/>
                <circle cx="30" cy="302" r="2" transform="rotate(90 30 302)" fill="#599C12"/>
                <circle cx="30" cy="310" r="2" transform="rotate(90 30 310)" fill="#599C12"/>
                <circle cx="30" cy="318" r="2" transform="rotate(90 30 318)" fill="#599C12"/>
                <circle cx="30" cy="326" r="2" transform="rotate(90 30 326)" fill="#599C12"/>
                <circle cx="30" cy="334" r="2" transform="rotate(90 30 334)" fill="#599C12"/>
                <circle cx="30" cy="342" r="2" transform="rotate(90 30 342)" fill="#599C12"/>
                <circle cx="22" cy="6" r="2" transform="rotate(90 22 6)" fill="#599C12"/>
                <circle cx="22" cy="14" r="2" transform="rotate(90 22 14)" fill="#599C12"/>
                <circle cx="22" cy="22" r="2" transform="rotate(90 22 22)" fill="#599C12"/>
                <circle cx="22" cy="30" r="2" transform="rotate(90 22 30)" fill="#599C12"/>
                <circle cx="22" cy="38" r="2" transform="rotate(90 22 38)" fill="#599C12"/>
                <circle cx="22" cy="46" r="2" transform="rotate(90 22 46)" fill="#599C12"/>
                <circle cx="22" cy="54" r="2" transform="rotate(90 22 54)" fill="#599C12"/>
                <circle cx="22" cy="62" r="2" transform="rotate(90 22 62)" fill="#599C12"/>
                <circle cx="22" cy="70" r="2" transform="rotate(90 22 70)" fill="#599C12"/>
                <circle cx="22" cy="78" r="2" transform="rotate(90 22 78)" fill="#599C12"/>
                <circle cx="22" cy="86" r="2" transform="rotate(90 22 86)" fill="#599C12"/>
                <circle cx="22" cy="94" r="2" transform="rotate(90 22 94)" fill="#599C12"/>
                <circle cx="22" cy="102" r="2" transform="rotate(90 22 102)" fill="#599C12"/>
                <circle cx="22" cy="110" r="2" transform="rotate(90 22 110)" fill="#599C12"/>
                <circle cx="22" cy="118" r="2" transform="rotate(90 22 118)" fill="#599C12"/>
                <circle cx="22" cy="126" r="2" transform="rotate(90 22 126)" fill="#599C12"/>
                <circle cx="22" cy="134" r="2" transform="rotate(90 22 134)" fill="#599C12"/>
                <circle cx="22" cy="142" r="2" transform="rotate(90 22 142)" fill="#599C12"/>
                <circle cx="22" cy="150" r="2" transform="rotate(90 22 150)" fill="#599C12"/>
                <circle cx="22" cy="158" r="2" transform="rotate(90 22 158)" fill="#599C12"/>
                <circle cx="22" cy="166" r="2" transform="rotate(90 22 166)" fill="#599C12"/>
                <circle cx="22" cy="174" r="2" transform="rotate(90 22 174)" fill="#599C12"/>
                <circle cx="22" cy="182" r="2" transform="rotate(90 22 182)" fill="#599C12"/>
                <circle cx="22" cy="190" r="2" transform="rotate(90 22 190)" fill="#599C12"/>
                <circle cx="22" cy="198" r="2" transform="rotate(90 22 198)" fill="#599C12"/>
                <circle cx="22" cy="206" r="2" transform="rotate(90 22 206)" fill="#599C12"/>
                <circle cx="22" cy="214" r="2" transform="rotate(90 22 214)" fill="#599C12"/>
                <circle cx="22" cy="222" r="2" transform="rotate(90 22 222)" fill="#599C12"/>
                <circle cx="22" cy="230" r="2" transform="rotate(90 22 230)" fill="#599C12"/>
                <circle cx="22" cy="238" r="2" transform="rotate(90 22 238)" fill="#599C12"/>
                <circle cx="22" cy="246" r="2" transform="rotate(90 22 246)" fill="#599C12"/>
                <circle cx="22" cy="254" r="2" transform="rotate(90 22 254)" fill="#599C12"/>
                <circle cx="22" cy="262" r="2" transform="rotate(90 22 262)" fill="#599C12"/>
                <circle cx="22" cy="270" r="2" transform="rotate(90 22 270)" fill="#599C12"/>
                <circle cx="22" cy="278" r="2" transform="rotate(90 22 278)" fill="#599C12"/>
                <circle cx="22" cy="286" r="2" transform="rotate(90 22 286)" fill="#599C12"/>
                <circle cx="22" cy="294" r="2" transform="rotate(90 22 294)" fill="#599C12"/>
                <circle cx="22" cy="302" r="2" transform="rotate(90 22 302)" fill="#599C12"/>
                <circle cx="22" cy="310" r="2" transform="rotate(90 22 310)" fill="#599C12"/>
                <circle cx="22" cy="318" r="2" transform="rotate(90 22 318)" fill="#599C12"/>
                <circle cx="22" cy="326" r="2" transform="rotate(90 22 326)" fill="#599C12"/>
                <circle cx="22" cy="334" r="2" transform="rotate(90 22 334)" fill="#599C12"/>
                <circle cx="22" cy="342" r="2" transform="rotate(90 22 342)" fill="#599C12"/>
                <circle cx="14" cy="6" r="2" transform="rotate(90 14 6)" fill="#599C12"/>
                <circle cx="14" cy="14" r="2" transform="rotate(90 14 14)" fill="#599C12"/>
                <circle cx="14" cy="22" r="2" transform="rotate(90 14 22)" fill="#599C12"/>
                <circle cx="14" cy="30" r="2" transform="rotate(90 14 30)" fill="#599C12"/>
                <circle cx="14" cy="38" r="2" transform="rotate(90 14 38)" fill="#599C12"/>
                <circle cx="14" cy="46" r="2" transform="rotate(90 14 46)" fill="#599C12"/>
                <circle cx="14" cy="54" r="2" transform="rotate(90 14 54)" fill="#599C12"/>
                <circle cx="14" cy="62" r="2" transform="rotate(90 14 62)" fill="#599C12"/>
                <circle cx="14" cy="70" r="2" transform="rotate(90 14 70)" fill="#599C12"/>
                <circle cx="14" cy="78" r="2" transform="rotate(90 14 78)" fill="#599C12"/>
                <circle cx="14" cy="86" r="2" transform="rotate(90 14 86)" fill="#599C12"/>
                <circle cx="14" cy="94" r="2" transform="rotate(90 14 94)" fill="#599C12"/>
                <circle cx="14" cy="102" r="2" transform="rotate(90 14 102)" fill="#599C12"/>
                <circle cx="14" cy="110" r="2" transform="rotate(90 14 110)" fill="#599C12"/>
                <circle cx="14" cy="118" r="2" transform="rotate(90 14 118)" fill="#599C12"/>
                <circle cx="14" cy="126" r="2" transform="rotate(90 14 126)" fill="#599C12"/>
                <circle cx="14" cy="134" r="2" transform="rotate(90 14 134)" fill="#599C12"/>
                <circle cx="14" cy="142" r="2" transform="rotate(90 14 142)" fill="#599C12"/>
                <circle cx="14" cy="150" r="2" transform="rotate(90 14 150)" fill="#599C12"/>
                <circle cx="14" cy="158" r="2" transform="rotate(90 14 158)" fill="#599C12"/>
                <circle cx="14" cy="166" r="2" transform="rotate(90 14 166)" fill="#599C12"/>
                <circle cx="14" cy="174" r="2" transform="rotate(90 14 174)" fill="#599C12"/>
                <circle cx="14" cy="182" r="2" transform="rotate(90 14 182)" fill="#599C12"/>
                <circle cx="14" cy="190" r="2" transform="rotate(90 14 190)" fill="#599C12"/>
                <circle cx="14" cy="198" r="2" transform="rotate(90 14 198)" fill="#599C12"/>
                <circle cx="14" cy="206" r="2" transform="rotate(90 14 206)" fill="#599C12"/>
                <circle cx="14" cy="214" r="2" transform="rotate(90 14 214)" fill="#599C12"/>
                <circle cx="14" cy="222" r="2" transform="rotate(90 14 222)" fill="#599C12"/>
                <circle cx="14" cy="230" r="2" transform="rotate(90 14 230)" fill="#599C12"/>
                <circle cx="14" cy="238" r="2" transform="rotate(90 14 238)" fill="#599C12"/>
                <circle cx="14" cy="246" r="2" transform="rotate(90 14 246)" fill="#599C12"/>
                <circle cx="14" cy="254" r="2" transform="rotate(90 14 254)" fill="#599C12"/>
                <circle cx="14" cy="262" r="2" transform="rotate(90 14 262)" fill="#599C12"/>
                <circle cx="14" cy="270" r="2" transform="rotate(90 14 270)" fill="#599C12"/>
                <circle cx="14" cy="278" r="2" transform="rotate(90 14 278)" fill="#599C12"/>
                <circle cx="14" cy="286" r="2" transform="rotate(90 14 286)" fill="#599C12"/>
                <circle cx="14" cy="294" r="2" transform="rotate(90 14 294)" fill="#599C12"/>
                <circle cx="14" cy="302" r="2" transform="rotate(90 14 302)" fill="#599C12"/>
                <circle cx="14" cy="310" r="2" transform="rotate(90 14 310)" fill="#599C12"/>
                <circle cx="14" cy="318" r="2" transform="rotate(90 14 318)" fill="#599C12"/>
                <circle cx="14" cy="326" r="2" transform="rotate(90 14 326)" fill="#599C12"/>
                <circle cx="14" cy="334" r="2" transform="rotate(90 14 334)" fill="#599C12"/>
                <circle cx="14" cy="342" r="2" transform="rotate(90 14 342)" fill="#599C12"/>
                <circle cx="6" cy="6" r="2" transform="rotate(90 6 6)" fill="#599C12"/>
                <circle cx="6" cy="14" r="2" transform="rotate(90 6 14)" fill="#599C12"/>
                <circle cx="6" cy="22" r="2" transform="rotate(90 6 22)" fill="#599C12"/>
                <circle cx="6" cy="30" r="2" transform="rotate(90 6 30)" fill="#599C12"/>
                <circle cx="6" cy="38" r="2" transform="rotate(90 6 38)" fill="#599C12"/>
                <circle cx="6" cy="46" r="2" transform="rotate(90 6 46)" fill="#599C12"/>
                <circle cx="6" cy="54" r="2" transform="rotate(90 6 54)" fill="#599C12"/>
                <circle cx="6" cy="62" r="2" transform="rotate(90 6 62)" fill="#599C12"/>
                <circle cx="6" cy="70" r="2" transform="rotate(90 6 70)" fill="#599C12"/>
                <circle cx="6" cy="78" r="2" transform="rotate(90 6 78)" fill="#599C12"/>
                <circle cx="6" cy="86" r="2" transform="rotate(90 6 86)" fill="#599C12"/>
                <circle cx="6" cy="94" r="2" transform="rotate(90 6 94)" fill="#599C12"/>
                <circle cx="6" cy="102" r="2" transform="rotate(90 6 102)" fill="#599C12"/>
                <circle cx="6" cy="110" r="2" transform="rotate(90 6 110)" fill="#599C12"/>
                <circle cx="6" cy="118" r="2" transform="rotate(90 6 118)" fill="#599C12"/>
                <circle cx="6" cy="126" r="2" transform="rotate(90 6 126)" fill="#599C12"/>
                <circle cx="6" cy="134" r="2" transform="rotate(90 6 134)" fill="#599C12"/>
                <circle cx="6" cy="142" r="2" transform="rotate(90 6 142)" fill="#599C12"/>
                <circle cx="6" cy="150" r="2" transform="rotate(90 6 150)" fill="#599C12"/>
                <circle cx="6" cy="158" r="2" transform="rotate(90 6 158)" fill="#599C12"/>
                <circle cx="6" cy="166" r="2" transform="rotate(90 6 166)" fill="#599C12"/>
                <circle cx="6" cy="174" r="2" transform="rotate(90 6 174)" fill="#599C12"/>
                <circle cx="6" cy="182" r="2" transform="rotate(90 6 182)" fill="#599C12"/>
                <circle cx="6" cy="190" r="2" transform="rotate(90 6 190)" fill="#599C12"/>
                <circle cx="6" cy="198" r="2" transform="rotate(90 6 198)" fill="#599C12"/>
                <circle cx="6" cy="206" r="2" transform="rotate(90 6 206)" fill="#599C12"/>
                <circle cx="6" cy="214" r="2" transform="rotate(90 6 214)" fill="#599C12"/>
                <circle cx="6" cy="222" r="2" transform="rotate(90 6 222)" fill="#599C12"/>
                <circle cx="6" cy="230" r="2" transform="rotate(90 6 230)" fill="#599C12"/>
                <circle cx="6" cy="238" r="2" transform="rotate(90 6 238)" fill="#599C12"/>
                <circle cx="6" cy="246" r="2" transform="rotate(90 6 246)" fill="#599C12"/>
                <circle cx="6" cy="254" r="2" transform="rotate(90 6 254)" fill="#599C12"/>
                <circle cx="6" cy="262" r="2" transform="rotate(90 6 262)" fill="#599C12"/>
                <circle cx="6" cy="270" r="2" transform="rotate(90 6 270)" fill="#599C12"/>
                <circle cx="6" cy="278" r="2" transform="rotate(90 6 278)" fill="#599C12"/>
                <circle cx="6" cy="286" r="2" transform="rotate(90 6 286)" fill="#599C12"/>
                <circle cx="6" cy="294" r="2" transform="rotate(90 6 294)" fill="#599C12"/>
                <circle cx="6" cy="302" r="2" transform="rotate(90 6 302)" fill="#599C12"/>
                <circle cx="6" cy="310" r="2" transform="rotate(90 6 310)" fill="#599C12"/>
                <circle cx="6" cy="318" r="2" transform="rotate(90 6 318)" fill="#599C12"/>
                <circle cx="6" cy="326" r="2" transform="rotate(90 6 326)" fill="#599C12"/>
                <circle cx="6" cy="334" r="2" transform="rotate(90 6 334)" fill="#599C12"/>
                <circle cx="6" cy="342" r="2" transform="rotate(90 6 342)" fill="#599C12"/>
              </svg>
            </div>
            <div class="text-content col-lg-6 offset-lg-1 col-12 offset-0 first-up">
              <h2 class="block-title small-title">
                <div class="icon">
                  <img src="<?php echo $answersAboutCompanyTitleIcon;?>" alt="" class="svg-pic">
                </div>
                <span><?php echo $answersAboutCompanyBlockTitle;?></span>

              </h2>
              <div class="accordion" id="accordion-company">
		            <?php foreach( $answersAboutCompanyQuestionList as $item ): $i++;?>
                  <div class="card">
                    <div class="card-header">
                      <a class="collapsed btn" data-bs-toggle="collapse" href="#companyFaq<?php echo $i;?>">
						            <?php echo $item['question'];?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                          <path d="M21.5148 20C21.5148 19.5982 21.3551 19.2127 21.071 18.9285C20.7868 18.6444 20.4014 18.4847 19.9995 18.4847C19.5976 18.4847 19.2122 18.6444 18.9281 18.9285C18.6439 19.2127 18.4842 19.5981 18.4842 20C18.4842 20.4019 18.6439 20.7873 18.9281 21.0715C19.2122 21.3556 19.5977 21.5153 19.9995 21.5153C20.4014 21.5153 20.7868 21.3556 21.071 21.0715C21.3551 20.7873 21.5148 20.4019 21.5148 20Z" fill="#F7FDF8"/>
                          <path d="M21.5149 26.4288C21.5149 26.0269 21.3551 25.6415 21.071 25.3573C20.7868 25.0732 20.4014 24.9134 19.9995 24.9134C19.5977 24.9134 19.2122 25.0732 18.9281 25.3573C18.6439 25.6415 18.4842 26.0269 18.4842 26.4288C18.4842 26.8306 18.6439 27.2161 18.9281 27.5002C19.2122 27.7844 19.5977 27.9441 19.9995 27.9441C20.4014 27.9441 20.7868 27.7844 21.071 27.5002C21.3551 27.2161 21.5149 26.8306 21.5149 26.4288Z" fill="#F7FDF8"/>
                          <path d="M21.5149 32.8575C21.5149 32.4557 21.3551 32.0702 21.071 31.7861C20.7868 31.5019 20.4014 31.3422 19.9995 31.3422C19.5977 31.3422 19.2122 31.5019 18.9281 31.7861C18.6439 32.0702 18.4842 32.4557 18.4842 32.8575C18.4842 33.2594 18.6439 33.6449 18.9281 33.929C19.2122 34.2132 19.5977 34.3729 19.9995 34.3729C20.4014 34.3729 20.7868 34.2132 21.071 33.929C21.3551 33.6449 21.5149 33.2594 21.5149 32.8575Z" fill="#F7FDF8"/>
                          <path d="M27.9436 26.4288C27.9436 26.0269 27.7839 25.6415 27.4998 25.3573C27.2156 25.0732 26.8301 24.9135 26.4283 24.9135C26.0264 24.9135 25.641 25.0732 25.3568 25.3573C25.0727 25.6415 24.913 26.0269 24.913 26.4288C24.913 26.8306 25.0727 27.2161 25.3568 27.5002C25.641 27.7844 26.0264 27.9441 26.4283 27.9441C26.8302 27.9441 27.2156 27.7844 27.4998 27.5002C27.7839 27.2161 27.9436 26.8307 27.9436 26.4288Z" fill="#F7FDF8"/>
                          <path d="M21.5148 13.5713C21.5148 13.1694 21.3551 12.7839 21.071 12.4998C20.7868 12.2156 20.4014 12.0559 19.9995 12.0559C19.5976 12.0559 19.2122 12.2156 18.9281 12.4998C18.6439 12.7839 18.4842 13.1693 18.4842 13.5712C18.4842 13.9731 18.6439 14.3585 18.9281 14.6427C19.2122 14.9268 19.5977 15.0865 19.9996 15.0865C20.4014 15.0865 20.7868 14.9269 21.071 14.6427C21.3552 14.3585 21.5148 13.9731 21.5148 13.5713Z" fill="#F7FDF8"/>
                          <path d="M21.5148 7.14248C21.5148 6.74061 21.3551 6.35514 21.071 6.07099C20.7868 5.78684 20.4014 5.62715 19.9995 5.62715C19.5976 5.62715 19.2122 5.78683 18.9281 6.07099C18.6439 6.35516 18.4842 6.74056 18.4842 7.14243C18.4842 7.5443 18.6439 7.92977 18.9281 8.21392C19.2122 8.49807 19.5977 8.65776 19.9996 8.65776C20.4014 8.65776 20.7868 8.49808 21.071 8.21392C21.3552 7.92975 21.5148 7.54436 21.5148 7.14248Z" fill="#F7FDF8"/>
                          <path d="M24.7292 29.6432C24.7292 29.2413 24.5695 28.8558 24.2854 28.5717C24.0012 28.2875 23.6158 28.1278 23.2139 28.1278C22.812 28.1278 22.4266 28.2875 22.1425 28.5717C21.8583 28.8558 21.6986 29.2413 21.6986 29.6432C21.6986 30.045 21.8583 30.4305 22.1425 30.7146C22.4266 30.9988 22.812 31.1585 23.2139 31.1585C23.6158 31.1585 24.0012 30.9988 24.2854 30.7146C24.5695 30.4305 24.7292 30.045 24.7292 29.6432Z" fill="#F7FDF8"/>
                          <path d="M15.0861 26.4288C15.0861 26.0269 14.9264 25.6415 14.6422 25.3573C14.3581 25.0732 13.9726 24.9134 13.5708 24.9134C13.1689 24.9134 12.7834 25.0732 12.4993 25.3573C12.2151 25.6415 12.0554 26.0269 12.0554 26.4288C12.0554 26.8306 12.2151 27.2161 12.4993 27.5002C12.7834 27.7844 13.1689 27.9441 13.5708 27.9441C13.9726 27.9441 14.3581 27.7844 14.6422 27.5002C14.9264 27.2161 15.0861 26.8306 15.0861 26.4288Z" fill="#F7FDF8"/>
                          <path d="M18.3005 29.6432C18.3005 29.2413 18.1408 28.8558 17.8566 28.5717C17.5725 28.2875 17.187 28.1278 16.7851 28.1278C16.3833 28.1278 15.9978 28.2875 15.7137 28.5717C15.4295 28.8559 15.2698 29.2413 15.2698 29.6432C15.2698 30.045 15.4295 30.4305 15.7137 30.7146C15.9978 30.9988 16.3833 31.1585 16.7851 31.1585C17.187 31.1585 17.5725 30.9988 17.8566 30.7146C18.1408 30.4305 18.3005 30.045 18.3005 29.6432Z" fill="#F7FDF8"/>
                        </svg>
                      </a>
                    </div>
                    <div id="companyFaq<?php echo $i;?>" class="collapse" data-bs-parent="#accordion-company">
                      <div class="card-body">
						            <?php echo wpautop($item['answer']) ;?>
                      </div>
                    </div>
                  </div>
		            <?php endforeach;?>
              </div>
            </div>
          </div>
        </div>
      </section>
  <?php endif;?>

<?php
	$answersSolarPowerPlantsBlockTitle = carbon_get_post_meta(get_the_ID(), 'green_system_questions_answers_solar_power_plants_block_title'.green_system_lang_prefix());
	$answersSolarPowerPlantsTitleIcon = carbon_get_post_meta(get_the_ID(), 'green_system_questions_answers_solar_power_plants_title_icon'.green_system_lang_prefix());
	$answersSolarPowerPlantsImage = carbon_get_post_meta(get_the_ID(), 'green_system_questions_answers_solar_power_plants_image'.green_system_lang_prefix());
	$answersSolarPowerPlantsQuestionList = carbon_get_post_meta(get_the_ID(), 'green_system_questions_answers_solar_power_plants_question_list'.green_system_lang_prefix());

	if( $answersSolarPowerPlantsBlockTitle && $answersSolarPowerPlantsTitleIcon && $answersSolarPowerPlantsImage && $answersSolarPowerPlantsQuestionList ):?>
    <!-- Питання в/відповіді про компанію -->
    <section class="answers-solar-power-plants faq-page-block indent-top-middle indent-bottom-middle animation-tracking">
      <div class="container">
        <div class="row">
          <div class="text-content col-lg-6 col-12 first-up">
            <h2 class="block-title small-title">
              <div class="icon">
                <img src="<?php echo $answersSolarPowerPlantsTitleIcon;?>" alt="" class="svg-pic">
              </div>
              <span><?php echo $answersSolarPowerPlantsBlockTitle;?></span>

            </h2>
            <div class="accordion" id="accordion-solar-power-plants">
			        <?php foreach( $answersSolarPowerPlantsQuestionList as $item ): $i++;?>
                <div class="card">
                  <div class="card-header">
                    <a class="collapsed btn" data-bs-toggle="collapse" href="#solarPowerPlantsFaq<?php echo $i;?>">
							        <?php echo $item['question'];?>
                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <path d="M21.5148 20C21.5148 19.5982 21.3551 19.2127 21.071 18.9285C20.7868 18.6444 20.4014 18.4847 19.9995 18.4847C19.5976 18.4847 19.2122 18.6444 18.9281 18.9285C18.6439 19.2127 18.4842 19.5981 18.4842 20C18.4842 20.4019 18.6439 20.7873 18.9281 21.0715C19.2122 21.3556 19.5977 21.5153 19.9995 21.5153C20.4014 21.5153 20.7868 21.3556 21.071 21.0715C21.3551 20.7873 21.5148 20.4019 21.5148 20Z" fill="#F7FDF8"/>
                        <path d="M21.5149 26.4288C21.5149 26.0269 21.3551 25.6415 21.071 25.3573C20.7868 25.0732 20.4014 24.9134 19.9995 24.9134C19.5977 24.9134 19.2122 25.0732 18.9281 25.3573C18.6439 25.6415 18.4842 26.0269 18.4842 26.4288C18.4842 26.8306 18.6439 27.2161 18.9281 27.5002C19.2122 27.7844 19.5977 27.9441 19.9995 27.9441C20.4014 27.9441 20.7868 27.7844 21.071 27.5002C21.3551 27.2161 21.5149 26.8306 21.5149 26.4288Z" fill="#F7FDF8"/>
                        <path d="M21.5149 32.8575C21.5149 32.4557 21.3551 32.0702 21.071 31.7861C20.7868 31.5019 20.4014 31.3422 19.9995 31.3422C19.5977 31.3422 19.2122 31.5019 18.9281 31.7861C18.6439 32.0702 18.4842 32.4557 18.4842 32.8575C18.4842 33.2594 18.6439 33.6449 18.9281 33.929C19.2122 34.2132 19.5977 34.3729 19.9995 34.3729C20.4014 34.3729 20.7868 34.2132 21.071 33.929C21.3551 33.6449 21.5149 33.2594 21.5149 32.8575Z" fill="#F7FDF8"/>
                        <path d="M27.9436 26.4288C27.9436 26.0269 27.7839 25.6415 27.4998 25.3573C27.2156 25.0732 26.8301 24.9135 26.4283 24.9135C26.0264 24.9135 25.641 25.0732 25.3568 25.3573C25.0727 25.6415 24.913 26.0269 24.913 26.4288C24.913 26.8306 25.0727 27.2161 25.3568 27.5002C25.641 27.7844 26.0264 27.9441 26.4283 27.9441C26.8302 27.9441 27.2156 27.7844 27.4998 27.5002C27.7839 27.2161 27.9436 26.8307 27.9436 26.4288Z" fill="#F7FDF8"/>
                        <path d="M21.5148 13.5713C21.5148 13.1694 21.3551 12.7839 21.071 12.4998C20.7868 12.2156 20.4014 12.0559 19.9995 12.0559C19.5976 12.0559 19.2122 12.2156 18.9281 12.4998C18.6439 12.7839 18.4842 13.1693 18.4842 13.5712C18.4842 13.9731 18.6439 14.3585 18.9281 14.6427C19.2122 14.9268 19.5977 15.0865 19.9996 15.0865C20.4014 15.0865 20.7868 14.9269 21.071 14.6427C21.3552 14.3585 21.5148 13.9731 21.5148 13.5713Z" fill="#F7FDF8"/>
                        <path d="M21.5148 7.14248C21.5148 6.74061 21.3551 6.35514 21.071 6.07099C20.7868 5.78684 20.4014 5.62715 19.9995 5.62715C19.5976 5.62715 19.2122 5.78683 18.9281 6.07099C18.6439 6.35516 18.4842 6.74056 18.4842 7.14243C18.4842 7.5443 18.6439 7.92977 18.9281 8.21392C19.2122 8.49807 19.5977 8.65776 19.9996 8.65776C20.4014 8.65776 20.7868 8.49808 21.071 8.21392C21.3552 7.92975 21.5148 7.54436 21.5148 7.14248Z" fill="#F7FDF8"/>
                        <path d="M24.7292 29.6432C24.7292 29.2413 24.5695 28.8558 24.2854 28.5717C24.0012 28.2875 23.6158 28.1278 23.2139 28.1278C22.812 28.1278 22.4266 28.2875 22.1425 28.5717C21.8583 28.8558 21.6986 29.2413 21.6986 29.6432C21.6986 30.045 21.8583 30.4305 22.1425 30.7146C22.4266 30.9988 22.812 31.1585 23.2139 31.1585C23.6158 31.1585 24.0012 30.9988 24.2854 30.7146C24.5695 30.4305 24.7292 30.045 24.7292 29.6432Z" fill="#F7FDF8"/>
                        <path d="M15.0861 26.4288C15.0861 26.0269 14.9264 25.6415 14.6422 25.3573C14.3581 25.0732 13.9726 24.9134 13.5708 24.9134C13.1689 24.9134 12.7834 25.0732 12.4993 25.3573C12.2151 25.6415 12.0554 26.0269 12.0554 26.4288C12.0554 26.8306 12.2151 27.2161 12.4993 27.5002C12.7834 27.7844 13.1689 27.9441 13.5708 27.9441C13.9726 27.9441 14.3581 27.7844 14.6422 27.5002C14.9264 27.2161 15.0861 26.8306 15.0861 26.4288Z" fill="#F7FDF8"/>
                        <path d="M18.3005 29.6432C18.3005 29.2413 18.1408 28.8558 17.8566 28.5717C17.5725 28.2875 17.187 28.1278 16.7851 28.1278C16.3833 28.1278 15.9978 28.2875 15.7137 28.5717C15.4295 28.8559 15.2698 29.2413 15.2698 29.6432C15.2698 30.045 15.4295 30.4305 15.7137 30.7146C15.9978 30.9988 16.3833 31.1585 16.7851 31.1585C17.187 31.1585 17.5725 30.9988 17.8566 30.7146C18.1408 30.4305 18.3005 30.045 18.3005 29.6432Z" fill="#F7FDF8"/>
                      </svg>
                    </a>
                  </div>
                  <div id="solarPowerPlantsFaq<?php echo $i;?>" class="collapse" data-bs-parent="#accordion-solar-power-plants">
                    <div class="card-body">
							        <?php echo wpautop($item['answer']) ;?>
                    </div>
                  </div>
                </div>
			        <?php endforeach;?>
            </div>
          </div>
          <div class="pic-wrapper col-lg-5 offset-lg-1 col-12 offset-0 second-up">
            <div class="pic">
              <img
                  class="lazy"
                  data-src="<?php echo wp_get_attachment_image_src($answersSolarPowerPlantsImage, 'full')[0];?>"
                  alt="<?php echo get_post_meta($answersSolarPowerPlantsImage, '_wp_attachment_image_alt', TRUE);?>"
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
	$answersGreenTariffBlockTitle = carbon_get_post_meta(get_the_ID(), 'green_system_questions_answers_green_tariff_block_title'.green_system_lang_prefix());
	$answersGreenTariffTitleIcon = carbon_get_post_meta(get_the_ID(), 'green_system_questions_answers_green_tariff_title_icon'.green_system_lang_prefix());
	$answersGreenTariffImage = carbon_get_post_meta(get_the_ID(), 'green_system_questions_answers_green_tariff_image'.green_system_lang_prefix());
	$answersGreenTariffQuestionList = carbon_get_post_meta(get_the_ID(), 'green_system_questions_answers_green_tariff_question_list'.green_system_lang_prefix());

	if( $answersGreenTariffBlockTitle && $answersGreenTariffTitleIcon && $answersGreenTariffImage && $answersGreenTariffQuestionList ):?>
    <!-- Питання в/відповіді про компанію -->
    <section class="answers-green-tariff faq-page-block indent-bottom-middle indent-top-middle animation-tracking">
      <div class="container">
        <div class="row">
          <div class="pic-wrapper col-lg-5 col-12 second-up">
            <div class="pic">
              <img
                  class="lazy"
                  data-src="<?php echo wp_get_attachment_image_src($answersGreenTariffImage, 'full')[0];?>"
                  alt="<?php echo get_post_meta($answersGreenTariffImage, '_wp_attachment_image_alt', TRUE);?>"
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
          <div class="text-content col-lg-6 offset-lg-1 col-12 offset-0 first-up">
            <h2 class="block-title small-title">
              <div class="icon">
                <img src="<?php echo $answersGreenTariffTitleIcon;?>" alt="" class="svg-pic">
              </div>
              <span><?php echo $answersAboutCompanyBlockTitle;?></span>

            </h2>
            <div class="accordion" id="accordion-green-tariff">
							<?php foreach( $answersGreenTariffQuestionList as $item ): $i++;?>
                <div class="card">
                  <div class="card-header">
                    <a class="collapsed btn" data-bs-toggle="collapse" href="#greenTariffFaq<?php echo $i;?>">
											<?php echo $item['question'];?>
                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <path d="M21.5148 20C21.5148 19.5982 21.3551 19.2127 21.071 18.9285C20.7868 18.6444 20.4014 18.4847 19.9995 18.4847C19.5976 18.4847 19.2122 18.6444 18.9281 18.9285C18.6439 19.2127 18.4842 19.5981 18.4842 20C18.4842 20.4019 18.6439 20.7873 18.9281 21.0715C19.2122 21.3556 19.5977 21.5153 19.9995 21.5153C20.4014 21.5153 20.7868 21.3556 21.071 21.0715C21.3551 20.7873 21.5148 20.4019 21.5148 20Z" fill="#F7FDF8"/>
                        <path d="M21.5149 26.4288C21.5149 26.0269 21.3551 25.6415 21.071 25.3573C20.7868 25.0732 20.4014 24.9134 19.9995 24.9134C19.5977 24.9134 19.2122 25.0732 18.9281 25.3573C18.6439 25.6415 18.4842 26.0269 18.4842 26.4288C18.4842 26.8306 18.6439 27.2161 18.9281 27.5002C19.2122 27.7844 19.5977 27.9441 19.9995 27.9441C20.4014 27.9441 20.7868 27.7844 21.071 27.5002C21.3551 27.2161 21.5149 26.8306 21.5149 26.4288Z" fill="#F7FDF8"/>
                        <path d="M21.5149 32.8575C21.5149 32.4557 21.3551 32.0702 21.071 31.7861C20.7868 31.5019 20.4014 31.3422 19.9995 31.3422C19.5977 31.3422 19.2122 31.5019 18.9281 31.7861C18.6439 32.0702 18.4842 32.4557 18.4842 32.8575C18.4842 33.2594 18.6439 33.6449 18.9281 33.929C19.2122 34.2132 19.5977 34.3729 19.9995 34.3729C20.4014 34.3729 20.7868 34.2132 21.071 33.929C21.3551 33.6449 21.5149 33.2594 21.5149 32.8575Z" fill="#F7FDF8"/>
                        <path d="M27.9436 26.4288C27.9436 26.0269 27.7839 25.6415 27.4998 25.3573C27.2156 25.0732 26.8301 24.9135 26.4283 24.9135C26.0264 24.9135 25.641 25.0732 25.3568 25.3573C25.0727 25.6415 24.913 26.0269 24.913 26.4288C24.913 26.8306 25.0727 27.2161 25.3568 27.5002C25.641 27.7844 26.0264 27.9441 26.4283 27.9441C26.8302 27.9441 27.2156 27.7844 27.4998 27.5002C27.7839 27.2161 27.9436 26.8307 27.9436 26.4288Z" fill="#F7FDF8"/>
                        <path d="M21.5148 13.5713C21.5148 13.1694 21.3551 12.7839 21.071 12.4998C20.7868 12.2156 20.4014 12.0559 19.9995 12.0559C19.5976 12.0559 19.2122 12.2156 18.9281 12.4998C18.6439 12.7839 18.4842 13.1693 18.4842 13.5712C18.4842 13.9731 18.6439 14.3585 18.9281 14.6427C19.2122 14.9268 19.5977 15.0865 19.9996 15.0865C20.4014 15.0865 20.7868 14.9269 21.071 14.6427C21.3552 14.3585 21.5148 13.9731 21.5148 13.5713Z" fill="#F7FDF8"/>
                        <path d="M21.5148 7.14248C21.5148 6.74061 21.3551 6.35514 21.071 6.07099C20.7868 5.78684 20.4014 5.62715 19.9995 5.62715C19.5976 5.62715 19.2122 5.78683 18.9281 6.07099C18.6439 6.35516 18.4842 6.74056 18.4842 7.14243C18.4842 7.5443 18.6439 7.92977 18.9281 8.21392C19.2122 8.49807 19.5977 8.65776 19.9996 8.65776C20.4014 8.65776 20.7868 8.49808 21.071 8.21392C21.3552 7.92975 21.5148 7.54436 21.5148 7.14248Z" fill="#F7FDF8"/>
                        <path d="M24.7292 29.6432C24.7292 29.2413 24.5695 28.8558 24.2854 28.5717C24.0012 28.2875 23.6158 28.1278 23.2139 28.1278C22.812 28.1278 22.4266 28.2875 22.1425 28.5717C21.8583 28.8558 21.6986 29.2413 21.6986 29.6432C21.6986 30.045 21.8583 30.4305 22.1425 30.7146C22.4266 30.9988 22.812 31.1585 23.2139 31.1585C23.6158 31.1585 24.0012 30.9988 24.2854 30.7146C24.5695 30.4305 24.7292 30.045 24.7292 29.6432Z" fill="#F7FDF8"/>
                        <path d="M15.0861 26.4288C15.0861 26.0269 14.9264 25.6415 14.6422 25.3573C14.3581 25.0732 13.9726 24.9134 13.5708 24.9134C13.1689 24.9134 12.7834 25.0732 12.4993 25.3573C12.2151 25.6415 12.0554 26.0269 12.0554 26.4288C12.0554 26.8306 12.2151 27.2161 12.4993 27.5002C12.7834 27.7844 13.1689 27.9441 13.5708 27.9441C13.9726 27.9441 14.3581 27.7844 14.6422 27.5002C14.9264 27.2161 15.0861 26.8306 15.0861 26.4288Z" fill="#F7FDF8"/>
                        <path d="M18.3005 29.6432C18.3005 29.2413 18.1408 28.8558 17.8566 28.5717C17.5725 28.2875 17.187 28.1278 16.7851 28.1278C16.3833 28.1278 15.9978 28.2875 15.7137 28.5717C15.4295 28.8559 15.2698 29.2413 15.2698 29.6432C15.2698 30.045 15.4295 30.4305 15.7137 30.7146C15.9978 30.9988 16.3833 31.1585 16.7851 31.1585C17.187 31.1585 17.5725 30.9988 17.8566 30.7146C18.1408 30.4305 18.3005 30.045 18.3005 29.6432Z" fill="#F7FDF8"/>
                      </svg>
                    </a>
                  </div>
                  <div id="greenTariffFaq<?php echo $i;?>" class="collapse" data-bs-parent="#accordion-green-tariff">
                    <div class="card-body">
											<?php echo wpautop($item['answer']) ;?>
                    </div>
                  </div>
                </div>
							<?php endforeach;?>
            </div>
          </div>
        </div>
      </div>
    </section>
	<?php endif;?>
<?php
	$contactFormTitle = carbon_get_post_meta(get_the_ID(), 'green_system_questions_answers_form_block_title'.green_system_lang_prefix());
	$contactFormText = carbon_get_post_meta(get_the_ID(), 'green_system_questions_answers_form_text'.green_system_lang_prefix());

	if ( $contactFormTitle && $contactFormText ):

		$args = array(
			'title' => $contactFormTitle,
			'text'  => $contactFormText
		)

		?>
		<?php get_template_part('template-parts/block-contact-form','', $args);?>
	<?php endif;?>
<?php get_footer();
