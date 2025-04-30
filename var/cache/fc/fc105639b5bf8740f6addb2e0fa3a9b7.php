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

/* layout.twig */
class __TwigTemplate_55bc325ba30d5af922895363735f37b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'search' => [$this, 'block_search'],
            'browse' => [$this, 'block_browse'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"it-IT\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <link href=\"/css/styles.css\" type=\"text/css\" rel=\"stylesheet\" />

    ";
        // line 9
        echo " 
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\">

    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">

    ";
        // line 17
        echo "    <link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap\" rel=\"stylesheet\">
    ";
        // line 18
        $this->displayBlock('head', $context, $blocks);
        echo "  
</head>

";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 172
        echo "</html>";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Liquimet S.r.l. ";
    }

    // line 18
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "<body class=\"d-flex flex-column\">
    <header id=\"header\" class=\"container-fluid header d-flex mx-auto\">

       <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#mobileMenu\" aria-controls=\"mobileMenu\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        
        ";
        // line 30
        echo "        <div class=\"d-flex align-items-center my-auto div-title\">
            <a href=\"/";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 31) == "admin")) {
            echo "admin/dashboard";
        } else {
            echo "index";
        }
        echo "\" 
                class=\"d-flex align-items-center logo\">

                <img src=\"/img/liquimet_logo.jpg\" class=\"px-1 img-logo\" alt=\"Liquimet Logo\">
                    <h3 class=\"d-none d-lg-block px-2 my-auto\" id=\"layout-title\">
                        Liquimet Padova 
                    </h3>   
            </a>
        </div>

        ";
        // line 42
        echo "        ";
        $this->displayBlock('search', $context, $blocks);
        // line 47
        echo "    
        ";
        // line 49
        echo "        <nav>
            <div class=\"container-fluid px-3\">
                <div class=\"overflow-auto\">
                    <ul class=\"nav nav-tabs-bordered flex-nowrap flex-row align-items-center gap-2 mb-0\" style=\"min-width: max-content; overflow: visible;\">
                        
                        ";
        // line 54
        echo " 
                        <li class=\"nav-item nav-fill text-center mx-1\">
                            <a class=\"nav-link\" href=\"/";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 56) == "admin")) {
            echo "admin/dashboard";
        } else {
            echo "index";
        }
        echo "\">
                                <i class=\"bi bi-house\"></i>
                            </a>
                        </li>

                        ";
        // line 62
        echo "                        <li class=\"nav-item\">
                            <i class=\"bi bi-chevron-double-right\" style=\"color: #0066cc\"></i>
                        </li>

                        ";
        // line 67
        echo "                        <li class=\"nav-item nav-fill text-center mx-1\">
                            <a class=\"nav-link\" href=\"/platform\">Piattaforma</a>
                        </li>

                        ";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 71) == "admin")) {
            // line 72
            echo "                            ";
            // line 73
            echo "                            <li>
                                <i class=\"bi bi-chevron-double-right\" style=\"color: #0066cc\"></i>
                            </li>

                            ";
            // line 78
            echo "                            <li class=\"nav-item nav-fill text-center mx-1\">
                                <a class=\"nav-link\" href=\"/admin/users\">Utenti</a>
                            </li>
                        ";
        }
        // line 82
        echo "                    </ul>
                </div>
            </div>
        </nav>
        ";
        // line 87
        echo "
        ";
        // line 89
        echo "        ";
        $this->displayBlock('browse', $context, $blocks);
        // line 94
        echo "
        ";
        // line 96
        echo "        <nav class=\"header-nav mx-3 p-2\">
            <ul class=\"d-flex align-items-center justify-content-end my-auto\">

                ";
        // line 99
        echo "                                                        
                <li class=\"nav-item dropdown d-flex justify-content-end my-auto\">
                    <a class=\"nav-link p-1 my-auto mx-1 nav-profile\" data-bs-toggle=\"dropdown\" id=\"nav-profile\" aria-expanded=\"false\">
                        <span class=\"d-none d-md-block dropdown-toggle px-1\"> ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "username", [], "any", false, false, false, 102), "html", null, true);
        echo " </span>
                    </a>  

                    ";
        // line 105
        echo "   
                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                        <li class=\"dropdown-header\">
                            <h5> ";
        // line 108
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "name", [], "any", false, false, false, 108)), "html", null, true);
        echo " </h5>
                                <span> ";
        // line 109
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 109)), "html", null, true);
        echo " </span>
                        </li>
            
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex justify-content-center\" 
                                href=\"/profile\">
                                    <span> Profilo </span>
                            </a>
                        </li>
            
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex justify-content-center\" href=\"/logout\">
                                <span> Esci </span>
                            </a>
                        </li>    
                    </ul>  
                    ";
        // line 133
        echo " 
                    
                </li>               
            </ul>
        </nav>                   
    </header> 

    <!-- Mobile Sidebar Menu -->
    <div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"mobileMenu\">
        <div class=\"offcanvas-header\">
            <h5 class=\"offcanvas-title\">Menu</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\"></button>
        </div>
        <div class=\"offcanvas-body\">
            <ul class=\"nav flex-column\">
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/";
        // line 148
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "access", [], "any", false, false, false, 148) == "admin")) {
            echo "admin/dashboard";
        } else {
            echo "index";
        }
        echo "\">Home</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Tables</a></li>
                ";
        // line 150
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "access", [], "any", false, false, false, 150) == "admin")) {
            // line 151
            echo "                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Companies</a></li>
                ";
        }
        // line 153
        echo "            </ul>
        </div>
    </div>

    <main>
        ";
        // line 158
        $this->displayBlock('content', $context, $blocks);
        // line 159
        echo "    </main>

    <footer class=\"footer mt-auto p-1\">
        <div class=\"container\">
            <span> Liquimet Italia ";
        // line 163
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "&copy; Tutti i diritti riservati. </span>
        </div>
    </footer>

    ";
        // line 167
        $this->displayBlock('scripts', $context, $blocks);
        // line 168
        echo "
    <script src=\"/js/main.js\"></script> 
</body>
";
    }

    // line 42
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "            <section class=\"row my-auto mx-auto px-3 search-header\">
                <div class=\"my-auto m-0 search-bar\"></div>
            </section>
        ";
    }

    // line 89
    public function block_browse($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "            <section class=\"row my-auto mx-auto px-3 browse-header\">
                <div class=\"my-auto m-0 browse-bar\"></div>
            </section>
        ";
    }

    // line 158
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 167
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  343 => 167,  337 => 158,  330 => 90,  326 => 89,  319 => 43,  315 => 42,  308 => 168,  306 => 167,  299 => 163,  293 => 159,  291 => 158,  284 => 153,  280 => 151,  278 => 150,  269 => 148,  252 => 133,  225 => 109,  221 => 108,  216 => 105,  210 => 102,  205 => 99,  200 => 96,  197 => 94,  194 => 89,  191 => 87,  185 => 82,  179 => 78,  173 => 73,  171 => 72,  169 => 71,  163 => 67,  157 => 62,  145 => 56,  141 => 54,  134 => 49,  131 => 47,  128 => 42,  111 => 31,  108 => 30,  99 => 22,  95 => 21,  89 => 18,  82 => 4,  78 => 172,  76 => 21,  70 => 18,  67 => 17,  62 => 13,  57 => 9,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"it-IT\">
<head>
    <title>{% block title %} Liquimet S.r.l. {% endblock %}</title>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <link href=\"/css/styles.css\" type=\"text/css\" rel=\"stylesheet\" />

    {# Bootstrap (latest stable) #} 
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\">

    {# Font Awesome & Bootstrap Icons #}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">

    {# Google Fonts (Rubik) #}
    <link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap\" rel=\"stylesheet\">
    {% block head %}{% endblock %}  
</head>

{% block body %}
<body class=\"d-flex flex-column\">
    <header id=\"header\" class=\"container-fluid header d-flex mx-auto\">

       <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#mobileMenu\" aria-controls=\"mobileMenu\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        
        {# Logo #}
        <div class=\"d-flex align-items-center my-auto div-title\">
            <a href=\"/{% if session.role == 'admin' %}admin/dashboard{% else %}index{% endif %}\" 
                class=\"d-flex align-items-center logo\">

                <img src=\"/img/liquimet_logo.jpg\" class=\"px-1 img-logo\" alt=\"Liquimet Logo\">
                    <h3 class=\"d-none d-lg-block px-2 my-auto\" id=\"layout-title\">
                        Liquimet Padova 
                    </h3>   
            </a>
        </div>

        {# Search Bar #}
        {% block search %}
            <section class=\"row my-auto mx-auto px-3 search-header\">
                <div class=\"my-auto m-0 search-bar\"></div>
            </section>
        {% endblock %}
    
        {# Navigation Bar #}
        <nav>
            <div class=\"container-fluid px-3\">
                <div class=\"overflow-auto\">
                    <ul class=\"nav nav-tabs-bordered flex-nowrap flex-row align-items-center gap-2 mb-0\" style=\"min-width: max-content; overflow: visible;\">
                        
                        {# Index #} 
                        <li class=\"nav-item nav-fill text-center mx-1\">
                            <a class=\"nav-link\" href=\"/{% if session.role == 'admin' %}admin/dashboard{% else %}index{% endif %}\">
                                <i class=\"bi bi-house\"></i>
                            </a>
                        </li>

                        {# Separator #}
                        <li class=\"nav-item\">
                            <i class=\"bi bi-chevron-double-right\" style=\"color: #0066cc\"></i>
                        </li>

                        {# Platform #}
                        <li class=\"nav-item nav-fill text-center mx-1\">
                            <a class=\"nav-link\" href=\"/platform\">Piattaforma</a>
                        </li>

                        {% if session.role == 'admin' %}
                            {# Separator #}
                            <li>
                                <i class=\"bi bi-chevron-double-right\" style=\"color: #0066cc\"></i>
                            </li>

                            {# Users #}
                            <li class=\"nav-item nav-fill text-center mx-1\">
                                <a class=\"nav-link\" href=\"/admin/users\">Utenti</a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </nav>
        {# End Navigation Bar #}

        {# Browse Bar #}
        {% block browse %}
            <section class=\"row my-auto mx-auto px-3 browse-header\">
                <div class=\"my-auto m-0 browse-bar\"></div>
            </section>
        {% endblock %}

        {# Logged User Profile #}
        <nav class=\"header-nav mx-3 p-2\">
            <ul class=\"d-flex align-items-center justify-content-end my-auto\">

                {# Profile Icon #}                                                        
                <li class=\"nav-item dropdown d-flex justify-content-end my-auto\">
                    <a class=\"nav-link p-1 my-auto mx-1 nav-profile\" data-bs-toggle=\"dropdown\" id=\"nav-profile\" aria-expanded=\"false\">
                        <span class=\"d-none d-md-block dropdown-toggle px-1\"> {{ session.username }} </span>
                    </a>  

                    {# Profile Dropdown Menu #}   
                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                        <li class=\"dropdown-header\">
                            <h5> {{ session.name|upper }} </h5>
                                <span> {{ session.role|capitalize }} </span>
                        </li>
            
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex justify-content-center\" 
                                href=\"/profile\">
                                    <span> Profilo </span>
                            </a>
                        </li>
            
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex justify-content-center\" href=\"/logout\">
                                <span> Esci </span>
                            </a>
                        </li>    
                    </ul>  
                    {# End Profile Dropdown Menu #} 
                    
                </li>               
            </ul>
        </nav>                   
    </header> 

    <!-- Mobile Sidebar Menu -->
    <div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"mobileMenu\">
        <div class=\"offcanvas-header\">
            <h5 class=\"offcanvas-title\">Menu</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\"></button>
        </div>
        <div class=\"offcanvas-body\">
            <ul class=\"nav flex-column\">
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/{% if session.access == 'admin' %}admin/dashboard{% else %}index{% endif %}\">Home</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Tables</a></li>
                {% if session.access == 'admin' %}
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Companies</a></li>
                {% endif %}
            </ul>
        </div>
    </div>

    <main>
        {% block content %}{% endblock %}
    </main>

    <footer class=\"footer mt-auto p-1\">
        <div class=\"container\">
            <span> Liquimet Italia {{ 'now'|date('Y')}}&copy; Tutti i diritti riservati. </span>
        </div>
    </footer>

    {% block scripts %} {% endblock %}

    <script src=\"/js/main.js\"></script> 
</body>
{% endblock %}
</html>", "layout.twig", "C:\\wamp64\\www\\liquimet\\templates\\layout.twig");
    }
}
