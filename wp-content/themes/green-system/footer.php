<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package green-system
 */

?>
</main>
	<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="content col-12">
          <div class="site-footer__contacts">
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
                <p class="name"><?php echo esc_html( pll__( 'Працюємо' ) ); ?>:</p>
                <p class="time"><?php echo $workingTime;?></p>
              </div>
            <?php endif;?>
	          <?php if( $weekend ):?>
                <div class="weekend">
                  <p class="name"><?php echo esc_html( pll__( 'Вихідний' ) ); ?>:</p>
                  <p class="time"><?php echo $weekend;?></p>
                </div>
	          <?php endif;?>
          </div>
          <?php get_template_part('template-parts/social');?>
	        <?php
		        wp_nav_menu(
			        array(
				        'theme_location' => 'menu-3',
				        'menu_id'        => 'footer-secondary',
				        'container' => false,
				        'menu_class' => 'footer-secondary-menu'
			        )
		        );
	        ?>
	        <?php
		        wp_nav_menu(
			        array(
				        'theme_location' => 'menu-2',
				        'menu_id'        => 'footer-main',
				        'container' => false,
				        'menu_class' => 'footer-main-menu'
			        )
		        );
	        ?>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <p class="copy"></p>
          <p class="dev"><a href="https://smmstudio.com/" rel="nofollow" target="_blank">smmstudio</a></p>
        </div>
      </div>
    </div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
