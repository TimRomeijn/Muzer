
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('../vendor/bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('../components/ExampleComponent.vue'));
//
// const app = new Vue({
//     el: '#app'
// });

// $('.right-chat-container').on('.open-chat', function () {
//     $(this)
//         .toggleClass('test-toggle');
//         console.log('Ik laat de chat zien!');
// });

// $('.open-chat').on('click',function () {
//     console.log('geklikt');
// });
// $(".open-chat").click(function(){
//     $(".right-chat-container").attr("style","display:block!important");
//     console.log('klik');
// });



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

$('#bookSubmit').click(function () {
    alert('U heeft een verzoek tot boeking gemaakt tussen band en podium voor een optreden. ')
});
$('#addmemberSubmit').click(function () {
    alert('Uw verzoek om een band te vormen is verstuurd. ')
});