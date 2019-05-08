<label for="<?= $field_name ?>" class="form__label"><?= $field_label ?></label>
<textarea
    name="<?= $field_name ?>"
    class="form__field <?php e($form_name->error($field_name), 'form__field--error') ?>"
    <?php if(isset($field_options)) { echo $field_options ; } else {echo '' ;}; ?>
>
    <?= $form_name->old($field_name); ?>
</textarea>
<?php if ($form_name->error($field_name)): ?>
    <p class="text-sm text-red-dark"><?= implode('<br>', $form_name->error($field_name)) ?></p>
<?php endif; ?>
