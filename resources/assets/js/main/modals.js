$('#bookSubmit').click(function () {
    alert('U heeft een verzoek tot boeking gemaakt tussen band en podium voor een optreden. ')
});
$('#addmemberSubmit').click(function () {
    alert('Uw verzoek om een band te vormen is verstuurd. ')
});

$('.edit-content').on('click', function(){
    var $this = $(this),
        tabId = $(this).data('tabid');
    $('#tabid').val(tabId);
    var $this = $(this),
        type = $(this).data('type');
    $('#type').val(type);
});