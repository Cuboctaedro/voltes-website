<?php

use Uniform\Form;

$bookingform = new Form([
    'tourdate' => [
        'rules' => ['required'],
        'message' => 'Παρακαλώ επιλέξτε ημερομηνία',
    ],
    'first_name' => [
        'rules' => ['required'],
        'message' => 'Παρακαλώ συμπληρώστε το όνομα σας.',
    ],
    'last_name' => [
        'rules' => ['required'],
        'message' => 'Παρακαλώ συμπληρώστε το επίθετο σας.',
    ],
    'address' => [
        'rules' => ['required'],
        'message' => 'Παρακαλώ συμπληρώστε τη διεύθυνση σας.',
    ],
    'city' => [
        'rules' => ['required'],
        'message' => 'Παρακαλώ συμπληρώστε την πόλη σας.',
    ],
    'phone' => [
        'rules' => ['required'],
        'message' => 'Παρακαλώ συμπληρώστε το τηλέφωνο σας.',
    ],
    'email' => [
        'rules' => ['required', 'email'],
        'message' => 'Παρακαλώ συμπληρώστε το email σας.',
    ],
    'children_number' => [
        'rules' => ['required'],
        'message' => 'Παρακαλώ συμπληρώστε τον αριθμό των παιδιών.',
    ],
    'adult_number' => [
        'rules' => ['required'],
        'message' => 'Παρακαλώ συμπληρώστε τον αριθμό των ενηλίκων.',
    ],
    'children_names' => [
        'rules' => ['required'],
        'message' => 'Παρακαλώ συμπληρώστε τα ονόματα και τις ηλικίες των παιδιών.',
    ],
    'client_message' => []
], 'booking-form');

if ($kirby->request()->is('POST') && get('form') == 'booking-form') {

        $bookingform->honeypotGuard()
        ->saveBookingAction()
        ->mailToClientAction()
        ;

}
