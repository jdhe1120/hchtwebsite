<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/mnt/tank/home/groups/hcht/web/user/config/site.yaml',
    'modified' => 1498037579,
    'data' => [
        'title' => 'Harvard College Healing Thoughts',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Jeffrey He',
            'email' => 'jhe1120@gmail.com',
            'copyright' => 'Copyright 2017 HCHT. All Rights Reserved.'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'featured'
        ],
        'metadata' => [
            'description' => 'A student run organization dedicated to building a community of student learners devoted to raising awareness about global mental health issues.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'routes' => [
            '/something/else' => '/blog/sample-3',
            '/another/one/here' => '/blog/sample-3',
            '/new/*' => '/blog/*'
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'logo' => 'logo.png',
        'header' => [
            'title' => 'Healing Thoughts',
            'description' => 'Harvard College Healing Thoughts: A Global Mental Health Initiative (HCHT) is a student run organization dedicated to building a community of student learners devoted to raising awareness about global mental health issues.',
            'background' => 'background.jpg',
            'buttons' => [
                0 => [
                    'text' => 'Learn More',
                    'url' => 'about',
                    'class' => 'button radius'
                ]
            ]
        ],
        'social' => [
            0 => [
                'url' => 'https://www.facebook.com/harvardcollegehealingthoughts/',
                'icon' => 'facebook'
            ],
            1 => [
                'url' => 'mailto:harvardhealingthoughts@gmail.com',
                'icon' => 'envelope'
            ],
            2 => [
                'url' => 'www.hcs.harvard.edu/~hcht/',
                'icon' => 'info-circle'
            ]
        ],
        'footer' => [
            'widget' => [
                'title' => 'Harvard College Healing Thoughts',
                'description' => 'A student run organization dedicated to building a community of student learners devoted to raising awareness about global mental health issues.',
                'link' => NULL
            ]
        ],
        'copyright' => '© 2017 Healing Thoughts. All Rights Reserved. By <a href="http://rescuethemes.com/">Rescue Themes</a> and <a href="http://www.getgrav.org">Grav</a>.'
    ]
];
