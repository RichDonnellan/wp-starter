<?php if (!isset($data)) return; ?>

<button role="button" class="cursor-pointer <?= exists($data->modifier) ?>" tabindex="0" data-micromodal-trigger="modal-helpline-disclaimer">
    <span class="inline-block mr-1"><?= render('/lib/components/compliance/icon-info.svg', ['modifier' => 'text-secondary-100']); ?></span>
    <span><?= exists($data->content) ?></span>
</button>
