<?php
 
 /**
  * Trigger this file on Plugin uninstall
  *
  *@package HelheimPollPlugin
  */

  if(! definned('WP_UNINSTALL_PLUGIN')){
    die;
  };

  //Clear Data
  $polls = get_posts( array('post_type' => 'poll', 'numberposts' => -1 ) );

  foreach($polls as $poll){
    wp_delete_post($poll->ID, true);
  };
  //Access db via SQL
  //global $wpdb;
  //$wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'poll' " );
  //$wpdb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts) " );
  //$wpdb->query( "DELETE FROM wp_term_relationships WHERE post_id NOT IN (SELECT id FROM wp_posts) " );