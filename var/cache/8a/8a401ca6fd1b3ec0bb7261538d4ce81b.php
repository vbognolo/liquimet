<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* password-lost.twig */
class __TwigTemplate_1ff24718e4f34857cbeadd73ee9f62c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "password-lost.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Login ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<body id=\"login\" class=\"d-flex justify-content-center align-items-center\">
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
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\">

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

                <div class=\"col-9 mx-auto ";
        // line 34
        if (($context["error"] ?? null)) {
            echo "alert alert-danger";
        }
        echo "\">
                    ";
        // line 35
        echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
        echo "
                </div>
            </div>\t

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
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "password-lost.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  98 => 35,  92 => 34,  72 => 17,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
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

                <div class=\"col-9 mx-auto {% if error %}alert alert-danger{% endif %}\">
                    {{ error }}
                </div>
            </div>\t

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
{% endblock %}", "password-lost.twig", "C:\\wamp64\\www\\liquimet\\templates\\password-lost.twig");
    }
}
