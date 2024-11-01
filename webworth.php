<?php
/*
Plugin Name: Blog or Website Value Calculator
Plugin URI: http://www.webworth.info/wp-plugin/
Description: Blog or Website Value Calculator
Author: Rob Bradley
Version: 0.3
Author URI: http://www.webworth.info
*/

function webworth() 
{
$url = 'www.webworth.info/'.$host;
$host = $_SERVER['HTTP_HOST'];

echo '<a href="http://www.webworth.info/'.$host.'" target="_blank" rel="follow"><img src="http://www.webworth.info/'.$host.'/sitewidget.gif" alt="Website Value" /></a>';
}

function widget_webworth($args) {
  extract($args);
  echo $before_widget;
   echo $before_title;
?>
Blog Value
<?php 

  echo $after_title; 
  webworth(); 
  echo $after_widget;
}

function widget_webworth_init()
{
  register_sidebar_widget(__('Blog Value'), 'widget_webworth');     
}

add_action("plugins_loaded", "widget_webworth_init");

?>
