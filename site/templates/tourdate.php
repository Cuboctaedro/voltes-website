
<?php
$tourpage = $page->tour()->toPage();
if(!$kirby->user() || $kirby->user()->role() != 'admin'){
    go($tourpage->url());
} else { ?>

<!DOCTYPE html>
<html lang="el">
    <head>
        <title><?= $tourpage->title() ?> | Κρατήσεις</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>
    </head>
    <body>
        <div class="uk-container">
            <h1 class="uk-text-lead uk-margin-large-top	" ><?= $tourpage->title() ?> | <?= $page->format_date() ?> | <?= $page->time() ?></h1>
            <div class="uk-overflow-auto uk-margin-large-top	">
                <table class="uk-table uk-table-striped">
                    <thead>
                        <tr>
                            <th>Ονομα</th>
                            <th>Πληρωμή</th>
                            <th>Email</th>
                            <th>Τηλ.</th>
                            <th>Αρ. Παιδιών</th>
                            <th>Αρ. Γονιών</th>
                            <th>Ονόματα Παιδιών</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($page->childrenAndDrafts()->filterBy('intendedTemplate', 'booking') as $booking ): ?>
                            <tr class="<?php e($booking->booking_type() == 'booked', ' uk-alert-success ', ' uk-alert-warning '  ) ?>">
                                <td><?= $booking->first_name() ?> <?= $booking->last_name() ?></td>
                                <td><?php e($booking->payment() == true, 'OK'  ) ?></td>
                                <td><?= $booking->email() ?></td>
                                <td><?= $booking->phone() ?></td>
                                <td><?= $booking->children_number() ?></td>
                                <td><?= $booking->adult_number() ?></td>
                                <td><?= $booking->children_names() ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="uk-margin-large-top">
                <a class="uk-button uk-button-primary" href="<?= $page->childrenAndDrafts()->findBy('intendedTemplate', 'csvdownload')->url() ?>">Αρχείο Κρατήσεων</a>
            </div>
        </div>
    </body>
</html>


<?php }; ?>
