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

/* admin/layout.html */
class __TwigTemplate_8c4cdad2edf47ee79d4011024f60616f6a840b791da7c138fb351681e27aaed9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'html' => [$this, 'block_html'],
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('html', $context, $blocks);
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"it\">
<head>
";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 30
        echo "</head>

";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 170
        echo "</html>";
    }

    // line 1
    public function block_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <title>
        ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "    </title>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "css/styles.css\" type=\"text/css\" rel=\"stylesheet\">
                
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\">
            
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>
            
            <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap\" rel=\"stylesheet\">
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Liquimet S.r.l. ";
    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    <body class=\"d-flex flex-column vh-100\">
        <header id=\"header\" class=\"header d-flex\">
                                        <!-- LOGO -->
            <div class=\"d-flex align-items-center div-title\">
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "admin/index\" class=\"logo d-flex align-items-center w-100\">
                    <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "img/liquimet_logo.jpg\" class=\"img-logo my-auto\" alt=\"\">
                    <span></span>
                    <h3 class=\"d-none d-lg-block my-auto ms-4\" id=\"title\"> Liquimet Padova </h3>
                </a>
            </div>
                                        <!-- END LOGO -->

                                        <!-- NAVIGATION -->
            <ul class=\"nav nav-tabs-bordered d-flex my-auto mx-auto p-2 hstack gap-2\" id=\"navigation\">
                <li class=\"nav-item nav-justified nav-fill mx-auto my-auto\">
                    <a class=\"nav-link w-100\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "admin/index\">
                        <i class=\"bi bi-house\"></i>
                    </a>
                    
                    <li> <i class=\"bi bi-chevron-double-right\" style=\"color: #0066cc\"></i> </li>
                </li>

                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 56
            echo "                    <li class=\"nav-item nav-justified nav-fill mx-auto my-auto\">       
                        <a class=\"nav-link w-100\" aria-controls=\"nav-platform\"
                            href=\"";
            // line 58
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "admin/category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "id_group", [], "any", false, false, false, 58), "html", null, true);
            echo "\"
                                ";
            // line 59
            if ((0 === twig_compare(($context["group"] ?? null), twig_get_attribute($this->env, $this->source, $context["link"], "id_group", [], "any", false, false, false, 59)))) {
                echo " 
                                    class=\"active\" aria-current=\"page\" 
                                ";
            }
            // line 61
            echo ">
                                    ";
            // line 62
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 62)), "html", null, true);
            echo "
                        </a>

                        ";
            // line 65
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["link"], "id_group", [], "any", false, false, false, 65), ($context["group_count"] ?? null)))) {
                echo "            
                            <li class=\"icon-divider\"> <i class=\"bi bi-chevron-double-right\" style=\"color: #0066cc\"></i> </li>
                        ";
            }
            // line 68
            echo "                    </li>     
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                     
            </ul>          
                                            <!-- END NAVIGATION -->

                                            <!-- SEARCH BAR -->
            <div class=\"search-bar ms-auto my-auto p-2\">
                <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                    <input type=\"text\" name=\"query\" placeholder=\"Cerca\" title=\"Enter search keyword\">
                        <button type=\"submit\" title=\"Cerca\"> 
                            <i class=\"bi bi-search\"></i>
                        </button>
                </form>
            </div>
                                            <!-- END SEARCH BAR -->

                                            <!-- SEARCH ICON -->
            <nav class=\"header-nav me-1 p-2\">
                <ul class=\"d-flex align-items-center\">
                    <li class=\"nav-item d-block d-lg-none\">
                        <a class=\"nav-link nav-icon search-bar-toggle\" href=\"#\">
                            <i class=\"bi bi-search\"></i>
                        </a>
                    </li>
                                            <!-- END SEARCH ICON-->

                                            <!-- PROFILE ICON -->                                                              
                    ";
        // line 95
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id_user", [], "any", false, false, false, 95), 0))) {
            // line 96
            echo "                    <li class=\"nav-item d-flex align-items-center ms-5 p-2\" style=\"float: right;\">
                        <a class=\"nav-link ms-5 p-2\" id=\"nav-login\"
                            href=\"";
            // line 98
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "login\">
                                LOGIN
                        </a>
                    </li>
                    ";
        } else {
            // line 103
            echo "                    <li class=\"nav-item dropdown d-flex align-items-center ms-5 p-2\" style=\"float: right;\">
                        <a class=\"nav-link dropdown-toggle ms-5 p-2\" data-bs-toggle=\"dropdown\" id=\"nav-profile\"
                            href=\"";
            // line 105
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "admin/user/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id_user", [], "any", false, false, false, 105), "html", null, true);
            echo "\">
                                ";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "username", [], "any", false, false, false, 106), "html", null, true);
            echo "
                        </a>
                                            <!-- END PROFILE ICON -->

                                            <!-- PROFILE DROPDOWN ITEMS -->
                        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                            <li class=\"dropdown-header\">
                                <h5>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "member", [], "any", false, false, false, 113), "html", null, true);
            echo "</h5>
                                    <span>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 114), "html", null, true);
            echo " </span>
                            </li>
                
                            <li>
                                <hr class=\"dropdown-divider\">
                            </li>

                            <li>
                                <a class=\"dropdown-item d-flex justify-content-center\" 
                                    href=\"";
            // line 123
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "admin/user/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id_user", [], "any", false, false, false, 123), "html", null, true);
            echo "\">
                                        <span> Profilo </span>
                                </a>
                                
                            </li>
                
                            <li>
                                <hr class=\"dropdown-divider\">
                            </li>
        <!--
                                    <li>
                                        <a class=\"dropdown-item d-flex justify-content-center\" href=\"#\">
                                            <span>Impostazioni</span>
                                        </a>
                                    </li>
        -->
                            <li>
                                <hr class=\"dropdown-divider\">
                            </li>

                            <li>
                                <a class=\"dropdown-item d-flex justify-content-center\" href=\"";
            // line 144
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "logout/\">
                                    <span>Esci</span>
                                </a>
                            </li>
                        </ul>  
                                            <!-- END PROFILE DROPDOWN ITEMS -->     
                    </li>  
                    ";
        }
        // line 151
        echo "             
                </ul>
            </nav>                   
    </header>  
        
    ";
        // line 156
        $this->displayBlock('content', $context, $blocks);
        // line 157
        echo "
    <footer class=\"footer mt-auto p-2 fixed-bottom\">
        <div class=\"container\">
            <span class=\"\">&copy; Liquimet Italia ";
        // line 160
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " </span>
        </div>
    </footer>
        
    ";
        // line 164
        $this->displayBlock('script', $context, $blocks);
        // line 167
        echo "
    </body>
";
    }

    // line 156
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 164
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "    
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "js/main.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "admin/layout.html";
    }

    public function getDebugInfo()
    {
        return array (  348 => 165,  342 => 164,  336 => 156,  330 => 167,  328 => 164,  321 => 160,  316 => 157,  314 => 156,  307 => 151,  296 => 144,  270 => 123,  258 => 114,  254 => 113,  244 => 106,  238 => 105,  234 => 103,  226 => 98,  222 => 96,  220 => 95,  192 => 69,  185 => 68,  179 => 65,  173 => 62,  170 => 61,  164 => 59,  158 => 58,  154 => 56,  150 => 55,  140 => 48,  127 => 38,  123 => 37,  117 => 33,  113 => 32,  106 => 8,  84 => 12,  79 => 9,  77 => 8,  74 => 7,  70 => 6,  63 => 1,  59 => 170,  57 => 32,  53 => 30,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block html %} {% endblock %}

<!DOCTYPE html>
<html lang=\"it\">
<head>
{% block head %}
    <title>
        {% block title %} Liquimet S.r.l. {% endblock %}
    </title>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <link href=\"{{ doc_root }}css/styles.css\" type=\"text/css\" rel=\"stylesheet\">
                
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\">
            
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>
            
            <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap\" rel=\"stylesheet\">
{% endblock %}
</head>

{% block body %}
    <body class=\"d-flex flex-column vh-100\">
        <header id=\"header\" class=\"header d-flex\">
                                        <!-- LOGO -->
            <div class=\"d-flex align-items-center div-title\">
                <a href=\"{{ doc_root }}admin/index\" class=\"logo d-flex align-items-center w-100\">
                    <img src=\"{{ doc_root }}img/liquimet_logo.jpg\" class=\"img-logo my-auto\" alt=\"\">
                    <span></span>
                    <h3 class=\"d-none d-lg-block my-auto ms-4\" id=\"title\"> Liquimet Padova </h3>
                </a>
            </div>
                                        <!-- END LOGO -->

                                        <!-- NAVIGATION -->
            <ul class=\"nav nav-tabs-bordered d-flex my-auto mx-auto p-2 hstack gap-2\" id=\"navigation\">
                <li class=\"nav-item nav-justified nav-fill mx-auto my-auto\">
                    <a class=\"nav-link w-100\" href=\"{{ doc_root }}admin/index\">
                        <i class=\"bi bi-house\"></i>
                    </a>
                    
                    <li> <i class=\"bi bi-chevron-double-right\" style=\"color: #0066cc\"></i> </li>
                </li>

                {% for link in navigation %}
                    <li class=\"nav-item nav-justified nav-fill mx-auto my-auto\">       
                        <a class=\"nav-link w-100\" aria-controls=\"nav-platform\"
                            href=\"{{ doc_root }}admin/category/{{ link.id_group }}\"
                                {% if (group == link.id_group) %} 
                                    class=\"active\" aria-current=\"page\" 
                                {% endif %}>
                                    {{ link.name|capitalize }}
                        </a>

                        {% if (link.id_group < group_count) %}            
                            <li class=\"icon-divider\"> <i class=\"bi bi-chevron-double-right\" style=\"color: #0066cc\"></i> </li>
                        {% endif %}
                    </li>     
                {% endfor %}                     
            </ul>          
                                            <!-- END NAVIGATION -->

                                            <!-- SEARCH BAR -->
            <div class=\"search-bar ms-auto my-auto p-2\">
                <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                    <input type=\"text\" name=\"query\" placeholder=\"Cerca\" title=\"Enter search keyword\">
                        <button type=\"submit\" title=\"Cerca\"> 
                            <i class=\"bi bi-search\"></i>
                        </button>
                </form>
            </div>
                                            <!-- END SEARCH BAR -->

                                            <!-- SEARCH ICON -->
            <nav class=\"header-nav me-1 p-2\">
                <ul class=\"d-flex align-items-center\">
                    <li class=\"nav-item d-block d-lg-none\">
                        <a class=\"nav-link nav-icon search-bar-toggle\" href=\"#\">
                            <i class=\"bi bi-search\"></i>
                        </a>
                    </li>
                                            <!-- END SEARCH ICON-->

                                            <!-- PROFILE ICON -->                                                              
                    {% if session.id_user == 0 %}
                    <li class=\"nav-item d-flex align-items-center ms-5 p-2\" style=\"float: right;\">
                        <a class=\"nav-link ms-5 p-2\" id=\"nav-login\"
                            href=\"{{ doc_root }}login\">
                                LOGIN
                        </a>
                    </li>
                    {% else %}
                    <li class=\"nav-item dropdown d-flex align-items-center ms-5 p-2\" style=\"float: right;\">
                        <a class=\"nav-link dropdown-toggle ms-5 p-2\" data-bs-toggle=\"dropdown\" id=\"nav-profile\"
                            href=\"{{ doc_root }}admin/user/{{ session.id_user }}\">
                                {{ session.username }}
                        </a>
                                            <!-- END PROFILE ICON -->

                                            <!-- PROFILE DROPDOWN ITEMS -->
                        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                            <li class=\"dropdown-header\">
                                <h5>{{ session.member }}</h5>
                                    <span>{{ session.role }} </span>
                            </li>
                
                            <li>
                                <hr class=\"dropdown-divider\">
                            </li>

                            <li>
                                <a class=\"dropdown-item d-flex justify-content-center\" 
                                    href=\"{{ doc_root }}admin/user/{{ session.id_user }}\">
                                        <span> Profilo </span>
                                </a>
                                
                            </li>
                
                            <li>
                                <hr class=\"dropdown-divider\">
                            </li>
        <!--
                                    <li>
                                        <a class=\"dropdown-item d-flex justify-content-center\" href=\"#\">
                                            <span>Impostazioni</span>
                                        </a>
                                    </li>
        -->
                            <li>
                                <hr class=\"dropdown-divider\">
                            </li>

                            <li>
                                <a class=\"dropdown-item d-flex justify-content-center\" href=\"{{ doc_root }}logout/\">
                                    <span>Esci</span>
                                </a>
                            </li>
                        </ul>  
                                            <!-- END PROFILE DROPDOWN ITEMS -->     
                    </li>  
                    {% endif %}             
                </ul>
            </nav>                   
    </header>  
        
    {% block content %}{% endblock %}

    <footer class=\"footer mt-auto p-2 fixed-bottom\">
        <div class=\"container\">
            <span class=\"\">&copy; Liquimet Italia {{ 'now'|date('Y')}} </span>
        </div>
    </footer>
        
    {% block script %}    
        <script src=\"{{ doc_root }}js/main.js\"></script>
    {% endblock %}

    </body>
{% endblock %}
</html>", "admin/layout.html", "D:\\wamp\\www\\liquimet\\templates\\admin\\layout.html");
    }
}
