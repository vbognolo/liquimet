<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin/login-audit.twig */
class __TwigTemplate_0fb9f91f90c9b02f8fa48c2705522261 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "admin/login-audit.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<div class=\"container my-4\">
    <h2 class=\"mb-4\">Audit Log: Tentativi di accesso falliti</h2>

    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-striped align-middle\">
            <thead class=\"table-dark\">
                <tr>
                    <th scope=\"col\">Indirizzo IP</th>
                    <th scope=\"col\">Numero Tentativi</th>
                    <th scope=\"col\">Ultimo Tentativo</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["failures"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["attempt"]) {
            // line 18
            yield "                    <tr>
                        <td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attempt"], "ip", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
                        <td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attempt"], "fail_count", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                        <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["attempt"], "last_fail", [], "any", false, false, false, 21), "d-m-Y H:i:s"), "html", null, true);
            yield "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 23
        if (!$context['_iterated']) {
            // line 24
            yield "                    <tr>
                        <td colspan=\"3\" class=\"text-center\">Nessun tentativo fallito recente.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['attempt'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "            </tbody>
        </table>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/login-audit.twig";
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
        return array (  107 => 28,  98 => 24,  96 => 23,  89 => 21,  85 => 20,  81 => 19,  78 => 18,  73 => 17,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"layout.twig\" %}

{% block content %}
<div class=\"container my-4\">
    <h2 class=\"mb-4\">Audit Log: Tentativi di accesso falliti</h2>

    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-striped align-middle\">
            <thead class=\"table-dark\">
                <tr>
                    <th scope=\"col\">Indirizzo IP</th>
                    <th scope=\"col\">Numero Tentativi</th>
                    <th scope=\"col\">Ultimo Tentativo</th>
                </tr>
            </thead>
            <tbody>
                {% for attempt in failures %}
                    <tr>
                        <td>{{ attempt.ip }}</td>
                        <td>{{ attempt.fail_count }}</td>
                        <td>{{ attempt.last_fail|date('d-m-Y H:i:s') }}</td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"3\" class=\"text-center\">Nessun tentativo fallito recente.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "admin/login-audit.twig", "C:\\wamp64\\www\\liquimet\\templates\\admin\\login-audit.twig");
    }
}
