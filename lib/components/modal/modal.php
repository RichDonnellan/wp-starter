  <div class="modal micromodal-slide" id="<?= $data->id ?>" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="<?= $data->id ?>-title">
        <header class="modal__header">
          <h2 class="modal__title" id="<?= $data->id ?>-title">
            <?= $data->title ?>
          </h2>
          <button class="modal__close" aria-label="Close modal" data-micromodal-close>&times;</button>
        </header>
        <main class="modal__content" id="<?= $data->id ?>-content">
            <?= $data->content ?>
        </main>
      </div>
    </div>
  </div>
