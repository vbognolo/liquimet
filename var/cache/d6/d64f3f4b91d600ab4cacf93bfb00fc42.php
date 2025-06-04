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

/* transports-full.twig */
class __TwigTemplate_8aba332c37635c338713dd6945b8eabc extends Template
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
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'jquery' => [$this, 'block_jquery'],
            'datepicker' => [$this, 'block_datepicker'],
            'page_script' => [$this, 'block_page_script'],
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
        $this->parent = $this->loadTemplate("layout.twig", "transports-full.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Piattaforma ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        // line 5
        yield "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" 
        integrity=\"sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=\" crossorigin=\"anonymous\">

    ";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " 
    ";
        // line 14
        yield from $this->loadTemplate("transports-navigation.twig", "transports-full.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "
<section class=\"col-12 m-auto\">
    <div class=\"d-flex justify-content-center table-responsive\">          
        <table class=\"table table-hover table-light table-stripped caption-top text-center platform\" id=\"transport-table\">
            <caption class=\"px-3 mb-2 text-white text-shadow-dark\" style=\"font-size: 1.9rem\"> 
                <span>
                    <i class=\"bi bi-arrow-bar-right my-1 fs-3\"></i> 
                        TRASPORTI PIENI 
                </span>
            </caption>
                <thead>
                    <tr class=\"border-top border-light bg-primary bg-gradient table-title\">
                        <th scope=\"col\" class=\"align-middle px-3\"> # </th>
                        <th scope=\"col\" class=\"align-middle px-2\"> Slot ID </th>
                        <th scope=\"col\" class=\"align-middle px-2\"> Numero CMR </th>
                        <th scope=\"col\" class=\"align-middle px-3\"> Emittente </th>
                        <th scope=\"col\" class=\"align-middle px-3\"> Fornitore </th>
                        <th scope=\"col\" class=\"align-middle px-3\"> Trasporto </th>
                        <th scope=\"col\" class=\"align-middle px-3\"> Univoco </th>
                        <th scope=\"col\" class=\"align-middle px-2\"> Data carico </th>
                        <th scope=\"col\" class=\"align-middle px-2\"> Data scarico </th>
                        <th scope=\"col\" class=\"align-middle\"> Mese carico </th>
                        <th scope=\"col\" class=\"align-middle\"> Settimana scarico </th>
                        <th scope=\"col\" class=\"align-middle\"> Mese scarico </th>
                        <th scope=\"col\" class=\"align-middle px-2\"> Container<br>ATB </th>
                        <th scope=\"col\" class=\"align-middle px-2\"> <i class=\"bi bi-gear\"></i> </th>
                    </tr>
                </thead>

                <tbody class=\"table-group-divider\">    
                ";
        // line 45
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["transports"] ?? null))) {
            // line 46
            yield "                    ";
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
                // line 47
                yield "                        ";
                // line 48
                yield "                        <tr class=\"align-middle expand\" id=\"id-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 48), "html", null, true);
                yield "\">
                            <td scope=\"row\">
                                ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50), "html", null, true);
                yield " <br>
                                <button data-bs-toggle=\"collapse\" data-bs-target=\"#qty-";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 51), "html", null, true);
                yield "\"
                                    aria-expanded=\"false\" aria-controls=\"qty-";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 52), "html", null, true);
                yield "\" aria-label=\"Expand quantities\">
                                        <i class=\"bi bi-arrows-expand\"></i>
                                </button> 
                            </td>
                            <td class=\"align-middle p-2 search word-wrap-container col-slot\"> ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "slot", [], "any", false, false, false, 56)), "html", null, true);
                yield " </td>
                            <td class=\"align-middle p-2 search word-wrap-container col-cmr\"> ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "cmr", [], "any", false, false, false, 57)), "html", null, true);
                yield " </td>
                            <td class=\"align-middle p-1 search col-issuer\"> ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "issuer", [], "any", false, false, false, 58)), "html", null, true);
                yield " </td>
                            <td class=\"align-middle p-1 search col-supplier\"> ";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "supplier", [], "any", false, false, false, 59)), "html", null, true);
                yield " </td>
                            <td class=\"align-middle p-1 search col-transport\"> ";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "transport", [], "any", false, false, false, 60)), "html", null, true);
                yield " </td>
                            <td class=\"align-middle p-1 col-univoco\"> ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "univoco", [], "any", false, false, false, 61)), "html", null, true);
                yield " </td>
                            <td class=\"align-middle p-1 col-load\"> ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "date_load", [], "any", false, false, false, 62), "d/m/Y"), "html", null, true);
                yield " </td>
                            <td class=\"align-middle p-1 col-unload\"> ";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "date_unload", [], "any", false, false, false, 63), "d/m/Y"), "html", null, true);
                yield " </td>
                            <td class=\"align-middle p-0 col-month-load\"> ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_month_load", [], "any", false, false, false, 64), "html", null, true);
                yield " </td>
                            <td class=\"align-middle p-0 col-week-unload\"> ";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "week_unload", [], "any", false, false, false, 65), "html", null, true);
                yield " </td>
                            <td class=\"align-middle p-1 col-month-unload\"> ";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_month_unload", [], "any", false, false, false, 66), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "month_unload", [], "any", false, false, false, 66)), "html", null, true);
                yield " </td>
                            <td class=\"align-middle p-1 col-container\"> ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "container", [], "any", false, false, false, 67)), "html", null, true);
                yield " </td>
                            <td class=\"align-middle p-1 btns\">   
                                ";
                // line 69
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 69) == "admin") || (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 69) == CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_user", [], "any", false, false, false, 69)))) {
                    // line 70
                    yield "                                    <button type=\"button\" class=\"edit-data edited updateTrans\" data-bs-toggle=\"modal\" data-bs-target=\"#editTransModal\"
                                        data-id=\"";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 71), "html", null, true);
                    yield "\">
                                            <i class=\"bi bi-pencil-square\" title=\"Modifica\"></i>
                                    </button>
                                ";
                } else {
                    // line 74
                    yield "    
                                    <button type=\"button\" class=\"edit-data\" disabled>
                                        <i class=\"bi bi-x-octagon\"></i>
                                    </button>
                                ";
                }
                // line 79
                yield "                                
                                ";
                // line 80
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 80) == "admin")) {
                    // line 81
                    yield "                                    <button type=\"button\" class=\"edit-data\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteTrans\"
                                        data-id=\"";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 82), "html", null, true);
                    yield "\">
                                            <i class=\"bi bi-trash\" title=\"Elimina\"></i> 
                                    </button>  
                                ";
                }
                // line 86
                yield "                            </td>
                        </tr>
                        ";
                // line 89
                yield "
                        ";
                // line 91
                yield "                        <tr class=\"collapse bg-white accordion-collapse collapse-platform\" id=\"qty-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 91), "html", null, true);
                yield "\">        
                            <td colspan=\"14\" class=\"border-0\">
                                ";
                // line 94
                yield "                                    <h4 class=\"mx-auto my-3 text-center\"> 
                                        ";
                // line 95
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 95) == "admin") || (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 95) == CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_user", [], "any", false, false, false, 95)))) {
                    // line 96
                    yield "                                            <button type=\"button\" class=\"btn my-auto edit-data updateQty\" data-bs-toggle=\"modal\" 
                                                data-bs-target=\"#editQtyModal\" data-id=\"";
                    // line 97
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 97), "html", null, true);
                    yield "\">   
                                                    <i class=\"bi bi-pencil-square mx-1\"></i> 
                                                        <span class=\"collapse-title\">
                                                            Quantità:
                                                        </span>   
                                            </button> 
                                        ";
                } else {
                    // line 104
                    yield "                                            <span class=\"btn my-auto collapse-title edit-data updateQty\" style=\"cursor: default\">
                                                Quantità:
                                            </span>
                                        ";
                }
                // line 108
                yield "                                    </h4>

                                    <table class=\"table table-bordered table-light mb-1\" id=\"qty-table-";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 110), "html", null, true);
                yield "\">
                                        <tbody>    
                                            <tr>
                                                <th class=\"align-middle p-1\"> Energia caricata [MWh] </th>
                                                <td class=\"bg-light align-middle col-mwh\"> ";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mwh", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mwh", [], "any", false, false, false, 114), "—")) : ("—")), "html", null, true);
                yield " </td>   

                                                <th class=\"align-middle p-1\"> Quantità nominale caricata [kg] </th>
                                                <td class=\"bg-light align-middle col-kg-load\"> ";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_load", [], "any", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_load", [], "any", false, false, false, 117), "—")) : ("—")), "html", null, true);
                yield " </td>   

                                                <th class=\"align-middle p-1\"> Raffreddamento </th>            
                                                <td class=\"bg-light align-middle col-cooling\"> ";
                // line 120
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "cooling", [], "any", false, false, false, 120) == 600)) ? ("600") : ("No"));
                yield " </td>

                                                <th class=\"align-middle p-1\"> Tipologia costo extra </th>            
                                                <td class=\"bg-light align-middle col-price-typology\"> ";
                // line 123
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_typology", [], "any", false, false, false, 123) == "yes")) ? ("Sì") : ("No"));
                yield " </td>   

                                                ";
                // line 126
                yield "  
                                            </tr>
                                    
                                            <tr>
                                                <th class=\"align-middle p-1\"> Valore costo extra </th>
                                                <td class=\"bg-light align-middle col-price-value\"> ";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_value", [], "any", true, true, false, 131)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_value", [], "any", false, false, false, 131), "—")) : ("—")), "html", null, true);
                yield " </td>

                                                <th class=\"align-middle p-1\"> Quantità scaricata PD [kg] </th>
                                                <td class=\"bg-light align-middle col-kg-unload\"> ";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_unload", [], "any", true, true, false, 134)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_unload", [], "any", false, false, false, 134), "—")) : ("—")), "html", null, true);
                yield " </td>

                                                <th class=\"align-middle p-1\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] </th>
                                                <td class=\"bg-light align-middle col-liquid-density\"> ";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "liquid_density", [], "any", true, true, false, 137)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "liquid_density", [], "any", false, false, false, 137), "—")) : ("—")), "html", null, true);
                yield " </td>

                                                <th class=\"align-middle p-1\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> </th>
                                                <td class=\"bg-light align-middle col-gas-weight\"> ";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_weight", [], "any", true, true, false, 140)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_weight", [], "any", false, false, false, 140), "—")) : ("—")), "html", null, true);
                yield " </td>
                                                
                                                ";
                // line 144
                yield "                                            </tr>
                                            
                                            <tr>
                                                <th class=\"align-middle p-1\"> PCS/GHV <big>[</big><sup>MJ</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                                <td class=\"bg-light align-middle col-mj-kg\"> ";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mj_kg", [], "any", true, true, false, 148)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mj_kg", [], "any", false, false, false, 148), "—")) : ("—")), "html", null, true);
                yield " </td>

                                                <th class=\"align-middle p-1\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                                <td class=\"bg-light align-middle col-pcs-ghv\"> ";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "pcs_ghv", [], "any", true, true, false, 151)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "pcs_ghv", [], "any", false, false, false, 151), "—")) : ("—")), "html", null, true);
                yield " </td>

                                                <th class=\"align-middle p-1\"> Volume scaricato (liquido) <big>[</big>m<sup>3</sup><big>]</big> </th>
                                                <td class=\"bg-light align-middle col-volume-mc\"> ";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_mc", [], "any", true, true, false, 154)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_mc", [], "any", false, false, false, 154), "—")) : ("—")), "html", null, true);
                yield " </td>

                                                <th class=\"align-middle p-1\"> Volume sviluppato <big>[</big><sup>Nm<sup>3</sup></sup>&frasl;<sub>m<sup>3</sup></sub><big>]</big> </th>
                                                <td class=\"bg-light align-middle col-volume-nmc\"> ";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_nmc", [], "any", true, true, false, 157)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_nmc", [], "any", false, false, false, 157), "—")) : ("—")), "html", null, true);
                yield " </td> 

                                                ";
                // line 161
                yield "                                            </tr>
                                            
                                            <tr>
                                                <th class=\"align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>m<sup>3</sup></sub> </th>
                                                <td class=\"bg-light align-middle col-smc-mc\"> ";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_mc", [], "any", true, true, false, 165)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_mc", [], "any", false, false, false, 165), "—")) : ("—")), "html", null, true);
                yield " </td> 

                                                <th class=\"align-middle p-1\"> Gas sviluppato <big>[</big>Nm<sup>3</sup><big>]</big> </th>
                                                <td class=\"bg-light align-middle col-gas-nmc\"> ";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_nmc", [], "any", true, true, false, 168)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_nmc", [], "any", false, false, false, 168), "—")) : ("—")), "html", null, true);
                yield " </td>   

                                                <th class=\"align-middle p-1\"> Gas sviluppato <big>[</big>Sm<sup>3</sup></sup><big>]</big> </th>
                                                <td class=\"bg-light align-middle col-gas-smc\"> ";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_smc", [], "any", true, true, false, 171)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_smc", [], "any", false, false, false, 171), "—")) : ("—")), "html", null, true);
                yield " </td>   

                                                <th class=\"align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>kg</sub> </th>
                                                <td class=\"bg-light align-middle col-smc-kg\"> ";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_kg", [], "any", true, true, false, 174)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_kg", [], "any", false, false, false, 174), "—")) : ("—")), "html", null, true);
                yield " </td>  

                                                ";
                // line 177
                yield "  
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class=\"container-fluid my-3\">
                                        <div class=\"note-container\">
                                            <h4 class=\"mx-auto my-2\"> 
                                                <button type=\"button\" class=\"btn my-auto edit-data\" data-bs-toggle=\"modal\" data-bs-target=\"#editNote\"
                                                    data-id=\"";
                // line 186
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 186), "html", null, true);
                yield "\">   
                                                        <i class=\"bi bi-pencil-square mx-1\"></i> 
                                                            <span class=\"collapse-title\">
                                                                Nota:
                                                            </span>   
                                                </button> 
                                            </h4>

                                            <div class=\"container-fluid my-0\">
                                                <p>
                                                ";
                // line 196
                if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "note", [], "any", false, false, false, 196))) {
                    // line 197
                    yield "                                                    Nessuna nota 
                                                ";
                } else {
                    // line 199
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "note", [], "any", false, false, false, 199), "html", null, true);
                    yield "
                                                ";
                }
                // line 201
                yield "                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </td> 
                        </tr>
                        <!--    ===>    End Quantity Collapse For Full Transport Data    <===    -->
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
            // line 210
            yield "                ";
        }
        // line 211
        yield "                </tbody>
                        
                    <!--    ===>    TABLE FOOTER    <===    -->    
                <tfoot>
                    <tr>
                        <td colspan=\"14\" class=\"text-light text-shadow-dark align-middle mb-2 p-2\">
                            <h5 class=\"align-middle my-auto\">
                                TOTALE <i class=\"bi bi-fuel-pump-fill ms-1\"></i>:
                                    <span> ";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
        yield " </span>
                            </h5> 
                        </td>
                    </tr>
                </tfoot>
                    <!--    ===>    END TABLE FOOTER    <===    -->
        </table>
    </div>  
</section>  
    ";
        // line 228
        yield from $this->loadTemplate("transport-modal.twig", "transports-full.twig", 228)->unwrap()->yield($context);
        yield from [];
    }

    // line 231
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_jquery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 232
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 237
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha256-umbTaFxP31Fv6O1itpLS/3+v5fOAWDLOUzlmvOGaKV4=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 242
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha256-MtEA819Zls6dtLt5S5BpEMOhifPyz7gfzfgtNtY75lE=\" 
        crossorigin=\"anonymous\">
</script>
";
        yield from [];
    }

    // line 248
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datepicker(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 249
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=\" 
        crossorigin=\"anonymous\">
</script>
";
        yield from [];
    }

    // line 255
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 256
        yield "<script>
\$(document).ready(function () {
//  Transport edit button, open modal with populated transports's data
    \$(document).on('click', '.updateTrans', function () {
        const id = \$(this).data('id');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); // grab the token from a hidden input

        \$.post('get-transport', { action: 'getTransportData', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success) {
                const transport = response.transport;

                    \$('#editTransModal #id_transport').val(transport.id_transport);
                    \$('#editTransModal #slot').val(transport.slot.toUpperCase());
                    \$('#editTransModal #cmr').val(transport.cmr);
                    \$('#editTransModal #issuer').val(transport.issuer);
                    \$('#editTransModal #supplier').val(transport.supplier);
                    \$('#editTransModal #transport').val(transport.transport);
                    \$('#editTransModal #date_load').val(transport.date_load);
                    \$('#editTransModal #date_unload').val(transport.date_unload);
                    \$('#editTransModal #container').val(transport.container);

                    \$('#editTransModal #original_slot').val(transport.slot);
                    \$('#editTransModal #original_cmr').val(transport.cmr);

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
        return "transports-full.twig";
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
        return array (  555 => 256,  548 => 255,  539 => 249,  532 => 248,  523 => 242,  517 => 237,  511 => 232,  504 => 231,  499 => 228,  487 => 219,  477 => 211,  474 => 210,  452 => 201,  446 => 199,  442 => 197,  440 => 196,  427 => 186,  416 => 177,  411 => 174,  405 => 171,  399 => 168,  393 => 165,  387 => 161,  382 => 157,  376 => 154,  370 => 151,  364 => 148,  358 => 144,  353 => 140,  347 => 137,  341 => 134,  335 => 131,  328 => 126,  323 => 123,  317 => 120,  311 => 117,  305 => 114,  298 => 110,  294 => 108,  288 => 104,  278 => 97,  275 => 96,  273 => 95,  270 => 94,  264 => 91,  261 => 89,  257 => 86,  250 => 82,  247 => 81,  245 => 80,  242 => 79,  235 => 74,  228 => 71,  225 => 70,  223 => 69,  218 => 67,  212 => 66,  208 => 65,  204 => 64,  200 => 63,  196 => 62,  192 => 61,  188 => 60,  184 => 59,  180 => 58,  176 => 57,  172 => 56,  165 => 52,  161 => 51,  157 => 50,  151 => 48,  149 => 47,  131 => 46,  129 => 45,  97 => 15,  95 => 14,  86 => 13,  78 => 5,  76 => 4,  69 => 3,  56 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.twig' %}
{% block title %} Piattaforma {{ 'now'|date('Y') }} {% endblock %}
{% block head %}
    {# Bootstrap Datepicker - CSS #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" 
        integrity=\"sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=\" crossorigin=\"anonymous\">

    {# DataTables Bootstrap 5 CSS 
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css\" 
        integrity=\"sha384-5oFfLntNy8kuC2TaebWZbaHTqdh3Q+7PwYbB490gupK0YtTAB7mBJGv4bQl9g9rK\" crossorigin=\"anonymous\">#}
{% endblock %}
 
{% block content %} 
    {% include 'transports-navigation.twig' %}

<section class=\"col-12 m-auto\">
    <div class=\"d-flex justify-content-center table-responsive\">          
        <table class=\"table table-hover table-light table-stripped caption-top text-center platform\" id=\"transport-table\">
            <caption class=\"px-3 mb-2 text-white text-shadow-dark\" style=\"font-size: 1.9rem\"> 
                <span>
                    <i class=\"bi bi-arrow-bar-right my-1 fs-3\"></i> 
                        TRASPORTI PIENI 
                </span>
            </caption>
                <thead>
                    <tr class=\"border-top border-light bg-primary bg-gradient table-title\">
                        <th scope=\"col\" class=\"align-middle px-3\"> # </th>
                        <th scope=\"col\" class=\"align-middle px-2\"> Slot ID </th>
                        <th scope=\"col\" class=\"align-middle px-2\"> Numero CMR </th>
                        <th scope=\"col\" class=\"align-middle px-3\"> Emittente </th>
                        <th scope=\"col\" class=\"align-middle px-3\"> Fornitore </th>
                        <th scope=\"col\" class=\"align-middle px-3\"> Trasporto </th>
                        <th scope=\"col\" class=\"align-middle px-3\"> Univoco </th>
                        <th scope=\"col\" class=\"align-middle px-2\"> Data carico </th>
                        <th scope=\"col\" class=\"align-middle px-2\"> Data scarico </th>
                        <th scope=\"col\" class=\"align-middle\"> Mese carico </th>
                        <th scope=\"col\" class=\"align-middle\"> Settimana scarico </th>
                        <th scope=\"col\" class=\"align-middle\"> Mese scarico </th>
                        <th scope=\"col\" class=\"align-middle px-2\"> Container<br>ATB </th>
                        <th scope=\"col\" class=\"align-middle px-2\"> <i class=\"bi bi-gear\"></i> </th>
                    </tr>
                </thead>

                <tbody class=\"table-group-divider\">    
                {% if transports is not empty %}
                    {% for t in transports %}
                        {# Transport Data #}
                        <tr class=\"align-middle expand\" id=\"id-{{ t.id_transport }}\">
                            <td scope=\"row\">
                                {{ loop.index }} <br>
                                <button data-bs-toggle=\"collapse\" data-bs-target=\"#qty-{{ t.id_transport }}\"
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
                                    <button type=\"button\" class=\"edit-data\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteTrans\"
                                        data-id=\"{{ t.id_transport }}\">
                                            <i class=\"bi bi-trash\" title=\"Elimina\"></i> 
                                    </button>  
                                {% endif %}
                            </td>
                        </tr>
                        {# End Transport Data #}

                        {# Quantity Data #}
                        <tr class=\"collapse bg-white accordion-collapse collapse-platform\" id=\"qty-{{ t.id_transport }}\">        
                            <td colspan=\"14\" class=\"border-0\">
                                {#<div class=\"accordion-body collapse rowQty\" id=\"qty-{{ t.id_transport }}\">#}
                                    <h4 class=\"mx-auto my-3 text-center\"> 
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
                                                <td class=\"bg-light align-middle col-price-typology\"> {{ t.price_typology == 'yes'? 'Sì' : 'No' }} </td>   

                                                {#<th class=\"sub-title align-middle p-1\"> Accisa <big>[</big>Sm<sup>3</sup><big>]</big> </th>
                                                <td class=\"bg-light bg-gradient align-middle\">  </td> #}  
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
                                                
                                                {#<th class=\"sub-title align-middle p-1\"> Accisa totale </th>
                                                <td class=\"bg-light bg-gradient align-middle\"> </td>#}
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

                                                {#<th class=\"sub-title align-middle p-1\"> Incidenza </th> 
                                                <td class=\"bg-light bg-gradient align-middle\"> </td> #}
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

                                                {#<th class=\"sub-title align-middle p-1\"> </th> 
                                                <td class=\"bg-light bg-gradient align-middle\"> </td>#}  
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class=\"container-fluid my-3\">
                                        <div class=\"note-container\">
                                            <h4 class=\"mx-auto my-2\"> 
                                                <button type=\"button\" class=\"btn my-auto edit-data\" data-bs-toggle=\"modal\" data-bs-target=\"#editNote\"
                                                    data-id=\"{{ t.id_transport }}\">   
                                                        <i class=\"bi bi-pencil-square mx-1\"></i> 
                                                            <span class=\"collapse-title\">
                                                                Nota:
                                                            </span>   
                                                </button> 
                                            </h4>

                                            <div class=\"container-fluid my-0\">
                                                <p>
                                                {% if t.note is empty %}
                                                    Nessuna nota 
                                                {% else %}
                                                    {{ t.note }}
                                                {% endif %}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </td> 
                        </tr>
                        <!--    ===>    End Quantity Collapse For Full Transport Data    <===    -->
                    {% endfor %}
                {% endif %}
                </tbody>
                        
                    <!--    ===>    TABLE FOOTER    <===    -->    
                <tfoot>
                    <tr>
                        <td colspan=\"14\" class=\"text-light text-shadow-dark align-middle mb-2 p-2\">
                            <h5 class=\"align-middle my-auto\">
                                TOTALE <i class=\"bi bi-fuel-pump-fill ms-1\"></i>:
                                    <span> {{ total }} </span>
                            </h5> 
                        </td>
                    </tr>
                </tfoot>
                    <!--    ===>    END TABLE FOOTER    <===    -->
        </table>
    </div>  
</section>  
    {% include 'transport-modal.twig' %}
{% endblock %}

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
//  Transport edit button, open modal with populated transports's data
    \$(document).on('click', '.updateTrans', function () {
        const id = \$(this).data('id');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); // grab the token from a hidden input

        \$.post('get-transport', { action: 'getTransportData', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success) {
                const transport = response.transport;

                    \$('#editTransModal #id_transport').val(transport.id_transport);
                    \$('#editTransModal #slot').val(transport.slot.toUpperCase());
                    \$('#editTransModal #cmr').val(transport.cmr);
                    \$('#editTransModal #issuer').val(transport.issuer);
                    \$('#editTransModal #supplier').val(transport.supplier);
                    \$('#editTransModal #transport').val(transport.transport);
                    \$('#editTransModal #date_load').val(transport.date_load);
                    \$('#editTransModal #date_unload').val(transport.date_unload);
                    \$('#editTransModal #container').val(transport.container);

                    \$('#editTransModal #original_slot').val(transport.slot);
                    \$('#editTransModal #original_cmr').val(transport.cmr);

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
});
</script>
{% endblock %}", "transports-full.twig", "C:\\wamp64\\www\\liquimet\\templates\\transports-full.twig");
    }
}
