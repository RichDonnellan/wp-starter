<div class="<?= $shortcode_name ?> bg-primary-500 px-6 py-5 mb-5 border-4 border-primary md:px-9 md:py-7 lg:flex lg:justify-between">
    <div class="text-center mb-4 text-white lg:mr-5 lg:text-left">
        <div class="text-xl md:text-2xl font-bold mb-1"><?= $heading ?></div>
        <div class="text-md md:text-xl"><?= $subheading ?></div>
    </div>
    <div class="items-center flex flex-col">
        <?= render('/lib/components/buttons/button-phone.php', ['phone' => CALLRAIL_PHONE, 'content' => 'Call 1-' . CALLRAIL_PHONE, 'modifier' => 'inline-block mb-4 text-lg']); ?>
        <?= render('/lib/components/compliance/compliance.php'); ?>
    </div>
</div>
