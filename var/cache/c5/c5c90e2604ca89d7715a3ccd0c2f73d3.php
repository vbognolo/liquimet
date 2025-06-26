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

/* profile.twig */
class __TwigTemplate_99bb9cdec3119ed2d401ee7f181f6a93 extends Template
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
            'scripts' => [$this, 'block_scripts'],
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
        $this->parent = $this->loadTemplate("layout.twig", "profile.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Profilo - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "username", [], "any", false, false, false, 2), "html", null, true);
        yield " ";
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
        yield "    ";
        // line 6
        yield "    <section class=\"col-12 mt-3 mb-2\">
        <div class=\"d-flex flex-column align-items-center submenu\">

            <div class=\"text-center mx-auto\">
                <a class=\"mx-1\" href=\"/profile\">
                    <h1 class=\"p-5 submenu-title\"> 
                        PROFILO UTENTE
                    </h1>
                </a>
            </div>

            ";
        // line 18
        yield "            <div class=\"d-flex justify-content-center mx-1 submenu-navigation\" id=\"profile-nav\">
                ";
        // line 20
        yield "                <ul class=\"nav nav-pills d-flex flex-column flex-md-row align-items-center text-center w-100\" role=\"tablist\">
                    <li class=\"nav-item px-1\" role=\"presentation\">
                        <button class=\"nav-link align-middle active\" id=\"p-overview\" data-bs-toggle=\"pill\" data-bs-target=\"#profile-overview\" type=\"button\" role=\"tab\"
                                aria-controls=\"profile-overview\" aria-selected=\"true\" aria-current=\"page\">
                                    DATI PERSONALI
                        </button>
                    </li>

                    <li class=\"breadcrumb-item d-none d-md-block px-1\">  
                        <i class=\"bi bi-circle-fill\"></i>
                    </li>

                    <li class=\"nav-item px-1\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"p-edit\" data-bs-toggle=\"pill\" data-bs-target=\"#edit-profile\" type=\"button\" role=\"tab\"
                                aria-controls=\"profile-edit\" aria-selected=\"false\">
                                    MODIFICA PROFILO
                        </button>
                    </li>

                    <li class=\"breadcrumb-item d-none d-md-block px-1\"> 
                        <i class=\"bi bi-circle-fill\"></i>
                    </li>

                    <li class=\"nav-item px-1\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"p-password\" data-bs-toggle=\"pill\" data-bs-target=\"#change-password\" type=\"button\" role=\"tab\"
                                aria-controls=\"change-password\" aria-selected=\"false\">
                                    CAMBIA PASSWORD
                        </button>
                    </li>
                </ul>
                ";
        // line 51
        yield "            </div>
        </div>
    </section>
    ";
        // line 55
        yield "    
    ";
        // line 57
        yield "    <section class=\"col-6 mx-auto my-2 profile-body\">
        <div class=\"card shadow-sm border-0\">
            <div class=\"tab-content\">

                ";
        // line 61
        yield "             
                <div class=\"tab-pane fade in show active profile-overview\" id=\"profile-overview\" role=\"tabpanel\" aria-labelledby=\"p-overview\" tabindex=\"0\">
                    <div class=\"container profile\">
                        <div class=\"row align-items-center\">
                            <div class=\"card-header m-auto\">
                                <h2 class=\"form-title text-center mx-auto my-3\"> 
                                    <i class=\"bi bi-person-vcard-fill me-2 d-none d-md-inline\"></i>
                                        <span class=\"d-inline profile-title-text\">DATI PERSONALI</span>
                                    <i class=\"bi bi-person-vcard-fill ms-2 d-none d-md-inline\"></i>
                                </h2>
                            </div>

                            ";
        // line 74
        yield "                            <div class=\"col-12 col-lg-4\">
                                <div class=\"card shadow-sm border-1 text-center p-4 mx-4 my-5 h-100 profile-avatar\">
                                
                                    ";
        // line 77
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id_user", [], "any", false, false, false, 77) == CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id_user", [], "any", false, false, false, 77))) {
            // line 78
            yield "                                        <img src=\"/img/fotka.jpg\" 
                                            alt=\"Profilo\" 
                                            class=\"rounded-circle shadow mb-3 mx-auto\"
                                            style=\"width: 120px; height: 120px; object-fit: cover; border: 3px solid #0b325a;\">

                                        <div class=\"mb-1\">
                                            <i class=\"bi bi-clock-history me-2\"></i>
                                                <span class=\"avatar-label\">Iscritto il:</span>
                                                <span class=\"avatar-data\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "joined", [], "any", false, false, false, 86), "html", null, true);
            yield "</span>
                                        </div>

                                        <div class=\"\">
                                            <i class=\"bi bi-pencil-square me-2\"></i>
                                                <span class=\"avatar-label\">Ultima modifica:</span>
                                                <span class=\"avatar-data\">";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "modified_display", [], "any", false, false, false, 92), "html", null, true);
            yield "</span>
                                        </div>
                                    ";
        }
        // line 95
        yield "                                </div>
                            </div>

                            ";
        // line 99
        yield "                            <div class=\"col-12 col-lg-8\">
                                <div class=\"card\">
                                    <div class=\"card-body p-3 user-edit text-center profile-info\">
                                        <div class=\"row gy-3\">
                                            <div class=\"col-12 col-md-6\">
                                                <label class=\"form-label small mb-1 profile-label\"> Nome </label>
                                                <div class=\"fw-semibold profile-data\" id=\"profile-name\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 105)), "html", null, true);
        yield "</div>
                                            </div>

                                            <div class=\"col-12 col-md-6\">
                                                <label class=\"form-label small mb-1 profile-label\"> Cognome </label>
                                                <div class=\"fw-semibold profile-data\" id=\"profile-surname\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, false, 110)), "html", null, true);
        yield "</div>
                                            </div>

                                            <div class=\"col-12 col-md-6\">
                                                <label class=\"form-label small mb-1 profile-label\"> Data di nascita </label>
                                                <div class=\"fw-semibold profile-data\" id=\"profile-bday\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "bday_display", [], "any", false, false, false, 115), "html", null, true);
        yield "</div>
                                            </div>

                                            <div class=\"col-12 col-md-6\">
                                                <label class=\"form-label small mb-1 profile-label\"> Luogo di nascita </label>
                                                <div class=\"fw-semibold profile-data\" id=\"profile-city\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "city", [], "any", false, false, false, 120)), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "country", [], "any", false, false, false, 120)), "html", null, true);
        yield "</div>
                                            </div>

                                            <div class=\"col-12 col-md-6\">
                                                <label class=\"form-label small mb-1 profile-label\"> Username </label>
                                                <div class=\"fw-semibold profile-data\" id=\"profile-username\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 125)), "html", null, true);
        yield "</div>
                                            </div>

                                            <div class=\"col-12 col-md-6\">
                                                <label class=\"form-label small mb-1 profile-label\"> E-mail </label>
                                                <div class=\"fw-semibold profile-data\" id=\"profile-email\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 130), "html", null, true);
        yield "</div>
                                            </div>

                                            <div class=\"col-12 col-md-6\">
                                                <label class=\"form-label small mb-1 profile-label\"> Titolo aziendale </label>
                                                <div class=\"fw-semibold profile-data\">";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "title", [], "any", false, false, false, 135), "html", null, true);
        yield "</div>
                                            </div>

                                            <div class=\"col-12 col-md-6\">
                                                <label class=\"form-label small mb-1 profile-label\"> Ruolo </label>
                                                <div class=\"fw-semibold profile-data\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 140)), "html", null, true);
        yield "</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                ";
        // line 150
        yield "  

                ";
        // line 152
        yield "  
                <div class=\"tab-pane fade in\" id=\"edit-profile\" role=\"tabpanel\" aria-labelledby=\"p-edit\" tabindex=\"0\">
                    ";
        // line 154
        yield from $this->loadTemplate("profile-edit.twig", "profile.twig", 154)->unwrap()->yield($context);
        // line 155
        yield "                </div>
                ";
        // line 156
        yield "  

                ";
        // line 158
        yield "  
                <div class=\"tab-pane fade in\" id=\"change-password\" role=\"tabpanel\" aria-labelledby=\"p-password\" tabindex=\"0\">
                    ";
        // line 160
        yield from $this->loadTemplate("profile-password.twig", "profile.twig", 160)->unwrap()->yield($context);
        // line 161
        yield "                </div>
                ";
        // line 162
        yield "  
            </div>
        </div>
    </section>
";
        yield from [];
    }

    // line 168
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 169
        yield "    ";
        // line 170
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 175
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
    ";
        // line 181
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
    ";
        // line 187
        yield "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" 
        integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 192
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha384-duAtk5RV7s42V6Zuw+tRBFcqD8RjRKw6RFnxmxIj1lUGAQJyum/vtcUQX8lqKQjp\" 
        crossorigin=\"anonymous\"
        referrerpolicy=\"no-referrer\">
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile.twig";
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
        return array (  337 => 192,  331 => 187,  324 => 181,  317 => 175,  311 => 170,  309 => 169,  302 => 168,  293 => 162,  290 => 161,  288 => 160,  284 => 158,  280 => 156,  277 => 155,  275 => 154,  271 => 152,  267 => 150,  254 => 140,  246 => 135,  238 => 130,  230 => 125,  220 => 120,  212 => 115,  204 => 110,  196 => 105,  188 => 99,  183 => 95,  177 => 92,  168 => 86,  158 => 78,  156 => 77,  151 => 74,  137 => 61,  131 => 57,  128 => 55,  123 => 51,  91 => 20,  88 => 18,  75 => 6,  73 => 5,  66 => 4,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.twig' %}
{% block title %} Profilo - {{ session.username }} {% endblock %}

{% block content %}
    {# Profile Header with Profile Navigation #}
    <section class=\"col-12 mt-3 mb-2\">
        <div class=\"d-flex flex-column align-items-center submenu\">

            <div class=\"text-center mx-auto\">
                <a class=\"mx-1\" href=\"/profile\">
                    <h1 class=\"p-5 submenu-title\"> 
                        PROFILO UTENTE
                    </h1>
                </a>
            </div>

            {# Profile Tab Navigation #}
            <div class=\"d-flex justify-content-center mx-1 submenu-navigation\" id=\"profile-nav\">
                {#<ul class=\"nav nav-pills d-flex align-items-center\" role=\"tablist\">#}
                <ul class=\"nav nav-pills d-flex flex-column flex-md-row align-items-center text-center w-100\" role=\"tablist\">
                    <li class=\"nav-item px-1\" role=\"presentation\">
                        <button class=\"nav-link align-middle active\" id=\"p-overview\" data-bs-toggle=\"pill\" data-bs-target=\"#profile-overview\" type=\"button\" role=\"tab\"
                                aria-controls=\"profile-overview\" aria-selected=\"true\" aria-current=\"page\">
                                    DATI PERSONALI
                        </button>
                    </li>

                    <li class=\"breadcrumb-item d-none d-md-block px-1\">  
                        <i class=\"bi bi-circle-fill\"></i>
                    </li>

                    <li class=\"nav-item px-1\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"p-edit\" data-bs-toggle=\"pill\" data-bs-target=\"#edit-profile\" type=\"button\" role=\"tab\"
                                aria-controls=\"profile-edit\" aria-selected=\"false\">
                                    MODIFICA PROFILO
                        </button>
                    </li>

                    <li class=\"breadcrumb-item d-none d-md-block px-1\"> 
                        <i class=\"bi bi-circle-fill\"></i>
                    </li>

                    <li class=\"nav-item px-1\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"p-password\" data-bs-toggle=\"pill\" data-bs-target=\"#change-password\" type=\"button\" role=\"tab\"
                                aria-controls=\"change-password\" aria-selected=\"false\">
                                    CAMBIA PASSWORD
                        </button>
                    </li>
                </ul>
                {# End Profile Tab Navigation #}
            </div>
        </div>
    </section>
    {# End Profile Header with Profile Navigation #}
    
    {# Profile User Info #}
    <section class=\"col-6 mx-auto my-2 profile-body\">
        <div class=\"card shadow-sm border-0\">
            <div class=\"tab-content\">

                {# Profile Overview Tab #}             
                <div class=\"tab-pane fade in show active profile-overview\" id=\"profile-overview\" role=\"tabpanel\" aria-labelledby=\"p-overview\" tabindex=\"0\">
                    <div class=\"container profile\">
                        <div class=\"row align-items-center\">
                            <div class=\"card-header m-auto\">
                                <h2 class=\"form-title text-center mx-auto my-3\"> 
                                    <i class=\"bi bi-person-vcard-fill me-2 d-none d-md-inline\"></i>
                                        <span class=\"d-inline profile-title-text\">DATI PERSONALI</span>
                                    <i class=\"bi bi-person-vcard-fill ms-2 d-none d-md-inline\"></i>
                                </h2>
                            </div>

                            {# Profile Left Column #}
                            <div class=\"col-12 col-lg-4\">
                                <div class=\"card shadow-sm border-1 text-center p-4 mx-4 my-5 h-100 profile-avatar\">
                                
                                    {% if session.id_user == user.id_user %}
                                        <img src=\"/img/fotka.jpg\" 
                                            alt=\"Profilo\" 
                                            class=\"rounded-circle shadow mb-3 mx-auto\"
                                            style=\"width: 120px; height: 120px; object-fit: cover; border: 3px solid #0b325a;\">

                                        <div class=\"mb-1\">
                                            <i class=\"bi bi-clock-history me-2\"></i>
                                                <span class=\"avatar-label\">Iscritto il:</span>
                                                <span class=\"avatar-data\">{{ user.joined }}</span>
                                        </div>

                                        <div class=\"\">
                                            <i class=\"bi bi-pencil-square me-2\"></i>
                                                <span class=\"avatar-label\">Ultima modifica:</span>
                                                <span class=\"avatar-data\">{{ user.modified_display }}</span>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>

                            {# Profile Right Column #}
                            <div class=\"col-12 col-lg-8\">
                                <div class=\"card\">
                                    <div class=\"card-body p-3 user-edit text-center profile-info\">
                                        <div class=\"row gy-3\">
                                            <div class=\"col-12 col-md-6\">
                                                <label class=\"form-label small mb-1 profile-label\"> Nome </label>
                                                <div class=\"fw-semibold profile-data\" id=\"profile-name\">{{ user.name|upper }}</div>
                                            </div>

                                            <div class=\"col-12 col-md-6\">
                                                <label class=\"form-label small mb-1 profile-label\"> Cognome </label>
                                                <div class=\"fw-semibold profile-data\" id=\"profile-surname\">{{ user.surname|upper }}</div>
                                            </div>

                                            <div class=\"col-12 col-md-6\">
                                                <label class=\"form-label small mb-1 profile-label\"> Data di nascita </label>
                                                <div class=\"fw-semibold profile-data\" id=\"profile-bday\">{{ user.bday_display }}</div>
                                            </div>

                                            <div class=\"col-12 col-md-6\">
                                                <label class=\"form-label small mb-1 profile-label\"> Luogo di nascita </label>
                                                <div class=\"fw-semibold profile-data\" id=\"profile-city\">{{ user.city|capitalize }}, {{ user.country|capitalize }}</div>
                                            </div>

                                            <div class=\"col-12 col-md-6\">
                                                <label class=\"form-label small mb-1 profile-label\"> Username </label>
                                                <div class=\"fw-semibold profile-data\" id=\"profile-username\">{{ user.username|lower }}</div>
                                            </div>

                                            <div class=\"col-12 col-md-6\">
                                                <label class=\"form-label small mb-1 profile-label\"> E-mail </label>
                                                <div class=\"fw-semibold profile-data\" id=\"profile-email\">{{ user.email }}</div>
                                            </div>

                                            <div class=\"col-12 col-md-6\">
                                                <label class=\"form-label small mb-1 profile-label\"> Titolo aziendale </label>
                                                <div class=\"fw-semibold profile-data\">{{ user.title }}</div>
                                            </div>

                                            <div class=\"col-12 col-md-6\">
                                                <label class=\"form-label small mb-1 profile-label\"> Ruolo </label>
                                                <div class=\"fw-semibold profile-data\">{{ user.role|capitalize }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {# End Profile Overview Tab #}  

                {# Profile Edit Tab #}  
                <div class=\"tab-pane fade in\" id=\"edit-profile\" role=\"tabpanel\" aria-labelledby=\"p-edit\" tabindex=\"0\">
                    {% include 'profile-edit.twig' %}
                </div>
                {# End Profile Edit Tab #}  

                {# Change Password Tab #}  
                <div class=\"tab-pane fade in\" id=\"change-password\" role=\"tabpanel\" aria-labelledby=\"p-password\" tabindex=\"0\">
                    {% include 'profile-password.twig' %}
                </div>
                {# End Change Password Tab #}  
            </div>
        </div>
    </section>
{% endblock %}

{% block scripts %}
    {# jQuery (must be first) #}
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    {# jQuery Validation (depends on jQuery) #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
    {# jQuery Additional Methods (depends on jQuery) #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==\" 
        crossorigin=\"anonymous\" 
        referrerpolicy=\"no-referrer\">
</script>
    {# Bootstrap JS bundle (includes modal) #}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" 
        integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" 
        crossorigin=\"anonymous\">
</script>
    {# Bootstrap Datepicker (depends on jQuery) #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha384-duAtk5RV7s42V6Zuw+tRBFcqD8RjRKw6RFnxmxIj1lUGAQJyum/vtcUQX8lqKQjp\" 
        crossorigin=\"anonymous\"
        referrerpolicy=\"no-referrer\">
</script>
{% endblock %}", "profile.twig", "C:\\wamp64\\www\\liquimet\\templates\\profile.twig");
    }
}
