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

/* partials/breadcrumbs.html.twig */
class __TwigTemplate_f91f5f8761def658d3d69e13a1f369b8 extends Template
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
        // line 1
        $context["crumbs"] = CoreExtension::getAttribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "get", [], "method", false, false, true, 1);
        // line 2
        $context["breadcrumbs_config"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, true, 2), "breadcrumbs", [], "any", false, false, true, 2);
        // line 3
        $context["divider"] = CoreExtension::getAttribute($this->env, $this->source, ($context["breadcrumbs_config"] ?? null), "icon_divider_classes", [], "any", false, false, true, 3);
        // line 4
        yield "
";
        // line 5
        if ((($this->sandbox->ensureToStringAllowed(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["crumbs"] ?? null), 5, $this->source)), 5, $this->source) > 1) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["breadcrumbs_config"] ?? null), "show_all", [], "any", false, false, true, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 6
            yield "<div id=\"breadcrumbs\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
    ";
            // line 7
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["breadcrumbs_config"] ?? null), "icon_home", [], "any", false, false, true, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 8
                yield "    <i class=\"";
                yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["breadcrumbs_config"] ?? null), "icon_home", [], "any", false, false, true, 8), 8, $this->source), "html", null, true), 8, $this->source);
                yield "\"></i>
    ";
            }
            // line 10
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["crumbs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 11
                yield "    <span itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
        ";
                // line 12
                if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 13
                    yield "            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "routable", [], "any", false, false, true, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 14
                        yield "                <a itemscope itemtype=\"http://schema.org/Thing\" itemprop=\"item\" href=\"";
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "url", [], "any", false, false, true, 14), 14, $this->source)), 14, $this->source);
                        yield "\" itemid=\"";
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "url", [], "any", false, false, true, 14), 14, $this->source)), 14, $this->source);
                        yield "\">
                    <span itemprop=\"name\">";
                        // line 15
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "menu", [], "any", false, false, true, 15), 15, $this->source)), 15, $this->source);
                        yield "</span>
                </a>
            ";
                    } else {
                        // line 18
                        yield "                <span itemscope itemtype=\"http://schema.org/Thing\" itemprop=\"item\" itemid=\"";
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "url", [], "any", false, false, true, 18), 18, $this->source)), 18, $this->source);
                        yield "\">
                    <span itemprop=\"name\">";
                        // line 19
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "menu", [], "any", false, false, true, 19), 19, $this->source)), 19, $this->source);
                        yield "</span>
                </span>
            ";
                    }
                    // line 22
                    yield "            <i class=\"";
                    yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["divider"] ?? null), 22, $this->source), "html", null, true), 22, $this->source);
                    yield "\"></i>
        ";
                } else {
                    // line 24
                    yield "            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["breadcrumbs_config"] ?? null), "link_trailing", [], "any", false, false, true, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 25
                        yield "                <a itemscope itemtype=\"http://schema.org/Thing\" itemprop=\"item\" href=\"";
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "url", [], "any", false, false, true, 25), 25, $this->source)), 25, $this->source);
                        yield "\" itemid=\"";
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "url", [], "any", false, false, true, 25), 25, $this->source)), 25, $this->source);
                        yield "\">
                    <span itemprop=\"name\">";
                        // line 26
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "menu", [], "any", false, false, true, 26), 26, $this->source)), 26, $this->source);
                        yield "</span>
                </a>
            ";
                    } else {
                        // line 29
                        yield "                <span itemscope itemtype=\"http://schema.org/Thing\" itemprop=\"item\" itemid=\"";
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "url", [], "any", false, false, true, 29), 29, $this->source)), 29, $this->source);
                        yield "\">
                    <span itemprop=\"name\">";
                        // line 30
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["crumb"], "menu", [], "any", false, false, true, 30), 30, $this->source)), 30, $this->source);
                        yield "</span>
                </span>
            ";
                    }
                    // line 33
                    yield "        ";
                }
                // line 34
                yield "        <meta itemprop=\"position\" content=\"";
                yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 34), 34, $this->source), "html", null, true), 34, $this->source);
                yield "\" />
    </span>
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
            unset($context['_seq'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 37
            yield "</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/breadcrumbs.html.twig";
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
        return array (  172 => 37,  153 => 34,  150 => 33,  144 => 30,  139 => 29,  133 => 26,  126 => 25,  123 => 24,  117 => 22,  111 => 19,  106 => 18,  100 => 15,  93 => 14,  90 => 13,  88 => 12,  85 => 11,  67 => 10,  61 => 8,  59 => 7,  56 => 6,  54 => 5,  51 => 4,  49 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set crumbs = breadcrumbs.get() %}
{% set breadcrumbs_config = config.plugins.breadcrumbs %}
{% set divider = breadcrumbs_config.icon_divider_classes %}

{% if crumbs|length > 1 or breadcrumbs_config.show_all %}
<div id=\"breadcrumbs\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
    {% if breadcrumbs_config.icon_home %}
    <i class=\"{{ breadcrumbs_config.icon_home }}\"></i>
    {% endif %}
    {% for crumb in crumbs %}
    <span itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
        {% if not loop.last %}
            {% if crumb.routable %}
                <a itemscope itemtype=\"http://schema.org/Thing\" itemprop=\"item\" href=\"{{ crumb.url|e }}\" itemid=\"{{ crumb.url|e }}\">
                    <span itemprop=\"name\">{{ crumb.menu|e }}</span>
                </a>
            {% else  %}
                <span itemscope itemtype=\"http://schema.org/Thing\" itemprop=\"item\" itemid=\"{{ crumb.url|e }}\">
                    <span itemprop=\"name\">{{ crumb.menu|e }}</span>
                </span>
            {% endif %}
            <i class=\"{{ divider }}\"></i>
        {% else %}
            {% if breadcrumbs_config.link_trailing %}
                <a itemscope itemtype=\"http://schema.org/Thing\" itemprop=\"item\" href=\"{{ crumb.url|e }}\" itemid=\"{{ crumb.url|e }}\">
                    <span itemprop=\"name\">{{ crumb.menu|e }}</span>
                </a>
            {% else %}
                <span itemscope itemtype=\"http://schema.org/Thing\" itemprop=\"item\" itemid=\"{{ crumb.url|e }}\">
                    <span itemprop=\"name\">{{ crumb.menu|e }}</span>
                </span>
            {% endif %}
        {% endif %}
        <meta itemprop=\"position\" content=\"{{ loop.index }}\" />
    </span>
    {% endfor %}
</div>
{% endif %}
", "partials/breadcrumbs.html.twig", "D:\\Projekty\\gravEdu\\user\\plugins\\breadcrumbs\\templates\\partials\\breadcrumbs.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 5, "for" => 10];
        static $filters = ["length" => 5, "escape" => 8, "e" => 14];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if", 2 => "for"],
                [0 => "length", 1 => "escape", 2 => "e"],
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
