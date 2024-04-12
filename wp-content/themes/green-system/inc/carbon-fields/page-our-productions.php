<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'green_system_our_productions_page_fields');

	function green_system_our_productions_page_fields(){
		Container::make( 'post_meta', __('Головний екран') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-our-productions.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_our_productions_main_screen_title'.green_system_lang_prefix(), 'Головний заголовок'),
			         Field::make_text('green_system_our_productions_main_screen_subtitle'.green_system_lang_prefix(), 'Підзаголовок'),
			         Field::make_image('green_system_our_productions_main_screen_image'.green_system_lang_prefix(), 'Зображення')
		         ));


	}
