<div id="mid">

    <ul>
        <!--Open Top Widget UL-->
        <?php if ( is_active_sidebar( 'lower-page' ) ) : ?>
            <?php dynamic_sidebar( 'lower-page' ); ?>
        <?php else : ?>
            <li class="widget" id="Pages">
                <div class="rounded">
                    <h3 class="widget-title">Pages</h3>
                    <ul>
                        <?php wp_list_pages('title_li='); ?>
                    </ul>
                </div>
            </li>
        <?php endif; ?>
    </ul>
</div>