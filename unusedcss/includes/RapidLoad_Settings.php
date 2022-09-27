<?php

defined( 'ABSPATH' ) or die();

class RapidLoad_Settings {

	use RapidLoad_Utils;

	static $map_key = 'uucss_map';

	public static function get_links($start_from = 0, $limit = 10, $where = '', $order_by = 'id DESC') {
        if(RapidLoad_DB::migrated()){

            return UnusedCSS_DB::get_links($start_from, $limit, $where, $order_by);

        }

		return UnusedCSS_Admin::get_site_option( self::$map_key );
	}

	public static function add_link( $link, $files = null, $status = 'success', $meta = null ) {

	    if(RapidLoad_DB::migrated()){

	    	if(!$link){
	    		return;
		    }

	        $data = array();

            if(isset($meta['id'])) $data['job_id'] = $meta['id'];
            $data['url'] = $link;
            if(isset($meta['stats'])) $data['stats'] = serialize($meta['stats']);
            if(isset($files)) $data['files'] = serialize($files);
            if(isset($meta['warnings'])) $data['warnings'] = serialize($meta['warnings']);
            if(isset($meta['review'])) $data['review'] = serialize($meta['review']);
            if(isset($meta['error'])) $data['error'] = serialize($meta['error']);
            $data['status'] = $status;

	        UnusedCSS_DB::add_link($data);

        }else{

            $map = UnusedCSS_Admin::get_site_option( self::$map_key );

            $map[ md5( $link ) ] = [
                "url"    => $link,
                "hash"   => null,
                "files"  => $files,
                "status" => $status,
                "meta"   => $meta,
                "time"   => current_time( 'timestamp' )
            ];

            UnusedCSS_Admin::update_site_option( self::$map_key, $map );

        }

	}


	public static function content_hash_changed( $link, $hash ) {

		$map = UnusedCSS_Admin::get_site_option( self::$map_key );

		if ( isset( $map[ md5( $link ) ]['hash'] ) ) {

			// content hash
			return $map[ md5( $link ) ]["hash"] !== $hash;
		}

		return false;

	}


	public static function content_hash( $link, $hash ) {
		$map     = UnusedCSS_Admin::get_site_option( self::$map_key );
		$changed = false;

		if ( isset( $map[ md5( $link ) ] ) ) {

			$_hash = $map[ md5( $link ) ]["hash"];

			if ( $_hash !== null && $_hash !== $hash ) {
				do_action( 'uucss/content_updated', $link );
				$changed = true;
			}

			// content hash
			$map[ md5( $link ) ]["hash"] = $hash;
            UnusedCSS_Admin::update_site_option( self::$map_key, $map );

		}

		return $changed;
	}

	public static function get_link( $link ) {

        if(RapidLoad_DB::migrated()){

            return UnusedCSS_DB::get_link($link);

        }

		$map = UnusedCSS_Admin::get_site_option( self::$map_key );

		if ( $map && isset( $map[ md5( $link ) ] ) && $map[ md5( $link ) ]['status'] == 'success' ) {

			return $map[ md5( $link ) ];

		}

		return null;

	}

	public static function get_first_link() {

	    if(RapidLoad_DB::migrated()){

	        return UnusedCSS_DB::get_first_link();

        }

		if ( $map = (array) UnusedCSS_Admin::get_site_option( self::$map_key ) ) {

			if ( isset( $map[0] ) && $map[0] === false ) {
				return false;
			}

			if ( count( $map ) > 0 ) {
				return current( $map );
			}

		}

		return false;

	}

	public static function link_exists( $link ) {

        if(RapidLoad_DB::migrated()){

            return UnusedCSS_DB::link_exists($link);

        }

		$map = UnusedCSS_Admin::get_site_option( self::$map_key );

		if ( $map && isset( $map[ md5( $link ) ] ) && $map[ md5( $link ) ]['status'] == 'success' ) {

			return true;

		}

		return false;

	}


	public static function link_exists_with_error( $link ) {

        if(RapidLoad_DB::migrated()){

            return UnusedCSS_DB::link_exists_with_error($link);

        }

		$map = UnusedCSS_Admin::get_site_option( self::$map_key );

		if ( $map && isset( $map[ md5( $link ) ] ) ) {

			return true;

		}

		return false;

	}

	public static function delete_link( $link ) {

	    if(RapidLoad_DB::migrated()){

	        UnusedCSS_DB::delete_link($link);

        }else{

		    $map = UnusedCSS_Admin::get_site_option( self::$map_key );

		    unset( $map[ md5( $link ) ] );

            UnusedCSS_Admin::update_site_option( self::$map_key, $map );
	    }


	}

	public static function clear_links( $soft = false ) {

		if ( RapidLoad_DB::migrated() ) {

			if ( ! $soft ) {
				UnusedCSS_DB::clear_links();

				return;
			}

			UnusedCSS_DB::update_status();

		}else{

            UnusedCSS_Admin::delete_site_option( self::$map_key );

        }

	}

	public static function link_files_used_elsewhere( $link ) {

		if(RapidLoad_DB::migrated()){

			return UnusedCSS_DB::link_files_used_elsewhere($link);

		}else{

			$map = UnusedCSS_Admin::get_site_option( self::$map_key );

			$files = self::get_link( $link );

			$used   = [];
			$unused = [];

			if ( $files ) {

				$files = $files['files'];

				foreach ( $files as $file ) {

					foreach ( $map as $key => $value ) {

						if ( md5( $link ) !== $key ) {

							if ( in_array( $file['uucss'], array_column( $value['files'], 'uucss' ) ) ) {
								$used[] = $file['uucss'];
								break;
							}

						}
					}

				}

				$unused = array_column( $files, 'uucss' );

				foreach ( $used as $item ) {

					if ( ( $key = array_search( $item, $unused ) ) !== true ) {
						unset( $unused[ $key ] );
					}

				}

			}


			return $unused;

		}

	}

}