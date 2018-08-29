<div class="bg-primary py-5">
    <div class="container flex flex-col justify-center items-center md:flex-row">
        <div class="mb-5">
            <?= render('/lib/partials/logo.svg'); ?>
        </div>
        <div class="mb-5">
            <img src="<?= imagePath("aac_horiz_white.png"); ?>" alt="" width="280px">
        </div>
    </div>
    <div class="container text-white text-center">
        <p class="text-xs"><?= THEME_NAME ?> is an <?= CORP_NAME ?> subsidiary. Learn more about what this means <a href="/about/">here</a>.</p>
    </div>
</div>
