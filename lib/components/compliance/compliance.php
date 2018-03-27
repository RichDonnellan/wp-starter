<?php if (!isset($data)) return; ?>

<div class="flex items-center <?= exists($data->modifier) ?>">
    <span class="inline-block mr-1"><?= render('/lib/components/compliance/icon-info.svg', ['modifier' => 'text-secondary']); ?></span>
    <span><?= exists($data->content) ?></span>
</div>
