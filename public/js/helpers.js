    let originalData = {};                                       //  Global originalData for resetting form on modal hide and updating after submit
/*   ____________________________________
//  |                                    |
//  |          FORM MANAGEMENT           |
//  |____________________________________|
*/
//  Get form data as { name: value }
    function getFormData($form) {
        const data = {};
            $form.serializeArray().forEach(f => {
                let val = f.value.trim();
                    if (/^\d+(,|\.)\d+$/.test(val)) {            //  Normalize comma to dot for decimals
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
    function resetFormToOriginal($form) {
        for (const [k, v] of Object.entries(originalData)) {
            $form.find(`[name="${k}"]`).val(v);
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
            return `${d}-${m}-${date.getFullYear()}`;
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