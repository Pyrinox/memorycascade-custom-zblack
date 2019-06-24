	
		<!-- END CONTENT -->
		</div>
	
	<!-- END CONTAINER -->
	</div>
	
	<div id="instagram-footer">

		<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-2') ) ?>
		
	</div>
	
	<footer id="footer">
		
		<div class="container">
			
			<?php if(!get_theme_mod('zblack_footer_share')) : ?>
			<div id="footer-social">
				
				<?php if(get_theme_mod('zblack_facebook')) : ?><a href="http://facebook.com/<?php echo esc_html(get_theme_mod('zblack_facebook')); ?>" target="_blank"><i class="fa fa-2x fa-facebook"></i> <span></span></a><?php endif; ?>
				<?php if(get_theme_mod('zblack_twitter')) : ?><a href="http://twitter.com/<?php echo esc_html(get_theme_mod('zblack_twitter')); ?>" target="_blank"><i class="fa fa-2x fa-twitter"></i> <span></span></a><?php endif; ?>
				<?php if(get_theme_mod('zblack_instagram')) : ?><a href="http://instagram.com/<?php echo esc_html(get_theme_mod('zblack_instagram')); ?>" target="_blank"><i class="fa fa-2x fa-instagram"></i> <span></span></a><?php endif; ?>
				<?php if(get_theme_mod('zblack_pinterest')) : ?><a href="http://pinterest.com/<?php echo esc_html(get_theme_mod('zblack_pinterest')); ?>" target="_blank"><i class="fa fa-2x fa-pinterest"></i> <span></span></a><?php endif; ?>
				<?php if(get_theme_mod('zblack_bloglovin')) : ?><a href="http://bloglovin.com/<?php echo esc_html(get_theme_mod('zblack_bloglovin')); ?>" target="_blank"><i class="fa fa-2x fa-heart"></i> <span></span></a><?php endif; ?>
				<?php if(get_theme_mod('zblack_google')) : ?><a href="http://plus.google.com/<?php echo esc_html(get_theme_mod('zblack_google')); ?>" target="_blank"><i class="fa fa-2x fa-google-plus"></i> <span></span></a><?php endif; ?>
				<?php if(get_theme_mod('zblack_tumblr')) : ?><a href="http://<?php echo esc_html(get_theme_mod('zblack_tumblr')); ?>.tumblr.com/" target="_blank"><i class="fa fa-2x fa-tumblr"></i> <span></span></a><?php endif; ?>
				<?php if(get_theme_mod('zblack_youtube')) : ?><a href="http://youtube.com/<?php echo esc_html(get_theme_mod('zblack_youtube')); ?>" target="_blank"><i class="fa fa-2x fa-youtube-play"></i> <span></span></a><?php endif; ?>
				<?php if(get_theme_mod('zblack_dribbble')) : ?><a href="http://dribbble.com/<?php echo esc_html(get_theme_mod('zblack_dribbble')); ?>" target="_blank"><i class="fa fa-2x fa-dribbble"></i> <span></span></a><?php endif; ?>
				<?php if(get_theme_mod('zblack_soundcloud')) : ?><a href="http://soundcloud.com/<?php echo esc_html(get_theme_mod('zblack_soundcloud')); ?>" target="_blank"><i class="fa fa-2x fa-soundcloud"></i> <span></span></a><?php endif; ?>
				<?php if(get_theme_mod('zblack_vimeo')) : ?><a href="http://vimeo.com/<?php echo esc_html(get_theme_mod('zblack_vimeo')); ?>" target="_blank"><i class="fa fa-2x fa-vimeo-square"></i> <span></span></a><?php endif; ?>
				<?php if(get_theme_mod('zblack_linkedin')) : ?><a href="<?php echo esc_html(get_theme_mod('zblack_linkedin')); ?>" target="_blank"><i class="fa fa-2x fa-linkedin"></i> <span></span></a><?php endif; ?>
				<?php if(get_theme_mod('zblack_rss')) : ?><a href="<?php echo esc_url(get_theme_mod('zblack_rss')); ?>" target="_blank"><i class="fa fa-2x fa-rss"></i> <span></span></a><?php endif; ?>
				
			</div>
			<?php endif; ?>
			
			<div id="footer-copyright">

				<p class="copyright"><?php echo wp_kses_post(get_theme_mod('zblack_footer_copyright', 'Designed & Developed with <i style="color:#FF4A4A" class="fa fa-heart"></i> by ZThemes.net')); ?></p>
				
			</div>
			
		</div>
		
	</footer>
	
	<?php wp_footer(); ?>
	
</body>

</html>