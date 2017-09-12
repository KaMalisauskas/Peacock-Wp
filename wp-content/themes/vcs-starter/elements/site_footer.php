<div class="footer" style="background:<?php the_field('h_gs_footer_color', 'option'); ?>;">

  <div class="contacts">
    <h3>Contacts</h3>
    <p>Our Ayurveda Resort address:</p>
    <a href="<?php the_field("h_location", "option"); ?>" class="map">
      <?php the_field("h_address", "option"); ?></a>
    <p>Phone address:</p>
    <a href="tel:+<?php the_field("h_phone", "option"); ?>">+<?php the_field("h_phone", "option") ?></a> <br>
    </address>
  </div>
  <p class="copyright">&copy; <?php echo date('Y'); ?> <?php _e("All rights reserved", "vcs-starter"); ?></p>


</div>
