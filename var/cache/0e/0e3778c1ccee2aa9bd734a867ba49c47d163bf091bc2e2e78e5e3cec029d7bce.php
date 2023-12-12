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

/* add-page.html */
class __TwigTemplate_c6fd6d18b45e3d5ad440a9e07a63f188e20f2b70a4a298e87191097fa198086f extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "add-page.html", 1);
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
<main id=\"main\" class=\"main\">
        <!-- MultiStep Form -->
<div class=\"row d-flex justify-content-center mb-5\">
    <div class=\"col-md-10 col-md-offset-2\">
        <form id=\"msform\">

            <!-- progressbar -->
            <ul id=\"progressbar\">
                <li class=\"active\" style=\"font-size: 9px\">Trasporto</li>
                <li>Quantita</li>
                <li>Parziali</li>
            </ul>

            <!-- fieldsets -->
            <fieldset>
                <h2 class=\"fs-title\"> <i class=\"bi bi-truck-front\"></i> Trasporto <i class=\"bi bi-truck-front\"></i> </h2>
                    <h3 class=\"fs-subtitle\"> Inserire i dati richiesti </h3>
                    
                    

                        <label for=\"slot\" class=\"form-label m-2 p-1\"> Slot ID <br>
                             <input type=\"text\" class=\"form-control\" name=\"slot\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "slot", [], "any", false, false, false, 26), "html", null, true);
        echo "\"/>
                        </label>
                        
                        <label for=\"cmr\" class=\"form-label m-2 p-1\"> Numero CMR <br>
                            <input type=\"text\" class=\"form-control\" name=\"cmr\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "cmr", [], "any", false, false, false, 30), "html", null, true);
        echo "\"/>
                        </label>
                        
                        <label for=\"issuer\" class=\"form-label m-2 p-1\"> Ditta emittente <br>
                            <input type=\"text\" class=\"form-control\" name=\"issuer\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "issuer", [], "any", false, false, false, 34), "html", null, true);
        echo "\"/>
                        </label>

                        
                        
                        <label for=\"supplier\" class=\"form-label m-2 p-1\"> Fornitore <br>
                            <input type=\"text\" class=\"form-control\" name=\"supplier\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "supplier", [], "any", false, false, false, 40), "html", null, true);
        echo "\"/>
                        </label>
                        
                        <br>
                        
                        <label for=\"date_load\" class=\"form-label m-2 p-1\"> Data carico <br>
                            <input type=\"text\" class=\"datepicker_input form-control\" name=\"date_load\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "date_load", [], "any", false, false, false, 46), "html", null, true);
        echo "\"/>
                        </label>
                        
                        <label for=\"date_unload\" class=\"form-label m-2 p-1\"> Data scarico <br>
                            <input type=\"text\" class=\"datepicker_input form-control\" name=\"date_unload\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "date_unload", [], "any", false, false, false, 50), "html", null, true);
        echo "\"/>
                        </label>

                        
                        
                        <label for=\"transport\" class=\"form-label m-2 p-1\"> Trasporto <br>
                            <input type=\"text\" class=\"form-control\" name=\"transport\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "transport", [], "any", false, false, false, 56), "html", null, true);
        echo "\"/>
                        </label>
                        
                        <label for=\"container\" class=\"form-label m-2 p-1\"> Container <br>
                            <input type=\"text\" class=\"form-control\" name=\"container\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "container", [], "any", false, false, false, 60), "html", null, true);
        echo "\"/>
                        </label>
                        
                        <br>

                        <label for=\"note\" class=\"form-label m-2 p-1\"> Nota <br>
                            <textarea rows=\"1\" cols=\"76\" maxlength=\"200\" class=\"form-control\" name=\"note\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["transport"] ?? null), "note", [], "any", false, false, false, 66), "html", null, true);
        echo "\"></textarea>
                        </label>
                        
                        <br>
                            <input type=\"reset\" name=\"reset\" class=\"action-button\" style=\"background-color: #ee0979\" value=\"Cancella\"/> 
                            <input type=\"button\" name=\"next\" class=\"next action-button\" style=\"background-color: #71b471\" value=\"Next\"/>
                            <input type=\"button\" name=\"data[password]\" class=\"next btn btn-primary btn-block\" value=\"Travel Details\" />
            </fieldset>

            <fieldset>
                <h2 class=\"fs-title\"> <i class=\"bi bi-truck-flatbed\"></i> ... Quantità ... <i class=\"bi bi-truck\"></i> </h2>
                    <h3 class=\"fs-subtitle\"> Inserire le quantità del nuovo trasporto </h3>
                   
                        <label for=\"kg_load\" class=\"form-label m-2 p-1\"> Quantità nominale caricata [kg] <br>
                            <input type=\"text\" class=\"form-control\" name=\"kg_load\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "kg_load", [], "any", false, false, false, 80), "html", null, true);
        echo "\"/>
                        </label>
                    
                        <label for=\"cooling\" class=\"form-label m-2 p-1\"> Raffreddamento <br>
                            <input type=\"text\" class=\"form-control\" name=\"cooling\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "cooling", [], "any", false, false, false, 84), "html", null, true);
        echo "\"/>
                        </label>    <!-- if yes = 600 else no = 0 -->
                    
                        <label for=\"price_typology\" class=\"form-label m-2 p-1\"> Tipologia costo extra <br>
                            <input type=\"text\" class=\"form-control\" name=\"price_typology\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "price_typology", [], "any", false, false, false, 88), "html", null, true);
        echo "\"/>
                        </label>    <!-- yes/no question, if yes display price value -->

                        <br>

                        <label for=\"price_value\" class=\"form-label m-2 p-1\"> Valore costo extra <br>
                            <input type=\"text\" class=\"form-control\" name=\"price_value\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "price_value", [], "any", false, false, false, 94), "html", null, true);
        echo "\"/>
                        </label>
                    
                        <label for=\"kg_unload\" class=\"form-label m-2 p-1\"> Quantità scaricata PD [kg] <br>
                            <input type=\"text\" class=\"form-control\" name=\"kg_unload\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "kg_unload", [], "any", false, false, false, 98), "html", null, true);
        echo "\"/>
                        </label>
                    
                        <label for=\"liquid_density\" class=\"form-label m-2 p-1\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] <br>
                            <input type=\"text\" class=\"form-control\" name=\"liquid_density\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "liquid_density", [], "any", false, false, false, 102), "html", null, true);
        echo "\"/>
                        </label>

                        <br>
                    
                        <label for=\"gas_weight\" class=\"form-label m-2 p-1\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> <br>
                            <input type=\"text\" class=\"form-control\" name=\"gas_weight\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "gas_weight", [], "any", false, false, false, 108), "html", null, true);
        echo "\"/>
                        </label>

                        <label for=\"pcs_ghv\" class=\"form-label m-2 p-1\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> <br>
                            <input type=\"text\" class=\"form-control\" name=\"pcs_ghv\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "pcs_ghv", [], "any", false, false, false, 112), "html", null, true);
        echo "\"></textarea>
                        </label>
                    
                        <br>
                            <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" style=\"background-color: #0066cc\" value=\"Previous\"/>
                            <input type=\"reset\" name=\"reset\" class=\"action-button\" style=\"background-color: #ee0979\" value=\"Cancella\"/> 
                            <input type=\"button\" name=\"next\" class=\"next action-button\" style=\"background-color: #71b471\" value=\"Next\"/>
            </fieldset>

            <fieldset>
                <h2 class=\"fs-title\"> <i class=\"bi bi-fuel-pump\"></i> PARZIALI <i class=\"bi bi-fuel-pump\"></i> </h2>
                    <h3 class=\"fs-subtitle\"> Inserire i scaricamenti parziali del nuovo trasporto </h3>
                
                    <label for=\"kg_load\" class=\"form-label m-2 p-1\"> Quantità nominale caricata [kg] <br>
                        <input type=\"text\" class=\"form-control\" name=\"kg_load\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "kg_load", [], "any", false, false, false, 126), "html", null, true);
        echo "\"/>
                    </label>

                    <br>
                   
                    <label for=\"cooling\" class=\"form-label m-1 p-1\"> Raffreddamento <br>
                        <input type=\"text\" class=\"form-control\" name=\"cooling\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "cooling", [], "any", false, false, false, 132), "html", null, true);
        echo "\"/>
                    </label>    <!-- if yes = 600 else no = 0 -->
                   
                    <label for=\"price_typology\" class=\"form-label m-1 p-1\"> Tipologia costo extra <br>
                        <input type=\"text\" class=\"form-control\" name=\"price_typology\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "price_typology", [], "any", false, false, false, 136), "html", null, true);
        echo "\"/>
                    </label>    <!-- yes/no question, if yes display price value -->

                    <br>

                    <label for=\"price_value\" class=\"form-label m-1 p-1\"> Valore costo extra <br>
                        <input type=\"text\" class=\"form-control\" name=\"price_value\" value=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "price_value", [], "any", false, false, false, 142), "html", null, true);
        echo "\"/>
                    </label>
                   
                    <label for=\"kg_unload\" class=\"form-label m-1 p-1\"> Quantità scaricata PD [kg] <br>
                        <input type=\"text\" class=\"form-control\" name=\"kg_unload\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "kg_unload", [], "any", false, false, false, 146), "html", null, true);
        echo "\"/>
                    </label>

                    <br>
                   
                    <label for=\"liquid_density\" class=\"form-label m-1 p-1\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] <br>
                        <input type=\"text\" class=\"form-control\" name=\"liquid_density\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "liquid_density", [], "any", false, false, false, 152), "html", null, true);
        echo "\"/>
                    </label>
                   
                    <label for=\"gas_weight\" class=\"form-label m-1 p-1\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> <br>
                        <input type=\"text\" class=\"form-control\" name=\"gas_weight\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "gas_weight", [], "any", false, false, false, 156), "html", null, true);
        echo "\"/>
                    </label>
                   
                    <br>

                    <label for=\"pcs_ghv\" class=\"form-label m-1 p-1\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> <br>
                        <input type=\"text\" class=\"form-control\" name=\"pcs_ghv\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quantity"] ?? null), "pcs_ghv", [], "any", false, false, false, 162), "html", null, true);
        echo "\"></textarea>
                    </label>
                   
                    <br>
                        <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" style=\"background-color: #0066cc\" value=\"Previous\"/>
                        <input type=\"reset\" name=\"reset\" class=\"action-button\" style=\"background-color: #ee0979\" value=\"Cancella\"/> 
                        <input type=\"submit\" name=\"submit\" class=\"submit action-button\" style=\"background-color: #71b471\" value=\"Submit\"/>
            </fieldset>
        </form>
    </div>
</div>
<!-- /.MultiStep Form -->
</main>

                                                        <!-- scripts -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj\" crossorigin=\"anonymous\"></script>             <!-- Bootstrap 5 JavaScript Bundle with Popper -->
<script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script>      <!-- Vanilla Datepicker JS -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

<script>
                /* vanillajs-datepicker 1.1.4 JS */
    const getDatePickerTitle = elem => {
        const label = elem.nextElementSibling;                      // from the label or the aria-label
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




    
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

\$(\".next\").click(function(){
\tif(animating) return false;
\tanimating = true;
\t
\tcurrent_fs = \$(this).parent();
\tnext_fs = \$(this).parent().next();
\t
\t//activate next step on progressbar using the index of next_fs
\t\$(\"#progressbar li\").eq(\$(\"fieldset\").index(next_fs)).addClass(\"active\");
\t
\t//show the next fieldset
\tnext_fs.show(); 
\t//hide the current fieldset with style
\tcurrent_fs.animate({opacity: 0}, {
\t\tstep: function(now, mx) {
\t\t\t//as the opacity of current_fs reduces to 0 - stored in \"now\"
\t\t\t//1. scale current_fs down to 80%
\t\t\tscale = 1 - (1 - now) * 0.8;
\t\t\t//2. bring next_fs from the right(50%)
\t\t\tleft = (now * 50)+\"%\";
\t\t\t//3. increase opacity of next_fs to 1 as it moves in
\t\t\topacity = 1 - now;
\t\t\tcurrent_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
\t\t\tnext_fs.css({'left': left, 'opacity': opacity});
\t\t}, 
\t\tduration: 800, 
\t\tcomplete: function(){
\t\t\tcurrent_fs.hide();
\t\t\tanimating = false;
\t\t}, 
\t\t//this comes from the custom easing plugin
\t\teasing: 'easeInOutBack'
\t});
});

\$(\".previous\").click(function(){
\tif(animating) return false;
\tanimating = true;
\t
\tcurrent_fs = \$(this).parent();
\tprevious_fs = \$(this).parent().prev();
\t
\t//de-activate current step on progressbar
\t\$(\"#progressbar li\").eq(\$(\"fieldset\").index(current_fs)).removeClass(\"active\");
\t
\t//show the previous fieldset
\tprevious_fs.show(); 
\t//hide the current fieldset with style
\tcurrent_fs.animate({opacity: 0}, {
\t\tstep: function(now, mx) {
\t\t\t//as the opacity of current_fs reduces to 0 - stored in \"now\"
\t\t\t//1. scale previous_fs from 80% to 100%
\t\t\tscale = 0.8 + (1 - now) * 0.2;
\t\t\t//2. take current_fs to the right(50%) - from 0%
\t\t\tleft = ((1 - now) * 50)+\"%\";
\t\t\t//3. increase opacity of previous_fs to 1 as it moves in
\t\t\topacity = 1 - now;
\t\t\tcurrent_fs.css({'left': left});
\t\t\tprevious_fs.css({
                'transform': 'scale('+scale+')', 
                'opacity': opacity
            });
\t\t}, 
\t\tduration: 800, 
\t\tcomplete: function(){
\t\t\tcurrent_fs.hide();
\t\t\tanimating = false;
\t\t}, 
\t\t//this comes from the custom easing plugin
\t\teasing: 'easeInOutBack'
\t});
});

\$(\".submit\").click(function(){
\treturn false;
})
</script>
";
    }

    public function getTemplateName()
    {
        return "add-page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 162,  282 => 156,  275 => 152,  266 => 146,  259 => 142,  250 => 136,  243 => 132,  234 => 126,  217 => 112,  210 => 108,  201 => 102,  194 => 98,  187 => 94,  178 => 88,  171 => 84,  164 => 80,  147 => 66,  138 => 60,  131 => 56,  122 => 50,  115 => 46,  106 => 40,  97 => 34,  90 => 30,  83 => 26,  56 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block title %} Piattaforma {{ 'now'|date('Y') }} {% endblock %}

{% block content %} 
<main id=\"main\" class=\"main\">
        <!-- MultiStep Form -->
<div class=\"row d-flex justify-content-center mb-5\">
    <div class=\"col-md-10 col-md-offset-2\">
        <form id=\"msform\">

            <!-- progressbar -->
            <ul id=\"progressbar\">
                <li class=\"active\" style=\"font-size: 9px\">Trasporto</li>
                <li>Quantita</li>
                <li>Parziali</li>
            </ul>

            <!-- fieldsets -->
            <fieldset>
                <h2 class=\"fs-title\"> <i class=\"bi bi-truck-front\"></i> Trasporto <i class=\"bi bi-truck-front\"></i> </h2>
                    <h3 class=\"fs-subtitle\"> Inserire i dati richiesti </h3>
                    
                    

                        <label for=\"slot\" class=\"form-label m-2 p-1\"> Slot ID <br>
                             <input type=\"text\" class=\"form-control\" name=\"slot\" value=\"{{ transport.slot }}\"/>
                        </label>
                        
                        <label for=\"cmr\" class=\"form-label m-2 p-1\"> Numero CMR <br>
                            <input type=\"text\" class=\"form-control\" name=\"cmr\" value=\"{{ transport.cmr }}\"/>
                        </label>
                        
                        <label for=\"issuer\" class=\"form-label m-2 p-1\"> Ditta emittente <br>
                            <input type=\"text\" class=\"form-control\" name=\"issuer\" value=\"{{ transport.issuer }}\"/>
                        </label>

                        
                        
                        <label for=\"supplier\" class=\"form-label m-2 p-1\"> Fornitore <br>
                            <input type=\"text\" class=\"form-control\" name=\"supplier\" value=\"{{ transport.supplier }}\"/>
                        </label>
                        
                        <br>
                        
                        <label for=\"date_load\" class=\"form-label m-2 p-1\"> Data carico <br>
                            <input type=\"text\" class=\"datepicker_input form-control\" name=\"date_load\" value=\"{{ transport.date_load }}\"/>
                        </label>
                        
                        <label for=\"date_unload\" class=\"form-label m-2 p-1\"> Data scarico <br>
                            <input type=\"text\" class=\"datepicker_input form-control\" name=\"date_unload\" value=\"{{ transport.date_unload }}\"/>
                        </label>

                        
                        
                        <label for=\"transport\" class=\"form-label m-2 p-1\"> Trasporto <br>
                            <input type=\"text\" class=\"form-control\" name=\"transport\" value=\"{{ transport.transport }}\"/>
                        </label>
                        
                        <label for=\"container\" class=\"form-label m-2 p-1\"> Container <br>
                            <input type=\"text\" class=\"form-control\" name=\"container\" value=\"{{ transport.container }}\"/>
                        </label>
                        
                        <br>

                        <label for=\"note\" class=\"form-label m-2 p-1\"> Nota <br>
                            <textarea rows=\"1\" cols=\"76\" maxlength=\"200\" class=\"form-control\" name=\"note\" value=\"{{ transport.note }}\"></textarea>
                        </label>
                        
                        <br>
                            <input type=\"reset\" name=\"reset\" class=\"action-button\" style=\"background-color: #ee0979\" value=\"Cancella\"/> 
                            <input type=\"button\" name=\"next\" class=\"next action-button\" style=\"background-color: #71b471\" value=\"Next\"/>
                            <input type=\"button\" name=\"data[password]\" class=\"next btn btn-primary btn-block\" value=\"Travel Details\" />
            </fieldset>

            <fieldset>
                <h2 class=\"fs-title\"> <i class=\"bi bi-truck-flatbed\"></i> ... Quantità ... <i class=\"bi bi-truck\"></i> </h2>
                    <h3 class=\"fs-subtitle\"> Inserire le quantità del nuovo trasporto </h3>
                   
                        <label for=\"kg_load\" class=\"form-label m-2 p-1\"> Quantità nominale caricata [kg] <br>
                            <input type=\"text\" class=\"form-control\" name=\"kg_load\" value=\"{{ quantity.kg_load }}\"/>
                        </label>
                    
                        <label for=\"cooling\" class=\"form-label m-2 p-1\"> Raffreddamento <br>
                            <input type=\"text\" class=\"form-control\" name=\"cooling\" value=\"{{ quantity.cooling }}\"/>
                        </label>    <!-- if yes = 600 else no = 0 -->
                    
                        <label for=\"price_typology\" class=\"form-label m-2 p-1\"> Tipologia costo extra <br>
                            <input type=\"text\" class=\"form-control\" name=\"price_typology\" value=\"{{ quantity.price_typology }}\"/>
                        </label>    <!-- yes/no question, if yes display price value -->

                        <br>

                        <label for=\"price_value\" class=\"form-label m-2 p-1\"> Valore costo extra <br>
                            <input type=\"text\" class=\"form-control\" name=\"price_value\" value=\"{{ quantity.price_value }}\"/>
                        </label>
                    
                        <label for=\"kg_unload\" class=\"form-label m-2 p-1\"> Quantità scaricata PD [kg] <br>
                            <input type=\"text\" class=\"form-control\" name=\"kg_unload\" value=\"{{ quantity.kg_unload }}\"/>
                        </label>
                    
                        <label for=\"liquid_density\" class=\"form-label m-2 p-1\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] <br>
                            <input type=\"text\" class=\"form-control\" name=\"liquid_density\" value=\"{{ quantity.liquid_density }}\"/>
                        </label>

                        <br>
                    
                        <label for=\"gas_weight\" class=\"form-label m-2 p-1\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> <br>
                            <input type=\"text\" class=\"form-control\" name=\"gas_weight\" value=\"{{ quantity.gas_weight }}\"/>
                        </label>

                        <label for=\"pcs_ghv\" class=\"form-label m-2 p-1\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> <br>
                            <input type=\"text\" class=\"form-control\" name=\"pcs_ghv\" value=\"{{ quantity.pcs_ghv }}\"></textarea>
                        </label>
                    
                        <br>
                            <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" style=\"background-color: #0066cc\" value=\"Previous\"/>
                            <input type=\"reset\" name=\"reset\" class=\"action-button\" style=\"background-color: #ee0979\" value=\"Cancella\"/> 
                            <input type=\"button\" name=\"next\" class=\"next action-button\" style=\"background-color: #71b471\" value=\"Next\"/>
            </fieldset>

            <fieldset>
                <h2 class=\"fs-title\"> <i class=\"bi bi-fuel-pump\"></i> PARZIALI <i class=\"bi bi-fuel-pump\"></i> </h2>
                    <h3 class=\"fs-subtitle\"> Inserire i scaricamenti parziali del nuovo trasporto </h3>
                
                    <label for=\"kg_load\" class=\"form-label m-2 p-1\"> Quantità nominale caricata [kg] <br>
                        <input type=\"text\" class=\"form-control\" name=\"kg_load\" value=\"{{ quantity.kg_load }}\"/>
                    </label>

                    <br>
                   
                    <label for=\"cooling\" class=\"form-label m-1 p-1\"> Raffreddamento <br>
                        <input type=\"text\" class=\"form-control\" name=\"cooling\" value=\"{{ quantity.cooling }}\"/>
                    </label>    <!-- if yes = 600 else no = 0 -->
                   
                    <label for=\"price_typology\" class=\"form-label m-1 p-1\"> Tipologia costo extra <br>
                        <input type=\"text\" class=\"form-control\" name=\"price_typology\" value=\"{{ quantity.price_typology }}\"/>
                    </label>    <!-- yes/no question, if yes display price value -->

                    <br>

                    <label for=\"price_value\" class=\"form-label m-1 p-1\"> Valore costo extra <br>
                        <input type=\"text\" class=\"form-control\" name=\"price_value\" value=\"{{ quantity.price_value }}\"/>
                    </label>
                   
                    <label for=\"kg_unload\" class=\"form-label m-1 p-1\"> Quantità scaricata PD [kg] <br>
                        <input type=\"text\" class=\"form-control\" name=\"kg_unload\" value=\"{{ quantity.kg_unload }}\"/>
                    </label>

                    <br>
                   
                    <label for=\"liquid_density\" class=\"form-label m-1 p-1\"> Densità (liquido) [<sup>kg</sup>&frasl;<sub>m<sup>3</sup></sub>] <br>
                        <input type=\"text\" class=\"form-control\" name=\"liquid_density\" value=\"{{ quantity.liquid_density }}\"/>
                    </label>
                   
                    <label for=\"gas_weight\" class=\"form-label m-1 p-1\"> Peso specifico (gas) <big>[</big><sup>kg</sup>&frasl;<sub>Nm<sup>3</sup></sub><big>]</big> <br>
                        <input type=\"text\" class=\"form-control\" name=\"gas_weight\" value=\"{{ quantity.gas_weight }}\"/>
                    </label>
                   
                    <br>

                    <label for=\"pcs_ghv\" class=\"form-label m-1 p-1\"> PCS/GHV <big>[</big><sup>kWh</sup>&frasl;<sub>kg</sub><big>]</big> <br>
                        <input type=\"text\" class=\"form-control\" name=\"pcs_ghv\" value=\"{{ quantity.pcs_ghv }}\"></textarea>
                    </label>
                   
                    <br>
                        <input type=\"button\" name=\"previous\" class=\"previous action-button-previous\" style=\"background-color: #0066cc\" value=\"Previous\"/>
                        <input type=\"reset\" name=\"reset\" class=\"action-button\" style=\"background-color: #ee0979\" value=\"Cancella\"/> 
                        <input type=\"submit\" name=\"submit\" class=\"submit action-button\" style=\"background-color: #71b471\" value=\"Submit\"/>
            </fieldset>
        </form>
    </div>
</div>
<!-- /.MultiStep Form -->
</main>

                                                        <!-- scripts -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj\" crossorigin=\"anonymous\"></script>             <!-- Bootstrap 5 JavaScript Bundle with Popper -->
<script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script>      <!-- Vanilla Datepicker JS -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

<script>
                /* vanillajs-datepicker 1.1.4 JS */
    const getDatePickerTitle = elem => {
        const label = elem.nextElementSibling;                      // from the label or the aria-label
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




    
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

\$(\".next\").click(function(){
\tif(animating) return false;
\tanimating = true;
\t
\tcurrent_fs = \$(this).parent();
\tnext_fs = \$(this).parent().next();
\t
\t//activate next step on progressbar using the index of next_fs
\t\$(\"#progressbar li\").eq(\$(\"fieldset\").index(next_fs)).addClass(\"active\");
\t
\t//show the next fieldset
\tnext_fs.show(); 
\t//hide the current fieldset with style
\tcurrent_fs.animate({opacity: 0}, {
\t\tstep: function(now, mx) {
\t\t\t//as the opacity of current_fs reduces to 0 - stored in \"now\"
\t\t\t//1. scale current_fs down to 80%
\t\t\tscale = 1 - (1 - now) * 0.8;
\t\t\t//2. bring next_fs from the right(50%)
\t\t\tleft = (now * 50)+\"%\";
\t\t\t//3. increase opacity of next_fs to 1 as it moves in
\t\t\topacity = 1 - now;
\t\t\tcurrent_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
\t\t\tnext_fs.css({'left': left, 'opacity': opacity});
\t\t}, 
\t\tduration: 800, 
\t\tcomplete: function(){
\t\t\tcurrent_fs.hide();
\t\t\tanimating = false;
\t\t}, 
\t\t//this comes from the custom easing plugin
\t\teasing: 'easeInOutBack'
\t});
});

\$(\".previous\").click(function(){
\tif(animating) return false;
\tanimating = true;
\t
\tcurrent_fs = \$(this).parent();
\tprevious_fs = \$(this).parent().prev();
\t
\t//de-activate current step on progressbar
\t\$(\"#progressbar li\").eq(\$(\"fieldset\").index(current_fs)).removeClass(\"active\");
\t
\t//show the previous fieldset
\tprevious_fs.show(); 
\t//hide the current fieldset with style
\tcurrent_fs.animate({opacity: 0}, {
\t\tstep: function(now, mx) {
\t\t\t//as the opacity of current_fs reduces to 0 - stored in \"now\"
\t\t\t//1. scale previous_fs from 80% to 100%
\t\t\tscale = 0.8 + (1 - now) * 0.2;
\t\t\t//2. take current_fs to the right(50%) - from 0%
\t\t\tleft = ((1 - now) * 50)+\"%\";
\t\t\t//3. increase opacity of previous_fs to 1 as it moves in
\t\t\topacity = 1 - now;
\t\t\tcurrent_fs.css({'left': left});
\t\t\tprevious_fs.css({
                'transform': 'scale('+scale+')', 
                'opacity': opacity
            });
\t\t}, 
\t\tduration: 800, 
\t\tcomplete: function(){
\t\t\tcurrent_fs.hide();
\t\t\tanimating = false;
\t\t}, 
\t\t//this comes from the custom easing plugin
\t\teasing: 'easeInOutBack'
\t});
});

\$(\".submit\").click(function(){
\treturn false;
})
</script>
{% endblock %}", "add-page.html", "C:\\wamp\\www\\liquimet\\templates\\add-page.html");
    }
}
