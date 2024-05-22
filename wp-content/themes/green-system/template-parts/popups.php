<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
	?>


	<!-- The Form Modal -->
<div class="modal form-modal" id="formModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
            <path d="M2 2L20.2857 20.2857M20.2857 2L2 20.2857" stroke="#FCFCFC" stroke-width="3.04762" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	      <?php /*if( $contactFormTitle ):*/?><!--
            <h2 class="block-title small-title"><?php /*echo $contactFormTitle;*/?></h2>
	      <?php /*endif;*/?>
	      <?php /*if( $contactFormText ):*/?>
            <p><?php /*echo $contactFormText;*/?></p>
	      --><?php /*endif;*/?>
        <h2 class="block-title small-title">ГОТОВІ ОБГОВОРИТИ ВЛАСНІ ЦІЛІ ТА ОТРИМАТИ ПРОПОЗИЦІЮ ФАХІВЦІВ? </h2>
        <p>Залиште заявку і наш менеджер зв’яжеться з вами</p>
        <div class="form-wrapper">
          <form method="post" >
            <input type="hidden" name="action" value="form_integration">
            <input type="hidden" name="site_url" value="<?php echo get_home_url('/');?>">
            <input type="hidden" name="site_lang" value="<?php echo get_bloginfo('language');?>">
            <input type="hidden" name="page_name" value="<?php the_title();?>">
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
              <?php
	              $contactFormPic = carbon_get_theme_option('green_system_contact_form_pic'.green_system_lang_prefix());
              ?>
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

<!-- video Modal -->
<div class="modal video-modal" id="videoModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
            <path d="M2 2L20.2857 20.2857M20.2857 2L2 20.2857" stroke="#FCFCFC" stroke-width="3.04762" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <video src="" controls autoplay ></video>
      </div>

    </div>
  </div>
</div>