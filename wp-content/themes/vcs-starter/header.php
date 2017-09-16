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
  <link rel="shortcut icon" href="<?php the_field('p_g_favicon', 'options'); ?>" type="image/x-icon">
</head>
<body>

  <?php get_template_part('elements/site-header'); ?>
