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

/* partials/metadata.html.twig */
class __TwigTemplate_be8c1da7e0b5240b5c8f97c236d75157 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metadata", [], "any", false, false, true, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 2
            yield "    <meta ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "name", [], "any", false, false, true, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "name=\"";
                yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "name", [], "any", false, false, true, 2), 2, $this->source)), 2, $this->source);
                yield "\" ";
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "http_equiv", [], "any", false, false, true, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "http-equiv=\"";
                yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "http_equiv", [], "any", false, false, true, 2), 2, $this->source)), 2, $this->source);
                yield "\" ";
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "charset", [], "any", false, false, true, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "charset=\"";
                yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "charset", [], "any", false, false, true, 2), 2, $this->source)), 2, $this->source);
                yield "\" ";
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "property", [], "any", false, false, true, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "property=\"";
                yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "property", [], "any", false, false, true, 2), 2, $this->source)), 2, $this->source);
                yield "\" ";
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "content", [], "any", false, false, true, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "content=\"";
                yield (string) $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "content", [], "any", false, false, true, 2), 2, $this->source), 2, $this->source);
                yield "\" ";
            }
            yield "/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['meta'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/metadata.html.twig";
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
        return array (  49 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for meta in page.metadata %}
    <meta {% if meta.name %}name=\"{{ meta.name|e }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv|e }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset|e }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property|e }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content|raw }}\" {% endif %}/>
{% endfor %}
", "partials/metadata.html.twig", "D:\\Projekty\\gravEdu\\system\\templates\\partials\\metadata.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 1, "if" => 2];
        static $filters = ["e" => 2, "raw" => 2];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "for", 1 => "if"],
                [0 => "e", 1 => "raw"],
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
