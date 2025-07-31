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

/* platform-ajax.twig */
class __TwigTemplate_767a6e7bd3688a58c2a8a6fa5d71d813 extends Template
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
        // line 1
        yield "<tbody class=\"table-group-divider\">   
            ";
        // line 2
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["transports"] ?? null))) {
            // line 3
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["transports"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 4
                yield "                    ";
                // line 5
                yield "                    <tr class=\"align-middle expand\" id=\"id-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 5), "html", null, true);
                yield "\">
                        <td scope=\"row all\">
                            ";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 7), "html", null, true);
                yield " <br>
                            <span class=\"text-dark note-icon\" data-bs-toggle=\"tooltip\" data-id=\"";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 8), "html", null, true);
                yield "\"
                                title=\"";
                // line 9
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "note", [], "any", false, false, false, 9)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('truncate')->getCallable()(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "note", [], "any", false, false, false, 9)), 50), "html", null, true)) : ("N/A"));
                yield "\">
                                    <i class=\"bi bi-exclamation-circle\"></i>
                            </span>

                            ";
                // line 17
                yield "                        </td>
                        <td class=\"align-middle p-1 fw-600\"> ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "type", [], "any", false, false, false, 18)), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1 search word-wrap-container\"> ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "slot", [], "any", false, false, false, 19)), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1 search word-wrap-container\"> ";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "cmr", [], "any", false, false, false, 20)), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1 search\"> ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "issuer", [], "any", false, false, false, 21)), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1 search\"> ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "supplier", [], "any", false, false, false, 22)), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1 search\"> ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "transport", [], "any", false, false, false, 23)), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1\"> ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "univoco", [], "any", false, false, false, 24)), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1\"> ";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "date_load", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1\"> ";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "date_unload", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1\"> ";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_month_load", [], "any", false, false, false, 27), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1\"> ";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "week_unload", [], "any", false, false, false, 28), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1\" colspan=\"2\"> ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_month_unload", [], "any", false, false, false, 29), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "month_unload", [], "any", false, false, false, 29), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1 last-border\"> ";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "container", [], "any", false, false, false, 30)), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1 text-center\">
                            <button class=\"btn btn-sm\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#qty-";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 32), "html", null, true);
                yield "\"
                                aria-expanded=\"false\" aria-controls=\"qty-";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 33), "html", null, true);
                yield "\">
                                    <i class=\"bi bi-arrows-expand\"></i>
                            </button>
                        </td>
                    </tr>
                    ";
                // line 38
                yield "  
     
                        ";
                // line 41
                yield "                        <tr class=\"accordion-toggle\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41), "html", null, true);
                yield "\">        
                            <td colspan=\"17\" class=\"border-0\">
                                <div class=\"accordion-body collapse rowQty\" id=\"qty-";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 43), "html", null, true);
                yield "\"> 
                                    <h4 class=\"mx-auto my-2 text-center\"> 
                                        <span class=\"btn my-auto collapse-title edit-data\" style=\"cursor: default\">
                                            Quantità:
                                        </span> 
                                    </h4>

                                    <table class=\"table table-bordered table-sm mb-2\">
                                        <tbody>    
                                            <tr>
                                                <th class=\"sub-title align-middle p-1\"> Energia caricata [MWh] </th>
                                                <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mwh", [], "any", false, false, false, 55), "html", null, true);
                yield " 
                                                    </td>   
                                                <th class=\"sub-title align-middle p-1\"> Quantità nominale caricata [kg] </th>
                                                <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_load", [], "any", false, false, false, 59), "html", null, true);
                yield " 
                                                    </td>   
                                                <th class=\"sub-title align-middle p-1\"> Raffreddamento </th>            
                                                <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 63
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "cooling", [], "any", false, false, false, 63) == 600)) ? ("600") : ("No"));
                yield "
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Tipologia costo extra </th>            
                                                <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 67
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_typology", [], "any", false, false, false, 67) == "yes")) ? ("Sì") : ("No"));
                yield "
                                                    </td>            
                                                <!--<th class=\"sub-title align-middle p-1\"> Accisa <big>[</big>Sm<sup>3</sup><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\">  

                                                    </td>        -->    
                                            </tr>
                                         
                                            <tr>
                                                <th class=\"sub-title align-middle p-1\"> Valore costo extra </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                            ";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_value", [], "any", false, false, false, 78), "html", null, true);
                yield " 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Quantità scaricata PD [kg] </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                            ";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_unload", [], "any", false, false, false, 82), "html", null, true);
                yield " 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                            ";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "liquid_density", [], "any", false, false, false, 86), "html", null, true);
                yield " 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                            ";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_weight", [], "any", false, false, false, 90), "html", null, true);
                yield " 
                                                    </td>
                                                <!--<th class=\"sub-title align-middle p-1\"> Accisa totale </th>
                                                    <td class=\"bg-light bg-gradient align-middle\">  

                                                    </td>-->
                                            </tr>
                                                     
                                            <tr>
                                                <th class=\"sub-title align-middle p-1\"> PCS/GHV <big>[</big><sup>MJ</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mj_kg", [], "any", false, false, false, 101), "html", null, true);
                yield " 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "pcs_ghv", [], "any", false, false, false, 105), "html", null, true);
                yield " 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Volume scaricato (liquido) <big>[</big>m<sup>3</sup><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_mc", [], "any", false, false, false, 109), "html", null, true);
                yield " 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Volume sviluppato <big>[</big><sup>Nm<sup>3</sup></sup>&frasl;<sub>m<sup>3</sup></sub><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_nmc", [], "any", false, false, false, 113), "html", null, true);
                yield " 
                                                    </td>  
                                                <!--<th class=\"sub-title align-middle p-1\"> Incidenza </th> 
                                                    <td class=\"bg-light bg-gradient align-middle\">  

                                                    </td> -->
                                            </tr>
                             
                                            <tr>
                                                <th class=\"sub-title align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>m<sup>3</sup></sub> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_mc", [], "any", false, false, false, 124), "html", null, true);
                yield " 
                                                    </td>   
                                                <th class=\"sub-title align-middle p-1\"> Gas sviluppato <big>[</big>Nm<sup>3</sup><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_nmc", [], "any", false, false, false, 128), "html", null, true);
                yield " 
                                                    </td>   
                                                <th class=\"sub-title align-middle p-1\"> Gas sviluppato <big>[</big>Sm<sup>3</sup></sup><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_smc", [], "any", false, false, false, 132), "html", null, true);
                yield " 
                                                    </td>   
                                                <th class=\"sub-title align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>kg</sub> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_kg", [], "any", false, false, false, 136), "html", null, true);
                yield " 
                                                    </td>  
                                                <!--<th class=\"sub-title align-middle p-1\"> </th> 
                                                    <td class=\"bg-light bg-gradient align-middle\"> 

                                                    </td>       -->   
                                            </tr>
                                        </tbody>
                                    </table>

                                </div> 
                            </td> 
                        </tr>
                        <!--    ===>    End Quantity Data    <===    -->
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
            unset($context['_seq'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "                    ";
        } else {
            // line 152
            yield "                        <tr>
                            <td colspan=\"16\" class=\"text-center text-light p-3\">
                                <strong> Nessun utente trovato. </strong>
                            </td>
                        </tr>
                    ";
        }
        // line 158
        yield "                    </tbody>

                            ";
        // line 161
        yield "        <tr>
            <td colspan=\"16\">
                ";
        // line 163
        if ((($context["total"] ?? null) > ($context["limit"] ?? null))) {
            // line 164
            yield "                    <nav class=\"mt-3\">
                        <ul class=\"pagination justify-content-center\">
                            ";
            // line 167
            yield "                            <li class=\"page-item ";
            if ((($context["page"] ?? null) <= 1)) {
                yield "disabled";
            }
            yield "\">
                                <a class=\"page-link transport-page\" href=\"#\" data-page=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["page"] ?? null) - 1), "html", null, true);
            yield "\">
                                    &laquo;
                                </a>
                            </li>

                            ";
            // line 174
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["pagination"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 175
                yield "                                <li class=\"page-item ";
                if (($context["p"] == ($context["page"] ?? null))) {
                    yield "active";
                }
                yield "\">
                                    <a class=\"page-link transport-page\" href=\"#\" data-page=\"";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                yield "\">
                                        ";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                yield "
                                    </a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            yield "
                            ";
            // line 183
            yield "                            <li class=\"page-item ";
            if ((($context["page"] ?? null) >= ($context["pagination"] ?? null))) {
                yield "disabled";
            }
            yield "\">
                                <a class=\"page-link transport-page\" href=\"#\" data-page=\"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["page"] ?? null) + 1), "html", null, true);
            yield "\">
                                    &raquo;
                                </a>
                            </li>
                        </ul>
                    </nav>
                ";
        }
        // line 191
        yield "            </td>
        </tr>
        ";
        // line 194
        yield "                     
                    ";
        // line 196
        yield "                    <tfoot>
                        <tr>
                            <td colspan=\"16\" class=\"text-light align-middle mb-2 p-2\">
                                <h5 class=\"align-middle my-auto\">
                                    TOTALE <i class=\"bi bi-fuel-pump-fill ms-1\"></i> + <i class=\"bi bi-fuel-pump\"></i>:
                                        <span> ";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
        yield " </span>
                                </h5> 
                            </td>
                        </tr>
                    </tfoot>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "platform-ajax.twig";
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
        return array (  438 => 201,  431 => 196,  428 => 194,  424 => 191,  414 => 184,  407 => 183,  404 => 181,  394 => 177,  390 => 176,  383 => 175,  378 => 174,  370 => 168,  363 => 167,  359 => 164,  357 => 163,  353 => 161,  349 => 158,  341 => 152,  338 => 151,  309 => 136,  302 => 132,  295 => 128,  288 => 124,  274 => 113,  267 => 109,  260 => 105,  253 => 101,  239 => 90,  232 => 86,  225 => 82,  218 => 78,  204 => 67,  197 => 63,  190 => 59,  183 => 55,  168 => 43,  162 => 41,  158 => 38,  150 => 33,  146 => 32,  141 => 30,  135 => 29,  131 => 28,  127 => 27,  123 => 26,  119 => 25,  115 => 24,  111 => 23,  107 => 22,  103 => 21,  99 => 20,  95 => 19,  91 => 18,  88 => 17,  81 => 9,  77 => 8,  73 => 7,  67 => 5,  65 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<tbody class=\"table-group-divider\">   
            {% if transports is not empty %}
                {% for t in transports %}
                    {# Transport Data #}
                    <tr class=\"align-middle expand\" id=\"id-{{ t.id_transport }}\">
                        <td scope=\"row all\">
                            {{ loop.index }} <br>
                            <span class=\"text-dark note-icon\" data-bs-toggle=\"tooltip\" data-id=\"{{ t.id_transport }}\"
                                title=\"{{ t.note ? t.note|capitalize|truncate(50) : 'N/A' }}\">
                                    <i class=\"bi bi-exclamation-circle\"></i>
                            </span>

                            {#<button data-bs-toggle=\"collapse\" data-bs-target=\"#qty-{{ t.id_transport }}\"
                                aria-expanded=\"false\" aria-controls=\"qty-{{ t.id_transport }}\" aria-label=\"Expand quantities\">
                                    <i class=\"bi bi-arrows-expand\"></i>
                            </button>#}
                        </td>
                        <td class=\"align-middle p-1 fw-600\"> {{ t.type|upper }} </td>
                        <td class=\"align-middle p-1 search word-wrap-container\"> {{ t.slot|upper }} </td>
                        <td class=\"align-middle p-1 search word-wrap-container\"> {{ t.cmr|upper }} </td>
                        <td class=\"align-middle p-1 search\"> {{ t.issuer|upper }} </td>
                        <td class=\"align-middle p-1 search\"> {{ t.supplier|upper }} </td>
                        <td class=\"align-middle p-1 search\"> {{ t.transport|upper }} </td>
                        <td class=\"align-middle p-1\"> {{ t.univoco|upper }} </td>
                        <td class=\"align-middle p-1\"> {{ t.date_load|date(\"d/m/Y\") }} </td>
                        <td class=\"align-middle p-1\"> {{ t.date_unload|date(\"d/m/Y\") }} </td>
                        <td class=\"align-middle p-1\"> {{ t.id_month_load }} </td>
                        <td class=\"align-middle p-1\"> {{ t.week_unload }} </td>
                        <td class=\"align-middle p-1\" colspan=\"2\"> {{ t.id_month_unload }} - {{ t.month_unload }} </td>
                        <td class=\"align-middle p-1 last-border\"> {{ t.container|upper }} </td>
                        <td class=\"align-middle p-1 text-center\">
                            <button class=\"btn btn-sm\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#qty-{{ t.id_transport }}\"
                                aria-expanded=\"false\" aria-controls=\"qty-{{ t.id_transport }}\">
                                    <i class=\"bi bi-arrows-expand\"></i>
                            </button>
                        </td>
                    </tr>
                    {# End Transport Data #}  
     
                        {# Quantity Data #}
                        <tr class=\"accordion-toggle\" id=\"{{ loop.index }}\">        
                            <td colspan=\"17\" class=\"border-0\">
                                <div class=\"accordion-body collapse rowQty\" id=\"qty-{{ t.id_transport }}\"> 
                                    <h4 class=\"mx-auto my-2 text-center\"> 
                                        <span class=\"btn my-auto collapse-title edit-data\" style=\"cursor: default\">
                                            Quantità:
                                        </span> 
                                    </h4>

                                    <table class=\"table table-bordered table-sm mb-2\">
                                        <tbody>    
                                            <tr>
                                                <th class=\"sub-title align-middle p-1\"> Energia caricata [MWh] </th>
                                                <td class=\"bg-light bg-gradient align-middle\"> 
                                                        {{ t.mwh }} 
                                                    </td>   
                                                <th class=\"sub-title align-middle p-1\"> Quantità nominale caricata [kg] </th>
                                                <td class=\"bg-light bg-gradient align-middle\"> 
                                                        {{ t.kg_load }} 
                                                    </td>   
                                                <th class=\"sub-title align-middle p-1\"> Raffreddamento </th>            
                                                <td class=\"bg-light bg-gradient align-middle\"> 
                                                        {{ t.cooling == 600 ? '600' : 'No' }}
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Tipologia costo extra </th>            
                                                <td class=\"bg-light bg-gradient align-middle\"> 
                                                        {{ t.price_typology == 'yes'? 'Sì' : 'No' }}
                                                    </td>            
                                                <!--<th class=\"sub-title align-middle p-1\"> Accisa <big>[</big>Sm<sup>3</sup><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\">  

                                                    </td>        -->    
                                            </tr>
                                         
                                            <tr>
                                                <th class=\"sub-title align-middle p-1\"> Valore costo extra </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                            {{ t.price_value }} 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Quantità scaricata PD [kg] </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                            {{ t.kg_unload }} 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                            {{ t.liquid_density }} 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                            {{ t.gas_weight }} 
                                                    </td>
                                                <!--<th class=\"sub-title align-middle p-1\"> Accisa totale </th>
                                                    <td class=\"bg-light bg-gradient align-middle\">  

                                                    </td>-->
                                            </tr>
                                                     
                                            <tr>
                                                <th class=\"sub-title align-middle p-1\"> PCS/GHV <big>[</big><sup>MJ</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        {{ t.mj_kg }} 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        {{ t.pcs_ghv }} 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Volume scaricato (liquido) <big>[</big>m<sup>3</sup><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        {{ t.volume_mc }} 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Volume sviluppato <big>[</big><sup>Nm<sup>3</sup></sup>&frasl;<sub>m<sup>3</sup></sub><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        {{ t.volume_nmc }} 
                                                    </td>  
                                                <!--<th class=\"sub-title align-middle p-1\"> Incidenza </th> 
                                                    <td class=\"bg-light bg-gradient align-middle\">  

                                                    </td> -->
                                            </tr>
                             
                                            <tr>
                                                <th class=\"sub-title align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>m<sup>3</sup></sub> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        {{ t.smc_mc }} 
                                                    </td>   
                                                <th class=\"sub-title align-middle p-1\"> Gas sviluppato <big>[</big>Nm<sup>3</sup><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        {{ t.gas_nmc }} 
                                                    </td>   
                                                <th class=\"sub-title align-middle p-1\"> Gas sviluppato <big>[</big>Sm<sup>3</sup></sup><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        {{ t.gas_smc}} 
                                                    </td>   
                                                <th class=\"sub-title align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>kg</sub> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        {{ t.smc_kg }} 
                                                    </td>  
                                                <!--<th class=\"sub-title align-middle p-1\"> </th> 
                                                    <td class=\"bg-light bg-gradient align-middle\"> 

                                                    </td>       -->   
                                            </tr>
                                        </tbody>
                                    </table>

                                </div> 
                            </td> 
                        </tr>
                        <!--    ===>    End Quantity Data    <===    -->
                        {% endfor %}
                    {% else %}
                        <tr>
                            <td colspan=\"16\" class=\"text-center text-light p-3\">
                                <strong> Nessun utente trovato. </strong>
                            </td>
                        </tr>
                    {% endif %}
                    </tbody>

                            {# Table Pagination #}
        <tr>
            <td colspan=\"16\">
                {% if total > limit %}
                    <nav class=\"mt-3\">
                        <ul class=\"pagination justify-content-center\">
                            {# Previous Page Link #}
                            <li class=\"page-item {% if page <= 1 %}disabled{% endif %}\">
                                <a class=\"page-link transport-page\" href=\"#\" data-page=\"{{ page - 1 }}\">
                                    &laquo;
                                </a>
                            </li>

                            {# Page Numbers #}
                            {% for p in 1..pagination %}
                                <li class=\"page-item {% if p == page %}active{% endif %}\">
                                    <a class=\"page-link transport-page\" href=\"#\" data-page=\"{{ p }}\">
                                        {{ p }}
                                    </a>
                                </li>
                            {% endfor %}

                            {# Next Page Link #}
                            <li class=\"page-item {% if page >= pagination %}disabled{% endif %}\">
                                <a class=\"page-link transport-page\" href=\"#\" data-page=\"{{ page + 1 }}\">
                                    &raquo;
                                </a>
                            </li>
                        </ul>
                    </nav>
                {% endif %}
            </td>
        </tr>
        {# END Table Pagination #}
                     
                    {# Table Footer #}
                    <tfoot>
                        <tr>
                            <td colspan=\"16\" class=\"text-light align-middle mb-2 p-2\">
                                <h5 class=\"align-middle my-auto\">
                                    TOTALE <i class=\"bi bi-fuel-pump-fill ms-1\"></i> + <i class=\"bi bi-fuel-pump\"></i>:
                                        <span> {{ total }} </span>
                                </h5> 
                            </td>
                        </tr>
                    </tfoot>", "platform-ajax.twig", "C:\\wamp64\\www\\liquimet\\templates\\platform-ajax.twig");
    }
}
