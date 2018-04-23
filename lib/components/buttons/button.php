<?php if (!isset($data)) return; ?>

<button role="button" class="button <?= exists($data->modifier) ?>">
    <?= exists($data->content) ?>
</button>
