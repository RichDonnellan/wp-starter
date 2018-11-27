<div class="hero">
    <div class="flex flex-col flex-center container text-white text-center max-w-xl">
        <div class="flex flex-col -mt-8 md:-mt-6">
            <h1 class="self-center max-w-md leading-tight md:leading-normal font-bold mb-4 text-shadow--base">
                <?= exists($data->title) ?>
            </h1>
            <p class="max-w-lg font-serif md:leading-loose text-shadow--base">
                <?= exists($data->subtitle) ?>
            </p>
        </div>
        <?= render('/lib/components/buttons/button-phone.php', ['phone' => CALLRAIL_PHONE, 'content' => 'Call '.CALLRAIL_PHONE, 'modifier' => 'md:text-xl my-4']); ?>
        <?= render('/lib/components/compliance/compliance.php'); ?>
    </div>
</div>
