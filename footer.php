</div><!-- #middle -->    
<div class="footer-container clear-fix">
	<footer id="site-footer" class="clear-fix" >
		<nav id="footer-button-menu">
			<?php wp_nav_menu( array( 
		    'theme_location' => 'footer-button-menu' ,
		    'menu' => 'footer-button-menu' ,
		    'container'  => 'ul'
		));?>
		</nav>	
		<nav id="footer-menu">
		<?php wp_nav_menu( array( 
		    'theme_location' => 'footer-menu' ,
		    'menu' => 'footer-menu' ,
		    'container'  => 'ul'
		));?>
	    </nav>	
	    <div class="copy-div">    
	   		<p class="copy"><?php print ("&copy; " . date ('Y') . " "); ?>Earthship Seattle &bull; All Rights Reserved &bull; <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Site Credits' ) ) ); ?>">Site Credits</a> &bull;<a href="#"> TOP OF PAGE </a></p>
		</div><!--copy div-->	   	
	</footer>
	</div><!-- close footer container -->	
        <script src="//localhost:35729/livereload.js"></script>
</body>
</html>