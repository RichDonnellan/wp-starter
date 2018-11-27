<div style="background-image: url(<?= $featured_image->image ?>)" class="featured-image--<?= $featured_image->size ?> bg-primary-200 flex flex-col justify-end overlay--base">
    <div class="relative container text-white mb-8 <?= exists($data->modifier) ?>">
        <h1 class="font-bold leading-tight text-shadow--base"><?= $parent_slug_titled ?></h1>
    </div>
</div>

<?php
if (!is_front_page() && !is_home()) {
    include(THEME_DIR . '/lib/components/breadcrumb/breadcrumb.php');
}
?>
