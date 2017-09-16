
  <div class="container-text">


    <h1><?php ($title) ? the_field('h_aa_subtitle') : the_title();?></h1>
    <?php the_content(); ?>

     <?php if( have_rows('p_s_posts') ):?>
         <?php while ( have_rows('p_s_posts') ) : the_row(); ?>

           <?php $post_header = get_sub_field('p_s_p_subtitle'); if($post_header): ?>
             <h3><?php the_sub_field('p_s_p_subtitle');?></h3>
           <?php endif; ?>

           <?php $post_img = get_sub_field('p_s_p_img'); if($post_img): ?>
             <img src="<?php the_sub_field('p_s_p_img'); ?>" alt="Shirodhara">
           <?php endif; ?>
           <!-- printink post text -->
           <?php the_sub_field('p_s_p_text'); ?>

          <?php endwhile; ?>
        <?php endif ?>

        <?php $services = get_field('p_s_services'); if($services): ?>
          <h2><?php the_field('p_s_services'); ?></h2>

          <?php $schedule = get_field('p_s_schedule_name'); if ($schedule): ?>
            <h3><?php the_field('p_s_schedule_name'); ?></h3>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="Flower">
            <?php if( have_rows('p_s_schedule') ):?>

                <ul>
                <?php while ( have_rows('p_s_schedule') ) : the_row(); ?>

                  <li><?php the_sub_field('p_s_s_daily_plan'); ?></li>

                <?php endwhile; ?>
                </ul>

            <?php endif; ?>
          <?php endif; ?>

          <?php $add_services = get_field('p_s_aditional_services_header'); if ($add_services): ?>
            <h3><?php the_field('p_s_aditional_services_header'); ?></h3>

            <?php $intro_service = get_field('p_s_start_of_aditional_list'); if ($intro_service): ?>
              <p class="services"><?php the_field('p_s_start_of_aditional_list'); ?></p>
            <?php endif; ?>
            <!-- start of a repeater -->
            <?php if( have_rows('p_s_aditional_services') ):?>
              <ul>
                  <?php while ( have_rows('p_s_aditional_services') ) : the_row(); ?>

                    <li><?php the_sub_field('p_s_as_aditional_service');?>;</li>

                  <?php endwhile; ?>
              </ul>
            <?php endif; ?>

          <?php endif; ?>

          <?php $add_services = get_field('p_s_aditional_services_header'); if ($add_services): ?>
            <p><strong>Note:</strong> <?php the_field('p_s_note'); ?></p>
          <?php endif; ?>

          <?php if( have_rows('p_s_end_page_pictures') ):?>
            <div class="room_gallery">
              <?php while ( have_rows('p_s_end_page_pictures') ) : the_row(); ?>
                <!-- getting img array, to maintain same resolution -->
                <?php $img = get_sub_field('p_s_epp_img');?>
                <div class="room_img_container">
                  <img src="<?php echo $img["sizes"]["gallery"]?>" alt="Room">
                </div>

              <?php endwhile; ?>
            </div>
          <?php endif; ?>

        <?php endif; ?>
  </div>
