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
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "id_transport", [], "any", false, false, false, 27), "html", null, true);
        yield "\" />
                        <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\" />

                        ";
        // line 31
        yield "                        <div class=\"row form-group mx-auto my-3\">
                            <label class=\"col-4 form-control-label my-1\"> Slot ID: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"slot\" id=\"slot\" data-original=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "slot", [], "any", false, false, false, 35), "html", null, true);
        yield "\"
                                    class=\"form-control text-upper ";
        // line 36
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "slot", [], "any", false, false, false, 36)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "slot", [], "any", false, false, false, 39)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "slot", [], "any", false, false, false, 39), "html", null, true);
            yield "</div>";
        }
        // line 40
        yield "                                </div> 
                            </div>
                        </div>
                        
                        ";
        // line 45
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Numero CMR: </label>
                        
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"cmr\" id=\"cmr\" data-original=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "cmr", [], "any", false, false, false, 49), "html", null, true);
        yield "\"
                                    class=\"form-control ";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cmr", [], "any", false, false, false, 50)) {
            yield "is-invalid";
        }
        yield " text-upper\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 53
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cmr", [], "any", false, false, false, 53)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cmr", [], "any", false, false, false, 53), "html", null, true);
            yield "</div>";
        }
        // line 54
        yield "                                </div> 
                            </div>
                        </div>
                        
                        ";
        // line 59
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Fornitore: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"issuer\" id=\"issuer\"
                                    class=\"form-control ";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issuer", [], "any", false, false, false, 64)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 67
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issuer", [], "any", false, false, false, 67)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issuer", [], "any", false, false, false, 67), "html", null, true);
            yield "</div>";
        }
        // line 68
        yield "                                </div>
                            </div>
                        </div>
                            
                        ";
        // line 73
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Emittente: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"supplier\" id=\"supplier\"
                                    class=\"form-control ";
        // line 78
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "supplier", [], "any", false, false, false, 78)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 81
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "supplier", [], "any", false, false, false, 81)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "supplier", [], "any", false, false, false, 81), "html", null, true);
            yield "</div>";
        }
        // line 82
        yield "                                </div>  
                            </div>
                        </div>
                            
                        ";
        // line 87
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Trasporto: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"transport\" id=\"transport\"
                                    class=\"form-control ";
        // line 92
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "transport", [], "any", false, false, false, 92)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 95
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "transport", [], "any", false, false, false, 95)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "transport", [], "any", false, false, false, 95), "html", null, true);
            yield "</div>";
        }
        // line 96
        yield "                                </div> 
                            </div>
                        </div>
                            
                        ";
        // line 101
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Data carico: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"date_load\" id=\"date_load\" 
                                    data-original=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "date_load", [], "any", false, false, false, 106), "html", null, true);
        yield "\" class=\"form-control datepicker 
                                        ";
        // line 107
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_load", [], "any", false, false, false, 107)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 110
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_load", [], "any", false, false, false, 110)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_load", [], "any", false, false, false, 110), "html", null, true);
            yield "</div>";
        }
        // line 111
        yield "                                </div> 
                            </div>
                        </div>
                            
                        ";
        // line 116
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Data scarico: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"date_unload\" id=\"date_unload\"  
                                    data-original=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "date_unload", [], "any", false, false, false, 121), "html", null, true);
        yield "\" class=\"form-control datepicker 
                                        ";
        // line 122
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_unload", [], "any", false, false, false, 122)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 125
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_unload", [], "any", false, false, false, 125)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_unload", [], "any", false, false, false, 125), "html", null, true);
            yield "</div>";
        }
        // line 126
        yield "                                </div> 
                            </div>
                        </div>    
                            
                        ";
        // line 131
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Container / ATB: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"container\" id=\"container\"
                                    class=\"form-control ";
        // line 136
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "container", [], "any", false, false, false, 136)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 139
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "container", [], "any", false, false, false, 139)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "container", [], "any", false, false, false, 139), "html", null, true);
            yield "</div>";
        }
        // line 140
        yield "                                </div>  
                            </div>
                        </div>
            
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default modal-cancel\" data-bs-dismiss=\"modal\">
                                <span class=\"bi bi-x-circle\">
                                    CHIUDI 
                                </span>    
                            </button>
                            
                            <button type=\"submit\" class=\"btn btn-default modal-save updateTrans\" name=\"update_transport\">
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
        // line 164
        yield "
";
        // line 166
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
                        <input type=\"hidden\" name=\"id_transport\" id=\"id_transport\" value=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["quantity"] ?? null), "id_transport", [], "any", false, false, false, 185), "html", null, true);
        yield "\" />
                        <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\" />

                        ";
        // line 189
        yield "                        <div class=\"row form-group mx-auto my-3\">
                            <label class=\"col-4 form-control-label my-1\"> Quantità caricata: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"kg_load\" id=\"kg_load\" 
                                    class=\"form-control ";
        // line 194
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_load", [], "any", false, false, false, 194)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 197
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_load", [], "any", false, false, false, 197)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_load", [], "any", false, false, false, 197), "html", null, true);
            yield "</div>";
        }
        // line 198
        yield "                                </div> 
                            </div>
                        </div>

                        ";
        // line 203
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Raffreddamento: </label>
                        
                            <div class=\"col-8\">
                                <select name=\"cooling\" id=\"cooling\" class=\"form-control 
                                    ";
        // line 208
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cooling", [], "any", false, false, false, 208)) {
            yield "is-invalid";
        }
        yield "\">
                                    <option class=\"opt-type\" value=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["quantity"] ?? null), "cooling", [], "any", false, false, false, 209), "html", null, true);
        yield "\">
                                        ";
        // line 210
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["quantity"] ?? null), "cooling", [], "any", false, false, false, 210) == 0)) {
            // line 211
            yield "                                            NO = 0
                                        ";
        } else {
            // line 213
            yield "                                            SÌ = 600
                                        ";
        }
        // line 215
        yield "                                    </option> 

                                    <option value=\"600\" class=\"opt-type\"> 
                                        SÌ = 600
                                    </option>
                                    
                                    <option value=\"0\" class=\"opt-type\"> 
                                        NO = 0
                                    </option>
                                </select>

                                <div class=\"error-placeholder\">
                                    ";
        // line 227
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cooling", [], "any", false, false, false, 227)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cooling", [], "any", false, false, false, 227), "html", null, true);
            yield "</div>";
        }
        // line 228
        yield "                                </div> 
                            </div>
                        </div>
                        
                        ";
        // line 233
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Tipologia costo extra: </label>
                            
                            <div class=\"col-8\">
                                <select name=\"price_typology\" id=\"price_typology\" class=\"form-control 
                                    ";
        // line 238
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_typology", [], "any", false, false, false, 238)) {
            yield "is-invalid";
        }
        yield "\">
                                    <option class=\"opt-type\" value=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["quantity"] ?? null), "price_typology", [], "any", false, false, false, 239), "html", null, true);
        yield "\">
                                        ";
        // line 240
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["quantity"] ?? null), "price_typology", [], "any", false, false, false, 240) == "yes")) {
            // line 241
            yield "                                            SÌ
                                        ";
        } else {
            // line 243
            yield "                                            NO
                                        ";
        }
        // line 245
        yield "                                    </option>   
                                    
                                    <option value=\"yes\" class=\"opt-type\"> 
                                        SÌ
                                    </option>
                                        
                                    <option value=\"no\" class=\"opt-type\"> 
                                        NO
                                    </option>
                                </select>

                                <div class=\"error-placeholder\">
                                    ";
        // line 257
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_typology", [], "any", false, false, false, 257)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_typology", [], "any", false, false, false, 257), "html", null, true);
            yield "</div>";
        }
        // line 258
        yield "                                </div>
                            </div>
                        </div>
                            
                        ";
        // line 263
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Valore costo extra: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"price_value\" id=\"price_value\"
                                    class=\"form-control ";
        // line 268
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_value", [], "any", false, false, false, 268)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 271
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_value", [], "any", false, false, false, 271)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_value", [], "any", false, false, false, 271), "html", null, true);
            yield "</div>";
        }
        // line 272
        yield "                                </div>  
                            </div>
                        </div>
                            
                        ";
        // line 277
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Quantità scaricata: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"kg_unload\" id=\"kg_unload\"
                                    class=\"form-control ";
        // line 282
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_unload", [], "any", false, false, false, 282)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 285
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_unload", [], "any", false, false, false, 285)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_unload", [], "any", false, false, false, 285), "html", null, true);
            yield "</div>";
        }
        // line 286
        yield "                                </div> 
                            </div>
                        </div>
                            
                        ";
        // line 291
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Peso specifico (gas): </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"gas_weight\" id=\"gas_weight\" 
                                    class=\"form-control ";
        // line 296
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gas_weight", [], "any", false, false, false, 296)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 299
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gas_weight", [], "any", false, false, false, 299)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gas_weight", [], "any", false, false, false, 299), "html", null, true);
            yield "</div>";
        }
        // line 300
        yield "                                </div> 
                            </div>
                        </div>
                            
                        ";
        // line 305
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> PCS/GHV: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"pcs_ghv\" id=\"pcs_ghv\"
                                    class=\"form-control ";
        // line 310
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pcs_ghv", [], "any", false, false, false, 310)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 313
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pcs_ghv", [], "any", false, false, false, 313)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pcs_ghv", [], "any", false, false, false, 313), "html", null, true);
            yield "</div>";
        }
        // line 314
        yield "                                </div> 
                            </div>
                        </div>    
            
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default modal-cancel\" data-bs-dismiss=\"modal\">
                                <span class=\"bi bi-x-circle\">
                                    CHIUDI 
                                </span>    
                            </button>
                            
                            <button type=\"submit\" class=\"btn btn-default modal-save updateTrans\" name=\"update_quantity\">
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
        // line 338
        yield "
";
        // line 340
        yield "<div class=\"modal fade\" id=\"editNote\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit-note\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header row\">
                <h2 class=\"modal-title mx-auto my-auto\" id=\"edit-note\"> 
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                        MODIFICA
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                </h2>

                    <h4 class=\"modal-subtitle mx-auto my-2\"> 
                        Modifica la nota del trasporto <b style=\"color: #6d1741\">#";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "seo", [], "any", false, false, false, 351), "html", null, true);
        yield "</b>.
                    </h4>
            </div> 
                            
            <div class=\"modal-body\">
                <div class=\"container-fluid\">

                    <form id=\"note-form\" method=\"POST\" action=\"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "transport-note/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "id_transport", [], "any", false, false, false, 358), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"id_transport\" id=\"id_transport\" value=\"";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "id_transport", [], "any", false, false, false, 359), "html", null, true);
        yield "\" />
                        <input type=\"hidden\" name=\"type\" value=\"";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "type", [], "any", false, false, false, 360), "html", null, true);
        yield "\" />

                        <div class=\"row form-group mx-auto\">
                            <label class=\"form-control-label my-auto\"> Nota: </label>
                            
                            <textarea class=\"form-control edit-note\" name=\"note\" id=\"note\" 
                                style=\"height: 80px; text-align: center; white-space-collapse: collapse\"
                            >";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "note", [], "any", false, false, false, 367)), "html", null, true);
        yield "</textarea>
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
    
                            <button type=\"submit\" class=\"btn btn-default modal-save updateNote\" id=\"updateNote\" name=\"update_note\">
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
        // line 396
        yield "
";
        // line 397
        yield from $this->unwrap()->yieldBlock('jquery', $context, $blocks);
        // line 411
        yield "
";
        // line 412
        yield from $this->unwrap()->yieldBlock('datepicker', $context, $blocks);
        // line 418
        yield "
";
        // line 419
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

    // line 397
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_jquery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 398
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

    // line 412
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datepicker(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 413
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=\" 
        crossorigin=\"anonymous\">
</script>
";
        yield from [];
    }

    // line 419
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 420
        yield "<script>
\$(document).ready(function () {
//  Datepicker 
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

//  Validator method for defining current date as max
    \$.validator.addMethod(\"noFutureDate\", function (value, element) {
        if (!value) return true; // allow empty if not required

        const parts = value.split(\"-\");
        const inputDate = new Date(parts[2], parts[1] - 1, parts[0]); // assuming dd-mm-yyyy
        const today = new Date();
        today.setHours(0, 0, 0, 0); // remove time part

        return inputDate <= today;
    });

//  Validator method for defining that unload's date must be after or equal to load's date
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

//  Form validation
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
        return array (  781 => 420,  774 => 419,  765 => 413,  758 => 412,  741 => 398,  734 => 397,  727 => 3,  725 => 2,  718 => 1,  713 => 419,  710 => 418,  708 => 412,  705 => 411,  703 => 397,  700 => 396,  669 => 367,  659 => 360,  655 => 359,  649 => 358,  639 => 351,  626 => 340,  623 => 338,  598 => 314,  592 => 313,  584 => 310,  577 => 305,  571 => 300,  565 => 299,  557 => 296,  550 => 291,  544 => 286,  538 => 285,  530 => 282,  523 => 277,  517 => 272,  511 => 271,  503 => 268,  496 => 263,  490 => 258,  484 => 257,  470 => 245,  466 => 243,  462 => 241,  460 => 240,  456 => 239,  450 => 238,  443 => 233,  437 => 228,  431 => 227,  417 => 215,  413 => 213,  409 => 211,  407 => 210,  403 => 209,  397 => 208,  390 => 203,  384 => 198,  378 => 197,  370 => 194,  363 => 189,  358 => 186,  354 => 185,  333 => 166,  330 => 164,  305 => 140,  299 => 139,  291 => 136,  284 => 131,  278 => 126,  272 => 125,  264 => 122,  260 => 121,  253 => 116,  247 => 111,  241 => 110,  233 => 107,  229 => 106,  222 => 101,  216 => 96,  210 => 95,  202 => 92,  195 => 87,  189 => 82,  183 => 81,  175 => 78,  168 => 73,  162 => 68,  156 => 67,  148 => 64,  141 => 59,  135 => 54,  129 => 53,  121 => 50,  117 => 49,  111 => 45,  105 => 40,  99 => 39,  91 => 36,  87 => 35,  81 => 31,  76 => 28,  72 => 27,  51 => 8,  48 => 6,  46 => 1,);
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
                            
                            <button type=\"submit\" class=\"btn btn-default modal-save updateTrans\" name=\"update_transport\">
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
                        <input type=\"hidden\" name=\"id_transport\" id=\"id_transport\" value=\"{{ quantity.id_transport }}\" />
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
                                    <option class=\"opt-type\" value=\"{{ quantity.cooling}}\">
                                        {% if (quantity.cooling == 0) %}
                                            NO = 0
                                        {% else %}
                                            SÌ = 600
                                        {% endif %}
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
                        </div>
                        
                        {# Price Typology #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Tipologia costo extra: </label>
                            
                            <div class=\"col-8\">
                                <select name=\"price_typology\" id=\"price_typology\" class=\"form-control 
                                    {% if errors.price_typology %}is-invalid{% endif %}\">
                                    <option class=\"opt-type\" value=\"{{ quantity.price_typology }}\">
                                        {% if (quantity.price_typology == 'yes') %}
                                            SÌ
                                        {% else %}
                                            NO
                                        {% endif %}
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
                        </div>
                            
                        {# Price Value #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Valore costo extra: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"price_value\" id=\"price_value\"
                                    class=\"form-control {% if errors.price_value %}is-invalid{% endif %}\" />

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
                            
                            <button type=\"submit\" class=\"btn btn-default modal-save updateTrans\" name=\"update_quantity\">
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
<div class=\"modal fade\" id=\"editNote\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit-note\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header row\">
                <h2 class=\"modal-title mx-auto my-auto\" id=\"edit-note\"> 
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                        MODIFICA
                    <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                </h2>

                    <h4 class=\"modal-subtitle mx-auto my-2\"> 
                        Modifica la nota del trasporto <b style=\"color: #6d1741\">#{{ t.seo }}</b>.
                    </h4>
            </div> 
                            
            <div class=\"modal-body\">
                <div class=\"container-fluid\">

                    <form id=\"note-form\" method=\"POST\" action=\"{{ doc_root }}transport-note/{{ t.id_transport }}\">
                        <input type=\"hidden\" name=\"id_transport\" id=\"id_transport\" value=\"{{ t.id_transport }}\" />
                        <input type=\"hidden\" name=\"type\" value=\"{{ t.type }}\" />

                        <div class=\"row form-group mx-auto\">
                            <label class=\"form-control-label my-auto\"> Nota: </label>
                            
                            <textarea class=\"form-control edit-note\" name=\"note\" id=\"note\" 
                                style=\"height: 80px; text-align: center; white-space-collapse: collapse\"
                            >{{ t.note|trim }}</textarea>
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
    
                            <button type=\"submit\" class=\"btn btn-default modal-save updateNote\" id=\"updateNote\" name=\"update_note\">
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
//  Datepicker 
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

//  Validator method for defining current date as max
    \$.validator.addMethod(\"noFutureDate\", function (value, element) {
        if (!value) return true; // allow empty if not required

        const parts = value.split(\"-\");
        const inputDate = new Date(parts[2], parts[1] - 1, parts[0]); // assuming dd-mm-yyyy
        const today = new Date();
        today.setHours(0, 0, 0, 0); // remove time part

        return inputDate <= today;
    });

//  Validator method for defining that unload's date must be after or equal to load's date
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

//  Form validation
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
    }
});
</script>
{% endblock %}", "transport-modal.twig", "C:\\wamp64\\www\\liquimet\\templates\\transport-modal.twig");
    }
}
