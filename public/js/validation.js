/*   ______________________________________________
//  |                                              |
//  |          VALIDATION INITIALIZATION           |
//  |______________________________________________|
*/
//  Global custom validators
    function initGlobalMethods() {
        const minDate = new Date(2006, 0, 1); // 01-01-2006
        const today = new Date();

        //  Datepicker init (all forms)
        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            endDate: today,
            autoclose: true,
            clearBtn: false,
            todayBtn: 'linked',               
            todayHighlight: true,         
            startView: 0
        }).on('changeDate', function (e) {
            $(this).trigger('change');                                          // Validator catches the value
                if (this.id === 'date_load') {
                    $('#date_unload').datepicker('setStartDate', e.date);
                }
                $(this).valid();
        }).on('show', function () {
            $(this).data('selectedDate', $(this).val());                        // Store current value when datepicker opens
        }).on('hide', function (e) {
            const currentVal = $(this).val();                                   // If the user didn't select anything and just clicked out, preserve current value
                if (!currentVal) {
                    const storedDate = $(this).data('selectedDate');
                        if (storedDate) {
                            $(this).val(storedDate);                            // Restore value
                        }
                }
        });
    
    //  Validation Rule: validate format & real date 
        $.validator.addMethod("validDate", function (value) {
            return parseAnyDate(value) !== null;
        });
    //  Validation Rule: min date >= 01-01-2006 
        $.validator.addMethod("minDate2006", function (value) {
            const date = parseAnyDate(value);
                if (!date) return false;
            return date >= minDate;
        });
    //  Validation Rule: no future dates 
        $.validator.addMethod("noFutureDate", function (value) {
            const date = parseAnyDate(value);
                if (!date) return false;
            return date <= today;
        });
    //  Validation Rule: unload <= load 
        $.validator.addMethod("unloadAfterLoad", function (value, element) {
            const dateUnload = parseAnyDate(value);
            const dateLoad = parseAnyDate($("#date_load").val());
                if (!dateUnload || !dateLoad) return true;                      // Other rules will catch invalids
            return dateUnload >= dateLoad;
        });
    }

//  Generic per-form initializer
    function initFormValidation($form, rules, messages, submitHandler) {
        $form.validate({
            onkeyup: false,
            onfocusin: false,
            onfocusout: function(el) { this.element(el); },
            rules: rules,
            messages: messages,
            errorPlacement: (error, el) => {
                error.addClass("text-danger small");
                el.removeClass("is-valid").addClass("is-invalid");
                el.closest(".form-group").find(".error-placeholder").html(error);
            },
            highlight: el => $(el).removeClass('is-valid').addClass('is-invalid'),
            unhighlight: el => $(el).removeClass('is-invalid').closest('.form-group').find('.error-placeholder').empty(),
            submitHandler: submitHandler,
            success: (label, el) => {
                $(el).removeClass("is-invalid").addClass("is-valid");
                $(el).closest(".form-group").find(".error-placeholder").empty();
            }
        });
    }

// 3. Specific edit forms
    function initEditForms() {
    // --- Transport edit ---
        initFormValidation($transForm, {
            rules: {
                slot: { required: true, rangelength: [5, 35], pattern: "^[A-Za-z0-9_]+$" },
                cmr: { required: true, rangelength: [5, 35], pattern: "^[A-Za-z0-9\\-]+$" },
                issuer: { required: true, rangelength: [3, 50], pattern: "^[A-Za-z][A-Za-z ]*$" },
                supplier: { required: true, rangelength: [3, 50], pattern: "^[A-Za-z][A-Za-z ]*$" },
                transport: { required: true, rangelength: [3, 50], pattern: "^[A-Za-z][A-Za-z ]*$" },
                date_load: { required: true, validDate: true, noFutureDate: true, minDate2006: true },
                date_unload: { required: true, validDate: true, noFutureDate: true, minDate2006: true, unloadAfterLoad: true },
                container: { required: true, rangelength: [3, 50], pattern: "^[A-Za-z][A-Za-z ]*$" }
            },
            messages: {
                slot: {
                    required: "Campo obbligatorio.",
                    rangelength: "Usare almeno 5 e al massimo 35 caratteri.",
                    pattern: "Slot ID può contenere lettere, numeri e underscore (_). Spazi non consentiti."
                },
                cmr: {
                    required: "Campo obbligatorio.",
                    rangelength: "Usare almeno 5 e al massimo 35 caratteri.",
                    pattern: "CMR può contenere lettere, numeri e trattini (-). Spazi non consentiti."
                },
                issuer: {
                    required: "Campo obbligatorio.",
                    rangelength: "Usare almeno 3 e al massimo 50 caratteri.",
                    pattern: "Emittente può contenere solo lettere e spazi (senza spazio iniziale)."
                },
                supplier: {
                    required: "Campo obbligatorio.",
                    rangelength: "Usare almeno 3 e al massimo 50 caratteri.",
                    pattern: "Fornitore può contenere solo lettere e spazi (senza spazio iniziale)."
                },
                transport: {
                    required: "Campo obbligatorio.",
                    rangelength: "Usare almeno 3 e al massimo 50 caratteri.",
                    pattern: "Trasporto può contenere solo lettere e spazi (senza spazio iniziale)."
                },
                date_load: {
                    required: "Campo obbligatorio.",
                    validDate: "Inserire una data valida.",
                    noFutureDate: "Inserire una data valida. Non sono permesse date future.",
                    minDate2006: "Inserire una data valida. Non sono permesse date precedenti al 2006."
                },
                date_unload: {
                    required: "Campo obbligatorio.",
                    validDate: "Inserire una data valida.",
                    noFutureDate: "Inserire una data valida. Non sono permesse date future.",
                    minDate2006: "Inserire una data valida. Non sono permesse date precedenti al 2006.",
                    unloadAfterLoad: "La data di scarico non può essere precedente alla data di carico."
                },
                container: {
                    required: "Campo obbligatorio.",
                    rangelength: "Usare almeno 3 e al massimo 50 caratteri.",
                    pattern: "Container può contenere solo lettere e spazi (senza spazio iniziale)."
                }
            }, function (form) {
                $.ajax({
                    url: 'transport-edit',
                    type: 'POST',
                    data: $transForm.serialize(),
                    dataType: 'json',
                    success: response => {
                        if (response.success) {
                            updateOriginalDataFromResponse(response.edited);
                            $transModal.modal('hide');

                            const edited = response.edited;
                            const row = $('#id-' + edited.id_transport);

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
                            row.find('.col-month-unload').text(`${edited.id_month_unload} - ${edited.month_unload}`);

                            row.removeClass('full-row partial-row').addClass('table-success');
                            $('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => { row.removeClass('table-success');
                                if (edited.type == 'F') {
                                    row.addClass('full-row');
                                } else {
                                    row.addClass('partial-row');
                                }
                            }, 2500);
                        } else {
                            $(".invalid-feedback").remove();
                            if (response.errors) {
                                $.each(response.errors, (field, message) => {
                                    const input = $("[name='" + field + "']");
                                    input.removeClass("is-valid").addClass("is-invalid");
                                    input.closest(".form-group").find(".error-placeholder")
                                        .html('<div class="invalid-feedback">' + message + '</div>');
                                });
                            }
                        }
                    },
                    error: xhr => console.error(xhr.responseText)
                });
                return false;
            },
        });

        $transModal.on('focus', '.form-control', function () {
            $(this).addClass('input-focused').removeClass('is-invalid is-valid');
        }).on('blur', '.form-control', function () {
            $(this).removeClass('input-focused');
            $transForm.validate().element(this);
        });

        initFormValidation($qtyForm, {
        rules: {
                kg_load: { required: true, number: true, min: 0 },
                cooling: { required: true, digits: true },
                price_typology: { required: true },
                price_value: { 
                    required: {
                        function() {
                            return $('#price_typology').val() !== 'no';
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
                    required: "Campo obbligatorio.",
                    number: "Quantità caricata deve essere un numero positivo (intero o decimale).",
                    min: "Il valore minimo deve essere maggiore o uguale a 0."
                },
                cooling: {
                    required: "Campo obbligatorio.",
                    digits: "Raffredamento deve essere un numero intero positivo, senza segni o decimali."
                },
                price_typology: {
                    required: "Campo obbligatorio."
                }, 
                price_value: {
                    required: "Campo obbligatorio.",
                    digits: "Valore costo extra deve essere un numero intero positivo maggiore o uguale a 1, senza segni o decimali.",
                    min: "Il valore minimo deve essere maggiore o uguale a 1."
                }, 
                kg_unload: {
                    required: "Campo obbligatorio.",
                    number: "Quantità scaricata deve essere un numero positivo (intero o decimale).",
                    min: "Il valore minimo deve essere maggiore o uguale a 0."
                },
                liquid_density: {
                    required: "Campo obbligatorio.",
                    number: "Densità liquido deve essere un numero positivo (intero o decimale).",
                    min: "Il valore minimo deve essere maggiore o uguale a 0.",
                }, 
                gas_weight: {
                    required: "Campo obbligatorio.",
                    number: "Peso specifico (gas) deve essere un numero positivo (intero o decimale).",
                    min: "Il valore minimo deve essere maggiore o uguale a 0."
                }, 
                pcs_ghv: {
                    required: "Campo obbligatorio.",
                    number: "PCS/GHV deve essere un numero positivo (intero o decimale).",
                    min: "Il valore minimo deve essere maggiore o uguale a 0."
                }
            }, function (form) {
                $.ajax({
                    url: 'quantity-edit',
                    type: 'POST',
                    data: $qtyForm.serialize(),
                    dataType: 'json',
                    success: response => {
                        if (response.success) {
                            updateOriginalDataFromResponse(response.updated);
                            $qtyModal.modal('hide');

                            const updated = response.updated;
                            const row = $('#qty-table-' + updated.id_transport);

                                function updateCell(selector, newValue) {
                                    const cell = row.find(selector);
                                    const oldValue = cell.text().trim();

                                        if (oldValue != newValue) {
                                            cell.text(newValue).addClass('table-success');
                                            $('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
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

                            originalData = getFormData($qtyForm);
                        } else {
                            $(".invalid-feedback").remove();
                            if (response.errors) {
                                $.each(response.errors, (field, message) => {
                                    const input = $("[name='" + field + "']");
                                    input.removeClass("is-valid").addClass("is-invalid");
                                    input.closest(".form-group").find(".error-placeholder")
                                         .html('<div class="invalid-feedback">' + message + '</div>');
                                });
                            }
                        }
                    },
                    error: xhr => console.error(xhr.responseText)
                });
                return false;
            },
        });

        $qtyModal.on('focus', '.form-control', function() {
            $(this).addClass('input-focused');                                  // Blue border while typing
            $(this).removeClass('is-invalid is-valid');                         // Remove validation styles while focused
            /*$(this).closest(".form-group").find(".error-placeholder").empty();  // hide error*/
        }).on('blur', '.form-control', function() {
            $(this).removeClass('input-focused');                               // Remove blue border
            $qtyForm.validate().element(this);
        });
    }

    function initValidation() {
        initGlobalMethods();
        initEditForms();
        // call initCreateFormValidation($createForm) where needed
    }



/*
//  Initialize datepicker and validation for both forms
    function initValidation() {
        const minDate = new Date(2006, 0, 1); // 01-01-2006
        const today = new Date();

    //  Datepicker init (all forms)
        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            endDate: today,
            autoclose: true,
            clearBtn: false,
            todayBtn: 'linked',               
            todayHighlight: true,         
            startView: 0
        }).on('changeDate', function (e) {
            $(this).trigger('change');                                          // Validator catches the value
                if (this.id === 'date_load') {
                    $('#date_unload').datepicker('setStartDate', e.date);
                }
                $(this).valid();
        }).on('show', function () {
            $(this).data('selectedDate', $(this).val());                        // Store current value when datepicker opens
        }).on('hide', function (e) {
            const currentVal = $(this).val();                                   // If the user didn't select anything and just clicked out, preserve current value
                if (!currentVal) {
                    const storedDate = $(this).data('selectedDate');
                        if (storedDate) {
                            $(this).val(storedDate);                            // Restore value
                        }
                }
        });

    //  Validation Rule: validate format & real date 
        $.validator.addMethod("validDate", function (value) {
            return parseAnyDate(value) !== null;
        });
    //  Validation Rule: min date >= 01-01-2006 
        $.validator.addMethod("minDate2006", function (value) {
            const date = parseAnyDate(value);
                if (!date) return false;
            return date >= minDate;
        });
    //  Validation Rule: no future dates 
        $.validator.addMethod("noFutureDate", function (value) {
            const date = parseAnyDate(value);
                if (!date) return false;
            return date <= today;
        });
    //  Validation Rule: unload <= load 
        $.validator.addMethod("unloadAfterLoad", function (value, element) {
            const dateUnload = parseAnyDate(value);
            const dateLoad = parseAnyDate($("#date_load").val());
                if (!dateUnload || !dateLoad) return true;                      // Other rules will catch invalids
            return dateUnload >= dateLoad;
        });

    //  Transport Form Validation
        $transForm.validate({
            onkeyup: false,
            onfocusin: false,
            onfocusout: function(el) { this.element(el); }, /*el => $(el).valid(), /*el => $transForm.validate().element(el),*/   
/*            rules: {
                slot: { required: true, rangelength: [5, 35], pattern: "^[A-Za-z0-9_]+$" },
                cmr: { required: true, rangelength: [5, 35], pattern: "^[A-Za-z0-9\\-]+$" },
                issuer: { required: true, rangelength: [3, 50], pattern: "^[A-Za-z][A-Za-z ]*$" },
                supplier: { required: true, rangelength: [3, 50], pattern: "^[A-Za-z][A-Za-z ]*$" },
                transport: { required: true, rangelength: [3, 50], pattern: "^[A-Za-z][A-Za-z ]*$" },
                date_load: { required: true, validDate: true, noFutureDate: true, minDate2006: true },
                date_unload: { required: true, validDate: true, noFutureDate: true, minDate2006: true, unloadAfterLoad: true },
                container: { required: true, rangelength: [3, 50], pattern: "^[A-Za-z][A-Za-z ]*$" }
            },
            messages: {
                slot: {
                    required: "Campo obbligatorio.",
                    rangelength: "Usare almeno 5 e al massimo 35 caratteri.",
                    pattern: "Slot ID può contenere lettere, numeri e underscore (_). Spazi non consentiti."
                },
                cmr: {
                    required: "Campo obbligatorio.",
                    rangelength: "Usare almeno 5 e al massimo 35 caratteri.",
                    pattern: "CMR può contenere lettere, numeri e trattini (-). Spazi non consentiti."
                },
                issuer: {
                    required: "Campo obbligatorio.",
                    rangelength: "Usare almeno 3 e al massimo 50 caratteri.",
                    pattern: "Emittente può contenere solo lettere e spazi (senza spazio iniziale)."
                },
                supplier: {
                    required: "Campo obbligatorio.",
                    rangelength: "Usare almeno 3 e al massimo 50 caratteri.",
                    pattern: "Fornitore può contenere solo lettere e spazi (senza spazio iniziale)."
                },
                transport: {
                    required: "Campo obbligatorio.",
                    rangelength: "Usare almeno 3 e al massimo 50 caratteri.",
                    pattern: "Trasporto può contenere solo lettere e spazi (senza spazio iniziale)."
                },
                date_load: {
                    required: "Campo obbligatorio.",
                    validDate: "Inserire una data valida.",
                    noFutureDate: "Inserire una data valida. Non sono permesse date future.",
                    minDate2006: "Inserire una data valida. Non sono permesse date precedenti al 2006."
                },
                date_unload: {
                    required: "Campo obbligatorio.",
                    validDate: "Inserire una data valida.",
                    noFutureDate: "Inserire una data valida. Non sono permesse date future.",
                    minDate2006: "Inserire una data valida. Non sono permesse date precedenti al 2006.",
                    unloadAfterLoad: "La data di scarico non può essere precedente alla data di carico."
                },
                container: {
                    required: "Campo obbligatorio.",
                    rangelength: "Usare almeno 3 e al massimo 50 caratteri.",
                    pattern: "Container può contenere solo lettere e spazi (senza spazio iniziale)."
                }
            },
            errorPlacement: (error, el) => {
                error.addClass("text-danger small");
                el.removeClass("is-valid").addClass("is-invalid");
                el.closest(".form-group").find(".error-placeholder").html(error);
            },
            highlight: el => $(el).removeClass('is-valid').addClass('is-invalid'),
            unhighlight: el => $(el).removeClass('is-invalid').closest('.form-group').find('.error-placeholder').empty(),
            submitHandler: function (form) {
                $.ajax({
                    url: 'transport-edit',
                    type: 'POST',
                    data: $transForm.serialize(),
                    dataType: 'json',
                    success: response => {
                        if (response.success) {
                            updateOriginalDataFromResponse(response.edited);
                            $transModal.modal('hide');

                            const edited = response.edited;
                            const row = $('#id-' + edited.id_transport);

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
                            row.find('.col-month-unload').text(`${edited.id_month_unload} - ${edited.month_unload}`);

                            row.removeClass('full-row partial-row').addClass('table-success');
                            $('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => { row.removeClass('table-success');
                                if (edited.type == 'F') {
                                    row.addClass('full-row');
                                } else {
                                    row.addClass('partial-row');
                                }
                            }, 2500);
                        } else {
                            $(".invalid-feedback").remove();
                            if (response.errors) {
                                $.each(response.errors, (field, message) => {
                                    const input = $("[name='" + field + "']");
                                    input.removeClass("is-valid").addClass("is-invalid");
                                    input.closest(".form-group").find(".error-placeholder")
                                        .html('<div class="invalid-feedback">' + message + '</div>');
                                });
                            }
                        }
                    },
                    error: xhr => console.error(xhr.responseText)
                });
                return false;
            },
            success: (label, el) => {
                $(el).removeClass("is-invalid").addClass("is-valid");
                $(el).closest(".form-group").find(".error-placeholder").empty();
            }
        });

        $transModal.on('focus', '.form-control', function() {
            $(this).addClass('input-focused');                                  // Blue border while typing
            $(this).removeClass('is-invalid is-valid');                         // Remove validation styles while focused
            /*$(this).closest(".form-group").find(".error-placeholder").empty();  // hide error*/
/*        }).on('blur', '.form-control', function() {
            $(this).removeClass('input-focused');                               // Remove blue border
            $transForm.validate().element(this);
        });

    //  Quantity Form Validation
        $qtyForm.validate({
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
                            return $('#price_typology').val() !== 'no';
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
                    required: "Campo obbligatorio.",
                    number: "Quantità caricata deve essere un numero positivo (intero o decimale).",
                    min: "Il valore minimo deve essere maggiore o uguale a 0."
                },
                cooling: {
                    required: "Campo obbligatorio.",
                    digits: "Raffredamento deve essere un numero intero positivo, senza segni o decimali."
                },
                price_typology: {
                    required: "Campo obbligatorio."
                }, 
                price_value: {
                    required: "Campo obbligatorio.",
                    digits: "Valore costo extra deve essere un numero intero positivo maggiore o uguale a 1, senza segni o decimali.",
                    min: "Il valore minimo deve essere maggiore o uguale a 1."
                }, 
                kg_unload: {
                    required: "Campo obbligatorio.",
                    number: "Quantità scaricata deve essere un numero positivo (intero o decimale).",
                    min: "Il valore minimo deve essere maggiore o uguale a 0."
                },
                liquid_density: {
                    required: "Campo obbligatorio.",
                    number: "Densità liquido deve essere un numero positivo (intero o decimale).",
                    min: "Il valore minimo deve essere maggiore o uguale a 0.",
                }, 
                gas_weight: {
                    required: "Campo obbligatorio.",
                    number: "Peso specifico (gas) deve essere un numero positivo (intero o decimale).",
                    min: "Il valore minimo deve essere maggiore o uguale a 0."
                }, 
                pcs_ghv: {
                    required: "Campo obbligatorio.",
                    number: "PCS/GHV deve essere un numero positivo (intero o decimale).",
                    min: "Il valore minimo deve essere maggiore o uguale a 0."
                }
            },
            errorPlacement: (error, el) => {
                error.addClass("text-danger small");
                el.removeClass("is-valid").addClass("is-invalid");
                el.closest(".form-group").find(".error-placeholder").html(error);
            },
            highlight: el => $(el).removeClass('is-valid').addClass('is-invalid'),
            unhighlight: el => $(el).removeClass('is-invalid').closest('.form-group').find('.error-placeholder').empty(),
            submitHandler: function (form) {
                $.ajax({
                    url: 'quantity-edit',
                    type: 'POST',
                    data: $qtyForm.serialize(),
                    dataType: 'json',
                    success: response => {
                        if (response.success) {
                            updateOriginalDataFromResponse(response.updated);
                            $qtyModal.modal('hide');

                            const updated = response.updated;
                            const row = $('#qty-table-' + updated.id_transport);

                                function updateCell(selector, newValue) {
                                    const cell = row.find(selector);
                                    const oldValue = cell.text().trim();

                                        if (oldValue != newValue) {
                                            cell.text(newValue).addClass('table-success');
                                            $('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
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

                            originalData = getFormData($qtyForm);
                        } else {
                            $(".invalid-feedback").remove();
                            if (response.errors) {
                                $.each(response.errors, (field, message) => {
                                    const input = $("[name='" + field + "']");
                                    input.removeClass("is-valid").addClass("is-invalid");
                                    input.closest(".form-group").find(".error-placeholder")
                                         .html('<div class="invalid-feedback">' + message + '</div>');
                                });
                            }
                        }
                    },
                    error: xhr => console.error(xhr.responseText)
                });
                return false;
            },
            success: (label, el) => {
                $(el).removeClass("is-invalid").addClass("is-valid");
                $(el).closest(".form-group").find(".error-placeholder").empty();
            }
        });

        $qtyModal.on('focus', '.form-control', function() {
            $(this).addClass('input-focused');                                  // Blue border while typing
            $(this).removeClass('is-invalid is-valid');                         // Remove validation styles while focused
            /*$(this).closest(".form-group").find(".error-placeholder").empty();  // hide error*/
 /*       }).on('blur', '.form-control', function() {
            $(this).removeClass('input-focused');                               // Remove blue border
            $qtyForm.validate().element(this);
        });

            //  Partial Form Validation
        $partForm.validate({
            onkeyup: false,
            onfocusin: false,
            onfocusout: function(el) { this.element(el); },
            rules: {
                destination: { required: true, rangelength: [3, 50], pattern: "^[A-Za-z][A-Za-z ]*$" },
                exw: { required: true },
                date: { required: true },
                place: { required: true, rangelength: [3, 50], pattern: "^[A-Za-z][A-Za-z ]*$" },
                q_unloaded: { required: true, number: true, min: 0 },
                invoice: { required: true, digits: true, min: 1 },
            },
            messages: {
                destination: {
                    required: "Campo obbligatorio.",
                    rangelength: "Usare almeno 3 e al massimo 50 caratteri.",
                    pattern: "Destinazione può contenere solo lettere e spazi (senza spazio iniziale)."
                },
                exw: {
                    required: "Campo obbligatorio."
                },
                date: {
                    required: "Campo obbligatorio."
                }, 
                place: {
                    required: "Campo obbligatorio.",
                    rangelength: "Usare almeno 3 e al massimo 50 caratteri.",
                    pattern: "Fornitore può contenere solo lettere e spazi (senza spazio iniziale)."
                }, 
                q_unloaded: {
                    required: "Campo obbligatorio.",
                    number: "Quantità scaricata deve essere un numero positivo (intero o decimale).",
                    min: "Il valore minimo deve essere maggiore o uguale a 0."
                },
                invoice: {
                    required: "Campo obbligatorio.",
                    digits: "Fattura deve essere un numero intero positivo maggiore o uguale a 1, senza segni o decimali.",
                    min: "Il valore minimo deve essere maggiore o uguale a 1.",
                }
            },
            errorPlacement: (error, el) => {
                error.addClass("text-danger small");
                el.removeClass("is-valid").addClass("is-invalid");
                el.closest(".form-group").find(".error-placeholder").html(error);
            },
            highlight: el => $(el).removeClass('is-valid').addClass('is-invalid'),
            unhighlight: el => $(el).removeClass('is-invalid').closest('.form-group').find('.error-placeholder').empty(),
            submitHandler: function (form) {
                $.ajax({
                    url: 'partial-edit',
                    type: 'POST',
                    data: $partForm.serialize(),
                    dataType: 'json',
                    success: response => {
                        if (response.success) {
                            updateOriginalDataFromResponse(response.modified);
                            $partModal.modal('hide');

                            const p = response.modified;
                            const row = $('#part-table-' + p.id_transport);

                            row.find('.col-destination').text(p.destination);
                            row.find('.col-exw').text(p.exw);
                            row.find('.col-date').text(p.date);
                            row.find('.col-place').text(p.place);
                            row.find('.col-q-unloaded').text(p.q_unloaded);
                            row.find('.col-invoice').text(p.invoice);

                            originalData = getFormData($partForm);

                            row.addClass('table-success');
                            $('html, body').animate({ scrollTop: row.offset().top - 100 }, 600);
                            setTimeout(() => row.removeClass('table-success'), 2500);
                        } else {
                            $(".invalid-feedback").remove();
                            if (response.errors) {
                                $.each(response.errors, (field, message) => {
                                    const input = $("[name='" + field + "']");
                                    input.removeClass("is-valid").addClass("is-invalid");
                                    input.closest(".form-group").find(".error-placeholder")
                                         .html('<div class="invalid-feedback">' + message + '</div>');
                                });
                            }
                        }
                    },
                    error: xhr => console.error(xhr.responseText)
                });
                return false;
            },
            success: (label, el) => {
                $(el).removeClass("is-invalid").addClass("is-valid");
                $(el).closest(".form-group").find(".error-placeholder").empty();
            }
        });

        $partModal.on('focus', '.form-control', function() {
            $(this).addClass('input-focused');                                  // Blue border while typing
            $(this).removeClass('is-invalid is-valid');                         // Remove validation styles while focused
            /*$(this).closest(".form-group").find(".error-placeholder").empty();  // hide error*/
 /*       }).on('blur', '.form-control', function() {
            $(this).removeClass('input-focused');                               // Remove blue border
            $partForm.validate().element(this);
        });
    }
/*   ___________________________________
//  |                                   |
//  |          INITIALIZATION           |
//  |___________________________________|
*/
//  Initialize validation
/*    initValidation();


    validation.js:
    function initGlobalValidationMethods() {
        const minDate = new Date(2006, 0, 1);
        const today = new Date();
        $.validator.addMethod("validDate", function (value) {...});
        $.validator.addMethod("minDate2006", function (value) {...});
        $.validator.addMethod("noFutureDate", function (value) {...});
        $.validator.addMethod("unloadAfterLoad", function (value, element) {...});
    }
    function initFormValidation($form, rules, messages, submitHandler) {}

    function initEditForms() {
        initFormValidation($transForm, {...}, {...}, function () {...});
        $transModal.on('focus', '.form-control', function () {...});

        initFormValidation($qtyForm, {...}, {...}, function () {...});
        $qtyModal.on('focus', '.form-control', function () {...});

        initFormValidation($partForm, {...}, {...}, function () {...});
        $partModal.on('focus', '.form-control', function () {...});
    }

    function initCreateFormValidation($createForm) {
        initFormValidation($createForm, {...}, {...}, function () {...});

        $(".btn-next").on("click", function () {...});
        $(".btn-prev").on("click", function () {...});
        $(".btn-save").on("click", function () {...});
    }

    function initValidation() {
        initGlobalValidationMethods();
        initEditForms();
    }*/