<?php if (!isset($data)) return; ?>

<?php foreach ($data as $topic) : ?>
    <section class="py-10 <?= exists($topic->modifier) ?>">
        <div class="container">
            <div class="flex flex-col lg:flex-row">
                <div class="mb-6 lg:mb-0 <?= exists($topic->image->modifier) ?>">
                    <img src="<?= imagePath("img-{$topic->image->name}.jpg"); ?>" alt="<?= exists($topic->image->alt) ?>">
                </div>
                <div class="lg:flex-1 lg:self-center">
                    <h2 class="capitalize mb-4 font-bold"><?= exists($topic->title) ?></h2>
                    <p class="font-serif mb-4"><?= exists($topic->content) ?></p>
                    <a href="<?= $topic->url ?: '#' ?>" class="learn-more">Learn more</a>
                </div>
            </div>
        </div>
    </section>
<?php endforeach ?>
