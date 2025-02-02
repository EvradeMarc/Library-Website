$('#search-title').on('input', function() {
    var value = $(this).val().toLowerCase().trim();
    $('.book').filter(function() {
        var title = $(this).children('.book-title').text().toLowerCase();
        $(this).toggle(title.indexOf(value) >=
            0);
    });
});

$('#search-author').on('input', function() {
    var value = $(this).val().toLowerCase().trim();
    $('.book').filter(function() {
        var author = $(this).children('.other-info-book').children('.book-author').text().toLowerCase();
        $(this).toggle(author.indexOf(value) >=
            0);
    });
});

$('#search-year').on('input', function() {
    var value = $(this).val().toLowerCase().trim();
    $('.book').filter(function() {
        var year = $(this).children('.other-info-book').children('.book-year').text().toLowerCase();
        $(this).toggle(year.indexOf(value) >=
            0);
    });
});

$('#search-category').on('input', function() {
    var value = $(this).val().toLowerCase().trim();
    $('.book').filter(function() {
        var category = $(this).children('.other-info-book').children('.book-category').text().toLowerCase();
        $(this).toggle(category.indexOf(value) >=
            0);
    });
});