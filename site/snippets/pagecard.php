<article class="relative shadow-2 hover:shadow-3 max-w-432 bg-white h-full">
    <div class="flex flex-wrap">
        <div class="w-full">
            <img src="<?= $child->images()->first()->landscape_sm() ?>" alt="<?= $child->title() ?>" class="lazyload block max-w-full" />
        </div>
        <div class="w-full">
            <header class="border-grey-light border-b border-solid p-16">
                <h2 itemprop="name" class="heading-1">
                    <a href="<?= $child->url() ?>" class="card-link text-green hover:text-green no-underline"><?= $child->title() ?></a>
                </h2>
            </header>
            <div class="">
                <div class=" p-16">
                    <?= $child->summary(120) ?>
                </div>
            </div>
        </div>
    </div>
</article>
