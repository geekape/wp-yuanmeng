<!-- 引入页头 -->   
<?php get_header() ?>

<!-- 页面主体 -->
	
    <div class="main">
        <!-- 文章头部信息 -->
		<!-- 文章循环 -->
		<?php while (have_posts()) : the_post(); ?>
        <header class="card">
            <div class="container">
                <section class="article-info fl">
                    <h1 class="mb20"><?php the_title();?></h1>
                    <time><?php the_date('Y-m-d H:i l'); ?></time><br>
                    <span class="mr10"><?php the_tags(); ?></span>
                    
                    <span class="module fr">
                    	<?php edit_post_link(); ?>
                        <span><i class="iconfont icon-kanguo"></i>0</span>
                        <span><i class="iconfont icon-pinglun"></i><?php comments_number() ?></span>
                        <span><i class="iconfont icon-zan1"></i>0</span>
                    </span>
                </section>  
                <section class="author fr">
                    <a class="pic" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/author.jpg" alt=""></a>
                    <div class="box">
                        <a class="name" href=""><?php the_author(); ?></a>
                        <p>分享头脑，分享技术</p>
                        <a class="btn get-money weaken" href="">打赏</a>
                        <a class="btn share" href="">分享</a>
                    </div>
                </section>
                
            </div>
        </header>
        <?php endwhile; ?>
        <div class="container">
            <div class="left-box">
                <!-- 文章内容 -->
				<?php while (have_posts()) : the_post(); ?>
                <div class="article-box card">
					
					<?php the_content(); ?>

                    <!-- 点赞 -->
                    <div class="like-btn">
                        <a class="weaken" href=""><i class="iconfont icon-zan1"></i>666</a>
                    </div>
                    <!-- 分享和评论 -->
                    <section class="">
                        <a class="share btn" href="">分享</a>
                        <a class="btn " href="">评论</a>
                    </section>
                </div>  
				
                <!-- 版权声明 -->
                
                <div class="copyright card">
                    <a class="pic" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/author.jpg" alt=""></a>
                    <div class="box">
                        <p><strong>版权声明:</strong>本站原创文章，于<?php the_date('Y-m-d H:i l'); ?>，由 <?php the_author(); ?> 发表，共 <?php echo count_words($post->post_content); ?>字</p>
                        <a><strong>转载请注明:</strong><?php the_title();?>-<?php bloginfo('name');?></a>
                    </div>
                </div>
				<?php endwhile; ?>
                <!-- 上下篇 -->
                <section class="card">
                    <div class="prev-article fl">
                        <strong><a href=""><上一篇</a></strong><br>
                        <a href="<?php previous_post_link('%link') ?>"></a>
                    </div>

                    <div class="next-article">
                        <strong><a href="">下一篇></a></strong><br>
                        <a href="<?php next_post_link('%link') ?>"></a>
                    </div>
                </section>
				
                <!-- 推荐文章 -->
                <div class="recommend card">
                    <!-- 有图 -->
                    <div class="pic-article">
                    	<?php query_posts('posts_per_page=4&caller_get_posts=1&orderby=comment_count'); ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="box">
                            <a class="pic" href=""><img src="<?php echo catch_first_image() ?>" alt=""></a>
                            <a class="title"><?php the_title(); ?></a>
                        </div>
                        <?php endwhile; ?>
                        </div>
                    </div>
                    <!-- 相关文章 -->
                    <?php query_posts('posts_per_page=5&caller_get_posts=1&orderby=comment_count'); ?>
                        
                    <div class="list-article card">
                        <p class="title">相关文章</p>
                        <?php while (have_posts()) : the_post(); ?>
                        <a href=""> <?php the_title(); ?></a>  
                    <?php endwhile; ?>
                    </div>
                    <!-- 热门文章 -->

                    <div class="list-article card">
                        <p class="title">热门文章</p>
                        <?php query_posts('posts_per_page=5&caller_get_posts=1&orderby=comment_count'); ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <a href=""> <?php the_title(); ?></a>
                        <?php endwhile; ?>
                    </div>
	                    <!-- 评论 -->
	                <div class="comment card">
	                    <!-- 文字编辑区域 -->
	                    <div>
	                        <input type="text">
	                        <div class="text-edit">
	                            <a class="biaoqing" href=""><i class="iconfont icon-biaoqing2"></i>添加表情</a>
	                            <a href="" class="comment-btn fr">评论</a>
	                        </div>
	                    </div>

	                    <!-- 评论展示区 -->
	                    <div class="box">
	                        <!-- 全部评论 -->
	                        <p class="title"><span>全部评论</span><a href="">99</a></p>
	                        <!-- 评论信息 -->
	                        <div class="comment-info">
	                            <!-- 评论者 -->
	                            <div class="people">
	                                <a class="pic" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/author.jpg" alt=""></a>
	                                <div class="box">
	                                    <strong class="name">功夫熊猫</strong>
	                                    <span class="time">30分钟前</span><br>
	                                    <span class="content">向大佬递茶</span>
	                                </div>
	                            </div>
	                            <!-- 回复者 -->
	                            <div class="reply-no"></div>
	                            <div class="reply">
	                                <div class="name">猿梦</div>
	                                <div class="content">没什么，就是随便做做</div>
	                            </div>
	                            <!-- 小组件 -->
	                            <div class="module fr">
	                                <span><i class="iconfont icon-pinglun"></i></span>
	                                <span><i class="iconfont icon-zan1"></i>666</span>
	                            </div>

	                        </div>
	                    </div>

	                    <!-- 更多评论 -->
	                    <div class="more">
	                        <a class="" href="">查看更多评论</a>
	                    </div>

	                </div>
                </div>   
                <!-- 引入侧栏 -->
           		<?php get_sidebar() ?>
            </div>
			
            

        </div>
        
    </div>
    <!-- 页面主体END -->

<!-- 引入页脚 -->   
<?php get_footer() ?>