<?php get_header(); ?>


<?php get_template_part('elements/about_begin'); ?>
<?php

$page = (get_query_var('paged')) ? get_query_var('paged') : 1;

$my_query = new WP_Query(array(
	'post_type' => 'Img_links',
	'posts_per_page' => get_option('posts_per_page'),
	'orderby' => 'menu_order',
	'order' => 'DESC',
	'paged' => $page
));

if ( $my_query->have_posts() ) :?>

<div class="container_img">

<?php $i = 1; while ($my_query->have_posts()) : $my_query->the_post(); ?>
  <div class="container hiddeMe">
    <a href="<?php the_field('h_ilp_link'); ?>"><img src="<?php the_field("f_ilp_link_img"); ?>" alt="Avatar" class="image"></a>
    <a href="<?php the_field('h_ilp_link'); ?>" class="overlay">
      <div class="text"><?php the_title()?></div>
    </a>
  </div>

<?php $i++; endwhile; ?>

</div>


<?php wp_reset_postdata(); unset($my_query); ?>

<?php endif; ?>


<?php get_footer(); ?>
