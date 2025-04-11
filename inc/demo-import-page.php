<?php

add_action( 'ocdi/after_import', 'mytheme_after_import_setup' );

function mytheme_after_import_setup() {
    // Set Homepage and Blog Page
    $front_page = get_page_by_title( 'Home' );
    $blog_page  = get_page_by_title( 'Blog' );

    if ( $front_page && $blog_page ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page->ID );
        update_option( 'page_for_posts', $blog_page->ID );
    }

    // Assign primary menu
    $main_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
    if ( $main_menu ) {
        $locations = get_theme_mod( 'nav_menu_locations' );
        $locations['primary'] = $main_menu->term_id;
        set_theme_mod( 'nav_menu_locations', $locations );
    }
}

?>
