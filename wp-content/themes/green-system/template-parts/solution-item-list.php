<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	?>

<div class="row">
	<ul class="ideal-solution__list col-12">
		<?php foreach( $args as $item ):?>
			<li class="ideal-solution__item">
				<h3 class="name"><?php echo $item['name'];?></h3>
				<p class="description"><?php echo $item['text'];?></p>
				<div class="icon">
					<img src="<?php echo $item['icon'];?>" alt="" class="svg-pic">
				</div>
			</li>
		<?php endforeach;?>
	</ul>
</div>
