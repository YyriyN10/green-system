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

			pll_register_string(
				'green_system_dev',
				'Розроблено в',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_copy',
				'Всі права захищені',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_our_project_title',
				'Реалізовані об’єкти',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_our_project_go_to',
				'Ознайомитись',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_our_project_more',
				'Побачити більше',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_menu_text',
				'меню',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_btn_more',
				'Дізнатись більше',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_reviews_bl_title',
				'Відгуки про нашу співпрацю',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_price_text',
				'Вартість',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_complete_title',
				'Комплектація',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_key_cost',
				'Вартість під ключ',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_more_cost',
				'Окремо сплачується',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_product_faq_title',
				'Поширені питання',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_send_aplication',
				'Залишити заявку',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_complete_list_title',
				'Що використовувалось?',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_complete_works_title',
				'Виконання роботи під ключ',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_other_projects_title',
				'Ознайомтесь з іншими нашими кейсами',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_case_description_title',
				'Особливості проєктування',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_case_go_to_text',
				'Переглянути',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_thx_go_soc_call',
				'Переходьте на наші соц мережі',
				'Переклади',
				false
			);

			pll_register_string(
				'green_system_all_projects_text',
				'Всі',
				'Переклади',
				false
			);




		}
	}