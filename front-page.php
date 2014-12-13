<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>
  
<div id="hero-front-page">
    <div class="wrapper940">
        <h2>Bringing Earthships To Seattle</h2>
    </div>
</div>
    
<!--<div id="wrapper">-->
<div id="middle" class="front-page wrapper940 main-content-fp">

    
    <h2>Vision</h2>
        <p class="xbig-p">Living Off The Grid: Freedom, Community,  and Sustainability</p>
    
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        
            <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();  
                the_content();         
            } 
            ?>
           
        </div>
 

    <?php endwhile; ?>
    <?php endif; ?>

    <div id="mid-div">
        <?php get_sidebar('mid');?>
    </div>
    
    <div class="big-right">
        <h3>Mission</h3>
            <p class="big-p">To raise awareness about Earthships and tackle the barriers between people and their Earthship dream in the greater Seattle area.</p>
    </div> <!-- end big-right -->
    
    <div id="lower-div" class="clear-fix">
        <?php get_sidebar('lower');?>
    </div>

<?php get_footer();