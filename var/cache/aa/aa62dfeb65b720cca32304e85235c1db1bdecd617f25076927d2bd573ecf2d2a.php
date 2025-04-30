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

/* admin/index.html */
class __TwigTemplate_7518783b01f095e166419d27f5169f0c5e9ba6ec0dcc02bef64f36d8676944f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Liquimet ";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <main id=\"main\" class=\"main mx-2\">
        <div class=\"pagetitle\">
            <h1 class=\"mx-auto my-1 py-1\"> 
                ";
        // line 8
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "gender", [], "any", false, false, false, 8), "m"))) {
            // line 9
            echo "                    Benvenuto 
                ";
        } else {
            // line 11
            echo "                    Benvenuta 
                ";
        }
        // line 13
        echo "                    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "!
            </h1>
            
                <nav style=\"--bs-breadcrumb-divider: none\" aria-label=\"breadcrumb\" style=\"text-align: center\">
                    <ol class=\"breadcrumb p-2 mx-auto mt-3\" style=\"border: 1px solid white; border-radius: 5px; text-align: center; width: 20rem\">        
                        <li class=\"breadcrumb-item mx-auto my-auto circle\">
                            <i class=\"bi bi-arrow-right-circle\"></i>
                        </li>
                        
                        <li class=\"breadcrumb-item mx-auto my-auto\" > 
                            <a href=\"#\" class=\"pageicon\">
                                Pannello di controllo
                            </a> 
                        </li>
                        
                        <li class=\"breadcrumb-item mx-auto my-auto circle\">
                            <i class=\"bi bi-arrow-left-circle\"></i>
                        </li>
                    </ol>
                </nav>
        </div>

        <section class=\"section dashboard pt-2\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"row\">

                        <!-- Trasporti Card -->
                        <div class=\"col-xxl-4 col-md-6 py-0\">
                            <div class=\"card info-card trans-card mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-primary p-0 mb-2 mt-0\"> 
                                        TRASPORTI 
                                    </h5>

                                        <div class=\"d-flex align-items-center info-body\">
                                            <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                                <i class=\"bi bi-truck\"></i>
                                            </div>
                                            
                                            <div class=\"ps-3\">
                                                <h6> ";
        // line 54
        echo twig_escape_filter($this->env, ($context["countT"] ?? null), "html", null, true);
        echo " </h6>
                                                    <div class=\"d-flex justify-content-center\">
                                                        <span class=\"text-success pt-1 fw-bold\"> ";
        // line 56
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sum"] ?? null), 0, ".", ","), "html", null, true);
        echo " kg</span>
                                                        <span class=\"text-muted pt-1 ms-1\"> scaricati in totale </span> 
                                                    </div>    
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Trasporti Card -->

                        <!-- Trasporti Full Card -->
                        <div class=\"col-xxl-4 col-md-6 py-0\">
                            <div class=\"card info-card full-card mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-muted p-0 mb-2 mt-0\">
                                        TRASPORTI <span class=\"text-primary\">&nbsp;&#124; PIENI</span>
                                    </h5>

                                        <div class=\"d-flex align-items-center info-body\">
                                            <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                                <i class=\"bi bi-fuel-pump-fill\"></i>
                                            </div>
                                            
                                            <div class=\"ps-3\">
                                                <h6> ";
        // line 80
        echo twig_escape_filter($this->env, ($context["countFull"] ?? null), "html", null, true);
        echo " </h6>
                                                    <div class=\"d-flex justify-content-center\">
                                                        ";
        // line 82
        $context["percentFull"] = ((($context["countFull"] ?? null) / ($context["countT"] ?? null)) * 100);
        // line 83
        echo "                                                        <span class=\"text-success pt-1 fw-bold\"> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["percentFull"] ?? null), 2, ".", ","), "html", null, true);
        echo "% </span> 
                                                        <span class=\"text-muted pt-1 ms-1\">dei trasporti totali</span>
                                                    </div>    
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Trasporti Full Card -->

                        <!-- Trasporti Part Card -->
                        <div class=\"col-xxl-4 col-md-6 py-0\">
                            <div class=\"card info-card part-card mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-muted p-0 mb-2 mt-0\">
                                        TRASPORTI <span class=\"text-primary\">&nbsp;&#124; PARZIALI</span>
                                    </h5>
                                    
                                        <div class=\"d-flex align-items-center info-body\">
                                            <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                                <i class=\"bi bi-fuel-pump\"></i>
                                            </div>
                                            
                                            <div class=\"ps-3\">
                                                <h6> ";
        // line 107
        echo twig_escape_filter($this->env, ($context["countPart"] ?? null), "html", null, true);
        echo " </h6>
                                                    <div class=\"d-flex justify-content-center\">
                                                        ";
        // line 109
        $context["percentPart"] = ((($context["countPart"] ?? null) / ($context["countT"] ?? null)) * 100);
        // line 110
        echo "                                                        <span class=\"text-success pt-1 fw-bold\"> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["percentPart"] ?? null), 2, ".", ","), "html", null, true);
        echo "% </span> 
                                                        <span class=\"text-muted pt-1 ms-1\"> dei trasporti totali </span>
                                                    </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Trasporti Part Card -->

                        <!-- Recent Transports -->
                        <div class=\"col-lg-12 py-0\">
                            <div class=\"card info-card recent-card mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-secondary p-0 mb-2 mt-0\"> 
                                        TRASPORTI <span class=\"text-primary\">&nbsp;&#124; RECENTI</span>
                                    </h5>
                                    
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-sm table-hover align-middle\">
                                            <thead>
                                                <tr style=\"text-align: center\">
                                                    <th scope=\"col\"> # </th>
                                                    <th scope=\"col\"> Tipo </th>
                                                    <th scope=\"col\"> Slot ID </th>
                                                    <th scope=\"col\"> Univoco </th>
                                                    <th scope=\"col\"> Data </th>
                                                    <th scope=\"col\"> Status </th>
                                                    <th scope=\"col\"> Membro </th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                            ";
        // line 143
        $context["id"] = ($context["countT"] ?? null);
        // line 144
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recent"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo " 
                                                <tr class=\"recent-hover\" style=\"text-align: center\">
                                                    <td scope=\"row\">
                                                        ";
            // line 147
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "
                                                        ";
            // line 148
            $context["id"] = (($context["id"] ?? null) - 1);
            // line 149
            echo "                                                    </td>
                                                    <td> 
                                                        ";
            // line 151
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["r"], "type", [], "any", false, false, false, 151), 0))) {
                // line 152
                echo "                                                            F 
                                                        ";
            } else {
                // line 154
                echo "                                                            P
                                                        ";
            }
            // line 156
            echo "                                                    </td>
                                                    <td> ";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "slot", [], "any", false, false, false, 157), "html", null, true);
            echo " </td>
                                                    <td> ";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "univoco", [], "any", false, false, false, 158), "html", null, true);
            echo " </td>
                                                    <td> ";
            // line 159
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "date_load", [], "any", false, false, false, 159), "d/m/y"), "html", null, true);
            echo " <strong>&#8594;</strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "date_unload", [], "any", false, false, false, 159), "d/m/y"), "html", null, true);
            echo " </td>
                                                    <td>
                                                        <span class=\"badge rounded-pill text-bg-success p-1 m-0\"> 
                                                            <i class=\"bi bi-file-earmark-plus\"></i>
                                                        </span>
                                                            <strong>&#8594;</strong>
                                                        ";
            // line 165
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "created", [], "any", false, false, false, 165), "d/m/y"), "html", null, true);
            echo "
                                                    </td>
                                                    <td> ";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "username", [], "any", false, false, false, 167), "html", null, true);
            echo "</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                                            </tbody>
                                        </table>
                                    </div>     
                                </div>
                            </div>
                        </div>
                        <!-- End Recent Transports -->
                    </div>
                </div>
                
                <!-- Right Side Columns -->
                <div class=\"col-lg-4\">

                    <!-- Profilo Card -->
                    <div class=\"row\">
                        <div class=\"col-lg-12 py-0 mx-auto\">
                            <div class=\"card info-card profile-card mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-primary p-0 mb-2 mt-0\">
                                        PROFILO
                                    </h5>

                                    ";
        // line 192
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id_user", [], "any", false, false, false, 192), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 192)))) {
            // line 193
            echo "                                    <div class=\"row mx-auto p-0\">
                                        <div class=\"col-7 mx-auto my-0 p-1 profile-body\">
                                            <div class=\"col align-middle mx-auto\">
                                                <i class=\"bi bi-person me-1\"></i>
                                                    <span class=\"text-dark\"> ";
            // line 197
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "member", [], "any", false, false, false, 197)), "html", null, true);
            echo " </span>
                                            </div>
        
                                            <div class=\"col align-middle mx-auto\">
                                                <i class=\"bi bi-envelope me-1\"></i>
                                                    ";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 202), "html", null, true);
            echo "
                                            </div>
        
                                            <div class=\"col align-middle mx-auto\">
                                                <i class=\"bi bi-info-square me-1\"></i>
                                                    ";
            // line 207
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 207)), "html", null, true);
            echo "
                                            </div>
        
                                            <div class=\"col align-middle mx-auto\">
                                                <i class=\"bi bi-clock-history me-1\"></i>
                                                    ";
            // line 212
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "joined", [], "any", false, false, false, 212), "d/m/Y", "Europe/Rome"), "html", null, true);
            echo "
                                            </div>
                                        </div>

                                        <div class=\"col-4 m-auto\" style=\"text-align: center\">
                                            <img src=\"";
            // line 217
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "img/profile-avatar-light.jpg\" alt=\"Profilo\" class=\"rounded-circle mb-0\">
        
                                            <h4 class=\"card-title text-dark mb-1\"> ";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 219), "html", null, true);
            echo " </h4>
                                        </div>
                                    </div>
                                    ";
        }
        // line 223
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Profilo Card -->

                    <!-- Utenti Card -->
                    <div class=\"row\">
                        <div class=\"col-lg-12 py-0 mx-auto\">
                            <div class=\"card info-card users-card mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-primary p-0 mb-2 mt-0\">
                                        UTENTI
                                    </h5>
                                    
                                        <div class=\"d-flex align-items-center mx-auto p-0 users-body\">
                                            <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                                <i class=\"bi bi-people\"></i>
                                            </div>
                                            
                                            <div class=\"ps-3 me-2\">
                                                <h6> ";
        // line 244
        echo twig_escape_filter($this->env, ($context["countU"] ?? null), "html", null, true);
        echo " </h6>
                                            </div>

                                            <div class=\"d-flex justify-content-center py-0 mx-auto\">
                                                <ul class=\"list-group list-group-flush mx-auto\">
                                                    <li class=\"list-group-item border-right-0\">
                                                        <span class=\"text-dark pt-1 fw-bold\"> ";
        // line 250
        echo twig_escape_filter($this->env, ($context["admins"] ?? null), "html", null, true);
        echo " </span> 
                                                        <span class=\"text-warning pt-2 ps-1\" style=\"font-weight: 600\"> 
                                                            ADMIN
                                                        </span>
                                                    </li>
                                                    <li class=\"list-group-item border-right-0\">
                                                        <span class=\"text-dark pt-1 fw-bold\"> ";
        // line 256
        echo twig_escape_filter($this->env, ($context["members"] ?? null), "html", null, true);
        echo " </span> 
                                                        <span class=\"text-success pt-2 ps-1\" style=\"font-weight: 600\"> 
                                                            ";
        // line 258
        if ((0 === twig_compare(($context["members"] ?? null), 1))) {
            // line 259
            echo "                                                                MEMBRO
                                                            ";
        } else {
            // line 261
            echo "                                                                MEMBRI 
                                                            ";
        }
        // line 263
        echo "                                                        </span>
                                                    </li>
                                                    <li class=\"list-group-item border-right-0\">
                                                        <span class=\"text-dark pt-1 fw-bold\"> ";
        // line 266
        echo twig_escape_filter($this->env, ($context["offlines"] ?? null), "html", null, true);
        echo " </span> 
                                                        <span class=\"text-danger pt-2 ps-1\" style=\"font-weight: 600\"> 
                                                            ";
        // line 268
        if ((0 === twig_compare(($context["offlines"] ?? null), 1))) {
            // line 269
            echo "                                                                SOSPESO
                                                            ";
        } else {
            // line 271
            echo "                                                                SOSPESI 
                                                            ";
        }
        // line 273
        echo "                                                        </span>
                                                    </li>
                                                </ul>

                                                <ul class=\"list-group mx-auto\">
                                                    <li class=\"list-group-item border-0\">
                                                        <i class=\"bi bi-arrow-right-short\"></i>
                                                    </li>
                                                    <li class=\"list-group-item border-0\">
                                                        <i class=\"bi bi-arrow-right-short\"></i>
                                                    </li>
                                                    <li class=\"list-group-item border-0\">
                                                        <i class=\"bi bi-arrow-right-short\"></i>
                                                    </li>
                                                </ul>

                                                <ul class=\"list-group list-group-flush mx-auto\" style=\"text-align: center\">
                                                    <li class=\"list-group-item border-left-0\">
                                                        ";
        // line 291
        $context["pAdmin"] = ((($context["admins"] ?? null) / ($context["countU"] ?? null)) * 100);
        // line 292
        echo "                                                        <span class=\"text-dark pt-1\" style=\"font-weight: 600\"> ";
        echo twig_escape_filter($this->env, ($context["pAdmin"] ?? null), "html", null, true);
        echo "% </span> 
                                                        <span class=\"text-muted pt-2 ps-1\"> degli utenti </span>
                                                    </li>
                                                    <li class=\"list-group-item border-left-0\">
                                                        ";
        // line 296
        $context["pMember"] = ((($context["members"] ?? null) / ($context["countU"] ?? null)) * 100);
        // line 297
        echo "                                                        <span class=\"text-dark pt-1\" style=\"font-weight: 600\"> ";
        echo twig_escape_filter($this->env, ($context["pMember"] ?? null), "html", null, true);
        echo "% </span> 
                                                        <span class=\"text-muted pt-2 ps-1\"> degli utenti </span>
                                                    </li>
                                                    <li class=\"list-group-item border-left-0\">
                                                        ";
        // line 301
        $context["pOffline"] = ((($context["offlines"] ?? null) / ($context["countU"] ?? null)) * 100);
        // line 302
        echo "                                                        <span class=\"text-dark pt-1\" style=\"font-weight: 600\"> ";
        echo twig_escape_filter($this->env, ($context["pOffline"] ?? null), "html", null, true);
        echo " </span> 
                                                        <span class=\"text-muted pt-2 ps-1\"> degli utenti </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Utenti Card -->
                </div>
                <!-- End Right Side Columns -->
            </div>
        </section>
    </main>
<!-- 
    <script>
        let w = window.innerWidth;
        let h = window.innerHeight;
        
        document.getElementById(\"demo\").innerHTML = \"Width: \" + w + \"<br>Height: \" + h;
    </script>
-->
";
    }

    public function getTemplateName()
    {
        return "admin/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 302,  488 => 301,  480 => 297,  478 => 296,  470 => 292,  468 => 291,  448 => 273,  444 => 271,  440 => 269,  438 => 268,  433 => 266,  428 => 263,  424 => 261,  420 => 259,  418 => 258,  413 => 256,  404 => 250,  395 => 244,  372 => 223,  365 => 219,  360 => 217,  352 => 212,  344 => 207,  336 => 202,  328 => 197,  322 => 193,  320 => 192,  296 => 170,  287 => 167,  282 => 165,  271 => 159,  267 => 158,  263 => 157,  260 => 156,  256 => 154,  252 => 152,  250 => 151,  246 => 149,  244 => 148,  240 => 147,  231 => 144,  229 => 143,  192 => 110,  190 => 109,  185 => 107,  157 => 83,  155 => 82,  150 => 80,  123 => 56,  118 => 54,  73 => 13,  69 => 11,  65 => 9,  63 => 8,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}
{% block title %} Liquimet {% endblock %}

{% block content %}
    <main id=\"main\" class=\"main mx-2\">
        <div class=\"pagetitle\">
            <h1 class=\"mx-auto my-1 py-1\"> 
                {% if session.gender == 'm' %}
                    Benvenuto 
                {% else %}
                    Benvenuta 
                {% endif %}
                    {{ session.name }}!
            </h1>
            
                <nav style=\"--bs-breadcrumb-divider: none\" aria-label=\"breadcrumb\" style=\"text-align: center\">
                    <ol class=\"breadcrumb p-2 mx-auto mt-3\" style=\"border: 1px solid white; border-radius: 5px; text-align: center; width: 20rem\">        
                        <li class=\"breadcrumb-item mx-auto my-auto circle\">
                            <i class=\"bi bi-arrow-right-circle\"></i>
                        </li>
                        
                        <li class=\"breadcrumb-item mx-auto my-auto\" > 
                            <a href=\"#\" class=\"pageicon\">
                                Pannello di controllo
                            </a> 
                        </li>
                        
                        <li class=\"breadcrumb-item mx-auto my-auto circle\">
                            <i class=\"bi bi-arrow-left-circle\"></i>
                        </li>
                    </ol>
                </nav>
        </div>

        <section class=\"section dashboard pt-2\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"row\">

                        <!-- Trasporti Card -->
                        <div class=\"col-xxl-4 col-md-6 py-0\">
                            <div class=\"card info-card trans-card mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-primary p-0 mb-2 mt-0\"> 
                                        TRASPORTI 
                                    </h5>

                                        <div class=\"d-flex align-items-center info-body\">
                                            <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                                <i class=\"bi bi-truck\"></i>
                                            </div>
                                            
                                            <div class=\"ps-3\">
                                                <h6> {{ countT }} </h6>
                                                    <div class=\"d-flex justify-content-center\">
                                                        <span class=\"text-success pt-1 fw-bold\"> {{ sum|number_format(0,'.',',') }} kg</span>
                                                        <span class=\"text-muted pt-1 ms-1\"> scaricati in totale </span> 
                                                    </div>    
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Trasporti Card -->

                        <!-- Trasporti Full Card -->
                        <div class=\"col-xxl-4 col-md-6 py-0\">
                            <div class=\"card info-card full-card mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-muted p-0 mb-2 mt-0\">
                                        TRASPORTI <span class=\"text-primary\">&nbsp;&#124; PIENI</span>
                                    </h5>

                                        <div class=\"d-flex align-items-center info-body\">
                                            <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                                <i class=\"bi bi-fuel-pump-fill\"></i>
                                            </div>
                                            
                                            <div class=\"ps-3\">
                                                <h6> {{ countFull }} </h6>
                                                    <div class=\"d-flex justify-content-center\">
                                                        {% set percentFull = ((countFull / countT) * 100) %}
                                                        <span class=\"text-success pt-1 fw-bold\"> {{ percentFull|number_format(2,'.',',') }}% </span> 
                                                        <span class=\"text-muted pt-1 ms-1\">dei trasporti totali</span>
                                                    </div>    
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Trasporti Full Card -->

                        <!-- Trasporti Part Card -->
                        <div class=\"col-xxl-4 col-md-6 py-0\">
                            <div class=\"card info-card part-card mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-muted p-0 mb-2 mt-0\">
                                        TRASPORTI <span class=\"text-primary\">&nbsp;&#124; PARZIALI</span>
                                    </h5>
                                    
                                        <div class=\"d-flex align-items-center info-body\">
                                            <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                                <i class=\"bi bi-fuel-pump\"></i>
                                            </div>
                                            
                                            <div class=\"ps-3\">
                                                <h6> {{ countPart }} </h6>
                                                    <div class=\"d-flex justify-content-center\">
                                                        {% set percentPart = ((countPart / countT) * 100) %}
                                                        <span class=\"text-success pt-1 fw-bold\"> {{ percentPart|number_format(2,'.',',') }}% </span> 
                                                        <span class=\"text-muted pt-1 ms-1\"> dei trasporti totali </span>
                                                    </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Trasporti Part Card -->

                        <!-- Recent Transports -->
                        <div class=\"col-lg-12 py-0\">
                            <div class=\"card info-card recent-card mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-secondary p-0 mb-2 mt-0\"> 
                                        TRASPORTI <span class=\"text-primary\">&nbsp;&#124; RECENTI</span>
                                    </h5>
                                    
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-sm table-hover align-middle\">
                                            <thead>
                                                <tr style=\"text-align: center\">
                                                    <th scope=\"col\"> # </th>
                                                    <th scope=\"col\"> Tipo </th>
                                                    <th scope=\"col\"> Slot ID </th>
                                                    <th scope=\"col\"> Univoco </th>
                                                    <th scope=\"col\"> Data </th>
                                                    <th scope=\"col\"> Status </th>
                                                    <th scope=\"col\"> Membro </th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                            {% set id = countT %}
                                            {% for r in recent %} 
                                                <tr class=\"recent-hover\" style=\"text-align: center\">
                                                    <td scope=\"row\">
                                                        {{ id }}
                                                        {% set id = id - 1 %}
                                                    </td>
                                                    <td> 
                                                        {% if r.type == 0 %}
                                                            F 
                                                        {% else %}
                                                            P
                                                        {% endif %}
                                                    </td>
                                                    <td> {{ r.slot }} </td>
                                                    <td> {{ r.univoco }} </td>
                                                    <td> {{ r.date_load|date(\"d/m/y\") }} <strong>&#8594;</strong> {{ r.date_unload|date(\"d/m/y\") }} </td>
                                                    <td>
                                                        <span class=\"badge rounded-pill text-bg-success p-1 m-0\"> 
                                                            <i class=\"bi bi-file-earmark-plus\"></i>
                                                        </span>
                                                            <strong>&#8594;</strong>
                                                        {{ r.created|date(\"d/m/y\") }}
                                                    </td>
                                                    <td> {{ r.username }}</td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>     
                                </div>
                            </div>
                        </div>
                        <!-- End Recent Transports -->
                    </div>
                </div>
                
                <!-- Right Side Columns -->
                <div class=\"col-lg-4\">

                    <!-- Profilo Card -->
                    <div class=\"row\">
                        <div class=\"col-lg-12 py-0 mx-auto\">
                            <div class=\"card info-card profile-card mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-primary p-0 mb-2 mt-0\">
                                        PROFILO
                                    </h5>

                                    {% if (session.id_user == user.id_user) %}
                                    <div class=\"row mx-auto p-0\">
                                        <div class=\"col-7 mx-auto my-0 p-1 profile-body\">
                                            <div class=\"col align-middle mx-auto\">
                                                <i class=\"bi bi-person me-1\"></i>
                                                    <span class=\"text-dark\"> {{ user.member|upper }} </span>
                                            </div>
        
                                            <div class=\"col align-middle mx-auto\">
                                                <i class=\"bi bi-envelope me-1\"></i>
                                                    {{ user.email }}
                                            </div>
        
                                            <div class=\"col align-middle mx-auto\">
                                                <i class=\"bi bi-info-square me-1\"></i>
                                                    {{ user.role|capitalize }}
                                            </div>
        
                                            <div class=\"col align-middle mx-auto\">
                                                <i class=\"bi bi-clock-history me-1\"></i>
                                                    {{ user.joined|date('d/m/Y', 'Europe/Rome') }}
                                            </div>
                                        </div>

                                        <div class=\"col-4 m-auto\" style=\"text-align: center\">
                                            <img src=\"{{ doc_root }}img/profile-avatar-light.jpg\" alt=\"Profilo\" class=\"rounded-circle mb-0\">
        
                                            <h4 class=\"card-title text-dark mb-1\"> {{ user.username }} </h4>
                                        </div>
                                    </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Profilo Card -->

                    <!-- Utenti Card -->
                    <div class=\"row\">
                        <div class=\"col-lg-12 py-0 mx-auto\">
                            <div class=\"card info-card users-card mb-3\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-primary p-0 mb-2 mt-0\">
                                        UTENTI
                                    </h5>
                                    
                                        <div class=\"d-flex align-items-center mx-auto p-0 users-body\">
                                            <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                                <i class=\"bi bi-people\"></i>
                                            </div>
                                            
                                            <div class=\"ps-3 me-2\">
                                                <h6> {{ countU }} </h6>
                                            </div>

                                            <div class=\"d-flex justify-content-center py-0 mx-auto\">
                                                <ul class=\"list-group list-group-flush mx-auto\">
                                                    <li class=\"list-group-item border-right-0\">
                                                        <span class=\"text-dark pt-1 fw-bold\"> {{ admins }} </span> 
                                                        <span class=\"text-warning pt-2 ps-1\" style=\"font-weight: 600\"> 
                                                            ADMIN
                                                        </span>
                                                    </li>
                                                    <li class=\"list-group-item border-right-0\">
                                                        <span class=\"text-dark pt-1 fw-bold\"> {{ members }} </span> 
                                                        <span class=\"text-success pt-2 ps-1\" style=\"font-weight: 600\"> 
                                                            {% if members == 1 %}
                                                                MEMBRO
                                                            {% else %}
                                                                MEMBRI 
                                                            {% endif %}
                                                        </span>
                                                    </li>
                                                    <li class=\"list-group-item border-right-0\">
                                                        <span class=\"text-dark pt-1 fw-bold\"> {{ offlines }} </span> 
                                                        <span class=\"text-danger pt-2 ps-1\" style=\"font-weight: 600\"> 
                                                            {% if offlines == 1 %}
                                                                SOSPESO
                                                            {% else %}
                                                                SOSPESI 
                                                            {% endif %}
                                                        </span>
                                                    </li>
                                                </ul>

                                                <ul class=\"list-group mx-auto\">
                                                    <li class=\"list-group-item border-0\">
                                                        <i class=\"bi bi-arrow-right-short\"></i>
                                                    </li>
                                                    <li class=\"list-group-item border-0\">
                                                        <i class=\"bi bi-arrow-right-short\"></i>
                                                    </li>
                                                    <li class=\"list-group-item border-0\">
                                                        <i class=\"bi bi-arrow-right-short\"></i>
                                                    </li>
                                                </ul>

                                                <ul class=\"list-group list-group-flush mx-auto\" style=\"text-align: center\">
                                                    <li class=\"list-group-item border-left-0\">
                                                        {% set pAdmin = ((admins / countU) * 100) %}
                                                        <span class=\"text-dark pt-1\" style=\"font-weight: 600\"> {{ pAdmin }}% </span> 
                                                        <span class=\"text-muted pt-2 ps-1\"> degli utenti </span>
                                                    </li>
                                                    <li class=\"list-group-item border-left-0\">
                                                        {% set pMember = ((members / countU) * 100) %}
                                                        <span class=\"text-dark pt-1\" style=\"font-weight: 600\"> {{ pMember }}% </span> 
                                                        <span class=\"text-muted pt-2 ps-1\"> degli utenti </span>
                                                    </li>
                                                    <li class=\"list-group-item border-left-0\">
                                                        {% set pOffline = ((offlines / countU) * 100) %}
                                                        <span class=\"text-dark pt-1\" style=\"font-weight: 600\"> {{ pOffline }} </span> 
                                                        <span class=\"text-muted pt-2 ps-1\"> degli utenti </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Utenti Card -->
                </div>
                <!-- End Right Side Columns -->
            </div>
        </section>
    </main>
<!-- 
    <script>
        let w = window.innerWidth;
        let h = window.innerHeight;
        
        document.getElementById(\"demo\").innerHTML = \"Width: \" + w + \"<br>Height: \" + h;
    </script>
-->
{% endblock %}", "admin/index.html", "D:\\wamp\\www\\liquimet\\templates\\admin\\index.html");
    }
}
