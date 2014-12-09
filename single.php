<?php get_header(); ?>

<div id="middle" class="wrapper940">
    
<div class="breadcrumbs">
	<?php if (function_exists('bcn_display')) { bcn_display(); } ?>
</div>

<div id="main-content" class="single">
    
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>   
    
    <h2><?php the_title(); ?></h2>
    
    <h4 class="postmetadata">
    	<span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
		<span class="cat"><?php the_category(', ') ?></span>
		<span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
		<span class="tags"><?php the_tags( 'Tags: ', ' , ', '.' ); ?></span>
    </h4>
        
    <?php the_content('More &raquo;'); ?>     
        
	<nav class="post-nav">            
		<div class="alignleft"><?php previous_post_link('&laquo; %link', '%title', true) ?></div>
		<div class="alignright"><?php next_post_link('%link &raquo;', '%title', true) ?></div>
	</nav>
    
    <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
	<?php comments_template(); ?>
    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</div><!-- end content -->

<div>
        <?php get_sidebar();?>
</div>
<div id='delimiter'></div>
<?php get_footer();
