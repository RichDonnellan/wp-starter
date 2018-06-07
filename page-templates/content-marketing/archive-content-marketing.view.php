<main role="main" class="flex flex-col">
    <article role="article" class="container py-10">
        <ul class="">
            <?php foreach($articles as $article) {
                $permalink = esc_url(get_permalink($article->ID));
            ?>
            <li class="h3"><a class="block py-6 pl-4" href="<?= $permalink; ?>" title="<?= $article->post_title; ?>">
                <?= exists($article->post_title) ?>
                </a>
            </li>
            <?php } ?>
        </ul>
    </article>
</main>
