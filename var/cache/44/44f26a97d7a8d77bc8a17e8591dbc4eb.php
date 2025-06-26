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

/* profile-password.twig */
class __TwigTemplate_bb32ed9787fc984a34cfd56ec94be84f extends Template
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
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "    <div class=\"container profile\">   
        <div class=\"row align-items-center\">
            <div class=\"card-header m-auto\">
                <h2 class=\"form-title text-center mx-auto my-3\"> 
                    <i class=\"bi bi-person-fill-lock me-2 d-none d-md-inline\"></i>
                        <span class=\"d-inline profile-title-text\">CAMBIA PASSWORD</span>
                    <i class=\"bi bi-lock-fill ms-2 d-none d-md-inline\"></i>
                </h2>
            </div>     

            <h4 class=\"form-subtitle mx-auto my-3\"> 
                <i class=\"bi bi-1-circle\"></i> Inserire la <b style=\"color: #6d1741\">vecchia</b> password. <br>
                <i class=\"bi bi-2-circle\"></i> Inserire la <b style=\"color: #6d1741\">nuova</b> password. <br>
                <i class=\"bi bi-3-circle \"></i> <b style=\"color: #6d1741\">Ripetere</b> la nuova password per confermare il cambio.
            </h4>

            <form id=\"password-change\" action=\"profile-password\" method=\"POST\" novalidate>
                <input type=\"hidden\" name=\"id_user\" id=\"id_user\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 18), "html", null, true);
        yield "\" />
                <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\" />

                <div class=\"card-body row\">
                    <div class=\"row form-group mb-2\">
                        <label for=\"pass\" class=\"col-5 form-control-label my-1\"> Password: </label>

                        <div class=\"col-6\">
                            <input name=\"pass\" type=\"password\" id=\"pass\" 
                                class=\"form-control ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pass", [], "any", false, false, false, 27)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pass", [], "any", false, false, false, 30)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "pass", [], "any", false, false, false, 30), "html", null, true);
            yield "</div>";
        }
        // line 31
        yield "                            </div>
                        </div>
                    </div>

                    <div class=\"row form-group mb-2\">
                        <label for=\"newPass\" class=\"col-5 form-control-label my-1\"> Nuova password: </label>

                        <div class=\"col-6\">
                            <input name=\"newPass\" type=\"password\" id=\"newPass\" 
                                class=\"form-control ";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "newPass", [], "any", false, false, false, 40)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "newPass", [], "any", false, false, false, 43)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "newPass", [], "any", false, false, false, 43), "html", null, true);
            yield "</div>";
        }
        // line 44
        yield "                            </div>
                        </div>
                    </div>

                    <div class=\"row form-group mb-2\">
                        <label for=\"confirm\" class=\"col-5 form-control-label my-1\"> Conferma password: </label>

                        <div class=\"col-6\">
                            <input name=\"confirm\" type=\"password\" id=\"confirm\" 
                                class=\"form-control ";
        // line 53
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "confirm", [], "any", false, false, false, 53)) {
            yield "is-invalid";
        }
        yield "\" />

                            <div class=\"error-placeholder\">
                                ";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "confirm", [], "any", false, false, false, 56)) {
            yield "<div class=\"invalid-feedback\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "confirm", [], "any", false, false, false, 56), "html", null, true);
            yield "</div>";
        }
        // line 57
        yield "                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card-footer mx-auto\">      
                    <button type=\"submit\" class=\"my-3 action-button save\" name=\"update_password\">
                        <span class=\"m-auto\">
                            SALVA <i class=\"bi bi-check-circle\"></i>
                        </span>
                    </button>
                </div> 
            </form>
        </div>
    </div>

";
        // line 73
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "    
    ";
        // line 75
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 80
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
    ";
        // line 86
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
    ";
        // line 92
        yield "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" 
        integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" 
        crossorigin=\"anonymous\">
</script> 
<script>
\$(document).ready(function(){
    \$(\"#password-change\").validate({
        onfocusout: function(element) {
            \$(element).valid();     // validate the field when it loses focus
        },
        rules: {
            pass: { required: true },
            newPass: { required: true, minlength: 8, pattern: /^(?=.*[a-z])(?=.*[A-Z])(?=.*[\\d\\W]).{8,}\$/ },//\"^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])([A-Za-z0-9-_!?/*+]*).{8,}\$\" },
            confirm: { required: true, equalTo: \"#newPass\" }
        },
        messages: {
            pass: \"Campo obbligatorio.\",
            newPass: {
                required: \"Campo obbligatorio.\",
                minlength: \"Password deve contenere almeno 8 caratteri.\",
                pattern: \"Password deve contenere min. 1 maiuscola, 1 minuscola e 1 numero o carattere speciale.\"
            },
            confirm: {
                required: \"Campo obbligatorio.\",
                equalTo: \"La nuova password e la conferma non coincidono.\"
            } 
        },
        errorPlacement: function (error, element) {
            error.addClass(\"text-danger small\");
            element.addClass(\"is-invalid\");                                             // Bootstrap error class
            element.closest(\".form-group\").find(\".error-placeholder\").html(error);      // Insert error inside the reserved space
        },
        highlight: function (element) {
            \$(element).addClass('is-invalid');
            \$(element).removeClass('is-valid');
        },
        unhighlight: function (element) {
            \$(element).removeClass('is-invalid');
            \$(element).addClass('is-valid');
            \$(element).closest('.form-group').find('.error-placeholder').html('');
        },
        submitHandler: function(form) {
            const \$form = \$(form);

            \$.ajax({
                url: 'profile-password',
                type: 'POST',
                data: \$form.serialize(),
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        // Switch to overview tab
                        const overviewTab = new bootstrap.Tab(\$('#p-overview')[0]);
                        overviewTab.show();
                    } else if (response.errors) {
                        \$.each(response.errors, function (field, message) {
                            const input = \$('[name=\"' + field + '\"]');
                            input.addClass('is-invalid');
                            input.next('.error-placeholder').html('<div class=\"invalid-feedback\">' + message + '</div>');
                        });
                    }
                },
                error: function () {
                    alert('Si è verificato un errore.');
                }
            });

            return false;
        }
    });   
    
//  Additional validation for the current password (using AJAX)
    \$(\"#pass\").on('focusout', function() {
        const pass = \$(this).val(); // Get entered current password
        const csrfToken = \$('input[name=\"csrf_token\"]').val();

        \$.ajax({
            url: 'check-password',  // Endpoint to verify the current password
            type: 'POST',
            data: { password: pass, csrf_token: csrfToken },
            dataType: 'json',
            success: function(response) {
                if (!response.success) {
                    \$('#pass').addClass('is-invalid'); // Invalid password
                    \$('.error-placeholder').html('<div class=\"invalid-feedback\">' + response.message + '</div>');
                } else {
                    \$('#pass').removeClass('is-invalid').addClass('is-valid'); // Valid current password
                }
            },
            error: function() {
                alert('An error occurred while verifying the current password.');
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
        return "profile-password.twig";
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
        return array (  192 => 92,  185 => 86,  178 => 80,  172 => 75,  159 => 73,  141 => 57,  135 => 56,  127 => 53,  116 => 44,  110 => 43,  102 => 40,  91 => 31,  85 => 30,  77 => 27,  66 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    <div class=\"container profile\">   
        <div class=\"row align-items-center\">
            <div class=\"card-header m-auto\">
                <h2 class=\"form-title text-center mx-auto my-3\"> 
                    <i class=\"bi bi-person-fill-lock me-2 d-none d-md-inline\"></i>
                        <span class=\"d-inline profile-title-text\">CAMBIA PASSWORD</span>
                    <i class=\"bi bi-lock-fill ms-2 d-none d-md-inline\"></i>
                </h2>
            </div>     

            <h4 class=\"form-subtitle mx-auto my-3\"> 
                <i class=\"bi bi-1-circle\"></i> Inserire la <b style=\"color: #6d1741\">vecchia</b> password. <br>
                <i class=\"bi bi-2-circle\"></i> Inserire la <b style=\"color: #6d1741\">nuova</b> password. <br>
                <i class=\"bi bi-3-circle \"></i> <b style=\"color: #6d1741\">Ripetere</b> la nuova password per confermare il cambio.
            </h4>

            <form id=\"password-change\" action=\"profile-password\" method=\"POST\" novalidate>
                <input type=\"hidden\" name=\"id_user\" id=\"id_user\" value=\"{{ user.id_user }}\" />
                <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\" />

                <div class=\"card-body row\">
                    <div class=\"row form-group mb-2\">
                        <label for=\"pass\" class=\"col-5 form-control-label my-1\"> Password: </label>

                        <div class=\"col-6\">
                            <input name=\"pass\" type=\"password\" id=\"pass\" 
                                class=\"form-control {% if errors.pass %}is-invalid{% endif %}\" />

                            <div class=\"error-placeholder\">
                                {% if errors.pass %}<div class=\"invalid-feedback\">{{ errors.pass }}</div>{% endif %}
                            </div>
                        </div>
                    </div>

                    <div class=\"row form-group mb-2\">
                        <label for=\"newPass\" class=\"col-5 form-control-label my-1\"> Nuova password: </label>

                        <div class=\"col-6\">
                            <input name=\"newPass\" type=\"password\" id=\"newPass\" 
                                class=\"form-control {% if errors.newPass %}is-invalid{% endif %}\" />

                            <div class=\"error-placeholder\">
                                {% if errors.newPass %}<div class=\"invalid-feedback\">{{ errors.newPass }}</div>{% endif %}
                            </div>
                        </div>
                    </div>

                    <div class=\"row form-group mb-2\">
                        <label for=\"confirm\" class=\"col-5 form-control-label my-1\"> Conferma password: </label>

                        <div class=\"col-6\">
                            <input name=\"confirm\" type=\"password\" id=\"confirm\" 
                                class=\"form-control {% if errors.confirm %}is-invalid{% endif %}\" />

                            <div class=\"error-placeholder\">
                                {% if errors.confirm %}<div class=\"invalid-feedback\">{{ errors.confirm }}</div>{% endif %}
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card-footer mx-auto\">      
                    <button type=\"submit\" class=\"my-3 action-button save\" name=\"update_password\">
                        <span class=\"m-auto\">
                            SALVA <i class=\"bi bi-check-circle\"></i>
                        </span>
                    </button>
                </div> 
            </form>
        </div>
    </div>

{% block scripts %}    
    {# jQuery (must be first) #}
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    {# jQuery Validation (depends on jQuery) #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
    {# jQuery Additional Methods (depends on jQuery) #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
    {# Bootstrap JS bundle (includes modal) #}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" 
        integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" 
        crossorigin=\"anonymous\">
</script> 
<script>
\$(document).ready(function(){
    \$(\"#password-change\").validate({
        onfocusout: function(element) {
            \$(element).valid();     // validate the field when it loses focus
        },
        rules: {
            pass: { required: true },
            newPass: { required: true, minlength: 8, pattern: /^(?=.*[a-z])(?=.*[A-Z])(?=.*[\\d\\W]).{8,}\$/ },//\"^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])([A-Za-z0-9-_!?/*+]*).{8,}\$\" },
            confirm: { required: true, equalTo: \"#newPass\" }
        },
        messages: {
            pass: \"Campo obbligatorio.\",
            newPass: {
                required: \"Campo obbligatorio.\",
                minlength: \"Password deve contenere almeno 8 caratteri.\",
                pattern: \"Password deve contenere min. 1 maiuscola, 1 minuscola e 1 numero o carattere speciale.\"
            },
            confirm: {
                required: \"Campo obbligatorio.\",
                equalTo: \"La nuova password e la conferma non coincidono.\"
            } 
        },
        errorPlacement: function (error, element) {
            error.addClass(\"text-danger small\");
            element.addClass(\"is-invalid\");                                             // Bootstrap error class
            element.closest(\".form-group\").find(\".error-placeholder\").html(error);      // Insert error inside the reserved space
        },
        highlight: function (element) {
            \$(element).addClass('is-invalid');
            \$(element).removeClass('is-valid');
        },
        unhighlight: function (element) {
            \$(element).removeClass('is-invalid');
            \$(element).addClass('is-valid');
            \$(element).closest('.form-group').find('.error-placeholder').html('');
        },
        submitHandler: function(form) {
            const \$form = \$(form);

            \$.ajax({
                url: 'profile-password',
                type: 'POST',
                data: \$form.serialize(),
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        // Switch to overview tab
                        const overviewTab = new bootstrap.Tab(\$('#p-overview')[0]);
                        overviewTab.show();
                    } else if (response.errors) {
                        \$.each(response.errors, function (field, message) {
                            const input = \$('[name=\"' + field + '\"]');
                            input.addClass('is-invalid');
                            input.next('.error-placeholder').html('<div class=\"invalid-feedback\">' + message + '</div>');
                        });
                    }
                },
                error: function () {
                    alert('Si è verificato un errore.');
                }
            });

            return false;
        }
    });   
    
//  Additional validation for the current password (using AJAX)
    \$(\"#pass\").on('focusout', function() {
        const pass = \$(this).val(); // Get entered current password
        const csrfToken = \$('input[name=\"csrf_token\"]').val();

        \$.ajax({
            url: 'check-password',  // Endpoint to verify the current password
            type: 'POST',
            data: { password: pass, csrf_token: csrfToken },
            dataType: 'json',
            success: function(response) {
                if (!response.success) {
                    \$('#pass').addClass('is-invalid'); // Invalid password
                    \$('.error-placeholder').html('<div class=\"invalid-feedback\">' + response.message + '</div>');
                } else {
                    \$('#pass').removeClass('is-invalid').addClass('is-valid'); // Valid current password
                }
            },
            error: function() {
                alert('An error occurred while verifying the current password.');
            }
        });
    });
});    
</script> 
{% endblock %}", "profile-password.twig", "C:\\wamp64\\www\\liquimet\\templates\\profile-password.twig");
    }
}
