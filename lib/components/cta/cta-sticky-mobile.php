<?php if (!isset($data)) return; ?>

<div data-js="cta-sticky-mobile" class="cta--sticky-mobile flex bg-aqua-haze border-t border-light-500 fixed pin-b w-full z-40 md:invisible md:hidden">
    <div class="flex container justify-between items-center py-4">
        <div class="<?= exists($data->modifier) ?>"><?= exists($data->content) ?></div>
        <?= render('/lib/components/compliance/compliance.php'); ?>
        <?= render('/lib/components/buttons/button-phone.php', ['mobile' => 'true', 'phone' => CALLRAIL_PHONE, 'modifier' => 'mx-3 button--mobile']); ?>
    </div>
</div>
