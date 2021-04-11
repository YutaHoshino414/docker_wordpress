<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Blog - Start</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo get_template_directory_uri(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/clean-blog.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <!-- Page Header -->
  <?php get_header(); ?>
  
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php while (have_posts( )): the_post(); ?>
       <div class="post-preview card shadow">
          <div class="card-header">
            <a href="<?php the_permalink(  ); ?>">
              <h4 class="post-title">
                <?php the_title(  ); ?>
              </h4>
            </a>
          </div>
          <div class="card-body">
            <a href="<?php the_permalink(  ); ?>">
              <h4 class="post-subtitle">
              <?php the_content(  ); ?>
              </h4>
            </a>
            <small class="post-meta float-right">Posted by
              <?php the_author(  ); ?>
              on <?php the_time( 'Y/m/d'); ?></small>
          </div>
        </div>
        <hr>
          <?php endwhile; ?>
       
        <!-- Pager -->
        <div class="clearfix">
        <?php previous_posts_link( ); ?>
        <?php next_posts_link( ); ?>
        </div>
      </div>
    </div>
  </div>
  <hr>
   <!-- Footer -->
  <?php get_footer(); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/clean-blog.min.js"></script>
  <?php wp_footer(); ?>
</body>

</html>