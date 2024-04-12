<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'green_system_home_page_fields');

	function green_system_home_page_fields(){
		Container::make( 'post_meta', __('Головний екран') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_home_main_screen_title'.green_system_lang_prefix(), 'Головний заголовок'),
			         Field::make_text('green_system_home_main_screen_subtitle'.green_system_lang_prefix(), 'Підзаголовок'),
			         Field::make_image('green_system_home_main_screen_image'.green_system_lang_prefix(), 'Зображення')
		         ));

		Container::make( 'post_meta', __('Переваги') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make_complex('green_system_home_advantages_list'.green_system_lang_prefix(), 'Перелік переваг')
			            ->add_fields(array(
			            	Field::make_image('icon', 'Іконка')
								->set_value_type('url'),
				            Field::make_text('text', 'Текст')

			            ))

		         ));

		Container::make( 'post_meta', __('Про нас') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
		         	Field::make_text('green_system_home_about_us_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_complex('green_system_home_about_us_list'.green_system_lang_prefix(), 'Перелік переваг')
			              ->add_fields(array(
				              Field::make_image('icon', 'Іконка')
				                   ->set_value_type('url'),
				              Field::make_text('text', 'Текст')

			              ))

		         ));
	}