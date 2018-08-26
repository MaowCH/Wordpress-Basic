<?php get_header(); ?>




    <h1 class="my-4">เรื่องน่าอ่าน
      <small><?php echo date('d/m/Y'); ?></small>
    </h1>

<?php
$args = array(
  'cat' => '',
  'posts_per_page' => '3'
);
$the_query = new WP_Query($args);

if($the_query->have_posts()) : 

  while($the_query->have_posts()):
    $the_query->the_post(); 
?>

    <!-- Blog Post -->
    <div class="card mb-4">
      <?php the_post_thumbnail('full' , array('class'=>'img1')); ?>
      <div class="card-body">
        <h2 class="card-title"><?php the_title() ?></h2>
        <p class="card-text">
          <?php 
            $content = strip_tags(get_the_content());
            echo iconv_substr($content,0,300,"UTF-8");
          ?>
        </p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted on <?php the_time('d.m.y') ?>
     
      </div>
    </div>


  <?php
    endwhile;

  endif;
  ?>

   

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">&larr; Older</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
      </li>
    </ul>





<?php get_footer(); ?>