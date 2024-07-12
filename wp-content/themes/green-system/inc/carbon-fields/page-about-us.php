<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'green_system_about_us_page_fields');

	function green_system_about_us_page_fields(){
		Container::make( 'post_meta', __('Головний екран') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-about-us.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_about_us_main_screen_title'.green_system_lang_prefix(), 'Головний заголовок'),
			         Field::make_image('green_system_about_us_main_screen_image'.green_system_lang_prefix(), 'Фонове зображення')
			            ->set_type('image')
			            ->set_value_type('url')
		         ));

		Container::make( 'post_meta', __('Переваги') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-about-us.php' );
		         } )

		         ->add_fields( array(
			         Field::make_complex('green_system_about_us_advantages_list'.green_system_lang_prefix(), 'Перелік переваг')
			          ->add_fields(array(
			          	Field::make_text('name', 'Назва переваги'),
				          Field::make_image('icon', 'Іконка переваги')
				            ->set_type('image')
				            ->set_value_type('url')
			          ))

		         ));

		Container::make( 'post_meta', __('Блок з описом') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-about-us.php' );
		         } )

		         ->add_fields( array(
			         Field::make_complex('green_system_about_us_description_list'.green_system_lang_prefix(), 'Описи')
			              ->add_fields(array(
				              Field::make_text('title', 'Заголовок опису'),
				              Field::make_rich_text('text', 'Текст опису'),
				              Field::make_select('media_type', 'Тип медіа для опису')
			                  ->add_options(array(
			                  	'image' => 'Зображення',
				                  'video' => 'Відео'
			                  )),

				              Field::make_image('image', 'Зображення опису')
				                ->set_type('image')
					              ->set_conditional_logic( array(
						              'relation' => 'AND',
						              array(
							              'field' => 'media_type',
							              'value' => 'image',
							              'compare' => '=',
						              )
					              ) ),

				              Field::make_image('poster', 'Постер до відео')
				                   ->set_type('image')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type',
						                   'value' => 'video',
						                   'compare' => '=',
					                   )
				                   ) ),

				              Field::make_image('video', 'Відео')
				                   ->set_type('video')
					                 ->set_value_type('url')
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'media_type',
						                   'value' => 'video',
						                   'compare' => '=',
					                   )
				                   ) ),

			              ))

		         ));

		Container::make( 'post_meta', __('Форма зворотнього звʼязку') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-about-us.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_about_us_form_block_title'.green_system_lang_prefix(), 'Заголовок форми'),
			         Field::make_text('green_system_about_us_form_text'.green_system_lang_prefix(), 'Текст заклику у формі'),
		         ));


	}
