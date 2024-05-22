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

	global $logoPic;
?>
</main>
	<footer class="site-footer indent-top-small indent-bottom-small">
    <div class="container">
      <div class="row">
        <div class="site-footer__contacts col-xl-4 col-12">
          <div class="logo">
            <img class="lazy" data-src="<?php echo $logoPic;?>" alt="">
          </div>
          <div class="info">
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
          </div>

	        <?php if( $workingTime ):?>
              <div class="working-time">
                <h3 class="title"><?php echo esc_html( pll__( 'Працюємо' ) ); ?>:</h3>
                <p class="time"><?php echo $workingTime;?></p>
	              <?php if( $weekend ):?>
                  <p class="weekend"><?php echo esc_html( pll__( 'Вихідний' ) ); ?>: <?php echo $weekend;?></p>
	              <?php endif;?>
              </div>
	        <?php endif;?>

        </div>
	      <?php
		      wp_nav_menu(
			      array(
				      'theme_location' => 'menu-3',
				      'menu_id'        => 'footer-secondary',
				      'container' => false,
				      'menu_class' => 'footer-secondary-menu menu col-xl-4 col-sm-6'
			      )
		      );
	      ?>
	      <?php
		      wp_nav_menu(
			      array(
				      'theme_location' => 'menu-2',
				      'menu_id'        => 'footer-main',
				      'container' => false,
				      'menu_class' => 'footer-main-menu menu col-xl-4 col-sm-6'
			      )
		      );
	      ?>
        <div class="social-copy-wrapper col-xl-8 offset-xl-4 offset-0 col-12">
          <?php get_template_part('template-parts/social');?>
          <div class="copy-wrapper">
            <p class="copy">© Green System. <?php echo esc_html( pll__( 'Всі права захищені' ) ); ?></p>
            <p class="dev">
                <?php echo esc_html( pll__( 'Розроблено в' ) ); ?>
              <a href="https://smmstudio.com/" rel="nofollow" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="121" height="16" viewBox="0 0 121 16" fill="none">
                  <path d="M28.742 7.37757C26.9853 6.95827 26.5698 6.63428 26.5698 5.92911C26.5698 5.30017 27.1175 4.80464 28.062 4.80464C28.8931 4.80464 29.7242 5.12864 30.5364 5.75758L31.4053 4.53782C30.4797 3.79453 29.422 3.37524 28.0809 3.37524C26.2675 3.37524 24.9642 4.46159 24.9642 6.04346C24.9642 7.75874 26.0598 8.34956 28.0053 8.80697C29.7053 9.22626 30.0642 9.56931 30.0642 10.2364C30.0642 10.9606 29.4409 11.418 28.4397 11.418C27.3064 11.418 26.4375 10.9797 25.5498 10.2173L24.5864 11.3799C25.682 12.3709 27.0042 12.8474 28.402 12.8474C30.3286 12.8474 31.6508 11.8182 31.6508 10.103C31.6697 8.54014 30.6686 7.85403 28.742 7.37757Z" fill="#212BC3"/>
                  <path d="M42.6456 3.59497L39.869 7.94035L37.0923 3.59497H35.3923V12.8003H36.9601V6.22507L39.8123 10.5323H39.869L42.759 6.18695V12.8003H44.3645V3.59497H42.6456Z" fill="#212BC3"/>
                  <path d="M55.3779 3.59497L52.6013 7.94035L49.8246 3.59497H48.1057V12.8003H49.6924V6.22507L52.5446 10.5323H52.6013L55.4724 6.18695V12.8003H57.0779V3.59497H55.3779Z" fill="#212BC3"/>
                  <path d="M64.9564 7.37781C63.1997 6.95852 62.7841 6.63452 62.7841 5.92935C62.7841 5.30042 63.3319 4.80489 64.2764 4.80489C65.1075 4.80489 65.9197 5.12889 66.7508 5.75782L67.6197 4.53807C66.6942 3.79478 65.6364 3.37549 64.2953 3.37549C62.4819 3.37549 61.1786 4.46183 61.1786 6.04371C61.1786 7.75899 62.2741 8.34981 64.2197 8.80722C65.9008 9.22651 66.2786 9.56956 66.2786 10.2366C66.2786 10.9608 65.6553 11.4183 64.6541 11.4183C63.5208 11.4183 62.6519 10.9799 61.783 10.2176L60.8197 11.3801C61.9153 12.3712 63.2375 12.8477 64.6353 12.8477C66.5619 12.8477 67.903 11.8185 67.903 10.1032C67.8842 8.54039 66.883 7.85428 64.9564 7.37781Z" fill="#212BC3"/>
                  <path d="M70.8181 3.59497V5.10061H73.7081V12.8194H75.3325V5.10061H78.2225V3.59497H70.8181Z" fill="#212BC3"/>
                  <path d="M87.7698 3.59497V8.89329C87.7698 10.5895 86.9009 11.4662 85.4654 11.4662C84.0299 11.4662 83.161 10.5514 83.161 8.83611V3.59497H81.5554V8.89329C81.5554 11.5615 83.0665 12.9528 85.4465 12.9528C87.8454 12.9528 89.3754 11.5615 89.3754 8.81705V3.59497H87.7698Z" fill="#212BC3"/>
                  <path d="M96.5172 3.59497H93.1172V12.8003H96.5172C99.3883 12.8003 101.372 10.7801 101.372 8.18811C101.372 5.57707 99.3883 3.59497 96.5172 3.59497ZM96.5172 11.3328H94.7227V5.06249H96.5172C98.4438 5.06249 99.6905 6.37754 99.6905 8.18811C99.6905 10.0177 98.4438 11.3328 96.5172 11.3328Z" fill="#212BC3"/>
                  <path d="M105.112 3.59497V12.8003H106.718V3.59497H105.112Z" fill="#212BC3"/>
                  <path d="M115.239 3.37549C112.425 3.37549 110.46 5.54818 110.46 8.14016C110.46 10.7512 112.425 12.9048 115.22 12.9048C118.035 12.9048 120.018 10.7321 120.018 8.14016C119.999 5.51006 118.035 3.37549 115.239 3.37549ZM115.239 11.3992C113.426 11.3992 112.122 9.91262 112.122 8.1211C112.122 6.31053 113.388 4.84301 115.201 4.84301C117.015 4.84301 118.299 6.32958 118.299 8.1211C118.299 9.95073 117.033 11.3992 115.239 11.3992Z" fill="#212BC3"/>
                  <path d="M17.411 7.99338C17.411 8.72006 17.3605 9.44673 17.2721 10.1479L0 8.41409V7.57268L17.2847 5.83887C17.3731 6.55279 17.411 7.26671 17.411 7.99338Z" fill="#212BC3"/>
                  <path d="M16.9688 3.97757L16.9183 3.99032L0 6.76952V5.90261L15.2884 0.0892403L15.5158 0C16.1475 1.24936 16.6403 2.58797 16.9688 3.97757Z" fill="#212BC3"/>
                  <path d="M16.9562 12.0482C16.6277 13.4378 16.1349 14.7636 15.5158 16.0002L15.2884 15.911L0 10.0976V9.23071L16.9056 12.0099V12.0354L16.9562 12.0482Z" fill="#212BC3"/>
                </svg>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
	</footer>
</div>

<?php get_template_part('template-parts/popups');?>

<?php wp_footer(); ?>

</body>
</html>
