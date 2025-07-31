<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* platform.twig */
class __TwigTemplate_3f060efe50ca1837a2ec3342e710702a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'search' => [$this, 'block_search'],
            'browse' => [$this, 'block_browse'],
            'content' => [$this, 'block_content'],
            'jquery' => [$this, 'block_jquery'],
            'page_script' => [$this, 'block_page_script'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "platform.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Piattaforma ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    ";
        // line 6
        yield "    <section class=\"row my-auto mx-auto search-header\">
        <div class=\"my-auto m-0 search-bar\">
            <form id=\"search-form\">
                <button type=\"button\" class=\"my-1 search-btn\">
                    <i class=\"bi bi-search\"></i>
                </button>
                <input type=\"text\" class=\"my-1 search-input\" id=\"search\" placeholder=\"      Cerca..\" />  
            </form>
        </div>
    </section>
";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_browse(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "    <!--    ===>    BROWSE FILE BAR    <===    -->
    <section class=\"row my-auto mx-auto browse-header\">
        <div class=\"my-auto m-0 browse-bar\">
            <form id=\"browse-form\" enctype=\"multipart/form-data\" method=\"POST\" action=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "import-csv\">
                <label for=\"browse-input\" class=\"my-1 browse-btn\">
                    <i class=\"bi bi-upload\"></i>
                </label>
                
                <input type=\"file\" class=\"my-1 browse-input\" id=\"browse-input\" name=\"browse-input\" 
                    onchange=\"\$('.browse-label').val(\$(this).val()); \$('.browse-group').css('display', 'block');\" />
                <input type=\"text\" class=\"my-1 browse-label\" readonly />
                
                <span class=\"my-1 browse-group\"> 
                    <button type=\"button\" class=\"my-1 remove-btn\" onclick=\"document.querySelector('.browse-label').value=''; \$('.browse-group').css('display', 'none');\">
                        <i class=\"bi bi-x-circle\"></i>
                    </button>

                    <button type=\"button\" class=\"my-1 upload-btn\">
                        <i class=\"bi bi-check-circle\"></i>
                    </button>
                </span>
                
                <!--<button type=\"button\" class=\"my-1 browse-btn\">
                    <i class=\"bi bi-upload\"></i>
                </button>-->
                
                <!--<div class=\"input-group my-1 browse-group\">
                    <input type=\"text\" class=\"my-1 browse-label\" name=\"browse-label\" readonly />  
                        <button type=\"button\" class=\"my-1 upload-btn\">
                            <span>
                                <i class=\"bi bi-plus-circle\"></i>
                            </span>
                        </button>

                        <button type=\"button\" class=\"my-1 remove-btn\">
                            <span>
                                <i class=\"bi bi-x-circle\"></i>
                            </span>
                        </button>
                </div>-->
            </form>
        </div>
    </section>
    <!--    ===>    END BROWSE FILE BAR    <===    -->
";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " 
    ";
        // line 66
        yield from $this->loadTemplate("transports-navigation.twig", "platform.twig", 66)->unwrap()->yield($context);
        // line 67
        yield "
<section class=\"col-12 m-auto\">
    <div class=\"d-flex justify-content-center table-responsive\">          
        <table class=\"table table-hover table-light table-stripped caption-top text-center platform\" id=\"transport-table\">
            <caption class=\"px-3 mb-2 text-white text-shadow-dark\" style=\"font-size: 1.9rem\"> 
                <span>
                    <i class=\"bi bi-arrow-bar-right my-1 fs-3\"></i> 
                        Piattaforma 2025
                </span>
            </caption>   

            <thead>
                <tr class=\"border-top border-light bg-primary bg-gradient table-title\">
                    <th scope=\"col\" class=\"align-middle px-3\"> # </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> Tipo </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> Slot ID </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> Numero CMR </th>
                    <th scope=\"col\" class=\"align-middle px-3\"> Emittente </th>
                    <th scope=\"col\" class=\"align-middle px-3\"> Fornitore </th>
                    <th scope=\"col\" class=\"align-middle px-3\"> Trasporto </th>
                    <th scope=\"col\" class=\"align-middle px-3\"> Univoco </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> Data carico </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> Data scarico </th>
                    <th scope=\"col\" class=\"align-middle\"> Mese carico </th>
                    <th scope=\"col\" class=\"align-middle\"> Settimana scarico </th>
                    <th scope=\"col\" class=\"align-middle\" colspan=\"2\"> Mese scarico </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> Container<br>ATB </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> <i class=\"bi bi-gear\"></i> </th>
                </tr>
            </thead>

                        ";
        // line 98
        yield from $this->loadTemplate("platform-ajax.twig", "platform.twig", 98)->unwrap()->yield($context);
        // line 99
        yield "                </table>
            </div> 
       
    </section> 
";
        yield from [];
    }

    // line 105
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_jquery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 106
        yield "    ";
        // line 107
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
";
        yield from [];
    }

    // line 113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 114
        yield "<script>
\$(document).ready(function() {
//  Tooltip  
    \$(\"body\").tooltip({ 
        selector: '[data-bs-toggle = tooltip]',
        placement: 'right' 
    });

//  Search Bar
    \$(\"#search\").keyup(function(){
        var value = this.value.toLowerCase().trim();

        \$(\".platform\").each(function(index){
            if(index !== -1){

                \$(this).find(\"td\").each(function(){
                    var id = \$(this).text().toLowerCase().trim();
                    var not_found = (id.indexOf(value) == -1);
                    
                    \$(this).closest('tr').toggle(!not_found);
                        return not_found;
                });
            } 
        });
    });

    \$(\"#search\").keydown(function(e){
        if(e.keyCode == 13){ 
            e.preventDefault();
                return false;
        }
    });
});  
</script>   
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "platform.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  232 => 114,  225 => 113,  216 => 107,  214 => 106,  207 => 105,  198 => 99,  196 => 98,  163 => 67,  161 => 66,  152 => 65,  105 => 22,  100 => 19,  93 => 18,  78 => 6,  76 => 5,  69 => 4,  56 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.twig' %}
{% block title %} Piattaforma {{ 'now'|date('Y') }} {% endblock %}

{% block search %}
    {# Search Bar #}
    <section class=\"row my-auto mx-auto search-header\">
        <div class=\"my-auto m-0 search-bar\">
            <form id=\"search-form\">
                <button type=\"button\" class=\"my-1 search-btn\">
                    <i class=\"bi bi-search\"></i>
                </button>
                <input type=\"text\" class=\"my-1 search-input\" id=\"search\" placeholder=\"      Cerca..\" />  
            </form>
        </div>
    </section>
{% endblock %}
 
{% block browse %}
    <!--    ===>    BROWSE FILE BAR    <===    -->
    <section class=\"row my-auto mx-auto browse-header\">
        <div class=\"my-auto m-0 browse-bar\">
            <form id=\"browse-form\" enctype=\"multipart/form-data\" method=\"POST\" action=\"{{ doc_root }}import-csv\">
                <label for=\"browse-input\" class=\"my-1 browse-btn\">
                    <i class=\"bi bi-upload\"></i>
                </label>
                
                <input type=\"file\" class=\"my-1 browse-input\" id=\"browse-input\" name=\"browse-input\" 
                    onchange=\"\$('.browse-label').val(\$(this).val()); \$('.browse-group').css('display', 'block');\" />
                <input type=\"text\" class=\"my-1 browse-label\" readonly />
                
                <span class=\"my-1 browse-group\"> 
                    <button type=\"button\" class=\"my-1 remove-btn\" onclick=\"document.querySelector('.browse-label').value=''; \$('.browse-group').css('display', 'none');\">
                        <i class=\"bi bi-x-circle\"></i>
                    </button>

                    <button type=\"button\" class=\"my-1 upload-btn\">
                        <i class=\"bi bi-check-circle\"></i>
                    </button>
                </span>
                
                <!--<button type=\"button\" class=\"my-1 browse-btn\">
                    <i class=\"bi bi-upload\"></i>
                </button>-->
                
                <!--<div class=\"input-group my-1 browse-group\">
                    <input type=\"text\" class=\"my-1 browse-label\" name=\"browse-label\" readonly />  
                        <button type=\"button\" class=\"my-1 upload-btn\">
                            <span>
                                <i class=\"bi bi-plus-circle\"></i>
                            </span>
                        </button>

                        <button type=\"button\" class=\"my-1 remove-btn\">
                            <span>
                                <i class=\"bi bi-x-circle\"></i>
                            </span>
                        </button>
                </div>-->
            </form>
        </div>
    </section>
    <!--    ===>    END BROWSE FILE BAR    <===    -->
{% endblock %}

{% block content %} 
    {% include 'transports-navigation.twig' %}

<section class=\"col-12 m-auto\">
    <div class=\"d-flex justify-content-center table-responsive\">          
        <table class=\"table table-hover table-light table-stripped caption-top text-center platform\" id=\"transport-table\">
            <caption class=\"px-3 mb-2 text-white text-shadow-dark\" style=\"font-size: 1.9rem\"> 
                <span>
                    <i class=\"bi bi-arrow-bar-right my-1 fs-3\"></i> 
                        Piattaforma 2025
                </span>
            </caption>   

            <thead>
                <tr class=\"border-top border-light bg-primary bg-gradient table-title\">
                    <th scope=\"col\" class=\"align-middle px-3\"> # </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> Tipo </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> Slot ID </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> Numero CMR </th>
                    <th scope=\"col\" class=\"align-middle px-3\"> Emittente </th>
                    <th scope=\"col\" class=\"align-middle px-3\"> Fornitore </th>
                    <th scope=\"col\" class=\"align-middle px-3\"> Trasporto </th>
                    <th scope=\"col\" class=\"align-middle px-3\"> Univoco </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> Data carico </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> Data scarico </th>
                    <th scope=\"col\" class=\"align-middle\"> Mese carico </th>
                    <th scope=\"col\" class=\"align-middle\"> Settimana scarico </th>
                    <th scope=\"col\" class=\"align-middle\" colspan=\"2\"> Mese scarico </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> Container<br>ATB </th>
                    <th scope=\"col\" class=\"align-middle px-2\"> <i class=\"bi bi-gear\"></i> </th>
                </tr>
            </thead>

                        {% include 'platform-ajax.twig' %}
                </table>
            </div> 
       
    </section> 
{% endblock %}
   
{% block jquery %}
    {# JQuery #}
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
{% endblock %}

{% block page_script %}
<script>
\$(document).ready(function() {
//  Tooltip  
    \$(\"body\").tooltip({ 
        selector: '[data-bs-toggle = tooltip]',
        placement: 'right' 
    });

//  Search Bar
    \$(\"#search\").keyup(function(){
        var value = this.value.toLowerCase().trim();

        \$(\".platform\").each(function(index){
            if(index !== -1){

                \$(this).find(\"td\").each(function(){
                    var id = \$(this).text().toLowerCase().trim();
                    var not_found = (id.indexOf(value) == -1);
                    
                    \$(this).closest('tr').toggle(!not_found);
                        return not_found;
                });
            } 
        });
    });

    \$(\"#search\").keydown(function(e){
        if(e.keyCode == 13){ 
            e.preventDefault();
                return false;
        }
    });
});  
</script>   
{% endblock %}", "platform.twig", "C:\\wamp64\\www\\liquimet\\templates\\platform.twig");
    }
}
