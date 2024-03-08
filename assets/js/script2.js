$(function () {
    // $(".burger").click(function(){
    //     $(".burger").toggleClass("is-active");
    //     $(".menu").toggleClass("is-active");
    // })

    $(".menu").hide();


    $(".burger").click(function(){
        $(".burger").toggleClass("is-active-btn");
        $(".menu").toggleClass("is-active");
        $(".menu").slideToggle(600);
    })
});