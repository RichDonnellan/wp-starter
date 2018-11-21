<div class="cta--footer flex text-center overlay--base">
    <div class="flex flex-col container justify-center items-center">
        <div class="relative text-white h2 <?= exists($data->modifier) ?>">
            <?= exists($data->content) ?>
            <div>Call <?= CALLRAIL_PHONE ?></div>
            <?= render('/lib/components/compliance/compliance.php'); ?>
        </div>
    </div>
</div>
