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

/* platform.html */
class __TwigTemplate_c4dbf43498759c43297bc6e01b0e91433d2e7914a5396631e36b5233bd5d3133 extends Template
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
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "platform.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Piattaforma ";
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
                    Costo LNG
                </h3>
                
                    <div class=\"breadcrumb-holder justify-content-center mx-auto p-2 my-auto\" aria-label=\"breadcrumb\">
                        <ul class=\"rounded-breadcrumbs mx-auto my-auto p-1 justify-content-center\">
                            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 15
            echo "                                ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["nav"], "navigation", [], "any", false, false, false, 15), 1)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["nav"], "id_group", [], "any", false, false, false, 15), 1)))) {
                // line 16
                echo "                                    <li ";
                if ((0 === twig_compare(($context["section"] ?? null), twig_get_attribute($this->env, $this->source, $context["nav"], "id_category", [], "any", false, false, false, 16)))) {
                    // line 17
                    echo "                                            class=\"active\"
                                        ";
                }
                // line 18
                echo ">
                                        
                                        <a class=\"breadcrumb-link my-auto\" aria-current=\"page\" style=\"width: 10.9rem; font-size: 0.3rem; text-align: center\"
                                            ";
                // line 21
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["nav"], "id_category", [], "any", false, false, false, 21), 1))) {
                    // line 22
                    echo "                                                href=\"";
                    echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                    echo "transports/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "id_category", [], "any", false, false, false, 22), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "seo", [], "any", false, false, false, 22), "html", null, true);
                    echo "\"
                                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 23
$context["nav"], "id_category", [], "any", false, false, false, 23), 2))) {
                    // line 24
                    echo "                                                href=\"";
                    echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                    echo "quantity/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "id_category", [], "any", false, false, false, 24), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "seo", [], "any", false, false, false, 24), "html", null, true);
                    echo "\"
                                            ";
                } else {
                    // line 26
                    echo "                                                href=\"";
                    echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                    echo "partials/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "id_category", [], "any", false, false, false, 26), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "seo", [], "any", false, false, false, 26), "html", null, true);
                    echo "\"
                                            ";
                }
                // line 28
                echo "                                        >
                                            <abbr title=\"Transport Management System\">TMS</abbr> 
                                                ";
                // line 30
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "category", [], "any", false, false, false, 30)), "html", null, true);
                echo " 
                                        </a>
                                    </li>
                                ";
            }
            // line 34
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                        </ul>
                    </div>
            </div>
        </div>
    </section>

    <section class=\"grid-container mx-1 mt-0\">
\t    <div class=\"col-md-12\">
    \t    <div class=\"panel panel-default\">
                <div class=\"panel-heading d-flex justify-content-center p-1\">
                    <a role=\"button\" class=\"btn btn-outline-light bg-gradient mx-1 mb-3\"
                        href=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "partadd/\"> 
                            <i class=\"bi bi-plus\" style=\"font-weight: 400; text-align: center\"></i>
                                <span style=\"font-style: normal; font-family: 'Rubik', sans-serif; font-size: 14px\"> 
                                    CREA TRASPORTO 
                                </span>
                             
                                <!-- <i class=\"bi bi-plus-circle-fill\"></i> za popunjeni krug sa +
                                     <i class=\"bi bi-plus-lg\"></i> large plus 
                                     <i class=\"bi bi-plus\"></i> small plus -->
                    </a>
                </div>
                
                <div class=\"panel-body table-responsive\">
\t\t\t\t\t<table class=\"table table-sm table-hover mx-auto platform\" style=\"text-align: center; font-weight: 400\">
                        <thead>
                            <tr class=\"table-title border-bottom border-light\">
\t\t\t\t\t            <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> # </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Tipo </th>
                                <th scope=\"col\" class=\"align-middle p-3\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Slot ID </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Numero CMR </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Emittente </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Fornitore </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Trasporto </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Univoco </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Data carico </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Data scarico </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Mese carico </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Settimana scarico </th>
                                <th scope=\"col\" class=\"align-middle p-2\" colspan=\"2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Mese scarico </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Container<br>ATB </th>
                                <th scope=\"col\" class=\"align-middle p-2\"> Nota </th>
                            </tr>
                        </thead>

                        <tbody class=\"table-body\">  
                        ";
        // line 81
        $context["id"] = 1;
        // line 82
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["transports"] ?? null), 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 83
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["quantities"] ?? null)) - 1), 1));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 84
                echo "                                <tr data-bs-toggle=\"collapse\" data-bs-target=\"#q-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["quantities"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "id_transport", [], "any", false, false, false, 84), "html", null, true);
                echo "\" class=\"accordion-toggle\" 
                                    aria-expanded=\"false\" style=\"font-size: 0.2rem\">
                                    <td scope=\"row\" class=\"align-middle\" style=\"border-right: 2px solid rgba(0, 0, 0, 0.2)\">
                                        <a href=\"";
                // line 87
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "transports/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["transports"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "id_transport", [], "any", false, false, false, 87), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["transports"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["i"]] ?? null) : null), "seo", [], "any", false, false, false, 87), "html", null, true);
                echo "\" class=\"text-dark\"
                                            aria-current=\"page\">
                                                ";
                // line 89
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "
                                            ";
                // line 90
                $context["id"] = (($context["id"] ?? null) + 1);
                // line 91
                echo "                                        </a> <br>
                                        <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "transport-edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["transports"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["i"]] ?? null) : null), "id_transport", [], "any", false, false, false, 92), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["transports"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["i"]] ?? null) : null), "seo", [], "any", false, false, false, 92), "html", null, true);
                echo "\" 
                                            class=\"text-dark\" role=\"button\">
                                                <i class=\"bi bi-pencil-square\"></i> 
                                        </a>
                                    </td>
                                    <td class=\"align-middle\"> 
                                        ";
                // line 98
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["transports"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["i"]] ?? null) : null), "type", [], "any", false, false, false, 98), 0))) {
                    // line 99
                    echo "                                            F 
                                        ";
                } else {
                    // line 101
                    echo "                                            P
                                        ";
                }
                // line 103
                echo "                                    </td>
                                    <td style=\"word-break: break-all\" class=\"align-middle\"> ";
                // line 104
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["transports"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["i"]] ?? null) : null), "slot", [], "any", false, false, false, 104)), "html", null, true);
                echo " </td>
                                    <td style=\"word-break: break-all\" class=\"align-middle\"> ";
                // line 105
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["transports"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["i"]] ?? null) : null), "cmr", [], "any", false, false, false, 105)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 106
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["transports"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["i"]] ?? null) : null), "issuer", [], "any", false, false, false, 106)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 107
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["transports"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["i"]] ?? null) : null), "supplier", [], "any", false, false, false, 107)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 108
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["transports"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[$context["i"]] ?? null) : null), "transport", [], "any", false, false, false, 108)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 109
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["transports"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["i"]] ?? null) : null), "univoco", [], "any", false, false, false, 109)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 110
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = ($context["transports"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["i"]] ?? null) : null), "date_load", [], "any", false, false, false, 110), "d/m/Y"), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 111
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["transports"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[$context["i"]] ?? null) : null), "date_unload", [], "any", false, false, false, 111), "d/m/Y"), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = ($context["transports"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[$context["i"]] ?? null) : null), "id_month_load", [], "any", false, false, false, 112), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["transports"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["i"]] ?? null) : null), "week_unload", [], "any", false, false, false, 113), "html", null, true);
                echo " </td>
                                    <td colspan=\"2\" class=\"align-middle\"> ";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = ($context["transports"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["i"]] ?? null) : null), "id_month_unload", [], "any", false, false, false, 114), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = ($context["transports"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[$context["i"]] ?? null) : null), "month_unload", [], "any", false, false, false, 114), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 115
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = ($context["transports"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[$context["i"]] ?? null) : null), "container", [], "any", false, false, false, 115)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\" style=\"border-left: 2px solid rgba(0, 0, 0, 0.2)\"> <i class=\"bi bi-info-circle\"></i> </td>
                                </tr>
                                    
                                    <tr>
                                        <td colspan=\"16\">
                                            <div class=\"accordian-body collapse rowQty mt-3\" id=\"q-";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = ($context["quantities"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[$context["i"]] ?? null) : null), "id_transport", [], "any", false, false, false, 121), "html", null, true);
                echo "\"> 
                                                <table class=\"table table-bordered\">
                                                    <tbody style=\"text-align: center\">
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Energia caricata [MWh] </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = ($context["quantities"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[$context["i"]] ?? null) : null), "mwh", [], "any", false, false, false, 126), "html", null, true);
                echo " </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Quantità nominale caricata [kg] </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = ($context["quantities"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[$context["i"]] ?? null) : null), "kg_load", [], "any", false, false, false, 128), "html", null, true);
                echo " </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Raffreddamento </th>            
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = ($context["quantities"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[$context["i"]] ?? null) : null), "cooling", [], "any", false, false, false, 130), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Tipologia costo extra </th>            
                                                            <td class=\"bg-light bg-gradient align-middle\"> 
                                                                ";
                // line 133
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = ($context["quantities"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[$context["i"]] ?? null) : null), "price_typology", [], "any", false, false, false, 133), 0))) {
                    // line 134
                    echo "                                                                    NO
                                                                ";
                } else {
                    // line 136
                    echo "                                                                    SÌ
                                                                ";
                }
                // line 138
                echo "                                                            </td>          
                                                        </tr>
                                                    
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Valore costo extra </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = ($context["quantities"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[$context["i"]] ?? null) : null), "price_value", [], "any", false, false, false, 143), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Quantità scaricata PD [kg] </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = ($context["quantities"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[$context["i"]] ?? null) : null), "kg_unload", [], "any", false, false, false, 145), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = ($context["quantities"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[$context["i"]] ?? null) : null), "liquid_density", [], "any", false, false, false, 147), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = ($context["quantities"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[$context["i"]] ?? null) : null), "gas_weight", [], "any", false, false, false, 149), "html", null, true);
                echo " </td>
                                                        </tr>
                                                    
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> PCS/GHV <big>[</big><sup>MJ</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_28 = ($context["quantities"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[$context["i"]] ?? null) : null), "mj_kg", [], "any", false, false, false, 154), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = ($context["quantities"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[$context["i"]] ?? null) : null), "pcs_ghv", [], "any", false, false, false, 156), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Volume scaricato (liquido) <big>[</big>m<sup>3</sup><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_30 = ($context["quantities"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[$context["i"]] ?? null) : null), "volume_mc", [], "any", false, false, false, 158), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Volume sviluppato <big>[</big><sup>Nm<sup>3</sup></sup>&frasl;<sub>m<sup>3</sup></sub><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_31 = ($context["quantities"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[$context["i"]] ?? null) : null), "volume_nmc", [], "any", false, false, false, 160), "html", null, true);
                echo " </td> 
                                                        </tr>
                                                    
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>m<sup>3</sup></sub> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_32 = ($context["quantities"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[$context["i"]] ?? null) : null), "smc_mc", [], "any", false, false, false, 165), "html", null, true);
                echo " </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Gas sviluppato <big>[</big>Nm<sup>3</sup><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_33 = ($context["quantities"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[$context["i"]] ?? null) : null), "gas_nmc", [], "any", false, false, false, 167), "html", null, true);
                echo " </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Gas sviluppato <big>[</big>Sm<sup>3</sup></sup><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_34 = ($context["quantities"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[$context["i"]] ?? null) : null), "gas_smc", [], "any", false, false, false, 169), "html", null, true);
                echo " </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>kg</sub> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_35 = ($context["quantities"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[$context["i"]] ?? null) : null), "smc_kg", [], "any", false, false, false, 171), "html", null, true);
                echo " </td>            
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> 
                                        </td> 
                                    </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                        </tbody>
                        
                        <tfoot>
                            <tr>
                                <td colspan=\"16\" class=\"text-light align-middle\">
                                    <h5 style=\"font-weight: 600\" class=\"align-middle\">
                                        TOTALE <i class=\"bi bi-fuel-pump-fill ms-1\"></i> + <i class=\"bi bi-fuel-pump\"></i>:
                                        <span> ";
        // line 187
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
        return "platform.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 187,  431 => 180,  425 => 179,  411 => 171,  406 => 169,  401 => 167,  396 => 165,  388 => 160,  383 => 158,  378 => 156,  373 => 154,  365 => 149,  360 => 147,  355 => 145,  350 => 143,  343 => 138,  339 => 136,  335 => 134,  333 => 133,  327 => 130,  322 => 128,  317 => 126,  309 => 121,  300 => 115,  294 => 114,  290 => 113,  286 => 112,  282 => 111,  278 => 110,  274 => 109,  270 => 108,  266 => 107,  262 => 106,  258 => 105,  254 => 104,  251 => 103,  247 => 101,  243 => 99,  241 => 98,  228 => 92,  225 => 91,  223 => 90,  219 => 89,  210 => 87,  203 => 84,  198 => 83,  193 => 82,  191 => 81,  153 => 46,  140 => 35,  134 => 34,  127 => 30,  123 => 28,  113 => 26,  103 => 24,  101 => 23,  92 => 22,  90 => 21,  85 => 18,  81 => 17,  78 => 16,  75 => 15,  71 => 14,  56 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block title %} Piattaforma {{ 'now'|date('Y') }} {% endblock %}

{% block content %} 
    <section class=\"grid-container mt-1 mb-0\">
        <div class=\"submenu align-items-center my-auto mx-auto p-2\">
            <div class=\"grid-item mx-auto my-1 p-1 justify-content-center\">
                <h3 class=\"m-0 p-4 submenu-title\"> 
                    Costo LNG
                </h3>
                
                    <div class=\"breadcrumb-holder justify-content-center mx-auto p-2 my-auto\" aria-label=\"breadcrumb\">
                        <ul class=\"rounded-breadcrumbs mx-auto my-auto p-1 justify-content-center\">
                            {% for nav in categories %}
                                {% if (nav.navigation == 1) and (nav.id_group == 1) %}
                                    <li {% if (section == nav.id_category) %}
                                            class=\"active\"
                                        {% endif %}>
                                        
                                        <a class=\"breadcrumb-link my-auto\" aria-current=\"page\" style=\"width: 10.9rem; font-size: 0.3rem; text-align: center\"
                                            {% if (nav.id_category == 1) %}
                                                href=\"{{ doc_root }}transports/{{ nav.id_category }}/{{ nav.seo }}\"
                                            {% elseif (nav.id_category == 2) %}
                                                href=\"{{ doc_root }}quantity/{{ nav.id_category }}/{{ nav.seo }}\"
                                            {% else %}
                                                href=\"{{ doc_root }}partials/{{ nav.id_category }}/{{ nav.seo }}\"
                                            {% endif %}
                                        >
                                            <abbr title=\"Transport Management System\">TMS</abbr> 
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
                <div class=\"panel-heading d-flex justify-content-center p-1\">
                    <a role=\"button\" class=\"btn btn-outline-light bg-gradient mx-1 mb-3\"
                        href=\"{{ doc_root }}partadd/\"> 
                            <i class=\"bi bi-plus\" style=\"font-weight: 400; text-align: center\"></i>
                                <span style=\"font-style: normal; font-family: 'Rubik', sans-serif; font-size: 14px\"> 
                                    CREA TRASPORTO 
                                </span>
                             
                                <!-- <i class=\"bi bi-plus-circle-fill\"></i> za popunjeni krug sa +
                                     <i class=\"bi bi-plus-lg\"></i> large plus 
                                     <i class=\"bi bi-plus\"></i> small plus -->
                    </a>
                </div>
                
                <div class=\"panel-body table-responsive\">
\t\t\t\t\t<table class=\"table table-sm table-hover mx-auto platform\" style=\"text-align: center; font-weight: 400\">
                        <thead>
                            <tr class=\"table-title border-bottom border-light\">
\t\t\t\t\t            <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> # </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Tipo </th>
                                <th scope=\"col\" class=\"align-middle p-3\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Slot ID </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Numero CMR </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Emittente </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Fornitore </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Trasporto </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Univoco </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Data carico </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Data scarico </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Mese carico </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Settimana scarico </th>
                                <th scope=\"col\" class=\"align-middle p-2\" colspan=\"2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Mese scarico </th>
                                <th scope=\"col\" class=\"align-middle p-2\" style=\"border-right: 2px solid rgba(255, 255, 255, 0.2)\"> Container<br>ATB </th>
                                <th scope=\"col\" class=\"align-middle p-2\"> Nota </th>
                            </tr>
                        </thead>

                        <tbody class=\"table-body\">  
                        {% set id = 1 %}
                        {% for i in range(1, transports, 1) %}
                            {% for i in range(0, quantities|length - 1, 1) %}
                                <tr data-bs-toggle=\"collapse\" data-bs-target=\"#q-{{ quantities[i].id_transport }}\" class=\"accordion-toggle\" 
                                    aria-expanded=\"false\" style=\"font-size: 0.2rem\">
                                    <td scope=\"row\" class=\"align-middle\" style=\"border-right: 2px solid rgba(0, 0, 0, 0.2)\">
                                        <a href=\"{{ doc_root }}transports/{{ transports[i].id_transport }}/{{ transports[i].seo }}\" class=\"text-dark\"
                                            aria-current=\"page\">
                                                {{ id }}
                                            {% set id = id + 1 %}
                                        </a> <br>
                                        <a href=\"{{ doc_root }}transport-edit/{{ transports[i].id_transport }}/{{ transports[i].seo }}\" 
                                            class=\"text-dark\" role=\"button\">
                                                <i class=\"bi bi-pencil-square\"></i> 
                                        </a>
                                    </td>
                                    <td class=\"align-middle\"> 
                                        {% if transports[i].type == 0 %}
                                            F 
                                        {% else %}
                                            P
                                        {% endif %}
                                    </td>
                                    <td style=\"word-break: break-all\" class=\"align-middle\"> {{ transports[i].slot|upper }} </td>
                                    <td style=\"word-break: break-all\" class=\"align-middle\"> {{ transports[i].cmr|upper }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].issuer|upper }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].supplier|upper }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].transport|upper }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].univoco|upper }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].date_load|date(\"d/m/Y\") }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].date_unload|date(\"d/m/Y\") }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].id_month_load }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].week_unload }} </td>
                                    <td colspan=\"2\" class=\"align-middle\"> {{ transports[i].id_month_unload }} - {{ transports[i].month_unload }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].container|upper }} </td>
                                    <td class=\"align-middle\" style=\"border-left: 2px solid rgba(0, 0, 0, 0.2)\"> <i class=\"bi bi-info-circle\"></i> </td>
                                </tr>
                                    
                                    <tr>
                                        <td colspan=\"16\">
                                            <div class=\"accordian-body collapse rowQty mt-3\" id=\"q-{{ quantities[i].id_transport }}\"> 
                                                <table class=\"table table-bordered\">
                                                    <tbody style=\"text-align: center\">
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Energia caricata [MWh] </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].mwh }} </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Quantità nominale caricata [kg] </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].kg_load }} </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Raffreddamento </th>            
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].cooling }} </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Tipologia costo extra </th>            
                                                            <td class=\"bg-light bg-gradient align-middle\"> 
                                                                {% if quantities[i].price_typology == 0 %}
                                                                    NO
                                                                {% else %}
                                                                    SÌ
                                                                {% endif %}
                                                            </td>          
                                                        </tr>
                                                    
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Valore costo extra </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].price_value }} </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Quantità scaricata PD [kg] </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].kg_unload }} </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].liquid_density }} </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].gas_weight }} </td>
                                                        </tr>
                                                    
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> PCS/GHV <big>[</big><sup>MJ</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].mj_kg }} </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].pcs_ghv }} </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Volume scaricato (liquido) <big>[</big>m<sup>3</sup><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].volume_mc }} </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Volume sviluppato <big>[</big><sup>Nm<sup>3</sup></sup>&frasl;<sub>m<sup>3</sup></sub><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].volume_nmc }} </td> 
                                                        </tr>
                                                    
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>m<sup>3</sup></sub> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].smc_mc }} </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Gas sviluppato <big>[</big>Nm<sup>3</sup><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].gas_nmc }} </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Gas sviluppato <big>[</big>Sm<sup>3</sup></sup><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].gas_smc }} </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>kg</sub> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].smc_kg }} </td>            
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> 
                                        </td> 
                                    </tr>
                            {% endfor %}
                        {% endfor %}
                        </tbody>
                        
                        <tfoot>
                            <tr>
                                <td colspan=\"16\" class=\"text-light align-middle\">
                                    <h5 style=\"font-weight: 600\" class=\"align-middle\">
                                        TOTALE <i class=\"bi bi-fuel-pump-fill ms-1\"></i> + <i class=\"bi bi-fuel-pump\"></i>:
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
{% endblock %}", "platform.html", "D:\\wamp\\www\\liquimet\\templates\\platform.html");
    }
}
