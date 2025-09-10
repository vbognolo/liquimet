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
                    yield "partial-row";
                } else {
                    yield "full-row";
                }
                yield "\">
            <td style=\"width: 50px\" scope=\"row\" class=\"row-loop\">
                <div class=\"d-flex justify-content-between align-items-center h-100\">
                    <div class=\"d-flex flex-column align-items-center\">
                        ";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($context["page"] ?? null) - 1) * ($context["limit"] ?? null)) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 9)), "html", null, true);
                yield " 

                        ";
                // line 11
                if (($context["show_type"] ?? null)) {
                    // line 12
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "type", [], "any", false, false, false, 12) == "F")) {
                        // line 13
                        yield "                                <span class=\"badge bg-info text-dark mt-1\">F</span>
                            ";
                    } else {
                        // line 15
                        yield "                                <span class=\"badge bg-warning text-dark mt-1\">P</span>
                            ";
                    }
                    // line 17
                    yield "                        ";
                }
                // line 18
                yield "                    </div>

                    <button class=\"my-auto ms-2 collapse-btn\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#qty-";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 20), "html", null, true);
                yield "\" 
                            aria-expanded=\"false\" aria-controls=\"qty-";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 21), "html", null, true);
                yield "\" title=\"Espandi\">
                        <i class=\"bi bi-plus-lg icon-plus m-auto\"></i>
                        <i class=\"bi bi-dash-lg icon-minus m-auto\"></i>
                    </button>
                </div>
            </td>
            <td style=\"width: 350px\" class=\"align-middle px-2 search word-wrap-container col-slot\"> ";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "slot", [], "any", false, false, false, 27)), "html", null, true);
                yield " </td>
            <td style=\"width: 250px\" class=\"align-middle px-2 search word-wrap-container col-cmr\"> ";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "cmr", [], "any", false, false, false, 28)), "html", null, true);
                yield " </td>
            <td style=\"width: 150px\" class=\"align-middle px-1 search col-issuer\"> ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "issuer", [], "any", false, false, false, 29)), "html", null, true);
                yield " </td>
            <td style=\"width: 150px\" class=\"align-middle px-1 search col-supplier\"> ";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "supplier", [], "any", false, false, false, 30)), "html", null, true);
                yield " </td>
            <td style=\"width: 100px\" class=\"align-middle px-1 search col-transport\"> ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "transport", [], "any", false, false, false, 31)), "html", null, true);
                yield " </td>
            <td style=\"width: 180px\" class=\"align-middle px-1 col-univoco\"> ";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "univoco", [], "any", false, false, false, 32)), "html", null, true);
                yield " </td>
            <td style=\"width: 120px\" class=\"align-middle px-1 col-load\"> ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "date_load", [], "any", false, false, false, 33), "d/m/Y"), "html", null, true);
                yield " </td>
            <td style=\"width: 120px\" class=\"align-middle px-1 col-unload\"> ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "date_unload", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
                yield " </td>
            <td style=\"width: 100px\" class=\"align-middle px-0 col-month-load\"> ";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_month_load", [], "any", false, false, false, 35), "html", null, true);
                yield " </td>
            <td style=\"width: 100px\" class=\"align-middle px-0 col-week-unload\"> ";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "week_unload", [], "any", false, false, false, 36), "html", null, true);
                yield " </td>
            <td style=\"width: 130px\" class=\"align-middle px-1 col-month-unload\"> ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_month_unload", [], "any", false, false, false, 37), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "month_unload", [], "any", false, false, false, 37)), "html", null, true);
                yield " </td>
            <td style=\"width: 160px\" class=\"align-middle px-1 col-container\"> ";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "container", [], "any", false, false, false, 38)), "html", null, true);
                yield " </td>
            <td style=\"width: 80px\"  class=\"align-middle px-1 btns col-btns\">   
            ";
                // line 40
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 40) == "admin") || (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id_user", [], "any", false, false, false, 40) == CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_user", [], "any", false, false, false, 40)))) {
                    // line 41
                    yield "                <button type=\"button\" class=\"edit-data edited updateTrans\" data-bs-toggle=\"modal\" data-bs-target=\"#editTransModal\"
                        data-id=\"";
                    // line 42
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 42), "html", null, true);
                    yield "\">
                    <i class=\"bi bi-pencil-square\" title=\"Modifica\"></i>
                </button>
            ";
                } else {
                    // line 45
                    yield "    
                <button type=\"button\" class=\"edit-data\" disabled>
                    <i class=\"bi bi-x-octagon\"></i>
                </button>
            ";
                }
                // line 50
                yield "                                
            ";
                // line 51
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 51) == "admin")) {
                    // line 52
                    yield "                <button type=\"button\" class=\"edit-data deleteTrans\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteTransModal\"
                        data-id=\"";
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 53), "html", null, true);
                    yield "\" data-slot=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "slot", [], "any", false, false, false, 53), "html", null, true);
                    yield "\">
                    <i class=\"bi bi-trash\" title=\"Elimina\"></i> 
                </button>  
            ";
                }
                // line 57
                yield "            </td>
        </tr>

            ";
                // line 61
                yield "        <tr class=\"collapse accordion-collapse border-2 collapse-platform\" id=\"qty-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 61), "html", null, true);
                yield "\">        
            <td colspan=\"14\" class=\"mx-auto my-auto border-0\">
                <div class=\"d-flex align-items-center\">
                        ";
                // line 65
                yield "                    <div class=\"my-auto me-3 ms-3 text-wrap col-1\" id=\"collapse-1\">
                        <h4 class=\"mx-auto\"> 
                            <span class=\"btn collapse-title edit-data updateQty\" style=\"cursor: default\">
                                Quantità
                            </span>
                        </h4>

                        ";
                // line 72
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 72) == "admin") || (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id_user", [], "any", false, false, false, 72) == CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_user", [], "any", false, false, false, 72)))) {
                    // line 73
                    yield "                            <h6 class=\"mx-auto\" >
                                <button type=\"button\" class=\"btn edit-data updateQty\" data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#editQtyModal\" data-id=\"";
                    // line 75
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 75), "html", null, true);
                    yield "\">   
                                    <span class=\"icon-wrap\">
                                        <i class=\"bi bi-pencil\"></i>
                                        <i class=\"bi bi-pencil-fill\"></i>
                                    </span>
                                    
                                    <span class=\"collapse-subtitle\"> Modifica </span> 
                                </button> 
                            </h6>
                        ";
                }
                // line 85
                yield "                    </div>

                        ";
                // line 88
                yield "                    <div class=\"flex-grow-1 my-2 px-2\">
                        <table class=\"table table-bordered my-2 qty-table\" id=\"qty-table-";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 89), "html", null, true);
                yield "\">
                            <tbody>    
                                <tr>
                                    <th class=\"table-light align-middle p-1\"> Energia caricata [MWh] </th>
                                    <td class=\"align-middle col-mwh\"> ";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mwh", [], "any", true, true, false, 93)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mwh", [], "any", false, false, false, 93), "—")) : ("—")), "html", null, true);
                yield " </td>   

                                    <th class=\"table-light align-middle p-1\"> Quantità nominale caricata [kg] </th>
                                    <td class=\"align-middle col-kg-load\"> ";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_load", [], "any", true, true, false, 96)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_load", [], "any", false, false, false, 96), "—")) : ("—")), "html", null, true);
                yield " </td>   

                                    <th class=\"table-light align-middle p-1\"> Raffreddamento </th>            
                                    <td class=\"align-middle col-cooling\"> ";
                // line 99
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "cooling", [], "any", false, false, false, 99) == 600)) ? ("600") : ("No"));
                yield " </td>

                                    <th class=\"table-light align-middle p-1\"> Tipologia costo extra </th>            
                                    <td class=\"align-middle col-price-typology\"> ";
                // line 102
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_typology", [], "any", false, false, false, 102) == "yes")) ? ("Sì") : ("No"));
                yield " </td>   
                                </tr>
                                            
                                <tr>
                                    <th class=\"table-light align-middle p-1\"> Valore costo extra </th>
                                    <td class=\"align-middle col-price-value\"> ";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_value", [], "any", true, true, false, 107)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_value", [], "any", false, false, false, 107), "—")) : ("—")), "html", null, true);
                yield " </td>

                                    <th class=\"table-light align-middle p-1\"> Quantità scaricata PD [kg] </th>
                                    <td class=\"align-middle col-kg-unload\"> ";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_unload", [], "any", true, true, false, 110)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_unload", [], "any", false, false, false, 110), "—")) : ("—")), "html", null, true);
                yield " </td>

                                    <th class=\"table-light align-middle p-1\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] </th>
                                    <td class=\"align-middle col-liquid-density\"> ";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "liquid_density", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "liquid_density", [], "any", false, false, false, 113), "—")) : ("—")), "html", null, true);
                yield " </td>

                                    <th class=\"table-light align-middle p-1\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> </th>
                                    <td class=\"align-middle col-gas-weight\"> ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_weight", [], "any", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_weight", [], "any", false, false, false, 116), "—")) : ("—")), "html", null, true);
                yield " </td>
                                </tr>
                                                    
                                <tr>
                                    <th class=\"table-light align-middle p-1\"> PCS/GHV <big>[</big><sup>MJ</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                    <td class=\"align-middle col-mj-kg\"> ";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mj_kg", [], "any", true, true, false, 121)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mj_kg", [], "any", false, false, false, 121), "—")) : ("—")), "html", null, true);
                yield " </td>

                                    <th class=\"table-light align-middle p-1\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                    <td class=\"align-middle col-pcs-ghv\"> ";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "pcs_ghv", [], "any", true, true, false, 124)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "pcs_ghv", [], "any", false, false, false, 124), "—")) : ("—")), "html", null, true);
                yield " </td>

                                    <th class=\"table-light align-middle p-1\"> Volume scaricato (liquido) <big>[</big>m<sup>3</sup><big>]</big> </th>
                                    <td class=\"align-middle col-volume-mc\"> ";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_mc", [], "any", true, true, false, 127)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_mc", [], "any", false, false, false, 127), "—")) : ("—")), "html", null, true);
                yield " </td>

                                    <th class=\"table-light align-middle p-1\"> Volume sviluppato <big>[</big><sup>Nm<sup>3</sup></sup>&frasl;<sub>m<sup>3</sup></sub><big>]</big> </th>
                                    <td class=\"align-middle col-volume-nmc\"> ";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_nmc", [], "any", true, true, false, 130)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_nmc", [], "any", false, false, false, 130), "—")) : ("—")), "html", null, true);
                yield " </td> 
                                </tr>
                                            
                                <tr>
                                    <th class=\"table-light align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>m<sup>3</sup></sub> </th>
                                    <td class=\"align-middle col-smc-mc\"> ";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_mc", [], "any", true, true, false, 135)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_mc", [], "any", false, false, false, 135), "—")) : ("—")), "html", null, true);
                yield " </td> 

                                    <th class=\"table-light align-middle p-1\"> Gas sviluppato <big>[</big>Nm<sup>3</sup><big>]</big> </th>
                                    <td class=\"align-middle col-gas-nmc\"> ";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_nmc", [], "any", true, true, false, 138)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_nmc", [], "any", false, false, false, 138), "—")) : ("—")), "html", null, true);
                yield " </td>   

                                    <th class=\"table-light align-middle p-1\"> Gas sviluppato <big>[</big>Sm<sup>3</sup></sup><big>]</big> </th>
                                    <td class=\"align-middle col-gas-smc\"> ";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_smc", [], "any", true, true, false, 141)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_smc", [], "any", false, false, false, 141), "—")) : ("—")), "html", null, true);
                yield " </td>   

                                    <th class=\"table-light align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>kg</sub> </th>
                                    <td class=\"align-middle col-smc-kg\"> ";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_kg", [], "any", true, true, false, 144)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_kg", [], "any", false, false, false, 144), "—")) : ("—")), "html", null, true);
                yield " </td>  
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </td>
        </tr>

        ";
                // line 153
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "type", [], "any", false, false, false, 153) == "P")) {
                    // line 154
                    yield "            ";
                    // line 155
                    yield "        <tr class=\"collapse accordion-collapse border-2 collapse-platform part-row\" id=\"qty-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 155), "html", null, true);
                    yield "\">        
            ";
                    // line 156
                    yield from $this->loadTemplate("partials.twig", "transports-ajax.twig", 156)->unwrap()->yield(CoreExtension::toArray(["partials" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 157
($context["partials"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 157), [], "array", true, true, false, 157)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["partials"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 157)] ?? null) : null), [])) : ([])), "t" =>                     // line 158
$context["t"], "total_part" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 159
($context["total_part"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 159), [], "array", true, true, false, 159)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["total_part"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 159)] ?? null) : null), 0)) : (0))]));
                    // line 161
                    yield "        </tr>
        ";
                }
                // line 163
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
        // line 165
        yield "
";
        // line 166
        yield from $this->unwrap()->yieldBlock('jquery', $context, $blocks);
        // line 172
        yield "
";
        // line 173
        yield from $this->unwrap()->yieldBlock('page_script', $context, $blocks);
        yield from [];
    }

    // line 166
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_jquery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 167
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
";
        yield from [];
    }

    // line 173
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 174
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

        //  Avoid multiple fast clicks by disabling temporarily
        if (\$(this).parent().hasClass('disabled') || \$(this).parent().hasClass('active')) {
            return;
        }
        //  Scroll to table after page load starts
        \$('html, body').animate({ scrollTop: \$('#transport-table').offset().top }, 300);
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
        return array (  436 => 174,  429 => 173,  420 => 167,  413 => 166,  408 => 173,  405 => 172,  403 => 166,  400 => 165,  385 => 163,  381 => 161,  379 => 159,  378 => 158,  377 => 157,  376 => 156,  371 => 155,  369 => 154,  367 => 153,  355 => 144,  349 => 141,  343 => 138,  337 => 135,  329 => 130,  323 => 127,  317 => 124,  311 => 121,  303 => 116,  297 => 113,  291 => 110,  285 => 107,  277 => 102,  271 => 99,  265 => 96,  259 => 93,  252 => 89,  249 => 88,  245 => 85,  232 => 75,  228 => 73,  226 => 72,  217 => 65,  210 => 61,  205 => 57,  196 => 53,  193 => 52,  191 => 51,  188 => 50,  181 => 45,  174 => 42,  171 => 41,  169 => 40,  164 => 38,  158 => 37,  154 => 36,  150 => 35,  146 => 34,  142 => 33,  138 => 32,  134 => 31,  130 => 30,  126 => 29,  122 => 28,  118 => 27,  109 => 21,  105 => 20,  101 => 18,  98 => 17,  94 => 15,  90 => 13,  87 => 12,  85 => 11,  80 => 9,  66 => 5,  64 => 4,  46 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Table Body #}
{% if transports is not empty %}
    {% for t in transports %}
            {# Transports Data #}
        <tr id=\"id-{{ t.id_transport }}\" class=\"align-middle expand {% if t.type == 'P' %}partial-row{% else %}full-row{% endif %}\">
            <td style=\"width: 50px\" scope=\"row\" class=\"row-loop\">
                <div class=\"d-flex justify-content-between align-items-center h-100\">
                    <div class=\"d-flex flex-column align-items-center\">
                        {{ ((page - 1) * limit) + loop.index }} 

                        {% if show_type %}
                            {% if t.type == 'F' %}
                                <span class=\"badge bg-info text-dark mt-1\">F</span>
                            {% else %}
                                <span class=\"badge bg-warning text-dark mt-1\">P</span>
                            {% endif %}
                        {% endif %}
                    </div>

                    <button class=\"my-auto ms-2 collapse-btn\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#qty-{{ t.id_transport }}\" 
                            aria-expanded=\"false\" aria-controls=\"qty-{{ t.id_transport }}\" title=\"Espandi\">
                        <i class=\"bi bi-plus-lg icon-plus m-auto\"></i>
                        <i class=\"bi bi-dash-lg icon-minus m-auto\"></i>
                    </button>
                </div>
            </td>
            <td style=\"width: 350px\" class=\"align-middle px-2 search word-wrap-container col-slot\"> {{ t.slot|upper }} </td>
            <td style=\"width: 250px\" class=\"align-middle px-2 search word-wrap-container col-cmr\"> {{ t.cmr|upper }} </td>
            <td style=\"width: 150px\" class=\"align-middle px-1 search col-issuer\"> {{ t.issuer|upper }} </td>
            <td style=\"width: 150px\" class=\"align-middle px-1 search col-supplier\"> {{ t.supplier|upper }} </td>
            <td style=\"width: 100px\" class=\"align-middle px-1 search col-transport\"> {{ t.transport|upper }} </td>
            <td style=\"width: 180px\" class=\"align-middle px-1 col-univoco\"> {{ t.univoco|upper }} </td>
            <td style=\"width: 120px\" class=\"align-middle px-1 col-load\"> {{ t.date_load|date(\"d/m/Y\") }} </td>
            <td style=\"width: 120px\" class=\"align-middle px-1 col-unload\"> {{ t.date_unload|date(\"d/m/Y\") }} </td>
            <td style=\"width: 100px\" class=\"align-middle px-0 col-month-load\"> {{ t.id_month_load }} </td>
            <td style=\"width: 100px\" class=\"align-middle px-0 col-week-unload\"> {{ t.week_unload }} </td>
            <td style=\"width: 130px\" class=\"align-middle px-1 col-month-unload\"> {{ t.id_month_unload }} - {{ t.month_unload|capitalize }} </td>
            <td style=\"width: 160px\" class=\"align-middle px-1 col-container\"> {{ t.container|upper }} </td>
            <td style=\"width: 80px\"  class=\"align-middle px-1 btns col-btns\">   
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
        <tr class=\"collapse accordion-collapse border-2 collapse-platform\" id=\"qty-{{ t.id_transport }}\">        
            <td colspan=\"14\" class=\"mx-auto my-auto border-0\">
                <div class=\"d-flex align-items-center\">
                        {# Left Side #}
                    <div class=\"my-auto me-3 ms-3 text-wrap col-1\" id=\"collapse-1\">
                        <h4 class=\"mx-auto\"> 
                            <span class=\"btn collapse-title edit-data updateQty\" style=\"cursor: default\">
                                Quantità
                            </span>
                        </h4>

                        {% if (session.role == 'admin') or (session.id_user == t.id_user) %}
                            <h6 class=\"mx-auto\" >
                                <button type=\"button\" class=\"btn edit-data updateQty\" data-bs-toggle=\"modal\" 
                                        data-bs-target=\"#editQtyModal\" data-id=\"{{ t.id_transport }}\">   
                                    <span class=\"icon-wrap\">
                                        <i class=\"bi bi-pencil\"></i>
                                        <i class=\"bi bi-pencil-fill\"></i>
                                    </span>
                                    
                                    <span class=\"collapse-subtitle\"> Modifica </span> 
                                </button> 
                            </h6>
                        {% endif %}
                    </div>

                        {# Right Side #}
                    <div class=\"flex-grow-1 my-2 px-2\">
                        <table class=\"table table-bordered my-2 qty-table\" id=\"qty-table-{{ t.id_transport }}\">
                            <tbody>    
                                <tr>
                                    <th class=\"table-light align-middle p-1\"> Energia caricata [MWh] </th>
                                    <td class=\"align-middle col-mwh\"> {{ t.mwh|default('—') }} </td>   

                                    <th class=\"table-light align-middle p-1\"> Quantità nominale caricata [kg] </th>
                                    <td class=\"align-middle col-kg-load\"> {{ t.kg_load|default('—') }} </td>   

                                    <th class=\"table-light align-middle p-1\"> Raffreddamento </th>            
                                    <td class=\"align-middle col-cooling\"> {{ t.cooling == 600 ? '600' : 'No' }} </td>

                                    <th class=\"table-light align-middle p-1\"> Tipologia costo extra </th>            
                                    <td class=\"align-middle col-price-typology\"> {{ t.price_typology == 'yes'? 'Sì' : 'No' }} </td>   
                                </tr>
                                            
                                <tr>
                                    <th class=\"table-light align-middle p-1\"> Valore costo extra </th>
                                    <td class=\"align-middle col-price-value\"> {{ t.price_value|default('—') }} </td>

                                    <th class=\"table-light align-middle p-1\"> Quantità scaricata PD [kg] </th>
                                    <td class=\"align-middle col-kg-unload\"> {{ t.kg_unload|default('—') }} </td>

                                    <th class=\"table-light align-middle p-1\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] </th>
                                    <td class=\"align-middle col-liquid-density\"> {{ t.liquid_density|default('—') }} </td>

                                    <th class=\"table-light align-middle p-1\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> </th>
                                    <td class=\"align-middle col-gas-weight\"> {{ t.gas_weight|default('—') }} </td>
                                </tr>
                                                    
                                <tr>
                                    <th class=\"table-light align-middle p-1\"> PCS/GHV <big>[</big><sup>MJ</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                    <td class=\"align-middle col-mj-kg\"> {{ t.mj_kg|default('—') }} </td>

                                    <th class=\"table-light align-middle p-1\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                    <td class=\"align-middle col-pcs-ghv\"> {{ t.pcs_ghv|default('—') }} </td>

                                    <th class=\"table-light align-middle p-1\"> Volume scaricato (liquido) <big>[</big>m<sup>3</sup><big>]</big> </th>
                                    <td class=\"align-middle col-volume-mc\"> {{ t.volume_mc|default('—') }} </td>

                                    <th class=\"table-light align-middle p-1\"> Volume sviluppato <big>[</big><sup>Nm<sup>3</sup></sup>&frasl;<sub>m<sup>3</sup></sub><big>]</big> </th>
                                    <td class=\"align-middle col-volume-nmc\"> {{ t.volume_nmc|default('—') }} </td> 
                                </tr>
                                            
                                <tr>
                                    <th class=\"table-light align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>m<sup>3</sup></sub> </th>
                                    <td class=\"align-middle col-smc-mc\"> {{ t.smc_mc|default('—') }} </td> 

                                    <th class=\"table-light align-middle p-1\"> Gas sviluppato <big>[</big>Nm<sup>3</sup><big>]</big> </th>
                                    <td class=\"align-middle col-gas-nmc\"> {{ t.gas_nmc|default('—') }} </td>   

                                    <th class=\"table-light align-middle p-1\"> Gas sviluppato <big>[</big>Sm<sup>3</sup></sup><big>]</big> </th>
                                    <td class=\"align-middle col-gas-smc\"> {{ t.gas_smc|default('—') }} </td>   

                                    <th class=\"table-light align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>kg</sub> </th>
                                    <td class=\"align-middle col-smc-kg\"> {{ t.smc_kg|default('—') }} </td>  
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </td>
        </tr>

        {% if t.type == 'P' %}
            {# Partials Data #}
        <tr class=\"collapse accordion-collapse border-2 collapse-platform part-row\" id=\"qty-{{ t.id_transport }}\">        
            {% include 'partials.twig' with {
                partials: partials[t.id_transport]|default([]),
                t: t,
                total_part: total_part[t.id_transport]|default(0)
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
{% endblock %}

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

        //  Avoid multiple fast clicks by disabling temporarily
        if (\$(this).parent().hasClass('disabled') || \$(this).parent().hasClass('active')) {
            return;
        }
        //  Scroll to table after page load starts
        \$('html, body').animate({ scrollTop: \$('#transport-table').offset().top }, 300);
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
