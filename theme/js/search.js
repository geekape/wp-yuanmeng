$(function () {
	//搜索动画
	$('.search-btn').click(function (){
		$('.menu>li').css({'opacity':0});
		$('.search-input').css({
				'display': 'block',
				'opacity': 1
			});	
	});

	// 关闭搜索
	$('.search-input .close').click(function(){
		$('.search-input').css({
				'opacity': 0,
				'display': 'none'
			});
		$('.menu>li').css({'opacity':1});
	});

	//如果为空就关闭
	$('.search-input .search').click(function(){
		if($('.search-input input').val() == ''){
			$('.search-input').css({
				'opacity': 0,
				'display': 'none'
			});
			$('.menu>li').css({'opacity':1});
		}
	})
})