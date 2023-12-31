<?php
add_action('cmb2_init', 'tech_add_slider_content');
function tech_add_slider_content()
{

 $prefix = '_tech_';

 $cmb = new_cmb2_box(array(
  'id' => $prefix . 'slider_content',
  'title' => __('Slider Content', 'tech'),
  'object_types' => array('page', 'post'),
  'context' => 'normal',
  'priority' => 'default',
 ));

 $content = $cmb->add_field(array(
  'name' => __('Slide Content', 'tech'),
  'id' => $prefix . 'banner_content',
  'type' => 'group',
 ));

 $cmb->add_group_field($content, array(
  'name' => __('Title', 'tech'),
  'id' => $prefix . 'title',
  'type' => 'text',
 ));

 $cmb->add_group_field($content, array(
  'name' => __('Content', 'tech'),
  'id' => $prefix . 'content',
  'type' => 'textarea',
 ));

 $cmb->add_group_field($content, array(
  'name' => __('Image', 'tech'),
  'id' => $prefix . 'image',
  'type' => 'file',
  'text' => array(
   'add_upload_file_text' => __('Upload Slide Image', 'tech'),
  ),
  'query_args' => array(
   'type' => array('image/png', 'image/jpeg', 'image/gif', 'image/webp', 'image/jpg'
   )),
  'options' => array(
   'url' => false
  )
 ));

}