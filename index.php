<?php get_header(); ?>

<div class="hero-index-page"></div>

<!--<div id="wrapper">-->
<div id="middle" class="wrapper940">
    
    <div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
	<?php if(function_exists('bcn_display'))
	{
	    bcn_display();
	}?>
    </div>
    
<div id="main-content" class="index">
     
    
    <?php while (have_posts()) : the_post(); ?>
    	<div class="post-box clear-fix">
	    <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	    <h4 class="postmetadata">
		<span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
		<span class="cat"><?php the_category(', ') ?></span>
		<span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
		    <span class="comments">with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
	    </h4>
		    <?php the_content('More &rAquo;'); ?>
	    <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
        </div>
	
	
	<hr>
	    
    <?php endwhile; ?>
    
    

		<nav class="post-nav">
            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
		</nav>
		

</div><!-- #main-content -->
<div>
    <?php get_sidebar();?>
</div>

<div id='delimiter'></div>
<?php get_footer();
