<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'green_system_questions_answers_page_fields');

	function green_system_questions_answers_page_fields(){
		Container::make( 'post_meta', __('Про компанію') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-questions-answers.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_questions_answers_about_company_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_image('green_system_questions_answers_about_company_title_icon'.green_system_lang_prefix(), 'Іконка заголовку')
									->set_type('image')
									->set_value_type('url'),
			         Field::make_image('green_system_questions_answers_about_company_image'.green_system_lang_prefix(), 'Зображення блоку'),
			         Field::make_complex('green_system_questions_answers_about_company_question_list'.green_system_lang_prefix(), 'Перелік питань')
			            ->add_fields(array(
			            	Field::make_text('question', 'Питання'),
				            Field::make_rich_text('answer', 'Відповідь')
			            ))
		         ));

		Container::make( 'post_meta', __('Сонячні електростанції') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-questions-answers.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_questions_answers_solar_power_plants_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_image('green_system_questions_answers_solar_power_plants_title_icon'.green_system_lang_prefix(), 'Іконка заголовку')
			              ->set_type('image')
			              ->set_value_type('url'),
			         Field::make_image('green_system_questions_answers_solar_power_plants_image'.green_system_lang_prefix(), 'Зображення блоку'),
			         Field::make_complex('green_system_questions_answers_solar_power_plants_question_list'.green_system_lang_prefix(), 'Перелік питань')
			              ->add_fields(array(
				              Field::make_text('question', 'Питання'),
				              Field::make_rich_text('answer', 'Відповідь')
			              ))
		         ));

		Container::make( 'post_meta', __('Зелений тариф') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-questions-answers.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_questions_answers_green_tariff_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_image('green_system_questions_answers_green_tariff_title_icon'.green_system_lang_prefix(), 'Іконка заголовку')
			              ->set_type('image')
			              ->set_value_type('url'),
			         Field::make_image('green_system_questions_answers_green_tariff_image'.green_system_lang_prefix(), 'Зображення блоку'),
			         Field::make_complex('green_system_questions_answers_green_tariff_question_list'.green_system_lang_prefix(), 'Перелік питань')
			              ->add_fields(array(
				              Field::make_text('question', 'Питання'),
				              Field::make_rich_text('answer', 'Відповідь')
			              ))
		         ));

		Container::make( 'post_meta', __('Форма зворотнього звʼязку') )
		     ->where( function( $homeFields ) {
			     $homeFields->where( 'post_type', '=', 'page' );
			     $homeFields->where( 'post_template', '=', 'template-questions-answers.php' );
		     } )

		     ->add_fields( array(
			     Field::make_text('green_system_questions_answers_form_block_title'.green_system_lang_prefix(), 'Заголовок форми'),
			     Field::make_text('green_system_questions_answers_form_text'.green_system_lang_prefix(), 'Текст заклику у формі'),
		     ));


	}
