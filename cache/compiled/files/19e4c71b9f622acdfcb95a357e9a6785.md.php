<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/home/kamil/Desktop/gravEdu/user/pages/02.mysql/chapter.md',
    'modified' => 1788501497,
    'size' => 272,
    'data' => [
        'header' => [
            'title' => 'MySQL',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'folder',
                    'dir' => 'asc'
                ]
            ]
        ],
        'frontmatter' => 'title: MySQL
content:
    items: \'@self.children\'
    order:
        by: folder
        dir: asc',
        'markdown' => '# Spis treści kursu

Poniżej znajdują się dostępne tematy w tym dziale:

{% for p in page.children %}
{{ loop.index }}. [{{ p.title }}]({{ p.url }})
{% endfor %}'
    ]
];
