<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
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
          <?php if( is_home() ):?>
              <div class="logo"></div>
          <?php else:?>
            <a href="<?php echo get_home_url('/');?>" class="logo"></a>
          <?php endif;?>
          <nav class="header-navigation">
	          <?php
		          wp_nav_menu(
			          array(
				          'theme_location' => 'menu-1',
				          'menu_id'        => 'primary-menu',
                  'container' => false,
                  'menu_class' => 'main-menu'
			          )
		          );
	          ?>
            <div class="lang-wrapper">
	            <?php
		            $langArgs = array(
			            'show_names' => 1,
			            'display_names_as' => 'name',
			            'show_flags' => 0,
			            'hide_current' => 1
		            );

		            if ( $langArgs ):
			            ?>
                      <ul class="lang-list">
			              <?php
				              pll_the_languages($langArgs);
			              ?>
                      </ul>
		            <?php endif;?>
            </div>
          </nav>
        </div>
      </div>
    </div>
	</header>
  <main>
