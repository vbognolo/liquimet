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

/* admin/users.twig */
class __TwigTemplate_0bcca0f214bda2f0530021fa4a6d11b2 extends Template
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
            'head' => [$this, 'block_head'],
            'search' => [$this, 'block_search'],
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
        $this->parent = $this->loadTemplate("layout.twig", "admin/users.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Utenti ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        // line 5
        yield "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" 
        integrity=\"sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=\" crossorigin=\"anonymous\">
";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    <!--    ===>    SEARCH BAR    <===    -->
    <section class=\"row my-auto mx-auto px-3 search-header\">
        <div class=\"my-auto m-0 search-bar\">
            <form id=\"search-form\">
                <button type=\"button\" class=\"my-1 search-btn\">
                    <i class=\"bi bi-search\"></i>
                </button>
                <input type=\"text\" class=\"my-1 search-input\" id=\"search\" placeholder=\"      Cerca..\" />  
            </form>
        </div>
    </section>
    <!--    ===>    END SEARCH BAR    <===    -->
";
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " 
    ";
        // line 25
        yield from $this->loadTemplate("admin/users-navigation.twig", "admin/users.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "
    <!--    =====>    USERS TABLE    <=====    -->
    <section class=\"col-12 mx-auto my-1\">
        <div class=\"panel panel-body\">          
            <div class=\"d-flex justify-content-center\">
                <table class=\"col-12 table table-hover text-center platform\"> 
                    <thead>
                        <tr class=\"border-bottom border-top border-light table-title\">
                            <th class=\"align-middle p-3\"> # </th>
                            <th class=\"align-middle p-2\"> Nome e cognome </th>
                            <th class=\"align-middle p-2\"> Username </th>
                            <th class=\"align-middle p-2\"> Indirizzo e-mail </th>
                            <th class=\"align-middle p-2\" colspan=\"2\"> Data e luogo di nascita </th>
                            <th class=\"align-middle p-2\"> Ruolo aziendale </th>
                            <th class=\"align-middle p-2\"> Accesso </th>
                            <th class=\"align-middle p-2\"> Account creato </th>
                            <th class=\"align-middle p-2\"> <i class=\"bi bi-gear\"></i> </th>
                        </tr>
                    </thead>

                    <tbody class=\"table-body\">  
                        ";
        // line 47
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["users"] ?? null))) {
            // line 48
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 49
                yield "
                            ";
                // line 51
                yield "                            ";
                $context["highlight"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id_user", [], "any", false, false, false, 51) == ($context["added"] ?? null)) || (CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id_user", [], "any", false, false, false, 51) == ($context["edited"] ?? null)));
                // line 52
                yield "                            
                                <tr id=\"id-";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id_user", [], "any", false, false, false, 53), "html", null, true);
                yield "\" class=\"users ";
                if (($context["highlight"] ?? null)) {
                    yield "highlight";
                }
                yield "\">
                                    <td scope=\"row\" class=\"align-middle text-dark p-2 table-border-light\">
                                        ";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 55), "html", null, true);
                yield "
                                    </td>
                                    <td class=\"align-middle p-2 col-name\"> ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["u"], "surname", [], "any", false, false, false, 57)), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["u"], "name", [], "any", false, false, false, 57)), "html", null, true);
                yield " </td>
                                    <td class=\"align-middle p-2 col-username\"> ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 58)), "html", null, true);
                yield " </td>
                                    <td class=\"align-middle p-2 col-email\"> ";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 59), "html", null, true);
                yield " </td>
                                    <td class=\"align-middle p-2 col-bday\"> ";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "birthday", [], "any", false, false, false, 60), "d/m/Y"), "html", null, true);
                yield " &nbsp; </td>
                                    <td class=\"align-middle p-2 col-place\"> ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["u"], "city", [], "any", false, false, false, 61)), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["u"], "country", [], "any", false, false, false, 61)), "html", null, true);
                yield " </td>
                                    <td class=\"align-middle p-2 col-title\"> 
                                        <abbr title=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "title", [], "any", false, false, false, 63), "html", null, true);
                yield "\" class=\"col-acronym\" style=\"text-decoration: none\">
                                            ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["u"], "acronym", [], "any", false, false, false, 64)), "html", null, true);
                yield "
                                        </abbr> 
                                    </td>
                                    <td class=\"align-middle p-2 col-role\"> ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["u"], "role", [], "any", false, false, false, 67)), "html", null, true);
                yield " </td>
                                    <td class=\"align-middle p-2 col-joined\"> ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "joined", [], "any", false, false, false, 68), "d/m/Y"), "html", null, true);
                yield " </td>
        
                                    <td class=\"align-middle p-2 btns\"> 
                                        <button type=\"button\" class=\"edit-data editBtn\" data-bs-toggle=\"modal\" data-bs-target=\"#editUserModel\" 
                                            data-id=\"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id_user", [], "any", false, false, false, 72), "html", null, true);
                yield "\">
                                                <i class=\"bi bi-pencil-square\"></i>
                                        </button> 
        
                                        <button type=\"button\" class=\"edit-data deleteBtn\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteUserModal\" 
                                            data-id=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id_user", [], "any", false, false, false, 77), "html", null, true);
                yield "\">
                                                <i class=\"bi bi-trash\"></i>
                                        </button> 
                                    </td>
                                </tr> 
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "                        ";
        } else {
            // line 84
            yield "                            <tr>
                                <td colspan=\"10\" class=\"text-center text-light p-3\">
                                    <strong> Nessun utente trovato. </strong>
                                </td>
                            </tr>
                        ";
        }
        // line 90
        yield "                    </tbody>
                    
                    <tfoot>
                        <tr>
                            <td colspan=\"10\" class=\"text-light align-middle mb-2 py-2\">
                                <h5 class=\"align-middle my-auto\">
                                    TOTALE <i class=\"bi bi-people-fill ms-1\"></i>:
                                        <span> ";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeUsers"] ?? null), "html", null, true);
        yield " </span>
                                </h5> 
                            </td>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </section>    
    
    ";
        // line 108
        yield from $this->loadTemplate("admin/user-modal.twig", "admin/users.twig", 108)->unwrap()->yield($context);
        yield from [];
    }

    // line 111
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 112
        yield "    ";
        // line 113
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 118
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha256-umbTaFxP31Fv6O1itpLS/3+v5fOAWDLOUzlmvOGaKV4=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 123
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha256-MtEA819Zls6dtLt5S5BpEMOhifPyz7gfzfgtNtY75lE=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 128
        yield "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js\" 
        integrity=\"sha256-y3ibfOyBqlgBd+GzwFYQEVOZdNJD06HeDXihongBXKs=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 133
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=\" 
        crossorigin=\"anonymous\">
</script>
<script>
\$(document).ready(function(){
//  Get the ID to show new and edited row from URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    const added = urlParams.get('added');
    const edited = urlParams.get('edited');

    if (added || edited) {
        let newMember = \$(\"#id-\" + added);
        let editMember = \$(\"#id-\" + edited);

        if (newMember.length) {
            newMember.addClass(\"highlight\");                 // Add highlight effect

            \$('html, body').animate({                           // Smooth scroll to the new row
                scrollTop: newMember.offset().top - 100      // Adjust for header offset
            }, 800);
        } 
        
        if (editMember.length) {
            editMember.addClass(\"highlight\");

            \$('html, body').animate({                           
                scrollTop: editMember.offset().top - 100      
            }, 800);
        }
    }

//  Edit button, open modal with populated user's data
    \$(document).on('click', '.editBtn', function () {
        const id = \$(this).data('id');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); // grab the token from a hidden input

        \$.post('/admin/user-edit', { action: 'getUserData', id_user: id, csrf_token: csrfToken }, function (response) {
            if (response.success) {
                const user = response.member;

                    \$('#editUserModal #id_user').val(user.id_user);
                    \$('#editUserModal #username').val(user.username);
                    \$('#editUserModal #email').val(user.email);
                    \$('#editUserModal #name').val(user.name);
                    \$('#editUserModal #surname').val(user.surname);
                    \$('#editUserModal #bday').val(response.format_bday);
                    \$('#editUserModal #city').val(user.city);
                    \$('#editUserModal #country').val(user.country);
                    \$('#editUserModal #id_gender').val(user.id_gender);
                    \$('#editUserModal #id_role').val(user.id_role);
                    \$('#editUserModal #id_title').val(user.id_title);

                    \$('#editUserModal').modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });

//  Delete button, open modal with user's name and surname 
    \$(document).on('click', '.deleteBtn', function () {
        const id = \$(this).data('id');

        \$.post('/admin/user-edit', { action: 'getUserDelete', id_user: id }, function (response) {
            if (response.success) {
                const resp = response.info;
                const fullname = resp.name + ' ' + resp.surname;

                \$('#deleteUserModal #id_user_del').val(resp.id_user);
                \$('#deleteUserModal #fullname').text(fullname);

                \$('#deleteUserModal').modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });

//  Delete button
    /*\$('.deleteBtn').on('click', function() {
        var id = \$(this).attr('data-id');
        \$(\"#id_user\").val(id);
    });*/

//  Search Bar
    \$(\"#search\").keyup(function(){
        var value = this.value.toLowerCase().trim();

        \$(\".platform .users\").each(function(index){
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
        return "admin/users.twig";
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
        return array (  331 => 133,  325 => 128,  319 => 123,  313 => 118,  307 => 113,  305 => 112,  298 => 111,  293 => 108,  279 => 97,  270 => 90,  262 => 84,  259 => 83,  239 => 77,  231 => 72,  224 => 68,  220 => 67,  214 => 64,  210 => 63,  203 => 61,  199 => 60,  195 => 59,  191 => 58,  185 => 57,  180 => 55,  171 => 53,  168 => 52,  165 => 51,  162 => 49,  144 => 48,  142 => 47,  119 => 26,  117 => 25,  108 => 24,  91 => 10,  84 => 9,  77 => 5,  75 => 4,  68 => 3,  55 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.twig' %}
{% block title %} Utenti {{ 'now'|date('Y') }} {% endblock %}
{% block head %}
    {# Bootstrap Datepicker - CSS #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" 
        integrity=\"sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=\" crossorigin=\"anonymous\">
{% endblock %}

{% block search %}
    <!--    ===>    SEARCH BAR    <===    -->
    <section class=\"row my-auto mx-auto px-3 search-header\">
        <div class=\"my-auto m-0 search-bar\">
            <form id=\"search-form\">
                <button type=\"button\" class=\"my-1 search-btn\">
                    <i class=\"bi bi-search\"></i>
                </button>
                <input type=\"text\" class=\"my-1 search-input\" id=\"search\" placeholder=\"      Cerca..\" />  
            </form>
        </div>
    </section>
    <!--    ===>    END SEARCH BAR    <===    -->
{% endblock %}

{% block content %} 
    {% include 'admin/users-navigation.twig' %}

    <!--    =====>    USERS TABLE    <=====    -->
    <section class=\"col-12 mx-auto my-1\">
        <div class=\"panel panel-body\">          
            <div class=\"d-flex justify-content-center\">
                <table class=\"col-12 table table-hover text-center platform\"> 
                    <thead>
                        <tr class=\"border-bottom border-top border-light table-title\">
                            <th class=\"align-middle p-3\"> # </th>
                            <th class=\"align-middle p-2\"> Nome e cognome </th>
                            <th class=\"align-middle p-2\"> Username </th>
                            <th class=\"align-middle p-2\"> Indirizzo e-mail </th>
                            <th class=\"align-middle p-2\" colspan=\"2\"> Data e luogo di nascita </th>
                            <th class=\"align-middle p-2\"> Ruolo aziendale </th>
                            <th class=\"align-middle p-2\"> Accesso </th>
                            <th class=\"align-middle p-2\"> Account creato </th>
                            <th class=\"align-middle p-2\"> <i class=\"bi bi-gear\"></i> </th>
                        </tr>
                    </thead>

                    <tbody class=\"table-body\">  
                        {% if users is not empty %}
                            {% for u in users %}

                            {# Check if the user is the newly added or edited user based on query parameter #}
                            {% set highlight = (u.id_user == added) or (u.id_user == edited) %}
                            
                                <tr id=\"id-{{ u.id_user }}\" class=\"users {% if highlight %}highlight{% endif %}\">
                                    <td scope=\"row\" class=\"align-middle text-dark p-2 table-border-light\">
                                        {{ loop.index }}
                                    </td>
                                    <td class=\"align-middle p-2 col-name\"> {{ u.surname|upper }} {{ u.name|upper }} </td>
                                    <td class=\"align-middle p-2 col-username\"> {{ u.username|lower }} </td>
                                    <td class=\"align-middle p-2 col-email\"> {{ u.email }} </td>
                                    <td class=\"align-middle p-2 col-bday\"> {{ u.birthday|date('d/m/Y') }} &nbsp; </td>
                                    <td class=\"align-middle p-2 col-place\"> {{ u.city|capitalize }}, {{ u.country|capitalize }} </td>
                                    <td class=\"align-middle p-2 col-title\"> 
                                        <abbr title=\"{{ u.title }}\" class=\"col-acronym\" style=\"text-decoration: none\">
                                            {{ u.acronym|upper }}
                                        </abbr> 
                                    </td>
                                    <td class=\"align-middle p-2 col-role\"> {{ u.role|capitalize }} </td>
                                    <td class=\"align-middle p-2 col-joined\"> {{ u.joined|date('d/m/Y') }} </td>
        
                                    <td class=\"align-middle p-2 btns\"> 
                                        <button type=\"button\" class=\"edit-data editBtn\" data-bs-toggle=\"modal\" data-bs-target=\"#editUserModel\" 
                                            data-id=\"{{ u.id_user }}\">
                                                <i class=\"bi bi-pencil-square\"></i>
                                        </button> 
        
                                        <button type=\"button\" class=\"edit-data deleteBtn\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteUserModal\" 
                                            data-id=\"{{ u.id_user }}\">
                                                <i class=\"bi bi-trash\"></i>
                                        </button> 
                                    </td>
                                </tr> 
                            {% endfor %}
                        {% else %}
                            <tr>
                                <td colspan=\"10\" class=\"text-center text-light p-3\">
                                    <strong> Nessun utente trovato. </strong>
                                </td>
                            </tr>
                        {% endif %}
                    </tbody>
                    
                    <tfoot>
                        <tr>
                            <td colspan=\"10\" class=\"text-light align-middle mb-2 py-2\">
                                <h5 class=\"align-middle my-auto\">
                                    TOTALE <i class=\"bi bi-people-fill ms-1\"></i>:
                                        <span> {{ activeUsers }} </span>
                                </h5> 
                            </td>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </section>    
    
    {% include 'admin/user-modal.twig' %}
{% endblock %}

{% block scripts %}
    {# JQuery #}
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    {# jQuery Validation (depends on jQuery) #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha256-umbTaFxP31Fv6O1itpLS/3+v5fOAWDLOUzlmvOGaKV4=\" 
        crossorigin=\"anonymous\">
</script>
    {# jQuery Additional Methods (depends on jQuery) #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha256-MtEA819Zls6dtLt5S5BpEMOhifPyz7gfzfgtNtY75lE=\" 
        crossorigin=\"anonymous\">
</script>
    {# Bootstrap JS bundle #}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js\" 
        integrity=\"sha256-y3ibfOyBqlgBd+GzwFYQEVOZdNJD06HeDXihongBXKs=\" 
        crossorigin=\"anonymous\">
</script>
    {# Bootstrap Datepicker (depends on jQuery) #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=\" 
        crossorigin=\"anonymous\">
</script>
<script>
\$(document).ready(function(){
//  Get the ID to show new and edited row from URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    const added = urlParams.get('added');
    const edited = urlParams.get('edited');

    if (added || edited) {
        let newMember = \$(\"#id-\" + added);
        let editMember = \$(\"#id-\" + edited);

        if (newMember.length) {
            newMember.addClass(\"highlight\");                 // Add highlight effect

            \$('html, body').animate({                           // Smooth scroll to the new row
                scrollTop: newMember.offset().top - 100      // Adjust for header offset
            }, 800);
        } 
        
        if (editMember.length) {
            editMember.addClass(\"highlight\");

            \$('html, body').animate({                           
                scrollTop: editMember.offset().top - 100      
            }, 800);
        }
    }

//  Edit button, open modal with populated user's data
    \$(document).on('click', '.editBtn', function () {
        const id = \$(this).data('id');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); // grab the token from a hidden input

        \$.post('/admin/user-edit', { action: 'getUserData', id_user: id, csrf_token: csrfToken }, function (response) {
            if (response.success) {
                const user = response.member;

                    \$('#editUserModal #id_user').val(user.id_user);
                    \$('#editUserModal #username').val(user.username);
                    \$('#editUserModal #email').val(user.email);
                    \$('#editUserModal #name').val(user.name);
                    \$('#editUserModal #surname').val(user.surname);
                    \$('#editUserModal #bday').val(response.format_bday);
                    \$('#editUserModal #city').val(user.city);
                    \$('#editUserModal #country').val(user.country);
                    \$('#editUserModal #id_gender').val(user.id_gender);
                    \$('#editUserModal #id_role').val(user.id_role);
                    \$('#editUserModal #id_title').val(user.id_title);

                    \$('#editUserModal').modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });

//  Delete button, open modal with user's name and surname 
    \$(document).on('click', '.deleteBtn', function () {
        const id = \$(this).data('id');

        \$.post('/admin/user-edit', { action: 'getUserDelete', id_user: id }, function (response) {
            if (response.success) {
                const resp = response.info;
                const fullname = resp.name + ' ' + resp.surname;

                \$('#deleteUserModal #id_user_del').val(resp.id_user);
                \$('#deleteUserModal #fullname').text(fullname);

                \$('#deleteUserModal').modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });

//  Delete button
    /*\$('.deleteBtn').on('click', function() {
        var id = \$(this).attr('data-id');
        \$(\"#id_user\").val(id);
    });*/

//  Search Bar
    \$(\"#search\").keyup(function(){
        var value = this.value.toLowerCase().trim();

        \$(\".platform .users\").each(function(index){
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
{% endblock %}  ", "admin/users.twig", "C:\\wamp64\\www\\liquimet\\templates\\admin\\users.twig");
    }
}
