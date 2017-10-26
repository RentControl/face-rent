<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/csteuben/Github/grav-skeleton-boxify-site/user/config/site.yaml',
    'modified' => 1509050227,
    'data' => [
        'title' => 'Rent Control - Reinvent Rent',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Chris de Steuben',
            'email' => 'chris@rentctrl.co'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Rent Control is a peer lending platform for lease deposits.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'header' => [
            'title' => 'Welcome to Rent Control. The first peer lending platform for lease deposits.',
            'buttons' => [
                0 => [
                    'text' => 'For Property Managers',
                    'link' => 'http://rentctrl.co',
                    'class' => 'use-btn animated fadeInUp'
                ],
                1 => [
                    'text' => 'For Renters',
                    'link' => 'http://rentctrl.co',
                    'class' => 'use-btn animated fadeInUp'
                ]
            ]
        ]
    ]
];
