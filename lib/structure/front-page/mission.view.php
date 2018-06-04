<?php if (!isset($data)) return; ?>

<section class="flex flex-col py-10 text-center">
    <div class="container">
        <h2 class="font-bold capitalize mb-6">Our mission</h2>
        <p class="mb-9">Alcohol.org aims to provide tools and resources to draw attention to the pervasiveness of alcoholism and invest in campaigns that catalyze conversations about America’s drinking culture to challenge the status-quo.</p>
        <div class="flex flex-col md:flex-row">
            <?php foreach($data as $mission) : ?>
                <div class="mission mb-2 md:mb-0">
                    <div class="relative z-5">
                        <h2 class="italic font-bold my-2"><?= $mission->statement ?></h2>
                        <p><?= $mission->content ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
