$('.filter-button').click(function() {
    $('.filter-container').removeClass('d-none');
});

$('.close-filter-button').click(function () {
    $('.filter-container').addClass('d-none');
});
$('.indicator').on('click', function () {
    $(this)
        .toggleClass('fa-caret-down')
        .toggleClass('fa-caret-right');
});
