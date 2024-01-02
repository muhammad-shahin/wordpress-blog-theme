<?php
function tech_change_logo_position($wp_customize)
{
 $wp_customize->add_section("tech_logo_position_area", array(
  "title" => __("Logo Position", "tech"),
  "description" => __("You can change your logo position from here.", "tech"),
 ));

 $wp_customize->add_setting("tech_logo_position", array(
  'default' => 'flex-row',
 ));

 $wp_customize->add_control('tech_logo_position', array(
  'label' => __('Logo Positions', 'tech'),
  "description" => __("Select Your Logo Position", "tech"),
  'type' => 'radio',
  'setting' => 'tech_logo_position',
  'section' => 'tech_logo_position_area',
  'choices' => array(
   'flex-row' => __('Left Logo', 'tech'),
   'flex-row-reverse' => __('Right Logo', 'tech'),
   'flex-col' => __('Center Logo', 'tech'),
  ),
 ));
}
add_action('customize_register', 'tech_change_logo_position');