<?php
/**
 * This file demonstrates how to use 'select' field
 */
add_filter( 'rwmb_meta_boxes', 'your_prefix_select_demo' );
function your_prefix_select_demo( $meta_boxes )
{
	$meta_boxes[] = array(
		'title'  => __( 'Layout/View', 'your-prefix' ),
        'post_types' => 'floor-plan',
		'fields' => array(
			array(
				'name'        => __( 'Number of Bedrooms', 'your-prefix' ),
				'id'          => 'bedrooms',
				'type'        => 'select',
				'clone'       => false,
				// Array of 'value' => 'Label' pairs for select box
				'options'     => array(
					'bedrooms1' => __( '1', 'your-prefix' ),
					'bedrooms2' => __( '2', 'your-prefix' ),
					'bedrooms3' => __( '3', 'your-prefix' ),
					'bedrooms4' => __( '4', 'your-prefix' ),
					'bedrooms5' => __( '5', 'your-prefix' ),
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				// Default selected value
				'std'         => 'value2',
				// Placeholder
				'placeholder' => __( 'Bedrooms...', 'your-prefix' ),
			),
            array(
				'name'        => __( 'Number of Bathrooms', 'your-prefix' ),
				'id'          => 'bathrooms',
				'type'        => 'select',
				'clone'       => false,
				// Array of 'value' => 'Label' pairs for select box
				'options'     => array(
					'bathrooms1' => __( '1', 'your-prefix' ),
					'bathrooms1half' => __( '1 1/2', 'your-prefix' ),
					'bathrooms2' => __( '2', 'your-prefix' ),
					'bathrooms2half' => __( '2 1/2', 'your-prefix' ),
					'bathrooms3' => __( '3', 'your-prefix' ),
					'bathrooms3half' => __( '3 1/2', 'your-prefix' ),
					'bathrooms4' => __( '4', 'your-prefix' ),
					'bathrooms4half' => __( '4 1/2', 'your-prefix' ),
					'bathrooms5' => __( '5', 'your-prefix' ),
					'bathrooms5half' => __( '5 1/2', 'your-prefix' ),
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				// Default selected value
				'std'         => 'value2',
				// Placeholder
				'placeholder' => __( 'Bathrooms...', 'your-prefix' ),
			),
            array(
				'id'          => 'sq_footage',
				'name'        => __( 'Approx. Square Footage', 'your-prefix' ),
				'type'        => 'number',
				// Number step. Set to 'any' to accept float value
				'step'        => 'any',
				// Minimum value
				'min'         => 1000,
				// Placeholder
				'placeholder' => __( 'Enter number:', 'your-prefix' ),
			),
            array(
				'id'          => 'balc-sq-footage',
				'name'        => __( 'Approx. Balcony Sq. Footage', 'your-prefix' ),
				'type'        => 'number',
				// Number step. Set to 'any' to accept float value
				'step'        => 'any',
				// Minimum value
				'min'         => 0,
				// Placeholder
				'placeholder' => __( 'Enter number...', 'your-prefix' ),
			),
            array(
				'name'        => __( 'Estimated Price', 'your-prefix' ),
				'id'          => 'price',
				'type'        => 'text',
				// Default value (optional)
				// Placeholder
				'placeholder' => __( 'Enter Price Estimate...', 'your-prefix' ),
				// Input size
				'size'        => 30
              )
		)
	);
	return $meta_boxes;
}