<div class="container-text">

<?php $subtitle = get_field('p_r_subtitle'); if($subtitle): ?>
  <h1><?php echo $subtitle; ?></h1>
<?php endif; ?>

<?php $img = the_post_thumbnail_url('full'); if ($img): ?>
  <img src="<?php the_post_thumbnail_url('full');?>">
<?php endif; ?>

</div>
