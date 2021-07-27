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
	$footer_text 	    = constructo_opt( 'constructo_footer_text' ) == '' ? 'Esteem spirit temper too say adieus who <br> direct esteem. It esteems luckily or <br> picture placing drawing.' : constructo_opt( 'constructo_footer_text' );
	$down_icon 	    	= CONSTRUCTO_DIR_ICON_IMG_URI . 'down.svg';
	?>	

    <div class="download_brochure">
        <div class="container">
            <div class="bordered_1px">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_logo">
                            <?php echo constructo_theme_footer_logo();?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="download_btn">
                            <a href="#"> <img src="<?php echo esc_url( $down_icon )?>" alt="down icon"> Download Brochure</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>