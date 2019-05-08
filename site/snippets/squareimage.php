<picture>
    <source media="(max-width: 639px)" data-srcset="<?= $file->square_md() ?>">
    <source media="(max-width: 959px)" data-srcset="<?= $file->square_sm() ?>">
    <source media="(max-width: 1279px)" data-srcset="<?= $file->square_md() ?>">
    <source media="(min-width: 1280px)" data-srcset="<?= $file->square_sm() ?>">
    <img data-srcset="<?= $file->square_md() ?>" alt="<?= $alt ?>" class="lazyload block max-w-full" itemprop="image">
</picture>
