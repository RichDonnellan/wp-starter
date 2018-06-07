<header class="bg-primary border-b border-primary-400" role="banner">
    <div class="flex container justify-between items-stretch">
        <a class="py-2" href="<?= esc_url(home_url('/')) ?>" title="Back to <?php bloginfo('name') ?>"><?= render('/lib/partials/logo.svg'); ?></a>
    </div>
</header>

<?php
if (!is_front_page() && !is_home()) {
    include(THEME_DIR . '/lib/components/breadcrumb/breadcrumb.php');
}
?>
