<aside id="logo" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    <h3 id="tagline"><?php bloginfo('description'); ?></h3>
</aside>

<nav id="icons">
    <?php
    $menu_name = 'nav-menu';
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
        $locations = get_nav_menu_locations();
        $items = wp_get_nav_menu_items($locations[$menu_name]);

        foreach ($items as $menu_item) {
            echo '<a href="';
            echo $menu_item->url;
            echo '" title="';
            echo $menu_item->title;
            echo '"><i class="';
            echo $menu_item->attr_title;
            echo '"></i></a>';
        }
    } else {
        echo '<a href="' . get_home_url() .'" title="Home">';
        echo '<i class="icon-home hint"></i></a>';
    }
    ?>
</nav>

<br />

<aside id="search">
    <form action="<?php bloginfo('home'); ?>/" id="search_box" method="get" class="form-search">
        <label>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-search"></i></span>
                <input class="span2" type="text" name="s" value="<?php echo esc_html($s); ?>" />
            </div>
        </label>
    </form>
</aside>

<aside class="social" id="follow">
    Follow me: <i class="icon-twitter-sign"></i> <i class="icon-github-sign"></i> <i class="icon-linkedin-sign"></i>
</aside>

<aside class="social" id="share">
    Share this page: <i class="icon-twitter"></i> <i class="icon-google-plus"></i> <i class="icon-linkedin"></i> <i class="icon-facebook"></i>
</aside>