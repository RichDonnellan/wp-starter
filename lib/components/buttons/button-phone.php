<?php if (!isset($data)) return; ?>

<button role="button" class="button <?= exists($data->modifier) ?>">
    <?php if (isset($data->mobile)) : ?>
        <span class="inline-block mr-1"> <?= render('/lib/components/buttons/icon-phone.svg', ['modifier' => 'text-white']); ?></span>
    <?php endif ?>
    <a class="" href="tel:<?= exists($data->phone)  ?>"><?= exists($data->phone) ?></a>
</button>
