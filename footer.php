<!-- Footer -->
<section id="footer">

  <!--Map-->
  <div id="contactmap" onmouseover="style.pointerEvents='none'">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2877.2096752392945!2d-79.70440839999996!3d43.85148259999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b222555e8fd15%3A0x1ca31a5277f92410!2s110+Parr+Blvd%2C+Kleinburg%2C+ON+L0J%2C+Canada!5e0!3m2!1sen!2sca!4v1431966089903" width="100%" height="600" frameborder="0" style="border:0"></iframe>
   </div>
  
  
	<?php if( get_theme_mod( 'theme_customizer_general7' ) == '1' or is_front_page()) { ?>
	<div class="row scrollme clearfix <?php if ( get_theme_mod('theme_customizer_footerbuttoncorners') == "value1") { ?> square<?php } ?><?php if ( get_theme_mod('theme_customizer_footerbuttoncorners') == "value2") { ?> semi-rounded<?php } ?>">

  			<div class="columns clearfix<?php if( get_theme_mod( 'theme_customizer_general3' ) == '1') { ?>"<?php } else { ?> wow fadeInUp animated"<?php } ?><?php if( get_theme_mod( 'theme_customizer_general3' ) == '1') { ?> data-wow-duration="1.5s"<?php } ?>>

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

        			<p class="lead fade-it2">
        			<?php if ( get_theme_mod('theme_customizer_footertextlinetwo') ) { ?>
        				<?php echo esc_textarea('' .get_theme_mod( 'theme_customizer_footertextlinetwo', '' )."");?>
	 				<?php } ?>
	 				</p>

      				<h2 class="fade-it2">
        			<?php if ( get_theme_mod('theme_customizer_footertextlineone') ) { ?>
        				<?php echo esc_textarea('' .get_theme_mod( 'theme_customizer_footertextlineone', '' )."");?>
	 				<?php } ?>
	 				</h2>

			 	<?php if ( get_theme_mod('theme_customizer_headerbutton') or get_theme_mod('theme_customizer_headerbutton2') ) { ?>
			 		<div class="button-area">
			 	<?php } ?>

				 	<?php if ( get_theme_mod('theme_customizer_footertextbutton1') ) { ?>
				 	<div class="first-button">
				 		<a class="main-button <?php if ( get_theme_mod('theme_customizer_footerbuttoneffect') == "value1") { ?>hvr-sweep-to-bottom<?php } else if ( get_theme_mod('theme_customizer_footerbuttoneffect') == "value2") { ?>hvr-sweep-to-right<?php } else if ( get_theme_mod('theme_customizer_footerbuttoneffect') == "value3") { ?>hvr-sweep-to-left<?php } else if ( get_theme_mod('theme_customizer_footerbuttoneffect') == "value4") { ?>hvr-fade<?php } else if ( get_theme_mod('theme_customizer_footerbuttoneffect') == "value5") { ?>hvr-bounce-to-bottom<?php } else if ( get_theme_mod('theme_customizer_footerbuttoneffect') == "value6") { ?>hvr-bounce-to-top<?php } else if ( get_theme_mod('theme_customizer_footerbuttoneffect') == "value7") { ?>hvr-bounce-to-left<?php } else if ( get_theme_mod('theme_customizer_footerbuttoneffect') == "value8") { ?>hvr-bounce-to-right<?php } else { ?>hvr-sweep-to-top<?php } ?>" href="<?php if ( get_theme_mod('theme_customizer_footertextbutton1url') ) { ?><?php echo esc_url('' .get_theme_mod( 'theme_customizer_footertextbutton1url', '' )."");?><?php } ?>">
				 			<?php if (get_theme_mod('theme_customizer_footerbuttoniconcustom')) { ?><i class="fa <?php echo esc_textarea('' .get_theme_mod( 'theme_customizer_footerbuttoniconcustom', '' )."");?>"></i><?php } else if( get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value0') { ?><?php } else if( get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value1') { ?><i class="fa fa-apple"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value2') { ?><i class="fa fa-android"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value3') { ?><i class="fa fa-heart"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value4') { ?><i class="fa fa-bolt"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value5') { ?><i class="fa fa-check"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value6') { ?><i class="fa fa-cloud"></i><?php } else if( get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value7') { ?><i class="fa fa-credit-card"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value8') { ?><i class="fa fa-comment"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value9') { ?><i class="fa fa-camera"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value10') { ?><i class="fa fa-gamepad"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value11') { ?><i class="fa fa-inbox"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value12') { ?><i class="fa fa-music"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value13') { ?><i class="fa fa-mobile-phone"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value14') { ?><i class="fa fa-thumbs-up"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value15') { ?><i class="fa fa-users"></i><?php } ?><?php echo esc_textarea('' .get_theme_mod( 'theme_customizer_footertextbutton1', '' )."");?>
				 		</a>
				 	</div>
				 	<?php } ?>

				 	<?php if ( get_theme_mod('theme_customizer_footertextbutton2') ) { ?>
				 	<div class="second-button">
				 		<a class="main-button <?php if ( get_theme_mod('theme_customizer_footerbuttoneffect2') == "value1") { ?>hvr-sweep-to-bottom<?php } else if ( get_theme_mod('theme_customizer_footerbuttoneffect2') == "value2") { ?>hvr-sweep-to-right<?php } else if ( get_theme_mod('theme_customizer_footerbuttoneffect2') == "value3") { ?>hvr-sweep-to-left<?php } else if ( get_theme_mod('theme_customizer_footerbuttoneffect2') == "value4") { ?>hvr-fade<?php } else if ( get_theme_mod('theme_customizer_footerbuttoneffect2') == "value5") { ?>hvr-bounce-to-bottom<?php } else if ( get_theme_mod('theme_customizer_footerbuttoneffect2') == "value6") { ?>hvr-bounce-to-top<?php } else if ( get_theme_mod('theme_customizer_footerbuttoneffect2') == "value7") { ?>hvr-bounce-to-left<?php } else if ( get_theme_mod('theme_customizer_footerbuttoneffect2') == "value8") { ?>hvr-bounce-to-right<?php } else { ?>hvr-sweep-to-top<?php } ?>" href="<?php if ( get_theme_mod('theme_customizer_footertextbutton1url') ) { ?><?php echo esc_url('' .get_theme_mod( 'theme_customizer_footertextbutton1url', '' )."");?><?php } ?>">
				 			<?php if (get_theme_mod('theme_customizer_footerbuttoniconcustom2')) { ?><i class="fa <?php echo esc_textarea('' .get_theme_mod( 'theme_customizer_footerbuttoniconcustom2', '' )."");?>"></i><?php } else if( get_theme_mod( 'theme_customizer_footerbuttoniconlist2' ) == 'value0') { ?><?php } else if( get_theme_mod( 'theme_customizer_footerbuttoniconlist2' ) == 'value1') { ?><i class="fa fa-apple"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist2' ) == 'value2') { ?><i class="fa fa-android"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist2' ) == 'value3') { ?><i class="fa fa-heart"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist' ) == 'value4') { ?><i class="fa fa-bolt"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist2' ) == 'value5') { ?><i class="fa fa-check"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist2' ) == 'value6') { ?><i class="fa fa-cloud"></i><?php } else if( get_theme_mod( 'theme_customizer_footerbuttoniconlist2' ) == 'value7') { ?><i class="fa fa-credit-card"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist2' ) == 'value8') { ?><i class="fa fa-comment"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist2' ) == 'value9') { ?><i class="fa fa-camera"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist2' ) == 'value10') { ?><i class="fa fa-gamepad"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist2' ) == 'value11') { ?><i class="fa fa-inbox"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist2' ) == 'value12') { ?><i class="fa fa-music"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist2' ) == 'value13') { ?><i class="fa fa-mobile-phone"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist2' ) == 'value14') { ?><i class="fa fa-thumbs-up"></i><?php } else if (get_theme_mod( 'theme_customizer_footerbuttoniconlist2' ) == 'value15') { ?><i class="fa fa-users"></i><?php } ?><?php echo esc_textarea('' .get_theme_mod( 'theme_customizer_footertextbutton2', '' )."");?>
				 		</a>
				 	</div>
				 	<?php } ?>

			 	<?php if ( get_theme_mod('theme_customizer_headerbutton') or get_theme_mod('theme_customizer_headerbutton2') ) { ?>
			 		</div>
			 	<?php } ?>

				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets') ) : else : ?>		
				<?php endif; ?>
				<?php dynamic_sidebar('footer-subscribe'); ?>
				
			</div>

	</div>
	<?php } ?>
			
	<div class="footer-bottom">
		<div class="row clearfix">

			<div class="main-menu-footer clearfix">

				<div class="footertxt">
          <span class="fullwidthleft">110 Parr Boulevard, Unit 1</span> <span class="fullwidthleft">BOLTON ON L7E 4J4 CANADA</span>  <span class="fullwidthleft">  (905) 857-4481  </span> <span class="fullwidthleft"> <a href="mailto:info@multiwavesensors.com">INFO@MULTIWAVESENSORS.COM</a></span></div>
      <div class="copyright">&copy;<span><?php $the_year = date("Y"); echo esc_js($the_year); ?></span> MULTIWAVE SENSORS INC., ALL RIGHTS RESERVED. - <a href="http://www.multiwavesensors.com/?page_id=3759&amp;preview=true" title="PRIVACY POLICY" target="_new">PRIVACY POLICY</a></div>

				<div class="menu-footer">
					<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'nav')); ?>
				</div>	

			</div>
					
		</div>
	</div>

</section>

</div>
</div>
<!-- Load the scripts -->
<?php wp_footer(); ?>
</body>
</html>