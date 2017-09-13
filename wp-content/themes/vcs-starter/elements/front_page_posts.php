<?php

$page = (get_query_var('paged')) ? get_query_var('paged') : 1;

$my_query = new WP_Query(array(
	'post_type' => 'Home_Posts',
	'posts_per_page' => get_option('posts_per_page'),
	'orderby' => 'menu_order',
	'order' => 'DESC',
	'paged' => $page,
));

if ( $my_query->have_posts() ) :?>

  <div class="container-text">

  <?php $i = 1; while ($my_query->have_posts()) : $my_query->the_post(); ?>

    <?php if ($i % 3 != 0) { ?>
			<?php //$title = get_title();  if ($title): ?>
      	<h3 class="hiddeMe"> <?php the_title() ?> </h3>
			<?php //endif: ?>
      <p class="hiddeMe"> <img src="<?php the_post_thumbnail_url('full'); ?>"> </p>
      <div class="hiddeMe">
        <?php echo the_content();?>
      </div>

    <?php } else { ?>
        <h3 class="hiddeMe"><?php the_title()?></h3>
        <div class="hiddeMe">
          <?php echo the_content()?>
        </div>

        <div class="room_gallery">
          <div class="room_img_container">
            <img class="hiddeMe" src="<?php the_field('h_hp_3_line_pictures') ?>" alt="Room">
          </div>
          <div class="room_img_container">
            <img class="hiddeMe" src="<?php the_field('h_hp_3_line_pictures_2') ?>" alt="Room">
          </div>
          <div class="room_img_container">
            <img class="hiddeMe" src="<?php the_field('h_hp_3_line_pictures_3') ?>" alt="Room">
          </div>
        </div>

    <?php }  ?>

  <?php $i++; endwhile; ?>

  </div>

  <?php wp_reset_postdata(); unset($my_query); ?>

<?php endif; ?>

<?php $quote = get_field('h_he_quote');  ?>
<?php if ( $quote ) { ?>

  <h1 class="quote hiddeMe"><?php the_field('h_he_quote'); ?></h1>

<?php }; ?>
