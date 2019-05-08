<picture>
    <source media="(max-width: 479px)" data-srcset="<?= $file->landscape_sm() ?>">
    <source media="(max-width: 639px)" data-srcset="<?= $file->landscape_md() ?>">
    <source media="(min-width: 640px)" data-srcset="<?= $file->landscape_lg() ?>">
    <img src="<?= $file->landscape_lg() ?>" alt="<?= $alt ?>" class="lazyload block w-full" itemprop="image">
</picture>
