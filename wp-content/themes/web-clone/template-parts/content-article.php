<div class="container-article">
    <div class="article-created">
        <span class="date">🕐Đăng vào <?php the_date(); ?>,</span>
        Tags: <?php the_tags( ' <span class="tag">🔖', '</span><span class="tag">🔖','</span>' ); ?>,
        <!-- <span class="tag">🔖category</span> -->
        Bình luận: <span class="tag">📜<?php comments_number();?></span>
    </div>

    <!-- hiển thị nội dung bài viết 👇 -->
    <?php 
        the_content();
    ?> 

    <!-- hiển thị bình luận 👇 -->
    <?php comments_template(); ?> 
    
</div>

<style>
    .tag{
        background-color: #6d6a6a76;
        margin-left: 2px;
        border-radius: 5px;
        padding:2px 3px;
    }

    .tag a{
        text-decoration: none;
        color:gray;
    }

    .tag:hover{
        background-color: #6d6a6a50;
    }

    .comment .byuser{
        margin-left: 47px;
    }
</style>