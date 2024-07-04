<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	$term_list = get_the_terms(get_the_ID(), 'solar_decision_tax');

	$parentTermId = $term_list[0]->term_id;
	$parentTermName = $term_list[0]->name;
	$parentLink = carbon_get_term_meta($parentTermId, 'green_system_olar_decision_tax_link'.green_system_lang_prefix());
?>
<section class="custom-breadcrumbs-wrapper">
	<div class="container">
		<div class="row">
			<nav class="col-12 breadcrumbs">
          <span>
            <a href="<?php echo get_home_url();?>"><?php echo esc_html( pll__( 'Головна' ) ); ?></a>
          </span>
				<?php if( $parentTermId && $parentTermName && $parentLink ):?>
					<span>
              <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                <path d="M1 11L6 6L1 1" stroke="#384438" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            <a href="<?php echo $parentLink;?>"><?php echo $parentTermName;?></a>
            </span>
				<?php endif;?>
				<span>
            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
              <path d="M1 11L6 6L1 1" stroke="#384438" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <?php the_title();?>
          </span>
			</nav>
		</div>
	</div>
</section>