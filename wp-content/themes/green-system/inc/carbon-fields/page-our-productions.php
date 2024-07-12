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
			          ->set_type('image')
			          ->set_value_type('url'),
			         Field::make_complex('green_system_our_productions_main_screen_advantages_list'.green_system_lang_prefix(), 'Перелік переваг')
			          ->add_fields(array(
			          	Field::make_text('text', 'Текст переваги'),
				          Field::make_image('icon', 'Іконка переваги')
				            ->set_type('image')
				            ->set_value_type('url')
			          ))
		         ));

		Container::make( 'post_meta', __('Про виробництво') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-our-productions.php' );
		         } )

		         ->add_fields( array(
			         Field::make_complex('green_system_our_productions_about_production_list'.green_system_lang_prefix(), 'Перелік описів')
			              ->add_fields(array(
				              Field::make_text('title', 'Заголовок'),
				              Field::make_rich_text('text', 'Текст'),
			              )),
			         Field::make_complex('green_system_our_productions_about_production_gallery'.green_system_lang_prefix(), 'Галерея зображень')
			              ->add_fields(array(
				              Field::make_image('image', 'Зображення')
				                ->set_type('image')
			              )),

		         ));

		Container::make( 'post_meta', __('Питання та відповіді') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-our-productions.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_our_productions_faq_title'.green_system_lang_prefix(), 'Головний заголовок'),
			         Field::make_complex('green_system_our_productions_faq_list'.green_system_lang_prefix(), 'Перелік питань')
			              ->add_fields(array(
				              Field::make_text('question', 'Питання'),
				              Field::make_rich_text('answer', 'Відповідь')
			              )),

		         ));

		Container::make( 'post_meta', __('Форма зворотнього звʼязку') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-our-productions.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_our_productions_form_block_title'.green_system_lang_prefix(), 'Заголовок форми'),
			         Field::make_text('green_system_our_productions_form_text'.green_system_lang_prefix(), 'Текст заклику у формі'),
		         ));


	}
