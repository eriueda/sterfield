$(function(){
	$(".move,.moveT").css({opacity:0});
	
	//$("body").animate({opacity:"1"}, 600);
	$(window).bind('load', function(){
		var sct = $(document).scrollTop();
		var hei = $(window).height();
		
		function anime(){
			sct = $(document).scrollTop();
			hei = $(window).height();
			$(".move").each( function(){
				if($(this).offset().top + 100 < sct + hei){
					$(this).animate({opacity:"1", right: 0}, 1200);				
				};
			});
			$(".moveT").each( function(){
				if($(this).offset().top + 100 < sct + hei){
					$(this).animate({opacity:"1", top: 0}, 1200);				
				};
			});
		}
		
		$(window).scroll(function () {
			anime();		
		});
		$(window).resize(function(){
    		anime();
		});
		anime();
	});
});



//テーブルの偶数・奇数の行の色を変える
$(function(){
     $("tr:odd").addClass("odd");
});


//ページトップへスクロールする※よく使用
$(function(){
   $('a[href^=#]').click(function() {
      var speed = 400;// ミリ秒
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top; //targetの位置を取得
      $($.browser.safari ? 'body' : 'html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});






//フォームにテキストを入れておき、フォーカスで消す（文字色も変更）
$(function(){
     $(".focus").focus(function(){
          if(this.value == "キーワードを入力"){
               $(this).val("").css("color","#f39");
          }
     });
     $(".focus").blur(function(){
          if(this.value == ""){
               $(this).val("キーワードを入力").css("color","#969696");
          }
     });
});

//ツールチップ
$(function(){
     $(".tooltip a").hover(function() {
        $(this).next("span").animate({opacity: "show", top: "-75"}, "slow");}, function() {
               $(this).next("span").animate({opacity: "hide", top: "-85"}, "fast");
     });
});
