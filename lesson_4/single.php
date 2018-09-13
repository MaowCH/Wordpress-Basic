<?php get_header(); ?>

<?php
  while(have_posts()):
    the_post(); 
?>
 <!-- Blog Post -->
 <div class="card mb-4">

        <h2 style="padding:10px;" class="card-title"><?php the_title() ?></h2>

      <?php the_post_thumbnail('full' , array('class'=>'')); ?>
      <div class="card-body">
        
        <p class="card-text">
          <?php 
            the_content();
          ?>
        </p>
      
      </div>
      <div class="card-footer text-muted">
        Posted on <?php the_time('d.m.y') ?>
     
      </div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>