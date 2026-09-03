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

/* docs.html.twig */
class __TwigTemplate_d3f0412b4aaadc821f79ace5f79f6293 extends Template
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

        $this->blocks = [
            'navigation' => [$this, 'block_navigation'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class]->getChecker();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["tags"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "taxonomy", [], "any", false, false, true, 2), "tag", [], "any", false, false, true, 2);
        // line 3
        if ((($tmp = ($context["tags"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            $context["progress"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "collection", [["items" => ["@taxonomy" => ["category" => "docs", "tag" => $this->sandbox->ensureToStringAllowed(($context["tags"] ?? null), 4, $this->source)]], "order" => ["by" => "default", "dir" => "asc"]]], "method", false, false, true, 4);
        } else {
            // line 6
            $context["progress"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "collection", [["items" => ["@taxonomy" => ["category" => "docs"]], "order" => ["by" => "default", "dir" => "asc"]]], "method", false, false, true, 6);
        }
        // line 1
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "\t<div id=\"navigation\">
\t";
        // line 11
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["progress"] ?? null), "isFirst", [$this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "path", [], "any", false, false, true, 11), 11, $this->source)], "method", false, false, true, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "\t    <a class=\"nav nav-prev\" href=\"";
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["progress"] ?? null), "nextSibling", [$this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "path", [], "any", false, false, true, 12), 12, $this->source)], "method", false, false, true, 12), "url", [], "any", false, false, true, 12), 12, $this->source), "html", null, true), 12, $this->source);
            yield "\"> <i class=\"fa fa-chevron-left\"></i></a>
\t";
        }
        // line 14
        yield "
\t";
        // line 15
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["progress"] ?? null), "isLast", [$this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "path", [], "any", false, false, true, 15), 15, $this->source)], "method", false, false, true, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "\t    <a class=\"nav nav-next\" href=\"";
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["progress"] ?? null), "prevSibling", [$this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "path", [], "any", false, false, true, 16), 16, $this->source)], "method", false, false, true, 16), "url", [], "any", false, false, true, 16), 16, $this->source), "html", null, true), 16, $this->source);
            yield "\"><i class=\"fa fa-chevron-right\"></i></a>
\t";
        }
        // line 18
        yield "\t</div>
";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "    ";
        yield from $this->load("partials/page.html.twig", 22)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "docs.html.twig";
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
        return array (  108 => 22,  101 => 21,  95 => 18,  89 => 16,  87 => 15,  84 => 14,  78 => 12,  76 => 11,  73 => 10,  66 => 9,  61 => 1,  58 => 6,  55 => 4,  53 => 3,  51 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% set tags = page.taxonomy.tag %}
{% if tags %}
    {% set progress = page.collection({\x27items\x27:{\x27@taxonomy\x27:{\x27category\x27: \x27docs\x27, \x27tag\x27: tags}},\x27order\x27: {\x27by\x27: \x27default\x27, \x27dir\x27: \x27asc\x27}}) %}
{% else %}
    {% set progress = page.collection({\x27items\x27:{\x27@taxonomy\x27:{\x27category\x27: \x27docs\x27}},\x27order\x27: {\x27by\x27: \x27default\x27, \x27dir\x27: \x27asc\x27}}) %}
{% endif %}

{% block navigation %}
\t<div id=\"navigation\">
\t{% if not progress.isFirst(page.path) %}
\t    <a class=\"nav nav-prev\" href=\"{{ progress.nextSibling(page.path).url }}\"> <i class=\"fa fa-chevron-left\"></i></a>
\t{% endif %}

\t{% if not progress.isLast(page.path) %}
\t    <a class=\"nav nav-next\" href=\"{{ progress.prevSibling(page.path).url }}\"><i class=\"fa fa-chevron-right\"></i></a>
\t{% endif %}
\t</div>
{% endblock %}

{% block content %}
    {% include \x27partials/page.html.twig\x27 %}
{% endblock %}
", "docs.html.twig", "D:\\Projekty\\gravEdu\\user\\themes\\learn2\\templates\\docs.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1, "set" => 2, "if" => 3, "include" => 22];
        static $filters = ["escape" => 12];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "extends", 1 => "set", 2 => "if", 3 => "include"],
                [0 => "escape"],
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
