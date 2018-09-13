<footer role="contentinfo" data-js="offset-cta-sticky-mobile">
    <?= exists($cta_footer) ?>
    <div class="bg-primary border-t border-primary-400">
        <div class="container flex flex-col justify-center items-center py-4 text-white text-sm md:flex-row">
            <p>&copy; <?= THEME_NAME ?> <?= date('Y'); ?> &bullet; All Rights Reserved.</p>
            <?= render('/lib/components/navigation/nav-footer.php'); ?>
            <p><?= THEME_NAME ?> is operated by Recovery Brands LLC, a subsidiary of American Addiction Centers, Inc.</p>
        </div>
    </div>
</footer>
