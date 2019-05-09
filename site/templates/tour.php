<?php snippet('header'); ?>

<main id="main" class="xl__container sm__pl-16 sm__pr-16 mb-64">

    <div class="w-full pl-8 pr-8 sm__pl-16 sm__pr-16">

        <article itemprop="mainEntity" itemscope itemtype="http://schema.org/Event" class="card card--raised mb-48 flex flex-row flex-wrap md__items-stretch">

            <div class="w-full md__w-2-3 md__border-right">

                <header class="p-24 border-bottom">
                    <h1 itemprop="name" class="heading-1"><?= $page->title() ?></h1>
                </header>
                <div class="relative border-bottom">
                    <?= snippet('landscapeimage', ['file' => $page->image(), 'alt' => $page->location()]);?>
                    <div class="card__badge card__badge--accent">
                        <span class="pr-8"><?= t('ages') ?>: </span>
                        <span><?= $page->ages() ?></span>
                    </div>
                </div>
                <div class="w-full p-24 border-bottom">
                    <?= $page->description()->kt() ?>
                </div>

            </div>

            <div class="w-full md__w-1-3">
                <div class="">
                    <p class="label visually-hidden"><?= t('dates') ?>: </p>
                    <?php if($page->hasFutureDates()): ?>
                        <?php foreach($page->futureDates() as $tourdate): ?>
                            <?php if($tourdate->status() == 'full'): ?>

                                <div class="pl-16 pr-16 pt-8 pb-8 bg-red-lightest flex flex-row flex-wrap justify-between border-bottom">
                                    <?php if($kirby->user() && $kirby->user()->role() == 'admin'): ?>
                                        <a href="<?= $tourdate->url(); ?>" class="td-none c-black"><div class="mr-16"><?= $tourdate->format_date(); ?> <span class="c-red"> - Πλήρης</span></div></a>
                                    <?php else: ?>
                                        <div class="mr-16"><?= $tourdate->format_date(); ?> <span class="c-green"> - Πλήρης</span></div>
                                    <?php endif; ?>
                                    <a href="<?= $page->url(); ?>/bookingform/date<?= kirby\http\params::separator() . $tourdate->slug() ?>" class="button button--danger"><?= t('waitinglist'); ?></a>
                                </div>

                            <?php elseif($tourdate->status() == 'almost'): ?>

                                <div class="pl-16 pr-16 pt-8 pb-8 bg-yellow-lightest flex flex-row flex-wrap justify-between border-bottom">
                                    <?php if($kirby->user() && $kirby->user()->role() == 'admin'): ?>
                                        <a href="<?= $tourdate->url(); ?>" class="td-none c-black"><div class="mr-16"><?= $tourdate->format_date(); ?> <span class="c-yellow"> - Λίγες θέσεις</span></div></a>
                                    <?php else: ?>
                                        <div class="mr-16"><?= $tourdate->format_date(); ?> <span class="c-yellow"> - Λίγες θέσεις</span></div>
                                    <?php endif; ?>
                                    <a href="<?= $page->url(); ?>/bookingform/date<?= kirby\http\params::separator() . $tourdate->slug() ?>" class="button button--warn"><?= t('booknow'); ?></a>
                                </div>

                            <?php elseif($tourdate->status() == 'open'): ?>

                                <div class="pl-16 pr-16 pt-8 pb-8 bg-green-lightest flex flex-row flex-wrap justify-between border-bottom">
                                    <?php if($kirby->user() && $kirby->user()->role() == 'admin'): ?>
                                        <a href="<?= $tourdate->url(); ?>" class="td-none c-black"><div class="mr-16"><?= $tourdate->format_date(); ?> <span class="c-green"> - Ανοικτή</span></div></a>
                                    <?php else: ?>
                                        <div class="mr-16"><?= $tourdate->format_date(); ?> <span class="c-green"> - Ανοικτή</span></div>
                                    <?php endif; ?>
                                    <a href="<?= $page->url(); ?>/bookingform/date<?= kirby\http\params::separator() . $tourdate->slug() ?>" class="button button--accent"><?= t('booknow'); ?></a>
                                </div>

                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="p-24"><?= t('fullybooked'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="border-bottom p-16">
                    <div class="label"><?= t('price') ?>: </div>
                    <div class="value">
                        <p itemprop="price" content="<?= $page->tourprice() ?>"><?= t('tourprice') ?>: <?= $page->tourprice() ?> <span itemprop="priceCurrency" content="EUR">Ευρώ</span></p>
                        <p><?= t('tickets') ?>: <?= $page->tickets() ?></p>
                    </div>
                </div>
                <div class="border-bottom p-16">
                    <p class="label"><?= t('location') ?>: </p>
                    <p class="" itemprop="location"><?= $page->location() ?></p>
                </div>
                <div class="border-bottom p-16">
                    <p class="label"><?= t('duration') ?>: </p>
                    <p class=""><?= $page->duration() ?></p>
                </div>
            </div>
        </article>
    </div>

    <div class="pl-16 pr-16 mb-24">
        <?php if($pages->find('pws-doyleyoyme')): ?>
            <?php $doyleyoyme = $pages->find('pws-doyleyoyme'); ?>
            <?php snippet('sidebarpage', ['sidebar'=> $doyleyoyme]);?>
        <?php endif;?>
    </div>

</main>

<?php snippet('footer'); ?>
