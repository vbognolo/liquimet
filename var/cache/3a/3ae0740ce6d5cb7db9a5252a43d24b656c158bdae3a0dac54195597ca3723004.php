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

/* admin/register.html */
class __TwigTemplate_2e232a99affdf8e2c50affeeffda7e3fe76d4b8a7d98ad90d24af87402a8fbc8 extends Template
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
        return "admin/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/register.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Registrazione utenti ";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <section class=\"grid-container mt-4 pt-3 mx-auto d-flex justify-content-center\">
        <form id=\"signup\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "admin/register\" method=\"POST\">
                
                    <!--    ===>    REGISTER FORM    <===    -->
            <fieldset>
                <div class=\"form-card pt-0\">
                    <div class=\"form-title row mt-2 pt-0 mx-auto\">
                        <h2 class=\"fs-title\"> 
                            <i class=\"bi bi-people\"></i>
                                &nbsp;Registrazione&nbsp; 
                            <i class=\"bi bi-people\"></i>
                        </h2>
                        
                        <h3 class=\"fs-subtitle pt-0 mt-0\"> 
                            Inserire i dati richiesti per creare il nuovo utente. 
                        </h3>
                    </div>

                    <div class=\"form-group row mx-auto my-2 px-3 py-0\">                
                        <div class=\"col-lg-5\">
                            <label for=\"email\" class=\"form-control-label mb-0\"> Indirizzo e-mail </label>
                            <input type=\"email\" class=\"form-control\" name=\"email\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "email", [], "any", false, false, false, 26)), "html", null, true);
        echo "\"/>
                        </div>
                        
                        <div class=\"col-lg-5\">
                            <label for=\"user\" class=\"form-control-label mb-0\"> Username </label>
                            <input type=\"text\" class=\"form-control\" name=\"user\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "username", [], "any", false, false, false, 31), "html", null, true);
        echo "\"/>
                        </div>
                        
                        <div class=\"col-lg-2\">
                            <label class=\"form-control-label mb-0\" for=\"role\"> Accesso </label>
                                <select class=\"form-control\" name=\"role\" id=\"role\">
                                    <option value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "role", [], "any", false, false, false, 37), "html", null, true);
        echo " \" class=\"opt-type\"></option>
                                    <option value=\"1\" class=\"opt-type\" style=\"text-align: center\"> Admin </option>
                                    <option value=\"2\" class=\"opt-type\"> Membro </option>
                                    <option value=\"3\" class=\"opt-type\"> Sospeso </option>
                                </select>
                        </div> 
                                    
                        <div class=\"col-lg-5\">
                            <label for=\"name\" class=\"form-control-label mb-0\"> Nome </label>
                            <input type=\"text\" class=\"form-control\" name=\"name\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "name", [], "any", false, false, false, 46), "html", null, true);
        echo "\"/>
                        </div>
                                
                        <div class=\"col-lg-5\">
                            <label for=\"surname\" class=\"form-control-label mb-0\"> Cognome </label>
                            <input type=\"text\" class=\"form-control\" name=\"surname\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "surname", [], "any", false, false, false, 51), "html", null, true);
        echo "\"/>
                        </div>
                        
                        <div class=\"col-lg-2\">
                            <label class=\"form-control-label mb-0\" for=\"gender\"> Genere </label>
                                <select class=\"form-control\" name=\"gender\" id=\"gender\">
                                    <option value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "gender", [], "any", false, false, false, 57), "html", null, true);
        echo " \" class=\"opt-type\"></option>
                                    <option value=\"m\" class=\"opt-type\"> Uomo </option>
                                    <option value=\"f\" class=\"opt-type\"> Donna </option>
                                </select>
                        </div> 
                        
                        <div class=\"col-lg-8\">
                            <label class=\"form-control-label mb-0\" for=\"title\"> Ruolo aziendale </label>
                                <select class=\"form-control\" name=\"title\" id=\"title\">
                                    <option value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "id_title", [], "any", false, false, false, 66), "html", null, true);
        echo "\" class=\"opt-type\"></option>
                                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["titles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 68
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "id_title", [], "any", false, false, false, 68), "html", null, true);
            echo "\" class=\"opt-type\"> 
                                            ";
            // line 69
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "name", [], "any", false, false, false, 69)), "html", null, true);
            echo " 
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                </select>
                        </div> 
                        
                        <div class=\"col-lg-6\">
                            <label for=\"pass\" class=\"form-control-label mb-0\"> Password </label>
                            <input type=\"password\" class=\"form-control\" id=\"pass\" name=\"pass\">
                        </div>
                        
                        <div class=\"col-lg-6\">
                            <label for=\"confirm\" class=\"form-control-label mb-0\"> Conferma password </label>
                            <input type=\"password\" class=\"form-control\" id=\"confirm\" name=\"confirm\">
                        </div>                
                    </div>
                </div>
                
                <button type=\"button\" name=\"previous\" class=\"previous action-button mb-3 mt-2\" style=\"position: absolute; left: 4rem\" onclick=\"history.back()\"> Indietro </button>    
                <button type=\"reset\" name=\"reset\" class=\"reset action-button mb-2 mt-2 mx-auto\" value=\"reset\"> Cancella </button>
                <button type=\"submit\" name=\"submit\" id=\"submit\" class=\"submit action-button mb-3 mt-2 mx-auto\" style=\"position: absolute; right: 4rem\"> Salva </button> 
            </fieldset>
                    <!--    ===>    END REGISTER FORM    <===    -->
";
    }

    public function getTemplateName()
    {
        return "admin/register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 72,  155 => 69,  150 => 68,  146 => 67,  142 => 66,  130 => 57,  121 => 51,  113 => 46,  101 => 37,  92 => 31,  84 => 26,  61 => 6,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}
{% block title %} Registrazione utenti {% endblock %}

{% block content %}
    <section class=\"grid-container mt-4 pt-3 mx-auto d-flex justify-content-center\">
        <form id=\"signup\" action=\"{{ doc_root }}admin/register\" method=\"POST\">
                
                    <!--    ===>    REGISTER FORM    <===    -->
            <fieldset>
                <div class=\"form-card pt-0\">
                    <div class=\"form-title row mt-2 pt-0 mx-auto\">
                        <h2 class=\"fs-title\"> 
                            <i class=\"bi bi-people\"></i>
                                &nbsp;Registrazione&nbsp; 
                            <i class=\"bi bi-people\"></i>
                        </h2>
                        
                        <h3 class=\"fs-subtitle pt-0 mt-0\"> 
                            Inserire i dati richiesti per creare il nuovo utente. 
                        </h3>
                    </div>

                    <div class=\"form-group row mx-auto my-2 px-3 py-0\">                
                        <div class=\"col-lg-5\">
                            <label for=\"email\" class=\"form-control-label mb-0\"> Indirizzo e-mail </label>
                            <input type=\"email\" class=\"form-control\" name=\"email\" value=\"{{ member.email|lower }}\"/>
                        </div>
                        
                        <div class=\"col-lg-5\">
                            <label for=\"user\" class=\"form-control-label mb-0\"> Username </label>
                            <input type=\"text\" class=\"form-control\" name=\"user\" value=\"{{ member.username }}\"/>
                        </div>
                        
                        <div class=\"col-lg-2\">
                            <label class=\"form-control-label mb-0\" for=\"role\"> Accesso </label>
                                <select class=\"form-control\" name=\"role\" id=\"role\">
                                    <option value=\"{{ member.role }} \" class=\"opt-type\"></option>
                                    <option value=\"1\" class=\"opt-type\" style=\"text-align: center\"> Admin </option>
                                    <option value=\"2\" class=\"opt-type\"> Membro </option>
                                    <option value=\"3\" class=\"opt-type\"> Sospeso </option>
                                </select>
                        </div> 
                                    
                        <div class=\"col-lg-5\">
                            <label for=\"name\" class=\"form-control-label mb-0\"> Nome </label>
                            <input type=\"text\" class=\"form-control\" name=\"name\" value=\"{{ member.name }}\"/>
                        </div>
                                
                        <div class=\"col-lg-5\">
                            <label for=\"surname\" class=\"form-control-label mb-0\"> Cognome </label>
                            <input type=\"text\" class=\"form-control\" name=\"surname\" value=\"{{ member.surname }}\"/>
                        </div>
                        
                        <div class=\"col-lg-2\">
                            <label class=\"form-control-label mb-0\" for=\"gender\"> Genere </label>
                                <select class=\"form-control\" name=\"gender\" id=\"gender\">
                                    <option value=\"{{ member.gender }} \" class=\"opt-type\"></option>
                                    <option value=\"m\" class=\"opt-type\"> Uomo </option>
                                    <option value=\"f\" class=\"opt-type\"> Donna </option>
                                </select>
                        </div> 
                        
                        <div class=\"col-lg-8\">
                            <label class=\"form-control-label mb-0\" for=\"title\"> Ruolo aziendale </label>
                                <select class=\"form-control\" name=\"title\" id=\"title\">
                                    <option value=\"{{ member.id_title }}\" class=\"opt-type\"></option>
                                    {% for t in titles %}
                                        <option value=\"{{ t.id_title }}\" class=\"opt-type\"> 
                                            {{ t.name|capitalize }} 
                                        </option>
                                    {% endfor %}
                                </select>
                        </div> 
                        
                        <div class=\"col-lg-6\">
                            <label for=\"pass\" class=\"form-control-label mb-0\"> Password </label>
                            <input type=\"password\" class=\"form-control\" id=\"pass\" name=\"pass\">
                        </div>
                        
                        <div class=\"col-lg-6\">
                            <label for=\"confirm\" class=\"form-control-label mb-0\"> Conferma password </label>
                            <input type=\"password\" class=\"form-control\" id=\"confirm\" name=\"confirm\">
                        </div>                
                    </div>
                </div>
                
                <button type=\"button\" name=\"previous\" class=\"previous action-button mb-3 mt-2\" style=\"position: absolute; left: 4rem\" onclick=\"history.back()\"> Indietro </button>    
                <button type=\"reset\" name=\"reset\" class=\"reset action-button mb-2 mt-2 mx-auto\" value=\"reset\"> Cancella </button>
                <button type=\"submit\" name=\"submit\" id=\"submit\" class=\"submit action-button mb-3 mt-2 mx-auto\" style=\"position: absolute; right: 4rem\"> Salva </button> 
            </fieldset>
                    <!--    ===>    END REGISTER FORM    <===    -->
{% endblock %}", "admin/register.html", "D:\\wamp\\www\\liquimet\\templates\\admin\\register.html");
    }
}
