<?php

if(!isPostType('content-marketing')) {
    $cta_footer = render('/lib/components/cta/footer/cta-footer.php', ['content' => 'Recovery is Worth Fighting For. We’ll Help You.']);
}

render('/lib/structure/footer.view.php');

if (!isPosttype('content-marketing')) {

    render('/lib/components/cta/sticky/cta-sticky-mobile.php', ['content' => 'Find a Top Alcoholic Rehab Center Today.']);
    render('/lib/components/modal/modal.php', ['id' => 'modal-helpline-disclaimer', 'title' => 'How Our Helpline Works', 'content' => '<p>For those seeking addiction treatment for themselves or a loved one, the Alcohol.org helpline is a private and convenient solution. Caring advisors are standing by 24/7 to discuss your treatment options.</p>
    <p>Calls to any general helpline (non-facility specific 1-8XX numbers) for your visit will be answered by American Addiction Centers (AAC).</p>']);
}

render('/lib/partials/foot.php');
