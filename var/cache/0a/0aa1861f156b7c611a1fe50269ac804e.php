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

/* admin/user-modal.twig */
class __TwigTemplate_bd0ac688c0d7094f02bb66a57c28fedd extends Template
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
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 5
        yield "
<!-- Edit User Modal -->
<div class=\"modal fade\" id=\"editUserModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editUserLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <div class=\"row mx-auto\">
                    <h2 class=\"modal-title my-1\" id=\"editUserLabel\"> 
                        <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                            MODIFICA
                        <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                    </h2>

                    <h4 class=\"modal-subtitle mx-auto my-2\"> 
                        Modifica i dati esistenti dell'utente.
                    </h4>
                </div>
            </div> 
        
            <div class=\"modal-body\">
                <form id=\"user-edit\" method=\"POST\" action=\"user-edit\" autocomplete=\"off\" novalidate>
                    <input type=\"hidden\" name=\"id_user\" id=\"id_user\" value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id_user", [], "any", false, false, false, 26), "html", null, true);
        yield "\" />
                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\" />

                    <!-- Email -->
                    <div class=\"row form-group mb-3\">        
                        <label for=\"email\" class=\"col-5 form-control-label\"> E-mail: </label>
                                
                        <div class=\"col-6\">
                            <input name=\"email\" type=\"text\" id=\"email\"
                                class=\"form-control ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 35)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 38
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 38)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 38), "html", null, true);
            yield "</div>";
        }
        // line 39
        yield "                            </div>
                        </div>
                    </div>

                    <!-- Username -->
                    <div class=\"row form-group mb-3\">
                        <label for=\"username\" class=\"col-5 form-control-label\"> Username: </label>
                                
                        <div class=\"col-6\">
                            <input name=\"username\" type=\"text\" id=\"username\"
                                class=\"form-control ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 49)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 52)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 52), "html", null, true);
            yield "</div>";
        }
        // line 53
        yield "                            </div>
                        </div>
                    </div>

                    <!-- Name -->
                    <div class=\"row form-group mb-3\">
                        <label for=\"name\" class=\"col-5 form-control-label\"> Nome: </label>

                        <div class=\"col-6\">
                            <input name=\"name\" type=\"text\" id=\"name\"
                                class=\"form-control ";
        // line 63
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 63)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 66)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 66), "html", null, true);
            yield "</div>";
        }
        // line 67
        yield "                            </div>
                        </div>
                    </div>

                    <!-- Surname -->
                    <div class=\"row form-group mb-3\">
                        <label for=\"surname\" class=\"col-5 form-control-label\"> Cognome: </label>
                                
                        <div class=\"col-6\">
                            <input name=\"surname\" type=\"text\" id=\"surname\"
                                class=\"form-control ";
        // line 77
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "surname", [], "any", false, false, false, 77)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "surname", [], "any", false, false, false, 80)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "surname", [], "any", false, false, false, 80), "html", null, true);
            yield "</div>";
        }
        // line 81
        yield "                            </div>
                        </div>
                    </div>

                    <!-- Birthday -->
                    <div class=\"row form-group mb-3\">
                        <label for=\"bday\" class=\"col-5 form-control-label\"> Data di nascita: </label>
                                
                        <div class=\"col-6\">
                            <input name=\"bday\" type=\"text\" id=\"bday\"
                                class=\"form-control datepicker ";
        // line 91
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "bday", [], "any", false, false, false, 91)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "bday", [], "any", false, false, false, 94)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "bday", [], "any", false, false, false, 94), "html", null, true);
            yield "</div>";
        }
        // line 95
        yield "                            </div>
                        </div>
                    </div>
        
                    <!-- City -->
                    <div class=\"row form-group mb-3\"> 
                        <label for=\"city\" class=\"col-5 form-control-label\"> Luogo di nascita: </label>
                                
                        <div class=\"col-6\">
                            <input name=\"city\" type=\"text\" id=\"city\"
                                class=\"form-control ";
        // line 105
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "city", [], "any", false, false, false, 105)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 108
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "city", [], "any", false, false, false, 108)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "city", [], "any", false, false, false, 108), "html", null, true);
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
        // line 119
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "country", [], "any", false, false, false, 119)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 122
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "country", [], "any", false, false, false, 122)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "country", [], "any", false, false, false, 122), "html", null, true);
            yield "</div>";
        }
        // line 123
        yield "                            </div>
                        </div>
                    </div>

                    <!-- Gender -->
                    <div class=\"row form-group mb-3\">
                        <label for=\"id_gender\" class=\"col-5 form-control-label\"> Genere: </label>
        
                        <div class=\"col-6\">
                            <select name=\"id_gender\" id=\"id_gender\" class=\"form-control ";
        // line 132
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gender", [], "any", false, false, false, 132)) {
            yield "is-invalid";
        }
        yield "\"> 
                            ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["gender"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 134
            yield "                                <option class=\"opt-type\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "id_gender", [], "any", false, false, false, 134), "html", null, true);
            yield "\" 
                                    ";
            // line 135
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["g"], "id_gender", [], "any", false, false, false, 135) == CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id_gender", [], "any", false, false, false, 135))) {
                yield " selected ";
            }
            yield ">
                                        ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["g"], "name", [], "any", false, false, false, 136)), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['g'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "                            </select>

                            <div class=\"error-placeholder\">
                                ";
        // line 142
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gender", [], "any", false, false, false, 142)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "gender", [], "any", false, false, false, 142), "html", null, true);
            yield "</div>";
        }
        // line 143
        yield "                            </div>
                        </div>        
                    </div> 
        
                    <!-- Role -->
                    <div class=\"row form-group mb-3\">
                        <label for=\"id_role\" class=\"col-5 form-control-label\"> Accesso: </label>
        
                        <div class=\"col-6\">
                            <select name=\"id_role\" id=\"id_role\" class=\"form-control ";
        // line 152
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "role", [], "any", false, false, false, 152)) {
            yield "is-invalid";
        }
        yield "\">  
                            ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["roles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 154
            yield "                                <option class=\"opt-type\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id_role", [], "any", false, false, false, 154), "html", null, true);
            yield "\" 
                                    ";
            // line 155
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id_role", [], "any", false, false, false, 155) == CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id_role", [], "any", false, false, false, 155))) {
                yield " selected ";
            }
            yield ">
                                        ";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "name", [], "any", false, false, false, 156)), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "                            </select>

                            <div class=\"error-placeholder\">
                                ";
        // line 162
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "role", [], "any", false, false, false, 162)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "role", [], "any", false, false, false, 162), "html", null, true);
            yield "</div>";
        }
        // line 163
        yield "                            </div>
                        </div>   
                    </div> 
        
                    <!-- Title -->
                    <div class=\"row form-group mb-3\">
                        <label for=\"id_title\" class=\"col-5 form-control-label\"> Ruolo aziendale: </label>
        
                        <div class=\"col-6\">
                            <select name=\"id_title\" id=\"id_title\" class=\"form-control ";
        // line 172
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", false, false, false, 172)) {
            yield "is-invalid";
        }
        yield "\"> 
                            ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["titles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 174
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_title", [], "any", false, false, false, 174), "html", null, true);
            yield "\" 
                                    ";
            // line 175
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "id_title", [], "any", false, false, false, 175) == CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "id_title", [], "any", false, false, false, 175))) {
                yield " selected ";
            }
            yield ">
                                        ";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["t"], "name", [], "any", false, false, false, 176)), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        yield "                            </select>

                            <div class=\"error-placeholder\">
                                ";
        // line 182
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", false, false, false, 182)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", false, false, false, 182), "html", null, true);
            yield "</div>";
        }
        // line 183
        yield "                            </div>
                        </div>      
                    </div> 

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default modal-cancel\" data-bs-dismiss=\"modal\">
                            <span class=\"bi bi-x-circle\">
                                CHIUDI 
                            </span>    
                        </button>
                            
                        <button type=\"submit\" class=\"btn btn-default modal-save\" name=\"update_user\">
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

<!-- Delete Modal -->
<div class=\"modal fade\" id=\"deleteUserModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteUserLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title mx-auto my-auto\" id=\"deleteUserLabel\">
                    <i class=\"bi bi-trash my-auto\"></i> 
                        RIMUOVI 
                    <i class=\"bi bi-trash my-auto\"></i>
                </h5>
            </div> 
            
            <div class=\"modal-body\">
                <form id=\"delete-user\" name=\"delete-user\" method=\"POST\">
                    <input type=\"hidden\" name=\"id_user_del\" id=\"id_user_del\" />
                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\" />

                    <div class=\"container m-auto my-2\">
                        <div class=\"col-12 mx-auto my-1 py-2 delete-msg\">
                            Rimuovere l'utente <br>
                                <span id=\"fullname\"> 
                                    
                                </span>
                            ?
                        </div>
                    </div>
                </form>
\t\t\t</div>

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default mx-auto modal-cancel exit\" data-bs-dismiss=\"modal\">
                    <span class=\"bi bi-x-circle\">
                        ANNULLA
                    </span>  
                </button>

                <button type=\"submit\" class=\"btn btn-default mx-auto modal-save btnDelete\" name=\"submit\" id=\"deleteBtn\">
                    <span class=\"bi bi-check-circle\">
                        CONFERMA
                    </span> 
                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 252
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
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
        yield "    <!-- Bootstrap Datepicker - CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\">
";
        yield from [];
    }

    // line 252
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 253
        yield "    ";
        // line 254
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 259
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha256-umbTaFxP31Fv6O1itpLS/3+v5fOAWDLOUzlmvOGaKV4=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 264
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha256-MtEA819Zls6dtLt5S5BpEMOhifPyz7gfzfgtNtY75lE=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 269
        yield "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js\" 
    integrity=\"sha256-y3ibfOyBqlgBd+GzwFYQEVOZdNJD06HeDXihongBXKs=\" 
    crossorigin=\"anonymous\">
</script>
    ";
        // line 274
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha384-duAtk5RV7s42V6Zuw+tRBFcqD8RjRKw6RFnxmxIj1lUGAQJyum/vtcUQX8lqKQjp\" 
        crossorigin=\"anonymous\"
        referrerpolicy=\"no-referrer\">
</script>

<script>
\$(document).ready(function(){
//  Check if username or email exist
    let debounce;
    \$(\"#email, #username\").on(\"blur\", function () {
        clearTimeout(debounce);
        const field = \$(this).attr(\"id\");
        const value = \$(this).val();
        const id = \$(\"#id_user\").val();

        if (value.length > 7) {
            debounce = setTimeout(function () {
                \$.post(\"/admin/check-if-exists\", {
                    field: field,
                    value: value,
                    id: id
                }, function (data) {
                    const input = \$(\"#\" + field);
                    const placeholder = input.closest(\".form-group\").find(\".error-placeholder\");

                    if (data.exists) {
                        input.removeClass(\"is-valid\").addClass(\"is-invalid\");
                        placeholder.text(data.message).addClass(\"invalid-feedback\").show();
                    } else {
                        input.removeClass(\"is-invalid\").addClass(\"is-valid\");
                        placeholder.removeClass(\"invalid-feedback\").empty();
                    }
                }, \"json\");
            }, 300);
        }
    });

//  Datepicker 
    \$(\".datepicker\").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true
    }); 

    \$('.datepicker').on('changeDate', function(e) {
        \$(this).datepicker('hide');        
    });

//  Method for validating age
    \$.validator.addMethod(\"minAge\", function(value, element, min) {
        let parts = value.split('-');
        let birthDate = new Date(parts[2], parts[1] - 1, parts[0]);
        let today = new Date();

            if (birthDate > today) {
                return false;
            }

        let age = today.getFullYear() - birthDate.getFullYear();
        let monthDiff = today.getMonth() - birthDate.getMonth();

        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        return age >= min;
    });

//  Method to set select placeholder as invalid
    \$.validator.addMethod(\"notPlaceholder\", function(value, element) {
        return value !== \"\" && value !== \"0\"; 
    });

//  JQuery validation and errors
    \$(\"#user-edit\").validate({
        rules: {
            email: { required: true, email: true},
            username: { required: true, rangelength: [4, 20], pattern: \"^(?=.*[A-Za-z])[A-Za-z0-9]+\$\" },
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
        submitHandler: function (form) {
            \$.ajax({
                url: '/admin/user-edit',
                type: 'POST',
                data: \$(form).serialize() + '&action=handleEditUser',
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        \$('#editUserModal').modal('hide');

                        const updated = response.updated;
                        const bday = response.bday;
                        const row = \$('#id-' + updated.id_user);

                        /*row.addClass('table-success');
                        \$('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => row.removeClass('table-success'), 2500);*/

                        // Update row cells manually
                        row.find('.col-username').text(updated.username);
                        row.find('.col-email').text(updated.email);
                        row.find('.col-name').text(updated.name);
                        row.find('.col-surname').text(updated.surname);
                        row.find('.col-bday').text(bday);
                        row.find('.col-city').text(updated.city + ', ' + updated.country);
                        row.find('.col-role').text(updated.role);
                        row.find('.col-title').text(updated.title);
                        row.find('.col-acronym').text(updated.acronym);

                        // Highlight and scroll
                        row.addClass('table-success');
                        \$('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => row.removeClass('table-success'), 2500);

                    } else {
                        // Display PHP validation errors
                        \$(\".invalid-feedback\").remove();                    // Clear previous errors
                        \$.each(response.errors, function(field, message) {
                            let input = \$(\"[name='\" + field + \"']\");
                            input.addClass(\"is-invalid\");
                            input.closest(\".form-group\").find(\".error-placeholder\")
                                 .html('<div class=\"invalid-feedback\">' + message + '</div>');
                        });
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

//  Delete button
    \$(document).on('click', '.btnDelete', function () {
        const id = \$(\"#id_user_del\").val();
        
        \$.ajax({
            url: '/admin/user-edit',
            type: 'POST',
            dataType: 'json',
            data: { id_user: id, action: 'handleDeleteUser' },
            success: function (response) {
                if (response.success) {
                    \$('#deleteUserModal').modal('hide'); // Hide the modal after deletion
                    \$('#id-' + id).fadeOut(300, function () {
                        \$(this).remove();
                    });
                } else {
                    alert(response.message || 'Errore nella cancellazione.');
                }
            },
            error: function () {
                alert('Errore AJAX.');
            }
        });
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
        return "admin/user-modal.twig";
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
        return array (  536 => 274,  530 => 269,  524 => 264,  518 => 259,  512 => 254,  510 => 253,  503 => 252,  496 => 2,  489 => 1,  484 => 252,  450 => 221,  410 => 183,  404 => 182,  399 => 179,  390 => 176,  384 => 175,  379 => 174,  375 => 173,  369 => 172,  358 => 163,  352 => 162,  347 => 159,  338 => 156,  332 => 155,  327 => 154,  323 => 153,  317 => 152,  306 => 143,  300 => 142,  295 => 139,  286 => 136,  280 => 135,  275 => 134,  271 => 133,  265 => 132,  254 => 123,  248 => 122,  240 => 119,  222 => 108,  214 => 105,  202 => 95,  196 => 94,  188 => 91,  176 => 81,  170 => 80,  162 => 77,  150 => 67,  144 => 66,  136 => 63,  124 => 53,  118 => 52,  110 => 49,  98 => 39,  92 => 38,  84 => 35,  73 => 27,  69 => 26,  46 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block head %}
    <!-- Bootstrap Datepicker - CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\">
{% endblock %}

<!-- Edit User Modal -->
<div class=\"modal fade\" id=\"editUserModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editUserLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <div class=\"row mx-auto\">
                    <h2 class=\"modal-title my-1\" id=\"editUserLabel\"> 
                        <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                            MODIFICA
                        <i class=\"bi bi-pencil-square my-auto mx-1\"></i>
                    </h2>

                    <h4 class=\"modal-subtitle mx-auto my-2\"> 
                        Modifica i dati esistenti dell'utente.
                    </h4>
                </div>
            </div> 
        
            <div class=\"modal-body\">
                <form id=\"user-edit\" method=\"POST\" action=\"user-edit\" autocomplete=\"off\" novalidate>
                    <input type=\"hidden\" name=\"id_user\" id=\"id_user\" value=\"{{ member.id_user }}\" />
                    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\" />

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
                            <input name=\"username\" type=\"text\" id=\"username\"
                                class=\"form-control {% if errors.username %}is-invalid{% endif %}\" />

                            <div class=\"error-placeholder\">
                                {% if errors.username %}<div class=\"invalid-feedback\">{{ errors.username }}</div>{% endif %}
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
                                class=\"form-control {% if errors.surname %}is-invalid{% endif %}\" />

                            <div class=\"error-placeholder\">
                                {% if errors.surname %}<div class=\"invalid-feedback\">{{ errors.surname }}</div>{% endif %}
                            </div>
                        </div>
                    </div>

                    <!-- Birthday -->
                    <div class=\"row form-group mb-3\">
                        <label for=\"bday\" class=\"col-5 form-control-label\"> Data di nascita: </label>
                                
                        <div class=\"col-6\">
                            <input name=\"bday\" type=\"text\" id=\"bday\"
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
                                class=\"form-control {% if errors.city %}is-invalid{% endif %}\" />

                            <div class=\"error-placeholder\">
                                {% if errors.city %}<div class=\"invalid-feedback\">{{ errors.city }}</div>{% endif %}                                    
                            </div>
                        </div>
                    </div>
        
                    <!-- Country -->
                    <div class=\"row form-group mb-3\"> 
                        <label for=\"country\" class=\"col-5 form-control-label\"> </label>
                                
                        <div class=\"col-6\">
                            <input name=\"country\" type=\"text\" id=\"country\"
                                class=\"form-control {% if errors.country %}is-invalid{% endif %}\" />

                            <div class=\"error-placeholder\">
                                {% if errors.country %}<div class=\"invalid-feedback\">{{ errors.country }}</div>{% endif %}
                            </div>
                        </div>
                    </div>

                    <!-- Gender -->
                    <div class=\"row form-group mb-3\">
                        <label for=\"id_gender\" class=\"col-5 form-control-label\"> Genere: </label>
        
                        <div class=\"col-6\">
                            <select name=\"id_gender\" id=\"id_gender\" class=\"form-control {% if errors.gender %}is-invalid{% endif %}\"> 
                            {% for g in gender %}
                                <option class=\"opt-type\" value=\"{{ g.id_gender }}\" 
                                    {% if g.id_gender == member.id_gender %} selected {% endif %}>
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
                            {% for r in roles %}
                                <option class=\"opt-type\" value=\"{{ r.id_role }}\" 
                                    {% if r.id_role == member.id_role %} selected {% endif %}>
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
                            {% for t in titles %}
                                <option value=\"{{ t.id_title }}\" 
                                    {% if t.id_title == member.id_title %} selected {% endif %}>
                                        {{ t.name|capitalize }}
                                </option>
                            {% endfor %}
                            </select>

                            <div class=\"error-placeholder\">
                                {% if errors.title %}<div class=\"invalid-feedback\">{{ errors.title }}</div>{% endif %}
                            </div>
                        </div>      
                    </div> 

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default modal-cancel\" data-bs-dismiss=\"modal\">
                            <span class=\"bi bi-x-circle\">
                                CHIUDI 
                            </span>    
                        </button>
                            
                        <button type=\"submit\" class=\"btn btn-default modal-save\" name=\"update_user\">
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

<!-- Delete Modal -->
<div class=\"modal fade\" id=\"deleteUserModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteUserLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title mx-auto my-auto\" id=\"deleteUserLabel\">
                    <i class=\"bi bi-trash my-auto\"></i> 
                        RIMUOVI 
                    <i class=\"bi bi-trash my-auto\"></i>
                </h5>
            </div> 
            
            <div class=\"modal-body\">
                <form id=\"delete-user\" name=\"delete-user\" method=\"POST\">
                    <input type=\"hidden\" name=\"id_user_del\" id=\"id_user_del\" />
                    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\" />

                    <div class=\"container m-auto my-2\">
                        <div class=\"col-12 mx-auto my-1 py-2 delete-msg\">
                            Rimuovere l'utente <br>
                                <span id=\"fullname\"> 
                                    
                                </span>
                            ?
                        </div>
                    </div>
                </form>
\t\t\t</div>

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default mx-auto modal-cancel exit\" data-bs-dismiss=\"modal\">
                    <span class=\"bi bi-x-circle\">
                        ANNULLA
                    </span>  
                </button>

                <button type=\"submit\" class=\"btn btn-default mx-auto modal-save btnDelete\" name=\"submit\" id=\"deleteBtn\">
                    <span class=\"bi bi-check-circle\">
                        CONFERMA
                    </span> 
                </button>
            </div>
        </div>
    </div>
</div>

{% block scripts %}
    {# JQuery #}
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
    {# Bootstrap JS bundle #}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js\" 
    integrity=\"sha256-y3ibfOyBqlgBd+GzwFYQEVOZdNJD06HeDXihongBXKs=\" 
    crossorigin=\"anonymous\">
</script>
    {# Bootstrap Datepicker (depends on jQuery) #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha384-duAtk5RV7s42V6Zuw+tRBFcqD8RjRKw6RFnxmxIj1lUGAQJyum/vtcUQX8lqKQjp\" 
        crossorigin=\"anonymous\"
        referrerpolicy=\"no-referrer\">
</script>

<script>
\$(document).ready(function(){
//  Check if username or email exist
    let debounce;
    \$(\"#email, #username\").on(\"blur\", function () {
        clearTimeout(debounce);
        const field = \$(this).attr(\"id\");
        const value = \$(this).val();
        const id = \$(\"#id_user\").val();

        if (value.length > 7) {
            debounce = setTimeout(function () {
                \$.post(\"/admin/check-if-exists\", {
                    field: field,
                    value: value,
                    id: id
                }, function (data) {
                    const input = \$(\"#\" + field);
                    const placeholder = input.closest(\".form-group\").find(\".error-placeholder\");

                    if (data.exists) {
                        input.removeClass(\"is-valid\").addClass(\"is-invalid\");
                        placeholder.text(data.message).addClass(\"invalid-feedback\").show();
                    } else {
                        input.removeClass(\"is-invalid\").addClass(\"is-valid\");
                        placeholder.removeClass(\"invalid-feedback\").empty();
                    }
                }, \"json\");
            }, 300);
        }
    });

//  Datepicker 
    \$(\".datepicker\").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true
    }); 

    \$('.datepicker').on('changeDate', function(e) {
        \$(this).datepicker('hide');        
    });

//  Method for validating age
    \$.validator.addMethod(\"minAge\", function(value, element, min) {
        let parts = value.split('-');
        let birthDate = new Date(parts[2], parts[1] - 1, parts[0]);
        let today = new Date();

            if (birthDate > today) {
                return false;
            }

        let age = today.getFullYear() - birthDate.getFullYear();
        let monthDiff = today.getMonth() - birthDate.getMonth();

        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        return age >= min;
    });

//  Method to set select placeholder as invalid
    \$.validator.addMethod(\"notPlaceholder\", function(value, element) {
        return value !== \"\" && value !== \"0\"; 
    });

//  JQuery validation and errors
    \$(\"#user-edit\").validate({
        rules: {
            email: { required: true, email: true},
            username: { required: true, rangelength: [4, 20], pattern: \"^(?=.*[A-Za-z])[A-Za-z0-9]+\$\" },
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
        submitHandler: function (form) {
            \$.ajax({
                url: '/admin/user-edit',
                type: 'POST',
                data: \$(form).serialize() + '&action=handleEditUser',
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        \$('#editUserModal').modal('hide');

                        const updated = response.updated;
                        const bday = response.bday;
                        const row = \$('#id-' + updated.id_user);

                        /*row.addClass('table-success');
                        \$('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => row.removeClass('table-success'), 2500);*/

                        // Update row cells manually
                        row.find('.col-username').text(updated.username);
                        row.find('.col-email').text(updated.email);
                        row.find('.col-name').text(updated.name);
                        row.find('.col-surname').text(updated.surname);
                        row.find('.col-bday').text(bday);
                        row.find('.col-city').text(updated.city + ', ' + updated.country);
                        row.find('.col-role').text(updated.role);
                        row.find('.col-title').text(updated.title);
                        row.find('.col-acronym').text(updated.acronym);

                        // Highlight and scroll
                        row.addClass('table-success');
                        \$('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => row.removeClass('table-success'), 2500);

                    } else {
                        // Display PHP validation errors
                        \$(\".invalid-feedback\").remove();                    // Clear previous errors
                        \$.each(response.errors, function(field, message) {
                            let input = \$(\"[name='\" + field + \"']\");
                            input.addClass(\"is-invalid\");
                            input.closest(\".form-group\").find(\".error-placeholder\")
                                 .html('<div class=\"invalid-feedback\">' + message + '</div>');
                        });
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

//  Delete button
    \$(document).on('click', '.btnDelete', function () {
        const id = \$(\"#id_user_del\").val();
        
        \$.ajax({
            url: '/admin/user-edit',
            type: 'POST',
            dataType: 'json',
            data: { id_user: id, action: 'handleDeleteUser' },
            success: function (response) {
                if (response.success) {
                    \$('#deleteUserModal').modal('hide'); // Hide the modal after deletion
                    \$('#id-' + id).fadeOut(300, function () {
                        \$(this).remove();
                    });
                } else {
                    alert(response.message || 'Errore nella cancellazione.');
                }
            },
            error: function () {
                alert('Errore AJAX.');
            }
        });
    });
});
</script>
{% endblock %}", "admin/user-modal.twig", "C:\\wamp64\\www\\liquimet\\templates\\admin\\user-modal.twig");
    }
}
