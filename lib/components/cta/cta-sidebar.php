<div class="cta--sidebar mb-8 hidden invisible md:flex md:visible">
    <div class="flex flex-col container justify-center items-center py-4">
        <div class="text-white text-center">
            <p class="text-xl font-bold mb-2">Ready to Get Clean & Sober?</p>
            <p class="font-bold">Give us a call anytime 24/7</p>
        </div>
        <?= render('/lib/components/buttons/button-phone.php', ['phone' => CALLRAIL_PHONE, 'content' => 'Call ' . CALLRAIL_PHONE, 'modifier' => 'my-5']); ?>
        <?= render('/lib/components/compliance/compliance.php'); ?>
    </div>
</div>
