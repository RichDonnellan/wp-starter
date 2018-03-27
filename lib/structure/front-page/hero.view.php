<div class="hero overlay--tinted">
    <div class="flex flex-col flex-center container relative z-5 text-white text-center">
        <h1 class="<?= exists($data->modifier) ?>">
            <?= exists($data->title) ?>
        </h1>
        <p class="<?= exists($data->modifier) ?>">
            <?= exists($data->subtitle) ?>
        </p>
        <?= render('/lib/components/buttons/button-phone.php', ['phone' => 'Call 1-888-919-3845', 'modifier' => 'button--large mt-4']); ?>
    </div>
</div>
