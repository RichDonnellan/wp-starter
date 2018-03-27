<?php if (!isset($data)) return; ?>

<!-- <div
	id="modal-helpline-disclaimer"
	class="c-modal  mfp-hide"
>
	<h2 class="c-modal__title">
		<?= $data->title; ?>
	</h2>

	<p class="c-modal__text">
		<?= $data->text; ?>
	</p>
</div> -->
<div class="h-screen w-full flex flex-col items-center justify-center bg-teal-lightest font-sans">
	<div class="h-screen w-full absolute flex items-center justify-center bg-modal">
        <div class="bg-white rounded shadow p-8 m-4 max-w-xs max-h-full text-center overflow-y-scroll">
            <div class="mb-4">
                <h1>Welcome!</h1>
            </div>
            <div class="mb-8">
                <p>Ready to get started? Keep scrolling to see some great components.</p>
            </div>
            <div class="flex justify-center">
                <button class="flex-no-shrink text-white py-2 px-4 rounded bg-teal hover:bg-teal-dark">Let's Go</button>
            </div>
        </div>
    </div>
</div>
