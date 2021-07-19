<?php 

function wikisoft_theme_setup () {
    load_theme_textdomain( 'wikisoft' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', ['audio', 'video', 'image', 'gallery', 'quote', 'link'] );
    add_theme_support( 'html5', ['search-form', 'comment-list'] );
    add_editor_style( '/assets/css/editor-style.css' );
}
add_action('after_setup_theme', 'wikisoft_theme_setup');