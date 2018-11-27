<?php if ($articles) { ?>
<div class="p-8 mb-6 bg-light-200">
    <h2 class="font-bold mb-5">Further Reading</h2>
    <ul class="list-reset font-serif">
        <?php foreach($articles as $article) {
            $permalink = esc_url(get_permalink($article->ID));
        ?>
            <li class="border-t"><a class="font-bold inline-block py-6 no-underline hover:underline" href="<?= $permalink; ?>" title="<?= $article->post_title; ?>">
                <?= exists($article->alt_title, $article->post_title) ?></a>
            </li>
        <?php } ?>
    </ul>
</div>
<?php } ?>
