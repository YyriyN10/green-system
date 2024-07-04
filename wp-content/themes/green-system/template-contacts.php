<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон сторінки "Контакти"
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

  <!-- Контакти -->
  <section class="page-contacts indent-bottom-big">
    <div class="container">
      <div class="row">
        <div class="map col-lg-7 col-md-6 col-sm-5" id="map"></div>
        <div class="contacts-info col-lg-5 col-md-6 col-sm-7">
					<?php
						$realAddress = carbon_get_theme_option('green_system_address'.green_system_lang_prefix());
						$siteEmail = carbon_get_theme_option('green_system_email');
						$workingTime = carbon_get_theme_option('green_system_work_schedule'.green_system_lang_prefix());
						$weekend = carbon_get_theme_option('green_system_weekend'.green_system_lang_prefix());

						if ( $realAddress ):
							?>
              <p class="address item"><?php echo $realAddress;?></p>
						<?php endif;?>
					<?php get_template_part('template-parts/phone-list');?>
					<?php if( $siteEmail ):?>
            <a class="email item" href="mailto: <?php echo antispambot($siteEmail, 1);?>"><?php echo antispambot($siteEmail);?></a>
					<?php endif;?>
					<?php if( $workingTime ):?>
            <div class="working-time">
              <h3 class="title"><?php echo esc_html( pll__( 'Працюємо' ) ); ?>:</h3>
              <p class="time"><?php echo $workingTime;?></p>
							<?php if( $weekend ):?>
                <p class="weekend"><?php echo esc_html( pll__( 'Вихідний' ) ); ?>: <?php echo $weekend;?></p>
							<?php endif;?>
            </div>
					<?php endif;?>
          <div class="social">
            <h3 class="title"><?php echo esc_html( pll__( 'Ми у соціальних мережах:' ) ); ?>:</h3>
	          <?php get_template_part('template-parts/social');?>
          </div>

        </div>
      </div>
    </div>
  </section>

<?php
	$contactFormTitle = carbon_get_theme_option( 'green_system_contacts_block_title'.green_system_lang_prefix());
	$contactFormText = carbon_get_theme_option( 'green_system_contacts_text'.green_system_lang_prefix());

	if ( $contactFormTitle && $contactFormText ):

		$args = array(
			'title' => $contactFormTitle,
			'text'  => $contactFormText
		)

		?>
		<?php get_template_part('template-parts/block-contact-form','', $args);?>
	<?php endif;?>

<?php get_footer();
