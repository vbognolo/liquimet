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

/* admin/dashboard.twig */
class __TwigTemplate_84b41dcb5b9290dc3153282ab884ff9f extends Template
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
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("layout.twig", "admin/dashboard.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Liquimet S.r.l. ";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    <section class=\"col-12 section index-header\">
        <div class=\"mx-auto page-title\">
            <h1 class=\"my-1\">
                ";
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "gender", [], "any", false, false, false, 8) == 1)) {
            // line 9
            yield "                    Benvenuto 
                ";
        } else {
            // line 11
            yield "                    Benvenuta 
                ";
        }
        // line 13
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        yield "!
            </h1>

            <h2 class=\"my-2\">
                <i class=\"bi bi-arrow-right-circle\"></i> 
                    Pannello di controllo
                <i class=\"bi bi-arrow-left-circle\"></i>
            </h2>
        </div>
    </section>

    <section class=\"col-12 section dashboard\">
        <div class=\"row my-auto\">
    
            <!-- Left Side Column -->
            <div class=\"col-lg-8 col-md-12\">
                <div class=\"row\">
    
                    <!-- Trasporti Card -->
                    <div class=\"col-lg-4 col-md-6 col-sm-12\">
                        <div class=\"card mb-3\">
                            <div class=\"card-header d-flex align-items-center\">
                                <h5 class=\"card-title text-primary p-1 my-auto\">
                                    TRASPORTI
                                </h5>
                            </div>
                            
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center info-body\">
                                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                        <i class=\"bi bi-truck\"></i>
                                    </div>
    
                                    <div class=\"ps-4\">
                                        <h6> ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["allTransports"] ?? null), "html", null, true);
        yield " </h6>
                                        <div class=\"d-flex align-items-center justify-content-center\">
                                            <span class=\"text-success fw-bold\"> 
                                                ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["unloadedSum"] ?? null), 0, ".", ","), "html", null, true);
        yield " kg
                                            </span>
                                            <span class=\"text-secondary ms-1\"> scaricati in totale. </span> 
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Trasporti Card -->

                    <!-- Full Transports Card -->
                    <div class=\"col-lg-4 col-md-6 col-sm-12\">
                        <div class=\"card mb-3\">
                            <div class=\"card-header d-flex align-items-center\">
                                <h5 class=\"card-title text-secondary p-1 my-auto\"> 
                                    TRASPORTI <span class=\"text-primary\"> &nbsp;&#124; PIENI </span>
                                </h5>
                            </div>

                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center info-body\">
                                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                        <i class=\"bi bi-fuel-pump-fill\"></i>
                                    </div>

                                    <div class=\"ps-4\">
                                        <h6> ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fullTransports"] ?? null), "html", null, true);
        yield " </h6>
                                        <div class=\"d-flex align-items-center justify-content-center\">
                                            ";
        // line 79
        if ((($context["allTransports"] ?? null) > 0)) {
            // line 80
            yield "                                                ";
            $context["percentFull"] = ((($context["fullTransports"] ?? null) / ($context["allTransports"] ?? null)) * 100);
            // line 81
            yield "                                            ";
        } else {
            // line 82
            yield "                                                ";
            $context["percentFull"] = 0;
            // line 83
            yield "                                            ";
        }
        // line 84
        yield "
                                            <span class=\"text-success fw-bold\"> 
                                                ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["percentFull"] ?? null), 2, ".", ","), "html", null, true);
        yield "% 
                                            </span> 
                                            <span class=\"text-secondary ms-1\"> dei trasporti totali. </span>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Full Transports Card -->

                    <!-- Partial Transports Card -->
                    <div class=\"col-lg-4 col-md-6 col-sm-12\">
                        <div class=\"card mb-3\">
                            <div class=\"card-header d-flex align-items-center\">
                                <h5 class=\"card-title text-secondary p-1 my-auto\"> 
                                    TRASPORTI <span class=\"text-primary\"> &nbsp;&#124; PARZIALI </span>
                                </h5>
                            </div>

                            <div class=\"card-body\"> 
                                <div class=\"d-flex align-items-center info-body\">
                                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                        <i class=\"bi bi-fuel-pump\"></i>
                                    </div>

                                    <div class=\"ps-4\">
                                        <h6> ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["partTransports"] ?? null), "html", null, true);
        yield " </h6>
                                        <div class=\"d-flex align-items-center justify-content-center\">
                                            ";
        // line 115
        if ((($context["allTransports"] ?? null) > 0)) {
            // line 116
            yield "                                                ";
            $context["percentPart"] = ((($context["partTransports"] ?? null) / ($context["allTransports"] ?? null)) * 100);
            // line 117
            yield "                                            ";
        } else {
            // line 118
            yield "                                                ";
            $context["percentPart"] = 0;
            // line 119
            yield "                                            ";
        }
        // line 120
        yield "
                                            <span class=\"text-success fw-bold\"> 
                                                ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["percentPart"] ?? null), 2, ".", ","), "html", null, true);
        yield "% 
                                            </span> 
                                            <span class=\"text-secondary ms-1\"> dei trasporti totali. </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Partial Transports Card -->

                    <!-- Recent Transports -->
                    <div class=\"col-12\">
                        <div class=\"card recent-card mt-1 mb-3\">
                            <div class=\"card-header d-flex align-items-center\">
                                <h5 class=\"card-title text-secondary p-1 my-auto\"> 
                                    TRASPORTI <span class=\"text-primary\">&nbsp;&#124; RECENTI (10)</span>
                                </h5>
                            </div>

                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover text-center\">
                                        <thead class=\"border-bottom\">
                                            <tr>
                                                <th scope=\"col\"> # </th>
                                                <th scope=\"col\"> Tipo </th>
                                                <th scope=\"col\"> Slot ID </th>
                                                <th scope=\"col\"> CMR </th>
                                                <th scope=\"col\"> Univoco </th>
                                                <th scope=\"col\"> Data </th>
                                                <th scope=\"col\"> Cont/ATB </th>
                                                <th scope=\"col\"> User </th>
                                            </tr>
                                        </thead>
                                            
                                        <tbody>
                                        ";
        // line 159
        $context["id"] = ($context["allTransports"] ?? null);
        // line 160
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["recent"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            yield " 

                                            <tr class=\"recent-hover\">
                                                <td class=\"text-primary fw-bold p-2\">
                                                    ";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "
                                                    ";
            // line 165
            $context["id"] = (($context["id"] ?? null) - 1);
            // line 166
            yield "                                                </td>
                                                <td class=\"p-2\"> ";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "type", [], "any", false, false, false, 167)), "html", null, true);
            yield " </td>
                                                <td class=\"p-2\"> (...) _";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "seo", [], "any", false, false, false, 168)), "html", null, true);
            yield " </td>
                                                <td class=\"p-2\"> ";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "cmr", [], "any", false, false, false, 169)), "html", null, true);
            yield " </td>
                                                <td class=\"p-2\"> ";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "univoco", [], "any", false, false, false, 170)), "html", null, true);
            yield " </td>
                                                <td class=\"p-2\"> 
                                                    ";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "date_load", [], "any", false, false, false, 172), "d/m/y"), "html", null, true);
            yield "
                                                        &#8594;
                                                    ";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "date_unload", [], "any", false, false, false, 174), "d/m/y"), "html", null, true);
            yield " 
                                                </td>
                                                <td class=\"p-2\"> ";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "container", [], "any", false, false, false, 176)), "html", null, true);
            yield "</td>
                                                <td class=\"p-2\"> ";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "username", [], "any", false, false, false, 177)), "html", null, true);
            yield " </td>
                                            </tr>

                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "                                        </tbody>
                                    </table>
                                </div>     
                            </div>
                        </div>
                    </div>
                    <!-- End Recent Transports -->
                </div>
            </div>
            <!-- End Left Side Columns -->  

            <!-- Right Side Columns -->
            <div class=\"col-4\">

                <!-- Profilo Card -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card profile-card mb-4\">

                            ";
        // line 200
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id_user", [], "any", false, false, false, 200) == CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 200))) {
            // line 201
            yield "                            <div class=\"card-header d-flex align-items-center\">
                                <h5 class=\"card-title text-primary p-1 my-auto\"> 
                                    PROFILO <span class=\"text-success\">&nbsp;&#124; ";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 203)), "html", null, true);
            yield " </span>
                                </h5>
                            </div>
                        
                            <div class=\"card-body m-2\">
                                <div class=\"row mx-auto\">
                                    <div class=\"col-7 m-auto text-center profile-body\">
                                        <div class=\"align-middle mx-auto\">
                                            <span class=\"text-dark profile-fullname\"> 
                                                <i class=\"bi bi-person me-1\"></i> 
                                                    ";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 213), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, false, 213), "html", null, true);
            yield "
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-envelope me-1\"></i> 
                                                    ";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 220), "html", null, true);
            yield "
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-info-square me-1\"></i> 
                                                    ";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 227)), "html", null, true);
            yield "
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-clock-history me-1\"></i> 
                                                    ";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "joined", [], "any", false, false, false, 234), "d/m/Y"), "html", null, true);
            yield "
                                            </span>
                                        </div>
                                    </div>

                                    <div class=\"col-4 m-auto profile-body\">
                                        <img src=\"/img/profile-avatar-light.jpg\" alt=\"Profilo\" class=\"rounded-circle mb-0 mx-auto\">
                                    </div>
                                </div>
                            </div>
                            ";
        }
        // line 245
        yield "
                        </div>
                    </div>
                </div>
                <!-- End Profilo Card -->

                <!-- Utenti Card -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card users-card mb-4\">
                            <div class=\"card-header d-flex align-items-center\">
                                <h5 class=\"card-title text-primary p-1 my-auto\"> 
                                    UTENTI
                                </h5>
                            </div>
                        
                            <div class=\"card-body m-2\">
                                <div class=\"row mx-auto\">
                                    <div class=\"col\">
                                        <div class=\"col-auto card-icon rounded-circle d-flex align-items-center justify-content-center mx-auto my-2 py-1\">
                                            <i class=\"bi bi-people\"></i>
                                        </div>
                                        
                                        <div class=\"col-auto text-center my-1 \">
                                            <h6> ";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeUsers"] ?? null), "html", null, true);
        yield " </h6>
                                        </div>
                                    </div>
                                       
                                    <div class=\"col-auto my-auto users-body\">
                                        <ul class=\"list-group list-group-flush\">
                                            <li class=\"list-group-item m-auto border-end-0\">
                                                <span class=\"col-auto text-dark fw-bold\"> ";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["adminUsers"] ?? null), "html", null, true);
        yield " </span> 
                                                <span class=\"col-auto text-warning fw-bold px-2\"> 
                                                    ADMIN
                                                </span>
                                            </li>
                                            
                                            <li class=\"list-group-item m-auto border-end-0\">
                                                <span class=\"col-auto text-dark fw-bold\"> ";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["memberUsers"] ?? null), "html", null, true);
        yield " </span> 
                                                <span class=\"col-auto text-success fw-bold px-2\"> 
                                                    ";
        // line 285
        if ((($context["memberUsers"] ?? null) == 1)) {
            // line 286
            yield "                                                        MEMBRO 
                                                    ";
        } else {
            // line 288
            yield "                                                        MEMBRI 
                                                    ";
        }
        // line 290
        yield "                                                </span>
                                            </li>
                                        
                                            <li class=\"list-group-item m-auto border-end-0\">
                                                <span class=\"col-auto text-dark fw-bold\"> ";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["suspendedUsers"] ?? null), "html", null, true);
        yield " </span> 
                                                <span class=\"col-auto text-danger fw-bold px-2\"> 
                                                    ";
        // line 296
        if ((($context["suspendedUsers"] ?? null) == 1)) {
            // line 297
            yield "                                                        SOSPESO
                                                    ";
        } else {
            // line 299
            yield "                                                        SOSPESI 
                                                    ";
        }
        // line 301
        yield "                                                </span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class=\"col-auto my-auto users-body\">
                                        <ul class=\"list-group\">
                                            <li class=\"list-group-item m-auto border-0\">
                                                <i class=\"bi bi-arrow-right-short\"></i>
                                            </li>

                                            <li class=\"list-group-item m-auto border-0\">
                                                <i class=\"bi bi-arrow-right-short\"></i>
                                            </li>

                                            <li class=\"list-group-item m-auto border-0\">
                                                <i class=\"bi bi-arrow-right-short\"></i>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class=\"col-auto my-auto users-body\">
                                        <ul class=\"list-group list-group-flush mx-auto\">
                                            ";
        // line 324
        $context["adminPercent"] = ((($context["adminUsers"] ?? null) / ($context["activeUsers"] ?? null)) * 100);
        // line 325
        yield "                                            ";
        $context["memberPercent"] = ((($context["memberUsers"] ?? null) / ($context["activeUsers"] ?? null)) * 100);
        // line 326
        yield "                                            ";
        $context["suspendedPercent"] = ((($context["suspendedUsers"] ?? null) / ($context["activeUsers"] ?? null)) * 100);
        // line 327
        yield "
                                            <li class=\"list-group-item border-start-0\">
                                                <span class=\"text-dark fw-bold\"> 
                                                    ";
        // line 330
        if ((($context["adminPercent"] ?? null) == Twig\Extension\CoreExtension::round(($context["adminPercent"] ?? null), 0, "floor"))) {
            // line 331
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["adminPercent"] ?? null), "html", null, true);
            yield "%
                                                    ";
        } else {
            // line 333
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["adminPercent"] ?? null), 2), "html", null, true);
            yield "%
                                                    ";
        }
        // line 335
        yield "                                                </span> 
                                                <span class=\"text-muted ps-2\"> degli utenti </span>
                                            </li>
                                            
                                            <li class=\"list-group-item border-start-0\">
                                                <span class=\"text-dark fw-bold\"> 
                                                    ";
        // line 341
        if ((($context["memberPercent"] ?? null) == Twig\Extension\CoreExtension::round(($context["memberPercent"] ?? null), 0, "floor"))) {
            // line 342
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["memberPercent"] ?? null), "html", null, true);
            yield "%
                                                    ";
        } else {
            // line 344
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["memberPercent"] ?? null), 2), "html", null, true);
            yield "%
                                                    ";
        }
        // line 346
        yield "                                                </span> 
                                                <span class=\"text-muted ps-2\"> degli utenti </span>
                                            </li>
                                            
                                            <li class=\"list-group-item border-start-0\">
                                                <span class=\"text-dark fw-bold\">
                                                    ";
        // line 352
        if ((($context["suspendedPercent"] ?? null) == Twig\Extension\CoreExtension::round(($context["suspendedPercent"] ?? null), 0, "floor"))) {
            // line 353
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["suspendedPercent"] ?? null), "html", null, true);
            yield "%
                                                    ";
        } else {
            // line 355
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["suspendedPercent"] ?? null), 2), "html", null, true);
            yield "%
                                                    ";
        }
        // line 357
        yield "                                                </span> 
                                                <span class=\"text-muted ps-2\"> degli utenti </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Utenti Card -->

                <!-- Liquimet Data -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card company-card mb-4\">
                            <div class=\"card-header d-flex align-items-center\">
                                <h5 class=\"card-title text-primary p-1 my-auto\"> 
                                    LIQUIMET S.R.L.
                                </h5>
                            </div>
                        
                            <div class=\"card-body\">
                                <div class=\"row mx-auto\">
                                    <div class=\"col-auto m-auto text-center company-body\">
                                        <div class=\"align-middle mx-auto my-1\">
                                            <span class=\"text-primary company-title\"> 
                                                <i class=\"bi bi-arrow-right-short text-primary\"></i> 
                                                    Ufficio Legale
                                                <i class=\"bi bi-arrow-left-short text-primary\"></i>  
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-house\"></i> 
                                                    Corso Spagna 14
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-arrow-return-right\"></i> 
                                                    35127 Padova
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto my-3\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-envelope\"></i> 
                                                    liquimetspa@pec.it
                                            </span>
                                        </div>
                                    </div>

                                    <div class=\"col-auto m-auto text-center company-body\">
                                        <div class=\"align-middle mx-auto my-1\">
                                            <span class=\"text-primary company-title\">
                                                <i class=\"bi bi-arrow-right-short text-primary\"></i> 
                                                    Sede Operativa
                                                <i class=\"bi bi-arrow-left-short text-primary\"></i>  
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-house\"></i> 
                                                    Corso Spagna 12/F
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-arrow-return-right\"></i> 
                                                    35127 Padova
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto my-3\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-telephone\"></i> 
                                                    (+39) 049 7160169
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Liquimet Data -->
            </div>
            <!-- End Right Side Columns -->
        </div>
    </section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/dashboard.twig";
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
        return array (  601 => 357,  595 => 355,  589 => 353,  587 => 352,  579 => 346,  573 => 344,  567 => 342,  565 => 341,  557 => 335,  551 => 333,  545 => 331,  543 => 330,  538 => 327,  535 => 326,  532 => 325,  530 => 324,  505 => 301,  501 => 299,  497 => 297,  495 => 296,  490 => 294,  484 => 290,  480 => 288,  476 => 286,  474 => 285,  469 => 283,  459 => 276,  449 => 269,  423 => 245,  409 => 234,  399 => 227,  389 => 220,  377 => 213,  364 => 203,  360 => 201,  358 => 200,  337 => 181,  327 => 177,  323 => 176,  318 => 174,  313 => 172,  308 => 170,  304 => 169,  300 => 168,  296 => 167,  293 => 166,  291 => 165,  287 => 164,  277 => 160,  275 => 159,  235 => 122,  231 => 120,  228 => 119,  225 => 118,  222 => 117,  219 => 116,  217 => 115,  212 => 113,  182 => 86,  178 => 84,  175 => 83,  172 => 82,  169 => 81,  166 => 80,  164 => 79,  159 => 77,  129 => 50,  123 => 47,  85 => 13,  81 => 11,  77 => 9,  75 => 8,  70 => 5,  63 => 4,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.twig' %}
{% block title %} Liquimet S.r.l. {% endblock %}

{% block content %}
    <section class=\"col-12 section index-header\">
        <div class=\"mx-auto page-title\">
            <h1 class=\"my-1\">
                {% if session.gender == 1 %}
                    Benvenuto 
                {% else %}
                    Benvenuta 
                {% endif %}
                    {{ session.name }}!
            </h1>

            <h2 class=\"my-2\">
                <i class=\"bi bi-arrow-right-circle\"></i> 
                    Pannello di controllo
                <i class=\"bi bi-arrow-left-circle\"></i>
            </h2>
        </div>
    </section>

    <section class=\"col-12 section dashboard\">
        <div class=\"row my-auto\">
    
            <!-- Left Side Column -->
            <div class=\"col-lg-8 col-md-12\">
                <div class=\"row\">
    
                    <!-- Trasporti Card -->
                    <div class=\"col-lg-4 col-md-6 col-sm-12\">
                        <div class=\"card mb-3\">
                            <div class=\"card-header d-flex align-items-center\">
                                <h5 class=\"card-title text-primary p-1 my-auto\">
                                    TRASPORTI
                                </h5>
                            </div>
                            
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center info-body\">
                                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                        <i class=\"bi bi-truck\"></i>
                                    </div>
    
                                    <div class=\"ps-4\">
                                        <h6> {{ allTransports }} </h6>
                                        <div class=\"d-flex align-items-center justify-content-center\">
                                            <span class=\"text-success fw-bold\"> 
                                                {{ unloadedSum|number_format(0,'.',',') }} kg
                                            </span>
                                            <span class=\"text-secondary ms-1\"> scaricati in totale. </span> 
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Trasporti Card -->

                    <!-- Full Transports Card -->
                    <div class=\"col-lg-4 col-md-6 col-sm-12\">
                        <div class=\"card mb-3\">
                            <div class=\"card-header d-flex align-items-center\">
                                <h5 class=\"card-title text-secondary p-1 my-auto\"> 
                                    TRASPORTI <span class=\"text-primary\"> &nbsp;&#124; PIENI </span>
                                </h5>
                            </div>

                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center info-body\">
                                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                        <i class=\"bi bi-fuel-pump-fill\"></i>
                                    </div>

                                    <div class=\"ps-4\">
                                        <h6> {{ fullTransports }} </h6>
                                        <div class=\"d-flex align-items-center justify-content-center\">
                                            {% if allTransports > 0 %}
                                                {% set percentFull = ((fullTransports / allTransports) * 100) %}
                                            {% else %}
                                                {% set percentFull = 0 %}
                                            {% endif %}

                                            <span class=\"text-success fw-bold\"> 
                                                {{ percentFull|number_format(2,'.',',') }}% 
                                            </span> 
                                            <span class=\"text-secondary ms-1\"> dei trasporti totali. </span>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Full Transports Card -->

                    <!-- Partial Transports Card -->
                    <div class=\"col-lg-4 col-md-6 col-sm-12\">
                        <div class=\"card mb-3\">
                            <div class=\"card-header d-flex align-items-center\">
                                <h5 class=\"card-title text-secondary p-1 my-auto\"> 
                                    TRASPORTI <span class=\"text-primary\"> &nbsp;&#124; PARZIALI </span>
                                </h5>
                            </div>

                            <div class=\"card-body\"> 
                                <div class=\"d-flex align-items-center info-body\">
                                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                        <i class=\"bi bi-fuel-pump\"></i>
                                    </div>

                                    <div class=\"ps-4\">
                                        <h6> {{ partTransports }} </h6>
                                        <div class=\"d-flex align-items-center justify-content-center\">
                                            {% if allTransports > 0 %}
                                                {% set percentPart = (( partTransports / allTransports) * 100) %}
                                            {% else %}
                                                {% set percentPart = 0 %}
                                            {% endif %}

                                            <span class=\"text-success fw-bold\"> 
                                                {{ percentPart|number_format(2,'.',',') }}% 
                                            </span> 
                                            <span class=\"text-secondary ms-1\"> dei trasporti totali. </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Partial Transports Card -->

                    <!-- Recent Transports -->
                    <div class=\"col-12\">
                        <div class=\"card recent-card mt-1 mb-3\">
                            <div class=\"card-header d-flex align-items-center\">
                                <h5 class=\"card-title text-secondary p-1 my-auto\"> 
                                    TRASPORTI <span class=\"text-primary\">&nbsp;&#124; RECENTI (10)</span>
                                </h5>
                            </div>

                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover text-center\">
                                        <thead class=\"border-bottom\">
                                            <tr>
                                                <th scope=\"col\"> # </th>
                                                <th scope=\"col\"> Tipo </th>
                                                <th scope=\"col\"> Slot ID </th>
                                                <th scope=\"col\"> CMR </th>
                                                <th scope=\"col\"> Univoco </th>
                                                <th scope=\"col\"> Data </th>
                                                <th scope=\"col\"> Cont/ATB </th>
                                                <th scope=\"col\"> User </th>
                                            </tr>
                                        </thead>
                                            
                                        <tbody>
                                        {% set id = allTransports %}
                                        {% for r in recent %} 

                                            <tr class=\"recent-hover\">
                                                <td class=\"text-primary fw-bold p-2\">
                                                    {{ id }}
                                                    {% set id = id - 1 %}
                                                </td>
                                                <td class=\"p-2\"> {{ r.type|upper }} </td>
                                                <td class=\"p-2\"> (...) _{{ r.seo|upper }} </td>
                                                <td class=\"p-2\"> {{ r.cmr|upper }} </td>
                                                <td class=\"p-2\"> {{ r.univoco|upper }} </td>
                                                <td class=\"p-2\"> 
                                                    {{ r.date_load|date(\"d/m/y\") }}
                                                        &#8594;
                                                    {{ r.date_unload|date(\"d/m/y\") }} 
                                                </td>
                                                <td class=\"p-2\"> {{ r.container|upper }}</td>
                                                <td class=\"p-2\"> {{ r.username|lower }} </td>
                                            </tr>

                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>     
                            </div>
                        </div>
                    </div>
                    <!-- End Recent Transports -->
                </div>
            </div>
            <!-- End Left Side Columns -->  

            <!-- Right Side Columns -->
            <div class=\"col-4\">

                <!-- Profilo Card -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card profile-card mb-4\">

                            {% if session.id_user == user.id_user %}
                            <div class=\"card-header d-flex align-items-center\">
                                <h5 class=\"card-title text-primary p-1 my-auto\"> 
                                    PROFILO <span class=\"text-success\">&nbsp;&#124; {{ user.username|lower }} </span>
                                </h5>
                            </div>
                        
                            <div class=\"card-body m-2\">
                                <div class=\"row mx-auto\">
                                    <div class=\"col-7 m-auto text-center profile-body\">
                                        <div class=\"align-middle mx-auto\">
                                            <span class=\"text-dark profile-fullname\"> 
                                                <i class=\"bi bi-person me-1\"></i> 
                                                    {{ user.name }} {{ user.surname }}
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-envelope me-1\"></i> 
                                                    {{ user.email }}
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-info-square me-1\"></i> 
                                                    {{ user.role|capitalize }}
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-clock-history me-1\"></i> 
                                                    {{ user.joined|date('d/m/Y') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class=\"col-4 m-auto profile-body\">
                                        <img src=\"/img/profile-avatar-light.jpg\" alt=\"Profilo\" class=\"rounded-circle mb-0 mx-auto\">
                                    </div>
                                </div>
                            </div>
                            {% endif %}

                        </div>
                    </div>
                </div>
                <!-- End Profilo Card -->

                <!-- Utenti Card -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card users-card mb-4\">
                            <div class=\"card-header d-flex align-items-center\">
                                <h5 class=\"card-title text-primary p-1 my-auto\"> 
                                    UTENTI
                                </h5>
                            </div>
                        
                            <div class=\"card-body m-2\">
                                <div class=\"row mx-auto\">
                                    <div class=\"col\">
                                        <div class=\"col-auto card-icon rounded-circle d-flex align-items-center justify-content-center mx-auto my-2 py-1\">
                                            <i class=\"bi bi-people\"></i>
                                        </div>
                                        
                                        <div class=\"col-auto text-center my-1 \">
                                            <h6> {{ activeUsers }} </h6>
                                        </div>
                                    </div>
                                       
                                    <div class=\"col-auto my-auto users-body\">
                                        <ul class=\"list-group list-group-flush\">
                                            <li class=\"list-group-item m-auto border-end-0\">
                                                <span class=\"col-auto text-dark fw-bold\"> {{ adminUsers }} </span> 
                                                <span class=\"col-auto text-warning fw-bold px-2\"> 
                                                    ADMIN
                                                </span>
                                            </li>
                                            
                                            <li class=\"list-group-item m-auto border-end-0\">
                                                <span class=\"col-auto text-dark fw-bold\"> {{ memberUsers }} </span> 
                                                <span class=\"col-auto text-success fw-bold px-2\"> 
                                                    {% if memberUsers == 1 %}
                                                        MEMBRO 
                                                    {% else %}
                                                        MEMBRI 
                                                    {% endif %}
                                                </span>
                                            </li>
                                        
                                            <li class=\"list-group-item m-auto border-end-0\">
                                                <span class=\"col-auto text-dark fw-bold\"> {{ suspendedUsers }} </span> 
                                                <span class=\"col-auto text-danger fw-bold px-2\"> 
                                                    {% if suspendedUsers == 1 %}
                                                        SOSPESO
                                                    {% else %}
                                                        SOSPESI 
                                                    {% endif %}
                                                </span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class=\"col-auto my-auto users-body\">
                                        <ul class=\"list-group\">
                                            <li class=\"list-group-item m-auto border-0\">
                                                <i class=\"bi bi-arrow-right-short\"></i>
                                            </li>

                                            <li class=\"list-group-item m-auto border-0\">
                                                <i class=\"bi bi-arrow-right-short\"></i>
                                            </li>

                                            <li class=\"list-group-item m-auto border-0\">
                                                <i class=\"bi bi-arrow-right-short\"></i>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class=\"col-auto my-auto users-body\">
                                        <ul class=\"list-group list-group-flush mx-auto\">
                                            {% set adminPercent = ((adminUsers / activeUsers) * 100) %}
                                            {% set memberPercent = ((memberUsers / activeUsers) * 100) %}
                                            {% set suspendedPercent = ((suspendedUsers / activeUsers) * 100) %}

                                            <li class=\"list-group-item border-start-0\">
                                                <span class=\"text-dark fw-bold\"> 
                                                    {% if adminPercent == adminPercent|round(0, 'floor') %}
                                                        {{ adminPercent }}%
                                                    {% else %}
                                                        {{ adminPercent|number_format(2) }}%
                                                    {% endif %}
                                                </span> 
                                                <span class=\"text-muted ps-2\"> degli utenti </span>
                                            </li>
                                            
                                            <li class=\"list-group-item border-start-0\">
                                                <span class=\"text-dark fw-bold\"> 
                                                    {% if memberPercent == memberPercent|round(0, 'floor') %}
                                                        {{ memberPercent }}%
                                                    {% else %}
                                                        {{ memberPercent|number_format(2) }}%
                                                    {% endif %}
                                                </span> 
                                                <span class=\"text-muted ps-2\"> degli utenti </span>
                                            </li>
                                            
                                            <li class=\"list-group-item border-start-0\">
                                                <span class=\"text-dark fw-bold\">
                                                    {% if suspendedPercent == suspendedPercent|round(0, 'floor') %}
                                                        {{ suspendedPercent }}%
                                                    {% else %}
                                                        {{ suspendedPercent|number_format(2) }}%
                                                    {% endif %}
                                                </span> 
                                                <span class=\"text-muted ps-2\"> degli utenti </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Utenti Card -->

                <!-- Liquimet Data -->
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card company-card mb-4\">
                            <div class=\"card-header d-flex align-items-center\">
                                <h5 class=\"card-title text-primary p-1 my-auto\"> 
                                    LIQUIMET S.R.L.
                                </h5>
                            </div>
                        
                            <div class=\"card-body\">
                                <div class=\"row mx-auto\">
                                    <div class=\"col-auto m-auto text-center company-body\">
                                        <div class=\"align-middle mx-auto my-1\">
                                            <span class=\"text-primary company-title\"> 
                                                <i class=\"bi bi-arrow-right-short text-primary\"></i> 
                                                    Ufficio Legale
                                                <i class=\"bi bi-arrow-left-short text-primary\"></i>  
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-house\"></i> 
                                                    Corso Spagna 14
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-arrow-return-right\"></i> 
                                                    35127 Padova
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto my-3\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-envelope\"></i> 
                                                    liquimetspa@pec.it
                                            </span>
                                        </div>
                                    </div>

                                    <div class=\"col-auto m-auto text-center company-body\">
                                        <div class=\"align-middle mx-auto my-1\">
                                            <span class=\"text-primary company-title\">
                                                <i class=\"bi bi-arrow-right-short text-primary\"></i> 
                                                    Sede Operativa
                                                <i class=\"bi bi-arrow-left-short text-primary\"></i>  
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-house\"></i> 
                                                    Corso Spagna 12/F
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-arrow-return-right\"></i> 
                                                    35127 Padova
                                            </span>
                                        </div>

                                        <div class=\"align-middle mx-auto my-3\">
                                            <span class=\"text-dark\"> 
                                                <i class=\"bi bi-telephone\"></i> 
                                                    (+39) 049 7160169
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Liquimet Data -->
            </div>
            <!-- End Right Side Columns -->
        </div>
    </section>
{% endblock %}", "admin/dashboard.twig", "C:\\wamp64\\www\\liquimet\\templates\\admin\\dashboard.twig");
    }
}
