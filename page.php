<?php get_header(); ?>

<div id="middle" class="wrapper940">
    
    <div class="breadcrumbs">
        <!-- for Breadcrumb NavXT -->
	<?php if(function_exists('bcn_display'))
	{
	    bcn_display();
	}?>
    </div>

    <div id="main-content" class="page">
    
    
    <?php while (have_posts()) : the_post(); ?>
        <article>
        <div class="post-box clear-fix">
    
            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                
                <div class="entry">
                <?php the_content(); ?>
                </div>
                
            </div> <!-- end post-class -->
            
        </div> <!-- end post-box -->
        
        </article>
        
        <hr>
    
        <?php endwhile; ?>
   
    </div><!-- #main-content -->
    
<div>
    <?php get_sidebar();?>
</div>

<div id='delimiter'></div>
<?php get_footer();