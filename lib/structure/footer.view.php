<footer role="contentinfo">
    <?= render('/lib/components/cta/footer/cta-footer.php', ['content' => 'Recovery is Worth Fighting For. We’ll Help You.']); ?>
    <div class="bg-primary border-t border-primary-400">
        <div class="flex container justify-center py-4 text-white text-sm">
            <p class="flex flex-col justify-center items-center md:flex-row">
                <span class="">&copy; <?= THEME_NAME ?> <?= date('Y'); ?> All Rights Reserved.</span>

                <?= render('/lib/components/navigation/nav-footer.php'); ?>

                <span class=""><?= THEME_NAME ?> is a property of Sober Media Group.</span>
            </p>
        </div>
    </div>
</footer>
