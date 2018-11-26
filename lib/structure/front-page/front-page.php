<?php
render('/lib/structure/front-page/front-page.view.php', [
    'hero' => (object) [
        'title' => 'We Strive to Illuminate the Serious Toll of Alcoholism.',
        'subtitle' => 'If someone you care about needs help in taking the first step towards recovery, please call our American Addiction Centers helpline. We are open 24/7, 365 days a year.',
    ],
    'stats' => (object) [
        (object) [
            'stat' => '6',
            'content' => 'Six people die every day from alcohol poisoning according to the <a href="https://www.cdc.gov/media/releases/2015/p0106-alcohol-poisoning.html" target="_blank">Centers for Disease Control</a>.',
        ],
        (object) [
            'stat' => '4,700',
            'content' => 'More than 4,700 people die every year as a result of teenage alcohol use.',
        ],
        (object) [
            'stat' => '21%',
            'content' => 'As many as 21 percent of high school students engaged in binge drinking within the past month.',
        ],
    ],
    'mission' => (object) [
        (object) [
            'icon' => 'bullseye',
            'statement' => 'We strive',
            'content' => 'We strive to illuminate the serious toll of alcoholism and problematic drinking on communities &amp; public health.',
        ],
        (object) [
            'icon' => 'goal',
            'statement' => 'We contend',
            'content' => 'We contend misperceptions about what alcoholism looks like &amp; the idea that problematic drinking behaviors are benign.',
        ],
        (object) [
            'icon' => 'swords',
            'statement' => 'We challenge',
            'content' => 'We challenge cultural norms that have desensitized the public to the dangers of problematic drinking and have perpetuated dangerous drinking behaviors.',
        ],
    ],
    'topics' => (object) [
        (object) [
            'title' => 'Understanding Alcoholism',
            'content' => 'Alcoholism is a chronic, lifelong disease. It\'s important to make a distinction between alcohol abuse and full-blown alcoholism.',
            'url' => 'alcoholism',
            'modifier' => 'bg-aqua-haze',
            'image' => (object) [
                'name' => 'understanding-alcoholism.jpg',
                'alt' => '',
                'modifier' => 'md:mr-10',
            ]
        ],
        (object) [
            'title' => 'Alcoholism Treatment',
            'content' => 'When a person receives a diagnosis of alcoholism, the next important step is getting the appropriate alcoholism treatment.',
            'url' => 'treatment',
            'modifier' => '',
            'image' => (object) [
                'name' => 'alcoholism-treatment.jpg',
                'alt' => '',
                'modifier' => 'md:ml-10 md:order-1',
            ]
        ],
        (object) [
            'title' => 'Frequently Asked Questions',
            'content' => 'Find the answers to most of your questions about alcoholism, alcohol abuse, alcoholics, and any other related topics.',
            'url' => 'faq',
            'modifier' => 'bg-aqua-haze',
            'image' => (object) [
                'name' => 'faq.jpg',
                'alt' => '',
                'modifier' => 'md:mr-10',
            ],
        ],
    ],
]);
