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

/* transport-add.html */
class __TwigTemplate_e52fd3e004c931174abc4deffa77a92c295c2f2e9b6fb7d71478b7780b3a5dda extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "transport-add.html", 1);
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
    

    
      <script src=\"https://code.jquery.com/jquery-3.6.0.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.13.2/jquery-ui.js\"></script>
        
    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap\" rel=\"stylesheet\">
";
    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
    <section class=\"grid-container my-auto mx-auto d-flex justify-content-center\">
        <form id=\"msform\" novalidate action=\"";
        // line 37
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
                
                    <!-- !! FIELDSET 1 (ADD TRANSPORT) !! -->
            <fieldset>
                <div class=\"form-card pt-0\">
                    <div class=\"form-title row mt-2 pt-0 mx-auto\">
                        <h2 class=\"fs-title\"> 
                            <i class=\"bi bi-truck-front\"></i> 
                                &nbsp;Trasporto&nbsp; 
                            <i class=\"bi bi-truck-front\"></i> 
                        </h2>
                        
                        <h3 class=\"fs-subtitle pt-0 mt-0\"> 
                            Inserire i dati richiesti per creare il nuovo trasporto. 
                        </h3>
                    </div>

                    <div class=\"form-group row mx-auto my-2 px-3 py-0\">
                        <div class=\"col-lg-4\">
                            <label class=\"form-control-label mb-0\" for=\"type\"> Tipo </label>
                                <select class=\"form-control\" name=\"type\" id=\"type\">
                                    <option value=\"\" class=\"opt-type\"></option>
                                    <option value=\"0\" class=\"opt-type\"> Trasporto pieno </option>
                                    <option value=\"1\" class=\"opt-type\"> Trasporto parziale </option>
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
                            <input type=\"text\" class=\"date-input form-control\" name=\"date_load\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "date_load", [], "any", false, false, false, 101), "html", null, true);
        echo "\" data-provide=\"datepicker\"/>
                        </div>
                                    
                        <div class=\"col-lg-4\">
                            <label for=\"date_unload\" class=\"form-control-label mb-0\" data-toggle=\"tooltip\" title=\"-- Padova\"> Data scarico </label>
                            <input type=\"text\" class=\"date-input form-control\" name=\"date_unload\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "date_unload", [], "any", false, false, false, 106), "html", null, true);
        echo "\" data-provide=\"datepicker\"/>
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
                    <!-- !! END FIELDSET 1 (ADD TRANSPORT !! -->

                    <!-- !! FIELDSET 2 (ADD QUANTITY) !! -->
            <fieldset>
                <div class=\"form-card pt-0 quantity\">
                    <div class=\"form-title row mt-2 pt-0 mx-auto\">
                        <h2 class=\"fs-title\"> 
                            <i class=\"bi bi-truck\"></i> 
                                &nbsp;Quantità&nbsp; 
                            <i class=\"bi bi-truck\"></i> 
                        </h2>
                        
                        <h3 class=\"fs-subtitle pt-0 mt-0\"> 
                            Inserire le quantità del nuovo trasporto. 
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
                    <!-- !! END FIELDSET 2 (ADD QUANTITY) !! -->

                    <!-- !! FIELDSET 3 (ADD PARTIAL IF TYPE == 1) !! -->
            <fieldset>
                <div class=\"form-card pt-0 partials\">
                    <div class=\"form-title row mt-2 pt-0 mx-auto\">
                        <h2 class=\"fs-title\"> 
                            <i class=\"bi bi-truck-flatbed\"></i> 
                                &nbsp;Parziali&nbsp; 
                            <i class=\"bi bi-truck-flatbed\"></i> 
                        </h2>
                        
                        <h3 class=\"fs-subtitle pt-0 mt-0\"> 
                            Inserire gli scaricamenti parziali del nuovo trasporto. 
                        </h3>
                    </div>

                    <div class=\"form-group row mx-auto my-1 px-2 py-2 table-responsive\" style=\"max-height: 347px; overflow: auto\" enctype=\"multipart/form-data\">
                        <table id=\"partials\" class=\"table table-sm table-borderless\" border=\"2\">
                            <tr class=\"mx-auto mb-0 pb-1\">
                                <th class=\"m-auto p-1\" data-toggle=\"tooltip\" title=\"-- Dest. cliente\"> Destinazione </th>
                                <th class=\"m-auto p-1\"> EXW </th>
                                <th class=\"m-auto p-1\" data-toggle=\"tooltip\" title=\"-- Data scarico\"> Data </th>
                                <th class=\"m-auto p-1\" data-toggle=\"tooltip\" title=\"-- Luogo scarico\"> Luogo </th>
                                <th class=\"m-auto p-1\" data-toggle=\"tooltip\" title=\"-- Quantità scaricata [ kg ]\"> Quantità </th>
                                <th class=\"m-auto p-1\" data-toggle=\"tooltip\" title=\"-- Rif.\"> Fattura </th>
                                <th class=\"m-auto p-1\" style=\"font-size: 17px\"> <i class=\"bi bi-info-square\"></i> </th>                   
                            </tr>
                                            
                            <tr class=\"mx-auto my-0 pt-1\">
                                <td class=\"tbl_id\" name=\"tbl_id[]\">
                                    1
                                </td>
                          
                                <td style=\"width: 40%\">
                                    <input type=\"text\" name=\"destination[]\" class=\"form-control\" /> 
                                </td>

                                <td style=\"width: 20%\">
                                    <select class=\"form-control\" name=\"exw[]\">
                                        <option value=\"";
        // line 246
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["partial"] ?? null), "exw", [], "any", false, false, false, 246), "html", null, true);
        echo "\"> DESTINO </option>
                                        <option value=\"fos\"> FOS </option>
                                        <option value=\"destino\"> DESTINO </option>
                                    </select>
                                </td>
                                            
                                <td style=\"width: 20%\"> 
                                    <input type=\"text\" class=\"date-input form-control\" name=\"date[]\" id=\"date-input\" />
                                </td>
                        
                                <td style=\"width: 40%\">
                                    <input type=\"text\" class=\"form-control\" name=\"place[]\" />
                                </td>
                        
                                <td style=\"width: 40%\">
                                    <input type=\"text\" class=\"form-control mx-auto\" name=\"q_unloaded[]\" />
                                </td>
                        
                                <td style=\"width: 10%\">
                                    <input type=\"text\" class=\"form-control mx-auto\" name=\"invoice[]\" />
                                </td>

                                <td class=\"d-flex my-auto pt-2\">
                                    <button type=\"button\" class=\"btn btn-outline-danger btn-sm d-flex justify-content-center m-auto p-0\" 
                                        style=\"text-align: center; height: 30px; width: 30px; border-radius: 50%\" onclick=\"partRows.delRow(this)\">
                                        <i class=\"bi bi-x my-auto\"></i>
                                    </button>
                                    &nbsp;
                                    <button type=\"button\" class=\"btn btn-outline-primary btn-sm d-flex justify-content-center m-auto p-0\" 
                                        style=\"text-align: center; height: 30px; width: 30px; border-radius: 50%\" onclick=\"partRows.addRow(this)\">
                                        <i class=\"bi bi-plus my-auto\"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <button type=\"button\" name=\"previous\" class=\"previous action-button mb-3 mt-2\" style=\"position: absolute; left: 4rem\"> Indietro </button>
                <button type=\"reset\" name=\"reset\" class=\"reset action-button mb-3 mt-2 mx-auto\" id=\"reset\"> Cancella </button>
                    &nbsp;
                <button type=\"button\" name=\"add\" class=\"add action-button mb-2 mt-2 mx-auto\" onclick=\"partRows.addRow()\"> Aggiungi </button>
                <button type=\"button\" name=\"next\" class=\"next action-button mb-2 mt-2\" style=\"position: absolute; right: 4rem\"> Avanti </button>     
            </fieldset>
                    <!-- !! END FIELDSET 3 (ADD PARTIAL IF TYPE == 1) !! -->

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
        // line 312
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "category/1/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "seo", [], "any", false, false, false, 312), "html", null, true);
        echo "\" class=\"text-light\"> Piattaforma </a>
                </button> 
                <button type=\"submit\" name=\"submit\" class=\"submit action-button mb-3 mt-2 mx-auto\"> Salva </button>
            </fieldset>
                    <!-- !! END FIELDSET 4 (CONFIRM NEW TRANSPORT) !! -->
        </form>
    </section>
";
    }

    // line 321
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
        /*      MULTI-STEP FIELDSET CHANGE      */
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
                
                //change progress bar action
                function setProgressBar(curStep){
                    var percent = parseFloat(100 / steps) * curStep;
                    percent = percent.toFixed();
                
                    \$(\".progress-bar\")
                        .css(\"width\",percent+\"%\")
                        .html(percent+\"%\");\t\t
                    }


        /*      VANILLAJS-DATEPICKER 1.1.4      */
/*            const getDatePickerTitle = elem => {
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
*/
        /*     TOOLTIP     */
            \$(\"body\").tooltip({ 
                selector: '[data-toggle = tooltip]',
                placement: 'right' 
            });
            
        /*      PRICE_TYPOLOGY SELECT DISABLED CHANGE       */
            \$('#price_typology').change(function(){
                if(\$(this).val() == 1){
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
                    \$('#price_value').attr('disabled', true);
                    \$('#price_value').css({
                        'background': 'none',
                        'border': '1px solid rgb(160, 180, 185)',
                        
                    });
                    \$('#price_value').val('0') == 0;
                }
            });

        /*     RESET BUTTON     */
            \$('#reset').click(function(){
                \$('#price_value').val('');
                \$('#price_value').attr('disabled', false);
                \$('#price_value').css({
                    'background': 'none',
                    'border': '1px solid rgb(160, 180, 185)'
                });
            });
            
            
            var date_input = \$('#date-input'); 
\t\t\t//our date input has the name \"date\"
\t\t\tdate_input.datepicker({
\t\t\t\tformat: 'dd/mm/yyyy',
\t\t\t\ttodayHighlight: true,
\t\t\t\tautoclose: true,
\t\t\t})
        });

        /*     METHOD TO CREATE NEW ROW IN TABLE     */
        //receives table id
            function addRowsTable(id){
                var table = document.getElementById(id);
                var me = this;
        
                    if(document.getElementById(id)){
                        var row1 = table.rows[1].outerHTML;
                
                    //adds index-id in cols with class .tbl_id
                        function setIds(){
                            var tbl_id = document.querySelectorAll('#'+ id +' .tbl_id');
                        
                            for(var i=0; i < tbl_id.length; i++) tbl_id[i].innerHTML = i+1;
                        }
                
                    //add row after clicked row; receives clicked button in row
                        me.addRow = function(btn){
                            btn ? btn.parentNode.parentNode.insertAdjacentHTML('afterend', row1): table.insertAdjacentHTML('beforeend', row1);
                            setIds();
                        }
                
                    //delete clicked row; receives clicked button in row
                        me.delRow = function(btn){
                            btn.parentNode.parentNode.outerHTML = '';
                            setIds();
                        }
                    }
            }
                
        //create object of addRowsTable(), pass the table id
            var partRows = new addRowsTable('partials');
        
        /*      DATEPICKER      */    
/*            \$(function() {
                \$( \".date_input\" ).datepicker({
                    dateFormat: 'dd-mm-yy',
                    changeMonth: true,
                    changeYear: true,
                    autoSize: true,
                    showOn: 'both',
                    buttonImage: 'contact/calendar/calendar.gif'
                });
            });
            
             \$('.date_input').on('focus',\".datepicker\", function(){
                \$(this).datepicker();
            });
            
    */        
    </script>   
        
<!--      BOOTSTRAP DATEPICKER      -->   
    <script src=\"https://code.jquery.com/jquery-3.6.1.min.js\" integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js\" integrity=\"sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script>
        \$.fn.datepicker.defaults.format = \"dd/mm/yyyy\";
        \$.fn.datepicker.defaults.orientation = 'top left', 'auto bottom';
        \$.fn.datepicker.defaults.clearBtn = true;
        \$.fn.datepicker.defaults.calendarWeeks = true;
        \$.fn.datepicker.defaults.weekStart = 1;
        \$.fn.datepicker.defaults.autoclose = true;
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "transport-add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 321,  436 => 312,  367 => 246,  315 => 197,  307 => 192,  297 => 185,  287 => 178,  277 => 171,  264 => 161,  252 => 152,  243 => 146,  210 => 116,  202 => 111,  194 => 106,  186 => 101,  178 => 96,  170 => 91,  162 => 86,  154 => 81,  146 => 76,  104 => 37,  97 => 35,  66 => 7,  62 => 5,  58 => 4,  49 => 2,  38 => 1,);
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
    

    
      <script src=\"https://code.jquery.com/jquery-3.6.0.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.13.2/jquery-ui.js\"></script>
        
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
                
                    <!-- !! FIELDSET 1 (ADD TRANSPORT) !! -->
            <fieldset>
                <div class=\"form-card pt-0\">
                    <div class=\"form-title row mt-2 pt-0 mx-auto\">
                        <h2 class=\"fs-title\"> 
                            <i class=\"bi bi-truck-front\"></i> 
                                &nbsp;Trasporto&nbsp; 
                            <i class=\"bi bi-truck-front\"></i> 
                        </h2>
                        
                        <h3 class=\"fs-subtitle pt-0 mt-0\"> 
                            Inserire i dati richiesti per creare il nuovo trasporto. 
                        </h3>
                    </div>

                    <div class=\"form-group row mx-auto my-2 px-3 py-0\">
                        <div class=\"col-lg-4\">
                            <label class=\"form-control-label mb-0\" for=\"type\"> Tipo </label>
                                <select class=\"form-control\" name=\"type\" id=\"type\">
                                    <option value=\"\" class=\"opt-type\"></option>
                                    <option value=\"0\" class=\"opt-type\"> Trasporto pieno </option>
                                    <option value=\"1\" class=\"opt-type\"> Trasporto parziale </option>
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
                            <input type=\"text\" class=\"date-input form-control\" name=\"date_load\" value=\"{{ transport.date_load }}\" data-provide=\"datepicker\"/>
                        </div>
                                    
                        <div class=\"col-lg-4\">
                            <label for=\"date_unload\" class=\"form-control-label mb-0\" data-toggle=\"tooltip\" title=\"-- Padova\"> Data scarico </label>
                            <input type=\"text\" class=\"date-input form-control\" name=\"date_unload\" value=\"{{ transport.date_unload }}\" data-provide=\"datepicker\"/>
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
                    <!-- !! END FIELDSET 1 (ADD TRANSPORT !! -->

                    <!-- !! FIELDSET 2 (ADD QUANTITY) !! -->
            <fieldset>
                <div class=\"form-card pt-0 quantity\">
                    <div class=\"form-title row mt-2 pt-0 mx-auto\">
                        <h2 class=\"fs-title\"> 
                            <i class=\"bi bi-truck\"></i> 
                                &nbsp;Quantità&nbsp; 
                            <i class=\"bi bi-truck\"></i> 
                        </h2>
                        
                        <h3 class=\"fs-subtitle pt-0 mt-0\"> 
                            Inserire le quantità del nuovo trasporto. 
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
                    <!-- !! END FIELDSET 2 (ADD QUANTITY) !! -->

                    <!-- !! FIELDSET 3 (ADD PARTIAL IF TYPE == 1) !! -->
            <fieldset>
                <div class=\"form-card pt-0 partials\">
                    <div class=\"form-title row mt-2 pt-0 mx-auto\">
                        <h2 class=\"fs-title\"> 
                            <i class=\"bi bi-truck-flatbed\"></i> 
                                &nbsp;Parziali&nbsp; 
                            <i class=\"bi bi-truck-flatbed\"></i> 
                        </h2>
                        
                        <h3 class=\"fs-subtitle pt-0 mt-0\"> 
                            Inserire gli scaricamenti parziali del nuovo trasporto. 
                        </h3>
                    </div>

                    <div class=\"form-group row mx-auto my-1 px-2 py-2 table-responsive\" style=\"max-height: 347px; overflow: auto\" enctype=\"multipart/form-data\">
                        <table id=\"partials\" class=\"table table-sm table-borderless\" border=\"2\">
                            <tr class=\"mx-auto mb-0 pb-1\">
                                <th class=\"m-auto p-1\" data-toggle=\"tooltip\" title=\"-- Dest. cliente\"> Destinazione </th>
                                <th class=\"m-auto p-1\"> EXW </th>
                                <th class=\"m-auto p-1\" data-toggle=\"tooltip\" title=\"-- Data scarico\"> Data </th>
                                <th class=\"m-auto p-1\" data-toggle=\"tooltip\" title=\"-- Luogo scarico\"> Luogo </th>
                                <th class=\"m-auto p-1\" data-toggle=\"tooltip\" title=\"-- Quantità scaricata [ kg ]\"> Quantità </th>
                                <th class=\"m-auto p-1\" data-toggle=\"tooltip\" title=\"-- Rif.\"> Fattura </th>
                                <th class=\"m-auto p-1\" style=\"font-size: 17px\"> <i class=\"bi bi-info-square\"></i> </th>                   
                            </tr>
                                            
                            <tr class=\"mx-auto my-0 pt-1\">
                                <td class=\"tbl_id\" name=\"tbl_id[]\">
                                    1
                                </td>
                          
                                <td style=\"width: 40%\">
                                    <input type=\"text\" name=\"destination[]\" class=\"form-control\" /> 
                                </td>

                                <td style=\"width: 20%\">
                                    <select class=\"form-control\" name=\"exw[]\">
                                        <option value=\"{{ partial.exw }}\"> DESTINO </option>
                                        <option value=\"fos\"> FOS </option>
                                        <option value=\"destino\"> DESTINO </option>
                                    </select>
                                </td>
                                            
                                <td style=\"width: 20%\"> 
                                    <input type=\"text\" class=\"date-input form-control\" name=\"date[]\" id=\"date-input\" />
                                </td>
                        
                                <td style=\"width: 40%\">
                                    <input type=\"text\" class=\"form-control\" name=\"place[]\" />
                                </td>
                        
                                <td style=\"width: 40%\">
                                    <input type=\"text\" class=\"form-control mx-auto\" name=\"q_unloaded[]\" />
                                </td>
                        
                                <td style=\"width: 10%\">
                                    <input type=\"text\" class=\"form-control mx-auto\" name=\"invoice[]\" />
                                </td>

                                <td class=\"d-flex my-auto pt-2\">
                                    <button type=\"button\" class=\"btn btn-outline-danger btn-sm d-flex justify-content-center m-auto p-0\" 
                                        style=\"text-align: center; height: 30px; width: 30px; border-radius: 50%\" onclick=\"partRows.delRow(this)\">
                                        <i class=\"bi bi-x my-auto\"></i>
                                    </button>
                                    &nbsp;
                                    <button type=\"button\" class=\"btn btn-outline-primary btn-sm d-flex justify-content-center m-auto p-0\" 
                                        style=\"text-align: center; height: 30px; width: 30px; border-radius: 50%\" onclick=\"partRows.addRow(this)\">
                                        <i class=\"bi bi-plus my-auto\"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <button type=\"button\" name=\"previous\" class=\"previous action-button mb-3 mt-2\" style=\"position: absolute; left: 4rem\"> Indietro </button>
                <button type=\"reset\" name=\"reset\" class=\"reset action-button mb-3 mt-2 mx-auto\" id=\"reset\"> Cancella </button>
                    &nbsp;
                <button type=\"button\" name=\"add\" class=\"add action-button mb-2 mt-2 mx-auto\" onclick=\"partRows.addRow()\"> Aggiungi </button>
                <button type=\"button\" name=\"next\" class=\"next action-button mb-2 mt-2\" style=\"position: absolute; right: 4rem\"> Avanti </button>     
            </fieldset>
                    <!-- !! END FIELDSET 3 (ADD PARTIAL IF TYPE == 1) !! -->

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
        /*      MULTI-STEP FIELDSET CHANGE      */
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
                
                //change progress bar action
                function setProgressBar(curStep){
                    var percent = parseFloat(100 / steps) * curStep;
                    percent = percent.toFixed();
                
                    \$(\".progress-bar\")
                        .css(\"width\",percent+\"%\")
                        .html(percent+\"%\");\t\t
                    }


        /*      VANILLAJS-DATEPICKER 1.1.4      */
/*            const getDatePickerTitle = elem => {
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
*/
        /*     TOOLTIP     */
            \$(\"body\").tooltip({ 
                selector: '[data-toggle = tooltip]',
                placement: 'right' 
            });
            
        /*      PRICE_TYPOLOGY SELECT DISABLED CHANGE       */
            \$('#price_typology').change(function(){
                if(\$(this).val() == 1){
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
                    \$('#price_value').attr('disabled', true);
                    \$('#price_value').css({
                        'background': 'none',
                        'border': '1px solid rgb(160, 180, 185)',
                        
                    });
                    \$('#price_value').val('0') == 0;
                }
            });

        /*     RESET BUTTON     */
            \$('#reset').click(function(){
                \$('#price_value').val('');
                \$('#price_value').attr('disabled', false);
                \$('#price_value').css({
                    'background': 'none',
                    'border': '1px solid rgb(160, 180, 185)'
                });
            });
            
            
            var date_input = \$('#date-input'); 
\t\t\t//our date input has the name \"date\"
\t\t\tdate_input.datepicker({
\t\t\t\tformat: 'dd/mm/yyyy',
\t\t\t\ttodayHighlight: true,
\t\t\t\tautoclose: true,
\t\t\t})
        });

        /*     METHOD TO CREATE NEW ROW IN TABLE     */
        //receives table id
            function addRowsTable(id){
                var table = document.getElementById(id);
                var me = this;
        
                    if(document.getElementById(id)){
                        var row1 = table.rows[1].outerHTML;
                
                    //adds index-id in cols with class .tbl_id
                        function setIds(){
                            var tbl_id = document.querySelectorAll('#'+ id +' .tbl_id');
                        
                            for(var i=0; i < tbl_id.length; i++) tbl_id[i].innerHTML = i+1;
                        }
                
                    //add row after clicked row; receives clicked button in row
                        me.addRow = function(btn){
                            btn ? btn.parentNode.parentNode.insertAdjacentHTML('afterend', row1): table.insertAdjacentHTML('beforeend', row1);
                            setIds();
                        }
                
                    //delete clicked row; receives clicked button in row
                        me.delRow = function(btn){
                            btn.parentNode.parentNode.outerHTML = '';
                            setIds();
                        }
                    }
            }
                
        //create object of addRowsTable(), pass the table id
            var partRows = new addRowsTable('partials');
        
        /*      DATEPICKER      */    
/*            \$(function() {
                \$( \".date_input\" ).datepicker({
                    dateFormat: 'dd-mm-yy',
                    changeMonth: true,
                    changeYear: true,
                    autoSize: true,
                    showOn: 'both',
                    buttonImage: 'contact/calendar/calendar.gif'
                });
            });
            
             \$('.date_input').on('focus',\".datepicker\", function(){
                \$(this).datepicker();
            });
            
    */        
    </script>   
        
<!--      BOOTSTRAP DATEPICKER      -->   
    <script src=\"https://code.jquery.com/jquery-3.6.1.min.js\" integrity=\"sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js\" integrity=\"sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script>
        \$.fn.datepicker.defaults.format = \"dd/mm/yyyy\";
        \$.fn.datepicker.defaults.orientation = 'top left', 'auto bottom';
        \$.fn.datepicker.defaults.clearBtn = true;
        \$.fn.datepicker.defaults.calendarWeeks = true;
        \$.fn.datepicker.defaults.weekStart = 1;
        \$.fn.datepicker.defaults.autoclose = true;
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
{% endblock %}", "transport-add.html", "D:\\wamp\\www\\liquimet\\templates\\transport-add.html");
    }
}
