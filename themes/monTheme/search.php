<?php
 global $query_string;

 wp_parse_str( $query_string, $search_query );
 $search = new WP_Query( $search_query );
 
// The Loop
if ( $search->have_posts() ) {
    echo '<ul>';
    while ( $search->have_posts() ) {
        $search->the_post();
        
        echo '<li>' . get_the_title() . '</li>';
    }
    echo '</ul>';
} else {
    // no posts found
    echo "La recherche n'a donné aucun resultats";
}
/* Restore original Post Data */
wp_reset_postdata();

global $search;
$total_results = $search->found_posts;

?>