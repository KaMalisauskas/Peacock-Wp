<!DOCTYPE HTML>
<html lang="<?php bloginfo('language'); ?>">

<head>
  <title><?php wp_title();?></title>
  <!--uzmesti prie title logo -->
  <?php //echo  ASSETS_URL . "/assets/images/";?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="description" contenet="Our hotel is one of the finnest ayurveda hotels">
  <meta charset="<?php bloginfo('charset');?>">
  <?php wp_head();?>
  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">

</head>
<body>
  
<div class="faddingIntr" style="background-image:url('<?php the_field('h_gs_header_image', 'option'); ?>');">
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
