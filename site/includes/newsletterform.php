<?php

use Uniform\Form;

$newsletterform = new Form([
    'newsletter_email' => [
        'rules' => ['required', 'email'],
        'message' => 'Παρακαλώ συμπληρώστε το email σας.',
    ],
], 'newsletter-form');

if ($kirby->request()->is('POST') && get('form') == 'newsletter-form') {

    $newsletterform->honeypotGuard();

}
