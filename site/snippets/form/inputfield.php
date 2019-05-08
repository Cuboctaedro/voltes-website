<label for="<?= $field_name ?>" class="form__label"><?= $field_label ?></label>
<input
    name="<?= $field_name ?>"
    type="<?php if(isset($field_type)) { echo $field_type ; } else {echo 'text' ;}; ?>"
    value="<?= $form_name->old($field_name); ?>"
    class="form__field form__input <?php e($form_name->error($field_name), 'form__field--error') ?>"
    <?php if(isset($field_options)) { echo $field_options ; } else {echo '' ;}; ?>
>
<?php if ($form_name->error($field_name)): ?>
    <p class="fs-14 c-red-dark"><?= implode('<br>', $form_name->error($field_name)) ?></p>
<?php endif; ?>
