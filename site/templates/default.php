<?php snippet('header'); ?>


<?php if($page->hasListedChildren()): ?>
<main id="main" itemscope itemtype="http://schema.org/ItemList">
    <header class="hidden">
        <h1 itemprop="name"><?= $page->title() ?></h1>
    </header>
    <div>
        <ul class="container sm__pl-16 sm__pr-16 mb-64 mt-64 list-reset flex flex-row flex-wrap items-stretch justify-center">
            <?php foreach ($page->children()->listed() as $child): ?>
                <li class="w-full md__w-1-2 lg__w-1-3 xl__w-1-4 pl-8 pr-8 sm__pl-16 sm__pr-16 pb-32 ">
                    <?php snippet('pagecard', ['child' => $child]); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>
<?php else: ?>
<main id="main" class="md__container sm__pl-16 sm__pr-16 mb-64">
    <div class="w-full pl-8 pr-8 sm__pl-16 sm__pr-16">
        <article class="max-w-672 ml-auto mr-auto card card--raised">

            <header class="border-bottom p-24">
                <h1 itemprop="name" class="heading-1"><?= $page->title() ?></h1>
            </header>

            <div class="border-bottom p-24">
                <?php foreach($page->contentblocks()->toBuilderBlocks() as $block): ?>
                    <?php snippet('blocks/' . $block->_key(), array('block' => $block)) ?>
                <?php endforeach ?>
            </div>

            <footer class="p-24">
                <?php snippet('share'); ?>
            </footer>

        </article>
    </div>
</main>
<?php endif; ?>

<?php snippet('footer'); ?>
