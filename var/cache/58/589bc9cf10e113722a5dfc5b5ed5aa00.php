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

/* login.twig */
class __TwigTemplate_3a12bd9259b98639c96bcfcb21baea5d extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "login.twig", 1);
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
                <form id=\"login-form\" method=\"POST\" action=\"login\" class=\"col-9 justify-content-center mx-auto my-auto\">
                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\">

                    <div class=\"input-group mx-auto my-2 input-login\">
                        <label for=\"login-username\" class=\"input-group-text\">
                            <i class=\"bi bi-person-fill\"></i>
                        </label>
                        
                        <input type=\"text\" id=\"login-username\" name=\"login-username\" class=\"form-control\" placeholder=\"username\" autocomplete=\"off\" />   
                    </div>

                    <div class=\"input-group mx-auto my-2 input-login\">
                        <label for=\"login-password\" class=\"input-group-text\">
                            <i class=\"bi bi-lock-fill\"></i>
                        </label>
                        
                        <input type=\"password\" id=\"login-password\" name=\"login-password\" class=\"form-control\" placeholder=\"password\" /> 
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
                </form>

                <div class=\"col-9 mx-auto ";
        // line 50
        if (($context["error"] ?? null)) {
            echo "alert alert-danger";
        }
        echo "\">
                    ";
        // line 51
        echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
        echo "
                </div>
            </div>

            <div class=\"mt-4\">
                <div class=\"d-flex justify-content-center links\">
                    <a href=\"password-lost\" id=\"lost-password\">
                        Hai dimenticato la password?
                    </a>
                </div>
            </div> \t
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
        return "login.twig";
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
        return array (  114 => 51,  108 => 50,  72 => 17,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
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
                <form id=\"login-form\" method=\"POST\" action=\"login\" class=\"col-9 justify-content-center mx-auto my-auto\">
                    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\">

                    <div class=\"input-group mx-auto my-2 input-login\">
                        <label for=\"login-username\" class=\"input-group-text\">
                            <i class=\"bi bi-person-fill\"></i>
                        </label>
                        
                        <input type=\"text\" id=\"login-username\" name=\"login-username\" class=\"form-control\" placeholder=\"username\" autocomplete=\"off\" />   
                    </div>

                    <div class=\"input-group mx-auto my-2 input-login\">
                        <label for=\"login-password\" class=\"input-group-text\">
                            <i class=\"bi bi-lock-fill\"></i>
                        </label>
                        
                        <input type=\"password\" id=\"login-password\" name=\"login-password\" class=\"form-control\" placeholder=\"password\" /> 
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
                </form>

                <div class=\"col-9 mx-auto {% if error %}alert alert-danger{% endif %}\">
                    {{ error }}
                </div>
            </div>

            <div class=\"mt-4\">
                <div class=\"d-flex justify-content-center links\">
                    <a href=\"password-lost\" id=\"lost-password\">
                        Hai dimenticato la password?
                    </a>
                </div>
            </div> \t
        </div>
    </div>
</body>
{% endblock %}", "login.twig", "C:\\wamp64\\www\\liquimet\\templates\\login.twig");
    }
}
