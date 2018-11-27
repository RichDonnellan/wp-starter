<div class="hidden invisible lg:visible lg:block">
    <div class="flex flex-col justify-center items-center py-4">
        <?= render('/lib/components/buttons/button-phone.php', ['phone' => CALLRAIL_PHONE, 'content' => 'Call ' . CALLRAIL_PHONE, 'modifier' => 'mb-3']); ?>
        <?= render('/lib/components/compliance/compliance.php'); ?>
    </div>
    <div style="right:1rem;bottom:-3rem;" class="font-handwritten text-white text-xl absolute z-5 cta--has-arrow:ul">Call American Addiction Centers to find help with alcoholic rehab.</div>
</div>
