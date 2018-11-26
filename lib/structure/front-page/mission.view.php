<?php if (!isset($data)) return; ?>

<section class="flex flex-col py-10">
    <div class="container">
        <h2 class="font-bold capitalize mb-6 text-center">Our mission</h2>
        <p class="mb-10 text-center">Alcohol.org aims to provide tools and resources to draw attention to the pervasiveness of alcoholism and invest in campaigns that catalyze conversations about America’s drinking culture to challenge the status-quo.</p>
        <div class="md:flex md:flex-row">
            <?php foreach($data as $mission) : ?>
                <div class="mission bg-white rounded flex-1 md:mr-2 mb-2 md:mb-0 px-7 py-8">
                    <div class="relative z-5">
                        <div class="flex align-center mb-4">
                            <img class="pr-3" src="<?= imagePath("{$mission->icon}.svg") ?>" alt="<?= ucfirst($mission->icon) ?> icon">
                            <h2 class="text-primary capitalize font-bold my-2"><?= $mission->statement ?></h2>
                        </div>
                        <p class="font-serif font-bold text-sm leading-loose"><?= $mission->content ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
