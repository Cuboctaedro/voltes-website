<article itemprop="itemListElement" itemscope itemtype="http://schema.org/Event" class="card card--raised card--linked">
    <div class="w-full">
        <img src="<?= $tour->image()->landscape_sm() ?>" alt="<?= $tour->location() ?>" class="lazyload block max-w-full" itemprop="image">
        <?php if ($tour->status() == 'almost'): ?>
            <div class=""><?= t('almost') ?></div>
        <?php elseif ($tour->status() == 'full'): ?>
            <div class=""><?= t('full') ?></div>
        <?php elseif ($tour->status() == 'closed'): ?>
            <div class=""><?= t('full') ?></div>
        <?php endif ; ?>
    </div>
    <div class="w-full">
        <header class=" p-16">
            <h2 itemprop="name" class="heading-2">
                <a href="<?= $tour->url() ?>" class="card-link text-green hover:text-green no-underline"><?= $tour->title() ?></a>
            </h2>
        </header>
        <div class="border-grey-light border-t p-16">
            <p class="label inline-block pr-8"><?= t('location') ?>: </p>
            <p class="inline-block" itemprop="location"><?= $tour->location() ?></p>
        </div>
        <div class="border-grey-light border-t p-16">
            <p class="label inline-block pr-8"><?= t('ages') ?>: </p>
            <p class="inline-block"><?= $tour->ages() ?></p>
        </div>
        <?php if($tour->hasFutureDates()): ?>
        <div class="border-grey-light border-t p-16">
            <p class="label inline-block pr-8"><?= t('dates') ?>: </p>
            <?php foreach($tour->futureDates() as $tourdate): ?>
                <p class="inline-block tagitem"><?= $tourdate->short_date(); ?></p>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</article>
