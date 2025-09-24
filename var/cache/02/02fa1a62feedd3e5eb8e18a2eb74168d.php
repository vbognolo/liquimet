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
/*   ____________________________________________
//  |                                            |
//  |          CACHE: MODAL, FORM, BTNS          |
//  |____________________________________________|
*/
    const csrfToken = \$('input[name=\"csrf_token\"]').val();

    const \$transModal = \$('#editTransModal');                     
    const \$transForm  = \$('#transport-edit');       

    const \$qtyModal = \$('#editQtyModal');              
    const \$qtyForm  = \$('#editQtyModal').find('#quantity-edit');

    const \$partModal = \$('#editPartModal'); 
    const \$partForm  = \$('#editPartModal').find('#partial-edit');
    
    let originalData = {};                                       //  Global originalData for resetting form on modal hide and updating after submit
    let switched     = false;
    let activeID     = null;
/*   ______________________________
//  |                              |
//  |          UTILITIES           |
//  |______________________________|
*/
//  Get form data as { name: value }
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
//  Compare 2 form data objects
    function isFormChanged(original, current) {
        for (const key in original) {
            if ((original[key] || '') !== (current[key] || '')) {
                return true;                                     // Changed
            }
        }
        return false;                                            // No change
    }
//  Reset form inputs to original values, clear errors
    function resetFormToOriginal(\$form) {
        for (const [k, v] of Object.entries(originalData)) {
            \$form.find(`[name=\"\${k}\"]`).val(v);
        }
    }
//  Update global originalData after successful AJAX submit
    function updateOriginalDataFromResponse(data) {
        if (!data) return;
        Object.keys(data).forEach(k => originalData[k] = data[k]);
    }
/*   ____________________________________
//  |                                    |
//  |          DATE FORMATTING           |
//  |____________________________________|
*/
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
/*   ____________________________________________________
//  |                                                    |
//  |          FORM CHANGE TRACKING INITIALIZER          |  Save btn enabled/disabled
//  |____________________________________________________|
*/
//  Initialize form change tracking per modal and form
    function initFormChangeTracking(\$modal, \$form, \$saveBtn) {
        let modalOriginalData = {};

    //  On modal show: cache original form data & disable Save button
        \$modal.on('show.bs.modal', function () {
            modalOriginalData = getFormData(\$form);
            \$saveBtn.prop('disabled', true);

        //  Ensure validator is clean
            if (\$form.data('validator')) {
                \$form.validate().resetForm();
            }
            \$form.find('.is-invalid, .is-valid').removeClass('is-invalid is-valid');
        });
    //  On any input or change, enable Save if form changed
        \$form.on('input change', ':input', function () {
            const currentData = getFormData(\$form);
            \$saveBtn.prop('disabled', !isFormChanged(modalOriginalData, currentData));
        });

    //  Return setter to update modalOriginalData externally (for AJAX-populated partial modal)
        return function(newData) {
            modalOriginalData = {...newData};
            \$saveBtn.prop('disabled', true);  // Reset save button state
        }
    }

    const setTransModalOriginalData = initFormChangeTracking(\$transModal, \$transForm, \$transModal.find('button[type=\"submit\"]'));
    const setQtyModalOriginalData   = initFormChangeTracking(\$qtyModal,   \$qtyForm,   \$qtyModal.find('button[type=\"submit\"]'));
    const setPartModalOriginalData  = initFormChangeTracking(\$partModal,  \$partForm,  \$partModal.find('button[type=\"submit\"]'));
/*   ______________________________________________
//  |                                              |
//  |          VALIDATION INITIALIZATION           |
//  |______________________________________________|
*/
//  Initialize datepicker and validation for both forms
    function initValidation() {
        const minDate = new Date(2006, 0, 1); // 01-01-2006
        const today = new Date();

    //  Datepicker init (all forms)
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
            onfocusout: function(el) { this.element(el); },
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
            submitHandler: function (form) {
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

                                function updateCell(selector, newValue) {
                                    const cell = row.find(selector);
                                    const oldValue = cell.text().trim();

                                        if (oldValue != newValue) {
                                            cell.text(newValue).addClass('table-success');
                                            \$('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                                            setTimeout(() => cell.removeClass('table-success'), 2500);
                                        }
                                }

                            updateCell('.col-kg-load', updated.kg_load);
                            updateCell('.col-cooling', updated.cooling);
                            updateCell('.col-price-typology', updated.price_typology);
                            updateCell('.col-price-value', updated.price_value);
                            updateCell('.col-kg-unload', updated.kg_unload);
                            updateCell('.col-liquid-density', updated.liquid_density);
                            updateCell('.col-gas-weight', updated.gas_weight);
                            updateCell('.col-pcs-ghv', updated.pcs_ghv);

                            originalData = getFormData(\$qtyForm);
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

            //  Partial Form Validation
        \$partForm.validate({
            onkeyup: false,
            onfocusin: false,
            onfocusout: function(el) { this.element(el); },
            rules: {
                destination: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
                exw: { required: true },
                date: { required: true },
                place: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
                q_unloaded: { required: true, number: true, min: 0 },
                invoice: { required: true, digits: true, min: 1 },
            },
            messages: {
                destination: {
                    required: \"Campo obbligatorio.\",
                    rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                    pattern: \"Destinazione può contenere solo lettere e spazi (senza spazio iniziale).\"
                },
                exw: {
                    required: \"Campo obbligatorio.\"
                },
                date: {
                    required: \"Campo obbligatorio.\"
                }, 
                place: {
                    required: \"Campo obbligatorio.\",
                    rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                    pattern: \"Fornitore può contenere solo lettere e spazi (senza spazio iniziale).\"
                }, 
                q_unloaded: {
                    required: \"Campo obbligatorio.\",
                    number: \"Quantità scaricata deve essere un numero positivo (intero o decimale).\",
                    min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
                },
                invoice: {
                    required: \"Campo obbligatorio.\",
                    digits: \"Fattura deve essere un numero intero positivo maggiore o uguale a 1, senza segni o decimali.\",
                    min: \"Il valore minimo deve essere maggiore o uguale a 1.\",
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
                    url: 'partial-edit',
                    type: 'POST',
                    data: \$partForm.serialize(),
                    dataType: 'json',
                    success: response => {
                        if (response.success) {
                            updateOriginalDataFromResponse(response.modified);
                            \$partModal.modal('hide');

                            const p = response.modified;
                            const row = \$('#part-table-' + p.id_transport);

                            row.find('.col-destination').text(p.destination);
                            row.find('.col-exw').text(p.exw);
                            row.find('.col-date').text(p.date);
                            row.find('.col-place').text(p.place);
                            row.find('.col-q-unloaded').text(p.q_unloaded);
                            row.find('.col-invoice').text(p.invoice);

                            originalData = getFormData(\$partForm);

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

        \$partModal.on('focus', '.form-control', function() {
            \$(this).addClass('input-focused');                                  // Blue border while typing
            \$(this).removeClass('is-invalid is-valid');                         // Remove validation styles while focused
            /*\$(this).closest(\".form-group\").find(\".error-placeholder\").empty();  // hide error*/
        }).on('blur', '.form-control', function() {
            \$(this).removeClass('input-focused');                               // Remove blue border
            \$partForm.validate().element(this);
        });
    }
/*   __________________________________________
//  |                                          |
//  |          TOGGLE PRICE TYPOLOGY           |
//  |__________________________________________|
*/
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



    // --- Click qty-btn ---
/*\$(document).off('click', '.qty-btn').on('click', '.qty-btn', function() {
    const \$btn = \$(this);
    \$('.qty-btn').removeClass('active');
    \$btn.addClass('active');
    activeID = \$btn.data('id');
    \$qtyModal.data('trigger', activeID);
});*/ 
/*   ___________________________________
//  |                                   |
//  |          INPUT BEHAVIOUR          |
//  |___________________________________|
*/
    \$('#price_typology').on('change', togglePriceValueField);
    \$qtyModal.on('shown.bs.modal', () => { togglePriceValueField(); })

//  Normalize date input on focusout
    \$('#date_load, #date_unload, #date').on('focusout', function () {
        const val = \$(this).val().trim();
            if (!val) return;
        const dt = parseAnyDate(val);
        \$(this).val(dt ? formatToDMY(dt) : '');
    });
/*   _____________________________________________________
//  |                                                     |
//  |          MODAL POPULATION WITH DATA (AJAX)          |
//  |_____________________________________________________|
*/
//  Transport Modal

//  Quantity Modal

//  Partial Modal
    \$(document).off('click', '.updatePart').on('click', '.updatePart', function () {
        const id = \$(this).data('id');
        \$.post('get-partial', { action: 'getPartialData', id_partial: id, csrf_token: csrfToken }, response => {
            if (response.success) {
                const p = response.partial;
                const \$dateInput = \$partModal.find('#date'); 
                    /*\$partModal.find('#id_transport').val(p.id_transport);*/
                    \$partModal.find('#id_partial').val(p.id_partial);
                    \$partModal.find('#destination').val(p.destination);
                    \$partModal.find('#exw').val('').trigger('change'); // Reset
                    \$partModal.find('#exw').val(p.exw).trigger('change');
                    /*\$partModal.find('#date').val(p.date);*/
                    \$partModal.find('#place').val(p.place);
                    \$partModal.find('#q_unloaded').val(p.q_unloaded);
                    \$partModal.find('#invoice').val(p.invoice);

                    \$dateInput.val('');  
                        if (p.date?.trim()) {
                            const parts = p.date.split('-'); // dd-mm-yyyy from server
                            const jsDate = new Date(parts[2], parts[1] - 1, parts[0]);
                            \$dateInput.datepicker('setDate', jsDate);
                        }
                    setPartModalOriginalData(getFormData(\$partForm));
                    \$partModal.modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });
/*   _____________________________________
//  |                                     |
//  |          EXISTENCE CHECKS           |
//  |_____________________________________|
*/
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
/*   ___________________________________
//  |                                   |
//  |          INITIALIZATION           |
//  |___________________________________|
*/
//  Initialize validation
    initValidation();
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
/*   ____________________________________________
//  |                                            |
//  |          CACHE: MODAL, FORM, BTNS          |
//  |____________________________________________|
*/
    const csrfToken = \$('input[name=\"csrf_token\"]').val();

    const \$transModal = \$('#editTransModal');                     
    const \$transForm  = \$('#transport-edit');       

    const \$qtyModal = \$('#editQtyModal');              
    const \$qtyForm  = \$('#editQtyModal').find('#quantity-edit');

    const \$partModal = \$('#editPartModal'); 
    const \$partForm  = \$('#editPartModal').find('#partial-edit');
    
    let originalData = {};                                       //  Global originalData for resetting form on modal hide and updating after submit
    let switched     = false;
    let activeID     = null;
/*   ______________________________
//  |                              |
//  |          UTILITIES           |
//  |______________________________|
*/
//  Get form data as { name: value }
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
//  Compare 2 form data objects
    function isFormChanged(original, current) {
        for (const key in original) {
            if ((original[key] || '') !== (current[key] || '')) {
                return true;                                     // Changed
            }
        }
        return false;                                            // No change
    }
//  Reset form inputs to original values, clear errors
    function resetFormToOriginal(\$form) {
        for (const [k, v] of Object.entries(originalData)) {
            \$form.find(`[name=\"\${k}\"]`).val(v);
        }
    }
//  Update global originalData after successful AJAX submit
    function updateOriginalDataFromResponse(data) {
        if (!data) return;
        Object.keys(data).forEach(k => originalData[k] = data[k]);
    }
/*   ____________________________________
//  |                                    |
//  |          DATE FORMATTING           |
//  |____________________________________|
*/
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
/*   ____________________________________________________
//  |                                                    |
//  |          FORM CHANGE TRACKING INITIALIZER          |  Save btn enabled/disabled
//  |____________________________________________________|
*/
//  Initialize form change tracking per modal and form
    function initFormChangeTracking(\$modal, \$form, \$saveBtn) {
        let modalOriginalData = {};

    //  On modal show: cache original form data & disable Save button
        \$modal.on('show.bs.modal', function () {
            modalOriginalData = getFormData(\$form);
            \$saveBtn.prop('disabled', true);

        //  Ensure validator is clean
            if (\$form.data('validator')) {
                \$form.validate().resetForm();
            }
            \$form.find('.is-invalid, .is-valid').removeClass('is-invalid is-valid');
        });
    //  On any input or change, enable Save if form changed
        \$form.on('input change', ':input', function () {
            const currentData = getFormData(\$form);
            \$saveBtn.prop('disabled', !isFormChanged(modalOriginalData, currentData));
        });

    //  Return setter to update modalOriginalData externally (for AJAX-populated partial modal)
        return function(newData) {
            modalOriginalData = {...newData};
            \$saveBtn.prop('disabled', true);  // Reset save button state
        }
    }

    const setTransModalOriginalData = initFormChangeTracking(\$transModal, \$transForm, \$transModal.find('button[type=\"submit\"]'));
    const setQtyModalOriginalData   = initFormChangeTracking(\$qtyModal,   \$qtyForm,   \$qtyModal.find('button[type=\"submit\"]'));
    const setPartModalOriginalData  = initFormChangeTracking(\$partModal,  \$partForm,  \$partModal.find('button[type=\"submit\"]'));
/*   ______________________________________________
//  |                                              |
//  |          VALIDATION INITIALIZATION           |
//  |______________________________________________|
*/
//  Initialize datepicker and validation for both forms
    function initValidation() {
        const minDate = new Date(2006, 0, 1); // 01-01-2006
        const today = new Date();

    //  Datepicker init (all forms)
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
            onfocusout: function(el) { this.element(el); },
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
            submitHandler: function (form) {
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

                                function updateCell(selector, newValue) {
                                    const cell = row.find(selector);
                                    const oldValue = cell.text().trim();

                                        if (oldValue != newValue) {
                                            cell.text(newValue).addClass('table-success');
                                            \$('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                                            setTimeout(() => cell.removeClass('table-success'), 2500);
                                        }
                                }

                            updateCell('.col-kg-load', updated.kg_load);
                            updateCell('.col-cooling', updated.cooling);
                            updateCell('.col-price-typology', updated.price_typology);
                            updateCell('.col-price-value', updated.price_value);
                            updateCell('.col-kg-unload', updated.kg_unload);
                            updateCell('.col-liquid-density', updated.liquid_density);
                            updateCell('.col-gas-weight', updated.gas_weight);
                            updateCell('.col-pcs-ghv', updated.pcs_ghv);

                            originalData = getFormData(\$qtyForm);
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

            //  Partial Form Validation
        \$partForm.validate({
            onkeyup: false,
            onfocusin: false,
            onfocusout: function(el) { this.element(el); },
            rules: {
                destination: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
                exw: { required: true },
                date: { required: true },
                place: { required: true, rangelength: [3, 50], pattern: \"^[A-Za-z][A-Za-z ]*\$\" },
                q_unloaded: { required: true, number: true, min: 0 },
                invoice: { required: true, digits: true, min: 1 },
            },
            messages: {
                destination: {
                    required: \"Campo obbligatorio.\",
                    rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                    pattern: \"Destinazione può contenere solo lettere e spazi (senza spazio iniziale).\"
                },
                exw: {
                    required: \"Campo obbligatorio.\"
                },
                date: {
                    required: \"Campo obbligatorio.\"
                }, 
                place: {
                    required: \"Campo obbligatorio.\",
                    rangelength: \"Usare almeno 3 e al massimo 50 caratteri.\",
                    pattern: \"Fornitore può contenere solo lettere e spazi (senza spazio iniziale).\"
                }, 
                q_unloaded: {
                    required: \"Campo obbligatorio.\",
                    number: \"Quantità scaricata deve essere un numero positivo (intero o decimale).\",
                    min: \"Il valore minimo deve essere maggiore o uguale a 0.\"
                },
                invoice: {
                    required: \"Campo obbligatorio.\",
                    digits: \"Fattura deve essere un numero intero positivo maggiore o uguale a 1, senza segni o decimali.\",
                    min: \"Il valore minimo deve essere maggiore o uguale a 1.\",
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
                    url: 'partial-edit',
                    type: 'POST',
                    data: \$partForm.serialize(),
                    dataType: 'json',
                    success: response => {
                        if (response.success) {
                            updateOriginalDataFromResponse(response.modified);
                            \$partModal.modal('hide');

                            const p = response.modified;
                            const row = \$('#part-table-' + p.id_transport);

                            row.find('.col-destination').text(p.destination);
                            row.find('.col-exw').text(p.exw);
                            row.find('.col-date').text(p.date);
                            row.find('.col-place').text(p.place);
                            row.find('.col-q-unloaded').text(p.q_unloaded);
                            row.find('.col-invoice').text(p.invoice);

                            originalData = getFormData(\$partForm);

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

        \$partModal.on('focus', '.form-control', function() {
            \$(this).addClass('input-focused');                                  // Blue border while typing
            \$(this).removeClass('is-invalid is-valid');                         // Remove validation styles while focused
            /*\$(this).closest(\".form-group\").find(\".error-placeholder\").empty();  // hide error*/
        }).on('blur', '.form-control', function() {
            \$(this).removeClass('input-focused');                               // Remove blue border
            \$partForm.validate().element(this);
        });
    }
/*   __________________________________________
//  |                                          |
//  |          TOGGLE PRICE TYPOLOGY           |
//  |__________________________________________|
*/
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



    // --- Click qty-btn ---
/*\$(document).off('click', '.qty-btn').on('click', '.qty-btn', function() {
    const \$btn = \$(this);
    \$('.qty-btn').removeClass('active');
    \$btn.addClass('active');
    activeID = \$btn.data('id');
    \$qtyModal.data('trigger', activeID);
});*/ 
/*   ___________________________________
//  |                                   |
//  |          INPUT BEHAVIOUR          |
//  |___________________________________|
*/
    \$('#price_typology').on('change', togglePriceValueField);
    \$qtyModal.on('shown.bs.modal', () => { togglePriceValueField(); })

//  Normalize date input on focusout
    \$('#date_load, #date_unload, #date').on('focusout', function () {
        const val = \$(this).val().trim();
            if (!val) return;
        const dt = parseAnyDate(val);
        \$(this).val(dt ? formatToDMY(dt) : '');
    });
/*   _____________________________________________________
//  |                                                     |
//  |          MODAL POPULATION WITH DATA (AJAX)          |
//  |_____________________________________________________|
*/
//  Transport Modal

//  Quantity Modal

//  Partial Modal
    \$(document).off('click', '.updatePart').on('click', '.updatePart', function () {
        const id = \$(this).data('id');
        \$.post('get-partial', { action: 'getPartialData', id_partial: id, csrf_token: csrfToken }, response => {
            if (response.success) {
                const p = response.partial;
                const \$dateInput = \$partModal.find('#date'); 
                    /*\$partModal.find('#id_transport').val(p.id_transport);*/
                    \$partModal.find('#id_partial').val(p.id_partial);
                    \$partModal.find('#destination').val(p.destination);
                    \$partModal.find('#exw').val('').trigger('change'); // Reset
                    \$partModal.find('#exw').val(p.exw).trigger('change');
                    /*\$partModal.find('#date').val(p.date);*/
                    \$partModal.find('#place').val(p.place);
                    \$partModal.find('#q_unloaded').val(p.q_unloaded);
                    \$partModal.find('#invoice').val(p.invoice);

                    \$dateInput.val('');  
                        if (p.date?.trim()) {
                            const parts = p.date.split('-'); // dd-mm-yyyy from server
                            const jsDate = new Date(parts[2], parts[1] - 1, parts[0]);
                            \$dateInput.datepicker('setDate', jsDate);
                        }
                    setPartModalOriginalData(getFormData(\$partForm));
                    \$partModal.modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });
/*   _____________________________________
//  |                                     |
//  |          EXISTENCE CHECKS           |
//  |_____________________________________|
*/
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
/*   ___________________________________
//  |                                   |
//  |          INITIALIZATION           |
//  |___________________________________|
*/
//  Initialize validation
    initValidation();
});
</script>
{% endblock %}
", "transports.twig", "C:\\wamp64\\www\\liquimet\\templates\\transports.twig");
    }
}
