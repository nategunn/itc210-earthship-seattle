<div id="mid">
    <?php if ( is_active_sidebar( 'mid-page' ) ) : ?>  

        <?php dynamic_sidebar( 'mid-page' ); ?>

    <?php else : ?>

    <?php /*?> 
The code below is what will diplay when no widgets are active. 
<?php */?>

        <!-- Begin Categories -->       
        <h3>Categories</h3>
        <ul>
            <?php wp_list_categories('title_li='); ?>
        </ul>
        <!-- End Categories  -->

        <!-- Begin Meta -->
        <h3>Meta</h3>
        <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
        </ul>
        <!-- End Meta -->
    <?php endif; ?> 
</div>

