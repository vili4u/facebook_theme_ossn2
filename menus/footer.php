<?php

$menus = $params['menu'];
foreach ($menus as $menu) {
    foreach ($menu as $text => $link) {
        echo "<a href='{$link}'>{$text}</a>";
    }
}
