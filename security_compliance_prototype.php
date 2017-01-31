<?php
   /*
   Plugin Name: Security compliance prototype
   Description: Survey for security compliance
   License: GPL2
   */

require_once plugin_dir_path(__FILE__) . 'ext/meta-box/meta-box.php';

function security_compliance_prototype() {
  register_post_type( 'security_compliance',
    array(
      'labels' => array(
        'name' => __( 'Security Compliance' ),
        'add_new' => __('Add New Declaration'),
        'add_new_item' => __('Add New declaration'),
        'search_items' => __('Search Declarations'),
        'view_item' => __('View declaration'),
        'view_items' => __('View declarations'),
      ),
      'public' => true,
      'has_archive' => true,
      'supports'    => array(''),

    )
  );

  add_post_type_support('post', '');
}


function declarationMeta($meta_boxes){

  $prefix = 'sc_pro_';
  $meta_boxes[] = array(
    'title'      => __( 'Create Declaration', $prefix ),
    'post_types' => 'security_compliance',
    'fields'     => array(
                      array(
                        'name' => __( 'Declaration Name', $prefix ),
                        'id'   => $prefix . 'name',
                        'type' => 'text',
                      ),
                    ),
    
  );
  return $meta_boxes;
}

add_action( 'rwmb_meta_boxes', 'declarationMeta' );
add_action('init', 'security_compliance_prototype');

