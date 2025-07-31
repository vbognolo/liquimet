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

/* login.twig */
class __TwigTemplate_0fabd5282c969ccb5d63d033f4b7863f extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "login.twig", 1);
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
                ";
        // line 17
        yield "                <form id=\"login-form\" method=\"POST\" action=\"login\" 
                    class=\"col-9 justify-content-center mx-auto my-auto ";
        // line 18
        if ((array_key_exists("forgot_form", $context) && ($context["forgot_form"] ?? null))) {
            yield "d-none";
        }
        yield "\" novalidate >
                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\">

                    <div class=\"input-group mx-auto my-2 input-login\">
                        <label for=\"username\" class=\"input-group-text\">
                            <i class=\"bi bi-person-fill\"></i>
                        </label>
                        
                        <input type=\"text\" id=\"username\" name=\"username\" placeholder=\"username\" autocomplete=\"off\"
                            class=\"form-control\" />   
                    </div>

                    <div class=\"input-group mx-auto my-2 input-login\">
                        <label for=\"password\" class=\"input-group-text\">
                            <i class=\"bi bi-lock-fill\"></i>
                        </label>
                        
                        <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"password\" autocomplete=\"off\"
                            class=\"form-control\" /> 
                    </div>

                    ";
        // line 40
        yield "                    <div class=\"my-3\" style=\"min-height: 6rem;\">
                        ";
        // line 41
        if (((array_key_exists("errors", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["errors"] ?? null))) &&  !($context["forgot_form"] ?? null))) {
            // line 42
            yield "                            <div id=\"loginErrorBox\" class=\"alert alert-danger py-2 px-3\">
                                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 44
                yield "                                    <span class=\"my-auto\" style=\"font-size: 1.2rem\">
                                        ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "
                                    </span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "                            </div>
                        ";
        } else {
            // line 50
            yield "                            <div id=\"loginErrorBox\" class=\"alert alert-danger d-none py-2 px-3\">
                                <span class=\"mb-0\"></span>
                            </div>
                        ";
        }
        // line 54
        yield "                    </div>
                    <!--<div class=\"form-group\" id=\"login-form-group\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"remember\">
                            <label class=\"form-check-label\" for=\"remember\">Ricordami</label>
                        </div>
                    </div>-->
                    
                    <div class=\"col-8 mx-auto my-4 btn-box\">
                        <button type=\"submit\" name=\"login\" class=\"btn login-btn\" id=\"login-btn\" value=\"Accedi\">
                            ACCEDI
                        </button>
                    </div>

                    <div class=\"mt-4\">
                        <div class=\"d-flex justify-content-center links\">
                            <a href=\"?forgot_password\" id=\"lost-password\">
                                Hai dimenticato la password?
                            </a>
                        </div>
                    </div> 
                </form>
                ";
        // line 77
        yield "
                ";
        // line 79
        yield "                <form id=\"forgot-password-form\" method=\"POST\" action=\"password-lost\" 
                    class=\"col-9 justify-content-center mx-auto my-auto ";
        // line 80
        if (( !array_key_exists("forgot_form", $context) ||  !($context["forgot_form"] ?? null))) {
            yield "d-none";
        }
        yield "\" novalidate >
                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\">

                    <div class=\"input-group mx-auto my-auto input-login\">
                        <label for=\"email\" class=\"input-group-text\">
                            <i class=\"bi bi-envelope-at\"></i>
                        </label>
                        
                        <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"e-mail\" autocomplete=\"off\"
                            class=\"form-control\" />   
                    </div>

                    ";
        // line 93
        yield "                    <div class=\"my-3\" style=\"min-height: 6rem;\">
                        ";
        // line 94
        if (((array_key_exists("errors", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["errors"] ?? null))) && ($context["forgot_form"] ?? null))) {
            // line 95
            yield "                            <div id=\"forgotErrorBox\" class=\"alert alert-danger py-2 px-3\">
                                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 97
                yield "                                    <span class=\"my-auto\" style=\"font-size: 1.2rem\">
                                        ";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "
                                    </span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "                            </div>
                        ";
        } elseif (        // line 102
($context["success"] ?? null)) {
            // line 103
            yield "                            <div id=\"forgotErrorBox\" class=\"alert alert-success py-2 px-3\">
                                <span class=\"mb-0\">
                                    ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["success"] ?? null), "html", null, true);
            yield "
                                </span>
                            </div>
                        ";
        } else {
            // line 109
            yield "                            <div id=\"forgotErrorBox\" class=\"alert alert-danger d-none py-2 px-3\">
                                <span class=\"mb-0\"></span>
                            </div>
                        ";
        }
        // line 113
        yield "                    </div>
                    
                    <div class=\"col-8 mx-auto my-4 btn-box\">
                        <button type=\"submit\" name=\"send\" class=\"btn login-btn\" id=\"send-btn\" value=\"Invia\">
                            INVIA
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
                ";
        // line 130
        yield "            </div>
        </div>
    </div>
</body>
";
        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 137
        yield "    ";
        // line 138
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 143
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
<script>
\$(document).ready(function() {
    /*function resetForm() {
        \$(\"form\").each(function (){
            this.reset();
        });
        \$('#loginErrorBox, #forgotErrorBox').addClass('d-none').find('span').empty();
    }*/

    \$('#lost-password').on('click', function (e) {
        e.preventDefault();
        resetForm();
        toggleForm(true);
        /*\$('#login-form').addClass('d-none');
        \$('#forgot-password-form').removeClass('d-none');*/
    });

    /*\$('#back-to-login').on('click', function (e) {
        e.preventDefault();
        resetForm();
        toggleForms(false);
        /*\$('#forgot-password-form').addClass('d-none');
        \$('#login-form').removeClass('d-none');*/
    //});

    // If the forgot form is pre-defined (server-side), automatically switch forms
    ";
        // line 174
        if ((array_key_exists("forgot_form", $context) && ($context["forgot_form"] ?? null))) {
            // line 175
            yield "        toggleForms(true);  // Show forgot password form on initial load
    ";
        }
        // line 177
        yield "/*
    \$(\"#login-form\").validate({
        /*showErrors: function(errorMap, errorList) {
            if (errorList.lenght) {
                \$(\"#errorBox\").removeClass(\"d-none\").show();
            } else {
                \$(\"#errorBox\").addClass(\"d-none\").hide();
            }
            this.defaultShowErrors();
        },*/
  /*      rules: {
            username: { required: true },
            password: { required: true }
        },
        messages: {
            username: { \"Inserire username e password per accedere al sito.\" }
        }/*,
        onfocusout: function(element) {
            this.element(element);
        },
        errorPlacement: function(error, element) {
            error.addClass(\"text-danger small\");
            element.addClass(\"is-invalid\");                                             // Bootstrap error class
            element.closest(\".form-group\").find(\".login-error\").html(error);      // Insert error inside the reserved space
        },
        submitHandler: function(form) {
            \$.ajax({
                type: \"POST\",
                url: \"login\",
                data: \$(form).serialize(),
                dataType: \"json\",
                success: function(response) {
                    if (response.success) {

                    } else {
                        \$(\".invalid-feedback\").remove();                    
                        \$.each(response.errors, function(field, message) {
                            let input = \$(\"[name='\" + field + \"']\");
                            input.addClass(\"is-invalid\");
                            \$(\".login-error\").text(message);
                        });
                    }
                },
                error: function() {
                    \$(\".login-error\").text(\"Errore di rete. Riprova.\");
                }
            });
        }*/
    //});


});

function toggleForms(showForgotForm) {
    if (showForgotForm) {
        \$('#login-form').addClass('d-none');  // Hide login form
        \$('#forgot-password-form').removeClass('d-none');  // Show forgot password form
    } else {
        \$('#forgot-password-form').addClass('d-none');  // Hide forgot password form
        \$('#login-form').removeClass('d-none');  // Show login form
    }
}

function resetForm() {
    \$('#login-form, #forgot-password-form').each(function () {
        this.reset();
        \$(this).find('.alert').addClass('d-none').find('span').text('');
    });
}
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login.twig";
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
        return array (  327 => 177,  323 => 175,  321 => 174,  288 => 143,  282 => 138,  280 => 137,  273 => 136,  264 => 130,  246 => 113,  240 => 109,  233 => 105,  229 => 103,  227 => 102,  224 => 101,  215 => 98,  212 => 97,  208 => 96,  205 => 95,  203 => 94,  200 => 93,  186 => 81,  180 => 80,  177 => 79,  174 => 77,  150 => 54,  144 => 50,  140 => 48,  131 => 45,  128 => 44,  124 => 43,  121 => 42,  119 => 41,  116 => 40,  93 => 19,  87 => 18,  84 => 17,  71 => 5,  64 => 4,  53 => 2,  42 => 1,);
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
                {# Login Form #}
                <form id=\"login-form\" method=\"POST\" action=\"login\" 
                    class=\"col-9 justify-content-center mx-auto my-auto {% if forgot_form is defined and forgot_form %}d-none{% endif %}\" novalidate >
                    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\">

                    <div class=\"input-group mx-auto my-2 input-login\">
                        <label for=\"username\" class=\"input-group-text\">
                            <i class=\"bi bi-person-fill\"></i>
                        </label>
                        
                        <input type=\"text\" id=\"username\" name=\"username\" placeholder=\"username\" autocomplete=\"off\"
                            class=\"form-control\" />   
                    </div>

                    <div class=\"input-group mx-auto my-2 input-login\">
                        <label for=\"password\" class=\"input-group-text\">
                            <i class=\"bi bi-lock-fill\"></i>
                        </label>
                        
                        <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"password\" autocomplete=\"off\"
                            class=\"form-control\" /> 
                    </div>

                    {# Error box with fixed height to prevent layout shift #}
                    <div class=\"my-3\" style=\"min-height: 6rem;\">
                        {% if errors is defined and errors is not empty and not forgot_form %}
                            <div id=\"loginErrorBox\" class=\"alert alert-danger py-2 px-3\">
                                {% for error in errors %}
                                    <span class=\"my-auto\" style=\"font-size: 1.2rem\">
                                        {{ error }}
                                    </span>
                                {% endfor %}
                            </div>
                        {% else %}
                            <div id=\"loginErrorBox\" class=\"alert alert-danger d-none py-2 px-3\">
                                <span class=\"mb-0\"></span>
                            </div>
                        {% endif %}
                    </div>
                    <!--<div class=\"form-group\" id=\"login-form-group\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"remember\">
                            <label class=\"form-check-label\" for=\"remember\">Ricordami</label>
                        </div>
                    </div>-->
                    
                    <div class=\"col-8 mx-auto my-4 btn-box\">
                        <button type=\"submit\" name=\"login\" class=\"btn login-btn\" id=\"login-btn\" value=\"Accedi\">
                            ACCEDI
                        </button>
                    </div>

                    <div class=\"mt-4\">
                        <div class=\"d-flex justify-content-center links\">
                            <a href=\"?forgot_password\" id=\"lost-password\">
                                Hai dimenticato la password?
                            </a>
                        </div>
                    </div> 
                </form>
                {# End Login Form #}

                {# Forgot Password Form #}
                <form id=\"forgot-password-form\" method=\"POST\" action=\"password-lost\" 
                    class=\"col-9 justify-content-center mx-auto my-auto {% if forgot_form is not defined or not forgot_form %}d-none{% endif %}\" novalidate >
                    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\">

                    <div class=\"input-group mx-auto my-auto input-login\">
                        <label for=\"email\" class=\"input-group-text\">
                            <i class=\"bi bi-envelope-at\"></i>
                        </label>
                        
                        <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"e-mail\" autocomplete=\"off\"
                            class=\"form-control\" />   
                    </div>

                    {# Error box with fixed height to prevent layout shift #}
                    <div class=\"my-3\" style=\"min-height: 6rem;\">
                        {% if errors is defined and errors is not empty and forgot_form %}
                            <div id=\"forgotErrorBox\" class=\"alert alert-danger py-2 px-3\">
                                {% for error in errors %}
                                    <span class=\"my-auto\" style=\"font-size: 1.2rem\">
                                        {{ error }}
                                    </span>
                                {% endfor %}
                            </div>
                        {% elseif success %}
                            <div id=\"forgotErrorBox\" class=\"alert alert-success py-2 px-3\">
                                <span class=\"mb-0\">
                                    {{ success }}
                                </span>
                            </div>
                        {% else %}
                            <div id=\"forgotErrorBox\" class=\"alert alert-danger d-none py-2 px-3\">
                                <span class=\"mb-0\"></span>
                            </div>
                        {% endif %}
                    </div>
                    
                    <div class=\"col-8 mx-auto my-4 btn-box\">
                        <button type=\"submit\" name=\"send\" class=\"btn login-btn\" id=\"send-btn\" value=\"Invia\">
                            INVIA
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
                {# End Forgot Password Form #}
            </div>
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
<script>
\$(document).ready(function() {
    /*function resetForm() {
        \$(\"form\").each(function (){
            this.reset();
        });
        \$('#loginErrorBox, #forgotErrorBox').addClass('d-none').find('span').empty();
    }*/

    \$('#lost-password').on('click', function (e) {
        e.preventDefault();
        resetForm();
        toggleForm(true);
        /*\$('#login-form').addClass('d-none');
        \$('#forgot-password-form').removeClass('d-none');*/
    });

    /*\$('#back-to-login').on('click', function (e) {
        e.preventDefault();
        resetForm();
        toggleForms(false);
        /*\$('#forgot-password-form').addClass('d-none');
        \$('#login-form').removeClass('d-none');*/
    //});

    // If the forgot form is pre-defined (server-side), automatically switch forms
    {% if forgot_form is defined and forgot_form %}
        toggleForms(true);  // Show forgot password form on initial load
    {% endif %}
/*
    \$(\"#login-form\").validate({
        /*showErrors: function(errorMap, errorList) {
            if (errorList.lenght) {
                \$(\"#errorBox\").removeClass(\"d-none\").show();
            } else {
                \$(\"#errorBox\").addClass(\"d-none\").hide();
            }
            this.defaultShowErrors();
        },*/
  /*      rules: {
            username: { required: true },
            password: { required: true }
        },
        messages: {
            username: { \"Inserire username e password per accedere al sito.\" }
        }/*,
        onfocusout: function(element) {
            this.element(element);
        },
        errorPlacement: function(error, element) {
            error.addClass(\"text-danger small\");
            element.addClass(\"is-invalid\");                                             // Bootstrap error class
            element.closest(\".form-group\").find(\".login-error\").html(error);      // Insert error inside the reserved space
        },
        submitHandler: function(form) {
            \$.ajax({
                type: \"POST\",
                url: \"login\",
                data: \$(form).serialize(),
                dataType: \"json\",
                success: function(response) {
                    if (response.success) {

                    } else {
                        \$(\".invalid-feedback\").remove();                    
                        \$.each(response.errors, function(field, message) {
                            let input = \$(\"[name='\" + field + \"']\");
                            input.addClass(\"is-invalid\");
                            \$(\".login-error\").text(message);
                        });
                    }
                },
                error: function() {
                    \$(\".login-error\").text(\"Errore di rete. Riprova.\");
                }
            });
        }*/
    //});


});

function toggleForms(showForgotForm) {
    if (showForgotForm) {
        \$('#login-form').addClass('d-none');  // Hide login form
        \$('#forgot-password-form').removeClass('d-none');  // Show forgot password form
    } else {
        \$('#forgot-password-form').addClass('d-none');  // Hide forgot password form
        \$('#login-form').removeClass('d-none');  // Show login form
    }
}

function resetForm() {
    \$('#login-form, #forgot-password-form').each(function () {
        this.reset();
        \$(this).find('.alert').addClass('d-none').find('span').text('');
    });
}
</script>
{% endblock %}", "login.twig", "C:\\wamp64\\www\\liquimet\\templates\\login.twig");
    }
}
