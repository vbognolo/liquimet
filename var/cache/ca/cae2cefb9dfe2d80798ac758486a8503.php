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

/* layout.twig */
class __TwigTemplate_14d52bf08f210e18728c57e0e5aa432f extends Template
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
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'search' => [$this, 'block_search'],
            'browse' => [$this, 'block_browse'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"it-IT\">
<head>
    <title>";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <link href=\"/css/styles.css\" type=\"text/css\" rel=\"stylesheet\" />

    ";
        // line 9
        yield " 
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\">

    ";
        // line 13
        yield "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">

    ";
        // line 17
        yield "    <link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap\" rel=\"stylesheet\">
    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        yield "  
</head>

";
        // line 21
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 172
        yield "</html>";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Liquimet S.r.l. ";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "<body class=\"d-flex flex-column\">
    <header id=\"header\" class=\"container-fluid header d-flex mx-auto\">

       <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#mobileMenu\" aria-controls=\"mobileMenu\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        
        ";
        // line 30
        yield "        <div class=\"d-flex align-items-center my-auto div-title\">
            <a href=\"/";
        // line 31
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 31) == "admin")) {
            yield "admin/dashboard";
        } else {
            yield "index";
        }
        yield "\" 
                class=\"d-flex align-items-center logo\">

                <img src=\"/img/liquimet_logo.jpg\" class=\"px-1 img-logo\" alt=\"Liquimet Logo\">
                    <h3 class=\"d-none d-lg-block px-2 my-auto\" id=\"layout-title\">
                        Liquimet Padova 
                    </h3>   
            </a>
        </div>

        ";
        // line 42
        yield "        ";
        yield from $this->unwrap()->yieldBlock('search', $context, $blocks);
        // line 47
        yield "    
        ";
        // line 49
        yield "        <nav>
            <div class=\"container-fluid px-3\">
                <div class=\"overflow-auto\">
                    <ul class=\"nav nav-tabs-bordered flex-nowrap flex-row align-items-center gap-2 mb-0\" style=\"min-width: max-content; overflow: visible;\">
                        
                        ";
        // line 54
        yield " 
                        <li class=\"nav-item nav-fill text-center mx-1\">
                            <a class=\"nav-link\" href=\"/";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 56) == "admin")) {
            yield "admin/dashboard";
        } else {
            yield "index";
        }
        yield "\">
                                <i class=\"bi bi-house\"></i>
                            </a>
                        </li>

                        ";
        // line 62
        yield "                        <li class=\"nav-item\">
                            <i class=\"bi bi-chevron-double-right\" style=\"color: #0066cc\"></i>
                        </li>

                        ";
        // line 67
        yield "                        <li class=\"nav-item nav-fill text-center mx-1\">
                            <a class=\"nav-link\" href=\"/platform\">Piattaforma</a>
                        </li>

                        ";
        // line 71
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 71) == "admin")) {
            // line 72
            yield "                            ";
            // line 73
            yield "                            <li>
                                <i class=\"bi bi-chevron-double-right\" style=\"color: #0066cc\"></i>
                            </li>

                            ";
            // line 78
            yield "                            <li class=\"nav-item nav-fill text-center mx-1\">
                                <a class=\"nav-link\" href=\"/admin/users\">Utenti</a>
                            </li>
                        ";
        }
        // line 82
        yield "                    </ul>
                </div>
            </div>
        </nav>
        ";
        // line 87
        yield "
        ";
        // line 89
        yield "        ";
        yield from $this->unwrap()->yieldBlock('browse', $context, $blocks);
        // line 94
        yield "
        ";
        // line 96
        yield "        <nav class=\"header-nav mx-3 p-2\">
            <ul class=\"d-flex align-items-center justify-content-end my-auto\">

                ";
        // line 99
        yield "                                                        
                <li class=\"nav-item dropdown d-flex justify-content-end my-auto\">
                    <a class=\"nav-link p-1 my-auto mx-1 nav-profile\" data-bs-toggle=\"dropdown\" id=\"nav-profile\" aria-expanded=\"false\">
                        <span class=\"d-none d-md-block dropdown-toggle px-1\"> ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "username", [], "any", false, false, false, 102), "html", null, true);
        yield " </span>
                    </a>  

                    ";
        // line 105
        yield "   
                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                        <li class=\"dropdown-header\">
                            <h5> ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "name", [], "any", false, false, false, 108)), "html", null, true);
        yield " </h5>
                                <span> ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 109)), "html", null, true);
        yield " </span>
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
        yield " 
                    
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "access", [], "any", false, false, false, 148) == "admin")) {
            yield "admin/dashboard";
        } else {
            yield "index";
        }
        yield "\">Home</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Tables</a></li>
                ";
        // line 150
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "access", [], "any", false, false, false, 150) == "admin")) {
            // line 151
            yield "                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Companies</a></li>
                ";
        }
        // line 153
        yield "            </ul>
        </div>
    </div>

    <main>
        ";
        // line 158
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 159
        yield "    </main>

    <footer class=\"footer mt-auto p-1\">
        <div class=\"container\">
            <span> Liquimet Italia ";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "&copy; Tutti i diritti riservati. </span>
        </div>
    </footer>

    ";
        // line 167
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 168
        yield "
    <script src=\"/js/main.js\"></script> 
</body>
";
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "            <section class=\"row my-auto mx-auto px-3 search-header\">
                <div class=\"my-auto m-0 search-bar\"></div>
            </section>
        ";
        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_browse(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 90
        yield "            <section class=\"row my-auto mx-auto px-3 browse-header\">
                <div class=\"my-auto m-0 browse-bar\"></div>
            </section>
        ";
        yield from [];
    }

    // line 158
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 167
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  373 => 167,  363 => 158,  355 => 90,  348 => 89,  340 => 43,  333 => 42,  325 => 168,  323 => 167,  316 => 163,  310 => 159,  308 => 158,  301 => 153,  297 => 151,  295 => 150,  286 => 148,  269 => 133,  242 => 109,  238 => 108,  233 => 105,  227 => 102,  222 => 99,  217 => 96,  214 => 94,  211 => 89,  208 => 87,  202 => 82,  196 => 78,  190 => 73,  188 => 72,  186 => 71,  180 => 67,  174 => 62,  162 => 56,  158 => 54,  151 => 49,  148 => 47,  145 => 42,  128 => 31,  125 => 30,  116 => 22,  109 => 21,  99 => 18,  88 => 4,  83 => 172,  81 => 21,  75 => 18,  72 => 17,  67 => 13,  62 => 9,  54 => 4,  49 => 1,);
    }

    public function getSourceContext(): Source
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
