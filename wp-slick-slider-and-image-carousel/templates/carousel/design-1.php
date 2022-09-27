<?php/** * Template for Carousel - Design 6 * * @package WP Slick Slider and Image Carousel * @since 1.0.0 */if ( ! defined( 'ABSPATH' ) ) {	exit; // Exit if accessed directly}?><div class="wpsisac-image-slide">  		<?php if( $sliderurl != '' ) { ?>		<a href="<?php echo esc_url( $sliderurl ); ?>">			<div class="wpsisac-image-slide-wrap" style="<?php echo esc_attr( $slider_height_css ); ?>">				<img <?php if( $lazyload ) { ?>data-lazy="<?php echo esc_url( $slider_orig_img ); ?>" <?php } ?> src="<?php echo esc_url( $slider_img ); ?>" alt="<?php the_title(); ?>" />			</div>		</a>	<?php } else {  ?>		<div class="wpsisac-image-slide-wrap" style="<?php echo esc_attr( $slider_height_css ); ?>">			<img <?php if( $lazyload ) { ?>data-lazy="<?php echo esc_url( $slider_orig_img ); ?>" <?php } ?> src="<?php echo esc_url( $slider_img ); ?>" alt="<?php the_title(); ?>" />		</div>	<?php } ?></div>