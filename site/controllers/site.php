<?php

return function ($kirby, $pages, $page) {

    include __DIR__.'/../includes/newsletterform.php';

    include __DIR__.'/../includes/contactform.php';

    return compact('newsletterform', 'contactform');
};
