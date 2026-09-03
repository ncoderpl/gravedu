<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/base.html.twig */
class __TwigTemplate_d37e176c5f81af63f899db0ba4ee25ec extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'topbar' => [$this, 'block_topbar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'navigation' => [$this, 'block_navigation'],
            'analytics' => [$this, 'block_analytics'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class]->getChecker();
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["theme_config"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, true, 1), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, true, 1), "pages", [], "any", false, false, true, 1), "theme", [], "any", false, false, true, 1), [], "any", false, false, true, 1);
        // line 2
        $context["github_link_position"] = ((array_key_exists("github_link_position", $context)) ? (($context["github_link_position"] ?? null)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "github", [], "any", false, false, true, 2), "position", [], "any", false, false, true, 2)));
        // line 3
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 4
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, true, 4), "getActive", [], "any", false, false, true, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, true, 4), "getActive", [], "any", false, false, true, 4), 4, $this->source), "html", null, true), 4, $this->source)) : ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, true, 4), "site", [], "any", false, false, true, 4), "default_lang", [], "any", false, false, true, 4), 4, $this->source), "html", null, true), 4, $this->source)));
        yield "\">
<head>
";
        // line 6
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 44
        yield "</head>
<body class=\"searchbox-hidden ";
        // line 45
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 45), "body_classes", [], "any", false, false, true, 45), 45, $this->source), "html", null, true), 45, $this->source);
        yield "\" data-url=\"";
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "route", [], "any", false, false, true, 45), 45, $this->source), "html", null, true), 45, $this->source);
        yield "\">
    ";
        // line 46
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 61
        yield "
    ";
        // line 62
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 95
        yield "
    ";
        // line 96
        yield from $this->unwrap()->yieldBlock('analytics', $context, $blocks);
        // line 101
        yield "
    ";
        // line 102
        yield from $this->unwrap()->yieldBlock('bottom', $context, $blocks);
        // line 105
        yield " </body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "title", [], "any", false, false, true, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true), 8, $this->source);
            yield " | ";
        }
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true), 8, $this->source);
        yield "</title>
    ";
        // line 9
        yield from $this->load("partials/metadata.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 11
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["base_url_absolute"] ?? null), 11, $this->source), "html", null, true), 11, $this->source);
        yield "/feed:atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        // line 12
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["base_url_absolute"] ?? null), 12, $this->source), "html", null, true), 12, $this->source);
        yield "/feed:rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/favicon.png"), 13, $this->source), "html", null, true), 13, $this->source);
        yield "\">

    ";
        // line 15
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 28
        yield "
    ";
        // line 29
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 37
        yield "
    ";
        // line 38
        yield from $this->unwrap()->yieldBlock('assets', $context, $blocks);
        // line 42
        yield "
";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "        ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css-compiled/nucleus.css", 102], "method", false, false, true, 16);
        // line 17
        yield "        ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css-compiled/theme.css", 101], "method", false, false, true, 17);
        // line 18
        yield "        ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/custom.css", 100], "method", false, false, true, 18);
        // line 19
        yield "        ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/font-awesome.min.css", 100], "method", false, false, true, 19);
        // line 20
        yield "        ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/featherlight.min.css"], "method", false, false, true, 20);
        // line 21
        yield "
        ";
        // line 22
        if (((($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["browser"] ?? null), "getBrowser", [], "any", false, false, true, 22), 22, $this->source) == "msie") && ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["browser"] ?? null), "getVersion", [], "any", false, false, true, 22), 22, $this->source) >= 8)) && ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["browser"] ?? null), "getVersion", [], "any", false, false, true, 22), 22, $this->source) <= 9))) {
            // line 23
            yield "            ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/nucleus-ie9.css"], "method", false, false, true, 23);
            // line 24
            yield "            ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/pure-0.5.0/grids-min.css"], "method", false, false, true, 24);
            // line 25
            yield "            ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/html5shiv-printshiv.min.js"], "method", false, false, true, 25);
            // line 26
            yield "        ";
        }
        // line 27
        yield "    ";
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "        ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["jquery", 101], "method", false, false, true, 30);
        // line 31
        yield "        ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/modernizr.custom.71422.js", 100], "method", false, false, true, 31);
        // line 32
        yield "        ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/featherlight.min.js"], "method", false, false, true, 32);
        // line 33
        yield "        ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/clipboard.min.js"], "method", false, false, true, 33);
        // line 34
        yield "        ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/jquery.scrollbar.min.js"], "method", false, false, true, 34);
        // line 35
        yield "        ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/learn.js"], "method", false, false, true, 35);
        // line 36
        yield "    ";
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_assets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->deferred->defer($this, 'assets');
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_assets_deferred(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        yield (string) $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, true, 39), 39, $this->source), 39, $this->source);
        yield "
    ";
        // line 40
        yield (string) $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", [], "method", false, false, true, 40), 40, $this->source), 40, $this->source);
        yield "
  ";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "    <nav id=\"sidebar\">
        <div id=\"header-wrapper\">
            <div id=\"header\">
                <a id=\"logo\" href=\"";
        // line 50
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "home_url", [], "any", false, false, true, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "home_url", [], "any", false, false, true, 50), 50, $this->source), "html", null, true), 50, $this->source)) : ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["base_url_absolute"] ?? null), 50, $this->source), "html", null, true), 50, $this->source)));
        yield "\">
                <span class=\"span-logo\">EDU</span>

                ";
        // line 54
        yield "                </a>
                ";
        // line 56
        yield "            </div>
        </div>
        ";
        // line 58
        yield from $this->load("partials/sidebar.html.twig", 58)->unwrap()->yield($context);
        // line 59
        yield "    </nav>
    ";
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            ";
        // line 69
        yield from $this->unwrap()->yieldBlock('topbar', $context, $blocks);
        // line 82
        yield "
            ";
        // line 83
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 84
        yield "
            ";
        // line 85
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 90
        yield "
        </div>
        ";
        // line 92
        yield from $this->unwrap()->yieldBlock('navigation', $context, $blocks);
        // line 93
        yield "    </section>
    ";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_topbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        if ((($this->sandbox->ensureToStringAllowed(($context["github_link_position"] ?? null), 69, $this->source) == "top") || (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, true, 69), "breadcrumbs", [], "any", false, false, true, 69), "enabled", [], "any", false, false, true, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 70
            yield "            <div id=\"top-bar\">
                ";
            // line 76
            yield "
                ";
            // line 77
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, true, 77), "breadcrumbs", [], "any", false, false, true, 77), "enabled", [], "any", false, false, true, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "                ";
                yield from $this->load("partials/breadcrumbs.html.twig", 78)->unwrap()->yield($context);
                // line 79
                yield "                ";
            }
            // line 80
            yield "            </div>
            ";
        }
        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 86
        yield "                ";
        if (($this->sandbox->ensureToStringAllowed(($context["github_link_position"] ?? null), 86, $this->source) == "bottom")) {
            // line 87
            yield "                ";
            yield from $this->load("partials/github_note.html.twig", 87)->unwrap()->yield($context);
            // line 88
            yield "                ";
        }
        // line 89
        yield "            ";
        yield from [];
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_analytics(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 97
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "google_analytics_code", [], "any", false, false, true, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "        ";
            yield from $this->load("partials/analytics.html.twig", 98)->unwrap()->yield($context);
            // line 99
            yield "        ";
        }
        // line 100
        yield "    ";
        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 103
        yield "        ";
        yield (string) $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, true, 103), 103, $this->source), 103, $this->source);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  434 => 103,  427 => 102,  422 => 100,  419 => 99,  416 => 98,  413 => 97,  406 => 96,  396 => 92,  391 => 89,  388 => 88,  385 => 87,  382 => 86,  375 => 85,  365 => 83,  358 => 80,  355 => 79,  352 => 78,  350 => 77,  347 => 76,  344 => 70,  336 => 69,  330 => 93,  328 => 92,  324 => 90,  322 => 85,  319 => 84,  317 => 83,  314 => 82,  312 => 69,  304 => 63,  297 => 62,  291 => 59,  289 => 58,  285 => 56,  282 => 54,  276 => 50,  271 => 47,  264 => 46,  256 => 40,  251 => 39,  234 => 38,  229 => 36,  226 => 35,  223 => 34,  220 => 33,  217 => 32,  214 => 31,  211 => 30,  204 => 29,  199 => 27,  196 => 26,  193 => 25,  190 => 24,  187 => 23,  185 => 22,  182 => 21,  179 => 20,  176 => 19,  173 => 18,  170 => 17,  167 => 16,  160 => 15,  154 => 42,  152 => 38,  149 => 37,  147 => 29,  144 => 28,  142 => 15,  137 => 13,  133 => 12,  129 => 11,  126 => 10,  124 => 9,  116 => 8,  113 => 7,  106 => 6,  98 => 105,  96 => 102,  93 => 101,  91 => 96,  88 => 95,  86 => 62,  83 => 61,  81 => 46,  75 => 45,  72 => 44,  70 => 6,  65 => 4,  62 => 3,  60 => 2,  58 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% set github_link_position = github_link_position is defined ? github_link_position : theme_config.github.position %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include \x27partials/metadata.html.twig\x27 %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"{{ base_url_absolute}}/feed:atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"{{ base_url_absolute}}/feed:rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url(\x27theme://images/favicon.png\x27) }}\">

    {% block stylesheets %}
        {% do assets.addCss(\x27theme://css-compiled/nucleus.css\x27,102) %}
        {% do assets.addCss(\x27theme://css-compiled/theme.css\x27,101) %}
        {% do assets.addCss(\x27theme://css/custom.css\x27,100) %}
        {% do assets.addCss(\x27theme://css/font-awesome.min.css\x27,100) %}
        {% do assets.addCss(\x27theme://css/featherlight.min.css\x27) %}

        {% if browser.getBrowser == \x27msie\x27 and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss(\x27theme://css/nucleus-ie9.css\x27) %}
            {% do assets.addCss(\x27theme://css/pure-0.5.0/grids-min.css\x27) %}
            {% do assets.addJs(\x27theme://js/html5shiv-printshiv.min.js\x27) %}
        {% endif %}
    {% endblock %}

    {% block javascripts %}
        {% do assets.addJs(\x27jquery\x27,101) %}
        {% do assets.addJs(\x27theme://js/modernizr.custom.71422.js\x27,100) %}
        {% do assets.addJs(\x27theme://js/featherlight.min.js\x27) %}
        {% do assets.addJs(\x27theme://js/clipboard.min.js\x27) %}
        {% do assets.addJs(\x27theme://js/jquery.scrollbar.min.js\x27) %}
        {% do assets.addJs(\x27theme://js/learn.js\x27) %}
    {% endblock %}

    {% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
  {% endblock %}

{% endblock head %}
</head>
<body class=\"searchbox-hidden {{ page.header.body_classes }}\" data-url=\"{{ page.route }}\">
    {% block sidebar %}
    <nav id=\"sidebar\">
        <div id=\"header-wrapper\">
            <div id=\"header\">
                <a id=\"logo\" href=\"{{ theme_config.home_url ?: base_url_absolute }}\">
                <span class=\"span-logo\">EDU</span>

                {# {% include \x27partials/logo.html.twig\x27 %} #}
                </a>
                {# {% include \x27partials/search.html.twig\x27 %} #}
            </div>
        </div>
        {% include \x27partials/sidebar.html.twig\x27 %}
    </nav>
    {% endblock %}

    {% block body %}
    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            {% block topbar %}{% if  github_link_position == \x27top\x27 or config.plugins.breadcrumbs.enabled %}
            <div id=\"top-bar\">
                {# {% if  github_link_position == \x27top\x27 %}
                <div id=\"top-github-link\">
                {% include \x27partials/github_link.html.twig\x27 %}
                </div>
                {% endif %} #}

                {% if config.plugins.breadcrumbs.enabled %}
                {% include \x27partials/breadcrumbs.html.twig\x27 %}
                {% endif %}
            </div>
            {% endif %}{% endblock %}

            {% block content %}{% endblock %}

            {% block footer %}
                {% if  github_link_position == \x27bottom\x27 %}
                {% include \x27partials/github_note.html.twig\x27 %}
                {% endif %}
            {% endblock %}

        </div>
        {% block navigation %}{% endblock %}
    </section>
    {% endblock %}

    {% block analytics %}
        {% if theme_config.google_analytics_code %}
        {% include \x27partials/analytics.html.twig\x27 %}
        {% endif %}
    {% endblock %}

    {% block bottom %}
        {{ assets.js(\x27bottom\x27)|raw }}
    {% endblock %}
 </body>
</html>
", "partials/base.html.twig", "D:\\Projekty\\gravEdu\\user\\themes\\learn2\\templates\\partials\\base.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "block" => 6, "if" => 8, "include" => 9, "do" => 16];
        static $filters = ["escape" => 4, "raw" => 39];
        static $functions = ["attribute" => 1, "url" => 13];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "block", 2 => "if", 3 => "include", 4 => "do"],
                [0 => "escape", 1 => "raw"],
                [0 => "attribute", 1 => "url"],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
    private $deferred;
}
