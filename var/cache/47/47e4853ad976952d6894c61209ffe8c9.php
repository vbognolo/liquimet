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

/* transports-ajax.twig */
class __TwigTemplate_89cd06a319c3085e98affa7b7a73aa62 extends Template
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
            'jquery' => [$this, 'block_jquery'],
            'page_script' => [$this, 'block_page_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["transports"] ?? null))) {
            // line 3
            yield "    ";
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
                yield "        <tr id=\"id-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 5), "html", null, true);
                yield "\" class=\"align-middle expand ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "type", [], "any", false, false, false, 5) == "P")) {
                    yield "table-warning";
                } else {
                    yield "table-light";
                }
                yield "\">
            <td style=\"width: 50px\" scope=\"row\">
                ";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($context["page"] ?? null) - 1) * ($context["limit"] ?? null)) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 7)), "html", null, true);
                yield " <br>
                    <button data-bs-toggle=\"collapse\" data-bs-target=\"#qty-";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 8), "html", null, true);
                yield "\"
                            aria-expanded=\"false\" aria-controls=\"qty-";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 9), "html", null, true);
                yield "\" aria-label=\"Expand quantities\">
                        <i class=\"bi bi-arrows-expand\"></i>
                    </button> 
            </td>
            ";
                // line 13
                if (($context["show_type"] ?? null)) {
                    // line 14
                    yield "                <td style=\"width: 50px\" class=\"align-middle p-2\"> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "type", [], "any", false, false, false, 14)), "html", null, true);
                    yield " </td>
            ";
                }
                // line 16
                yield "            <td style=\"width: 350px\" class=\"align-middle p-2 search word-wrap-container col-slot\"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "slot", [], "any", false, false, false, 16)), "html", null, true);
                yield " </td>
            <td style=\"width: 250px\" class=\"align-middle p-2 search word-wrap-container col-cmr\"> ";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "cmr", [], "any", false, false, false, 17)), "html", null, true);
                yield " </td>
            <td style=\"width: 150px\" class=\"align-middle p-1 search col-issuer\"> ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "issuer", [], "any", false, false, false, 18)), "html", null, true);
                yield " </td>
            <td style=\"width: 150px\" class=\"align-middle p-1 search col-supplier\"> ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "supplier", [], "any", false, false, false, 19)), "html", null, true);
                yield " </td>
            <td style=\"width: 100px\" class=\"align-middle p-1 search col-transport\"> ";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "transport", [], "any", false, false, false, 20)), "html", null, true);
                yield " </td>
            <td style=\"width: 180px\" class=\"align-middle p-1 col-univoco\"> ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "univoco", [], "any", false, false, false, 21)), "html", null, true);
                yield " </td>
            <td style=\"width: 120px\" class=\"align-middle p-1 col-load\"> ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "date_load", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
                yield " </td>
            <td style=\"width: 120px\" class=\"align-middle p-1 col-unload\"> ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "date_unload", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
                yield " </td>
            <td style=\"width: 90px\" class=\"align-middle p-0 col-month-load\"> ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_month_load", [], "any", false, false, false, 24), "html", null, true);
                yield " </td>
            <td style=\"width: 120px\" class=\"align-middle p-0 col-week-unload\"> ";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "week_unload", [], "any", false, false, false, 25), "html", null, true);
                yield " </td>
            <td style=\"width: 130px\" class=\"align-middle p-1 col-month-unload\"> ";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_month_unload", [], "any", false, false, false, 26), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "month_unload", [], "any", false, false, false, 26)), "html", null, true);
                yield " </td>
            <td style=\"width: 160px\" class=\"align-middle p-1 col-container\"> ";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "container", [], "any", false, false, false, 27)), "html", null, true);
                yield " </td>
            <td style=\"width: 80px\" class=\"align-middle p-1 btns\">   
            ";
                // line 29
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 29) == "admin") || (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id_user", [], "any", false, false, false, 29) == CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_user", [], "any", false, false, false, 29)))) {
                    // line 30
                    yield "                <button type=\"button\" class=\"edit-data edited updateTrans\" data-bs-toggle=\"modal\" data-bs-target=\"#editTransModal\"
                        data-id=\"";
                    // line 31
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 31), "html", null, true);
                    yield "\">
                            <i class=\"bi bi-pencil-square\" title=\"Modifica\"></i>
                </button>
            ";
                } else {
                    // line 34
                    yield "    
                <button type=\"button\" class=\"edit-data\" disabled>
                    <i class=\"bi bi-x-octagon\"></i>
                </button>
            ";
                }
                // line 39
                yield "                                
            ";
                // line 40
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 40) == "admin")) {
                    // line 41
                    yield "                <button type=\"button\" class=\"edit-data deleteTrans\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteTransModal\"
                        data-id=\"";
                    // line 42
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 42), "html", null, true);
                    yield "\" data-slot=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "slot", [], "any", false, false, false, 42), "html", null, true);
                    yield "\">
                            <i class=\"bi bi-trash\" title=\"Elimina\"></i> 
                </button>  
            ";
                }
                // line 46
                yield "            </td>
        </tr>

            ";
                // line 50
                yield "        <tr class=\"collapse bg-white accordion-collapse collapse-platform\" id=\"qty-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 50), "html", null, true);
                yield "\">        
            <td colspan=\"16\" class=\"border-0\">
                <h4 class=\"mx-auto my-3 text-center\"> 
                ";
                // line 53
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 53) == "admin") || (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id_user", [], "any", false, false, false, 53) == CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_user", [], "any", false, false, false, 53)))) {
                    // line 54
                    yield "                    <button type=\"button\" class=\"btn my-auto edit-data updateQty\" data-bs-toggle=\"modal\" 
                            data-bs-target=\"#editQtyModal\" data-id=\"";
                    // line 55
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 55), "html", null, true);
                    yield "\">   
                                <i class=\"bi bi-pencil-square mx-1\"></i> 
                                    <span class=\"collapse-title\">
                                        Quantità:
                                    </span>   
                    </button> 
                ";
                } else {
                    // line 62
                    yield "                    <span class=\"btn my-auto collapse-title edit-data updateQty\" style=\"cursor: default\">
                        Quantità:
                    </span>
                ";
                }
                // line 66
                yield "                </h4>

                <table class=\"table table-bordered table-light mb-1\" id=\"qty-table-";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 68), "html", null, true);
                yield "\">
                    <tbody>    
                        <tr>
                            <th class=\"align-middle p-1\"> Energia caricata [MWh] </th>
                            <td class=\"bg-light align-middle col-mwh\"> ";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mwh", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mwh", [], "any", false, false, false, 72), "—")) : ("—")), "html", null, true);
                yield " </td>   

                            <th class=\"align-middle p-1\"> Quantità nominale caricata [kg] </th>
                            <td class=\"align-middle col-kg-load\"> ";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_load", [], "any", true, true, false, 75)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_load", [], "any", false, false, false, 75), "—")) : ("—")), "html", null, true);
                yield " </td>   

                            <th class=\"align-middle p-1\"> Raffreddamento </th>            
                            <td class=\"align-middle col-cooling\"> ";
                // line 78
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "cooling", [], "any", false, false, false, 78) == 600)) ? ("600") : ("No"));
                yield " </td>

                            <th class=\"align-middle p-1\"> Tipologia costo extra </th>            
                            <td class=\"align-middle col-price-typology\"> ";
                // line 81
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_typology", [], "any", false, false, false, 81) == "yes")) ? ("Sì") : ("No"));
                yield " </td>   
                        </tr>
                                    
                        <tr>
                            <th class=\"align-middle p-1\"> Valore costo extra </th>
                            <td class=\"bg-light align-middle col-price-value\"> ";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_value", [], "any", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_value", [], "any", false, false, false, 86), "—")) : ("—")), "html", null, true);
                yield " </td>

                            <th class=\"align-middle p-1\"> Quantità scaricata PD [kg] </th>
                            <td class=\"bg-light align-middle col-kg-unload\"> ";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_unload", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_unload", [], "any", false, false, false, 89), "—")) : ("—")), "html", null, true);
                yield " </td>

                            <th class=\"align-middle p-1\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] </th>
                            <td class=\"bg-light align-middle col-liquid-density\"> ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "liquid_density", [], "any", true, true, false, 92)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "liquid_density", [], "any", false, false, false, 92), "—")) : ("—")), "html", null, true);
                yield " </td>

                            <th class=\"align-middle p-1\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> </th>
                            <td class=\"bg-light align-middle col-gas-weight\"> ";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_weight", [], "any", true, true, false, 95)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_weight", [], "any", false, false, false, 95), "—")) : ("—")), "html", null, true);
                yield " </td>
                        </tr>
                                            
                        <tr>
                            <th class=\"align-middle p-1\"> PCS/GHV <big>[</big><sup>MJ</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                            <td class=\"bg-light align-middle col-mj-kg\"> ";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mj_kg", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mj_kg", [], "any", false, false, false, 100), "—")) : ("—")), "html", null, true);
                yield " </td>

                            <th class=\"align-middle p-1\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                            <td class=\"bg-light align-middle col-pcs-ghv\"> ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "pcs_ghv", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "pcs_ghv", [], "any", false, false, false, 103), "—")) : ("—")), "html", null, true);
                yield " </td>

                            <th class=\"align-middle p-1\"> Volume scaricato (liquido) <big>[</big>m<sup>3</sup><big>]</big> </th>
                            <td class=\"bg-light align-middle col-volume-mc\"> ";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_mc", [], "any", true, true, false, 106)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_mc", [], "any", false, false, false, 106), "—")) : ("—")), "html", null, true);
                yield " </td>

                            <th class=\"align-middle p-1\"> Volume sviluppato <big>[</big><sup>Nm<sup>3</sup></sup>&frasl;<sub>m<sup>3</sup></sub><big>]</big> </th>
                            <td class=\"bg-light align-middle col-volume-nmc\"> ";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_nmc", [], "any", true, true, false, 109)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_nmc", [], "any", false, false, false, 109), "—")) : ("—")), "html", null, true);
                yield " </td> 
                        </tr>
                                            
                        <tr>
                            <th class=\"align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>m<sup>3</sup></sub> </th>
                            <td class=\"bg-light align-middle col-smc-mc\"> ";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_mc", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_mc", [], "any", false, false, false, 114), "—")) : ("—")), "html", null, true);
                yield " </td> 

                            <th class=\"align-middle p-1\"> Gas sviluppato <big>[</big>Nm<sup>3</sup><big>]</big> </th>
                            <td class=\"bg-light align-middle col-gas-nmc\"> ";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_nmc", [], "any", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_nmc", [], "any", false, false, false, 117), "—")) : ("—")), "html", null, true);
                yield " </td>   

                            <th class=\"align-middle p-1\"> Gas sviluppato <big>[</big>Sm<sup>3</sup></sup><big>]</big> </th>
                            <td class=\"bg-light align-middle col-gas-smc\"> ";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_smc", [], "any", true, true, false, 120)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_smc", [], "any", false, false, false, 120), "—")) : ("—")), "html", null, true);
                yield " </td>   

                            <th class=\"align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>kg</sub> </th>
                            <td class=\"bg-light align-middle col-smc-kg\"> ";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_kg", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_kg", [], "any", false, false, false, 123), "—")) : ("—")), "html", null, true);
                yield " </td>  
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>

        ";
                // line 130
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "type", [], "any", false, false, false, 130) == "P")) {
                    // line 131
                    yield "            ";
                    // line 132
                    yield "        <tr class=\"collapse bg-white accordion-collapse collapse-platform\" id=\"qty-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 132), "html", null, true);
                    yield "\">        
            ";
                    // line 133
                    yield from $this->loadTemplate("partials.twig", "transports-ajax.twig", 133)->unwrap()->yield(CoreExtension::toArray(["partials" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 134
($context["partials"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 134), [], "array", true, true, false, 134)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["partials"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 134)] ?? null) : null), [])) : ([])), "t" =>                     // line 135
$context["t"]]));
                    // line 137
                    yield "        </tr>
        ";
                }
                // line 139
                yield "    ";
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
        }
        // line 141
        yield "
";
        // line 142
        yield from $this->unwrap()->yieldBlock('jquery', $context, $blocks);
        // line 158
        yield "
";
        // line 165
        yield "
";
        // line 166
        yield from $this->unwrap()->yieldBlock('page_script', $context, $blocks);
        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_jquery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 143
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 148
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha256-umbTaFxP31Fv6O1itpLS/3+v5fOAWDLOUzlmvOGaKV4=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 153
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha256-MtEA819Zls6dtLt5S5BpEMOhifPyz7gfzfgtNtY75lE=\" 
        crossorigin=\"anonymous\">
</script>
";
        yield from [];
    }

    // line 166
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 167
        yield "<script>
\$(document).ready(function () {
/***  Pagination setup  ***/
    \$(document).on('click', '.transport-page', function(e) {
        e.preventDefault();
        const page = \$(this).data('page');
        const csrfToken = \$('input[name=\"csrf_token\"]').val();

        \$.ajax({
            type: 'POST',
            url: 'pagination', 
            dataType: 'json',
            data: {
                csrf_token: csrfToken,
                page: page,
                show_type: true
            },
            success: function (response) {
                if (response.success) {
                    \$('#transport-tbody').html(response.tbody);
                    \$('#transport-tfoot').html(response.pagination);
                }
            },
            error: function () {
                alert('Errore nel caricamento della pagina.');
            }
        });

        // avoid multiple fast clicks by disabling temporarily
        if (\$(this).parent().hasClass('disabled') || \$(this).parent().hasClass('active')) {
            return;
        }

        // scroll to table after page load starts
        \$('html, body').animate({ scrollTop: \$('#transport-table').offset().top }, 300);
    });

//  Quantity edit button, open modal with populated quantity's data
    \$(document).on('click', '.updateQty', function () {
        const id = \$(this).data('id');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$.post('get-quantity', { action: 'getQuantityData', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success) {
                const quantity = response.quantity;

                    \$('#editQtyModal #id_transport').val(quantity.id_transport);
                    \$('#editQtyModal #id_quantity').val(quantity.id_quantity);
                    \$('#editQtyModal #kg_load').val(quantity.kg_load);
                    \$('#editQtyModal #cooling').val(quantity.cooling);
                    \$('#editQtyModal #price_typology').val(quantity.price_typology);
                    \$('#editQtyModal #price_value').val(quantity.price_value);
                    \$('#editQtyModal #kg_unload').val(quantity.kg_unload);
                    \$('#editQtyModal #liquid_density').val(quantity.liquid_density);
                    \$('#editQtyModal #gas_weight').val(quantity.gas_weight);
                    \$('#editQtyModal #pcs_ghv').val(quantity.pcs_ghv);

                    \$('#editQtyModal').modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });

//  Delete transport button
    \$(document).on('click', '.deleteTrans', function () {
        const id = \$(this).data('id');
        const slot = \$(this).data('slot');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$(\"#deleteTransModal #id_transport\").val(id);
        \$(\"#deleteTransModal #slot-placeholder\").text(slot);
    });

//  Note edit button
    \$('.notes').each(function () {
        const container = \$(this);
        const id = container.data('ids');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$.post('get-note', { action: 'getTransportNotes', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success && response.notes.length > 0) {
                let html = '';
                response.notes.forEach(n => {
                    html += `<span class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" title=\"Scritto da \${n.author} il \${n.created}\">
                                \${n.content}
                            </span> <br>`;
                });
                container.html(html);
                container.find('[data-bs-toggle=\"tooltip\"]').tooltip();
            } else {
                container.html('<div class=\"text-muted\">Nessuna nota.</div>');
            }
        }, 'json');
    });

//  Notes edit button, open modal with populated quantity's data
    \$(document).on('click', '.updateNote', function () {
        const id = \$(this).data('id');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$.post('get-note', { action: 'getTransportNotes', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success) {
                const notes = response.notes;

                \$('#editNoteModal #id_transport').val(id);
                \$('#editNoteModal #id_note').val(notes.id_note);
                \$('#editNoteModal #note').val(notes.map(n => n.content).join(' '));

                \$('#editNoteModal').modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "transports-ajax.twig";
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
        return array (  422 => 167,  415 => 166,  406 => 153,  400 => 148,  394 => 143,  387 => 142,  382 => 166,  379 => 165,  376 => 158,  374 => 142,  371 => 141,  356 => 139,  352 => 137,  350 => 135,  349 => 134,  348 => 133,  343 => 132,  341 => 131,  339 => 130,  329 => 123,  323 => 120,  317 => 117,  311 => 114,  303 => 109,  297 => 106,  291 => 103,  285 => 100,  277 => 95,  271 => 92,  265 => 89,  259 => 86,  251 => 81,  245 => 78,  239 => 75,  233 => 72,  226 => 68,  222 => 66,  216 => 62,  206 => 55,  203 => 54,  201 => 53,  194 => 50,  189 => 46,  180 => 42,  177 => 41,  175 => 40,  172 => 39,  165 => 34,  158 => 31,  155 => 30,  153 => 29,  148 => 27,  142 => 26,  138 => 25,  134 => 24,  130 => 23,  126 => 22,  122 => 21,  118 => 20,  114 => 19,  110 => 18,  106 => 17,  101 => 16,  95 => 14,  93 => 13,  86 => 9,  82 => 8,  78 => 7,  66 => 5,  64 => 4,  46 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Table Body #}
{% if transports is not empty %}
    {% for t in transports %}
            {# Transports Data #}
        <tr id=\"id-{{ t.id_transport }}\" class=\"align-middle expand {% if t.type == 'P' %}table-warning{% else %}table-light{% endif %}\">
            <td style=\"width: 50px\" scope=\"row\">
                {{ ((page - 1) * limit) + loop.index }} <br>
                    <button data-bs-toggle=\"collapse\" data-bs-target=\"#qty-{{ t.id_transport }}\"
                            aria-expanded=\"false\" aria-controls=\"qty-{{ t.id_transport }}\" aria-label=\"Expand quantities\">
                        <i class=\"bi bi-arrows-expand\"></i>
                    </button> 
            </td>
            {% if show_type %}
                <td style=\"width: 50px\" class=\"align-middle p-2\"> {{ t.type|upper }} </td>
            {% endif %}
            <td style=\"width: 350px\" class=\"align-middle p-2 search word-wrap-container col-slot\"> {{ t.slot|upper }} </td>
            <td style=\"width: 250px\" class=\"align-middle p-2 search word-wrap-container col-cmr\"> {{ t.cmr|upper }} </td>
            <td style=\"width: 150px\" class=\"align-middle p-1 search col-issuer\"> {{ t.issuer|upper }} </td>
            <td style=\"width: 150px\" class=\"align-middle p-1 search col-supplier\"> {{ t.supplier|upper }} </td>
            <td style=\"width: 100px\" class=\"align-middle p-1 search col-transport\"> {{ t.transport|upper }} </td>
            <td style=\"width: 180px\" class=\"align-middle p-1 col-univoco\"> {{ t.univoco|upper }} </td>
            <td style=\"width: 120px\" class=\"align-middle p-1 col-load\"> {{ t.date_load|date(\"d/m/Y\") }} </td>
            <td style=\"width: 120px\" class=\"align-middle p-1 col-unload\"> {{ t.date_unload|date(\"d/m/Y\") }} </td>
            <td style=\"width: 90px\" class=\"align-middle p-0 col-month-load\"> {{ t.id_month_load }} </td>
            <td style=\"width: 120px\" class=\"align-middle p-0 col-week-unload\"> {{ t.week_unload }} </td>
            <td style=\"width: 130px\" class=\"align-middle p-1 col-month-unload\"> {{ t.id_month_unload }} - {{ t.month_unload|capitalize }} </td>
            <td style=\"width: 160px\" class=\"align-middle p-1 col-container\"> {{ t.container|upper }} </td>
            <td style=\"width: 80px\" class=\"align-middle p-1 btns\">   
            {% if (session.role == 'admin') or (session.id_user == t.id_user) %}
                <button type=\"button\" class=\"edit-data edited updateTrans\" data-bs-toggle=\"modal\" data-bs-target=\"#editTransModal\"
                        data-id=\"{{ t.id_transport }}\">
                            <i class=\"bi bi-pencil-square\" title=\"Modifica\"></i>
                </button>
            {% else %}    
                <button type=\"button\" class=\"edit-data\" disabled>
                    <i class=\"bi bi-x-octagon\"></i>
                </button>
            {% endif %}
                                
            {% if (session.role == 'admin') %}
                <button type=\"button\" class=\"edit-data deleteTrans\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteTransModal\"
                        data-id=\"{{ t.id_transport }}\" data-slot=\"{{ t.slot }}\">
                            <i class=\"bi bi-trash\" title=\"Elimina\"></i> 
                </button>  
            {% endif %}
            </td>
        </tr>

            {# Quantities Data #}
        <tr class=\"collapse bg-white accordion-collapse collapse-platform\" id=\"qty-{{ t.id_transport }}\">        
            <td colspan=\"16\" class=\"border-0\">
                <h4 class=\"mx-auto my-3 text-center\"> 
                {% if (session.role == 'admin') or (session.id_user == t.id_user) %}
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
                            <td class=\"align-middle col-kg-load\"> {{ t.kg_load|default('—') }} </td>   

                            <th class=\"align-middle p-1\"> Raffreddamento </th>            
                            <td class=\"align-middle col-cooling\"> {{ t.cooling == 600 ? '600' : 'No' }} </td>

                            <th class=\"align-middle p-1\"> Tipologia costo extra </th>            
                            <td class=\"align-middle col-price-typology\"> {{ t.price_typology == 'yes'? 'Sì' : 'No' }} </td>   
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
            </td>
        </tr>

        {% if t.type == 'P' %}
            {# Partials Data #}
        <tr class=\"collapse bg-white accordion-collapse collapse-platform\" id=\"qty-{{ t.id_transport }}\">        
            {% include 'partials.twig' with {
                partials: partials[t.id_transport]|default([]),
                t: t
            } only %}
        </tr>
        {% endif %}
    {% endfor %}
{% endif %}

{% block jquery %}
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    {# JQuery Validation #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha256-umbTaFxP31Fv6O1itpLS/3+v5fOAWDLOUzlmvOGaKV4=\" 
        crossorigin=\"anonymous\">
</script>
    {# JQuery Validation Additional Methods #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha256-MtEA819Zls6dtLt5S5BpEMOhifPyz7gfzfgtNtY75lE=\" 
        crossorigin=\"anonymous\">
</script>
{% endblock %}

{# block datepicker %}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=\" 
        crossorigin=\"anonymous\">
</script>
{% endblock #}

{% block page_script %}
<script>
\$(document).ready(function () {
/***  Pagination setup  ***/
    \$(document).on('click', '.transport-page', function(e) {
        e.preventDefault();
        const page = \$(this).data('page');
        const csrfToken = \$('input[name=\"csrf_token\"]').val();

        \$.ajax({
            type: 'POST',
            url: 'pagination', 
            dataType: 'json',
            data: {
                csrf_token: csrfToken,
                page: page,
                show_type: true
            },
            success: function (response) {
                if (response.success) {
                    \$('#transport-tbody').html(response.tbody);
                    \$('#transport-tfoot').html(response.pagination);
                }
            },
            error: function () {
                alert('Errore nel caricamento della pagina.');
            }
        });

        // avoid multiple fast clicks by disabling temporarily
        if (\$(this).parent().hasClass('disabled') || \$(this).parent().hasClass('active')) {
            return;
        }

        // scroll to table after page load starts
        \$('html, body').animate({ scrollTop: \$('#transport-table').offset().top }, 300);
    });

//  Quantity edit button, open modal with populated quantity's data
    \$(document).on('click', '.updateQty', function () {
        const id = \$(this).data('id');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$.post('get-quantity', { action: 'getQuantityData', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success) {
                const quantity = response.quantity;

                    \$('#editQtyModal #id_transport').val(quantity.id_transport);
                    \$('#editQtyModal #id_quantity').val(quantity.id_quantity);
                    \$('#editQtyModal #kg_load').val(quantity.kg_load);
                    \$('#editQtyModal #cooling').val(quantity.cooling);
                    \$('#editQtyModal #price_typology').val(quantity.price_typology);
                    \$('#editQtyModal #price_value').val(quantity.price_value);
                    \$('#editQtyModal #kg_unload').val(quantity.kg_unload);
                    \$('#editQtyModal #liquid_density').val(quantity.liquid_density);
                    \$('#editQtyModal #gas_weight').val(quantity.gas_weight);
                    \$('#editQtyModal #pcs_ghv').val(quantity.pcs_ghv);

                    \$('#editQtyModal').modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });

//  Delete transport button
    \$(document).on('click', '.deleteTrans', function () {
        const id = \$(this).data('id');
        const slot = \$(this).data('slot');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$(\"#deleteTransModal #id_transport\").val(id);
        \$(\"#deleteTransModal #slot-placeholder\").text(slot);
    });

//  Note edit button
    \$('.notes').each(function () {
        const container = \$(this);
        const id = container.data('ids');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$.post('get-note', { action: 'getTransportNotes', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success && response.notes.length > 0) {
                let html = '';
                response.notes.forEach(n => {
                    html += `<span class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" title=\"Scritto da \${n.author} il \${n.created}\">
                                \${n.content}
                            </span> <br>`;
                });
                container.html(html);
                container.find('[data-bs-toggle=\"tooltip\"]').tooltip();
            } else {
                container.html('<div class=\"text-muted\">Nessuna nota.</div>');
            }
        }, 'json');
    });

//  Notes edit button, open modal with populated quantity's data
    \$(document).on('click', '.updateNote', function () {
        const id = \$(this).data('id');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$.post('get-note', { action: 'getTransportNotes', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success) {
                const notes = response.notes;

                \$('#editNoteModal #id_transport').val(id);
                \$('#editNoteModal #id_note').val(notes.id_note);
                \$('#editNoteModal #note').val(notes.map(n => n.content).join(' '));

                \$('#editNoteModal').modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });
});
</script>
{% endblock %}", "transports-ajax.twig", "C:\\wamp64\\www\\liquimet\\templates\\transports-ajax.twig");
    }
}
