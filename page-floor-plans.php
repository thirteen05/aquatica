<?php get_header(); ?>

<div class="jumbotron page-jumbo" id="floor-plans-jumbo">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
          <h1 class="font-white"><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('sections/plans/section-mobile-plans'); ?>
<?php get_template_part('sections/plans/section-desktop-plans'); ?>
  
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php the_content(); ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>