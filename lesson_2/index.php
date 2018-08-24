<?php get_header(); ?>


  <!-- Page Content -->
  <div class="container">

<div class="row">

  <!-- Blog Entries Column -->
  <div class="col-md-8">

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

  </div>

  <!-- Sidebar Widgets Column -->
  <div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header">Search</h5>
      <div class="card-body">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
      <h5 class="card-header">Categories</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">Web Design</a>
              </li>
              <li>
                <a href="#">HTML</a>
              </li>
              <li>
                <a href="#">Freebies</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">JavaScript</a>
              </li>
              <li>
                <a href="#">CSS</a>
              </li>
              <li>
                <a href="#">Tutorials</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
      <h5 class="card-header">Side Widget</h5>
      <div class="card-body">
        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
      </div>
    </div>

  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->




<?php get_footer(); ?>