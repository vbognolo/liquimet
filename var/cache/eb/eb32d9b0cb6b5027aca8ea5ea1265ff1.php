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

/* partials.twig */
class __TwigTemplate_c92867b5082a36e01e36e84b228d15ea extends Template
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
        yield "<td colspan=\"16\" class=\"border-0\">
    <h4 class=\"mx-auto my-3 text-center\"> 
        <span class=\"btn my-auto collapse-title edit-data updateQty\" style=\"cursor: default\">
            Scarichi parziali:
        </span>
    </h4>

    <table class=\"table table-bordered table-light mb-1\" id=\"part-table-";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "id_transport", [], "any", false, false, false, 9), "html", null, true);
        yield "\">
        <thead>
            <tr class=\"border-top border-light bg-primary bg-gradient table-title\">
                <th scope=\"col\" class=\"align-middle px-3 small-col\"> # </th>
                <th scope=\"col\" class=\"align-middle px-2\"> Destinazione </th>
                <th scope=\"col\" class=\"align-middle px-2\"> EXW </th>
                <th scope=\"col\" class=\"align-middle px-2\"> Data </th>
                <th scope=\"col\" class=\"align-middle px-2\"> Luogo </th>
                <th scope=\"col\" class=\"align-middle px-2\"> Quantità scaricata </th>
                <th scope=\"col\" class=\"align-middle px-2\"> Fattura </th>
                <th scope=\"col\" class=\"align-middle px-2 small-col\"> <i class=\"bi bi-gear\"></i> </th>
            </tr>
        </thead>
                                                     
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["partials"] ?? null));
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
            // line 25
            yield "            <tr class=\"bg-light bg-gradient\">
                <td scope=\"row\" class=\"align-middle p-1\"> 
                    ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 27), "html", null, true);
            yield "
                </td>         
                <td class=\"align-middle p-1 col-destination\" id=\"dest\"> ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "destination", [], "any", false, false, false, 29)), "html", null, true);
            yield " </td>                                   
                <td class=\"align-middle p-1 col-exw\" id=\"exw\"> ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "exw", [], "any", false, false, false, 30)), "html", null, true);
            yield " </td>  
                <td class=\"align-middle p-1 col-date\" id=\"date\"> ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "date", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
            yield " </td>                   
                <td class=\"align-middle p-1 col-place\" id=\"place\"> ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "place", [], "any", false, false, false, 32)), "html", null, true);
            yield " </td>
                <td class=\"align-middle p-1 col-q-unloaded\" id=\"qty\"> ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "q_unloaded", [], "any", false, false, false, 33), "html", null, true);
            yield " </td>
                <td class=\"align-middle p-1 col-invoice\" id=\"invoice\"> ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "invoice", [], "any", false, false, false, 34), "html", null, true);
            yield " </td>
                <td class=\"align-middle m-auto btns\"> 
                ";
            // line 36
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 36) == "admin") || (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 36) == CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "id_user", [], "any", false, false, false, 36)))) {
                // line 37
                yield "                    <button type=\"button\" class=\"edit-data edit-part\" data-bs-toggle=\"modal\" data-bs-target=\"#editPart-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id_partial", [], "any", false, false, false, 37), "html", null, true);
                yield "\" 
                            data-id=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id_partial", [], "any", false, false, false, 38), "html", null, true);
                yield "\">
                                <i class=\"bi bi-pencil-square\"></i>
                    </button> 
                ";
            } else {
                // line 42
                yield "                    <button type=\"button\" class=\"edit-data\" disabled>
                        <i class=\"bi bi-x-octagon\"></i>
                    </button>
                ";
            }
            // line 46
            yield "                                                    
                ";
            // line 47
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 47) == "admin")) {
                // line 48
                yield "                    <button type=\"button\" class=\"edit-data delete-data\" data-bs-toggle=\"modal\" data-bs-target=\"#deletePart-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id_partial", [], "any", false, false, false, 48), "html", null, true);
                yield "\"
                            data-id=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id_partial", [], "any", false, false, false, 49), "html", null, true);
                yield "\">
                                <i class=\"bi bi-trash\"></i> 
                    </button>     
                ";
            }
            // line 52
            yield "                        
                </td> 
            </tr>  
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
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "        </tbody>
    </table>
</td>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials.twig";
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
        return array (  174 => 56,  157 => 52,  150 => 49,  145 => 48,  143 => 47,  140 => 46,  134 => 42,  127 => 38,  122 => 37,  120 => 36,  115 => 34,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  95 => 29,  90 => 27,  86 => 25,  69 => 24,  51 => 9,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Partials Table #}
<td colspan=\"16\" class=\"border-0\">
    <h4 class=\"mx-auto my-3 text-center\"> 
        <span class=\"btn my-auto collapse-title edit-data updateQty\" style=\"cursor: default\">
            Scarichi parziali:
        </span>
    </h4>

    <table class=\"table table-bordered table-light mb-1\" id=\"part-table-{{ t.id_transport }}\">
        <thead>
            <tr class=\"border-top border-light bg-primary bg-gradient table-title\">
                <th scope=\"col\" class=\"align-middle px-3 small-col\"> # </th>
                <th scope=\"col\" class=\"align-middle px-2\"> Destinazione </th>
                <th scope=\"col\" class=\"align-middle px-2\"> EXW </th>
                <th scope=\"col\" class=\"align-middle px-2\"> Data </th>
                <th scope=\"col\" class=\"align-middle px-2\"> Luogo </th>
                <th scope=\"col\" class=\"align-middle px-2\"> Quantità scaricata </th>
                <th scope=\"col\" class=\"align-middle px-2\"> Fattura </th>
                <th scope=\"col\" class=\"align-middle px-2 small-col\"> <i class=\"bi bi-gear\"></i> </th>
            </tr>
        </thead>
                                                     
        <tbody>
        {% for p in partials %}
            <tr class=\"bg-light bg-gradient\">
                <td scope=\"row\" class=\"align-middle p-1\"> 
                    {{ loop.index }}
                </td>         
                <td class=\"align-middle p-1 col-destination\" id=\"dest\"> {{ p.destination|upper }} </td>                                   
                <td class=\"align-middle p-1 col-exw\" id=\"exw\"> {{ p.exw|upper }} </td>  
                <td class=\"align-middle p-1 col-date\" id=\"date\"> {{ p.date|date(\"d/m/Y\") }} </td>                   
                <td class=\"align-middle p-1 col-place\" id=\"place\"> {{ p.place|capitalize }} </td>
                <td class=\"align-middle p-1 col-q-unloaded\" id=\"qty\"> {{ p.q_unloaded }} </td>
                <td class=\"align-middle p-1 col-invoice\" id=\"invoice\"> {{ p.invoice }} </td>
                <td class=\"align-middle m-auto btns\"> 
                {% if (user.role == 'admin') or (user.id_user == t.id_user) %}
                    <button type=\"button\" class=\"edit-data edit-part\" data-bs-toggle=\"modal\" data-bs-target=\"#editPart-{{ p.id_partial }}\" 
                            data-id=\"{{ p.id_partial }}\">
                                <i class=\"bi bi-pencil-square\"></i>
                    </button> 
                {% else %}
                    <button type=\"button\" class=\"edit-data\" disabled>
                        <i class=\"bi bi-x-octagon\"></i>
                    </button>
                {% endif %}
                                                    
                {% if (user.role == 'admin') %}
                    <button type=\"button\" class=\"edit-data delete-data\" data-bs-toggle=\"modal\" data-bs-target=\"#deletePart-{{ p.id_partial }}\"
                            data-id=\"{{ p.id_partial }}\">
                                <i class=\"bi bi-trash\"></i> 
                    </button>     
                {% endif %}                        
                </td> 
            </tr>  
        {% endfor %}
        </tbody>
    </table>
</td>", "partials.twig", "C:\\wamp64\\www\\liquimet\\templates\\partials.twig");
    }
}
