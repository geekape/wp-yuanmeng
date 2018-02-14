<?php
	//定义菜单
	if(function_exists('register_nav_menu')){
		register_nav_menu('mainmenu','主导航');
		register_nav_menu('topmenu','顶部导航');
	}
	if (!is_nav_menu('主导航')||!is_nav_menu('顶部导航')){
		$menu_id_1 = wp_create_nav_menu('主导航');
		$menu_id_2 = wp_create_nav_menu('顶部导航');
		wp_update_nav_menu_item($menu_id_1, 0);
		wp_update_nav_menu_item($menu_id_2, 1);
	}





	function catch_that_image() {
      global $post, $posts;
      $first_img = '';
      ob_start();
      ob_end_clean();
      $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
      $first_img = $matches [1] [0];
      if(empty($first_img)){ //Defines a default image
        $first_img = "/img/active-pic.jpg";
      }
      return $first_img;
    }

    // 修改默认摘要字数
    function custom_excerpt_length( $length ) {
    return 200;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


	// 文章缩略图设置

	//支持外链缩略图
	if ( function_exists('add_theme_support') )
	 add_theme_support('post-thumbnails');
	function catch_first_image() {global $post, $posts;$first_img = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$first_img = $matches [1] [0];
		if(empty($first_img)){
			$random = mt_rand(1, 5);
			echo get_bloginfo ( 'stylesheet_directory' );
			echo '/img/pic/'.$random.'.jpg';
			}
	  return $first_img;
	};

	// 显示小工具
	if ( function_exists('register_sidebar') )
	    register_sidebar(array(
	        'before_widget' => '<div class="sidebox">    ',
	        'after_widget' => '</div>',
	        'before_title' => '<h2>',
	        'after_title' => '</h2>',
	    ));




	// 统计字数
	function count_words($str){
    $words = 0;
    $str = eregi_replace(" +", " ", $str);
    $array = explode(" ", $str);
    for($i=0;$i < count($array);$i++)
     {
        if (eregi("[0-9A-Za-zÀ-ÖØ-öø-ÿ]", $array[$i]))
            $words++;
	    }
	    return $words;
	}


?>
