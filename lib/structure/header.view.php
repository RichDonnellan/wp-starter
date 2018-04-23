<header class="bg-primary border-b border-primary-400" role="banner">
    <div class="flex container justify-between items-stretch">
        <a class="py-2" href="<?= esc_url(home_url('/')) ?>" title="Back to <?php bloginfo('name') ?>"><?= render('/lib/partials/logo.svg'); ?></a>
        <?= render('/lib/components/navigation/nav-primary.php'); ?>
        <?= render('/lib/components/buttons/hamburger.php'); ?>
    </div>
</header>
