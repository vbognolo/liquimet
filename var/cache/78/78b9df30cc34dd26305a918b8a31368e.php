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

/* admin/user.twig */
class __TwigTemplate_2a8debfd59a3d3b0d95e4e669c364420 extends Template
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
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
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
        $this->parent = $this->loadTemplate("layout.twig", "admin/user.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Registrazione utenti ";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    ";
        yield from $this->loadTemplate("admin/users-navigation.twig", "admin/user.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "
    <section class=\"col-9 mx-auto register-form\">
        <div class=\"card\">
            <div class=\"card-header row mx-auto pt-3\">
                <h2 class=\"form-title mx-auto my-3\"> 
                    <i class=\"bi bi-people\"></i> 
                        REGISTRAZIONE
                    <i class=\"bi bi-people\"></i> 
                </h2>

                ";
        // line 16
        if ((array_key_exists("errors", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0))) {
            // line 17
            yield "                <div class=\"alert alert-danger\">
                    <ul>
                        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["field"] => $context["error"]) {
                // line 20
                yield "                            <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['field'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "                    </ul>
                </div>
                ";
        } else {
            // line 25
            yield "                <h4 class=\"form-subtitle mx-auto my-2\"> 
                    Inserire i dati richiesti per creare il nuovo <b style=\"color: #6d1741\">utente</b>.
                </h4>
                ";
        }
        // line 29
        yield "            </div>

            
            <form id=\"user-form\" name=\"user-form\" action=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "user\" method=\"POST\" autocomplete=\"off\" novalidate>
                <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\">

                <!--    Fieldset 1    -->
                <fieldset class=\"mx-auto my-3 active\">
                    <div class=\"card-body\">
                        <!-- Email -->
                        <div class=\"row form-group mb-3\">        
                            <label for=\"email\" class=\"col-5 form-control-label\"> E-mail: </label>
                                
                            <div class=\"col-6\">
                                <input name=\"email\" type=\"text\" id=\"email\"
                                    class=\"form-control ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 44)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 47
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 47)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 47), "html", null, true);
            yield "</div>";
        }
        // line 48
        yield "                                </div>
                            </div>
                        </div>

                        <!-- Username -->
                        <div class=\"row form-group mb-3\">
                            <label for=\"username\" class=\"col-5 form-control-label\"> Username: </label>
                                
                            <div class=\"col-6\">
                                <input name=\"username\" type=\"text\" id=\"username\" autocomplete=\"off\"
                                    class=\"form-control ";
        // line 58
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 58)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 61
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 61)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 61), "html", null, true);
            yield "</div>";
        }
        // line 62
        yield "                                </div>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class=\"row form-group mb-3\">        
                            <label for=\"newPassword\" class=\"col-5 form-control-label\"> Password: </label>
                                            
                            <div class=\"col-6\">
                                <input name=\"password\" type=\"password\" id=\"newPassword\" autocomplete=\"new-password\" 
                                    class=\"form-control ";
        // line 72
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 72)) {
            yield "is-invalid";
        }
        yield "\"/>              

                                <div class=\"error-placeholder\">
                                    ";
        // line 75
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 75)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 75), "html", null, true);
            yield "</div>";
        }
        // line 76
        yield "                                </div>                  
                            </div>
                        </div>   
                                
                        <!-- Confirm password -->
                        <div class=\"row form-group mb-3\">
                            <label for=\"confirm\" class=\"col-5 form-control-label\"> Conferma pass.: </label>
                                        
                            <div class=\"col-6\">
                                <input name=\"confirm\" type=\"password\" id=\"confirm\" autocomplete=\"new-password\"
                                    class=\"form-control ";
        // line 86
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "confirm", [], "any", false, false, false, 86)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 89
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "confirm", [], "any", false, false, false, 89)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "confirm", [], "any", false, false, false, 89), "html", null, true);
            yield "</div>";
        }
        // line 90
        yield "                                </div>
                            </div>
                        </div>

                        <!-- Name -->
                        <div class=\"row form-group mb-3\">
                            <label for=\"name\" class=\"col-5 form-control-label\"> Nome: </label>

                            <div class=\"col-6\">
                                <input name=\"name\" type=\"text\" id=\"name\"
                                    class=\"form-control ";
        // line 100
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 100)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 103
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 103)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 103), "html", null, true);
            yield "</div>";
        }
        // line 104
        yield "                                </div>
                            </div>
                        </div>

                        <!-- Surname -->
                        <div class=\"row form-group mb-3\">
                            <label for=\"surname\" class=\"col-5 form-control-label\"> Cognome: </label>
                                
                            <div class=\"col-6\">
                                <input name=\"surname\" type=\"text\" id=\"surname\"
                                    class=\"form-control ";
        // line 114
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 114)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 117
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 117)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 117), "html", null, true);
            yield "</div>";
        }
        // line 118
        yield "                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"card-footer mx-auto\">      
                        <button type=\"button\" class=\"my-2 action-button back\" onclick=\"history.back();\">
                            <span class=\"m-auto\">
                                <i class=\"bi bi-chevron-double-left\"></i> INDIETRO
                            </span>
                        </button>
                        
                        <button type=\"button\" class=\"my-2 action-button next\" name=\"next\" id=\"next\">
                            <span class=\"m-auto\">
                                AVANTI <i class=\"bi bi-chevron-double-right\"></i>
                            </span>
                        </button>
                    </div>
                </fieldset>
                <!--    End Fieldset 1    -->

                <!--    Fieldset 2    -->
                <fieldset class=\"mx-auto my-3\">
                    <div class=\"card-body\">    
   
                        <!-- Birthday -->
                        <div class=\"row form-group mb-3\">
                            <label for=\"bday\" class=\"col-5 form-control-label\"> Data di nascita: </label>
                                
                            <div class=\"col-6\">
                                <input name=\"bday\" type=\"text\" id=\"bday\" value=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "birthday", [], "any", false, false, false, 148), "d-m-Y"), "html", null, true);
        yield "\"
                                    class=\"form-control datepicker ";
        // line 149
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "bday", [], "any", false, false, false, 149)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 152
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "bday", [], "any", false, false, false, 152)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "bday", [], "any", false, false, false, 152), "html", null, true);
            yield "</div>";
        }
        // line 153
        yield "                                </div>
                            </div>
                        </div>
        
                        <!-- City -->
                        <div class=\"row form-group mb-3\"> 
                            <label for=\"city\" class=\"col-5 form-control-label\"> Luogo di nascita: </label>
                                
                            <div class=\"col-6\">
                                <input name=\"city\" type=\"text\" id=\"city\"
                                    class=\"form-control ";
        // line 163
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 163)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 166
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 166)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 166), "html", null, true);
            yield "</div>";
        }
        yield "                                    
                                </div>
                            </div>
                        </div>
        
                        <!-- Country -->
                        <div class=\"row form-group mb-3\"> 
                            <label for=\"country\" class=\"col-5 form-control-label\"> </label>
                                
                            <div class=\"col-6\">
                                <input name=\"country\" type=\"text\" id=\"country\"
                                    class=\"form-control ";
        // line 177
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 177)) {
            yield "is-invalid";
        }
        yield "\" />

                                <div class=\"error-placeholder\">
                                    ";
        // line 180
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 180)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 180), "html", null, true);
            yield "</div>";
        }
        // line 181
        yield "                                </div>
                            </div>
                        </div>

                        <!-- Gender -->
                        <div class=\"row form-group mb-3\">
                            <label for=\"id_gender\" class=\"col-5 form-control-label\"> Genere: </label>
        
                            <div class=\"col-6\">
                                <select name=\"id_gender\" id=\"id_gender\" class=\"form-control ";
        // line 190
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gender", [], "any", false, false, false, 190)) {
            yield "is-invalid";
        }
        yield "\"> 
                                    <option class=\"opt-type\" value=\"\" style=\"color: lightgray;\"> Scegliere un'opzione </option>

                                    ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["gender"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 194
            yield "                                        <option class=\"opt-type\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "id_gender", [], "any", false, false, false, 194), "html", null, true);
            yield "\" style=\"color: #023365;\"> 
                                            ";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["g"], "name", [], "any", false, false, false, 195)), "html", null, true);
            yield " 
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['g'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        yield "                                </select>

                                <div class=\"error-placeholder\">
                                    ";
        // line 201
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gender", [], "any", false, false, false, 201)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gender", [], "any", false, false, false, 201), "html", null, true);
            yield "</div>";
        }
        // line 202
        yield "                                </div>
                            </div>        
                        </div> 
        
                        <!-- Role -->
                        <div class=\"row form-group mb-3\">
                            <label for=\"id_role\" class=\"col-5 form-control-label\"> Accesso: </label>
        
                            <div class=\"col-6\">
                                <select name=\"id_role\" id=\"id_role\" class=\"form-control ";
        // line 211
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "role", [], "any", false, false, false, 211)) {
            yield "is-invalid";
        }
        yield "\">  
                                    <option class=\"opt-type\" value=\"\" style=\"color: lightgray;\"> Scegliere un'opzione </option>
                                        
                                    ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["roles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 215
            yield "                                        <option class=\"opt-type\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id_role", [], "any", false, false, false, 215), "html", null, true);
            yield "\"> 
                                            ";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "name", [], "any", false, false, false, 216)), "html", null, true);
            yield " 
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        yield "                                </select>

                                <div class=\"error-placeholder\">
                                    ";
        // line 222
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "role", [], "any", false, false, false, 222)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "role", [], "any", false, false, false, 222), "html", null, true);
            yield "</div>";
        }
        // line 223
        yield "                                </div>
                            </div>   
                        </div> 
        
                        <!-- Title -->
                        <div class=\"row form-group mb-3\">
                            <label for=\"id_title\" class=\"col-5 form-control-label\"> Ruolo aziendale: </label>
        
                            <div class=\"col-6\">
                                <select name=\"id_title\" id=\"id_title\" class=\"form-control ";
        // line 232
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", false, false, false, 232)) {
            yield "is-invalid";
        }
        yield "\"> 
                                    <option class=\"opt-type\" value=\"\" style=\"color: lightgray;\"> Scegliere un'opzione </option>

                                    ";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["titles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 236
            yield "                                        <option class=\"opt-type\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_title", [], "any", false, false, false, 236), "html", null, true);
            yield "\"> 
                                            ";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "name", [], "any", false, false, false, 237)), "html", null, true);
            yield " 
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        yield "                                </select>

                                <div class=\"error-placeholder\">
                                    ";
        // line 243
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", false, false, false, 243)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", false, false, false, 243), "html", null, true);
            yield "</div>";
        }
        // line 244
        yield "                                </div>
                            </div>      
                        </div> 
                    </div>

                    <div class=\"card-footer mx-auto\">      
                        <button type=\"button\" class=\"my-2 action-button back\">
                            <span class=\"m-auto\">
                                <i class=\"bi bi-chevron-double-left\"></i> INDIETRO
                            </span>
                        </button>
                        
                        <button type=\"submit\" class=\"my-2 action-button save\" name=\"save\">
                            <span class=\"m-auto\">
                                SALVA <i class=\"bi bi-chevron-double-right\"></i>
                            </span>
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </section>
";
        yield from [];
    }

    // line 268
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 269
        yield "    ";
        // line 270
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>

<!-- Bootstrap Datepicker - CSS -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\">
<!-- Bootstrap Datepicker - JS -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
<!-- JQuery Validation -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" integrity=\"sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<!-- JQuery Validation Additional Methods -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" integrity=\"sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script>
\$(document).ready(function() {
//  Initialize Bootstrap Datepicker
    \$(\".datepicker\").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true
    }); 

    \$('.datepicker').on('changeDate', function(e) {
        \$(this).datepicker('hide');         // Hide only, do not clear
    });

//  Custom method to validate age
    \$.validator.addMethod(\"minAge\", function(value, element, min) {
        let birthDate = new Date(value);
        let today = new Date();

            if (birthDate > today) {
                return false;
            }

        let age = today.getFullYear() - birthDate.getFullYear();
        let monthDiff = today.getMonth() - birthDate.getMonth();

        // Adjust age if birthdate hasn't occurred yet this year
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        return age >= min;
    });

//  Custom validation rule to ensure the \"Scegliere un'opzione\" option is not selected
    \$.validator.addMethod(\"notPlaceholder\", function(value, element) {
        return value !== \"\" && value !== \"0\"; // Assuming \"0\" or \"\" represents the placeholder option value
    });

//  JQuery Input Validation and Errors
    \$(\"#user-form\").validate({
        rules: {
            email: { required: true, email: true},
            username: { required: true, rangelength: [4, 20], pattern: \"^(?=.*[A-Za-z])[A-Za-z0-9]+\$\" },
            password: { required: true, minlength: 8, pattern: \"^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])([A-Za-z0-9-_!?/*+]*).{8,}\$\" },
            confirm: { required: true, equalTo: \"#newPassword\" },
            name: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z ]+\$\" },
            surname: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z ]+\$\" },
            bday: { required: true, minAge: 18 },
            city: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z ]+\$\" },
            country: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z ]+\$\" },
            id_gender: { required: true, notPlaceholder: true },
            id_role: { required: true, notPlaceholder: true },
            id_title: { required: true, notPlaceholder: true }
        },
        messages: {
            email: {
                required: \"Campo obbligatorio.\",
                email: \"Inserire un'indirizzo e-mail valido.\"
            },
            username: {
                required: \"Campo obbligatorio.\",
                pattern: \"Username deve avere almeno 1 lettera. Sono permesse lettere e numeri. (4-20 caratteri)\"
            },
            password: {
                required: \"Campo obbligatorio.\",
                minlength: \"Min. caratteri: 8\",
                pattern: \"Usare almeno 1 lettera maiuscola, 1 minuscola ed 1 numero (min. 8 caratteri).\"
            },
            confirm: {
                required: \"Campo obbligatorio.\",
                equalTo: \"Le password non corrispondono.\"
            },
            name: {
                required: \"Campo obbligatorio.\",
                pattern: \"Il nome può contenere solo lettere e spazi (3-50 caratteri).\"
            }, 
            surname: {
                required: \"Campo obbligatorio.\",
                pattern: \"Il cognome può contenere solo lettere e spazi (3-50 caratteri).\"
            }, 
            bday: {
                required: \"Campo obbligatorio.\",
                minAge: \"Inserire una data valida (18+). Non sono permesse date future.\"
            },
            city: {
                required: \"Campo obbligatorio.\",
                pattern: \"La città può contenere solo lettere e spazi (3-50 caratteri).\"
            }, 
            country: {
                required: \"Campo obbligatorio.\",
                pattern: \"Lo stato può contenere solo lettere e spazi (3-50 caratteri).\"
            }, 
            id_gender: {
                required: \"Campo obbligatorio.\",
                notPlaceholder: \"Selezionare un'opzione.\"
            },
            id_role: {
                required: \"Campo obbligatorio.\",
                notPlaceholder: \"Selezionare un'opzione.\"
            },
            id_title: {
                required: \"Campo obbligatorio.\",
                notPlaceholder: \"Selezionare un'opzione.\"
            } 
        },
        errorPlacement: function(error, element) {
            error.addClass(\"text-danger small\");
            element.addClass(\"is-invalid\");                                             // Bootstrap error class
            element.closest(\".form-group\").find(\".error-placeholder\").html(error);      // Insert error inside the reserved space
        },
        success: function(label, element) {
            \$(element).removeClass(\"is-invalid\").addClass(\"is-valid\");
            \$(element).closest(\".form-group\").find(\".error-placeholder\").html(\"\");
        }
    });

//  Handle Next Button
    \$(\"#next\").on('click', function() {
        let currentStep = \$(this).closest(\"fieldset\");

        if (\$(\"#user-form\").valid()) {
            currentStep.removeClass(\"active\").next().addClass(\"active\");

            \$(\"fieldset\").hide();
            \$(\"fieldset.active\").show();
        } 
    });

//  Handle Back Button
    \$(\".back\").on('click', function() {
        let currentStep = \$(this).closest(\"fieldset\");

        currentStep.removeClass(\"active\").prev().addClass(\"active\");

        \$(\"fieldset\").hide();
        \$(\"fieldset.active\").show();
    });

//  Function to Check if User Exists by Email or Username
    function checkIfExists(field, value, id = null) {
        \$.ajax({
            url: \"/admin/check-if-exists\",
            type: \"POST\",
            data: { 
                [field]: value, 
                id_user: id 
            },
            dataType: \"json\",
            success: function (response) {
                let inputField = \$(\"#\" + field);
                let errorPlaceholder = inputField.closest(\".form-group\").find(\".error-placeholder\");

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

//  Trigger Validation When User Types on Email and Username Input Fields
    let debounceTimer;

    \$(\"#email, #username\").on(\"input\", function () {
        clearTimeout(debounceTimer);
        let field = \$(this).attr(\"id\");
        let value = \$(this).val();
        const id = \$(\"#id_user\").val();

        if (value.length >= 7) {
            debounceTimer = setTimeout(() => {
                checkIfExists(field, value, id);
            }, 250); // Delay of 500ms
        }
    });

//  AJAX form submission
    \$(\"#user-form\").submit(function(e) {
        e.preventDefault();                             // Prevent the default form submission

        if (\$(\"#user-form\").valid()) {
            var formData = \$(this).serialize();         // Serialize form data

            \$.ajax({
                url: \$(this).attr(\"action\"),            // PHP file to handle the submission
                type: 'POST',
                data: formData,
                dataType: \"json\",
                success: function(response) {
                    if (response.success) {        
                        // Encode the new ID
                        let added = encodeURIComponent(response.added);
        
                        // Redirect to users page with newId in the query string
                        window.location.href = '/admin/users?added=' + added + '#id-' + added;
                        document.getElementById('id-' + response.added)?.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    } else {
                        // Display PHP validation errors
                        \$(\".invalid-feedback\").remove();                    // Clear previous errors
                        \$.each(response.errors, function(field, message) {
                            let input = \$(\"[name='\" + field + \"']\");
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
        return "admin/user.twig";
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
        return array (  565 => 270,  563 => 269,  556 => 268,  529 => 244,  523 => 243,  518 => 240,  509 => 237,  504 => 236,  500 => 235,  492 => 232,  481 => 223,  475 => 222,  470 => 219,  461 => 216,  456 => 215,  452 => 214,  444 => 211,  433 => 202,  427 => 201,  422 => 198,  413 => 195,  408 => 194,  404 => 193,  396 => 190,  385 => 181,  379 => 180,  371 => 177,  353 => 166,  345 => 163,  333 => 153,  327 => 152,  319 => 149,  315 => 148,  283 => 118,  277 => 117,  269 => 114,  257 => 104,  251 => 103,  243 => 100,  231 => 90,  225 => 89,  217 => 86,  205 => 76,  199 => 75,  191 => 72,  179 => 62,  173 => 61,  165 => 58,  153 => 48,  147 => 47,  139 => 44,  125 => 33,  121 => 32,  116 => 29,  110 => 25,  105 => 22,  96 => 20,  92 => 19,  88 => 17,  86 => 16,  74 => 6,  71 => 5,  64 => 4,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.twig' %}
{% block title %} Registrazione utenti {% endblock %}

{% block content %}
    {% include 'admin/users-navigation.twig' %}

    <section class=\"col-9 mx-auto register-form\">
        <div class=\"card\">
            <div class=\"card-header row mx-auto pt-3\">
                <h2 class=\"form-title mx-auto my-3\"> 
                    <i class=\"bi bi-people\"></i> 
                        REGISTRAZIONE
                    <i class=\"bi bi-people\"></i> 
                </h2>

                {% if errors is defined and errors|length > 0 %}
                <div class=\"alert alert-danger\">
                    <ul>
                        {% for field, error in errors %}
                            <li>{{ error }}</li>
                        {% endfor %}
                    </ul>
                </div>
                {% else %}
                <h4 class=\"form-subtitle mx-auto my-2\"> 
                    Inserire i dati richiesti per creare il nuovo <b style=\"color: #6d1741\">utente</b>.
                </h4>
                {% endif %}
            </div>

            
            <form id=\"user-form\" name=\"user-form\" action=\"{{ doc_root }}user\" method=\"POST\" autocomplete=\"off\" novalidate>
                <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\">

                <!--    Fieldset 1    -->
                <fieldset class=\"mx-auto my-3 active\">
                    <div class=\"card-body\">
                        <!-- Email -->
                        <div class=\"row form-group mb-3\">        
                            <label for=\"email\" class=\"col-5 form-control-label\"> E-mail: </label>
                                
                            <div class=\"col-6\">
                                <input name=\"email\" type=\"text\" id=\"email\"
                                    class=\"form-control {% if errors.email %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.email %}<div class=\"invalid-feedback\">{{ errors.email }}</div>{% endif %}
                                </div>
                            </div>
                        </div>

                        <!-- Username -->
                        <div class=\"row form-group mb-3\">
                            <label for=\"username\" class=\"col-5 form-control-label\"> Username: </label>
                                
                            <div class=\"col-6\">
                                <input name=\"username\" type=\"text\" id=\"username\" autocomplete=\"off\"
                                    class=\"form-control {% if errors.username %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.username %}<div class=\"invalid-feedback\">{{ errors.username }}</div>{% endif %}
                                </div>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class=\"row form-group mb-3\">        
                            <label for=\"newPassword\" class=\"col-5 form-control-label\"> Password: </label>
                                            
                            <div class=\"col-6\">
                                <input name=\"password\" type=\"password\" id=\"newPassword\" autocomplete=\"new-password\" 
                                    class=\"form-control {% if errors.password %}is-invalid{% endif %}\"/>              

                                <div class=\"error-placeholder\">
                                    {% if errors.password %}<div class=\"invalid-feedback\">{{ errors.password }}</div>{% endif %}
                                </div>                  
                            </div>
                        </div>   
                                
                        <!-- Confirm password -->
                        <div class=\"row form-group mb-3\">
                            <label for=\"confirm\" class=\"col-5 form-control-label\"> Conferma pass.: </label>
                                        
                            <div class=\"col-6\">
                                <input name=\"confirm\" type=\"password\" id=\"confirm\" autocomplete=\"new-password\"
                                    class=\"form-control {% if errors.confirm %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.confirm %}<div class=\"invalid-feedback\">{{ errors.confirm }}</div>{% endif %}
                                </div>
                            </div>
                        </div>

                        <!-- Name -->
                        <div class=\"row form-group mb-3\">
                            <label for=\"name\" class=\"col-5 form-control-label\"> Nome: </label>

                            <div class=\"col-6\">
                                <input name=\"name\" type=\"text\" id=\"name\"
                                    class=\"form-control {% if errors.name %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.name %}<div class=\"invalid-feedback\">{{ errors.name }}</div>{% endif %}
                                </div>
                            </div>
                        </div>

                        <!-- Surname -->
                        <div class=\"row form-group mb-3\">
                            <label for=\"surname\" class=\"col-5 form-control-label\"> Cognome: </label>
                                
                            <div class=\"col-6\">
                                <input name=\"surname\" type=\"text\" id=\"surname\"
                                    class=\"form-control {% if errors.name %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.name %}<div class=\"invalid-feedback\">{{ errors.name }}</div>{% endif %}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"card-footer mx-auto\">      
                        <button type=\"button\" class=\"my-2 action-button back\" onclick=\"history.back();\">
                            <span class=\"m-auto\">
                                <i class=\"bi bi-chevron-double-left\"></i> INDIETRO
                            </span>
                        </button>
                        
                        <button type=\"button\" class=\"my-2 action-button next\" name=\"next\" id=\"next\">
                            <span class=\"m-auto\">
                                AVANTI <i class=\"bi bi-chevron-double-right\"></i>
                            </span>
                        </button>
                    </div>
                </fieldset>
                <!--    End Fieldset 1    -->

                <!--    Fieldset 2    -->
                <fieldset class=\"mx-auto my-3\">
                    <div class=\"card-body\">    
   
                        <!-- Birthday -->
                        <div class=\"row form-group mb-3\">
                            <label for=\"bday\" class=\"col-5 form-control-label\"> Data di nascita: </label>
                                
                            <div class=\"col-6\">
                                <input name=\"bday\" type=\"text\" id=\"bday\" value=\"{{ member.birthday|date('d-m-Y') }}\"
                                    class=\"form-control datepicker {% if errors.bday %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.bday %}<div class=\"invalid-feedback\">{{ errors.bday }}</div>{% endif %}
                                </div>
                            </div>
                        </div>
        
                        <!-- City -->
                        <div class=\"row form-group mb-3\"> 
                            <label for=\"city\" class=\"col-5 form-control-label\"> Luogo di nascita: </label>
                                
                            <div class=\"col-6\">
                                <input name=\"city\" type=\"text\" id=\"city\"
                                    class=\"form-control {% if errors.name %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.name %}<div class=\"invalid-feedback\">{{ errors.name }}</div>{% endif %}                                    
                                </div>
                            </div>
                        </div>
        
                        <!-- Country -->
                        <div class=\"row form-group mb-3\"> 
                            <label for=\"country\" class=\"col-5 form-control-label\"> </label>
                                
                            <div class=\"col-6\">
                                <input name=\"country\" type=\"text\" id=\"country\"
                                    class=\"form-control {% if errors.name %}is-invalid{% endif %}\" />

                                <div class=\"error-placeholder\">
                                    {% if errors.name %}<div class=\"invalid-feedback\">{{ errors.name }}</div>{% endif %}
                                </div>
                            </div>
                        </div>

                        <!-- Gender -->
                        <div class=\"row form-group mb-3\">
                            <label for=\"id_gender\" class=\"col-5 form-control-label\"> Genere: </label>
        
                            <div class=\"col-6\">
                                <select name=\"id_gender\" id=\"id_gender\" class=\"form-control {% if errors.gender %}is-invalid{% endif %}\"> 
                                    <option class=\"opt-type\" value=\"\" style=\"color: lightgray;\"> Scegliere un'opzione </option>

                                    {% for g in gender %}
                                        <option class=\"opt-type\" value=\"{{ g.id_gender }}\" style=\"color: #023365;\"> 
                                            {{ g.name|capitalize }} 
                                        </option>
                                    {% endfor %}
                                </select>

                                <div class=\"error-placeholder\">
                                    {% if errors.gender %}<div class=\"invalid-feedback\">{{ errors.gender }}</div>{% endif %}
                                </div>
                            </div>        
                        </div> 
        
                        <!-- Role -->
                        <div class=\"row form-group mb-3\">
                            <label for=\"id_role\" class=\"col-5 form-control-label\"> Accesso: </label>
        
                            <div class=\"col-6\">
                                <select name=\"id_role\" id=\"id_role\" class=\"form-control {% if errors.role %}is-invalid{% endif %}\">  
                                    <option class=\"opt-type\" value=\"\" style=\"color: lightgray;\"> Scegliere un'opzione </option>
                                        
                                    {% for r in roles %}
                                        <option class=\"opt-type\" value=\"{{ r.id_role }}\"> 
                                            {{ r.name|capitalize }} 
                                        </option>
                                    {% endfor %}
                                </select>

                                <div class=\"error-placeholder\">
                                    {% if errors.role %}<div class=\"invalid-feedback\">{{ errors.role }}</div>{% endif %}
                                </div>
                            </div>   
                        </div> 
        
                        <!-- Title -->
                        <div class=\"row form-group mb-3\">
                            <label for=\"id_title\" class=\"col-5 form-control-label\"> Ruolo aziendale: </label>
        
                            <div class=\"col-6\">
                                <select name=\"id_title\" id=\"id_title\" class=\"form-control {% if errors.title %}is-invalid{% endif %}\"> 
                                    <option class=\"opt-type\" value=\"\" style=\"color: lightgray;\"> Scegliere un'opzione </option>

                                    {% for t in titles %}
                                        <option class=\"opt-type\" value=\"{{ t.id_title }}\"> 
                                            {{ t.name|capitalize }} 
                                        </option>
                                    {% endfor %}
                                </select>

                                <div class=\"error-placeholder\">
                                    {% if errors.title %}<div class=\"invalid-feedback\">{{ errors.title }}</div>{% endif %}
                                </div>
                            </div>      
                        </div> 
                    </div>

                    <div class=\"card-footer mx-auto\">      
                        <button type=\"button\" class=\"my-2 action-button back\">
                            <span class=\"m-auto\">
                                <i class=\"bi bi-chevron-double-left\"></i> INDIETRO
                            </span>
                        </button>
                        
                        <button type=\"submit\" class=\"my-2 action-button save\" name=\"save\">
                            <span class=\"m-auto\">
                                SALVA <i class=\"bi bi-chevron-double-right\"></i>
                            </span>
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </section>
{% endblock %}

{% block scripts %}
    {# JQuery #}
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>

<!-- Bootstrap Datepicker - CSS -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\">
<!-- Bootstrap Datepicker - JS -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
<!-- JQuery Validation -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" integrity=\"sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<!-- JQuery Validation Additional Methods -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" integrity=\"sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script>
\$(document).ready(function() {
//  Initialize Bootstrap Datepicker
    \$(\".datepicker\").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true
    }); 

    \$('.datepicker').on('changeDate', function(e) {
        \$(this).datepicker('hide');         // Hide only, do not clear
    });

//  Custom method to validate age
    \$.validator.addMethod(\"minAge\", function(value, element, min) {
        let birthDate = new Date(value);
        let today = new Date();

            if (birthDate > today) {
                return false;
            }

        let age = today.getFullYear() - birthDate.getFullYear();
        let monthDiff = today.getMonth() - birthDate.getMonth();

        // Adjust age if birthdate hasn't occurred yet this year
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        return age >= min;
    });

//  Custom validation rule to ensure the \"Scegliere un'opzione\" option is not selected
    \$.validator.addMethod(\"notPlaceholder\", function(value, element) {
        return value !== \"\" && value !== \"0\"; // Assuming \"0\" or \"\" represents the placeholder option value
    });

//  JQuery Input Validation and Errors
    \$(\"#user-form\").validate({
        rules: {
            email: { required: true, email: true},
            username: { required: true, rangelength: [4, 20], pattern: \"^(?=.*[A-Za-z])[A-Za-z0-9]+\$\" },
            password: { required: true, minlength: 8, pattern: \"^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])([A-Za-z0-9-_!?/*+]*).{8,}\$\" },
            confirm: { required: true, equalTo: \"#newPassword\" },
            name: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z ]+\$\" },
            surname: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z ]+\$\" },
            bday: { required: true, minAge: 18 },
            city: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z ]+\$\" },
            country: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z ]+\$\" },
            id_gender: { required: true, notPlaceholder: true },
            id_role: { required: true, notPlaceholder: true },
            id_title: { required: true, notPlaceholder: true }
        },
        messages: {
            email: {
                required: \"Campo obbligatorio.\",
                email: \"Inserire un'indirizzo e-mail valido.\"
            },
            username: {
                required: \"Campo obbligatorio.\",
                pattern: \"Username deve avere almeno 1 lettera. Sono permesse lettere e numeri. (4-20 caratteri)\"
            },
            password: {
                required: \"Campo obbligatorio.\",
                minlength: \"Min. caratteri: 8\",
                pattern: \"Usare almeno 1 lettera maiuscola, 1 minuscola ed 1 numero (min. 8 caratteri).\"
            },
            confirm: {
                required: \"Campo obbligatorio.\",
                equalTo: \"Le password non corrispondono.\"
            },
            name: {
                required: \"Campo obbligatorio.\",
                pattern: \"Il nome può contenere solo lettere e spazi (3-50 caratteri).\"
            }, 
            surname: {
                required: \"Campo obbligatorio.\",
                pattern: \"Il cognome può contenere solo lettere e spazi (3-50 caratteri).\"
            }, 
            bday: {
                required: \"Campo obbligatorio.\",
                minAge: \"Inserire una data valida (18+). Non sono permesse date future.\"
            },
            city: {
                required: \"Campo obbligatorio.\",
                pattern: \"La città può contenere solo lettere e spazi (3-50 caratteri).\"
            }, 
            country: {
                required: \"Campo obbligatorio.\",
                pattern: \"Lo stato può contenere solo lettere e spazi (3-50 caratteri).\"
            }, 
            id_gender: {
                required: \"Campo obbligatorio.\",
                notPlaceholder: \"Selezionare un'opzione.\"
            },
            id_role: {
                required: \"Campo obbligatorio.\",
                notPlaceholder: \"Selezionare un'opzione.\"
            },
            id_title: {
                required: \"Campo obbligatorio.\",
                notPlaceholder: \"Selezionare un'opzione.\"
            } 
        },
        errorPlacement: function(error, element) {
            error.addClass(\"text-danger small\");
            element.addClass(\"is-invalid\");                                             // Bootstrap error class
            element.closest(\".form-group\").find(\".error-placeholder\").html(error);      // Insert error inside the reserved space
        },
        success: function(label, element) {
            \$(element).removeClass(\"is-invalid\").addClass(\"is-valid\");
            \$(element).closest(\".form-group\").find(\".error-placeholder\").html(\"\");
        }
    });

//  Handle Next Button
    \$(\"#next\").on('click', function() {
        let currentStep = \$(this).closest(\"fieldset\");

        if (\$(\"#user-form\").valid()) {
            currentStep.removeClass(\"active\").next().addClass(\"active\");

            \$(\"fieldset\").hide();
            \$(\"fieldset.active\").show();
        } 
    });

//  Handle Back Button
    \$(\".back\").on('click', function() {
        let currentStep = \$(this).closest(\"fieldset\");

        currentStep.removeClass(\"active\").prev().addClass(\"active\");

        \$(\"fieldset\").hide();
        \$(\"fieldset.active\").show();
    });

//  Function to Check if User Exists by Email or Username
    function checkIfExists(field, value, id = null) {
        \$.ajax({
            url: \"/admin/check-if-exists\",
            type: \"POST\",
            data: { 
                [field]: value, 
                id_user: id 
            },
            dataType: \"json\",
            success: function (response) {
                let inputField = \$(\"#\" + field);
                let errorPlaceholder = inputField.closest(\".form-group\").find(\".error-placeholder\");

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

//  Trigger Validation When User Types on Email and Username Input Fields
    let debounceTimer;

    \$(\"#email, #username\").on(\"input\", function () {
        clearTimeout(debounceTimer);
        let field = \$(this).attr(\"id\");
        let value = \$(this).val();
        const id = \$(\"#id_user\").val();

        if (value.length >= 7) {
            debounceTimer = setTimeout(() => {
                checkIfExists(field, value, id);
            }, 250); // Delay of 500ms
        }
    });

//  AJAX form submission
    \$(\"#user-form\").submit(function(e) {
        e.preventDefault();                             // Prevent the default form submission

        if (\$(\"#user-form\").valid()) {
            var formData = \$(this).serialize();         // Serialize form data

            \$.ajax({
                url: \$(this).attr(\"action\"),            // PHP file to handle the submission
                type: 'POST',
                data: formData,
                dataType: \"json\",
                success: function(response) {
                    if (response.success) {        
                        // Encode the new ID
                        let added = encodeURIComponent(response.added);
        
                        // Redirect to users page with newId in the query string
                        window.location.href = '/admin/users?added=' + added + '#id-' + added;
                        document.getElementById('id-' + response.added)?.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    } else {
                        // Display PHP validation errors
                        \$(\".invalid-feedback\").remove();                    // Clear previous errors
                        \$.each(response.errors, function(field, message) {
                            let input = \$(\"[name='\" + field + \"']\");
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
{% endblock %}", "admin/user.twig", "C:\\wamp64\\www\\liquimet\\templates\\admin\\user.twig");
    }
}
