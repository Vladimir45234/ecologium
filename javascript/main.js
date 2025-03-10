$(document).ready(function () {
    $('.trigger1').click(function (e) {
        $('.modalActive3').fadeTo(1000, 1).show();
        e.preventDefault();
    });
    $('.modalClose3').click(function (e) {
        $('.modalActive3').fadeTo(1000, 1).hide();
        e.preventDefault();
    });
    $('.trigger2').click(function (e) {
        $('.modalActive2').fadeTo(1000, 1).show();
        $('.modalActive3').fadeTo(1000, 1).hide();
        e.preventDefault();
    });
    $('.trigger3').click(function (e){
        $('.modalActive3').fadeTo(1000, 1).show();
        $('.modalActive2').fadeTo(1000, 1).hide();
        e.preventDefault();
    })
    $('.modalClose2').click(function (e){
        $('.modalActive2').fadeTo(1000, 1).hide();
        e.preventDefault();
    });
    $('.trigger4').click(function (e) {
        $('.modalActive1').fadeTo(1000, 1).show();
        e.preventDefault();
    });
    $('.modalClose1').click(function (e){
        $('.modalActive1').fadeTo(1000, 1).hide();
        e.preventDefault();
    });
})