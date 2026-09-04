<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/home/kamil/Desktop/gravEdu/user/pages/03.SSO/chapter.md',
    'modified' => 1788501497,
    'size' => 218,
    'data' => [
        'header' => [
            'title' => 'SSO'
        ],
        'frontmatter' => 'title: SSO',
        'markdown' => '##Serwerowe Systemy Operacyjne

# Spis treści kursu

Poniżej znajdują się dostępne tematy w tym dziale:

{% for p in page.children %}
{{ loop.index }}. [{{ p.title }}]({{ p.url }})
{% endfor %}'
    ]
];
