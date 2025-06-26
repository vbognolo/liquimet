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

/* transport-modal.twig */
class __TwigTemplate_f4cb34de339e30c1fb2ceb5bdeba8956 extends Template
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
            'head' => [$this, 'block_head'],
            'jquery' => [$this, 'block_jquery'],
            'datepicker' => [$this, 'block_datepicker'],
            'page_script' => [$this, 'block_page_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 6
        yield "
";
        // line 8
        yield "<div class=\"modal fade\" id=\"editTransModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editTransLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header mx-auto row\">
                <h2 class=\"modal-title\" id=\"editTransLabel\"> 
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                        MODIFICA
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                </h2>

                <h4 class=\"modal-subtitle my-2\"> 
                    Modifica i dati esistenti del trasporto.
                </h4>
            </div>
        
            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <form id=\"transport-edit\" method=\"POST\" action=\"transport-edit\" autocomplete=\"off\" novalidate>
                        <input type=\"hidden\" name=\"id_transport\" id=\"id_transport\" value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "id_transport", [], "any", false, false, false, 26), "html", null, true);
        yield "\" />
                        <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\" />   

                        ";
        // line 30
        yield "                        <div class=\"row form-group mx-auto my-3\">
                            <label class=\"col-4 form-control-label my-1\"> Slot ID: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"slot\" id=\"slot\" data-original=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "slot", [], "any", false, false, false, 34), "html", null, true);
        yield "\"
                                    class=\"form-control text-upper ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "slot", [], "any", false, false, false, 35)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 38
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "slot", [], "any", false, false, false, 38)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "slot", [], "any", false, false, false, 38), "html", null, true);
            yield "</div>";
        }
        // line 39
        yield "                                </div> 
                            </div>
                        </div>
                        
                        ";
        // line 44
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Numero CMR: </label>
                        
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"cmr\" id=\"cmr\" data-original=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "cmr", [], "any", false, false, false, 48), "html", null, true);
        yield "\"
                                    class=\"form-control ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cmr", [], "any", false, false, false, 49)) {
            yield "is-invalid";
        }
        yield " text-upper\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cmr", [], "any", false, false, false, 52)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cmr", [], "any", false, false, false, 52), "html", null, true);
            yield "</div>";
        }
        // line 53
        yield "                                </div> 
                            </div>
                        </div>
                        
                        ";
        // line 58
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Fornitore: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"issuer\" id=\"issuer\"
                                    class=\"form-control ";
        // line 63
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issuer", [], "any", false, false, false, 63)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issuer", [], "any", false, false, false, 66)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issuer", [], "any", false, false, false, 66), "html", null, true);
            yield "</div>";
        }
        // line 67
        yield "                                </div>
                            </div>
                        </div>
                            
                        ";
        // line 72
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Emittente: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"supplier\" id=\"supplier\"
                                    class=\"form-control ";
        // line 77
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "supplier", [], "any", false, false, false, 77)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "supplier", [], "any", false, false, false, 80)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "supplier", [], "any", false, false, false, 80), "html", null, true);
            yield "</div>";
        }
        // line 81
        yield "                                </div>  
                            </div>
                        </div>
                            
                        ";
        // line 86
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Trasporto: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"transport\" id=\"transport\"
                                    class=\"form-control ";
        // line 91
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "transport", [], "any", false, false, false, 91)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "transport", [], "any", false, false, false, 94)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "transport", [], "any", false, false, false, 94), "html", null, true);
            yield "</div>";
        }
        // line 95
        yield "                                </div> 
                            </div>
                        </div>
                            
                        ";
        // line 100
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Data carico: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"date_load\" id=\"date_load\" 
                                    data-original=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "date_load", [], "any", false, false, false, 105), "html", null, true);
        yield "\" class=\"form-control datepicker 
                                        ";
        // line 106
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_load", [], "any", false, false, false, 106)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 109
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_load", [], "any", false, false, false, 109)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_load", [], "any", false, false, false, 109), "html", null, true);
            yield "</div>";
        }
        // line 110
        yield "                                </div> 
                            </div>
                        </div>
                            
                        ";
        // line 115
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Data scarico: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"date_unload\" id=\"date_unload\"  
                                    data-original=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "date_unload", [], "any", false, false, false, 120), "html", null, true);
        yield "\" class=\"form-control datepicker 
                                        ";
        // line 121
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_unload", [], "any", false, false, false, 121)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 124
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_unload", [], "any", false, false, false, 124)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_unload", [], "any", false, false, false, 124), "html", null, true);
            yield "</div>";
        }
        // line 125
        yield "                                </div> 
                            </div>
                        </div>    
                            
                        ";
        // line 130
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Container / ATB: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"container\" id=\"container\"
                                    class=\"form-control ";
        // line 135
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "container", [], "any", false, false, false, 135)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 138
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "container", [], "any", false, false, false, 138)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "container", [], "any", false, false, false, 138), "html", null, true);
            yield "</div>";
        }
        // line 139
        yield "                                </div>  
                            </div>
                        </div>
            
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default modal-cancel\" data-bs-dismiss=\"modal\">
                                <span class=\"bi bi-x-circle\">
                                    CHIUDI 
                                </span>    
                            </button>
                            
                            <button type=\"submit\" class=\"btn btn-default modal-save\" name=\"update_transport\">
                                <span class=\"bi bi-check-circle\">
                                    SALVA
                                </span>   
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 163
        yield "
";
        // line 165
        yield "<div class=\"modal fade\" id=\"editQtyModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editQtyLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header mx-auto row\">
                <h2 class=\"modal-title\" id=\"editQtyLabel\"> 
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                        MODIFICA
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                </h2>

                    <h4 class=\"modal-subtitle my-2\"> 
                        Modifica le quantità del trasporto.
                    </h4>
            </div>
        
            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <form id=\"quantity-edit\" method=\"POST\" action=\"quantity-edit\" autocomplete=\"off\" novalidate>
                        <input type=\"hidden\" name=\"id_transport\" id=\"id_transport\" />
                        <input type=\"hidden\" name=\"id_quantity\" id=\"id_quantity\" />
                        <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\" />

                        ";
        // line 188
        yield "                        <div class=\"row form-group mx-auto my-3\">
                            <label class=\"col-4 form-control-label my-1\"> Quantità caricata: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"kg_load\" id=\"kg_load\" 
                                    class=\"form-control ";
        // line 193
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_load", [], "any", false, false, false, 193)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 196
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_load", [], "any", false, false, false, 196)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_load", [], "any", false, false, false, 196), "html", null, true);
            yield "</div>";
        }
        // line 197
        yield "                                </div> 
                            </div>
                        </div>

                        ";
        // line 202
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Raffreddamento: </label>
                        
                            <div class=\"col-8\">
                                <select name=\"cooling\" id=\"cooling\" class=\"form-control 
                                    ";
        // line 207
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cooling", [], "any", false, false, false, 207)) {
            yield "is-invalid";
        }
        yield "\">
                                    ";
        // line 215
        yield "
                                    <option value=\"600\" class=\"opt-type\"> 
                                        SÌ = 600
                                    </option>
                                    
                                    <option value=\"0\" class=\"opt-type\"> 
                                        NO = 0
                                    </option>
                                </select>

                                <div class=\"error-placeholder\">
                                    ";
        // line 226
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cooling", [], "any", false, false, false, 226)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cooling", [], "any", false, false, false, 226), "html", null, true);
            yield "</div>";
        }
        // line 227
        yield "                                </div> 
                            </div>
                        </div>
                        
                        ";
        // line 232
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Tipologia costo extra: </label>
                            
                            <div class=\"col-8\">
                                <select name=\"price_typology\" id=\"price_typology\" class=\"form-control 
                                    ";
        // line 237
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_typology", [], "any", false, false, false, 237)) {
            yield "is-invalid";
        }
        yield "\">
                                    ";
        // line 245
        yield "                                    
                                    <option value=\"yes\" class=\"opt-type\"> 
                                        SÌ
                                    </option>
                                        
                                    <option value=\"no\" class=\"opt-type\"> 
                                        NO
                                    </option>
                                </select>

                                <div class=\"error-placeholder\">
                                    ";
        // line 256
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_typology", [], "any", false, false, false, 256)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_typology", [], "any", false, false, false, 256), "html", null, true);
            yield "</div>";
        }
        // line 257
        yield "                                </div>
                            </div>
                        </div>
                            
                        ";
        // line 262
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Valore costo extra: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"price_value\" id=\"price_value\"
                                    class=\"form-control ";
        // line 267
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_value", [], "any", false, false, false, 267)) {
            yield "is-invalid";
        }
        yield "\" />
                                ";
        // line 269
        yield "

                                <div class=\"error-placeholder\">
                                    ";
        // line 272
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_value", [], "any", false, false, false, 272)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_value", [], "any", false, false, false, 272), "html", null, true);
            yield "</div>";
        }
        // line 273
        yield "                                </div>  
                            </div>
                        </div>
                            
                        ";
        // line 278
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Quantità scaricata: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"kg_unload\" id=\"kg_unload\"
                                    class=\"form-control ";
        // line 283
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_unload", [], "any", false, false, false, 283)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 286
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_unload", [], "any", false, false, false, 286)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_unload", [], "any", false, false, false, 286), "html", null, true);
            yield "</div>";
        }
        // line 287
        yield "                                </div> 
                            </div>
                        </div>

                        ";
        // line 292
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Densità liquido: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"liquid_density\" id=\"liquid_density\" 
                                    class=\"form-control ";
        // line 297
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "liquid_density", [], "any", false, false, false, 297)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 300
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "liquid_density", [], "any", false, false, false, 300)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "liquid_density", [], "any", false, false, false, 300), "html", null, true);
            yield "</div>";
        }
        // line 301
        yield "                                </div> 
                            </div>
                        </div>
                            
                        ";
        // line 306
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Peso specifico (gas): </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"gas_weight\" id=\"gas_weight\" 
                                    class=\"form-control ";
        // line 311
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gas_weight", [], "any", false, false, false, 311)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 314
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gas_weight", [], "any", false, false, false, 314)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gas_weight", [], "any", false, false, false, 314), "html", null, true);
            yield "</div>";
        }
        // line 315
        yield "                                </div> 
                            </div>
                        </div>
                            
                        ";
        // line 320
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> PCS/GHV: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"pcs_ghv\" id=\"pcs_ghv\"
                                    class=\"form-control ";
        // line 325
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pcs_ghv", [], "any", false, false, false, 325)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 328
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pcs_ghv", [], "any", false, false, false, 328)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pcs_ghv", [], "any", false, false, false, 328), "html", null, true);
            yield "</div>";
        }
        // line 329
        yield "                                </div> 
                            </div>
                        </div>    
            
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default modal-cancel\" data-bs-dismiss=\"modal\">
                                <span class=\"bi bi-x-circle\">
                                    CHIUDI 
                                </span>    
                            </button>
                            
                            <button type=\"submit\" class=\"btn btn-default modal-save\" name=\"update_quantity\">
                                <span class=\"bi bi-check-circle\">
                                    SALVA
                                </span>   
                            </button>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</div>
";
        // line 353
        yield "
";
        // line 355
        yield "<div class=\"modal fade\" id=\"editNoteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editNoteLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header mx-auto row\">
                <h2 class=\"modal-title\" id=\"editNoteLabel\"> 
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                        MODIFICA
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                </h2>

                    <h4 class=\"modal-subtitle my-2\"> 
                        Modifica la nota del trasporto.
                    </h4>
            </div>
        
            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <form id=\"transport-note\" method=\"POST\" action=\"transport-note\" autocomplete=\"off\" novalidate>
                        <input type=\"hidden\" name=\"id_transport\" id=\"id_transport\" />
                        <input type=\"hidden\" name=\"id_note\" id=\"id_note\" />
                        <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\" />

                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"form-control-label my-1\"> Nota: </label>
                            
                            <div class=\"\">
                                <textarea name=\"note\" id=\"note\" maxlength=\"2000\"
                                    class=\"form-control ";
        // line 382
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 382)) {
            yield "is-invalid";
        }
        yield "\"
                                    style=\"height: 80px; text-align: center; white-space-collapse: collapse\"></textarea>

                                <div class=\"error-placeholder\">
                                    ";
        // line 386
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 386)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 386), "html", null, true);
            yield "</div>";
        }
        // line 387
        yield "                                </div>
                            </div>
                        </div>                        
                        
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default modal-cancel\" data-bs-dismiss=\"modal\">
                                <span class=\"bi bi-x-circle\">
                                    CHIUDI 
                                </span>    
                            </button>

                            <button type=\"button\" class=\"btn btn-default modal-reset\">
                                <span class=\"bi bi-trash\">
                                    CANCELLA 
                                </span> 
                            </button>
                            
                            <button type=\"submit\" class=\"btn btn-default modal-save\" name=\"update_note\">
                                <span class=\"bi bi-check-circle\">
                                    SALVA
                                </span>   
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 417
        yield "
";
        // line 418
        yield from $this->unwrap()->yieldBlock('jquery', $context, $blocks);
        // line 432
        yield "
";
        // line 433
        yield from $this->unwrap()->yieldBlock('datepicker', $context, $blocks);
        // line 439
        yield "
";
        // line 440
        yield from $this->unwrap()->yieldBlock('page_script', $context, $blocks);
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "    ";
        // line 3
        yield "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" 
        integrity=\"sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=\" crossorigin=\"anonymous\">
";
        yield from [];
    }

    // line 418
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_jquery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 419
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha256-umbTaFxP31Fv6O1itpLS/3+v5fOAWDLOUzlmvOGaKV4=\" 
        crossorigin=\"anonymous\">
</script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha256-MtEA819Zls6dtLt5S5BpEMOhifPyz7gfzfgtNtY75lE=\" 
        crossorigin=\"anonymous\">
</script>
";
        yield from [];
    }

    // line 433
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datepicker(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 434
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=\" 
        crossorigin=\"anonymous\">
</script>
";
        yield from [];
    }

    // line 440
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 441
        yield "<script>
\$(document).ready(function () {
//  DATEPICKER 
    \$('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        endDate: new Date(),
        autoclose: true,
        clearBtn: false
    }).on('changeDate', function (e) {
        \$(this).trigger('change');      // validator catches the value
        
        if (this.id === 'date_load') {
            \$('#date_unload')
                .datepicker('setStartDate', e.date)
                .datepicker('update', e.date);
        }
        \$(this).valid();
    }).on('show', function () {
        // Store current value when datepicker opens
        \$(this).data('selectedDate', \$(this).val());
    }).on('hide', function (e) {
        // If the user didn't select anything and just clicked out, preserve current value
        const currentVal = \$(this).val();
        if (!currentVal) {
            const storedDate = \$(this).data('selectedDate');
            if (storedDate) {
                \$(this).val(storedDate); // restore value
            }
        }
    });

//  VALIDATOR METHOD FOR DEFINING CURRENT DATE AS MAX
    \$.validator.addMethod(\"noFutureDate\", function (value, element) {
        if (!value) return true; // allow empty if not required

        const parts = value.split(\"-\");
        const inputDate = new Date(parts[2], parts[1] - 1, parts[0]); // assuming dd-mm-yyyy
        const today = new Date();
        today.setHours(0, 0, 0, 0); // remove time part

        return inputDate <= today;
    });

//  VALIDATOR METHOD FOR DEFINING THAT UNLOAD'S DATE MUST BE AFTER OR EQUAL TO LOAD'S DATE
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

//  FORM VALIDATION
    \$(\"#transport-edit\").validate({
        onfocusout: function(element) {
            \$(element).valid();     // validate the field when it loses focus
        },
        rules: {
            slot: { required: true, rangelength: [15, 35], pattern: \"^[A-Za-z0-9_]+\$\" },
            cmr: { required: true, rangelength: [7, 35], pattern: \"^[A-Za-z0-9\\-]+\$\" },
            issuer: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
            supplier: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
            transport: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
            date_load: { required: true, noFutureDate: true },
            date_unload: { required: true, noFutureDate: true, dateAfterOrEqual: \"#date_load\" },
            container: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" }
        },
        messages: {
            slot: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 11 e al massimo 35 caratteri.\",
                pattern: \"Slot ID può contenere lettere, numeri e underscore (_). Spazi non consentiti.\"
            },
            cmr: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 7 e al massimo 35 caratteri.\",
                pattern: \"CMR può contenere lettere, numeri e trattini (-). Spazi non consentiti.\"
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
            }
        },
        errorPlacement: function(error, element) {
            error.addClass(\"text-danger small\");
            element.removeClass(\"is-valid\").addClass(\"is-invalid\");                                             // Bootstrap error class
            element.closest(\".form-group\").find(\".error-placeholder\").html(error);      // Insert error inside the reserved space
        },
        highlight: function (element) {
            \$(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            \$(element).removeClass('is-invalid');
            \$(element).closest('.form-group').find('.error-placeholder').html('');
        },
        submitHandler: function (form) {
            const \$form = \$(form);
            const oSlot = \$(\"#slot\").data(\"original\");
            const oCmr = \$(\"#cmr\").data(\"original\");

            \$.ajax({
                url: 'transport-edit',
                type: 'POST',
                data: \$(form).serialize() + '&original_slot=' + encodeURIComponent(oSlot) + '&original_cmr=' + encodeURIComponent(oCmr),
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        updateOriginalDataFromResponse(response.edited);
                        \$('#editTransModal').modal('hide');

                        const edited = response.edited;
                        const row = \$('#id-' + edited.id_transport);

                        // Update row cells manually
                        row.find('.col-slot').text(edited.slot);
                        row.find('.col-cmr').text(edited.cmr);
                        row.find('.col-issuer').text(edited.issuer);
                        row.find('.col-supplier').text(edited.supplier);
                        row.find('.col-transport').text(edited.transport);
                        row.find('.col-load').text(edited.date_load);
                        row.find('.col-unload').text(edited.date_unload);
                        row.find('.col-container').text(edited.container);

                        row.find('.col-univoco').text(edited.univoco);
                        row.find('.col-month-load').text(edited.id_month_load);
                        row.find('.col-week-unload').text(edited.week_unload);
                        row.find('.col-month-unload').text(`\${edited.id_month_unload} - \${edited.month_unload}`);

                        // Highlight and scroll
                        row.addClass('table-success');
                        \$('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => row.removeClass('table-success'), 2500);
                    } else {
                        // Display PHP validation errors
                        //\$(\".invalid-feedback\").remove();                    // Clear previous errors
                        if (response.errors) {
                            \$.each(response.errors, function(field, message) {
                                const input = \$(\"[name='\" + field + \"']\");
                                input.removeClass(\"is-valid\").addClass(\"is-invalid\");
                                input.closest(\".form-group\").find(\".error-placeholder\")
                                    .html('<div class=\"invalid-feedback\">' + message + '</div>');
                            });
                        }
                    }
                },
                error: function (xhr) {
                    console.error(xhr.responseText);
                }
            });
            return false;
        },
        success: function(label, element) {
            \$(element).removeClass(\"is-invalid\").addClass(\"is-valid\");
            \$(element).closest(\".form-group\").find(\".error-placeholder\").html(\"\");
        }
    });

//  Quantity Price Value Toggle Field
    let switched = false;

    function togglePriceValueField() {
        const \$pv = \$('#price_value');
        const \$pt = \$('#price_typology');
        const typology = \$pt.val();

        if (typology === 'no') {
            switched = true;
            \$pv
                .val(0)
                .prop('disabled', true)
                .removeClass('is-valid is-invalid')
                .closest('.form-group')
                .find('.error-placeholder').html('');
        } else {
            \$pv
                .prop('disabled', false)
                .removeClass('is-valid is-invalid')
                .closest('.form-group')
                .find('.error-placeholder').html('');

            if (switched) {
                \$pv.val('');    // Clear value only if switched from no to yes
            }

            \$pv.trigger('input'); // ensure initial sync
            switched = false;       // Reset flag after processing
        }
    }

    \$('#price_typology').on('change', togglePriceValueField);

//  Quantity Form Validation
    \$(\"#quantity-edit\").validate({
        onfocusout: function(element) {
            \$(element).valid();     // validate the field when it loses focus
        },
        rules: {
            kg_load: { required: true, number: true, min: 0 },
            cooling: { required: true, digits: true },
            price_typology: { required: true },
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
            kg_load: {
                required: \"Campo obbligatorio.\",
                number: \"Quantità caricata deve essere un numero positivo (intero o decimale).\",
                min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
            },
            cooling: {
                required: \"Campo obbligatorio.\",
                digits: \"Raffredamento deve essere un numero intero positivo, senza segni o decimali.\"
            },
            price_typology: {
                required: \"Campo obbligatorio.\"
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
            element.removeClass(\"is-valid\").addClass(\"is-invalid\");                                             // Bootstrap error class
            element.closest(\".form-group\").find(\".error-placeholder\").html(error);      // Insert error inside the reserved space
        },
        highlight: function (element) {
            \$(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            \$(element).removeClass('is-invalid');
            \$(element).closest('.form-group').find('.error-placeholder').html('');
        },
        submitHandler: function (form) {
            const \$form = \$(form);

            \$.ajax({
                url: 'quantity-edit',
                type: 'POST',
                data: \$form.serialize(), 
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        updateOriginalDataFromResponse(response.updated);
                        //\$('#editQtyModal').modal('hide');

                        const updated = response.updated;
                        const row = \$('#qty-table-' + updated.id_transport);

                        // Update row cells manually
                        row.find('.col-kg-load').text(updated.kg_load);
                        row.find('.col-cooling').text(updated.cooling);
                        row.find('.col-price-typology').text(updated.price_typology);
                        row.find('.col-price-value').text(updated.price_value);
                        row.find('.col-kg-unload').text(updated.kg_unload);
                        row.find('.col-liquid-density').text(updated.liquid_density);
                        row.find('.col-gas-weight').text(updated.gas_weight);
                        row.find('.col-pcs-ghv').text(updated.pcs_ghv);

                        row.find('.col-mwh').text(updated.mwh);
                        row.find('.col-mj-kg').text(updated.mj_kg);
                        row.find('.col-volume-mc').text(updated.volume_mc);
                        row.find('.col-volume-nmc').text(updated.volume_nmc);
                        row.find('.col-smc-mc').text(updated.smc_mc);
                        row.find('.col-gas-nmc').text(updated.gas_nmc);
                        row.find('.col-gas-smc').text(updated.gas_smc);
                        row.find('.col-smc-kg').text(updated.smc_kg);

                        // Highlight and scroll
                        row.addClass('table-success');
                        \$('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => row.removeClass('table-success'), 2500);

                        setTimeout(() => {
                            \$(\"#editQtyModal\").modal('hide');
                        }, 400);
                    } else {
                        // Display PHP validation errors
                        //\$(\".invalid-feedback\").remove();                    // Clear previous errors
                        if (response.errors) {
                            \$.each(response.errors, function(field, message) {
                                const input = \$(\"[name='\" + field + \"']\");
                                input.removeClass(\"is-valid\").addClass(\"is-invalid\");
                                input.closest(\".form-group\").find(\".error-placeholder\")
                                    .html('<div class=\"invalid-feedback\">' + message + '</div>');
                            });
                        }
                    }
                },
                error: function (xhr) {
                    console.error(xhr.responseText);
                }
            });
            return false;
        },
        success: function(label, element) {
            \$(element).removeClass(\"is-invalid\").addClass(\"is-valid\");
            \$(element).closest(\".form-group\").find(\".error-placeholder\").html(\"\");
        }
    });

//  NOTE FORM VALIDATION
    \$(\"#transport-note\").validate({
        onfocusout: function(element) {
            \$(element).valid();     // validate the field when it loses focus
        },
        rules: {
            content: { maxlength: 2000 }
        },
        messages: {
            content: {
                maxlength: \"Massimo 2000 caratteri.\"
            }
        },
        errorPlacement: function(error, element) {
            error.addClass(\"text-danger small\");
            element.removeClass(\"is-valid\").addClass(\"is-invalid\");                                             // Bootstrap error class
            element.closest(\".form-group\").find(\".error-placeholder\").html(error);      // Insert error inside the reserved space
        },
        highlight: function (element) {
            \$(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            \$(element).removeClass('is-invalid');
            \$(element).closest('.form-group').find('.error-placeholder').html('');
        },
        submitHandler: function (form) {
            const \$form = \$(form);

            \$.ajax({
                url: 'transport-note',
                type: 'POST',
                data: \$form.serialize(), 
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        updateOriginalDataFromResponse(response.notes);
                        //\$('#editQtyModal').modal('hide');

                        const modified = response.notes;
                        const row = \$('#notes-' + modified.id_transport);

                        // Update row cells manually
                        modified.forEach(n => {
                            row.find('#note').html(`<span class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" title=\"Scritto da \${n.author} il \${n.created}\">
                                \${n.content}
                            </span> <br>`);
                        });

                        // Highlight and scroll
                        row.addClass('table-success');
                        \$('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => row.removeClass('table-success'), 2500);

                        setTimeout(() => {
                            \$(\"#editNoteModal\").modal('hide');
                        }, 400);
                    } else {
                        // Display PHP validation errors
                        //\$(\".invalid-feedback\").remove();                    // Clear previous errors
                        if (response.errors) {
                            \$.each(response.errors, function(field, message) {
                                const input = \$(\"[name='\" + field + \"']\");
                                input.removeClass(\"is-valid\").addClass(\"is-invalid\");
                                input.closest(\".form-group\").find(\".error-placeholder\")
                                    .html('<div class=\"invalid-feedback\">' + message + '</div>');
                            });
                        }
                    }
                },
                error: function (xhr) {
                    console.error(xhr.responseText);
                }
            });
            return false;
        },
        success: function(label, element) {
            \$(element).removeClass(\"is-invalid\").addClass(\"is-valid\");
            \$(element).closest(\".form-group\").find(\".error-placeholder\").html(\"\");
        }
    }); 

    \$('#editQtyModal').on('shown.bs.modal', function () {
        switched = false;
        togglePriceValueField(); // apply correct enabled/disabled state
    });

//  Reset modal datepicker on cancel
    \$('#editTransModal').on('hidden.bs.modal', function () {
        const dp = \$(this).find('.datepicker');
        const \$form = \$(this).find('#transport-edit');

        // Reset the form fields
        \$form[0].reset();

        // Clear jQuery Validation errors
        \$form.validate().resetForm();

        // Remove error classes
        \$form.find('.is-invalid').removeClass('is-invalid');
        \$form.find('.is-valid').removeClass('is-valid');
        
        dp.datepicker('clearDates'); // safely clear dates
        dp.val(''); // clear input value if needed
    });

    \$('#editQtyModal').on('hidden.bs.modal', function () {
        const \$form = \$(this).find('#quantity-edit');

        // Reset the form fields
        \$form[0].reset();

        // Clear jQuery Validation errors
        \$form.validate().resetForm();

        // Remove error classes
        \$form.find('.is-invalid').removeClass('is-invalid');
        \$form.find('.is-valid').removeClass('is-valid');
    });

//  Dates validation on focus in and focus out
    let lastFocused = null;

    \$('#date_load, #date_unload').on('focusin', function () {
        lastFocused = this;
    });

    \$('#date_load, #date_unload').on('focusout', function () {
        setTimeout(function () {
            if (lastFocused) {
                \$(lastFocused).valid();
                lastFocused = null;
            }
        }, 5);
    });

    let originalData = {};
//  Restore original values on modal close if there were changes
    \$('#editTransModal').on('hide.bs.modal', function() {
        if (formHasChanged()) {
            resetFormToOriginal();
        }
    });

    \$('#editQtyModal').on('hide.bs.modal', function() {
        if (formHasChanged()) {
            resetFormToOriginal();
        }
    });

//  Reset form to original values
    function resetFormToOriginal() {
        \$('#transport-edit').find(':input').each(function() {
            const name = \$(this).attr('name');
                if (name && originalData.hasOwnProperty(name)) {
                    \$(this).val(originalData[name]).trigger('change').removeClass('is-invalid');
                    \$(this).closest('.form-group').find('.error-placeholder').html('');
                }
        });
        \$('#transport-edit').removeClass('is-invalid');

        \$('#quantity-edit').find(':input').each(function() {
            const name = \$(this).attr('name');
                if (name && originalData.hasOwnProperty(name)) {
                    \$(this).val(originalData[name]).trigger('change').removeClass('is-invalid');
                    \$(this).closest('.form-group').find('.error-placeholder').html('');
                }
        });
        \$('#quantity-edit').removeClass('is-invalid');
    }

//  Detect changes and reset if changed
    function formHasChanged() {
        let changed = false;
        \$('#transport-edit').find(':input').each(function () {
            const name = \$(this).attr('name');
                if (name && originalData[name] !== \$(this).val()) {
                    changed = true;
                    return false; // exit early
                }
        });

        \$('#quantity-edit').find(':input').each(function () {
            const name = \$(this).attr('name');
                if (name && originalData[name] !== \$(this).val()) {
                    changed = true;
                    return false; // exit early
                }
        });
        return changed;
    }

//  Re-store original data on successful submission
//  (Put this inside your AJAX success response when update is successful)
    function updateOriginalDataFromResponse(data) {
        if (!data || !data.edited) return;
            \$('#transport-edit').find(':input').each(function () {
                const name = \$(this).attr('name');
                    if (name && data.edited.hasOwnProperty(name)) {
                        originalData[name] = data.edited[name];
                    }
            });

        if (!data || !data.updated) return;
            \$('#quantity-edit').find(':input').each(function () {
                const name = \$(this).attr('name');
                    if (name && data.updated.hasOwnProperty(name)) {
                        originalData[name] = data.updated[name];
                    }
            });
    }
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
        return "transport-modal.twig";
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
        return array (  781 => 441,  774 => 440,  765 => 434,  758 => 433,  741 => 419,  734 => 418,  727 => 3,  725 => 2,  718 => 1,  713 => 440,  710 => 439,  708 => 433,  705 => 432,  703 => 418,  700 => 417,  669 => 387,  663 => 386,  654 => 382,  644 => 375,  622 => 355,  619 => 353,  594 => 329,  588 => 328,  580 => 325,  573 => 320,  567 => 315,  561 => 314,  553 => 311,  546 => 306,  540 => 301,  534 => 300,  526 => 297,  519 => 292,  513 => 287,  507 => 286,  499 => 283,  492 => 278,  486 => 273,  480 => 272,  475 => 269,  469 => 267,  462 => 262,  456 => 257,  450 => 256,  437 => 245,  431 => 237,  424 => 232,  418 => 227,  412 => 226,  399 => 215,  393 => 207,  386 => 202,  380 => 197,  374 => 196,  366 => 193,  359 => 188,  354 => 185,  332 => 165,  329 => 163,  304 => 139,  298 => 138,  290 => 135,  283 => 130,  277 => 125,  271 => 124,  263 => 121,  259 => 120,  252 => 115,  246 => 110,  240 => 109,  232 => 106,  228 => 105,  221 => 100,  215 => 95,  209 => 94,  201 => 91,  194 => 86,  188 => 81,  182 => 80,  174 => 77,  167 => 72,  161 => 67,  155 => 66,  147 => 63,  140 => 58,  134 => 53,  128 => 52,  120 => 49,  116 => 48,  110 => 44,  104 => 39,  98 => 38,  90 => 35,  86 => 34,  80 => 30,  75 => 27,  71 => 26,  51 => 8,  48 => 6,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block head %}
    {# Bootstrap Datepicker - CSS #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" 
        integrity=\"sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=\" crossorigin=\"anonymous\">
{% endblock %}

{# Edit Transport Modal #}
<div class=\"modal fade\" id=\"editTransModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editTransLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header mx-auto row\">
                <h2 class=\"modal-title\" id=\"editTransLabel\"> 
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                        MODIFICA
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                </h2>

                <h4 class=\"modal-subtitle my-2\"> 
                    Modifica i dati esistenti del trasporto.
                </h4>
            </div>
        
            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <form id=\"transport-edit\" method=\"POST\" action=\"transport-edit\" autocomplete=\"off\" novalidate>
                        <input type=\"hidden\" name=\"id_transport\" id=\"id_transport\" value=\"{{ transport.id_transport }}\" />
                        <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\" />   

                        {# Slot ID #}
                        <div class=\"row form-group mx-auto my-3\">
                            <label class=\"col-4 form-control-label my-1\"> Slot ID: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"slot\" id=\"slot\" data-original=\"{{ transport.slot }}\"
                                    class=\"form-control text-upper {% if errors.slot %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.slot %}<div class=\"invalid-feedback\">{{ errors.slot }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>
                        
                        {# CMR Number #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Numero CMR: </label>
                        
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"cmr\" id=\"cmr\" data-original=\"{{ transport.cmr }}\"
                                    class=\"form-control {% if errors.cmr %}is-invalid{% endif %} text-upper\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.cmr %}<div class=\"invalid-feedback\">{{ errors.cmr }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>
                        
                        {# Issuer #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Fornitore: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"issuer\" id=\"issuer\"
                                    class=\"form-control {% if errors.issuer %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.issuer %}<div class=\"invalid-feedback\">{{ errors.issuer }}</div>{% endif %}
                                </div>
                            </div>
                        </div>
                            
                        {# Supplier #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Emittente: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"supplier\" id=\"supplier\"
                                    class=\"form-control {% if errors.supplier %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.supplier %}<div class=\"invalid-feedback\">{{ errors.supplier }}</div>{% endif %}
                                </div>  
                            </div>
                        </div>
                            
                        {# Transport #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Trasporto: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"transport\" id=\"transport\"
                                    class=\"form-control {% if errors.transport %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.transport %}<div class=\"invalid-feedback\">{{ errors.transport }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>
                            
                        {# Date Load #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Data carico: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"date_load\" id=\"date_load\" 
                                    data-original=\"{{ transport.date_load }}\" class=\"form-control datepicker 
                                        {% if errors.date_load %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.date_load %}<div class=\"invalid-feedback\">{{ errors.date_load }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>
                            
                        {# Date Unload #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Data scarico: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"date_unload\" id=\"date_unload\"  
                                    data-original=\"{{ transport.date_unload}}\" class=\"form-control datepicker 
                                        {% if errors.date_unload %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.date_unload %}<div class=\"invalid-feedback\">{{ errors.date_unload }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>    
                            
                        {# Container #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Container / ATB: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"container\" id=\"container\"
                                    class=\"form-control {% if errors.container %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.container %}<div class=\"invalid-feedback\">{{ errors.container }}</div>{% endif %}
                                </div>  
                            </div>
                        </div>
            
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default modal-cancel\" data-bs-dismiss=\"modal\">
                                <span class=\"bi bi-x-circle\">
                                    CHIUDI 
                                </span>    
                            </button>
                            
                            <button type=\"submit\" class=\"btn btn-default modal-save\" name=\"update_transport\">
                                <span class=\"bi bi-check-circle\">
                                    SALVA
                                </span>   
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{# End Edit Transport Modal #}

{# Edit Quantity Modal #}
<div class=\"modal fade\" id=\"editQtyModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editQtyLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header mx-auto row\">
                <h2 class=\"modal-title\" id=\"editQtyLabel\"> 
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                        MODIFICA
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                </h2>

                    <h4 class=\"modal-subtitle my-2\"> 
                        Modifica le quantità del trasporto.
                    </h4>
            </div>
        
            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <form id=\"quantity-edit\" method=\"POST\" action=\"quantity-edit\" autocomplete=\"off\" novalidate>
                        <input type=\"hidden\" name=\"id_transport\" id=\"id_transport\" />
                        <input type=\"hidden\" name=\"id_quantity\" id=\"id_quantity\" />
                        <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\" />

                        {# Kg Load #}
                        <div class=\"row form-group mx-auto my-3\">
                            <label class=\"col-4 form-control-label my-1\"> Quantità caricata: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"kg_load\" id=\"kg_load\" 
                                    class=\"form-control {% if errors.kg_load %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.kg_load %}<div class=\"invalid-feedback\">{{ errors.kg_load }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>

                        {# Cooling  #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Raffreddamento: </label>
                        
                            <div class=\"col-8\">
                                <select name=\"cooling\" id=\"cooling\" class=\"form-control 
                                    {% if errors.cooling %}is-invalid{% endif %}\">
                                    {#<option class=\"opt-type\">
                                        {% if (quantity.cooling == 0) %}
                                            NO = 0
                                        {% else %}
                                            SÌ = 600
                                        {% endif %}
                                    </option> #}

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
                        </div>
                        
                        {# Price Typology #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Tipologia costo extra: </label>
                            
                            <div class=\"col-8\">
                                <select name=\"price_typology\" id=\"price_typology\" class=\"form-control 
                                    {% if errors.price_typology %}is-invalid{% endif %}\">
                                    {#<option class=\"opt-type\">
                                        {% if (quantity.price_typology == 'yes') %}
                                            SÌ
                                        {% else %}
                                            NO
                                        {% endif %}
                                    </option>   #}
                                    
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
                        </div>
                            
                        {# Price Value #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Valore costo extra: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"price_value\" id=\"price_value\"
                                    class=\"form-control {% if errors.price_value %}is-invalid{% endif %}\" />
                                {#<input type=\"hidden\" name=\"price_value\" id=\"price_value_hidden\">#}


                                <div class=\"error-placeholder\">
                                    {% if errors.price_value %}<div class=\"invalid-feedback\">{{ errors.price_value }}</div>{% endif %}
                                </div>  
                            </div>
                        </div>
                            
                        {# Kg Unload #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Quantità scaricata: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"kg_unload\" id=\"kg_unload\"
                                    class=\"form-control {% if errors.kg_unload %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.kg_unload %}<div class=\"invalid-feedback\">{{ errors.kg_unload }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>

                        {# Liquid Density #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Densità liquido: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"liquid_density\" id=\"liquid_density\" 
                                    class=\"form-control {% if errors.liquid_density %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.liquid_density %}<div class=\"invalid-feedback\">{{ errors.liquid_density }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>
                            
                        {# Gas Weight #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Peso specifico (gas): </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"gas_weight\" id=\"gas_weight\" 
                                    class=\"form-control {% if errors.gas_weight %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.gas_weight %}<div class=\"invalid-feedback\">{{ errors.gas_weight }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>
                            
                        {# Pcs Ghv #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> PCS/GHV: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"pcs_ghv\" id=\"pcs_ghv\"
                                    class=\"form-control {% if errors.pcs_ghv %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.pcs_ghv %}<div class=\"invalid-feedback\">{{ errors.pcs_ghv }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>    
            
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default modal-cancel\" data-bs-dismiss=\"modal\">
                                <span class=\"bi bi-x-circle\">
                                    CHIUDI 
                                </span>    
                            </button>
                            
                            <button type=\"submit\" class=\"btn btn-default modal-save\" name=\"update_quantity\">
                                <span class=\"bi bi-check-circle\">
                                    SALVA
                                </span>   
                            </button>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</div>
{# End Edit Quantity Modal #}

{# Transport Note Modal #}
<div class=\"modal fade\" id=\"editNoteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editNoteLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header mx-auto row\">
                <h2 class=\"modal-title\" id=\"editNoteLabel\"> 
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                        MODIFICA
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                </h2>

                    <h4 class=\"modal-subtitle my-2\"> 
                        Modifica la nota del trasporto.
                    </h4>
            </div>
        
            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <form id=\"transport-note\" method=\"POST\" action=\"transport-note\" autocomplete=\"off\" novalidate>
                        <input type=\"hidden\" name=\"id_transport\" id=\"id_transport\" />
                        <input type=\"hidden\" name=\"id_note\" id=\"id_note\" />
                        <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\" />

                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"form-control-label my-1\"> Nota: </label>
                            
                            <div class=\"\">
                                <textarea name=\"note\" id=\"note\" maxlength=\"2000\"
                                    class=\"form-control {% if errors.content %}is-invalid{% endif %}\"
                                    style=\"height: 80px; text-align: center; white-space-collapse: collapse\"></textarea>

                                <div class=\"error-placeholder\">
                                    {% if errors.content %}<div class=\"invalid-feedback\">{{ errors.content }}</div>{% endif %}
                                </div>
                            </div>
                        </div>                        
                        
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default modal-cancel\" data-bs-dismiss=\"modal\">
                                <span class=\"bi bi-x-circle\">
                                    CHIUDI 
                                </span>    
                            </button>

                            <button type=\"button\" class=\"btn btn-default modal-reset\">
                                <span class=\"bi bi-trash\">
                                    CANCELLA 
                                </span> 
                            </button>
                            
                            <button type=\"submit\" class=\"btn btn-default modal-save\" name=\"update_note\">
                                <span class=\"bi bi-check-circle\">
                                    SALVA
                                </span>   
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{# End Transport Note Modal #}

{% block jquery %}
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha256-umbTaFxP31Fv6O1itpLS/3+v5fOAWDLOUzlmvOGaKV4=\" 
        crossorigin=\"anonymous\">
</script>
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
//  DATEPICKER 
    \$('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        endDate: new Date(),
        autoclose: true,
        clearBtn: false
    }).on('changeDate', function (e) {
        \$(this).trigger('change');      // validator catches the value
        
        if (this.id === 'date_load') {
            \$('#date_unload')
                .datepicker('setStartDate', e.date)
                .datepicker('update', e.date);
        }
        \$(this).valid();
    }).on('show', function () {
        // Store current value when datepicker opens
        \$(this).data('selectedDate', \$(this).val());
    }).on('hide', function (e) {
        // If the user didn't select anything and just clicked out, preserve current value
        const currentVal = \$(this).val();
        if (!currentVal) {
            const storedDate = \$(this).data('selectedDate');
            if (storedDate) {
                \$(this).val(storedDate); // restore value
            }
        }
    });

//  VALIDATOR METHOD FOR DEFINING CURRENT DATE AS MAX
    \$.validator.addMethod(\"noFutureDate\", function (value, element) {
        if (!value) return true; // allow empty if not required

        const parts = value.split(\"-\");
        const inputDate = new Date(parts[2], parts[1] - 1, parts[0]); // assuming dd-mm-yyyy
        const today = new Date();
        today.setHours(0, 0, 0, 0); // remove time part

        return inputDate <= today;
    });

//  VALIDATOR METHOD FOR DEFINING THAT UNLOAD'S DATE MUST BE AFTER OR EQUAL TO LOAD'S DATE
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

//  FORM VALIDATION
    \$(\"#transport-edit\").validate({
        onfocusout: function(element) {
            \$(element).valid();     // validate the field when it loses focus
        },
        rules: {
            slot: { required: true, rangelength: [15, 35], pattern: \"^[A-Za-z0-9_]+\$\" },
            cmr: { required: true, rangelength: [7, 35], pattern: \"^[A-Za-z0-9\\-]+\$\" },
            issuer: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
            supplier: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
            transport: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
            date_load: { required: true, noFutureDate: true },
            date_unload: { required: true, noFutureDate: true, dateAfterOrEqual: \"#date_load\" },
            container: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" }
        },
        messages: {
            slot: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 11 e al massimo 35 caratteri.\",
                pattern: \"Slot ID può contenere lettere, numeri e underscore (_). Spazi non consentiti.\"
            },
            cmr: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 7 e al massimo 35 caratteri.\",
                pattern: \"CMR può contenere lettere, numeri e trattini (-). Spazi non consentiti.\"
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
            }
        },
        errorPlacement: function(error, element) {
            error.addClass(\"text-danger small\");
            element.removeClass(\"is-valid\").addClass(\"is-invalid\");                                             // Bootstrap error class
            element.closest(\".form-group\").find(\".error-placeholder\").html(error);      // Insert error inside the reserved space
        },
        highlight: function (element) {
            \$(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            \$(element).removeClass('is-invalid');
            \$(element).closest('.form-group').find('.error-placeholder').html('');
        },
        submitHandler: function (form) {
            const \$form = \$(form);
            const oSlot = \$(\"#slot\").data(\"original\");
            const oCmr = \$(\"#cmr\").data(\"original\");

            \$.ajax({
                url: 'transport-edit',
                type: 'POST',
                data: \$(form).serialize() + '&original_slot=' + encodeURIComponent(oSlot) + '&original_cmr=' + encodeURIComponent(oCmr),
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        updateOriginalDataFromResponse(response.edited);
                        \$('#editTransModal').modal('hide');

                        const edited = response.edited;
                        const row = \$('#id-' + edited.id_transport);

                        // Update row cells manually
                        row.find('.col-slot').text(edited.slot);
                        row.find('.col-cmr').text(edited.cmr);
                        row.find('.col-issuer').text(edited.issuer);
                        row.find('.col-supplier').text(edited.supplier);
                        row.find('.col-transport').text(edited.transport);
                        row.find('.col-load').text(edited.date_load);
                        row.find('.col-unload').text(edited.date_unload);
                        row.find('.col-container').text(edited.container);

                        row.find('.col-univoco').text(edited.univoco);
                        row.find('.col-month-load').text(edited.id_month_load);
                        row.find('.col-week-unload').text(edited.week_unload);
                        row.find('.col-month-unload').text(`\${edited.id_month_unload} - \${edited.month_unload}`);

                        // Highlight and scroll
                        row.addClass('table-success');
                        \$('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => row.removeClass('table-success'), 2500);
                    } else {
                        // Display PHP validation errors
                        //\$(\".invalid-feedback\").remove();                    // Clear previous errors
                        if (response.errors) {
                            \$.each(response.errors, function(field, message) {
                                const input = \$(\"[name='\" + field + \"']\");
                                input.removeClass(\"is-valid\").addClass(\"is-invalid\");
                                input.closest(\".form-group\").find(\".error-placeholder\")
                                    .html('<div class=\"invalid-feedback\">' + message + '</div>');
                            });
                        }
                    }
                },
                error: function (xhr) {
                    console.error(xhr.responseText);
                }
            });
            return false;
        },
        success: function(label, element) {
            \$(element).removeClass(\"is-invalid\").addClass(\"is-valid\");
            \$(element).closest(\".form-group\").find(\".error-placeholder\").html(\"\");
        }
    });

//  Quantity Price Value Toggle Field
    let switched = false;

    function togglePriceValueField() {
        const \$pv = \$('#price_value');
        const \$pt = \$('#price_typology');
        const typology = \$pt.val();

        if (typology === 'no') {
            switched = true;
            \$pv
                .val(0)
                .prop('disabled', true)
                .removeClass('is-valid is-invalid')
                .closest('.form-group')
                .find('.error-placeholder').html('');
        } else {
            \$pv
                .prop('disabled', false)
                .removeClass('is-valid is-invalid')
                .closest('.form-group')
                .find('.error-placeholder').html('');

            if (switched) {
                \$pv.val('');    // Clear value only if switched from no to yes
            }

            \$pv.trigger('input'); // ensure initial sync
            switched = false;       // Reset flag after processing
        }
    }

    \$('#price_typology').on('change', togglePriceValueField);

//  Quantity Form Validation
    \$(\"#quantity-edit\").validate({
        onfocusout: function(element) {
            \$(element).valid();     // validate the field when it loses focus
        },
        rules: {
            kg_load: { required: true, number: true, min: 0 },
            cooling: { required: true, digits: true },
            price_typology: { required: true },
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
            kg_load: {
                required: \"Campo obbligatorio.\",
                number: \"Quantità caricata deve essere un numero positivo (intero o decimale).\",
                min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
            },
            cooling: {
                required: \"Campo obbligatorio.\",
                digits: \"Raffredamento deve essere un numero intero positivo, senza segni o decimali.\"
            },
            price_typology: {
                required: \"Campo obbligatorio.\"
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
            element.removeClass(\"is-valid\").addClass(\"is-invalid\");                                             // Bootstrap error class
            element.closest(\".form-group\").find(\".error-placeholder\").html(error);      // Insert error inside the reserved space
        },
        highlight: function (element) {
            \$(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            \$(element).removeClass('is-invalid');
            \$(element).closest('.form-group').find('.error-placeholder').html('');
        },
        submitHandler: function (form) {
            const \$form = \$(form);

            \$.ajax({
                url: 'quantity-edit',
                type: 'POST',
                data: \$form.serialize(), 
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        updateOriginalDataFromResponse(response.updated);
                        //\$('#editQtyModal').modal('hide');

                        const updated = response.updated;
                        const row = \$('#qty-table-' + updated.id_transport);

                        // Update row cells manually
                        row.find('.col-kg-load').text(updated.kg_load);
                        row.find('.col-cooling').text(updated.cooling);
                        row.find('.col-price-typology').text(updated.price_typology);
                        row.find('.col-price-value').text(updated.price_value);
                        row.find('.col-kg-unload').text(updated.kg_unload);
                        row.find('.col-liquid-density').text(updated.liquid_density);
                        row.find('.col-gas-weight').text(updated.gas_weight);
                        row.find('.col-pcs-ghv').text(updated.pcs_ghv);

                        row.find('.col-mwh').text(updated.mwh);
                        row.find('.col-mj-kg').text(updated.mj_kg);
                        row.find('.col-volume-mc').text(updated.volume_mc);
                        row.find('.col-volume-nmc').text(updated.volume_nmc);
                        row.find('.col-smc-mc').text(updated.smc_mc);
                        row.find('.col-gas-nmc').text(updated.gas_nmc);
                        row.find('.col-gas-smc').text(updated.gas_smc);
                        row.find('.col-smc-kg').text(updated.smc_kg);

                        // Highlight and scroll
                        row.addClass('table-success');
                        \$('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => row.removeClass('table-success'), 2500);

                        setTimeout(() => {
                            \$(\"#editQtyModal\").modal('hide');
                        }, 400);
                    } else {
                        // Display PHP validation errors
                        //\$(\".invalid-feedback\").remove();                    // Clear previous errors
                        if (response.errors) {
                            \$.each(response.errors, function(field, message) {
                                const input = \$(\"[name='\" + field + \"']\");
                                input.removeClass(\"is-valid\").addClass(\"is-invalid\");
                                input.closest(\".form-group\").find(\".error-placeholder\")
                                    .html('<div class=\"invalid-feedback\">' + message + '</div>');
                            });
                        }
                    }
                },
                error: function (xhr) {
                    console.error(xhr.responseText);
                }
            });
            return false;
        },
        success: function(label, element) {
            \$(element).removeClass(\"is-invalid\").addClass(\"is-valid\");
            \$(element).closest(\".form-group\").find(\".error-placeholder\").html(\"\");
        }
    });

//  NOTE FORM VALIDATION
    \$(\"#transport-note\").validate({
        onfocusout: function(element) {
            \$(element).valid();     // validate the field when it loses focus
        },
        rules: {
            content: { maxlength: 2000 }
        },
        messages: {
            content: {
                maxlength: \"Massimo 2000 caratteri.\"
            }
        },
        errorPlacement: function(error, element) {
            error.addClass(\"text-danger small\");
            element.removeClass(\"is-valid\").addClass(\"is-invalid\");                                             // Bootstrap error class
            element.closest(\".form-group\").find(\".error-placeholder\").html(error);      // Insert error inside the reserved space
        },
        highlight: function (element) {
            \$(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            \$(element).removeClass('is-invalid');
            \$(element).closest('.form-group').find('.error-placeholder').html('');
        },
        submitHandler: function (form) {
            const \$form = \$(form);

            \$.ajax({
                url: 'transport-note',
                type: 'POST',
                data: \$form.serialize(), 
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        updateOriginalDataFromResponse(response.notes);
                        //\$('#editQtyModal').modal('hide');

                        const modified = response.notes;
                        const row = \$('#notes-' + modified.id_transport);

                        // Update row cells manually
                        modified.forEach(n => {
                            row.find('#note').html(`<span class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" title=\"Scritto da \${n.author} il \${n.created}\">
                                \${n.content}
                            </span> <br>`);
                        });

                        // Highlight and scroll
                        row.addClass('table-success');
                        \$('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => row.removeClass('table-success'), 2500);

                        setTimeout(() => {
                            \$(\"#editNoteModal\").modal('hide');
                        }, 400);
                    } else {
                        // Display PHP validation errors
                        //\$(\".invalid-feedback\").remove();                    // Clear previous errors
                        if (response.errors) {
                            \$.each(response.errors, function(field, message) {
                                const input = \$(\"[name='\" + field + \"']\");
                                input.removeClass(\"is-valid\").addClass(\"is-invalid\");
                                input.closest(\".form-group\").find(\".error-placeholder\")
                                    .html('<div class=\"invalid-feedback\">' + message + '</div>');
                            });
                        }
                    }
                },
                error: function (xhr) {
                    console.error(xhr.responseText);
                }
            });
            return false;
        },
        success: function(label, element) {
            \$(element).removeClass(\"is-invalid\").addClass(\"is-valid\");
            \$(element).closest(\".form-group\").find(\".error-placeholder\").html(\"\");
        }
    }); 

    \$('#editQtyModal').on('shown.bs.modal', function () {
        switched = false;
        togglePriceValueField(); // apply correct enabled/disabled state
    });

//  Reset modal datepicker on cancel
    \$('#editTransModal').on('hidden.bs.modal', function () {
        const dp = \$(this).find('.datepicker');
        const \$form = \$(this).find('#transport-edit');

        // Reset the form fields
        \$form[0].reset();

        // Clear jQuery Validation errors
        \$form.validate().resetForm();

        // Remove error classes
        \$form.find('.is-invalid').removeClass('is-invalid');
        \$form.find('.is-valid').removeClass('is-valid');
        
        dp.datepicker('clearDates'); // safely clear dates
        dp.val(''); // clear input value if needed
    });

    \$('#editQtyModal').on('hidden.bs.modal', function () {
        const \$form = \$(this).find('#quantity-edit');

        // Reset the form fields
        \$form[0].reset();

        // Clear jQuery Validation errors
        \$form.validate().resetForm();

        // Remove error classes
        \$form.find('.is-invalid').removeClass('is-invalid');
        \$form.find('.is-valid').removeClass('is-valid');
    });

//  Dates validation on focus in and focus out
    let lastFocused = null;

    \$('#date_load, #date_unload').on('focusin', function () {
        lastFocused = this;
    });

    \$('#date_load, #date_unload').on('focusout', function () {
        setTimeout(function () {
            if (lastFocused) {
                \$(lastFocused).valid();
                lastFocused = null;
            }
        }, 5);
    });

    let originalData = {};
//  Restore original values on modal close if there were changes
    \$('#editTransModal').on('hide.bs.modal', function() {
        if (formHasChanged()) {
            resetFormToOriginal();
        }
    });

    \$('#editQtyModal').on('hide.bs.modal', function() {
        if (formHasChanged()) {
            resetFormToOriginal();
        }
    });

//  Reset form to original values
    function resetFormToOriginal() {
        \$('#transport-edit').find(':input').each(function() {
            const name = \$(this).attr('name');
                if (name && originalData.hasOwnProperty(name)) {
                    \$(this).val(originalData[name]).trigger('change').removeClass('is-invalid');
                    \$(this).closest('.form-group').find('.error-placeholder').html('');
                }
        });
        \$('#transport-edit').removeClass('is-invalid');

        \$('#quantity-edit').find(':input').each(function() {
            const name = \$(this).attr('name');
                if (name && originalData.hasOwnProperty(name)) {
                    \$(this).val(originalData[name]).trigger('change').removeClass('is-invalid');
                    \$(this).closest('.form-group').find('.error-placeholder').html('');
                }
        });
        \$('#quantity-edit').removeClass('is-invalid');
    }

//  Detect changes and reset if changed
    function formHasChanged() {
        let changed = false;
        \$('#transport-edit').find(':input').each(function () {
            const name = \$(this).attr('name');
                if (name && originalData[name] !== \$(this).val()) {
                    changed = true;
                    return false; // exit early
                }
        });

        \$('#quantity-edit').find(':input').each(function () {
            const name = \$(this).attr('name');
                if (name && originalData[name] !== \$(this).val()) {
                    changed = true;
                    return false; // exit early
                }
        });
        return changed;
    }

//  Re-store original data on successful submission
//  (Put this inside your AJAX success response when update is successful)
    function updateOriginalDataFromResponse(data) {
        if (!data || !data.edited) return;
            \$('#transport-edit').find(':input').each(function () {
                const name = \$(this).attr('name');
                    if (name && data.edited.hasOwnProperty(name)) {
                        originalData[name] = data.edited[name];
                    }
            });

        if (!data || !data.updated) return;
            \$('#quantity-edit').find(':input').each(function () {
                const name = \$(this).attr('name');
                    if (name && data.updated.hasOwnProperty(name)) {
                        originalData[name] = data.updated[name];
                    }
            });
    }
});
</script>
{% endblock %}", "transport-modal.twig", "C:\\wamp64\\www\\liquimet\\templates\\transport-modal.twig");
    }
}
