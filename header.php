<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title><?php wp_title( '-', true, 'right' ); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0" />

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	
	<?php if ( get_theme_mod('theme_customizer_favicon') ) { ?>
	<!-- Get the favicon -->
	<link rel="icon" type="image/png" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_favicon', '' ).'');?>" />
	<?php } ?>

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>

	<?php if( get_theme_mod( 'theme_customizer_general1' ) == '1') { ?><?php } else if(is_page_template('homepage.php')) { ?>
	<!-- Full screen loading animation -->
	<div id="loader">
		<div id="loading-status">
			<div class="load-container load8 ">
				<div class="loader">
				</div>
			</div>
	    </div>
	</div>
	<?php } ?>

	<?php if( get_theme_mod( 'theme_customizer_general4' ) == '1') { ?><?php } else { ?>
	<!-- Header fade in navigation -->
	<div class="header" id="dynamic">
		<nav class="row clearfix">
			<div class="logo">
			<?php if ( get_theme_mod('theme_customizer_logo') ) { ?>
				<a href="#" class="totop clearfix"><img class="logo-image" src="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_logo', '' )."");?>" alt="<?php the_title(); ?>" /></a>
	    	<?php } else { ?>
	    		<a href="#" title="<?php bloginfo('name'); ?>" class="totop logo-text"><?php echo esc_html(get_bloginfo('name')); ?></a>
	    	<?php } ?>
	    	</div>
			
			<div id="nav" class="clearfix">
				<div class="special clearfix">
					<?php if(is_front_page()) { ?>
						<?php wp_nav_menu(array('theme_location' => 'main', 'menu_class' => 'nav')); ?>
					<?php } else { ?>
						<?php wp_nav_menu(array('theme_location' => 'inner', 'menu_class' => 'nav')); ?>
					<?php } ?>
			 	</div>
			</div>
		</nav>	
	</div> 
	<?php } ?>

<!-- Responsive menu toggle -->
<div class="mobile-menu clearfix">
	
	<div id="collapse">
		<div class="collapse-darker">
			<div class="row clearfix">
				<div class="mobile-menu-inner">
					<?php if (is_front_page()) { ?>
						<?php wp_nav_menu(array('theme_location' => 'main', 'menu_class' => 'nav-mobile')); ?>
					<?php } else { ?>
						<?php wp_nav_menu(array('theme_location' => 'inner', 'menu_class' => 'nav-mobile')); ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>	

	<div class="collapse-menu-bg clearfix">
		<div class="collapse-menu-inner">
			<a href="#" id="collapse-menu"><i class="fa fa-bars"></i></a>
		</div>
	</div>	

</div>

<div id="main-wrap" class="clearfix<?php if( get_theme_mod( 'theme_customizer_general1' ) == '1') { ?><?php } else if (is_page_template('homepage.php')) { ?> nopreload<?php } ?>">

	<!-- Header showcase area -->
	<section id="header">
<div class="whiteheader">
		<div class="row row-header clearfix animated fadeIn">

			<!-- Logo -->
			<div class="logo"<?php if( get_theme_mod( 'theme_customizer_general2' ) == '1' ) { ?> id="logo-centered"<?php } ?>>
					 <?php if ( get_theme_mod('theme_customizer_logo') ) { ?>
						<a href="<?php echo esc_url(home_url( '/' )); ?>" class="clearfix"><img class="logo-image" src="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_logo', '' )."");?>" alt="<?php the_title(); ?>" /></a>
		    		<?php } else { ?>
			    		<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php bloginfo('name'); ?>"><?php echo esc_html(get_bloginfo('name')); ?></a>
		    		<?php } ?>
		    </div>

			<?php if ( get_theme_mod('theme_customizer_footerfacebook') or get_theme_mod('theme_customizer_footertwitter') or get_theme_mod('theme_customizer_footergoogle') or get_theme_mod('theme_customizer_footeryoutube') or get_theme_mod('theme_customizer_footerlinkedin') or get_theme_mod('theme_customizer_footertumblr') or get_theme_mod('theme_customizer_footerflickr') or get_theme_mod('theme_customizer_footerdribbble') or get_theme_mod('theme_customizer_footerpinterest') or get_theme_mod('theme_customizer_footervimeo') or get_theme_mod('theme_customizer_footermail') or get_theme_mod('theme_customizer_footerskype') or get_theme_mod('theme_customizer_footerrss') ) { ?>
				<!-- Social icons -->
				<ul class="socials clearfix">
			<?php } ?>
				<?php if ( get_theme_mod('theme_customizer_footerfacebook') ) { ?>
					<!-- Facebook -->
					<li><a class="facebook" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerfacebook', '' )."");?>"><i class="fa fa-facebook"></i></a></li>
				<?php } ?>

				<?php if ( get_theme_mod('theme_customizer_footertwitter') ) { ?>
					<!-- Twitter -->
					<li><a class="twitter" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footertwitter', '' )."");?>"><i class="fa fa-twitter"></i></a></li>
				<?php } ?>

				<?php if ( get_theme_mod('theme_customizer_footergoogle') ) { ?>
					<!-- Google Plus -->
					<li><a class="google" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footergoogle', '' )."");?>"><i class="fa fa-google-plus"></i></a></li>
				<?php } ?>

				<?php if ( get_theme_mod('theme_customizer_footeryoutube') ) { ?>
					<!-- Youtube -->
					<li><a class="youtube" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footeryoutube', '' )."");?>"><i class="fa fa-youtube"></i></a></li>
				<?php } ?>

				<?php if ( get_theme_mod('theme_customizer_footerlinkedin') ) { ?>
					<!-- LinkedIn -->
					<li><a class="linkedin" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerlinkedin', '' )."");?>"><i class="fa fa-linkedin"></i></a></li>
				<?php } ?>

				<?php if ( get_theme_mod('theme_customizer_footertumblr') ) { ?>
					<!-- Tumblr -->
					<li><a class="tumblr" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footertumblr', '' )."");?>"><i class="fa fa-tumblr"></i></a></li>
				<?php } ?>

				<?php if ( get_theme_mod('theme_customizer_footerflickr') ) { ?>
					<!-- Flickr -->
					<li><a class="flickr" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerflickr', '' )."");?>"><i class="fa fa-flickr"></i></a></li>
				<?php } ?>
								
				<?php if ( get_theme_mod('theme_customizer_footerdribbble') ) { ?>
					<!-- Dribbble -->
					<li><a class="dribbble" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerdribbble', '' )."");?>"><i class="fa fa-dribbble"></i></a></li>
				<?php } ?>
								
				<?php if ( get_theme_mod('theme_customizer_footerpinterest') ) { ?>
					<!-- Pinterest -->
					<li><a class="pinterest" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerpinterest', '' )."");?>"><i class="fa fa-pinterest"></i></a></li>
				<?php } ?>
								
				<?php if ( get_theme_mod('theme_customizer_footervimeo') ) { ?>
					<!-- Vimeo -->
					<li><a class="vimeo" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footervimeo', '' )."");?>"><i class="fa fa-vimeo-square"></i></a></li>
				<?php } ?>
								
				<?php if ( get_theme_mod('theme_customizer_footermail') ) { ?>
					<!-- Email -->
					<li><a class="mail" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footermail', '' )."");?>"><i class="fa fa-envelope-o"></i></a></li>
				<?php } ?>
								
				<?php if ( get_theme_mod('theme_customizer_footerskype') ) { ?>
					<!-- Skype -->
					<li><a class="skype" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerskype', '' )."");?>"><i class="fa fa-skype"></i></a></li>
				<?php } ?>
								
				<?php if ( get_theme_mod('theme_customizer_footerrss') ) { ?>
					<!-- RSS -->
					<li><a class="rss" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerrss', '' )."");?>"><i class="fa fa-rss"></i></a></li>
				<?php } ?>
				
			<?php if ( get_theme_mod('theme_customizer_footerfacebook') or get_theme_mod('theme_customizer_footertwitter') or get_theme_mod('theme_customizer_footergoogle') or get_theme_mod('theme_customizer_footeryoutube') or get_theme_mod('theme_customizer_footerlinkedin') or get_theme_mod('theme_customizer_footertumblr') or get_theme_mod('theme_customizer_footerflickr') or get_theme_mod('theme_customizer_footerdribbble') or get_theme_mod('theme_customizer_footerpinterest') or get_theme_mod('theme_customizer_footervimeo') or get_theme_mod('theme_customizer_footermail') or get_theme_mod('theme_customizer_footerskype') or get_theme_mod('theme_customizer_footerrss') ) { ?>
				</ul>
			<?php } ?>

		    <!-- Get the navigation -->
			<div class="nav-area">
				<?php if(is_front_page()) { ?>
					<?php wp_nav_menu(array('theme_location' => 'main', 'menu_class' => 'nav')); ?>
				<?php } else { ?>
					<?php wp_nav_menu(array('theme_location' => 'inner', 'menu_class' => 'nav')); ?>
				<?php } ?>
			</div>
</div> <!-- Close whiteheader"-->
	    </div>

    	<div class="row extra clearfix<?php if(is_page_template( 'homepage.php' ) && get_theme_mod('theme_customizer_showcaseimage')) { ?><?php } else { ?> no-showcase<?php } ?><?php if( get_theme_mod( 'theme_customizer_general8' ) == '1') { ?> left-version<?php } ?>">
      		<div class="columns clearfix" id="fadeOut">
   			
		        <?php if ( get_theme_mod('theme_customizer_headertextlinetwo') && is_front_page() ) { ?>
		        	<!-- Get second header text -->
		        	<p class="lead clearfix fade-it2 fadeInSlower animated">
		        		<?php echo esc_textarea('' .get_theme_mod( 'theme_customizer_headertextlinetwo', '' )."");?>
		        	</p>
				<?php } else if (!is_front_page() && !is_page_template('homepage.php') && is_object($post) &&  get_post_meta( $post->ID, '_playne2_introtext_header2', true )) { ?>
		        	<!-- Display regular page title -->
		       	 	<p class="lead clearfix fade-it2 fadeInSlower animated">
						<!-- Show this header when custom text is used on page -->
						<?php global $post; $introtextheader = get_post_meta( $post->ID, '_playne2_introtext_header2', true ); echo "$introtextheader" ?>
		        	</p>
		        <?php } else if (get_theme_mod('theme_customizer_headertextlinetwoblog') && is_home()) { ?>
		        	<p class="lead clearfix fade-it2 fadeInSlower animated crumbs">
		        	<?php
						$introtextblogtext = get_theme_mod( 'theme_customizer_headertextlinetwoblog', '' );
						$introblogtext = sprintf( __( '%s', 'playne' ), esc_textarea( $introtextblogtext ) );
						echo $introblogtext;
					?>
					</p>
			 	<?php } else if (is_single()) { ?>
			 		<!-- Get second header text -->
			 		<p class="lead clearfix fade-it2 fadeInSlower animated">
			 			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			 				<?php the_author_posts_link(); ?> - <?php echo get_the_date(); ?> - <?php the_category(', '); ?><?php if ( is_sticky () ) { ?> - <?php _e('featured','playne'); ?><?php } ?>
			 			<?php endwhile; ?>
						<?php endif; ?>
					</p>
			 	<?php } ?>

		        <h2 class="<?php if ( get_theme_mod('theme_customizer_animationlist') == "value1" ) { ?>fadeIn<?php } else if ( get_theme_mod('theme_customizer_animationlist') == "value2" ) { ?>pulse<?php } else if ( get_theme_mod('theme_customizer_animationlist') == "value3" ) { ?>tada<?php } else if ( get_theme_mod('theme_customizer_animationlist') == "value4" ) { ?>bounce<?php } else if ( get_theme_mod('theme_customizer_animationlist') == "value5" ) { ?>flipInX<?php } else if ( get_theme_mod('theme_customizer_animationlist') == "value6" ) { ?>flipInY<?php } else if ( get_theme_mod('theme_customizer_animationlist') == "value7" ) { ?>fadeInLeft<?php } else if ( get_theme_mod('theme_customizer_animationlist') == "value8" ) { ?>fadeInRight<?php } else if ( get_theme_mod('theme_customizer_animationlist') == "value9" ) { ?>fadeInUp<?php } else if ( get_theme_mod('theme_customizer_animationlist') == "value10" ) { ?>fadeInDown<?php } else if ( get_theme_mod('theme_customizer_animationlist') == "value11" ) { ?>bounceInLeft<?php } else if ( get_theme_mod('theme_customizer_animationlist') == "value12" ) { ?>bounceInRight<?php } else if ( get_theme_mod('theme_customizer_animationlist') == "value13" ) { ?>bounceInUp<?php } else if ( get_theme_mod('theme_customizer_animationlist') == "value14" ) { ?>bounceInDown<?php } else { ?>fadeIn<?php } ?> animated">
		        	<?php if ( get_theme_mod('theme_customizer_headertextlineone') && is_front_page() ) { ?>
		        		<!-- Get intro text -->
		        		<?php echo esc_textarea('' .get_theme_mod( 'theme_customizer_headertextlineone', '' )."");?>
		        	<?php } else if (is_object($post) && get_post_meta( $post->ID, '_playne2_introtext_header', true )) { ?>
						<!-- Show this header when custom text is used on page -->
						<?php global $post; $introtext = get_post_meta( $post->ID, '_playne2_introtext_header', true ); echo "$introtext" ?></div>
					<?php } else if ( get_theme_mod('theme_customizer_headertextlineoneblog') && is_home() ) { ?>
						<?php
						$introtextblog = get_theme_mod( 'theme_customizer_headertextlineoneblog', '' );
						$introblog = sprintf( __( '%s', 'playne' ), esc_textarea( $introtextblog ) );
						echo $introblog;
						?>
					<?php } else if (is_home()) { ?>
						<?php _e('Blog','playne'); ?>
			 		<?php } else if(is_search()) { ?>
			 			<!-- Get search results -->
			 			<?php _e('Results for','playne'); ?> "<?php esc_attr(the_search_query()) ?>"
					<?php } else if(is_tag()) { ?>
						<!-- Get archive results -->
						<?php _e('Archive:','playne'); ?> 
					<?php } else if(is_day()) { ?>
						<!-- Get the chosen day -->
						<?php _e('Archive:','playne'); ?> <?php echo get_the_date(); ?>
					<?php } else if(is_month()) { ?>
						<!-- Get the chosen month -->
						<?php _e('Archive:','playne'); ?> <?php echo get_the_date('F Y'); ?>
					<?php } else if(is_year()) { ?>
						<!-- Get the chosen year -->
						<?php _e('Archive:','playne'); ?> <?php echo get_the_date('Y'); ?>
					<?php } else if(is_404()) { ?>
					<div class="error-container">
						<div class="error-container-inner">
						<!-- Get 404 error -->
						<p class="lead clearfix fade-it2 fadeInSlower animated">
		        			<a href="javascript:history.back()"><?php _e('Go Back','playne'); ?></a>
		        		</p>
						<?php _e('404: Page Not Found!','playne'); ?>
						</div>
					</div>
					<?php } else if(is_category()) { ?>
						<!-- Get archive category -->
						<?php _e('Archive:','playne'); ?> <?php single_cat_title(); ?>
					<?php } else if(is_author()) { ?>
						<!-- Get author results -->
						<?php _e('Posts by:','playne'); ?> <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); echo $curauth->display_name; ?>
					<?php } else if (is_single()) { ?>
						<!-- Get blog title -->
			 			<?php the_title(); ?>
			 		<?php } else if (is_page() && !is_home()) { ?>
			 			<!-- Get page title -->
			 			<?php the_title(); ?>
			 		<?php } ?>
			 	</h2>

			 	<?php if ( get_theme_mod('theme_customizer_headerbutton') or get_theme_mod('theme_customizer_headerbutton2') ) { ?>
			 		<div class="button-area<?php if ( get_theme_mod('theme_customizer_headerbuttoncorners') == "value1") { ?> rounded<?php } ?><?php if ( get_theme_mod('theme_customizer_headerbuttoncorners') == "value2") { ?> semi-rounded<?php } ?>">
			 	<?php } ?>

			 	<?php if ( get_theme_mod('theme_customizer_headerbutton') && is_front_page() ) { ?>
			 	<!-- Get first header button -->
			 	<div class="first-button">
			 		<a class="main-button <?php if ( get_theme_mod('theme_customizer_headerbuttoneffect') == "value1") { ?>hvr-sweep-to-bottom<?php } else if ( get_theme_mod('theme_customizer_headerbuttoneffect') == "value2") { ?>hvr-sweep-to-right<?php } else if ( get_theme_mod('theme_customizer_headerbuttoneffect') == "value3") { ?>hvr-sweep-to-left<?php } else if ( get_theme_mod('theme_customizer_headerbuttoneffect') == "value4") { ?>hvr-fade<?php } else if ( get_theme_mod('theme_customizer_headerbuttoneffect') == "value5") { ?>hvr-bounce-to-bottom<?php } else if ( get_theme_mod('theme_customizer_headerbuttoneffect') == "value6") { ?>hvr-bounce-to-top<?php } else if ( get_theme_mod('theme_customizer_headerbuttoneffect') == "value7") { ?>hvr-bounce-to-left<?php } else if ( get_theme_mod('theme_customizer_headerbuttoneffect') == "value8") { ?>hvr-bounce-to-right<?php } else { ?>hvr-sweep-to-top<?php } ?>" href="<?php if ( get_theme_mod('theme_customizer_headerbuttonlink') ) { ?><?php echo esc_url('' .get_theme_mod( 'theme_customizer_headerbuttonlink', '' )."");?><?php } ?>">
			 			<?php if (get_theme_mod('theme_customizer_headerbuttoniconcustom')) { ?><i class="fa <?php echo esc_textarea('' .get_theme_mod( 'theme_customizer_headerbuttoniconcustom', '' )."");?>"></i><?php } else if( get_theme_mod( 'theme_customizer_headerbuttoniconlist' ) == 'value0') { ?><?php } else if( get_theme_mod( 'theme_customizer_headerbuttoniconlist' ) == 'value1') { ?><i class="fa fa-apple"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist' ) == 'value2') { ?><i class="fa fa-android"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist' ) == 'value3') { ?><i class="fa fa-heart"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist' ) == 'value4') { ?><i class="fa fa-bolt"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist' ) == 'value5') { ?><i class="fa fa-check"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist' ) == 'value6') { ?><i class="fa fa-cloud"></i><?php } else if( get_theme_mod( 'theme_customizer_headerbuttoniconlist' ) == 'value7') { ?><i class="fa fa-credit-card"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist' ) == 'value8') { ?><i class="fa fa-comment"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist' ) == 'value9') { ?><i class="fa fa-camera"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist' ) == 'value10') { ?><i class="fa fa-gamepad"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist' ) == 'value11') { ?><i class="fa fa-inbox"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist' ) == 'value12') { ?><i class="fa fa-music"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist' ) == 'value13') { ?><i class="fa fa-mobile-phone"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist' ) == 'value14') { ?><i class="fa fa-thumbs-up"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist' ) == 'value15') { ?><i class="fa fa-users"></i><?php } ?><?php echo esc_textarea('' .get_theme_mod( 'theme_customizer_headerbutton', '' )."");?>
			 		</a>
			 	</div>
			 	<?php } ?>

			 	<?php if ( get_theme_mod('theme_customizer_headerbutton2') && is_front_page() ) { ?>
			 	<!-- Get second header button -->
			 	<div class="second-button">
			 		<a class="main-button <?php if ( get_theme_mod('theme_customizer_headerbuttoneffect2') == "value1") { ?>hvr-sweep-to-bottom<?php } else if ( get_theme_mod('theme_customizer_headerbuttoneffect2') == "value2") { ?>hvr-sweep-to-right<?php } else if ( get_theme_mod('theme_customizer_headerbuttoneffect2') == "value3") { ?>hvr-sweep-to-left<?php } else if ( get_theme_mod('theme_customizer_headerbuttoneffect2') == "value4") { ?>hvr-fade<?php } else if ( get_theme_mod('theme_customizer_headerbuttoneffect2') == "value5") { ?>hvr-bounce-to-bottom<?php } else if ( get_theme_mod('theme_customizer_headerbuttoneffect2') == "value6") { ?>hvr-bounce-to-top<?php } else if ( get_theme_mod('theme_customizer_headerbuttoneffect2') == "value7") { ?>hvr-bounce-to-left<?php } else if ( get_theme_mod('theme_customizer_headerbuttoneffect2') == "value8") { ?>hvr-bounce-to-right<?php } else { ?>hvr-sweep-to-top<?php } ?>" href="<?php if ( get_theme_mod('theme_customizer_headerbuttonlink2') ) { ?><?php echo esc_url('' .get_theme_mod( 'theme_customizer_headerbuttonlink2', '' )."");?><?php } ?>">
			 			<?php if (get_theme_mod('theme_customizer_headerbuttoniconcustom2')) { ?><i class="fa <?php echo esc_textarea('' .get_theme_mod( 'theme_customizer_headerbuttoniconcustom2', '' )."");?>"></i><?php } else if( get_theme_mod( 'theme_customizer_headerbuttoniconlist2' ) == 'value0') { ?><?php } else if( get_theme_mod( 'theme_customizer_headerbuttoniconlist2' ) == 'value1') { ?><i class="fa fa-apple"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist2' ) == 'value2') { ?><i class="fa fa-android"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist2' ) == 'value3') { ?><i class="fa fa-heart"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist2' ) == 'value4') { ?><i class="fa fa-bolt"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist2' ) == 'value5') { ?><i class="fa fa-check"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist2' ) == 'value6') { ?><i class="fa fa-cloud"></i><?php } else if( get_theme_mod( 'theme_customizer_headerbuttoniconlist2' ) == 'value7') { ?><i class="fa fa-credit-card"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist2' ) == 'value8') { ?><i class="fa fa-comment"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist2' ) == 'value9') { ?><i class="fa fa-camera"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist2' ) == 'value10') { ?><i class="fa fa-gamepad"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist2' ) == 'value11') { ?><i class="fa fa-inbox"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist2' ) == 'value12') { ?><i class="fa fa-music"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist2' ) == 'value13') { ?><i class="fa fa-mobile-phone"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist2' ) == 'value14') { ?><i class="fa fa-thumbs-up"></i><?php } else if (get_theme_mod( 'theme_customizer_headerbuttoniconlist2' ) == 'value15') { ?><i class="fa fa-users"></i><?php } ?><?php echo esc_textarea('' .get_theme_mod( 'theme_customizer_headerbutton2', '' )."");?>
			 		</a>
			 	</div>
			 	<?php } ?>

			 	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Header Widgets') ) : else : ?>		
				<?php endif; ?>
				<?php if (is_front_page()) { ?>
					<?php dynamic_sidebar('header-one'); ?>
				<?php } ?>

			 	<?php if ( get_theme_mod('theme_customizer_headerbutton') or get_theme_mod('theme_customizer_headerbutton2') ) { ?>
			 		</div>
			 	<?php } ?>

			</div> 

		      	<?php if((is_page_template( 'homepage.php' ) || is_page_template( 'antenna.php' ))&& get_theme_mod('theme_customizer_showcaseimage')) { ?>
		      	<!-- Get the featured image -->
		      	<div class="headerimage clearfix" id="move-showcase">
					<?php if ( get_theme_mod('theme_customizer_showcaseimage') ) { ?>
					<div class="img-container">
						<img src="<?php echo get_stylesheet_directory_uri() . '/images/' . get_the_ID() . '.png'; ?>" alt="" class="header-showcase img-<?=get_the_ID();?>" />
					</div>
					<?php } ?>
				</div> 
<?php
  if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
    	the_content();
		} // end while
	} // end if                                                                                                           ?>
				<?php } ?>
      
    
				<?php if(is_page_template( 'homepage.php' ) && get_theme_mod('theme_customizer_showcaseimage') =='') { ?>
				<div class="down-arrow animated-longer fadeInDown">
			 		<a href="#"><i class="fa fa-angle-down"></i></a>
			 	</div>
				<?php } ?>
				
    	</div>

	</section>

<div id="content-wrapper" class="clearfix">