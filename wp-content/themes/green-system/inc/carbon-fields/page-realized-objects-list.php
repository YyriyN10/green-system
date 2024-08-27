<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'green_system_realized_objects_page_fields');

	function green_system_realized_objects_page_fields(){
		Container::make( 'post_meta', __('Головний екран') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-realized-objects.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_realized_objects_list_main_screen_title'.green_system_lang_prefix(), 'Головний заголовок'),
			         Field::make_image('green_system_realized_objects_list_main_screen_image'.green_system_lang_prefix(), 'Зображення')
			            ->set_type('image')
			            ->set_value_type('url')
		         ));

		Container::make( 'post_meta', __('Форма зворотнього звʼязку') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-realized-objects.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_realized_objects_list_block_title'.green_system_lang_prefix(), 'Заголовок форми'),
			         Field::make_text('green_system_realized_objects_list_text'.green_system_lang_prefix(), 'Текст заклику у формі'),
			         Field::make_text('green_system_realized_objects_form_kay'.green_system_lang_prefix(), 'Ключ чторнки для інтеграції')
		         ));


	}
