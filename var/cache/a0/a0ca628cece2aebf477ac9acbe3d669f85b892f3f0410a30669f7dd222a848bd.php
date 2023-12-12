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

/* transport-edit.html */
class __TwigTemplate_a99c3b7753f0f76a053c005d15acde831702679ed40581ac076d323f245ef95f extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "transport-edit.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Trasporto: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "seo", [], "any", false, false, false, 2), "html", null, true);
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

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
    <section class=\"grid-container my-auto mx-auto d-flex justify-content-center\">
        <form id=\"msform\" novalidate action=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "transport-add\" method=\"post\">

                        <!-- !! PROGRESS BAR !! -->
            <div class=\"container mb-2 pb-2\" style=\"max-width: 45rem\">
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\"
                        style=\"background: rgb(238,9,121); background: radial-gradient(circle, rgba(238,9,121,1) 35%, rgba(227,103,163,1) 100%)\">
                    </div>
                </div>
            </div>
                        <!-- !! END PROGRESS BAR !! -->
                
                    <!-- !! FIELDSET 1 (EDIT TRANSPORT) !! -->
            <fieldset>
                <div class=\"form-card pt-0\">
                    <div class=\"form-title row mt-2 pt-0 mx-auto\">
                        <h2 class=\"fs-title\"> 
                            <i class=\"bi bi-truck-front\"></i> 
                                &nbsp;Trasporto #";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "seo", [], "any", false, false, false, 49), "html", null, true);
        echo "&nbsp;
                            <i class=\"bi bi-truck-front\"></i> 
                        </h2>
                        
                        <h3 class=\"fs-subtitle pt-0 mt-0\"> 
                            Modifica il trasporto. 
                        </h3>
                    </div>

                    <div class=\"form-group row mx-auto my-2 px-3 py-2\">
                        <div class=\"col-lg-4\">
                            <label class=\"form-control-label mb-0\" for=\"type\"> Tipo </label>
                                <select class=\"form-control\" name=\"type\" id=\"type\">
                                    <option value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "type", [], "any", false, false, false, 62), "html", null, true);
        echo "\">
                                        ";
        // line 63
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "type", [], "any", false, false, false, 63), "0"))) {
            // line 64
            echo "                                            Trasporto pieno
                                        ";
        } else {
            // line 66
            echo "                                            Trasporto parziale
                                        ";
        }
        // line 68
        echo "                                    </option>
                                    <option value=\"0\"> Trasporto pieno </option>
                                    <option value=\"1\"> Trasporto parziale </option>
                                </select>
                        </div>            
                                
                        <div class=\"col-lg-4\">
                            <label for=\"slot\" class=\"form-control-label mb-0\"> Slot ID </label>
                            <input type=\"text\" class=\"form-control\" name=\"slot\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "slot", [], "any", false, false, false, 76), "html", null, true);
        echo "\"/>
                        </div>
                                    
                        <div class=\"col-lg-4\">
                            <label for=\"cmr\" class=\"form-control-label mb-0\"> Numero CMR </label>
                            <input type=\"text\" class=\"form-control\" name=\"cmr\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "cmr", [], "any", false, false, false, 81), "html", null, true);
        echo "\"/>
                        </div>
                                    
                        <div class=\"col-lg-4\">
                            <label for=\"issuer\" class=\"form-control-label mb-0\"> Ditta emittente </label>
                            <input type=\"text\" class=\"form-control\" name=\"issuer\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "issuer", [], "any", false, false, false, 86), "html", null, true);
        echo "\"/>
                        </div>
                                
                        <div class=\"col-lg-4\">
                            <label for=\"supplier\" class=\"form-control-label mb-0\"> Fornitore </label>
                            <input type=\"text\" class=\"form-control\" name=\"supplier\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "supplier", [], "any", false, false, false, 91), "html", null, true);
        echo "\"/>
                        </div>
                                
                        <div class=\"col-lg-4\">
                            <label for=\"transport\" class=\"form-control-label mb-0\"> Trasporto </label>
                            <input type=\"text\" class=\"form-control\" name=\"transport\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "transport", [], "any", false, false, false, 96), "html", null, true);
        echo "\"/>
                        </div>
                                    
                        <div class=\"col-lg-4\">
                            <label for=\"date_load\" class=\"form-control-label mb-0\" data-toggle=\"tooltip\" title=\"-- Terminale\"> Data carico </label>
                            <input type=\"text\" class=\"datepicker_input form-control\" name=\"date_load\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "date_load", [], "any", false, false, false, 101), "d/m/Y"), "html", null, true);
        echo "\"/>
                        </div>
                                    
                        <div class=\"col-lg-4\">
                            <label for=\"date_unload\" class=\"form-control-label mb-0\" data-toggle=\"tooltip\" title=\"-- Padova\"> Data scarico </label>
                            <input type=\"text\" class=\"datepicker_input form-control\" name=\"date_unload\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "date_unload", [], "any", false, false, false, 106), "d/m/Y"), "html", null, true);
        echo "\"/>
                        </div>
                                
                        <div class=\"col-lg-4\"> 
                            <label for=\"container\" class=\"form-control-label mb-0\"> Container </label>
                            <input type=\"text\" class=\"form-control\" name=\"container\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "container", [], "any", false, false, false, 111), "html", null, true);
        echo "\"/>
                        </div>
                                    
                        <div class=\"col-lg-12\">
                            <label for=\"note\" class=\"form-control-label mb-0\"> Nota </label>
                            <textarea rows=\"2\" class=\"form-control\" name=\"note\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "note", [], "any", false, false, false, 116), "html", null, true);
        echo "\"></textarea>
                        </div>
                    </div>    
                </div>
                        
                <button type=\"reset\" name=\"reset\" class=\"reset action-button mb-2 mt-2 mx-auto\" value=\"reset\"> Cancella </button>
                <button type=\"button\" name=\"next\" class=\"next action-button mb-2 mt-2\" style=\"position: absolute; right: 4rem\"> Avanti </button>
            </fieldset>
                    <!-- !! END FIELDSET 1 (EDIT TRANSPORT !! -->

                    <!-- !! FIELDSET 2 (EDIT QUANTITY) !! -->
            <fieldset>
                <div class=\"form-card pt-0 quantity\">
                    <div class=\"form-title row mt-2 pt-0 mx-auto\">
                        <h2 class=\"fs-title\"> 
                            <i class=\"bi bi-truck\"></i> 
                                &nbsp;Quantità #";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "seo", [], "any", false, false, false, 132), "html", null, true);
        echo "&nbsp; 
                            <i class=\"bi bi-truck\"></i> 
                        </h2>
                        
                        <h3 class=\"fs-subtitle pt-0 mt-0\"> 
                            Modifica le quantità del trasporto. 
                        </h3>
                    </div>
                        
                    <div class=\"form-group row mx-auto my-2 px-3 py-2\">
                        <div class=\"col-lg-5\">
                            <label for=\"kg_load\" class=\"form-control-label mb-0\" data-toggle=\"tooltip\" title=\"-- Quantità nominale [ kg ]\"> 
                                Quantità caricata 
                            </label>
                            <input type=\"text\" class=\"form-control\" name=\"kg_load\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "kg_load", [], "any", false, false, false, 146), "html", null, true);
        echo "\"/>
                        </div>
                            &nbsp;
                        <div class=\"col-lg-5\">
                            <label class=\"form-control-label mb-0\" for=\"cooling\"> Raffreddamento </label>
                                <select class=\"form-control\" name=\"cooling\" id=\"cooling\">
                                    <option value=\"";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "cooling", [], "any", false, false, false, 152), "html", null, true);
        echo "\"></option>
                                    <option value=\"600\"> Sì - 600 (seicento) </option>
                                    <option value=\"0\"> No - 0 (zero) </option>
                                </select>
                        </div>  
                            &nbsp;
                        <div class=\"col-lg-5\">
                            <label class=\"form-control-label mb-0\" for=\"price_typology\"> Tipologia costo </label>
                                <select class=\"form-control\" name=\"price_typology\" id=\"price_typology\">
                                    <option value=\"";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "price_typology", [], "any", false, false, false, 161), "html", null, true);
        echo "\"></option>
                                    <option value=\"1\"> Sì </option>
                                    <option value=\"0\"> No </option>
                                </select>
                        </div> 
                            &nbsp;
                        <div class=\"col-lg-5\">
                            <label for=\"price_value\" class=\"form-control-label mb-0 price_value\"> 
                                Valore costo 
                            </label>
                            <input type=\"text\" class=\"form-control\" name=\"price_value\" id=\"price_value\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "price_value", [], "any", false, false, false, 171), "html", null, true);
        echo "\" />
                        </div>
                            &nbsp;
                        <div class=\"col-lg-5\">
                            <label for=\"kg_unload\" class=\"form-control-label mb-0\" data-toggle=\"tooltip\" title=\"-- [ kg ]\"> 
                                Quantità scaricata PD 
                            </label>
                            <input type=\"text\" class=\"form-control\" name=\"kg_unload\" value=\"";
        // line 178
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "kg_unload", [], "any", false, false, false, 178), "html", null, true);
        echo "\"/>
                        </div>
                            &nbsp;
                        <div class=\"col-lg-5\">
                            <label for=\"liquid_density\" class=\"form-control-label mb-0\" data-toggle=\"tooltip\" title=\"-- [ kg &frasl; m³ ]\"> 
                                Densità (liquido) 
                            </label>
                            <input type=\"text\" class=\"form-control\" name=\"liquid_density\" value=\"";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "liquid_density", [], "any", false, false, false, 185), "html", null, true);
        echo "\"/>
                        </div>
                            &nbsp;
                        <div class=\"col-lg-5\">
                            <label for=\"gas_weight\" class=\"form-control-label mb-0\" data-toggle=\"tooltip\" title=\"-- [ kg &frasl; Nm³ ]\"> 
                                Peso specifico (gas)
                            </label>
                            <input type=\"text\" class=\"form-control\" name=\"gas_weight\" value=\"";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "gas_weight", [], "any", false, false, false, 192), "html", null, true);
        echo "\"/>
                        </div>
                            &nbsp;
                        <div class=\"col-lg-5\">
                            <label for=\"pcs_ghv\" class=\"form-control-label mb-0\"> PCS/GHV </label>
                            <input type=\"text\" class=\"form-control\" name=\"pcs_ghv\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "pcs_ghv", [], "any", false, false, false, 197), "html", null, true);
        echo "\"/>
                        </div>
                    </div>          
                </div>

                <button type=\"button\" name=\"previous\" class=\"previous action-button mb-2 mt-2\" style=\"position: absolute; left: 4rem\"> Indietro </button>
                <button type=\"reset\" name=\"reset\" class=\"reset action-button mb-2 mt-2 mx-auto\" id=\"reset\"> Cancella </button>
                <button type=\"button\" name=\"next\" class=\"next action-button mb-2 mt-2\" style=\"position: absolute; right: 4rem\"> Avanti </button>
            </fieldset>
                    <!-- !! END FIELDSET 2 (EDIT QUANTITY) !! -->

                    <!-- !! FIELDSET 3 (EDIT PARTIAL) !! -->
            <fieldset>
                <div class=\"form-card pt-0 partials\">
                    <div class=\"form-title row mt-2 pt-0 mx-auto\">
                        <h2 class=\"fs-title\"> 
                            <i class=\"bi bi-truck-flatbed\"></i> 
                                &nbsp;Parziali #";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "seo", [], "any", false, false, false, 214), "html", null, true);
        echo "&nbsp; 
                            <i class=\"bi bi-truck-flatbed\"></i> 
                        </h2>
                        
                        <h3 class=\"fs-subtitle pt-0 mt-0\"> 
                            Modifica gli scaricamenti parziali del trasporto. 
                        </h3>
                    </div>

                    <div class=\"form-group mx-auto my-2 px-2 py-2 table-responsive\">
                        <table id=\"partials\" class=\"table table-sm table-borderless\" align=\"center\" border=\"2\">
                            <tr class=\"mx-auto mb-0 pb-0\">
                                <th scope=\"col\" class=\"m-auto p-0\" data-toggle=\"tooltip\" title=\"-- Dest. cliente\"> Destinazione </th>
                                <th scope=\"col\" class=\"m-auto p-0\" colspan=\"2\"> EXW </th>
                                <th scope=\"col\" class=\"m-auto p-0\" data-toggle=\"tooltip\" title=\"-- Data scarico\"> Data </th>
                                <th scope=\"col\" class=\"m-auto p-0\" data-toggle=\"tooltip\" title=\"-- Luogo scarico\"> Luogo </th>
                                <th scope=\"col\" class=\"m-auto p-0\" data-toggle=\"tooltip\" title=\"-- Quantità scaricata [ kg ]\"> Quantità </th>
                                <th scope=\"col\" class=\"m-auto p-0\" data-toggle=\"tooltip\" title=\"-- Rif.\"> Fattura </th>
                                <th scope=\"col\" class=\"m-auto p-0\" style=\"font-size: 17px\"> <i class=\"bi bi-info-square\"></i> </th>                   
                            </tr>
                                            
                            <tr class=\"mx-auto mt-0 pt-0\" id=\"row1\" name=\"num_partials\">
                                <td>
                                    <input type=\"text\" id=\"destination\" name=\"destination\" class=\"form-control\" value=\"";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["partial"] ?? null), "destination", [], "any", false, false, false, 237), "html", null, true);
        echo "\" /> 
                                </td>

                                <td colspan=\"2\">
                                    <select class=\"form-control\" name=\"exw\" id=\"exw\">
                                        <option value=\"";
        // line 242
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["partial"] ?? null), "exw", [], "any", false, false, false, 242), "html", null, true);
        echo "\"></option>
                                        <option value=\"fos\"> FOS </option>
                                        <option value=\"destino\"> DESTINO </option>
                                    </select>
                                </td>
                                            
                                <td> 
                                    <input type=\"text\" class=\"datepicker_input form-control\" name=\"date\" value=\"";
        // line 249
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["partial"] ?? null), "date", [], "any", false, false, false, 249), "html", null, true);
        echo "\"/>
                                </td>
                        
                                <td>
                                    <input type=\"text\" class=\"form-control\" name=\"place\" value=\"";
        // line 253
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["partial"] ?? null), "place", [], "any", false, false, false, 253), "html", null, true);
        echo "\" />
                                </td>
                        
                                <td>
                                    <input type=\"text\" class=\"form-control\" name=\"q_unloaded\" value=\"";
        // line 257
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["partial"] ?? null), "q_unloaded", [], "any", false, false, false, 257), "html", null, true);
        echo "\"/>
                                </td>
                        
                                <td>
                                    <input type=\"text\" class=\"form-control\" name=\"invoice\" value=\"";
        // line 261
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["partial"] ?? null), "invoice", [], "any", false, false, false, 261), "html", null, true);
        echo "\" />
                                </td>

                                <td class=\"mx-auto\">
                                    <button type=\"button\" class=\"btn btn-outline-danger btn-sm d-flex justify-content-center m-auto p-0\" onclick=\"delete_row('row3')\"
                                        style=\"text-align: center; height: 38px; width: 38px; border-radius: 50%\"
                                        data-toggle=\"tooltip\" title=\"-- Rimuovi\">
                                        <i class=\"bi bi-x-lg m-auto\"></i>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <button type=\"button\" name=\"previous\" class=\"previous action-button mb-3 mt-2\" style=\"position: absolute; left: 4rem\"> Indietro </button>
                <button type=\"reset\" name=\"reset\" class=\"reset action-button mb-3 mt-2 mx-auto\" id=\"reset\"> Cancella </button>
                    &nbsp;
                <button type=\"button\" name=\"add\" class=\"add action-button mb-2 mt-2 mx-auto\" onclick=\"add_row()\"> Aggiungi </button>
                <button type=\"button\" name=\"next\" class=\"next action-button mb-2 mt-2\" style=\"position: absolute; right: 4rem\"> Avanti </button>     
            </fieldset>
                    <!-- !! END FIELDSET 3 (EDIT PARTIAL) !! -->

                    <!-- !! FIELDSET 4 (CONFIRM NEW TRANSPORT) !! -->
            <fieldset>
                <div class=\"form-card pt-0\">
                    <div class=\"form-title row mt-2 pt-0 mx-auto\">
                        <h2 class=\"fs-title\"> 
                            <i class=\"bi bi-check\"></i> 
                                &nbsp;Conferma&nbsp; 
                            <i class=\"bi bi-circle-check\"></i> 
                        </h2>
                        
                        <h3 class=\"fs-subtitle pt-0 mt-0\"> 
                            Confermare l'inserimento del nuovo trasporto. 
                        </h3>
                    </div>
                            <div class=\"col-lg-12\">
                                Trasporto creato con successo!
                            </div>
                </div>
                        
                <button type=\"button\" class=\"action-button mb-2 mx-auto\">
                    <a href=\"";
        // line 304
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "category/1/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "seo", [], "any", false, false, false, 304), "html", null, true);
        echo "\" class=\"text-light\"> Piattaforma </a>
                </button> 
                <button type=\"submit\" name=\"submit\" class=\"submit action-button mb-3 mt-2 mx-auto\"> Salva </button>
            </fieldset>
                    <!-- !! END FIELDSET 4 (CONFIRM NEW TRANSPORT) !! -->
        </form>
    </section>
";
    }

    // line 313
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "    
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css\" integrity=\"sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We\" crossorigin=\"anonymous\">      <!-- Bootstrap 5 CSS -->
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>              <!-- Vanilla Datepicker CSS -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.3.4/dist/css/datepicker-bs5.min.css\">          <!-- Vanilla Datepicker CSS -->
<script src=\"https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.3.4/dist/js/datepicker.min.js\"></script>
    
    <script>
        \$(document).ready(function(){
            /*      multi-step fieldset change      */
            var current = 1,current_step,next_step,steps;
            steps = \$(\"fieldset\").length;

                \$(\".next\").click(function(){
                    current_step = \$(this).parent();
                    
                    if(current == '2' && \$('#type option:selected').val() == '0'){
                        next_step = \$(this).parent().next().next();
                        ++current;
                    } else{
                        next_step = \$(this).parent().next();
                    }
                    
                    next_step.show();
                    current_step.hide();
                    setProgressBar(++current);
                });

                \$(\".previous\").click(function(){
                    current_step = \$(this).parent();
                
                    if(current == '4' && \$('#type option:selected').val() == '0'){
                        next_step = \$(this).parent().prev().prev();
                        --current;
                    } else{
                        next_step = \$(this).parent().prev();
                    }

                    next_step.show();
                    current_step.hide();
                    setProgressBar(--current);
                });
            
                setProgressBar(current);
                        // change progress bar action
                function setProgressBar(curStep){
                    var percent = parseFloat(100 / steps) * curStep;
                    percent = percent.toFixed();
                
                    \$(\".progress-bar\")
                        .css(\"width\",percent+\"%\")
                        .html(percent+\"%\");\t\t
                    }


            /*      vanillajs-datepicker 1.1.4      */
            const getDatePickerTitle = elem => {
                const label = elem.nextElementSibling;                  // from the label or the aria-label
                let titleText = '';
                        
                if(label && label.tagName === 'label'){
                    titleText = label.textContent;
                } else{
                    titleText = elem.getAttribute('aria-label') || '';
                }
                                
                return titleText;
            }

            const elems = document.querySelectorAll('.datepicker_input');
                for(const elem of elems){
                    const datepicker = new Datepicker(elem, {
                        'format': 'dd-mm-yyyy',
                        title: getDatePickerTitle(elem)
                    });
                }  

            /*      tooltip     */
            \$(\"body\").tooltip({ 
                selector: '[data-toggle = tooltip]',
                placement: 'right' 
            });
            
            /*      price typology select disabled change       */
            \$('#price_typology').change(function(){
                if(\$(this).val() == '1'){
                    \$('#price_value').attr('disabled', false);
                    \$('#price_value').css({
                        'background': '#fff',
                        'border': '1px solid #0066cc'
                    });

                        \$(\"#price_value\").focus(function(){
                            \$(\"#price_value\").css({
                                '-moz-box-shadow': '0 0 0 1px rgba(113,191,68) !important',
                                '-webkit-box-shadow': '0 0 0 1px rgba(113,191,68) !important',
                                'box-shadow': '0 0 0 1px rgba(113,191,68) !important',
                                'border': '1px solid #71bf44',
                                'outline-width': '0',
                                'transition': 'all 0.2s ease-out',
                                '-webkit-transition': 'all 0.2s ease-out',
                                '-moz-transition': 'all 0.2s ease-out',
                                '-o-transition': 'all 0.2s ease-out'
                            });
                        });
                } else{
                    \$('#price_value').val('0');
                    \$('#price_value').css({
                        'background': 'none',
                        'border': '1px solid rgb(160, 180, 185)'
                    });
                }
            });

            /*      reset button       */
            \$('#reset').click(function(){
                \$('#price_value').val('');
                \$('#price_value').css({
                    'background': 'none',
                    'border': '1px solid rgb(160, 180, 185)'
                });
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "transport-edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 313,  462 => 304,  416 => 261,  409 => 257,  402 => 253,  395 => 249,  385 => 242,  377 => 237,  351 => 214,  331 => 197,  323 => 192,  313 => 185,  303 => 178,  293 => 171,  280 => 161,  268 => 152,  259 => 146,  242 => 132,  223 => 116,  215 => 111,  207 => 106,  199 => 101,  191 => 96,  183 => 91,  175 => 86,  167 => 81,  159 => 76,  149 => 68,  145 => 66,  141 => 64,  139 => 63,  135 => 62,  119 => 49,  98 => 31,  91 => 29,  66 => 7,  62 => 5,  58 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block title %} Trasporto: {{ transport.seo }} {% endblock %}

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
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>  
        
    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap\" rel=\"stylesheet\">
{% endblock %}

{% block content %} 
    <section class=\"grid-container my-auto mx-auto d-flex justify-content-center\">
        <form id=\"msform\" novalidate action=\"{{ doc_root }}transport-add\" method=\"post\">

                        <!-- !! PROGRESS BAR !! -->
            <div class=\"container mb-2 pb-2\" style=\"max-width: 45rem\">
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\"
                        style=\"background: rgb(238,9,121); background: radial-gradient(circle, rgba(238,9,121,1) 35%, rgba(227,103,163,1) 100%)\">
                    </div>
                </div>
            </div>
                        <!-- !! END PROGRESS BAR !! -->
                
                    <!-- !! FIELDSET 1 (EDIT TRANSPORT) !! -->
            <fieldset>
                <div class=\"form-card pt-0\">
                    <div class=\"form-title row mt-2 pt-0 mx-auto\">
                        <h2 class=\"fs-title\"> 
                            <i class=\"bi bi-truck-front\"></i> 
                                &nbsp;Trasporto #{{ transport.seo }}&nbsp;
                            <i class=\"bi bi-truck-front\"></i> 
                        </h2>
                        
                        <h3 class=\"fs-subtitle pt-0 mt-0\"> 
                            Modifica il trasporto. 
                        </h3>
                    </div>

                    <div class=\"form-group row mx-auto my-2 px-3 py-2\">
                        <div class=\"col-lg-4\">
                            <label class=\"form-control-label mb-0\" for=\"type\"> Tipo </label>
                                <select class=\"form-control\" name=\"type\" id=\"type\">
                                    <option value=\"{{ transport.type }}\">
                                        {% if transport.type == '0'%}
                                            Trasporto pieno
                                        {% else %}
                                            Trasporto parziale
                                        {% endif %}
                                    </option>
                                    <option value=\"0\"> Trasporto pieno </option>
                                    <option value=\"1\"> Trasporto parziale </option>
                                </select>
                        </div>            
                                
                        <div class=\"col-lg-4\">
                            <label for=\"slot\" class=\"form-control-label mb-0\"> Slot ID </label>
                            <input type=\"text\" class=\"form-control\" name=\"slot\" value=\"{{ transport.slot }}\"/>
                        </div>
                                    
                        <div class=\"col-lg-4\">
                            <label for=\"cmr\" class=\"form-control-label mb-0\"> Numero CMR </label>
                            <input type=\"text\" class=\"form-control\" name=\"cmr\" value=\"{{ transport.cmr }}\"/>
                        </div>
                                    
                        <div class=\"col-lg-4\">
                            <label for=\"issuer\" class=\"form-control-label mb-0\"> Ditta emittente </label>
                            <input type=\"text\" class=\"form-control\" name=\"issuer\" value=\"{{ transport.issuer }}\"/>
                        </div>
                                
                        <div class=\"col-lg-4\">
                            <label for=\"supplier\" class=\"form-control-label mb-0\"> Fornitore </label>
                            <input type=\"text\" class=\"form-control\" name=\"supplier\" value=\"{{ transport.supplier }}\"/>
                        </div>
                                
                        <div class=\"col-lg-4\">
                            <label for=\"transport\" class=\"form-control-label mb-0\"> Trasporto </label>
                            <input type=\"text\" class=\"form-control\" name=\"transport\" value=\"{{ transport.transport }}\"/>
                        </div>
                                    
                        <div class=\"col-lg-4\">
                            <label for=\"date_load\" class=\"form-control-label mb-0\" data-toggle=\"tooltip\" title=\"-- Terminale\"> Data carico </label>
                            <input type=\"text\" class=\"datepicker_input form-control\" name=\"date_load\" value=\"{{ transport.date_load|date('d/m/Y') }}\"/>
                        </div>
                                    
                        <div class=\"col-lg-4\">
                            <label for=\"date_unload\" class=\"form-control-label mb-0\" data-toggle=\"tooltip\" title=\"-- Padova\"> Data scarico </label>
                            <input type=\"text\" class=\"datepicker_input form-control\" name=\"date_unload\" value=\"{{ transport.date_unload|date('d/m/Y') }}\"/>
                        </div>
                                
                        <div class=\"col-lg-4\"> 
                            <label for=\"container\" class=\"form-control-label mb-0\"> Container </label>
                            <input type=\"text\" class=\"form-control\" name=\"container\" value=\"{{ transport.container }}\"/>
                        </div>
                                    
                        <div class=\"col-lg-12\">
                            <label for=\"note\" class=\"form-control-label mb-0\"> Nota </label>
                            <textarea rows=\"2\" class=\"form-control\" name=\"note\" value=\"{{ transport.note }}\"></textarea>
                        </div>
                    </div>    
                </div>
                        
                <button type=\"reset\" name=\"reset\" class=\"reset action-button mb-2 mt-2 mx-auto\" value=\"reset\"> Cancella </button>
                <button type=\"button\" name=\"next\" class=\"next action-button mb-2 mt-2\" style=\"position: absolute; right: 4rem\"> Avanti </button>
            </fieldset>
                    <!-- !! END FIELDSET 1 (EDIT TRANSPORT !! -->

                    <!-- !! FIELDSET 2 (EDIT QUANTITY) !! -->
            <fieldset>
                <div class=\"form-card pt-0 quantity\">
                    <div class=\"form-title row mt-2 pt-0 mx-auto\">
                        <h2 class=\"fs-title\"> 
                            <i class=\"bi bi-truck\"></i> 
                                &nbsp;Quantità #{{ transport.seo }}&nbsp; 
                            <i class=\"bi bi-truck\"></i> 
                        </h2>
                        
                        <h3 class=\"fs-subtitle pt-0 mt-0\"> 
                            Modifica le quantità del trasporto. 
                        </h3>
                    </div>
                        
                    <div class=\"form-group row mx-auto my-2 px-3 py-2\">
                        <div class=\"col-lg-5\">
                            <label for=\"kg_load\" class=\"form-control-label mb-0\" data-toggle=\"tooltip\" title=\"-- Quantità nominale [ kg ]\"> 
                                Quantità caricata 
                            </label>
                            <input type=\"text\" class=\"form-control\" name=\"kg_load\" value=\"{{ quantity.kg_load }}\"/>
                        </div>
                            &nbsp;
                        <div class=\"col-lg-5\">
                            <label class=\"form-control-label mb-0\" for=\"cooling\"> Raffreddamento </label>
                                <select class=\"form-control\" name=\"cooling\" id=\"cooling\">
                                    <option value=\"{{ quantity.cooling }}\"></option>
                                    <option value=\"600\"> Sì - 600 (seicento) </option>
                                    <option value=\"0\"> No - 0 (zero) </option>
                                </select>
                        </div>  
                            &nbsp;
                        <div class=\"col-lg-5\">
                            <label class=\"form-control-label mb-0\" for=\"price_typology\"> Tipologia costo </label>
                                <select class=\"form-control\" name=\"price_typology\" id=\"price_typology\">
                                    <option value=\"{{ quantity.price_typology }}\"></option>
                                    <option value=\"1\"> Sì </option>
                                    <option value=\"0\"> No </option>
                                </select>
                        </div> 
                            &nbsp;
                        <div class=\"col-lg-5\">
                            <label for=\"price_value\" class=\"form-control-label mb-0 price_value\"> 
                                Valore costo 
                            </label>
                            <input type=\"text\" class=\"form-control\" name=\"price_value\" id=\"price_value\" value=\"{{ quantity.price_value }}\" />
                        </div>
                            &nbsp;
                        <div class=\"col-lg-5\">
                            <label for=\"kg_unload\" class=\"form-control-label mb-0\" data-toggle=\"tooltip\" title=\"-- [ kg ]\"> 
                                Quantità scaricata PD 
                            </label>
                            <input type=\"text\" class=\"form-control\" name=\"kg_unload\" value=\"{{ quantity.kg_unload }}\"/>
                        </div>
                            &nbsp;
                        <div class=\"col-lg-5\">
                            <label for=\"liquid_density\" class=\"form-control-label mb-0\" data-toggle=\"tooltip\" title=\"-- [ kg &frasl; m³ ]\"> 
                                Densità (liquido) 
                            </label>
                            <input type=\"text\" class=\"form-control\" name=\"liquid_density\" value=\"{{ quantity.liquid_density }}\"/>
                        </div>
                            &nbsp;
                        <div class=\"col-lg-5\">
                            <label for=\"gas_weight\" class=\"form-control-label mb-0\" data-toggle=\"tooltip\" title=\"-- [ kg &frasl; Nm³ ]\"> 
                                Peso specifico (gas)
                            </label>
                            <input type=\"text\" class=\"form-control\" name=\"gas_weight\" value=\"{{ quantity.gas_weight }}\"/>
                        </div>
                            &nbsp;
                        <div class=\"col-lg-5\">
                            <label for=\"pcs_ghv\" class=\"form-control-label mb-0\"> PCS/GHV </label>
                            <input type=\"text\" class=\"form-control\" name=\"pcs_ghv\" value=\"{{ quantity.pcs_ghv }}\"/>
                        </div>
                    </div>          
                </div>

                <button type=\"button\" name=\"previous\" class=\"previous action-button mb-2 mt-2\" style=\"position: absolute; left: 4rem\"> Indietro </button>
                <button type=\"reset\" name=\"reset\" class=\"reset action-button mb-2 mt-2 mx-auto\" id=\"reset\"> Cancella </button>
                <button type=\"button\" name=\"next\" class=\"next action-button mb-2 mt-2\" style=\"position: absolute; right: 4rem\"> Avanti </button>
            </fieldset>
                    <!-- !! END FIELDSET 2 (EDIT QUANTITY) !! -->

                    <!-- !! FIELDSET 3 (EDIT PARTIAL) !! -->
            <fieldset>
                <div class=\"form-card pt-0 partials\">
                    <div class=\"form-title row mt-2 pt-0 mx-auto\">
                        <h2 class=\"fs-title\"> 
                            <i class=\"bi bi-truck-flatbed\"></i> 
                                &nbsp;Parziali #{{ transport.seo }}&nbsp; 
                            <i class=\"bi bi-truck-flatbed\"></i> 
                        </h2>
                        
                        <h3 class=\"fs-subtitle pt-0 mt-0\"> 
                            Modifica gli scaricamenti parziali del trasporto. 
                        </h3>
                    </div>

                    <div class=\"form-group mx-auto my-2 px-2 py-2 table-responsive\">
                        <table id=\"partials\" class=\"table table-sm table-borderless\" align=\"center\" border=\"2\">
                            <tr class=\"mx-auto mb-0 pb-0\">
                                <th scope=\"col\" class=\"m-auto p-0\" data-toggle=\"tooltip\" title=\"-- Dest. cliente\"> Destinazione </th>
                                <th scope=\"col\" class=\"m-auto p-0\" colspan=\"2\"> EXW </th>
                                <th scope=\"col\" class=\"m-auto p-0\" data-toggle=\"tooltip\" title=\"-- Data scarico\"> Data </th>
                                <th scope=\"col\" class=\"m-auto p-0\" data-toggle=\"tooltip\" title=\"-- Luogo scarico\"> Luogo </th>
                                <th scope=\"col\" class=\"m-auto p-0\" data-toggle=\"tooltip\" title=\"-- Quantità scaricata [ kg ]\"> Quantità </th>
                                <th scope=\"col\" class=\"m-auto p-0\" data-toggle=\"tooltip\" title=\"-- Rif.\"> Fattura </th>
                                <th scope=\"col\" class=\"m-auto p-0\" style=\"font-size: 17px\"> <i class=\"bi bi-info-square\"></i> </th>                   
                            </tr>
                                            
                            <tr class=\"mx-auto mt-0 pt-0\" id=\"row1\" name=\"num_partials\">
                                <td>
                                    <input type=\"text\" id=\"destination\" name=\"destination\" class=\"form-control\" value=\"{{ partial.destination }}\" /> 
                                </td>

                                <td colspan=\"2\">
                                    <select class=\"form-control\" name=\"exw\" id=\"exw\">
                                        <option value=\"{{ partial.exw }}\"></option>
                                        <option value=\"fos\"> FOS </option>
                                        <option value=\"destino\"> DESTINO </option>
                                    </select>
                                </td>
                                            
                                <td> 
                                    <input type=\"text\" class=\"datepicker_input form-control\" name=\"date\" value=\"{{ partial.date }}\"/>
                                </td>
                        
                                <td>
                                    <input type=\"text\" class=\"form-control\" name=\"place\" value=\"{{ partial.place }}\" />
                                </td>
                        
                                <td>
                                    <input type=\"text\" class=\"form-control\" name=\"q_unloaded\" value=\"{{ partial.q_unloaded }}\"/>
                                </td>
                        
                                <td>
                                    <input type=\"text\" class=\"form-control\" name=\"invoice\" value=\"{{ partial.invoice }}\" />
                                </td>

                                <td class=\"mx-auto\">
                                    <button type=\"button\" class=\"btn btn-outline-danger btn-sm d-flex justify-content-center m-auto p-0\" onclick=\"delete_row('row3')\"
                                        style=\"text-align: center; height: 38px; width: 38px; border-radius: 50%\"
                                        data-toggle=\"tooltip\" title=\"-- Rimuovi\">
                                        <i class=\"bi bi-x-lg m-auto\"></i>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <button type=\"button\" name=\"previous\" class=\"previous action-button mb-3 mt-2\" style=\"position: absolute; left: 4rem\"> Indietro </button>
                <button type=\"reset\" name=\"reset\" class=\"reset action-button mb-3 mt-2 mx-auto\" id=\"reset\"> Cancella </button>
                    &nbsp;
                <button type=\"button\" name=\"add\" class=\"add action-button mb-2 mt-2 mx-auto\" onclick=\"add_row()\"> Aggiungi </button>
                <button type=\"button\" name=\"next\" class=\"next action-button mb-2 mt-2\" style=\"position: absolute; right: 4rem\"> Avanti </button>     
            </fieldset>
                    <!-- !! END FIELDSET 3 (EDIT PARTIAL) !! -->

                    <!-- !! FIELDSET 4 (CONFIRM NEW TRANSPORT) !! -->
            <fieldset>
                <div class=\"form-card pt-0\">
                    <div class=\"form-title row mt-2 pt-0 mx-auto\">
                        <h2 class=\"fs-title\"> 
                            <i class=\"bi bi-check\"></i> 
                                &nbsp;Conferma&nbsp; 
                            <i class=\"bi bi-circle-check\"></i> 
                        </h2>
                        
                        <h3 class=\"fs-subtitle pt-0 mt-0\"> 
                            Confermare l'inserimento del nuovo trasporto. 
                        </h3>
                    </div>
                            <div class=\"col-lg-12\">
                                Trasporto creato con successo!
                            </div>
                </div>
                        
                <button type=\"button\" class=\"action-button mb-2 mx-auto\">
                    <a href=\"{{ doc_root }}category/1/{{ link.seo }}\" class=\"text-light\"> Piattaforma </a>
                </button> 
                <button type=\"submit\" name=\"submit\" class=\"submit action-button mb-3 mt-2 mx-auto\"> Salva </button>
            </fieldset>
                    <!-- !! END FIELDSET 4 (CONFIRM NEW TRANSPORT) !! -->
        </form>
    </section>
{% endblock %}    

{% block script %}    
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css\" integrity=\"sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We\" crossorigin=\"anonymous\">      <!-- Bootstrap 5 CSS -->
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>              <!-- Vanilla Datepicker CSS -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.3.4/dist/css/datepicker-bs5.min.css\">          <!-- Vanilla Datepicker CSS -->
<script src=\"https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.3.4/dist/js/datepicker.min.js\"></script>
    
    <script>
        \$(document).ready(function(){
            /*      multi-step fieldset change      */
            var current = 1,current_step,next_step,steps;
            steps = \$(\"fieldset\").length;

                \$(\".next\").click(function(){
                    current_step = \$(this).parent();
                    
                    if(current == '2' && \$('#type option:selected').val() == '0'){
                        next_step = \$(this).parent().next().next();
                        ++current;
                    } else{
                        next_step = \$(this).parent().next();
                    }
                    
                    next_step.show();
                    current_step.hide();
                    setProgressBar(++current);
                });

                \$(\".previous\").click(function(){
                    current_step = \$(this).parent();
                
                    if(current == '4' && \$('#type option:selected').val() == '0'){
                        next_step = \$(this).parent().prev().prev();
                        --current;
                    } else{
                        next_step = \$(this).parent().prev();
                    }

                    next_step.show();
                    current_step.hide();
                    setProgressBar(--current);
                });
            
                setProgressBar(current);
                        // change progress bar action
                function setProgressBar(curStep){
                    var percent = parseFloat(100 / steps) * curStep;
                    percent = percent.toFixed();
                
                    \$(\".progress-bar\")
                        .css(\"width\",percent+\"%\")
                        .html(percent+\"%\");\t\t
                    }


            /*      vanillajs-datepicker 1.1.4      */
            const getDatePickerTitle = elem => {
                const label = elem.nextElementSibling;                  // from the label or the aria-label
                let titleText = '';
                        
                if(label && label.tagName === 'label'){
                    titleText = label.textContent;
                } else{
                    titleText = elem.getAttribute('aria-label') || '';
                }
                                
                return titleText;
            }

            const elems = document.querySelectorAll('.datepicker_input');
                for(const elem of elems){
                    const datepicker = new Datepicker(elem, {
                        'format': 'dd-mm-yyyy',
                        title: getDatePickerTitle(elem)
                    });
                }  

            /*      tooltip     */
            \$(\"body\").tooltip({ 
                selector: '[data-toggle = tooltip]',
                placement: 'right' 
            });
            
            /*      price typology select disabled change       */
            \$('#price_typology').change(function(){
                if(\$(this).val() == '1'){
                    \$('#price_value').attr('disabled', false);
                    \$('#price_value').css({
                        'background': '#fff',
                        'border': '1px solid #0066cc'
                    });

                        \$(\"#price_value\").focus(function(){
                            \$(\"#price_value\").css({
                                '-moz-box-shadow': '0 0 0 1px rgba(113,191,68) !important',
                                '-webkit-box-shadow': '0 0 0 1px rgba(113,191,68) !important',
                                'box-shadow': '0 0 0 1px rgba(113,191,68) !important',
                                'border': '1px solid #71bf44',
                                'outline-width': '0',
                                'transition': 'all 0.2s ease-out',
                                '-webkit-transition': 'all 0.2s ease-out',
                                '-moz-transition': 'all 0.2s ease-out',
                                '-o-transition': 'all 0.2s ease-out'
                            });
                        });
                } else{
                    \$('#price_value').val('0');
                    \$('#price_value').css({
                        'background': 'none',
                        'border': '1px solid rgb(160, 180, 185)'
                    });
                }
            });

            /*      reset button       */
            \$('#reset').click(function(){
                \$('#price_value').val('');
                \$('#price_value').css({
                    'background': 'none',
                    'border': '1px solid rgb(160, 180, 185)'
                });
            });
        });
    </script>
{% endblock %}

", "transport-edit.html", "C:\\wamp\\www\\liquimet\\templates\\transport-edit.html");
    }
}
