$(function () {
    $(".burger").click(function(){
        $(".burger").toggleClass("is-active");
        $(".menu").toggleClass("is-active");
    })
});