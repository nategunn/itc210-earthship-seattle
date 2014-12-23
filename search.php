<?php get_header(); ?>

<div id="middle" class="wrapper940">
    
    <div class="breadcrumbs">
	<?php if(function_exists('bcn_display'))
	{
	    bcn_display();
	}?>
    </div>
    
<div id="main-content" class="search-template">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>
		<ul>
		<?php while (have_posts()) : the_post(); ?>

		<li id="post-<?php the_ID(); ?>"> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>

		<?php endwhile; ?>
		</ul>
	<?php else : ?>

		<h2>No posts found about your topic.</h2>
		<h3>Try a different search?</h3>
		<p class="main-content-search-bar"><?php get_search_form(); ?></p> 

	<?php endif; ?>
		
</div> <!-- END MAIN-CONTENT -->


<div>
    <?php get_sidebar();?>
</div>

</div> <!-- END MIDDLE -->

<div id='delimiter'></div>

<?php get_footer(); ?>