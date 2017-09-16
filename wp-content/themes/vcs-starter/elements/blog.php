<?php

$post_data = get_post(34);
global $post;
$post = $post_data;
setup_postdata($post);
?>


<div style="margin-bottom:20px;" class="container-text">

  <?php $subtitle = get_field('p_b_subtitle'); if ($subtitle): ?>
    <h1 ><?php the_field('p_b_subtitle'); ?></h1>
  <?php endif; ?>

  <?php $content = get_field('p_a_content'); if($content): ?>
    <p><?php the_field('p_a_content'); ?></p>
  <?php endif; ?>

  <?php if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <h3><?php the_title(); ?></h3>

        <img src="<?php the_post_thumbnail_url(); ?>">

        <?php $date = get_the_date(); ?>
        <p><?php echo $date  ?> </p>

        <?php the_excerpt(); ?>
           <a href="<?php the_permalink(); ?>" style="text-decoration:underline"><?php _e('Read more!'); ?></a></p>
        <?php endwhile; ?>
    <?php endif; ?>

</div>


<?php wp_reset_postdata(); ?>
