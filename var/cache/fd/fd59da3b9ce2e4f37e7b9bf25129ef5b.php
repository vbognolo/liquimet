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

/* shared/transports-head.twig */
class __TwigTemplate_211d2dcc98bf2825694b325355d951a7 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<tr class=\"border-top border-light bg-primary bg-gradient table-title\">
    <th scope=\"col\" class=\"align-middle px-3\" style=\"width: 50px\"> # </th>
        ";
        // line 5
        yield "    ";
        if (($context["show_type"] ?? null)) {
            // line 6
            yield "        <th scope=\"col\" class=\"align-middle px-3\" style=\"width: 50px\"> Tipo </th>
    ";
        }
        // line 8
        yield "    <th scope=\"col\" class=\"align-middle px-2\" style=\"width: 350px\"> Slot ID </th>
    <th scope=\"col\" class=\"align-middle px-3\" style=\"width: 250px\"> Numero CMR </th>
    <th scope=\"col\" class=\"align-middle px-3\" style=\"width: 150px\"> Emittente </th>
    <th scope=\"col\" class=\"align-middle px-3\" style=\"width: 150px\"> Fornitore </th>
    <th scope=\"col\" class=\"align-middle px-3\" style=\"width: 100px\"> Trasporto </th>
    <th scope=\"col\" class=\"align-middle px-3\" style=\"width: 180px\"> Univoco </th>
    <th scope=\"col\" class=\"align-middle px-2\" style=\"width: 120px\"> Data carico </th>
    <th scope=\"col\" class=\"align-middle px-2\" style=\"width: 120px\"> Data scarico </th>
    <th scope=\"col\" class=\"align-middle px-2\" style=\"width: 90px\"> Mese carico </th>
    <th scope=\"col\" class=\"align-middle px-2\" style=\"width: 120px\"> Settimana scarico </th>
    <th scope=\"col\" class=\"align-middle px-2\" style=\"width: 130px\"> Mese scarico </th>
    <th scope=\"col\" class=\"align-middle px-2\" style=\"width: 160px\"> Container<br>ATB </th>
    <th scope=\"col\" class=\"align-middle px-2\" style=\"width: 80px\"> <i class=\"bi bi-gear\"></i> </th>
</tr>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shared/transports-head.twig";
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
        return array (  53 => 8,  49 => 6,  46 => 5,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Transports Table Head #}
<tr class=\"border-top border-light bg-primary bg-gradient table-title\">
    <th scope=\"col\" class=\"align-middle px-3\" style=\"width: 50px\"> # </th>
        {# Add extra head column conditionally via Twig block #}
    {% if show_type %}
        <th scope=\"col\" class=\"align-middle px-3\" style=\"width: 50px\"> Tipo </th>
    {% endif %}
    <th scope=\"col\" class=\"align-middle px-2\" style=\"width: 350px\"> Slot ID </th>
    <th scope=\"col\" class=\"align-middle px-3\" style=\"width: 250px\"> Numero CMR </th>
    <th scope=\"col\" class=\"align-middle px-3\" style=\"width: 150px\"> Emittente </th>
    <th scope=\"col\" class=\"align-middle px-3\" style=\"width: 150px\"> Fornitore </th>
    <th scope=\"col\" class=\"align-middle px-3\" style=\"width: 100px\"> Trasporto </th>
    <th scope=\"col\" class=\"align-middle px-3\" style=\"width: 180px\"> Univoco </th>
    <th scope=\"col\" class=\"align-middle px-2\" style=\"width: 120px\"> Data carico </th>
    <th scope=\"col\" class=\"align-middle px-2\" style=\"width: 120px\"> Data scarico </th>
    <th scope=\"col\" class=\"align-middle px-2\" style=\"width: 90px\"> Mese carico </th>
    <th scope=\"col\" class=\"align-middle px-2\" style=\"width: 120px\"> Settimana scarico </th>
    <th scope=\"col\" class=\"align-middle px-2\" style=\"width: 130px\"> Mese scarico </th>
    <th scope=\"col\" class=\"align-middle px-2\" style=\"width: 160px\"> Container<br>ATB </th>
    <th scope=\"col\" class=\"align-middle px-2\" style=\"width: 80px\"> <i class=\"bi bi-gear\"></i> </th>
</tr>", "shared/transports-head.twig", "C:\\wamp64\\www\\liquimet\\templates\\shared\\transports-head.twig");
    }
}
