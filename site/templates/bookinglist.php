<?php
    $tourpage = $page->parent()->tour()->toPage();
    go($tourpage->url());
?>
