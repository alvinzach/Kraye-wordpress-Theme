<?php
function kraye_theme_customizer( $wp_customize ) {
  //creating a section for logo
  $wp_customize->add_section( 'kraye_logo_section' , array(
    'title'       => __( 'Logo', 'kraye' ),
    'priority'    => 20,
    'description' => 'Upload a logo to replace the default site name and description in the header',
  ) );

 $wp_customize->add_setting('kraye_logo')  ;
 $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'kraye_logo', array(
    'label'    => __( 'Logo', 'kraye' ),
    'section'  => 'kraye_logo_section',
    'settings' => 'kraye_logo',
) ) );

//creating a section for Social icons
$wp_customize->add_section( 'kraye_social_section' , array(
  'title'       => __( 'Social icons', 'kraye' ),
  'priority'    => 30,
  'description' => 'Insert links to social profiles',
) );
//creating a section for facebook

$wp_customize->add_setting( 'facebook', array(
    'default' => '',
) );

$wp_customize->add_control( 'facebook', array(
    'label'      => 'Facebook: ',
    'section'    => 'kraye_social_section',
    'type'       => 'text',
) );
//creating a section for twitter

$wp_customize->add_setting( 'twitter', array(
    'default' => '',
) );

$wp_customize->add_control( 'twitter', array(
    'label'      => 'twitter: ',
    'section'    => 'kraye_social_section',
    'type'       => 'text',
) );

//creating a section for instagram

$wp_customize->add_setting( 'instagram', array(
    'default' => '',
) );

$wp_customize->add_control( 'instagram', array(
    'label'      => 'instagram: ',
    'section'    => 'kraye_social_section',
    'type'       => 'text',
) );
//creating a section for pinterest

$wp_customize->add_setting( 'pinterest', array(
    'default' => '',
) );

$wp_customize->add_control( 'pinterest', array(
    'label'      => 'pinterest: ',
    'section'    => 'kraye_social_section',
    'type'       => 'text',
) );
//creating a section for gplus

$wp_customize->add_setting( 'gplus', array(
    'default' => '',
) );

$wp_customize->add_control( 'gplus', array(
    'label'      => 'gplus: ',
    'section'    => 'kraye_social_section',
    'type'       => 'text',
) );

//creating a section for credits
$wp_customize->add_section( 'kraye_credit_section' , array(
  'title'       => __( 'Footer credits', 'kraye' ),
  'priority'    => 40,
  'description' => 'Insert footer credits',
) );
//creating a section for credit

$wp_customize->add_setting( 'credit', array(
    'default' => '',
) );

$wp_customize->add_control( 'credit', array(
    'label'      => 'footer credits: ',
    'section'    => 'kraye_credit_section',
    'type'       => 'text',
) );
}
add_action( 'customize_register', 'kraye_theme_customizer' );
 ?>
