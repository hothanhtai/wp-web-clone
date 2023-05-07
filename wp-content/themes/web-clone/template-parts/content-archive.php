<div class="container-archive">
    <div class="content-archive">
        <div class="thumbnail-post">
            <img class="image-post" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">
        </div>
        <div class="wrap-title">
            <div class="title"> 
                <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a> </h3>
            </div>

            <div class="date">
                <span>Đăng vào <?php the_date(); ?>, </span>
                <span class="archive-comment"> 📜Bình luận: <?php comments_number();?></span>
            </div>

            <div class="post-detail">
                <?php 
                    the_excerpt();
                ?> 
                <a class="link-read-more" href="<?php the_permalink(); ?>">Đọc thêm...</a>
            </div>
        </div>
    </div>
    <!-- hiển thị nội dung bài viết 👇 -->
   

    
</div>

<style>

    .content-archive{
        display: flex;
    }

    .content-archive .thumbnail-post .image-post{
        width: 324px;
        height: 180px;
    }

    .content-archive .wrap-title{
        margin-left: 5px;
    }

    .date .archive-comment{
        padding: 2px;
        border-radius: 3px;
        background-color: #6d6a6a76;
    }

    .title h3{
        text-align:left;
    }

    .title h3 a{
        text-decoration:none;
        color:black;
    }

    .title h3 a:hover{
        color : red;
    }

    .date span{
        opacity: 0.6;
    }

    .post-detail .link-read-more{
        text-decoration: none;
    }


</style>

