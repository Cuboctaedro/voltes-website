<?php
    $footermenupages = $site->find('politikh-aporrhtoy', 'oroi-xrhshs-and-cookies', 'copyright');
?>
<nav class="flex flex-row items-stretch h-48 bg-green-darker">
    <ul class="list-reset flex flex-row items-stretch h-48 bg-green-darker" id="footer-menu-list">
        <?php foreach($footermenupages as $item): ?>
            <li class="">
                <a href="<?= $item->url() ?>" class="text-white text-sm uppercase px-16 block leading-6 no-underline tracking-wide font-titles hover:bg-green-dark"><?= $item->title() ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
