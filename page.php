<?php get_header(); ?>

<div class="jumbotron page-jumbo">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      
      <?php if(have_posts()): ?>
        <?php while(have_posts()): ?>
          <?php the_post(); ?>
      
          <?php the_content(); ?>
      
        <?php endwhile; ?>
      <?php endif; ?>
      
    </div>
  </div>
</div>

<?php get_footer(); ?>