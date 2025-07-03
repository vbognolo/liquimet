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

/* platform.twig */
class __TwigTemplate_3f060efe50ca1837a2ec3342e710702a extends Template
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
            'search' => [$this, 'block_search'],
            'browse' => [$this, 'block_browse'],
            'content' => [$this, 'block_content'],
            'jquery' => [$this, 'block_jquery'],
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
        $this->parent = $this->loadTemplate("layout.twig", "platform.twig", 1);
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

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    ";
        // line 6
        yield "    <section class=\"row my-auto mx-auto search-header\">
        <div class=\"my-auto m-0 search-bar\">
            <form id=\"search-form\">
                <button type=\"button\" class=\"my-1 search-btn\">
                    <i class=\"bi bi-search\"></i>
                </button>
                <input type=\"text\" class=\"my-1 search-input\" id=\"search\" placeholder=\"      Cerca..\" />  
            </form>
        </div>
    </section>
";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_browse(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "    <!--    ===>    BROWSE FILE BAR    <===    -->
    <section class=\"row my-auto mx-auto browse-header\">
        <div class=\"my-auto m-0 browse-bar\">
            <form id=\"browse-form\" enctype=\"multipart/form-data\" method=\"POST\" action=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "import-csv\">
                <label for=\"browse-input\" class=\"my-1 browse-btn\">
                    <i class=\"bi bi-upload\"></i>
                </label>
                
                <input type=\"file\" class=\"my-1 browse-input\" id=\"browse-input\" name=\"browse-input\" 
                    onchange=\"\$('.browse-label').val(\$(this).val()); \$('.browse-group').css('display', 'block');\" />
                <input type=\"text\" class=\"my-1 browse-label\" readonly />
                
                <span class=\"my-1 browse-group\"> 
                    <button type=\"button\" class=\"my-1 remove-btn\" onclick=\"document.querySelector('.browse-label').value=''; \$('.browse-group').css('display', 'none');\">
                        <i class=\"bi bi-x-circle\"></i>
                    </button>

                    <button type=\"button\" class=\"my-1 upload-btn\">
                        <i class=\"bi bi-check-circle\"></i>
                    </button>
                </span>
                
                <!--<button type=\"button\" class=\"my-1 browse-btn\">
                    <i class=\"bi bi-upload\"></i>
                </button>-->
                
                <!--<div class=\"input-group my-1 browse-group\">
                    <input type=\"text\" class=\"my-1 browse-label\" name=\"browse-label\" readonly />  
                        <button type=\"button\" class=\"my-1 upload-btn\">
                            <span>
                                <i class=\"bi bi-plus-circle\"></i>
                            </span>
                        </button>

                        <button type=\"button\" class=\"my-1 remove-btn\">
                            <span>
                                <i class=\"bi bi-x-circle\"></i>
                            </span>
                        </button>
                </div>-->
            </form>
        </div>
    </section>
    <!--    ===>    END BROWSE FILE BAR    <===    -->
";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " 
    ";
        // line 66
        yield from $this->loadTemplate("transports-navigation.twig", "platform.twig", 66)->unwrap()->yield($context);
        // line 67
        yield "
<section class=\"col-12 m-auto\">
    <div class=\"d-flex justify-content-center table-responsive\">          
        <table class=\"table table-hover table-light table-stripped caption-top text-center platform\" id=\"transport-table\">
            <caption class=\"px-3 mb-2 text-white text-shadow-dark\" style=\"font-size: 1.9rem\"> 
                <span>
                    <i class=\"bi bi-arrow-bar-right my-1 fs-3\"></i> 
                        Piattaforma 2025
                </span>
            </caption>   

            <thead>
                <tr class=\"border-top border-light bg-primary bg-gradient table-title\">
                    <th scope=\"col\" class=\"align-middle px-3\"> # </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> Tipo </th>
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
                    <th scope=\"col\" class=\"align-middle\" colspan=\"2\"> Mese scarico </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> Container<br>ATB </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> <i class=\"bi bi-gear\"></i> </th>
                </tr>
            </thead>

            <tbody class=\"table-group-divider\">   
            ";
        // line 99
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["transports"] ?? null))) {
            // line 100
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
                // line 101
                yield "                    ";
                // line 102
                yield "                    <tr class=\"align-middle expand\" id=\"id-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 102), "html", null, true);
                yield "\">
                        <td scope=\"row all\">
                            ";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 104), "html", null, true);
                yield " <br>
                            <span class=\"text-dark note-icon\" data-bs-toggle=\"tooltip\" data-id=\"";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 105), "html", null, true);
                yield "\"
                                title=\"";
                // line 106
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "note", [], "any", false, false, false, 106)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('truncate')->getCallable()(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "note", [], "any", false, false, false, 106)), 50), "html", null, true)) : ("N/A"));
                yield "\">
                                    <i class=\"bi bi-exclamation-circle\"></i>
                            </span>

                            ";
                // line 114
                yield "                        </td>
                        <td class=\"align-middle p-1 fw-600\"> ";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "type", [], "any", false, false, false, 115)), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1 search word-wrap-container\"> ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "slot", [], "any", false, false, false, 116)), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1 search word-wrap-container\"> ";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "cmr", [], "any", false, false, false, 117)), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1 search\"> ";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "issuer", [], "any", false, false, false, 118)), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1 search\"> ";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "supplier", [], "any", false, false, false, 119)), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1 search\"> ";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "transport", [], "any", false, false, false, 120)), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1\"> ";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "univoco", [], "any", false, false, false, 121)), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1\"> ";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "date_load", [], "any", false, false, false, 122), "d/m/Y"), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1\"> ";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "date_unload", [], "any", false, false, false, 123), "d/m/Y"), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1\"> ";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_month_load", [], "any", false, false, false, 124), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1\"> ";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "week_unload", [], "any", false, false, false, 125), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1\" colspan=\"2\"> ";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_month_unload", [], "any", false, false, false, 126), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "month_unload", [], "any", false, false, false, 126), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1 last-border\"> ";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "container", [], "any", false, false, false, 127)), "html", null, true);
                yield " </td>
                        <td class=\"align-middle p-1 text-center\">
                            <button class=\"btn btn-sm\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#qty-";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 129), "html", null, true);
                yield "\"
                                aria-expanded=\"false\" aria-controls=\"qty-";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 130), "html", null, true);
                yield "\">
                                    <i class=\"bi bi-arrows-expand\"></i>
                            </button>
                        </td>
                    </tr>
                    ";
                // line 135
                yield "  
     
                        ";
                // line 138
                yield "                        <tr class=\"accordion-toggle\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 138), "html", null, true);
                yield "\">        
                            <td colspan=\"17\" class=\"border-0\">
                                <div class=\"accordion-body collapse rowQty\" id=\"qty-";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_transport", [], "any", false, false, false, 140), "html", null, true);
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
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mwh", [], "any", false, false, false, 152), "html", null, true);
                yield " 
                                                    </td>   
                                                <th class=\"sub-title align-middle p-1\"> Quantità nominale caricata [kg] </th>
                                                <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_load", [], "any", false, false, false, 156), "html", null, true);
                yield " 
                                                    </td>   
                                                <th class=\"sub-title align-middle p-1\"> Raffreddamento </th>            
                                                <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 160
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "cooling", [], "any", false, false, false, 160) == 600)) ? ("600") : ("No"));
                yield "
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Tipologia costo extra </th>            
                                                <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 164
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_typology", [], "any", false, false, false, 164) == "yes")) ? ("Sì") : ("No"));
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
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "price_value", [], "any", false, false, false, 175), "html", null, true);
                yield " 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Quantità scaricata PD [kg] </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                            ";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "kg_unload", [], "any", false, false, false, 179), "html", null, true);
                yield " 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                            ";
                // line 183
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "liquid_density", [], "any", false, false, false, 183), "html", null, true);
                yield " 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                            ";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_weight", [], "any", false, false, false, 187), "html", null, true);
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
                // line 198
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "mj_kg", [], "any", false, false, false, 198), "html", null, true);
                yield " 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "pcs_ghv", [], "any", false, false, false, 202), "html", null, true);
                yield " 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Volume scaricato (liquido) <big>[</big>m<sup>3</sup><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_mc", [], "any", false, false, false, 206), "html", null, true);
                yield " 
                                                    </td>
                                                <th class=\"sub-title align-middle p-1\"> Volume sviluppato <big>[</big><sup>Nm<sup>3</sup></sup>&frasl;<sub>m<sup>3</sup></sub><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "volume_nmc", [], "any", false, false, false, 210), "html", null, true);
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
                // line 221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_mc", [], "any", false, false, false, 221), "html", null, true);
                yield " 
                                                    </td>   
                                                <th class=\"sub-title align-middle p-1\"> Gas sviluppato <big>[</big>Nm<sup>3</sup><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 225
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_nmc", [], "any", false, false, false, 225), "html", null, true);
                yield " 
                                                    </td>   
                                                <th class=\"sub-title align-middle p-1\"> Gas sviluppato <big>[</big>Sm<sup>3</sup></sup><big>]</big> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "gas_smc", [], "any", false, false, false, 229), "html", null, true);
                yield " 
                                                    </td>   
                                                <th class=\"sub-title align-middle p-1\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>kg</sub> </th>
                                                    <td class=\"bg-light bg-gradient align-middle\"> 
                                                        ";
                // line 233
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "smc_kg", [], "any", false, false, false, 233), "html", null, true);
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
            // line 248
            yield "                    ";
        } else {
            // line 249
            yield "                        <tr>
                            <td colspan=\"16\" class=\"text-center text-light p-3\">
                                <strong> Nessun utente trovato. </strong>
                            </td>
                        </tr>
                    ";
        }
        // line 255
        yield "                    </tbody>
                     
                    ";
        // line 258
        yield "                    <tfoot>
                        <tr>
                            <td colspan=\"16\" class=\"text-light align-middle mb-2 p-2\">
                                <h5 class=\"align-middle my-auto\">
                                    TOTALE <i class=\"bi bi-fuel-pump-fill ms-1\"></i> + <i class=\"bi bi-fuel-pump\"></i>:
                                        <span> ";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
        yield " </span>
                                </h5> 
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div> 
       
    </section> 
";
        yield from [];
    }

    // line 274
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_jquery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 275
        yield "    ";
        // line 276
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
";
        yield from [];
    }

    // line 282
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 283
        yield "<script>
\$(document).ready(function() {
//  Tooltip  
    \$(\"body\").tooltip({ 
        selector: '[data-bs-toggle = tooltip]',
        placement: 'right' 
    });

//  Search Bar
    \$(\"#search\").keyup(function(){
        var value = this.value.toLowerCase().trim();

        \$(\".platform\").each(function(index){
            if(index !== -1){

                \$(this).find(\"td\").each(function(){
                    var id = \$(this).text().toLowerCase().trim();
                    var not_found = (id.indexOf(value) == -1);
                    
                    \$(this).closest('tr').toggle(!not_found);
                        return not_found;
                });
            } 
        });
    });

    \$(\"#search\").keydown(function(e){
        if(e.keyCode == 13){ 
            e.preventDefault();
                return false;
        }
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
        return "platform.twig";
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
        return array (  552 => 283,  545 => 282,  536 => 276,  534 => 275,  527 => 274,  512 => 263,  505 => 258,  501 => 255,  493 => 249,  490 => 248,  461 => 233,  454 => 229,  447 => 225,  440 => 221,  426 => 210,  419 => 206,  412 => 202,  405 => 198,  391 => 187,  384 => 183,  377 => 179,  370 => 175,  356 => 164,  349 => 160,  342 => 156,  335 => 152,  320 => 140,  314 => 138,  310 => 135,  302 => 130,  298 => 129,  293 => 127,  287 => 126,  283 => 125,  279 => 124,  275 => 123,  271 => 122,  267 => 121,  263 => 120,  259 => 119,  255 => 118,  251 => 117,  247 => 116,  243 => 115,  240 => 114,  233 => 106,  229 => 105,  225 => 104,  219 => 102,  217 => 101,  199 => 100,  197 => 99,  163 => 67,  161 => 66,  152 => 65,  105 => 22,  100 => 19,  93 => 18,  78 => 6,  76 => 5,  69 => 4,  56 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.twig' %}
{% block title %} Piattaforma {{ 'now'|date('Y') }} {% endblock %}

{% block search %}
    {# Search Bar #}
    <section class=\"row my-auto mx-auto search-header\">
        <div class=\"my-auto m-0 search-bar\">
            <form id=\"search-form\">
                <button type=\"button\" class=\"my-1 search-btn\">
                    <i class=\"bi bi-search\"></i>
                </button>
                <input type=\"text\" class=\"my-1 search-input\" id=\"search\" placeholder=\"      Cerca..\" />  
            </form>
        </div>
    </section>
{% endblock %}
 
{% block browse %}
    <!--    ===>    BROWSE FILE BAR    <===    -->
    <section class=\"row my-auto mx-auto browse-header\">
        <div class=\"my-auto m-0 browse-bar\">
            <form id=\"browse-form\" enctype=\"multipart/form-data\" method=\"POST\" action=\"{{ doc_root }}import-csv\">
                <label for=\"browse-input\" class=\"my-1 browse-btn\">
                    <i class=\"bi bi-upload\"></i>
                </label>
                
                <input type=\"file\" class=\"my-1 browse-input\" id=\"browse-input\" name=\"browse-input\" 
                    onchange=\"\$('.browse-label').val(\$(this).val()); \$('.browse-group').css('display', 'block');\" />
                <input type=\"text\" class=\"my-1 browse-label\" readonly />
                
                <span class=\"my-1 browse-group\"> 
                    <button type=\"button\" class=\"my-1 remove-btn\" onclick=\"document.querySelector('.browse-label').value=''; \$('.browse-group').css('display', 'none');\">
                        <i class=\"bi bi-x-circle\"></i>
                    </button>

                    <button type=\"button\" class=\"my-1 upload-btn\">
                        <i class=\"bi bi-check-circle\"></i>
                    </button>
                </span>
                
                <!--<button type=\"button\" class=\"my-1 browse-btn\">
                    <i class=\"bi bi-upload\"></i>
                </button>-->
                
                <!--<div class=\"input-group my-1 browse-group\">
                    <input type=\"text\" class=\"my-1 browse-label\" name=\"browse-label\" readonly />  
                        <button type=\"button\" class=\"my-1 upload-btn\">
                            <span>
                                <i class=\"bi bi-plus-circle\"></i>
                            </span>
                        </button>

                        <button type=\"button\" class=\"my-1 remove-btn\">
                            <span>
                                <i class=\"bi bi-x-circle\"></i>
                            </span>
                        </button>
                </div>-->
            </form>
        </div>
    </section>
    <!--    ===>    END BROWSE FILE BAR    <===    -->
{% endblock %}

{% block content %} 
    {% include 'transports-navigation.twig' %}

<section class=\"col-12 m-auto\">
    <div class=\"d-flex justify-content-center table-responsive\">          
        <table class=\"table table-hover table-light table-stripped caption-top text-center platform\" id=\"transport-table\">
            <caption class=\"px-3 mb-2 text-white text-shadow-dark\" style=\"font-size: 1.9rem\"> 
                <span>
                    <i class=\"bi bi-arrow-bar-right my-1 fs-3\"></i> 
                        Piattaforma 2025
                </span>
            </caption>   

            <thead>
                <tr class=\"border-top border-light bg-primary bg-gradient table-title\">
                    <th scope=\"col\" class=\"align-middle px-3\"> # </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> Tipo </th>
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
                    <th scope=\"col\" class=\"align-middle\" colspan=\"2\"> Mese scarico </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> Container<br>ATB </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> <i class=\"bi bi-gear\"></i> </th>
                </tr>
            </thead>

            <tbody class=\"table-group-divider\">   
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
                    </tfoot>
                </table>
            </div> 
       
    </section> 
{% endblock %}
   
{% block jquery %}
    {# JQuery #}
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
{% endblock %}

{% block page_script %}
<script>
\$(document).ready(function() {
//  Tooltip  
    \$(\"body\").tooltip({ 
        selector: '[data-bs-toggle = tooltip]',
        placement: 'right' 
    });

//  Search Bar
    \$(\"#search\").keyup(function(){
        var value = this.value.toLowerCase().trim();

        \$(\".platform\").each(function(index){
            if(index !== -1){

                \$(this).find(\"td\").each(function(){
                    var id = \$(this).text().toLowerCase().trim();
                    var not_found = (id.indexOf(value) == -1);
                    
                    \$(this).closest('tr').toggle(!not_found);
                        return not_found;
                });
            } 
        });
    });

    \$(\"#search\").keydown(function(e){
        if(e.keyCode == 13){ 
            e.preventDefault();
                return false;
        }
    });
});  
</script>   
{% endblock %}", "platform.twig", "C:\\wamp64\\www\\liquimet\\templates\\platform.twig");
    }
}
