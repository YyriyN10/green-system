<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'green_system_ess_page_fields');

	function green_system_ess_page_fields(){
		Container::make( 'post_meta', __('Головний екран') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-ess.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_ess_main_screen_title'.green_system_lang_prefix(), 'Головний заголовок'),
			         Field::make_text('green_system_ess_main_screen_subtitle'.green_system_lang_prefix(), 'Підзаголовок'),
			         Field::make_text('green_system_ess_main_screen_slogan'.green_system_lang_prefix(), 'Слоган'),
			         Field::make_image('green_system_ess_main_screen_slogan_icon'.green_system_lang_prefix(), 'Іконка слогану')
				         ->set_type('image')
				         ->set_value_type('url'),
			         Field::make_image('green_system_ess_main_screen_image'.green_system_lang_prefix(), 'Зображення')
				         ->set_type('image')
				         ->set_value_type('url')
		         ));

		Container::make( 'post_meta', __('Необхідність альтернативного енергоживлення') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-ess.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_ess_need_alternative_energy_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_rich_text('green_system_ess_need_alternative_energy_text'.green_system_lang_prefix(), 'текст блоку'),
			         Field::make_image('green_system_ess_need_alternative_energy_image'.green_system_lang_prefix(), 'Зображення блоку')
						->set_type('image'),

		         ));

		Container::make( 'post_meta', __('Енергетична незалежність') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-ess.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_ess_energy_independence_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_complex('green_system_ess_energy_independence_advantages_list'.green_system_lang_prefix(), 'Перелік переваг')
			              ->add_fields(array(
			              	  Field::make_text('name', 'Назва'),
				                Field::make_textarea('text', 'Опис')
														->set_rows(2),
					              Field::make_image('icon', 'Зображення')
					                ->set_type('image')
					                ->set_value_type('url'),

			              ))
		         ));

		Container::make( 'post_meta', __('Блок призиву до дії') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-ess.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_ess_call_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_text('green_system_ess_call_text'.green_system_lang_prefix(), 'Текст призиву'),
			         Field::make_complex('green_system_ess_call_gallery'.green_system_lang_prefix(), 'Галерея зображень')
			            ->add_fields(array(
			            	Field::make_image('image', 'Зображення')
				                ->set_type('image')
			            ))
		         ));

		Container::make( 'post_meta', __('Блок питання відповіді') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-ess.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_ess_faq_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_complex('green_system_ess_question_list'.green_system_lang_prefix(), 'Перелік питань')
			              ->add_fields(array(
			              	  Field::make_text('question', 'Питання'),
				              Field::make_rich_text('answer', 'Відповідь')
			              ))
		         ));

		Container::make( 'post_meta', __('Форма зворотнього звʼязку') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-ess.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_ess_form_block_title'.green_system_lang_prefix(), 'Заголовок форми'),
			         Field::make_text('green_system_ess_form_text'.green_system_lang_prefix(), 'Текст заклику у формі'),
		         ));


	}
