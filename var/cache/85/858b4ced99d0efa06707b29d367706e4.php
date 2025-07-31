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
                                <select name=\"cooling\" id=\"cooling\" class=\"form-control ";
        // line 206
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cooling", [], "any", false, false, false, 206)) {
            yield "is-invalid";
        }
        yield "\">
                                    <option value=\"600\" class=\"opt-type\"> 
                                        SÌ = 600
                                    </option>
                                    
                                    <option value=\"0\" class=\"opt-type\"> 
                                        NO = 0
                                    </option>
                                </select>

                                <div class=\"error-placeholder\">
                                    ";
        // line 217
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cooling", [], "any", false, false, false, 217)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cooling", [], "any", false, false, false, 217), "html", null, true);
            yield "</div>";
        }
        // line 218
        yield "                                </div> 
                            </div>
                        </div>
                        
                        ";
        // line 223
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Tipologia costo extra: </label>
                            
                            <div class=\"col-8\">
                                <select name=\"price_typology\" id=\"price_typology\" class=\"form-control ";
        // line 227
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_typology", [], "any", false, false, false, 227)) {
            yield "is-invalid";
        }
        yield "\">
                                    ";
        // line 235
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
        // line 246
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_typology", [], "any", false, false, false, 246)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_typology", [], "any", false, false, false, 246), "html", null, true);
            yield "</div>";
        }
        // line 247
        yield "                                </div>
                            </div>
                        </div>
                            
                        ";
        // line 252
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Valore costo extra: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"price_value\" id=\"price_value\"
                                    class=\"form-control ";
        // line 257
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_value", [], "any", false, false, false, 257)) {
            yield "is-invalid";
        }
        yield "\" />
                                ";
        // line 259
        yield "

                                <div class=\"error-placeholder\">
                                    ";
        // line 262
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_value", [], "any", false, false, false, 262)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_value", [], "any", false, false, false, 262), "html", null, true);
            yield "</div>";
        }
        // line 263
        yield "                                </div>  
                            </div>
                        </div>
                            
                        ";
        // line 268
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Quantità scaricata: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"kg_unload\" id=\"kg_unload\"
                                    class=\"form-control ";
        // line 273
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_unload", [], "any", false, false, false, 273)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 276
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_unload", [], "any", false, false, false, 276)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_unload", [], "any", false, false, false, 276), "html", null, true);
            yield "</div>";
        }
        // line 277
        yield "                                </div> 
                            </div>
                        </div>

                        ";
        // line 282
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Densità liquido: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"liquid_density\" id=\"liquid_density\" 
                                    class=\"form-control ";
        // line 287
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "liquid_density", [], "any", false, false, false, 287)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 290
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "liquid_density", [], "any", false, false, false, 290)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "liquid_density", [], "any", false, false, false, 290), "html", null, true);
            yield "</div>";
        }
        // line 291
        yield "                                </div> 
                            </div>
                        </div>
                            
                        ";
        // line 296
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Peso specifico (gas): </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"gas_weight\" id=\"gas_weight\" 
                                    class=\"form-control ";
        // line 301
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gas_weight", [], "any", false, false, false, 301)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 304
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gas_weight", [], "any", false, false, false, 304)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gas_weight", [], "any", false, false, false, 304), "html", null, true);
            yield "</div>";
        }
        // line 305
        yield "                                </div> 
                            </div>
                        </div>
                            
                        ";
        // line 310
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> PCS/GHV: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"pcs_ghv\" id=\"pcs_ghv\"
                                    class=\"form-control ";
        // line 315
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pcs_ghv", [], "any", false, false, false, 315)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 318
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pcs_ghv", [], "any", false, false, false, 318)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pcs_ghv", [], "any", false, false, false, 318), "html", null, true);
            yield "</div>";
        }
        // line 319
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
        // line 343
        yield "
";
        // line 345
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
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\" />

                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"form-control-label my-1\"> Nota: </label>
                            
                            <div class=\"\">
                                <textarea name=\"note\" id=\"note\" maxlength=\"2000\"
                                    class=\"form-control ";
        // line 372
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 372)) {
            yield "is-invalid";
        }
        yield "\"
                                    style=\"height: 80px; text-align: center; white-space-collapse: collapse\"></textarea>

                                <div class=\"error-placeholder\">
                                    ";
        // line 376
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 376)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 376), "html", null, true);
            yield "</div>";
        }
        // line 377
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
        // line 407
        yield "
";
        // line 409
        yield "<div class=\"modal fade\" id=\"deleteTransModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteTransLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header mx-auto row\">
                <h2 class=\"modal-title\" id=\"deleteTransLabel\"> 
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                        RIMUOVI
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                </h2>

                    <h4 class=\"modal-subtitle my-2\"> 
                        Rimuovi il trasporto scelto.
                    </h4>
            </div>
        
            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <form id=\"transport-delete\" method=\"POST\" action=\"transport-delete\" autocomplete=\"off\" novalidate>
                        <input type=\"hidden\" name=\"id_transport\" id=\"id_transport\" />
                        <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\" />

                        <p class=\"container delete-msg\">
                            Rimuovere il trasporto (SLOT ID)? <br>
                                <span id=\"slot-placeholder\"></span>
                        </p>                     
                        
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default modal-cancel\" data-bs-dismiss=\"modal\">
                                <span class=\"bi bi-x-circle\">
                                    ANNULLA
                                </span>    
                            </button>
                            
                            <button type=\"submit\" class=\"btn btn-default modal-save\" name=\"delete_trans\">
                                <span class=\"bi bi-check-circle\">
                                    CONFERMA
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
        // line 455
        yield "
";
        // line 457
        yield "<div class=\"modal fade\" id=\"editPartModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editPartLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header mx-auto row\">
                <h2 class=\"modal-title\" id=\"editPartLabel\"> 
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                        MODIFICA
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                </h2>

                    <h4 class=\"modal-subtitle my-2\"> 
                        Modifica i dati esistenti del trasporto parziale.
                    </h4>
            </div>
        
            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <form id=\"partial-edit\" method=\"POST\" action=\"partial-edit\" autocomplete=\"off\" novalidate>
                        <input type=\"hidden\" name=\"id_partial\" id=\"id_partial\" />
                        <input type=\"hidden\" id=\"date_load\" value=\"";
        // line 476
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "date_load", [], "any", false, false, false, 476), "html", null, true);
        yield "\">
                        <input type=\"hidden\" id=\"date_unload\" value=\"";
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "date_unload", [], "any", false, false, false, 477), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 478
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\" />

                        ";
        // line 481
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"destination\" class=\"col-4 form-control-label my-1\"> Destinazione: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"destination\" id=\"destination\"
                                       class=\"form-control ";
        // line 486
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "destination", [], "any", false, false, false, 486)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 489
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "destination", [], "any", false, false, false, 489)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "destination", [], "any", false, false, false, 489), "html", null, true);
            yield "</div>";
        }
        // line 490
        yield "                                </div> 
                            </div>
                        </div>

                        ";
        // line 495
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"exw\" class=\"col-4 form-control-label my-1\"> EXW: </label>
                            
                            <div class=\"col-8\">
                                <select name=\"exw\" id=\"exw\" class=\"form-control ";
        // line 499
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "exw", [], "any", false, false, false, 499)) {
            yield "is-invalid";
        }
        yield "\">
                                    <option value=\"destino\" class=\"opt-type\"> 
                                        DESTINO
                                    </option>
                                        
                                    <option value=\"fos\" class=\"opt-type\"> 
                                        FOS
                                    </option>
                                </select>

                                <div class=\"error-placeholder\">
                                    ";
        // line 510
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "exw", [], "any", false, false, false, 510)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "exw", [], "any", false, false, false, 510), "html", null, true);
            yield "</div>";
        }
        // line 511
        yield "                                </div>
                            </div>
                        </div>
                            
                        ";
        // line 516
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"date\" class=\"col-4 form-control-label my-1\"> Data carico: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"date\" id=\"date\" 
                                       class=\"form-control datepicker ";
        // line 521
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date", [], "any", false, false, false, 521)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 524
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date", [], "any", false, false, false, 524)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date", [], "any", false, false, false, 524), "html", null, true);
            yield "</div>";
        }
        // line 525
        yield "                                </div> 
                            </div>
                        </div>

                        ";
        // line 530
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"place\" class=\"col-4 form-control-label my-1\"> Luogo: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"place\" id=\"place\"
                                       class=\"form-control ";
        // line 535
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "place", [], "any", false, false, false, 535)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 538
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "place", [], "any", false, false, false, 538)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "place", [], "any", false, false, false, 538), "html", null, true);
            yield "</div>";
        }
        // line 539
        yield "                                </div> 
                            </div>
                        </div>

                        ";
        // line 544
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"q_unloaded\" class=\"col-4 form-control-label my-1\"> Quantità scaricata: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"q_unloaded\" id=\"q_unloaded\" 
                                    class=\"form-control ";
        // line 549
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "q_unloaded", [], "any", false, false, false, 549)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 552
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "q_unloaded", [], "any", false, false, false, 552)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "q_unloaded", [], "any", false, false, false, 552), "html", null, true);
            yield "</div>";
        }
        // line 553
        yield "                                </div> 
                            </div>
                        </div>

                        ";
        // line 558
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"invoice\" class=\"col-4 form-control-label my-1\"> Fattura: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"invoice\" id=\"invoice\" 
                                    class=\"form-control ";
        // line 563
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "invoice", [], "any", false, false, false, 563)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 566
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "invoice", [], "any", false, false, false, 566)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "invoice", [], "any", false, false, false, 566), "html", null, true);
            yield "</div>";
        }
        // line 567
        yield "                                </div> 
                            </div>
                        </div>

                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default modal-cancel\" data-bs-dismiss=\"modal\">
                                <span class=\"bi bi-x-circle\">
                                    ANNULLA
                                </span>    
                            </button>
                                
                            <button type=\"submit\" class=\"btn btn-default modal-save\" name=\"delete_trans\">
                                <span class=\"bi bi-check-circle\">
                                    CONFERMA
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
        // line 591
        yield from $this->unwrap()->yieldBlock('jquery', $context, $blocks);
        // line 605
        yield "
";
        // line 606
        yield from $this->unwrap()->yieldBlock('datepicker', $context, $blocks);
        // line 612
        yield "
";
        // line 613
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

    // line 591
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_jquery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 592
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

    // line 606
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datepicker(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 607
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=\" 
        crossorigin=\"anonymous\">
</script>
";
        yield from [];
    }

    // line 613
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 614
        yield "<script>
\$(document).ready(function () {
//  DATEPICKER 
    \$('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        endDate: new Date(),
        autoclose: true,
        clearBtn: false
    }).on('changeDate', function (e) {
        \$(this).trigger('change');                                          // Validator catches the value
        
        if (this.id === 'date_load') {
            \$('#date_unload')
                .datepicker('setStartDate', e.date)
                .datepicker('update', e.date);
        }
        \$(this).valid();
    }).on('show', function () {
        \$(this).data('selectedDate', \$(this).val());                        // Store current value when datepicker opens
    }).on('hide', function (e) {
        const currentVal = \$(this).val();                                   // If the user didn't select anything and just clicked out, preserve current value
        if (!currentVal) {
            const storedDate = \$(this).data('selectedDate');
            if (storedDate) {
                \$(this).val(storedDate);                                    // Restore value
            }
        }
    });

//  VALIDATOR METHOD FOR DEFINING CURRENT DATE AS MAX
    \$.validator.addMethod(\"noFutureDate\", function (value, element) {
        if (!value) return true;                                            // Allow empty if not required

        const parts = value.split(\"-\");
        const inputDate = new Date(parts[2], parts[1] - 1, parts[0]);       // Assuming dd-mm-yyyy
        const today = new Date();
        today.setHours(0, 0, 0, 0);                                         // Remove time part

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
            \$(element).valid();                                             // Validate the field when it loses focus
        },
        rules: {
            slot: { required: true, rangelength: [5, 35], pattern: \"^[A-Za-z0-9_]+\$\" },
            cmr: { required: true, rangelength: [5, 35], pattern: \"^[A-Za-z0-9\\-]+\$\" },
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
                rangelength: \"Usare almeno 5 e al massimo 35 caratteri.\",
                pattern: \"Slot ID può contenere lettere, numeri e underscore (_). Spazi non consentiti.\"
            },
            cmr: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 5 e al massimo 35 caratteri.\",
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
                data: \$form.serialize() + '&original_slot=' + encodeURIComponent(oSlot) + '&original_cmr=' + encodeURIComponent(oCmr),
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

    \$('#price_typology').on('change', togglePriceValueField());

//  QUANTITY FORM VALIDATION
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

    \$(\"#partial-edit\").validate({
        onfocusout: function(element) {
            \$(element).valid();     
        },
        rules: {
            destination: { required: true, rangelength: [3, 50 ], pattern: \"^[A-Za-z ]+\$\" },
            exw: { required: true },
            date: { required: true, noFutureDate: true },
            place: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
            q_unloaded: { required: true, number: true },
            invoice: { required: true, number: true }
        },
        messages: {
            destination: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                pattern: \"Destinazione può contenere lettere e spazi (senza spazio iniziale).\"
            },
            exw: {
                required: \"Campo obbligatorio.\"
            },
            date: {
                required: \"Campo obbligatorio.\",
                noFutureDate: \"Inserire una data valida. Non sono permesse date future.\"
            }, 
            place: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                pattern: \"Luogo può contenere solo lettere e spazi (senza spazio iniziale).\"
            }, 
            q_unloaded: {
                required: \"Campo obbligatorio.\",
                number: \"Quantità caricata deve essere un numero positivo (intero o decimale).\",
            },
            invoice: {
                required: \"Campo obbligatorio.\",
                number: \"Quantità caricata deve essere un numero positivo (intero o decimale).\"
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
                url: 'partial-edit',
                type: 'POST',
                data: \$form.serialize(),
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        updateOriginalDataFromResponse(response.modified);
                        \$('#editPartModal').modal('hide');

                        const modified = response.modified;
                        const row = \$('#partial-table-' + modified.id_partial);

                        // Update row cells manually
                        row.find('.col-destination').text(modified.destination);
                        row.find('.col-exw').text(modified.exw);
                        row.find('.col-date').text(modified.date);
                        row.find('.col-place').text(modified.place);
                        row.find('.col-q-unloaded').text(modified.q_unloaded);
                        row.find('.col-invoice').text(modified.invoice);

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
                        \$('#editNoteModal').modal('hide');

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
    \$('#editTransModal, #editQtyModal, #editPartModal').on('hidden.bs.modal', function () {
        const dp = \$(this).find('.datepicker');
        const \$formT = \$(this).find('#transport-edit');
        const \$formQ = \$(this).find('#quantity-edit');
        const \$formP = \$(this).find('#partial-edit');

        // Reset the form fields
        \$formT[0].reset();
        \$formQ[0].reset();
        \$formP[0].reset();

        // Clear jQuery Validation errors
        \$formT.validate().resetForm();
        \$formQ.validate().resetForm();
        \$formP.validate().resetForm();

        // Remove error classes
        \$formT.find('.is-invalid').removeClass('is-invalid');
        \$formT.find('.is-valid').removeClass('is-valid');

        \$formQ.find('.is-invalid').removeClass('is-invalid');
        \$formQ.find('.is-valid').removeClass('is-valid');

        \$formP.find('.is-invalid').removeClass('is-invalid');
        \$formP.find('.is-valid').removeClass('is-valid');
        
        dp.datepicker('clearDates'); // safely clear dates
        dp.val(''); // clear input value if needed
    });
/*
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
*/
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
    \$('#editTransModal, #editQtyModal, #editPartModal').on('hide.bs.modal', function() {
        if (formHasChanged()) {
            resetFormToOriginal();
        }
    });

    /*\$('#editQtyModal').on('hide.bs.modal', function() {
        if (formHasChanged()) {
            resetFormToOriginal();
        }
    });*/

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

        \$('#partial-edit').find(':input').each(function() {
            const name = \$(this).attr('name');
                if (name && originalData.hasOwnProperty(name)) {
                    \$(this).val(originalData[name]).trigger('change').removeClass('is-invalid');
                    \$(this).closest('.form-group').find('.error-placeholder').html('');
                }
        });
        \$('#partial-edit').removeClass('is-invalid');
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

        \$('#partial-edit').find(':input').each(function () {
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

        if (!data || !data.modified) return;
            \$('#quantity-edit').find(':input').each(function () {
                const name = \$(this).attr('name');
                    if (name && data.modified.hasOwnProperty(name)) {
                        originalData[name] = data.modified[name];
                    }
            });
    }

    \$(\"#transport-delete\").validate({
        rules: {
            id_transport: { required: true }
        },
        submitHandler: function (form) {
            const formData = \$(form).serialize();

        \$.ajax({
            url: 'transport-delete',
            method: 'POST',
            data: formData,
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    // Hide modal, remove transport row
                    \$('#deleteTransModal').modal('hide');
                    \$('#transport-table #id-' + \$('#id_transport').val()).remove();
                } else {
                    alert(response.message || 'Errore durante l\\'eliminazione.');
                }
            },
            error: function () {
                alert('Errore server. Riprova.');
            }
        });

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
        return array (  1052 => 614,  1045 => 613,  1036 => 607,  1029 => 606,  1012 => 592,  1005 => 591,  998 => 3,  996 => 2,  989 => 1,  984 => 613,  981 => 612,  979 => 606,  976 => 605,  974 => 591,  948 => 567,  942 => 566,  934 => 563,  927 => 558,  921 => 553,  915 => 552,  907 => 549,  900 => 544,  894 => 539,  888 => 538,  880 => 535,  873 => 530,  867 => 525,  861 => 524,  853 => 521,  846 => 516,  840 => 511,  834 => 510,  818 => 499,  812 => 495,  806 => 490,  800 => 489,  792 => 486,  785 => 481,  780 => 478,  776 => 477,  772 => 476,  751 => 457,  748 => 455,  719 => 428,  698 => 409,  695 => 407,  664 => 377,  658 => 376,  649 => 372,  639 => 365,  617 => 345,  614 => 343,  589 => 319,  583 => 318,  575 => 315,  568 => 310,  562 => 305,  556 => 304,  548 => 301,  541 => 296,  535 => 291,  529 => 290,  521 => 287,  514 => 282,  508 => 277,  502 => 276,  494 => 273,  487 => 268,  481 => 263,  475 => 262,  470 => 259,  464 => 257,  457 => 252,  451 => 247,  445 => 246,  432 => 235,  426 => 227,  420 => 223,  414 => 218,  408 => 217,  392 => 206,  386 => 202,  380 => 197,  374 => 196,  366 => 193,  359 => 188,  354 => 185,  332 => 165,  329 => 163,  304 => 139,  298 => 138,  290 => 135,  283 => 130,  277 => 125,  271 => 124,  263 => 121,  259 => 120,  252 => 115,  246 => 110,  240 => 109,  232 => 106,  228 => 105,  221 => 100,  215 => 95,  209 => 94,  201 => 91,  194 => 86,  188 => 81,  182 => 80,  174 => 77,  167 => 72,  161 => 67,  155 => 66,  147 => 63,  140 => 58,  134 => 53,  128 => 52,  120 => 49,  116 => 48,  110 => 44,  104 => 39,  98 => 38,  90 => 35,  86 => 34,  80 => 30,  75 => 27,  71 => 26,  51 => 8,  48 => 6,  46 => 1,);
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
                                <select name=\"cooling\" id=\"cooling\" class=\"form-control {% if errors.cooling %}is-invalid{% endif %}\">
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
                                <select name=\"price_typology\" id=\"price_typology\" class=\"form-control {% if errors.price_typology %}is-invalid{% endif %}\">
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

{# Transport Delete Modal #}
<div class=\"modal fade\" id=\"deleteTransModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteTransLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header mx-auto row\">
                <h2 class=\"modal-title\" id=\"deleteTransLabel\"> 
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                        RIMUOVI
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                </h2>

                    <h4 class=\"modal-subtitle my-2\"> 
                        Rimuovi il trasporto scelto.
                    </h4>
            </div>
        
            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <form id=\"transport-delete\" method=\"POST\" action=\"transport-delete\" autocomplete=\"off\" novalidate>
                        <input type=\"hidden\" name=\"id_transport\" id=\"id_transport\" />
                        <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\" />

                        <p class=\"container delete-msg\">
                            Rimuovere il trasporto (SLOT ID)? <br>
                                <span id=\"slot-placeholder\"></span>
                        </p>                     
                        
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default modal-cancel\" data-bs-dismiss=\"modal\">
                                <span class=\"bi bi-x-circle\">
                                    ANNULLA
                                </span>    
                            </button>
                            
                            <button type=\"submit\" class=\"btn btn-default modal-save\" name=\"delete_trans\">
                                <span class=\"bi bi-check-circle\">
                                    CONFERMA
                                </span>   
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{# End Transport Delete Modal #}

{# Edit Partial Modal #}
<div class=\"modal fade\" id=\"editPartModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editPartLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header mx-auto row\">
                <h2 class=\"modal-title\" id=\"editPartLabel\"> 
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                        MODIFICA
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                </h2>

                    <h4 class=\"modal-subtitle my-2\"> 
                        Modifica i dati esistenti del trasporto parziale.
                    </h4>
            </div>
        
            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <form id=\"partial-edit\" method=\"POST\" action=\"partial-edit\" autocomplete=\"off\" novalidate>
                        <input type=\"hidden\" name=\"id_partial\" id=\"id_partial\" />
                        <input type=\"hidden\" id=\"date_load\" value=\"{{ transport.date_load }}\">
                        <input type=\"hidden\" id=\"date_unload\" value=\"{{ transport.date_unload }}\">
                        <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\" />

                        {# Destination #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"destination\" class=\"col-4 form-control-label my-1\"> Destinazione: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"destination\" id=\"destination\"
                                       class=\"form-control {% if errors.destination %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.destination %}<div class=\"invalid-feedback\">{{ errors.destination }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>

                        {# EXW #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"exw\" class=\"col-4 form-control-label my-1\"> EXW: </label>
                            
                            <div class=\"col-8\">
                                <select name=\"exw\" id=\"exw\" class=\"form-control {% if errors.exw %}is-invalid{% endif %}\">
                                    <option value=\"destino\" class=\"opt-type\"> 
                                        DESTINO
                                    </option>
                                        
                                    <option value=\"fos\" class=\"opt-type\"> 
                                        FOS
                                    </option>
                                </select>

                                <div class=\"error-placeholder\">
                                    {% if errors.exw %}<div class=\"invalid-feedback\">{{ errors.exw }}</div>{% endif %}
                                </div>
                            </div>
                        </div>
                            
                        {# Date #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"date\" class=\"col-4 form-control-label my-1\"> Data carico: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"date\" id=\"date\" 
                                       class=\"form-control datepicker {% if errors.date %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.date %}<div class=\"invalid-feedback\">{{ errors.date }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>

                        {# Place #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"place\" class=\"col-4 form-control-label my-1\"> Luogo: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"place\" id=\"place\"
                                       class=\"form-control {% if errors.place %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.place %}<div class=\"invalid-feedback\">{{ errors.place }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>

                        {# Q Unloaded #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"q_unloaded\" class=\"col-4 form-control-label my-1\"> Quantità scaricata: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"q_unloaded\" id=\"q_unloaded\" 
                                    class=\"form-control {% if errors.q_unloaded %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.q_unloaded %}<div class=\"invalid-feedback\">{{ errors.q_unloaded }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>

                        {# Invoice #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"invoice\" class=\"col-4 form-control-label my-1\"> Fattura: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"invoice\" id=\"invoice\" 
                                    class=\"form-control {% if errors.invoice %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.invoice %}<div class=\"invalid-feedback\">{{ errors.invoice }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>

                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default modal-cancel\" data-bs-dismiss=\"modal\">
                                <span class=\"bi bi-x-circle\">
                                    ANNULLA
                                </span>    
                            </button>
                                
                            <button type=\"submit\" class=\"btn btn-default modal-save\" name=\"delete_trans\">
                                <span class=\"bi bi-check-circle\">
                                    CONFERMA
                                </span>   
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
        \$(this).trigger('change');                                          // Validator catches the value
        
        if (this.id === 'date_load') {
            \$('#date_unload')
                .datepicker('setStartDate', e.date)
                .datepicker('update', e.date);
        }
        \$(this).valid();
    }).on('show', function () {
        \$(this).data('selectedDate', \$(this).val());                        // Store current value when datepicker opens
    }).on('hide', function (e) {
        const currentVal = \$(this).val();                                   // If the user didn't select anything and just clicked out, preserve current value
        if (!currentVal) {
            const storedDate = \$(this).data('selectedDate');
            if (storedDate) {
                \$(this).val(storedDate);                                    // Restore value
            }
        }
    });

//  VALIDATOR METHOD FOR DEFINING CURRENT DATE AS MAX
    \$.validator.addMethod(\"noFutureDate\", function (value, element) {
        if (!value) return true;                                            // Allow empty if not required

        const parts = value.split(\"-\");
        const inputDate = new Date(parts[2], parts[1] - 1, parts[0]);       // Assuming dd-mm-yyyy
        const today = new Date();
        today.setHours(0, 0, 0, 0);                                         // Remove time part

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
            \$(element).valid();                                             // Validate the field when it loses focus
        },
        rules: {
            slot: { required: true, rangelength: [5, 35], pattern: \"^[A-Za-z0-9_]+\$\" },
            cmr: { required: true, rangelength: [5, 35], pattern: \"^[A-Za-z0-9\\-]+\$\" },
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
                rangelength: \"Usare almeno 5 e al massimo 35 caratteri.\",
                pattern: \"Slot ID può contenere lettere, numeri e underscore (_). Spazi non consentiti.\"
            },
            cmr: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 5 e al massimo 35 caratteri.\",
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
                data: \$form.serialize() + '&original_slot=' + encodeURIComponent(oSlot) + '&original_cmr=' + encodeURIComponent(oCmr),
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

    \$('#price_typology').on('change', togglePriceValueField());

//  QUANTITY FORM VALIDATION
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

    \$(\"#partial-edit\").validate({
        onfocusout: function(element) {
            \$(element).valid();     
        },
        rules: {
            destination: { required: true, rangelength: [3, 50 ], pattern: \"^[A-Za-z ]+\$\" },
            exw: { required: true },
            date: { required: true, noFutureDate: true },
            place: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
            q_unloaded: { required: true, number: true },
            invoice: { required: true, number: true }
        },
        messages: {
            destination: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                pattern: \"Destinazione può contenere lettere e spazi (senza spazio iniziale).\"
            },
            exw: {
                required: \"Campo obbligatorio.\"
            },
            date: {
                required: \"Campo obbligatorio.\",
                noFutureDate: \"Inserire una data valida. Non sono permesse date future.\"
            }, 
            place: {
                required: \"Campo obbligatorio.\",
                rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                pattern: \"Luogo può contenere solo lettere e spazi (senza spazio iniziale).\"
            }, 
            q_unloaded: {
                required: \"Campo obbligatorio.\",
                number: \"Quantità caricata deve essere un numero positivo (intero o decimale).\",
            },
            invoice: {
                required: \"Campo obbligatorio.\",
                number: \"Quantità caricata deve essere un numero positivo (intero o decimale).\"
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
                url: 'partial-edit',
                type: 'POST',
                data: \$form.serialize(),
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        updateOriginalDataFromResponse(response.modified);
                        \$('#editPartModal').modal('hide');

                        const modified = response.modified;
                        const row = \$('#partial-table-' + modified.id_partial);

                        // Update row cells manually
                        row.find('.col-destination').text(modified.destination);
                        row.find('.col-exw').text(modified.exw);
                        row.find('.col-date').text(modified.date);
                        row.find('.col-place').text(modified.place);
                        row.find('.col-q-unloaded').text(modified.q_unloaded);
                        row.find('.col-invoice').text(modified.invoice);

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
                        \$('#editNoteModal').modal('hide');

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
    \$('#editTransModal, #editQtyModal, #editPartModal').on('hidden.bs.modal', function () {
        const dp = \$(this).find('.datepicker');
        const \$formT = \$(this).find('#transport-edit');
        const \$formQ = \$(this).find('#quantity-edit');
        const \$formP = \$(this).find('#partial-edit');

        // Reset the form fields
        \$formT[0].reset();
        \$formQ[0].reset();
        \$formP[0].reset();

        // Clear jQuery Validation errors
        \$formT.validate().resetForm();
        \$formQ.validate().resetForm();
        \$formP.validate().resetForm();

        // Remove error classes
        \$formT.find('.is-invalid').removeClass('is-invalid');
        \$formT.find('.is-valid').removeClass('is-valid');

        \$formQ.find('.is-invalid').removeClass('is-invalid');
        \$formQ.find('.is-valid').removeClass('is-valid');

        \$formP.find('.is-invalid').removeClass('is-invalid');
        \$formP.find('.is-valid').removeClass('is-valid');
        
        dp.datepicker('clearDates'); // safely clear dates
        dp.val(''); // clear input value if needed
    });
/*
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
*/
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
    \$('#editTransModal, #editQtyModal, #editPartModal').on('hide.bs.modal', function() {
        if (formHasChanged()) {
            resetFormToOriginal();
        }
    });

    /*\$('#editQtyModal').on('hide.bs.modal', function() {
        if (formHasChanged()) {
            resetFormToOriginal();
        }
    });*/

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

        \$('#partial-edit').find(':input').each(function() {
            const name = \$(this).attr('name');
                if (name && originalData.hasOwnProperty(name)) {
                    \$(this).val(originalData[name]).trigger('change').removeClass('is-invalid');
                    \$(this).closest('.form-group').find('.error-placeholder').html('');
                }
        });
        \$('#partial-edit').removeClass('is-invalid');
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

        \$('#partial-edit').find(':input').each(function () {
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

        if (!data || !data.modified) return;
            \$('#quantity-edit').find(':input').each(function () {
                const name = \$(this).attr('name');
                    if (name && data.modified.hasOwnProperty(name)) {
                        originalData[name] = data.modified[name];
                    }
            });
    }

    \$(\"#transport-delete\").validate({
        rules: {
            id_transport: { required: true }
        },
        submitHandler: function (form) {
            const formData = \$(form).serialize();

        \$.ajax({
            url: 'transport-delete',
            method: 'POST',
            data: formData,
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    // Hide modal, remove transport row
                    \$('#deleteTransModal').modal('hide');
                    \$('#transport-table #id-' + \$('#id_transport').val()).remove();
                } else {
                    alert(response.message || 'Errore durante l\\'eliminazione.');
                }
            },
            error: function () {
                alert('Errore server. Riprova.');
            }
        });

        return false;
        }
    });
});
</script>
{% endblock %}", "transport-modal.twig", "C:\\wamp64\\www\\liquimet\\templates\\transport-modal.twig");
    }
}
