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

/* password-reset.twig */
class __TwigTemplate_bb8986b47b447aaebfa2b92a8a8a9373 extends Template
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
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("layout.twig", "password-reset.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Login ";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<body id=\"login\" class=\"d-flex justify-content-center align-items-center\">
    <div class=\"container d-flex justify-content-center h-100\">
        <div class=\"container col-4 my-auto user-card\">
            
            <div class=\"container d-flex justify-content-center\">
                <div class=\"d-flex justify-content-center logo-box\">
                    <img src=\"/img/logo_liquimet.png\" class=\"brand-logo\" alt=\"Liquimet Logo\">
                </div>
            </div>
            
            <div class=\"container form-box pb-5\">
                <form id=\"reset-password-form\" method=\"POST\" action=\"password-reset\" class=\"col-9 justify-content-center mx-auto my-auto\" novalidate
                    autocomplete=\"off\">
                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
        yield "\">


                    <div class=\"input-group mx-auto my-2 input-login\">
                        <label for=\"newPass\" class=\"input-group-text\">
                            <i class=\"bi bi-lock-fill\"></i>
                        </label>
                        
                        <input type=\"password\" id=\"newPass\" name=\"newPass\" placeholder=\"nuova password\" autocomplete=\"off\"
                            class=\"form-control ";
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "newPass", [], "any", false, false, false, 28)) {
            yield "is-invalid";
        }
        yield "\" />   
                    </div>

                    <div class=\"error-placeholder small ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "newPass", [], "any", false, false, false, 31)) {
            yield "alert alert-danger";
        }
        yield "\">
                        ";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "newPass", [], "any", false, false, false, 32)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "newPass", [], "any", false, false, false, 32), "html", null, true);
        }
        // line 33
        yield "                    </div>

                    <div class=\"input-group mx-auto my-2 input-login\">
                        <label for=\"confirmPass\" class=\"input-group-text\">
                            <i class=\"bi bi-lock-fill\"></i>
                        </label>
                        
                        <input type=\"password\" id=\"confirmPass\" name=\"confirmPass\" placeholder=\"conferma password\" autocomplete=\"off\"
                            class=\"form-control ";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "confirmPass", [], "any", false, false, false, 41)) {
            yield "is-invalid";
        }
        yield "\" /> 
                    </div>

                    <div class=\"error-placeholder small ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "confirmPass", [], "any", false, false, false, 44)) {
            yield "alert alert-danger";
        }
        yield "\">
                        ";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "confirmPass", [], "any", false, false, false, 45)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "confirmPass", [], "any", false, false, false, 45), "html", null, true);
        }
        // line 46
        yield "                    </div>

                    ";
        // line 49
        yield "                    <div class=\"my-3\" style=\"min-height: 2rem;\">
                        ";
        // line 50
        if (($context["success"] ?? null)) {
            // line 51
            yield "                            <div id=\"errorBox\" class=\"alert alert-success py-2 px-3\">
                                <span class=\"mb-0\">
                                    ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["success"] ?? null), "html", null, true);
            yield "
                                </span>
                            </div>
                        ";
        } else {
            // line 57
            yield "                            <div id=\"errorBox\" class=\"alert alert-danger d-none py-2 px-3\">
                                <span class=\"mb-0\"></span>
                            </div>
                        ";
        }
        // line 61
        yield "                    </div>

                    <div class=\"col-8 mx-auto my-4 btn-box\">
                        <button type=\"submit\" name=\"confirm\" class=\"btn login-btn\" id=\"confirm-btn\" value=\"Conferma\">
                            CONFERMA
                        </button>
                    </div>

                    <div class=\"mt-4\">
                        <div class=\"d-flex justify-content-center links\">
                            <a href=\"login\" id=\"back-to-login\">
                                &#60;&#60; Torna alla pagina di login &#62;&#62;
                            </a>
                        </div>
                    </div>
                </form>
            </div>\t
        </div>
    </div>
</body>
";
        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 84
        yield "    ";
        // line 85
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 90
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
    ";
        // line 96
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
<script>
\$(document).ready(function() {
    \$(\"#reset-password-form\").validate({
        onfocusout: function(element) {
            \$(element).valid();     
        },
        rules: {
            newPass: {
                required: true,
                minlength: 8,
                pattern: \"^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9!@#\$%^&*(),.?\\\":{}|<>]).{8,}\$\"
            },
            confirmPass: {
                required: true,
                equalTo: \"#newPass\"
            }
        },
        messages: {
            newPass: {
                required: \"Campo obbligatorio\",
                minlength: \"La password deve contenere almeno 8 caratteri\",
                pattern: \"Usare almeno 1 lettera maiuscola, 1 minuscola e 1 numero o carattere speciale\"
            },
            confirmPass: {
                required: \"Campo obbligatorio\",
                equalTo: \"La nuova password e la conferma non coincidono\"
            }
        },
        errorPlacement: function (error, element) {
            element.addClass(\"is-invalid\");                                             // Bootstrap error class
            element.closest(\".input-group\").find('.error-placeholder').html(error);      // Insert error inside the reserved space
        },
        highlight: function (element) {
            \$(element).addClass('is-invalid');
            \$(element).removeClass('is-valid');
        },
        unhighlight: function (element) {
            \$(element).removeClass('is-invalid');
            \$(element).addClass('is-valid');
            \$(element).closest('.input-group').find('.error-placeholder').html('');
        },
        submitHandler: function(form) {
            // Prevent the form from submitting the traditional way
            event.preventDefault();

            // Send the form data via AJAX
            \$.ajax({
                url: form.action, // URL from form action (password-reset)
                method: 'POST',
                data: \$(form).serialize(), // Serialize form data
                dataType: 'json',
                success: function(response) {
                    // Handle server response
                    if (response.success) {
                        const success = \$('.errorBox');
                        success.find('span').html(success);
                    } else if (response.errors) {
                        // If errors, show errors
                        \$.each(response.errors, function (field, message) {
                            const input = \$('[name=\"' + field + '\"]');
                            input.addClass('is-invalid');
                            input.next('.error-placeholder').html('<div class=\"invalid-feedback\">' + message + '</div>');
                        });
                    }
                },
                error: function() {
                    alert(\"Si è verificato un errore. Riprovare.\");
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
        return "password-reset.twig";
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
        return array (  221 => 96,  214 => 90,  208 => 85,  206 => 84,  199 => 83,  174 => 61,  168 => 57,  161 => 53,  157 => 51,  155 => 50,  152 => 49,  148 => 46,  144 => 45,  138 => 44,  130 => 41,  120 => 33,  116 => 32,  110 => 31,  102 => 28,  90 => 19,  86 => 18,  71 => 5,  64 => 4,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.twig' %}
{% block title %} Login {% endblock %}

{% block body %}
<body id=\"login\" class=\"d-flex justify-content-center align-items-center\">
    <div class=\"container d-flex justify-content-center h-100\">
        <div class=\"container col-4 my-auto user-card\">
            
            <div class=\"container d-flex justify-content-center\">
                <div class=\"d-flex justify-content-center logo-box\">
                    <img src=\"/img/logo_liquimet.png\" class=\"brand-logo\" alt=\"Liquimet Logo\">
                </div>
            </div>
            
            <div class=\"container form-box pb-5\">
                <form id=\"reset-password-form\" method=\"POST\" action=\"password-reset\" class=\"col-9 justify-content-center mx-auto my-auto\" novalidate
                    autocomplete=\"off\">
                    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\">
                    <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">


                    <div class=\"input-group mx-auto my-2 input-login\">
                        <label for=\"newPass\" class=\"input-group-text\">
                            <i class=\"bi bi-lock-fill\"></i>
                        </label>
                        
                        <input type=\"password\" id=\"newPass\" name=\"newPass\" placeholder=\"nuova password\" autocomplete=\"off\"
                            class=\"form-control {% if errors.newPass %}is-invalid{% endif %}\" />   
                    </div>

                    <div class=\"error-placeholder small {% if errors.newPass %}alert alert-danger{% endif %}\">
                        {% if errors.newPass %}{{ errors.newPass }}{% endif %}
                    </div>

                    <div class=\"input-group mx-auto my-2 input-login\">
                        <label for=\"confirmPass\" class=\"input-group-text\">
                            <i class=\"bi bi-lock-fill\"></i>
                        </label>
                        
                        <input type=\"password\" id=\"confirmPass\" name=\"confirmPass\" placeholder=\"conferma password\" autocomplete=\"off\"
                            class=\"form-control {% if errors.confirmPass %}is-invalid{% endif %}\" /> 
                    </div>

                    <div class=\"error-placeholder small {% if errors.confirmPass %}alert alert-danger{% endif %}\">
                        {% if errors.confirmPass %}{{ errors.confirmPass }}{% endif %}
                    </div>

                    {# Error box with fixed height to prevent layout shift #}
                    <div class=\"my-3\" style=\"min-height: 2rem;\">
                        {% if success %}
                            <div id=\"errorBox\" class=\"alert alert-success py-2 px-3\">
                                <span class=\"mb-0\">
                                    {{ success }}
                                </span>
                            </div>
                        {% else %}
                            <div id=\"errorBox\" class=\"alert alert-danger d-none py-2 px-3\">
                                <span class=\"mb-0\"></span>
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"col-8 mx-auto my-4 btn-box\">
                        <button type=\"submit\" name=\"confirm\" class=\"btn login-btn\" id=\"confirm-btn\" value=\"Conferma\">
                            CONFERMA
                        </button>
                    </div>

                    <div class=\"mt-4\">
                        <div class=\"d-flex justify-content-center links\">
                            <a href=\"login\" id=\"back-to-login\">
                                &#60;&#60; Torna alla pagina di login &#62;&#62;
                            </a>
                        </div>
                    </div>
                </form>
            </div>\t
        </div>
    </div>
</body>
{% endblock %}

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
<script>
\$(document).ready(function() {
    \$(\"#reset-password-form\").validate({
        onfocusout: function(element) {
            \$(element).valid();     
        },
        rules: {
            newPass: {
                required: true,
                minlength: 8,
                pattern: \"^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9!@#\$%^&*(),.?\\\":{}|<>]).{8,}\$\"
            },
            confirmPass: {
                required: true,
                equalTo: \"#newPass\"
            }
        },
        messages: {
            newPass: {
                required: \"Campo obbligatorio\",
                minlength: \"La password deve contenere almeno 8 caratteri\",
                pattern: \"Usare almeno 1 lettera maiuscola, 1 minuscola e 1 numero o carattere speciale\"
            },
            confirmPass: {
                required: \"Campo obbligatorio\",
                equalTo: \"La nuova password e la conferma non coincidono\"
            }
        },
        errorPlacement: function (error, element) {
            element.addClass(\"is-invalid\");                                             // Bootstrap error class
            element.closest(\".input-group\").find('.error-placeholder').html(error);      // Insert error inside the reserved space
        },
        highlight: function (element) {
            \$(element).addClass('is-invalid');
            \$(element).removeClass('is-valid');
        },
        unhighlight: function (element) {
            \$(element).removeClass('is-invalid');
            \$(element).addClass('is-valid');
            \$(element).closest('.input-group').find('.error-placeholder').html('');
        },
        submitHandler: function(form) {
            // Prevent the form from submitting the traditional way
            event.preventDefault();

            // Send the form data via AJAX
            \$.ajax({
                url: form.action, // URL from form action (password-reset)
                method: 'POST',
                data: \$(form).serialize(), // Serialize form data
                dataType: 'json',
                success: function(response) {
                    // Handle server response
                    if (response.success) {
                        const success = \$('.errorBox');
                        success.find('span').html(success);
                    } else if (response.errors) {
                        // If errors, show errors
                        \$.each(response.errors, function (field, message) {
                            const input = \$('[name=\"' + field + '\"]');
                            input.addClass('is-invalid');
                            input.next('.error-placeholder').html('<div class=\"invalid-feedback\">' + message + '</div>');
                        });
                    }
                },
                error: function() {
                    alert(\"Si è verificato un errore. Riprovare.\");
                }
            });
        }
    });
});
</script>
{% endblock %}", "password-reset.twig", "C:\\wamp64\\www\\liquimet\\templates\\password-reset.twig");
    }
}
