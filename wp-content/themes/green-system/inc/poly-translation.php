<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	if ( defined( 'POLYLANG_VERSION' ) ) {

		add_action('init', 'green_system_polylang_strings' );

		function green_system_polylang_strings() {

			if( ! function_exists( 'pll_register_string' ) ) {
				return;
			}

			pll_register_string(
				'green_system_working_time_name',
				'Працюємо',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_weekend',
				'Вихідний',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_btn_get_consult',
				'Отримати консультацію',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_form_title',
				'Бажаєте замовити СЕС чи отримати консультацію фахівця?',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_form_subtitle',
				'Залиште заявку і наш менеджер зв’яжеться з вами',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_form_btn_text',
				'Надіслати заявку',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_form_name_placeholder',
				'Ваше ім’я',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_form_phone_placeholder',
				'Контактний номер телефону',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_form_email_placeholder',
				'Ваш email',
				'Переклади',
				false
			);


		}
	}