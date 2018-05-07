// $('.right-chat-container').on('.open-chat', function () {
//     $(this)
//         .toggleClass('test-toggle');
//         console.log('Ik laat de chat zien!');
// });

// $('.open-chat').on('click',function () {
//     console.log('geklikt');
// });
$(".open-chat").click(function(){
    $('.right-chat-container').toggle();
    console.log('klik');
});