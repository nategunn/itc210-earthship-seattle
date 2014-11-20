<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<div id="main-content-fp" class="front-page">
    
    <div id="hero-front-page">
        <img src="<?php bloginfo('template_url'); ?>/images/G2_Global_model-Earthship-1158x400px.jpg" alt="earthship hero-image"/>
    </div>
    
    <h2>Vision</h2>
        <p class="xbig-p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu sit amet, consectetur adipiscing elit.</p>
    
    
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
    
    <div class="big-right">
        <h3>Mission</h3>
            <p class="big-p">Nam pharetra nulla. venenatis sed, volutpat eget lacus. Duis dictum metus felis, sed eleifend erat volutpat.</p>
    </div> <!-- end big-right -->
    
    <div id="lower-div">
        <?php get_sidebar('lower');?>
    </div>

</div><!-- #main-content -->

<div id='delimiter'></div>
<?php get_footer();