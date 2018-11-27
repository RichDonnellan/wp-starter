
<section class="bg-white pt-5 pb-10">
    <?php render('/lib/structure/footer-partnership.view.php') ?>

    <div class="container">

        <h2 class="capitalize mb-4 font-bold text-center">Frequently Asked Questions</h2>
        <p class="text-center mb-10">Find the answers to most of your questions about alcoholism, alcohol abuse, alcoholics, and any other related topics.</p>

        <dl>
            <?php foreach ($data as $faqs) : ?>
                <dt class="text-primary text-xl font-bold capitalize mb-7" data-js="faq-question">Q. <?= exists($faqs->question); ?></dt>
                <dd class="leading-loose font-serif mb-8" data-js="faq-answer">
                    <p class="pb-5 border-b"><?= exists($faqs->answer); ?></p>
                </dd>
            <?php endforeach; ?>
        </dl>
        <p class="flex justify-center"><a href="/faq/" class="learn-more">More FAQs</a></p>
    </div>
</section>


