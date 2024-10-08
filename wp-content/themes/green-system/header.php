<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	$redirectList = carbon_get_theme_option('green_system_redirect_list');
	if ( $redirectList ){
	  foreach ( $redirectList as $redirect ){
	    if ( $_SERVER['REQUEST_URI'] == ''.$redirect['old_url'].'' ){
	      header('Location:'.$redirect['new_url'].'', 301);
	      exit();
      }
    }
  }


/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package green-system
 */

  global $logoPic;
  $logoPic = carbon_get_theme_option('green_system_logo');
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo THEME_PATH; ?>/assets/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo THEME_PATH; ?>/assets/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo THEME_PATH; ?>/assets/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo THEME_PATH; ?>/assets/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo THEME_PATH; ?>/assets/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo THEME_PATH; ?>/assets/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo THEME_PATH; ?>/assets/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo THEME_PATH; ?>/assets/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo THEME_PATH; ?>/assets/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo THEME_PATH; ?>/assets/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo THEME_PATH; ?>/assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo THEME_PATH; ?>/assets/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo THEME_PATH; ?>/assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo THEME_PATH; ?>/assets/img/favicon/manifest.json">

  <meta name="msapplication-TileColor" content="#262961">

  <meta name="theme-color" content="#262961">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
  <header class="site-header">
    <div class="container">
      <div class="row">
        <div class="content col-12">
	        <?php if( is_front_page() ):?>
              <div class="logo main-logo">
                <!--<img src="<?php /*echo $logoPic;*/?>" alt="" class="svg-pic">-->
                <img src="<?php echo THEME_PATH;?>/assets/img/logo-light.png" alt="">
              </div>
	        <?php else:?>
              <a href="<?php echo get_home_url('/');?>" class="logo main-logo">
                <!--<img src="<?php /*echo $logoPic;*/?>" alt="" class="svg-pic">-->
                <img src="<?php echo THEME_PATH;?>/assets/img/logo-light.png" alt="">
              </a>
	        <?php endif;?>
	        <?php
		        wp_nav_menu(
			        array(
				        'theme_location' => 'menu-1',
				        'menu_id'        => 'primary-visible',
				        'container' => false,
				        'menu_class' => 'main-visible menu'
			        )
		        );
	        ?>
            <?php if( has_nav_menu( 'menu-1' ) ):?>
              <button class="menu-btn" id="menu-btn">
                <span></span><span></span><span></span>
              </button>
            <?php else:?>
              <button class="menu-btn only" id="menu-btn">
                <span></span><span></span><span></span>
              </button>
            <?php endif;?>
        </div>
      </div>
    </div>
  </header>
  <nav class="header-navigation">
    <div class="info">
	    <?php if( is_front_page() ):?>
          <div class="logo">
            <!--<img src="<?php /*echo $logoPic;*/?>" alt="" class="svg-pic">-->
            <img src="<?php echo THEME_PATH;?>/assets/img/logo-light.png" alt="">
          </div>
	    <?php else:?>
          <a href="<?php echo get_home_url('/');?>" class="logo">
            <!--<img src="<?php /*echo $logoPic;*/?>" alt="" class="svg-pic">-->
            <img src="<?php echo THEME_PATH;?>/assets/img/logo-light.png" alt="">
          </a>
	    <?php endif;?>
	    <?php
/*		    $langArgs = array(
			    'show_names' => 1,
			    'display_names_as' => 'name',
			    'show_flags' => 0,
			    'hide_current' => 0
		    );

		    if ( $langArgs ):
			    */?><!--
              <ul class="lang-list">
			      <?php
/*				      pll_the_languages($langArgs);
			      */?>
              </ul>
		    --><?php /*endif;*/?>

      <button class="menu-btn close" id="menu-btn-close">
        <span></span><span></span><span></span>
      </button>

    </div>

    <hr>
	  <?php
		  wp_nav_menu(
			  array(
				  'theme_location' => 'menu-4',
				  'menu_id'        => 'primary-menu',
				  'container' => false,
				  'menu_class' => 'main-menu menu'
			  )
		  );
	  ?>

    <?php get_template_part('template-parts/social');?>

	  <?php
		  wp_nav_menu(
			  array(
				  'theme_location' => 'menu-2',
				  'menu_id'        => 'primary-second',
				  'container' => false,
				  'menu_class' => 'main-menu menu secondary-menu'
			  )
		  );
	  ?>


  </nav>
	<!--<header class="site-header">
    <div class="container">
      <div class="row">
        <div class="content col-12">
          <div>
            <button class="menu-btn">
              <span></span><span></span><span></span>
	            <?php /*echo esc_html( pll__( 'меню' ) ); */?>
            </button>
            <div class="lang-wrapper">
	            <?php
/*		            $langArgs = array(
			            'show_names' => 1,
			            'display_names_as' => 'name',
			            'show_flags' => 0,
			            'hide_current' => 0
		            );

		            if ( $langArgs ):
			            */?>
                      <ul class="lang-list">
				          <?php
/*					          pll_the_languages($langArgs);
				          */?>
                      </ul>
		            <?php /*endif;*/?>
            </div>
          </div>

          <p class="copy">©Green System</p>
          <?php /*if( is_home() ):*/?>
              <div class="logo"></div>
          <?php /*else:*/?>
            <a href="<?php /*echo get_home_url('/');*/?>" class="logo"></a>
          <?php /*endif;*/?>
          <nav class="header-navigation">
	          <?php
/*		          wp_nav_menu(
			          array(
				          'theme_location' => 'menu-1',
				          'menu_id'        => 'primary-menu',
                  'container' => false,
                  'menu_class' => 'main-menu menu'
			          )
		          );
	          */?>

          </nav>
        </div>
      </div>
    </div>
	</header>-->
  <main>
