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

/* shared/pagination.twig */
class __TwigTemplate_944c85a528fcee4500eb85a73adadfc6 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<tr>
    ";
        // line 3
        if ((($context["total"] ?? null) > ($context["limit"] ?? null))) {
            // line 4
            yield "        <td colspan=\"";
            yield ((($context["show_type"] ?? null)) ? (16) : (15));
            yield "\" class=\"bg-light align-middle my-auto p-1\">
            <nav class=\"my-1 mx-auto\">
                <ul class=\"pagination justify-content-center my-auto\">
                    ";
            // line 8
            yield "                    <li class=\"page-item ";
            if ((($context["page"] ?? null) <= 1)) {
                yield "disabled";
            }
            yield "\">
                        <button class=\"page-link transport-page\" data-page=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["page"] ?? null) - 1), "html", null, true);
            yield "\">
                            &laquo;
                        </button>
                    </li>

                    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["pagination"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 15
                yield "                        <li class=\"page-item ";
                if (($context["i"] == ($context["page"] ?? null))) {
                    yield "active";
                }
                yield "\">
                            <button class=\"page-link transport-page\" data-page=\"";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\">
                                ";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "
                            </button>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "
                    ";
            // line 23
            yield "                    <li class=\"page-item ";
            if ((($context["page"] ?? null) >= ($context["pagination"] ?? null))) {
                yield "disabled";
            }
            yield "\">
                        <button class=\"page-link transport-page\" data-page=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["page"] ?? null) + 1), "html", null, true);
            yield "\">
                            &raquo;
                        </button>
                    </li>
                </ul>
            </nav>
        </td>
    ";
        }
        // line 32
        yield "</tr>
";
        // line 34
        yield "
";
        // line 36
        yield "<tr>
    <td colspan=\"14\" class=\"text-light text-shadow-dark align-middle mb-2 p-2\">
        <h5 class=\"align-middle my-auto\">
            TOTALE <i class=\"bi bi-fuel-pump-fill ms-1\"></i> + <i class=\"bi bi-fuel-pump\"></i>:
                <span> ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
        yield " </span>
        </h5> 
    </td>
</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shared/pagination.twig";
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
        return array (  127 => 40,  121 => 36,  118 => 34,  115 => 32,  104 => 24,  97 => 23,  94 => 21,  84 => 17,  80 => 16,  73 => 15,  69 => 14,  61 => 9,  54 => 8,  47 => 4,  45 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Table Pagination Row #}
<tr>
    {% if total > limit %}
        <td colspan=\"{{ show_type ? 16 : 15 }}\" class=\"bg-light align-middle my-auto p-1\">
            <nav class=\"my-1 mx-auto\">
                <ul class=\"pagination justify-content-center my-auto\">
                    {# Previous Page Link #}
                    <li class=\"page-item {% if page <= 1 %}disabled{% endif %}\">
                        <button class=\"page-link transport-page\" data-page=\"{{ page - 1 }}\">
                            &laquo;
                        </button>
                    </li>

                    {% for i in 1..pagination %}
                        <li class=\"page-item {% if i == page %}active{% endif %}\">
                            <button class=\"page-link transport-page\" data-page=\"{{ i }}\">
                                {{ i }}
                            </button>
                        </li>
                    {% endfor %}

                    {# Next Page Link #}
                    <li class=\"page-item {% if page >= pagination %}disabled{% endif %}\">
                        <button class=\"page-link transport-page\" data-page=\"{{ page + 1 }}\">
                            &raquo;
                        </button>
                    </li>
                </ul>
            </nav>
        </td>
    {% endif %}
</tr>
{# END #}

{# Count Total Row #}
<tr>
    <td colspan=\"14\" class=\"text-light text-shadow-dark align-middle mb-2 p-2\">
        <h5 class=\"align-middle my-auto\">
            TOTALE <i class=\"bi bi-fuel-pump-fill ms-1\"></i> + <i class=\"bi bi-fuel-pump\"></i>:
                <span> {{ total }} </span>
        </h5> 
    </td>
</tr>
{# END #}", "shared/pagination.twig", "C:\\wamp64\\www\\liquimet\\templates\\shared\\pagination.twig");
    }
}
