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
        yield "<thead>
    <tr class=\"border-top border-light bg-primary bg-gradient table-title\">
        <th scope=\"col\" style=\"width: 50px\" class=\"align-middle px-3\"> # </th>
        <th scope=\"col\" style=\"width: 300px\" class=\"align-middle px-2\"> Slot ID </th>
        <th scope=\"col\" style=\"width: 250px\" class=\"align-middle px-2\"> Numero CMR </th>
        <th scope=\"col\" style=\"width: 150px\" class=\"align-middle px-3\"> Emittente </th>
        <th scope=\"col\" style=\"width: 150px\" class=\"align-middle px-3\"> Fornitore </th>
        <th scope=\"col\" style=\"width: 100px\" class=\"align-middle px-3\"> Trasporto </th>
        <th scope=\"col\" style=\"width: 180px\" class=\"align-middle px-3\"> Univoco </th>
        <th scope=\"col\" style=\"width: 120px\" class=\"align-middle px-2\"> Data carico </th>
        <th scope=\"col\" style=\"width: 120px\" class=\"align-middle px-2\"> Data scarico </th>
        <th scope=\"col\" style=\"width: 90px\" class=\"align-middle\"> Mese carico </th>
        <th scope=\"col\" style=\"width: 120px\" class=\"align-middle\"> Settimana scarico </th>
        <th scope=\"col\" style=\"width: 130px\" class=\"align-middle\"> Mese scarico </th>
        <th scope=\"col\" style=\"width: 160px\" class=\"align-middle px-2\"> Container<br>ATB </th>
        <th scope=\"col\" style=\"width: 80px\" class=\"align-middle px-2\"> <i class=\"bi bi-gear\"></i> </th>
    </tr>
</thead>";
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
    public function getDebugInfo(): array
    {
        return array (  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Transports table head #}
<thead>
    <tr class=\"border-top border-light bg-primary bg-gradient table-title\">
        <th scope=\"col\" style=\"width: 50px\" class=\"align-middle px-3\"> # </th>
        <th scope=\"col\" style=\"width: 300px\" class=\"align-middle px-2\"> Slot ID </th>
        <th scope=\"col\" style=\"width: 250px\" class=\"align-middle px-2\"> Numero CMR </th>
        <th scope=\"col\" style=\"width: 150px\" class=\"align-middle px-3\"> Emittente </th>
        <th scope=\"col\" style=\"width: 150px\" class=\"align-middle px-3\"> Fornitore </th>
        <th scope=\"col\" style=\"width: 100px\" class=\"align-middle px-3\"> Trasporto </th>
        <th scope=\"col\" style=\"width: 180px\" class=\"align-middle px-3\"> Univoco </th>
        <th scope=\"col\" style=\"width: 120px\" class=\"align-middle px-2\"> Data carico </th>
        <th scope=\"col\" style=\"width: 120px\" class=\"align-middle px-2\"> Data scarico </th>
        <th scope=\"col\" style=\"width: 90px\" class=\"align-middle\"> Mese carico </th>
        <th scope=\"col\" style=\"width: 120px\" class=\"align-middle\"> Settimana scarico </th>
        <th scope=\"col\" style=\"width: 130px\" class=\"align-middle\"> Mese scarico </th>
        <th scope=\"col\" style=\"width: 160px\" class=\"align-middle px-2\"> Container<br>ATB </th>
        <th scope=\"col\" style=\"width: 80px\" class=\"align-middle px-2\"> <i class=\"bi bi-gear\"></i> </th>
    </tr>
</thead>", "shared/transports-head.twig", "C:\\wamp64\\www\\liquimet\\templates\\shared\\transports-head.twig");
    }
}
