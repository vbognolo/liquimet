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
            'jquery' => [$this, 'block_jquery'],
            'datepicker' => [$this, 'block_datepicker'],
            'datatables' => [$this, 'block_datatables'],
            'page_script' => [$this, 'block_page_script'],
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
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css\" rel=\"stylesheet\" 
        integrity=\"sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT\" crossorigin=\"anonymous\">

    ";
        // line 14
        yield "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">

    ";
        // line 18
        yield "    <link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap\" rel=\"stylesheet\">
    ";
        // line 19
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        yield "  
</head>

";
        // line 22
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 203
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

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "<body class=\"d-flex flex-column\">
    <header id=\"header\" class=\"container-fluid header d-flex mx-auto\">

       <button class=\"navbar-toggler d-lg-none\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#mobileMenu\" aria-controls=\"mobileMenu\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        
        ";
        // line 31
        yield "        <div class=\"d-flex align-items-center my-auto div-title\">
            <a href=\"/";
        // line 32
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 32) == "admin")) {
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
        // line 43
        yield "        ";
        yield from $this->unwrap()->yieldBlock('search', $context, $blocks);
        // line 48
        yield "    
        ";
        // line 50
        yield "        <nav>
            <div class=\"container-fluid px-3\">
                <div class=\"overflow-auto\">
                    <ul class=\"nav nav-tabs-bordered flex-nowrap flex-row align-items-center gap-2 mb-0\" style=\"min-width: max-content; overflow: visible;\">
                        
                        ";
        // line 55
        yield " 
                        <li class=\"nav-item nav-fill text-center mx-1\">
                            <a class=\"nav-link\" href=\"/";
        // line 57
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 57) == "admin")) {
            yield "admin/dashboard";
        } else {
            yield "index";
        }
        yield "\">
                                <i class=\"bi bi-house\"></i>
                            </a>
                        </li>

                        ";
        // line 63
        yield "                        <li class=\"nav-item\">
                            <i class=\"bi bi-chevron-double-right\" style=\"color: #0066cc\"></i>
                        </li>

                        ";
        // line 68
        yield "                        <li class=\"nav-item nav-fill text-center mx-1\">
                            <a class=\"nav-link\" href=\"/platform\">Piattaforma</a>
                        </li>

                        ";
        // line 72
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 72) == "admin")) {
            // line 73
            yield "                            ";
            // line 74
            yield "                            <li>
                                <i class=\"bi bi-chevron-double-right\" style=\"color: #0066cc\"></i>
                            </li>

                            ";
            // line 79
            yield "                            <li class=\"nav-item nav-fill text-center mx-1\">
                                <a class=\"nav-link\" href=\"/admin/users\">Utenti</a>
                            </li>
                        ";
        }
        // line 83
        yield "                    </ul>
                </div>
            </div>
        </nav>
        ";
        // line 88
        yield "
        ";
        // line 90
        yield "        ";
        yield from $this->unwrap()->yieldBlock('browse', $context, $blocks);
        // line 95
        yield "
        ";
        // line 97
        yield "        <nav class=\"header-nav mx-3 p-2\">
            <ul class=\"d-flex align-items-center justify-content-end my-auto\">

                ";
        // line 100
        yield "                                                        
                <li class=\"nav-item dropdown d-flex justify-content-end my-auto\">
                    <a class=\"nav-link p-1 my-auto mx-1 nav-profile\" data-bs-toggle=\"dropdown\" id=\"nav-profile\" aria-expanded=\"false\">
                        <span class=\"d-none d-md-block dropdown-toggle px-1\"> ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "username", [], "any", false, false, false, 103), "html", null, true);
        yield " </span>
                    </a>  

                    ";
        // line 106
        yield "   
                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                        <li class=\"dropdown-header\">
                            <h5> ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "name", [], "any", false, false, false, 109)), "html", null, true);
        yield " </h5>
                                <span> ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 110)), "html", null, true);
        yield " </span>
                        </li>
            
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex justify-content-center\" href=\"/profile\">
                                <span> Profilo </span>
                            </a>
                        </li>
            
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        ";
        // line 127
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 127) == "admin")) {
            // line 128
            yield "                            <li>
                                <a class=\"dropdown-item d-flex justify-content-center\" href=\"/admin/login-audit\">
                                    <span> Revisione accesso utenti </span>
                                </a>
                            </li>
                        ";
        }
        // line 134
        yield "
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
        // line 145
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
        // line 160
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "access", [], "any", false, false, false, 160) == "admin")) {
            yield "admin/dashboard";
        } else {
            yield "index";
        }
        yield "\">Home</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Tables</a></li>
                ";
        // line 162
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "access", [], "any", false, false, false, 162) == "admin")) {
            // line 163
            yield "                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Companies</a></li>
                ";
        }
        // line 165
        yield "            </ul>
        </div>
    </div>

    <main>
        ";
        // line 170
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 171
        yield "    </main>

    <footer class=\"footer mt-auto p-1\">
        <div class=\"container\">
            <span class=\"fw-bold\"> Liquimet Italia ";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "&copy; </span> <span> Tutti i diritti riservati. </span>
        </div>
    </footer>

    ";
        // line 179
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 201
        yield "</body>
";
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "            <section class=\"row my-auto mx-auto px-3 search-header\">
                <div class=\"my-auto m-0 search-bar\"></div>
            </section>
        ";
        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_browse(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 91
        yield "            <section class=\"row my-auto mx-auto px-3 browse-header\">
                <div class=\"my-auto m-0 browse-bar\"></div>
            </section>
        ";
        yield from [];
    }

    // line 170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 180
        yield "        ";
        // line 181
        yield "        ";
        yield from $this->unwrap()->yieldBlock('jquery', $context, $blocks);
        // line 182
        yield "
        ";
        // line 184
        yield "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js\" 
                integrity=\"sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO\" 
                crossorigin=\"anonymous\">
        </script>

        ";
        // line 190
        yield "        ";
        yield from $this->unwrap()->yieldBlock('datepicker', $context, $blocks);
        // line 191
        yield "
        ";
        // line 193
        yield "        ";
        yield from $this->unwrap()->yieldBlock('datatables', $context, $blocks);
        // line 194
        yield "
        ";
        // line 196
        yield "        ";
        yield from $this->unwrap()->yieldBlock('page_script', $context, $blocks);
        // line 197
        yield "
        ";
        // line 199
        yield "        <script src=\"/js/main.js\"></script> 
    ";
        yield from [];
    }

    // line 181
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_jquery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 190
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datepicker(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 193
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datatables(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 196
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  468 => 196,  458 => 193,  448 => 190,  438 => 181,  432 => 199,  429 => 197,  426 => 196,  423 => 194,  420 => 193,  417 => 191,  414 => 190,  407 => 184,  404 => 182,  401 => 181,  399 => 180,  392 => 179,  382 => 170,  374 => 91,  367 => 90,  359 => 44,  352 => 43,  346 => 201,  344 => 179,  337 => 175,  331 => 171,  329 => 170,  322 => 165,  318 => 163,  316 => 162,  307 => 160,  290 => 145,  277 => 134,  269 => 128,  267 => 127,  247 => 110,  243 => 109,  238 => 106,  232 => 103,  227 => 100,  222 => 97,  219 => 95,  216 => 90,  213 => 88,  207 => 83,  201 => 79,  195 => 74,  193 => 73,  191 => 72,  185 => 68,  179 => 63,  167 => 57,  163 => 55,  156 => 50,  153 => 48,  150 => 43,  133 => 32,  130 => 31,  121 => 23,  114 => 22,  104 => 19,  93 => 4,  88 => 203,  86 => 22,  80 => 19,  77 => 18,  72 => 14,  66 => 9,  58 => 4,  53 => 1,);
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

    {# Bootstrap CSS (latest stable) #} 
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css\" rel=\"stylesheet\" 
        integrity=\"sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT\" crossorigin=\"anonymous\">

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
                            <a class=\"dropdown-item d-flex justify-content-center\" href=\"/profile\">
                                <span> Profilo </span>
                            </a>
                        </li>
            
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        {% if session.role == 'admin' %}
                            <li>
                                <a class=\"dropdown-item d-flex justify-content-center\" href=\"/admin/login-audit\">
                                    <span> Revisione accesso utenti </span>
                                </a>
                            </li>
                        {% endif %}

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
            <span class=\"fw-bold\"> Liquimet Italia {{ 'now'|date('Y')}}&copy; </span> <span> Tutti i diritti riservati. </span>
        </div>
    </footer>

    {% block scripts %}
        {# Conditionally include jQuery if required + jQuery Validation and jQuery Additional Methods #}
        {% block jquery %}{% endblock %}

        {# Bootstrap JS bundle #}
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js\" 
                integrity=\"sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO\" 
                crossorigin=\"anonymous\">
        </script>

        {# Conditionally include Bootstrap Datepicker if required #}
        {% block datepicker %}{% endblock %}

        {# Conditionally include DataTables if required #}
        {% block datatables %}{% endblock %}

        {# Conditionally include other scripts #}
        {% block page_script %}{% endblock %}

        {# This ensures main.js is the last #}
        <script src=\"/js/main.js\"></script> 
    {% endblock %}
</body>
{% endblock %}
</html>", "layout.twig", "C:\\wamp64\\www\\liquimet\\templates\\layout.twig");
    }
}
