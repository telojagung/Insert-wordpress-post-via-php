<?php
include("../wordpress/wp-config.php");
include("../wordpress/wp-admin/includes/taxonomy.php.");


/*
// Create post object
$my_post = array(
  'post_title'    => 'My post '.date('g:i:s'),
  'post_content'  => 'This is my post.',
  'post_status'   => 'publish',
  'post_author'   => 1,
  'post_category' => array(8,39)
);

// Insert the post into the database
wp_insert_post( $my_post );

*/





//wp_create_category('My category name');
$id = get_cat_ID('My category name');
wp_create_category('category 1',$id);







?>
