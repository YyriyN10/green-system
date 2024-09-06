<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
?>

<section class="product-faq indent-top-small indent-bottom-small animation-tracking">
	<div class="container">
		<div class="row first-up">
			<h2 class="block-title big-title col-12"><?php echo $args['title'];?></h2>
		</div>
		<div class="row second-up">
			<div class="description col-12">
				<?php echo wpautop( $args['content']);?>
			</div>
		</div>
	</div>
</section>