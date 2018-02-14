
$(function (){


	//轮播初始化
	var n = $('#small-pic li').height();  //小图高度
	var a = 0;    //大图处于第几张
	var zIdex = 1;//图片优先级
	var allBigLi = $('#big-pic li').length;

	$('#slider').mouseover(function (){
		$('#prev').css("display","block");
		$('#next').css("display","block");
	})





	$('#big-pic li img').eq(0).css("z-index",2);	
	$('#next').click(function (){
		var sTop = $('#small-pic').position().top;
		var elementWidth = $(window).width();
		// 375
		console.log(elementWidth);

		if(elementWidth >500){
			if(sTop > -650){
			if(! $('#small-pic').is(":animated") ){
			$('#small-pic').animate({top:sTop-n});
			console.log(sTop);
				}
			}
		}else{

			if(sTop > -375){
			if(! $('#small-pic').is(":animated") ){
			$('#small-pic').animate({top:sTop-n});
			console.log(sTop);
				}
			}
		}
		



		

		// 大图下一张
		if(a<6){
			a++;
			zIdex++;
			$('#big-pic li img').css("opacity",0);
			$('#big-pic li img').eq(a).animate({opacity:1});
			$('#big-pic li img').eq(a).css("z-index",zIdex);

		}
		
		



	});

	$('#prev').click(function (){
		var sTop = $('#small-pic').position().top;
		if(sTop < 0){
			if(! $('#small-pic').is(":animated") ){
				$('#small-pic').animate({top:sTop+n});
				
			}		
		}


		//大图上一张
		
		if(a>0){
			a--;
			zIdex++;
			$('#big-pic li img').css("opacity",0);
			$('#big-pic li img').eq(a).animate({opacity:1});
			$('#big-pic li img').eq(a).css("z-index",zIdex);
		}
	});





})


