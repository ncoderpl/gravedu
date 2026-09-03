<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/Projekty/gravEdu/user/config/system.yaml',
    'modified' => 1788463517,
    'size' => 323,
    'data' => [
        'timezone' => NULL,
        'custom_base_url' => NULL,
        'pages' => [
            'theme' => 'learn2',
            'append_url_extension' => NULL,
            'redirect_default_code' => '302'
        ],
        'cache' => [
            'redis' => [
                'socket' => NULL
            ]
        ],
        'errors' => [
            'display' => 1
        ],
        'debugger' => [
            'token' => NULL
        ],
        'images' => [
            'cls' => [
                'retina_scale' => '1'
            ]
        ],
        'gpm' => [
            'verify_peer' => true
        ],
        'updates' => [
            'safe_upgrade' => true,
            'safe_upgrade_snapshot_limit' => 5
        ]
    ]
];
