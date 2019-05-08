<?php snippet('header'); ?>

<main id="main" itemscope itemtype="http://schema.org/ItemList" class="container mx-auto mb-64">

    <header class="hidden">
        <h1 itemprop="name"><?= $page->title() ?></h1>
    </header>

    <div>
        <ul class="list-reset flex flex-row flex-wrap items-stretch justify-center px-16">
            <?php foreach ($tours as $tour): ?>
                <li class="w-full md__w-1-2 lg__w-1-3 xl__w-1-4 px-16 pb-32 max-w-464">
                    <?php snippet('tourcard', ['tour' => $tour]); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</main>

<?php snippet('footer'); ?>
