</div><!-- #middle -->    

<div class="footer-container clear-fix">
	<footer id="site-footer" >		
		<div class="footer-nav clear-fix">
		<div class="footer-col">			
			<p class="pseudo-button"><a href="#">GET INVOLVED</a></p>
			<p class="pseudo-button"><a href="#">NEWSLETTER</a></p>
			<p class="pseudo-button"><a href="#">CONTRIBUTE</a></p>				
		</div>
		<nav id="footer-menu" >
		<?php wp_nav_menu( array( 
		    'theme_location' => 'footer-menu' ,
		    'menu' => 'footer-menu' ,
		    'container'  => 'ul'
		));?>
	    </nav>

		<div class="footer-col">
			<ul>
				<li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'about' ) ) ); ?>">ABOUT</a></li>
				<li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'seattle-team' ) ) ); ?>">SEATTLE TEAM</a></li>
				<li><a href="#">OUR PROJECTS</a></li>
				<li><a href="#">EARTHSHIP BIOTECTURE</a></li>
				<li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'earthship-academy' ) ) ); ?>">EARTHSHIP ACADEMY</a></li>
				<li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'faq' ) ) ); ?>">FAQ</a></li>
				<li><a href="#">IN THE PRESS</a></li>
				<li><a href="#">FUNDING</a></li>
			</ul>
		</div>
		<div class="footer-col">
			<ul>
				<li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'calendar' ) ) ); ?>">CALENDAR</a></li>
			</ul>
		</div>
		<div class="footer-col">
			<ul>
				<li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'blog' ) ) ); ?>">BLOG</a></li>
				<li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'past-events' ) ) ); ?>">EVENTS</a></li>
				<li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'current-events' ) ) ); ?>">PROJECTS</a></li>
			</ul>
		</div>
		<div class="footer-col">
			<ul>
				<li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'forum' ) ) ); ?>">FORUM</a></li>
			</ul>
		</div>
		<div class="footer-col">
			<ul>
				<li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'gallery' ) ) ); ?>">GALLERY</a></li>				
			</ul>
		</div>
		<div class="footer-col">
			<ul>
				<li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'resources' ) ) ); ?>">RESOURCES</a></li>
				<li><a href="#">LAND</a></li>
				<li><a href="#">ECOBUILD PERMITS</a></li>
				<li><a href="#">LOCAL BUILDERS</a></li>
				<li><a href="#">CLIMATE</a></li>
			</ul>
		</div>
		<div class="footer-col last">
			<ul>
				<li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'contact' ) ) ); ?>">CONTACT</a></li>
			</ul>
		</div>
		</div><!-- end footer-nav -->		
		<p class="copy"><?php print ("&copy; " . date ('Y') . " "); ?>Earthship Seattle &bull; All Rights Reserved &bull; <a href="#"> TOP OF PAGE </a></p>	
	</footer>
	</div><!-- close footer container -->
	
        <script src="//localhost:35729/livereload.js"></script>
	
	

</body>
</html>