$(document).ready(function() {
    $('#filter_multiple').SumoSelect();

    // Confirm deleting resources
    $("form[data-confirm]").submit(function() {
        if (!confirm($(this).attr("data-confirm"))) {
            return false;
        }
    });

    $("#input_foto").change(function() {
        var split = $(this).val().split("\\");
        var file_name = split[2];
        if (file_name.length > 40) {
            var inicio = file_name.substring(0, 25);
            while (file_name.length > 13) {
                file_name = file_name.substring(1, file_name.length)
            }
        }
        $('#content-img p').html(inicio + '......' + file_name);
    });
});