$(document).ready(function() {
    $('#niveau').on('change', function(e) {
        if($('#niveau').val() != 1) {
            $('#role').val('');
            $('#role').prop('disabled', true);
            $('#poste').val('');
            $('#poste').prop('disabled', true);
            $('#img_membre').val('');
            $('#img_membre').prop('disabled', true);
            $('.input-reseau-social').val('');
            $('.input-reseau-social').prop('disabled', true);
        } else {
            $('#role').prop('disabled', false);
            $('#poste').prop('disabled', false);
            $('#img_membre').prop('disabled', false);
            $('.input-reseau-social').prop('disabled', false);
        }
    })
});
