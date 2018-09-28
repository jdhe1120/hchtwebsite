<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/mnt/tank/home/groups/hcht/web/user/config/site.yaml',
    'modified' => 1538156972,
    'data' => [
        'title' => 'Students in Mental Health Research',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Jeffrey He',
            'email' => 'jhe1120@gmail.com',
            'copyright' => 'Copyright 2018 SMHR. All Rights Reserved.'
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
            'title' => 'Students in Mental Health Research',
            'description' => 'Students in Mental Health Research: A Global Mental Health Initiative (SMHR) is a student run organization dedicated to building a community of student learners devoted to raising awareness about global mental health issues.',
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
                'url' => 'https://www.facebook.com/harvardcollegementalhealthresearchgroup/',
                'icon' => 'facebook'
            ],
            1 => [
                'url' => 'mailto:harvardmentalhealthresearch@gmail.com',
                'icon' => 'envelope'
            ],
            2 => [
                'url' => 'www.hcs.harvard.edu/~simhr/',
                'icon' => 'info-circle'
            ]
        ],
        'footer' => [
            'widget' => [
                'title' => 'Students in Mental Health Research',
                'description' => 'A student run organization dedicated to building a community of student learners devoted to raising awareness about global mental health issues.',
                'link' => NULL
            ]
        ],
        'copyright' => '© 2018 Students in Mental Health Research. All Rights Reserved. By <a href="http://rescuethemes.com/">Rescue Themes</a> and <a href="http://www.getgrav.org">Grav</a>.'
    ]
];
