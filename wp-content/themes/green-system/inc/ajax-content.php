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
	 * Our projects home
	 */

	add_action('wp_ajax_change_project_category', 'change_project_category_callback');
	add_action('wp_ajax_nopriv_change_project_category', 'change_project_category_callback');

	function change_project_category_callback(){

		$catId = $_POST['catId'];

		if ( $catId == 0 ){

      $projectsArgs = array(
        'post_type' => 'realized_objects',
        'orderby' 	 => 'date',
        'post_status'  => 'publish',
        'suppress_filters' => false,
        'lang' => false,
        'posts_per_page' => 4
      );

      $projectsList = new WP_Query( $projectsArgs );

		if ( $projectsList->have_posts() ) :?>

			<?php	while ( $projectsList->have_posts() ) : $projectsList->the_post(); ?>

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

	}else{

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

	}

		wp_die();
	}

	/**
	 * Our projects power plant
	 */

	add_action('wp_ajax_change_project_category_plant', 'change_project_category_plant_callback');
	add_action('wp_ajax_nopriv_change_project_category_plant', 'change_project_category_plant_callback');

	function change_project_category_plant_callback(){

		$catId = $_POST['catId'];
	  $andCatId = $_POST['andCatId'];

		if ( $catId == 0 ){

		$projectsArgs = array(
			'tax_query' => array(
				array(
					'taxonomy' => 'solar_decision_tax',
					'field' => 'id',
					'lang' => false,
					'suppress_filters' => false,
					'terms' => $andCatId

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

		}else{

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

			    <?php if( has_term($andCatId, 'solar_decision_tax') ):?>

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

          <?php endif;?>

				<?php endwhile;?>

			<?php endif; ?>
			<?php wp_reset_postdata();

		}

		wp_die();
	}

	/**
	* More projects plant
	*/

	add_action('wp_ajax_more_projects_plant', 'more_projects_plant_callback');
	add_action('wp_ajax_nopriv_more_projects_plant', 'more_projects_plant_callback');

	function more_projects_plant_callback(){

	  $catId = $_POST['catId'];
	  $andId = $_POST['andId'];

	  if ( $catId == 0 ){

	    $projectsArgs = array(
		    'tax_query' => array(
			    array(
				    'taxonomy' => 'solar_decision_tax',
				    'field' => 'id',
				    'lang' => false,
				    'suppress_filters' => false,
				    'terms' => $andId

			    )
		    ),
		    'post_type' => 'realized_objects',
		    'orderby' 	 => 'date',
		    'suppress_filters' => false,
		    'lang' => false,
	      'offset' => 4,
	    );

	    $projectsList = new WP_Query( $projectsArgs );

	    if ( $projectsList->have_posts() ) :?>

		    <?php	while ( $projectsList->have_posts() ) : $projectsList->the_post(); ?>

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

    }else{
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
	      'offset' => 4,
	    );

	    $projectsList = new WP_Query( $projectsArgs );

	    if ( $projectsList->have_posts() ) :?>

		    <?php	while ( $projectsList->have_posts() ) : $projectsList->the_post(); ?>

			    <?php if( has_term($andId , 'solar_decision_tax') ):?>

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

			    <?php endif;?>

		    <?php endwhile;?>

	    <?php endif; ?>
	    <?php wp_reset_postdata();
    }

	  wp_die();
  }

	/**
	 * Main more projects
	 */

	add_action('wp_ajax_main_more_projects', 'main_more_projects_callback');
	add_action('wp_ajax_nopriv_main_more_projects', 'main_more_projects_callback');

	function main_more_projects_callback(){

		$catId = $_POST['catId'];

		if ( $catId == 0 ){
			$projectsArgs = array(
				'post_type' => 'realized_objects',
				'orderby' 	 => 'date',
				'post_status'  => 'publish',
				'suppress_filters' => false,
				'lang' => false,
		    'offset' => 4,
			);

			$projectsList = new WP_Query( $projectsArgs );

			if ( $projectsList->have_posts() ) :?>
				<?php	while ( $projectsList->have_posts() ) : $projectsList->the_post(); ?>
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

		}else{

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
		    'offset' => 4,
			);

			$projectsList = new WP_Query( $projectsArgs );

			if ( $projectsList->have_posts() ) :?>

				<?php	while ( $projectsList->have_posts() ) : $projectsList->the_post(); ?>
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

		}

		wp_die();
	}

	/**
	 * Power plants types
	 */

	add_action('wp_ajax_change_product_plant_category', 'change_product_plant_category_callback');
	add_action('wp_ajax_nopriv_change_product_plant_category', 'change_product_plant_category_callback');

	function change_product_plant_category_callback(){

		$catId = $_POST['catId'];
	  $andCatId = $_POST['andCatId'];

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
			  <?php if( has_term($andCatId , 'solar_decision_tax') ):?>
          <a href="<?php the_permalink();?>" class="power-plant-item col-lg-4 col-sm-6 col-12" target="_blank">
            <span class="inner">
              <span class="pic-wrapper">
		              <img
                      src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
                      alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);?>"
                  >
		            </span>
              <span class="name"><?php echo carbon_get_post_meta(get_the_ID(), 'green_system_solar_type_custom_title'.green_system_lang_prefix());?></span>
              <span class="price"><?php echo carbon_get_post_meta(get_the_ID(), 'green_system_solar_type_price'.green_system_lang_prefix());?></span>
              <span class="button">
                <?php echo esc_html( pll__( 'Дізнатись більше' ) ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <g opacity="0.6" clip-path="url(#clip0_995_223)">
    <path d="M3.125 19.375C3.125 19.2093 3.05917 19.0503 2.94196 18.933C2.82475 18.8158 2.66575 18.75 2.5 18.75C2.33425 18.75 2.17525 18.8158 2.05804 18.933C1.94083 19.0503 1.875 19.2093 1.875 19.375C1.875 19.5408 1.94083 19.6998 2.05804 19.817C2.17525 19.9342 2.33425 20 2.5 20C2.66575 20 2.82475 19.9342 2.94196 19.817C3.05917 19.6998 3.125 19.5408 3.125 19.375ZM5 19.375C5 19.2093 4.93417 19.0503 4.81696 18.933C4.69975 18.8158 4.54075 18.75 4.375 18.75C4.20925 18.75 4.05025 18.8158 3.93304 18.933C3.81583 19.0503 3.75 19.2093 3.75 19.375C3.75 19.5408 3.81583 19.6998 3.93304 19.817C4.05025 19.9342 4.20925 20 4.375 20C4.54075 20 4.69975 19.9342 4.81696 19.817C4.93417 19.6998 5 19.5408 5 19.375ZM6.875 17.5C6.875 17.3343 6.80917 17.1753 6.69196 17.058C6.57475 16.9408 6.41575 16.875 6.25 16.875C6.08425 16.875 5.92525 16.9408 5.80804 17.058C5.69083 17.1753 5.625 17.3343 5.625 17.5C5.625 17.6658 5.69083 17.8248 5.80804 17.942C5.92525 18.0592 6.08425 18.125 6.25 18.125C6.41575 18.125 6.57475 18.0592 6.69196 17.942C6.80917 17.8248 6.875 17.6658 6.875 17.5ZM8.75 17.5C8.75 17.3343 8.68417 17.1753 8.56696 17.058C8.44975 16.9408 8.29075 16.875 8.125 16.875C7.95925 16.875 7.80025 16.9408 7.68304 17.058C7.56583 17.1753 7.5 17.3343 7.5 17.5C7.5 17.6658 7.56583 17.8248 7.68304 17.942C7.80025 18.0592 7.95925 18.125 8.125 18.125C8.29075 18.125 8.44975 18.0592 8.56696 17.942C8.68417 17.8248 8.75 17.6658 8.75 17.5ZM10.625 15.625C10.625 15.4593 10.5592 15.3003 10.442 15.183C10.3248 15.0658 10.1658 15 10 15C9.83425 15 9.67525 15.0658 9.55804 15.183C9.44083 15.3003 9.375 15.4593 9.375 15.625C9.375 15.7908 9.44083 15.9498 9.55804 16.067C9.67525 16.1842 9.83425 16.25 10 16.25C10.1658 16.25 10.3248 16.1842 10.442 16.067C10.5592 15.9498 10.625 15.7908 10.625 15.625ZM12.5 15.625C12.5 15.4593 12.4342 15.3003 12.317 15.183C12.1998 15.0658 12.0408 15 11.875 15C11.7093 15 11.5503 15.0658 11.433 15.183C11.3158 15.3003 11.25 15.4593 11.25 15.625C11.25 15.7908 11.3158 15.9498 11.433 16.067C11.5503 16.1842 11.7093 16.25 11.875 16.25C12.0408 16.25 12.1998 16.1842 12.317 16.067C12.4342 15.9498 12.5 15.7908 12.5 15.625ZM14.375 13.75C14.375 13.5843 14.3092 13.4253 14.192 13.308C14.0748 13.1908 13.9158 13.125 13.75 13.125C13.5843 13.125 13.4253 13.1908 13.308 13.308C13.1908 13.4253 13.125 13.5843 13.125 13.75C13.125 13.9158 13.1908 14.0748 13.308 14.192C13.4253 14.3092 13.5843 14.375 13.75 14.375C13.9158 14.375 14.0748 14.3092 14.192 14.192C14.3092 14.0748 14.375 13.9158 14.375 13.75ZM16.25 13.75C16.25 13.5843 16.1842 13.4253 16.0669 13.308C15.9497 13.1908 15.7908 13.125 15.625 13.125C15.4593 13.125 15.3003 13.1908 15.183 13.308C15.0658 13.4253 15 13.5843 15 13.75C15 13.9158 15.0658 14.0748 15.183 14.192C15.3003 14.3092 15.4593 14.375 15.625 14.375C15.7908 14.375 15.9497 14.3092 16.0669 14.192C16.1842 14.0748 16.25 13.9158 16.25 13.75ZM18.125 11.875C18.125 11.7093 18.0592 11.5503 17.9419 11.433C17.8247 11.3158 17.6658 11.25 17.5 11.25C17.3342 11.25 17.1753 11.3158 17.0581 11.433C16.9409 11.5503 16.875 11.7093 16.875 11.875C16.875 12.0408 16.9409 12.1998 17.0581 12.317C17.1753 12.4342 17.3342 12.5 17.5 12.5C17.6658 12.5 17.8247 12.4342 17.9419 12.317C18.0592 12.1998 18.125 12.0408 18.125 11.875ZM6.875 2.5C6.875 2.33424 6.80917 2.17527 6.69196 2.05806C6.57475 1.94085 6.41575 1.875 6.25 1.875C6.08425 1.875 5.92525 1.94085 5.80804 2.05806C5.69083 2.17527 5.625 2.33424 5.625 2.5C5.625 2.66576 5.69083 2.82473 5.80804 2.94194C5.92525 3.05915 6.08425 3.125 6.25 3.125C6.41575 3.125 6.57475 3.05915 6.69196 2.94194C6.80917 2.82473 6.875 2.66576 6.875 2.5ZM8.75 2.5C8.75 2.33424 8.68417 2.17527 8.56696 2.05806C8.44975 1.94085 8.29075 1.875 8.125 1.875C7.95925 1.875 7.80025 1.94085 7.68304 2.05806C7.56583 2.17527 7.5 2.33424 7.5 2.5C7.5 2.66576 7.56583 2.82473 7.68304 2.94194C7.80025 3.05915 7.95925 3.125 8.125 3.125C8.29075 3.125 8.44975 3.05915 8.56696 2.94194C8.68417 2.82473 8.75 2.66576 8.75 2.5ZM10.625 4.375C10.625 4.20925 10.5592 4.05027 10.442 3.93306C10.3247 3.81585 10.1658 3.75 10 3.75C9.83425 3.75 9.67525 3.81585 9.55804 3.93306C9.44083 4.05027 9.375 4.20925 9.375 4.375C9.375 4.54075 9.44083 4.69975 9.55804 4.81696C9.67525 4.93417 9.83425 5 10 5C10.1658 5 10.3248 4.93417 10.442 4.81696C10.5592 4.69975 10.625 4.54075 10.625 4.375ZM12.5 4.375C12.5 4.20925 12.4342 4.05027 12.317 3.93306C12.1997 3.81585 12.0408 3.75 11.875 3.75C11.7093 3.75 11.5503 3.81585 11.433 3.93306C11.3158 4.05027 11.25 4.20925 11.25 4.375C11.25 4.54075 11.3158 4.69975 11.433 4.81696C11.5503 4.93417 11.7093 5 11.875 5C12.0408 5 12.1998 4.93417 12.317 4.81696C12.4342 4.69975 12.5 4.54075 12.5 4.375ZM14.375 6.25C14.375 6.08425 14.3092 5.92525 14.192 5.80804C14.0748 5.69083 13.9158 5.625 13.75 5.625C13.5843 5.625 13.4253 5.69083 13.308 5.80804C13.1908 5.92525 13.125 6.08425 13.125 6.25C13.125 6.41575 13.1908 6.57475 13.308 6.69196C13.4253 6.80917 13.5843 6.875 13.75 6.875C13.9158 6.875 14.0748 6.80917 14.192 6.69196C14.3092 6.57475 14.375 6.41575 14.375 6.25ZM16.25 6.25C16.25 6.08425 16.1842 5.92525 16.0669 5.80804C15.9497 5.69083 15.7908 5.625 15.625 5.625C15.4593 5.625 15.3003 5.69083 15.183 5.80804C15.0658 5.92525 15 6.08425 15 6.25C15 6.41575 15.0658 6.57475 15.183 6.69196C15.3003 6.80917 15.4593 6.875 15.625 6.875C15.7908 6.875 15.9497 6.80917 16.0669 6.69196C16.1842 6.57475 16.25 6.41575 16.25 6.25ZM18.125 8.125C18.125 7.95925 18.0592 7.80025 17.9419 7.68304C17.8247 7.56583 17.6658 7.5 17.5 7.5C17.3342 7.5 17.1753 7.56583 17.0581 7.68304C16.9409 7.80025 16.875 7.95925 16.875 8.125C16.875 8.29075 16.9409 8.44975 17.0581 8.56696C17.1753 8.68417 17.3342 8.75 17.5 8.75C17.6658 8.75 17.8247 8.68417 17.9419 8.56696C18.0592 8.44975 18.125 8.29075 18.125 8.125ZM20 10C20 9.83425 19.9342 9.67525 19.8169 9.55804C19.6997 9.44084 19.5408 9.375 19.375 9.375C19.2092 9.375 19.0503 9.44084 18.9331 9.55804C18.8159 9.67525 18.75 9.83425 18.75 10C18.75 10.1658 18.8159 10.3248 18.9331 10.442C19.0503 10.5592 19.2092 10.625 19.375 10.625C19.5408 10.625 19.6997 10.5592 19.8169 10.442C19.9342 10.3248 20 10.1658 20 10ZM3.125 0.625C3.125 0.459242 3.05917 0.300269 2.94196 0.183059C2.82475 0.0658481 2.66575 2.06709e-07 2.5 2.08685e-07C2.33425 2.10662e-07 2.17525 0.0658481 2.05804 0.183059C1.94083 0.300269 1.875 0.459242 1.875 0.625C1.875 0.790759 1.94083 0.949734 2.05804 1.06694C2.17525 1.18415 2.33425 1.25 2.5 1.25C2.66575 1.25 2.82475 1.18415 2.94196 1.06694C3.05917 0.949734 3.125 0.790759 3.125 0.625ZM5 0.625C5 0.459242 4.93417 0.300269 4.81696 0.183059C4.69975 0.0658481 4.54075 1.8435e-07 4.375 1.86326e-07C4.20925 1.88303e-07 4.05025 0.0658481 3.93304 0.183059C3.81583 0.300269 3.75 0.459242 3.75 0.625C3.75 0.790759 3.81583 0.949734 3.93304 1.06694C4.05025 1.18415 4.20925 1.25 4.375 1.25C4.54075 1.25 4.69975 1.18415 4.81696 1.06694C4.93417 0.949734 5 0.790759 5 0.625ZM3.125 15.625C3.125 15.4593 3.05917 15.3003 2.94196 15.183C2.82475 15.0658 2.66575 15 2.5 15C2.33425 15 2.17525 15.0658 2.05804 15.183C1.94083 15.3003 1.875 15.4593 1.875 15.625C1.875 15.7908 1.94083 15.9498 2.05804 16.067C2.17525 16.1842 2.33425 16.25 2.5 16.25C2.66575 16.25 2.82475 16.1842 2.94196 16.067C3.05917 15.9498 3.125 15.7908 3.125 15.625ZM3.125 17.5C3.125 17.3343 3.05917 17.1753 2.94196 17.058C2.82475 16.9408 2.66575 16.875 2.5 16.875C2.33425 16.875 2.17525 16.9408 2.05804 17.058C1.94083 17.1753 1.875 17.3343 1.875 17.5C1.875 17.6658 1.94083 17.8248 2.05804 17.942C2.17525 18.0592 2.33425 18.125 2.5 18.125C2.66575 18.125 2.82475 18.0592 2.94196 17.942C3.05917 17.8248 3.125 17.6658 3.125 17.5ZM5 17.5C5 17.3343 4.93417 17.1753 4.81696 17.058C4.69975 16.9408 4.54075 16.875 4.375 16.875C4.20925 16.875 4.05025 16.9408 3.93304 17.058C3.81583 17.1753 3.75 17.3343 3.75 17.5C3.75 17.6658 3.81583 17.8248 3.93304 17.942C4.05025 18.0592 4.20925 18.125 4.375 18.125C4.54075 18.125 4.69975 18.0592 4.81696 17.942C4.93417 17.8248 5 17.6658 5 17.5ZM8.75 15.625C8.75 15.4593 8.68417 15.3003 8.56696 15.183C8.44975 15.0658 8.29075 15 8.125 15C7.95925 15 7.80025 15.0658 7.68304 15.183C7.56583 15.3003 7.5 15.4593 7.5 15.625C7.5 15.7908 7.56583 15.9498 7.68304 16.067C7.80025 16.1842 7.95925 16.25 8.125 16.25C8.29075 16.25 8.44975 16.1842 8.56696 16.067C8.68417 15.9498 8.75 15.7908 8.75 15.625ZM12.5 13.75C12.5 13.5843 12.4342 13.4253 12.317 13.308C12.1998 13.1908 12.0408 13.125 11.875 13.125C11.7093 13.125 11.5503 13.1908 11.433 13.308C11.3158 13.4253 11.25 13.5843 11.25 13.75C11.25 13.9158 11.3158 14.0748 11.433 14.192C11.5503 14.3092 11.7093 14.375 11.875 14.375C12.0408 14.375 12.1998 14.3092 12.317 14.192C12.4342 14.0748 12.5 13.9158 12.5 13.75ZM16.25 11.875C16.25 11.7093 16.1842 11.5503 16.0669 11.433C15.9497 11.3158 15.7908 11.25 15.625 11.25C15.4593 11.25 15.3003 11.3158 15.183 11.433C15.0658 11.5503 15 11.7093 15 11.875C15 12.0408 15.0658 12.1998 15.183 12.317C15.3003 12.4342 15.4593 12.5 15.625 12.5C15.7908 12.5 15.9497 12.4342 16.0669 12.317C16.1842 12.1998 16.25 12.0408 16.25 11.875ZM5 6.25C5 6.08425 4.93417 5.92525 4.81696 5.80804C4.69975 5.69083 4.54075 5.625 4.375 5.625C4.20925 5.625 4.05025 5.69083 3.93304 5.80804C3.81583 5.92525 3.75 6.08425 3.75 6.25C3.75 6.41575 3.81583 6.57475 3.93304 6.69196C4.05025 6.80917 4.20925 6.875 4.375 6.875C4.54075 6.875 4.69975 6.80917 4.81696 6.69196C4.93417 6.57475 5 6.41575 5 6.25ZM3.125 4.375C3.125 4.20925 3.05917 4.05027 2.94196 3.93306C2.82475 3.81585 2.66575 3.75 2.5 3.75C2.33425 3.75 2.17525 3.81585 2.05804 3.93306C1.94083 4.05027 1.875 4.20925 1.875 4.375C1.875 4.54075 1.94083 4.69975 2.05804 4.81696C2.17525 4.93417 2.33425 5 2.5 5C2.66575 5 2.82475 4.93417 2.94196 4.81696C3.05917 4.69975 3.125 4.54075 3.125 4.375ZM5 15.625C5 15.4593 4.93417 15.3003 4.81696 15.183C4.69975 15.0658 4.54075 15 4.375 15C4.20925 15 4.05025 15.0658 3.93304 15.183C3.81583 15.3003 3.75 15.4593 3.75 15.625C3.75 15.7908 3.81583 15.9498 3.93304 16.067C4.05025 16.1842 4.20925 16.25 4.375 16.25C4.54075 16.25 4.69975 16.1842 4.81696 16.067C4.93417 15.9498 5 15.7908 5 15.625ZM5 13.75C5 13.5843 4.93417 13.4253 4.81696 13.308C4.69975 13.1908 4.54075 13.125 4.375 13.125C4.20925 13.125 4.05025 13.1908 3.93304 13.308C3.81583 13.4253 3.75 13.5843 3.75 13.75C3.75 13.9158 3.81583 14.0748 3.93304 14.192C4.05025 14.3092 4.20925 14.375 4.375 14.375C4.54075 14.375 4.69975 14.3092 4.81696 14.192C4.93417 14.0748 5 13.9158 5 13.75ZM5 11.875C5 11.7093 4.93417 11.5503 4.81696 11.433C4.69975 11.3158 4.54075 11.25 4.375 11.25C4.20925 11.25 4.05025 11.3158 3.93304 11.433C3.81583 11.5503 3.75 11.7093 3.75 11.875C3.75 12.0408 3.81583 12.1998 3.93304 12.317C4.05025 12.4342 4.20925 12.5 4.375 12.5C4.54075 12.5 4.69975 12.4342 4.81696 12.317C4.93417 12.1998 5 12.0408 5 11.875ZM5 10C5 9.83425 4.93417 9.67525 4.81696 9.55804C4.69975 9.44084 4.54075 9.375 4.375 9.375C4.20925 9.375 4.05025 9.44084 3.93304 9.55804C3.81583 9.67525 3.75 9.83425 3.75 10C3.75 10.1658 3.81583 10.3248 3.93304 10.442C4.05025 10.5592 4.20925 10.625 4.375 10.625C4.54075 10.625 4.69975 10.5592 4.81696 10.442C4.93417 10.3248 5 10.1658 5 10ZM5 8.125C5 7.95925 4.93417 7.80025 4.81696 7.68304C4.69975 7.56583 4.54075 7.5 4.375 7.5C4.20925 7.5 4.05025 7.56583 3.93304 7.68304C3.81583 7.80025 3.75 7.95925 3.75 8.125C3.75 8.29075 3.81583 8.44975 3.93304 8.56696C4.05025 8.68417 4.20925 8.75 4.375 8.75C4.54075 8.75 4.69975 8.68417 4.81696 8.56696C4.93417 8.44975 5 8.29075 5 8.125ZM6.875 10C6.875 9.83425 6.80917 9.67525 6.69196 9.55804C6.57475 9.44084 6.41575 9.375 6.25 9.375C6.08425 9.375 5.92525 9.44084 5.80804 9.55804C5.69083 9.67525 5.625 9.83425 5.625 10C5.625 10.1658 5.69083 10.3248 5.80804 10.442C5.92525 10.5592 6.08425 10.625 6.25 10.625C6.41575 10.625 6.57475 10.5592 6.69196 10.442C6.80917 10.3248 6.875 10.1658 6.875 10ZM6.875 15.625C6.875 15.4593 6.80917 15.3003 6.69196 15.183C6.57475 15.0658 6.41575 15 6.25 15C6.08425 15 5.92525 15.0658 5.80804 15.183C5.69083 15.3003 5.625 15.4593 5.625 15.625C5.625 15.7908 5.69083 15.9498 5.80804 16.067C5.92525 16.1842 6.08425 16.25 6.25 16.25C6.41575 16.25 6.57475 16.1842 6.69196 16.067C6.80917 15.9498 6.875 15.7908 6.875 15.625ZM6.875 13.75C6.875 13.5843 6.80917 13.4253 6.69196 13.308C6.57475 13.1908 6.41575 13.125 6.25 13.125C6.08425 13.125 5.92525 13.1908 5.80804 13.308C5.69083 13.4253 5.625 13.5843 5.625 13.75C5.625 13.9158 5.69083 14.0748 5.80804 14.192C5.92525 14.3092 6.08425 14.375 6.25 14.375C6.41575 14.375 6.57475 14.3092 6.69196 14.192C6.80917 14.0748 6.875 13.9158 6.875 13.75ZM6.875 11.875C6.875 11.7093 6.80917 11.5503 6.69196 11.433C6.57475 11.3158 6.41575 11.25 6.25 11.25C6.08425 11.25 5.92525 11.3158 5.80804 11.433C5.69083 11.5503 5.625 11.7093 5.625 11.875C5.625 12.0408 5.69083 12.1998 5.80804 12.317C5.92525 12.4342 6.08425 12.5 6.25 12.5C6.41575 12.5 6.57475 12.4342 6.69196 12.317C6.80917 12.1998 6.875 12.0408 6.875 11.875ZM8.75 13.75C8.75 13.5843 8.68417 13.4253 8.56696 13.308C8.44975 13.1908 8.29075 13.125 8.125 13.125C7.95925 13.125 7.80025 13.1908 7.68304 13.308C7.56583 13.4253 7.5 13.5843 7.5 13.75C7.5 13.9158 7.56583 14.0748 7.68304 14.192C7.80025 14.3092 7.95925 14.375 8.125 14.375C8.29075 14.375 8.44975 14.3092 8.56696 14.192C8.68417 14.0748 8.75 13.9158 8.75 13.75ZM8.75 11.875C8.75 11.7093 8.68417 11.5503 8.56696 11.433C8.44975 11.3158 8.29075 11.25 8.125 11.25C7.95925 11.25 7.80025 11.3158 7.68304 11.433C7.56583 11.5503 7.5 11.7093 7.5 11.875C7.5 12.0408 7.56583 12.1998 7.68304 12.317C7.80025 12.4342 7.95925 12.5 8.125 12.5C8.29075 12.5 8.44975 12.4342 8.56696 12.317C8.68417 12.1998 8.75 12.0408 8.75 11.875ZM8.75 10C8.75 9.83425 8.68417 9.67525 8.56696 9.55804C8.44975 9.44084 8.29075 9.375 8.125 9.375C7.95925 9.375 7.80025 9.44084 7.68304 9.55804C7.56583 9.67525 7.5 9.83425 7.5 10C7.5 10.1658 7.56583 10.3248 7.68304 10.442C7.80025 10.5592 7.95925 10.625 8.125 10.625C8.29075 10.625 8.44975 10.5592 8.56696 10.442C8.68417 10.3248 8.75 10.1658 8.75 10ZM10.625 13.75C10.625 13.5843 10.5592 13.4253 10.442 13.308C10.3248 13.1908 10.1658 13.125 10 13.125C9.83425 13.125 9.67525 13.1908 9.55804 13.308C9.44083 13.4253 9.375 13.5843 9.375 13.75C9.375 13.9158 9.44083 14.0748 9.55804 14.192C9.67525 14.3092 9.83425 14.375 10 14.375C10.1658 14.375 10.3248 14.3092 10.442 14.192C10.5592 14.0748 10.625 13.9158 10.625 13.75ZM10.625 11.875C10.625 11.7093 10.5592 11.5503 10.442 11.433C10.3248 11.3158 10.1658 11.25 10 11.25C9.83425 11.25 9.67525 11.3158 9.55804 11.433C9.44083 11.5503 9.375 11.7093 9.375 11.875C9.375 12.0408 9.44083 12.1998 9.55804 12.317C9.67525 12.4342 9.83425 12.5 10 12.5C10.1658 12.5 10.3248 12.4342 10.442 12.317C10.5592 12.1998 10.625 12.0408 10.625 11.875ZM12.5 11.875C12.5 11.7093 12.4342 11.5503 12.317 11.433C12.1998 11.3158 12.0408 11.25 11.875 11.25C11.7093 11.25 11.5503 11.3158 11.433 11.433C11.3158 11.5503 11.25 11.7093 11.25 11.875C11.25 12.0408 11.3158 12.1998 11.433 12.317C11.5503 12.4342 11.7093 12.5 11.875 12.5C12.0408 12.5 12.1998 12.4342 12.317 12.317C12.4342 12.1998 12.5 12.0408 12.5 11.875ZM14.375 11.875C14.375 11.7093 14.3092 11.5503 14.192 11.433C14.0748 11.3158 13.9158 11.25 13.75 11.25C13.5843 11.25 13.4253 11.3158 13.308 11.433C13.1908 11.5503 13.125 11.7093 13.125 11.875C13.125 12.0408 13.1908 12.1998 13.308 12.317C13.4253 12.4342 13.5843 12.5 13.75 12.5C13.9158 12.5 14.0748 12.4342 14.192 12.317C14.3092 12.1998 14.375 12.0408 14.375 11.875ZM10.625 10C10.625 9.83425 10.5592 9.67525 10.442 9.55804C10.3248 9.44084 10.1658 9.375 10 9.375C9.83425 9.375 9.67525 9.44084 9.55804 9.55804C9.44083 9.67525 9.375 9.83425 9.375 10C9.375 10.1658 9.44083 10.3248 9.55804 10.442C9.67525 10.5592 9.83425 10.625 10 10.625C10.1658 10.625 10.3248 10.5592 10.442 10.442C10.5592 10.3248 10.625 10.1658 10.625 10ZM12.5 10C12.5 9.83425 12.4342 9.67525 12.317 9.55804C12.1998 9.44084 12.0408 9.375 11.875 9.375C11.7093 9.375 11.5503 9.44084 11.433 9.55804C11.3158 9.67525 11.25 9.83425 11.25 10C11.25 10.1658 11.3158 10.3248 11.433 10.442C11.5503 10.5592 11.7093 10.625 11.875 10.625C12.0408 10.625 12.1998 10.5592 12.317 10.442C12.4342 10.3248 12.5 10.1658 12.5 10ZM14.375 10C14.375 9.83425 14.3092 9.67525 14.192 9.55804C14.0748 9.44084 13.9158 9.375 13.75 9.375C13.5843 9.375 13.4253 9.44084 13.308 9.55804C13.1908 9.67525 13.125 9.83425 13.125 10C13.125 10.1658 13.1908 10.3248 13.308 10.442C13.4253 10.5592 13.5843 10.625 13.75 10.625C13.9158 10.625 14.0748 10.5592 14.192 10.442C14.3092 10.3248 14.375 10.1658 14.375 10ZM16.25 10C16.25 9.83425 16.1842 9.67525 16.0669 9.55804C15.9497 9.44084 15.7908 9.375 15.625 9.375C15.4593 9.375 15.3003 9.44084 15.183 9.55804C15.0658 9.67525 15 9.83425 15 10C15 10.1658 15.0658 10.3248 15.183 10.442C15.3003 10.5592 15.4593 10.625 15.625 10.625C15.7908 10.625 15.9497 10.5592 16.0669 10.442C16.1842 10.3248 16.25 10.1658 16.25 10ZM3.125 2.5C3.125 2.33424 3.05917 2.17527 2.94196 2.05806C2.82475 1.94085 2.66575 1.875 2.5 1.875C2.33425 1.875 2.17525 1.94085 2.05804 2.05806C1.94083 2.17527 1.875 2.33424 1.875 2.5C1.875 2.66576 1.94083 2.82473 2.05804 2.94194C2.17525 3.05915 2.33425 3.125 2.5 3.125C2.66575 3.125 2.82475 3.05915 2.94196 2.94194C3.05917 2.82473 3.125 2.66576 3.125 2.5ZM18.125 10C18.125 9.83425 18.0592 9.67525 17.9419 9.55804C17.8247 9.44084 17.6658 9.375 17.5 9.375C17.3342 9.375 17.1753 9.44084 17.0581 9.55804C16.9409 9.67525 16.875 9.83425 16.875 10C16.875 10.1658 16.9409 10.3248 17.0581 10.442C17.1753 10.5592 17.3342 10.625 17.5 10.625C17.6658 10.625 17.8247 10.5592 17.9419 10.442C18.0592 10.3248 18.125 10.1658 18.125 10Z" fill="#131313"/>
  </g>
  <defs>
    <clipPath id="clip0_995_223">
      <rect width="20" height="20" fill="white" transform="translate(20) rotate(90)"/>
    </clipPath>
  </defs>
</svg>
              </span>
            </span>

          </a>
        <?php endif;?>
			<?php endwhile;?>

		<?php endif; ?>
		<?php wp_reset_postdata();

		wp_die();
	}

/**
 * Form integration
 */

	add_action('wp_ajax_form_integration', 'form_integration_callback');
	add_action('wp_ajax_nopriv_form_integration', 'form_integration_callback');

	function form_integration_callback(){

		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$pageLink = $_POST['pageLink'];
		$pageName = $_POST['pageName'];
		$formKey = $_POST['formDescription'];

		$customSubject = 'Заявка з сайту '.$formKey;

		$sendTo = carbon_get_theme_option('green_system_email_integration');

		if ( !empty($sendTo) ){

      $to = $sendTo;
      $headers = "Content-type: text/plain; charset = windows-1251";
      $subject = $customSubject;
      $message = "Ім'я: $name \n Електронна адреса: $email \n Телефон: $phone \n Адреса сторінки заявки: $pageLink \n Назва сторінки: $pageName \n";

      $send = mail ($to, $subject, $message);

    }

		wp_die();
	}