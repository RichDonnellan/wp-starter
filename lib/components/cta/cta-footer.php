<div class="cta--footer flex text-center">
    <div class="flex flex-col flex-center container text-white">
        <p class="h2 md:h1 font-bold text-shadow--base cta--has-arrow:dl relative"><?= exists($data->content) ?></p>
        <?= render('/lib/components/buttons/button-phone.php', ['phone' => CALLRAIL_PHONE, 'content' => 'Call '.CALLRAIL_PHONE, 'modifier' => 'md:text-xl my-4']); ?>
        <?= render('/lib/components/compliance/compliance.php'); ?>
    </div>
</div>
