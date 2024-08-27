<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'green_system_guarantees_page_fields');

	function green_system_guarantees_page_fields(){
		Container::make( 'post_meta', __('Головний екран') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-guarantees.php' );
		         } )

		         ->add_fields( array(
			         Field::make_textarea('green_system_guarantees_main_screen_top_text'.green_system_lang_prefix(), 'Головний текст пояснення')
									->set_rows(3),
			         Field::make_text('green_system_guarantees_main_screen_quote'.green_system_lang_prefix(), 'Цитата'),
			         Field::make_image('green_system_guarantees_main_screen_quote_icon'.green_system_lang_prefix(), 'Іконка цитати')
		              ->set_type('image')
		              ->Set_value_type('url'),
			         Field::make_image('green_system_guarantees_main_screen_image'.green_system_lang_prefix(), 'Зображення')
				         ->set_type('image'),
			         Field::make_text('green_system_guarantees_quality_main_screen_title'.green_system_lang_prefix(), 'Заголовок якості роботи'),
			         Field::make_complex('green_system_guarantees_quality_main_screen_list'.green_system_lang_prefix(), 'Перелік чим забезпечина якость роботи')
			            ->add_fields(array(
			            	Field::make_textarea('text', 'Текст')
				                ->set_rows(4)
			            ))
		         ));

		Container::make( 'post_meta', __('Гарантійні зобовʼязання') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-guarantees.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_guarantees_obligation_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_rich_text('green_system_guarantees_obligation_text'.green_system_lang_prefix(), 'Основний текст'),
			         Field::make_rich_text('green_system_guarantees_obligation_call_to_text'.green_system_lang_prefix(), 'Текст призиву звиртатись у сервісний цнтр')
		         ));

		Container::make( 'post_meta', __('Гарантійний ремонт') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-guarantees.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_guarantees_repair_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_rich_text('green_system_guarantees_repair_text'.green_system_lang_prefix(), 'Основний текст'),
			         Field::make_text('green_system_guarantees_repair_talon_title'.green_system_lang_prefix(), 'Загоговок блоку з переліком того що має бути в гарантійному талоні'),
			         Field::make_complex('green_system_guarantees_repair_talon_list'.green_system_lang_prefix(), 'Перелік вмісту талону')
			            ->add_fields(array(
			            	Field::make_text('text', 'Текст')
			            )),
			         Field::make_rich_text('green_system_guarantees_repair_talon_more'.green_system_lang_prefix(), 'Що ще має бути в талоні')

		         ));

		Container::make( 'post_meta', __('Форма зворотнього звʼязку') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-guarantees.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_guarantees_block_title'.green_system_lang_prefix(), 'Заголовок форми'),
			         Field::make_text('green_system_guarantees_text'.green_system_lang_prefix(), 'Текст заклику у формі'),
			         Field::make_text('green_system_guarantees_form_kay'.green_system_lang_prefix(), 'Ключ чторнки для інтеграції')
		         ));


	}
