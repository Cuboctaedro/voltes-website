<?php
    $tourpage = $page->parent()->parent()->tour()->toPage();
    go($tourpage->url());
?>
