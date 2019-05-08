<?php snippet('header'); ?>

<main id="main" itemscope itemtype="http://schema.org/ItemList" class="">

    <header class="hidden">
        <h1 itemprop="name"><?= $page->title() ?></h1>
    </header>

    <div>
        <ul class="container sm__pl-16 sm__pr-16 mb-64 mt-64 list-reset flex flex-row flex-wrap items-stretch justify-center">
            <?php foreach ($tours as $tour): ?>
                <li class="w-full md__w-1-2 lg__w-1-3 xl__w-1-4 pl-8 pr-8 sm__pl-16 sm__pr-16 pb-32 ">
                    <?php snippet('tourcard', ['tour' => $tour]); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</main>

<?php snippet('footer'); ?>
