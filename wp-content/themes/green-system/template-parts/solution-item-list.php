<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	?>

<div class="row second-up">
	<ul class="ideal-solution__list col-12">
		<?php foreach( $args as $item ):?>
      <?php if( empty($item['name']) && empty($item['text'])):?>
        <li class="ideal-solution__item plug-item">
          <div class="pic">
            <img
               class="lazy"
               data-src="<?php echo $item['icon'];?>"
            >
          </div>
        </li>
      <?php else:?>
        <li class="ideal-solution__item">
          <h3 class="name"><?php echo $item['name'];?></h3>
          <p class="description"><?php echo $item['text'];?></p>
          <div class="icon">
            <img src="<?php echo $item['icon'];?>" alt="" class="svg-pic">
          </div>
        </li>
      <?php endif;?>

		<?php endforeach;?>
	</ul>
</div>
