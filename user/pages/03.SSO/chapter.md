---
title: SSO

content:
    items: '@self.children'
    order:
        by: folder
        dir: asc
private: true
---

##Serwerowe Systemy Operacyjne

# Spis treści kursu

Poniżej znajdują się dostępne tematy w tym dziale:

{% for p in page.children %}
{{ loop.index }}. [{{ p.title }}]({{ p.url }})
{% endfor %}