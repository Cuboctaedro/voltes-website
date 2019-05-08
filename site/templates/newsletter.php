<?php snippet('header'); ?>

<main id="main" class="container mx-auto px-16">

    <article class="shadow-md max-w-100 bg-white mx-auto mb-48">

        <header class="border-grey-light border-b border-solid p-24">
            <h1 itemprop="name" class="text-4xl font-titles font-normal text-green leading-tight"><?= $page->title() ?></h1>
        </header>

        <div class="border-grey-light border-b border-solid">
            <?php foreach($page->contentblocks()->toBuilderBlocks() as $block): ?>
                <?php snippet('blocks/' . $block->_key(), array('block' => $block)) ?>
            <?php endforeach ?>
        </div>


    </article>

</main>

<?php snippet('footer'); ?>
