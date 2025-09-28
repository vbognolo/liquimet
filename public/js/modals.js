//const csrfToken   = $('input[name="csrf_token"]').val();
const $transModal = $('#editTransModal');                     
const $transForm  = $('#transport-edit');       
const $qtyModal   = $('#editQtyModal');              
const $qtyForm    = $('#editQtyModal').find('#quantity-edit');
const $partModal  = $('#editPartModal'); 
const $partForm   = $('#editPartModal').find('#partial-edit');
let switched      = false;
/*   ____________________________________
//  |                                    |
//  |          HELPER FUNCTIONS          |
//  |____________________________________|
*/
    function togglePriceValueField() {
        const $pv = $('#price_value');
        const typology = $('#price_typology').val();

            if (typology === 'no') {
                switched = true;
                $pv.val(0)
                   .prop('disabled', true)
                   .removeClass('is-valid is-invalid')
                   .closest('.form-group')
                   .find('.error-placeholder').empty();
            } else {
                $pv.prop('disabled', false)
                   .removeClass('is-valid is-invalid')
                   .closest('.form-group')
                   .find('.error-placeholder').empty();

                if (switched) $pv.val('');
                switched = false;
                $pv.trigger('input');
            }
    }
/*   ____________________________________________________
//  |                                                    |
//  |          FORM CHANGE TRACKING INITIALIZER          |  Save btn enabled/disabled
//  |____________________________________________________|
*/
//  Initialize form change tracking per modal and form
    function initFormChangeTracking($modal, $form, $saveBtn) {
        let modalOriginalData = {};

    //  On modal show: cache original form data & disable Save button
        $modal.on('show.bs.modal', function () {
            modalOriginalData = getFormData($form);
            $saveBtn.prop('disabled', true);

        //  Ensure validator is clean
            if ($form.data('validator')) {
                $form.validate().resetForm();
            }
            $form.find('.is-invalid, .is-valid').removeClass('is-invalid is-valid');
        });
    //  On any input or change, enable Save if form changed
        $form.on('input change', ':input', function () {
            const currentData = getFormData($form);
            $saveBtn.prop('disabled', !isFormChanged(modalOriginalData, currentData));
        });

    //  Return setter to update modalOriginalData externally (for AJAX-populated partial modal)
        return function(newData) {
            modalOriginalData = {...newData};
            $saveBtn.prop('disabled', true);  // Reset save button state
        }
    }
/*   __________________________________
//  |                                  |
//  |          CLICK HANDLERS          | 
//  |__________________________________|
*/
//  Transport Modal
    $(document).off('click', '.updateTrans').on('click', '.updateTrans', function () {
        const id = $(this).data('id');
    const csrfToken = $transModal.find('input[name="csrf_token"]').val(); // get token dynamically
        $.post('get-transport', { action: 'getTransportData', id_transport: id, csrf_token: csrfToken }, response => {
            if (response.success) {
                const t = response.transport;
                    $transModal.find('#id_transport').val(t.id_transport);
                    $transModal.find('#slot').val(t.slot.toUpperCase());
                    $transModal.find('#cmr').val(t.cmr.toUpperCase());
                    $transModal.find('#issuer').val(t.issuer.toUpperCase());
                    $transModal.find('#supplier').val(t.supplier.toUpperCase());
                    $transModal.find('#transport').val(t.transport.toUpperCase());
                    $transModal.find('#date_load').val(t.date_load);
                    $transModal.find('#date_unload').val(t.date_unload);
                    $transModal.find('#container').val(t.container.toUpperCase());

                    $transModal.find('#original_slot').val(t.slot.toUpperCase());
                    $transModal.find('#original_cmr').val(t.cmr.toUpperCase());

                    setTransModalOriginalData(getFormData($transForm));
                    $transModal.modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });
//  Quantity Modal
    $(document).off('click', '.updateQty').on('click', '.updateQty', function () {
        const id = $(this).data('id'); 
    const csrfToken = $qtyModal.find('input[name="csrf_token"]').val(); // get token dynamically
        $.post('get-quantity', { action: 'getQuantityData', id_transport: id, csrf_token: csrfToken }, response => {
            if (response.success) {
                const q = response.quantity;

                $qtyModal.find('#id_transport').val(q.id_transport);
                $qtyModal.find('#id_quantity').val(q.id_quantity);
                $qtyModal.find('#kg_load').val(q.kg_load);
                $qtyModal.find('#cooling').val(q.cooling);
                $qtyModal.find('#price_typology').val(q.price_typology);
                $qtyModal.find('#price_value').val(q.price_value);
                $qtyModal.find('#kg_unload').val(q.kg_unload);
                $qtyModal.find('#liquid_density').val(q.liquid_density);
                $qtyModal.find('#gas_weight').val(q.gas_weight);
                $qtyModal.find('#pcs_ghv').val(q.pcs_ghv);

                // Capture original data
                setQtyModalOriginalData(getFormData($qtyForm));
                $qtyModal.modal('show');
            } else {
                    // failure: remove visual active to avoid stuck UI
                                //$('.updateQty[data-id="' + id + '"]').removeClass('active');
                               // $qtyModal.removeData('trigger');

                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });
//  Partial Modal
    $(document).off('click', '.updatePart').on('click', '.updatePart', function () {
        const id = $(this).data('id');
    const csrfToken = $partModal.find('input[name="csrf_token"]').val(); // get token dynamically
        $.post('get-partial', { action: 'getPartialData', id_partial: id, csrf_token: csrfToken }, response => {
            if (response.success) {
                const p = response.partial;
                const $dateInput = $partModal.find('#date'); 
                    /*$partModal.find('#id_transport').val(p.id_transport);*/
                    $partModal.find('#id_partial').val(p.id_partial);
                    $partModal.find('#destination').val(p.destination);
                    $partModal.find('#exw').val('').trigger('change'); // Reset
                    $partModal.find('#exw').val(p.exw).trigger('change');
                    /*$partModal.find('#date').val(p.date);*/
                    $partModal.find('#place').val(p.place);
                    $partModal.find('#q_unloaded').val(p.q_unloaded);
                    $partModal.find('#invoice').val(p.invoice);

                    $dateInput.val('');  
                        if (p.date?.trim()) {
                            const parts = p.date.split('-'); // dd-mm-yyyy from server
                            const jsDate = new Date(parts[2], parts[1] - 1, parts[0]);
                            $dateInput.datepicker('setDate', jsDate);
                        }
                    setPartModalOriginalData(getFormData($partForm));
                    $partModal.modal('show');
            } else {
                alert(response.message || 'Errore durante il caricamento dei dati.');
            }
        }, 'json');
    });
/*   ___________________________________
//  |                                   |
//  |          INPUT BINDINGS           |
//  |___________________________________|
*/
//  Slot and CMR uniqueness live check inside edit transport modal
    $('#editTransModal input[name="slot"], #editTransModal input[name="cmr"]').off('change').on('change', function () {
        const csrfToken = $transModal.find('input[name="csrf_token"]').val(); // get token dynamically
        const $input = $(this);
        const field = $input.attr('name');
        const value = $input.val().trim();
        const id = $('#editTransModal input[name="id_transport"]').val();
        const validator = $transForm.validate();                    // Run local validation first

            if (!validator.element($input)) {
                return;
            }

        $.post('check-transport', { field, value, id_transport: id, csrf_token: csrfToken }, function (response) {
            const $errorDiv = $input.closest('.form-group').find('.error-placeholder');

                if (response.success === false && response.message) {
                    $input.removeClass('is-valid').addClass('is-invalid');
                    $errorDiv.html(`<div class="invalid-feedback">${response.message}</div>`);
                } else {
                    $input.removeClass('is-invalid').addClass('is-valid');
                    $errorDiv.empty();
                }
        }, 'json'); 
    });

//  Price value toggle on price_typology change
    $('#price_typology').on('change', togglePriceValueField);
    $qtyModal.on('shown.bs.modal', () => { togglePriceValueField(); })

//  Normalize date input on focusout
    $('#date_load, #date_unload, #date').on('focusout', function () {
        const val = $(this).val().trim();
            if (!val) return;
        const dt = parseAnyDate(val);
        $(this).val(dt ? formatToDMY(dt) : '');
    });

    const setTransModalOriginalData = initFormChangeTracking($transModal, $transForm, $transModal.find('button[type="submit"]'));
    const setQtyModalOriginalData   = initFormChangeTracking($qtyModal,   $qtyForm,   $qtyModal.find('button[type="submit"]'));
    const setPartModalOriginalData  = initFormChangeTracking($partModal,  $partForm,  $partModal.find('button[type="submit"]'));
/*   _________________________________________
//  |                                         |
//  |          MODAL EVENT HANDLERS           |
//  |_________________________________________|
*/
//  On modal hide, reset form if changed but not saved
    $('#editTransModal, #editQtyModal, #editPartModal').on('hide.bs.modal', function () {
        const $form = $(this).find('form');
        const currentData = getFormData($form);
            if (isFormChanged(originalData, currentData)) {
                resetFormToOriginal($form);
            }
    });
//  When hidden, reset datepicker and form
    $('#editTransModal, #editQtyModal, #editPartModal').on('hidden.bs.modal', function () {
        const dp = $(this).find('.datepicker');
        const $form = $(this).find('form');
            
            dp.datepicker('clearDates').val('');
            $form[0].reset();

                if ($form.data('validator')) {
                    $form.validate().resetForm();
                }
 
            $form.find('.is-invalid, .is-valid').removeClass('is-invalid is-valid');
        
        if (this.id === 'editQtyModal') switched = false;
    });
//  Quantity edit button active status
    $('#editQtyModal').on('hidden.bs.modal', function() {
        const id = $(this).data('trigger');                  // stored ID of the button
        const $btn = $(`#transport-tbody .updateQty[data-id="${id}"]`);
            if (id) {
                // Remove active class and blur the button
                $btn.removeClass('active').blur();
            }     
        $(this).removeData('trigger');                  // clean stored reference
    }); 