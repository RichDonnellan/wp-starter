<header class="bg-primary border-b border-primary-400" role="banner">
    <div class="flex container justify-between items-stretch relative">
        <a class="py-2 self-center" href="<?= esc_url(home_url('/')) ?>" title="Back to <?php bloginfo('name') ?>"><?= render('/lib/partials/logo-tagline.svg'); ?></a>
        <?= render('/lib/components/navigation/nav-mobile.php'); ?>
        <?= render('/lib/components/navigation/nav-primary.php'); ?>
        <?= render('/lib/components/cta/cta-header.php'); ?>
    </div>
</header>
