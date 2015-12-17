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
<div class="container">

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


<?php foreach($floor_plans as $plan): ?>
    <?php $plan_number++; ?>
  
  
    <div class="row floor-plan-row">
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
<div class="container" id="floor-plans-intro">
  <div class="row padding-bottom-60">
    <div class="col-md-12">
      <h2 class="font-blue font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies nisl at diam consectetur ullamcorper.</h2>
      <h3 class="font-light">
        Aliquam suscipit sagittis arcu. Praesent gravida, velit ac congue gravida, tortor est porta metus, malesuada congue elit ipsum eget leo. Ut pellentesque ultricies quam sit amet tristique. Nulla faucibus viverra magna vitae aliquam. Curabitur pretium eros in urna porttitor, consectetur fringilla lacus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
      </h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-2">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/brands/kohler.gif" />
    </div>
    <div class="col-md-2">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/brands/kohler.gif" />
    </div>
    <div class="col-md-2">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/brands/kohler.gif" />
    </div>
    <div class="col-md-2">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/brands/kohler.gif" />
    </div>
    <div class="col-md-2">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/brands/kohler.gif" />
    </div>
    <div class="col-md-2">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/brands/kohler.gif" />
    </div>
  </div>
  <div class="row padding-top-60 padding-bottom-60">
    <div class="col-md-6">
      <ul>
        <li>Floor to ceiling glass for panoramic water views.</li>
        <li>Ten foot (10′-0) ceiling height in major rooms.</li>
        <li>Stone bathroom floors by seller. (selections provided)buyer shall provide and install all other flooring selections.</li>
        <li>Stone kitchen & Bath counter-tops.(selections provided).</li>
        <li>Undermount sinks and baths</li>
        <li>Two balconies for each residence</li>
        <li>Contemporary casework in kitchens and baths.</li>
        <li>Bath fixtures: american standard, kohler, delta, or equal.</li>
        <li>Viking or equal stainless steel kitchen appliances to include: refrigerator/freezer, convection  oven, dishwasher, under-counter icemaker, microwave, gas cooktop & exhaust hood.</li>
      </ul>
    </div>
    <div class="col-md-6">
      <ul>
        <li>Laundry-GE or equal electric washer & dryer and laundry sink.</li>
        <li>Led under-cabinet lighting.</li>
        <li>Led designer lighting package.</li>
        <li>Door hardware schlage or equal.</li>
        <li>Eight (8’0) foot painted solid core wood interior doors.</li>
        <li>Millwork includes: painted door casings and baseboards. Seller shall coordinate baseboard installation with buyer’s.</li>
        <li>Smooth drywall finish painted with off-white flat latex.</li>
        <li>Millwork painted with gloss acrylic enamel. Benjamin Moor, Sherwin Williams or equal.</li>
      </ul>
    </div>
  </div>
</div>


<?php get_footer(); ?>