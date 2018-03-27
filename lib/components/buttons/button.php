<?php if (!isset($data)) return; ?>

<button role="button" class="button <?= exists($data->modifier) ?>">
    <a class=" <?= exists($data->modifier) ?>" href="<?= exists($data->href) ?>"><?= exists($data->content) ?></a>
</button>
