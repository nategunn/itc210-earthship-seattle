<?php
/*
Template Name: projects-current
*/
?>
<?php get_header(); ?>

<div id="middle" class="wrapper940">
    
    <div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
        <!-- for Breadcrumb NavXT -->
	<?php if(function_exists('bcn_display'))
	{
	    bcn_display();
	}?>
    </div>

    <div id="main-content" class="page">

    <?php query_posts( 'cat=projects&tag=past' ); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <h2><?php the_title(); ?></h2> <!-- ex. "About" -->
            
            <?php the_content(); ?>
            
        </div>

    <?php endwhile; ?>
   
    <?php endif; ?> 


</div><!-- #main-content -->
<div>
        <?php get_sidebar();?>
</div>
<div id='delimiter'></div>
<?php get_footer();