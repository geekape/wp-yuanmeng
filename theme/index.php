<!-- 引入页头 -->   
<?php get_header() ?>

    <!-- 轮播 -->

    <div id="slider">
        <ul id="big-pic">
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/slide (1).jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/slide (2).jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/slide (3).jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/slide (4).jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/slide (5).jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/slide (6).jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/slide (7).jpg" alt=""></a></li>
        </ul>
        <ul id="small-pic" class="small-pic">
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/slide (2).jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/slide (3).jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/slide (4).jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/slide (5).jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/slide (6).jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/slide (7).jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/slide (1).jpg" alt=""></a></li>
        </ul>
        <a id="prev"><i class="iconfont icon-icon"></i></a>
        <a id="next"><i class="iconfont icon-icon1"></i></a>
    </div>

    <!-- 主体 -->
    <div class="main">
        <div class="container">
            <!-- 主要内容 --> 
            <div class="left-box">
                <!-- 文章列表 -->
                
                <?php if (have_posts()) : ?>           
                <!--检查是否有文章如果有，继续执行，没有就跳到  else 那里-->   
                    <?php  while (have_posts()) : the_post(); ?>   
                    <!--开始准备文章内容，开始循环，每次循环输出一篇文章-->   
                     
                     <div class="card active">
                        <!-- 作者 -->
                        <div class="author">
                            <a href="#" class="pic"><img src="<?php echo get_template_directory_uri(); ?>/img/author.jpg" alt=""></a>
                            <a href="#" class="name"><?php the_author_nickname(); ?></a>
                            <span><i class="iconfont icon-shijian"></i><?php the_date('Y-m-d H:i l'); ?></span>
                        </div>
                        <!-- 文章内容 -->
                        <div class="content">
                            <div class="box">
                                <a href="<?php the_permalink() ?>"><?php the_title();?></a>
                                <!-- 调用文章摘要 -->
                                <?php the_excerpt(); ?>
                            </div>
                            <a class="pic" href="#"><img class="" src="<?php echo catch_first_image() ?>" alt=""></a>
                            
                        </div>
                        <!-- 文章组件 -->
                        <div class="module">
                            <a class="btn" href="<?php
                            $category = get_the_category();
                            if($category[0]){
                            echo ''.get_category_link($category[0]->term_id ).'';
                            }
                            ?>">
                                <?php
                                $category = get_the_category();
                                echo $category[0]->cat_name;
                                ?>
                            </a>
                            <span><i class="iconfont icon-kanguo"></i>0</span>
                            <span><i class="iconfont icon-pinglun"></i><?php comments_number() ?></span>
                            <span><i class="iconfont icon-zan"></i>0</span>
                        </div>
                    </div>
                    <?php  endwhile ; ?>         <!-- while 循环结束-->   
                <?php  else : ?>   
                    echo '404';  
                <?php  endif ; ?>        <!-- if 结束-->  
                
                   
                <!-- 加载更多 -->
                <div class="card load-more">
                    <a class="" href="#">加载更多</a>
                </div>
            </div>
            <!-- 引入侧栏 -->
            <?php get_sidebar() ?>

        </div>
        
    </div>
    
    <!-- 主体END -->
    
<!-- 引入页脚 -->   
<?php get_footer() ?>