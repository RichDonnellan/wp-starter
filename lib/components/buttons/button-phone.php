<?php if (!isset($data)) return; ?>

<a role="button" class="button <?= exists($data->modifier) ?>" href="tel:<?= exists($data->phone) ?>">
    <?php if (isset($data->mobile)) : ?>
        <span><?= render('/lib/components/buttons/icon-phone.svg', ['modifier' => 'text-white']); ?></span>
    <?php endif ?>
    <?= exists($data->content) ?>
</a>
