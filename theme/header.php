<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<!-- seo关键词和描述 -->
<?php if (is_home() || is_front_page())
    {
    $description = "web前端,web后端,seo优化,网络运营,猿梦日记";
    $keywords = "钟储兵博客，是一个专注web全栈开发和seo优化的个人博客，主要涵盖web前后端，网络运营，seo优化，生活日记和网络技巧等";
    }
    elseif (is_category())
    {
    $description = strip_tags(trim(category_description()));
    $keywords = single_cat_title('', false);
    }
    elseif (is_tag())
    {
    $description = sprintf( __( '与标签 %s 相关联的文章列表'), single_tag_title('', false));
    $keywords = single_tag_title('', false);
    }
    elseif (is_single())
    {
     if ($post->post_excerpt) {$description = $post->post_excerpt;} 
     else {$description = mb_strimwidth(strip_tags($post->post_content),0,110,"");}
    $keywords = "";
    $tags = wp_get_post_tags($post->ID);
    foreach ($tags as $tag ) {$keywords = $keywords . $tag->name . ", ";}
    }
    elseif (is_page())
    {
    $keywords = get_post_meta($post->ID, "keywords", true);
    $description = get_post_meta($post->ID, "description", true);
    }
?>
<meta name="keywords" content="<?php echo $keywords ?>" />
<meta name="description" content="<?php echo $description?>" />


<!-- seo标题 -->
<?php if ( is_home() ) { ?><title><?php bloginfo('name'); ?>-<?php bloginfo('description'); ?></title><?php } ?>
<?php if ( is_search() ) { ?><title>搜索结果-Search Results-<?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_single() ) { ?><title><?php echo trim(wp_title('',0)); ?>-<?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_page() ) { ?><title><?php echo trim(wp_title('',0)); ?>-<?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_category() ) { ?><title><?php single_cat_title(); ?>-<?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_month() ) { ?><title><?php the_time('F'); ?>-<?php bloginfo('name'); ?></title><?php } ?>
<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><title><?php single_tag_title("", true); ?>-<?php bloginfo('name'); ?></title><?php }?> <?php } ?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
<link rel="stylesheet" href="http://at.alicdn.com/t/font_484804_8hhprms3hyjbgldi.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">




</head>
<body>
<!-- 头部 -->
    <div class="header">
        <!-- 导航 -->
        <div class="nav">
            <!-- logo -->
            <a class="logo" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt=""></a>
            <!-- 菜单 -->
            <div class="menu-box">
                <ul class="menu">
                    <div class="search-input">
                        <span class="close"><i class="iconfont icon-x"></i></span>
                        <input placeholder type="text">
                        <span class="search"><i class="iconfont icon-sousuo"></i></span>
                    </div>
                    <li class="cursor"><a href="/wordpress">首页</a></li>
                    <li class="pull-down">
                        <a href="#">前端技术</a>
                        <ul>
                            <li><a href="#">H5/CS3</a></li>
                            <li><a href="#">JS/Jquery</a></li>
                            <li><a href="#">BootStrap</a></li>
                        </ul>
                    </li>
                    <li class="pull-down">
                        <a href="#">后端技术</a>
                        <ul>
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">Python</a></li>
                            <li><a href="#">NodeJs</a></li>
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">Python</a></li>
                            <li><a href="#">NodeJs</a></li>
                        </ul>
                    </li>
                    <li><a href="#">运营技术</a></li>
                    <li><a href="#">福利资源</a></li>
                    <li><a href="#">猿梦生活</a></li>
                    <li class="search-btn"><a href="#"><i class="iconfont icon-sousuo"></i></a></li>

                </ul>
                
            </div>
            <!-- 登录 -->
            <a class="fr login" href="#"><i class="iconfont icon-touxiang"></i>登录</a>
        </div>
    </div>
    <!-- 头部END -->