
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

$("a[href*='" + location.pathname + "']").addClass("current");

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




//Filter animations
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

//Filter calls to get right data from database

$('.filter-input').change(function () {

    $('#filter-form').submit();
    event.preventDefault();
});
// //Keep filters checked
// $('.checkBox').click(function(e){
//     // if (e.target.checked) {
//     //     localStorage.checked = true;
//     // } else {
//     //     localStorage.checked = false;
//     // }
//     return e.target.checked
// });
//
// $( document ).ready(function() {
//
//     document.querySelector('.checkBox').checked = localStorage.checked
//
// });

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