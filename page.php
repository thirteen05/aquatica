<?php get_header(); ?>

<?php global $post; ?>

<div class="jumbotron page-jumbo" id="page-jumbo-<?php echo strtolower( $post->post_name ); ?>">
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
    <div class="col-md-12 padding-bottom-60">
      
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