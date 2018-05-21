<?php if (!isset($data)) return; ?>

<?php foreach ($data as $topic) : ?>
    <section class="py-10 <?= exists($topic->modifier) ?>">
        <div class="container">
            <div class="flex flex-col md:flex-row">
                <img class="mb-5 md:mb-0 <?= exists($topic->image->modifier) ?>" src="<?= imagePath($topic->image->name); ?>" alt="<?= exists($topic->image->alt) ?>">
                <div class="md:self-center">
                    <h2 class="capitalize mb-4 font-bold"><?= exists($topic->title) ?></h2>
                    <p class="mb-4"><?= exists($topic->content) ?></p>
                    <a href="<?= $topic->url ?: '#' ?>">Learn more</a>
                </div>
            </div>
        </div>
    </section>
<?php endforeach ?>
