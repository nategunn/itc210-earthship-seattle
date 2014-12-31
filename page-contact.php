<?php
/*
Template Name: page-contact
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

    <div id="main-content" class="page-contact">
    
    
    <?php while (have_posts()) : the_post(); ?>
       <!-- <article>-->
        <!--<div class="post-box clear-fix">-->
    
            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                
                <div class="entry">
                <?php the_content(); ?>
                </div>
                
            </div> <!-- end post-class -->
            
        <!--</div> --><!-- end post-box -->
        
        <!--</article>-->
        
        <hr>
    
        <?php endwhile; ?>
        
       
        
        <div class="social-icons-contact">
             <h3>Join Us!</h3>
            <a href="https://www.facebook.com/EarthshipSeattle" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-facebook.png" alt="Icon: link to Facebook"></a></li>
            <a href="http://www.meetup.com/Earthship-Seattle/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-meetup.png" alt="Icon: link to MeetUp"></a></li>
        </div>
   
    </div><!-- #main-content -->
       
<div>
    <?php get_sidebar();?>
</div>

<div id='delimiter'></div>
<?php get_footer();