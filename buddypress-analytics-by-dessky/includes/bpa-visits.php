<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) die;

function visit_analytics(){
    
    $current_user = wp_get_current_user();

    if ( $current_user->ID )
        do_action( 'collect_visits_data', $current_user );
}
if ( is_user_logged_in() ) add_action( 'wp_head', 'visit_analytics' );

function collect_visits_data_to_db( $user = false ){
    
    if ( $user ):
        
        global $wpdb, $post;
        $analytics['user']           = "{$wpdb->prefix}bpa_users";
        $analytics['page']           = "{$wpdb->prefix}bpa_page";
        $bpa_visits     = "{$wpdb->prefix}bpa_visits";
		
        $total_group_count          = get_user_meta($user->ID, 'total_group_count');
        
        if ( $post->ID > 0 ): // Prevent store data when user is searching a keyword
            foreach ( $analytics as $slug => $chart_table ):
                
                switch ($slug){
                    
                    case 'user': $id = $user->ID; break;
                    
                    case 'page': $id = $post->ID; break;
                    
                    default: $id = false; 
                }
                
                $key = "{$slug}_id";
                
                if ( $collected_query = $wpdb->get_row( "SELECT * FROM {$chart_table} WHERE {$key} = '{$id}'" ) ) {
                    
                    $wpdb->update( $chart_table,
                                   array( "count" => intval($collected_query->count) + 1 ),
                                   array( "{$key}" => $collected_query->$key ) );
                    
                } else {
                    
                    $wpdb->insert( $chart_table, array( "{$key}" => $id ) );
                    
                } // $collected_query
            endforeach;
            
            $wpdb->insert( $bpa_visits,
                           array(
                                 'user_id'  => $user->ID,
                                 'page_id'  => $post->ID,
                                 'ip'       => $_SERVER['REMOTE_ADDR']
                                ) );
            
            $statistic_id = $wpdb->insert_id;
            
        endif; // $post->ID 
    endif;
    
}
add_action( 'collect_visits_data', 'collect_visits_data_to_db', 10, 1 );

?>