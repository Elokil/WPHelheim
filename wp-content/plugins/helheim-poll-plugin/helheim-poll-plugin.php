<?php
/**
 * @package HelheimPollPlugin
 */
/*
Plugin Name: Helheim Poll Plugin
Description:This plugin is used to submit a poll to your community
Version:0.1
Author: Jérôme "Elokil" Cousinou
Author URI: http://jcousinou.fr/
License:GPLv2 or later
Text Domain: helheim-poll-plugins
*/


if(! function_exists('add_action')){
  echo 'hey, you can\'t access this file, you silly human!!';
  exit;
};

class HelheimPollPlugin
{

  function __construct(){
    add_action( 'init', array($this, 'custom_post_type'));
  }

  function register_admin_scripts(){
    add_action('admin_enqueue_scripts', array($this, 'enqueue'));
  }
  function register_scripts(){
    add_action('wp_enqueue_scripts', array($this, 'enqueue'));
  }


  function activate(){
    //generated CPT
    $this->custom_post_type();
    //flush rewrite rules
    flush_rewrite_rules();
  }

  function deactivate(){
    //flush rewrite rules
    flush_rewrite_rules();
  }
  function custom_post_type(){
    register_post_type( 'poll', ['public'=>true, 'label' => 'Polls'] );
  }
  function enqueue(){
    // enqueue all our scripts
    wp-wp_enqueue_style( 'pollstyle', plugins_url('/asset/poll.css', __FILE__) );
    wp-wp_enqueue_script( 'pollscript', plugins_url('/asset/poll.js', __FILE__) );
  }

}

if(class_exists('HelheimPollPlugin')){
  $helheimPollPlugin = new HelheimPollPlugin(); //we create an instance of our class
  $helheimPollPlugin->register();
};


//Hook
//activation
register_activation_hook( __FILE__ , array($helheimPollPlugin, 'activate'));

//deactivation
register_deactivation_hook( __FILE__ , array($helheimPollPlugin, 'deactivate'));