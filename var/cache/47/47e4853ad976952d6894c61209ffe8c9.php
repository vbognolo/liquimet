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
            'datepicker' => [$this, 'block_datepicker'],
            'page_script' => [$this, 'block_page_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "    ";
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
                yield "        <tr class=\"align-middle expand\" id=\"id-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 5), "html", null, true);
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
            <td style=\"width: 300px\" class=\"align-middle p-2 search word-wrap-container col-slot\"> ";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "slot", [], "any", false, false, false, 13)), "html", null, true);
                yield " </td>
            <td style=\"width: 250px\" class=\"align-middle p-2 search word-wrap-container col-cmr\"> ";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "cmr", [], "any", false, false, false, 14)), "html", null, true);
                yield " </td>
            <td style=\"width: 150px\" class=\"align-middle p-1 search col-issuer\"> ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "issuer", [], "any", false, false, false, 15)), "html", null, true);
                yield " </td>
            <td style=\"width: 150px\" class=\"align-middle p-1 search col-supplier\"> ";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "supplier", [], "any", false, false, false, 16)), "html", null, true);
                yield " </td>
            <td style=\"width: 100px\" class=\"align-middle p-1 search col-transport\"> ";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "transport", [], "any", false, false, false, 17)), "html", null, true);
                yield " </td>
            <td style=\"width: 180px\" class=\"align-middle p-1 col-univoco\"> ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "univoco", [], "any", false, false, false, 18)), "html", null, true);
                yield " </td>
            <td style=\"width: 120px\" class=\"align-middle p-1 col-load\"> ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "date_load", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
                yield " </td>
            <td style=\"width: 120px\" class=\"align-middle p-1 col-unload\"> ";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "date_unload", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
                yield " </td>
            <td style=\"width: 90px\" class=\"align-middle p-0 col-month-load\"> ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_month_load", [], "any", false, false, false, 21), "html", null, true);
                yield " </td>
            <td style=\"width: 120px\" class=\"align-middle p-0 col-week-unload\"> ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "week_unload", [], "any", false, false, false, 22), "html", null, true);
                yield " </td>
            <td style=\"width: 130px\" class=\"align-middle p-1 col-month-unload\"> ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_month_unload", [], "any", false, false, false, 23), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "month_unload", [], "any", false, false, false, 23)), "html", null, true);
                yield " </td>
            <td style=\"width: 160px\" class=\"align-middle p-1 col-container\"> ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "container", [], "any", false, false, false, 24)), "html", null, true);
                yield " </td>
            <td style=\"width: 80px\" class=\"align-middle p-1 btns\">   
                ";
                // line 26
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 26) == "admin") || (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id_user", [], "any", false, false, false, 26) == CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_user", [], "any", false, false, false, 26)))) {
                    // line 27
                    yield "                    <button type=\"button\" class=\"edit-data edited updateTrans\" data-bs-toggle=\"modal\" data-bs-target=\"#editTransModal\"
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
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 37) == "admin")) {
                    // line 38
                    yield "                    <button type=\"button\" class=\"edit-data deleteTrans\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteTransModal\"
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
                yield "            </td>
        </tr>

            ";
                // line 47
                yield "        <tr class=\"collapse bg-white accordion-collapse collapse-platform\" id=\"qty-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 47), "html", null, true);
                yield "\">        
            <td colspan=\"14\" class=\"border-0\">
                <h4 class=\"mx-auto my-3 text-center\"> 
                    ";
                // line 50
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 50) == "admin") || (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id_user", [], "any", false, false, false, 50) == CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_user", [], "any", false, false, false, 50)))) {
                    // line 51
                    yield "                        <button type=\"button\" class=\"btn my-auto edit-data updateQty\" data-bs-toggle=\"modal\" 
                                data-bs-target=\"#editQtyModal\" data-id=\"";
                    // line 52
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 52), "html", null, true);
                    yield "\">   
                            <i class=\"bi bi-pencil-square mx-1\"></i> 
                                <span class=\"collapse-title\">
                                    Quantità:
                                </span>   
                        </button> 
                    ";
                } else {
                    // line 59
                    yield "                        <span class=\"btn my-auto collapse-title edit-data updateQty\" style=\"cursor: default\">
                            Quantità:
                        </span>
                    ";
                }
                // line 63
                yield "                </h4>

                <table class=\"table table-bordered table-light mb-1\" id=\"qty-table-";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 65), "html", null, true);
                yield "\">
                    <tbody>    
                        <tr>
                            <th class=\"align-middle p-1\"> Energia caricata [MWh] </th>
                            <td class=\"bg-light align-middle col-mwh\"> ";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mwh", [], "any", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mwh", [], "any", false, false, false, 69), "—")) : ("—")), "html", null, true);
                yield " </td>   

                            <th class=\"align-middle p-1\"> Quantità nominale caricata [kg] </th>
                            <td class=\"bg-light align-middle col-kg-load\"> ";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_load", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_load", [], "any", false, false, false, 72), "—")) : ("—")), "html", null, true);
                yield " </td>   

                            <th class=\"align-middle p-1\"> Raffreddamento </th>            
                            <td class=\"bg-light align-middle col-cooling\"> ";
                // line 75
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "cooling", [], "any", false, false, false, 75) == 600)) ? ("600") : ("No"));
                yield " </td>

                            <th class=\"align-middle p-1\"> Tipologia costo extra </th>            
                            <td class=\"bg-light align-middle col-price-typology\"> ";
                // line 78
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_typology", [], "any", false, false, false, 78) == "yes")) ? ("Sì") : ("No"));
                yield " </td>   
                        </tr>
                                    
                        <tr>
                            <th class=\"align-middle p-1\"> Valore costo extra </th>
                            <td class=\"bg-light align-middle col-price-value\"> ";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_value", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_value", [], "any", false, false, false, 83), "—")) : ("—")), "html", null, true);
                yield " </td>

                            <th class=\"align-middle p-1\"> Quantità scaricata PD [kg] </th>
                            <td class=\"bg-light align-middle col-kg-unload\"> ";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_unload", [], "any", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_unload", [], "any", false, false, false, 86), "—")) : ("—")), "html", null, true);
                yield " </td>

                            <th class=\"align-middle p-1\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] </th>
                            <td class=\"bg-light align-middle col-liquid-density\"> ";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "liquid_density", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "liquid_density", [], "any", false, false, false, 89), "—")) : ("—")), "html", null, true);
                yield " </td>

                            <th class=\"align-middle p-1\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> </th>
                            <td class=\"bg-light align-middle col-gas-weight\"> ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_weight", [], "any", true, true, false, 92)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_weight", [], "any", false, false, false, 92), "—")) : ("—")), "html", null, true);
                yield " </td>
                        </tr>
                                            
                        <tr>
                            <th class=\"align-middle p-1\"> PCS/GHV <big>[</big><sup>MJ</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                            <td class=\"bg-light align-middle col-mj-kg\"> ";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mj_kg", [], "any", true, true, false, 97)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mj_kg", [], "any", false, false, false, 97), "—")) : ("—")), "html", null, true);
                yield " </td>

                            <th class=\"align-middle p-1\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                            <td class=\"bg-light align-middle col-pcs-ghv\"> ";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "pcs_ghv", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "pcs_ghv", [], "any", false, false, false, 100), "—")) : ("—")), "html", null, true);
                yield " </td>

                            <th class=\"align-middle p-1\"> Volume scaricato (liquido) <big>[</big>m<sup>3</sup><big>]</big> </th>
                            <td class=\"bg-light align-middle col-volume-mc\"> ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_mc", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_mc", [], "any", false, false, false, 103), "—")) : ("—")), "html", null, true);
                yield " </td>

                            <th class=\"align-middle p-1\"> Volume sviluppato <big>[</big><sup>Nm<sup>3</sup></sup>&frasl;<sub>m<sup>3</sup></sub><big>]</big> </th>
                            <td class=\"bg-light align-middle col-volume-nmc\"> ";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_nmc", [], "any", true, true, false, 106)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_nmc", [], "any", false, false, false, 106), "—")) : ("—")), "html", null, true);
                yield " </td> 
                        </tr>
                                            
                        <tr>
                            <th class=\"align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>m<sup>3</sup></sub> </th>
                            <td class=\"bg-light align-middle col-smc-mc\"> ";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_mc", [], "any", true, true, false, 111)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_mc", [], "any", false, false, false, 111), "—")) : ("—")), "html", null, true);
                yield " </td> 

                            <th class=\"align-middle p-1\"> Gas sviluppato <big>[</big>Nm<sup>3</sup><big>]</big> </th>
                            <td class=\"bg-light align-middle col-gas-nmc\"> ";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_nmc", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_nmc", [], "any", false, false, false, 114), "—")) : ("—")), "html", null, true);
                yield " </td>   

                            <th class=\"align-middle p-1\"> Gas sviluppato <big>[</big>Sm<sup>3</sup></sup><big>]</big> </th>
                            <td class=\"bg-light align-middle col-gas-smc\"> ";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_smc", [], "any", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_smc", [], "any", false, false, false, 117), "—")) : ("—")), "html", null, true);
                yield " </td>   

                            <th class=\"align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>kg</sub> </th>
                            <td class=\"bg-light align-middle col-smc-kg\"> ";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_kg", [], "any", true, true, false, 120)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_kg", [], "any", false, false, false, 120), "—")) : ("—")), "html", null, true);
                yield " </td>  
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>

            ";
                // line 128
                yield "        <tr class=\"collapse bg-white accordion-collapse collapse-platform\" id=\"qty-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 128), "html", null, true);
                yield "\">
            <td colspan=\"14\" class=\"border-0\">
                <div class=\"note-container\">
                    <h4 class=\"mx-auto my-2\"> 
                        <button type=\"button\" class=\"btn my-auto edit-data updateNote\" data-bs-toggle=\"modal\" data-bs-target=\"#editNoteModal\"
                                data-id=\"";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 133), "html", null, true);
                yield "\">   
                            <i class=\"bi bi-pencil-square mx-1\"></i> 
                                <span class=\"collapse-title\">
                                    Nota:
                                </span>   
                        </button> 
                    </h4>

                    <div class=\"container-fluid my-0\">
                        <div id=\"notes-";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 142), "html", null, true);
                yield "\" data-ids=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 142), "html", null, true);
                yield "\" class=\"notes\">
                            Nessuna nota
                        </div>
                    </div>
                </div>
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
            unset($context['_seq'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 151
        yield "
";
        // line 152
        yield from $this->unwrap()->yieldBlock('jquery', $context, $blocks);
        // line 168
        yield "
";
        // line 169
        yield from $this->unwrap()->yieldBlock('datepicker', $context, $blocks);
        // line 175
        yield "
";
        // line 176
        yield from $this->unwrap()->yieldBlock('page_script', $context, $blocks);
        yield from [];
    }

    // line 152
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_jquery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 153
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 158
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha256-umbTaFxP31Fv6O1itpLS/3+v5fOAWDLOUzlmvOGaKV4=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 163
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha256-MtEA819Zls6dtLt5S5BpEMOhifPyz7gfzfgtNtY75lE=\" 
        crossorigin=\"anonymous\">
</script>
";
        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datepicker(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 170
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=\" 
        crossorigin=\"anonymous\">
</script>
";
        yield from [];
    }

    // line 176
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 177
        yield "<script>
\$(document).ready(function () {
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
                page: page
            },
            success: function (response) {
                if (response.success) {
                    \$('#transport-tbody').html(response.tbody).find('#transport-tbody').html();
                    \$('#transport-tfoot').html(response.pagination).find('#transport-tfoot').html();
                }
            },
            error: function () {
                alert('Errore nel caricamento della pagina.');
            }
        });

        // Avoid multiple fast clicks by disabling temporarily
        if (\$(this).parent().hasClass('disabled') || \$(this).parent().hasClass('active')) {
            return;
        }

        // Scroll to table after page load starts
        \$('html, body').animate({ scrollTop: \$('#transport-table').offset().top }, 300);
    });

//  Transport edit button, open modal with populated transports's data
    \$(document).on('click', '.updateTrans', function () {
        const id = \$(this).data('id');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); // grab the token from a hidden input

        \$.post('get-transport', { action: 'getTransportData', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success) {
                const transport = response.transport;

                    \$('#editTransModal #id_transport').val(transport.id_transport);
                    \$('#editTransModal #slot').val(transport.slot.toUpperCase());
                    \$('#editTransModal #cmr').val(transport.cmr.toUpperCase());
                    \$('#editTransModal #issuer').val(transport.issuer.toUpperCase());
                    \$('#editTransModal #supplier').val(transport.supplier.toUpperCase());
                    \$('#editTransModal #transport').val(transport.transport.toUpperCase());
                    \$('#editTransModal #date_load').val(transport.date_load);
                    \$('#editTransModal #date_unload').val(transport.date_unload);
                    \$('#editTransModal #container').val(transport.container.toUpperCase());

                    /*\$('#editTransModal #original_slot').val(transport.slot);
                    \$('#editTransModal #original_cmr').val(transport.cmr);*/

                    \$('#editTransModal').modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
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
        return array (  442 => 177,  435 => 176,  426 => 170,  419 => 169,  410 => 163,  404 => 158,  398 => 153,  391 => 152,  386 => 176,  383 => 175,  381 => 169,  378 => 168,  376 => 152,  373 => 151,  348 => 142,  336 => 133,  327 => 128,  317 => 120,  311 => 117,  305 => 114,  299 => 111,  291 => 106,  285 => 103,  279 => 100,  273 => 97,  265 => 92,  259 => 89,  253 => 86,  247 => 83,  239 => 78,  233 => 75,  227 => 72,  221 => 69,  214 => 65,  210 => 63,  204 => 59,  194 => 52,  191 => 51,  189 => 50,  182 => 47,  177 => 43,  168 => 39,  165 => 38,  163 => 37,  160 => 36,  153 => 31,  146 => 28,  143 => 27,  141 => 26,  136 => 24,  130 => 23,  126 => 22,  122 => 21,  118 => 20,  114 => 19,  110 => 18,  106 => 17,  102 => 16,  98 => 15,  94 => 14,  90 => 13,  83 => 9,  79 => 8,  75 => 7,  69 => 5,  67 => 4,  49 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    {# Table Body #}
{% if transports is not empty %}
    {% for t in transports %}
            {# Transport Data #}
        <tr class=\"align-middle expand\" id=\"id-{{ t.id_transport }}\">
            <td style=\"width: 50px\" scope=\"row\">
                {{ ((page - 1) * limit) + loop.index }} <br>
                    <button data-bs-toggle=\"collapse\" data-bs-target=\"#qty-{{ t.id_transport }}\"
                            aria-expanded=\"false\" aria-controls=\"qty-{{ t.id_transport }}\" aria-label=\"Expand quantities\">
                        <i class=\"bi bi-arrows-expand\"></i>
                    </button> 
            </td>
            <td style=\"width: 300px\" class=\"align-middle p-2 search word-wrap-container col-slot\"> {{ t.slot|upper }} </td>
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

            {# Quantity Data #}
        <tr class=\"collapse bg-white accordion-collapse collapse-platform\" id=\"qty-{{ t.id_transport }}\">        
            <td colspan=\"14\" class=\"border-0\">
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
                            <td class=\"bg-light align-middle col-kg-load\"> {{ t.kg_load|default('—') }} </td>   

                            <th class=\"align-middle p-1\"> Raffreddamento </th>            
                            <td class=\"bg-light align-middle col-cooling\"> {{ t.cooling == 600 ? '600' : 'No' }} </td>

                            <th class=\"align-middle p-1\"> Tipologia costo extra </th>            
                            <td class=\"bg-light align-middle col-price-typology\"> {{ t.price_typology == 'yes'? 'Sì' : 'No' }} </td>   
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

            {# Note #}
        <tr class=\"collapse bg-white accordion-collapse collapse-platform\" id=\"qty-{{ t.id_transport }}\">
            <td colspan=\"14\" class=\"border-0\">
                <div class=\"note-container\">
                    <h4 class=\"mx-auto my-2\"> 
                        <button type=\"button\" class=\"btn my-auto edit-data updateNote\" data-bs-toggle=\"modal\" data-bs-target=\"#editNoteModal\"
                                data-id=\"{{ t.id_transport }}\">   
                            <i class=\"bi bi-pencil-square mx-1\"></i> 
                                <span class=\"collapse-title\">
                                    Nota:
                                </span>   
                        </button> 
                    </h4>

                    <div class=\"container-fluid my-0\">
                        <div id=\"notes-{{ t.id_transport }}\" data-ids=\"{{ t.id_transport }}\" class=\"notes\">
                            Nessuna nota
                        </div>
                    </div>
                </div>
            </td>
        </tr>
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

{% block datepicker %}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=\" 
        crossorigin=\"anonymous\">
</script>
{% endblock %}

{% block page_script %}
<script>
\$(document).ready(function () {
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
                page: page
            },
            success: function (response) {
                if (response.success) {
                    \$('#transport-tbody').html(response.tbody).find('#transport-tbody').html();
                    \$('#transport-tfoot').html(response.pagination).find('#transport-tfoot').html();
                }
            },
            error: function () {
                alert('Errore nel caricamento della pagina.');
            }
        });

        // Avoid multiple fast clicks by disabling temporarily
        if (\$(this).parent().hasClass('disabled') || \$(this).parent().hasClass('active')) {
            return;
        }

        // Scroll to table after page load starts
        \$('html, body').animate({ scrollTop: \$('#transport-table').offset().top }, 300);
    });

//  Transport edit button, open modal with populated transports's data
    \$(document).on('click', '.updateTrans', function () {
        const id = \$(this).data('id');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); // grab the token from a hidden input

        \$.post('get-transport', { action: 'getTransportData', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success) {
                const transport = response.transport;

                    \$('#editTransModal #id_transport').val(transport.id_transport);
                    \$('#editTransModal #slot').val(transport.slot.toUpperCase());
                    \$('#editTransModal #cmr').val(transport.cmr.toUpperCase());
                    \$('#editTransModal #issuer').val(transport.issuer.toUpperCase());
                    \$('#editTransModal #supplier').val(transport.supplier.toUpperCase());
                    \$('#editTransModal #transport').val(transport.transport.toUpperCase());
                    \$('#editTransModal #date_load').val(transport.date_load);
                    \$('#editTransModal #date_unload').val(transport.date_unload);
                    \$('#editTransModal #container').val(transport.container.toUpperCase());

                    /*\$('#editTransModal #original_slot').val(transport.slot);
                    \$('#editTransModal #original_cmr').val(transport.cmr);*/

                    \$('#editTransModal').modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
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
