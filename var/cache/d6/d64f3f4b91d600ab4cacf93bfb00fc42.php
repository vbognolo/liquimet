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

/* transports-full.twig */
class __TwigTemplate_8aba332c37635c338713dd6945b8eabc extends Template
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
            'content' => [$this, 'block_content'],
            'jquery' => [$this, 'block_jquery'],
            'datepicker' => [$this, 'block_datepicker'],
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
        $this->parent = $this->loadTemplate("layout.twig", "transports-full.twig", 1);
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
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " 
    ";
        // line 10
        yield from $this->loadTemplate("transports-navigation.twig", "transports-full.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "
<section class=\"col-12 m-auto\">
    <div class=\"d-flex justify-content-center table-responsive\">          
        <table class=\"table table-hover table-light table-stripped caption-top text-center platform\" id=\"transport-table\">
            <caption class=\"px-3 mb-2 text-white text-shadow-dark\" style=\"font-size: 1.9rem\"> 
                <span>
                    <i class=\"bi bi-arrow-bar-right my-1 fs-3\"></i> 
                        Trasporti Pieni
                </span>
            </caption>

            ";
        // line 22
        yield from $this->loadTemplate("shared/transports-head.twig", "transports-full.twig", 22)->unwrap()->yield($context);
        // line 23
        yield "
            <tbody class=\"table-group-divider\" id=\"transport-tbody\">
                ";
        // line 25
        yield from $this->loadTemplate("transports-full-ajax.twig", "transports-full.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "            </tbody>

            <tfoot id=\"transport-tfoot\">
                ";
        // line 29
        yield from $this->loadTemplate("transports-pagination.twig", "transports-full.twig", 29)->unwrap()->yield(CoreExtension::merge($context, ["type" => "F", "page" =>         // line 31
($context["page"] ?? null), "csrf_token" =>         // line 32
($context["csrfToken"] ?? null)]));
        // line 34
        yield "            </tfoot>
        </table>
    </div>  
</section>  

    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 40
        yield from $this->loadTemplate("transport-modal.twig", "transports-full.twig", 40)->unwrap()->yield($context);
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_jquery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 49
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha256-umbTaFxP31Fv6O1itpLS/3+v5fOAWDLOUzlmvOGaKV4=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 54
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha256-MtEA819Zls6dtLt5S5BpEMOhifPyz7gfzfgtNtY75lE=\" 
        crossorigin=\"anonymous\">
</script>
";
        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datepicker(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 61
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=\" 
        crossorigin=\"anonymous\">
</script>
";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield "<script>
\$(document).ready(function () {
    \$(document).on('click', '.transport-page', function(e) {
        e.preventDefault();
        const page = \$(this).data('page');
        const csrfToken = \$('input[name=\"csrf_token\"]').val();

        \$.ajax({
            type: 'POST',
            url: 'transports-pagination', 
            dataType: 'json',
            data: {
                csrf_token: csrfToken,
                type: 'F',
                page: page
            },
            success: function (response) {
                if (response.success) {
                    \$('#transport-tbody').html(response.tbody).find('#transport-tbody').html();
                    \$('#transport-tfoot').html(response.pagination).find('#transport-tfoot').html();
                }
            },
            error: function () {
                alert('Errore nel caricamento della pagina.');
            }
        });

        // Avoid multiple fast clicks by disabling temporarily
        if (\$(this).parent().hasClass('disabled') || \$(this).parent().hasClass('active')) {
            return;
        }

        // Scroll to table after page load starts
        \$('html, body').animate({ scrollTop: \$('#transport-table').offset().top }, 300);
    });

//  Transport edit button, open modal with populated transports's data
    \$(document).on('click', '.updateTrans', function () {
        const id = \$(this).data('id');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); // grab the token from a hidden input

        \$.post('get-transport', { action: 'getTransportData', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success) {
                const transport = response.transport;

                    \$('#editTransModal #id_transport').val(transport.id_transport);
                    \$('#editTransModal #slot').val(transport.slot.toUpperCase());
                    \$('#editTransModal #cmr').val(transport.cmr.toUpperCase());
                    \$('#editTransModal #issuer').val(transport.issuer.toUpperCase());
                    \$('#editTransModal #supplier').val(transport.supplier.toUpperCase());
                    \$('#editTransModal #transport').val(transport.transport.toUpperCase());
                    \$('#editTransModal #date_load').val(transport.date_load);
                    \$('#editTransModal #date_unload').val(transport.date_unload);
                    \$('#editTransModal #container').val(transport.container.toUpperCase());

                    /*\$('#editTransModal #original_slot').val(transport.slot);
                    \$('#editTransModal #original_cmr').val(transport.cmr);*/

                    \$('#editTransModal').modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });

//  Quantity edit button, open modal with populated quantity's data
    \$(document).on('click', '.updateQty', function () {
        const id = \$(this).data('id');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$.post('get-quantity', { action: 'getQuantityData', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success) {
                const quantity = response.quantity;

                    \$('#editQtyModal #id_transport').val(quantity.id_transport);
                    \$('#editQtyModal #id_quantity').val(quantity.id_quantity);
                    \$('#editQtyModal #kg_load').val(quantity.kg_load);
                    \$('#editQtyModal #cooling').val(quantity.cooling);
                    \$('#editQtyModal #price_typology').val(quantity.price_typology);
                    \$('#editQtyModal #price_value').val(quantity.price_value);
                    \$('#editQtyModal #kg_unload').val(quantity.kg_unload);
                    \$('#editQtyModal #liquid_density').val(quantity.liquid_density);
                    \$('#editQtyModal #gas_weight').val(quantity.gas_weight);
                    \$('#editQtyModal #pcs_ghv').val(quantity.pcs_ghv);

                    \$('#editQtyModal').modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });

//  Delete transport button
    \$(document).on('click', '.deleteTrans', function () {
        const id = \$(this).data('id');
        const slot = \$(this).data('slot');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$(\"#deleteTransModal #id_transport\").val(id);
        \$(\"#deleteTransModal #slot-placeholder\").text(slot);
    });

//  Note edit button
    \$('.notes').each(function () {
        const container = \$(this);
        const id = container.data('ids');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$.post('get-note', { action: 'getTransportNotes', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success && response.notes.length > 0) {
                let html = '';
                response.notes.forEach(n => {
                    html += `<span class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" title=\"Scritto da \${n.author} il \${n.created}\">
                                \${n.content}
                            </span> <br>`;
                });
                container.html(html);
                container.find('[data-bs-toggle=\"tooltip\"]').tooltip();
            } else {
                container.html('<div class=\"text-muted\">Nessuna nota.</div>');
            }
        }, 'json');
    });

//  Notes edit button, open modal with populated quantity's data
    \$(document).on('click', '.updateNote', function () {
        const id = \$(this).data('id');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$.post('get-note', { action: 'getTransportNotes', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success) {
                const notes = response.notes;

                \$('#editNoteModal #id_transport').val(id);
                \$('#editNoteModal #id_note').val(notes.id_note);
                \$('#editNoteModal #note').val(notes.map(n => n.content).join(' '));

                \$('#editNoteModal').modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
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
        return "transports-full.twig";
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
        return array (  193 => 68,  186 => 67,  177 => 61,  170 => 60,  161 => 54,  155 => 49,  149 => 44,  142 => 43,  137 => 40,  133 => 39,  126 => 34,  124 => 32,  123 => 31,  122 => 29,  117 => 26,  115 => 25,  111 => 23,  109 => 22,  96 => 11,  94 => 10,  85 => 9,  78 => 5,  76 => 4,  69 => 3,  56 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.twig' %}
{% block title %} Piattaforma {{ 'now'|date('Y') }} {% endblock %}
{% block head %}
    {# Bootstrap Datepicker - CSS #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" 
        integrity=\"sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=\" crossorigin=\"anonymous\">
{% endblock %}
  
{% block content %} 
    {% include 'transports-navigation.twig' %}

<section class=\"col-12 m-auto\">
    <div class=\"d-flex justify-content-center table-responsive\">          
        <table class=\"table table-hover table-light table-stripped caption-top text-center platform\" id=\"transport-table\">
            <caption class=\"px-3 mb-2 text-white text-shadow-dark\" style=\"font-size: 1.9rem\"> 
                <span>
                    <i class=\"bi bi-arrow-bar-right my-1 fs-3\"></i> 
                        Trasporti Pieni
                </span>
            </caption>

            {% include 'shared/transports-head.twig' %}

            <tbody class=\"table-group-divider\" id=\"transport-tbody\">
                {% include 'transports-full-ajax.twig' %}
            </tbody>

            <tfoot id=\"transport-tfoot\">
                {% include 'transports-pagination.twig' with {
                    type: 'F',
                    page: page,
                    csrf_token: csrfToken
                } %}
            </tfoot>
        </table>
    </div>  
</section>  

    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\">
    {% include 'transport-modal.twig' %}
{% endblock %}

{% block jquery %}
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    {# JQuery Validation #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha256-umbTaFxP31Fv6O1itpLS/3+v5fOAWDLOUzlmvOGaKV4=\" 
        crossorigin=\"anonymous\">
</script>
    {# JQuery Validation Additional Methods #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha256-MtEA819Zls6dtLt5S5BpEMOhifPyz7gfzfgtNtY75lE=\" 
        crossorigin=\"anonymous\">
</script>
{% endblock %}

{% block datepicker %}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=\" 
        crossorigin=\"anonymous\">
</script>
{% endblock %}

{% block page_script %}
<script>
\$(document).ready(function () {
    \$(document).on('click', '.transport-page', function(e) {
        e.preventDefault();
        const page = \$(this).data('page');
        const csrfToken = \$('input[name=\"csrf_token\"]').val();

        \$.ajax({
            type: 'POST',
            url: 'transports-pagination', 
            dataType: 'json',
            data: {
                csrf_token: csrfToken,
                type: 'F',
                page: page
            },
            success: function (response) {
                if (response.success) {
                    \$('#transport-tbody').html(response.tbody).find('#transport-tbody').html();
                    \$('#transport-tfoot').html(response.pagination).find('#transport-tfoot').html();
                }
            },
            error: function () {
                alert('Errore nel caricamento della pagina.');
            }
        });

        // Avoid multiple fast clicks by disabling temporarily
        if (\$(this).parent().hasClass('disabled') || \$(this).parent().hasClass('active')) {
            return;
        }

        // Scroll to table after page load starts
        \$('html, body').animate({ scrollTop: \$('#transport-table').offset().top }, 300);
    });

//  Transport edit button, open modal with populated transports's data
    \$(document).on('click', '.updateTrans', function () {
        const id = \$(this).data('id');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); // grab the token from a hidden input

        \$.post('get-transport', { action: 'getTransportData', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success) {
                const transport = response.transport;

                    \$('#editTransModal #id_transport').val(transport.id_transport);
                    \$('#editTransModal #slot').val(transport.slot.toUpperCase());
                    \$('#editTransModal #cmr').val(transport.cmr.toUpperCase());
                    \$('#editTransModal #issuer').val(transport.issuer.toUpperCase());
                    \$('#editTransModal #supplier').val(transport.supplier.toUpperCase());
                    \$('#editTransModal #transport').val(transport.transport.toUpperCase());
                    \$('#editTransModal #date_load').val(transport.date_load);
                    \$('#editTransModal #date_unload').val(transport.date_unload);
                    \$('#editTransModal #container').val(transport.container.toUpperCase());

                    /*\$('#editTransModal #original_slot').val(transport.slot);
                    \$('#editTransModal #original_cmr').val(transport.cmr);*/

                    \$('#editTransModal').modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });

//  Quantity edit button, open modal with populated quantity's data
    \$(document).on('click', '.updateQty', function () {
        const id = \$(this).data('id');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$.post('get-quantity', { action: 'getQuantityData', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success) {
                const quantity = response.quantity;

                    \$('#editQtyModal #id_transport').val(quantity.id_transport);
                    \$('#editQtyModal #id_quantity').val(quantity.id_quantity);
                    \$('#editQtyModal #kg_load').val(quantity.kg_load);
                    \$('#editQtyModal #cooling').val(quantity.cooling);
                    \$('#editQtyModal #price_typology').val(quantity.price_typology);
                    \$('#editQtyModal #price_value').val(quantity.price_value);
                    \$('#editQtyModal #kg_unload').val(quantity.kg_unload);
                    \$('#editQtyModal #liquid_density').val(quantity.liquid_density);
                    \$('#editQtyModal #gas_weight').val(quantity.gas_weight);
                    \$('#editQtyModal #pcs_ghv').val(quantity.pcs_ghv);

                    \$('#editQtyModal').modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });

//  Delete transport button
    \$(document).on('click', '.deleteTrans', function () {
        const id = \$(this).data('id');
        const slot = \$(this).data('slot');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$(\"#deleteTransModal #id_transport\").val(id);
        \$(\"#deleteTransModal #slot-placeholder\").text(slot);
    });

//  Note edit button
    \$('.notes').each(function () {
        const container = \$(this);
        const id = container.data('ids');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$.post('get-note', { action: 'getTransportNotes', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success && response.notes.length > 0) {
                let html = '';
                response.notes.forEach(n => {
                    html += `<span class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" title=\"Scritto da \${n.author} il \${n.created}\">
                                \${n.content}
                            </span> <br>`;
                });
                container.html(html);
                container.find('[data-bs-toggle=\"tooltip\"]').tooltip();
            } else {
                container.html('<div class=\"text-muted\">Nessuna nota.</div>');
            }
        }, 'json');
    });

//  Notes edit button, open modal with populated quantity's data
    \$(document).on('click', '.updateNote', function () {
        const id = \$(this).data('id');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$.post('get-note', { action: 'getTransportNotes', id_transport: id, csrf_token: csrfToken }, function (response) {
            if (response.success) {
                const notes = response.notes;

                \$('#editNoteModal #id_transport').val(id);
                \$('#editNoteModal #id_note').val(notes.id_note);
                \$('#editNoteModal #note').val(notes.map(n => n.content).join(' '));

                \$('#editNoteModal').modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });
});
</script>
{% endblock %}", "transports-full.twig", "C:\\wamp64\\www\\liquimet\\templates\\transports-full.twig");
    }
}
