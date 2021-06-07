<?php
if( ! is_active_sidebar( 'main-sidebar' ) ) {
    return;
}

?>
    
    
    <aside id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'main-sidebar' ); ?>

        <p>Place widgets here!</p>


    </aside>

    <?php
if( ! is_active_sidebar( 'secondary-sidebar' ) ) {
    return;
}

?>
    
    
    <aside id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'secondary-sidebar' ); ?>

        <p>Place widgets here!</p>


    </aside>