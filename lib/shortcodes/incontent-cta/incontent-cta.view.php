<div class="<?= $shortcode_name ?> bg-primary-500 px-6 py-5 mb-5 border-4 border-primary md:px-9 md:py-7 lg:flex lg:justify-between">
    <div class="mb-4 text-white mr-5">
        <div class="text-xl md:text-2xl font-bold mb-1"><?= $heading ?></div>
        <div class="text-md md:text-xl"><?= $subheading ?></div>
    </div>
    <div class="items-start flex flex-col lg:items-center">
        <?= render('/lib/components/buttons/button-phone.php', ['phone' => CALLRAIL_PHONE, 'content' => 'Call 1-' . CALLRAIL_PHONE, 'modifier' => 'inline-block mb-4 text-lg']); ?>
        <?= render('/lib/components/compliance/compliance.php', ['content' => 'Who Answers?', 'modifier' => 'text-white text-sm']); ?>
    </div>
</div>
