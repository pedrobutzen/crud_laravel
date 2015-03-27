$(document).ready(function() {
    $('#filter_multiple').SumoSelect();
    
    // Confirm deleting resources
    $("form[data-confirm]").submit(function() {
        if (!confirm($(this).attr("data-confirm"))) {
            return false;
        }
    });
});