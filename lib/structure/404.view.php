<main role="main" class="flex flex-col">
    <article class="container py-10">
        <h1>We're sorry, but that page seems to be missing.</h1>
        <p>You can try our <a href="/">Homepage</a>, or see if any of these links help you find the rehab information you need:</p>
        <ul>
        <?php foreach($randomPages as $page) {
            $permalink = esc_url(get_permalink($page->ID));
        ?>
            <li><a href="<?= $permalink; ?>" title="<?= $page->post_title; ?>">
                <?= $page->post_title; ?></a>
            </li>
        <?php } ?>
        </ul>
    </article>
</main>
