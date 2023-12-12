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

/* login.html */
class __TwigTemplate_143de009d8ad5da86ad7e19570e991e4567a9b64d44f35154474cc48d60dd56f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'html' => [$this, 'block_html'],
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "login.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!-- Include the above in your HEAD tag -->
";
    }

    // line 9
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <title>
        ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "    </title>
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "css/styles.css\" rel=\"stylesheet\" type=\"text/css\"> 

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.1/css/all.css\" integrity=\"sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP\" crossorigin=\"anonymous\">
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        /*\tbackground: #60a3bc !important; */
            background: linear-gradient(to top, #71bf44 0%, #1a9ccd 100%) !important;
        }
    </style>
";
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 117
        echo "
";
        // line 118
        $this->displayBlock('footer', $context, $blocks);
        // line 119
        echo "
";
    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "    <main>
        <div class=\"container h-100\">
            <div class=\"d-flex justify-content-center h-100\">
                <div class=\"user_card\">
                    <div class=\"d-flex justify-content-center\">
                        <div class=\"brand_logo_container\">
                            <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "img/logo_liquimet.png\" class=\"brand_logo\" alt=\"Liquimet\">
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-center form_container\">
                        <form method=\"post\" name=\"login_form\" action=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "login\">
                            <div class=\"input-group mb-3\" id=\"login-input-group\">
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                                </div>
                                <input type=\"text\" name=\"username\" class=\"form-control\" id =\"login-input-user\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "\" autocomplete=\"off\" placeholder=\"username\">
                                <div class=\"errors\">
                                    ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 54), "html", null, true);
        echo "
                                </div>
                            </div>

                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-lock\"></i></span>
                                </div>
                                <input type=\"password\" name=\"pass\" class=\"form-control\" id=\"login-input-pass\" autocomplete=\"new-password\" placeholder=\"password\">
                                <div class=\"errors\">
                                    ";
        // line 64
        echo twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 64);
        echo "
                                </div>
                            </div>

                            <div class=\"form-group\" id=\"login-form-group\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"remember\">
                                    <label class=\"form-check-label\" for=\"remember\">Ricordami</label>
                                </div>
                            </div>

                            <div class=\"d-flex justify-content-center mt-5 login_container\">
                                <button type=\"submit\" name=\"login\" class=\"btn\" id=\"login-btn\" value=\"Accedi\"
                                        data-bs-toggle=\"modal\" data-bs-target=\"#error\">
                                            Accedi
                                </button>

                                            <!-- MODAL -->
                                ";
        // line 82
        if (($context["errors"] ?? null)) {
            // line 83
            echo "                                    <div class=\"modal fade\" id=\"error\" tabindex=\"-1\" aria-labelledby=\"errorLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h1 class=\"modal-title fs-5\" id=\"errorLabel\">Errore!</h1>
                                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Chiudi\"></button>
                                                </div>
                                                
                                                <div class=\"modal-body\">
                                                    ";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "message", [], "any", false, false, false, 92), "html", null, true);
            echo "
                                                </div>
                                                
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Chiudi</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 102
        echo "  
                            </div>
                        </form>
                    </div>

                    <div class=\"mt-4\">
                        <div class=\"d-flex justify-content-center links\">
                            <a href=\"#\" id=\"lost-password\">Hai dimenticato la password?</a>
                        </div>
                    </div> \t\t
                </div>
            </div>
        </div>
    </main>
";
    }

    // line 118
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 118,  217 => 102,  204 => 92,  193 => 83,  191 => 82,  170 => 64,  157 => 54,  152 => 52,  144 => 47,  136 => 42,  128 => 36,  124 => 35,  119 => 119,  117 => 118,  114 => 117,  112 => 35,  109 => 34,  105 => 33,  98 => 11,  75 => 13,  72 => 12,  70 => 11,  67 => 10,  63 => 9,  51 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block html %} 
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!-- Include the above in your HEAD tag -->
{% endblock %}

{% block head %}
    <title>
        {% block title %} {% endblock %}
    </title>
    <link href=\"{{ doc_root }}css/styles.css\" rel=\"stylesheet\" type=\"text/css\"> 

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.1/css/all.css\" integrity=\"sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP\" crossorigin=\"anonymous\">
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        /*\tbackground: #60a3bc !important; */
            background: linear-gradient(to top, #71bf44 0%, #1a9ccd 100%) !important;
        }
    </style>
{% endblock %}

{% block body %}

{% block content %}
    <main>
        <div class=\"container h-100\">
            <div class=\"d-flex justify-content-center h-100\">
                <div class=\"user_card\">
                    <div class=\"d-flex justify-content-center\">
                        <div class=\"brand_logo_container\">
                            <img src=\"{{ doc_root }}img/logo_liquimet.png\" class=\"brand_logo\" alt=\"Liquimet\">
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-center form_container\">
                        <form method=\"post\" name=\"login_form\" action=\"{{ doc_root }}login\">
                            <div class=\"input-group mb-3\" id=\"login-input-group\">
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                                </div>
                                <input type=\"text\" name=\"username\" class=\"form-control\" id =\"login-input-user\" value=\"{{ username }}\" autocomplete=\"off\" placeholder=\"username\">
                                <div class=\"errors\">
                                    {{ errors.username }}
                                </div>
                            </div>

                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-lock\"></i></span>
                                </div>
                                <input type=\"password\" name=\"pass\" class=\"form-control\" id=\"login-input-pass\" autocomplete=\"new-password\" placeholder=\"password\">
                                <div class=\"errors\">
                                    {{ errors.password|raw }}
                                </div>
                            </div>

                            <div class=\"form-group\" id=\"login-form-group\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"remember\">
                                    <label class=\"form-check-label\" for=\"remember\">Ricordami</label>
                                </div>
                            </div>

                            <div class=\"d-flex justify-content-center mt-5 login_container\">
                                <button type=\"submit\" name=\"login\" class=\"btn\" id=\"login-btn\" value=\"Accedi\"
                                        data-bs-toggle=\"modal\" data-bs-target=\"#error\">
                                            Accedi
                                </button>

                                            <!-- MODAL -->
                                {% if errors %}
                                    <div class=\"modal fade\" id=\"error\" tabindex=\"-1\" aria-labelledby=\"errorLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h1 class=\"modal-title fs-5\" id=\"errorLabel\">Errore!</h1>
                                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Chiudi\"></button>
                                                </div>
                                                
                                                <div class=\"modal-body\">
                                                    {{ errors.message }}
                                                </div>
                                                
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Chiudi</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
  
                            </div>
                        </form>
                    </div>

                    <div class=\"mt-4\">
                        <div class=\"d-flex justify-content-center links\">
                            <a href=\"#\" id=\"lost-password\">Hai dimenticato la password?</a>
                        </div>
                    </div> \t\t
                </div>
            </div>
        </div>
    </main>
{% endblock %}

{% block footer %}{% endblock %}

{% endblock %}", "login.html", "D:\\wamp\\www\\liquimet\\templates\\login.html");
    }
}
