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

/* layout.html */
class __TwigTemplate_817bc8214d40ba99c1be32bca56cf51a181ff7eb6ad8241ca97c14e28c100d75 extends Template
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
<html lang=\"it-IT\">
<head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 30
        echo "</head>

";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 241
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
        echo "        <title>
            ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
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
        echo "    <body class=\"d-flex flex-column\">
        <header id=\"header\" class=\"header d-flex\">
                                        <!-- LOGO -->
            <div class=\"d-flex align-items-center div-title\">
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "index\" class=\"logo d-flex align-items-center w-100\">
                    <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "img/liquimet_logo.jpg\" class=\"img-logo my-auto\" alt=\"\">
                    <span></span>
                    <h3 class=\"d-none d-lg-block my-auto ms-4\" id=\"title\">Liquimet S.r.l.</h3>
                </a>
            </div>
                                        <!-- END LOGO -->

                                        <!-- NAVIGATION -->
            <ul class=\"nav nav-tabs-bordered d-flex my-auto mx-auto hstack gap-3 p-0\" id=\"navigation\">
                <li class=\"nav-item nav-justified nav-fill mx-auto my-auto\">
                    <a class=\"nav-link w-100\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "index/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 48), "html", null, true);
        echo "\">
                        <i class=\"bi bi-house\"></i>
                    </a>
                    
                    <li class=\"icon-divider\"> <i class=\"bi bi-chevron-double-right\" style=\"color: #0066cc\"></i> </li>
                </li>

                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 56
            echo "                    
                        <li class=\"nav-item nav-justified nav-fill mx-auto my-auto\">       
                            <a class=\"nav-link w-100\" aria-controls=\"nav-platform\"
                                href=\"";
            // line 59
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "id_group", [], "any", false, false, false, 59), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "seo", [], "any", false, false, false, 59), "html", null, true);
            echo "\"
                                    ";
            // line 60
            if ((0 === twig_compare(($context["group"] ?? null), twig_get_attribute($this->env, $this->source, $context["link"], "id_group", [], "any", false, false, false, 60)))) {
                echo " 
                                        class=\"active\" aria-current=\"page\" 
                                    ";
            }
            // line 62
            echo ">
                                        ";
            // line 63
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 63)), "html", null, true);
            echo "
                            </a>
                        </li>     
                        
                        ";
            // line 67
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["link"], "id_group", [], "any", false, false, false, 67), ($context["group_count"] ?? null)))) {
                echo "            
                            <li class=\"icon-divider\"> <i class=\"bi bi-chevron-double-right\" style=\"color: #0066cc\"></i> </li>
                        ";
            }
            // line 70
            echo "                    
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                     
            </ul>
                                        <!-- END NAVIGATION -->

                                        <!-- SEARCH BAR -->
            <div class=\"search-bar ms-auto my-auto p-1\">
                <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                    <input type=\"text\" name=\"query\" placeholder=\"Cerca\">
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
                    <li class=\"nav-item dropdown d-flex justify-content-end ms-5 mb-1\">
                        ";
        // line 99
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 99), 0))) {
            // line 100
            echo "                            <a class=\"nav-link p-1 my-auto mx-1 nav-profile\" data-bs-toggle=\"dropdown\" id=\"nav-profile\"
                                href=\"";
            // line 101
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "user/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 101), "html", null, true);
            echo "\">
                                    <span class=\"d-none d-md-block dropdown-toggle ps-2\"> ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 102), "html", null, true);
            echo " </span>
                            </a>
                        ";
        }
        // line 105
        echo "                                        <!-- END PROFILE ICON -->

                                        <!-- PROFILE DROPDOWN ITEMS -->
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                                <li class=\"dropdown-header\">
                                    <h5>";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "member", [], "any", false, false, false, 110), "html", null, true);
        echo "</h5>
                                        <span>";
        // line 111
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 111)), "html", null, true);
        echo " </span>
                                </li>
            
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex justify-content-center\" 
                                        href=\"";
        // line 120
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "user/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 120), "html", null, true);
        echo "\">
                                        <span> Profilo </span>
                                    </a>
                                </li>
            
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>
    
                                <li>
                                    <a class=\"dropdown-item d-flex justify-content-center\" href=\"#\">
                                        <span>Impostazioni</span>
                                    </a>
                                </li>
    
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex justify-content-center\" href=\"";
        // line 140
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "logout/\">
                                        <span>Esci</span>
                                    </a>
                                </li>
                            </ul>  
                                        <!-- END PROFILE DROPDOWN ITEMS -->     
                        </li>               
                    </ul>
            </nav>                   
        </header>  
    
        ";
        // line 151
        $this->displayBlock('content', $context, $blocks);
        // line 152
        echo "
        <footer class=\"footer mt-auto p-2\">
            <div class=\"container\">
                <span class=\"\">&copy; Liquimet Italia ";
        // line 155
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " </span>
            </div>
        </footer>
        
        ";
        // line 159
        $this->displayBlock('script', $context, $blocks);
        // line 238
        echo "
    </body>
";
    }

    // line 151
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 159
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "    
            <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "js/main.js\"></script>
            
            <script>
                \$(document).ready(function(){
                    \$(\"body\").tooltip({ 
                        selector: '[data-toggle = tooltip]',
                        placement: 'right' 
                    });
                });    
    
                    /*  multi-step form  */
                \$(\"#next\").on(\"click\", function(){
                    var \$bar = \$(\".ProgressBar\");
                        if(\$bar.children(\".is-current\").length > 0){
                            \$bar.children(\".is-current\").removeClass(\"is-current\").addClass(\"is-complete\").next().addClass(\"is-current\");
                        } else{
                            \$bar.children().first().addClass(\"is-current\");
                        }
                });
                
                
                \$(document).ready(function(){
                    var current = 1, current_step, next_step, steps;
                    steps = \$(\"fieldset\").length;
                    
                    \$(\"#next\").click(function(){
                        current_step = \$(this).parent();
                    
                        if(current == '1' && \$('input[name=\"type\"]:checked').val() == '0'){
                            next_step = \$(this).parent().next();
                            ++current;
                            next_step = \$(this).parent().next();
                            ++current;
                        } else{
                            next_step = \$(this).parent().next().next();
                        }
                    
                        next_step.show();
                        current_step.hide();
                        setProgressBar(++current);
                    });
                    
                    \$(\".previous\").on(\"click\", function(){
                        var \$bar = \$(\".ProgressBar\");
                            if (\$bar.children(\".is-current\").length > 0){
                                \$bar.children(\".is-current\").removeClass(\"is-current\").prev().removeClass(\"is-complete\").addClass(\"is-current\");
                            } else{
                                \$bar.children(\".is-complete\").last().removeClass(\"is-complete\").addClass(\"is-current\");
                            }
                    });
                /*
                    \$(\".previous\").click(function(){
                        current_step = \$(this).parent();
                
                        if(current == '4' && \$('input[name=\"type\"]:checked').val() == '0'){
                            next_step = \$(this).parent().prev();
                            --current;
                        } else{
                            next_step = \$(this).parent().prev().prev();
                        }
                    
                        next_step.show();
                        current_step.hide();
                        setProgressBar(--current);
                    });
                
                    setProgressBar(current);
                        function setProgressBar(curStep){                           // change progress bar action
                            var percent = parseFloat(100 / steps) * curStep;
                            percent = percent.toFixed();
                            
                            \$(\".progress-bar\")
                                .css(\"width\", percent + \"%\")
                                .html(percent + \"%\");\t\t
                        } */
                }); 
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  341 => 160,  335 => 159,  329 => 151,  323 => 238,  321 => 159,  314 => 155,  309 => 152,  307 => 151,  293 => 140,  268 => 120,  256 => 111,  252 => 110,  245 => 105,  239 => 102,  233 => 101,  230 => 100,  228 => 99,  199 => 72,  191 => 70,  185 => 67,  178 => 63,  175 => 62,  169 => 60,  161 => 59,  156 => 56,  152 => 55,  140 => 48,  127 => 38,  123 => 37,  117 => 33,  113 => 32,  106 => 8,  84 => 12,  79 => 9,  77 => 8,  74 => 7,  70 => 6,  63 => 1,  59 => 241,  57 => 32,  53 => 30,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block html %} {% endblock %}

<!DOCTYPE html>
<html lang=\"it-IT\">
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
    <body class=\"d-flex flex-column\">
        <header id=\"header\" class=\"header d-flex\">
                                        <!-- LOGO -->
            <div class=\"d-flex align-items-center div-title\">
                <a href=\"{{ doc_root }}index\" class=\"logo d-flex align-items-center w-100\">
                    <img src=\"{{ doc_root }}img/liquimet_logo.jpg\" class=\"img-logo my-auto\" alt=\"\">
                    <span></span>
                    <h3 class=\"d-none d-lg-block my-auto ms-4\" id=\"title\">Liquimet S.r.l.</h3>
                </a>
            </div>
                                        <!-- END LOGO -->

                                        <!-- NAVIGATION -->
            <ul class=\"nav nav-tabs-bordered d-flex my-auto mx-auto hstack gap-3 p-0\" id=\"navigation\">
                <li class=\"nav-item nav-justified nav-fill mx-auto my-auto\">
                    <a class=\"nav-link w-100\" href=\"{{ doc_root }}index/{{ user.id_user }}\">
                        <i class=\"bi bi-house\"></i>
                    </a>
                    
                    <li class=\"icon-divider\"> <i class=\"bi bi-chevron-double-right\" style=\"color: #0066cc\"></i> </li>
                </li>

                {% for link in navigation %}
                    
                        <li class=\"nav-item nav-justified nav-fill mx-auto my-auto\">       
                            <a class=\"nav-link w-100\" aria-controls=\"nav-platform\"
                                href=\"{{ doc_root }}category/{{ link.id_group }}/{{ link.seo }}\"
                                    {% if (group == link.id_group) %} 
                                        class=\"active\" aria-current=\"page\" 
                                    {% endif %}>
                                        {{ link.name|capitalize }}
                            </a>
                        </li>     
                        
                        {% if (link.id_group < group_count) %}            
                            <li class=\"icon-divider\"> <i class=\"bi bi-chevron-double-right\" style=\"color: #0066cc\"></i> </li>
                        {% endif %}
                    
                    
                {% endfor %}                     
            </ul>
                                        <!-- END NAVIGATION -->

                                        <!-- SEARCH BAR -->
            <div class=\"search-bar ms-auto my-auto p-1\">
                <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                    <input type=\"text\" name=\"query\" placeholder=\"Cerca\">
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
                    <li class=\"nav-item dropdown d-flex justify-content-end ms-5 mb-1\">
                        {% if (user.id_user != 0) %}
                            <a class=\"nav-link p-1 my-auto mx-1 nav-profile\" data-bs-toggle=\"dropdown\" id=\"nav-profile\"
                                href=\"{{ doc_root }}user/{{ user.id_user }}\">
                                    <span class=\"d-none d-md-block dropdown-toggle ps-2\"> {{ user.username }} </span>
                            </a>
                        {% endif %}
                                        <!-- END PROFILE ICON -->

                                        <!-- PROFILE DROPDOWN ITEMS -->
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                                <li class=\"dropdown-header\">
                                    <h5>{{ user.member }}</h5>
                                        <span>{{ user.role|capitalize }} </span>
                                </li>
            
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex justify-content-center\" 
                                        href=\"{{ doc_root }}user/{{ user.id_user }}\">
                                        <span> Profilo </span>
                                    </a>
                                </li>
            
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>
    
                                <li>
                                    <a class=\"dropdown-item d-flex justify-content-center\" href=\"#\">
                                        <span>Impostazioni</span>
                                    </a>
                                </li>
    
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
                    </ul>
            </nav>                   
        </header>  
    
        {% block content %}{% endblock %}

        <footer class=\"footer mt-auto p-2\">
            <div class=\"container\">
                <span class=\"\">&copy; Liquimet Italia {{ 'now'|date('Y')}} </span>
            </div>
        </footer>
        
        {% block script %}    
            <script src=\"{{ doc_root }}js/main.js\"></script>
            
            <script>
                \$(document).ready(function(){
                    \$(\"body\").tooltip({ 
                        selector: '[data-toggle = tooltip]',
                        placement: 'right' 
                    });
                });    
    
                    /*  multi-step form  */
                \$(\"#next\").on(\"click\", function(){
                    var \$bar = \$(\".ProgressBar\");
                        if(\$bar.children(\".is-current\").length > 0){
                            \$bar.children(\".is-current\").removeClass(\"is-current\").addClass(\"is-complete\").next().addClass(\"is-current\");
                        } else{
                            \$bar.children().first().addClass(\"is-current\");
                        }
                });
                
                
                \$(document).ready(function(){
                    var current = 1, current_step, next_step, steps;
                    steps = \$(\"fieldset\").length;
                    
                    \$(\"#next\").click(function(){
                        current_step = \$(this).parent();
                    
                        if(current == '1' && \$('input[name=\"type\"]:checked').val() == '0'){
                            next_step = \$(this).parent().next();
                            ++current;
                            next_step = \$(this).parent().next();
                            ++current;
                        } else{
                            next_step = \$(this).parent().next().next();
                        }
                    
                        next_step.show();
                        current_step.hide();
                        setProgressBar(++current);
                    });
                    
                    \$(\".previous\").on(\"click\", function(){
                        var \$bar = \$(\".ProgressBar\");
                            if (\$bar.children(\".is-current\").length > 0){
                                \$bar.children(\".is-current\").removeClass(\"is-current\").prev().removeClass(\"is-complete\").addClass(\"is-current\");
                            } else{
                                \$bar.children(\".is-complete\").last().removeClass(\"is-complete\").addClass(\"is-current\");
                            }
                    });
                /*
                    \$(\".previous\").click(function(){
                        current_step = \$(this).parent();
                
                        if(current == '4' && \$('input[name=\"type\"]:checked').val() == '0'){
                            next_step = \$(this).parent().prev();
                            --current;
                        } else{
                            next_step = \$(this).parent().prev().prev();
                        }
                    
                        next_step.show();
                        current_step.hide();
                        setProgressBar(--current);
                    });
                
                    setProgressBar(current);
                        function setProgressBar(curStep){                           // change progress bar action
                            var percent = parseFloat(100 / steps) * curStep;
                            percent = percent.toFixed();
                            
                            \$(\".progress-bar\")
                                .css(\"width\", percent + \"%\")
                                .html(percent + \"%\");\t\t
                        } */
                }); 
            </script>
        {% endblock %}

    </body>
{% endblock %}
</html>", "layout.html", "C:\\wamp\\www\\liquimet\\templates\\layout.html");
    }
}
