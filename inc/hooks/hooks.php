<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'constructo_preloader', 'constructo_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'constructo_header', 'constructo_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'constructo_footer', 'constructo_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'constructo_wrp_start', 'constructo_wrp_start_cb', 10 );
	add_action( 'constructo_wrp_end', 'constructo_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'constructo_blog_col_start', 'constructo_blog_col_start_cb', 10 );
	add_action( 'constructo_blog_col_end', 'constructo_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'constructo_blog_posts_thumb', 'constructo_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'constructo_blog_details_wrap_start', 'constructo_blog_details_wrap_start_cb', 10 );
	add_action( 'constructo_blog_details_wrap_end', 'constructo_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'constructo_blog_posts_title', 'constructo_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'constructo_blog_posts_meta', 'constructo_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'constructo_blog_posts_excerpt', 'constructo_blog_posts_excerpt_cb', 10 );
	// add_action( 'constructo_blog_posts_excerpt', 'constructo_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'constructo_blog_posts_info_link', 'constructo_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'constructo_blog_posts_content', 'constructo_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'constructo_blog_posts_share', 'constructo_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'constructo_blog_sidebar', 'constructo_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'constructo_blog_single_meta', 'constructo_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'constructo_page_content', 'constructo_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'constructo_fof', 'constructo_fof_cb', 10 );

	

?>