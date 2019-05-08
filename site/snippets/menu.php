<?php if( !isset($menupages) ) {
    $menupages = $site->pages()->listed();
}
?>
<nav aria-label="<?= t('main-nav-label') ?>" class="sitemenu flex flex-row items-stretch h-54 ">

    <button aria-expanded="false" aria-controls="menu-list" class="sitemenu__item sitemenu__button" data-toggle-menu="#menu-list">Menu</button>

    <ul class="sitemenu__list list-reset  flex-column lg__flex-row items-stretch h-54 bg-green" id="menu-list">
        <?php foreach($menupages as $item): ?>
            <li class="">
                <a href="<?= $item->url() ?>" class="sitemenu__item "><?= $item->title() ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

</nav>
