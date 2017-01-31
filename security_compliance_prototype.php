<?php
   /*
   Plugin Name: Security compliance prototype
   Description: Survey for security compliance
   License: GPL2
   */

add_action('init', 'security_compliance_prototype');

function security_compliance_prototype() {
  register_post_type( 'security_compliance',
    array(
      'labels' => array(
        'name' => __( 'Security Compliance' ),
        'add_new' => __('Add New Declaration'),
        'add_new_item' => __('Add New declaration'),
      ),
      'public' => true,
      'has_archive' => true,

    )
  );
}
