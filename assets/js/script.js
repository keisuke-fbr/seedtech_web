$(function () {

    setTimeout(function(){
		$('.start img').fadeIn(1600);
	},500); //0.5秒後にロゴをフェードイン!
	setTimeout(function(){
		$('.start').fadeOut(500);
	},2500); //2.5秒後にロゴ含め真っ白背景をフェードアウト！



    $(".menu").hide();


    $(".burger").click(function(){
        $(".burger").toggleClass("is-active");
        $(".menu").toggleClass("is-active");
        $(".menu").slideToggle(600);
    })

});