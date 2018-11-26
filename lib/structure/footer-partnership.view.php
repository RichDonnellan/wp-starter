<div class="container font-serif text-white text-center">
    <div style="background: linear-gradient(270deg, #5e87a9 0%, #4b7596 100%);" class="flex flex-col mx-auto rounded-lg md:rounded m-9 p-6 md:p-9 max-w-xl">
        <div class="flex flex-col flex-center md:flex-row mb-5">
            <div class="mb-5 md:mb-0 md:pr-5 md:border-r md:border-transparent-white-80">
                <?= render('/lib/partials/logo.svg'); ?>
            </div>
            <div class="md:ml-5">
                <?= render('/lib/partials/logo-aac.svg'); ?>
            </div>
        </div>
        <p><?= THEME_NAME ?> is an <?= CORP_NAME ?> subsidiary. Not sure what this means?  <a href="/about/" class="font-bold text-white hover:text-white">Learn more about AAC.</a></p>
    </div>
</div>
