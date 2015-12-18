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

<div class="container-fluid hidden-xs hidden-sm">
  <div class="row">
    <div class="col-md-12 text-center no-padding" id="plans-desktop-tabs-wrapper">
        <ul class="nav nav-tabs text-center" role="tablist" id="plans-desktop-tabs">
          <li role="presentation" class="active"><a href="#apartment-1" aria-controls="home" role="tab" data-toggle="tab">Apartment 1</a></li>
          <li role="presentation"><a href="#apartment-2" aria-controls="profile" role="tab" data-toggle="tab">Apartment 2</a></li>
          <li role="presentation"><a href="#apartment-3" aria-controls="messages" role="tab" data-toggle="tab">Apartment 3</a></li>
          <li role="presentation"><a href="#penthouse-1" aria-controls="settings" role="tab" data-toggle="tab">Penthouse 1</a></li>
          <li role="presentation"><a href="#penthouse-2" aria-controls="settings" role="tab" data-toggle="tab">Penthouse 2</a></li>
        </ul>
    </div>
  </div>
</div>
<div class="container" id="plans-tabs-content-wrapper">
  <div class="row">
    <div class="tab-content padding-top-30 padding-bottom-30">

<?php foreach($floor_plans as $plan): ?>
    <?php $plan_number++; ?>
    <?php $plan_id_array = array('apartment-1','apartment-2', 'apartment-3', 'penthouse-1', 'penthouse-2'); ?>
  
  
        <!-- Tab panes -->
          <div role="tabpanel" class="tab-pane <?php echo $plan_number - 1 === 0 ? 'active in' : 'fade'; ?>" id="<?php echo $plan_id_array[$plan_number - 1]; ?>">
            
            <div class="col-md-6 text-center">
              
              <img src="http://placehold.it/400x400">

            </div>
            <div class="col-md-6 floor-plan-info-wrapper">

                <h2 class="floor-plan-title font-light-blue"><?php echo $plan->post_title; ?></h2>
                <h3 class="floor-plan-bedrooms no-margin">Number of Bedrooms: <?php echo get_bedrooms_number( $plan->bedrooms ); ?></h3>
                <h3 class="floor-plan-bathrooms no-margin">Number of Bathroooms: <?php echo get_bathrooms_number( $plan->bathrooms); ?></h3>
                <h3 class="floor-plan-footage no-margin padding-bottom-30">Estimated Square Footage: <?php echo $plan->sq_footage; ?> ft²</h3>
                <p class="font-light padding-bottom-30">
                  <?php echo $plan->post_content; ?>
                </p>
                <div class="btn btn-default btn-lg btn-block floor-plan-btn">Check for Availability</div>
              
            </div>
      
          </div>

<?php endforeach; ?>
      
    </div>
  </div>
</div>