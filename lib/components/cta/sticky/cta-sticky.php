<div data-js="header-margin-offset" class="hidden invisible md:visible md:flex md:bg-transparent-white-80 md:border-b md:border-light-500 md:fixed md:w-full md:z-50">
    <div class="flex container justify-center items-center py-4">
        <div class="<?= exists($data->modifier) ?>"><?= exists($data->content) ?></div>
        <?= render('/lib/components/buttons/button-phone.php', ['phone' => '888-919-3845', 'content' => '1-888-919-3845', 'modifier' => 'mx-3']); ?>
        <?= render('/lib/components/compliance/compliance.php', ['content' => 'Who Answers?']); ?>
    </div>
</div>
