<?php

$menus = $params['menu'];
echo "<div class='ossn-menu-search'>";
echo '<div class="title">' . ossn_print('result:type') . '</div>';
foreach ($menus as $menu => $val) {
    foreach ($val as $text => $link) {
        $menu = str_replace(':', '-', $text);
        $icon = ossn_site_url() . "components/OssnSearch/images/{$menu}.png";
        $text = ossn_print($text);
        echo "<li><a href='{$link}'>
		<img src='{$icon}' /> 
		<div class='text'>{$text}</div>
		</a>
		</li>";
    }
}
echo '</div>';
