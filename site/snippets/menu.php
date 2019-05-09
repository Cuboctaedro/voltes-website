<?php if( !isset($menupages) ) {
    $menupages = $site->pages()->listed();
}
?>
<nav aria-label="<?= t('main-nav-label') ?>" class="sitemenu flex flex-row items-stretch h-54 ">

    <button aria-expanded="false" aria-controls="menu-list" class="sitemenu__item sitemenu__button" data-toggle-menu="#menu-list">Menu</button>

    <div class="sitemenu__list"  id="menu-list">
        <ul class="list-reset lg__flex lg__flex-row items-stretch bg-green">
            <?php foreach($menupages as $item): ?>
                <li class="">
                    <a href="<?= $item->url() ?>" class="sitemenu__item "><?= $item->title() ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>
