<!-- 侧边栏 -->
            
<div class="sidebar">
    <div class="card hot-active">
        <!-- 热门文章 -->
        <div class="title">
            <span>热门文章</span>
            <a class="fr" href="#">更多热门 »</a>
        </div>
        <ul class="list">
            
            
            <?php query_posts('posts_per_page=5&caller_get_posts=1&orderby=comment_count'); ?>
            <?php while (have_posts()) : the_post(); ?>
                <li class="active">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <span class="pic fl"><img src="<?php echo catch_first_image() ?>" alt=""></span>
                        <span class="name"><?php the_title(); ?></span><br>
                        <span class="hint"><?php the_date(); ?></span>
                        <span class="hint"><?php comments_number(); ?></span>
                                
                    </a>
                </li>
            <?php endwhile; ?>

        </ul>
    </div>
    <!-- 关于本站 -->
    <div class="card about-web clear">
        <div class="title">关于本站</div>
        <div class="box">
            <!-- 二维码 -->
            <a class="qr" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/qr-weixin.jpg" alt=""></a>
            <!-- 概要 -->
            <div class="summary mb10">
                <a class="name" href="#">猿梦</a>
                <p class="shrink">分享头脑，分享技术，专注网站全栈开发和互联网运营之道</p>
                <!-- 联系方式 -->
                <div class="contact">
                    <a href="#"><i class="iconfont icon-qq"></i></a>
                    <a href="#"><i class="iconfont icon-0023"></i></a>
                    <a href="#"><i class="iconfont icon-weibo"></i></a>
                    <a href="#"><i class="iconfont icon-dingyue"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- 文章归档 -->
    <div class="card filing">
        <div class="title">文章归档</div>
        <!-- 文章列表 -->
        <div class="box">
            <?php wp_get_archives() ?>
        </div>
    </div>
    <!-- 文章标签 -->
    <div class="card active-tag">
        <div class="title">文章标签</div>
        <div class="box">
            
            <a href="#">Jquery1</a>
            <a href="#">Jquery2</a>
            <a href="#">Jquery3</a>
            <a href="#">Jquery4</a>
            <a href="#">Jquery5</a>
            <a href="#">Jquery6</a>
            <a href="#">Jquery7</a>
            <a href="#">Jquery8</a>
            <a href="#">Jquery9</a>
            <a href="#">Jquery10</a>
            <a href="#">Jquery11</a>
            <a href="#">Jquery12</a>
            <a href="#">Jquery13</a>
            <a href="#">Jquery14</a>
            <a href="#">Jquery15</a>
        </div>
    </div>
    <!-- 友情链接 -->
    <div class="card friend-link">
        <div class="title">友情链接</div>
        <div class="box">
            <a href="#">阿里云</a>
            <a href="#">腾讯云</a>
            <a href="#">百度云</a>
            <a href="#">京东云</a>
            <a href="#">微软云</a>
            <a href="#">苹果云</a>
            <a href="#">三星云</a>
            <a href="#">小米云</a>
        </div>
    </div>
    <!-- 侧边小工具 -->
    <div class="page-tool">
        <a class="go-top" href="#"><i class="iconfont icon-icon2"></i></a>
        <a class="login weaken" href="#">Hello PM</a>
        <a class="feedback weaken" href="#">意见反馈</a>
    </div>
</div>
            
       