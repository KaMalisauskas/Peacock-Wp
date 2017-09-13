
  <div class="container-text">
    <h1><?php ($title) ? the_field('h_aa_subtitle') : the_title();?></h1>
    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="Ayurveda bottles" class="left">
    <?php the_content(); ?>
    <h3><?php the_field('h_ah_important_phrase'); ?></h3>

    <div class="room_gallery">
      <?php $i = 1; while ($i<=3): ?>
        <?php $img_link = 'h_ah_3_img_line_' . $i; $img = get_field($img_link); ?>
      <div class="room_img_container">
        <img src="<?php echo $img["sizes"]["gallery"];?>">
      </div>
      <?php $i++; endwhile; ?>
    </div>

    <?php the_field('h_ah_finishing_lines'); ?>
  </div>
