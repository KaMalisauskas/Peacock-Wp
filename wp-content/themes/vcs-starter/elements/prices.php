<div class="container-text">
  <h1><?php ($title) ? the_field('h_aa_subtitle') : the_title();?></h1>
  <h5><?php the_field('p_p_price_per'); ?></h5>



  <div class="prices_table">
    <table>

      <tr>
        <th>Period</th>
        <th><?php the_field('p_p_expensvie_period'); ?></th>
        <th><?php the_field('p_p_cheap_period'); ?></th>
      </tr>
   <?php if( have_rows('p_p_prices_info') ):?>

    <?php while ( have_rows('p_p_prices_info') ) : the_row(); ?>

            <tr>
              <td><?php the_sub_field('p_p_ep_room_type');?></td>
            <!-- Price repeater -->
            <?php if( have_rows('season_prices') ):?>
              <?php while ( have_rows('season_prices') ) : the_row(); ?>

                  <td><?php the_sub_field('p_p_sp_expensive_half'); ?></td>
                  <td><?php the_sub_field('p_p_sp_cheap_half'); ?></td>
                </tr>

               <?php endwhile ?>
             <?php endif ?>


    <?php endwhile; ?>
   <?php endif; ?>

      </table>
  </div>

  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="Villa" class="prices_picture">
  <?php $content = the_content(); if($content): ?>

    <h3>The prices includes:</h3>

    <div class="prc_include">
      <?php the_content(); ?>
    </div>

  <?php endif; ?>

  <?php $red = get_field('p_p_info_minimum_stay'); if($red): ?>
    <p class="red"><?php the_field('p_p_info_minimum_stay'); ?></p>
  <?php endif; ?>

  <?php $blue = get_field('p_p_info_recommended_stay'); if($blue): ?>
    <p class="blue"><?php the_field('p_p_info_recommended_stay'); ?></p>
  <?php endif;?>

  <?php if( have_rows('p_p_checking_time') ):?>

   <?php while ( have_rows('p_p_checking_time') ) : the_row(); ?>

      <p><strong>Check-in time is <?php the_sub_field('p_p_ct_checking_time'); ?></strong></p>
      <p><strong>Check-out time is <?php the_sub_field('p_p_ct-check_out_time'); ?></strong></p>

    <?php endwhile; ?>

  <?php endif; ?>


  <?php if( have_rows('p_p_additional_services') ):?>

    <h3>Additional services:</h3>

    <ul class="prc_include">
       <?php while ( have_rows('p_p_additional_services') ) : the_row(); ?>
      <li><?php the_sub_field('p_p_as_aditional_service'); ?></li>

        <?php endwhile; ?>
    </ul>
  <?php endif; ?>

  <?php $note = get_field('p_p_note'); if ($note): ?>
    <p><strong>Note:</strong> <?php the_field('p_p_note'); ?></p>
  <?php endif; ?>

  <?php $last = get_field('p_p_last_sentence_'); if($last): ?>
    <div class="price_end">
      <?php the_field('p_p_last_sentence_'); ?>
    </div>
  <?php endif;?>

</div>
