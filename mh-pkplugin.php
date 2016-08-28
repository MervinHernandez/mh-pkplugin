<?php
/*
Plugin Name: Piklist - MH.com Plugin
Plugin URI: http://piklist.com
Description: Adds the custom PikList-enabled functionality and features to my site
Version: 0.0.5
Author: Mervin Hernandez
Author URI: http://mervinhernandez.com
Plugin Type: Piklist
Text Domain: mh-pkplugin
*/
if (!defined('ABSPATH'))
  {exit;}

/*** myBooks - Post Type Definition ***/
include 'mybooks.php';
/*** myFriends - Post Type Definition ***/
include 'myfriends.php';
