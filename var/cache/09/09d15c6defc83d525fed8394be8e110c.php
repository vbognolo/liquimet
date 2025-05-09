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

/* admin/users-navigation.twig */
class __TwigTemplate_4e9c9fcbb96bc0822ebd79b91dfb59f0 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<section class=\"col-12 my-1\">
    <div class=\"d-flex flex-column align-items-center submenu\">
            
        <div class=\"text-center mx-auto\">
            <a class=\"mx-1\" href=\"/admin/users\">
                <h1 class=\"submenu-title\"> 
                    Utenti
                </h1>
            </a>
        </div>    

        <div class=\"nav justify-content-center mx-auto submenu-navigation\">
            <ul class=\"navbar d-flex align-items-center\">

                <li class=\"nav-item px-1\">
                    <a class=\"nav-link align-middle\" href=\"/admin/user\">
                        REGISTRAZIONE
                    </a>
                </li>

                <li class=\"nav-item\"> 
                    <i class=\"bi bi-circle-fill\"></i>
                </li>
                    
                <li class=\"nav-item px-1\">
                    <a class=\"nav-link align-middle\" href=\"/admin/titles\">
                        RUOLI AZIENDALI
                    </a>
                </li>

            </ul>
        </div>
    </div>
</section>

";
        // line 37
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    ";
        // line 39
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 44
        yield "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" 
        integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" 
        crossorigin=\"anonymous\">
</script>
<script>
\$(document).ready(function(){
    jQuery(function(\$){
        \$(\"ul a\").click(function(e){
            var link = \$(this);
            var item = link.parent(\"li\");
                    
            if(item.hasClass(\"active\")){
                item.removeClass(\"active\").children(\"a\").removeClass(\"active\");
            } else{
                item.addClass(\"active\").children(\"a\").addClass(\"active\");
            }
    
            if(item.children(\"ul\").length > 0){
                var href = link.attr(\"href\");
                link.attr(\"href\");
                    setTimeout(function(){ 
                        link.attr(\"href\", href);
                    }, 300);
                e.preventDefault();
            }
         })
        .each(function(){
            var link = \$(this);
            if(link.get(0).href === location.href){
                link.addClass(\"active\").parents(\"li\").addClass(\"active\");
                    return false;
            }
        });
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
        return "admin/users-navigation.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  99 => 44,  93 => 39,  91 => 38,  80 => 37,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Users Page Navigation #}
<section class=\"col-12 my-1\">
    <div class=\"d-flex flex-column align-items-center submenu\">
            
        <div class=\"text-center mx-auto\">
            <a class=\"mx-1\" href=\"/admin/users\">
                <h1 class=\"submenu-title\"> 
                    Utenti
                </h1>
            </a>
        </div>    

        <div class=\"nav justify-content-center mx-auto submenu-navigation\">
            <ul class=\"navbar d-flex align-items-center\">

                <li class=\"nav-item px-1\">
                    <a class=\"nav-link align-middle\" href=\"/admin/user\">
                        REGISTRAZIONE
                    </a>
                </li>

                <li class=\"nav-item\"> 
                    <i class=\"bi bi-circle-fill\"></i>
                </li>
                    
                <li class=\"nav-item px-1\">
                    <a class=\"nav-link align-middle\" href=\"/admin/titles\">
                        RUOLI AZIENDALI
                    </a>
                </li>

            </ul>
        </div>
    </div>
</section>

{% block scripts %}
    {# JQuery #}
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    {# Bootstrap JS bundle (includes modal) #}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" 
        integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" 
        crossorigin=\"anonymous\">
</script>
<script>
\$(document).ready(function(){
    jQuery(function(\$){
        \$(\"ul a\").click(function(e){
            var link = \$(this);
            var item = link.parent(\"li\");
                    
            if(item.hasClass(\"active\")){
                item.removeClass(\"active\").children(\"a\").removeClass(\"active\");
            } else{
                item.addClass(\"active\").children(\"a\").addClass(\"active\");
            }
    
            if(item.children(\"ul\").length > 0){
                var href = link.attr(\"href\");
                link.attr(\"href\");
                    setTimeout(function(){ 
                        link.attr(\"href\", href);
                    }, 300);
                e.preventDefault();
            }
         })
        .each(function(){
            var link = \$(this);
            if(link.get(0).href === location.href){
                link.addClass(\"active\").parents(\"li\").addClass(\"active\");
                    return false;
            }
        });
    });
});
</script>
{% endblock %}", "admin/users-navigation.twig", "C:\\wamp64\\www\\liquimet\\templates\\admin\\users-navigation.twig");
    }
}
