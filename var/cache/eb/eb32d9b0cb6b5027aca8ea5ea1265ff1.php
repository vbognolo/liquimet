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
        yield "<td colspan=\"14\" class=\"mx-auto my-auto border-0\" style=\"--bs-table-bg-state: rgb(255, 254, 246)\">
    <div class=\"d-flex align-items-center\">
            ";
        // line 5
        yield "        <div class=\"my-auto me-3 ms-3 text-wrap col-1\" id=\"collapse-1\" style=\"border: 1px solid black\">
            <h4 class=\"mx-auto\" style=\"border: 1px solid red\"> 
                <span class=\"btn collapse-title edit-data\" style=\"cursor: default\">
                    Parziali
                </span>
            </h4>

            ";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 12) == "admin")) {
            // line 13
            yield "                <h6 class=\"me-2\" style=\"border: 1px solid green\">
                    <button type=\"button\" class=\"btn edit-data\" data-bs-toggle=\"modal\" 
                            data-bs-target=\"#deletePartModal\" data-id=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "id_transport", [], "any", false, false, false, 15), "html", null, true);
            yield "\">   
                        <span class=\"icon-wrap\">
                            <i class=\"bi bi-trash\"></i>
                            <i class=\"bi bi-trash-fill\"></i>
                        </span>
                                    
                        <span class=\"collapse-subtitle\"> Elimina </span> 
                    </button> 
                </h6>
            ";
        }
        // line 25
        yield "        </div>

            ";
        // line 28
        yield "        <div class=\"flex-grow-1 my-2 px-2\">
            <table class=\"table table-sm table-bordered table-hover caption-top my-auto part-table\" id=\"part-table-";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "id_transport", [], "any", false, false, false, 29), "html", null, true);
        yield "\">
                <caption class=\"ms-3 my-0\">
                    TOTALE PARZIALI: ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_part"] ?? null), "html", null, true);
        yield "
                </caption>
                <thead class=\"\">
                    <tr class=\"table-light\">
                        <th scope=\"col\" class=\"align-middle small-col\" style=\"width: 50px\"> # </th>
                        <th scope=\"col\" class=\"align-middle p-2\" style=\"width: 150px\"> Destinazione </th>
                        <th scope=\"col\" class=\"align-middle p-2\" style=\"width: 100px\"> EXW </th>
                        <th scope=\"col\" class=\"align-middle p-2\" style=\"width: 100px\"> Data </th>
                        <th scope=\"col\" class=\"align-middle p-2\" style=\"width: 150px\"> Luogo </th>
                        <th scope=\"col\" class=\"align-middle p-2\" style=\"width: 150px\"> Quantità scaricata </th>
                        <th scope=\"col\" class=\"align-middle p-2\" style=\"width: 100px\"> Fattura </th>
                        <th scope=\"col\" class=\"align-middle small-col\" style=\"width: 50px\"> <i class=\"bi bi-gear\"></i> </th>
                    </tr>
                </thead>
                                                     
                <tbody class=\"table-group-divider\">
                ";
        // line 47
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
            // line 48
            yield "                    <tr>
                        <td scope=\"row\" class=\"align-middle p-1\"> 
                            ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50), "html", null, true);
            yield "
                        </td>         
                        <td class=\"align-middle p-1 col-destination\" id=\"dest\"> ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "destination", [], "any", false, false, false, 52)), "html", null, true);
            yield " </td>                                   
                        <td class=\"align-middle p-1 col-exw\" id=\"exw\"> ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "exw", [], "any", false, false, false, 53)), "html", null, true);
            yield " </td>  
                        <td class=\"align-middle p-1 col-date\" id=\"date\"> ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "date", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true);
            yield " </td>                   
                        <td class=\"align-middle p-1 col-place\" id=\"place\"> ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "place", [], "any", false, false, false, 55)), "html", null, true);
            yield " </td>
                        <td class=\"align-middle p-1 col-q-unloaded\" id=\"qty\"> ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "q_unloaded", [], "any", false, false, false, 56), "html", null, true);
            yield " </td>
                        <td class=\"align-middle p-1 col-invoice\" id=\"invoice\"> ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "invoice", [], "any", false, false, false, 57), "html", null, true);
            yield " </td>
                        <td class=\"align-middle m-auto btns\"> 
                        ";
            // line 59
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 59) == "admin") || (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id_user", [], "any", false, false, false, 59) == CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "id_user", [], "any", false, false, false, 59)))) {
                // line 60
                yield "                            <button type=\"button\" class=\"edit-data edit-part\" data-bs-toggle=\"modal\" data-bs-target=\"#editPart-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id_partial", [], "any", false, false, false, 60), "html", null, true);
                yield "\" 
                                    data-id=\"";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id_partial", [], "any", false, false, false, 61), "html", null, true);
                yield "\">
                                        <i class=\"bi bi-pencil-square\"></i>
                            </button> 
                        ";
            } else {
                // line 65
                yield "                            <button type=\"button\" class=\"edit-data\" disabled>
                                <i class=\"bi bi-x-octagon\"></i>
                            </button>
                        ";
            }
            // line 69
            yield "                                                            
                        ";
            // line 70
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 70) == "admin")) {
                // line 71
                yield "                            <button type=\"button\" class=\"edit-data delete-data\" data-bs-toggle=\"modal\" data-bs-target=\"#deletePart-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id_partial", [], "any", false, false, false, 71), "html", null, true);
                yield "\"
                                    data-id=\"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id_partial", [], "any", false, false, false, 72), "html", null, true);
                yield "\">
                                        <i class=\"bi bi-trash\"></i> 
                            </button>     
                        ";
            }
            // line 75
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
        // line 79
        yield "                </tbody>
            </table>
        </div>
    </div>
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
        return array (  210 => 79,  193 => 75,  186 => 72,  181 => 71,  179 => 70,  176 => 69,  170 => 65,  163 => 61,  158 => 60,  156 => 59,  151 => 57,  147 => 56,  143 => 55,  139 => 54,  135 => 53,  131 => 52,  126 => 50,  122 => 48,  105 => 47,  86 => 31,  81 => 29,  78 => 28,  74 => 25,  61 => 15,  57 => 13,  55 => 12,  46 => 5,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Partials Table #}
<td colspan=\"14\" class=\"mx-auto my-auto border-0\" style=\"--bs-table-bg-state: rgb(255, 254, 246)\">
    <div class=\"d-flex align-items-center\">
            {# Left Side #}
        <div class=\"my-auto me-3 ms-3 text-wrap col-1\" id=\"collapse-1\" style=\"border: 1px solid black\">
            <h4 class=\"mx-auto\" style=\"border: 1px solid red\"> 
                <span class=\"btn collapse-title edit-data\" style=\"cursor: default\">
                    Parziali
                </span>
            </h4>

            {% if session.role == 'admin' %}
                <h6 class=\"me-2\" style=\"border: 1px solid green\">
                    <button type=\"button\" class=\"btn edit-data\" data-bs-toggle=\"modal\" 
                            data-bs-target=\"#deletePartModal\" data-id=\"{{ t.id_transport }}\">   
                        <span class=\"icon-wrap\">
                            <i class=\"bi bi-trash\"></i>
                            <i class=\"bi bi-trash-fill\"></i>
                        </span>
                                    
                        <span class=\"collapse-subtitle\"> Elimina </span> 
                    </button> 
                </h6>
            {% endif %}
        </div>

            {# Right Side #}
        <div class=\"flex-grow-1 my-2 px-2\">
            <table class=\"table table-sm table-bordered table-hover caption-top my-auto part-table\" id=\"part-table-{{ t.id_transport }}\">
                <caption class=\"ms-3 my-0\">
                    TOTALE PARZIALI: {{ total_part }}
                </caption>
                <thead class=\"\">
                    <tr class=\"table-light\">
                        <th scope=\"col\" class=\"align-middle small-col\" style=\"width: 50px\"> # </th>
                        <th scope=\"col\" class=\"align-middle p-2\" style=\"width: 150px\"> Destinazione </th>
                        <th scope=\"col\" class=\"align-middle p-2\" style=\"width: 100px\"> EXW </th>
                        <th scope=\"col\" class=\"align-middle p-2\" style=\"width: 100px\"> Data </th>
                        <th scope=\"col\" class=\"align-middle p-2\" style=\"width: 150px\"> Luogo </th>
                        <th scope=\"col\" class=\"align-middle p-2\" style=\"width: 150px\"> Quantità scaricata </th>
                        <th scope=\"col\" class=\"align-middle p-2\" style=\"width: 100px\"> Fattura </th>
                        <th scope=\"col\" class=\"align-middle small-col\" style=\"width: 50px\"> <i class=\"bi bi-gear\"></i> </th>
                    </tr>
                </thead>
                                                     
                <tbody class=\"table-group-divider\">
                {% for p in partials %}
                    <tr>
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
                        {% if (session.role == 'admin') or (session.id_user == t.id_user) %}
                            <button type=\"button\" class=\"edit-data edit-part\" data-bs-toggle=\"modal\" data-bs-target=\"#editPart-{{ p.id_partial }}\" 
                                    data-id=\"{{ p.id_partial }}\">
                                        <i class=\"bi bi-pencil-square\"></i>
                            </button> 
                        {% else %}
                            <button type=\"button\" class=\"edit-data\" disabled>
                                <i class=\"bi bi-x-octagon\"></i>
                            </button>
                        {% endif %}
                                                            
                        {% if session.role == 'admin' %}
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
        </div>
    </div>
</td>", "partials.twig", "C:\\wamp64\\www\\liquimet\\templates\\partials.twig");
    }
}
