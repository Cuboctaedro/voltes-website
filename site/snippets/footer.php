    <footer class="" id="sitefooter">
        <div class="bg-green-lighter pt-48 pb-48">
            <div class="container pl-16 pr-16 flex flex-row flex-wrap">
                <div class="w-full lg__w-1-2 pl-16 pr-16">
                    <div class="mb-72">
                        <h2 class="heading-3">Γραφτείτε στο Newsletter</h2>
                        <?php snippet('newsletterform', ['newsletterform' => $newsletterform]); ?>
                    </div>
                    <div>
                        <?php $contact = $pages->find('epikoinwnia'); ?>
                        <h2 class="heading-3 p-0 m-0"><?= $contact->title() ?></h2>
                        <?php foreach($contact->contentblocks()->toBuilderBlocks() as $block): ?>
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
                </div>
                <div class="w-full lg__w-1-2 pl-16 pr-16">
                    <h2 class="heading-3">Επικοινωνήστε μαζί μας</h2>
                    <?php snippet('contactform', ['contactform' => $contactform]); ?>
                </div>
            </div>
        </div>
        <?php snippet('footermenu'); ?>
    </footer>
    <?= mix('/app.js') ?>

</body>
</html>
