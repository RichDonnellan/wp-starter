<main role="main" class="flex flex-col">
    <div class="flex container py-10 ">
        <article role="article" class="content md:w-2/3">
            <?php include(THEME_DIR . '/lib/components/featured-image/featured-image-seo.php'); ?>
            <?= $content ?>
        </article>

        <?php get_sidebar(); ?>

    </div>
</main>
