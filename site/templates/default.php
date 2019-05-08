<?php snippet('header'); ?>

<main id="main" class="container mx-auto">

    <?php if($page->hasListedChildren()): ?>
        <section class="mb-64">
            <ul class="list-reset flex flex-wrap items-stretch justify-center px-16">
                <?php foreach ($page->children()->listed() as $child): ?>
                    <li class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-16 pb-32 max-w-464">
                        <?php snippet('pagecard', ['child' => $child]); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    <?php else: ?>
        <article class="shadow-2 max-w-720 bg-white mx-auto mb-64">

            <header class="border-grey-light border-b border-solid p-24">
                <h1 itemprop="name" class="heading-1 text-green"><?= $page->title() ?></h1>
            </header>

            <div class="border-grey-light border-b border-solid">
                <?php foreach($page->contentblocks()->toBuilderBlocks() as $block): ?>
                    <?php snippet('blocks/' . $block->_key(), array('block' => $block)) ?>
                <?php endforeach ?>
            </div>

            <footer class="p-24">
                <?php snippet('share'); ?>
            </footer>

        </article>

    <?php endif; ?>

</main>

<?php snippet('footer'); ?>
