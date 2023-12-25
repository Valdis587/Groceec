<div class="sidebar__widget-search-wrapper">
    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="sidebar__widget-search">
        <input placeholder="Поиск..." type="text" value="<?php echo get_search_query() ?>" name="s" id="s" class="sidebar__widget-search-input">
        <button type="submit" id="searchsubmit" class="sidebar__widget-search-button"><i class="icon-search"></i></button>
    </form>
</div>