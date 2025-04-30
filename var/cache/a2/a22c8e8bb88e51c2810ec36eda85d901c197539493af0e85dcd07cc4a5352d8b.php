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

/* transports.html */
class __TwigTemplate_285f080cbfdf2a47556a8dd91ca3f780f59456f1e888d2fc07653fee3d8541e9 extends Template
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
            'script' => [$this, 'block_script'],
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
        $this->parent = $this->loadTemplate("layout.html", "transports.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Costo LNG ";
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
                                        
                                        <a class=\"breadcrumb-link\" aria-current=\"page\" style=\"width: 10em;\"
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
                                                ";
                // line 29
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "category", [], "any", false, false, false, 29)), "html", null, true);
                echo " 
                                        </a>
                                    </li>
                                ";
            }
            // line 33
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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
        // line 45
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "transport-add/\"> 
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
\t\t\t\t\t<table class=\"table table-sm table-hover mx-auto\" style=\"text-align: center; font-weight: 600\">
                        <thead>
                            <tr class=\"bg-success bg-gradient\" style=\"font-size: 10px\">
\t\t\t\t\t            <th scope=\"col\" class=\"align-middle\" style=\"border-right: 1px solid black\"> # </th>
                                <th scope=\"col\" class=\"align-middle\"> Slot ID </th>
                                <th scope=\"col\" class=\"align-middle\"> Numero CMR </th>
                                <th scope=\"col\" class=\"align-middle\"> Ditta emittente </th>
                                <th scope=\"col\" class=\"align-middle\"> Fornitore </th>
                                <th scope=\"col\" class=\"align-middle\"> Trasporto </th>
                                <th scope=\"col\" class=\"align-middle\"> Univoco </th>
                                <th scope=\"col\" class=\"align-middle\"> Data carico </th>
                                <th scope=\"col\" class=\"align-middle\"> Data scarico </th>
                                <th scope=\"col\" class=\"align-middle\"> Mese carico </th>
                                <th scope=\"col\" class=\"align-middle\"> Settimana scarico </th>
                                <th scope=\"col\" class=\"align-middle\" colspan=\"2\"> Mese scarico </th>
                                <th scope=\"col\" class=\"align-middle\"> Container<br>ATB </th>
                                <th scope=\"col\" class=\"align-middle\" style=\"border-left: 1px solid black\"> Nota </th>
                            </tr>
                        </thead>

                        <tbody>  
                        ";
        // line 79
        $context["id"] = 1;
        // line 80
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["transports"] ?? null), 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 81
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["quantities"] ?? null)) - 1), 1));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 82
                echo "                                <tr data-bs-toggle=\"collapse\" data-bs-target=\"#q-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["quantities"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "id_transport", [], "any", false, false, false, 82), "html", null, true);
                echo "\" class=\"accordion-toggle\" 
                                    aria-expanded=\"false\" style=\"font-size: 9px\">
                                    <td scope=\"row\" class=\"align-middle\" style=\"border-right: 1px solid black\">
                                        <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "transports/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["transports"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "id_transport", [], "any", false, false, false, 85), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["transports"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["i"]] ?? null) : null), "seo", [], "any", false, false, false, 85), "html", null, true);
                echo "\" class=\"text-dark\"
                                            aria-current=\"page\">
                                                ";
                // line 87
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "
                                            ";
                // line 88
                $context["id"] = (($context["id"] ?? null) + 1);
                // line 89
                echo "                                        </a> <br>
                                        <a href=\"";
                // line 90
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "transport-edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["transports"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["i"]] ?? null) : null), "id_transport", [], "any", false, false, false, 90), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["transports"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["i"]] ?? null) : null), "seo", [], "any", false, false, false, 90), "html", null, true);
                echo "\" 
                                            class=\"text-dark\" role=\"button\">
                                                <i class=\"bi bi-pencil-square\"></i> 
                                        </a>
                                    </td>
                                    <td class=\"align-middle\" style=\"word-break: break-all; width: 12%\"> ";
                // line 95
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["transports"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["i"]] ?? null) : null), "slot", [], "any", false, false, false, 95)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\" style=\"word-break: break-all; width: 12%\"> ";
                // line 96
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["transports"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["i"]] ?? null) : null), "cmr", [], "any", false, false, false, 96)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 97
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["transports"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["i"]] ?? null) : null), "issuer", [], "any", false, false, false, 97)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 98
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["transports"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["i"]] ?? null) : null), "supplier", [], "any", false, false, false, 98)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 99
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["transports"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["i"]] ?? null) : null), "transport", [], "any", false, false, false, 99)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 100
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["transports"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[$context["i"]] ?? null) : null), "univoco", [], "any", false, false, false, 100)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 101
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["transports"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["i"]] ?? null) : null), "date_load", [], "any", false, false, false, 101), "d/m/Y"), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 102
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = ($context["transports"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["i"]] ?? null) : null), "date_unload", [], "any", false, false, false, 102), "d/m/Y"), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["transports"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[$context["i"]] ?? null) : null), "id_month_load", [], "any", false, false, false, 103), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = ($context["transports"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[$context["i"]] ?? null) : null), "week_unload", [], "any", false, false, false, 104), "html", null, true);
                echo " </td>
                                    <td colspan=\"2\" class=\"align-middle\"> ";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["transports"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["i"]] ?? null) : null), "id_month_unload", [], "any", false, false, false, 105), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = ($context["transports"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["i"]] ?? null) : null), "month_unload", [], "any", false, false, false, 105), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 106
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = ($context["transports"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[$context["i"]] ?? null) : null), "container", [], "any", false, false, false, 106)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\" style=\"border-left: 1px solid black\"> <i class=\"bi bi-info-circle\"></i> </td>
                                </tr>
                                    
                                    <tr>
                                        <td colspan=\"15\">
                                            <div class=\"accordian-body collapse rowQty\" id=\"q-";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = ($context["quantities"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[$context["i"]] ?? null) : null), "id_transport", [], "any", false, false, false, 112), "html", null, true);
                echo "\"> 
                                                <table class=\"table table-bordered\">
                                                    <tbody style=\"text-align: center\">
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Energia caricata [MWh] </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = ($context["quantities"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[$context["i"]] ?? null) : null), "mwh", [], "any", false, false, false, 117), "html", null, true);
                echo " </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Quantità nominale caricata [kg] </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = ($context["quantities"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[$context["i"]] ?? null) : null), "kg_load", [], "any", false, false, false, 119), "html", null, true);
                echo " </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Raffreddamento </th>            
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = ($context["quantities"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[$context["i"]] ?? null) : null), "cooling", [], "any", false, false, false, 121), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Tipologia costo extra </th>            
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = ($context["quantities"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[$context["i"]] ?? null) : null), "price_typology", [], "any", false, false, false, 123), "html", null, true);
                echo " </td>          
                                                        </tr>
                                                    
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Valore costo extra </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = ($context["quantities"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[$context["i"]] ?? null) : null), "price_value", [], "any", false, false, false, 128), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Quantità scaricata PD [kg] </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = ($context["quantities"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[$context["i"]] ?? null) : null), "kg_unload", [], "any", false, false, false, 130), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = ($context["quantities"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[$context["i"]] ?? null) : null), "liquid_density", [], "any", false, false, false, 132), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = ($context["quantities"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[$context["i"]] ?? null) : null), "gas_weight", [], "any", false, false, false, 134), "html", null, true);
                echo " </td>
                                                        </tr>
                                                    
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> PCS/GHV <big>[</big><sup>MJ</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = ($context["quantities"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[$context["i"]] ?? null) : null), "mj_kg", [], "any", false, false, false, 139), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_28 = ($context["quantities"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[$context["i"]] ?? null) : null), "pcs_ghv", [], "any", false, false, false, 141), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Volume scaricato (liquido) <big>[</big>m<sup>3</sup><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = ($context["quantities"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[$context["i"]] ?? null) : null), "volume_mc", [], "any", false, false, false, 143), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Volume sviluppato <big>[</big><sup>Nm<sup>3</sup></sup>&frasl;<sub>m<sup>3</sup></sub><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_30 = ($context["quantities"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[$context["i"]] ?? null) : null), "volume_nmc", [], "any", false, false, false, 145), "html", null, true);
                echo " </td> 
                                                        </tr>
                                                    
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>m<sup>3</sup></sub> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_31 = ($context["quantities"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[$context["i"]] ?? null) : null), "smc_mc", [], "any", false, false, false, 150), "html", null, true);
                echo " </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Gas sviluppato <big>[</big>Nm<sup>3</sup><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_32 = ($context["quantities"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[$context["i"]] ?? null) : null), "gas_nmc", [], "any", false, false, false, 152), "html", null, true);
                echo " </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Gas sviluppato <big>[</big>Sm<sup>3</sup></sup><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_33 = ($context["quantities"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[$context["i"]] ?? null) : null), "gas_smc", [], "any", false, false, false, 154), "html", null, true);
                echo " </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>kg</sub> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_34 = ($context["quantities"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[$context["i"]] ?? null) : null), "smc_kg", [], "any", false, false, false, 156), "html", null, true);
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
            // line 164
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "                        </tbody>
                        
                        <tfoot>
                            <tr>
                                <td colspan=\"16\" class=\"text-light align-middle\">
                                    <h5 style=\"font-weight: 600\" class=\"align-middle\">
                                        TOTALE <i class=\"bi bi-fuel-pump-fill ms-1\"></i>:
                                            <span> 
                                                ";
        // line 173
        echo twig_escape_filter($this->env, ($context["countFull"] ?? null), "html", null, true);
        echo " 
                                            </span>
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

    // line 186
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
    <script>
        \$('.hideshow').on('click',function(){
            let cls = \$(this).attr(\"data-id\")
        
            if ( \$('#'+cls).css('display') == 'none' ){
                \$('.table tbody').find('#'+cls).show();
            }else{
                \$('.table tbody').find('#'+cls).hide();
            }
        });
    </script>
    <style>
        table.qty tr td:empty {
  width: 50px;
}
  
table.qty tr td {
  padding-top: 10px;
  padding-bottom: 10px;
}
        
    </style>
";
    }

    public function getTemplateName()
    {
        return "transports.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 186,  414 => 173,  404 => 165,  398 => 164,  384 => 156,  379 => 154,  374 => 152,  369 => 150,  361 => 145,  356 => 143,  351 => 141,  346 => 139,  338 => 134,  333 => 132,  328 => 130,  323 => 128,  315 => 123,  310 => 121,  305 => 119,  300 => 117,  292 => 112,  283 => 106,  277 => 105,  273 => 104,  269 => 103,  265 => 102,  261 => 101,  257 => 100,  253 => 99,  249 => 98,  245 => 97,  241 => 96,  237 => 95,  225 => 90,  222 => 89,  220 => 88,  216 => 87,  207 => 85,  200 => 82,  195 => 81,  190 => 80,  188 => 79,  151 => 45,  138 => 34,  132 => 33,  125 => 29,  122 => 28,  112 => 26,  102 => 24,  100 => 23,  91 => 22,  89 => 21,  84 => 18,  80 => 17,  77 => 16,  74 => 15,  70 => 14,  55 => 4,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block title %} Costo LNG {% endblock %}

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
                                        
                                        <a class=\"breadcrumb-link\" aria-current=\"page\" style=\"width: 10em;\"
                                            {% if (nav.id_category == 1) %}
                                                href=\"{{ doc_root }}transports/{{ nav.id_category }}/{{ nav.seo }}\"
                                            {% elseif (nav.id_category == 2) %}
                                                href=\"{{ doc_root }}quantity/{{ nav.id_category }}/{{ nav.seo }}\"
                                            {% else %}
                                                href=\"{{ doc_root }}partials/{{ nav.id_category }}/{{ nav.seo }}\"
                                            {% endif %}
                                        >
                                                {{ nav.category|capitalize }} 
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
                        href=\"{{ doc_root }}transport-add/\"> 
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
\t\t\t\t\t<table class=\"table table-sm table-hover mx-auto\" style=\"text-align: center; font-weight: 600\">
                        <thead>
                            <tr class=\"bg-success bg-gradient\" style=\"font-size: 10px\">
\t\t\t\t\t            <th scope=\"col\" class=\"align-middle\" style=\"border-right: 1px solid black\"> # </th>
                                <th scope=\"col\" class=\"align-middle\"> Slot ID </th>
                                <th scope=\"col\" class=\"align-middle\"> Numero CMR </th>
                                <th scope=\"col\" class=\"align-middle\"> Ditta emittente </th>
                                <th scope=\"col\" class=\"align-middle\"> Fornitore </th>
                                <th scope=\"col\" class=\"align-middle\"> Trasporto </th>
                                <th scope=\"col\" class=\"align-middle\"> Univoco </th>
                                <th scope=\"col\" class=\"align-middle\"> Data carico </th>
                                <th scope=\"col\" class=\"align-middle\"> Data scarico </th>
                                <th scope=\"col\" class=\"align-middle\"> Mese carico </th>
                                <th scope=\"col\" class=\"align-middle\"> Settimana scarico </th>
                                <th scope=\"col\" class=\"align-middle\" colspan=\"2\"> Mese scarico </th>
                                <th scope=\"col\" class=\"align-middle\"> Container<br>ATB </th>
                                <th scope=\"col\" class=\"align-middle\" style=\"border-left: 1px solid black\"> Nota </th>
                            </tr>
                        </thead>

                        <tbody>  
                        {% set id = 1 %}
                        {% for i in range(1, transports, 1) %}
                            {% for i in range(0, quantities|length - 1, 1) %}
                                <tr data-bs-toggle=\"collapse\" data-bs-target=\"#q-{{ quantities[i].id_transport }}\" class=\"accordion-toggle\" 
                                    aria-expanded=\"false\" style=\"font-size: 9px\">
                                    <td scope=\"row\" class=\"align-middle\" style=\"border-right: 1px solid black\">
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
                                    <td class=\"align-middle\" style=\"word-break: break-all; width: 12%\"> {{ transports[i].slot|upper }} </td>
                                    <td class=\"align-middle\" style=\"word-break: break-all; width: 12%\"> {{ transports[i].cmr|upper }} </td>
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
                                    <td class=\"align-middle\" style=\"border-left: 1px solid black\"> <i class=\"bi bi-info-circle\"></i> </td>
                                </tr>
                                    
                                    <tr>
                                        <td colspan=\"15\">
                                            <div class=\"accordian-body collapse rowQty\" id=\"q-{{ quantities[i].id_transport }}\"> 
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
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].price_typology }} </td>          
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
                                        TOTALE <i class=\"bi bi-fuel-pump-fill ms-1\"></i>:
                                            <span> 
                                                {{ countFull }} 
                                            </span>
                                    </h5> 
                                </td>
                            </tr>
                        </tfoot>
               \t    </table>
                </div> 
            </div>
        </div>
    </section>
{% endblock %}

{% block script %} 
    <script>
        \$('.hideshow').on('click',function(){
            let cls = \$(this).attr(\"data-id\")
        
            if ( \$('#'+cls).css('display') == 'none' ){
                \$('.table tbody').find('#'+cls).show();
            }else{
                \$('.table tbody').find('#'+cls).hide();
            }
        });
    </script>
    <style>
        table.qty tr td:empty {
  width: 50px;
}
  
table.qty tr td {
  padding-top: 10px;
  padding-bottom: 10px;
}
        
    </style>
{% endblock %}", "transports.html", "C:\\wamp\\www\\liquimet\\templates\\transports.html");
    }
}
