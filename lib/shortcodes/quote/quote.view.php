<blockquote class="<?= $shortcode_name ?> <?= $modifier ?>">

    <div class="<?= $shortcode_name ?>__content <?= $shortcode_name ?>--<?= $sourced ?>">
        <?= $the_content; ?>
    </div>

    <?php if ($source) : ?>
    <div class="<?= $shortcode_name ?>__source">
        — <?= $source ?>
    </div>
    <?php endif; ?>
</blockquote>
