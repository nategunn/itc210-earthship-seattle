<?php get_header(); ?>

<div id="middle" class="wrapper940">
    
    <div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
        <!-- for Breadcrumb NavXT -->
	<?php if(function_exists('bcn_display'))
	{
	    bcn_display();
	}?>
    </div>

    <div id="main-content" class="four04">

	<h2>Error 404</h2>
    
    <p>Q: What does 404 mean?</p>
	<p>A: It just means the page you were looking for has been moved or removed.</p>
    <p>We apologize for the inconvienience.</p> 
    <p>Try another search to find your topic?<p>
    
    <div class="main-content-search-bar">
	<?php get_search_form(); ?>
</div> 

</div><!-- #main-content -->

<div>
    <?php get_sidebar();?>
</div>

<div id='delimiter'></div>
<?php get_footer();