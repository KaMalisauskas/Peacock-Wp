
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
        <h2>Other services</h2>

        <h3>Daily schedule:</h3>
            <img src="../images/ajurveda-flower.jpg" alt="Flower">
        <ul>
          <li>6.30 - 7.30 : Yoga class</li>
          <li>8:00 –  9:00 : Breakfast</li>
          <li>9:00 –  9:30 : Daily doctor‘s consultation</li>
          <li>9:00 – 12:30 : Ayurveda treatments</li>
          <li>13:00 – 14:00 : Lunch</li>
          <li>14:00 – 16:30 : Ayurveda treatments</li>
          <li>17:30 – 18:30 : Dinner</li>
          <li>21:00 – 06:30 : Rest and silence time</li>

        </ul>

        <h3>Your beauty in the hands of Ayurvedic medicine</h3>

        <p class="services">Peacock Ayurveda Garden also provides the following services:</p>
        <ul>
          <li>Free transportation from the resort to the beach and the town of Dickwella (about 8 min.)</li>
          <li>Transportation to any destination of your choice and short sightseeing tours (for extra fee)</li>
          <li>Transfer to and from Colombo airport (190 km) – €85 per trip</li>
          <li>Transfer to and from Mattala airport (90 km) – €45 per trip</li>
        </ul>
        <p><strong>Note:</strong> If transfer is provided for more than 1 passenger, the price will be divided according to the number of passengers.</p>

        <div class="room_gallery">
          <div class="room_img_container">
            <img src="../images/procedure.jpg" alt="Room">
          </div>
          <div class="room_img_container">
            <img src="../images/bungalo.jpg" alt="Room">
          </div>
          <div class="room_img_container">
            <img src="../images/yoga.jpg" alt="Room">
          </div>
        </div>

  </div>
