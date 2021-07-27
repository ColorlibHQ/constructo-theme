<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Constructo
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$constructo_reservation_title     = !empty( constructo_opt( 'constructo_reservation_title' ) ) ? constructo_opt( 'constructo_reservation_title' ) : '';
	$constructo_reservation_sub_title = !empty( constructo_opt( 'constructo_reservation_sub_title' ) ) ? constructo_opt( 'constructo_reservation_sub_title' ) : '';
	$constructo_reservation_btn_text  = !empty( constructo_opt( 'constructo_reservation_btn_text' ) ) ? constructo_opt( 'constructo_reservation_btn_text' ) : '';
	$constructo_reservation_btn_url	  = !empty( constructo_opt( 'constructo_reservation_btn_url' ) ) ? constructo_opt( 'constructo_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $constructo_reservation_title )?></h3>
			<p><?php echo esc_html( $constructo_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $constructo_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $constructo_reservation_btn_text )?></a>
		</div>
	</div>