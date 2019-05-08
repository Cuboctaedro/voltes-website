
<?php
$tourpage = $page->tour()->toPage();
if(!$kirby->user() || $kirby->user()->role() != 'admin'){
    go($tourpage->url());
} else {

    // output headers so that the file is downloaded rather than displayed
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');

    // create a file pointer connected to the output stream
    $output = fopen('php://output', 'w');

    // output the column headings
    fputcsv($output, array('Status', 'Όνομα', 'Επίθετο', 'Διεύθυνση', 'Πόλη', 'Τηλ', 'email', 'Αρ. Παιδιών', 'Αρ. Ενηλίκων', 'Ονόματα Παιδιών', 'Μήνυμα', 'Ολοκλήρωση πληρωμής', 'Ωρα κράτησης','Σημειώσεις'));

    // loop over the rows, outputting them
    foreach ($page->childrenAndDrafts()->filterBy('intendedTemplate', 'booking') as $booking ) {
        if($booking->payment() == true) {
            $payment = 'NAI';
        } else {
            $payment = 'OXI';
        }
        $row = array(
            trim(preg_replace('/\s+/', ' ', str::replace($booking->booking_type()->value(), ',', ';'))),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->first_name()->value(), ',', ';'))),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->last_name()->value(), ',', ';'))),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->address()->value(), ',', ';'))),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->city()->value(), ',', ';'))),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->phone()->value(), ',', ';'))),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->email()->value(), ',', ';'))),
            str::replace($booking->children_number()->value(), ',', ';'),
            str::replace($booking->adult_number()->value(), ',', ';'),
            str::replace($booking->children_names()->value(), ',', ';'),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->client_message()->value(), ',', ';'))),
            $payment,
            str::replace($booking->time()->value(), ',', ';'),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->notes()->value(), ',', ';')))
        );
        fputcsv($output, $row);
    }


 }; ?>
