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

/* page-not-found.html */
class __TwigTemplate_f421ca7c5e17bae921b3f6f510a6378215cae489e28b055d78bc3c9087d9c250 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "page-not-found.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Pagina non trovata ";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    
        <section class=\"submenu align-items-center my-auto mx-auto p-2\">
                <div class=\"container justify-content-center mx-auto p-2\">

                        <h1>Errore!</h1>
                            <p>
                                Riprovare o contattare l'amministratore.
                            </p>
                            <p>
                                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "index\">Torna indietro</a>.
                            </p>
                </div>
        </section>

    
";
    }

    public function getTemplateName()
    {
        return "page-not-found.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block title %} Pagina non trovata {% endblock %} 

{% block content %}

    
        <section class=\"submenu align-items-center my-auto mx-auto p-2\">
                <div class=\"container justify-content-center mx-auto p-2\">

                        <h1>Errore!</h1>
                            <p>
                                Riprovare o contattare l'amministratore.
                            </p>
                            <p>
                                <a href=\"{{ doc_root }}index\">Torna indietro</a>.
                            </p>
                </div>
        </section>

    
{% endblock %}", "page-not-found.html", "C:\\wamp\\www\\liquimet\\templates\\page-not-found.html");
    }
}
