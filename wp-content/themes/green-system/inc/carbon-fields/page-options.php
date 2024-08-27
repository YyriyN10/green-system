<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'green_system_theme_options' );

	function green_system_theme_options() {
		Container::make( 'theme_options', __( 'Theme Options' ) )
		         ->add_tab( __( 'Когнтакти' ), array(
			         Field::make( 'text', 'green_system_address'.green_system_lang_prefix(), 'Адреса офісу' ),
			         Field::make_complex('more_addresses_list'.green_system_lang_prefix(), 'Перелік додаткових адресс')
		              ->add_fields(array(
		              	Field::make_text('address', 'Адреса офісу'),
			              Field::make_text('map_link', 'Згенероване посилання для мапи')
			                ->set_attribute('type', 'url')
		              )),
			         Field::make( 'text', 'green_system_email', __( 'E-mail' )  )
			              ->set_attribute('type', 'email'),
			         Field::make_complex('green_system_phone_list', 'Номери телефонів')
			            ->add_fields(array(
			            	Field::make_text('phone_number', 'Номер телефону')
				            ->help_text('+38 (067) 612 03 09')
			            )),
			         Field::make( 'text', 'green_system_email_integration', 'Пошта для інтеграції з CRM' )
			              ->set_attribute('type', 'email'),
			         Field::make( 'text', 'green_system_facebook_link', 'Посилання на Facebook' )
			              ->set_attribute('type', 'url'),
			         Field::make( 'text', 'green_system_instagram_link', 'Посилання на Instagram'  )
			              ->set_attribute('type', 'url'),
			         Field::make( 'text', 'green_system_youtube_link', 'Посилання на Youtube'  )
			              ->set_attribute('type', 'url'),
			         Field::make( 'text', 'green_system_linkedin_link', 'Посилання на Linkedin'  )
			              ->set_attribute('type', 'url'),
			         Field::make_text('green_system_work_schedule'.green_system_lang_prefix(), 'Розклад роботи')
			            ->help_text('з 9:00 до 18:00'),
			         Field::make_text('green_system_weekend'.green_system_lang_prefix(), 'Вихідні')
			              ->help_text('сб, нд'),
			         Field::make_text('green_system_contacts_block_title'.green_system_lang_prefix(), 'Заголовок форми на сторінці контактів'),
			         Field::make_text('green_system_contacts_text'.green_system_lang_prefix(), 'Текст заклику у формі на сторінці контактів'),

		         ) )
						->add_tab( __( 'Налаштування' ), array(
							Field::make_image('green_system_logo', 'Логотип')
							     ->set_value_type('url'),
							Field::make_image('green_system_contact_form_pic'.green_system_lang_prefix(), 'Зображення у блок контактної форми')

						) )
						->add_tab( __( 'Редіректи' ), array(
							Field::make_complex('green_system_redirect_list', 'Перелік редіректів')
									->add_fields(array(
										Field::make_text('old_url', 'Стара адреса')
											->set_help_text('Треба вказувати без адреси домену. Наприклад повне посилання https://greensystem.com.ua/catalog/solnecnye-elektrostancii. Треба додати /catalog/solnecnye-elektrostancii'),
										Field::make_text('new_url', 'Нова адреса')
										   ->set_help_text('Треба вказувати повну адресу. Наприклад повне посилання https://greensystem.com.ua/catalog/solnecnye-elektrostancii'),
									))

						) );


	}

	add_action('carbon_fields_register_fields', 'green_system_solar_decision_tax_fields');

	function green_system_solar_decision_tax_fields(){
		Container::make( 'term_meta', __('Посилання на сторінку рішення') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'term_taxonomy', '=', 'solar_decision_tax' );
		         } )

		         ->add_fields( array(
		         	  Field::make_text('green_system_olar_decision_tax_link'.green_system_lang_prefix(), 'Посилання на сторінку')
										->set_attribute('type', 'url')

		         ));


	}