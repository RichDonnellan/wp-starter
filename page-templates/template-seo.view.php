<main role="main" class="flex flex-col">
    <div class="flex flex-col md:flex-row container pb-10">
        <article role="article" class="content w-full md:w-2/3">
            <h1 class="leading-tight"><?= $title ?></h1>
            <?php include(THEME_DIR . '/lib/components/featured-image/featured-image-seo.php'); ?>
            <?= $content ?>
        </article>

        <?php get_sidebar(); ?>

    </div>
</main>
