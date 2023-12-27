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

/* admin/user.html */
class __TwigTemplate_24e6efd380ee40194a3ae4709dd152b0d7b4d073e17cae8303de3d89896f2e99 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/user.html", 1);
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
        echo "    <main id=\"main\" class=\"main\">
        <div class=\"pagetitle\">
            <h1> Benvenuto/a ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "! </h1>
            
                <nav style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-flex align-items-center p-1\" style=\"--bs-breadcrumb-divider-color: white\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "admin/index/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 12), "html", null, true);
        echo "\" class=\"pageicon\" style=\"font-size: 18px\"> 
                                <i class=\"bi bi-house\"></i> 
                            </a>
                        </li>

                        <li class=\"breadcrumb-item active\"> 
                            <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "admin/user/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 18), "html", null, true);
        echo "\" class=\"pageicon\">
                                Pannello di controllo
                            </a> 
                        </li>
                    </ol>
                </nav>
        </div>

        <section class=\"section dashboard\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"row\">

                        <!-- Trasporti Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card trans-card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-primary p-0\">TRASPORTI</h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-truck\"></i>
                                        </div>
                                        
                                        <div class=\"ps-3\">
                                            <h6> ";
        // line 43
        echo twig_escape_filter($this->env, ($context["countT"] ?? null), "html", null, true);
        echo " </h6>
                                                <span class=\"text-success small pt-1 fw-bold\"> % </span> 
                                                <span class=\"text-muted small pt-2 ps-1\"> quantita scaricate </span> 
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Trasporti Card -->

                        <!-- Trasporti Full Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card full-card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-muted p-0\">
                                        TRASPORTI <span class=\"text-primary\" style=\"font-weight: 600\">| FULL</span>
                                    </h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-fuel-pump-fill\"></i>
                                        </div>
                                        
                                        <div class=\"ps-3\">
                                            <h6> ";
        // line 68
        echo twig_escape_filter($this->env, ($context["countFull"] ?? null), "html", null, true);
        echo " </h6>
                                                ";
        // line 69
        $context["percentFull"] = ((($context["countFull"] ?? null) / ($context["countT"] ?? null)) * 100);
        // line 70
        echo "                                                    <span class=\"text-success small pt-1 fw-bold\"> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["percentFull"] ?? null), 2, ".", ","), "html", null, true);
        echo "% </span> 
                                                    <span class=\"text-muted small pt-2 ps-1\">dei trasporti totali</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Trasporti Full Card -->

                        <!-- Trasporti Part Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card part-card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-muted p-0\">
                                        TRASPORTI <span class=\"text-primary\">| PART</span>
                                    </h5>
                                    
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                                <i class=\"bi bi-fuel-pump\"></i>
                                            </div>
                                            
                                            <div class=\"ps-3\">
                                                <h6> ";
        // line 93
        echo twig_escape_filter($this->env, ($context["countPart"] ?? null), "html", null, true);
        echo " </h6>
                                                    ";
        // line 94
        $context["percentPart"] = ((($context["countPart"] ?? null) / ($context["countT"] ?? null)) * 100);
        // line 95
        echo "                                                        <span class=\"text-success small pt-1 fw-bold\"> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["percentPart"] ?? null), 2, ".", ","), "html", null, true);
        echo "% </span> 
                                                        <span class=\"text-muted small pt-2 ps-1\">dei trasporti</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Trasporti Part Card -->

                        <!-- Recent Transports -->
                        <div class=\"col-12\">
                            <div class=\"card recent-trans overflow-auto\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-primary mb-3\" style=\"font-weight: 600\"> 
                                        TRASPORTI RECENTI
                                    </h5>
                                    
                                        <table class=\"table table-borderless datatable\">
                                            <thead>
                                                <tr style=\"text-align: center\">
                                                    <th scope=\"col\"> # </th>
                                                    <th scope=\"col\"> Slot ID </th>
                                                    <th scope=\"col\"> Numero CMR </th>
                                                    <th scope=\"col\"> Status </th>
                                                    <th scope=\"col\"> Data </th>
                                                    <th scope=\"col\"> Membro </th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["trans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recent"]) {
            // line 126
            echo "                                                <tr style=\"text-align: center\">
                                                    <th scope=\"row\">
                                                        <a href=\"#\" class=\"text-dark\"> ";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "id_transport", [], "any", false, false, false, 128), "html", null, true);
            echo " </a>
                                                    </th>
                                                    <td> ";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "slot", [], "any", false, false, false, 130), "html", null, true);
            echo " </td>
                                                    <td>
                                                        <a href=\"#\" class=\"text-dark\"> ";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "cmr", [], "any", false, false, false, 132), "html", null, true);
            echo " </a>
                                                    </td>
                                                    <td>
                                                        <span class=\"badge bg-success\"> Created </span>
                                                    </td>
                                                    <td> ";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "created", [], "any", false, false, false, 137), "html", null, true);
            echo "</td>
                                                    <td> ";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "username", [], "any", false, false, false, 138), "html", null, true);
            echo "</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                        <!-- End Recent Transports -->
                    </div>
                </div>
                
                <!-- Right Side Columns -->
                <div class=\"col-lg-4\">
                    <div class=\"row\">

                        <!-- Profilo Card -->
                        <div class=\"col\">
                            <div class=\"card profile-card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-primary p-0\">
                                        PROFILO
                                    </h5>

                                    ";
        // line 162
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 162)) {
            // line 163
            echo "                                    <div class=\"row justify-content-md-center m-auto\">
                                        <div class=\"col-7 m-auto p-2\">
                                            <div class=\"col align-middle mx-auto mb-1\" style=\"text-align: center\">
                                                <span class=\"text-dark\" style=\"font-size: 1.2rem\">
                                                    <i class=\"bi bi-person me-1\" style=\"font-size: 1.2rem; color: #71bf44\"></i>
                                                    ";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "member", [], "any", false, false, false, 168), "html", null, true);
            echo "
                                                </span>
                                            </div>
        
                                            <div class=\"col align-middle mx-auto mb-1\" style=\"text-align: center\">
                                                <span class=\"text-dark\" style=\"font-size: 1.2rem\">
                                                    <i class=\"bi bi-envelope me-1\" style=\"font-size: 1.2rem; color: #71bf44\"></i>
                                                    ";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 175), "html", null, true);
            echo "
                                                </span>
                                                
                                            </div>
        
                                            <div class=\"col align-middle mx-auto mb-1\" style=\"text-align: center\">
                                                <span class=\"text-dark\" style=\"font-size: 1.2rem\">
                                                    <i class=\"bi bi-info-square me-1\" style=\"font-size: 1.2rem; color: #71bf44\"></i>
                                                    ";
            // line 183
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 183)), "html", null, true);
            echo "
                                                </span>
                                            </div>
        
                                            <div class=\"col align-middle mx-auto mb-1\" style=\"text-align: center\">
                                                <span class=\"text-dark\" style=\"font-size: 1.2rem\">
                                                    <i class=\"bi bi-clock-history me-1\" style=\"font-size: 1.2rem; color: #71bf44\"></i>
                                                    ";
            // line 190
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "joined", [], "any", false, false, false, 190), "d/m/Y", "Europe/Rome"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>

                                        <div class=\"col-4 m-auto\" style=\"text-align: center\">
                                            <img src=\"";
            // line 196
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "img/profile-avatar-light.jpg\" alt=\"Profilo\" class=\"rounded-circle mb-0\">
        
                                            <h4 class=\"card-title mb-1\"> ";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 198), "html", null, true);
            echo " </h4>
                                        </div>
                                    </div>
                                    ";
        }
        // line 202
        echo "                                </div>
                            </div>
                        </div>
                        <!-- End Profilo Card -->  
                    </div>

                    <!-- Utenti Card -->
                    <div class=\"col-12 p-0\">
                        <div class=\"card info-card part-card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-primary p-0\">
                                    UTENTI
                                </h5>
                                
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-people\"></i>
                                        </div>
                                        
                                        <div class=\"ps-3 ms-2\">
                                            <h6> ";
        // line 222
        echo twig_escape_filter($this->env, ($context["countU"] ?? null), "html", null, true);
        echo " </h6>
                                        </div>

                                        <div class=\"d-flex justify-content-center py-1 mx-auto\">
                                            <ul class=\"list-group list-group-flush mx-auto\">
                                                <li class=\"list-group-item border-right-0\">
                                                    <span class=\"text-dark pt-1 fw-bold\"> ";
        // line 228
        echo twig_escape_filter($this->env, ($context["admins"] ?? null), "html", null, true);
        echo " </span> 
                                                    <span class=\"text-warning pt-2 ps-1\" style=\"font-weight: 600\"> Admin </span>
                                                </li>
                                                <li class=\"list-group-item border-right-0\">
                                                    <span class=\"text-dark pt-1 fw-bold\"> ";
        // line 232
        echo twig_escape_filter($this->env, ($context["members"] ?? null), "html", null, true);
        echo " </span> 
                                                    <span class=\"text-success pt-2 ps-1\" style=\"font-weight: 600\"> Membri </span>
                                                </li>
                                                <li class=\"list-group-item border-right-0\">
                                                    <span class=\"text-dark pt-1 fw-bold\"> ";
        // line 236
        echo twig_escape_filter($this->env, ($context["offlines"] ?? null), "html", null, true);
        echo " </span> 
                                                    <span class=\"text-danger pt-2 ps-1\" style=\"font-weight: 600\"> Sospesi </span>
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
        // line 255
        $context["pAdmin"] = ((($context["admins"] ?? null) / ($context["countU"] ?? null)) * 100);
        // line 256
        echo "                                                    <span class=\"text-dark pt-1\" style=\"font-weight: 600\"> ";
        echo twig_escape_filter($this->env, ($context["pAdmin"] ?? null), "html", null, true);
        echo "% </span> 
                                                    <span class=\"text-muted pt-2 ps-1\"> degli utenti </span>
                                                </li>
                                                <li class=\"list-group-item border-left-0\">
                                                    ";
        // line 260
        $context["pMember"] = ((($context["members"] ?? null) / ($context["countU"] ?? null)) * 100);
        // line 261
        echo "                                                    <span class=\"text-dark pt-1\" style=\"font-weight: 600\"> ";
        echo twig_escape_filter($this->env, ($context["pMember"] ?? null), "html", null, true);
        echo "% </span> 
                                                    <span class=\"text-muted pt-2 ps-1\"> degli utenti </span>
                                                </li>
                                                <li class=\"list-group-item border-left-0\">
                                                    ";
        // line 265
        $context["pOffline"] = ((($context["offlines"] ?? null) / ($context["countU"] ?? null)) * 100);
        // line 266
        echo "                                                    <span class=\"text-dark pt-1\" style=\"font-weight: 600\"> ";
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
                    <!-- End Utenti Card -->
                </div>
                <!-- End Right Side Columns -->
            </div>
        </section>
    </main>
";
    }

    public function getTemplateName()
    {
        return "admin/user.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 266,  422 => 265,  414 => 261,  412 => 260,  404 => 256,  402 => 255,  380 => 236,  373 => 232,  366 => 228,  357 => 222,  335 => 202,  328 => 198,  323 => 196,  314 => 190,  304 => 183,  293 => 175,  283 => 168,  276 => 163,  274 => 162,  251 => 141,  242 => 138,  238 => 137,  230 => 132,  225 => 130,  220 => 128,  216 => 126,  212 => 125,  178 => 95,  176 => 94,  172 => 93,  145 => 70,  143 => 69,  139 => 68,  111 => 43,  81 => 18,  70 => 12,  62 => 7,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}
{% block title %} Liquimet {% endblock %}

{% block content %}
    <main id=\"main\" class=\"main\">
        <div class=\"pagetitle\">
            <h1> Benvenuto/a {{ user.name }}! </h1>
            
                <nav style=\"--bs-breadcrumb-divider: '>';\" aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-flex align-items-center p-1\" style=\"--bs-breadcrumb-divider-color: white\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"{{ doc_root }}admin/index/{{ user.id_user }}\" class=\"pageicon\" style=\"font-size: 18px\"> 
                                <i class=\"bi bi-house\"></i> 
                            </a>
                        </li>

                        <li class=\"breadcrumb-item active\"> 
                            <a href=\"{{ doc_root }}admin/user/{{ user.id_user }}\" class=\"pageicon\">
                                Pannello di controllo
                            </a> 
                        </li>
                    </ol>
                </nav>
        </div>

        <section class=\"section dashboard\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"row\">

                        <!-- Trasporti Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card trans-card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-primary p-0\">TRASPORTI</h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-truck\"></i>
                                        </div>
                                        
                                        <div class=\"ps-3\">
                                            <h6> {{ countT }} </h6>
                                                <span class=\"text-success small pt-1 fw-bold\"> % </span> 
                                                <span class=\"text-muted small pt-2 ps-1\"> quantita scaricate </span> 
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Trasporti Card -->

                        <!-- Trasporti Full Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card full-card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-muted p-0\">
                                        TRASPORTI <span class=\"text-primary\" style=\"font-weight: 600\">| FULL</span>
                                    </h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-fuel-pump-fill\"></i>
                                        </div>
                                        
                                        <div class=\"ps-3\">
                                            <h6> {{ countFull }} </h6>
                                                {% set percentFull = ((countFull / countT) * 100) %}
                                                    <span class=\"text-success small pt-1 fw-bold\"> {{ percentFull|number_format(2,'.',',') }}% </span> 
                                                    <span class=\"text-muted small pt-2 ps-1\">dei trasporti totali</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Trasporti Full Card -->

                        <!-- Trasporti Part Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card part-card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-muted p-0\">
                                        TRASPORTI <span class=\"text-primary\">| PART</span>
                                    </h5>
                                    
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                                <i class=\"bi bi-fuel-pump\"></i>
                                            </div>
                                            
                                            <div class=\"ps-3\">
                                                <h6> {{ countPart }} </h6>
                                                    {% set percentPart = ((countPart / countT) * 100) %}
                                                        <span class=\"text-success small pt-1 fw-bold\"> {{ percentPart|number_format(2,'.',',') }}% </span> 
                                                        <span class=\"text-muted small pt-2 ps-1\">dei trasporti</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Trasporti Part Card -->

                        <!-- Recent Transports -->
                        <div class=\"col-12\">
                            <div class=\"card recent-trans overflow-auto\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-primary mb-3\" style=\"font-weight: 600\"> 
                                        TRASPORTI RECENTI
                                    </h5>
                                    
                                        <table class=\"table table-borderless datatable\">
                                            <thead>
                                                <tr style=\"text-align: center\">
                                                    <th scope=\"col\"> # </th>
                                                    <th scope=\"col\"> Slot ID </th>
                                                    <th scope=\"col\"> Numero CMR </th>
                                                    <th scope=\"col\"> Status </th>
                                                    <th scope=\"col\"> Data </th>
                                                    <th scope=\"col\"> Membro </th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                            {% for recent in trans %}
                                                <tr style=\"text-align: center\">
                                                    <th scope=\"row\">
                                                        <a href=\"#\" class=\"text-dark\"> {{ recent.id_transport }} </a>
                                                    </th>
                                                    <td> {{ recent.slot }} </td>
                                                    <td>
                                                        <a href=\"#\" class=\"text-dark\"> {{ recent.cmr }} </a>
                                                    </td>
                                                    <td>
                                                        <span class=\"badge bg-success\"> Created </span>
                                                    </td>
                                                    <td> {{ recent.created }}</td>
                                                    <td> {{ recent.username }}</td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                        <!-- End Recent Transports -->
                    </div>
                </div>
                
                <!-- Right Side Columns -->
                <div class=\"col-lg-4\">
                    <div class=\"row\">

                        <!-- Profilo Card -->
                        <div class=\"col\">
                            <div class=\"card profile-card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title text-primary p-0\">
                                        PROFILO
                                    </h5>

                                    {% if user.id_user %}
                                    <div class=\"row justify-content-md-center m-auto\">
                                        <div class=\"col-7 m-auto p-2\">
                                            <div class=\"col align-middle mx-auto mb-1\" style=\"text-align: center\">
                                                <span class=\"text-dark\" style=\"font-size: 1.2rem\">
                                                    <i class=\"bi bi-person me-1\" style=\"font-size: 1.2rem; color: #71bf44\"></i>
                                                    {{ user.member }}
                                                </span>
                                            </div>
        
                                            <div class=\"col align-middle mx-auto mb-1\" style=\"text-align: center\">
                                                <span class=\"text-dark\" style=\"font-size: 1.2rem\">
                                                    <i class=\"bi bi-envelope me-1\" style=\"font-size: 1.2rem; color: #71bf44\"></i>
                                                    {{ user.email }}
                                                </span>
                                                
                                            </div>
        
                                            <div class=\"col align-middle mx-auto mb-1\" style=\"text-align: center\">
                                                <span class=\"text-dark\" style=\"font-size: 1.2rem\">
                                                    <i class=\"bi bi-info-square me-1\" style=\"font-size: 1.2rem; color: #71bf44\"></i>
                                                    {{ user.role|capitalize }}
                                                </span>
                                            </div>
        
                                            <div class=\"col align-middle mx-auto mb-1\" style=\"text-align: center\">
                                                <span class=\"text-dark\" style=\"font-size: 1.2rem\">
                                                    <i class=\"bi bi-clock-history me-1\" style=\"font-size: 1.2rem; color: #71bf44\"></i>
                                                    {{ user.joined|date('d/m/Y', 'Europe/Rome') }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class=\"col-4 m-auto\" style=\"text-align: center\">
                                            <img src=\"{{ doc_root }}img/profile-avatar-light.jpg\" alt=\"Profilo\" class=\"rounded-circle mb-0\">
        
                                            <h4 class=\"card-title mb-1\"> {{ user.username }} </h4>
                                        </div>
                                    </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <!-- End Profilo Card -->  
                    </div>

                    <!-- Utenti Card -->
                    <div class=\"col-12 p-0\">
                        <div class=\"card info-card part-card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-primary p-0\">
                                    UTENTI
                                </h5>
                                
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-people\"></i>
                                        </div>
                                        
                                        <div class=\"ps-3 ms-2\">
                                            <h6> {{ countU }} </h6>
                                        </div>

                                        <div class=\"d-flex justify-content-center py-1 mx-auto\">
                                            <ul class=\"list-group list-group-flush mx-auto\">
                                                <li class=\"list-group-item border-right-0\">
                                                    <span class=\"text-dark pt-1 fw-bold\"> {{ admins }} </span> 
                                                    <span class=\"text-warning pt-2 ps-1\" style=\"font-weight: 600\"> Admin </span>
                                                </li>
                                                <li class=\"list-group-item border-right-0\">
                                                    <span class=\"text-dark pt-1 fw-bold\"> {{ members }} </span> 
                                                    <span class=\"text-success pt-2 ps-1\" style=\"font-weight: 600\"> Membri </span>
                                                </li>
                                                <li class=\"list-group-item border-right-0\">
                                                    <span class=\"text-dark pt-1 fw-bold\"> {{ offlines }} </span> 
                                                    <span class=\"text-danger pt-2 ps-1\" style=\"font-weight: 600\"> Sospesi </span>
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
                    <!-- End Utenti Card -->
                </div>
                <!-- End Right Side Columns -->
            </div>
        </section>
    </main>
{% endblock %}", "admin/user.html", "D:\\wamp\\www\\liquimet\\templates\\admin\\user.html");
    }
}
