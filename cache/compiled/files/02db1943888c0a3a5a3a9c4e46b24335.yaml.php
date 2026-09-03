<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://prism-highlight/prism-highlight.yaml',
    'modified' => 1788438841,
    'size' => 337,
    'data' => [
        'enabled' => true,
        'theme' => 'prism-one-light.css',
        'all-pre-blocks' => true,
        'custom' => [
            'js_location' => 'user://data/prism-highlight/prism.js',
            'css_location' => 'user://data/prism-highlight/prism.css',
            'theme_location' => 'user://data/prism-highlight/custom-theme.css'
        ],
        'plugins' => [
            'line-numbers' => false,
            'command-line' => false,
            'command-line-prompt' => '$'
        ]
    ]
];
