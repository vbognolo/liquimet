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

/* transports-part-ajax.twig */
class __TwigTemplate_b7e91a863b6de262d9504ff504499d67 extends Template
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
        yield "
    ";
        // line 2
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["transports"] ?? null))) {
            // line 3
            yield "        ";
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
                yield "            ";
                // line 5
                yield "            <tr class=\"align-middle expand\" id=\"id-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 5), "html", null, true);
                yield "\">
                <td scope=\"row\">
                    ";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 7) + ((($context["page"] ?? null) - 1) * ($context["limit"] ?? null))), "html", null, true);
                yield " <br>
                        <button data-bs-toggle=\"collapse\" data-bs-target=\"#qty-";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 8), "html", null, true);
                yield "\" class=\"accordion-toggle\"
                                aria-expanded=\"false\" aria-controls=\"qty-";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 9), "html", null, true);
                yield "\" aria-label=\"Expand quantities\">
                            <i class=\"bi bi-arrows-expand\"></i>
                        </button> 
                </td>
                <td class=\"align-middle p-2 search word-wrap-container col-slot\"> ";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "slot", [], "any", false, false, false, 13)), "html", null, true);
                yield " </td>
                <td class=\"align-middle p-2 search word-wrap-container col-cmr\"> ";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "cmr", [], "any", false, false, false, 14)), "html", null, true);
                yield " </td>
                <td class=\"align-middle p-1 search col-issuer\"> ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "issuer", [], "any", false, false, false, 15)), "html", null, true);
                yield " </td>
                <td class=\"align-middle p-1 search col-supplier\"> ";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "supplier", [], "any", false, false, false, 16)), "html", null, true);
                yield " </td>
                <td class=\"align-middle p-1 search col-transport\"> ";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "transport", [], "any", false, false, false, 17)), "html", null, true);
                yield " </td>
                <td class=\"align-middle p-1 col-univoco\"> ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "univoco", [], "any", false, false, false, 18)), "html", null, true);
                yield " </td>
                <td class=\"align-middle p-1 col-load\"> ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "date_load", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
                yield " </td>
                <td class=\"align-middle p-1 col-unload\"> ";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "date_unload", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
                yield " </td>
                <td class=\"align-middle p-0 col-month-load\"> ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_month_load", [], "any", false, false, false, 21), "html", null, true);
                yield " </td>
                <td class=\"align-middle p-0 col-week-unload\"> ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "week_unload", [], "any", false, false, false, 22), "html", null, true);
                yield " </td>
                <td class=\"align-middle p-1 col-month-unload\"> ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_month_unload", [], "any", false, false, false, 23), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "month_unload", [], "any", false, false, false, 23)), "html", null, true);
                yield " </td>
                <td class=\"align-middle p-1 col-container\"> ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "container", [], "any", false, false, false, 24)), "html", null, true);
                yield " </td>
                <td class=\"align-middle p-1 btns\">   
                    ";
                // line 26
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 26) == "admin") || (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 26) == CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_user", [], "any", false, false, false, 26)))) {
                    // line 27
                    yield "                        <button type=\"button\" class=\"edit-data edited updateTrans\" data-bs-toggle=\"modal\" data-bs-target=\"#editTransModal\"
                                data-id=\"";
                    // line 28
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 28), "html", null, true);
                    yield "\">
                            <i class=\"bi bi-pencil-square\" title=\"Modifica\"></i>
                        </button>
                    ";
                } else {
                    // line 31
                    yield "    
                        <button type=\"button\" class=\"edit-data\" disabled>
                            <i class=\"bi bi-x-octagon\"></i>
                        </button>
                    ";
                }
                // line 36
                yield "                                
                    ";
                // line 37
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 37) == "admin")) {
                    // line 38
                    yield "                        <button type=\"button\" class=\"edit-data deleteTrans\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteTransModal\"
                                data-id=\"";
                    // line 39
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 39), "html", null, true);
                    yield "\" data-slot=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "slot", [], "any", false, false, false, 39), "html", null, true);
                    yield "\">
                            <i class=\"bi bi-trash\" title=\"Elimina\"></i> 
                        </button>  
                    ";
                }
                // line 43
                yield "                </td>
            </tr>
            ";
                // line 46
                yield "
            ";
                // line 48
                yield "            <tr class=\"collapse accordion-body collapse-platform\" id=\"qty-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 48), "html", null, true);
                yield "\">        
                <td colspan=\"14\" class=\"border-0\">
                    ";
                // line 51
                yield "                    <h4 class=\"mx-auto my-3\"> 
                        ";
                // line 52
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 52) == "admin") || (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 52) == CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_user", [], "any", false, false, false, 52)))) {
                    // line 53
                    yield "                            <button type=\"button\" class=\"btn my-auto edit-data updateQty\" data-bs-toggle=\"modal\" 
                                    data-bs-target=\"#editQtyModal\" data-id=\"";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 54), "html", null, true);
                    yield "\">   
                                <i class=\"bi bi-pencil-square mx-1\"></i> 
                                    <span class=\"collapse-title\">
                                        Quantità:
                                    </span>   
                            </button> 
                        ";
                } else {
                    // line 61
                    yield "                            <span class=\"btn my-auto collapse-title edit-data updateQty\" style=\"cursor: default\">
                                Quantità:
                            </span>
                        ";
                }
                // line 65
                yield "                    </h4>

                    <table class=\"table table-bordered table-light mb-1\" id=\"qty-table-";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 67), "html", null, true);
                yield "\">
                                <tbody>    
                                    <tr>
                                        <th class=\"align-middle p-1\"> Energia caricata [MWh] </th>
                                        <td class=\"bg-light align-middle col-mwh\"> ";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mwh", [], "any", true, true, false, 71)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mwh", [], "any", false, false, false, 71), "—")) : ("—")), "html", null, true);
                yield " </td>   

                                        <th class=\"align-middle p-1\"> Quantità nominale caricata [kg] </th>
                                        <td class=\"bg-light align-middle col-kg-load\"> ";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_load", [], "any", true, true, false, 74)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_load", [], "any", false, false, false, 74), "—")) : ("—")), "html", null, true);
                yield " </td>   

                                        <th class=\"align-middle p-1\"> Raffreddamento </th>            
                                        <td class=\"bg-light align-middle col-cooling\"> ";
                // line 77
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "cooling", [], "any", false, false, false, 77) == 600)) ? ("600") : ("No"));
                yield " </td>

                                        <th class=\"align-middle p-1\"> Tipologia costo extra </th>            
                                        <td class=\"bg-light align-middle col-price-typology\"> ";
                // line 80
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_typology", [], "any", false, false, false, 80) == "yes")) ? ("Sì") : ("No"));
                yield " </td>   
                                    </tr>
                                    
                                    <tr>
                                        <th class=\"align-middle p-1\"> Valore costo extra </th>
                                        <td class=\"bg-light align-middle col-price-value\"> ";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_value", [], "any", true, true, false, 85)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_value", [], "any", false, false, false, 85), "—")) : ("—")), "html", null, true);
                yield " </td>

                                        <th class=\"align-middle p-1\"> Quantità scaricata PD [kg] </th>
                                        <td class=\"bg-light align-middle col-kg-unload\"> ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_unload", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_unload", [], "any", false, false, false, 88), "—")) : ("—")), "html", null, true);
                yield " </td>

                                        <th class=\"align-middle p-1\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] </th>
                                        <td class=\"bg-light align-middle col-liquid-density\"> ";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "liquid_density", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "liquid_density", [], "any", false, false, false, 91), "—")) : ("—")), "html", null, true);
                yield " </td>

                                        <th class=\"align-middle p-1\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> </th>
                                        <td class=\"bg-light align-middle col-gas-weight\"> ";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_weight", [], "any", true, true, false, 94)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_weight", [], "any", false, false, false, 94), "—")) : ("—")), "html", null, true);
                yield " </td>
                                    </tr>
                                            
                                    <tr>
                                        <th class=\"align-middle p-1\"> PCS/GHV <big>[</big><sup>MJ</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                        <td class=\"bg-light align-middle col-mj-kg\"> ";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mj_kg", [], "any", true, true, false, 99)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mj_kg", [], "any", false, false, false, 99), "—")) : ("—")), "html", null, true);
                yield " </td>

                                        <th class=\"align-middle p-1\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                        <td class=\"bg-light align-middle col-pcs-ghv\"> ";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "pcs_ghv", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "pcs_ghv", [], "any", false, false, false, 102), "—")) : ("—")), "html", null, true);
                yield " </td>

                                        <th class=\"align-middle p-1\"> Volume scaricato (liquido) <big>[</big>m<sup>3</sup><big>]</big> </th>
                                        <td class=\"bg-light align-middle col-volume-mc\"> ";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_mc", [], "any", true, true, false, 105)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_mc", [], "any", false, false, false, 105), "—")) : ("—")), "html", null, true);
                yield " </td>

                                        <th class=\"align-middle p-1\"> Volume sviluppato <big>[</big><sup>Nm<sup>3</sup></sup>&frasl;<sub>m<sup>3</sup></sub><big>]</big> </th>
                                        <td class=\"bg-light align-middle col-volume-nmc\"> ";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_nmc", [], "any", true, true, false, 108)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_nmc", [], "any", false, false, false, 108), "—")) : ("—")), "html", null, true);
                yield " </td> 
                                    </tr>
                                            
                                    <tr>
                                        <th class=\"align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>m<sup>3</sup></sub> </th>
                                        <td class=\"bg-light align-middle col-smc-mc\"> ";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_mc", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_mc", [], "any", false, false, false, 113), "—")) : ("—")), "html", null, true);
                yield " </td> 

                                        <th class=\"align-middle p-1\"> Gas sviluppato <big>[</big>Nm<sup>3</sup><big>]</big> </th>
                                        <td class=\"bg-light align-middle col-gas-nmc\"> ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_nmc", [], "any", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_nmc", [], "any", false, false, false, 116), "—")) : ("—")), "html", null, true);
                yield " </td>   

                                        <th class=\"align-middle p-1\"> Gas sviluppato <big>[</big>Sm<sup>3</sup></sup><big>]</big> </th>
                                        <td class=\"bg-light align-middle col-gas-smc\"> ";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_smc", [], "any", true, true, false, 119)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_smc", [], "any", false, false, false, 119), "—")) : ("—")), "html", null, true);
                yield " </td>   

                                        <th class=\"align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>kg</sub> </th>
                                        <td class=\"bg-light align-middle col-smc-kg\"> ";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_kg", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_kg", [], "any", false, false, false, 122), "—")) : ("—")), "html", null, true);
                yield " </td>  
                                    </tr>
                                </tbody>
                            </table>
                            ";
                // line 127
                yield "
                            ";
                // line 129
                yield "                            <div class=\"collapse-platform\" id=\"qty-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 129), "html", null, true);
                yield "\">
                                <h4 class=\"mx-auto my-3 text-center\"> 
                                    <span class=\"btn my-auto collapse-title edit-data\" style=\"cursor: default\">
                                        Scarichi parziali:
                                    </span>
                                </h4>
                                            
                                <table class=\"table table-bordered table-light mb-1 partial-table\" id=\"partial-table-";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 136), "html", null, true);
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
                // line 151
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["partials"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 151), [], "array", true, true, false, 151)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["partials"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 151)] ?? null) : null), [])) : ([])));
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
                    // line 152
                    yield "                                            <tr class=\"bg-light bg-gradient\">
                                                <td scope=\"row\" class=\"align-middle p-1\"> 
                                                    ";
                    // line 154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 154), "html", null, true);
                    yield "
                                                </td>         
                                                <td class=\"align-middle p-1 col-destination\" id=\"dest\"> ";
                    // line 156
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "destination", [], "any", false, false, false, 156)), "html", null, true);
                    yield " </td>                                   
                                                <td class=\"align-middle p-1 col-exw\" id=\"exw\"> ";
                    // line 157
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "exw", [], "any", false, false, false, 157)), "html", null, true);
                    yield " </td>  
                                                <td class=\"align-middle p-1 col-date\" id=\"date\"> ";
                    // line 158
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "date", [], "any", false, false, false, 158), "d/m/Y"), "html", null, true);
                    yield " </td>                   
                                                <td class=\"align-middle p-1 col-place\" id=\"place\"> ";
                    // line 159
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "place", [], "any", false, false, false, 159)), "html", null, true);
                    yield " </td>
                                                <td class=\"align-middle p-1 col-q-unloaded\" id=\"qty\"> ";
                    // line 160
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "q_unloaded", [], "any", false, false, false, 160), "html", null, true);
                    yield " </td>
                                                <td class=\"align-middle p-1 col-invoice\" id=\"invoice\"> ";
                    // line 161
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "invoice", [], "any", false, false, false, 161), "html", null, true);
                    yield " </td>
                                                <td class=\"align-middle m-auto btns\"> 
                                                    ";
                    // line 163
                    if (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 163) == "admin") || (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 163) == CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_user", [], "any", false, false, false, 163)))) {
                        // line 164
                        yield "                                                        <button type=\"button\" class=\"edit-data edit-part\" data-bs-toggle=\"modal\" data-bs-target=\"#editPart-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id_partial", [], "any", false, false, false, 164), "html", null, true);
                        yield "\" 
                                                            data-id=\"";
                        // line 165
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id_partial", [], "any", false, false, false, 165), "html", null, true);
                        yield "\">
                                                                <i class=\"bi bi-pencil-square\"></i>
                                                        </button> 
                                                    ";
                    } else {
                        // line 169
                        yield "                                                        <button type=\"button\" class=\"edit-data\" disabled>
                                                            <i class=\"bi bi-x-octagon\"></i>
                                                        </button>
                                                    ";
                    }
                    // line 173
                    yield "                                                    
                                                    ";
                    // line 174
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 174) == "admin")) {
                        // line 175
                        yield "                                                        <button type=\"button\" class=\"edit-data delete-data\" data-bs-toggle=\"modal\" data-bs-target=\"#deletePart-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id_partial", [], "any", false, false, false, 175), "html", null, true);
                        yield "\"
                                                            data-id=\"";
                        // line 176
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id_partial", [], "any", false, false, false, 176), "html", null, true);
                        yield "\">
                                                                <i class=\"bi bi-trash\"></i> 
                                                        </button>     
                                                    ";
                    }
                    // line 179
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
                // line 183
                yield "                                    </tbody>
                    </table>
                    ";
                // line 185
                yield "    

                    ";
                // line 188
                yield "                    <div class=\"container-fluid table-group-divider table-light\">
                        <h4 class=\"mx-auto my-3 text-center\"> 
                            <button type=\"button\" class=\"btn my-auto edit-data updateNote\" data-bs-toggle=\"modal\" 
                                    data-bs-target=\"#editNoteModal\" data-id=\"";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 191), "html", null, true);
                yield "\">   
                                <i class=\"bi bi-pencil-square mx-1\"></i> 
                                    <span class=\"collapse-title\">
                                        Nota:
                                    </span>   
                            </button> 
                        </h4>
                    </div>
                    ";
                // line 200
                yield "                </td> 
            </tr>
            ";
                // line 203
                yield "        ";
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
            yield "  
    ";
        }
        // line 204
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "transports-part-ajax.twig";
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
        return array (  508 => 204,  491 => 203,  487 => 200,  476 => 191,  471 => 188,  467 => 185,  463 => 183,  446 => 179,  439 => 176,  434 => 175,  432 => 174,  429 => 173,  423 => 169,  416 => 165,  411 => 164,  409 => 163,  404 => 161,  400 => 160,  396 => 159,  392 => 158,  388 => 157,  384 => 156,  379 => 154,  375 => 152,  358 => 151,  340 => 136,  329 => 129,  326 => 127,  319 => 122,  313 => 119,  307 => 116,  301 => 113,  293 => 108,  287 => 105,  281 => 102,  275 => 99,  267 => 94,  261 => 91,  255 => 88,  249 => 85,  241 => 80,  235 => 77,  229 => 74,  223 => 71,  216 => 67,  212 => 65,  206 => 61,  196 => 54,  193 => 53,  191 => 52,  188 => 51,  182 => 48,  179 => 46,  175 => 43,  166 => 39,  163 => 38,  161 => 37,  158 => 36,  151 => 31,  144 => 28,  141 => 27,  139 => 26,  134 => 24,  128 => 23,  124 => 22,  120 => 21,  116 => 20,  112 => 19,  108 => 18,  104 => 17,  100 => 16,  96 => 15,  92 => 14,  88 => 13,  81 => 9,  77 => 8,  73 => 7,  67 => 5,  65 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
    {% if transports is not empty %}
        {% for t in transports %}
            {# Transport Data #}
            <tr class=\"align-middle expand\" id=\"id-{{ t.id_transport }}\">
                <td scope=\"row\">
                    {{ loop.index + ((page - 1) * limit) }} <br>
                        <button data-bs-toggle=\"collapse\" data-bs-target=\"#qty-{{ t.id_transport }}\" class=\"accordion-toggle\"
                                aria-expanded=\"false\" aria-controls=\"qty-{{ t.id_transport }}\" aria-label=\"Expand quantities\">
                            <i class=\"bi bi-arrows-expand\"></i>
                        </button> 
                </td>
                <td class=\"align-middle p-2 search word-wrap-container col-slot\"> {{ t.slot|upper }} </td>
                <td class=\"align-middle p-2 search word-wrap-container col-cmr\"> {{ t.cmr|upper }} </td>
                <td class=\"align-middle p-1 search col-issuer\"> {{ t.issuer|upper }} </td>
                <td class=\"align-middle p-1 search col-supplier\"> {{ t.supplier|upper }} </td>
                <td class=\"align-middle p-1 search col-transport\"> {{ t.transport|upper }} </td>
                <td class=\"align-middle p-1 col-univoco\"> {{ t.univoco|upper }} </td>
                <td class=\"align-middle p-1 col-load\"> {{ t.date_load|date(\"d/m/Y\") }} </td>
                <td class=\"align-middle p-1 col-unload\"> {{ t.date_unload|date(\"d/m/Y\") }} </td>
                <td class=\"align-middle p-0 col-month-load\"> {{ t.id_month_load }} </td>
                <td class=\"align-middle p-0 col-week-unload\"> {{ t.week_unload }} </td>
                <td class=\"align-middle p-1 col-month-unload\"> {{ t.id_month_unload }} - {{ t.month_unload|capitalize }} </td>
                <td class=\"align-middle p-1 col-container\"> {{ t.container|upper }} </td>
                <td class=\"align-middle p-1 btns\">   
                    {% if (user.role == 'admin') or (user.id_user == t.id_user) %}
                        <button type=\"button\" class=\"edit-data edited updateTrans\" data-bs-toggle=\"modal\" data-bs-target=\"#editTransModal\"
                                data-id=\"{{ t.id_transport }}\">
                            <i class=\"bi bi-pencil-square\" title=\"Modifica\"></i>
                        </button>
                    {% else %}    
                        <button type=\"button\" class=\"edit-data\" disabled>
                            <i class=\"bi bi-x-octagon\"></i>
                        </button>
                    {% endif %}
                                
                    {% if (user.role == 'admin') %}
                        <button type=\"button\" class=\"edit-data deleteTrans\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteTransModal\"
                                data-id=\"{{ t.id_transport }}\" data-slot=\"{{ t.slot }}\">
                            <i class=\"bi bi-trash\" title=\"Elimina\"></i> 
                        </button>  
                    {% endif %}
                </td>
            </tr>
            {# End Transport Data #}

            {# Collapse Transport's Quantity + Partials + Note #}
            <tr class=\"collapse accordion-body collapse-platform\" id=\"qty-{{ t.id_transport }}\">        
                <td colspan=\"14\" class=\"border-0\">
                    {# Quantity Data #}
                    <h4 class=\"mx-auto my-3\"> 
                        {% if (user.role == 'admin') or (user.id_user == t.id_user) %}
                            <button type=\"button\" class=\"btn my-auto edit-data updateQty\" data-bs-toggle=\"modal\" 
                                    data-bs-target=\"#editQtyModal\" data-id=\"{{ t.id_transport }}\">   
                                <i class=\"bi bi-pencil-square mx-1\"></i> 
                                    <span class=\"collapse-title\">
                                        Quantità:
                                    </span>   
                            </button> 
                        {% else %}
                            <span class=\"btn my-auto collapse-title edit-data updateQty\" style=\"cursor: default\">
                                Quantità:
                            </span>
                        {% endif %}
                    </h4>

                    <table class=\"table table-bordered table-light mb-1\" id=\"qty-table-{{ t.id_transport }}\">
                                <tbody>    
                                    <tr>
                                        <th class=\"align-middle p-1\"> Energia caricata [MWh] </th>
                                        <td class=\"bg-light align-middle col-mwh\"> {{ t.mwh|default('—') }} </td>   

                                        <th class=\"align-middle p-1\"> Quantità nominale caricata [kg] </th>
                                        <td class=\"bg-light align-middle col-kg-load\"> {{ t.kg_load|default('—') }} </td>   

                                        <th class=\"align-middle p-1\"> Raffreddamento </th>            
                                        <td class=\"bg-light align-middle col-cooling\"> {{ t.cooling == 600 ? '600' : 'No' }} </td>

                                        <th class=\"align-middle p-1\"> Tipologia costo extra </th>            
                                        <td class=\"bg-light align-middle col-price-typology\"> {{ t.price_typology == 'yes' ? 'Sì' : 'No' }} </td>   
                                    </tr>
                                    
                                    <tr>
                                        <th class=\"align-middle p-1\"> Valore costo extra </th>
                                        <td class=\"bg-light align-middle col-price-value\"> {{ t.price_value|default('—') }} </td>

                                        <th class=\"align-middle p-1\"> Quantità scaricata PD [kg] </th>
                                        <td class=\"bg-light align-middle col-kg-unload\"> {{ t.kg_unload|default('—') }} </td>

                                        <th class=\"align-middle p-1\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] </th>
                                        <td class=\"bg-light align-middle col-liquid-density\"> {{ t.liquid_density|default('—') }} </td>

                                        <th class=\"align-middle p-1\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> </th>
                                        <td class=\"bg-light align-middle col-gas-weight\"> {{ t.gas_weight|default('—') }} </td>
                                    </tr>
                                            
                                    <tr>
                                        <th class=\"align-middle p-1\"> PCS/GHV <big>[</big><sup>MJ</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                        <td class=\"bg-light align-middle col-mj-kg\"> {{ t.mj_kg|default('—') }} </td>

                                        <th class=\"align-middle p-1\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                        <td class=\"bg-light align-middle col-pcs-ghv\"> {{ t.pcs_ghv|default('—') }} </td>

                                        <th class=\"align-middle p-1\"> Volume scaricato (liquido) <big>[</big>m<sup>3</sup><big>]</big> </th>
                                        <td class=\"bg-light align-middle col-volume-mc\"> {{ t.volume_mc|default('—') }} </td>

                                        <th class=\"align-middle p-1\"> Volume sviluppato <big>[</big><sup>Nm<sup>3</sup></sup>&frasl;<sub>m<sup>3</sup></sub><big>]</big> </th>
                                        <td class=\"bg-light align-middle col-volume-nmc\"> {{ t.volume_nmc|default('—') }} </td> 
                                    </tr>
                                            
                                    <tr>
                                        <th class=\"align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>m<sup>3</sup></sub> </th>
                                        <td class=\"bg-light align-middle col-smc-mc\"> {{ t.smc_mc|default('—') }} </td> 

                                        <th class=\"align-middle p-1\"> Gas sviluppato <big>[</big>Nm<sup>3</sup><big>]</big> </th>
                                        <td class=\"bg-light align-middle col-gas-nmc\"> {{ t.gas_nmc|default('—') }} </td>   

                                        <th class=\"align-middle p-1\"> Gas sviluppato <big>[</big>Sm<sup>3</sup></sup><big>]</big> </th>
                                        <td class=\"bg-light align-middle col-gas-smc\"> {{ t.gas_smc|default('—') }} </td>   

                                        <th class=\"align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>kg</sub> </th>
                                        <td class=\"bg-light align-middle col-smc-kg\"> {{ t.smc_kg|default('—') }} </td>  
                                    </tr>
                                </tbody>
                            </table>
                            {# END Quantity Data #}

                            {# Partial Data #}
                            <div class=\"collapse-platform\" id=\"qty-{{ t.id_transport }}\">
                                <h4 class=\"mx-auto my-3 text-center\"> 
                                    <span class=\"btn my-auto collapse-title edit-data\" style=\"cursor: default\">
                                        Scarichi parziali:
                                    </span>
                                </h4>
                                            
                                <table class=\"table table-bordered table-light mb-1 partial-table\" id=\"partial-table-{{ t.id_transport }}\">
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
                                        {% for p in partials[t.id_transport]|default([]) %}
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
                    {# END Partial Data #}    

                    {# Notes #}
                    <div class=\"container-fluid table-group-divider table-light\">
                        <h4 class=\"mx-auto my-3 text-center\"> 
                            <button type=\"button\" class=\"btn my-auto edit-data updateNote\" data-bs-toggle=\"modal\" 
                                    data-bs-target=\"#editNoteModal\" data-id=\"{{ t.id_transport }}\">   
                                <i class=\"bi bi-pencil-square mx-1\"></i> 
                                    <span class=\"collapse-title\">
                                        Nota:
                                    </span>   
                            </button> 
                        </h4>
                    </div>
                    {# END Notes #}
                </td> 
            </tr>
            {# END Collapse Transport's Quantity + Partials + Note #}
        {% endfor %}  
    {% endif %}    ", "transports-part-ajax.twig", "C:\\wamp64\\www\\liquimet\\templates\\transports-part-ajax.twig");
    }
}
