  <div class="modal micromodal-slide" id="<?= exists($data->id) ?>" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="<?= exists($data->id) ?>-title">
        <header class="modal__header">
          <h2 class="modal__title" id="<?= exists($data->id) ?>-title">
            <?= exists($data->title) ?>
          </h2>
          <button class="modal__close" aria-label="Close modal" data-micromodal-close>&times;</button>
        </header>
        <main class="modal__content" id="<?= exists($data->id) ?>-content">
            <?= exists($data->content) ?>
        </main>
      </div>
    </div>
  </div>
