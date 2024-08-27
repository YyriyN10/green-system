<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'green_system_service_page_fields');

	function green_system_service_page_fields(){
		Container::make( 'post_meta', __('Що отримуєте якщо будуєте з нами') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-service.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_service_what_you_get_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_complex('green_system_service_what_you_get_list'.green_system_lang_prefix(), 'Перелік того що отримуєте')
									->add_fields(array(
										Field::make_image('icon', 'Іконка')
												->set_type('image')
												->set_value_type('url'),
										Field::make_text('text', 'Текст')
									)),
			         Field::make_image('green_system_service_what_you_get_image'.green_system_lang_prefix(), 'Зображення')
			            ->set_type('image')
		         ));

		Container::make( 'post_meta', __('Власний сервісний центр ') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-service.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_service_own_center_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_rich_text('green_system_service_own_center_text'.green_system_lang_prefix(), 'Текст опису'),
			         Field::make_image('green_system_service_own_center_image'.green_system_lang_prefix(), 'Зображення')
			              ->set_type('image')
		         ));

		Container::make( 'post_meta', __('Форма зворотнього звʼязку') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-service.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_service_form_block_title'.green_system_lang_prefix(), 'Заголовок форми'),
			         Field::make_text('green_system_service_form_text'.green_system_lang_prefix(), 'Текст заклику у формі'),
			         Field::make_text('green_system_service_form_kay'.green_system_lang_prefix(), 'Ключ чторнки для інтеграції')
		         ));


	}
