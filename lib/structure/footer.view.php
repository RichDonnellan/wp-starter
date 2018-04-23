<footer role="contentinfo">
    <?= render('/lib/components/cta/footer/cta-footer.php', ['content' => 'Recovery is Worth Fighting For. We’ll Help You.']); ?>
    <div class="bg-primary border-t border-primary-400">
        <div class="container flex flex-col justify-center items-center py-4 text-white text-sm md:flex-row">
            <p>&copy; <?= THEME_NAME ?> <?= date('Y'); ?> &bullet; All Rights Reserved.</p>
            <?= render('/lib/components/navigation/nav-footer.php'); ?>
            <p><?= THEME_NAME ?> is a property of Sober Media Group.</p>
        </div>
    </div>
</footer>
