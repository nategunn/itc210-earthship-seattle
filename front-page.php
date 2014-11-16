<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<div id="main-content-fp" class="front-page">


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>

    <?php endwhile; ?>
    <?php endif; ?>

    <div id="mid-div">
        <?php get_sidebar('mid');?>
    </div>

    <div id="lower-div">
        <?php get_sidebar('lower');?>
    </div>

</div><!-- #main-content -->

<div id='delimiter'></div>
<?php get_footer();