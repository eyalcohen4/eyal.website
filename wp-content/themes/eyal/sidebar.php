<?php

  if ( ! is_active_sidebar( 'home-sidebar' )) {
    return;
  }

?>

<aside id="home-sidebar-widgets" class="sidebar__widget-area">

  <div class="sidebar__container">
    <?php dynamic_sidebar( 'home-sidebar' ); ?>
  </div>

</aside>
