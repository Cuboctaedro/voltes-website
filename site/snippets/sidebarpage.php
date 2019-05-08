<aside>
    <header class="w-full pb-12 border-bottom">
        <h2 class="heading-3 p-0 m-0"><?= $sidebar->title() ?></h2>
    </header>
    <div class="columns">
        <?php foreach($sidebar->contentblocks()->toBuilderBlocks() as $block): ?>
            <?php if($block->_key() == 'text'): ?>
                <div class="pt-8 c-grey-darker fs-14">
                    <?= $block->textfield()->kt(); ?>
                </div>
            <?php elseif($block->_key() == 'heading'): ?>
                <h3 class="heading-4 pt-8 m-0"><?= $block->headingfield() ?></h3>
            <?php elseif ($block->_key() == 'subheading'): ?>
                <h4 class="fw-bold pt-8 m-0"><?= $block->subheadingfield() ?></h4>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</aside>
