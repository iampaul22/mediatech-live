<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) die;

function time_elapsed($secs){
    $bit = array(
        'y' => $secs / 31556926 % 12,
        'w' => $secs / 604800 % 52,
        'd' => $secs / 86400 % 7,
        'h' => $secs / 3600 % 24,
        'm' => $secs / 60 % 60,
        's' => $secs % 60
        );
        
    foreach($bit as $k => $v)
        if($v > 0)$ret[] = $v . $k;
        
    return join(' ', $ret);
}

function page_tabs_render_buttons( $tabs = array() ){
    
    echo '<div id="mana-tabs" class="tablenav top">';
        foreach( $tabs as $key => $tab ):
            echo '<form method="get">';
                if ( ! empty( $_GET['orderby'] ) )
                        echo '<input type="hidden" name="orderby" value="' . esc_attr( $_GET['orderby'] ) . '" />';
                if ( ! empty( $_GET['order'] ) )
                        echo '<input type="hidden" name="order" value="' . esc_attr( $_GET['order'] ) . '" />';
                if ( ! empty( $_GET['tab'] ) )
                        echo '<input type="hidden" name="tab" value="' . esc_attr( $_GET['tab'] ) . '" />';
                if ( ! empty( $_GET['page'] ) )
                        echo '<input type="hidden" name="page" value="' . esc_attr( $_GET['page'] ) . '" />';
                if ( ! empty( $_GET['s'] ) )
                        echo '<input type="hidden" name="s" value="' . esc_attr( $_GET['s'] ) . '" />';
                if ( ! empty( $_GET['period'] ) )
                        echo '<input type="hidden" name="period" value="' . esc_attr( $_GET['period'] ) . '" />';
                if ( ! empty( $_GET['date_from'] ) )
                        echo '<input type="hidden" name="date_from" value="' . esc_attr( $_GET['date_from'] ) . '" />';
                    
                echo '<input type="hidden" name="v" value="' . $key . '" class="button"/>';
                echo '<input type="submit" value="' . __($tab) . '" class="button""/>';
            echo '</form>';
        endforeach;
    echo '</div>';
}
add_action( 'page_tabs', 'page_tabs_render_buttons', 10, 1 );
/*************************** CLEAN UP STRINGS *******************************
 *******************************************************************************
 * Remove douplicate spacs
 * Remove HTML tags
 * Conver string to lewercase ( optional )
 */
function clean_up_string_filter( $string = false, $lowercase = false, $to_slug = false ){
    
    if ( $string && is_string($string) ):
        
        $string = trim( wp_strip_all_tags($string) );
        
        if ( seems_utf8( $string ) )
            
            $string = preg_replace( '/[\p{Z}\s]{2,}/u', ' ', $string );
        else
            
            $string = preg_replace( '/\s\s+/', ' ', $string );
        
        if ( $to_slug ):
            
            $string = str_replace( ' ', '-', $string);
            $string = preg_replace("/[^a-zA-Z0-9-]+/", '', $string );
        endif;
        
        if ( $lowercase )
            
            $string = strtolower( $string );
        
    endif;
    
    return $string;
}
add_filter( 'clean_up_string', 'clean_up_string_filter', 10, 3 );



/*************************** LOAD THE BASE CLASS *******************************
 *******************************************************************************
 * The WP_List_Table class isn't automatically available to plugins, so we need
 * to check if it's available and load it if necessary.
 */
if(!class_exists('WP_List_Table')){
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}


class Chart_Table extends WP_List_Table {
    

    var $data               = array();
    var $columns            = array();
    var $sortable_columns   = array();
    var $actions            = array();
    //var $actions            = array(
    //        'delete'    => 'Delete'
    //);
    
    var $per_page           = 8;
    
    /** ************************************************************************
     * REQUIRED. Set up a constructor that references the parent constructor. We 
     * use the parent reference to set some default configs.
     ***************************************************************************/
    function __construct(){
        global $status, $page;
                
        //Set parent defaults
        parent::__construct( array(
            'singular'  => 'item',     //singular name of the listed records
            'plural'    => 'items',    //plural name of the listed records
            'ajax'      => false       //does this table support ajax?
        ) );
        
    }
    
    function column_default($item, $column_name){
     
        return $item[$column_name];
    }

    function get_columns(){
        
        return $this->columns;
    }

    function get_sortable_columns() {
        
        return $this->sortable_columns;
    }

    function get_bulk_actions() {
        
        return $this->actions;
    }

    function process_bulk_action() {
        
        //Detect when a bulk action is being triggered...
        //if( 'delete'===$this->current_action() ) {
        //    wp_die('Items deleted (or they would be if we had items to delete)!');
        //}
        
    }
    
    /**
     * Display the search box.
     *
     * @since 3.1.0
     * @access public
     *
     * @param string $text The search button text
     * @param string $input_id The search input id
     */
    function search_box( $text, $input_id ) {

            $input_id = $input_id . '-search-input';

            $this->print_hidden_fields();
            
            if ( ! empty( $_GET['date_from'] ) )
                    echo '<input type="hidden" name="date_from" value="' . esc_attr( $_GET['date_from'] ) . '" />';
            if ( ! empty( $_GET['period'] ) )
                    echo '<input type="hidden" name="period" value="' . esc_attr( $_GET['period'] ) . '" />';
            
            ?>
            <p class="search-box">
                    <label class="screen-reader-text" for="<?php echo $input_id ?>"><?php echo $text; ?>:</label>
                    <input type="search" id="<?php echo $input_id ?>" name="s" value="<?php _admin_search_query(); ?>" />
                    <?php submit_button( $text, 'button', false, false, array('id' => 'search-submit') ); ?>
            </p>
            <?php
    }
    
    
    /**
     * Display the filter date box.
     *
     * @since 3.1.0
     * @access public
     *
     * @param string $text The search button text
     * @param string $input_id The search input id
     */
    function fiter_date_box( $text, $input_id ) {
        
            $input_id = $input_id . '-search-input';
            
            if(empty($text)) $text = __( 'Display on Chart' );

            $this->print_hidden_fields();
            
            if ( ! empty( $_GET['s'] ) )
                    echo '<input type="hidden" name="s" value="' . esc_attr( $_GET['s'] ) . '" />';
            
            $date_from = ( isset($_GET['date_from']) && ! empty($_GET['date_from']) )? $_GET['date_from'] : date('d.m.Y', strtotime('-1 day') );
            
            ?>
            <p class="description">Select a starting date from which data will be displayed on chart along with a time period. After selection is done click on the 'Display on Chart' button.</p>
            
            <br/>
            
            <p id="datepicker">
            	<label><?php _e('Chart starts on'); ?></label>
                <input type="text" id="datepicker_handel" name="date_from" value="<?php echo $date_from; ?>" />
            <code>d.m.Y</code>    
            </p>
            
            
            <label><?php _e('for the period of'); ?></label>
            
            <select name="period">

        	<option value="day" <?php selected( $_GET['period'], 'day' ); ?>><?php _e( '1 Day' ); ?></option>
        	<option value="week" <?php selected( $_GET['period'], 'week' ); ?>><?php _e( '1 Week' ); ?></option>
        	<option value="month" <?php selected( $_GET['period'], 'month' ); ?>><?php _e( '1 Month' ); ?></option>
        	<option value="year" <?php selected( $_GET['period'], 'year' ); ?>><?php _e( '1 Year' ); ?></option>
        	
        	</select>
            
            <br/>
            <p class="submit">
            	<?php submit_button( $text, 'button button-primary', false, false, array('id' => 'apply-date') ); ?>
            </p>
            <?php
    }
    
    
    function print_hidden_fields() {
        
            if ( ! empty( $_GET['orderby'] ) )
                    echo '<input type="hidden" name="orderby" value="' . esc_attr( $_GET['orderby'] ) . '" />';
            if ( ! empty( $_GET['order'] ) )
                    echo '<input type="hidden" name="order" value="' . esc_attr( $_GET['order'] ) . '" />';
            if ( ! empty( $_GET['tab'] ) )
                    echo '<input type="hidden" name="tab" value="' . esc_attr( $_GET['tab'] ) . '" />';
            if ( ! empty( $_GET['page'] ) )
                    echo '<input type="hidden" name="page" value="' . esc_attr( $_GET['page'] ) . '" />';
            if ( ! empty( $_GET['v'] ) )
                    echo '<input type="hidden" name="v" value="' . esc_attr( $_GET['v'] ) . '" />';
    }
    
    /** ************************************************************************
     * REQUIRED! This is where you prepare your data for display. This method will
     * usually be used to query the database, sort and filter the data, and generally
     * get it ready to be displayed. At a minimum, we should set $this->items and
     * $this->set_pagination_args(), although the following properties and methods
     * are frequently interacted with here...
     * 
     * @global WPDB $wpdb
     * @uses $this->_column_headers
     * @uses $this->items
     * @uses $this->get_columns()
     * @uses $this->get_sortable_columns()
     * @uses $this->get_pagenum()
     * @uses $this->set_pagination_args()
     **************************************************************************/
    function prepare_items() {
        global $wpdb; //This is used only if making any database queries

        /**
         * First, lets decide how many records per page to show
         */
        $per_page = $this->per_page;
        
        
        /**
         * REQUIRED. Now we need to define our column headers. This includes a complete
         * array of columns to be displayed (slugs & titles), a list of columns
         * to keep hidden, and a list of columns that are sortable. Each of these
         * can be defined in another method (as we've done here) before being
         * used to build the value for our _column_headers property.
         */
        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();
        
        
        /**
         * REQUIRED. Finally, we build an array to be used by the class for column 
         * headers. The $this->_column_headers property takes an array which contains
         * 3 other arrays. One for all columns, one for hidden columns, and one
         * for sortable columns.
         */
        $this->_column_headers = array($columns, $hidden, $sortable);
        
        
        /**
         * Optional. You can handle your bulk actions however you see fit. In this
         * case, we'll handle them within our package just to keep things clean.
         */
        $this->process_bulk_action();
        
        
        /**
         * Instead of querying a database, we're going to fetch the example data
         * property we created for use in this plugin. This makes this example 
         * package slightly different than one you might build on your own. In 
         * this example, we'll be using array manipulation to sort and paginate 
         * our data. In a real-world implementation, you will probably want to 
         * use sort and pagination data to build a custom query instead, as you'll
         * be able to use your precisely-queried data immediately.
         */
        $data = $this->data;
                
        
        /**
         * This checks for sorting input and sorts the data in our array accordingly.
         * 
         * In a real-world situation involving a database, you would probably want 
         * to handle sorting by passing the 'orderby' and 'order' values directly 
         * to a custom query. The returned data will be pre-sorted, and this array
         * sorting technique would be unnecessary.
         */
        function usort_reorder($a,$b){
            $orderby = (!empty($_REQUEST['orderby'])) ? $_REQUEST['orderby'] : 'title'; //If no sort, default to title
            $order = (!empty($_REQUEST['order'])) ? $_REQUEST['order'] : 'asc'; //If no order, default to asc
            $a[$orderby] = isset( $a[$orderby] ) ? $a[$orderby] : "";
            $b[$orderby] = isset( $b[$orderby] ) ? $b[$orderby] : "";
            $result = strcmp($a[$orderby], $b[$orderby]); //Determine sort order
            return ($order==='asc') ? $result : -$result; //Send final sort direction to usort
        }
        usort($data, 'usort_reorder');
        
        
        /***********************************************************************
         * ---------------------------------------------------------------------
         * vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
         * 
         * In a real-world situation, this is where you would place your query.
         * 
         * ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
         * ---------------------------------------------------------------------
         **********************************************************************/
        
                
        /**
         * REQUIRED for pagination. Let's figure out what page the user is currently 
         * looking at. We'll need this later, so you should always include it in 
         * your own package classes.
         */
        $current_page = $this->get_pagenum();
        
        /**
         * REQUIRED for pagination. Let's check how many items are in our data array. 
         * In real-world use, this would be the total number of items in your database, 
         * without filtering. We'll need this later, so you should always include it 
         * in your own package classes.
         */
        $total_items = count($data);
        
        
        /**
         * The WP_List_Table class does not handle pagination for us, so we need
         * to ensure that the data is trimmed to only the current page. We can use
         * array_slice() to 
         */
        $data = array_slice($data,(($current_page-1)*$per_page),$per_page);
        
        
        
        /**
         * REQUIRED. Now we can add our *sorted* data to the items property, where 
         * it can be used by the rest of the class.
         */
        $this->items = $data;
        
        
        /**
         * REQUIRED. We also have to register our pagination options & calculations.
         */
        $this->set_pagination_args( array(
            'total_items' => $total_items,                  //WE have to calculate the total number of items
            'per_page'    => $per_page,                     //WE have to determine how many items to show on a page
            'total_pages' => ceil($total_items/$per_page)   //WE have to calculate the total number of pages
        ) );
    }
    
}


// Visit analytics ( collect data )
include(dirname(__FILE__) . '/bpa-visits.php');
