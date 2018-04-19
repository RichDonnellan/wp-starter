<main role="main" class="flex flex-col">
    <?php include(THEME_DIR . '/lib/components/breadcrumb/breadcrumb.php'); ?>
    <?php include(THEME_DIR . '/lib/components/featured-image/featured-image-full.php'); ?>
    <article role="article" class="container py-10">
        <?= $content ?>
    </article>
</main>
