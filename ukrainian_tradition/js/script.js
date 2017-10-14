$('label').click(function (e) {

    if ($('input', this).is(':checked')) {
        $(this).css('color', 'black');
    } else {
        $(this).css('color', '#a8353a');
    }

});
