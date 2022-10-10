<?php

//custom excerpts
if ( ! function_exists( 'understrap_all_excerpts_get_more_link' ) ) {
    function understrap_all_excerpts_get_more_link( $post_excerpt ) {
        if ( ! is_admin() ) {
            $post_excerpt = $post_excerpt . '<a href = "' . get_permalink() . '"> Read More...</a></p>';
        }
        return $post_excerpt;
    }
}
add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );

//Shrink the excerpt
function custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


//Custom excerpts for ACF fields
function wp_trim_excerpt_modified($text, $content_length = 55, $remove_breaks = false) {
    if ( '' != $text ) {
        $text = strip_shortcodes( $text );
        $text = excerpt_remove_blocks( $text );
        $text = apply_filters( 'the_content', $text );
        $text = str_replace(']]>', ']]&gt;', $text);
        $num_words = $content_length;
        $original_text = $text;
        $text = preg_replace( '@<(script|style)[^>]*?>.*?</\\1>@si', '', $text );

        // Here is our modification
        // Allow <p> and <strong>
        $text = strip_tags($text, '<p>,<strong>');

        if ( $remove_breaks )
            $text = preg_replace('/[\r\n\t ]+/', ' ', $text);
        $text = trim( $text );
        if ( strpos( _x( 'words', 'Word count type. Do not translate!' ), 'characters' ) === 0 && preg_match( '/^utf\-?8$/i', get_option( 'blog_charset' ) ) ) {
            $text = trim( preg_replace( "/[\n\r\t ]+/", ' ', $text ), ' ' );
            preg_match_all( '/./u', $text, $words_array );
            $words_array = array_slice( $words_array[0], 0, $num_words + 1 );
            $sep = '';
        } else {
            $words_array = preg_split( "/[\n\r\t ]+/", $text, $num_words + 1, PREG_SPLIT_NO_EMPTY );
            $sep = ' ';
        }
        if ( count( $words_array ) > $num_words ) {
            array_pop( $words_array );
            $text = implode( $sep, $words_array );
        } else {
            $text = implode( $sep, $words_array );
        }
    }
    return $text;
}

?>