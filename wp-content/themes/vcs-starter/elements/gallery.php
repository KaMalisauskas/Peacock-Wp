<h1 class="gallery"><?php $title = get_field(''); ($title) ? the_field('') : the_title();?></h1>
<?php $content = the_content(); if ($content): the_content(); endif; ?>
  <?php if( have_rows('p_g_gallery_img') ):?>
    <div class="container_img">

      <?php  $b = 1; while ( have_rows('p_g_gallery_img') ) : the_row(); ?>

        <?php $img = get_sub_field('p_g_gi_img');?>

        <div class="container">
          <img src="<?php echo $img["sizes"]["gallery"]?>" onclick="openModal();currentSlide(<?php echo $b; ?>)" class="hover-shadow image">
        </div>
      <?php $b++; endwhile;?>

     </div>
<!-- start of expanded gallery -->

    <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">

        <!-- biggest imgs -->

        <?php $i++; while ( have_rows('p_g_gallery_img') ) : the_row(); ?>

          <?php $img = get_sub_field('p_g_gi_img');?>

          <div class="mySlides">
          <!-- printing img and number of wich image is it as well as total count -->
            <div class="numbertext"><?php echo $i; ?> / <?php echo count( get_field('p_g_gallery_img') ) ?>;</div>
              <img src="<?php echo $img["sizes"]["large"]?>" style="width:100%">
          </div>

        <?php $i++; endwhile; ?>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
          <p id="caption"></p>
        </div>

        <!-- small thumbnail img -->
        <?php $a = 1; while ( have_rows('p_g_gallery_img') ) : the_row(); ?>
          <?php $img = get_sub_field('p_g_gi_img');?>
          <div class="column">
            <img class="demo" src="<?php echo $img["sizes"]["thumbnail"]?>" onclick="currentSlide(<?php echo $a?>)" alt="Nature">
          </div>
        <?php $a++;endwhile; ?>

      </div>
    </div>
  <?php endif ?>
  
  <div class="gap">
  </div>
