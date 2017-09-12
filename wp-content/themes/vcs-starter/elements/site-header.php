
  <div class="faddingIntr" style="background-image:url('<?php the_field('h_gs_main_header_image', 'option'); ?>');">
    <a href="index.html"><img class="logoIntr hidden1" src="<?php the_field("logo", "option"); ?>" alt="Logo"></a>
    <p class="hidden1"><?php the_field('h_gs_header_title','option'); ?>!<p>
  </div>

  <div class="everything">
  <div class="header" style='background-image:url("<?php the_field('h_gs_main_header_image', 'option'); ?>")'>
    <nav>

      <div class="burger-container">
          <div class="burger"></div>
      </div>
      <?php our_awesome_menu("", "ul-nav hidden2", "primary-navigation") ?>


    </nav>
    <a href="#"><img src="<?php the_field("logo", "option"); ?>" alt="Logo"></a>
    <div class="insertPicture" id="fade">
    </div>
  </div>
