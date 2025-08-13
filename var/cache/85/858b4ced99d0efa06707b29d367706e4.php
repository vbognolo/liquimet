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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
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
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "id_transport", [], "any", false, false, false, 20), "html", null, true);
        yield "\" />
                        <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\" />   
                        <input type=\"hidden\" name=\"original_slot\" id=\"original_slot\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "slot", [], "any", false, false, false, 22), "html", null, true);
        yield "\" />
                        <input type=\"hidden\" name=\"original_cmr\" id=\"original_cmr\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "cmr", [], "any", false, false, false, 23), "html", null, true);
        yield "\" />

                        ";
        // line 26
        yield "                        <div class=\"row form-group mx-auto my-3\">
                            <label for=\"slot\" class=\"col-4 form-control-label my-1\"> Slot ID: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"slot\" id=\"slot\" data-original=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "slot", [], "any", false, false, false, 30), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "slot", [], "any", false, false, false, 30), "html", null, true);
        yield "\"
                                       class=\"form-control text-upper ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "slot", [], "any", false, false, false, 31)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 34
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "slot", [], "any", false, false, false, 34)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "slot", [], "any", false, false, false, 34), "html", null, true);
            yield "</div>";
        }
        // line 35
        yield "                                </div> 
                            </div>
                        </div>
                        
                        ";
        // line 40
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"cmr\" class=\"col-4 form-control-label my-1\"> Numero CMR: </label>
                        
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"cmr\" id=\"cmr\" data-original=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "cmr", [], "any", false, false, false, 44), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "cmr", [], "any", false, false, false, 44), "html", null, true);
        yield "\"
                                       class=\"form-control ";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cmr", [], "any", false, false, false, 45)) {
            yield "is-invalid";
        }
        yield " text-upper\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cmr", [], "any", false, false, false, 48)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cmr", [], "any", false, false, false, 48), "html", null, true);
            yield "</div>";
        }
        // line 49
        yield "                                </div> 
                            </div>
                        </div>
                        
                        ";
        // line 54
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"issuer\" class=\"col-4 form-control-label my-1\"> Fornitore: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"issuer\" id=\"issuer\" value=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "issuer", [], "any", false, false, false, 58), "html", null, true);
        yield "\"
                                       class=\"form-control ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issuer", [], "any", false, false, false, 59)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 62
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issuer", [], "any", false, false, false, 62)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issuer", [], "any", false, false, false, 62), "html", null, true);
            yield "</div>";
        }
        // line 63
        yield "                                </div>
                            </div>
                        </div>
                            
                        ";
        // line 68
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"supplier\" class=\"col-4 form-control-label my-1\"> Emittente: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"supplier\" id=\"supplier\" value=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "supplier", [], "any", false, false, false, 72), "html", null, true);
        yield "\"
                                       class=\"form-control ";
        // line 73
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "supplier", [], "any", false, false, false, 73)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 76
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "supplier", [], "any", false, false, false, 76)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "supplier", [], "any", false, false, false, 76), "html", null, true);
            yield "</div>";
        }
        // line 77
        yield "                                </div>  
                            </div>
                        </div>
                            
                        ";
        // line 82
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"transport\" class=\"col-4 form-control-label my-1\"> Trasporto: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"transport\" id=\"transport\" value=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "transport", [], "any", false, false, false, 86), "html", null, true);
        yield "\"
                                       class=\"form-control ";
        // line 87
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "transport", [], "any", false, false, false, 87)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 90
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "transport", [], "any", false, false, false, 90)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "transport", [], "any", false, false, false, 90), "html", null, true);
            yield "</div>";
        }
        // line 91
        yield "                                </div> 
                            </div>
                        </div>
                            
                        ";
        // line 96
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"date_load\" class=\"col-4 form-control-label my-1\"> Data carico: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"date_load\" id=\"date_load\" value=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "date_load", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "date_load", [], "any", false, false, false, 100), "")) : ("")), "html", null, true);
        yield "\"
                                       class=\"form-control datepicker ";
        // line 101
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_load", [], "any", false, false, false, 101)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 104
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_load", [], "any", false, false, false, 104)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_load", [], "any", false, false, false, 104), "html", null, true);
            yield "</div>";
        }
        // line 105
        yield "                                </div> 
                            </div>
                        </div>
                            
                        ";
        // line 110
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"date_unload\" class=\"col-4 form-control-label my-1\"> Data scarico: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"date_unload\" id=\"date_unload\" value=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "date_unload", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "date_unload", [], "any", false, false, false, 114), "")) : ("")), "html", null, true);
        yield "\"
                                       class=\"form-control datepicker ";
        // line 115
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_unload", [], "any", false, false, false, 115)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 118
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_unload", [], "any", false, false, false, 118)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date_unload", [], "any", false, false, false, 118), "html", null, true);
            yield "</div>";
        }
        // line 119
        yield "                                </div> 
                            </div>
                        </div>    
                            
                        ";
        // line 124
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"container\" class=\"col-4 form-control-label my-1\"> Container / ATB: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"container\" id=\"container\" value=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "container", [], "any", false, false, false, 128), "html", null, true);
        yield "\"
                                       class=\"form-control ";
        // line 129
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "container", [], "any", false, false, false, 129)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 132
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "container", [], "any", false, false, false, 132)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "container", [], "any", false, false, false, 132), "html", null, true);
            yield "</div>";
        }
        // line 133
        yield "                                </div>  
                            </div>
                        </div>
            
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default modal-cancel\" data-bs-dismiss=\"modal\">
                                <span class=\"bi bi-x-circle\">
                                    CHIUDI 
                                </span>    
                            </button>
                            
                            <button type=\"submit\" class=\"btn btn-default modal-save\">
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
        // line 157
        yield "
";
        // line 159
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
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\" />

                        ";
        // line 182
        yield "                        <div class=\"row form-group mx-auto my-3\">
                            <label class=\"col-4 form-control-label my-1\"> Quantità caricata: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"kg_load\" id=\"kg_load\" 
                                    class=\"form-control ";
        // line 187
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_load", [], "any", false, false, false, 187)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 190
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_load", [], "any", false, false, false, 190)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_load", [], "any", false, false, false, 190), "html", null, true);
            yield "</div>";
        }
        // line 191
        yield "                                </div> 
                            </div>
                        </div>

                        ";
        // line 196
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Raffreddamento: </label>
                        
                            <div class=\"col-8\">
                                <select name=\"cooling\" id=\"cooling\" class=\"form-control ";
        // line 200
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cooling", [], "any", false, false, false, 200)) {
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
        // line 211
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cooling", [], "any", false, false, false, 211)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "cooling", [], "any", false, false, false, 211), "html", null, true);
            yield "</div>";
        }
        // line 212
        yield "                                </div> 
                            </div>
                        </div>
                        
                        ";
        // line 217
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Tipologia costo extra: </label>
                            
                            <div class=\"col-8\">
                                <select name=\"price_typology\" id=\"price_typology\" class=\"form-control ";
        // line 221
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_typology", [], "any", false, false, false, 221)) {
            yield "is-invalid";
        }
        yield "\">
                                    ";
        // line 229
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
        // line 240
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_typology", [], "any", false, false, false, 240)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_typology", [], "any", false, false, false, 240), "html", null, true);
            yield "</div>";
        }
        // line 241
        yield "                                </div>
                            </div>
                        </div>
                            
                        ";
        // line 246
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Valore costo extra: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"price_value\" id=\"price_value\"
                                    class=\"form-control ";
        // line 251
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_value", [], "any", false, false, false, 251)) {
            yield "is-invalid";
        }
        yield "\" />
                                ";
        // line 253
        yield "

                                <div class=\"error-placeholder\">
                                    ";
        // line 256
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_value", [], "any", false, false, false, 256)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "price_value", [], "any", false, false, false, 256), "html", null, true);
            yield "</div>";
        }
        // line 257
        yield "                                </div>  
                            </div>
                        </div>
                            
                        ";
        // line 262
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Quantità scaricata: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"kg_unload\" id=\"kg_unload\"
                                    class=\"form-control ";
        // line 267
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_unload", [], "any", false, false, false, 267)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 270
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_unload", [], "any", false, false, false, 270)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "kg_unload", [], "any", false, false, false, 270), "html", null, true);
            yield "</div>";
        }
        // line 271
        yield "                                </div> 
                            </div>
                        </div>

                        ";
        // line 276
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Densità liquido: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"liquid_density\" id=\"liquid_density\" 
                                    class=\"form-control ";
        // line 281
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "liquid_density", [], "any", false, false, false, 281)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 284
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "liquid_density", [], "any", false, false, false, 284)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "liquid_density", [], "any", false, false, false, 284), "html", null, true);
            yield "</div>";
        }
        // line 285
        yield "                                </div> 
                            </div>
                        </div>
                            
                        ";
        // line 290
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> Peso specifico (gas): </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"gas_weight\" id=\"gas_weight\" 
                                    class=\"form-control ";
        // line 295
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gas_weight", [], "any", false, false, false, 295)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 298
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gas_weight", [], "any", false, false, false, 298)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gas_weight", [], "any", false, false, false, 298), "html", null, true);
            yield "</div>";
        }
        // line 299
        yield "                                </div> 
                            </div>
                        </div>
                            
                        ";
        // line 304
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"col-4 form-control-label my-1\"> PCS/GHV: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"pcs_ghv\" id=\"pcs_ghv\"
                                    class=\"form-control ";
        // line 309
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pcs_ghv", [], "any", false, false, false, 309)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 312
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pcs_ghv", [], "any", false, false, false, 312)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pcs_ghv", [], "any", false, false, false, 312), "html", null, true);
            yield "</div>";
        }
        // line 313
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
        // line 337
        yield "
";
        // line 339
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
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\" />

                        <div class=\"row form-group mx-auto mb-3\">
                            <label class=\"form-control-label my-1\"> Nota: </label>
                            
                            <div class=\"\">
                                <textarea name=\"note\" id=\"note\" maxlength=\"2000\"
                                    class=\"form-control ";
        // line 366
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 366)) {
            yield "is-invalid";
        }
        yield "\"
                                    style=\"height: 80px; text-align: center; white-space-collapse: collapse\"></textarea>

                                <div class=\"error-placeholder\">
                                    ";
        // line 370
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 370)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 370), "html", null, true);
            yield "</div>";
        }
        // line 371
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
        // line 401
        yield "
";
        // line 403
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
        // line 422
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
        // line 449
        yield "
";
        // line 451
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
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "date_load", [], "any", false, false, false, 470), "html", null, true);
        yield "\">
                        <input type=\"hidden\" id=\"date_unload\" value=\"";
        // line 471
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "date_unload", [], "any", false, false, false, 471), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\" />

                        ";
        // line 475
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"destination\" class=\"col-4 form-control-label my-1\"> Destinazione: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"destination\" id=\"destination\"
                                       class=\"form-control ";
        // line 480
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "destination", [], "any", false, false, false, 480)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 483
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "destination", [], "any", false, false, false, 483)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "destination", [], "any", false, false, false, 483), "html", null, true);
            yield "</div>";
        }
        // line 484
        yield "                                </div> 
                            </div>
                        </div>

                        ";
        // line 489
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"exw\" class=\"col-4 form-control-label my-1\"> EXW: </label>
                            
                            <div class=\"col-8\">
                                <select name=\"exw\" id=\"exw\" class=\"form-control ";
        // line 493
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "exw", [], "any", false, false, false, 493)) {
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
        // line 504
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "exw", [], "any", false, false, false, 504)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "exw", [], "any", false, false, false, 504), "html", null, true);
            yield "</div>";
        }
        // line 505
        yield "                                </div>
                            </div>
                        </div>
                            
                        ";
        // line 510
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"date\" class=\"col-4 form-control-label my-1\"> Data carico: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"date\" id=\"date\" 
                                       class=\"form-control datepicker ";
        // line 515
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date", [], "any", false, false, false, 515)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 518
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date", [], "any", false, false, false, 518)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "date", [], "any", false, false, false, 518), "html", null, true);
            yield "</div>";
        }
        // line 519
        yield "                                </div> 
                            </div>
                        </div>

                        ";
        // line 524
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"place\" class=\"col-4 form-control-label my-1\"> Luogo: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"place\" id=\"place\"
                                       class=\"form-control ";
        // line 529
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "place", [], "any", false, false, false, 529)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 532
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "place", [], "any", false, false, false, 532)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "place", [], "any", false, false, false, 532), "html", null, true);
            yield "</div>";
        }
        // line 533
        yield "                                </div> 
                            </div>
                        </div>

                        ";
        // line 538
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"q_unloaded\" class=\"col-4 form-control-label my-1\"> Quantità scaricata: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"q_unloaded\" id=\"q_unloaded\" 
                                    class=\"form-control ";
        // line 543
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "q_unloaded", [], "any", false, false, false, 543)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 546
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "q_unloaded", [], "any", false, false, false, 546)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "q_unloaded", [], "any", false, false, false, 546), "html", null, true);
            yield "</div>";
        }
        // line 547
        yield "                                </div> 
                            </div>
                        </div>

                        ";
        // line 552
        yield "                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"invoice\" class=\"col-4 form-control-label my-1\"> Fattura: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"invoice\" id=\"invoice\" 
                                    class=\"form-control ";
        // line 557
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "invoice", [], "any", false, false, false, 557)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 560
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "invoice", [], "any", false, false, false, 560)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "invoice", [], "any", false, false, false, 560), "html", null, true);
            yield "</div>";
        }
        // line 561
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
</div>";
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
        return array (  961 => 561,  955 => 560,  947 => 557,  940 => 552,  934 => 547,  928 => 546,  920 => 543,  913 => 538,  907 => 533,  901 => 532,  893 => 529,  886 => 524,  880 => 519,  874 => 518,  866 => 515,  859 => 510,  853 => 505,  847 => 504,  831 => 493,  825 => 489,  819 => 484,  813 => 483,  805 => 480,  798 => 475,  793 => 472,  789 => 471,  785 => 470,  764 => 451,  761 => 449,  732 => 422,  711 => 403,  708 => 401,  677 => 371,  671 => 370,  662 => 366,  652 => 359,  630 => 339,  627 => 337,  602 => 313,  596 => 312,  588 => 309,  581 => 304,  575 => 299,  569 => 298,  561 => 295,  554 => 290,  548 => 285,  542 => 284,  534 => 281,  527 => 276,  521 => 271,  515 => 270,  507 => 267,  500 => 262,  494 => 257,  488 => 256,  483 => 253,  477 => 251,  470 => 246,  464 => 241,  458 => 240,  445 => 229,  439 => 221,  433 => 217,  427 => 212,  421 => 211,  405 => 200,  399 => 196,  393 => 191,  387 => 190,  379 => 187,  372 => 182,  367 => 179,  345 => 159,  342 => 157,  317 => 133,  311 => 132,  303 => 129,  299 => 128,  293 => 124,  287 => 119,  281 => 118,  273 => 115,  269 => 114,  263 => 110,  257 => 105,  251 => 104,  243 => 101,  239 => 100,  233 => 96,  227 => 91,  221 => 90,  213 => 87,  209 => 86,  203 => 82,  197 => 77,  191 => 76,  183 => 73,  179 => 72,  173 => 68,  167 => 63,  161 => 62,  153 => 59,  149 => 58,  143 => 54,  137 => 49,  131 => 48,  123 => 45,  117 => 44,  111 => 40,  105 => 35,  99 => 34,  91 => 31,  85 => 30,  79 => 26,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Edit Transport Modal #}
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
                        <input type=\"hidden\" name=\"original_slot\" id=\"original_slot\" value=\"{{ transport.slot }}\" />
                        <input type=\"hidden\" name=\"original_cmr\" id=\"original_cmr\" value=\"{{ transport.cmr }}\" />

                        {# Slot ID #}
                        <div class=\"row form-group mx-auto my-3\">
                            <label for=\"slot\" class=\"col-4 form-control-label my-1\"> Slot ID: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"slot\" id=\"slot\" data-original=\"{{ transport.slot }}\" value=\"{{ transport.slot }}\"
                                       class=\"form-control text-upper {% if errors.slot %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.slot %}<div class=\"invalid-feedback\">{{ errors.slot }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>
                        
                        {# CMR Number #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"cmr\" class=\"col-4 form-control-label my-1\"> Numero CMR: </label>
                        
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"cmr\" id=\"cmr\" data-original=\"{{ transport.cmr }}\" value=\"{{ transport.cmr }}\"
                                       class=\"form-control {% if errors.cmr %}is-invalid{% endif %} text-upper\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.cmr %}<div class=\"invalid-feedback\">{{ errors.cmr }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>
                        
                        {# Issuer #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"issuer\" class=\"col-4 form-control-label my-1\"> Fornitore: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"issuer\" id=\"issuer\" value=\"{{ transport.issuer }}\"
                                       class=\"form-control {% if errors.issuer %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.issuer %}<div class=\"invalid-feedback\">{{ errors.issuer }}</div>{% endif %}
                                </div>
                            </div>
                        </div>
                            
                        {# Supplier #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"supplier\" class=\"col-4 form-control-label my-1\"> Emittente: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"supplier\" id=\"supplier\" value=\"{{ transport.supplier }}\"
                                       class=\"form-control {% if errors.supplier %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.supplier %}<div class=\"invalid-feedback\">{{ errors.supplier }}</div>{% endif %}
                                </div>  
                            </div>
                        </div>
                            
                        {# Transport #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"transport\" class=\"col-4 form-control-label my-1\"> Trasporto: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"transport\" id=\"transport\" value=\"{{ transport.transport }}\"
                                       class=\"form-control {% if errors.transport %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.transport %}<div class=\"invalid-feedback\">{{ errors.transport }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>
                            
                        {# Date Load #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"date_load\" class=\"col-4 form-control-label my-1\"> Data carico: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"date_load\" id=\"date_load\" value=\"{{ transport.date_load|default('') }}\"
                                       class=\"form-control datepicker {% if errors.date_load %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.date_load %}<div class=\"invalid-feedback\">{{ errors.date_load }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>
                            
                        {# Date Unload #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"date_unload\" class=\"col-4 form-control-label my-1\"> Data scarico: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"date_unload\" id=\"date_unload\" value=\"{{ transport.date_unload|default('') }}\"
                                       class=\"form-control datepicker {% if errors.date_unload %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.date_unload %}<div class=\"invalid-feedback\">{{ errors.date_unload }}</div>{% endif %}
                                </div> 
                            </div>
                        </div>    
                            
                        {# Container #}
                        <div class=\"row form-group mx-auto mb-3\">
                            <label for=\"container\" class=\"col-4 form-control-label my-1\"> Container / ATB: </label>
                            
                            <div class=\"col-8\">
                                <input type=\"text\" name=\"container\" id=\"container\" value=\"{{ transport.container }}\"
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
                            
                            <button type=\"submit\" class=\"btn btn-default modal-save\">
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
{# End Transport Modal #}

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
{# End Quantity Modal #}

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
</div>", "transport-modal.twig", "C:\\wamp64\\www\\liquimet\\templates\\transport-modal.twig");
    }
}
