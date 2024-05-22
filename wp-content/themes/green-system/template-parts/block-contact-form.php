<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	$contactFormPic = carbon_get_theme_option('green_system_contact_form_pic');

	?>

<!-- Форма зворотнього звʼязку -->
<section class="contact-form indent-top-big indent-bottom-big">
  <div class="container">
    <div class="row">
      <div class="content col-xxl-8 col-xl-10 col-12 offset-xxl-2 offset-xl-1 offset-0">
        <div class="inner">
	        <h2 class="block-title small-title small-margin"><?php echo esc_html( pll__( 'Бажаєте замовити СЕС чи отримати консультацію фахівця?' ) ); ?></h2>
	        <p><?php echo esc_html( pll__( 'Залиште заявку і наш менеджер зв’яжеться з вами' ) ); ?></p>
	        <form method="post" >
		        <div class="form-fields">
			        <input type="hidden" name="action" value="form_integration">
			        <input type="hidden" name="site_url" value="<?php echo get_home_url('/');?>">
			        <input type="hidden" name="site_lang" value="<?php echo get_bloginfo('language');?>">
			        <input type="hidden" name="page_name" value="<?php the_title();?>">
			        <div class="form-group">
				        <input type="text" name="name" class="form-control" placeholder="<?php echo esc_html( pll__( 'Ваше ім’я' ) ); ?>" required >
			        </div>
			        <div class="form-group">
				        <input type="tel" name="phone" class="form-control" placeholder="<?php echo esc_html( pll__( 'Контактний номер телефону' ) ); ?>" required >
			        </div>
			        <div class="form-group">
				        <input type="email" name="email" class="form-control" placeholder="<?php echo esc_html( pll__( 'Ваш email' ) ); ?>" required >
			        </div>
		        </div>

		        <div class="form-image">
			        <img
                class="lazy"
				        data-src="<?php echo wp_get_attachment_image_src( $contactFormPic, 'full')[0];?>"
				        alt="<?php echo get_post_meta($contactFormPic, '_wp_attachment_image_alt', TRUE);?>"
			        >
		        </div>


		        <button type="submit" class="button"><?php echo esc_html( pll__( 'Надіслати заявку' ) ); ?></button>
	        </form>

        </div>
      </div>
    </div>
  </div>
</section>
