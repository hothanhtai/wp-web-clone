<?php get_header(); ?>

<div class="container">
    <div class="content">
        <?php
            if(have_posts()){
                while(have_posts()){
                    $title = the_title();
                   
                    the_post();

                    get_template_part( 'template-parts/content', 'article' ); 
                }
            }
        ?>
    </div>

</div>

<style>
.container{
    height: 500px;
    padding: 10px 100px;
    margin: 0px 258px;
    background-color: #fff;
}

</style>

<?php get_footer(); ?>

