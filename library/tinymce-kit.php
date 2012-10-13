<?php  
/* 
Plugin Name: Custom Styles 
Plugin URI: http://www.speckygeek.com 
Description: Add custom styles in your posts and pages content using TinyMCE WYSIWYG editor. The plugin adds a Styles dropdown menu in the visual post editor. 
Based on TinyMCE Kit plug-in for WordPress 
 
http://plugins.svn.wordpress.org/tinymce-advanced/branches/tinymce-kit/tinymce-kit.php 
 
*/  

  
/** 
 * Add "Styles" drop-down 
 */  
add_filter( 'mce_buttons_2', 'tuts_mce_editor_buttons' );  
  
function tuts_mce_editor_buttons( $buttons ) {  
    array_unshift( $buttons, 'styleselect' );  
    return $buttons;  
}  
  
/** 
 * Add styles/classes to the "Styles" drop-down 
 */  
add_filter( 'tiny_mce_before_init', 'tuts_mce_before_init' );  
  
function tuts_mce_before_init( $settings ) {  
  
    $style_formats = array(  
        array(  
            'title' => 'Orange Box',  
            'block' => 'div',  
            'classes' => 'orangeBox',  
            'wrapper' => true  
        ) 
    );  
  
    $settings['style_formats'] = json_encode( $style_formats );  
  
    return $settings;  
  
}  
  
/* Learn TinyMCE style format options at http://www.tinymce.com/wiki.php/Configuration:formats */  
  

?>