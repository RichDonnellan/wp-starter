<?php
// The breadcrumbs are managed through the Yoast SEO Premium plugin: ?page=wpseo_titles#top#breadcrumbs
if (function_exists('yoast_breadcrumb')) {
    $common_classes = 'container py-4 text-secondary text-sm';
    if (is_page_template('page-templates/template-seo.php')) {
        yoast_breadcrumb('<span id="breadcrumbs" class="' . $common_classes . '">', '</span>');
    } else {
        yoast_breadcrumb('<span id="breadcrumbs" class="' . $common_classes . ' max-w-fwt">', '</span>');
    }
}
