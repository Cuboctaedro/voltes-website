<?php
if($page->parent()->status() == 'closed') {
    go($page->parent()->url());
} else {

snippet('header'); ?>

<main id="main" class="container mx-auto flex flex-row flex-wrap px-16">

<section class="w-full lg:w-2/3 xl:w-3/4 lg:pr-16">
    <div class="shadow-md bg-white mb-48">

        <header class="border-grey-light border-b border-solid p-24">
            <h1 class="text-4xl font-titles font-normal text-green leading-tight">Φόρμα κράτησης - <?= $page->parent()->title() ?></h1>
        </header>

        <form action="<?= $page->url() ?>#bookingform" method="POST" class="p-48" id="bookingform">

            <fieldset class="mb-48">
                <legend class="text-xs uppercase tracking-wide text-grey-darker">Επιλογή ξενάγησης</legend>
                <?php foreach($page->parent()->futureDates() as $tourdate): ?>
                    <label for="<?= $tourdate->slug() ?>" class="block relative w-full h-48 cursor-pointer">
                        <input type="radio" name="tourdate" value="<?= $tourdate->slug() ?>" id="<?= $tourdate->slug() ?>" <?php e($selected_date == $tourdate->slug(), ' checked ', '') ?> class="radioinput">
                        <span class="pr-32 w-full block leading-6 <?= $tourdate->status() ?> radiolabel"><?= $tourdate->format_date() ?> <?php e($tourdate->status() == 'full', '<span class="pl-16 text-red uppercase tracking-wide">Λίστα αναμονής</span>') ?></span>
                    </label>
                    <?php endforeach; ?>
                    <?php if ($bookingform->error('tourdate')): ?>
                        <p class="text-sm text-red-dark"><?= implode('<br>', $bookingform->error('tourdate')) ?></p>
                    <?php endif; ?>
            </fieldset>

            <div class="mb-48">
                <?php snippet('form/inputfield', [
                    'field_name' => 'first_name',
                    'form_name' => $bookingform,
                    'field_label' => 'Όνομα',
                ]);?>
            </div>

            <div class="mb-48">
                <?php snippet('form/inputfield', [
                    'field_name' => 'last_name',
                    'form_name' => $bookingform,
                    'field_label' => 'Επίθετο',
                ]);?>
            </div>

            <div class="mb-48">
                <?php snippet('form/inputfield', [
                    'field_name' => 'address',
                    'form_name' => $bookingform,
                    'field_label' => 'Διεύθυνση',
                ]);?>
            </div>

            <div class="mb-48">
                <?php snippet('form/inputfield', [
                    'field_name' => 'city',
                    'form_name' => $bookingform,
                    'field_label' => 'Πόλη',
                ]);?>
            </div>

            <div class="mb-48">
                <?php snippet('form/inputfield', [
                    'field_name' => 'phone',
                    'form_name' => $bookingform,
                    'field_label' => 'Τηλέφωνο',
                ]);?>
            </div>

            <div class="mb-48">
                <?php snippet('form/inputfield', [
                    'field_name' => 'email',
                    'field_type' => 'email',
                    'form_name' => $bookingform,
                    'field_label' => 'Email',
                ]);?>
            </div>

            <div class="flex flex-row flex-wrap mb-48">

                <div class="w-full sm:w-1/2 sm:pr-16 mb-48 sm:mb-0">
                    <?php snippet('form/inputfield', [
                        'field_name' => 'children_number',
                        'field_type' => 'number',
                        'form_name' => $bookingform,
                        'field_label' => 'Αριθμός παιδιών',
                        'field_options' => ' min="1" max="4" '
                    ]);?>
                </div>

                <div class="w-full sm:w-1/2 sm:pl-16">
                    <?php snippet('form/inputfield', [
                        'field_name' => 'adult_number',
                        'field_type' => 'number',
                        'form_name' => $bookingform,
                        'field_label' => 'Αριθμός ενηλίκων',
                        'field_options' => ' min="1" max="4" '
                    ]);?>
                </div>

            </div>

            <div class="mb-48">
                <?php snippet('form/textarea', [
                    'field_name' => 'children_names',
                    'form_name' => $bookingform,
                    'field_label' => 'Ονόματα και ηλικίες παιδιών',
                    'field_options' => ' rows="5" '
                ]);?>
            </div>

            <div class="mb-48">
                <?php snippet('form/textarea', [
                    'field_name' => 'client_message',
                    'form_name' => $bookingform,
                    'field_label' => 'Παρατηρήσεις / σχόλια',
                    'field_options' => ' rows="5" '
                ]);?>
            </div>

            <?= csrf_field(); ?>
            <?= honeypot_field(); ?>
            <input type="hidden" name="form" value="booking-form">

            <div class="mb-48">
                <input
                    type="submit"
                    value="Υποβολή"
                    class="h-32 leading-4 text-14 uppercase tracking-wide text-white bg-black px-16 cursor-pointer hover:shadow-md hover:bg-grey-darker"
                >
            </div>
        </form>

        <?php if ($bookingform->success()): ?>
            <div class="p-48 text-green-dark">
                <p>Η κράτησή σας υποβλήθηκε και θα ολοκληρωθεί με την εξόφλησή της.</p>
                <p>Για περισσότερες πληροφορίες σχετικά με τους τρόπους πληρωμής αλλά και τις πληροφορίες του ραντεβού μας σας έχουμε στείλει confirmation email.</p>
            </div>
        <?php endif; ?>

    </div>

</section>

<aside class="w-full lg:w-1/3 xl:w-1/4 lg:pl-16">
    <?php if($pages->find('oroi-symmetoxhs')): ?>
        <div class=" mb-24">
            <?php $oroi = $pages->find('oroi-symmetoxhs'); ?>
            <?php snippet('sidebarpage', ['sidebar'=> $oroi]);?>
        </div>
    <?php endif;?>
    <?php if($pages->find('pws-doyleyoyme')): ?>
        <div class="mb-24">
            <?php $doyleyoyme = $pages->find('pws-doyleyoyme'); ?>
            <?php snippet('sidebarpage', ['sidebar'=> $doyleyoyme]);?>
        </div>
    <?php endif;?>
</aside>

</main>

<?php
snippet('footer');
};
?>
