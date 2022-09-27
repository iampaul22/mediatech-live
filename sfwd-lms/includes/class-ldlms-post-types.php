<?php
/**
 * Utility class to contain all the custom post typee used within LearnDash.
 *
 * @since 2.6.0
 * @package LearnDash
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'LDLMS_Post_Types' ) ) {
	/**
	 * Class to create the instance.
	 */
	class LDLMS_Post_Types {

		/**
		 * Collection of all post types.
		 *
		 * @var array $post_types.
		 */
		private static $post_types = array(
			'course'      => 'sfwd-courses',
			'lesson'      => 'sfwd-lessons',
			'topic'       => 'sfwd-topic',
			'quiz'        => 'sfwd-quiz',
			'question'    => 'sfwd-question',
			'transaction' => 'sfwd-transactions',
			'group'       => 'groups',
			'assignment'  => 'sfwd-assignment',
			'essay'       => 'sfwd-essays',
			'certificate' => 'sfwd-certificates',
		);

		/**
		 * Collection of all post types sections.
		 *
		 * @var array $post_type_sections.
		 */
		private static $post_type_sections = array(
			'all'            => array(
				'course',
				'lesson',
				'topic',
				'quiz',
				'question',
				'transaction',
				'group',
				'assignment',
				'essay',
				'certificate',
			),
			'course'         => array(
				'course',
				'lesson',
				'topic',
				'quiz',
			),
			'course_steps'   => array(
				'lesson',
				'topic',
				'quiz',
			),
			'quiz'           => array(
				'quiz',
				'question',
			),
			'quiz_questions' => array(
				'question',
			),
		);

		/**
		 * Public constructor for class
		 *
		 * @since 2.6.0
		 */
		public function __construct() {
		}

		/**
		 * Public Initialize function for class
		 *
		 * @since 2.6.0
		 */
		public static function init() {
			/**
			 * We really only need to build the full table names once. So
			 * we use a static flag to control the processing.
			 */
			static $init_called = false;

			if ( true !== $init_called ) {
				$init_called = true;

				/**
				 * Filters the list of custom post types.
				 *
				 * @since 2.6.0
				 *
				 * @param array $post_types An array of Post type list.
				 */
				self::$post_types = apply_filters( 'learndash_custom_post_types', self::$post_types );
			}
		}

		/**
		 * Get an array of all custom tables.
		 *
		 * @since 2.6.0
		 * @since 3.2.3 Added `$return_type` and `$quote_char` parameter.
		 *
		 * @param string $post_type_section Which group of post_types to return. Default is all.
		 * @param string       $return_type   Used to designate the returned value. String or array.
		 * @param string       $quote_char    Wrap the return values in quote character. Only for return_type 'string'.
		 *
		 * @return array of post type slugs.
		 */
		public static function get_post_types( $post_type_section = 'all', $return_type = 'array', $quote_char = '' ) {
			$post_types_return = array();

			if ( is_string( $post_type_section ) ) {
				$post_type_section = explode( ',', $post_type_section );
			}

			if ( is_array( $post_type_section ) ) {
				$post_type_section = array_map( 'trim', $post_type_section );
				$return_slugs      = array();
				foreach ( $post_type_section as $key ) {
					if ( isset( self::$post_type_sections[ $key ] ) ) {

						$post_types_return = array_merge( $post_types_return, self::get_post_type_slug( self::$post_type_sections[ $key ] ) );
					}
				}

				if ( ! empty( $post_types_return ) ) {
					$post_types_return = array_unique( $post_types_return );
				}

				if ( 'string' === $return_type ) {
					$return = '';
					foreach ( $post_types_return as $key ) {
						if ( ! empty( $return ) ) {
							$return .= ',';
						}

						$return .= $quote_char . $key . $quote_char;
					}
					return $return;
				}
			}

			return $post_types_return;
		}

		/**
		 * Utility function to return the post type slug(s). This is to prevent hard-coding
		 * of the slug(s) throughout the code files.
		 *
		 * @since 2.6.0
		 * @since 3.2.3 Added `$return_type` and `$quote_char` parameter.
		 *
		 * @param string|array $post_type_key Internal key used to identify the post_type.
		 * @param string       $return_type   Used to designate the returned value. String or array.
		 * @param string       $quote_char    Wrap the return values in quote character. Only for return_type 'string'.
		 *
		 * @return string|array post type slug if found.
		 */
		public static function get_post_type_slug( $post_type_key = '', $return_type = '', $quote_char = '' ) {
			if ( ! empty( $post_type_key ) ) {
				if ( is_string( $post_type_key ) ) {
					if ( empty( $return_type ) ) {
						$return_type = 'string';
					}
					$post_type_key = explode( ',', $post_type_key );
				} elseif ( is_array( $post_type_key ) ) {
					if ( empty( $return_type ) ) {
						$return_type = 'array';
					}
				} else {
					return;
				}

				if ( is_array( $post_type_key ) ) {
					$post_type_key = array_map( 'trim', $post_type_key );
					$return_slugs  = array();
					foreach ( $post_type_key as $key ) {
						if ( isset( self::$post_types[ $key ] ) ) {
							$return_slugs[] = self::$post_types[ $key ];
						}
					}

					if ( 'string' === $return_type ) {
						$return = '';
						foreach ( $return_slugs as $key ) {
							if ( ! empty( $return ) ) {
								$return .= ',';
							}
							$return .= $quote_char . $key . $quote_char;
						}

						return $return;
					} else {
						return $return_slugs;
					}
				}
			}
		}

		/**
		 * Utility function to return the post type key. This is to prevent hard-coding
		 * of the key throughout the code files.
		 *
		 * @since 2.6.0
		 *
		 * @param string $post_type_slug Internal slug used to identify the post_type.
		 * @return string post type key if found.
		 */
		public static function get_post_type_key( $post_type_slug = '' ) {
			if ( ( ! empty( self::$post_types ) ) && ( ! empty( $post_type_slug ) ) ) {
				foreach ( self::$post_types as $_key => $_slug ) {
					if ( $post_type_slug === $_slug ) {
						return $_key;
					}
				}
			}
		}

		// End of functions.
	}
}

// These are the base table names WITHOUT the $wpdb->prefix.
global $learndash_post_types;
$learndash_post_types = LDLMS_Post_Types::get_post_types();

/** This function is documented in includes/class-ldlms-post-types.php */
function learndash_get_post_types( $post_section_key = 'all', $return_type = 'array', $quote_char = '' ) {
	return LDLMS_Post_Types::get_post_types( $post_section_key, $return_type, $quote_char );
}

/** This function is documented in includes/class-ldlms-post-types.php */
function learndash_get_post_type_slug( $post_type_key = '', $return_type = '', $quote_char = '' ) {
	return LDLMS_Post_Types::get_post_type_slug( $post_type_key, $return_type, $quote_char );
}

/** This function is documented in includes/class-ldlms-post-types.php */
function learndash_get_post_type_key( $post_type_slug = '' ) {
	return LDLMS_Post_Types::get_post_type_key( $post_type_slug );
}

/**
 * Utility function to check if a post type slug is a valid LearnDash post type.
 *
 * @since 3.4.1
 *
 * @param string $post_type_slug Post Type slug.
 *
 * @return string post type key if found.
 */
function learndash_is_valid_post_type( $post_type_slug = '' ) {
	if ( ( ! empty( $post_type_slug ) ) && ( in_array( $post_type_slug, LDLMS_Post_Types::get_post_types(), true ) ) ) {
		return true;
	}
}