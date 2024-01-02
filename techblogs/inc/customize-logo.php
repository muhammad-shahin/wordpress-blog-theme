<?php
function tech_customize_logo($wp_customize)
{
 $wp_customize->add_section('tech_header_area', array(
  'title' => __('Header Area', 'tech'),
  'description' => __('You can update your header logo here.', 'tech'),
 ));
 $wp_customize->add_setting('tech_logo', array(
  'default' => get_bloginfo('template_directory') . '/assets/img/logo_white.png',
 ));
 $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'tech_logo', array(
  'label' => __('Upload Logo', 'tech'),
  'description' => __('You can update your header logo here.', 'tech'),
  'setting' => 'tech_logo',
  'section' => 'tech_header_area',
 )));
}
add_action("customize_register", "tech_customize_logo");