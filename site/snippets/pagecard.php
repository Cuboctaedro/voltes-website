<article itemprop="itemListElement" itemscope itemtype="http://schema.org/WebPage" class="card card--raised card--linked">
    <div class="w-full">
        <img src="<?= $child->images()->first()->landscape_sm() ?>" alt="<?= $child->title() ?>" class="lazyload block max-w-full" itemprop="image">
    </div>

    <div class="w-full">
        <header class="border-bottom p-16">
            <h2 itemprop="name" class="heading-2">
                <a href="<?= $child->url() ?>" class="card__link"><?= $child->title() ?></a>
            </h2>
        </header>
        <div class="p-16 border-bottom">
            <?= $child->summary(120) ?>
        </div>

    </div>
</article>
