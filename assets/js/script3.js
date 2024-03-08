$(function () {

    setTimeout(function(){
		$('.start img').fadeIn(1600);
	},500); //0.5秒後にロゴをフェードイン!
	setTimeout(function(){
		$('.start').fadeOut(500);
	},3300); //2.5秒後にロゴ含め真っ白背景をフェードアウト！

    //ページ遷移
    setTimeout(function(){
        window.location.href ="http://localhost/seedtech_web/index.html";
    },3500)

    
});
