<?php get_header(); ?>

    <div id="main-content" class="main-content">

        <?php while (have_posts()) : the_post(); ?>
            <div class="post-box">
                <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <h4 class="postmetadata">
                    <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in
                    <span class="cat"><?php the_category(', ') ?></span>
                    <span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
                    <span class="comments">with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
                </h4>
                <?php the_content('More &raquo;'); ?>
                <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
            </div>
        <?php endwhile; ?>

        <nav class="post-nav">
            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
        </nav>


            <?php get_sidebar('mid');?>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pellentesque massa ut velit bibendum, non accumsan nibh placerat. Phasellus dapibus malesuada consectetur. Aliquam in feugiat sapien, in hendrerit nunc. Pellentesque molestie condimentum nisi at blandit. Curabitur a sollicitudin lorem. Suspendisse ornare rhoncus mollis. Maecenas aliquam tristique lectus ut vehicula. Vestibulum varius condimentum tempus. Maecenas non nulla a diam vestibulum rutrum a luctus quam. Vestibulum efficitur bibendum felis vitae rhoncus. Sed quis molestie lectus.</p>

            <?php get_sidebar('lower');?>



    </div><!-- #main-content -->
    <div>
        <?php get_sidebar();?>
    </div>

    <div id='delimiter'></div>
<?php get_footer();
