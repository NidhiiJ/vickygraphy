<?php
function renderMenu($items, $current_page = '') {
    foreach ($items as $item) {

        $hasSubmenu = isset($item['submenu']);
        $isActive = isset($item['key']) && $item['key'] === $current_page;

        $keyClass = isset($item['key']) ? ('menu-item-' . $item['key']) : '';
        echo '<li class="' . ($hasSubmenu ? 'tt-submenu-wrap' : '') . ' ' . $keyClass . ' ' . ($isActive ? 'active' : '') . '">';

        if ($hasSubmenu) {
            echo '<div class="tt-submenu-trigger">';
            echo '<a href="' . $item['url'] . '">' . $item['text'] . '</a>';
            echo '</div>';

            echo '<div class="tt-submenu"><ul class="tt-submenu-list">';
            renderMenu($item['submenu'], $current_page);
            echo '</ul></div>';
        } else {
            echo '<a href="' . $item['url'] . '">' . $item['text'] . '</a>';
        }

        echo '</li>';
    }
}
