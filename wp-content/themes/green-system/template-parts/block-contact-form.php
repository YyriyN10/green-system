<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	$contactFormPic = carbon_get_theme_option('green_system_contact_form_pic'.green_system_lang_prefix());

	?>
<!-- Форма зворотнього звязку -->
<section class="contact-form indent-top-big indent-bottom-big">
  <div class="container">
    <div class="row">
      <div class="content col-xxl-8 col-xl-10 col-12 offset-xxl-2 offset-xl-1 offset-0">
        <div class="inner">
          <h2 class="block-title small-title"><?php echo $args['title'];?></h2>
          <p><?php echo $args['text'];?></p>

          <div class="form-wrapper">
            <form method="post" >
              <input type="hidden" name="action" value="form_integration">
              <input type="hidden" name="site_url" value="<?php echo get_home_url('/');?>">
              <input type="hidden" name="site_lang" value="<?php echo get_bloginfo('language');?>">
              <input type="hidden" name="page_name" value="<?php the_title();?>">
              <input type="hidden" name="page_link" value="<?php the_permalink();?>">
              <input type="hidden" name="form_description" value="">
              <div class="form-group">
                <label for="input-name"><?php echo esc_html( pll__( 'Ваше ім’я' ) ); ?></label>
                <input type="text" name="name" class="form-control" placeholder="John" id="input-name" required >
              </div>
              <div class="form-group">
                <label for="input-phone"><?php echo esc_html( pll__( 'Контактний номер телефону' ) ); ?></label>
                <input type="tel" name="phone" class="form-control" placeholder="+380" id="input-phone" required >
              </div>
              <div class="form-group">
                <label for="input-email"><?php echo esc_html( pll__( 'Ваш email' ) ); ?></label>
                <input type="email" name="email" class="form-control" placeholder="john.anderson@example.com" id="input-email" required >
              </div>

              <button type="submit" class="button">
				  <?php echo esc_html( pll__( 'Надіслати заявку' ) ); ?>
              </button>
            </form>

            <div class="form-image">
              <img
                  class="lazy"
                  data-src="<?php echo wp_get_attachment_image_src( $contactFormPic, 'full')[0];?>"
                  alt="<?php echo get_post_meta($contactFormPic, '_wp_attachment_image_alt', TRUE);?>"
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
