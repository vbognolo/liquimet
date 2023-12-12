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

/* category.html */
class __TwigTemplate_854203a71542fde3fa4f986f3e9d1e1c655799a4ea22135d96fcd54e9f3d8e0a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
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
        $this->parent = $this->loadTemplate("layout.html", "category.html", 1);
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
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "css/styles.css\" type=\"text/css\" rel=\"stylesheet\">
           
    <link rel=\"stylesheet\" href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\">

    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>  
    
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css\">
    <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
    
      <script src=\"https://code.jquery.com/jquery-3.6.0.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.13.2/jquery-ui.js\"></script>


        
    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap\" rel=\"stylesheet\">
";
    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
    <section class=\"grid-container mt-1 mb-0\"
        <div class=\"submenu align-items-center my-auto mx-auto p-2\">
            <div class=\"grid-item mx-auto my-1 p-1 justify-content-center\">
                <h2 class=\"my-1 p-4 submenu-title\"> 
                    Costo LNG
                </h2>
                
                    <div class=\"breadcrumb-holder justify-content-center mx-auto p-2 my-auto\" aria-label=\"breadcrumb\">
                        <ul class=\"rounded-breadcrumbs mx-auto my-auto p-1 justify-content-center\">
                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 49
            echo "                                ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["nav"], "navigation", [], "any", false, false, false, 49), 1)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["nav"], "id_group", [], "any", false, false, false, 49), 1)))) {
                // line 50
                echo "                                    <li ";
                if ((0 === twig_compare(($context["section"] ?? null), twig_get_attribute($this->env, $this->source, $context["nav"], "id_category", [], "any", false, false, false, 50)))) {
                    // line 51
                    echo "                                            class=\"active\"
                                        ";
                }
                // line 52
                echo ">
                                        
                                        <a class=\"breadcrumb-link\" aria-current=\"page\" style=\"width: 10em;\"
                                            ";
                // line 55
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["nav"], "id_category", [], "any", false, false, false, 55), 1))) {
                    // line 56
                    echo "                                                href=\"";
                    echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                    echo "transports/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "id_category", [], "any", false, false, false, 56), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "seo", [], "any", false, false, false, 56), "html", null, true);
                    echo "\"
                                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 57
$context["nav"], "id_category", [], "any", false, false, false, 57), 2))) {
                    // line 58
                    echo "                                                href=\"";
                    echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                    echo "quantity/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "id_category", [], "any", false, false, false, 58), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "seo", [], "any", false, false, false, 58), "html", null, true);
                    echo "\"
                                            ";
                } else {
                    // line 60
                    echo "                                                href=\"";
                    echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                    echo "partials/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "id_category", [], "any", false, false, false, 60), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "seo", [], "any", false, false, false, 60), "html", null, true);
                    echo "\"
                                            ";
                }
                // line 62
                echo "                                        >
                                                ";
                // line 63
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "category", [], "any", false, false, false, 63)), "html", null, true);
                echo " 
                                        </a>
                                    </li>
                                ";
            }
            // line 67
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                        </ul>
                    </div>
            </div>
        </div>
    </section>

    <section class=\"grid-container m-2\">
\t    <div class=\"col-md-12\">
    \t    <div class=\"panel panel-default\">
                <div class=\"panel-heading d-flex justify-content-end\">
                    <a role=\"button\" class=\"btn btn-outline-light bg-gradient btn-lg p-2 m-1\"
                        href=\"";
        // line 79
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "transport-add/\"> 
                            <i class=\"bi bi-plus-circle\" style=\"font-weight: 600\"></i> 
                                CREA NUOVO
                    </a>
                </div>
                
                <div class=\"panel-body\">
\t\t\t\t\t<table class=\"table table-responsive table-hover bg-success\" style=\"text-align: center; font-weight: 600;\" id=\"table\">
                        <thead>
                            <tr class=\"bg-info bg-gradient\">
\t\t\t\t\t            <th scope=\"col\" class=\"align-middle\"> # </th>
                                <th scope=\"col\" class=\"align-middle\"> Tipo </th>
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
                                <th scope=\"col\" class=\"align-middle\"> Container/ATB </th>
                                <th scope=\"col\" class=\"align-middle\"> Nota </th>
                            </tr>
                        </thead>

                        <tbody>  
                        ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["transports"] ?? null), 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 109
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["quantities"] ?? null)) - 1), 1));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 110
                echo "                                <tr data-bs-toggle=\"collapse\" data-bs-target=\"#q-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["quantities"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "id_transport", [], "any", false, false, false, 110), "html", null, true);
                echo "\" class=\"accordion-toggle\" 
                                    aria-expanded=\"false\">
                                    <td scope=\"row\" class=\"align-middle\">
                                        <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "transports/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["transports"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "id_transport", [], "any", false, false, false, 113), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["transports"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["i"]] ?? null) : null), "seo", [], "any", false, false, false, 113), "html", null, true);
                echo "\" class=\"text-dark\"
                                            aria-current=\"page\">
                                                ";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["transports"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["i"]] ?? null) : null), "id_transport", [], "any", false, false, false, 115), "html", null, true);
                echo "
                                        </a> <br>
                                        <a href=\"";
                // line 117
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "transport-edit/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["transports"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["i"]] ?? null) : null), "id_transport", [], "any", false, false, false, 117), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["transports"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["i"]] ?? null) : null), "seo", [], "any", false, false, false, 117), "html", null, true);
                echo "\" 
                                            class=\"text-dark\" role=\"button\">
                                            <i class=\"bi bi-pencil-square\"></i> 
                                        </a>
                                    </td>
                                    <td class=\"align-middle\"> 
                                        ";
                // line 123
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["transports"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["i"]] ?? null) : null), "type", [], "any", false, false, false, 123), 0))) {
                    // line 124
                    echo "                                            F 
                                        ";
                } else {
                    // line 126
                    echo "                                            P
                                        ";
                }
                // line 128
                echo "                                    </td>
                                    <td style=\"word-break: break-word;\" class=\"align-middle\"> ";
                // line 129
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["transports"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["i"]] ?? null) : null), "slot", [], "any", false, false, false, 129)), "html", null, true);
                echo " </td>
                                    <td style=\"word-break: break-all;\" class=\"align-middle\"> ";
                // line 130
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["transports"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["i"]] ?? null) : null), "cmr", [], "any", false, false, false, 130)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 131
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["transports"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["i"]] ?? null) : null), "issuer", [], "any", false, false, false, 131)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 132
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["transports"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[$context["i"]] ?? null) : null), "supplier", [], "any", false, false, false, 132)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 133
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["transports"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["i"]] ?? null) : null), "transport", [], "any", false, false, false, 133)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 134
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = ($context["transports"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["i"]] ?? null) : null), "univoco", [], "any", false, false, false, 134)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 135
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["transports"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[$context["i"]] ?? null) : null), "date_load", [], "any", false, false, false, 135), "d/m/Y"), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 136
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = ($context["transports"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[$context["i"]] ?? null) : null), "date_unload", [], "any", false, false, false, 136), "d/m/Y"), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["transports"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["i"]] ?? null) : null), "id_month_load", [], "any", false, false, false, 137), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 138
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = ($context["transports"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["i"]] ?? null) : null), "week_unload", [], "any", false, false, false, 138), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = ($context["transports"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[$context["i"]] ?? null) : null), "id_month_unload", [], "any", false, false, false, 139), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = ($context["transports"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[$context["i"]] ?? null) : null), "month_unload", [], "any", false, false, false, 139), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> ";
                // line 140
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = ($context["transports"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[$context["i"]] ?? null) : null), "container", [], "any", false, false, false, 140)), "html", null, true);
                echo " </td>
                                    <td class=\"align-middle\"> <i class=\"bi bi-info-circle\"></i> </td>
                                </tr>
                                    
                                    <tr>
                                        <td colspan=\"16\">
                                            <div class=\"accordian-body collapse rowQty\" id=\"q-";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = ($context["quantities"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[$context["i"]] ?? null) : null), "id_transport", [], "any", false, false, false, 146), "html", null, true);
                echo "\"> 
                                                <table class=\"table table-bordered\">
                                                    <tbody style=\"text-align: center\">
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Energia caricata </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = ($context["quantities"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[$context["i"]] ?? null) : null), "mwh", [], "any", false, false, false, 151), "html", null, true);
                echo " MWh</td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Quantità nominale caricata </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = ($context["quantities"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[$context["i"]] ?? null) : null), "kg_load", [], "any", false, false, false, 153), "html", null, true);
                echo " kg</td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Raffreddamento </th>            
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = ($context["quantities"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[$context["i"]] ?? null) : null), "cooling", [], "any", false, false, false, 155), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Tipologia costo extra </th>            
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = ($context["quantities"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[$context["i"]] ?? null) : null), "price_typology", [], "any", false, false, false, 157), "html", null, true);
                echo " </td>          
                                                        </tr>
                                                    
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Valore costo extra </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = ($context["quantities"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[$context["i"]] ?? null) : null), "price_value", [], "any", false, false, false, 162), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Quantità scaricata PD </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = ($context["quantities"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[$context["i"]] ?? null) : null), "kg_unload", [], "any", false, false, false, 164), "html", null, true);
                echo " kg</td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Densità (liquido) </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = ($context["quantities"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[$context["i"]] ?? null) : null), "liquid_density", [], "any", false, false, false, 166), "html", null, true);
                echo " kg &frasl; m<sup>3</sup></td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Peso specifico (gas) </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 168
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_28 = ($context["quantities"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[$context["i"]] ?? null) : null), "gas_weight", [], "any", false, false, false, 168), "html", null, true);
                echo " <sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub></td>
                                                        </tr>
                                                    
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> PCS/GHV <big>[</big><sup>MJ</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = ($context["quantities"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[$context["i"]] ?? null) : null), "mj_kg", [], "any", false, false, false, 173), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_30 = ($context["quantities"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[$context["i"]] ?? null) : null), "pcs_ghv", [], "any", false, false, false, 175), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Volume scaricato (liquido) <big>[</big>m<sup>3</sup><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 177
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_31 = ($context["quantities"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[$context["i"]] ?? null) : null), "volume_mc", [], "any", false, false, false, 177), "html", null, true);
                echo " </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Volume sviluppato <big>[</big><sup>Nm<sup>3</sup></sup>&frasl;<sub>m<sup>3</sup></sub><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_32 = ($context["quantities"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[$context["i"]] ?? null) : null), "volume_nmc", [], "any", false, false, false, 179), "html", null, true);
                echo " </td> 
                                                        </tr>
                                                    
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>m<sup>3</sup></sub> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 184
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_33 = ($context["quantities"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[$context["i"]] ?? null) : null), "smc_mc", [], "any", false, false, false, 184), "html", null, true);
                echo " </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Gas sviluppato <big>[</big>Nm<sup>3</sup><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_34 = ($context["quantities"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[$context["i"]] ?? null) : null), "gas_nmc", [], "any", false, false, false, 186), "html", null, true);
                echo " </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Gas sviluppato <big>[</big>Sm<sup>3</sup></sup><big>]</big> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 188
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_35 = ($context["quantities"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[$context["i"]] ?? null) : null), "gas_smc", [], "any", false, false, false, 188), "html", null, true);
                echo " </td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> <sup>Sm<sup>3</sup></sup>&frasl;&nbsp;<sub>kg</sub> </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> ";
                // line 190
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_36 = ($context["quantities"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[$context["i"]] ?? null) : null), "smc_kg", [], "any", false, false, false, 190), "html", null, true);
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
            // line 198
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                        </tbody>
               \t    </table>
                </div> 
            </div>
        </div>
    </section>    
";
    }

    // line 206
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 207
        echo "
    <script>


        \$('#table').dataTable( {
            select: true,
            responsive: true,
            paginate: true
        } );
    </script>

";
    }

    public function getTemplateName()
    {
        return "category.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 207,  461 => 206,  451 => 199,  445 => 198,  431 => 190,  426 => 188,  421 => 186,  416 => 184,  408 => 179,  403 => 177,  398 => 175,  393 => 173,  385 => 168,  380 => 166,  375 => 164,  370 => 162,  362 => 157,  357 => 155,  352 => 153,  347 => 151,  339 => 146,  330 => 140,  324 => 139,  320 => 138,  316 => 137,  312 => 136,  308 => 135,  304 => 134,  300 => 133,  296 => 132,  292 => 131,  288 => 130,  284 => 129,  281 => 128,  277 => 126,  273 => 124,  271 => 123,  258 => 117,  253 => 115,  244 => 113,  237 => 110,  232 => 109,  228 => 108,  196 => 79,  183 => 68,  177 => 67,  170 => 63,  167 => 62,  157 => 60,  147 => 58,  145 => 57,  136 => 56,  134 => 55,  129 => 52,  125 => 51,  122 => 50,  119 => 49,  115 => 48,  100 => 38,  66 => 7,  62 => 5,  58 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block title %} Piattaforma {{ 'now'|date('Y') }} {% endblock %}

{% block head %}
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <link href=\"{{ doc_root }}css/styles.css\" type=\"text/css\" rel=\"stylesheet\">
           
    <link rel=\"stylesheet\" href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\">

    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>  
    
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css\">
    <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
    
      <script src=\"https://code.jquery.com/jquery-3.6.0.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.13.2/jquery-ui.js\"></script>


        
    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap\" rel=\"stylesheet\">
{% endblock %}

{% block content %} 
    <section class=\"grid-container mt-1 mb-0\"
        <div class=\"submenu align-items-center my-auto mx-auto p-2\">
            <div class=\"grid-item mx-auto my-1 p-1 justify-content-center\">
                <h2 class=\"my-1 p-4 submenu-title\"> 
                    Costo LNG
                </h2>
                
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

    <section class=\"grid-container m-2\">
\t    <div class=\"col-md-12\">
    \t    <div class=\"panel panel-default\">
                <div class=\"panel-heading d-flex justify-content-end\">
                    <a role=\"button\" class=\"btn btn-outline-light bg-gradient btn-lg p-2 m-1\"
                        href=\"{{ doc_root }}transport-add/\"> 
                            <i class=\"bi bi-plus-circle\" style=\"font-weight: 600\"></i> 
                                CREA NUOVO
                    </a>
                </div>
                
                <div class=\"panel-body\">
\t\t\t\t\t<table class=\"table table-responsive table-hover bg-success\" style=\"text-align: center; font-weight: 600;\" id=\"table\">
                        <thead>
                            <tr class=\"bg-info bg-gradient\">
\t\t\t\t\t            <th scope=\"col\" class=\"align-middle\"> # </th>
                                <th scope=\"col\" class=\"align-middle\"> Tipo </th>
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
                                <th scope=\"col\" class=\"align-middle\"> Container/ATB </th>
                                <th scope=\"col\" class=\"align-middle\"> Nota </th>
                            </tr>
                        </thead>

                        <tbody>  
                        {% for i in range(1, transports, 1) %}
                            {% for i in range(0, quantities|length - 1, 1) %}
                                <tr data-bs-toggle=\"collapse\" data-bs-target=\"#q-{{ quantities[i].id_transport }}\" class=\"accordion-toggle\" 
                                    aria-expanded=\"false\">
                                    <td scope=\"row\" class=\"align-middle\">
                                        <a href=\"{{ doc_root }}transports/{{ transports[i].id_transport }}/{{ transports[i].seo }}\" class=\"text-dark\"
                                            aria-current=\"page\">
                                                {{ transports[i].id_transport }}
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
                                    <td style=\"word-break: break-word;\" class=\"align-middle\"> {{ transports[i].slot|upper }} </td>
                                    <td style=\"word-break: break-all;\" class=\"align-middle\"> {{ transports[i].cmr|upper }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].issuer|upper }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].supplier|upper }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].transport|upper }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].univoco|upper }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].date_load|date(\"d/m/Y\") }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].date_unload|date(\"d/m/Y\") }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].id_month_load }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].week_unload }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].id_month_unload }} - {{ transports[i].month_unload }} </td>
                                    <td class=\"align-middle\"> {{ transports[i].container|upper }} </td>
                                    <td class=\"align-middle\"> <i class=\"bi bi-info-circle\"></i> </td>
                                </tr>
                                    
                                    <tr>
                                        <td colspan=\"16\">
                                            <div class=\"accordian-body collapse rowQty\" id=\"q-{{ quantities[i].id_transport }}\"> 
                                                <table class=\"table table-bordered\">
                                                    <tbody style=\"text-align: center\">
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Energia caricata </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].mwh }} MWh</td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Quantità nominale caricata </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].kg_load }} kg</td>   
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Raffreddamento </th>            
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].cooling }} </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Tipologia costo extra </th>            
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].price_typology }} </td>          
                                                        </tr>
                                                    
                                                        <tr>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Valore costo extra </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].price_value }} </td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Quantità scaricata PD </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].kg_unload }} kg</td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Densità (liquido) </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].liquid_density }} kg &frasl; m<sup>3</sup></td>
                                                            <th class=\"bg-secondary bg-gradient align-middle\"> Peso specifico (gas) </th>
                                                            <td class=\"bg-light bg-gradient align-middle\"> {{ quantities[i].gas_weight }} <sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub></td>
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
               \t    </table>
                </div> 
            </div>
        </div>
    </section>    
{% endblock %}
{% block script %}

    <script>


        \$('#table').dataTable( {
            select: true,
            responsive: true,
            paginate: true
        } );
    </script>

{% endblock %}", "category.html", "C:\\wamp\\www\\liquimet\\templates\\category.html");
    }
}
