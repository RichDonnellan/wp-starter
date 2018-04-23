<?php if (!isset($data)) return; ?>

<div data-js="footer-margin-offset" class="flex bg-transparent-white-80 border-t border-light-500 fixed pin-b w-full z-50 md:invisible md:hidden">
    <div class="flex container justify-between items-center py-4">
        <div class="<?= exists($data->modifier) ?>"><?= exists($data->content) ?></div>
        <!-- <?= render('/lib/components/compliance/compliance.php', ['content' => 'Who Answers?']); ?> -->
        <?= render('/lib/components/buttons/button-phone.php', ['mobile' => 'true', 'phone' => '888-919-3845', 'modifier' => 'mx-3 button--mobile']); ?>
    </div>
</div>
