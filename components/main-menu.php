<?php
if (!isset($current_page)) {
    $current_page = '';
}

require BASE_PATH . '/website-data/menu-data.php';
require BASE_PATH . '/website-data/menu-render.php';
?>

<nav class="tt-main-menu tt-m-menu-center">
    <div class="tt-main-menu-holder">
        <div class="tt-main-menu-inner">
            <div class="tt-main-menu-content">
                <ul class="tt-main-menu-list">
                    <?php renderMenu($menu_items, $current_page); ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
