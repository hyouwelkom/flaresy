$(document).ready(function() {

    $('#categories_select2').select2({
        placeholder: "Sélectionner au moins une catégorie",
        allowClear: true
    });

    var grid = $('#productions').isotope({
        itemSelector: '.production'
    });

    var gridprod = $('#productions-prod').isotope({
        itemSelector: '.production-prod'
    });

    $('#productions-prod').isotope({ filter: '*'});
    $('#productions').isotope({ filter: '*'});
});

function filtrerCategoriesHome(categorie, element) {
    $('#categories a.active').removeClass('active');
    $(element).addClass('active');

    if(categorie == 'all') {
        $('#productions').isotope({ filter: '*'});
    } else {
        $('#productions').isotope({ filter: '.'+categorie});
    }

}

function filtrerCategories(categorie, element) {
    $('#categories a.active').removeClass('active');
    $(element).addClass('active');

    if(categorie == 'all') {
        $('#productions-prod').isotope({ filter: '*'});
    } else {
        $('#productions-prod').isotope({ filter: '.'+categorie});
    }

}
