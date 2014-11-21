<?php get_header(); ?>

<div id="wrapper">
<div id="middle">

<div id="main-content" class="page">


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <h1><?php the_title(); ?></h1>
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