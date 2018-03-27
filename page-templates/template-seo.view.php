<div class="primary-content" role="main" class="flex flex-col">
    <div class="flex container py-10 ">
        <article class="md:w-2/3" role="article">
            <?php include(THEME_DIR . '/lib/components/featured-image/featured-image-seo.php'); ?>
            <?= $content ?>
        </article>

        <?php get_sidebar(); ?>

    </div>
</div>
