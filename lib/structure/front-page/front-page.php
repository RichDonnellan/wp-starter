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
            'content' => 'If someone in your family is living with an active alcohol use disorder, you and your family are not alone. <br> <br> The Substance Abuse and Mental Health Services Administration (SAMHSA) 2015 National Survey on Drug Use and Health (NSDUH) found that more than 15 million Americans over the age of 18 were living with an alcohol use disorder and about 623,000 young people between the ages of 12 and 18 were struggling as well.',
            'url' => 'alcoholism',
            'modifier' => 'bg-white',
            'image' => (object) [
                'name' => 'understanding-alcoholism',
                'alt' => '',
                'modifier' => 'lg:mr-10',
            ]
        ],
        (object) [
            'title' => 'Alcoholism Treatment',
            'content' => 'There are thousands of alcoholism treatment centers. Many have programs that provide a high level of care, but there are also many that will take advantage of you and treat you with substandard solutions. <br><br> For this reason, It\'s important to do your research, ask the right questions, and know what to look for.',
            'url' => 'treatment',
            'modifier' => 'bg-light-100',
            'image' => (object) [
                'name' => 'alcoholism-treatment',
                'alt' => '',
                'modifier' => 'lg:ml-10 lg:order-1',
            ]
        ],
    ],
    'faqs' => (object) [
        (object) [
            'question' => 'What is alcohol abuse?',
            'answer' => 'Drinking can cross over into alcohol abuse when a person ends up drinking more or more frequently than they intend to, despite negative consequences to their health, career, or social relationships. Using alcohol as an escape from situations, thoughts, or emotions can also be a sign of problematic drinking, which can make the situation even worse. Alcohol abuse is a self-maintaining cycle of drinking to feel better, feeling worse because of the alcohol, and drinking more to try and cope.',
        ],
        (object) [
            'question' => 'Is there a safe level of drinking?',
            'answer' => 'Many people claim that a glass of wine per day can have positive health effects, but the truth is that the jury is still out. In general, 1 or 2 standard alcoholic drinks per week can be considered "safe," though even this amount is up for debate. Current research has no clear answer on what the possible consequences of having even one drink may be, and scientists are discovering more and more about this potent substance every day.',
        ],
        (object) [
            'question' => 'What is considered intoxicated?',
            'answer' => 'While the same number of drinks can affect everyone differently, there is a clear legal distinction when it comes to alcohol intoxication. A person is officially considered "intoxicated" when their blood alcohol content (BAC) reaches 0.08% or higher. This is the legal threshold for driving as well as the defining limit for what is considered binge drinking, and it can be measured within 30-70 minutes after consuming alcohol.',
        ],
        (object) [
            'question' => 'Does alcohol impact everyone the same way?',
            'answer' => 'Everyone reacts differently to alcohol. The effects of drinking can vary by age, gender, body weight, metabolism, tolerance, psychological health, and many other unique individual factors. Even if two people drink the same amount, they will likely find that they each experience very different subjective effects and will likely face different consequences to their individual health and wellbeing.',
        ],
    ],
]);
