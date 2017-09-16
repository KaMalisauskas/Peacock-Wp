<?php get_header();?>

<?php

// The number of all posts for a given query
$posts_found = $GLOBALS['wp_query']->found_posts;
// The number of posts for just the page
$posts_count = $GLOBALS['wp_query']->post_count;

if(have_posts()): ?>
  <div class="container-text">
  	<?php while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php $date = get_the_date(); ?>
      <p><?php echo $date  ?> </p>
      <img src="<?php the_post_thumbnail_url('gallery'); ?>" alt="Ayurvedas inventory">
      <?php the_content(); ?>


  	<?php endwhile; ?>
  </div>
<?php else: ?>



<?php endif; ?>


<?php get_footer(); ?>
