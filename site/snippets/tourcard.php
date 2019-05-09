<article itemprop="itemListElement" itemscope itemtype="http://schema.org/Event" class="card card--raised card--linked">
    <div class="w-full">
        <img src="<?= $tour->image()->landscape_sm() ?>" alt="<?= $tour->location() ?>" class="lazyload block max-w-full" itemprop="image">
    </div>
    <div class="w-full">
        <header class="border-bottom p-16">
            <h2 itemprop="name" class="heading-2">
                <a href="<?= $tour->url() ?>" class="card__link"><?= $tour->title() ?></a>
            </h2>
            <p><span class="visually-hidden"><?= t('location') ?>: </span><?= $tour->location() ?></p>
        </header>
        <div class="card__badge card__badge--accent">
            <span class="pr-8"><?= t('ages') ?>: </span>
            <span><?= $tour->ages() ?></span>
        </div>
        <div class="p-16 border-bottom">
            <?= $tour->description()->excerpt(75) ?>
        </div>
        <?php if($tour->hasFutureDates()): ?>
            <?php foreach($tour->futureDates() as $tourdate): ?>
                <?php if($tourdate->status() == 'full'): ?>
                    <div class="pl-16 pr-16 pt-8 pb-8 bg-red-lightest flex flex-row flex-wrap justify-between border-bottom">
                        <?= $tourdate->format_date(); ?>
                    </div>
                <?php elseif($tourdate->status() == 'almost'): ?>
                    <div class="pl-16 pr-16 pt-8 pb-8 bg-yellow-lightest flex flex-row flex-wrap justify-between border-bottom">
                        <?= $tourdate->format_date(); ?>
                    </div>
                <?php elseif($tourdate->status() == 'open'): ?>
                    <div class="pl-16 pr-16 pt-8 pb-8 bg-green-lightest flex flex-row flex-wrap justify-between border-bottom">
                        <?= $tourdate->format_date(); ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</article>
