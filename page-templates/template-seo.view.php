<main role="main" class="flex flex-col">
    <?php include(THEME_DIR . '/lib/components/featured-image/featured-image-seo.php'); ?>
    <div class="flex flex-col md:flex-row container pt-8 pb-10">
        <article role="article" class="content w-full md:w-2/3">
            <h1 class="leading-tight"><?= $title ?></h1>
            <?= $content ?>
        </article>

        <?php get_sidebar(); ?>

    </div>
</main>
