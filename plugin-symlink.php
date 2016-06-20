<?php
  /*                                                                                                                    
Plugin Name: Plugin Symlink                                                                                             
Plugin URI: http://github.com/liggitt/wordpress-plugin-symlink                                                          
Description: Allows a symlinked folder to be used as the plugins folder. Install in a subdirectory ending with 'plugin-symlink', so the path can be detected correctly.
Version: 1.1
Author: Jordan Liggitt                                                                                                  
Author URI: http://jordan.liggitt.net                                                                                   
License: GPL2                                                                                                           
  */

function liggitt_filter_plugins_url($url) {
  $path = dirname(__FILE__);
  $basename = basename($path);
  if (preg_match('/plugin-symlink$/', $basename)) {
    $path = dirname($path);
  }
  $newurl = str_replace($path, "", $url);
  return $newurl;
}

add_filter('plugins_url', 'liggitt_filter_plugins_url');
