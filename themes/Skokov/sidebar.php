 <aside>
     
        <div class="search side-block"><?php get_search_form(); ?>
    </div>

        <div class="categories side-block">
            <h3>categories</h3>
            <ul class="cat-list">
               <?php wp_list_categories('show_count=1&title_li='); ?>
            </ul>
        </div>
        <div class="archive side-block">
            <h3>Archive</h3>
            <ul class="months">
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </div>
        <div class="popular side-block">
            <h3>Popular posts</h3>
            here will be some widget
        </div>
        <div class="tags side-block">
            <h3>tags</h3>
            here will be tag cloud</div>
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>

	<?php endif; ?>

</aside>