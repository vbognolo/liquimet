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

/* shared/transports-navigation.twig */
class __TwigTemplate_43a19862507f2bfb6db2333acb0be5a1 extends Template
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
            'jquery' => [$this, 'block_jquery'],
            'page_script' => [$this, 'block_page_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<section class=\"col-12 my-1\">
    <div class=\"d-flex flex-column align-items-center submenu\">
            
        <div class=\"text-center mx-auto\">
            <a class=\"mx-1\" href=\"/transports\">
                <h1 class=\"submenu-title\"> 
                    Costo LNG
                </h1>
            </a>
        </div>    

        <div class=\"nav justify-content-center mx-auto submenu-navigation\">
            <ul class=\"navbar d-flex align-items-center\">

                <li class=\"nav-item px-1\">
                    <a class=\"nav-link align-middle\" href=\"/transports-full\">
                        <abbr title=\"Transport Management System\">TMS</abbr> 
                            - PIENI
                    </a>
                </li>

                <li class=\"nav-item\"> 
                    <i class=\"bi bi-circle-fill\"></i>
                </li>
                    
                <li class=\"nav-item px-1\">
                    <a class=\"nav-link align-middle\" href=\"/transports-part\">
                        <abbr title=\"Transport Management System\">TMS</abbr> 
                           - PARZIALI
                    </a>
                </li>

                <li class=\"nav-item\"> 
                    <i class=\"bi bi-circle-fill\"></i>
                </li>

                <li class=\"nav-item px-1\">
                    <a class=\"nav-link align-middle\" href=\"/transport\">
                        CREA TRASPORTO
                    </a>
                </li>

            </ul>
        </div>
    </div>
</section>

";
        // line 49
        yield from $this->unwrap()->yieldBlock('jquery', $context, $blocks);
        // line 55
        yield "
";
        // line 56
        yield from $this->unwrap()->yieldBlock('page_script', $context, $blocks);
        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_jquery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
";
        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        yield "<script>
\$(document).ready(function() {
    jQuery(function(\$){
        \$(\"ul a\").click(function(e) {
            var link = \$(this);
            var item = link.parent(\"li\");
                    
            if(item.hasClass(\"active\")) {
                item.removeClass(\"active\").children(\"a\").removeClass(\"active\");
            } else {
                item.addClass(\"active\").children(\"a\").addClass(\"active\");
            }
    
            if(item.children(\"ul\").length > 0) {
                var href = link.attr(\"href\");
                link.attr(\"href\");
                    setTimeout(function() { 
                        link.attr(\"href\", href);
                    }, 300);
                e.preventDefault();
            }
         })
        .each(function() {
            var link = \$(this);
            if(link.get(0).href === location.href) {
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
        return "shared/transports-navigation.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  126 => 57,  119 => 56,  110 => 50,  103 => 49,  98 => 56,  95 => 55,  93 => 49,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Platform Page Title Navigation #}
<section class=\"col-12 my-1\">
    <div class=\"d-flex flex-column align-items-center submenu\">
            
        <div class=\"text-center mx-auto\">
            <a class=\"mx-1\" href=\"/transports\">
                <h1 class=\"submenu-title\"> 
                    Costo LNG
                </h1>
            </a>
        </div>    

        <div class=\"nav justify-content-center mx-auto submenu-navigation\">
            <ul class=\"navbar d-flex align-items-center\">

                <li class=\"nav-item px-1\">
                    <a class=\"nav-link align-middle\" href=\"/transports-full\">
                        <abbr title=\"Transport Management System\">TMS</abbr> 
                            - PIENI
                    </a>
                </li>

                <li class=\"nav-item\"> 
                    <i class=\"bi bi-circle-fill\"></i>
                </li>
                    
                <li class=\"nav-item px-1\">
                    <a class=\"nav-link align-middle\" href=\"/transports-part\">
                        <abbr title=\"Transport Management System\">TMS</abbr> 
                           - PARZIALI
                    </a>
                </li>

                <li class=\"nav-item\"> 
                    <i class=\"bi bi-circle-fill\"></i>
                </li>

                <li class=\"nav-item px-1\">
                    <a class=\"nav-link align-middle\" href=\"/transport\">
                        CREA TRASPORTO
                    </a>
                </li>

            </ul>
        </div>
    </div>
</section>

{% block jquery %}
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
{% endblock %}

{% block page_script %}
<script>
\$(document).ready(function() {
    jQuery(function(\$){
        \$(\"ul a\").click(function(e) {
            var link = \$(this);
            var item = link.parent(\"li\");
                    
            if(item.hasClass(\"active\")) {
                item.removeClass(\"active\").children(\"a\").removeClass(\"active\");
            } else {
                item.addClass(\"active\").children(\"a\").addClass(\"active\");
            }
    
            if(item.children(\"ul\").length > 0) {
                var href = link.attr(\"href\");
                link.attr(\"href\");
                    setTimeout(function() { 
                        link.attr(\"href\", href);
                    }, 300);
                e.preventDefault();
            }
         })
        .each(function() {
            var link = \$(this);
            if(link.get(0).href === location.href) {
                link.addClass(\"active\").parents(\"li\").addClass(\"active\");
                    return false;
            }
        });
    });
});
</script>
{% endblock %}", "shared/transports-navigation.twig", "C:\\wamp64\\www\\liquimet\\templates\\shared\\transports-navigation.twig");
    }
}
