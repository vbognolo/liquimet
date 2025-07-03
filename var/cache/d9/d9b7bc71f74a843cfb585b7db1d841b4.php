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

/* transport.twig */
class __TwigTemplate_e7c167dd4a2c4b032b4155ebf318165a extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "transport.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Crea Trasporto ";
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

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " 
    ";
        // line 10
        yield from $this->loadTemplate("transports-navigation.twig", "transport.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "
    <section class=\"col-9 mx-auto register-form\"> ";
        // line 13
        yield "        <div class=\"card\">
            <div class=\"card-header row mx-auto pt-3\">
                <h2 class=\"form-title mx-auto my-3\"> 
                    <i class=\"bi bi-truck-front\"></i> 
                        CREA NUOVO
                    <i class=\"bi bi-truck-front\"></i> 
                </h2>


                <h4 id=\"step-subtitle\" class=\"form-subtitle mx-auto my-2\"> 
                    Inserire i dati richiesti per creare il nuovo <b style=\"color: #6d1741\">trasporto</b>.
                </h4>
              
            </div>

            <form id=\"transport-form\" method=\"POST\" action=\"transport\" autocomplete=\"off\" novalidate>
                <input type=\"hidden\" name=\"csrf_token\" class=\"always-validate\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\">

                ";
        // line 31
        yield "   
                <fieldset class=\"mx-auto my-3 active\" data-step=\"1\">         
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"form-group col-md-4 mb-3\">
                                <label for=\"type\" class=\"form-control-label\"> Tipo: </label>
                                <select name=\"type\" id=\"type\" 
                                    class=\"form-control ";
        // line 38
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "type", [], "any", false, false, false, 38)) {
            yield "is-invalid";
        }
        yield "\">
                                        <option value=\"\" class=\"opt-type\" style=\"color: rgb(184,184,184);\"> 
                                            Scegliere un'opzione
                                        </option>

                                        <option value=\"F\" class=\"opt-type\"> 
                                            PIENO
                                        </option>
                                            
                                        <option value=\"P\" class=\"opt-type\"> 
                                            PARZIALE
                                        </option>
                                </select>

                                <div class=\"error-placeholder\">
                                    ";
        // line 53
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "type", [], "any", false, false, false, 53)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "type", [], "any", false, false, false, 53), "html", null, true);
            yield "</div>";
        }
        // line 54
        yield "                                </div>
                            </div>

                            <div class=\"form-group col-md-4 mb-3\">        
                                <label for=\"slot\" class=\"form-control-label\"> Slot ID: </label>
                                <input name=\"slot\" type=\"text\" id=\"slot\"
                                    class=\"form-control ";
        // line 60
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "slot", [], "any", false, false, false, 60)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 63
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "slot", [], "any", false, false, false, 63)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "slot", [], "any", false, false, false, 63), "html", null, true);
            yield "</div>";
        }
        // line 64
        yield "                                </div>
                            </div>

                            <div class=\"form-group col-md-4 mb-3\">        
                                <label for=\"cmr\" class=\"form-control-label\"> Numero CMR: </label>
                                <input name=\"cmr\" type=\"text\" id=\"cmr\"
                                    class=\"form-control ";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cmr", [], "any", false, false, false, 70)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 73
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cmr", [], "any", false, false, false, 73)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cmr", [], "any", false, false, false, 73), "html", null, true);
            yield "</div>";
        }
        // line 74
        yield "                                </div>
                            </div>

                            <div class=\"form-group col-md-4 mb-3\">         
                                <label for=\"issuer\" class=\"form-control-label\"> Ditta emittente: </label>
                                <input name=\"issuer\" type=\"text\" id=\"issuer\"
                                    class=\"form-control ";
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issuer", [], "any", false, false, false, 80)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 83
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issuer", [], "any", false, false, false, 83)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issuer", [], "any", false, false, false, 83), "html", null, true);
            yield "</div>";
        }
        // line 84
        yield "                                </div>
                            </div>

                            <div class=\"form-group col-md-4 mb-3\">         
                                <label for=\"supplier\" class=\"form-control-label\"> Fornitore: </label>
                                <input name=\"supplier\" type=\"text\" id=\"supplier\"
                                    class=\"form-control ";
        // line 90
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 90)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 93
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "supplier", [], "any", false, false, false, 93)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "supplier", [], "any", false, false, false, 93), "html", null, true);
            yield "</div>";
        }
        // line 94
        yield "                                </div>
                            </div>

                            <div class=\"form-group col-md-4 mb-3\">         
                                <label for=\"transport\" class=\"form-control-label\"> Trasporto: </label>
                                <input name=\"transport\" type=\"text\" id=\"transport\"
                                    class=\"form-control ";
        // line 100
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 100)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 103
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "transport", [], "any", false, false, false, 103)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "transport", [], "any", false, false, false, 103), "html", null, true);
            yield "</div>";
        }
        // line 104
        yield "                                </div>
                            </div>

                            <div class=\"form-group col-md-4 mb-3\"> 
                                <label for=\"date_load\" class=\"form-control-label\" data-toggle=\"tooltip\" title=\"--> Terminale\"> Data carico: </label>
                                <input name=\"date_load\" type=\"text\" id=\"date_load\" 
                                    class=\"form-control datepicker ";
        // line 110
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_load", [], "any", false, false, false, 110)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 113
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_load", [], "any", false, false, false, 113)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_load", [], "any", false, false, false, 113), "html", null, true);
            yield "</div>";
        }
        // line 114
        yield "                                </div>
                            </div>

                            <div class=\"form-group col-md-4 mb-3\"> 
                                <label for=\"date_unload\" class=\"form-control-label\" data-toggle=\"tooltip\" title=\"--> Padova\"> Data scarico: </label>
                                <input name=\"date_unload\" type=\"text\" id=\"date_unload\" 
                                    class=\"form-control datepicker ";
        // line 120
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_unload", [], "any", false, false, false, 120)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 123
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_unload", [], "any", false, false, false, 123)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_unload", [], "any", false, false, false, 123), "html", null, true);
            yield "</div>";
        }
        // line 124
        yield "                                </div>
                            </div>

                            <div class=\"form-group col-md-4 mb-3\">         
                                <label for=\"container\" class=\"form-control-label\"> Container: </label>
                                <input name=\"container\" type=\"text\" id=\"container\"
                                    class=\"form-control ";
        // line 130
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "container", [], "any", false, false, false, 130)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 133
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "container", [], "any", false, false, false, 133)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "container", [], "any", false, false, false, 133), "html", null, true);
            yield "</div>";
        }
        // line 134
        yield "                                </div>
                            </div>
                        </div>
                    </div>          
                </fieldset>
                ";
        // line 140
        yield "
                ";
        // line 142
        yield "                <fieldset class=\"mx-auto my-3\" data-step=\"2\">         
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"form-group col-md-6 mb-3\">    
                                <label for=\"kg_load\" data-bs-toggle=\"tooltip\" title=\"--> Quantità nominale [ kg ]\" class=\"form-control-label\"> 
                                    Quantità caricata: 
                                </label>
                                <input name=\"kg_load\" type=\"text\" id=\"kg_load\"
                                       class=\"form-control ";
        // line 150
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_load", [], "any", false, false, false, 150)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 153
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_load", [], "any", false, false, false, 153)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_load", [], "any", false, false, false, 153), "html", null, true);
            yield "</div>";
        }
        // line 154
        yield "                                </div>
                            </div>

                            <div class=\"form-group col-md-6 mb-3\">
                                <label for=\"cooling\" class=\"form-control-label\"> Raffreddamento: </label>
                                <select name=\"cooling\" id=\"cooling\" class=\"form-control ";
        // line 159
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cooling", [], "any", false, false, false, 159)) {
            yield "is-invalid";
        }
        yield "\">
                                    <option class=\"opt-type\" style=\"color: lightgray;\"> 
                                        Scegliere un'opzione
                                    </option>

                                    <option value=\"600\" class=\"opt-type\"> 
                                        SÌ = 600
                                    </option>
                                                
                                    <option value=\"0\" class=\"opt-type\"> 
                                        NO = 0
                                    </option>
                                </select>

                                <div class=\"error-placeholder\">
                                    ";
        // line 174
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cooling", [], "any", false, false, false, 174)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cooling", [], "any", false, false, false, 174), "html", null, true);
            yield "</div>";
        }
        // line 175
        yield "                                </div>
                            </div>

                            <div class=\"form-group col-md-6 mb-3\">
                                <label for=\"price_typology\" class=\"form-control-label\"> Tipologia costo: </label>
                                <select name=\"price_typology\" id=\"price_typology\" class=\"form-control ";
        // line 180
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_typology", [], "any", false, false, false, 180)) {
            yield "is-invalid";
        }
        yield "\">
                                    <option value=\"\" class=\"opt-type\" style=\"color: lightgray;\"> 
                                        Scegliere un'opzione
                                    </option>

                                    <option value=\"yes\" class=\"opt-type\"> 
                                        SÌ
                                    </option>
                                                
                                    <option value=\"no\" class=\"opt-type\"> 
                                        NO
                                    </option>
                                </select>

                                <div class=\"error-placeholder\">
                                    ";
        // line 195
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_typology", [], "any", false, false, false, 195)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_typology", [], "any", false, false, false, 195), "html", null, true);
            yield "</div>";
        }
        // line 196
        yield "                                </div>
                            </div>

                            <div class=\"form-group col-md-6 mb-3\">        
                                <label for=\"price_value\" class=\"form-control-label\"> Valore costo: </label>
                                <input name=\"price_value\" type=\"text\" id=\"price_value\"
                                       class=\"form-control ";
        // line 202
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_value", [], "any", false, false, false, 202)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 205
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_value", [], "any", false, false, false, 205)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_value", [], "any", false, false, false, 205), "html", null, true);
            yield "</div>";
        }
        // line 206
        yield "                                </div>
                            </div>

                            <div class=\"form-group col-md-6 mb-3\">        
                                <label for=\"kg_unload\" data-bs-toggle=\"tooltip\" title=\"--> [ kg ]\" class=\"form-control-label\"> 
                                    Quantità scaricata: 
                                </label>
                                <input name=\"kg_unload\" type=\"text\" id=\"kg_unload\"
                                       class=\"form-control ";
        // line 214
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_unload", [], "any", false, false, false, 214)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 217
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_unload", [], "any", false, false, false, 217)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_unload", [], "any", false, false, false, 217), "html", null, true);
            yield "</div>";
        }
        // line 218
        yield "                                </div>
                            </div>
                      
                            <div class=\"form-group col-md-6 mb-3\">        
                                <label for=\"liquid_density\" data-bs-toggle=\"tooltip\" title=\"--> [ kg &frasl; m³ ]\" class=\"form-control-label\"> 
                                    Densità (liquido): 
                                </label>
                                <input name=\"liquid_density\" type=\"text\" id=\"liquid_density\"
                                       class=\"form-control ";
        // line 226
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "liquid_density", [], "any", false, false, false, 226)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 229
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "liquid_density", [], "any", false, false, false, 229)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "liquid_density", [], "any", false, false, false, 229), "html", null, true);
            yield "</div>";
        }
        // line 230
        yield "                                </div>
                            </div>

                            <div class=\"form-group col-md-6 mb-3\">        
                                <label for=\"gas_weight\" data-bs-toggle=\"tooltip\" title=\"--> [ kg &frasl; Nm³ ]\" class=\"form-control-label\"> 
                                    Peso specifico (gas): 
                                </label>
                                <input name=\"gas_weight\" type=\"text\" id=\"gas_weight\"
                                       class=\"form-control ";
        // line 238
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gas_weight", [], "any", false, false, false, 238)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 241
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gas_weight", [], "any", false, false, false, 241)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gas_weight", [], "any", false, false, false, 241), "html", null, true);
            yield "</div>";
        }
        // line 242
        yield "                                </div>
                            </div>
   
                            <div class=\"form-group col-md-6 mb-3\">        
                                <label for=\"pcs_ghv\" data-bs-toggle=\"tooltip\" title=\"--> [ kg &frasl; m³ ]\" class=\"form-control-label\"> 
                                    PCS/GHV: 
                                </label>
                                <input name=\"pcs_ghv\" type=\"text\" id=\"pcs_ghv\"
                                       class=\"form-control ";
        // line 250
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pcs_ghv", [], "any", false, false, false, 250)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 253
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pcs_ghv", [], "any", false, false, false, 253)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pcs_ghv", [], "any", false, false, false, 253), "html", null, true);
            yield "</div>";
        }
        // line 254
        yield "                                </div>
                            </div>
                        </div>

                        ";
        // line 277
        yield "                    </div>
                </fieldset>
                ";
        // line 280
        yield "
                ";
        // line 282
        yield "                <fieldset class=\"mx-auto my-3\" data-step=\"3\">
                    <div class=\"card-body\">
                        <div class=\"row table-responsive mx-auto my-2\">     
                            <table class=\"table table-sm table-borderless\" id=\"partials\">
                                <tr class=\"mx-auto my-2\">
                                    <th class=\"mx-auto\"> <i class=\"bi bi-gear my-auto\"></i> </th>
                                    <th class=\"mx-auto\" data-bs-toggle=\"tooltip\" title=\"--> Dest. cliente\"> Destinazione </th>
                                    <th class=\"mx-auto\"> EXW </th>
                                    <th class=\"mx-auto\" data-bs-toggle=\"tooltip\" title=\"--> Data scarico\"> Data </th>
                                    <th class=\"mx-auto\" data-bs-toggle=\"tooltip\" title=\"--> Luogo scarico\"> Luogo </th>
                                    <th class=\"mx-auto\" data-bs-toggle=\"tooltip\" title=\"--> Quantità scaricata [ kg ]\"> Quantità </th>
                                    <th class=\"mx-auto\" data-bs-toggle=\"tooltip\" title=\"--> Fattura Rif.\"> Fattura </th>  
                                    <th class=\"mx-auto\"></th>             
                                </tr>
                                  
                                <tr class=\"mx-auto my-1\">
                                    <td class=\"part-btns\">
                                        <input type=\"hidden\" name=\"id[]\" id=\"id_partial\" value=\"0\"/>
                                    </td>
                              
                                    <td class=\"col-3\">
                                        <input type=\"text\" name=\"destination_0\" class=\"form-control destination\" id=\"destination_0\" /> 
                                    </td>
    
                                    <td class=\"col-2\">
                                        <select class=\"form-control exw\" name=\"exw\" id=\"exw_0\">
                                            <option value=\"\"></option>
                                            <option value=\"fos\"> FOS </option>
                                            <option value=\"destino\"> DESTINO </option>
                                        </select>
                                    </td>
                                                
                                    <td class=\"col-2\"> 
                                        <input type=\"text\" class=\"form-control date\" name=\"date_0\" autocomplete=\"off\" id=\"date_0\" />
                                    </td>
                            
                                    <td class=\"col-2\">
                                        <input type=\"text\" class=\"form-control place\" name=\"place_0\" id=\"place_0\" />
                                    </td>
                            
                                    <td class=\"col-2\">
                                        <input type=\"text\" class=\"form-control mx-auto q_unloaded\" name=\"q_unloaded_0\" id=\"q_unloaded_0\" />
                                    </td>
                            
                                    <td class=\"col mx-auto\">
                                        <input type=\"text\" class=\"form-control mx-auto invoice\" name=\"invoice_0\" id=\"invoice_0\" />
                                    </td>

                                    <td class=\"part-btns\">
                                        <button type=\"button\" class=\"my-auto px-1 delete-btn\"
                                            onclick=\"partRows.delRow(this)\">
                                                <span class=\"my-auto\">
                                                    <i class=\"bi bi-x-square\"></i>
                                                </span>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
    
                    ";
        // line 362
        yield "                </fieldset>
                ";
        // line 364
        yield "
                ";
        // line 366
        yield "                <fieldset class=\"mx-auto my-3\" data-step=\"4\">         
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-12 mb-3\">    
                                <label for=\"note\" class=\"form-control-label\"> Nota: </label>
                                <textarea name=\"note\" id=\"note\" rows=\"1\" 
                                          class=\"form-control ";
        // line 372
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "note", [], "any", false, false, false, 372)) {
            yield "is-invalid";
        }
        yield "\"></textarea>

                                <div class=\"error-placeholder\">
                                    ";
        // line 375
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_load", [], "any", false, false, false, 375)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_load", [], "any", false, false, false, 375), "html", null, true);
            yield "</div>";
        }
        // line 376
        yield "                                </div>
                            </div>

                            <div class=\"col-md-12 mb-3\">
                                <label for=\"note\" class=\"form-control-label my-1\"> Nota </label>
                                <textarea name=\"note\" id=\"note\" class=\"form-control edit-note\"  
                                          style=\"height: 80px; text-align: center; white-space-collapse: collapse\"></textarea>
                            </div>
                        </div>
                    </div>
                </fieldset>
                ";
        // line 388
        yield "
                ";
        // line 389
        yield "                      
                <div class=\"card-footer mx-auto\">      
                    <button type=\"button\" class=\"my-2 action-button prev\" onclick=\"history.back();\">
                        <span class=\"m-auto\">
                            <i class=\"bi bi-chevron-double-left\"></i> INDIETRO
                        </span>
                    </button>
                            
                    <button type=\"button\" class=\"my-2 action-button next\">
                        <span class=\"m-auto\">
                            AVANTI <i class=\"bi bi-chevron-double-right\"></i>
                        </span>
                    </button>

                    <button type=\"submit\" class=\"my-2 action-button save\" name=\"save\">
                        <span class=\"m-auto\">
                            SALVA <i class=\"bi bi-chevron-double-right\"></i>
                        </span>
                    </button>

                    <button type=\"button\" class=\"my-2 action-button add\" name=\"add\" id=\"add-part\">
                        <span class=\"m-auto\">
                            AGGIUNGI <i class=\"bi bi-plus-circle\"></i>
                        </span>
                    </button>
                </div> 
                ";
        // line 416
        yield "            </form>
        </div>
    </section>
";
        yield from [];
    }

    // line 421
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_jquery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 422
        yield "    <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
            integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
            crossorigin=\"anonymous\">
    </script>
        ";
        // line 427
        yield "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
            integrity=\"sha256-umbTaFxP31Fv6O1itpLS/3+v5fOAWDLOUzlmvOGaKV4=\" 
            crossorigin=\"anonymous\">
    </script>
        ";
        // line 432
        yield "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
            integrity=\"sha256-MtEA819Zls6dtLt5S5BpEMOhifPyz7gfzfgtNtY75lE=\" 
            crossorigin=\"anonymous\">
    </script>
";
        yield from [];
    }

    // line 438
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datepicker(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 439
        yield "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
            integrity=\"sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=\" 
            crossorigin=\"anonymous\">
    </script>
";
        yield from [];
    }

    // line 445
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 446
        yield "<script> 
\$(document).ready(function () {
    \$('[data-bs-toggle=\"tooltip\"]').tooltip();

/***  Update header subtitle with fieldset change  ***/
    function formSubtitle() {
        const step = \$('fieldset.active').data('step');
        let subtitle = '';

            switch (step) {
                case 1: subtitle = 'Inserire i dati richiesti per creare il nuovo <b style=\"color: #6d1741\">trasporto</b>.'; break;
                case 2: subtitle = 'Inserire le <b style=\"color: #6d1741\">quantità</b> del nuovo trasporto.'; break;
                case 3: subtitle = 'Inserire gli <b style=\"color: #6d1741\">scarichi parziali</b> del nuovo trasporto.'; break;
                case 4: subtitle = 'Inserire la nota per il nuovo trasporto. (Non obbligatorio)'; break;
            }

        \$('#step-subtitle').html(subtitle);
    }

/***  Initial subtitle load  ***/
    formSubtitle();

/***  Bind next button to navigation  ***/
    \$(\".next\").on('click', function () {
        const currentStep = \$('fieldset.active');
        const nextStep = \$('fieldset[data-step=\"' + (currentStep.data('step') + 1) + '\"]');

            currentStep.find(':input').prop('disabled', false);
            \$('fieldset:not(.active) :input:not(.always-validate)').prop('disabled', true);

                if (\$('#transport-form').valid()) {
                    currentStep.removeClass('active').hide();
                    nextStep.addClass('active').show();
                    formSubtitle();
                    
                    \$('html, body').animate({ scrollTop: 0 }, 300);
                } else {
                    const firstError = validator.errorList[0]?.element;
                        if (firstError) {
                            \$('html, body').animate({ scrollTop: \$(firstError).offset().top - 100 }, 300);
                        }
                }

            \$('fieldset :input').prop('disabled', false); 
    });

/***  Bind previous button to navigation  ***/
    \$(\".prev\").on('click', function () {
        const current = \$(\"fieldset.active\");
        const step = current.data('step');
        const prevStep = \$('fieldset[data-step=\"' + (step - 1) + '\"]');

            current.removeClass('active').hide();
            prevStep.addClass('active').show();
            formSubtitle();
    });

/***  Function to check transport availability by Slot ID and CMR Number  ***/
    function checkAvailability(field, value, id = null) {
        \$.ajax({
            url: \"/check-transport\",
            type: \"POST\",
            data: { [field]: value, id_transport: id },
            dataType: \"json\",
            success: function (response) {
                const inputField = \$(\"#\" + field);
                const errorPlaceholder = inputField.closest(\".form-group\").find(\".error-placeholder\");

                    if (response[field]) {
                        inputField.removeClass(\"is-valid\").addClass(\"is-invalid\");
                        errorPlaceholder.addClass(\"invalid-feedback\").html(response[field]).show();
                    } else {
                        inputField.removeClass(\"is-invalid\").addClass(\"is-valid\");
                        errorPlaceholder.removeClass(\"invalid-feedback\").hide();
                    }
            },
        });
    }

//  Trigger validation when typing slot and cmr input fields
    let debounceTimer;

    \$(\"#slot, #cmr\").on(\"input\", function () {
        clearTimeout(debounceTimer);
        let field = \$(this).attr(\"id\");
        let value = \$(this).val();

            if (value.length >= 5) {
                debounceTimer = setTimeout(() => {
                    checkAvailability(field, value);
                }, 250); 
            }
    });

/***  Datepicker setup  ***/
    \$('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        endDate: new Date(),
        autoclose: true,
        clearBtn: false 
    })
        .on('changeDate', function (e) {
            \$(this).trigger('change');                                  // Validator catches the value
                if (this.id === 'date_load') {
                    \$('#date_unload').datepicker('setStartDate', e.date)
                                     .datepicker('update', e.date);
                    }
                    \$(this).valid(); 
    })
        .on('show', function () {
            \$(this).data('selectedDate', \$(this).val());                // Store current value when datepicker opens
    })
        .on('hide', function () {
            const currentVal = \$(this).val();   
                if (!currentVal) {                                      // If the user didn't select anything and just clicked out, preserve current value
                    const storedDate = \$(this).data('selectedDate');
                        if (storedDate) {
                            \$(this).val(storedDate);                    // Restore value
                        }
                }
    });

/***  Validation method for defining current date as max date  ***/
    \$.validator.addMethod(\"noFutureDate\", function (value, element) {
        if (!value) return true;                                            // Allow empty if not required

        const parts = value.split(\"-\");
        const inputDate = new Date(parts[2], parts[1] - 1, parts[0]);       // Assuming dd-mm-yyyy
        const today = new Date();
        
        today.setHours(0, 0, 0, 0);                                         // Remove time part
            return inputDate <= today;
    });

/***  Validation method for defining that date_unload must be greater than or equal to date_load  ***/
    \$.validator.addMethod(\"dateAfterOrEqual\", function(value, element, params) {
        const dateLoadVal = \$(params).val();
            if (!value || !dateLoadVal) return true;

        // Parse dates as dd-mm-yyyy
        const partsUnload = value.split(\"-\");
        const partsLoad = dateLoadVal.split(\"-\");

        const dateUnload = new Date(partsUnload[2], partsUnload[1] - 1, partsUnload[0]);
        const dateLoad = new Date(partsLoad[2], partsLoad[1] - 1, partsLoad[0]);
            return this.optional(element) || dateUnload >= dateLoad;
    });

/***  Custom validation rule to ensure the \"Scegliere un'opzione\" option is not selected  ***/
    \$.validator.addMethod(\"notPlaceholder\", function(value, element) {
        return value !== \"\" && value !== \"0\"; // Assuming \"0\" or \"\" represents the placeholder option value
    });

/***  Validator [JQuery Validation]  ***/
    const validator = \$('#transport-form').validate({
        ignore: \":hidden:not(.always-validate)\",                // Skip hidden fields unless forced
        onkeyup: false,
        onfocusout: function (element) {
            if (\$(element).is(':visible')) {
                this.element(element);                          // Validate just this field
            }
        },
        onclick: false,
        rules: {
            slot: { required: true, rangelength: [5, 35], pattern: \"^[A-Za-z0-9_]+\$\" },
            cmr: { required: true, rangelength: [5, 35], pattern: \"^[A-Za-z0-9\\-]+\$\" },
            type: { required: true, notPlaceholdere: true },
            issuer: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
            supplier: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
            transport: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
            date_load: { required: true, noFutureDate: true },
            date_unload: { required: true, noFutureDate: true, dateAfterOrEqual: \"#date_load\" },
            container: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
            kg_load: { required: true, number: true, min: 0 },
            cooling: { required: true, notPlaceholder: true },
            price_typology: { required: true, notPlaceholder: true },
            price_value: { 
                required: {
                    depends: function() {
                        return \$('#price_typology').val() === 'yes';
                    }
                },
                digits: true,
                min: 1
            },
            kg_unload: { required: true, number: true, min: 0 },
            liquid_density: { required: true, number: true, min: 0 },
            gas_weight: { required: true, number: true, min: 0 },
            pcs_ghv: { required: true, number: true, min: 0 }
        },
        messages: {
            slot: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 5 e al massimo 35 caratteri.\",
                pattern: \"Slot ID può contenere lettere, numeri e underscore (_). Spazi non consentiti.\"
            },
            cmr: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 5 e al massimo 35 caratteri.\",
                pattern: \"CMR può contenere lettere, numeri e trattini (-). Spazi non consentiti.\"
            },
            type: {
                required: \"Campo obbligatorio.\"
            },
            issuer: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                pattern: \"Emittente può contenere solo lettere e spazi (senza spazio iniziale).\"
            }, 
            supplier: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                pattern: \"Fornitore può contenere solo lettere e spazi (senza spazio iniziale).\"
            }, 
            transport: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                pattern: \"Trasporto può contenere solo lettere e spazi (senza spazio iniziale).\"
            },
            date_load: {
                required: \"Campo obbligatorio.\",
                noFutureDate: \"Inserire una data valida. Non sono permesse date future.\"
            }, 
            date_unload: {
                required: \"Campo obbligatorio.\",
                noFutureDate: \"Inserire una data valida. Non sono permesse date future.\",
                dateAfterOrEqual: \"La data di scarico non può essere precedente alla data di carico.\"
            }, 
            container: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                pattern: \"Container può contenere solo lettere e spazi (senza spazio iniziale).\"
            },
            kg_load: {
                required: \"Campo obbligatorio.\",
                number: \"Quantità caricata deve essere un numero positivo (intero o decimale).\",
                min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
            },
            cooling: {
                required: \"Campo obbligatorio.\",
                //digits: \"Raffreddamento deve essere un numero intero positivo, senza segni o decimali.\",
                notPlaceholder: \"Selezionare un'opzione.\"
            },
            price_typology: {
                required: \"Campo obbligatorio.\",
                notPlaceholder: \"Selezionare un'opzione.\"
            }, 
            price_value: {
                required: \"Campo obbligatorio.\",
                digits: \"Valore costo extra deve essere un numero intero positivo maggiore o uguale a 1, senza segni o decimali.\",
                min: \"Il valore minimo deve essere maggiore o uguale a 1.\"
            }, 
            kg_unload: {
                required: \"Campo obbligatorio.\",
                number: \"Quantità scaricata deve essere un numero positivo (intero o decimale).\",
                min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
            },
            liquid_density: {
                required: \"Campo obbligatorio.\",
                number: \"Densità liquido deve essere un numero positivo (intero o decimale).\",
                min: \"Il valore minimo deve essere maggiore o uguale a 0.\",
            }, 
            gas_weight: {
                required: \"Campo obbligatorio.\",
                number: \"Peso specifico (gas) deve essere un numero positivo (intero o decimale).\",
                min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
            }, 
            pcs_ghv: {
                required: \"Campo obbligatorio.\",
                number: \"PCS/GHV deve essere un numero positivo (intero o decimale).\",
                min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
            }
        },
        errorPlacement: function(error, element) {
            error.addClass(\"text-danger small\");
            element.removeClass(\"is-valid\").addClass(\"is-invalid\");                                             
            element.closest(\".form-group\").find(\".error-placeholder\").html(error);      
        },
        highlight: function (element) {
            \$(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            \$(element).removeClass('is-invalid');
            \$(element).closest('.form-group').find('.error-placeholder').html('');
        },
        invalidHandler: function (form, validator) {                // Only validate visible fieldset
            if (validator.errorList.length) {
                const firstError = validator.errorList[0].element;
                const errorStep = \$(firstError).closest('fieldset').data('step');

                \$('fieldset').removeClass('active').hide();
                const targetStep = \$('fieldset[data-step=\"' + errorStep + '\"]');

                targetStep.addClass('active').show();
                formSubtitle();

                \$('html, body').animate({
                    scrollTop: \$(firstError).offset().top - 100
                }, 250);
            }
        }
    });

//  Handle next/previous button clicks with validation
    /*window.ButtonClick = function (step) {
        const current = \$('fieldset:visible');
        const currentStep = current.data('step');
        const nextStep = currentStep + step;

            if (step === 1 && !validator.form()) {
                return false;   
            }

        \$('fieldset').removeClass('active').hide();
        const next = \$('fieldset[data-step=\"' + nextStep + '\"]').addClass('active').fadeIn();
        formSubtitle();
    };*/

//  On submit validate form and AJAX form submission
    \$(\"#transport-form\").submit(function (e) {
        e.preventDefault();                             // Prevent the default form submission

        if (\$(this).valid()) {
            const formData = \$(this).serialize();         // Serialize form data

            \$.ajax({
                url: \$(this).attr(\"action\"),            // PHP file to handle the submission
                type: 'POST',
                data: formData,
                dataType: \"json\",
                success: function(response) {
                    if (response.success) {        
                        //  Encode the new ID
                        const created = encodeURIComponent(response.created);
        
                        //  Redirect to users page with newId in the query string
                        window.location.href = '/platform?created=' + created + '#id-' + created;
                        document.getElementById('id-' + response.created)?.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    } else {
                        \$(\".invalid-feedback\").remove();                    
                        \$.each(response.errors, function (field, message) {
                            const input = \$(\"[name='\" + field + \"']\");
                            input.addClass(\"is-invalid\");
                            input.after('<div class=\"invalid-feedback\">' + message + '</div>');
                        });
                    }
                },
                error: function(xhr) {
                    alert('Error: ' + xhr.responseText);
                }
            });
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
        return "transport.twig";
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
        return array (  756 => 446,  749 => 445,  740 => 439,  733 => 438,  724 => 432,  718 => 427,  712 => 422,  705 => 421,  697 => 416,  669 => 389,  666 => 388,  653 => 376,  647 => 375,  639 => 372,  631 => 366,  628 => 364,  625 => 362,  562 => 282,  559 => 280,  555 => 277,  549 => 254,  543 => 253,  535 => 250,  525 => 242,  519 => 241,  511 => 238,  501 => 230,  495 => 229,  487 => 226,  477 => 218,  471 => 217,  463 => 214,  453 => 206,  447 => 205,  439 => 202,  431 => 196,  425 => 195,  405 => 180,  398 => 175,  392 => 174,  372 => 159,  365 => 154,  359 => 153,  351 => 150,  341 => 142,  338 => 140,  331 => 134,  325 => 133,  317 => 130,  309 => 124,  303 => 123,  295 => 120,  287 => 114,  281 => 113,  273 => 110,  265 => 104,  259 => 103,  251 => 100,  243 => 94,  237 => 93,  229 => 90,  221 => 84,  215 => 83,  207 => 80,  199 => 74,  193 => 73,  185 => 70,  177 => 64,  171 => 63,  163 => 60,  155 => 54,  149 => 53,  129 => 38,  120 => 31,  115 => 29,  97 => 13,  94 => 11,  92 => 10,  83 => 9,  76 => 5,  74 => 4,  67 => 3,  56 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.twig' %}
{% block title %} Crea Trasporto {% endblock %}
{% block head %}
    {# Bootstrap Datepicker - CSS #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" 
        integrity=\"sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=\" crossorigin=\"anonymous\">
{% endblock %}
 
{% block content %} 
    {% include 'transports-navigation.twig' %}

    <section class=\"col-9 mx-auto register-form\"> {# new-form class #}
        <div class=\"card\">
            <div class=\"card-header row mx-auto pt-3\">
                <h2 class=\"form-title mx-auto my-3\"> 
                    <i class=\"bi bi-truck-front\"></i> 
                        CREA NUOVO
                    <i class=\"bi bi-truck-front\"></i> 
                </h2>


                <h4 id=\"step-subtitle\" class=\"form-subtitle mx-auto my-2\"> 
                    Inserire i dati richiesti per creare il nuovo <b style=\"color: #6d1741\">trasporto</b>.
                </h4>
              
            </div>

            <form id=\"transport-form\" method=\"POST\" action=\"transport\" autocomplete=\"off\" novalidate>
                <input type=\"hidden\" name=\"csrf_token\" class=\"always-validate\" value=\"{{ csrf_token }}\">

                {# Fieldset 1 => Insert Transport #}   
                <fieldset class=\"mx-auto my-3 active\" data-step=\"1\">         
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"form-group col-md-4 mb-3\">
                                <label for=\"type\" class=\"form-control-label\"> Tipo: </label>
                                <select name=\"type\" id=\"type\" 
                                    class=\"form-control {% if errors.type %}is-invalid{% endif %}\">
                                        <option value=\"\" class=\"opt-type\" style=\"color: rgb(184,184,184);\"> 
                                            Scegliere un'opzione
                                        </option>

                                        <option value=\"F\" class=\"opt-type\"> 
                                            PIENO
                                        </option>
                                            
                                        <option value=\"P\" class=\"opt-type\"> 
                                            PARZIALE
                                        </option>
                                </select>

                                <div class=\"error-placeholder\">
                                    {% if errors.type %}<div class=\"invalid-feedback\">{{ errors.type }}</div>{% endif %}
                                </div>
                            </div>

                            <div class=\"form-group col-md-4 mb-3\">        
                                <label for=\"slot\" class=\"form-control-label\"> Slot ID: </label>
                                <input name=\"slot\" type=\"text\" id=\"slot\"
                                    class=\"form-control {% if errors.slot %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.slot %}<div class=\"invalid-feedback\">{{ errors.slot }}</div>{% endif %}
                                </div>
                            </div>

                            <div class=\"form-group col-md-4 mb-3\">        
                                <label for=\"cmr\" class=\"form-control-label\"> Numero CMR: </label>
                                <input name=\"cmr\" type=\"text\" id=\"cmr\"
                                    class=\"form-control {% if errors.cmr %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.cmr %}<div class=\"invalid-feedback\">{{ errors.cmr }}</div>{% endif %}
                                </div>
                            </div>

                            <div class=\"form-group col-md-4 mb-3\">         
                                <label for=\"issuer\" class=\"form-control-label\"> Ditta emittente: </label>
                                <input name=\"issuer\" type=\"text\" id=\"issuer\"
                                    class=\"form-control {% if errors.issuer %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.issuer %}<div class=\"invalid-feedback\">{{ errors.issuer }}</div>{% endif %}
                                </div>
                            </div>

                            <div class=\"form-group col-md-4 mb-3\">         
                                <label for=\"supplier\" class=\"form-control-label\"> Fornitore: </label>
                                <input name=\"supplier\" type=\"text\" id=\"supplier\"
                                    class=\"form-control {% if errors.email %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.supplier %}<div class=\"invalid-feedback\">{{ errors.supplier }}</div>{% endif %}
                                </div>
                            </div>

                            <div class=\"form-group col-md-4 mb-3\">         
                                <label for=\"transport\" class=\"form-control-label\"> Trasporto: </label>
                                <input name=\"transport\" type=\"text\" id=\"transport\"
                                    class=\"form-control {% if errors.email %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.transport %}<div class=\"invalid-feedback\">{{ errors.transport }}</div>{% endif %}
                                </div>
                            </div>

                            <div class=\"form-group col-md-4 mb-3\"> 
                                <label for=\"date_load\" class=\"form-control-label\" data-toggle=\"tooltip\" title=\"--> Terminale\"> Data carico: </label>
                                <input name=\"date_load\" type=\"text\" id=\"date_load\" 
                                    class=\"form-control datepicker {% if errors.date_load %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.date_load %}<div class=\"invalid-feedback\">{{ errors.date_load }}</div>{% endif %}
                                </div>
                            </div>

                            <div class=\"form-group col-md-4 mb-3\"> 
                                <label for=\"date_unload\" class=\"form-control-label\" data-toggle=\"tooltip\" title=\"--> Padova\"> Data scarico: </label>
                                <input name=\"date_unload\" type=\"text\" id=\"date_unload\" 
                                    class=\"form-control datepicker {% if errors.date_unload %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.date_unload %}<div class=\"invalid-feedback\">{{ errors.date_unload }}</div>{% endif %}
                                </div>
                            </div>

                            <div class=\"form-group col-md-4 mb-3\">         
                                <label for=\"container\" class=\"form-control-label\"> Container: </label>
                                <input name=\"container\" type=\"text\" id=\"container\"
                                    class=\"form-control {% if errors.container %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.container %}<div class=\"invalid-feedback\">{{ errors.container }}</div>{% endif %}
                                </div>
                            </div>
                        </div>
                    </div>          
                </fieldset>
                {# END Fieldset 1 => Insert Transport #}

                {# Fieldset 2 => Insert Quantity #}
                <fieldset class=\"mx-auto my-3\" data-step=\"2\">         
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"form-group col-md-6 mb-3\">    
                                <label for=\"kg_load\" data-bs-toggle=\"tooltip\" title=\"--> Quantità nominale [ kg ]\" class=\"form-control-label\"> 
                                    Quantità caricata: 
                                </label>
                                <input name=\"kg_load\" type=\"text\" id=\"kg_load\"
                                       class=\"form-control {% if errors.kg_load %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.kg_load %}<div class=\"invalid-feedback\">{{ errors.kg_load }}</div>{% endif %}
                                </div>
                            </div>

                            <div class=\"form-group col-md-6 mb-3\">
                                <label for=\"cooling\" class=\"form-control-label\"> Raffreddamento: </label>
                                <select name=\"cooling\" id=\"cooling\" class=\"form-control {% if errors.cooling %}is-invalid{% endif %}\">
                                    <option class=\"opt-type\" style=\"color: lightgray;\"> 
                                        Scegliere un'opzione
                                    </option>

                                    <option value=\"600\" class=\"opt-type\"> 
                                        SÌ = 600
                                    </option>
                                                
                                    <option value=\"0\" class=\"opt-type\"> 
                                        NO = 0
                                    </option>
                                </select>

                                <div class=\"error-placeholder\">
                                    {% if errors.cooling %}<div class=\"invalid-feedback\">{{ errors.cooling }}</div>{% endif %}
                                </div>
                            </div>

                            <div class=\"form-group col-md-6 mb-3\">
                                <label for=\"price_typology\" class=\"form-control-label\"> Tipologia costo: </label>
                                <select name=\"price_typology\" id=\"price_typology\" class=\"form-control {% if errors.price_typology %}is-invalid{% endif %}\">
                                    <option value=\"\" class=\"opt-type\" style=\"color: lightgray;\"> 
                                        Scegliere un'opzione
                                    </option>

                                    <option value=\"yes\" class=\"opt-type\"> 
                                        SÌ
                                    </option>
                                                
                                    <option value=\"no\" class=\"opt-type\"> 
                                        NO
                                    </option>
                                </select>

                                <div class=\"error-placeholder\">
                                    {% if errors.price_typology %}<div class=\"invalid-feedback\">{{ errors.price_typology }}</div>{% endif %}
                                </div>
                            </div>

                            <div class=\"form-group col-md-6 mb-3\">        
                                <label for=\"price_value\" class=\"form-control-label\"> Valore costo: </label>
                                <input name=\"price_value\" type=\"text\" id=\"price_value\"
                                       class=\"form-control {% if errors.price_value %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.price_value %}<div class=\"invalid-feedback\">{{ errors.price_value }}</div>{% endif %}
                                </div>
                            </div>

                            <div class=\"form-group col-md-6 mb-3\">        
                                <label for=\"kg_unload\" data-bs-toggle=\"tooltip\" title=\"--> [ kg ]\" class=\"form-control-label\"> 
                                    Quantità scaricata: 
                                </label>
                                <input name=\"kg_unload\" type=\"text\" id=\"kg_unload\"
                                       class=\"form-control {% if errors.kg_unload %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.kg_unload %}<div class=\"invalid-feedback\">{{ errors.kg_unload }}</div>{% endif %}
                                </div>
                            </div>
                      
                            <div class=\"form-group col-md-6 mb-3\">        
                                <label for=\"liquid_density\" data-bs-toggle=\"tooltip\" title=\"--> [ kg &frasl; m³ ]\" class=\"form-control-label\"> 
                                    Densità (liquido): 
                                </label>
                                <input name=\"liquid_density\" type=\"text\" id=\"liquid_density\"
                                       class=\"form-control {% if errors.liquid_density %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.liquid_density %}<div class=\"invalid-feedback\">{{ errors.liquid_density }}</div>{% endif %}
                                </div>
                            </div>

                            <div class=\"form-group col-md-6 mb-3\">        
                                <label for=\"gas_weight\" data-bs-toggle=\"tooltip\" title=\"--> [ kg &frasl; Nm³ ]\" class=\"form-control-label\"> 
                                    Peso specifico (gas): 
                                </label>
                                <input name=\"gas_weight\" type=\"text\" id=\"gas_weight\"
                                       class=\"form-control {% if errors.gas_weight %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.gas_weight %}<div class=\"invalid-feedback\">{{ errors.gas_weight }}</div>{% endif %}
                                </div>
                            </div>
   
                            <div class=\"form-group col-md-6 mb-3\">        
                                <label for=\"pcs_ghv\" data-bs-toggle=\"tooltip\" title=\"--> [ kg &frasl; m³ ]\" class=\"form-control-label\"> 
                                    PCS/GHV: 
                                </label>
                                <input name=\"pcs_ghv\" type=\"text\" id=\"pcs_ghv\"
                                       class=\"form-control {% if errors.pcs_ghv %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.pcs_ghv %}<div class=\"invalid-feedback\">{{ errors.pcs_ghv }}</div>{% endif %}
                                </div>
                            </div>
                        </div>

                        {#<div class=\"card-footer mx-auto\">      
                            <button type=\"button\" class=\"my-2 action-button prev\">
                                <span class=\"m-auto\">
                                    <i class=\"bi bi-chevron-double-left\"></i> INDIETRO
                                </span>
                            </button>

                            <button type=\"button\" class=\"my-2 action-button next\">
                                <span class=\"m-auto\">
                                    AVANTI <i class=\"bi bi-chevron-double-right\"></i>
                                </span>
                            </button>
                                
                            <button type=\"submit\" class=\"my-2 action-button save\" name=\"save\">
                                <span class=\"m-auto\">
                                    SALVA <i class=\"bi bi-chevron-double-right\"></i>
                                </span>
                            </button>
                        </div>#}
                    </div>
                </fieldset>
                {# END Fieldset 2 => Insert Quantity #}

                {# Fieldset 3 => Insert Partial #}
                <fieldset class=\"mx-auto my-3\" data-step=\"3\">
                    <div class=\"card-body\">
                        <div class=\"row table-responsive mx-auto my-2\">     
                            <table class=\"table table-sm table-borderless\" id=\"partials\">
                                <tr class=\"mx-auto my-2\">
                                    <th class=\"mx-auto\"> <i class=\"bi bi-gear my-auto\"></i> </th>
                                    <th class=\"mx-auto\" data-bs-toggle=\"tooltip\" title=\"--> Dest. cliente\"> Destinazione </th>
                                    <th class=\"mx-auto\"> EXW </th>
                                    <th class=\"mx-auto\" data-bs-toggle=\"tooltip\" title=\"--> Data scarico\"> Data </th>
                                    <th class=\"mx-auto\" data-bs-toggle=\"tooltip\" title=\"--> Luogo scarico\"> Luogo </th>
                                    <th class=\"mx-auto\" data-bs-toggle=\"tooltip\" title=\"--> Quantità scaricata [ kg ]\"> Quantità </th>
                                    <th class=\"mx-auto\" data-bs-toggle=\"tooltip\" title=\"--> Fattura Rif.\"> Fattura </th>  
                                    <th class=\"mx-auto\"></th>             
                                </tr>
                                  
                                <tr class=\"mx-auto my-1\">
                                    <td class=\"part-btns\">
                                        <input type=\"hidden\" name=\"id[]\" id=\"id_partial\" value=\"0\"/>
                                    </td>
                              
                                    <td class=\"col-3\">
                                        <input type=\"text\" name=\"destination_0\" class=\"form-control destination\" id=\"destination_0\" /> 
                                    </td>
    
                                    <td class=\"col-2\">
                                        <select class=\"form-control exw\" name=\"exw\" id=\"exw_0\">
                                            <option value=\"\"></option>
                                            <option value=\"fos\"> FOS </option>
                                            <option value=\"destino\"> DESTINO </option>
                                        </select>
                                    </td>
                                                
                                    <td class=\"col-2\"> 
                                        <input type=\"text\" class=\"form-control date\" name=\"date_0\" autocomplete=\"off\" id=\"date_0\" />
                                    </td>
                            
                                    <td class=\"col-2\">
                                        <input type=\"text\" class=\"form-control place\" name=\"place_0\" id=\"place_0\" />
                                    </td>
                            
                                    <td class=\"col-2\">
                                        <input type=\"text\" class=\"form-control mx-auto q_unloaded\" name=\"q_unloaded_0\" id=\"q_unloaded_0\" />
                                    </td>
                            
                                    <td class=\"col mx-auto\">
                                        <input type=\"text\" class=\"form-control mx-auto invoice\" name=\"invoice_0\" id=\"invoice_0\" />
                                    </td>

                                    <td class=\"part-btns\">
                                        <button type=\"button\" class=\"my-auto px-1 delete-btn\"
                                            onclick=\"partRows.delRow(this)\">
                                                <span class=\"my-auto\">
                                                    <i class=\"bi bi-x-square\"></i>
                                                </span>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
    
                    {#<div class=\"card-footer mx-auto\">      
                        <button type=\"button\" class=\"my-2 action-button prev\">
                            <span class=\"m-auto\">
                                <i class=\"bi bi-chevron-double-left\"></i> INDIETRO
                            </span>
                        </button>

                        <button type=\"button\" class=\"my-2 action-button add\" name=\"add\" id=\"add-part\">
                            <span class=\"m-auto\">
                                AGGIUNGI <i class=\"bi bi-plus-circle\"></i>
                            </span>
                        </button>
                        
                        <button type=\"button\" class=\"my-2 action-button next\">
                            <span class=\"m-auto\">
                                AVANTI <i class=\"bi bi-chevron-double-right\"></i>
                            </span>
                        </button>
                    </div>#}
                </fieldset>
                {# END Fieldset 3 => Insert Partial #}

                {# Fieldset 4 => Insert Note (Optional) #}
                <fieldset class=\"mx-auto my-3\" data-step=\"4\">         
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-12 mb-3\">    
                                <label for=\"note\" class=\"form-control-label\"> Nota: </label>
                                <textarea name=\"note\" id=\"note\" rows=\"1\" 
                                          class=\"form-control {% if errors.note %}is-invalid{% endif %}\"></textarea>

                                <div class=\"error-placeholder\">
                                    {% if errors.kg_load %}<div class=\"invalid-feedback\">{{ errors.kg_load }}</div>{% endif %}
                                </div>
                            </div>

                            <div class=\"col-md-12 mb-3\">
                                <label for=\"note\" class=\"form-control-label my-1\"> Nota </label>
                                <textarea name=\"note\" id=\"note\" class=\"form-control edit-note\"  
                                          style=\"height: 80px; text-align: center; white-space-collapse: collapse\"></textarea>
                            </div>
                        </div>
                    </div>
                </fieldset>
                {# END Fieldset 4 => Insert Note (Optional) #}

                {# Card Footer With Fieldset Buttons #}                      
                <div class=\"card-footer mx-auto\">      
                    <button type=\"button\" class=\"my-2 action-button prev\" onclick=\"history.back();\">
                        <span class=\"m-auto\">
                            <i class=\"bi bi-chevron-double-left\"></i> INDIETRO
                        </span>
                    </button>
                            
                    <button type=\"button\" class=\"my-2 action-button next\">
                        <span class=\"m-auto\">
                            AVANTI <i class=\"bi bi-chevron-double-right\"></i>
                        </span>
                    </button>

                    <button type=\"submit\" class=\"my-2 action-button save\" name=\"save\">
                        <span class=\"m-auto\">
                            SALVA <i class=\"bi bi-chevron-double-right\"></i>
                        </span>
                    </button>

                    <button type=\"button\" class=\"my-2 action-button add\" name=\"add\" id=\"add-part\">
                        <span class=\"m-auto\">
                            AGGIUNGI <i class=\"bi bi-plus-circle\"></i>
                        </span>
                    </button>
                </div> 
                {# Card Footer With Fieldset Buttons #}
            </form>
        </div>
    </section>
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
    \$('[data-bs-toggle=\"tooltip\"]').tooltip();

/***  Update header subtitle with fieldset change  ***/
    function formSubtitle() {
        const step = \$('fieldset.active').data('step');
        let subtitle = '';

            switch (step) {
                case 1: subtitle = 'Inserire i dati richiesti per creare il nuovo <b style=\"color: #6d1741\">trasporto</b>.'; break;
                case 2: subtitle = 'Inserire le <b style=\"color: #6d1741\">quantità</b> del nuovo trasporto.'; break;
                case 3: subtitle = 'Inserire gli <b style=\"color: #6d1741\">scarichi parziali</b> del nuovo trasporto.'; break;
                case 4: subtitle = 'Inserire la nota per il nuovo trasporto. (Non obbligatorio)'; break;
            }

        \$('#step-subtitle').html(subtitle);
    }

/***  Initial subtitle load  ***/
    formSubtitle();

/***  Bind next button to navigation  ***/
    \$(\".next\").on('click', function () {
        const currentStep = \$('fieldset.active');
        const nextStep = \$('fieldset[data-step=\"' + (currentStep.data('step') + 1) + '\"]');

            currentStep.find(':input').prop('disabled', false);
            \$('fieldset:not(.active) :input:not(.always-validate)').prop('disabled', true);

                if (\$('#transport-form').valid()) {
                    currentStep.removeClass('active').hide();
                    nextStep.addClass('active').show();
                    formSubtitle();
                    
                    \$('html, body').animate({ scrollTop: 0 }, 300);
                } else {
                    const firstError = validator.errorList[0]?.element;
                        if (firstError) {
                            \$('html, body').animate({ scrollTop: \$(firstError).offset().top - 100 }, 300);
                        }
                }

            \$('fieldset :input').prop('disabled', false); 
    });

/***  Bind previous button to navigation  ***/
    \$(\".prev\").on('click', function () {
        const current = \$(\"fieldset.active\");
        const step = current.data('step');
        const prevStep = \$('fieldset[data-step=\"' + (step - 1) + '\"]');

            current.removeClass('active').hide();
            prevStep.addClass('active').show();
            formSubtitle();
    });

/***  Function to check transport availability by Slot ID and CMR Number  ***/
    function checkAvailability(field, value, id = null) {
        \$.ajax({
            url: \"/check-transport\",
            type: \"POST\",
            data: { [field]: value, id_transport: id },
            dataType: \"json\",
            success: function (response) {
                const inputField = \$(\"#\" + field);
                const errorPlaceholder = inputField.closest(\".form-group\").find(\".error-placeholder\");

                    if (response[field]) {
                        inputField.removeClass(\"is-valid\").addClass(\"is-invalid\");
                        errorPlaceholder.addClass(\"invalid-feedback\").html(response[field]).show();
                    } else {
                        inputField.removeClass(\"is-invalid\").addClass(\"is-valid\");
                        errorPlaceholder.removeClass(\"invalid-feedback\").hide();
                    }
            },
        });
    }

//  Trigger validation when typing slot and cmr input fields
    let debounceTimer;

    \$(\"#slot, #cmr\").on(\"input\", function () {
        clearTimeout(debounceTimer);
        let field = \$(this).attr(\"id\");
        let value = \$(this).val();

            if (value.length >= 5) {
                debounceTimer = setTimeout(() => {
                    checkAvailability(field, value);
                }, 250); 
            }
    });

/***  Datepicker setup  ***/
    \$('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        endDate: new Date(),
        autoclose: true,
        clearBtn: false 
    })
        .on('changeDate', function (e) {
            \$(this).trigger('change');                                  // Validator catches the value
                if (this.id === 'date_load') {
                    \$('#date_unload').datepicker('setStartDate', e.date)
                                     .datepicker('update', e.date);
                    }
                    \$(this).valid(); 
    })
        .on('show', function () {
            \$(this).data('selectedDate', \$(this).val());                // Store current value when datepicker opens
    })
        .on('hide', function () {
            const currentVal = \$(this).val();   
                if (!currentVal) {                                      // If the user didn't select anything and just clicked out, preserve current value
                    const storedDate = \$(this).data('selectedDate');
                        if (storedDate) {
                            \$(this).val(storedDate);                    // Restore value
                        }
                }
    });

/***  Validation method for defining current date as max date  ***/
    \$.validator.addMethod(\"noFutureDate\", function (value, element) {
        if (!value) return true;                                            // Allow empty if not required

        const parts = value.split(\"-\");
        const inputDate = new Date(parts[2], parts[1] - 1, parts[0]);       // Assuming dd-mm-yyyy
        const today = new Date();
        
        today.setHours(0, 0, 0, 0);                                         // Remove time part
            return inputDate <= today;
    });

/***  Validation method for defining that date_unload must be greater than or equal to date_load  ***/
    \$.validator.addMethod(\"dateAfterOrEqual\", function(value, element, params) {
        const dateLoadVal = \$(params).val();
            if (!value || !dateLoadVal) return true;

        // Parse dates as dd-mm-yyyy
        const partsUnload = value.split(\"-\");
        const partsLoad = dateLoadVal.split(\"-\");

        const dateUnload = new Date(partsUnload[2], partsUnload[1] - 1, partsUnload[0]);
        const dateLoad = new Date(partsLoad[2], partsLoad[1] - 1, partsLoad[0]);
            return this.optional(element) || dateUnload >= dateLoad;
    });

/***  Custom validation rule to ensure the \"Scegliere un'opzione\" option is not selected  ***/
    \$.validator.addMethod(\"notPlaceholder\", function(value, element) {
        return value !== \"\" && value !== \"0\"; // Assuming \"0\" or \"\" represents the placeholder option value
    });

/***  Validator [JQuery Validation]  ***/
    const validator = \$('#transport-form').validate({
        ignore: \":hidden:not(.always-validate)\",                // Skip hidden fields unless forced
        onkeyup: false,
        onfocusout: function (element) {
            if (\$(element).is(':visible')) {
                this.element(element);                          // Validate just this field
            }
        },
        onclick: false,
        rules: {
            slot: { required: true, rangelength: [5, 35], pattern: \"^[A-Za-z0-9_]+\$\" },
            cmr: { required: true, rangelength: [5, 35], pattern: \"^[A-Za-z0-9\\-]+\$\" },
            type: { required: true, notPlaceholdere: true },
            issuer: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
            supplier: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
            transport: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
            date_load: { required: true, noFutureDate: true },
            date_unload: { required: true, noFutureDate: true, dateAfterOrEqual: \"#date_load\" },
            container: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
            kg_load: { required: true, number: true, min: 0 },
            cooling: { required: true, notPlaceholder: true },
            price_typology: { required: true, notPlaceholder: true },
            price_value: { 
                required: {
                    depends: function() {
                        return \$('#price_typology').val() === 'yes';
                    }
                },
                digits: true,
                min: 1
            },
            kg_unload: { required: true, number: true, min: 0 },
            liquid_density: { required: true, number: true, min: 0 },
            gas_weight: { required: true, number: true, min: 0 },
            pcs_ghv: { required: true, number: true, min: 0 }
        },
        messages: {
            slot: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 5 e al massimo 35 caratteri.\",
                pattern: \"Slot ID può contenere lettere, numeri e underscore (_). Spazi non consentiti.\"
            },
            cmr: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 5 e al massimo 35 caratteri.\",
                pattern: \"CMR può contenere lettere, numeri e trattini (-). Spazi non consentiti.\"
            },
            type: {
                required: \"Campo obbligatorio.\"
            },
            issuer: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                pattern: \"Emittente può contenere solo lettere e spazi (senza spazio iniziale).\"
            }, 
            supplier: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                pattern: \"Fornitore può contenere solo lettere e spazi (senza spazio iniziale).\"
            }, 
            transport: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                pattern: \"Trasporto può contenere solo lettere e spazi (senza spazio iniziale).\"
            },
            date_load: {
                required: \"Campo obbligatorio.\",
                noFutureDate: \"Inserire una data valida. Non sono permesse date future.\"
            }, 
            date_unload: {
                required: \"Campo obbligatorio.\",
                noFutureDate: \"Inserire una data valida. Non sono permesse date future.\",
                dateAfterOrEqual: \"La data di scarico non può essere precedente alla data di carico.\"
            }, 
            container: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                pattern: \"Container può contenere solo lettere e spazi (senza spazio iniziale).\"
            },
            kg_load: {
                required: \"Campo obbligatorio.\",
                number: \"Quantità caricata deve essere un numero positivo (intero o decimale).\",
                min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
            },
            cooling: {
                required: \"Campo obbligatorio.\",
                //digits: \"Raffreddamento deve essere un numero intero positivo, senza segni o decimali.\",
                notPlaceholder: \"Selezionare un'opzione.\"
            },
            price_typology: {
                required: \"Campo obbligatorio.\",
                notPlaceholder: \"Selezionare un'opzione.\"
            }, 
            price_value: {
                required: \"Campo obbligatorio.\",
                digits: \"Valore costo extra deve essere un numero intero positivo maggiore o uguale a 1, senza segni o decimali.\",
                min: \"Il valore minimo deve essere maggiore o uguale a 1.\"
            }, 
            kg_unload: {
                required: \"Campo obbligatorio.\",
                number: \"Quantità scaricata deve essere un numero positivo (intero o decimale).\",
                min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
            },
            liquid_density: {
                required: \"Campo obbligatorio.\",
                number: \"Densità liquido deve essere un numero positivo (intero o decimale).\",
                min: \"Il valore minimo deve essere maggiore o uguale a 0.\",
            }, 
            gas_weight: {
                required: \"Campo obbligatorio.\",
                number: \"Peso specifico (gas) deve essere un numero positivo (intero o decimale).\",
                min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
            }, 
            pcs_ghv: {
                required: \"Campo obbligatorio.\",
                number: \"PCS/GHV deve essere un numero positivo (intero o decimale).\",
                min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
            }
        },
        errorPlacement: function(error, element) {
            error.addClass(\"text-danger small\");
            element.removeClass(\"is-valid\").addClass(\"is-invalid\");                                             
            element.closest(\".form-group\").find(\".error-placeholder\").html(error);      
        },
        highlight: function (element) {
            \$(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            \$(element).removeClass('is-invalid');
            \$(element).closest('.form-group').find('.error-placeholder').html('');
        },
        invalidHandler: function (form, validator) {                // Only validate visible fieldset
            if (validator.errorList.length) {
                const firstError = validator.errorList[0].element;
                const errorStep = \$(firstError).closest('fieldset').data('step');

                \$('fieldset').removeClass('active').hide();
                const targetStep = \$('fieldset[data-step=\"' + errorStep + '\"]');

                targetStep.addClass('active').show();
                formSubtitle();

                \$('html, body').animate({
                    scrollTop: \$(firstError).offset().top - 100
                }, 250);
            }
        }
    });

//  Handle next/previous button clicks with validation
    /*window.ButtonClick = function (step) {
        const current = \$('fieldset:visible');
        const currentStep = current.data('step');
        const nextStep = currentStep + step;

            if (step === 1 && !validator.form()) {
                return false;   
            }

        \$('fieldset').removeClass('active').hide();
        const next = \$('fieldset[data-step=\"' + nextStep + '\"]').addClass('active').fadeIn();
        formSubtitle();
    };*/

//  On submit validate form and AJAX form submission
    \$(\"#transport-form\").submit(function (e) {
        e.preventDefault();                             // Prevent the default form submission

        if (\$(this).valid()) {
            const formData = \$(this).serialize();         // Serialize form data

            \$.ajax({
                url: \$(this).attr(\"action\"),            // PHP file to handle the submission
                type: 'POST',
                data: formData,
                dataType: \"json\",
                success: function(response) {
                    if (response.success) {        
                        //  Encode the new ID
                        const created = encodeURIComponent(response.created);
        
                        //  Redirect to users page with newId in the query string
                        window.location.href = '/platform?created=' + created + '#id-' + created;
                        document.getElementById('id-' + response.created)?.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    } else {
                        \$(\".invalid-feedback\").remove();                    
                        \$.each(response.errors, function (field, message) {
                            const input = \$(\"[name='\" + field + \"']\");
                            input.addClass(\"is-invalid\");
                            input.after('<div class=\"invalid-feedback\">' + message + '</div>');
                        });
                    }
                },
                error: function(xhr) {
                    alert('Error: ' + xhr.responseText);
                }
            });
        }
    });
});
</script> 
{% endblock %}", "transport.twig", "C:\\wamp64\\www\\liquimet\\templates\\transport.twig");
    }
}
