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

/* transports.twig */
class __TwigTemplate_defee4b09bc811995f36aa333096627b extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "transports.twig", 1);
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
        yield from $this->loadTemplate("shared/transports-navigation.twig", "transports.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "
<section class=\"col-12 m-auto\">
    ";
        // line 14
        yield "    <div class=\"card platform-caption\">
        <div class=\"card-header d-flex align-items-start border-0 my-1\">
            <button class=\"dropdown-toggle mb-1 platform-btn\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">                
                <span class=\"p-1 my-auto\" style=\"font-size: 1.6rem\">
                    ";
        // line 18
        if ((null === ($context["type"] ?? null))) {
            // line 19
            yield "                        TUTTI TRASPORTI
                    ";
        } elseif ((        // line 20
($context["type"] ?? null) == "F")) {
            // line 21
            yield "                        TRASPORTI PIENI
                    ";
        } elseif ((        // line 22
($context["type"] ?? null) == "P")) {
            // line 23
            yield "                        TRASPORTI PARZIALI
                    ";
        }
        // line 25
        yield "                </span>
            </button>

            <ul class=\"dropdown-menu\">
                <li class=\"dropdown-header\"> <h5> ◦ TRASPORTI ◦ </h5> </li>      
                    <li> <hr class=\"dropdown-divider\"> </li>

                <li> <a class=\"dropdown-item ";
        // line 32
        if ((null === ($context["type"] ?? null))) {
            yield "active";
        }
        yield "\" style=\"text-align: center\" 
                        href=\"javascript:void(0);\" data-type=\"all\"> 
                        Tutti </a>
                </li>            
                    <li> <hr class=\"dropdown-divider\"> </li>
                
                <li> <a class=\"dropdown-item ";
        // line 38
        if ((($context["type"] ?? null) == "F")) {
            yield "active";
        }
        yield "\" style=\"text-align: center\" 
                        href=\"javascript:void(0);\" data-type=\"F\"> 
                        Pieni </a>
                </li>       
                    <li> <hr class=\"dropdown-divider\"> </li>
                
                <li> <a class=\"dropdown-item ";
        // line 44
        if ((($context["type"] ?? null) == "P")) {
            yield "active";
        }
        yield "\" style=\"text-align: center\" 
                        href=\"javascript:void(0);\" data-type=\"P\"> 
                        Parziali </a>
                </li>
            </ul>
        </div>
    </div>

    ";
        // line 53
        yield "    <div class=\"d-flex justify-content-center table-responsive\">          
        <table class=\"table table-hover text-center platform\" id=\"transports-table\">
            ";
        // line 56
        yield "            <thead id=\"transport-head\">
                ";
        // line 57
        yield from $this->loadTemplate("shared/transports-head.twig", "transports.twig", 57)->unwrap()->yield($context);
        // line 58
        yield "            </thead>

            ";
        // line 61
        yield "            <tbody id=\"transport-tbody\" class=\"table-group-divider transport-row-group\">
                ";
        // line 62
        if ((($context["type"] ?? null) == "F")) {
            // line 63
            yield "                    ";
            yield from $this->loadTemplate("transports-full-ajax.twig", "transports.twig", 63)->unwrap()->yield(CoreExtension::merge($context, ["show_type" => false]));
            // line 64
            yield "                ";
        } elseif ((($context["type"] ?? null) == "P")) {
            // line 65
            yield "                    ";
            yield from $this->loadTemplate("transports-part-ajax.twig", "transports.twig", 65)->unwrap()->yield(CoreExtension::merge($context, ["show_type" => false]));
            // line 66
            yield "                ";
        } else {
            // line 67
            yield "                    ";
            yield from $this->loadTemplate("transports-ajax.twig", "transports.twig", 67)->unwrap()->yield(CoreExtension::merge($context, ["show_type" => true]));
            // line 68
            yield "                ";
        }
        // line 69
        yield "            </tbody>

            ";
        // line 72
        yield "            <tfoot id=\"transport-tfoot\">
                ";
        // line 73
        if ((($context["type"] ?? null) == "F")) {
            // line 74
            yield "                    ";
            yield from $this->loadTemplate("shared/pagination.twig", "transports.twig", 74)->unwrap()->yield(CoreExtension::merge($context, ["page" =>             // line 75
($context["page"] ?? null), "csrf_token" =>             // line 76
($context["csrfToken"] ?? null), "show_type" => false]));
            // line 79
            yield "                ";
        } elseif ((($context["type"] ?? null) == "P")) {
            // line 80
            yield "                    ";
            yield from $this->loadTemplate("shared/pagination.twig", "transports.twig", 80)->unwrap()->yield(CoreExtension::merge($context, ["page" =>             // line 81
($context["page"] ?? null), "srf_token" =>             // line 82
($context["csrfToken"] ?? null), "show_type" => (null ===             // line 83
($context["type"] ?? null))]));
            // line 85
            yield "                ";
        } else {
            // line 86
            yield "                    ";
            yield from $this->loadTemplate("shared/pagination.twig", "transports.twig", 86)->unwrap()->yield(CoreExtension::merge($context, ["page" =>             // line 87
($context["page"] ?? null), "csrf_token" =>             // line 88
($context["csrfToken"] ?? null), "show_type" => true]));
            // line 91
            yield "                ";
        }
        // line 92
        yield "            </tfoot>
        </table>
    </div>    
</section> 

<input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 98
        yield from $this->loadTemplate("transport-modals.twig", "transports.twig", 98)->unwrap()->yield($context);
        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_jquery(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 102
        yield "<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" 
        integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 107
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js\" 
        integrity=\"sha256-umbTaFxP31Fv6O1itpLS/3+v5fOAWDLOUzlmvOGaKV4=\" 
        crossorigin=\"anonymous\">
</script>
    ";
        // line 112
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js\" 
        integrity=\"sha256-MtEA819Zls6dtLt5S5BpEMOhifPyz7gfzfgtNtY75lE=\" 
        crossorigin=\"anonymous\">
</script> 
";
        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datepicker(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 119
        yield "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" 
        integrity=\"sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=\" 
        crossorigin=\"anonymous\">
</script>
";
        yield from [];
    }

    // line 125
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 126
        yield "<script>
\$(function () {
    \$('.updateQty').on('click', function() {
        \$('.updateQty').removeClass('active');                  // Remove active from all buttons first
        \$(this).addClass('active');                             // Add active to clicked button
        \$('#editQtyModal').data('trigger', this);               // Store this button in modal
    });

    \$('#editQtyModal').on('hidden.bs.modal', function() {
        var btn = \$(this).data('trigger');                      // Find the button that triggered the modal
            if (btn) {
                \$(btn).removeClass('active');                   // Remove active class
                \$(btn).blur();                                  // Remove focus so :focus styles go away
                \$(this).removeData('trigger');                  // Clean up stored reference
            }       
    });

//  ==================== Collapse Btn and Dropdown Menu ====================
    \$(document).on('shown.bs.collapse', '.collapse', function () {
        let targetId = \$(this).attr('id');
        \$(`[data-bs-target=\"#\${targetId}\"]`).attr('aria-expanded', 'true');
    });
    \$(document).on('hidden.bs.collapse', '.collapse', function () {
        let targetId = \$(this).attr('id');
        \$(`[data-bs-target=\"#\${targetId}\"]`).attr('aria-expanded', 'false');
    });
    \$(document).on('click', '.collapse-btn', function() {
        var \$icon = \$(this).find('i.icon-plus');

        \$icon.css({opacity: 0, transform: 'scale(0.5)'});        // Smooth fade-out
        setTimeout(function() {                                  // After short delay, swap icon and fade-in
            \$icon.toggleClass('bi-plus-lg bi-dash-lg');
            \$icon.css({opacity: 1, transform: 'scale(1)'});
        }, 350);                                                 // 100ms for smooth transition
    });
    \$('.dropdown-item').on('click', function(e) {
        e.preventDefault();
        \$('.dropdown-item').removeClass('active');               // Remove active from all items and set active on clicked
        \$(this).addClass('active');

        let csrfToken = \$('input[name=\"csrf_token\"]').val();     // Send AJAX request to update tbody (optional)
        let type = \$(this).data('type');                         // Update dropdown button title
        let title = '';
            switch(type) {
                case 'all':
                    title = 'TUTTI TRASPORTI';
                    type = '';                                   // Send null to server
                        break;
                case 'F':
                    title = 'TRASPORTI PIENI';
                        break;
                case 'P':
                    title = 'TRASPORTI PARZIALI';
                        break;
            }
        \$(this).closest('.card-header').find('span').text(title);       

        \$.ajax({
            url: 'pagination', 
            type: 'POST',
            data: { 
                type: type,
                page: 1,
                csrf_token: csrfToken
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    \$('#transport-tbody').html(response.tbody);
                    \$('#transport-tfoot').html(response.pagination);
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert('Error loading transports. Please reload the page.');
            }
        });
    });

//  ============ Cache modal, form and buttons ============
    const csrfToken  = \$('input[name=\"csrf_token\"]').val();

    const \$transModal = \$('#editTransModal');                     
    const \$qtyModal  = \$('#editQtyModal');

    const \$transForm = \$('#transport-edit');                      
    const \$qtyForm   = \$('#quantity-edit');
    const \$partForm  = \$('#partial-edit');
    
    let originalData = {};                                       //  Global originalData for resetting form on modal hide and updating after submit

//  ============================= Utilities =============================
//  Utility: get form data as { name: value }
    function getFormData(\$form) {
        const data = {};
            \$form.serializeArray().forEach(f => {
                let val = f.value.trim();
                    if (/^\\d+(,|\\.)\\d+\$/.test(val)) {            //  Normalize comma to dot for decimals
                        val = val.replace(',', '.');
                    }
                data[f.name] = val;
            });
        return data;
    }
//  Utility: compare two form data objects
    function isFormChanged(original, current) {
        return Object.keys(current).some(key => current[key] !== original[key]);
    }
//  Utility: reset form inputs to original values, clear errors
    function resetFormToOriginal(\$form) {
        for (const [k, v] of Object.entries(originalData)) {
            \$form.find(`[name=\"\${k}\"]`).val(v);
        }
    }
//  On modal hide, reset form if changed
    \$('#editTransModal, #editQtyModal').on('hide.bs.modal', function () {
        const \$form = \$(this).find('form');
        const currentData = getFormData(\$form);
            if (isFormChanged(originalData, currentData)) {
                resetFormToOriginal(\$form);
            }
    });
//  Utility: update global originalData after successful AJAX submit
    function updateOriginalDataFromResponse(data) {
        if (!data) return;
        Object.keys(data).forEach(k => originalData[k] = data[k]);
    }

//  =========== Change detection and Save button enable/disable ===========
//  Initialize form change tracking per modal and form
    function initFormChangeTracking(\$modal, \$form, \$saveBtn) {
        let modalOriginalData = {};

    //  On modal show: cache original form data & disable Save button
        \$modal.on('show.bs.modal', function () {
            modalOriginalData = getFormData(\$form);
            \$saveBtn.prop('disabled', true);
        });
    //  On any input or change, enable Save if form changed
        \$form.on('input change', ':input', function () {
            const currentData = getFormData(\$form);
                if (isFormChanged(modalOriginalData, currentData)) {
                    \$saveBtn.prop('disabled', false);
                } else {
                    \$saveBtn.prop('disabled', true);
                }
        });
    }

//  =========================== Date formatting ===========================
    function formatToDMY(date) {
        const d = String(date.getDate()).padStart(2, '0');
        const m = String(date.getMonth() + 1).padStart(2, '0');
            return `\${d}-\${m}-\${date.getFullYear()}`;
    }
//  Parse date with multiple separators and formats 
    function parseAnyDate(dateStr) {
        if (!dateStr) return null;
        const norm = dateStr.replace(/[./]/g, '-').trim();
        const parts = norm.split('-');
            if (parts.length !== 3) return null;

        let d, m, y;
            if (parts[0].length === 4) {    // yyyy-mm-dd
                y = +parts[0];
                m = +parts[1] - 1;
                d = +parts[2];
            } else {                        // dd-mm-yyyy
                d = +parts[0];
                m = +parts[1] - 1;
                y = +parts[2];
            }

        const dt = new Date(y, m, d);
        return (dt.getFullYear() === y && dt.getMonth() === m && dt.getDate() === d) ? dt : null;
    }

//  ============================ Initialization ============================
//  Initialize datepicker and validation for both forms
    function initValidation() {
        const minDate = new Date(2006, 0, 1); // 01-01-2006
        const today = new Date();

    //  Datepicker init (both forms)
        \$('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            endDate: today,
            autoclose: true,
            clearBtn: false,
            todayBtn: 'linked',               
            todayHighlight: true,         
            startView: 0
        }).on('changeDate', function (e) {
            \$(this).trigger('change');                                          // Validator catches the value
                if (this.id === 'date_load') {
                    \$('#date_unload').datepicker('setStartDate', e.date);
                }
                \$(this).valid();
        }).on('show', function () {
            \$(this).data('selectedDate', \$(this).val());                        // Store current value when datepicker opens
        }).on('hide', function (e) {
            const currentVal = \$(this).val();                                   // If the user didn't select anything and just clicked out, preserve current value
                if (!currentVal) {
                    const storedDate = \$(this).data('selectedDate');
                        if (storedDate) {
                            \$(this).val(storedDate);                            // Restore value
                        }
                }
        });

    //  Validation Rule: validate format & real date 
        \$.validator.addMethod(\"validDate\", function (value) {
            return parseAnyDate(value) !== null;
        });
    //  Validation Rule: min date >= 01-01-2006 
        \$.validator.addMethod(\"minDate2006\", function (value) {
            const date = parseAnyDate(value);
                if (!date) return false;
            return date >= minDate;
        });
    //  Validation Rule: no future dates 
        \$.validator.addMethod(\"noFutureDate\", function (value) {
            const date = parseAnyDate(value);
                if (!date) return false;
            return date <= today;
        });
    //  Validation Rule: unload <= load 
        \$.validator.addMethod(\"unloadAfterLoad\", function (value, element) {
            const dateUnload = parseAnyDate(value);
            const dateLoad = parseAnyDate(\$(\"#date_load\").val());
                if (!dateUnload || !dateLoad) return true;                      // Other rules will catch invalids
            return dateUnload >= dateLoad;
        });

    //  Transport Form Validation
        \$transForm.validate({
            onkeyup: false,
            onfocusin: false,
            onfocusout: function(el) { this.element(el); }, /*el => \$(el).valid(), /*el => \$transForm.validate().element(el),*/   
            rules: {
                slot: { required: true, rangelength: [5, 35], pattern: \"^[A-Za-z0-9_]+\$\" },
                cmr: { required: true, rangelength: [5, 35], pattern: \"^[A-Za-z0-9\\\\-]+\$\" },
                issuer: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
                supplier: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
                transport: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
                date_load: { required: true, validDate: true, noFutureDate: true, minDate2006: true },
                date_unload: { required: true, validDate: true, noFutureDate: true, minDate2006: true, unloadAfterLoad: true },
                container: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" }
            },
            messages: {
                slot: {
                    required: \"Campo obbligatorio.\",
                    rangelength: \"Usare almeno 5 e al massimo 35 caratteri.\",
                    pattern: \"Slot ID può contenere lettere, numeri e underscore (_). Spazi non consentiti.\"
                },
                cmr: {
                    required: \"Campo obbligatorio.\",
                    rangelength: \"Usare almeno 5 e al massimo 35 caratteri.\",
                    pattern: \"CMR può contenere lettere, numeri e trattini (-). Spazi non consentiti.\"
                },
                issuer: {
                    required: \"Campo obbligatorio.\",
                    rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                    pattern: \"Emittente può contenere solo lettere e spazi (senza spazio iniziale).\"
                },
                supplier: {
                    required: \"Campo obbligatorio.\",
                    rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                    pattern: \"Fornitore può contenere solo lettere e spazi (senza spazio iniziale).\"
                },
                transport: {
                    required: \"Campo obbligatorio.\",
                    rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                    pattern: \"Trasporto può contenere solo lettere e spazi (senza spazio iniziale).\"
                },
                date_load: {
                    required: \"Campo obbligatorio.\",
                    validDate: \"Inserire una data valida.\",
                    noFutureDate: \"Inserire una data valida. Non sono permesse date future.\",
                    minDate2006: \"Inserire una data valida. Non sono permesse date precedenti al 2006.\"
                },
                date_unload: {
                    required: \"Campo obbligatorio.\",
                    validDate: \"Inserire una data valida.\",
                    noFutureDate: \"Inserire una data valida. Non sono permesse date future.\",
                    minDate2006: \"Inserire una data valida. Non sono permesse date precedenti al 2006.\",
                    unloadAfterLoad: \"La data di scarico non può essere precedente alla data di carico.\"
                },
                container: {
                    required: \"Campo obbligatorio.\",
                    rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                    pattern: \"Container può contenere solo lettere e spazi (senza spazio iniziale).\"
                }
            },
            errorPlacement: (error, el) => {
                error.addClass(\"text-danger small\");
                el.removeClass(\"is-valid\").addClass(\"is-invalid\");
                el.closest(\".form-group\").find(\".error-placeholder\").html(error);
            },
            highlight: el => \$(el).removeClass('is-valid').addClass('is-invalid'),
            unhighlight: el => \$(el).removeClass('is-invalid').closest('.form-group').find('.error-placeholder').empty(),
            submitHandler: function (form) {
                \$.ajax({
                    url: 'transport-edit',
                    type: 'POST',
                    data: \$transForm.serialize(),
                    dataType: 'json',
                    success: response => {
                        if (response.success) {
                            updateOriginalDataFromResponse(response.edited);
                            \$transModal.modal('hide');

                            const edited = response.edited;
                            const row = \$('#id-' + edited.id_transport);

                            row.find('.col-slot').text(edited.slot);
                            row.find('.col-cmr').text(edited.cmr);
                            row.find('.col-issuer').text(edited.issuer);
                            row.find('.col-supplier').text(edited.supplier);
                            row.find('.col-transport').text(edited.transport);
                            row.find('.col-load').text(edited.date_load);
                            row.find('.col-unload').text(edited.date_unload);
                            row.find('.col-container').text(edited.container);
                            row.find('.col-univoco').text(edited.univoco);
                            row.find('.col-month-load').text(edited.id_month_load);
                            row.find('.col-week-unload').text(edited.week_unload);
                            row.find('.col-month-unload').text(`\${edited.id_month_unload} - \${edited.month_unload}`);

                            row.removeClass('full-row partial-row').addClass('table-success');
                            \$('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => { row.removeClass('table-success');
                                if (edited.type == 'F') {
                                    row.addClass('full-row');
                                } else {
                                    row.addClass('partial-row');
                                }
                            }, 2500);
                        } else {
                            \$(\".invalid-feedback\").remove();
                            if (response.errors) {
                                \$.each(response.errors, (field, message) => {
                                    const input = \$(\"[name='\" + field + \"']\");
                                    input.removeClass(\"is-valid\").addClass(\"is-invalid\");
                                    input.closest(\".form-group\").find(\".error-placeholder\")
                                        .html('<div class=\"invalid-feedback\">' + message + '</div>');
                                });
                            }
                        }
                    },
                    error: xhr => console.error(xhr.responseText)
                });
                return false;
            },
            success: (label, el) => {
                \$(el).removeClass(\"is-invalid\").addClass(\"is-valid\");
                \$(el).closest(\".form-group\").find(\".error-placeholder\").empty();
            }
        });

        \$transModal.on('focus', '.form-control', function() {
            \$(this).addClass('input-focused');                                  // Blue border while typing
            \$(this).removeClass('is-invalid is-valid');                         // Remove validation styles while focused
            /*\$(this).closest(\".form-group\").find(\".error-placeholder\").empty();  // hide error*/
        }).on('blur', '.form-control', function() {
            \$(this).removeClass('input-focused');                               // Remove blue border
            \$transForm.validate().element(this);
        });

    //  Quantity Form Validation
        \$qtyForm.validate({
            onkeyup: false,
            onfocusin: false,
            onfocusout: el => \$(el).valid(),
            rules: {
                kg_load: { required: true, number: true, min: 0 },
                cooling: { required: true, digits: true },
                price_typology: { required: true },
                price_value: { 
                    required: {
                        function() {
                            return \$('#price_typology').val() !== 'no';
                        }
                    },
                    digits: true,
                    min: 1
                },
                kg_unload: { required: true, number: true, min: 0 },
                liquid_density: { required: true, number: true, min: 0 },
                gas_weight: { required: true, number: true, min: 0 },
                pcs_ghv: { required: true, number: true, min: 0 }
            },
            messages: {
                kg_load: {
                    required: \"Campo obbligatorio.\",
                    number: \"Quantità caricata deve essere un numero positivo (intero o decimale).\",
                    min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
                },
                cooling: {
                    required: \"Campo obbligatorio.\",
                    digits: \"Raffredamento deve essere un numero intero positivo, senza segni o decimali.\"
                },
                price_typology: {
                    required: \"Campo obbligatorio.\"
                }, 
                price_value: {
                    required: \"Campo obbligatorio.\",
                    digits: \"Valore costo extra deve essere un numero intero positivo maggiore o uguale a 1, senza segni o decimali.\",
                    min: \"Il valore minimo deve essere maggiore o uguale a 1.\"
                }, 
                kg_unload: {
                    required: \"Campo obbligatorio.\",
                    number: \"Quantità scaricata deve essere un numero positivo (intero o decimale).\",
                    min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
                },
                liquid_density: {
                    required: \"Campo obbligatorio.\",
                    number: \"Densità liquido deve essere un numero positivo (intero o decimale).\",
                    min: \"Il valore minimo deve essere maggiore o uguale a 0.\",
                }, 
                gas_weight: {
                    required: \"Campo obbligatorio.\",
                    number: \"Peso specifico (gas) deve essere un numero positivo (intero o decimale).\",
                    min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
                }, 
                pcs_ghv: {
                    required: \"Campo obbligatorio.\",
                    number: \"PCS/GHV deve essere un numero positivo (intero o decimale).\",
                    min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
                }
            },
            errorPlacement: (error, el) => {
                error.addClass(\"text-danger small\");
                el.removeClass(\"is-valid\").addClass(\"is-invalid\");
                el.closest(\".form-group\").find(\".error-placeholder\").html(error);
            },
            highlight: el => \$(el).removeClass('is-valid').addClass('is-invalid'),
            unhighlight: el => \$(el).removeClass('is-invalid').closest('.form-group').find('.error-placeholder').empty(),
            submitHandler: form => {
                \$.ajax({
                    url: 'quantity-edit',
                    type: 'POST',
                    data: \$qtyForm.serialize(),
                    dataType: 'json',
                    success: response => {
                        if (response.success) {
                            updateOriginalDataFromResponse(response.updated);
                            \$qtyModal.modal('hide');

                            const updated = response.updated;
                            const row = \$('#qty-table-' + updated.id_transport);

                            row.find('.col-kg-load').text(updated.kg_load);
                            row.find('.col-cooling').text(updated.cooling);
                            row.find('.col-price-typology').text(updated.price_typology);
                            row.find('.col-price-value').text(updated.price_value);
                            row.find('.col-kg-unload').text(updated.kg_unload);
                            row.find('.col-liquid-density').text(updated.liquid_density);
                            row.find('.col-gas-weight').text(updated.gas_weight);
                            row.find('.col-pcs-ghv').text(updated.pcs_ghv);

                            \$qtyModal.modal('hide');
                            //  Reset tracking
                            originalData = getFormData(\$qtyForm);

                            row.addClass('table-success');
                            \$('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => row.removeClass('table-success'), 2500);
                        } else {
                            \$(\".invalid-feedback\").remove();
                            if (response.errors) {
                                \$.each(response.errors, (field, message) => {
                                    const input = \$(\"[name='\" + field + \"']\");
                                    input.removeClass(\"is-valid\").addClass(\"is-invalid\");
                                    input.closest(\".form-group\").find(\".error-placeholder\")
                                         .html('<div class=\"invalid-feedback\">' + message + '</div>');
                                });
                            }
                        }
                    },
                    error: xhr => console.error(xhr.responseText)
                });
                return false;
            },
            success: (label, el) => {
                \$(el).removeClass(\"is-invalid\").addClass(\"is-valid\");
                \$(el).closest(\".form-group\").find(\".error-placeholder\").empty();
            }
        });

        \$qtyModal.on('focus', '.form-control', function() {
            \$(this).addClass('input-focused');                                  // Blue border while typing
            \$(this).removeClass('is-invalid is-valid');                         // Remove validation styles while focused
            /*\$(this).closest(\".form-group\").find(\".error-placeholder\").empty();  // hide error*/
        }).on('blur', '.form-control', function() {
            \$(this).removeClass('input-focused');                               // Remove blue border
            \$qtyForm.validate().element(this);
        });
    }

//  =========================== Toggle Price Typology ===========================
    let switched = false;
    function togglePriceValueField() {
        const \$pv = \$('#price_value');
        const typology = \$('#price_typology').val();

            if (typology === 'no') {
                switched = true;
                \$pv.val(0)
                   .prop('disabled', true)
                   .removeClass('is-valid is-invalid')
                   .closest('.form-group')
                   .find('.error-placeholder').empty();
            } else {
                \$pv.prop('disabled', false)
                   .removeClass('is-valid is-invalid')
                   .closest('.form-group')
                   .find('.error-placeholder').empty();

                   if (switched) \$pv.val('');
                   switched = false;
                   \$pv.trigger('input');
            }
    }
    \$('#price_typology').on('change', togglePriceValueField);
    \$qtyModal.on('shown.bs.modal', () => {
        togglePriceValueField();
    })

            /*if (typology !== 'yes') {
                switched = true;
                \$pv.val(0).prop('disabled', true).removeClass('is-valid is-invalid')
                    .closest('.form-group').find('.error-placeholder').empty();
            } else {
                \$pv.prop('disabled', false).removeClass('is-valid is-invalid')
                    .closest('.form-group').find('.error-placeholder').empty();
                if (switched) \$pv.val('');
                switched = false;
                \$pv.trigger('input');
            }
    }
    \$('#price_typology').on('change', togglePriceValueField);*/

//  =========================== Modal Reset Handlers =============== ============
    \$('#editTransModal, #editQtyModal').on('hidden.bs.modal', function () {
        const dp = \$(this).find('.datepicker');
        const \$form = \$(this).find('form');
            
            dp.datepicker('clearDates').val('');
            \$form[0].reset();
            \$form.validate().resetForm();
            \$form.find('.is-invalid, .is-valid').removeClass('is-invalid is-valid');
        
        if (this.id === 'editQtyModal') switched = false;
    });
//  Normalize date input on focusout
    \$('#date_load, #date_unload').on('focusout', function () {
        const val = \$(this).val().trim();
            if (!val) return;
        const dt = parseAnyDate(val);
        \$(this).val(dt ? formatToDMY(dt) : '');
    });

//  ===================== Modal Population with Data =====================
//  Transport modal population on edit click
    \$(document).off('click', '.updateTrans').on('click', '.updateTrans', function () {
        const id = \$(this).data('id');
        \$.post('get-transport', { action: 'getTransportData', id_transport: id, csrf_token: csrfToken }, response => {
            if (response.success) {
                const t = response.transport;
                    \$transModal.find('#id_transport').val(t.id_transport);
                    \$transModal.find('#slot').val(t.slot.toUpperCase());
                    \$transModal.find('#cmr').val(t.cmr.toUpperCase());
                    \$transModal.find('#issuer').val(t.issuer.toUpperCase());
                    \$transModal.find('#supplier').val(t.supplier.toUpperCase());
                    \$transModal.find('#transport').val(t.transport.toUpperCase());
                    \$transModal.find('#date_load').val(t.date_load);
                    \$transModal.find('#date_unload').val(t.date_unload);
                    \$transModal.find('#container').val(t.container.toUpperCase());

                    \$transModal.find('#original_slot').val(t.slot.toUpperCase());
                    \$transModal.find('#original_cmr').val(t.cmr.toUpperCase());
                \$transModal.modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });
//  Quantity modal population on edit click
    \$(document).off('click', '.updateQty').on('click', '.updateQty', function () {
        const id = \$(this).data('id');
        \$.post('get-quantity', { action: 'getQuantityData', id_transport: id, csrf_token: csrfToken }, response => {
            if (response.success) {
                const q = response.quantity;
                    \$qtyModal.find('#id_transport').val(q.id_transport);
                    \$qtyModal.find('#id_quantity').val(q.id_quantity);
                    \$qtyModal.find('#kg_load').val(q.kg_load);
                    \$qtyModal.find('#cooling').val(q.cooling);
                    \$qtyModal.find('#price_typology').val(q.price_typology);
                    \$qtyModal.find('#price_value').val(q.price_value);
                    \$qtyModal.find('#kg_unload').val(q.kg_unload);
                    \$qtyModal.find('#liquid_density').val(q.liquid_density);
                    \$qtyModal.find('#gas_weight').val(q.gas_weight);
                    \$qtyModal.find('#pcs_ghv').val(q.pcs_ghv);
                \$qtyModal.modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });
//  Slot and CMR uniqueness live check inside edit transport modal
    \$('#editTransModal input[name=\"slot\"], #editTransModal input[name=\"cmr\"]').off('change').on('change', function () {
        const \$input = \$(this);
        const field = \$input.attr('name');
        const value = \$input.val().trim();
        const id = \$('#editTransModal input[name=\"id_transport\"]').val();
        const validator = \$transForm.validate();                    // Run local validation first

            if (!validator.element(\$input)) {
                return;
            }

        \$.post('check-transport', { field, value, id_transport: id, csrf_token: csrfToken }, function (response) {
            const \$errorDiv = \$input.closest('.form-group').find('.error-placeholder');

                if (response.success === false && response.message) {
                    \$input.removeClass('is-valid').addClass('is-invalid');
                    \$errorDiv.html(`<div class=\"invalid-feedback\">\${response.message}</div>`);
                } else {
                    \$input.removeClass('is-invalid').addClass('is-valid');
                    \$errorDiv.empty();
                }
        }, 'json'); 
    });


//  Delete all partials modal 
    /*\$(document).off('click', '.deleteParts').on('click', '.deleteParts', function () {
        const id = \$(this).data('id');
        const slot = \$(this).data('slot');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$(\"#deletePartsModal #id_transport\").val(id);
        \$(\"#deletePartsModal #slot-placeholder\").text(slot);
        /*const id = \$(this).data('id');
        \$.post('partials-delete', { action: 'getQuantityData', id_transport: id, csrf_token: csrfToken }, response => {
            if (response.success) {
                const q = response.quantity;
                    \$qtyModal.find('#id_transport').val(q.id_transport);
                    \$qtyModal.find('#id_quantity').val(q.id_quantity);
                    \$qtyModal.find('#kg_load').val(q.kg_load);
                    \$qtyModal.find('#cooling').val(q.cooling);
                    \$qtyModal.find('#price_typology').val(q.price_typology);
                    \$qtyModal.find('#price_value').val(q.price_value);
                    \$qtyModal.find('#kg_unload').val(q.kg_unload);
                    \$qtyModal.find('#liquid_density').val(q.liquid_density);
                    \$qtyModal.find('#gas_weight').val(q.gas_weight);
                    \$qtyModal.find('#pcs_ghv').val(q.pcs_ghv);
                \$qtyModal.modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');*/
    /*});*/

//  Initialize validation
    initValidation();
//  Initialize Save button enable/disable tracking
    initFormChangeTracking(\$transModal, \$transForm, \$transModal.find('button[type=\"submit\"]'));
    initFormChangeTracking(\$qtyModal, \$qtyForm, \$qtyModal.find('button[type=\"submit\"]'));
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
        return "transports.twig";
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
        return array (  303 => 126,  296 => 125,  287 => 119,  280 => 118,  271 => 112,  265 => 107,  259 => 102,  252 => 101,  247 => 98,  243 => 97,  236 => 92,  233 => 91,  231 => 88,  230 => 87,  228 => 86,  225 => 85,  223 => 83,  222 => 82,  221 => 81,  219 => 80,  216 => 79,  214 => 76,  213 => 75,  211 => 74,  209 => 73,  206 => 72,  202 => 69,  199 => 68,  196 => 67,  193 => 66,  190 => 65,  187 => 64,  184 => 63,  182 => 62,  179 => 61,  175 => 58,  173 => 57,  170 => 56,  166 => 53,  153 => 44,  142 => 38,  131 => 32,  122 => 25,  118 => 23,  116 => 22,  113 => 21,  111 => 20,  108 => 19,  106 => 18,  100 => 14,  96 => 11,  94 => 10,  85 => 9,  78 => 5,  76 => 4,  69 => 3,  56 => 2,  45 => 1,);
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
    {% include 'shared/transports-navigation.twig' %}

<section class=\"col-12 m-auto\">
    {# Table Caption #}
    <div class=\"card platform-caption\">
        <div class=\"card-header d-flex align-items-start border-0 my-1\">
            <button class=\"dropdown-toggle mb-1 platform-btn\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">                
                <span class=\"p-1 my-auto\" style=\"font-size: 1.6rem\">
                    {% if type is null %}
                        TUTTI TRASPORTI
                    {% elseif type == 'F' %}
                        TRASPORTI PIENI
                    {% elseif type == 'P' %}
                        TRASPORTI PARZIALI
                    {% endif %}
                </span>
            </button>

            <ul class=\"dropdown-menu\">
                <li class=\"dropdown-header\"> <h5> ◦ TRASPORTI ◦ </h5> </li>      
                    <li> <hr class=\"dropdown-divider\"> </li>

                <li> <a class=\"dropdown-item {% if type is null %}active{% endif %}\" style=\"text-align: center\" 
                        href=\"javascript:void(0);\" data-type=\"all\"> 
                        Tutti </a>
                </li>            
                    <li> <hr class=\"dropdown-divider\"> </li>
                
                <li> <a class=\"dropdown-item {% if type == 'F' %}active{% endif %}\" style=\"text-align: center\" 
                        href=\"javascript:void(0);\" data-type=\"F\"> 
                        Pieni </a>
                </li>       
                    <li> <hr class=\"dropdown-divider\"> </li>
                
                <li> <a class=\"dropdown-item {% if type == 'P' %}active{% endif %}\" style=\"text-align: center\" 
                        href=\"javascript:void(0);\" data-type=\"P\"> 
                        Parziali </a>
                </li>
            </ul>
        </div>
    </div>

    {# Tables #}
    <div class=\"d-flex justify-content-center table-responsive\">          
        <table class=\"table table-hover text-center platform\" id=\"transports-table\">
            {# Table Head #}
            <thead id=\"transport-head\">
                {% include 'shared/transports-head.twig' %}
            </thead>

            {# Table Body #}
            <tbody id=\"transport-tbody\" class=\"table-group-divider transport-row-group\">
                {% if type == 'F' %}
                    {% include 'transports-full-ajax.twig' with { show_type: false } %}
                {% elseif type == 'P' %}
                    {% include 'transports-part-ajax.twig' with { show_type: false } %}
                {% else %}
                    {% include 'transports-ajax.twig' with { show_type: true } %}
                {% endif %}
            </tbody>

            {# Table Footer #}
            <tfoot id=\"transport-tfoot\">
                {% if type == 'F' %}
                    {% include 'shared/pagination.twig' with {
                        page: page,
                        csrf_token: csrfToken,
                        show_type: false
                    } %}
                {% elseif type == 'P' %}
                    {% include 'shared/pagination.twig' with {
                        page: page,
                        srf_token: csrfToken,
                        show_type: type is null
                    } %}
                {% else %}
                    {% include 'shared/pagination.twig' with {
                        page: page,
                        csrf_token: csrfToken,
                        show_type: true 
                    } %}
                {% endif %}
            </tfoot>
        </table>
    </div>    
</section> 

<input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\">
    {% include 'transport-modals.twig' %}
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
\$(function () {
    \$('.updateQty').on('click', function() {
        \$('.updateQty').removeClass('active');                  // Remove active from all buttons first
        \$(this).addClass('active');                             // Add active to clicked button
        \$('#editQtyModal').data('trigger', this);               // Store this button in modal
    });

    \$('#editQtyModal').on('hidden.bs.modal', function() {
        var btn = \$(this).data('trigger');                      // Find the button that triggered the modal
            if (btn) {
                \$(btn).removeClass('active');                   // Remove active class
                \$(btn).blur();                                  // Remove focus so :focus styles go away
                \$(this).removeData('trigger');                  // Clean up stored reference
            }       
    });

//  ==================== Collapse Btn and Dropdown Menu ====================
    \$(document).on('shown.bs.collapse', '.collapse', function () {
        let targetId = \$(this).attr('id');
        \$(`[data-bs-target=\"#\${targetId}\"]`).attr('aria-expanded', 'true');
    });
    \$(document).on('hidden.bs.collapse', '.collapse', function () {
        let targetId = \$(this).attr('id');
        \$(`[data-bs-target=\"#\${targetId}\"]`).attr('aria-expanded', 'false');
    });
    \$(document).on('click', '.collapse-btn', function() {
        var \$icon = \$(this).find('i.icon-plus');

        \$icon.css({opacity: 0, transform: 'scale(0.5)'});        // Smooth fade-out
        setTimeout(function() {                                  // After short delay, swap icon and fade-in
            \$icon.toggleClass('bi-plus-lg bi-dash-lg');
            \$icon.css({opacity: 1, transform: 'scale(1)'});
        }, 350);                                                 // 100ms for smooth transition
    });
    \$('.dropdown-item').on('click', function(e) {
        e.preventDefault();
        \$('.dropdown-item').removeClass('active');               // Remove active from all items and set active on clicked
        \$(this).addClass('active');

        let csrfToken = \$('input[name=\"csrf_token\"]').val();     // Send AJAX request to update tbody (optional)
        let type = \$(this).data('type');                         // Update dropdown button title
        let title = '';
            switch(type) {
                case 'all':
                    title = 'TUTTI TRASPORTI';
                    type = '';                                   // Send null to server
                        break;
                case 'F':
                    title = 'TRASPORTI PIENI';
                        break;
                case 'P':
                    title = 'TRASPORTI PARZIALI';
                        break;
            }
        \$(this).closest('.card-header').find('span').text(title);       

        \$.ajax({
            url: 'pagination', 
            type: 'POST',
            data: { 
                type: type,
                page: 1,
                csrf_token: csrfToken
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    \$('#transport-tbody').html(response.tbody);
                    \$('#transport-tfoot').html(response.pagination);
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert('Error loading transports. Please reload the page.');
            }
        });
    });

//  ============ Cache modal, form and buttons ============
    const csrfToken  = \$('input[name=\"csrf_token\"]').val();

    const \$transModal = \$('#editTransModal');                     
    const \$qtyModal  = \$('#editQtyModal');

    const \$transForm = \$('#transport-edit');                      
    const \$qtyForm   = \$('#quantity-edit');
    const \$partForm  = \$('#partial-edit');
    
    let originalData = {};                                       //  Global originalData for resetting form on modal hide and updating after submit

//  ============================= Utilities =============================
//  Utility: get form data as { name: value }
    function getFormData(\$form) {
        const data = {};
            \$form.serializeArray().forEach(f => {
                let val = f.value.trim();
                    if (/^\\d+(,|\\.)\\d+\$/.test(val)) {            //  Normalize comma to dot for decimals
                        val = val.replace(',', '.');
                    }
                data[f.name] = val;
            });
        return data;
    }
//  Utility: compare two form data objects
    function isFormChanged(original, current) {
        return Object.keys(current).some(key => current[key] !== original[key]);
    }
//  Utility: reset form inputs to original values, clear errors
    function resetFormToOriginal(\$form) {
        for (const [k, v] of Object.entries(originalData)) {
            \$form.find(`[name=\"\${k}\"]`).val(v);
        }
    }
//  On modal hide, reset form if changed
    \$('#editTransModal, #editQtyModal').on('hide.bs.modal', function () {
        const \$form = \$(this).find('form');
        const currentData = getFormData(\$form);
            if (isFormChanged(originalData, currentData)) {
                resetFormToOriginal(\$form);
            }
    });
//  Utility: update global originalData after successful AJAX submit
    function updateOriginalDataFromResponse(data) {
        if (!data) return;
        Object.keys(data).forEach(k => originalData[k] = data[k]);
    }

//  =========== Change detection and Save button enable/disable ===========
//  Initialize form change tracking per modal and form
    function initFormChangeTracking(\$modal, \$form, \$saveBtn) {
        let modalOriginalData = {};

    //  On modal show: cache original form data & disable Save button
        \$modal.on('show.bs.modal', function () {
            modalOriginalData = getFormData(\$form);
            \$saveBtn.prop('disabled', true);
        });
    //  On any input or change, enable Save if form changed
        \$form.on('input change', ':input', function () {
            const currentData = getFormData(\$form);
                if (isFormChanged(modalOriginalData, currentData)) {
                    \$saveBtn.prop('disabled', false);
                } else {
                    \$saveBtn.prop('disabled', true);
                }
        });
    }

//  =========================== Date formatting ===========================
    function formatToDMY(date) {
        const d = String(date.getDate()).padStart(2, '0');
        const m = String(date.getMonth() + 1).padStart(2, '0');
            return `\${d}-\${m}-\${date.getFullYear()}`;
    }
//  Parse date with multiple separators and formats 
    function parseAnyDate(dateStr) {
        if (!dateStr) return null;
        const norm = dateStr.replace(/[./]/g, '-').trim();
        const parts = norm.split('-');
            if (parts.length !== 3) return null;

        let d, m, y;
            if (parts[0].length === 4) {    // yyyy-mm-dd
                y = +parts[0];
                m = +parts[1] - 1;
                d = +parts[2];
            } else {                        // dd-mm-yyyy
                d = +parts[0];
                m = +parts[1] - 1;
                y = +parts[2];
            }

        const dt = new Date(y, m, d);
        return (dt.getFullYear() === y && dt.getMonth() === m && dt.getDate() === d) ? dt : null;
    }

//  ============================ Initialization ============================
//  Initialize datepicker and validation for both forms
    function initValidation() {
        const minDate = new Date(2006, 0, 1); // 01-01-2006
        const today = new Date();

    //  Datepicker init (both forms)
        \$('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            endDate: today,
            autoclose: true,
            clearBtn: false,
            todayBtn: 'linked',               
            todayHighlight: true,         
            startView: 0
        }).on('changeDate', function (e) {
            \$(this).trigger('change');                                          // Validator catches the value
                if (this.id === 'date_load') {
                    \$('#date_unload').datepicker('setStartDate', e.date);
                }
                \$(this).valid();
        }).on('show', function () {
            \$(this).data('selectedDate', \$(this).val());                        // Store current value when datepicker opens
        }).on('hide', function (e) {
            const currentVal = \$(this).val();                                   // If the user didn't select anything and just clicked out, preserve current value
                if (!currentVal) {
                    const storedDate = \$(this).data('selectedDate');
                        if (storedDate) {
                            \$(this).val(storedDate);                            // Restore value
                        }
                }
        });

    //  Validation Rule: validate format & real date 
        \$.validator.addMethod(\"validDate\", function (value) {
            return parseAnyDate(value) !== null;
        });
    //  Validation Rule: min date >= 01-01-2006 
        \$.validator.addMethod(\"minDate2006\", function (value) {
            const date = parseAnyDate(value);
                if (!date) return false;
            return date >= minDate;
        });
    //  Validation Rule: no future dates 
        \$.validator.addMethod(\"noFutureDate\", function (value) {
            const date = parseAnyDate(value);
                if (!date) return false;
            return date <= today;
        });
    //  Validation Rule: unload <= load 
        \$.validator.addMethod(\"unloadAfterLoad\", function (value, element) {
            const dateUnload = parseAnyDate(value);
            const dateLoad = parseAnyDate(\$(\"#date_load\").val());
                if (!dateUnload || !dateLoad) return true;                      // Other rules will catch invalids
            return dateUnload >= dateLoad;
        });

    //  Transport Form Validation
        \$transForm.validate({
            onkeyup: false,
            onfocusin: false,
            onfocusout: function(el) { this.element(el); }, /*el => \$(el).valid(), /*el => \$transForm.validate().element(el),*/   
            rules: {
                slot: { required: true, rangelength: [5, 35], pattern: \"^[A-Za-z0-9_]+\$\" },
                cmr: { required: true, rangelength: [5, 35], pattern: \"^[A-Za-z0-9\\\\-]+\$\" },
                issuer: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
                supplier: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
                transport: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
                date_load: { required: true, validDate: true, noFutureDate: true, minDate2006: true },
                date_unload: { required: true, validDate: true, noFutureDate: true, minDate2006: true, unloadAfterLoad: true },
                container: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" }
            },
            messages: {
                slot: {
                    required: \"Campo obbligatorio.\",
                    rangelength: \"Usare almeno 5 e al massimo 35 caratteri.\",
                    pattern: \"Slot ID può contenere lettere, numeri e underscore (_). Spazi non consentiti.\"
                },
                cmr: {
                    required: \"Campo obbligatorio.\",
                    rangelength: \"Usare almeno 5 e al massimo 35 caratteri.\",
                    pattern: \"CMR può contenere lettere, numeri e trattini (-). Spazi non consentiti.\"
                },
                issuer: {
                    required: \"Campo obbligatorio.\",
                    rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                    pattern: \"Emittente può contenere solo lettere e spazi (senza spazio iniziale).\"
                },
                supplier: {
                    required: \"Campo obbligatorio.\",
                    rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                    pattern: \"Fornitore può contenere solo lettere e spazi (senza spazio iniziale).\"
                },
                transport: {
                    required: \"Campo obbligatorio.\",
                    rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                    pattern: \"Trasporto può contenere solo lettere e spazi (senza spazio iniziale).\"
                },
                date_load: {
                    required: \"Campo obbligatorio.\",
                    validDate: \"Inserire una data valida.\",
                    noFutureDate: \"Inserire una data valida. Non sono permesse date future.\",
                    minDate2006: \"Inserire una data valida. Non sono permesse date precedenti al 2006.\"
                },
                date_unload: {
                    required: \"Campo obbligatorio.\",
                    validDate: \"Inserire una data valida.\",
                    noFutureDate: \"Inserire una data valida. Non sono permesse date future.\",
                    minDate2006: \"Inserire una data valida. Non sono permesse date precedenti al 2006.\",
                    unloadAfterLoad: \"La data di scarico non può essere precedente alla data di carico.\"
                },
                container: {
                    required: \"Campo obbligatorio.\",
                    rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                    pattern: \"Container può contenere solo lettere e spazi (senza spazio iniziale).\"
                }
            },
            errorPlacement: (error, el) => {
                error.addClass(\"text-danger small\");
                el.removeClass(\"is-valid\").addClass(\"is-invalid\");
                el.closest(\".form-group\").find(\".error-placeholder\").html(error);
            },
            highlight: el => \$(el).removeClass('is-valid').addClass('is-invalid'),
            unhighlight: el => \$(el).removeClass('is-invalid').closest('.form-group').find('.error-placeholder').empty(),
            submitHandler: function (form) {
                \$.ajax({
                    url: 'transport-edit',
                    type: 'POST',
                    data: \$transForm.serialize(),
                    dataType: 'json',
                    success: response => {
                        if (response.success) {
                            updateOriginalDataFromResponse(response.edited);
                            \$transModal.modal('hide');

                            const edited = response.edited;
                            const row = \$('#id-' + edited.id_transport);

                            row.find('.col-slot').text(edited.slot);
                            row.find('.col-cmr').text(edited.cmr);
                            row.find('.col-issuer').text(edited.issuer);
                            row.find('.col-supplier').text(edited.supplier);
                            row.find('.col-transport').text(edited.transport);
                            row.find('.col-load').text(edited.date_load);
                            row.find('.col-unload').text(edited.date_unload);
                            row.find('.col-container').text(edited.container);
                            row.find('.col-univoco').text(edited.univoco);
                            row.find('.col-month-load').text(edited.id_month_load);
                            row.find('.col-week-unload').text(edited.week_unload);
                            row.find('.col-month-unload').text(`\${edited.id_month_unload} - \${edited.month_unload}`);

                            row.removeClass('full-row partial-row').addClass('table-success');
                            \$('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => { row.removeClass('table-success');
                                if (edited.type == 'F') {
                                    row.addClass('full-row');
                                } else {
                                    row.addClass('partial-row');
                                }
                            }, 2500);
                        } else {
                            \$(\".invalid-feedback\").remove();
                            if (response.errors) {
                                \$.each(response.errors, (field, message) => {
                                    const input = \$(\"[name='\" + field + \"']\");
                                    input.removeClass(\"is-valid\").addClass(\"is-invalid\");
                                    input.closest(\".form-group\").find(\".error-placeholder\")
                                        .html('<div class=\"invalid-feedback\">' + message + '</div>');
                                });
                            }
                        }
                    },
                    error: xhr => console.error(xhr.responseText)
                });
                return false;
            },
            success: (label, el) => {
                \$(el).removeClass(\"is-invalid\").addClass(\"is-valid\");
                \$(el).closest(\".form-group\").find(\".error-placeholder\").empty();
            }
        });

        \$transModal.on('focus', '.form-control', function() {
            \$(this).addClass('input-focused');                                  // Blue border while typing
            \$(this).removeClass('is-invalid is-valid');                         // Remove validation styles while focused
            /*\$(this).closest(\".form-group\").find(\".error-placeholder\").empty();  // hide error*/
        }).on('blur', '.form-control', function() {
            \$(this).removeClass('input-focused');                               // Remove blue border
            \$transForm.validate().element(this);
        });

    //  Quantity Form Validation
        \$qtyForm.validate({
            onkeyup: false,
            onfocusin: false,
            onfocusout: el => \$(el).valid(),
            rules: {
                kg_load: { required: true, number: true, min: 0 },
                cooling: { required: true, digits: true },
                price_typology: { required: true },
                price_value: { 
                    required: {
                        function() {
                            return \$('#price_typology').val() !== 'no';
                        }
                    },
                    digits: true,
                    min: 1
                },
                kg_unload: { required: true, number: true, min: 0 },
                liquid_density: { required: true, number: true, min: 0 },
                gas_weight: { required: true, number: true, min: 0 },
                pcs_ghv: { required: true, number: true, min: 0 }
            },
            messages: {
                kg_load: {
                    required: \"Campo obbligatorio.\",
                    number: \"Quantità caricata deve essere un numero positivo (intero o decimale).\",
                    min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
                },
                cooling: {
                    required: \"Campo obbligatorio.\",
                    digits: \"Raffredamento deve essere un numero intero positivo, senza segni o decimali.\"
                },
                price_typology: {
                    required: \"Campo obbligatorio.\"
                }, 
                price_value: {
                    required: \"Campo obbligatorio.\",
                    digits: \"Valore costo extra deve essere un numero intero positivo maggiore o uguale a 1, senza segni o decimali.\",
                    min: \"Il valore minimo deve essere maggiore o uguale a 1.\"
                }, 
                kg_unload: {
                    required: \"Campo obbligatorio.\",
                    number: \"Quantità scaricata deve essere un numero positivo (intero o decimale).\",
                    min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
                },
                liquid_density: {
                    required: \"Campo obbligatorio.\",
                    number: \"Densità liquido deve essere un numero positivo (intero o decimale).\",
                    min: \"Il valore minimo deve essere maggiore o uguale a 0.\",
                }, 
                gas_weight: {
                    required: \"Campo obbligatorio.\",
                    number: \"Peso specifico (gas) deve essere un numero positivo (intero o decimale).\",
                    min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
                }, 
                pcs_ghv: {
                    required: \"Campo obbligatorio.\",
                    number: \"PCS/GHV deve essere un numero positivo (intero o decimale).\",
                    min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
                }
            },
            errorPlacement: (error, el) => {
                error.addClass(\"text-danger small\");
                el.removeClass(\"is-valid\").addClass(\"is-invalid\");
                el.closest(\".form-group\").find(\".error-placeholder\").html(error);
            },
            highlight: el => \$(el).removeClass('is-valid').addClass('is-invalid'),
            unhighlight: el => \$(el).removeClass('is-invalid').closest('.form-group').find('.error-placeholder').empty(),
            submitHandler: form => {
                \$.ajax({
                    url: 'quantity-edit',
                    type: 'POST',
                    data: \$qtyForm.serialize(),
                    dataType: 'json',
                    success: response => {
                        if (response.success) {
                            updateOriginalDataFromResponse(response.updated);
                            \$qtyModal.modal('hide');

                            const updated = response.updated;
                            const row = \$('#qty-table-' + updated.id_transport);

                            row.find('.col-kg-load').text(updated.kg_load);
                            row.find('.col-cooling').text(updated.cooling);
                            row.find('.col-price-typology').text(updated.price_typology);
                            row.find('.col-price-value').text(updated.price_value);
                            row.find('.col-kg-unload').text(updated.kg_unload);
                            row.find('.col-liquid-density').text(updated.liquid_density);
                            row.find('.col-gas-weight').text(updated.gas_weight);
                            row.find('.col-pcs-ghv').text(updated.pcs_ghv);

                            \$qtyModal.modal('hide');
                            //  Reset tracking
                            originalData = getFormData(\$qtyForm);

                            row.addClass('table-success');
                            \$('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => row.removeClass('table-success'), 2500);
                        } else {
                            \$(\".invalid-feedback\").remove();
                            if (response.errors) {
                                \$.each(response.errors, (field, message) => {
                                    const input = \$(\"[name='\" + field + \"']\");
                                    input.removeClass(\"is-valid\").addClass(\"is-invalid\");
                                    input.closest(\".form-group\").find(\".error-placeholder\")
                                         .html('<div class=\"invalid-feedback\">' + message + '</div>');
                                });
                            }
                        }
                    },
                    error: xhr => console.error(xhr.responseText)
                });
                return false;
            },
            success: (label, el) => {
                \$(el).removeClass(\"is-invalid\").addClass(\"is-valid\");
                \$(el).closest(\".form-group\").find(\".error-placeholder\").empty();
            }
        });

        \$qtyModal.on('focus', '.form-control', function() {
            \$(this).addClass('input-focused');                                  // Blue border while typing
            \$(this).removeClass('is-invalid is-valid');                         // Remove validation styles while focused
            /*\$(this).closest(\".form-group\").find(\".error-placeholder\").empty();  // hide error*/
        }).on('blur', '.form-control', function() {
            \$(this).removeClass('input-focused');                               // Remove blue border
            \$qtyForm.validate().element(this);
        });
    }

//  =========================== Toggle Price Typology ===========================
    let switched = false;
    function togglePriceValueField() {
        const \$pv = \$('#price_value');
        const typology = \$('#price_typology').val();

            if (typology === 'no') {
                switched = true;
                \$pv.val(0)
                   .prop('disabled', true)
                   .removeClass('is-valid is-invalid')
                   .closest('.form-group')
                   .find('.error-placeholder').empty();
            } else {
                \$pv.prop('disabled', false)
                   .removeClass('is-valid is-invalid')
                   .closest('.form-group')
                   .find('.error-placeholder').empty();

                   if (switched) \$pv.val('');
                   switched = false;
                   \$pv.trigger('input');
            }
    }
    \$('#price_typology').on('change', togglePriceValueField);
    \$qtyModal.on('shown.bs.modal', () => {
        togglePriceValueField();
    })

            /*if (typology !== 'yes') {
                switched = true;
                \$pv.val(0).prop('disabled', true).removeClass('is-valid is-invalid')
                    .closest('.form-group').find('.error-placeholder').empty();
            } else {
                \$pv.prop('disabled', false).removeClass('is-valid is-invalid')
                    .closest('.form-group').find('.error-placeholder').empty();
                if (switched) \$pv.val('');
                switched = false;
                \$pv.trigger('input');
            }
    }
    \$('#price_typology').on('change', togglePriceValueField);*/

//  =========================== Modal Reset Handlers =============== ============
    \$('#editTransModal, #editQtyModal').on('hidden.bs.modal', function () {
        const dp = \$(this).find('.datepicker');
        const \$form = \$(this).find('form');
            
            dp.datepicker('clearDates').val('');
            \$form[0].reset();
            \$form.validate().resetForm();
            \$form.find('.is-invalid, .is-valid').removeClass('is-invalid is-valid');
        
        if (this.id === 'editQtyModal') switched = false;
    });
//  Normalize date input on focusout
    \$('#date_load, #date_unload').on('focusout', function () {
        const val = \$(this).val().trim();
            if (!val) return;
        const dt = parseAnyDate(val);
        \$(this).val(dt ? formatToDMY(dt) : '');
    });

//  ===================== Modal Population with Data =====================
//  Transport modal population on edit click
    \$(document).off('click', '.updateTrans').on('click', '.updateTrans', function () {
        const id = \$(this).data('id');
        \$.post('get-transport', { action: 'getTransportData', id_transport: id, csrf_token: csrfToken }, response => {
            if (response.success) {
                const t = response.transport;
                    \$transModal.find('#id_transport').val(t.id_transport);
                    \$transModal.find('#slot').val(t.slot.toUpperCase());
                    \$transModal.find('#cmr').val(t.cmr.toUpperCase());
                    \$transModal.find('#issuer').val(t.issuer.toUpperCase());
                    \$transModal.find('#supplier').val(t.supplier.toUpperCase());
                    \$transModal.find('#transport').val(t.transport.toUpperCase());
                    \$transModal.find('#date_load').val(t.date_load);
                    \$transModal.find('#date_unload').val(t.date_unload);
                    \$transModal.find('#container').val(t.container.toUpperCase());

                    \$transModal.find('#original_slot').val(t.slot.toUpperCase());
                    \$transModal.find('#original_cmr').val(t.cmr.toUpperCase());
                \$transModal.modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });
//  Quantity modal population on edit click
    \$(document).off('click', '.updateQty').on('click', '.updateQty', function () {
        const id = \$(this).data('id');
        \$.post('get-quantity', { action: 'getQuantityData', id_transport: id, csrf_token: csrfToken }, response => {
            if (response.success) {
                const q = response.quantity;
                    \$qtyModal.find('#id_transport').val(q.id_transport);
                    \$qtyModal.find('#id_quantity').val(q.id_quantity);
                    \$qtyModal.find('#kg_load').val(q.kg_load);
                    \$qtyModal.find('#cooling').val(q.cooling);
                    \$qtyModal.find('#price_typology').val(q.price_typology);
                    \$qtyModal.find('#price_value').val(q.price_value);
                    \$qtyModal.find('#kg_unload').val(q.kg_unload);
                    \$qtyModal.find('#liquid_density').val(q.liquid_density);
                    \$qtyModal.find('#gas_weight').val(q.gas_weight);
                    \$qtyModal.find('#pcs_ghv').val(q.pcs_ghv);
                \$qtyModal.modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });
//  Slot and CMR uniqueness live check inside edit transport modal
    \$('#editTransModal input[name=\"slot\"], #editTransModal input[name=\"cmr\"]').off('change').on('change', function () {
        const \$input = \$(this);
        const field = \$input.attr('name');
        const value = \$input.val().trim();
        const id = \$('#editTransModal input[name=\"id_transport\"]').val();
        const validator = \$transForm.validate();                    // Run local validation first

            if (!validator.element(\$input)) {
                return;
            }

        \$.post('check-transport', { field, value, id_transport: id, csrf_token: csrfToken }, function (response) {
            const \$errorDiv = \$input.closest('.form-group').find('.error-placeholder');

                if (response.success === false && response.message) {
                    \$input.removeClass('is-valid').addClass('is-invalid');
                    \$errorDiv.html(`<div class=\"invalid-feedback\">\${response.message}</div>`);
                } else {
                    \$input.removeClass('is-invalid').addClass('is-valid');
                    \$errorDiv.empty();
                }
        }, 'json'); 
    });


//  Delete all partials modal 
    /*\$(document).off('click', '.deleteParts').on('click', '.deleteParts', function () {
        const id = \$(this).data('id');
        const slot = \$(this).data('slot');
        const csrfToken = \$('input[name=\"csrf_token\"]').val(); 

        \$(\"#deletePartsModal #id_transport\").val(id);
        \$(\"#deletePartsModal #slot-placeholder\").text(slot);
        /*const id = \$(this).data('id');
        \$.post('partials-delete', { action: 'getQuantityData', id_transport: id, csrf_token: csrfToken }, response => {
            if (response.success) {
                const q = response.quantity;
                    \$qtyModal.find('#id_transport').val(q.id_transport);
                    \$qtyModal.find('#id_quantity').val(q.id_quantity);
                    \$qtyModal.find('#kg_load').val(q.kg_load);
                    \$qtyModal.find('#cooling').val(q.cooling);
                    \$qtyModal.find('#price_typology').val(q.price_typology);
                    \$qtyModal.find('#price_value').val(q.price_value);
                    \$qtyModal.find('#kg_unload').val(q.kg_unload);
                    \$qtyModal.find('#liquid_density').val(q.liquid_density);
                    \$qtyModal.find('#gas_weight').val(q.gas_weight);
                    \$qtyModal.find('#pcs_ghv').val(q.pcs_ghv);
                \$qtyModal.modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');*/
    /*});*/

//  Initialize validation
    initValidation();
//  Initialize Save button enable/disable tracking
    initFormChangeTracking(\$transModal, \$transForm, \$transModal.find('button[type=\"submit\"]'));
    initFormChangeTracking(\$qtyModal, \$qtyForm, \$qtyModal.find('button[type=\"submit\"]'));
});
</script>
{% endblock %}
", "transports.twig", "C:\\wamp64\\www\\liquimet\\templates\\transports.twig");
    }
}
