<div class="entry-wrap">

	<div class="entry-content clearfix">
				
		<?php if(is_page() or is_single()) { ?>
		<?php } else { ?>
			<header class="post-header">	
				<!-- Get the post header -->
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				
				<div class="date-title">
					<?php _e('By','playne'); ?> <?php the_author_posts_link(); ?> <?php _e('on','playne'); ?> <?php echo get_the_date(); ?> <?php _e('in','playne'); ?> <?php the_category(', '); ?> <?php if ( is_sticky () ) { ?><?php _e('featured','playne'); ?><?php } ?>
				</div>
			
			</header>
		<?php } ?>

		<!-- Get the gallery slideshow -->
		<div class="flexslider-container">
        	<div class="flexslider">
            	<ul class="slides">
                	<?php
                		$single_gallery_attachments = get_posts(
                		array(
                    		'orderby' => 'menu_order',
                    		'post_type' => 'attachment',
                    		'post_parent' => get_the_ID(),
		    				'post_thumbnail' => get_the_ID(),
		    				'post_excerpt' => get_the_ID(),
                    		'post_mime_type' => 'image',
                    		'post_status' => null,
                    		'posts_per_page' => -1
                			)
            			); 
                		foreach ( $single_gallery_attachments as $single_gallery_attachment ) :
                		if( get_post_meta($single_gallery_attachment->ID, 'be_rotator_include', true) !== '1' ) {
             			?>
                	<li class="slide">
						<img src="<?php echo ( wp_get_attachment_url( $single_gallery_attachment->ID, 'full' )); ?>" alt="<?php echo the_title(); ?>" />
					</li>
                		<?php } endforeach; ?>
            	</ul>
       		</div>
    	</div>

		<div class="post-content">

			<?php if(is_search() || is_archive()) { ?>
				<!-- If this is search of archive return the excerpt -->
				<div class="excerpt-more">
					<?php the_excerpt(); ?>
				</div>

			<?php } else { ?>
					
				<!-- Post content -->
				<?php the_content(''); ?>
				
				<?php if(is_page() or is_single()) { ?>
				<?php } else { ?>
					
					<!-- Get the read more button on the blog page -->
					<div class="clearfix">
						<a href="<?php the_permalink(); ?>" class="button-more" title="<?php _e('read more','playne'); ?>">
							<?php _e('Read more','playne'); ?>
						</a>
					</div>		

				<?php } ?>						
					
				<?php if(is_single() || is_page()) { ?>
					
					<div class="pagelink">
						<?php wp_link_pages(); ?>
					</div>

				<?php } ?>	

			<?php } ?>

			<?php if(is_single()) { ?>
				<ul class="meta">
					<li><?php the_tags('', ', ', ''); ?></li>			
				</ul>	
			<?php } ?>

		</div>

	</div>

</div>