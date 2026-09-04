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

/* partials/sidebar.html.twig */
class __TwigTemplate_a80343328a9167d9c7f836d705d7d959 extends Template
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
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class]->getChecker();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->skipLazyMacroImports = true;
        // line 25
        yield "
";
        // line 38
        yield "
";
        // line 39
        $macros["macro"] = $this->macros["macro"] = $this->getMacroNamespace();
        // line 40
        yield "
<div class=\"scrollbar-inner\">
    <div class=\"highlightable\">
        ";
        // line 43
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "top_level_version", [], "any", false, false, true, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, true, 44));
            foreach ($context['_seq'] as $context["slug"] => $context["ver"]) {
                // line 45
                yield "                ";
                yield (string) $macros["macro"]->call("version", [$context["ver"]], $context, 45, $this->getSourceContext());
                yield "
                <ul id=\"";
                // line 46
                yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["slug"], 46, $this->source), "html", null, true), 46, $this->source);
                yield "\" class=\"topics\">
                ";
                // line 47
                yield (string) $macros["macro"]->call("loop", [$context["ver"], ""], $context, 47, $this->getSourceContext());
                yield "
                </ul>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['slug'], $context['ver'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 50
            yield "        ";
        } else {
            // line 51
            yield "            <ul class=\"topics\">
                ";
            // line 52
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "root_page", [], "any", false, false, true, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "                    ";
                yield (string) $macros["macro"]->call("loop", [CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find", [$this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "root_page", [], "any", false, false, true, 53), 53, $this->source)], "method", false, false, true, 53), ""], $context, 53, $this->getSourceContext());
                yield "
                ";
            } else {
                // line 55
                yield "            ";
                yield (string) $macros["macro"]->call("loop", [($context["pages"] ?? null), ""], $context, 55, $this->getSourceContext());
                yield "
                ";
            }
            // line 57
            yield "            </ul>
        ";
        }
        // line 59
        yield "        <hr />

        <a class=\"padding\" href=\"#\" data-clear-history-toggle><i
                    class=\"fa fa-fw fa-history\"></i> ";
        // line 62
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_LEARN2_CLEAR_HISTORY"), 62, $this->source), "html", null, true), 62, $this->source);
        yield "</a><br/>

        <section id=\"footer\">
            <p>";
        // line 65
        yield (string) $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_LEARN2_BUILT_WITH_GRAV"), 65, $this->source), 65, $this->source);
        yield "</p>
        </section>
    </div>
</div>
";
        yield from [];
    }

    private ?MacroNamespace $macroNamespace = null;
    private bool $skipLazyMacroImports = false;

    public function getMacroNamespace(): MacroNamespace
    {
        return $this->macroNamespace ??= new MacroNamespace($this, [
            "loop" => new \Twig\TwigMacro("loop", function ($page = null, $parent_loop = null, ...$varargs): string|Markup {
                // line 1
                $macros = $this->macros;
                $context = [
                    "page" => $page,
                    "parent_loop" => $parent_loop,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 2
                    yield "    ";
                    $macros["self"] = $this->getMacroNamespace();
                    // line 3
                    yield "
    ";
                    // line 4
                    if (($this->sandbox->ensureToStringAllowed(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["parent_loop"] ?? null), 4, $this->source)), 4, $this->source) > 0)) {
                        // line 5
                        yield "        ";
                        $context["data_level"] = ($context["parent_loop"] ?? null);
                        // line 6
                        yield "    ";
                    } else {
                        // line 7
                        yield "        ";
                        $context["data_level"] = 0;
                        // line 8
                        yield "    ";
                    }
                    // line 9
                    yield "    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, true, 9), "visible", [], "any", false, false, true, 9));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 10
                        yield "        ";
                        $context["parent_page"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, true, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" parent") : (""));
                        // line 11
                        yield "        ";
                        $context["current_page"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, true, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" active") : (""));
                        // line 12
                        yield "        <li class=\"dd-item";
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["parent_page"] ?? null), 12, $this->source), "html", null, true), 12, $this->source);
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["current_page"] ?? null), 12, $this->source), "html", null, true), 12, $this->source);
                        yield "\" data-nav-id=\"";
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "route", [], "any", false, false, true, 12), 12, $this->source), "html", null, true), 12, $this->source);
                        yield "\">
            <a href=\"";
                        // line 13
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, true, 13), 13, $this->source), "html", null, true), 13, $this->source);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "header", [], "any", false, false, true, 13), "class", [], "any", false, false, true, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "class=\"";
                            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "header", [], "any", false, false, true, 13), "class", [], "any", false, false, true, 13), 13, $this->source), "html", null, true), 13, $this->source);
                            yield "\"";
                        }
                        yield ">
                <i class=\"fa fa-check read-icon\"></i>
                <span><b>";
                        // line 15
                        if (($this->sandbox->ensureToStringAllowed(($context["data_level"] ?? null), 15, $this->source) == 0)) {
                            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 15), 15, $this->source), "html", null, true), 15, $this->source);
                            yield ". ";
                        }
                        yield "</b>";
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, true, 15), 15, $this->source), "html", null, true), 15, $this->source);
                        yield "</span>
            </a>
            ";
                        // line 17
                        if (($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, true, 17), "count", [], "any", false, false, true, 17), 17, $this->source) > 0)) {
                            // line 18
                            yield "            <ul>
                ";
                            // line 19
                            yield (string) $macros["self"]->call("loop", [$context["p"], (((array_key_exists("parent_loop", $context)) ? ($this->sandbox->ensureToStringAllowed(Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["parent_loop"] ?? null), 19, $this->source), 0), 19, $this->source)) : (0)) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 19))], $context, 19, $this->getSourceContext());
                            yield "
            </ul>
            ";
                        }
                        // line 22
                        yield "        </li>
    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["page" => false, "parent_loop" => false], false),
            "version" => new \Twig\TwigMacro("version", function ($p = null, ...$varargs): string|Markup {
                // line 26
                $macros = $this->macros;
                $context = [
                    "p" => $p,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 27
                    yield "    ";
                    $context["parent_page"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "activeChild", [], "any", false, false, true, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" parent") : (""));
                    // line 28
                    yield "    ";
                    $context["current_page"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "active", [], "any", false, false, true, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" active") : (""));
                    // line 29
                    yield "    <h5 class=\"";
                    yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["parent_page"] ?? null), 29, $this->source), "html", null, true), 29, $this->source);
                    yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["current_page"] ?? null), 29, $this->source), "html", null, true), 29, $this->source);
                    yield "\">
        ";
                    // line 30
                    if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "activeChild", [], "any", false, false, true, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "active", [], "any", false, false, true, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 31
                        yield "        <i class=\"fa fa-chevron-down fa-fw\"></i>
        ";
                    } else {
                        // line 33
                        yield "        <i class=\"fa fa-plus fa-fw\"></i>
        ";
                    }
                    // line 35
                    yield "        <a href=\"";
                    yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "url", [], "any", false, false, true, 35), 35, $this->source), "html", null, true), 35, $this->source);
                    yield "\">";
                    yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "menu", [], "any", false, false, true, 35), 35, $this->source), "html", null, true), 35, $this->source);
                    yield "</a>
    </h5>
";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["p" => false], false),
        ], function (): void {
            if ($this->skipLazyMacroImports) {
                return;
            }

            $this->ensureSecurityChecked();
            $context = $this->env->getGlobals();
            $macros = $this->macros;
            // line 39
            $macros["macro"] = $this->macros["macro"] = $this->getMacroNamespace();
        });
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/sidebar.html.twig";
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
        return array (  303 => 39,  284 => 35,  280 => 33,  276 => 31,  274 => 30,  268 => 29,  265 => 28,  262 => 27,  252 => 26,  232 => 22,  226 => 19,  223 => 18,  221 => 17,  211 => 15,  200 => 13,  192 => 12,  189 => 11,  186 => 10,  168 => 9,  165 => 8,  162 => 7,  159 => 6,  156 => 5,  154 => 4,  151 => 3,  148 => 2,  137 => 1,  120 => 65,  114 => 62,  109 => 59,  105 => 57,  99 => 55,  93 => 53,  91 => 52,  88 => 51,  85 => 50,  75 => 47,  71 => 46,  66 => 45,  61 => 44,  59 => 43,  54 => 40,  52 => 39,  49 => 38,  46 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro loop(page, parent_loop) %}
    {% import _self as self %}

    {% if parent_loop|length > 0 %}
        {% set data_level = parent_loop %}
    {% else %}
        {% set data_level = 0 %}
    {% endif %}
    {% for p in page.children.visible %}
        {% set parent_page = p.activeChild ? \x27 parent\x27 : \x27\x27 %}
        {% set current_page = p.active ? \x27 active\x27 : \x27\x27 %}
        <li class=\"dd-item{{ parent_page }}{{ current_page }}\" data-nav-id=\"{{ p.route }}\">
            <a href=\"{{ p.url }}\" {% if p.header.class %}class=\"{{ p.header.class }}\"{% endif %}>
                <i class=\"fa fa-check read-icon\"></i>
                <span><b>{% if data_level == 0 %}{{ loop.index }}. {% endif %}</b>{{ p.menu }}</span>
            </a>
            {% if p.children.count > 0 %}
            <ul>
                {{ self.loop(p, parent_loop|default(0)+loop.index) }}
            </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% macro version(p) %}
    {% set parent_page = p.activeChild ? \x27 parent\x27 : \x27\x27 %}
    {% set current_page = p.active ? \x27 active\x27 : \x27\x27 %}
    <h5 class=\"{{ parent_page }}{{ current_page }}\">
        {% if p.activeChild or p.active %}
        <i class=\"fa fa-chevron-down fa-fw\"></i>
        {% else %}
        <i class=\"fa fa-plus fa-fw\"></i>
        {% endif %}
        <a href=\"{{ p.url }}\">{{ p.menu }}</a>
    </h5>
{% endmacro %}

{% import _self as macro %}

<div class=\"scrollbar-inner\">
    <div class=\"highlightable\">
        {% if theme_config.top_level_version %}
            {% for slug, ver in pages.children %}
                {{ macro.version(ver) }}
                <ul id=\"{{ slug }}\" class=\"topics\">
                {{ macro.loop(ver, \x27\x27) }}
                </ul>
            {% endfor %}
        {% else %}
            <ul class=\"topics\">
                {% if theme_config.root_page %}
                    {{ macro.loop(page.find(theme_config.root_page), \x27\x27) }}
                {% else %}
            {{ macro.loop(pages, \x27\x27) }}
                {% endif %}
            </ul>
        {% endif %}
        <hr />

        <a class=\"padding\" href=\"#\" data-clear-history-toggle><i
                    class=\"fa fa-fw fa-history\"></i> {{ \x27THEME_LEARN2_CLEAR_HISTORY\x27|t }}</a><br/>

        <section id=\"footer\">
            <p>{{ \x27THEME_LEARN2_BUILT_WITH_GRAV\x27|t|raw }}</p>
        </section>
    </div>
</div>
", "partials/sidebar.html.twig", "/home/kamil/Desktop/gravEdu/user/themes/learn2/templates/partials/sidebar.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["macro" => 1, "import" => 39, "if" => 43, "for" => 44, "set" => 5];
        static $filters = ["escape" => 46, "t" => 62, "raw" => 65, "length" => 4, "default" => 19];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "macro", 1 => "import", 2 => "if", 3 => "for", 4 => "set"],
                [0 => "escape", 1 => "t", 2 => "raw", 3 => "length", 4 => "default"],
                [],
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
}
