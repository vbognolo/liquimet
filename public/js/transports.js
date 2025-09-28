/*   ____________________________
//  |                            |
//  |          COLLAPSE          |
//  |____________________________|
*/
    $(document).on('shown.bs.collapse', '.collapse', function () {
        let targetId = $(this).attr('id');
        $(`[data-bs-target="#${targetId}"]`).attr('aria-expanded', 'true');
    });
    $(document).on('hidden.bs.collapse', '.collapse', function () {
        let targetId = $(this).attr('id');
        $(`[data-bs-target="#${targetId}"]`).attr('aria-expanded', 'false');
    });
    $(document).on('click', '.collapse-btn', function() {
        var $icon = $(this).find('i.icon-plus');

        $icon.css({opacity: 0, transform: 'scale(0.5)'});        // Smooth fade-out
        setTimeout(function() {                                  // After short delay, swap icon and fade-in
            $icon.toggleClass('bi-plus-lg bi-dash-lg');
            $icon.css({opacity: 1, transform: 'scale(1)'});
        }, 350);                                                 // 100ms for smooth transition
    });
/*   _________________________________
//  |                                 |
//  |          DROPDOWN MENU          |
//  |_________________________________|
*/
    $(document).on('click', '.dropdown-item', function(e) {
        e.preventDefault();
        $('.dropdown-item').removeClass('active');                   // Remove active from all items and set active on clicked
        $(this).addClass('active');

        //const csrfToken = $('input[name="csrf_token"]').val();     // Send AJAX request to update tbody (optional)
        // Find the nearest form or modal containing the CSRF token
    const $context = $(this).closest('.modal, form');
    const csrfToken = $context.find('input[name="csrf_token"]').val();
        let type = $(this).data('type');                             // Update dropdown button title
        let title = '';
            
            switch(type) {
                case 'all': title = 'TUTTI TRASPORTI'; type = ''; break;
                case 'F':   title = 'TRASPORTI PIENI'; break;
                case 'P':   title = 'TRASPORTI PARZIALI'; break;
            }
        $(this).closest('.card-header').find('span').text(title);       

        $.ajax({
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
                    $('#transport-tbody').html(response.tbody);
                    $('#transport-tfoot').html(response.pagination);
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert('Error loading transports. Please reload the page.');
            }
        });
    });