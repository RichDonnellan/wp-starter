<?php if (!isset($data)) return; ?>

<section class="stats md:flex container -mt-24">
    <?php foreach($data as $stats) : ?>
        <div class="font-serif leading-loose md:mb-0 flex-1 px-7 py-9 bg-white">
            <h2 class="text-primary-400 font-bold h1 leading-none mb-7"><?= $stats->stat ?></h2>
            <p class="font-bold text-sm"><?= $stats->content ?></p>
        </div>
    <?php endforeach; ?>
</section>
