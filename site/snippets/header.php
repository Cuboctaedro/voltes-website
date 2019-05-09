<!doctype html>
<html lang="<?= t('isocode'); ?>">
<head>
<title><?= $page->title() ?> | <?= $site->title() ?></title>
    <meta charset="utf-8" />
    <link rel="canonical" href="<?= $page->url() ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php foreach ($kirby->languages() as $lang):?>
        <link rel="alternate" hreflang="<?= t('isocode'); ?>" href="<?= $page->url($lang->code()) ?>" />
    <?php endforeach; ?>

    <link rel="stylesheet" href="https://use.typekit.net/ctb0ycl.css">
    <?= mix('/app.css') ?>
    <?php if($page->isHomePage()) {
        snippet('gallerystyles');
    } ?>
</head>
<body class="ff-sans fs-16 lh-150" style="background-image:url('/assets/images/maze2.png')">
<a href="#main" class="skip-link"><?= t('skiplink') ?></a>

<div id="siteheader" class="relative z-2">
    <div class="fixed z-5 bg-green flex flex-row justify-between w-full shadow-18">
        <?php snippet('menu'); ?>
        <?php snippet('social'); ?>
    </div>
    <?php if($page->isHomePage()): ?>
        <div class="home-gallery z-3">
            <?php $n = 1; ?>
            <?php foreach($page->gallery()->toFiles() as $image): ?>
                <picture class="">
                    <source media="(max-width: 479px)" srcset="<?= $image->gallery_xs() ?>">
                    <source media="(max-width: 639px)" srcset="<?= $image->gallery_sm() ?>">
                    <source media="(max-width: 959px)" srcset="<?= $image->gallery_md() ?>">
                    <source media="(max-width: 1279px)" srcset="<?= $image->gallery_lg() ?>">
                    <source media="(min-width: 1280px)" srcset="<?= $image->gallery_xl() ?>">
                    <img src="<?= $image->gallery_xl() ?>" class="home-gallery__image slide<?= $n ?>" itemprop="image">
                </picture>
                <?php $n = $n + 1; ?>
            <?php endforeach;?>

        </div>
    <?php endif;?>
    <div class="pt-64 pb-32 w-240 sm__w-336 ml-auto mr-auto">
        <a href="<?= $site->url() ?>">
            <?php if($page->isHomePage()): ?>
                <h1 class="hidden"><?= $site->title() ?></h1>
            <?php else: ?>
                <p class="hidden"><?= $site->title() ?></p>
            <?php endif; ?>
            <img src="/assets/images/logo-horizontal.png" class="block max-w-full" />
        </a>
    </div>
</div>
