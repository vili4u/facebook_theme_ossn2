<?php

echo ' <ul>';
$i = 0;
foreach ($params['menu'] as $menu) {
    if ($i == 0) {
        $first = 'class="first-item"';
    }
    if ($i <= 3) {
        foreach ($menu as $name => $link) {
            echo "<li {$first}><a href='{$link}'><span>" . ossn_print($name) . "</span></a></li>";
        }
    } else {
        echo "<li><a href='{$links}'>" . ossn_print('more') . "</a>
		  <ul>";
        foreach ($menu as $name => $link) {
            echo "<li><a href='{$link}'><span>" . ossn_print($name) . "</span></a></li>";
        }
        echo "</ul>
		 </li>";
    }
    $i++;
}
echo '</ul>';
