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

/* admin/users.html */
class __TwigTemplate_c4f9700f0d852450227488d61f683f7630326f88403ecbcea6f9737b5f70394c extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/users.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Utenti ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
    <section class=\"grid-container mt-1 mb-0\">
        <div class=\"submenu align-items-center my-auto mx-auto p-2\">
            <div class=\"grid-item mx-auto my-1 p-1 justify-content-center\">
                <h3 class=\"m-0 p-4 submenu-title\"> 
                    Utenti
                </h3>
                
                <div class=\"breadcrumb-holder justify-content-center mx-auto p-2 my-auto\" aria-label=\"breadcrumb\">
                    <ul class=\"rounded-breadcrumbs mx-auto my-auto p-1 justify-content-center\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 15
            echo "                            ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["nav"], "navigation", [], "any", false, false, false, 15), 1)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["nav"], "id_group", [], "any", false, false, false, 15), 2)))) {
                // line 16
                echo "                                <li>
                                    <a class=\"breadcrumb-link my-auto\" aria-current=\"page\" style=\"width: 10.9rem; font-size: 0.3rem; text-align: center\"
                                        ";
                // line 18
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["nav"], "id_category", [], "any", false, false, false, 18), 4))) {
                    // line 19
                    echo "                                            href=\"";
                    echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                    echo "admin/members/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "id_category", [], "any", false, false, false, 19), "html", null, true);
                    echo "\"
                                        ";
                } else {
                    // line 21
                    echo "                                            href=\"";
                    echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                    echo "admin/register/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "id_category", [], "any", false, false, false, 21), "html", null, true);
                    echo "\"
                                        ";
                }
                // line 23
                echo "                                    >
                                        ";
                // line 24
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "category", [], "any", false, false, false, 24)), "html", null, true);
                echo " 
                                    </a>
                                </li>
                            ";
            }
            // line 28
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class=\"grid-container mx-1 mt-0\">
\t    <div class=\"col-md-12\">
    \t    <div class=\"panel panel-default\">
                <div class=\"panel-body table-responsive\">
\t\t\t\t\t<table class=\"table table-hover mx-auto w-auto signup\" style=\"text-align: center; font-weight: 400\">
                        <thead>
                            <tr class=\"table-title border-bottom border-light\">
\t\t\t\t\t            <th class=\"align-middle p-3 px-4\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> # </th>
                                <th class=\"align-middle p-3 px-4\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Username </th>
                                <th class=\"align-middle p-3 px-4\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Indirizzo e-mail </th>
                                <th class=\"align-middle p-3 px-4\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Nome e cognome </th>
                                <th class=\"align-middle p-3 px-4\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Ruolo aziendale </th>
                                <th class=\"align-middle p-3 px-4\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Accesso </th>
                                <th class=\"align-middle p-3 px-4\"> Account creato </th>
                            </tr>
                        </thead>

                        <tbody class=\"table-body\">  
                        ";
        // line 53
        $context["id"] = 1;
        // line 54
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 55
            echo "                            <tr>
                                <td scope=\"row\" class=\"align-middle\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\">
                                    <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "admin/user/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id_user", [], "any", false, false, false, 57), "html", null, true);
            echo "\" class=\"text-dark\"
                                        aria-current=\"page\">
                                            ";
            // line 59
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "
                                            ";
            // line 60
            $context["id"] = (($context["id"] ?? null) + 1);
            // line 61
            echo "                                    </a> <br>
                                    <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "admin/user-edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id_user", [], "any", false, false, false, 62), "html", null, true);
            echo "\" 
                                        class=\"text-dark\" role=\"button\">
                                            <i class=\"bi bi-pencil-square\"></i> 
                                    </a>
                                </td>
                                <td class=\"align-middle\"> ";
            // line 67
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 67)), "html", null, true);
            echo " </td>
                                <td class=\"align-middle\"> ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 68), "html", null, true);
            echo " </td>
                                <td class=\"align-middle\"> ";
            // line 69
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "member", [], "any", false, false, false, 69)), "html", null, true);
            echo " </td>
                                <td class=\"align-middle\"> ";
            // line 70
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "title", [], "any", false, false, false, 70)), "html", null, true);
            echo " </td>
                                <td class=\"align-middle\"> ";
            // line 71
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "role", [], "any", false, false, false, 71)), "html", null, true);
            echo " </td>
                                <td class=\"align-middle\"> ";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "joined", [], "any", false, false, false, 72), "d-M-Y"), "html", null, true);
            echo " </td>
                            </tr> 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                        </tbody>
                        
                        <tfoot>
                            <tr>
                                <td colspan=\"7\" class=\"text-light align-middle mb-2 p-1\">
                                    <h5 style=\"font-weight: 600\" class=\"my-1\">
                                        TOTALE <i class=\"bi bi-people ms-1\"></i> :
                                        <span> ";
        // line 82
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo " </span>
                                    </h5> 
                                </td>
                            </tr>
                        </tfoot>
               \t    </table>
                </div> 
            </div>
        </div>
    </section>    
";
    }

    public function getTemplateName()
    {
        return "admin/users.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 82,  208 => 75,  199 => 72,  195 => 71,  191 => 70,  187 => 69,  183 => 68,  179 => 67,  169 => 62,  166 => 61,  164 => 60,  160 => 59,  153 => 57,  149 => 55,  144 => 54,  142 => 53,  116 => 29,  110 => 28,  103 => 24,  100 => 23,  92 => 21,  84 => 19,  82 => 18,  78 => 16,  75 => 15,  71 => 14,  56 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}
{% block title %} Utenti {{ 'now'|date('Y') }} {% endblock %}

{% block content %} 
    <section class=\"grid-container mt-1 mb-0\">
        <div class=\"submenu align-items-center my-auto mx-auto p-2\">
            <div class=\"grid-item mx-auto my-1 p-1 justify-content-center\">
                <h3 class=\"m-0 p-4 submenu-title\"> 
                    Utenti
                </h3>
                
                <div class=\"breadcrumb-holder justify-content-center mx-auto p-2 my-auto\" aria-label=\"breadcrumb\">
                    <ul class=\"rounded-breadcrumbs mx-auto my-auto p-1 justify-content-center\">
                        {% for nav in categories %}
                            {% if (nav.navigation == 1) and (nav.id_group == 2) %}
                                <li>
                                    <a class=\"breadcrumb-link my-auto\" aria-current=\"page\" style=\"width: 10.9rem; font-size: 0.3rem; text-align: center\"
                                        {% if (nav.id_category == 4) %}
                                            href=\"{{ doc_root }}admin/members/{{ nav.id_category }}\"
                                        {% else %}
                                            href=\"{{ doc_root }}admin/register/{{ nav.id_category }}\"
                                        {% endif %}
                                    >
                                        {{ nav.category|upper }} 
                                    </a>
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class=\"grid-container mx-1 mt-0\">
\t    <div class=\"col-md-12\">
    \t    <div class=\"panel panel-default\">
                <div class=\"panel-body table-responsive\">
\t\t\t\t\t<table class=\"table table-hover mx-auto w-auto signup\" style=\"text-align: center; font-weight: 400\">
                        <thead>
                            <tr class=\"table-title border-bottom border-light\">
\t\t\t\t\t            <th class=\"align-middle p-3 px-4\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> # </th>
                                <th class=\"align-middle p-3 px-4\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Username </th>
                                <th class=\"align-middle p-3 px-4\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Indirizzo e-mail </th>
                                <th class=\"align-middle p-3 px-4\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Nome e cognome </th>
                                <th class=\"align-middle p-3 px-4\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Ruolo aziendale </th>
                                <th class=\"align-middle p-3 px-4\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Accesso </th>
                                <th class=\"align-middle p-3 px-4\"> Account creato </th>
                            </tr>
                        </thead>

                        <tbody class=\"table-body\">  
                        {% set id = 1 %}
                        {% for u in users %}
                            <tr>
                                <td scope=\"row\" class=\"align-middle\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\">
                                    <a href=\"{{ doc_root }}admin/user/{{ u.id_user }}\" class=\"text-dark\"
                                        aria-current=\"page\">
                                            {{ id }}
                                            {% set id = id + 1 %}
                                    </a> <br>
                                    <a href=\"{{ doc_root }}admin/user-edit/{{ u.id_user }}\" 
                                        class=\"text-dark\" role=\"button\">
                                            <i class=\"bi bi-pencil-square\"></i> 
                                    </a>
                                </td>
                                <td class=\"align-middle\"> {{ u.username|lower }} </td>
                                <td class=\"align-middle\"> {{ u.email }} </td>
                                <td class=\"align-middle\"> {{ u.member|upper }} </td>
                                <td class=\"align-middle\"> {{ u.title|capitalize }} </td>
                                <td class=\"align-middle\"> {{ u.role|capitalize }} </td>
                                <td class=\"align-middle\"> {{ u.joined|date('d-M-Y') }} </td>
                            </tr> 
                        {% endfor %}
                        </tbody>
                        
                        <tfoot>
                            <tr>
                                <td colspan=\"7\" class=\"text-light align-middle mb-2 p-1\">
                                    <h5 style=\"font-weight: 600\" class=\"my-1\">
                                        TOTALE <i class=\"bi bi-people ms-1\"></i> :
                                        <span> {{ total }} </span>
                                    </h5> 
                                </td>
                            </tr>
                        </tfoot>
               \t    </table>
                </div> 
            </div>
        </div>
    </section>    
{% endblock %}", "admin/users.html", "D:\\wamp\\www\\liquimet\\templates\\admin\\users.html");
    }
}
