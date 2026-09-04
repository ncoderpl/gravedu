<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/kamil/Desktop/gravEdu/user/plugins/api/blueprints/user/account.yaml',
    'modified' => 1788501497,
    'size' => 439,
    'data' => [
        'extends@' => [
            'type' => 'user/account',
            'context' => 'system://blueprints'
        ],
        'form' => [
            'fields' => [
                'api_check' => [
                    'type' => 'conditional',
                    'condition' => 'config.plugins.api.enabled',
                    'fields' => [
                        'api_section' => [
                            'title' => 'API Keys',
                            'type' => 'section',
                            'underline' => true
                        ],
                        'api_keys_display' => [
                            'type' => 'api_keys',
                            'label' => false
                        ]
                    ]
                ]
            ]
        ]
    ]
];
