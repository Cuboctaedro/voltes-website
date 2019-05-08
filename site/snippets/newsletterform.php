<form action="<?= $page->url() ?>#newsletterform" method="POST" id="newsletterform">
    <div class="mb-24">
        <?php snippet('form/inputfield', [
            'field_name' => 'newsletter_email',
            'field_type' => 'email',
            'form_name' => $newsletterform,
            'field_label' => 'Email',
        ]);?>
    </div>
    <?= csrf_field(); ?>
    <?= honeypot_field(); ?>
    <input type="hidden" name="form" value="newsletter-form">

    <div class="mb-48">
        <input
            type="submit"
            value="Υποβολή"
            class="button"
        >
    </div>
</form>

<?php if ($newsletterform->success()): ?>
    <div class="p-48 text-green-dark">
        <p>Σας ευχαριστούμε για την εγγραφή σας.</p>
    </div>
<?php endif; ?>
