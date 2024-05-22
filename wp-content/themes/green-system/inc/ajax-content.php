<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	add_action( 'wp_enqueue_scripts', 'green_system_ajax_data', 99 );
	function green_system_ajax_data(){

		wp_localize_script('green-system-js-main', 'green_system_ajax',
			array(
				'url' => admin_url('admin-ajax.php')
			)
		);

	}

	/**
	 * More projects
	 */

	add_action('wp_ajax_more_projects', 'more_projects_callback');
	add_action('wp_ajax_nopriv_more_projects', 'more_projects_callback');

	function more_projects_callback(){

		$catId = $_POST['catId'];
		$currentProjectId = $_POST['currentProjectId'];

		$moreProjectsArgs = array(
			'tax_query' => array(
				array(
					'taxonomy' => 'solar_types_tax',
					'field' => 'id',
					'lang' => false,
					'suppress_filters' => false,
					'terms' => $catId

				)
			),
			'post_type' => 'realized_objects',
			'orderby' 	 => 'date',
	    'post_status'  => 'publish',
			'suppress_filters' => false,
			'lang' => false,
			'offset' => 4,
      'post__not_in' => array($currentProjectId),
		);

		$moreProjectsList = new WP_Query( $moreProjectsArgs  );

		if ( $moreProjectsList->have_posts() ) :?>

			<?php	while ( $moreProjectsList->have_posts() ) : $moreProjectsList->the_post(); ?>

        <a href="<?php the_permalink();?>" class="projects-item col-lg-3 col-sm-6 col-6">
                       <span class="inner">
                         <span class="projects-item__preview">
                           <img
                               src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
                               alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);?>"
                           >
                           <span class="projects-item__more">
                             <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M20 6.04275C18.9093 6.04275 18 6.9099 18 8.00061V8.04303C18 9.12384 18.8762 10 19.957 10H20.043C21.1238 10 22 9.1238 22 8.04295V8.00069C22 6.90994 21.0907 6.04275 20 6.04275Z" fill="#F7FDF8"/>
  <path d="M22 15.9826C22 14.9142 21.173 14.004 20.1046 14.0002C20.0698 14.0001 20.0349 14 20 14C19.9651 14 19.9302 14.0001 19.8954 14.0002C18.827 14.004 18 14.9142 18 15.9826C18 17.0871 18.8954 18 20 18C21.1046 18 22 17.0871 22 15.9826Z" fill="#F7FDF8"/>
  <path d="M22 23.9826C22 22.9142 21.173 22.004 20.1046 22.0002C20.0698 22.0001 20.0349 22 20 22C19.9651 22 19.9302 22.0001 19.8954 22.0002C18.827 22.004 18 22.9142 18 23.9826C18 25.0871 18.8954 26 20 26C21.1046 26 22 25.0871 22 23.9826Z" fill="#F7FDF8"/>
  <path d="M20 30.0427C18.9093 30.0427 18 30.9099 18 32.0006V32.043C18 33.1238 18.8762 34 19.957 34H20.043C21.1238 34 22 33.1238 22 32.043V32.0007C22 30.9099 21.0907 30.0427 20 30.0427Z" fill="#F7FDF8"/>
  <path d="M33.9573 20C33.9573 18.9093 33.0901 18 31.9994 18L31.957 18C30.8762 18 30 18.8762 30 19.957L30 20.043C30 21.1238 30.8762 22 31.957 22L31.9993 22C33.0901 22 33.9573 21.0907 33.9573 20Z" fill="#F7FDF8"/>
  <path d="M24.0174 22C25.0858 22 25.996 21.173 25.9998 20.1046C25.9999 20.0698 26 20.0349 26 20C26 19.9651 25.9999 19.9302 25.9998 19.8954C25.996 18.827 25.0858 18 24.0174 18C22.9129 18 22 18.8954 22 20C22 21.1046 22.9129 22 24.0174 22Z" fill="#F7FDF8"/>
  <path d="M16.0174 22C17.0858 22 17.996 21.173 17.9998 20.1046C17.9999 20.0698 18 20.0349 18 20C18 19.9651 17.9999 19.9302 17.9998 19.8954C17.996 18.827 17.0858 18 16.0174 18C14.9129 18 14 18.8954 14 20C14 21.1046 14.9129 22 16.0174 22Z" fill="#F7FDF8"/>
  <path d="M9.95725 20C9.95725 18.9093 9.0901 18 7.99939 18L7.95697 18C6.87616 18 6 18.8762 6 19.957L6 20.043C6 21.1238 6.8762 22 7.95705 22L7.99931 22C9.09006 22 9.95725 21.0907 9.95725 20Z" fill="#F7FDF8"/>
  <path d="M28.0174 15C29.0858 15 29.996 14.173 29.9998 13.1046C29.9999 13.0698 30 13.0349 30 13C30 12.9651 29.9999 12.9302 29.9998 12.8954C29.996 11.827 29.0858 11 28.0174 11C26.9129 11 26 11.8954 26 13C26 14.1046 26.9129 15 28.0174 15Z" fill="#F7FDF8"/>
  <path d="M28.0174 30C29.0858 30 29.996 29.173 29.9998 28.1046C29.9999 28.0698 30 28.0349 30 28C30 27.9651 29.9999 27.9302 29.9998 27.8954C29.996 26.827 29.0858 26 28.0174 26C26.9129 26 26 26.8954 26 28C26 29.1046 26.9129 30 28.0174 30Z" fill="#F7FDF8"/>
  <path d="M12.0174 15C13.0858 15 13.996 14.173 13.9998 13.1046C13.9999 13.0698 14 13.0349 14 13C14 12.9651 13.9999 12.9302 13.9998 12.8954C13.996 11.827 13.0858 11 12.0174 11C10.9129 11 10 11.8954 10 13C10 14.1046 10.9129 15 12.0174 15Z" fill="#F7FDF8"/>
  <path d="M12.0174 30C13.0858 30 13.996 29.173 13.9998 28.1046C13.9999 28.0698 14 28.0349 14 28C14 27.9651 13.9999 27.9302 13.9998 27.8954C13.996 26.827 13.0858 26 12.0174 26C10.9129 26 10 26.8954 10 28C10 29.1046 10.9129 30 12.0174 30Z" fill="#F7FDF8"/>
</svg>
                             <span class="text"><?php echo esc_html( pll__( 'Переглянути' ) ); ?></span>
                           </span>
                         </span>
                         <span class="projects-item__info">
                           <span class="projects-item__name"><?php the_title();?></span>
                           <span class="projects-item__location">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M10 18.8334C10 18.8334 16.25 13.8334 16.25 8.41675C16.25 4.96508 13.4517 2.16675 10 2.16675C6.54833 2.16675 3.75 4.96508 3.75 8.41675C3.75 13.8334 10 18.8334 10 18.8334Z" stroke="#FDB62C" stroke-width="1.66667" stroke-linejoin="round"/>
                                <path d="M10 10.9167C10.3283 10.9167 10.6534 10.8521 10.9567 10.7264C11.26 10.6008 11.5356 10.4167 11.7678 10.1845C11.9999 9.95237 12.1841 9.67677 12.3097 9.37346C12.4353 9.07014 12.5 8.74505 12.5 8.41675C12.5 8.08844 12.4353 7.76335 12.3097 7.46004C12.1841 7.15673 11.9999 6.88113 11.7678 6.64898C11.5356 6.41683 11.26 6.23269 10.9567 6.10705C10.6534 5.98141 10.3283 5.91675 10 5.91675C9.33696 5.91675 8.70107 6.18014 8.23223 6.64898C7.76339 7.11782 7.5 7.75371 7.5 8.41675C7.5 9.07979 7.76339 9.71567 8.23223 10.1845C8.70107 10.6534 9.33696 10.9167 10 10.9167Z" stroke="#FDB62C" stroke-width="1.66667" stroke-linejoin="round"/>
                              </svg>
                             <?php echo carbon_get_post_meta(get_the_ID(), 'green_system_realized_objects_location'.green_system_lang_prefix());?>
                           </span>
                         </span>
                       </span>
        </a>

			<?php endwhile;?>

		<?php endif; ?>
		<?php wp_reset_postdata();

		wp_die();
	}



	/**
	 * Our projects
	 */

	add_action('wp_ajax_change_project_category', 'change_project_category_callback');
	add_action('wp_ajax_nopriv_change_project_category', 'change_project_category_callback');

	function change_project_category_callback(){

		$catId = $_POST['catId'];

		$projectsArgs = array(
			'tax_query' => array(
				array(
					'taxonomy' => 'solar_types_tax',
					'field' => 'id',
					'lang' => false,
					'suppress_filters' => false,
					'terms' => $catId

				)
			),
			'post_type' => 'realized_objects',
			'orderby' 	 => 'date',
			'suppress_filters' => false,
			'lang' => false,
			'posts_per_page' => 4
		);

		$projectsList = new WP_Query( $projectsArgs );

		if ( $projectsList->have_posts() ) :?>

			<?php	while ( $projectsList->have_posts() ) : $projectsList->the_post(); ?>

				<a href="<?php the_permalink();?>" class="project col-lg-3 col-sm-6" target="_blank">
		            <span class="project__pic">
		              <img
			              class="lazy"
			              data-src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
			              alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);?>"
		              >
		              <span class="inner">
		                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
		  <path d="M14 0.0427486C12.9093 0.0427486 12 0.909905 12 2.00061V2.04303C12 3.12384 12.8762 4 13.957 4H14.043C15.1238 4 16 3.1238 16 2.04295V2.00069C16 0.909941 15.0907 0.0427486 14 0.0427486Z" fill="#F7FDF8"/>
		  <path d="M16 9.98258C16 8.91419 15.173 8.00399 14.1046 8.00019C14.0698 8.00006 14.0349 8 14 8C13.9651 8 13.9302 8.00006 13.8954 8.00019C12.827 8.00399 12 8.91419 12 9.98258C12 11.0871 12.8954 12 14 12C15.1046 12 16 11.0871 16 9.98258Z" fill="#F7FDF8"/>
		  <path d="M16 17.9826C16 16.9142 15.173 16.004 14.1046 16.0002C14.0698 16.0001 14.0349 16 14 16C13.9651 16 13.9302 16.0001 13.8954 16.0002C12.827 16.004 12 16.9142 12 17.9826C12 19.0871 12.8954 20 14 20C15.1046 20 16 19.0871 16 17.9826Z" fill="#F7FDF8"/>
		  <path d="M14 24.0427C12.9093 24.0427 12 24.9099 12 26.0006V26.043C12 27.1238 12.8762 28 13.957 28H14.043C15.1238 28 16 27.1238 16 26.043V26.0007C16 24.9099 15.0907 24.0427 14 24.0427Z" fill="#F7FDF8"/>
		  <path d="M27.9573 14C27.9573 12.9093 27.0901 12 25.9994 12L25.957 12C24.8762 12 24 12.8762 24 13.957L24 14.043C24 15.1238 24.8762 16 25.957 16L25.9993 16C27.0901 16 27.9573 15.0907 27.9573 14Z" fill="#F7FDF8"/>
		  <path d="M18.0174 16C19.0858 16 19.996 15.173 19.9998 14.1046C19.9999 14.0698 20 14.0349 20 14C20 13.9651 19.9999 13.9302 19.9998 13.8954C19.996 12.827 19.0858 12 18.0174 12C16.9129 12 16 12.8954 16 14C16 15.1046 16.9129 16 18.0174 16Z" fill="#F7FDF8"/>
		  <path d="M10.0174 16C11.0858 16 11.996 15.173 11.9998 14.1046C11.9999 14.0698 12 14.0349 12 14C12 13.9651 11.9999 13.9302 11.9998 13.8954C11.996 12.827 11.0858 12 10.0174 12C8.91285 12 8 12.8954 8 14C8 15.1046 8.91285 16 10.0174 16Z" fill="#F7FDF8"/>
		  <path d="M3.95725 14C3.95725 12.9093 3.0901 12 1.99939 12L1.95697 12C0.876164 12 -3.82984e-08 12.8762 -8.55418e-08 13.957L-8.93003e-08 14.043C-1.36546e-07 15.1238 0.8762 16 1.95705 16L1.99931 16C3.09006 16 3.95725 15.0907 3.95725 14Z" fill="#F7FDF8"/>
		  <path d="M22.0174 9C23.0858 9 23.996 8.17298 23.9998 7.10459C23.9999 7.06976 24 7.0349 24 7C24 6.9651 23.9999 6.93024 23.9998 6.8954C23.996 5.82702 23.0858 5 22.0174 5C20.9129 5 20 5.89543 20 7C20 8.10457 20.9129 9 22.0174 9Z" fill="#F7FDF8"/>
		  <path d="M22.0174 24C23.0858 24 23.996 23.173 23.9998 22.1046C23.9999 22.0698 24 22.0349 24 22C24 21.9651 23.9999 21.9302 23.9998 21.8954C23.996 20.827 23.0858 20 22.0174 20C20.9129 20 20 20.8954 20 22C20 23.1046 20.9129 24 22.0174 24Z" fill="#F7FDF8"/>
		  <path d="M6.01742 9C7.08581 9 7.99601 8.17298 7.99981 7.10459C7.99994 7.06976 8 7.0349 8 7C8 6.9651 7.99994 6.93024 7.99981 6.8954C7.99601 5.82702 7.08581 5 6.01742 5C4.91285 5 4 5.89543 4 7C4 8.10457 4.91285 9 6.01742 9Z" fill="#F7FDF8"/>
		  <path d="M6.01742 24C7.08581 24 7.99601 23.173 7.99981 22.1046C7.99994 22.0698 8 22.0349 8 22C8 21.9651 7.99994 21.9302 7.99981 21.8954C7.99601 20.827 7.08581 20 6.01742 20C4.91285 20 4 20.8954 4 22C4 23.1046 4.91285 24 6.01742 24Z" fill="#F7FDF8"/>
		</svg>
		                <span><?php echo esc_html( pll__( 'Ознайомитись' ) ); ?></span>
		              </span>
		            </span>
					<span class="project__name"><?php the_title();?></span>
					<span class="project__address"></span>
				</a>

			<?php endwhile;?>

		<?php endif; ?>
		<?php wp_reset_postdata();

		wp_die();
	}

	/**
	 * Power plants types
	 */

	add_action('wp_ajax_change_power_plant_type', 'change_power_plant_type_callback');
	add_action('wp_ajax_nopriv_change_power_plant_type', 'change_power_plant_type_callback');

	function change_power_plant_type_callback(){

		$catId = $_POST['catId'];

		$powerPlantArgs = array(
			'tax_query' => array(
				array(
					'taxonomy' => 'solar_types_tax',
					'field' => 'id',
					'lang' => false,
					'suppress_filters' => false,
					'terms' => $catId

				)
			),
			'post_type' => 'solar_types',
			'orderby' 	 => 'date',
			'suppress_filters' => false,
			'lang' => false,
			'posts_per_page' => -1
		);

		$powerPlantList = new WP_Query( $powerPlantArgs );

		if ( $powerPlantList->have_posts() ) :?>

			<?php	while ( $powerPlantList->have_posts() ) : $powerPlantList->the_post(); ?>

            <a href="<?php the_permalink();?>" class="power-plant-item col-lg-4 col-sm-6" target="_blank">
		            <span class="plant__pic">
		              <img
                      class="lazy"
                      data-src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
                      alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);?>"
                  >
		            </span>
              <span class="plant__name"><?php the_title();?></span>
              <span class="plant__address"></span>
            </a>

			<?php endwhile;?>

		<?php endif; ?>
		<?php wp_reset_postdata();

		wp_die();
	}


