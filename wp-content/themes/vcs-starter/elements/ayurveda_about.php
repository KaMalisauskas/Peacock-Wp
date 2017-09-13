<?php $title = get_field('h_aa_subtitle'); ?>

  <div class="container-text">
    <h1><?php ($title) ? the_field('h_aa_subtitle') : the_title();?></h1>
    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="Ayurvedas inventory">
    <?php the_content() ?>
  

  </div>
