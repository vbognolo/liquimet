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

/* password-lost.twig */
class __TwigTemplate_a844a89197c89c44acb4a0cca3523318 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "password-lost.twig", 1);
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
            
            <div class=\"container form-box\">
                <form id=\"forgot-password-form\" method=\"POST\" action=\"password-lost\" class=\"col-9 justify-content-center mx-auto my-auto\">
                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\">

                    <div class=\"input-group mx-auto my-2 input-login\">
                        <label for=\"login-email\" class=\"input-group-text\">
                            <i class=\"bi bi-envelope-at\"></i>
                        </label>
                        
                        <input type=\"text\" id=\"login-email\" name=\"login-email\" class=\"form-control\" placeholder=\"e-mail\" autocomplete=\"off\" />   
                    </div>
    
                    <div class=\"col-8 mx-auto my-4 btn-box\">
                        <button type=\"submit\" name=\"send\" class=\"btn login-btn\" id=\"login-btn\" value=\"Invia\">
                            INVIA
                        </button>
                    </div>
                </form>

           
            </div>\t
            
            <div class=\"col-9 mx-auto ";
        // line 37
        if (($context["error"] ?? null)) {
            yield "alert alert-danger";
        }
        yield "\">
                ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
        yield "
            </div>

            <div class=\"mt-4\">
                <div class=\"d-flex justify-content-center links\">
                    <a href=\"login\" id=\"back-to-login\">
                        Torna al login
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
";
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        yield "    ";
        // line 55
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 60
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
    ";
        // line 66
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
    ";
        // line 72
        yield "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" 
        integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" 
        crossorigin=\"anonymous\">
</script> 
<script>
\$(document).ready(function() {
    \$(\"#forgot-password-form\").validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            email: {
                required: \"Campo obbligatorio.\",
                email: \"Indirizzo e-mail non valido.\"
            }
        },
        submitHandler: function(form) {
            \$.ajax({
                type: \"POST\",
                url: \"password-lost\",
                data: \$(form).serialize(),
                dataType: \"json\",
                success: function(response) {
                    if (response.success) {
                        \$(\"#forgot-message\").html('<div class=\"alert alert-success\">Se esiste un account, riceverai una email.</div>');
                    } else {
                        \$(\"#forgot-message\").html('<div class=\"alert alert-danger\">Errore durante l\\'invio della email.</div>');
                    }
                },
                error: function() {
                    \$(\"#forgot-message\").html('<div class=\"alert alert-danger\">Errore di connessione al server.</div>');
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
        return "password-lost.twig";
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
        return array (  162 => 72,  155 => 66,  148 => 60,  142 => 55,  140 => 54,  133 => 53,  114 => 38,  108 => 37,  85 => 17,  71 => 5,  64 => 4,  53 => 2,  42 => 1,);
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
            
            <div class=\"container form-box\">
                <form id=\"forgot-password-form\" method=\"POST\" action=\"password-lost\" class=\"col-9 justify-content-center mx-auto my-auto\">
                    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\">

                    <div class=\"input-group mx-auto my-2 input-login\">
                        <label for=\"login-email\" class=\"input-group-text\">
                            <i class=\"bi bi-envelope-at\"></i>
                        </label>
                        
                        <input type=\"text\" id=\"login-email\" name=\"login-email\" class=\"form-control\" placeholder=\"e-mail\" autocomplete=\"off\" />   
                    </div>
    
                    <div class=\"col-8 mx-auto my-4 btn-box\">
                        <button type=\"submit\" name=\"send\" class=\"btn login-btn\" id=\"login-btn\" value=\"Invia\">
                            INVIA
                        </button>
                    </div>
                </form>

           
            </div>\t
            
            <div class=\"col-9 mx-auto {% if error %}alert alert-danger{% endif %}\">
                {{ error }}
            </div>

            <div class=\"mt-4\">
                <div class=\"d-flex justify-content-center links\">
                    <a href=\"login\" id=\"back-to-login\">
                        Torna al login
                    </a>
                </div>
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
\$(document).ready(function() {
    \$(\"#forgot-password-form\").validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            email: {
                required: \"Campo obbligatorio.\",
                email: \"Indirizzo e-mail non valido.\"
            }
        },
        submitHandler: function(form) {
            \$.ajax({
                type: \"POST\",
                url: \"password-lost\",
                data: \$(form).serialize(),
                dataType: \"json\",
                success: function(response) {
                    if (response.success) {
                        \$(\"#forgot-message\").html('<div class=\"alert alert-success\">Se esiste un account, riceverai una email.</div>');
                    } else {
                        \$(\"#forgot-message\").html('<div class=\"alert alert-danger\">Errore durante l\\'invio della email.</div>');
                    }
                },
                error: function() {
                    \$(\"#forgot-message\").html('<div class=\"alert alert-danger\">Errore di connessione al server.</div>');
                }
            });
        }
    });
});
</script>
{% endblock %}", "password-lost.twig", "C:\\wamp64\\www\\liquimet\\templates\\password-lost.twig");
    }
}
