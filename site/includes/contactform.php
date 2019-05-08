<?php

use Uniform\Form;

$contactform = new Form([
    'name' => [
        'rules' => ['required'],
        'message' => 'Παρακαλώ συμπληρώστε το όνομα σας.',
    ],
    'email' => [
        'rules' => ['required', 'email'],
        'message' => 'Παρακαλώ συμπληρώστε το email σας.',
    ],
    'message' => []
], 'contact-form');

if ($kirby->request()->is('POST') && get('form') == 'contact-form') {

    $contactform->honeypotGuard()
    ->mailContactAction()
    ;

}
