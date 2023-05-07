<?php get_header(); ?>

<div class="container">
    <div class="content">
        <?php
            if(have_posts()){
                while(have_posts()){
                   
                    the_post();

                    get_template_part( 'template-parts/content', 'archive' ); 
                }
            }
        ?>
    </div>

</div>

<style>
.container{
    height: 100%;
    padding: 10px 100px;
    margin: 0px 258px;
    background-color: #fff;
}

</style>

<?php get_footer(); ?>

