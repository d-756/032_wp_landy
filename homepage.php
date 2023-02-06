<?php
/*
Template Name: - Custom homepage
*/
?>  

<?php get_header(); ?>
<div class="orangeheader">
  <div class="row clearfix animated fadeIn">
    <h3 style="
    color: #fff;
    margin: 0px;
    font-weight: 500;
">ANTENNA ALIGNMENT FOR $5,999</h3>
    <h5 style="
        color: #fff;
        margin: 0px;
        font-weight: 500;
    ">NORTH AMERICAN PRICE</h1>
<a href="http://www.multiwavesensors.com/antenna-alignment/" target="_blank" style="
    color: #fff;
    text-decoration: underline;
    /* margin-top: 20px; */
">CLICK FOR DETAILS</a>
  </div>
</div>
<!-- Start displaying special parent pages -->
<?php
	global $wp_query;

	// is Page a parent page
	if ( $post->post_parent == 0 ) {
		// on a parent page, get child pages
		$pages = get_pages( '&hierarchical=0&sort_column=menu_order&parent=' . $post->ID );
		// loop through child pages
		foreach ( $pages as $post ){
			setup_postdata( $post );
			// get the template name for the child page
			$template_name = get_post_meta( $post->ID, '_wp_page_template', true );
			$template_name = ( 'default' == $template_name ) ? 'section-standard.php' : $template_name;
			// default page template_part content-page.php
			$slug = 'page';
			// check if the slug exists for the child page
			if ( locate_template( basename( $template_name ) ) != '' ) {
				$slug = pathinfo( $template_name, PATHINFO_FILENAME );
			}
			// load the content template for the child page
			get_template_part( $slug );
		}
	}
?>

<?php get_footer(); ?>
<script type="text/javascript">

jQuery(document).ready(function($) {
	$(window).scroll(function() {

	if ($(this).scrollTop()>200)
	{
	$('.orangeheader').fadeOut();
	}
	else
	{
	$('.orangeheader').fadeIn();
	}
	});

});
</script>