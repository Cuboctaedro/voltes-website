<?php

return function ($kirby, $pages, $page) {

    $tours = $pages->find('tours')->children()->listed();

    include __DIR__.'/../includes/newsletterform.php';

    include __DIR__.'/../includes/contactform.php';

    return compact('newsletterform', 'contactform', 'tours');
};
