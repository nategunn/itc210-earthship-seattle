<?php
/*
Template Name: projects-past
*/
?>
<?php get_header(); ?>

<div id="middle" class="wrapper940">
    
    <div class="breadcrumbs">
        <!-- for Breadcrumb NavXT -->
	<?php if(function_exists('bcn_display'))
	{
	    bcn_display();
	}?>
    </div>

    <div id="main-content" class="projects-past">

    <?php if(query_posts( 'cat=projects&tag=past' )): ?> 
    
    <?php while (have_posts()) : the_post(); ?>
    <article>
    	<div class="post-box clear-fix">
	    <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	    <h4 class="postmetadata">
		<span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
		<span class="cat"><?php the_category(', ') ?></span>
		<span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?>. </span>
		
		<span class="tags"><?php the_tags( 'Tags: ', ' , ', '.' ); ?></span><br>
		
		<span class="comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>.</span>
	    </h4>
		    <?php the_content('More &rAquo;'); ?>
	    <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
        </div>
	
	</article>
	<hr>
	   
    <?php endwhile; ?>

    
    <?php endif; ?>

</div><!-- #main-content -->
<div>
        <?php get_sidebar();?>
</div>
<div id='delimiter'></div>
<?php get_footer();