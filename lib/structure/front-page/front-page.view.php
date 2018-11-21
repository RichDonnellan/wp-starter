<?php render('/lib/structure/front-page/hero.view.php', $data->hero); ?>

<main id="primary-content" role="main" class="bg-light-100">
    <?php render('/lib/structure/front-page/stats.view.php', $data->stats); ?>
    <?php render('/lib/structure/front-page/mission.view.php', $data->mission); ?>
    <?php render('/lib/structure/front-page/topics.view.php', $data->topics); ?>
</main>
