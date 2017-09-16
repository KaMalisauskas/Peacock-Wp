<div class="container-text">


      <a href="<?php echo home_url(); ?>"><img src="<?php the_post_thumbnail_url('medium'); ?>" alt="Logo"></a>


  <div class="center">
    <h1 class="contact_us"><?php $title = get_field('p_cu_subtitle'); if ($title) { echo $title; } else { the_title(); }; ?></h1>

<!-- Fetching contact info -->

    <?php if( have_rows('p_cu_contact_information') ):?>

     <?php while ( have_rows('p_cu_contact_information') ) : the_row(); ?>

        <p><?php the_field('p_cu_ci_info_title'); ?></p>
        <ul class="smallerTxt">

          <?php if( have_rows('p_cu_ci_phone_email') ):?>
           <?php while ( have_rows('p_cu_ci_phone_email') ) : the_row(); ?>
             <!-- checking if email and phone exist -->
             <?php $email = get_sub_field('p_cu_ci_ci_email'); if ($email): ?>
              <li><a href="email:<?php echo $email; ?>"><?php echo $email; ?> </a> <?php the_sub_field('languages_spoken'); ?></li>
             <?php endif; ?>

             <?php $tel = get_sub_field('p_cu_ci_cl_phone'); if ($tel): ?>
              <li><a href="tel:<?php echo $tel; ?>"><?php echo $tel; ?> </a> <?php the_sub_field('languages_spoken'); ?></li>
             <?php endif; ?>


           <?php endwhile; ?>
         <?php endif; ?>

        </ul>
      <?php endwhile; ?>
    <?php endif; ?>

    <h3 class="blue">We invite everyone to visit our resort</h3>

    <?php the_content(); ?>
      <!-- <table>
        <tr>
          <td>Your Name (reuquired):</td><td> <input type="text" name="name" placeholder="Your name" required></td>
        </tr>
          <td>Your Email (required):</td><td> <input type="text" name="email" placeholder="Email" required></td>
         <tr>
          <td>Skype:</td><td> <input type="text" name="skype" placeholder="Your Skype" required></td>
         </tr>
         <tr>
          <td>Facebook:</td><td> <input type="text" name="facebook" placeholder="Your Facebook" required></td>
         </tr>
         <tr>
          <td>City:</td><td> <input type="text" name="city" placeholder="Your city" required></td>
         </tr>
         <tr>
          <td>Country:</td><td> <input type="text" name="country" placeholder="Your Country" required></td>
         </tr>
         <tr>
          <td>Subject:</td><td> <input type="text" name="subject" placeholder="Subject" required></td>
         </tr>
         <tr>
          <td>Your Message:</td><td><textarea name="message" placeholder="Your message" required></textarea></td>
         </tr>
         <tr>
           <td><input type="submit" name="submit" value="Send"></td>
      </table> -->
  </div>
</div>
