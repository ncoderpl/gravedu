<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/kamil/Desktop/gravEdu/user/themes/knowledge-base/knowledge-base.yaml',
    'modified' => 1788501497,
    'size' => 1012,
    'data' => [
        'enabled' => true,
        'dropdown' => [
            'enabled' => true
        ],
        'params' => [
            'articles' => [
                'root' => '/home',
                'blacklist' => [
                    0 => 'scratch'
                ],
                'show' => [
                    'date' => true,
                    'authors' => true,
                    'topics' => true,
                    'time' => true
                ]
            ],
            'front' => [
                'maxrows' => 3,
                'maxentries' => 5
            ],
            'sidebar' => [
                'maxentries' => 5,
                'show' => [
                    'categories' => true,
                    'popular' => true,
                    'latest' => true
                ]
            ]
        ]
    ]
];
