<?php

return function ($kirby, $pages, $page) {


    include __DIR__.'/../includes/bookingform.php';

    include __DIR__.'/../includes/newsletterform.php';

    include __DIR__.'/../includes/contactform.php';

    if ( param('date') ) {
        $selected_date = urldecode(param('date'));
    } elseif (get('tourdate')) {
        $selected_date = get('tourdate');
    } else {
        $selected_date = false;
    }

    return compact('newsletterform', 'contactform', 'bookingform', 'selected_date');
};
