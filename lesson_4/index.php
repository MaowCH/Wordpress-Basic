<?php get_header(); ?>




    <h1 class="my-4">เรื่องน่าอ่าน
      <small><?php echo date('d/m/Y'); ?></small>
    </h1>

<?php
$paged = get_query_var('paged');
$args = array(
  'cat' => '2',
  'posts_per_page' => '3',
  'paged' => $paged
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

<?php
$big = 999999999; // need an unlikely integer
 
echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $the_query->max_num_pages
) );
?>







<?php get_footer(); ?>