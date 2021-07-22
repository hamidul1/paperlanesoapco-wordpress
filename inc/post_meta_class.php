<?php abstract class paper_lane_soap_Meta_Box {
 
 
    /**
     * Set up and add the meta box.
     */
    public static function add() {
        $screens = [ 'product' ];
        foreach ( $screens as $screen ) {
            add_meta_box(
                'paper_lane_soap_box_id',          // Unique ID
                'Alternative Title Option', // Box title
                [ self::class, 'html' ],   // Content callback, must be of type callable
                $screen                  // Post type
            );
        }
    }
 
 
    /**
     * Save the meta box selections.
     *
     * @param int $post_id  The post ID.
     */
    public static function save( int $post_id ) {
        if ( array_key_exists( 'add_title_for_home', $_POST ) ) {
            update_post_meta( $post_id, 'add_title_for_home', $_POST['add_title_for_home']);  
        }
        if ( array_key_exists( 'add_img_for_home', $_POST ) ) {
            update_post_meta( $post_id, 'add_img_for_home', $_POST['add_img_for_home']);  
        }
    }
 
 
    /**
     * Display the meta box HTML to the user.
     *
     * @param \WP_Post $post   Post object.
     */
    public static function html( $post ) {
        $add_title_for_home = get_post_meta( $post->ID, 'add_title_for_home', true );
        $add_img_for_home = get_post_meta( $post->ID, 'add_img_for_home', true );
        wp_enqueue_media();
        ?>
        <style type="text/css">
            .field_div{margin-bottom: 15px;}
            .field_div label{width: 20%;display: inline-block;font-size: 15px;}
            .field_div input{margin-top: 10px;height: 35px;font-size: 15px;width: 78%;}
        </style>
        <div class="field_div">
            <label for="add_title_for_home_page">Add Title For Home Page</label>
            <input type="text" name="add_title_for_home" value="<?php echo $add_title_for_home; ?>">       
        </div>       
        <div class="field_div">
            <label for="add_featured_img_for_home_page">Add Featured For Home Page</label>
            <input type="text" name="add_img_for_home" class="add_img_for_home" value="<?php echo $add_img_for_home; ?>">       
        </div>        
        <div class="field_div">
            <input type="submit" class="" value="Update">       
        </div>
    <?php $my_saved_attachment_post_id = get_option( 'media_selector_attachment_id', 0 );  ?>
    <script type='text/javascript'>
        jQuery( document ).ready( function( $ ) {
            // Uploading files
            var file_frame;
            var wp_media_post_id = wp.media.model.settings.post.id; // Store the old id
            var set_to_post_id = <?php echo $my_saved_attachment_post_id; ?>; // Set this
            $(document).on('click', '.add_img_for_home', function( event ){
                event.preventDefault();
                var selectedval = this;
                    wp.media.model.settings.post.id = set_to_post_id;
                
                // Create the media frame.
                file_frame = wp.media.frames.file_frame = wp.media({
                    title: 'Select a image to upload',
                    button: {
                        text: 'Use this image',
                    },
                    library: {
                        type: 'image',
                    },
                    multiple: false // Set to true to allow multiple files to be selected
                });
                // When an image is selected, run a callback.
                file_frame.on( 'select', function() {
                    // We set multiple to false so only get one image from the uploader
                    attachment = file_frame.state().get('selection').first().toJSON();
                    // Do something with attachment.id and/or attachment.url here
                    // $( '#image-preview' ).attr( 'src', attachment.url ).css( 'width', 'auto' );
                    $( '.get_feauted_image img').attr('src', attachment.url );
                    $( '.add_img_for_home').val(attachment.url);
                    // Restore the main post ID
                    wp.media.model.settings.post.id = wp_media_post_id;
                });
                    // Finally, open the modal
                    file_frame.open();
            });
            // Restore the main ID when the add media button is pressed
            jQuery( '.add_img_for_home' ).on( 'click', function() {
                wp.media.model.settings.post.id = wp_media_post_id;
            }); 
        });
    </script>                
        <?php
    }
}
 
add_action( 'add_meta_boxes', [ 'paper_lane_soap_Meta_Box', 'add' ] );
add_action( 'save_post', [ 'paper_lane_soap_Meta_Box', 'save' ] );