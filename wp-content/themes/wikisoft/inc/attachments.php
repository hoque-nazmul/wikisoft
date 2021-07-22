<?php 
define( 'ATTACHMENTS_SETTINGS_SCREEN', false ); 
add_filter( 'attachments_default_instance', '__return_false' );

function gallery( $attachments ) {
    $post_id = null;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
        $post_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
    if (!$post_id || get_post_format($post_id) != 'gallery') {
        return;
    }

    $fields         = array(
        array(
        'name'      => 'title',                         
        'type'      => 'text',                          
        'label'     => __( 'Title', 'wikisoft' ),    
        'default'   => 'title',                        
        ),
    );
    
    $args = array(
        'label'         => 'Gallery',
        'post_type'     => array( 'post' ),
        'filetype'      => 'image',  
        'note'          => __('Add Image for Gallery', 'wikisoft'),
        'append'        => true,
        'button_text'   => __( 'Attach Images', 'wikisoft' ),
        'fields'        => $fields,
    );
    
    $attachments->register( 'gallery', $args ); 
}
    
add_action( 'attachments_register', 'gallery' );