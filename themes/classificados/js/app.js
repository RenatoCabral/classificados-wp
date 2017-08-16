/**
 * Created by renato on 01/08/17.
 */

$(".button-collapse").sideNav();

$(document).ready(function() {
    $('select').material_select();

    $('.modal').modal();

});

$(document).ready(function(){
    $('.collapsible').collapsible();
});


$('.item-slider').slick({
    dots: true,
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    speed: 1000,
    fade: true,
    cssEase: 'linear'
});

$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    arrows: false,
    dots: true,
    centerMode: true,
    focusOnSelect: true,
    adaptiveHeight: false
});

/*search_all_news*/
$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
});

