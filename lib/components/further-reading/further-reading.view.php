<?php if ($articles) { ?>
<h2 class="font-bold mb-5">Further Reading</h2>
    <ul class="list-reset">
        <?php foreach($articles as $article) {
            $permalink = esc_url(get_permalink($article->ID));
        ?>
            <li class="border-t"><a class="block py-6 pl-4 no-underline hover:underline" href="<?= $permalink; ?>" title="<?= $article->post_title; ?>">
                <?= exists($article->alt_title, $article->post_title) ?></a>
            </li>
        <?php } ?>
    </ul>
<?php } ?>
