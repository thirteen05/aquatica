<?php $args = array(
  'posts_per_page'   => -1,
  'offset'           => 0,
  'category'         => '',
  'category_name'    => '',
  'orderby'          => 'date',
  'order'            => 'ASC',
  'include'          => '',
  'exclude'          => '',
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'floor-plan',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'	   => '',
  'post_status'      => 'publish',
  'suppress_filters' => true 
);

$floor_plans = get_posts( $args );

$plan_number = 0;

?>

<div class="container hidden-md hidden-lg">

<?php foreach($floor_plans as $plan): ?>
    <?php $plan_number++; ?>
  
  
    <div class="row floor-plan-row" style="margin-bottom: 120px;">
      <div class="col-md-6 <?php echo $plan_number % 2 == 0 ? 'col-md-push-6' : 'text-right'; ?>">

        <img src="http://placehold.it/400x400">

      </div>
      <div class="col-md-6 floor-plan-info-wrapper <?php echo $plan_number % 2 == 0 ? 'col-md-pull-6 text-right' : ''; ?>">
        
          <h2 class="floor-plan-title font-light-blue"><?php echo $plan->post_title; ?></h2>
          <h3 class="floor-plan-bedrooms">Number of Bedrooms: <?php echo get_bedrooms_number( $plan->bedrooms ); ?></h3>
          <h3 class="floor-plan-bathrooms">Number of Bathroooms: <?php echo get_bathrooms_number( $plan->bathrooms); ?></h3>
          <h3 class="floor-plan-footage">Estimated Square Footage: <?php echo $plan->sq_footage; ?> ft²</h3>
          <p class="font-light padding-bottom-30">
            <?php echo $plan->post_content; ?>
          </p>
          <div class="btn btn-default btn-lg btn-block floor-plan-btn">Check for Availability</div>
      </div>
    </div>

<?php endforeach; ?>
  
</div>