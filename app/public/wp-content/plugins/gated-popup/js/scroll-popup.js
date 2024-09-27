jQuery(document).ready(function ($) {
    let popupShown = false; // Track if the popup is shown

    $(window).scroll(function () {
        // Check if the popup hasn't been shown yet and the user has scrolled down
        if (!popupShown && $(window).scrollTop() > 10) {
            $('#scroll-popup').fadeIn();
            $('body').addClass('no-scroll'); 
            $('body').addClass('blur-background'); 
            popupShown = true; 

    
            if (typeof hbspt !== 'undefined') {
                hbspt.forms.create({
                    portalId: hubspotData.portal_id, 
                    formId: hubspotData.form_id, 
                    target: '#hubspot-form' 
                });
            } else {
                console.error('HubSpot forms script not loaded.'); 
            }
        }
    });

    // Close popup, remove blur and unlock scroll when 'X' is clicked
    $('#scroll-popup-close').click(function () {
        $('#scroll-popup').fadeOut(); 
        $('body').removeClass('no-scroll'); 
        $('body').removeClass('blur-background'); 
    });
});
