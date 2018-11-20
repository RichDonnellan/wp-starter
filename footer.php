<?php

render('/lib/structure/footer-partnership.view.php');

if(!isPostType('content-marketing')) {
    $cta_footer = render('/lib/components/cta/cta-footer.php', ['content' => 'Recovery is Worth Fighting For. We\'ll Help You.']);
}

render('/lib/structure/footer.view.php');

if (!isPosttype('content-marketing')) {

    render('/lib/components/cta/cta-sticky-mobile.php', ['content' => 'Find a Top Alcoholic Rehab Center Today.']);
    render('/lib/components/modal/modal.php', ['id' => 'modal-helpline-disclaimer', 'title' => 'How Our Helpline Works', 'content' => '<p>For those seeking addiction treatment for themselves or a loved one, the Alcohol.org helpline is a private and convenient solution.</p>
    <p><strong>Calls to any general helpline (non-facility specific 1-8XX numbers) for your visit will be answered by American Addiction Centers (AAC).</strong></p>
    <p>We are standing by 24/7 to discuss your treatment options. Our representatives work solely for AAC and will discuss whether an AAC facility may be an option for you.</p>
    <p>Our helpline is offered at no cost to you and with no obligation to enter into treatment. Neither Alcohol.org nor AAC receives any commission or other fee that is dependent upon which treatment provider a visitor may ultimately choose.</p>
    <p>For more information on AAC’s commitment to ethical marketing and treatment practices, or to learn more about how to select a treatment provider, visit our <a href="https://www.alcohol.org/about/">About AAC</a> page.</p>
    <p>If you wish to explore additional treatment options or connect with a specific rehab center, you can visit <a href="https://www.samhsa.gov/treatment/index.aspx" target="blank">SAMHSA.gov</a>.</p>
    ']);
}

render('/lib/partials/foot.php');
