<?php

function mitalent_customize_register( $wp_customize ) {

//Custom site logo

  $wp_customize->add_section('mitalent_custom_logo', array(
    'title' => __('Logo', 'mitalent'),
    'priority' => 30,
  ));

  $wp_customize->add_setting('mitalent_custom_logo', array(
    'default' => '',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mitalent_custom_logo', array(
    'label' => __('Logo', 'mitalent'),
    'section' => 'mitalent_custom_logo',
    'settings' => 'mitalent_custom_logo',
  )));

}
add_action( 'customize_register', 'mitalent_customize_register' );
