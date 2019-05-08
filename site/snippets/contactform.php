<form action="<?= $page->url()?>#contactform" method="POST" id="contactform">

    <div class="mb-24">
        <?php snippet('form/inputfield', [
            'field_name' => 'name',
            'field_type' => 'text',
            'form_name' => $contactform,
            'field_label' => 'Όνομα',
        ]);?>
    </div>

    <div class="mb-24">
        <?php snippet('form/inputfield', [
            'field_name' => 'email',
            'field_type' => 'email',
            'form_name' => $contactform,
            'field_label' => 'Email',
        ]);?>
    </div>

    <div class="mb-24">
        <?php snippet('form/textarea', [
            'field_name' => 'message',
            'form_name' => $contactform,
            'field_label' => 'Μήνυμα',
            'field_options' => ' rows="5" '
        ]);?>
    </div>

    <?= csrf_field(); ?>
    <?= honeypot_field(); ?>
    <input type="hidden" name="form" value="contact-form">

    <div class="mb-48">
        <input
            type="submit"
            value="Υποβολή"
            class="button"
        >
    </div>
</form>

<?php if ($contactform->success()): ?>
    <div class="p-48 text-green-dark">
        <p>Ευχαριστούμε για το μήνυμα σας.</p>
    </div>
<?php endif; ?>
