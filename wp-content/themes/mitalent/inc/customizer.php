<?php

function mitalent_customize_register( $wp_customize ) {

//Custom site logo

  $wp_customize->add_section('mitalent_custom_logo', array(
    'title' => __('Logo', 'mitalent'),
    'priority' => 10,
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

//  Social icons

  $wp_customize->add_section('mitalent_social', array(
    'title' => __('Socials', 'mitalent'),
    'priority' => 10,
  ));

  $wp_customize->add_setting('mitalent_facebook', array(
    'default' => 'https://www.facebook.com/',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mitalent_facebook_link', array(
    'label' => __('Facebook', 'mitalent'),
    'section' => 'mitalent_social',
    'settings' => 'mitalent_facebook',
  )));

  $wp_customize->add_setting('mitalent_instagram', array(
    'default' => 'https://www.instagram.com',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mitalent_instagram_link', array(
    'label' => __('Instagram', 'mitalent'),
    'section' => 'mitalent_social',
    'settings' => 'mitalent_instagram',
  )));

  $wp_customize->add_setting('mitalent_youtube', array(
    'default' => 'https://youtube.com/',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mitalent_youtube_link', array(
    'label' => __('Youtube', 'mitalent'),
    'section' => 'mitalent_social',
    'settings' => 'mitalent_youtube',
  )));

  $wp_customize->add_setting('mitalent_twitter', array(
    'default' => 'https://twitter.com/',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mitalent_twitter_link', array(
    'label' => __('Twitter', 'mitalent'),
    'section' => 'mitalent_social',
    'settings' => 'mitalent_twitter',
  )));

//Custom footer

  $wp_customize->add_section('mitalent_footer_copyright', array(
    'title' => __('Footer copyright', 'mitalent'),
    'priority' => 10,
  ));

  $wp_customize->add_setting('mitalent_footer_copyright', array(
    'default' => '',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mitalent_footer_copyright', array(
    'label' => __('Footer copyright', 'mitalent'),
    'section' => 'mitalent_footer_copyright',
    'settings' => 'mitalent_footer_copyright',
    'type'=> 'textarea',
  )));

  $wp_customize->add_section('mitalent_custom_letter_text', array(
    'title' => __('Footer letter text', 'mitalent'),
    'priority' => 10,
  ));

  $wp_customize->add_setting('mitalent_custom_letter_text', array(
    'default' => '',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mitalent_custom_letter_text', array(
    'label' => __('Footer letter text', 'mitalent'),
    'section' => 'mitalent_custom_letter_text',
    'settings' => 'mitalent_custom_letter_text',
    'type'=> 'textarea',
  )));

}
add_action( 'customize_register', 'mitalent_customize_register' );
