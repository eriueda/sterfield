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



//�e�[�u���̋����E��̍s�̐F��ς���
$(function(){
     $("tr:odd").addClass("odd");
});


//�y�[�W�g�b�v�փX�N���[�����遦�悭�g�p
$(function(){
   $('a[href^=#]').click(function() {
      var speed = 400;// �~���b
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top; //target�̈ʒu���擾
      $($.browser.safari ? 'body' : 'html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});






//�t�H�[���Ƀe�L�X�g�����Ă����A�t�H�[�J�X�ŏ����i�����F���ύX�j
$(function(){
     $(".focus").focus(function(){
          if(this.value == "�L�[���[�h�����"){
               $(this).val("").css("color","#f39");
          }
     });
     $(".focus").blur(function(){
          if(this.value == ""){
               $(this).val("�L�[���[�h�����").css("color","#969696");
          }
     });
});

//�c�[���`�b�v
$(function(){
     $(".tooltip a").hover(function() {
        $(this).next("span").animate({opacity: "show", top: "-75"}, "slow");}, function() {
               $(this).next("span").animate({opacity: "hide", top: "-85"}, "fast");
     });
});
