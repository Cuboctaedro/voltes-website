<figure class="pb-32">
    <?= snippet('landscapeimage', ['file' => $block->imagefield()->toFile(), 'alt' => $block->captionfield()]);?>
    <figcaption class="hidden"><?= $block->captionfield() ?></figcaption>
</figure>
